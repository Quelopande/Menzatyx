<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="alternate" hreflang="es" href="https://www.hexamarket.store/es/minecraft">
    <link rel="alternate" hreflang="en" href="https://www.hexamarket.store/minecraft">
    <link rel="alternate" hreflang="x-default" href="https://www.hexamarket.store/minecraft"/>
    <!-- Hexamarket No redirects-->
    <meta name="theme-color" content="#00d601">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Hexamarket - Minecraft plugins">
    <meta name="description" content="Hexamarket is a startup that offers free pre-configured plugins and scripts for minecraft and FiveM servers.">
    <!-- Twitter card -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Hexamarket - Minecraft">
    <meta name="twitter:description" content="Hexamarket is a company that offers free pre-configured plugins and scripts for minecraft and FiveM servers.">
    <meta name="twitter:image" content="assets/media/logo.webp">
    <!-- Facebook & discord -->
    <meta property="og:locale" content="en">
    <meta property="og:site_name" content="©Quelopande">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Hexamarket - Minecraft">
    <meta property="og:description" content="Hexamarket is a company that offers free pre-configured plugins and scripts for minecraft and FiveM servers.">
    <meta property="og:url" content="https://www.hexamarket.store/minecraft">
    <meta property="og:image" content="assets/media/logo.webp">
    <meta property="og:image:width" content="540">
    <meta property="og:image:height" content="520">
    <!-- Hexamarket -->
    <title>Hexamarket - Minecraft</title>
    <link rel="shortcut icon" href="/assets/media/favicon.ico" type="image/x-icon">
    <link rel="website icon" type="png" href="assets/media/logo.webp">
    <link rel="stylesheet" href="/assets/css/elements.css">
    <link rel="stylesheet" href="/assets/css/menu.css">
    <link rel="stylesheet" href="/assets/css/fonts.css">
    <link href="https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css" rel="stylesheet">
    </head>
    <body>
        <div class="mobile-vr">
            <nav class="nav container" id="nav">
                <h2 class="logo"><span>Hexamarket</span></h2>
                <ul class="links">
                    <li class="item">
                        <a href="/index" class="link"><i class="fa-solid fa-house"></i> Home</a>
                    </li>
                    <li class="item">
                            <a href="/all" class="link"><i class="fa-solid fa-shop"></i> Elements</a>
                        </li>
                        <li class="item">
                            <div class="dropdown">
                                <a class="link"><i class="fa-regular fa-globe"></i><span> Languages</span></a>
                                <div class="dropdown-content">
                                    <p><a hreflang="es" href="/es/minecraft"><img alt="Spanish flag" src="assets/media/spain.webp">Español</a></p>
                                    <p><a hreflang="en" href="/minecraft"><img alt="UK flag" src="assets/media/uk.webp">English</a></p>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="https://discord.hexamarket.store/" class="link"><i class="fa-brands fa-discord"></i> Discord</a>
                        </li>
                        <div class="ilinks">
                            <li class="item">
                                <a href="/auth" class="link"><i class="fa-sharp fa-solid fa-dice-d20"></i> Login</a>
                            </li>
                            <li class="item">
                                <a href="/auth?signup" class="link"><i class="fa-solid fa-gamepad-modern"></i> Signup</a>
                            </li>
                        </div>
                    </ul>
                    <a href="#nav" class="hamburguer">
                        <span class="icon"><i class="fas fa-bars"></i></span>
                    </a>
                    <a href="#" class="close">
                        <i class="fas fa-xmark"></i>
                    </a>
                </nav>
            </div>
            <div class="computer-vr">
                <div class="navbar-links">
                    <h1 class="logo">Hexamarket</h1>
                    <ul>
                        <li class="link">
                            <a href="/index"><i class="fa-solid fa-house"></i><span> Home</span></a>
                        </li>
                        <li class="link">
                            <a href="all"><i class="fa-solid fa-shop"></i><span> Elements</span></a>
                        </li>
                        <li class="link">
                            <div class="dropdown">
                                <a><i class="fa-regular fa-globe"></i><span> Languages</span></a>
                                <div class="dropdown-content">
                                    <p><a hreflang="es" href="/es/minecraft"><img alt="Spainish flag" src="/assets/media/spain.webp">Español</a></p>
                                    <p><a hreflang="en" href="/minecraft"><img alt="UK flag" src="/assets/media/uk.webp">English</a></p>
                                </div>
                            </div>
                        </li>
                    <li class="link">
                        <a href="https://discord.hexamarket.store/" target="_blank"><i class="fa-brands fa-discord"></i><span> Discord</span></a>
                    </li>
                    <div class="endlink">
                        <div class="login">
                            <a href="/auth">Login</a>
                        </div>
                        <div class="register">
                            <a href="/auth?signup">SignUp</a>
                        </div>
                    </div>
                    </ul>
                </div>
            </div>
            <div class="all">
                <div class="head">
                    <div class="tags">
                        <a href="/all" class="tag">All</a>
                        <a href="/minecraft" id="target" class="tag"><i class="fa-sharp fa-solid fa-circle-check"></i> Minecraft</a>
                        <a href="/fivem" class="tag">FiveM</a>
                        <a href="/webdeveloment" class="tag">Web Develoment</a>
                        <a href="/discordbots" class="tag">Discord Bot</a>
                    </div>
                    <div>
                        <input class="search" id="searchbar" onkeyup="search_container()" type="text" name="search" placeholder="Search...">
                    </div>
                </div>
                <hr style="width: 100%;">
                <div class="containers">
                    <?php
                        $cat = "mc";
                        $download = "Download";
                        $more = "See more";
                        $contentFile = "content.json";
                        require "ArticleIndexer.php";
                    ?>
                    <a class="container">
                        <img loading="lazy" src="/assets/media/all/economyshopgui.webp" alt="Economyshopgui image">
                        <h1>Economyshopgui</h1>
                        <div>
                            <button class="download" onclick="window.location.href='/things/mc/economyshopgui#download'">Download</button>
                            <button class="more" onclick="window.location.href='/things/mc/economyshopgui'">See more</button>
                        </div>
                    </a>
                    <a class="container">
                        <img loading="lazy" src="/assets/media/all/tablist.webp" alt="Tablist image">
                        <h1>Tablist</h1>
                        <div>
                            <button class="download" onclick="window.location.href='/things/mc/tablist#download'">Download</button>
                            <button class="more" onclick="window.location.href='/things/mc/tablist'">See more</button>
                        </div>
                    </a>
                    <a class="container">
                        <img loading="lazy" src="/assets/media/all/protectionstones.webp" alt="Protection Stones image">
                        <h1>Protectionstones</h1>
                        <div>
                            <button class="download" onclick="window.location.href='/things/mc/protectionstones#download'">Download</button>
                            <button class="more" onclick="window.location.href='/things/mc/protectionstones'">See more</button>
                        </div>
                    </a>
                    <!-- <div class="container">
                        <ins class="adsbygoogle"
                        style="display:block; text-align:center;"
                        data-ad-layout="in-article"
                        data-ad-format="fluid"
                        data-ad-client="ca-pub-2502278778660216"
                        data-ad-slot="4870623387"></ins>
                    </div> -->
                    <a class="container">
                        <img loading="lazy" src="/assets/media/all/luckperms.webp" alt="Luckperms image">
                        <h1>Luckperms</h1>
                        <div>
                            <button class="download" onclick="window.location.href='/things/mc/Luckperms#download'">Download</button>
                            <button class="more" onclick="window.location.href='/things/mc/Luckperms'">See more</button>
                        </div>
                    </a>
                    <a class="container">
                        <img loading="lazy" src="/assets/media/all/mycommand.webp" alt="mycommand">
                        <h1>Mycommand</h1>
                        <div>
                            <button class="download" onclick="window.location.href='/things/mc/mycommand#download'">Download</button>
                            <button class="more" onclick="window.location.href='/things/mc/mycommand'">See more</button>
                        </div>
                    </a>
                    <a class="container">
                        <img loading="lazy" src="/assets/media/all/animatedscoreboard.webp" alt="animatedscoreboard">
                        <h1>AnimatedScoreboard</h1>
                        <div>
                            <button class="download" onclick="window.location.href='/things/mc/AnimatedScoreboard#download'">Download</button>
                            <button class="more" onclick="window.location.href='/things/mc/AnimatedScoreboard'">See more</button>
                        </div>
                    </a>
                    <a class="container">
                        <img loading="lazy" src="/assets/media/all/animatedscoreboardv2.webp" alt="animatedscoreboardv2">
                        <h1>AnimatedScoreboard v2</h1>
                        <div>
                            <button class="download" onclick="window.location.href='/things/mc/AnimatedScoreboardv2#download'">Download</button>
                            <button class="more" onclick="window.location.href='/things/mc/AnimatedScoreboardv2'">See more</button>
                        </div>
                    </a>
                    <a class="container">
                        <img loading="lazy" src="/assets/media/all/essentialsx.webp" alt="Essentialsx" >
                        <h1>Essentialsx</h1>
                        <div>
                            <button class="download" onclick="window.location.href='/things/mc/essentialsx#download'">Download</button>
                            <button class="more" onclick="window.location.href='/things/mc/essentialsx'">See more</button>
                        </div>
                    </a>
                    <a class="container">
                        <img loading="lazy" src="/assets/media/all/advancedban.webp" alt="advancedban image">
                        <h1>AdvancedBan</h1>
                        <div>
                            <button class="download" onclick="window.location.href='/things/mc/advancedban#download'">Download</button>
                            <button class="more" onclick="window.location.href='/things/mc/advancedban'">See more</button>
                        </div>
                    </a>
                    <a class="container">
                        <img loading="lazy" src="/assets/media/all/deathmessage.webp" alt="DeathMessage image">
                        <h1>DeathMessage</h1>
                        <div>
                            <button class="download" onclick="window.location.href='/things/mc/deathmessage#download'">Download</button>
                            <button class="more" onclick="window.location.href='/things/mc/deathmessage'">See more</button>
                        </div>
                    </a>
                    <a class="container">
                        <img loading="lazy" src="/assets/media/no_results_found.webp" alt="Rankup image">
                        <h1>Rankup</h1>
                        <div>
                            <button class="download" onclick="window.location.href='/things/mc/Rankup#download'">Download</button>
                            <button class="more" onclick="window.location.href='/things/mc/Rankup'">See more</button>
                        </div>
                    </a>
                    <a class="container">
                        <img loading="lazy" src="/assets/media/all/inventoryrollback.webp" alt="inventoryrollback image">
                        <h1>Inventory RollBack</h1>
                        <div>
                            <button class="download" onclick="window.location.href='/things/mc/inventoryrollback#download'">Download</button>
                            <button class="more" onclick="window.location.href='/things/mc/inventoryrollback'">See more</button>
                        </div>
                    </a>
                </div>
                <div id="notification">
                    <i class="fa-solid fa-circle-exclamation fa-shake"></i>
                    <h1>Error</h1>
                    <p class="error-info"></p>
                </div>    
            <?php require "bottom.html";?>
        <script src="/assets/js/search.js"></script>
    </body>
</html>