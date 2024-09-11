<?php
    // Start PHP session if needed or include any other PHP configurations

    // Define PHP variables here if needed
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="event.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/solid.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>The Gaming Society</title>
</head>
<body>

    <?php
        // PHP code for navbar
        echo '<nav class="navbar">';
        echo '<h2>Event-Page</h2>';
        echo '<ul>';
        echo '<li><a href="intro.php"><i class="uil uil-home"></i>HOME</a></li>';
        echo '<li><a href="event.php"><i class="uil uil-play-circle"></i>EVENTS</a></li>';
        echo '<li><a href="#">SCHEDULE</a></li>';
        echo '<li><a href="faq.php"><i class="uil uil-comment-alt-question"></i>FAQ</a></li>';
        echo '<li><a href="login.php">LOGIN/REGISTER</a></li>';
        echo '</ul>';
        echo '</nav>';
    ?>

    <div class="header">

        <div class="img-parent">
            <div class="img">
                <img src="event.jpg" alt="">
            </div>
            <div class="img-overplay"></div>
        </div>
        <div class="img-content">
            <h2>Schedule Event</h2>
            <span>Event Description</span>
        </div>
    </div>

    <div class="container event">

        <div class="row justify-content-center text-center">

            <div class="offset-sm-1 col-sm-5">
                <img src="event1.jpg" class="img-fluid" alt="">
                <div class="event-content">
                    <h4>Event 1</h4>
                    <span>Gaming Tournaments: Host competitive tournaments for 
                        popular multiplayer games like League of Legends, Fortnite, Super Smash Bros, 
                        or Valorant. Offer prizes for winners !</span><br>
                    <a href="ticketpage.php">Join</a>
                </div>
            </div>

                <div class="offset-sm-1 col-sm-5">
                    <img src="event2.jpg" class="img-fluid" alt="">
                    <div class="event-content">
                        <h4>Event 2</h4>
                        <span>Game Nights: Regularly scheduled game nights where members 
                            can gather to play a variety of board games, card games, or party video games.</span><br>
                        <a href="ticketpage.php">Join</a>
                    </div>
                </div>

        </div>

        <div class="row justify-content-center text-center">

            <div class="offset-sm-1 col-sm-5">
                <img src="event3.jpg" class="img-fluid" alt="">
                <div class="event-content">
                    <h4>Event 3</h4>
                    <span>Guest Speaker Events: Invite professionals, game developers, or gaming influencers to speak at the event. 
                        They can share insights, experiences, and tips related to game development, esports, or gaming culture.</span><br>
                    <a href="ticketpage.php">Join</a>
                </div>
            </div>

                <div class="offset-sm-1 col-sm-5">
                    <img src="event4.jpg" class="img-fluid" alt="">
                    <div class="event-content">
                        <h4>Event 4</h4>
                        <span>Trivia Nights: Organize gaming-themed trivia nights with questions covering a wide range of gaming genres, platforms, 
                            and historical facts. This can be a fun way to test members' knowledge and spark friendly competition!</span><br>
                        <a href="ticketpage.php">Join</a>
                    </div>
                </div>

        </div>

        <div class="row justify-content-center text-center">

            <div class="offset-sm-1 col-sm-5">
                <img src="event5.jpg" class="img-fluid" alt="">
                <div class="event-content">
                    <h4>Event 5</h4>
                    <span>Cosplay Contests: Hold cosplay contests where members can dress up as their 
                        favourite gaming characters. Offer prizes for the best costumes and encourage creativity and craftsmanship!</span><br>
                    <a href="ticketpage.php">Join</a>
                </div>
            </div>

                <div class="offset-sm-1 col-sm-5">
                    <img src="event6.jpg" class="img-fluid" alt="">
                    <div class="event-content">
                        <h4>Event 6</h4>
                        <span>Ice Breaking: Organize for new members bring their own computers or 
                            consoles to play together in a local network setup. This can be a great way to socialization among members !</span><br>
                        <a href="ticketpage.php">Join</a>
                    </div>
                </div>

        </div>

    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Contact Us</h4>
                    <p>Email: abc@gmail.com</p>
                    <p>Phone: +123-456-7890</p>
                    <p>Address: TARUMT</p>
                </div>
                <div class="col-md-6">
                    <h4>Follow Us</h4>
                    <ul class="social-icons">
                        <li><a href="#"><i class="uil uil-facebook"></i></a></li>
                        <li><a href="#"><i class="uil uil-twitter"></i></a></li>
                        <li><a href="#"><i class="uil uil-instagram-alt"></i></a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="intro.html">Home</a></li>
                        <li><a href="#">Schedule</a></li>
                        <li><a href="#">Speakers</a></li>
                        <li><a href="login.php">Registration</a></li>
                        <li><a href="faq.php">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4>Sponsors</h4>
                    <p>Thank you to our sponsors for their support!</p>
                   
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">&copy; <?php echo date("Y"); ?> Your Event. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

    <script>
        $(document).scroll(function(){
            $(".navbar").toggleClass("scoll", $(this).scrollTop() > $("navbar").height());
        })
    </script>
</body>
</html>
