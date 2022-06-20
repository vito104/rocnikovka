<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="shortcut icon" href="images/fc_ban__k_ostrava_logo_1bR_icon.ico">
    <script src="main.js"></script>
</head>


<body>
    <!-- hlavička (navigační menu) -->
    <header>
<?php 
include "hlavicka.php"
?>
    </header>
        <!-- O stránce -->

        <div class="s1">
        <h1>Ročníková práce z DBA</h1>
        Toto je ročníková práce z předmětu databázové aplikace.
        <br>
        Použité jazyky: HTML 5, CSS 3, JavaScript(včetně frameworků), PHP.
        <br>
        Tato stránka slouží pouze pro výuku. Berte to prosím s rezervou.
        <br>
        Zdrojový kód stránky:
        <a href="https://github.com/vito104/rocnikovka"> ZDE</a>
        </div>
        <!-- jirkova fokta -->
        <div class="fotka">
        <picture>
        <picture>
            <source media="(min-width: 1400px)"srcset="obrazky/jirka.jpg">
            <img src="obrazky/jirkasmall.jpg">
        </picture>
        <h2>Děléééj, už jsi tady měl bejt 4 minuty ty magore!</h2>
        </div>



        <!-- video -->

        <div class="video">
        <iframe width="400" height="215" src="https://www.youtube.com/embed/iYs3X_t7G8U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        
        </div>
        <!-- Jirkova fotka 2 -->

        <div class="fotka2">
        <picture>
            <source media="(min-width: 1400px)"srcset="obrazky/159871072_50c6fa.jpg">
            <img src="obrazky/159871072_50c6fasmall.jpg">
        </picture>
            <h2>No tak děleeeeej!</h2>
        </div>

</body>

</html>