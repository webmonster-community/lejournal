<?php
function dateToFrench($date, $format)
{
    $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
    $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
    return str_replace($english_months, $french_months, str_replace($english_days, $french_days, date($format, strtotime($date))));
}

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/pimentcss.min.css">
    <title>Le journal de Webmonster Community</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
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

        .font-light {
            font-weight: 400;
        }

        .font-bold {
            font-weight: 700;
        }

        dd {
            font-weight: 400;
        }

        address {
            display: block;
            font-style: normal;
            font-size: x-large;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        #burger-menu {
            position: fixed;
            right: 1rem;
            cursor: pointer;
            height: 27px;
            width: 27px;
            margin: 30px;
            overflow: visible;
            z-index: 2;
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
            left: 0;
            transform: rotate(90deg);
            opacity: 0;
            width: 0;
        }

        #menu {
            z-index: 1;
            min-width: 100%;
            min-height: 100%;
            position: fixed;
            top: 0;
            height: 0;
            visibility: hidden;
            opacity: 0;
            text-align: center;
            padding-top: 0;
            transition: all 0.3s ease-in-out;
        }

        #menu.overlay {
            visibility: visible;
            opacity: 1;
            background: rgba(255, 255, 255, 0.5);
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
            box-shadow: 0 1.6px 3.6px 0 rgba(0, 0, 0, .132), 0 0.3px 0.9px 0 rgba(0, 0, 0, .108);
            position: relative;
            opacity: 1;
            transition: opacity .3s cubic-bezier(.1, .9, .2, 1) 50ms, -webkit-transform .3s cubic-bezier(.1, .9, .2, 1);
            transition: transform .3s cubic-bezier(.1, .9, .2, 1), opacity .3s cubic-bezier(.1, .9, .2, 1) 50ms;
            transition: transform .3s cubic-bezier(.1, .9, .2, 1), opacity .3s cubic-bezier(.1, .9, .2, 1) 50ms, -webkit-transform .3s cubic-bezier(.1, .9, .2, 1);
        }

        .block:hover, .block:focus {
            box-shadow: 0 1.6px 10px 0 rgba(0, 0, 0, .132), 0 0.3px 0.9px 0 rgba(0, 0, 0, .108);
        }

        select.select {
            border-top: 0;
            border-left: 0;
            border-right: 0;
            font-size: 2.2652rem;
        }

        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: #0f0ff5;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }

        .container-timeline {
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
        }

        .container-timeline::after {
            content: '';
            position: absolute;
            width: 30px;
            height: 30px;
            right: 5px;
            background-color: #0f0ff5;
            border: 4px solid #0f0ff5;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }

        .left {
            left: 20px;
        }

        .right {
            left: 50%;
        }

        .left::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            right: 30px;
            border: medium solid white;
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent white;
        }

        .right::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            left: 30px;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent white transparent transparent;
        }

        .right::after {
            left: -16px;
        }

        .content {
            padding: 20px 30px;
            background-color: white;
            position: relative;
            border-radius: 6px;
            box-shadow: 0 1.6px 3.6px 0 rgba(0, 0, 0, .132), 0 0.3px 0.9px 0 rgba(0, 0, 0, .108);
            overflow: hidden;
        }

        .content .dt {
            font-size: 1rem;
            padding-bottom: .2rem;
            border-bottom: 1px solid #2632FF;
        }

        @media screen and (max-width: 600px) {
            .timeline::after {
                left: 22px;
            }

            .container-timeline {
                width: 100%;
                padding-left: 0;
                padding-right: 15px;
            }

            .container-timeline::before {
                left: 15px;
                border: medium solid white;
                border-width: 10px 10px 10px 0;
                border-color: transparent white transparent transparent;
            }

            .left::after, .right::after {
                left: -45px;
            }

            .right {
                left: 6%;
            }
        }

        ul.nostyle {
            z-index: 8;
            margin: 0;
            padding: 0;
            display: inline-flex;
            gap: 0.5rem;
            list-style: none;
            padding-bottom: .2rem;
            border-bottom: 1px solid #2632FF;
        }

        ul.nostyle > li {
            font-size: 1rem;
        }

        ul.nostyle > li:not(:last-child):after {
            content: ', ';
        }

        .shape {
            position: absolute;
            width: 70px;
        }

        .left .shape1 {
            width: 200px;
            z-index: 1;
            right: -80px;
            bottom: -70px;
        }

        .left .shape2 {
            z-index: 5;
            width: 150px;
            right: -50px;
            bottom: -10px;
        }

        .left .shape3 {
            z-index: 7;
            right: -35px;
            bottom: -30px;
        }

        .right .shape1 {
            z-index: 6;
            right: 16px;
            bottom: -40px;
            transform: rotate(0.15turn);
        }

        .right .shape2 {
            z-index: 5;
            width: 100px;
            right: -10px;
            bottom: -10px;
            transform: rotate(-0.25turn);
        }

        .right .shape3 {
            z-index: 4;
            width: 90px;
            right: -35px;
            bottom: -30px;
        }

        .bg1 {
            background-image: url("data:image/svg+xml,<svg id='patternId' width='100%' height='100%' xmlns='http://www.w3.org/2000/svg'><defs><pattern id='a' patternUnits='userSpaceOnUse' width='35.584' height='30.585' patternTransform='scale(2) rotate(0)'><rect x='0' y='0' width='100%' height='100%' fill='hsla(0,0%,100%,1)'/><path d='M36.908 9.243c-5.014 0-7.266 3.575-7.266 7.117 0 3.376 2.45 5.726 5.959 5.726 1.307 0 2.45-.463 3.244-1.307.744-.811 1.125-1.903 1.042-3.095-.066-.811-.546-1.655-1.274-2.185-.596-.447-1.639-.894-3.162-.546-.48.1-.778.58-.662 1.06.1.48.58.777 1.06.661.695-.149 1.274-.066 1.705.249.364.265.546.645.562.893.05.679-.165 1.308-.579 1.755-.446.48-1.125.744-1.936.744-2.55 0-4.188-1.538-4.188-3.938 0-2.466 1.44-5.347 5.495-5.347 2.897 0 6.008 1.888 6.388 6.058.166 1.804.067 5.147-2.598 7.034a.868.868 0 00-.142.122c-1.311.783-2.87 1.301-4.972 1.301-4.088 0-6.123-1.952-8.275-4.021-2.317-2.218-4.7-4.518-9.517-4.518-4.094 0-6.439 1.676-8.479 3.545.227-1.102.289-2.307.17-3.596-.496-5.263-4.567-7.662-8.159-7.662-5.015 0-7.265 3.574-7.265 7.116 0 3.377 2.45 5.727 5.958 5.727 1.307 0 2.449-.463 3.243-1.308.745-.81 1.126-1.903 1.043-3.095-.066-.81-.546-1.654-1.274-2.184-.596-.447-1.639-.894-3.161-.546-.48.1-.778.58-.662 1.06.099.48.579.777 1.059.66.695-.148 1.275-.065 1.705.25.364.264.546.645.563.893.05.679-.166 1.307-.58 1.754-.447.48-1.125.745-1.936.745-2.549 0-4.188-1.539-4.188-3.939 0-2.466 1.44-5.345 5.495-5.345 2.897 0 6.008 1.87 6.389 6.057.163 1.781.064 5.06-2.504 6.96-1.36.864-2.978 1.447-5.209 1.447-4.088 0-6.124-1.952-8.275-4.021-2.317-2.218-4.7-4.518-9.516-4.518v1.787c4.088 0 6.123 1.953 8.275 4.022 2.317 2.218 4.7 4.518 9.516 4.518 4.8 0 7.2-2.3 9.517-4.518 2.151-2.069 4.187-4.022 8.275-4.022s6.124 1.953 8.275 4.022c2.318 2.218 4.701 4.518 9.517 4.518 4.8 0 7.2-2.3 9.516-4.518 2.152-2.069 4.188-4.022 8.276-4.022s6.123 1.953 8.275 4.022c2.317 2.218 4.7 4.518 9.517 4.518v-1.788c-4.088 0-6.124-1.952-8.275-4.021-2.318-2.218-4.701-4.518-9.517-4.518-4.103 0-6.45 1.683-8.492 3.556.237-1.118.304-2.343.184-3.656-.497-5.263-4.568-7.663-8.16-7.663z'  stroke-width='1' stroke='none' fill='hsla(258.5,59.4%,59.4%,1)'/><path d='M23.42 41.086a.896.896 0 01-.729-.38.883.883 0 01.215-1.242c2.665-1.887 2.764-5.23 2.599-7.034-.38-4.187-3.492-6.058-6.389-6.058-4.055 0-5.495 2.88-5.495 5.346 0 2.4 1.639 3.94 4.188 3.94.81 0 1.49-.265 1.936-.745.414-.447.63-1.076.58-1.755-.017-.248-.2-.629-.547-.893-.43-.315-1.026-.398-1.704-.249a.868.868 0 01-1.06-.662.868.868 0 01.662-1.059c1.523-.348 2.566.1 3.161.546.729.53 1.209 1.374 1.275 2.185.083 1.191-.298 2.284-1.043 3.095-.794.844-1.936 1.307-3.244 1.307-3.508 0-5.958-2.35-5.958-5.726 0-3.542 2.25-7.117 7.266-7.117 3.591 0 7.663 2.4 8.16 7.663.347 3.79-.828 6.868-3.344 8.656a.824.824 0 01-.53.182zm0-30.585a.896.896 0 01-.729-.38.883.883 0 01.215-1.242c2.665-1.887 2.764-5.23 2.599-7.034-.381-4.187-3.493-6.058-6.389-6.058-4.055 0-5.495 2.88-5.495 5.346 0 2.4 1.639 3.94 4.188 3.94.81 0 1.49-.266 1.936-.746.414-.446.629-1.075.58-1.754-.017-.248-.2-.629-.547-.894-.43-.314-1.026-.397-1.705-.248A.868.868 0 0117.014.77a.868.868 0 01.662-1.06c1.523-.347 2.566.1 3.161.547.729.53 1.209 1.374 1.275 2.185.083 1.191-.298 2.284-1.043 3.095-.794.844-1.936 1.307-3.244 1.307-3.508 0-5.958-2.35-5.958-5.726 0-3.542 2.25-7.117 7.266-7.117 3.591 0 7.663 2.4 8.16 7.663.347 3.79-.828 6.868-3.344 8.656a.824.824 0 01-.53.182zm29.956 1.572c-4.8 0-7.2-2.3-9.517-4.518-2.151-2.069-4.187-4.022-8.275-4.022S29.46 5.486 27.31 7.555c-2.317 2.218-4.7 4.518-9.517 4.518-4.8 0-7.2-2.3-9.516-4.518C6.124 5.486 4.088 3.533 0 3.533s-6.124 1.953-8.275 4.022c-2.317 2.218-4.7 4.518-9.517 4.518-4.8 0-7.2-2.3-9.516-4.518-2.152-2.069-4.188-4.022-8.276-4.022V1.746c4.8 0 7.2 2.3 9.517 4.518 2.152 2.069 4.187 4.022 8.275 4.022s6.124-1.953 8.276-4.022C-7.2 4.046-4.816 1.746 0 1.746c4.8 0 7.2 2.3 9.517 4.518 2.151 2.069 4.187 4.022 8.275 4.022s6.124-1.953 8.275-4.022c2.318-2.218 4.7-4.518 9.517-4.518 4.8 0 7.2 2.3 9.517 4.518 2.151 2.069 4.187 4.022 8.275 4.022s6.124-1.953 8.275-4.022c2.317-2.218 4.7-4.518 9.517-4.518v1.787c-4.088 0-6.124 1.953-8.275 4.022-2.317 2.234-4.717 4.518-9.517 4.518z'  stroke-width='1' stroke='none' fill='hsla(339.6,82.2%,51.6%,1)'/></pattern></defs><rect width='800%' height='800%' transform='translate(0,0)' fill='url(%23a)'/></svg>")
        }
    </style>
</head>
<body>
<header class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="logo mt-4">
                <a href="/">
                    <svg width="90" height="90" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24">
                        <path d="M21.628 15.306l2.372 1.379-12.668 7.315-11.332-6.584 2.372-1.368 8.957 5.206 10.299-5.948zm-10.487-11.438l.017-.003.175.182-.017.003c-.119.023-.216.06-.302.108-.102.06-.125.119-.063.155.062.037.153.023.369-.036.302-.075.518-.069.688.03.181.105.254.3-.111.51-.148.086-.325.142-.422.158l-.017.003-.186-.181.022-.007c.131-.023.273-.072.371-.128.108-.062.137-.125.063-.168-.068-.039-.159-.033-.352.02-.302.089-.541.083-.705-.013-.22-.128-.186-.326.094-.487.119-.07.245-.116.376-.146zm.015 1.357l-.314.181-.964-.382.639.569-.319.185-1.514-.544.318-.184 1.004.405-.678-.592.308-.178.987.395-.679-.573.307-.178.905.896zm-2.326.213l-.468.27.221.128.445-.256.25.145-.445.256.255.149.496-.286.25.145-.799.461-1.224-.712.77-.444.249.144zm-.001 1.13l-.308.178-1.271-.231.833.484-.28.161-1.223-.711.342-.198 1.158.205-.754-.438.279-.161 1.224.711zm6.338-2.183l-7.6 4.389-.629-.366 7.601-4.389.628.366zm1.263.735l-1.898 1.096-.629-.365 1.899-1.097.628.366zm-1.273 2.192l-2.538 1.465-1.887-1.096 2.538-1.465 1.887 1.096zm-4.428 1.1l-1.899 1.096-.629-.366 1.899-1.096.629.366zm6.959-2.561l-1.898 1.096-.629-.366 1.899-1.096.628.366zm-5.702 3.291l-1.899 1.097-.629-.366 1.899-1.096.629.365zm8.225-3.291l-7.551-4.389-10.138 5.853 7.552 4.389 10.137-5.853zm3.789.733l-12.671 7.315-11.329-6.584 12.668-7.315 11.332 6.584zm-11.671 9.047l-1.003.58-1.001-.583-7.968-4.631-2.357 1.36 11.332 6.584 12.668-7.315-2.359-1.372-9.312 5.377z"/>
                    </svg>
                </a>
                <h1 class="text-blue text-red">Le journal de Webmonster</h1>
            </div>
            <p>Webmonster Community vous propose de découvrir son histoire pas à pas.</p>
        </div>
    </div>
</header>
<main class="container">
    <div class="row gap-2">
        <div class="col-xs-12">
            <h2 class="text-gray">
                <svg width="45" height="45" fill="#6d6d6d" id="logo-webmonster" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100"
                     style="enable-background:new 0 0 100 100;" xml:space="preserve">
                    <path id="face" class="emblem" d="M50,3.3C24.2,3.3,3.3,24.2,3.3,50S24.2,96.7,50,96.7S96.7,75.8,96.7,50S75.8,3.3,50,3.3z M56.1,26.3
                    c4.2,0,7.7,3.4,7.7,7.7s-3.4,7.7-7.7,7.7c-4.2,0-7.7-3.4-7.7-7.7S51.8,26.3,56.1,26.3z M40.2,29.5c2.8,0,5.1,2.3,5.1,5.1
                    c0,2.8-2.3,5.1-5.1,5.1c-2.8,0-5.1-2.3-5.1-5.1C35.2,31.8,37.4,29.5,40.2,29.5z M74.7,58.3c-0.2,0.8-0.5,1.5-0.9,2.3
                    c-2.3,5.2-5.2,8.4-8.5,10.3c-1.1,0.6-2.2,1.1-3.3,1.5c-3.6,1.2-7.6,1.4-12,1.4c-4.2,0-8.5-0.8-12.3-2.3c-1.2-0.5-2.4-1-3.5-1.6
                    c-4.1-2.1-7.5-5.1-9.1-8.5c-0.4-0.8-0.7-1.5-1-2.3c-2.4-6.6-1.8-13.2,0.4-15.8c0.9-1.1,2.7-1.2,5-0.8c1.1,0.2,2.4,0.6,3.7,1
                    c5.1,1.5,11.4,4,16.8,3.8c5.3-0.1,10.9-2.3,15.2-3.4c1.3-0.3,2.6-0.6,3.6-0.7c0.6,0,1.2,0,1.7,0.1C74.1,44.4,77,50.8,74.7,58.3z"></path>
                    <circle id="oeil-gauche" class="emblem" cx="42.2" cy="35" r="2"></circle>
                    <circle id="oeil-droit" class="emblem" cx="52.7" cy="35" r="2.9"></circle>
                </svg>
                Salut, monster!
            </h2>
        </div>
        <div class="col-xs-12 col-md-12">
            <?php
            $json = file_get_contents("journal-webmonster.json");
            $data = json_decode($json, true);
            if ($data){
            $x = 1;
            foreach ($data

            as $article){
            ?>
            <div class="timeline">
                <article class="p-2">
                    <div class="container-timeline <?php if ($x % 2 == 0) {
                        echo 'right';
                    } else {
                        echo 'left';
                    } ?>">
                        <div class="content block">
                            <div class="shape shape1">
                                <svg id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <pattern id='pattern1' patternUnits='userSpaceOnUse' width='25' height='5' patternTransform='scale(2) rotate(30)'>
                                            <rect x='0' y='0' width='100%' height='100%' fill='hsla(0,0%,100%,1)'/>
                                            <path d='M-.02 22c8.373 0 11.938-4.695 16.32-9.662C20.785 7.258 25.728 2 35 2c9.272 0 14.215 5.258 18.7 10.338C58.082 17.305 61.647 22 70.02 22M-.02 14.002C8.353 14 11.918 9.306 16.3 4.339 20.785-.742 25.728-6 35-6 44.272-6 49.215-.742 53.7 4.339c4.382 4.967 7.947 9.661 16.32 9.664M70 6.004c-8.373-.001-11.918-4.698-16.3-9.665C49.215-8.742 44.272-14 35-14c-9.272 0-14.215 5.258-18.7 10.339C11.918 1.306 8.353 6-.02 6.002'  stroke-width='1' stroke='hsla(240, 92%, 51%, 1)' fill='none'/>
                                        </pattern>
                                    </defs>
                                    <path style="fill: url(#pattern1);"
                                          d="M23.6,-19.8C30.2,-10.7,34.6,-0.9,32.6,7.3C30.6,15.4,22.1,21.9,13.6,24.5C5.1,27.1,-3.4,25.9,-12,22.6C-20.5,19.3,-29.2,14,-33.4,5C-37.5,-4,-37.2,-16.7,-30.9,-25.7C-24.5,-34.7,-12.3,-40.1,-1.9,-38.7C8.6,-37.2,17.1,-28.8,23.6,-19.8Z"
                                          width="100%" height="100%" transform="translate(50 50)" stroke-width="0"
                                          style="transition: all 0.3s ease 0s;">
                                    </path>
                                </svg>
                            </div>
                            <div class="shape shape2">
                                <svg id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">
                                            <stop id="stop1" stop-color="rgba(45, 134, 76, 1)" offset="0%"></stop>
                                            <stop id="stop2" stop-color="rgba(38, 50, 255, 1)" offset="100%"></stop>
                                        </linearGradient>
                                    </defs>
                                    <path fill="url(#sw-gradient)"
                                          d="M23.2,-26.1C25.5,-20.9,19.7,-10.5,18.8,-0.9C17.9,8.6,21.9,17.2,19.6,25.6C17.2,33.9,8.6,41.9,-1.1,43C-10.8,44.1,-21.6,38.3,-27.1,30C-32.6,21.6,-32.7,10.8,-27.9,4.8C-23.1,-1.2,-13.3,-2.4,-7.9,-7.6C-2.4,-12.8,-1.2,-22.1,4.6,-26.7C10.5,-31.3,20.9,-31.3,23.2,-26.1Z"
                                          width="100%" height="100%" transform="translate(50 50)" stroke-width="0"
                                          style="transition: all 0.3s ease 0s;" stroke="url(#sw-gradient)">
                                    </path>
                                </svg>
                            </div>
                            <div class="shape shape3">
                                <svg id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient id="sw-gradient2" x1="0" x2="1" y1="1" y2="0">
                                            <stop id="stop1" stop-color="rgba(234, 71, 62, 1)" offset="0%"></stop>
                                            <stop id="stop2" stop-color="rgba(234, 71, 62, 1)" offset="100%"></stop>
                                        </linearGradient>
                                    </defs>
                                    <path fill="url(#sw-gradient2)" d="M21.7,-25.2C27.3,-21.1,30.6,-13.5,33.5,-4.7C36.5,4.1,39.2,14.1,35.3,19.9C31.4,25.7,20.9,27.2,11.7,29.5C2.4,31.7,-5.7,34.7,-14.1,33.8C-22.6,32.9,-31.5,28.1,-35,20.8C-38.5,13.5,-36.6,3.7,-33.5,-4.5C-30.4,-12.6,-26,-19.2,-20.2,-23.2C-14.4,-27.3,-7.2,-29,0.4,-29.5C8,-30,16,-29.3,21.7,-25.2Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;"></path>
                                </svg>
                            </div>
                            <p class="dt text-gray text-uppercase"><?= dateToFrench($article['releaseDate'], "l d F Y à H\Hi"); ?></p>
                            <!--<a class="text-blue text-hover-red no-underline" href="/<?= $article['slug']; ?>/" title="<?= $article['title']; ?>">-->
                            <h4 class="card-title font-semibold mb-1"><?= $article['title']; ?></h4>
                            <!--</a>-->
                        <div class="card-body">
                            <p><?= $article['description']; ?></p>
                            <?php if (!empty($article['link'])) { ?>
                                <a href="<?= $article['link']; ?>" class="option-blue mb-3" target="_blank"
                                   rel="noopener nofollow">
                                    <span class="circle" aria-hidden="true"><span class="icon arrow"></span></span>
                                    <span class="button-text">Voir le site</span>
                                </a>
                            <?php } ?>
                        </div>
                        <ul class="nostyle">
                            <?php foreach ($article['subjects'] as $subjects) { ?>
                                <li><?= $subjects; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
            </div>
            </article>
        </div>
        <?php $x++;
        }
        } ?>
    </div>
    </div>
</main>
<footer class="container mb-4 mt-4">
    <div class="row">
        <section class="col-sm-12 text-center">
            <svg width="50" height="50" id="logo-techmonster" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24">
                <path d="M21.628 15.306l2.372 1.379-12.668 7.315-11.332-6.584 2.372-1.368 8.957 5.206 10.299-5.948zm-10.487-11.438l.017-.003.175.182-.017.003c-.119.023-.216.06-.302.108-.102.06-.125.119-.063.155.062.037.153.023.369-.036.302-.075.518-.069.688.03.181.105.254.3-.111.51-.148.086-.325.142-.422.158l-.017.003-.186-.181.022-.007c.131-.023.273-.072.371-.128.108-.062.137-.125.063-.168-.068-.039-.159-.033-.352.02-.302.089-.541.083-.705-.013-.22-.128-.186-.326.094-.487.119-.07.245-.116.376-.146zm.015 1.357l-.314.181-.964-.382.639.569-.319.185-1.514-.544.318-.184 1.004.405-.678-.592.308-.178.987.395-.679-.573.307-.178.905.896zm-2.326.213l-.468.27.221.128.445-.256.25.145-.445.256.255.149.496-.286.25.145-.799.461-1.224-.712.77-.444.249.144zm-.001 1.13l-.308.178-1.271-.231.833.484-.28.161-1.223-.711.342-.198 1.158.205-.754-.438.279-.161 1.224.711zm6.338-2.183l-7.6 4.389-.629-.366 7.601-4.389.628.366zm1.263.735l-1.898 1.096-.629-.365 1.899-1.097.628.366zm-1.273 2.192l-2.538 1.465-1.887-1.096 2.538-1.465 1.887 1.096zm-4.428 1.1l-1.899 1.096-.629-.366 1.899-1.096.629.366zm6.959-2.561l-1.898 1.096-.629-.366 1.899-1.096.628.366zm-5.702 3.291l-1.899 1.097-.629-.366 1.899-1.096.629.365zm8.225-3.291l-7.551-4.389-10.138 5.853 7.552 4.389 10.137-5.853zm3.789.733l-12.671 7.315-11.329-6.584 12.668-7.315 11.332 6.584zm-11.671 9.047l-1.003.58-1.001-.583-7.968-4.631-2.357 1.36 11.332 6.584 12.668-7.315-2.359-1.372-9.312 5.377z"/>
            </svg>
            <br>
            <p>Version <span class="text-success font-bold">1.0.0</span><br>
                Tous droits réservés &copy; 2022 <a class="text-blue text-hover-dark" href="https://webmonster.tech/"
                                                    target="_blank" rel="noopener nofollow">Webmonster Community</a><br>
                <small>Made with <a class="text-blue text-hover-dark" href="https://github.com/WebmonsterA/Piment-Css"
                                    target="_blank" rel="noopener nofollow">Piment CSS</a></small>
            </p>
        </section>
    </div>
</footer>
</body>
</html>