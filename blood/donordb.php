<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donor Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Poppins Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap">
    <style>

        body {
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            background-color: rgb(186, 29, 29);
        }

        .navbar-brand {
            color: #ffffff;
            font-weight: bold;
            font-size: 35px;
            margin-left: -160px;
        }

        .navbar-nav .nav-item .nav-link {
            color: #fff;
            position: relative;
            transition: 0.3s;
            transform: translateX(0);
            margin-right: 10px;
        }

        .navbar-nav .nav-item .nav-link:hover {
            transform: translateX(10px);
            /* Hover effect with a transform */
        }

        .navbar-nav .nav-item .nav-link::before {
            content: '';
            position: absolute;
            width: 0%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #ffffff;
            transition: 0.3s;
        }

        .navbar-nav .nav-item .nav-link:hover::before {
            width: 100%;
        }

        /* Center the logo on mobile devices */
        @media (max-width: 767px) {
            .navbar-brand {
                text-align: center;
                width: 54%;
            }

            .navbar-toggler {
                margin-left: auto;
                /* Push the toggler icon to the right */
            }

            .navbar-collapse {
                text-align: center;
            }
        }

        
#containerBlood {
  height: 500px;
  margin: 0 auto;
  overflow: hidden;
  position: absolute;
  left: 200px;
  width: 248px;
}

#containerBlood div { position: absolute; }

.pour {
  position: absolute;
  left: 46%;
  width: 20px;
  height: 40px;
  background-color: #e74c3c;
  border-radius: 10px
}

.pourTube {
  position: absolute;
  left: 46%;
  width: 20px;
  height: 90px;
  background-color: rgb(211, 211, 211);
  background-color: rgba(211, 211, 211, 0.5);
  border-radius: 10px;
  border-color: rgba(211, 211, 211, 0.9);
  border-style: solid;
  border-bottom: 0px;
}

#beaker {
  border: 10px solid #D3D3D3;
  border-top: 0;
  border-radius: 0 0 30px 30px;
  height: 200px;
  left: 14px;
  bottom: 0;
  width: 200px;
}

#plastic {
  background-color: rgb(211, 211, 211);
  background-color: rgba(211, 211, 211, 0.5);
  bottom: 0;
  height: 220px;
  overflow: hidden;
  width: 100%;
  z-index: 9;
}

#beaker:before {
  border: 10px solid #D3D3D3;
  border-bottom: 0;
  border-right: 0;
  border-radius: 14px 0px 0 0;
  content: '';
  height: 30px;
  position: absolute;
  top: -30px;
  width: 90px;
}

#beaker:after {
  border: 10px solid #D3D3D3;
  border-bottom: 0;
  border-left: 0;
  border-radius: 0px 14px 0 0;
  content: '';
  height: 30px;
  position: absolute;
  top: -30px;
  width: 90px;
}

#beaker:before { left: -10px; }
#beaker:after { right: -10px; }

#liquid {
  background-color: #e74c3c;
  border: 10px solid #e74c3c;
  border-radius: 0 0 20px 20px;
  bottom: 0;
  height: 0px;
  overflow: hidden;
  width: 180px;
}

#liquid:after {
  background-color: rgba(255, 255, 255, 0.25);
  bottom: -10px;
  content: '';
  height: 200px;
  left: -40px;
  position: absolute;
  transform: rotate(30deg);
  -webkit-transform: rotate(15deg);
  width: 110px;
}

#liquid .bubble {
  -webkit-animation-name: bubble;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  background-color: rgba(255, 255, 255, 0.2);
  bottom: 0;
  border-radius: 10px;
  height: 20px;
  width: 20px;
}

@-webkit-keyframes bubble {
  0% { bottom: 0; }

   50% {
     background-color: rgba(255, 255, 255, 0.2);
      bottom: 80px;
   }

   100% {
     background-color: rgba(255, 255, 255, 0);
      bottom: 160px;
   }
}

.bubble1 {
  left: 10px;
  -webkit-animation-delay: 1000ms;
  -webkit-animation-duration: 10000ms;
}

.bubble2 {
  left: 50px;
  -webkit-animation-delay: 700ms;
  -webkit-animation-duration: 11000ms;
}

.bubble3 {
  left: 100px;
  -webkit-animation-delay: 1200ms;
  -webkit-animation-duration: 13000ms;
}

.bubble4 {
  left: 130px;
  -webkit-animation-delay: 1100ms;
  -webkit-animation-duration: 7000ms;
}

.bubble5 {
  left: 170px;
  -webkit-animation-delay: 1300ms;
  -webkit-animation-duration: 8000ms;
}


.drop{
  position: relative;
  top: -16px;
  left: 46%;
  width: 20px;
  height: 20px;
  margin-left: -1px;
  border-radius: 50%;
  background: #ad2d2d;
  z-index: 0;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  border: none;
  -webkit-border-radius: 80% 0 55% 50% / 55% 0 80% 50%;
  border-radius: 80% 0 55% 50% / 55% 0 80% 50%;
  font: normal 100%/normal Arial, Helvetica, sans-serif;
  color: rgba(0,0,0,1);
  -o-text-overflow: clip;
  text-overflow: clip;
  -webkit-transform: rotateZ(-45deg)   ;
  transform: rotateZ(-45deg)   ;
}

.firstDrop{
  animation: dropAni 1s 15;
}

.secondDrop{
  animation: dropAni 0.8s 2s 15;
}

.thirdDrop{
  animation: dropAni 0.6s 6s 15;
}

@keyframes dropAni{
  0%{
    top: 0px;
  }
  100%{
    top: 170px;
  }
}

    </style>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="#">
               Blood Bank Management
            </a>

            <!-- Toggler/collapsible Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="">Dashboard <i class="fa-solid fa-gauge"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="donateblood.php">Donate <i class="fa-solid fa-droplet"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dhistory.php">Donation History <i class="fa-solid fa-clock-rotate-left"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Print Certificate <i class="fa-solid fa-certificate"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="donorlogout.php">Logout <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                    </li>
                </ul>
            
            </div>
        </div>
    </nav>

    <div id="containerBlood">
      <div class="pour"></div>
      <div class="pourTube"></div>
      <div id="beaker">
        <div class="beer-foam">

        </div>
        <div id="plastic">
          
        </div>  
        
          <div class="drop firstDrop"></div>
          <div class="drop secondDrop"></div>
        <div class="drop thirdDrop"></div>
         
        
        <div id="liquid">
          <div class="bubble bubble1"></div>
          <div class="bubble bubble2"></div>
          <div class="bubble bubble3"></div>
          <div class="bubble bubble4"></div>
          <div class="bubble bubble5"></div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
    
    $('.pour') //Pour Me Another Drink, Bartender!
      .delay(0)
      .animate({
        height: '150px'
        }, 1500)
      .delay(15600);
  
      $('.pourTube') //Pour Me Another Drink, Bartender!
        .delay(0)
        .animate({
          height: '150px'
          }, 0)
        .delay(15600);
  
    $('#liquid') // I Said Fill 'Er Up!
      .delay(1300)
      .animate({
        height: '170px'
      }, 15000);
  
    $('.beer-foam') // Keep that Foam Rollin' Toward the Top! Yahooo!
      .delay(3400)
      .animate({
        bottom: '200px'
        }, 2500);
    });

    </script>

</body>
</html>