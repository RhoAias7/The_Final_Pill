
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chill - Pill</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

    <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!--  Video JS  -->
    <script>
        var vid = document.getElementById("bgvid");
        var pauseButton = document.querySelector("#polina button");

        if (window.matchMedia('(prefers-reduced-motion)').matches) {
            vid.removeAttribute("autoplay");
            vid.pause();
            pauseButton.innerHTML = "Paused";
        }

        function vidFade() {
            vid.classList.add("stopfade");
        }

        vid.addEventListener('ended', function() {
            // only functional if "loop" is removed 
            vid.pause();
            // to capture IE10
            vidFade();
        });

    </script>

    <!-- Instafeed JS -->
    <script src="instafeed/jquery-3.2.1.min.js"></script>
    <script src="instafeed/instafeed.min.js"></script>
    <script src="instafeed/80sinsta.js"></script>

    <!--  Animate css  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Back</a>
            <!--This should hold the user's name-->
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Images">Images</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#ai">AI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#students">Students</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="Login/index.php">Chat</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation -->
    
    <video id="bgvid" playsinline autoplay muted loop><source src="Images/Queen.mp4" type="video/mp4"></video>
    <header class="masthead">
        <div class="container h-100">
            <div class=" row h-100">
                <div class="col-lg-12 my-auto move">
                    <h1 class="firstFont animated flash">Chill - Pill</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Instagram feed -->
    <section class="bg-primary text-center instaImg" id="Images">
        <div class="container ">
            <h1 class="addColor">.....Some Images.....</h1>
            <div class="row">
                <div class="col-md-12 mx-auto" id="instafeed"></div>
            </div>
        </div>
    </section>
    <!-- Instagram feed -->
    
    <section class="cta" id="ai">
	    <h1 class="Lady Luck retro extra">...Try Your Luck...</h1>
        <div class="cta-content">
            <?php   include 'API/quality.php';include 'API/keywords.php';?>
            <div class="container">
                <div class="row ">
                    <div class="col-md-6 retro">
                        <h1 class="retro nice">How 80s is this photo?</h1>
                        <h1 class="retro nice">This photo is<?php echo " "."$how80s"." "; ?>80s</h1>
                        <img <?php echo "src=$userImg" ?> height="300" width="300"> </img>
                
                        <form method="POST">
                            <input type="text" name="img" placeholder="Enter Image Url" style="width: 300px;margin-bottom: 20px"/><br>
							<button type="submit" class="retro btn btn-danger"  >Ready To Rock</button>
                        </form>
                    </div>
                    <div class="col-md-3 retro ">
                        <p class="inc"><?php echo "$valueNo1 $valueNo1Score"; ?></p>
                        <p class="inc"><?php echo "$valueNo2 $valueNo2Score"; ?></p>
                        <p class="inc"><?php echo "$valueNo3 $valueNo3Score"; ?></p>
                        <p class="inc"><?php echo "$valueNo4 $valueNo4Score"; ?></p>
                        <p class="inc"><?php echo "$valueNo5 $valueNo5Score"; ?></p>
                            
                    </div>
                    <div class="col-md-3 retro">
                        <p class="inc"><?php echo "$valueNo6 $valueNo6Score"; ?></p>
                        <p class="inc"><?php echo "$valueNo7 $valueNo7Score"; ?></p>
                        <p class="inc"><?php echo "$valueNo8 $valueNo8Score"; ?></p>
                        <p class="inc"><?php echo "$valueNo9 $valueNo9Score"; ?></p>
                        <p class="inc"><?php echo "$valueNo10 $valueNo10Score"; ?></p>   
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>

    <section class="bg-primary text-center instaImg" id="students">
        <div class="container">
            <!--Who we are section-->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h3 class="text-center students">Who we are</h3>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 ourStory">
                    <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet consectetur adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <!--Who we are section-->
            <div class=" row">
                <div class="col-md-4">
                    <img class="img-fluid" src="Images/pic-1.jpg" height="100%" alt="member 1">
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" src="Images/pic-2.jpg" height="100%" alt="member 2">
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" src="Images/pic-3.jpg" height="100%" alt="member 3">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h2 class="students">Julia</h2>
                </div>
                <div class="col-md-4">
                    <h2 class="students">Ayo</h2>
                </div>
                <div class="col-md-4">
                    <h2 class="students">Hannah</h2>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; 2017 Start Bootstrap. All Rights Reserved.</p>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#">Privacy</a>
                </li>
                <li class="list-inline-item">
                    <a href="#">Terms</a>
                </li>
                <li class="list-inline-item">
                    <a href="#">FAQ</a>
                </li>
            </ul>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/new-age.min.js"></script>

</body>

</html>
