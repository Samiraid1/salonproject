<?php require"header.php" 
?>

    <?php 
    
        if ( isset($_SESSION['booked']) ) {
            echo '<div class="alert"> Your booking has been accepted! </div>';
            unset($_SESSION['booked']);
        }
    ?>

    <div id="slideshow" class="header row" style="text-align:center;background-color:white ; margin:25px">
        <div class="w3-content w3-section leftcolumn" style="width: 80%;;height:240px;border-radius:7px">
            <img class="mySlides w3-animate-top" src="img/s.jpg" style="width: 100%;;height:230px;border-radius:7px">
            <img class="mySlides w3-animate-bottom" src="img/spa.jpg" style="width: 100%;;height:230px;border-radius:7px">
            <img class="mySlides w3-animate-top" src="img/hd.jpg" style="width: 100%;;height:230px;border-radius:7px">
            <img class="mySlides w3-animate-bottom" src="img/fri.png" style="width: 100%;;height:230px;border-radius:7px">
        </div>

        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {
                    myIndex = 1
                }
                x[myIndex - 1].style.display = "block";
                setTimeout(carousel, 2500);
            }
        </script>
        <div class="rightcolumn" style="width:20% ;  border-radius:50px;padding-left:15px">
            <h2>NEW OFFERS.</h2>
            <a href="#"></a>
        </div>
    </div>

    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>BELLA DONA</h2>
                <h5>Amman Jordan.</h5>

                <p>7th circle..</p>
                <p>Bella Dona is a family-possessed business committed to giving perfection in our administration!

Our committed group of beauticians, nails and skin specialists accompany innumerable long periods of involvement in the magnificence business. We endeavor to make each customer our need, ensuring we tune in to everything about that we feature every individual’s common magnificence.</p>
            </div>
            <div class="card">
                <h1>Where can you find us</h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d598.4296670783281!2d35.85528962115781!3d31.95467261831461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca10efc21a31d%3A0x6e8f71c86248f350!2s7th%20Cir.%2C%20Amman%2C%20Jordan!5e0!3m2!1sen!2shu!4v1586636117130!5m2!1sen!2shu" height="250" frameborder="0" style="width:100%;border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <div class="rightcolumn">
        <?php
if (!isset($_SESSION['id'])) {
echo '<div id="sign-moblie" class="card">

<form action="includes/login.inc.php" method="post">
<h3>Login</h3>
<input  type="text" name="mailuid" placeholder="Your Username" required>
<input  type="password" name="pwd" placeholder="Your Password" required>
<h4></h4>
<button class="button2" type="submit" name="login-submit">Login</button>
<br><a href="signup.php">Sign Up</a>
</form>
</div>';
}
else if (isset($_SESSION['id'])) {
echo '';
}
?>



                
                <div class="card" style="text-align:center">
                    <h3>Popular Post</h3>
                    <br>
                    <a class="button1" href="option.php">service</a>
                    <a class="button1" href="product.php">products</a>

                </div>
                <div class="card" style="text-align:center">
                    <h3>Things you should know</h3>
                    <br>
                    <p>At the Bella Donna , we have confidence in excellence with a heart. We have made a salon that offers the most noteworthy quality hair benefits in a setting that is more advantageous for the earth, our visitors and our staff.</p>

                </div>
               
        </div>
    </div>

<?php require"footer.php" ?>
