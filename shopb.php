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
            background-image: url(shopbbg.png);
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
                <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/Adidas-AL-RIHLA-League-Football/dp/B09GS3CPQ1/ref=sr_1_6?crid=28LC9RQMJU1E4&keywords=football&qid=1679831897&s=sports&sprefix=football%2Csporting%2C203&sr=1-6" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="adidasfb.png">
                </a>
                <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                  <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Football</a><br>
                  <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/Adidas-AL-RIHLA-League-Football/dp/B09GS3CPQ1/ref=sr_1_6?crid=28LC9RQMJU1E4&keywords=football&qid=1679831897&s=sports&sprefix=football%2Csporting%2C203&sr=1-6" target="_blank">Adidas RIHLA League Football</a><br>
                  <a class="mt-1" href="https://www.amazon.in/Adidas-AL-RIHLA-League-Football/dp/B09GS3CPQ1/ref=sr_1_6?crid=28LC9RQMJU1E4&keywords=football&qid=1679831897&s=sports&sprefix=football%2Csporting%2C203&sr=1-6" target="_blank">Rs. 2,799</a>
                </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
                <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/Nivia-Storm-Football-Size-White/dp/B00ICCYF0E/ref=sr_1_4?crid=28LC9RQMJU1E4&keywords=football&qid=1679831897&s=sports&sprefix=football%2Csporting%2C203&sr=1-4" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="niviafb.png">
                </a>
                <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                  <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Football</a><br>
                  <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/Nivia-Storm-Football-Size-White/dp/B00ICCYF0E/ref=sr_1_4?crid=28LC9RQMJU1E4&keywords=football&qid=1679831897&s=sports&sprefix=football%2Csporting%2C203&sr=1-4" target="_blank">Nivia Storm Football</a><br>
                  <a class="mt-1" href="https://www.amazon.in/Nivia-Storm-Football-Size-White/dp/B00ICCYF0E/ref=sr_1_4?crid=28LC9RQMJU1E4&keywords=football&qid=1679831897&s=sports&sprefix=football%2Csporting%2C203&sr=1-4" target="_blank">Rs. 400</a>
                </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
                <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/Nivia-1229BK-Airstrike-Football-Stud/dp/B088TRW2WW/ref=sr_1_7?keywords=football%2Bstuds&qid=1679833361&s=sports&sprefix=football%2Bstu%2Csporting%2C184&sr=1-7&th=1" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="niviastuds.png">
                </a>
                <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                  <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Football</a><br>
                  <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/Nivia-1229BK-Airstrike-Football-Stud/dp/B088TRW2WW/ref=sr_1_7?keywords=football%2Bstuds&qid=1679833361&s=sports&sprefix=football%2Bstu%2Csporting%2C184&sr=1-7&th=1" target="_blank">Nivia Airstrike Football Stud</a><br>
                  <a class="mt-1" href="https://www.amazon.in/Nivia-1229BK-Airstrike-Football-Stud/dp/B088TRW2WW/ref=sr_1_7?keywords=football%2Bstuds&qid=1679833361&s=sports&sprefix=football%2Bstu%2Csporting%2C184&sr=1-7&th=1" target="_blank">Rs. 854</a>
                </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
                <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/Vector-Gravity-Football-Studds-White-Black-Gold/dp/B0BH8Y1FLT/ref=sr_1_22?keywords=football+studs&qid=1679833893&s=sports&sprefix=football+stu%2Csporting%2C184&sr=1-22" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="vectorxstuds.png">
                </a>
                <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                  <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Football</a><br>
                  <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/Vector-Gravity-Football-Studds-White-Black-Gold/dp/B0BH8Y1FLT/ref=sr_1_22?keywords=football+studs&qid=1679833893&s=sports&sprefix=football+stu%2Csporting%2C184&sr=1-22" target="_blank">Vector X Gravity Football Studs</a><br>
                  <a class="mt-1" href="https://www.amazon.in/Vector-Gravity-Football-Studds-White-Black-Gold/dp/B0BH8Y1FLT/ref=sr_1_22?keywords=football+studs&qid=1679833893&s=sports&sprefix=football+stu%2Csporting%2C184&sr=1-22" target="_blank">Rs. 820</a>
                </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
              <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/Nike-Phantom-Vision-Dynamic-Soccer/dp/B082MG159S/ref=sr_1_10?crid=2EHZLP1OA6B5E&keywords=nike+football+studs&qid=1679833741&s=sports&sprefix=nike+football+studs%2Csporting%2C194&sr=1-10" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="nikestuds.png">
              </a>
              <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Football</a><br>
                <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/Nike-Phantom-Vision-Dynamic-Soccer/dp/B082MG159S/ref=sr_1_10?crid=2EHZLP1OA6B5E&keywords=nike+football+studs&qid=1679833741&s=sports&sprefix=nike+football+studs%2Csporting%2C194&sr=1-10" target="_blank">Nike Phantom Vsn 2 Elite</a><br>
                <a class="mt-1" href="https://www.amazon.in/Nike-Phantom-Vision-Dynamic-Soccer/dp/B082MG159S/ref=sr_1_10?crid=2EHZLP1OA6B5E&keywords=nike+football+studs&qid=1679833741&s=sports&sprefix=nike+football+studs%2Csporting%2C194&sr=1-10" target="_blank">Rs. 49,815</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
              <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/Nivia-728LBW-Encounter-Blend-Stockings/dp/B079SCPN7W/ref=sr_1_4?crid=U9AX9XWL56J2&keywords=football+stockings&qid=1679834047&s=sports&sprefix=football+stockings%2Csporting%2C201&sr=1-4" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="niviastockings.png">
              </a>
              <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Football</a><br>
                <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/Nivia-728LBW-Encounter-Blend-Stockings/dp/B079SCPN7W/ref=sr_1_4?crid=U9AX9XWL56J2&keywords=football+stockings&qid=1679834047&s=sports&sprefix=football+stockings%2Csporting%2C201&sr=1-4" target="_blank">Nivia Plain Football Stockings</a><br>
                <a class="mt-1" href="https://www.amazon.in/Nivia-728LBW-Encounter-Blend-Stockings/dp/B079SCPN7W/ref=sr_1_4?crid=U9AX9XWL56J2&keywords=football+stockings&qid=1679834047&s=sports&sprefix=football+stockings%2Csporting%2C201&sr=1-4" target="_blank">Rs. 112</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
              <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/Fitfix-Pop-Up-Goal-Centimetre/dp/B09VPS3DG4/ref=sr_1_8?keywords=football+goal+post&qid=1679836335&s=sports&sprefix=football+goa%2Csporting%2C279&sr=1-8" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="goalpost.png">
              </a>
              <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Football</a><br>
                <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/Fitfix-Pop-Up-Goal-Centimetre/dp/B09VPS3DG4/ref=sr_1_8?keywords=football+goal+post&qid=1679836335&s=sports&sprefix=football+goa%2Csporting%2C279&sr=1-8" target="_blank">Fitfix Portable Goal Post</a><br>
                <a class="mt-1" href="https://www.amazon.in/Fitfix-Pop-Up-Goal-Centimetre/dp/B09VPS3DG4/ref=sr_1_8?keywords=football+goal+post&qid=1679836335&s=sports&sprefix=football+goa%2Csporting%2C279&sr=1-8" target="_blank">Rs. 2,555</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
              <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/LAVENIR-Complete-Football-Training-Building/dp/B08D7RYNXL/ref=sr_1_5?crid=3S38QZQNYI4CD&keywords=football+practice+kit&qid=1679836478&s=sports&sprefix=football+practice+ki%2Csporting%2C198&sr=1-5" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="fbpracticekit.png">
              </a>
              <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Football</a><br>
                <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/LAVENIR-Complete-Football-Training-Building/dp/B08D7RYNXL/ref=sr_1_5?crid=3S38QZQNYI4CD&keywords=football+practice+kit&qid=1679836478&s=sports&sprefix=football+practice+ki%2Csporting%2C198&sr=1-5" target="_blank">L'AVENIR Complete Training Kit</a><br>
                <a class="mt-1" href="https://www.amazon.in/LAVENIR-Complete-Football-Training-Building/dp/B08D7RYNXL/ref=sr_1_5?crid=3S38QZQNYI4CD&keywords=football+practice+kit&qid=1679836478&s=sports&sprefix=football+practice+ki%2Csporting%2C198&sr=1-5" target="_blank">Rs. 2,141</a>
              </div>
            </div>
          </div>
        </div>
        <div>
            <a style="margin-left: 2%; background-color: white; color: rgb(50, 50, 50); padding: 6px; border: none; border-radius: 8px; opacity: 0.8;" href="shopa.php"><button>< Previous</button></a> 
            <a style="margin-left: 94%; background-color: white; color: rgb(50, 50, 50); padding: 6px; border: none; border-radius: 8px; opacity: 0.8;" href="shopc.php"><button>Next ></button></a> 
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