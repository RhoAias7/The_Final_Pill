<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
        <link rel="stylesheet" href="style/style.css" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 input" style=" padding-top:10px;">
                    <form action="Login-php/login.php" method="POST">
                        <h1>Please enter your name below:</h1></br>
                        <input type="text" name="username" placeholder="Username" style=" margin-bottom:10px;"/><br>
                        <input type="password" name="password" placeholder="Password" style=" margin-bottom:10px;"/><br>
                        <input type="submit" value="Enter" style=" margin-bottom:10px;"/><br>
                        <a href='Signup/signup.html'>Sign Up, Here!</a>
                    </form>
                </div>
            </div>

            <div class="row"style=" padding-top:60px;">
                <div class="col-md-1"></div>
                <div class="col-md-10"><h2>Choose Your Weapon</h2></div>
                <div class="col-md-1"></div>
    	    </div>
            <div class="row">
                <div class="col-md-4"><img src="Images/Blanka.gif" alt="Blanka"></div>
                <div class="col-md-4"><img src="Images/Ryu.gif" alt="Ryu"></div>
                <div class="col-md-4"><img src="Images/Li.gif" alt="Chun Li"></div>
    	    </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8"><p></p></div>
                <div class="col-md-2"></div>
    	    </div>
		</div>
		<script src='RPS/app.js'></script>
    </body>
</html>