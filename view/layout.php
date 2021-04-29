<!DOCTYPE html>
<html>
    <head>
        <title>NEWSPORTAL</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
        <meta charset="utf-8">
    </head>

    <body>
        <nav class="one">
            <ul class="topmenu">
                <li><a href="#">Kategooraid<i class="fa fa-angle-down"></i></a>
                    <ul class="submenu">
                    <?php
                    Controller::AllCategory();
                    ?>
                    </ul>
                </li>
                <li><a href="testError">Info</a></li>
                <li><a href="./">Stardileht</a></li>
                <li><a href="registerForm">Register</a></li>
            </ul>
        </nav>

        <section>
            <div class="divBox">
                <?php
                if(isset($content)) {
                    echo $content;
                }
                else {
                    echo '<h1>Content is gone</h1>';
                }
                ?>
            </div>
        </section>

        <hr>
        <p style="display: block; text-align: center">JPTVR</p>
    </body>
</html>