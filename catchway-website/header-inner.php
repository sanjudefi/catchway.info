<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Blockchain Development">
    <meta name="keywords" content="Blockchain Development Company : Enterprise Services and Solutions Provider.">
    <meta name="author" content="Catchway">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catchway Blockchain Development</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- Goole Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/assets/bootstrap.min.css">
    <link rel="stylesheet" href="css/assets/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="css/assets/magnific-popup.css">
    <link rel="stylesheet" href="css/assets/jquery.countdown.css"> 
    <link rel="stylesheet" href="css/assets/animate.css">
    <link rel="stylesheet" href="css/assets/owl.carousel.css">
    <link rel="stylesheet" href="css/assets/owl.theme.css">
    <!-- preloader css-->    
    <link rel="stylesheet" href="css/assets/preloader.css">
    <!-- main style-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cryptonio.css">
    <link rel="stylesheet" href="css/responsive.css">
                            
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
<script>
function showPath() {
   // alert("hi");
const queryString = window.location.href;

const urlParams = new URLSearchParams(queryString);

var gclid = queryString;
//alert(gclid);
console.log(gclid);

localStorage.setItem('gid', gclid);

var ggid = localStorage.getItem('gid');
 document.getElementById("ggid").value=localStorage.getItem('gid');
}
</script>

<script>


    function showHint() {
          chat_id = document.getElementById("chatid").value;
         // alert(chat_id);
       var a = document.getElementById('fname').value;
      // alert(a);
       var b = document.getElementById('mnumber').value;
      // alert(b)
       var c = document.getElementById('email').value;
     //  alert(c);
       //var d = document.getElementById('lfor').value;
      // var e = document.getElementById('msg').value;
      token = document.getElementById("token").value;
    //  alert(token);
    //info = document.getElementById("info").innerHTML;
     var g = document.getElementById('ggid').value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
              
     
      $.get("https://api.telegram.org/bot"+token+"/sendMessage?text="+a+" \n Email: "+c+" Mobile: "+b+"Service: "+g+"&chat_id="+chat_id);
  
    // alert("success");
     document.getElementById('success').innerHTML="<div class='alert alert-success' role='alert'><center>We received your message and you'll hear from us soon. Thank You!</center></div>";
     
     
                   document.getElementById("email").value=''; 
                   document.getElementById("mnumber").value='';
                   document.getElementById("fname").value='';
              
        
                    
                }
                
            };
    xmlhttp.open("GET", "https://www.catchway.com", true);
            xmlhttp.send();
        
    }
    </script>
    
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        var chat_id = document.getElementById("chatida").value;
        var token = document.getElementById("tokena").value;
        var g = localStorage.getItem('gid');
        function getloc() {
            $.getJSON("https://ipinfo.io", function (data) {
                var info = "City: " + data.city + ", \n County: " + data.country + ",\n IP: " + data.ip + ", \nLocation: " + data.loc + ", \n Organisation: " + data.org + ",  \n Postal Code: " + data.postal + ",\n Region: " + data.region;

                var lat = lat;
                var long = long;

                var message = "Location:\n " + info + "\n URL: " + g;

                sendTelegramMessage(chat_id, token, message);
            });
        }

        function sendTelegramMessage(chatId, botToken, message) {
            var url = "https://api.telegram.org/bot" + botToken + "/sendMessage";

            $.ajax({
                url: url,
                method: "POST",
                data: {
                    chat_id: chatId,
                    text: message
                },
                success: function (response) {
                    console.log("Message sent successfully!");
                },
                error: function (error) {
                    console.error("Error sending message:", error);
                }
            });
        }

        getloc();
    });
</script>
</head>

<body class="body_01" onload="showPath(),sendmessagea();">

<input type="hidden" id="rlat" value="">
    <input type="hidden" id="rlong" value="">
    <p id="info" style="display:none"> DUBAI </p>
    <input type="hidden" id="chatida" value="-283612871">
    <input type="hidden" id="tokena" value="669553219:AAFwkHdnbJlpM7tjqETT68rpRyZsIFadybY">
        <input type="hidden" id="ggid" value="">
<!-- Preloader -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

<header id="header-06" class="header">
<!-- START NAVBAR -->
<nav class="navbar navbar-expand-md navbar-light bg-faded cripto_nav">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand" href="https://www.catchway.com"><img src="images/catchway block new logo.svg" class="logo-img" alt="logo"></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a data-scroll href="index" class="nav-link active">Home</a></li>
                    <li class="nav-item dropdown">
                        <a data-scroll href="#" class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Web Development</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="website-designing-hyderabad">Website Designing</a>
                            <a class="dropdown-item" href="responsive-website-designing">Responsive Website Designing</a>
                            <a class="dropdown-item" href="landing-page-designing">Landing Page Designing</a>
                            <a class="dropdown-item" href="ecommerce-development">Ecommerce Development</a>
                        </div>
                    </li>
                    <li class="nav-item"><a data-scroll href="mobile-app-development" class="nav-link">App Development</a></li>
                    <li class="nav-item dropdown">
                        <a data-scroll href="#" class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blockchain Services</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="service-cryptocurrency-solutions">Cryptocurrency Solutions </a>
                            <a class="dropdown-item" href="service-ico-coin-development">ICO Coin Development</a>
                            <a class="dropdown-item" href="service-sto-development-service">STO Coin Development</a>
                            <a class="dropdown-item" href="service-erc-20-token-development">ERC20 Token Development</a>
                            <a class="dropdown-item" href="service-crypto-exchange-development">Crypto Exchange Development</a>
                            <a class="dropdown-item" href="service-bep-20-token-development">BEP20 Token Development</a>
                            <a class="dropdown-item" href="service-nft-token-development">NFT Token Development</a>
                            <a class="dropdown-item" href="service-tron-token-development">Tron Token Development</a>
                            <a class="dropdown-item" href="service-r3-corda-blockchain-development">R3 Corda Blockchain Development</a>
                            <a class="dropdown-item" href="service-cardano-blockchain-development">Cardano Blockchain Development</a>
                            <a class="dropdown-item" href="#">Dashboard</a>
                        </div>
                    </li>
                    <!--li class="nav-item">
                        <a data-scroll href="products" class="nav-link">Products</a>
                    </li-->
                    <li class="nav-item"><a data-scroll href="#about_cryptonic_01" class="nav-link">About Us</a></li>
                    <!--<li class="nav-item">-->
                    <!--    <a data-scroll href="#" class="nav-link">Enterprise</a>-->
                    <!--</li>-->
                    <!--<li class="nav-item">-->
                    <!--    <a data-scroll href="industries" class="nav-link">Industries</a>-->
                    <!--</li>-->
                    <!--<li class="nav-item dropdown">-->
                    <!--    <a data-scroll href="#" class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">NFT</a>-->
                    <!--    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">-->
                    <!--        <a class="dropdown-item" href="service-nft-token-development">NFT Token Development</a>-->
                    <!--        <a class="dropdown-item" href="#">NFT Marketplace Development</a>-->
                    <!--        <a class="dropdown-item" href="#">NFT Gaming Platform Development</a>-->
                    <!--    </div>-->
                    <!--</li>-->
                    <li class="nav-item">
                        <a data-scroll href="contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
            <!--div class="language">
                <a href="#" class="token active">Sign Up</a>
                <a href="#" class="token">Login</a>
            </div-->
        </div>
    </nav><!-- END NAVBAR -->
</header>