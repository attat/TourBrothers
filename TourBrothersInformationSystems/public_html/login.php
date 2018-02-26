<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="tb.css">
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
                <div id="headerTitle">LOGIN</div>
                <div id="headerSubtext">Log in to your personalized account to leave reviews on your favorite destination spots</div>
            </div>
        </div>
        
        <div class="contentBox">
            <div class="innerBox">
                <form action="user.html" method="POST">
                    <div class="contentTitle">Username</div><br />
                    <input type="text" name="username" value="Username"><br />
                    <div class="contentTitle">Password</div><br />
                    <input type="password" name="password" value="Password"><br /><br />
                    <input type="submit" value="Login">
                </form>
            </div>
        </div>
        
        <div id="footer"><img src="logo.png" alt="Tour Brother's Logo" width="70" height="70"></div>
    </body>
</html>