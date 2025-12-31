# Catchway - Blockchain, Web & App Development

Modern, SEO-friendly website for Catchway - a technology company specializing in blockchain solutions, web development, and mobile app development.

## Features

- **Pure HTML/CSS/JS** - No build process required
- **SEO Optimized** - Comprehensive meta tags and semantic HTML
- **Responsive Design** - Mobile-first approach
- **Modern UI** - Purple/blue gradient color scheme with glassmorphism effects
- **Fast Loading** - Optimized for performance
- **Vercel Ready** - Configured for instant deployment

## Pages

- **Home** (`index.html`) - Hero section with services overview and contact form
- **Web Development** (`web-development.html`) - Web development services and technologies
- **App Development** (`app-development.html`) - Mobile app development services
- **Blockchain Services** (`blockchain-services.html`) - Blockchain and Web3 solutions
- **About Us** (`about.html`) - Company information and values
- **Contact** (`contact.html`) - Contact form and information

## Technologies Used

- HTML5
- CSS3 (with modern features like backdrop-filter, gradients, animations)
- Vanilla JavaScript
- Font Awesome Icons

## Deployment

### Vercel (Recommended)

1. Push your code to GitHub
2. Import the repository in Vercel
3. Deploy automatically - no configuration needed!

The site is configured with `vercel.json` for static HTML hosting.

### Other Static Hosts

This site can be deployed to any static hosting service:
- Netlify
- GitHub Pages
- Cloudflare Pages
- AWS S3 + CloudFront
- Firebase Hosting

Simply upload all files to your hosting provider.

## Local Development

No build process is required. Simply open `index.html` in your browser or use a local server:

```bash
# Using Python
python -m http.server 8000

# Using Node.js http-server
npx http-server

# Using PHP
php -S localhost:8000
```

Then visit `http://localhost:8000`

## Customization

### Colors

Edit the CSS variables in `styles.css`:

```css
:root {
    --primary-purple: #6B46C1;
    --primary-blue: #4F46E5;
    --accent-cyan: #06B6D4;
    /* ... */
}
```

### Content

All content is in the HTML files. Edit directly to update text, add services, or modify sections.

### Logo

Replace `/assets/logo.svg` with your own logo file.

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## License

Copyright © 2024 Catchway. All rights reserved.

## Contact

For inquiries: info@catchway.com
