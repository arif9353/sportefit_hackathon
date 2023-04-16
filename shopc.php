
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
            background-image: url(shopcbg.png);
            background-repeat: no-repeat;
            background-size: 100% 100%;
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
            <a class="mr-5 hover:text-gray-900" href="sports.php" id="zoom-box">Home</a>
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
          <div class="flex flex-wrap -m-4" >
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
                <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/Nivia-Pro-Touch-Basketball/dp/B0094VSP8K/ref=sr_1_14?crid=O72E33NYXVFV&keywords=basketball&qid=1679837335&sprefix=basketball%2Caps%2C418&sr=8-14" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="niviabb.png">
                </a>
                <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                  <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Basketball</a><br>
                  <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/Nivia-Pro-Touch-Basketball/dp/B0094VSP8K/ref=sr_1_14?crid=O72E33NYXVFV&keywords=basketball&qid=1679837335&sprefix=basketball%2Caps%2C418&sr=8-14" target="_blank">Nivia Pro Touch Basketball</a><br>
                  <a class="mt-1" href="https://www.amazon.in/Nivia-Pro-Touch-Basketball/dp/B0094VSP8K/ref=sr_1_14?crid=O72E33NYXVFV&keywords=basketball&qid=1679837335&sprefix=basketball%2Caps%2C418&sr=8-14" target="_blank">Rs. 1,495</a>
                </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
                <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/Elk-Power-Nylon-Diameter-Basketball/dp/B07PXHNQRW/ref=sr_1_6?crid=1H5IC5UT3QBGI&keywords=basketball+net&qid=1679837589&sprefix=basketball+net%2Caps%2C371&sr=8-6" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="bbnet.png">
                </a>
                <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                  <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Basketball</a><br>
                  <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/Elk-Power-Nylon-Diameter-Basketball/dp/B07PXHNQRW/ref=sr_1_6?crid=1H5IC5UT3QBGI&keywords=basketball+net&qid=1679837589&sprefix=basketball+net%2Caps%2C371&sr=8-6" target="_blank">Elk Basketball Ring</a><br>
                  <a class="mt-1" href="https://www.amazon.in/Elk-Power-Nylon-Diameter-Basketball/dp/B07PXHNQRW/ref=sr_1_6?crid=1H5IC5UT3QBGI&keywords=basketball+net&qid=1679837589&sprefix=basketball+net%2Caps%2C371&sr=8-6" target="_blank">Rs. 599</a>
                </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
                <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/Yonex-ZR-Aluminum-Badminton-Racquet/dp/B07SKHQ7GF/ref=sr_1_16?keywords=badminton+rackets&qid=1679837719&sprefix=bad%2Caps%2C304&sr=8-16" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="badminton.png">
                </a>
                <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                  <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Badminton</a><br>
                  <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/Yonex-ZR-Aluminum-Badminton-Racquet/dp/B07SKHQ7GF/ref=sr_1_16?keywords=badminton+rackets&qid=1679837719&sprefix=bad%2Caps%2C304&sr=8-16" target="_blank">Yonex ZR 100</a><br>
                  <a class="mt-1" href="https://www.amazon.in/Yonex-ZR-Aluminum-Badminton-Racquet/dp/B07SKHQ7GF/ref=sr_1_16?keywords=badminton+rackets&qid=1679837719&sprefix=bad%2Caps%2C304&sr=8-16" target="_blank">Rs. 979</a>
                </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
                <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/Yonex-Mavis-350-Shuttlecock-Yellow/dp/B000FI8ER8/ref=sr_1_6?crid=33RTK848MAJWD&keywords=badminton+shuttle&qid=1679837886&sprefix=badminton+shuttle%2Caps%2C354&sr=8-6" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="bshuttles.png">
                </a>
                <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                  <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Badminton</a><br>
                  <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/Yonex-Mavis-350-Shuttlecock-Yellow/dp/B000FI8ER8/ref=sr_1_6?crid=33RTK848MAJWD&keywords=badminton+shuttle&qid=1679837886&sprefix=badminton+shuttle%2Caps%2C354&sr=8-6" target="_blank">Yonex Mavis 350 Shuttlecock</a><br>
                  <a class="mt-1" href="https://www.amazon.in/Yonex-Mavis-350-Shuttlecock-Yellow/dp/B000FI8ER8/ref=sr_1_6?crid=33RTK848MAJWD&keywords=badminton+shuttle&qid=1679837886&sprefix=badminton+shuttle%2Caps%2C354&sr=8-6" target="_blank">Rs. 1,104</a>
                </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
              <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/AMZ-SPORTS-NETS-Badminton-Replacement/dp/B09NYLMXB3/ref=sr_1_2_sspa?crid=2J9MEB3313JDP&keywords=badminton+net&qid=1679838076&sprefix=badminton+net%2Caps%2C348&sr=8-2-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9hdGY&psc=1" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="bnet.png">
              </a>
              <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Badminton</a><br>
                <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/AMZ-SPORTS-NETS-Badminton-Replacement/dp/B09NYLMXB3/ref=sr_1_2_sspa?crid=2J9MEB3313JDP&keywords=badminton+net&qid=1679838076&sprefix=badminton+net%2Caps%2C348&sr=8-2-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9hdGY&psc=1" target="_blank">AMZ SPORTS Badminton Nets</a><br>
                <a class="mt-1" href="https://www.amazon.in/AMZ-SPORTS-NETS-Badminton-Replacement/dp/B09NYLMXB3/ref=sr_1_2_sspa?crid=2J9MEB3313JDP&keywords=badminton+net&qid=1679838076&sprefix=badminton+net%2Caps%2C348&sr=8-2-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9hdGY&psc=1" target="_blank">Rs. 566</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
              <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/Stag-Star-Table-Tennis-Balls/dp/B00IM8FWP0/ref=sr_1_10?crid=37TFJFF3NYF64&keywords=table+tennis+racket&qid=1679838206&sprefix=table+tenn%2Caps%2C368&sr=8-10" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="ttset.png">
              </a>
              <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Table Tennis</a><br>
                <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/Stag-Star-Table-Tennis-Balls/dp/B00IM8FWP0/ref=sr_1_10?crid=37TFJFF3NYF64&keywords=table+tennis+racket&qid=1679838206&sprefix=table+tenn%2Caps%2C368&sr=8-10" target="_blank">Stag TT Playset</a><br>
                <a class="mt-1" href="https://www.amazon.in/Stag-Star-Table-Tennis-Balls/dp/B00IM8FWP0/ref=sr_1_10?crid=37TFJFF3NYF64&keywords=table+tennis+racket&qid=1679838206&sprefix=table+tenn%2Caps%2C368&sr=8-10" target="_blank">Rs. 510</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
              <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/Gymnco-Robust-Stopper-Laminated-Compressed/dp/B073M77Z5Y/ref=sr_1_8?crid=2V147JK7PPEM1&keywords=table+tennis+table&qid=1679838351&sprefix=table+tennis+tabl%2Caps%2C286&sr=8-8" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="tttaable.png">
              </a>
              <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Table Tennis</a><br>
                <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/Gymnco-Robust-Stopper-Laminated-Compressed/dp/B073M77Z5Y/ref=sr_1_8?crid=2V147JK7PPEM1&keywords=table+tennis+table&qid=1679838351&sprefix=table+tennis+tabl%2Caps%2C286&sr=8-8" target="_blank">GYMNCO TT Table</a><br>
                <a class="mt-1" href="https://www.amazon.in/Gymnco-Robust-Stopper-Laminated-Compressed/dp/B073M77Z5Y/ref=sr_1_8?crid=2V147JK7PPEM1&keywords=table+tennis+table&qid=1679838351&sprefix=table+tennis+tabl%2Caps%2C286&sr=8-8" target="_blank">Rs. 19,999</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
              <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/Nivia-Craters-Moulded-Volleyball/dp/B016F79C78/ref=sr_1_7?crid=PKSO0K1ABHT1&keywords=volleyball&qid=1679838614&sprefix=volley%2Caps%2C358&sr=8-7" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="vb.png">
              </a>
              <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Volleyball</a><br>
                <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/Nivia-Craters-Moulded-Volleyball/dp/B016F79C78/ref=sr_1_7?crid=PKSO0K1ABHT1&keywords=volleyball&qid=1679838614&sprefix=volley%2Caps%2C358&sr=8-7" target="_blank">Nivia Craters Volleyball</a><br>
                <a class="mt-1" href="https://www.amazon.in/Nivia-Craters-Moulded-Volleyball/dp/B016F79C78/ref=sr_1_7?crid=PKSO0K1ABHT1&keywords=volleyball&qid=1679838614&sprefix=volley%2Caps%2C358&sr=8-7" target="_blank">Rs. 419</a>
              </div>
            </div>
          </div>
        </div>
        <div>
            <a style="margin-left: 2%; background-color: white; color: rgb(50, 50, 50); padding: 6px; border: none; border-radius: 8px; opacity: 0.8;" href="shopb.php"><button>< Previous</button></a> 
            <a style="margin-left: 94%; background-color: white; color: rgb(50, 50, 50); padding: 6px; border: none; border-radius: 8px; opacity: 0.8;" href="shopd.php"><button>Next ></button></a> 
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