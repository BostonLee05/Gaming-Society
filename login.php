<?php
// Your PHP code for processing form submissions can go here

// For demonstration purposes, let's just print the submitted data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Gaming Society</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/solid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div>
		<button class="btn"><a href="event.php">&#8810;</a></button>
	</div>
<div class="section">
    <div class="container">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                    <h6 class="mb-0 pb-3"><span>Login</span><span>Register</span></h6>
                    <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                    <label for="reg-log"></label>
                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">
                            <div class="card-front">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <h4 class="mb-4 pb-3">Login</h4>
                                        <form id="join" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                            Your Name : <i class="uil uil-users-alt"></i>
                                            <div class="form-group">
                                                <input type="text" name="text" class="form-style" placeholder="Full Name" required>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="date">Your Password : <i class="uis uis-lock"></i></label><br>
                                                <input type="password" name="password" class="form-style" placeholder="Password" required>
                                            </div>

                                            <div class="form-group mt-2"> Your Phone Number : <i class="input icon uil uil-phone-alt"></i>
                                                <input type="tel" name="phone" class="form-style" pattern="[0-9]{3}-[0-9]{7}" placeholder="Phone Number" required>
                                            </div>
                                            <button type="submit" class="btn mt-4">Login</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-3d-wrapper">
                            <div class="card-back">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <h4 class="mb-3 pb-3">Register</h4>
                                        <form id="participate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                                            <div class="form-group">Your Name : <i class="uil uil-users-alt"></i>
                                                <input type="text" name="name" class="form-style" placeholder="Full Name" required>
                                            </div>

                                            <div class="form-group">Your Email : <i class="input icon uil uil-at"></i>
                                                <input type="email" name="email" class="form-style" placeholder="Email" required>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="date">Your Birthday : <i class="uil uil-gift"></i></label><br>
                                                <input type="date" name="date" class="form-style" placeholder="Date">
                                            </div>

                                            <div class="form-group mt-2">Your Phone Number : <i class="input icon uil uil-phone-alt"></i>
                                                <input type="tel" name="phone_number" class="form-style" placeholder="Your Phone Number" required>
                                                <i class="uil uil-user"></i>
                                            </div>

                                            <button type="submit" class="btn mt-4">Register</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
