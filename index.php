<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/piment.min.css">
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
                <h1 class="text-blue">Guides du·de la développeur·euse</h1>
            </div>
            <p>Webmonster Community vous propose le <strong>guide du·de la développeur·euse</strong> en Martinique.</p>
        </div>
    </div>
</header>
<main class="container">