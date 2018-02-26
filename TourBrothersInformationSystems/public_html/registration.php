<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="tb.css">
<script src="sample-registration-form-validation.js"></script>
    <body>
        <div id="page">
            <div class="topNaviagationLink"><a href="homepage.html">Home</a></div>
            <div class="topNaviagationLink"><a href="registration.php">Register</a></div>
            <div class="topNaviagationLink"><a href="login.php">Login</a></div>
            <div class="topNaviagationLink"><a href="browse.php">Browse</a></div>
            <div class="topNaviagationLink"><a href="details.php">Random Destination</a></div>
        </div>
        
        <div id="mainPicture">
            <div class="picture">
                <div id="headerTitle">Register</div>
                <div id="headerSubtext">Please provide the information below in order to create a Tour Brother's account.</div>
            </div>
        </div>
        
        <div class="contentBox">
            <div class="innerBox">
                <div class="contentTitle">Register Account</div><br /><br />
                    <form name="registration" action="/userProfile.html" onSubmit="return validateForm();" method="post">
                        <ul style="list-style-type:none">
                            <li><input type="email" name="email" size="12" placeholder="Email" required/><br /><br /></li>
                            <li><input type="text" name="firstname" size="12" placeholder="First Name" required/><br /><br /></li>
                            <li><input type="text" name="lastname" size="12" placeholder="Last Name" required/><br /><br /></li>
                            <li><input type="password" name="passid" size="12" placeholder="Password" required/><br /><br /></li>
                            <li><input type="tel" name="Phone #" size="12" placeholder="Phone Number" required/><br /><br /></li>
                            <li><input type="submit" name="Sign Up" value="Sign Up" /></li>
                        </ul>
                        <?php
                        echo "Hello, world! This is my first PHP project!";
                        ?>
                    </form>
            </div>
        </div>
        
        <div id="footer"><img src="logo.png" alt="Tour Brother's Logo" width="70" height="70"></div>
    </body>
</html>