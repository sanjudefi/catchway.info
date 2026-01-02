#!/usr/bin/env python3
"""
PHP to Static HTML Converter for Catchway Website
Converts all PHP files to static HTML by:
1. Reading each PHP file
2. Inlining PHP includes
3. Removing PHP tags
4. Fixing paths
5. Replacing form handlers with static alternatives
"""

import os
import re
import sys
from pathlib import Path

SOURCE_DIR = "catchway-website"
OUTPUT_DIR = "."  # Output to root for Vercel deployment

# Track included files to avoid duplication
included_files = {}

def read_php_file(filepath):
    """Read PHP file content"""
    try:
        with open(filepath, 'r', encoding='utf-8', errors='ignore') as f:
            return f.read()
    except Exception as e:
        print(f"Error reading {filepath}: {e}")
        return ""

def resolve_include(include_path, current_dir):
    """Resolve PHP include path"""
    # Try relative to source directory first
    possible_paths = [
        os.path.join(SOURCE_DIR, include_path),
        os.path.join(current_dir, include_path),
        include_path
    ]

    for path in possible_paths:
        if os.path.exists(path):
            return path
    return None

def inline_includes(content, source_file):
    """Inline all PHP includes recursively"""
    current_dir = os.path.dirname(source_file)

    # Match PHP include patterns
    include_pattern = r'<\?php\s+(?:\$\w+\s*=\s*["\']?\w+["\']?;\s*)?include\(["\']([^"\']+)["\']\);\s*\?>'

    def replace_include(match):
        include_file = match.group(1)
        resolved_path = resolve_include(include_file, current_dir)

        if resolved_path and os.path.exists(resolved_path):
            # Avoid circular includes
            if resolved_path in included_files:
                return f"<!-- Already included: {include_file} -->"

            included_files[resolved_path] = True
            include_content = read_php_file(resolved_path)

            # Recursively inline includes in the included file
            return inline_includes(include_content, resolved_path)
        else:
            return f"<!-- Include not found: {include_file} -->"

    return re.sub(include_pattern, replace_include, content, flags=re.MULTILINE)

def remove_php_tags(content):
    """Remove remaining PHP tags"""
    # Remove PHP opening/closing tags
    content = re.sub(r'<\?php\s+\?>', '', content)
    content = re.sub(r'<\?php.*?\?>', '', content, flags=re.DOTALL)

    # Remove any standalone PHP tags
    content = re.sub(r'<\?php', '', content)
    content = re.sub(r'\?>', '', content)

    return content

def fix_telegram_form(content):
    """Replace Telegram form with Formspree alternative"""
    # Replace the showHint function with Formspree submission
    formspree_form = '''
    <form action="https://formspree.io/f/YOUR_FORM_ID" method="POST">
        <div class="row">
            <div class="col-12 col-sm-6 form-group wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                <input type="text" class="form-control" name="name" required placeholder="Your Name">
            </div>
            <div class="col-12 col-sm-6 form-group wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                <input type="text" class="form-control" name="phone" required placeholder="Mobile">
            </div>
            <div class="col-12 col-sm-12 form-group wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">
                <input type="email" class="form-control" name="email" required placeholder="E-mail Address">
            </div>
            <div class="col-12 col-sm-12 form-group">
                <div class="submit-btn wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
                    <button type="submit" class="btn btn-primary col-sm-12">
                        Submit
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </form>
    '''

    # Replace old form with Formspree form
    content = re.sub(
        r'<form action="Javascript:showHint\(\);".*?</form>',
        formspree_form,
        content,
        flags=re.DOTALL
    )

    # Remove Telegram-related hidden inputs and scripts
    content = re.sub(r'<input type="hidden" id="chatid".*?>', '', content)
    content = re.sub(r'<input type="hidden" id="token".*?>', '', content)
    content = re.sub(r'function showHint\(\).*?</script>', '</script>', content, flags=re.DOTALL)

    return content

def fix_asset_paths(content, depth=0):
    """Fix relative paths for assets"""
    # Images - already in images/ folder
    # CSS - already in css/ folder
    # JS - already in js/ folder
    # No changes needed for root-level deployment
    return content

def add_html_structure(content, filename):
    """Ensure proper HTML structure if missing"""
    # Check if content has <!doctype html> or <html>
    if not re.search(r'<!doctype html|<html', content, re.IGNORECASE):
        # This is a fragment, wrap it in basic HTML
        title = filename.replace('-', ' ').replace('.html', '').title()
        content = f'''<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{title} - Catchway</title>
    <link rel="icon" href="images/favicon.png" type="image/png">
</head>
<body>
{content}
</body>
</html>'''

    return content

def convert_php_to_html(source_file, output_file):
    """Main conversion function"""
    global included_files
    included_files = {}  # Reset for each file

    print(f"Converting: {source_file} -> {output_file}")

    # Read source file
    content = read_php_file(source_file)
    if not content:
        return False

    # Step 1: Inline PHP includes
    content = inline_includes(content, source_file)

    # Step 2: Remove PHP tags
    content = remove_php_tags(content)

    # Step 3: Fix Telegram form to Formspree
    content = fix_telegram_form(content)

    # Step 4: Fix asset paths
    content = fix_asset_paths(content)

    # Step 5: Ensure HTML structure
    filename = os.path.basename(output_file)
    content = add_html_structure(content, filename)

    # Step 6: Clean up multiple blank lines
    content = re.sub(r'\n{3,}', '\n\n', content)

    # Write output
    try:
        os.makedirs(os.path.dirname(output_file) or '.', exist_ok=True)
        with open(output_file, 'w', encoding='utf-8') as f:
            f.write(content)
        return True
    except Exception as e:
        print(f"Error writing {output_file}: {e}")
        return False

def main():
    """Main conversion process"""
    print(f"Converting PHP files from {SOURCE_DIR} to static HTML...")
    print(f"Output directory: {OUTPUT_DIR}")
    print("-" * 60)

    # Find all PHP files
    php_files = list(Path(SOURCE_DIR).rglob("*.php"))

    # Skip include-only files (will be inlined)
    skip_files = {
        'header-home.php', 'header-inner.php', 'footer.php',
        'banner-social.php', 'contact-form.php',
        'seo-header.php', 'seo-footer.php', 'seo-css.php', 'seo-js.php',
        'api.php', 'submit.php', 'form.php', 'image.php'
    }

    converted = 0
    failed = 0

    for php_file in php_files:
        filename = php_file.name

        # Skip include files
        if filename in skip_files:
            print(f"Skipping include file: {filename}")
            continue

        # Determine output path
        relative_path = php_file.relative_to(SOURCE_DIR)
        output_path = Path(OUTPUT_DIR) / relative_path.with_suffix('.html')

        # Convert
        if convert_php_to_html(str(php_file), str(output_path)):
            converted += 1
        else:
            failed += 1

    print("-" * 60)
    print(f"\nConversion complete!")
    print(f"Converted: {converted} files")
    print(f"Failed: {failed} files")
    print(f"Skipped: {len(skip_files)} include files")

    return converted > 0

if __name__ == "__main__":
    success = main()
    sys.exit(0 if success else 1)
