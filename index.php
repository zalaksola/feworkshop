<?php $foo = ’bar’; ?>


<!doctype html>
<html>
    <head>

        <title>About Me</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700%7CLora:400,700italic" rel="stylesheet" type="text/css">
        
        <!-- CSS Includes -->
        <link href="css/main.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <header>
            <div class="container">
                <h1>Deloitte Digital</h1>
                <h2>About Me</h2>
            </div>
        </header>

        <div class="container">

            <main id="photos">
                <img src="images/my-photo.jpg" alt="An image">
                <div id="more-photos">
                    <img src="images/my-photo-2.jpg" alt="An image">
                    <img src="images/my-photo-3.jpg" alt="An image">
                </div>
                <a href="#" id="show-more">Show more</a>
                <a href="#" id="show-less">Show less</a>
            </main>

            <aside>
                <h3>Photo Album Details</h3>
                <h4>Location</h4>
                <p class="location">Evergreen, CO</p>
                
                <hr>
                
                <h4>Date Added</h4>
                <p>Friday, September 23, 2016</p>
                
                <hr>
                
                <h4>Description</h4>
                <p>These are some photos from nature!</p>

            </aside>

        </div>

        <footer>
            <h5>Deloitte Digital</h5>
            <p>&copy; 2016 <a href="http://www.deloitte.com">Deloitte Digital</a>. All Rights Reserved.</p>
        </footer>

        <!-- Javascript Includes -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/main.js"></script>
        
    </body>
</html>
