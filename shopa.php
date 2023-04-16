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
            background-image: url(shopabg.png);
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
            <a class="mr-5 hover:text-gray-900" id="zoom-box" herf="shopa.php">Shop</a>
            <a class="mr-5 hover:text-gray-900" id="zoom-box" href="coaching.php">Coaching</a>
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
              <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/SS-Limited-English-Willow-Cricket/dp/B00IIK5HHU/ref=sr_1_12?keywords=ss%2Bbats%2Benglish%2Bwillow&qid=1679765048&sprefix=ss%2Bbats%2Caps%2C415&sr=8-12&th=1&psc=1" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="ss1.png">
              </a>
              <div class="mt-0" style="background-color: rgb(255, 255, 255); padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Cricket</a><br>
                <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/SS-Limited-English-Willow-Cricket/dp/B00IIK5HHU/ref=sr_1_12?keywords=ss%2Bbats%2Benglish%2Bwillow&qid=1679765048&sprefix=ss%2Bbats%2Caps%2C415&sr=8-12&th=1&psc=1" target="_blank">SS English Willow</a><br>
                <a class="mt-1" href="https://www.amazon.in/SS-Limited-English-Willow-Cricket/dp/B00IIK5HHU/ref=sr_1_12?keywords=ss%2Bbats%2Benglish%2Bwillow&qid=1679765048&sprefix=ss%2Bbats%2Caps%2C415&sr=8-12&th=1&psc=1" target="_blank">Rs. 8,174</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
              <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/GM-Chroma-English-Willow-Cricket/dp/B097BJ328P/ref=sr_1_20?keywords=gray+nicolls+bat&qid=1679828776&sprefix=gray+ni%2Caps%2C178&sr=8-20" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="gmbat.png">
              </a>
              <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Cricket</a><br>
                <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/GM-Chroma-English-Willow-Cricket/dp/B097BJ328P/ref=sr_1_20?keywords=gray+nicolls+bat&qid=1679828776&sprefix=gray+ni%2Caps%2C178&sr=8-20" target="_blank">GM Chroma 606 English Willow</a><br>
                <a class="mt-1" href="https://www.amazon.in/GM-Chroma-English-Willow-Cricket/dp/B097BJ328P/ref=sr_1_20?keywords=gray+nicolls+bat&qid=1679828776&sprefix=gray+ni%2Caps%2C178&sr=8-20" target="_blank">Rs. 12,173</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
              <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/SG-Club-Cricket-Ball-Leather/dp/B07PTBGBVV/ref=sr_1_29?keywords=season+ball&qid=1679829153&sprefix=season+%2Caps%2C177&sr=8-29" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="sgclubred.png">
              </a>
              <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Cricket</a><br>
                <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/SG-Club-Cricket-Ball-Leather/dp/B07PTBGBVV/ref=sr_1_29?keywords=season+ball&qid=1679829153&sprefix=season+%2Caps%2C177&sr=8-29" target="_blank">SG Club Leather Ball(Red)</a><br>
                <a class="mt-1" href="https://www.amazon.in/SG-Club-Cricket-Ball-Leather/dp/B07PTBGBVV/ref=sr_1_29?keywords=season+ball&qid=1679829153&sprefix=season+%2Caps%2C177&sr=8-29" target="_blank">Rs. 725</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
              <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/club-Leather-Ball-pitch-White/dp/B01N8PUI1R/ref=pd_rhf_d_se_s_pd_crcd_sccl_2_1/262-1482248-7613701?pd_rd_w=bu4Pw&content-id=amzn1.sym.dcf9b861-ea71-4cd9-870f-f1d20747f687&pf_rd_p=dcf9b861-ea71-4cd9-870f-f1d20747f687&pf_rd_r=NNP7NSD1XR7CGXYNPCX7&pd_rd_wg=Fv0gd&pd_rd_r=09088c1b-15e3-4900-9155-12b7c70f1029&pd_rd_i=B01N8PUI1R&psc=1" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="sgclubwhite.png">
              </a>
              <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Cricket</a><br>
                <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/club-Leather-Ball-pitch-White/dp/B01N8PUI1R/ref=pd_rhf_d_se_s_pd_crcd_sccl_2_1/262-1482248-7613701?pd_rd_w=bu4Pw&content-id=amzn1.sym.dcf9b861-ea71-4cd9-870f-f1d20747f687&pf_rd_p=dcf9b861-ea71-4cd9-870f-f1d20747f687&pf_rd_r=NNP7NSD1XR7CGXYNPCX7&pd_rd_wg=Fv0gd&pd_rd_r=09088c1b-15e3-4900-9155-12b7c70f1029&pd_rd_i=B01N8PUI1R&psc=1" target="_blank">SG Club Leather Ball(White)</a><br>
                <a class="mt-1" href="https://www.amazon.in/club-Leather-Ball-pitch-White/dp/B01N8PUI1R/ref=pd_rhf_d_se_s_pd_crcd_sccl_2_1/262-1482248-7613701?pd_rd_w=bu4Pw&content-id=amzn1.sym.dcf9b861-ea71-4cd9-870f-f1d20747f687&pf_rd_p=dcf9b861-ea71-4cd9-870f-f1d20747f687&pf_rd_r=NNP7NSD1XR7CGXYNPCX7&pd_rd_wg=Fv0gd&pd_rd_r=09088c1b-15e3-4900-9155-12b7c70f1029&pd_rd_i=B01N8PUI1R&psc=1" target="_blank">Rs. 876</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
              <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/SG-LITE-Youth-RH-Batting/dp/B081VFM8VN/ref=sr_1_9?crid=T98IDRLTCGMQ&keywords=cricket+gloves&qid=1679830003&s=sports&sprefix=crricket+gloves%2Csporting%2C211&sr=1-9" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="sggloves.png">
              </a>
              <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Cricket</a><br>
                <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/SG-LITE-Youth-RH-Batting/dp/B081VFM8VN/ref=sr_1_9?crid=T98IDRLTCGMQ&keywords=cricket+gloves&qid=1679830003&s=sports&sprefix=crricket+gloves%2Csporting%2C211&sr=1-9" target="_blank">SG SAVAGE LITE</a><br>
                <a class="mt-1" href="https://www.amazon.in/SG-LITE-Youth-RH-Batting/dp/B081VFM8VN/ref=sr_1_9?crid=T98IDRLTCGMQ&keywords=cricket+gloves&qid=1679830003&s=sports&sprefix=crricket+gloves%2Csporting%2C211&sr=1-9" target="_blank">Rs. 2,349</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
              <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/SG-Aeroselect-Cricket-Helmet-Large/dp/B01EWZSPNC/ref=sr_1_37?keywords=cricket+helmet&qid=1679830200&s=sports&sprefix=cr%2Csporting%2C196&sr=1-37" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="sghelmet.png">
              </a>
              <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Cricket</a><br>
                <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/SG-Aeroselect-Cricket-Helmet-Large/dp/B01EWZSPNC/ref=sr_1_37?keywords=cricket+helmet&qid=1679830200&s=sports&sprefix=cr%2Csporting%2C196&sr=1-37" target="_blank">SG aeroselect cricket helmet</a><br>
                <a class="mt-1" href="https://www.amazon.in/SG-Aeroselect-Cricket-Helmet-Large/dp/B01EWZSPNC/ref=sr_1_37?keywords=cricket+helmet&qid=1679830200&s=sports&sprefix=cr%2Csporting%2C196&sr=1-37" target="_blank">Rs. 1,599</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
              <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/SG-Test-Batting-Legguard-Youth/dp/B00IB7HGOW/ref=sr_1_21?keywords=cricket+pads&qid=1679830326&s=sports&sprefix=c%2Csporting%2C205&sr=1-21" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="sgpads.png">
              </a>
              <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Cricket</a><br>
                <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/SG-Test-Batting-Legguard-Youth/dp/B00IB7HGOW/ref=sr_1_21?keywords=cricket+pads&qid=1679830326&s=sports&sprefix=c%2Csporting%2C205&sr=1-21" target="_blank">SG Test Legguard</a><br>
                <a class="mt-1" href="https://www.amazon.in/SG-Test-Batting-Legguard-Youth/dp/B00IB7HGOW/ref=sr_1_21?keywords=cricket+pads&qid=1679830326&s=sports&sprefix=c%2Csporting%2C205&sr=1-21" target="_blank">Rs. 3,969</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
              <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/SS-Glory-Double-Cricket-Kitbag/dp/B07NCLR34G/ref=sr_1_12?keywords=cricket+kit+bag&qid=1679830573&s=sports&sprefix=cricket+ki%2Csporting%2C191&sr=1-12" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="sskitbg.png">
              </a>
              <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Cricket</a><br>
                <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/SS-Glory-Double-Cricket-Kitbag/dp/B07NCLR34G/ref=sr_1_12?keywords=cricket+kit+bag&qid=1679830573&s=sports&sprefix=cricket+ki%2Csporting%2C191&sr=1-12" target="_blank">SS Glory Cricket kit Bag</a><br>
                <a class="mt-1" href="https://www.amazon.in/SS-Glory-Double-Cricket-Kitbag/dp/B07NCLR34G/ref=sr_1_12?keywords=cricket+kit+bag&qid=1679830573&s=sports&sprefix=cricket+ki%2Csporting%2C191&sr=1-12" target="_blank">Rs. 1,699</a>
              </div>
            </div>
          </div>
        </div>
        <div>
            <a style="margin-left: 2%; background-color: white; color: rgb(50, 50, 50); padding: 6px; border: none; border-radius: 8px; opacity: 0.6;"><button>< Previous</button></a> 
            <a style="margin-left: 94%; background-color: white; color: rgb(50, 50, 50); padding: 6px; border: none; border-radius: 8px; opacity: 0.8;" href="shopb.php"><button>Next ></button></a> 
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