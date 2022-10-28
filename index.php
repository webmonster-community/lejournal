<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/pimentcss.min.css">
    <title>Le journal de Webmonster Community</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png">
    <link rel="manifest" href="/assets/icons/site.webmanifest">
    <style>
        html {
            color: #2e2e2e;
            font-size: 100%;
            box-sizing: inherit;
            scroll-behavior: smooth;
            height: -webkit-fill-available;
        }
        .font-light {font-weight: 400;}
        .font-bold {font-weight: 700;}
        dd {font-weight: 400;}
        address {display: block;font-style: normal;font-size: x-large;}
        a {text-decoration: none;}
        a:hover {text-decoration: underline;}
        #burger-menu {
            position: fixed;
            right: 1rem;
            cursor: pointer;
            height: 27px;
            width: 27px;
            margin: 30px;
            overflow: visible;
            z-index:2;
        }
        #burger-menu span,
        #burger-menu span:before,
        #burger-menu span:after {
            background: #e9473e;
            display: block;
            height: 4px;
            opacity: 1;
            position: absolute;
            transition: 0.3s ease-in-out;
        }
        #burger-menu span:before,
        #burger-menu span:after {
            content: "";
        }
        #burger-menu span {
            right: 0;
            top: 13px;
            width: 27px;
        }
        #burger-menu span:before {
            left: 0;
            top: -10px;
            width: 16px;
        }
        #burger-menu span:after {
            left: 0;
            top: 10px;
            width: 20px;
        }
        #burger-menu.close span {
            transform: rotate(-45deg);
            top: 13px;
            width: 27px;
        }
        #burger-menu.close span:before {
            top: 0;
            transform: rotate(90deg);
            width: 27px;
        }
        #burger-menu.close span:after {
            top: 0;
            left:0;
            transform: rotate(90deg);
            opacity:0;
            width:0;
        }
        #menu{
            z-index:1;
            min-width:100%;
            min-height:100%;
            position: fixed;
            top:0;
            height:0;
            visibility: hidden;
            opacity: 0;
            text-align:center;
            padding-top:0;
            transition: all 0.3s ease-in-out;
        }
        #menu.overlay{
            visibility: visible;
            opacity: 1;
            background:rgba(255,255,255,0.5);
        }
        nav {
            position: fixed;
            display: flex;
            flex-flow: column;
            padding: 4rem 2rem;
            background-color: white;
            min-width: 100%;
            height: 100vh;
            overflow: hidden;
        }
        nav a {
            font-size: clamp(1.8rem, 1rem + 1vw, 2.2rem);
            margin-right: 1rem;
        }
        .block {
            margin-top: 2rem;
            background: #fff;
            padding: 28px;
            border-radius: 2px;
            background-clip: padding-box;
            box-shadow: 0 1.6px 3.6px 0 rgba(0,0,0,.132), 0 0.3px 0.9px 0 rgba(0,0,0,.108);
            position: relative;
            opacity: 1;
            transition: opacity .3s cubic-bezier(.1,.9,.2,1) 50ms,-webkit-transform .3s cubic-bezier(.1,.9,.2,1);
            transition: transform .3s cubic-bezier(.1,.9,.2,1),opacity .3s cubic-bezier(.1,.9,.2,1) 50ms;
            transition: transform .3s cubic-bezier(.1,.9,.2,1),opacity .3s cubic-bezier(.1,.9,.2,1) 50ms,-webkit-transform .3s cubic-bezier(.1,.9,.2,1);
        }
        .block:hover, .block:focus {
            box-shadow: 0 1.6px 10px 0 rgba(0,0,0,.132), 0 0.3px 0.9px 0 rgba(0,0,0,.108);
        }
        select.select {
            border-top: 0;
            border-left: 0;
            border-right: 0;
            font-size: 2.2652rem;
        }
    </style>
</head>
<body>
<header class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="logo mt-4">
                <a href="/">
                    <svg width="90" height="90" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 97.7 108.6" style="enable-background:new 0 0 97.7 108.6;" xml:space="preserve">
                        <path fill="#1211f5" d="M89.5,5.9c0,2.4,0,4.6,0,6.8c0,0.3-0.5,0.8-0.9,0.9c-0.5,0.2-1,0.1-1.6,0.1c-21.1,0-42.1,0-63.2,0
                        c-0.9,0-1.9,0-2.8,0.1c-2.2,0.3-3.7,2-3.6,4.2c0.1,2.2,1.6,3.9,3.8,4.1c0.6,0.1,1.1,0,1.7,0c21.5,0,43,0,64.5,0c0.7,0,1.3,0,2.1,0
                        c0,27.4,0,54.6,0,82c-0.6,0-1.1,0-1.7,0c-22.5,0-45.1,0-67.6,0c-7.3,0-12.6-5.4-12.7-12.7c0-24.4,0-48.7,0-73.1
                        c0-7.3,5.1-12.6,12.3-12.6c22.8-0.1,45.6,0,68.4,0C88.6,5.8,88.9,5.8,89.5,5.9z M70.3,53.5c0-2.3,0-4.6,0-6.9c0-2.9,0-2.9-2.7-3.9
                        c-4.4-1.7-9-2.3-13.6-2.7c-8.4-0.6-16.4,0.4-23.7,4.9C16.6,53.1,14.5,70.3,25.9,81c5.5,5.1,12.2,7.3,19.6,7.6
                        c6.6,0.2,12.7-1.4,17.7-5.9c1.8-1.6,3.2-3.8,4.8-5.7c0,2.9,0,5.8,0,8.8c0,0.5,0.4,1.3,0.6,1.3c2.5,0.1,5,0.1,7.5,0.1
                        c0-8.8,0-17.2,0-25.8c-6.7,0-13.4,0-20,0c0,2.6,0,5,0,7.7c4,0,7.9,0,11.9,0c-0.1,0.7-0.1,1.3-0.3,1.8c-1.1,3.9-4.1,6.1-7.5,7.7
                        c-4.8,2.2-9.9,2.6-15,2.1c-4.4-0.4-8.6-1.8-12.1-4.6c-4.7-3.8-7-8.7-5.6-14.8c1.2-5.2,4.8-8.7,9.6-10.7
                        C48.4,45.6,59.4,47.2,70.3,53.5z"/>
                    </svg></a>
                <h1 class="text-blue">Le journal de Webmonster</h1>
            </div>
            <p>Webmonster Community vous propose de découvrir son histoire pas à pas.</p>
        </div>
    </div>
</header>
<main class="container">
    <div class="row gap-2">
        <div class="col-xs-12">
            <h2 class="text-dark font-light">Création</h2>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="block p-2">
                <h3 class="card-title">Martinique</h3>
                <div class="card-body">
                    <p>dimanche 29 mai 2022</p>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="container mb-4 mt-4">
    <div class="row">
        <section class="col-sm-12 text-center">
            <svg width="50" height="50" id="logo-techmonster" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                    <path id="face" fill="#0f0ff5" class="st0" d="M50,3.3C24.2,3.3,3.3,24.2,3.3,50S24.2,96.7,50,96.7S96.7,75.8,96.7,50S75.8,3.3,50,3.3z M56.1,26.3
                    c4.2,0,7.7,3.4,7.7,7.7s-3.4,7.7-7.7,7.7c-4.2,0-7.7-3.4-7.7-7.7S51.8,26.3,56.1,26.3z M40.2,29.5c2.8,0,5.1,2.3,5.1,5.1
                    s-2.3,5.1-5.1,5.1s-5.1-2.3-5.1-5.1C35.2,31.8,37.4,29.5,40.2,29.5z M74.7,58.3c-0.2,0.8-0.5,1.5-0.9,2.3c-2.3,5.2-5.2,8.4-8.5,10.3
                    c-1.1,0.6-2.2,1.1-3.3,1.5c-3.6,1.2-7.6,1.4-12,1.4c-4.2,0-8.5-0.8-12.3-2.3c-1.2-0.5-2.4-1-3.5-1.6c-4.1-2.1-7.5-5.1-9.1-8.5
                    c-0.4-0.8-0.7-1.5-1-2.3c-2.4-6.6-1.8-13.2,0.4-15.8c0.9-1.1,2.7-1.2,5-0.8c1.1,0.2,2.4,0.6,3.7,1c5.1,1.5,11.4,4,16.8,3.8
                    c5.3-0.1,10.9-2.3,15.2-3.4c1.3-0.3,2.6-0.6,3.6-0.7c0.6,0,1.2,0,1.7,0.1C74.1,44.4,77,50.8,74.7,58.3z"/>
                <circle id="oeil-gauche" class="st0" cx="42.2" cy="35" r="2"/>
                <circle id="oeil-droit" class="st0" cx="52.7" cy="35" r="2.9"/>
                </svg><br>
            <p>Version <span class="text-success font-bold">1.0.0</span><br>
                Tous droits réservés &copy; 2022 <a class="text-blue text-hover-dark" href="https://webmonster.tech/" target="_blank" rel="noopener nofollow">Webmonster Community</a><br>
                <small>Made with <a class="text-blue text-hover-dark" href="https://github.com/WebmonsterA/Piment-Css" target="_blank" rel="noopener nofollow">Piment CSS</a></small>
            </p>
        </section>
    </div>
</footer>
</body>
</html>