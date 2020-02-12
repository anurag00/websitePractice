<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Neil's Project</title>
        <link rel="stylesheet" type="text/css" href="index.css">        
        <!--[if lt IE 9]>
            <script>
            document.createElement("article");
            document.createElement("aside");
            document.createElement("footer");
            document.createElement("header");
            document.createElement("main");
            document.createElement("nav");
            document.createElement("section");
            </script>
        <![endif]-->
    </head>
    <body>
        <img src="TitleImage.png" alt="My Fiction v Non-Fiction project" height='233' width="735">
        <header class="banner">
            <p>Get a recommendation for a book that will be your next companion
            </p>
        </header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
        </nav>
        <main>
        <section>
            <?php

            //ini_set('display_errors', 1);

            //if( isset($_POST['submit'] )){
                $radioButton = $_REQUEST['fButton'];
                $age = $_REQUEST['fAge'];
            //    echo "The radio button selected was ".$radioButton."<br>";
            //    echo "The Age selected was ".$age."<br>";
            //}

            echo"<h4>A good recommendation for a ". $age." year old in ";
            if($radioButton == "radio1")
            {
                echo"Fiction";

            }else{
                echo"Non-Fiction";
            }
            echo" would be</h4>";
            echo"<br><br>";
            echo"<article>";

            if($age>0 && $age<4){
                if($radioButton == "radio1")
                {
                    echo"<h2>The Hungry Catapillar<h2>";

                }else{
                    echo"<h2>Water can be<h2>";
                }
            }
            if($age>3 && $age<8){
                if($radioButton == "radio1")
                {
                    echo"<h2>The Harry Potter Series<h2>";

                }else{
                echo"<h2>Little people big dreams<h2>";
                }
            }
            if($age>7 && $age<13){
                if($radioButton == "radio1")
                {
                    echo"<h2>The Percy Jackson Series<h2>";

                }else{
                echo"<h2>Life The Flap, questions and answers about the human body<h2>";
                }
            }
            if($age>12 && $age<18){
                if($radioButton == "radio1")
                {
                    echo"<h2>Optimists Die First<h2>";

                }else{
                echo"<h2>Do you know who you are<h2>";
                }
            }
            if($age>17 && $age<22){
                if($radioButton == "radio1")
                {
                    echo"<h2>Hitler's canary<h2>";

                }else{
                echo"<h2>We should all be pessimists<h2>";
                }
            }
            if($age>21 && $age<40){
                if($radioButton == "radio1")
                {
                    echo"<h2>The red lighthouse<h2>";

                }else{
                echo"<h2>Becoming<h2>";
                }
            }
            if($age>39){
                if($radioButton == "radio1")
                {
                    echo"<h2>The red tent<h2>";

                }else{
                echo"<h2>The wisdom journal<h2>";
                }
            }

            echo"</article>";
            echo"<br>";

            ?>
        </section>
        </main>
        <aside>
            <h2>This project is made by Neil</h2>
            <p>For Fiction vs Non-fiction project</p>
        </aside>
        <footer>
            <p>Thank You</p>
        </footer>
    </body>
</html>
