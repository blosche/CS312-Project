<!-- template.html -->
<!doctype html>
<html lang="en">
    <head>
        <!-- Title -->
        <title><?php echo $title; ?></title>

        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Stylesheets -->
       <?php echo Asset::css('main-style.css'); ?>
    </head>
    <body>
        <div id="wrapper">
            <header>
                <div id="left-nav">
                    <a href="">
                         <?php echo Asset::img('Logo-Rect.png'); ?>
                    </a>
                </div>
                <div id="right-nav">
                    <nav>
                        <ul>
                            <li><a href="index">Home</a></li>
                            <li><a href="colorcordinator">Color Coordinator</a></li>
                            <li><a href="about">About</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <div class="line"></div>
            <div id="content">

                <!-- This is where content should be loaded -->
                <?php echo $content; ?>

            </div>
            <div class="line"></div>
            <footer class="centered">
                <p>Made for CS312</p>
            </footer>
        </div>
    </body>
</html>