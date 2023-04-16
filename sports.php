
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.css" rel="stylesheet">
    <title>Document</title>
    <style>
        body{
            background-image: url(bg.png);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        body.img{
            opacity: 0.5;
        }
        #zoom-box:hover{
            -webkit-transform: scale(1.1);
	        transform: scale(1.1);
        }
    </style>
</head>
<body>
    <header class="text-gray-600 body-font" style="margin-bottom: 0px; background-color: rgb(228, 243, 255);">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
           <!--<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg> -->
            <span class="ml-2 text-xl" style="font-size: xx-large; font-weight: bolder; color: rgb(2, 0, 17);">Sportèfit</span>
          </a>
          <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-gray-900" href="home.php" id="zoom-box">Home</a>
            <a class="mr-5 hover:text-gray-900" href="shopa.php" id="zoom-box">Shop</a>
            <a class="mr-5 hover:text-gray-900" href="coaching.php" id="zoom-box">Coaching</a>
          </nav>
          <?php  if (isset($_SESSION['username'])) : ?>
          <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"><a href="login.php">logout</a>
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </button>
  <?php endif ?>
        </div>
      </header>
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap w-full mb-8 flex-col items-center text-center">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white" style="font-size: xx-large; font-weight: bolder;">Sports</h1>
            <p class="lg:w-1/2 w-full leading-relaxed text-white">Now all your favourite sports are here!!</p>
          </div>
          <div class="flex flex-wrap -m-4">
            <div class="xl:w-1/3 md:w-1/2 p-4" id="zoom-box">
              <div class="border border-gray-200 p-8 rounded-lg" style="background-image: url(cricket.png); background-repeat: no-repeat; background-size:cover; background-position: right;">
                
                <a class="text-lg text-white font-medium title-font mb-2" style="font-weight: bolder; font-size: x-large;" href="shopa.php">Cricket</a>
                <p class="leading-relaxed text-white">India's number 1 sport</p>
              </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4" id="zoom-box">
              <div class="border border-gray-200 p-8 rounded-lg" style="background-image: url(football.png); background-repeat: no-repeat; background-size:100% 100%">
                
                <a class="text-lg text-white font-medium title-font mb-2" style="font-weight: bolder; font-size: x-large;" href="shopb.php">Football</a>
                <p class="leading-relaxed text-white">The trending sport</p>
              </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4" id="zoom-box">
              <div class="border border-gray-200 p-8 rounded-lg" style="background-image: url(basketball.png); background-repeat: no-repeat; background-size:100% 100%">
                
                <a class="text-lg text-white font-medium title-font mb-2" style="font-weight: bolder; font-size: x-large;" href="shopc.php">And more...</a>
                <p class="leading-relaxed text-white">How high could you jump?</p>
              </div>
            </div>
            <div class="flex flex-wrap w-full mb-2 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mt-6 text-white" style="font-size: xx-large; font-weight: bolder;">Features</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-white">What we provide</p>
              </div>
            <div class="xl:w-1/3 md:w-1/2 p-4" id="zoom-box">
              <div class="border border-gray-200 p-8 rounded-lg" style="background-image: url(equip.png); background-repeat: no-repeat; background-size:100% 100%">
                
                <a class="text-lg text-white font-medium title-font mb-2" style="font-weight: bolder; font-size: x-large;" href="shopa.php">Equipments</a>
                <p class="leading-relaxed text-white">Gear up to play the gme yourself</p>
              </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4" id="zoom-box">
              <div class="border border-gray-200 p-8 rounded-lg" style="background-image: url(jersey.png); background-repeat: no-repeat; background-size:100% 100%">
               
                <a class="text-lg text-white font-medium title-font mb-2" style="font-weight: bolder; font-size: x-large;" href="shopd.php">Jerseys & Accessories</a>
                <p class="leading-relaxed text-white">Unleash the fan inside you</p>
              </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4" id="zoom-box">
              <div class="border border-gray-200 p-8 rounded-lg" style="background-image: url(training.png); background-repeat: no-repeat; background-size:100% 100%">
                
                <a class="text-lg text-white font-medium title-font mb-2" style="font-weight: bolder; font-size: x-large;" href="coaching.php">Coaching</a>
                <p class="leading-relaxed text-white">Wanna be the pro</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col" style="position:static;">
          <!--<a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">Tailblocks</span>
          </a>
          <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020 Tailblocks —
            <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@knyttneve</a>
          </p> -->
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-end">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
              </svg>
            </a>
          </span>
        </div>
      </footer>
</body>
</html>