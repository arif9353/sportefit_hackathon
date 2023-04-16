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
            background-image: url(shopdbg.png);
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
                <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/Football-Jersey-Sleeve-Medium-Multicolour/dp/B0BRBF94TM/ref=sr_1_15?crid=2B9DB9WPQXOF8&keywords=jerseys&qid=1679839396&sprefix=jersey%2Caps%2C378&sr=8-15" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="psgjersey.png">
                </a>
                <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                  <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Jersey</a><br>
                  <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/Football-Jersey-Sleeve-Medium-Multicolour/dp/B0BRBF94TM/ref=sr_1_15?crid=2B9DB9WPQXOF8&keywords=jerseys&qid=1679839396&sprefix=jersey%2Caps%2C378&sr=8-15" target="_blank">PSG Home</a><br>
                  <a class="mt-1" href="https://www.amazon.in/Football-Jersey-Sleeve-Medium-Multicolour/dp/B0BRBF94TM/ref=sr_1_15?crid=2B9DB9WPQXOF8&keywords=jerseys&qid=1679839396&sprefix=jersey%2Caps%2C378&sr=8-15" target="_blank">Rs. 349</a>
                </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
                <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/Positivity-Sports-Jersey-2023-Multicolour/dp/B0BYZVYT5J/ref=sr_1_6?crid=2B9DB9WPQXOF8&keywords=jerseys&qid=1679839396&sprefix=jersey%2Caps%2C378&sr=8-6" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="mijersey.png">
                </a>
                <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                  <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Jersey</a><br>
                  <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/Positivity-Sports-Jersey-2023-Multicolour/dp/B0BYZVYT5J/ref=sr_1_6?crid=2B9DB9WPQXOF8&keywords=jerseys&qid=1679839396&sprefix=jersey%2Caps%2C378&sr=8-6" target="_blank">MI IPL 2023</a><br>
                  <a class="mt-1" href="https://www.amazon.in/Positivity-Sports-Jersey-2023-Multicolour/dp/B0BYZVYT5J/ref=sr_1_6?crid=2B9DB9WPQXOF8&keywords=jerseys&qid=1679839396&sprefix=jersey%2Caps%2C378&sr=8-6" target="_blank">Rs. 369</a>
                </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
                <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/Barcelona-Jersey-Shorts-Women-X-Large/dp/B0994RR1H2/ref=sr_1_26?crid=2B9DB9WPQXOF8&keywords=jerseys&qid=1679839396&sprefix=jersey%2Caps%2C378&sr=8-26" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="barcajersey.png">
                </a>
                <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                  <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Jersey</a><br>
                  <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/Barcelona-Jersey-Shorts-Women-X-Large/dp/B0994RR1H2/ref=sr_1_26?crid=2B9DB9WPQXOF8&keywords=jerseys&qid=1679839396&sprefix=jersey%2Caps%2C378&sr=8-26" target="_blank">FC Barcelona Home</a><br>
                  <a class="mt-1" href="https://www.amazon.in/Barcelona-Jersey-Shorts-Women-X-Large/dp/B0994RR1H2/ref=sr_1_26?crid=2B9DB9WPQXOF8&keywords=jerseys&qid=1679839396&sprefix=jersey%2Caps%2C378&sr=8-26" target="_blank">Rs. 998</a>
                </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
                <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/adidas-mens-Track-Pants-3X-Large/dp/B087D8KM54/ref=sxin_25_slsr_d_i_fs4star_fa_2_B087D8KM54?content-id=amzn1.sym.38b84696-ffe4-48a8-accc-c9001fc80941%3Aamzn1.sym.38b84696-ffe4-48a8-accc-c9001fc80941&cv_ct_cx=sports+track+pant+for+men&keywords=sports+track+pant+for+men&pd_rd_i=B087D8KM54&pd_rd_r=0065c94d-6c59-4a98-921e-2ca7ffbcd2cf&pd_rd_w=fS5jH&pd_rd_wg=8AYYJ&pf_rd_p=38b84696-ffe4-48a8-accc-c9001fc80941&pf_rd_r=03GR9FG4FASPQJPR4CCP&qid=1679839884&sbo=RZvfv%2F%2FHxDF%2BO5021pAnSA%3D%3D&sprefix=sports+tra%2Caps%2C338&sr=1-3-41e0d225-3819-4755-898e-7f0f48633b47" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="adidastracks.png">
                </a>
                <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                  <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Sports Clothing</a><br>
                  <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/adidas-mens-Track-Pants-3X-Large/dp/B087D8KM54/ref=sxin_25_slsr_d_i_fs4star_fa_2_B087D8KM54?content-id=amzn1.sym.38b84696-ffe4-48a8-accc-c9001fc80941%3Aamzn1.sym.38b84696-ffe4-48a8-accc-c9001fc80941&cv_ct_cx=sports+track+pant+for+men&keywords=sports+track+pant+for+men&pd_rd_i=B087D8KM54&pd_rd_r=0065c94d-6c59-4a98-921e-2ca7ffbcd2cf&pd_rd_w=fS5jH&pd_rd_wg=8AYYJ&pf_rd_p=38b84696-ffe4-48a8-accc-c9001fc80941&pf_rd_r=03GR9FG4FASPQJPR4CCP&qid=1679839884&sbo=RZvfv%2F%2FHxDF%2BO5021pAnSA%3D%3D&sprefix=sports+tra%2Caps%2C338&sr=1-3-41e0d225-3819-4755-898e-7f0f48633b47" target="_blank">Adidas Tracks</a><br>
                  <a class="mt-1" href="https://www.amazon.in/adidas-mens-Track-Pants-3X-Large/dp/B087D8KM54/ref=sxin_25_slsr_d_i_fs4star_fa_2_B087D8KM54?content-id=amzn1.sym.38b84696-ffe4-48a8-accc-c9001fc80941%3Aamzn1.sym.38b84696-ffe4-48a8-accc-c9001fc80941&cv_ct_cx=sports+track+pant+for+men&keywords=sports+track+pant+for+men&pd_rd_i=B087D8KM54&pd_rd_r=0065c94d-6c59-4a98-921e-2ca7ffbcd2cf&pd_rd_w=fS5jH&pd_rd_wg=8AYYJ&pf_rd_p=38b84696-ffe4-48a8-accc-c9001fc80941&pf_rd_r=03GR9FG4FASPQJPR4CCP&qid=1679839884&sbo=RZvfv%2F%2FHxDF%2BO5021pAnSA%3D%3D&sprefix=sports+tra%2Caps%2C338&sr=1-3-41e0d225-3819-4755-898e-7f0f48633b47" target="_blank">Rs. 4,485</a>
                </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
              <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/Tough-Outdoors-Protection-Cooling-Sleeves/dp/B073TWJ7LL/ref=sr_1_10?crid=9G498LJLCQBR&keywords=sleeves&qid=1679840041&sprefix=sleeeve%2Caps%2C337&sr=8-10" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="sleeves.png">
              </a>
              <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Accessories</a><br>
                <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/Tough-Outdoors-Protection-Cooling-Sleeves/dp/B073TWJ7LL/ref=sr_1_10?crid=9G498LJLCQBR&keywords=sleeves&qid=1679840041&sprefix=sleeeve%2Caps%2C337&sr=8-10" target="_blank">Black Sleeves</a><br>
                <a class="mt-1" href="https://www.amazon.in/Tough-Outdoors-Protection-Cooling-Sleeves/dp/B073TWJ7LL/ref=sr_1_10?crid=9G498LJLCQBR&keywords=sleeves&qid=1679840041&sprefix=sleeeve%2Caps%2C337&sr=8-10" target="_blank">Rs. 83</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
              <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/SG-Club-Sleeves-Cricket-Combo/dp/B00L7KWSW0/ref=sr_1_15?keywords=cricket+whites&qid=1679840208&sprefix=cricket+whi%2Caps%2C350&sr=8-15" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="sgjersey.png">
              </a>
              <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Jersey</a><br>
                <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/SG-Club-Sleeves-Cricket-Combo/dp/B00L7KWSW0/ref=sr_1_15?keywords=cricket+whites&qid=1679840208&sprefix=cricket+whi%2Caps%2C350&sr=8-15" target="_blank">SG Club Full Sleeves</a><br>
                <a class="mt-1" href="https://www.amazon.in/SG-Club-Sleeves-Cricket-Combo/dp/B00L7KWSW0/ref=sr_1_15?keywords=cricket+whites&qid=1679840208&sprefix=cricket+whi%2Caps%2C350&sr=8-15" target="_blank">Rs. 1,125</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
              <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/Cricket-Sunglasses-Legacy-White-SS/dp/B09HQRTNBL/ref=sr_1_14?crid=3K2KGYHGS1BS1&keywords=cricket+glasses&qid=1679840352&sprefix=cricket+glasses%2Caps%2C302&sr=8-14" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="ssglasses.png">
              </a>
              <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Accessories</a><br>
                <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/Cricket-Sunglasses-Legacy-White-SS/dp/B09HQRTNBL/ref=sr_1_14?crid=3K2KGYHGS1BS1&keywords=cricket+glasses&qid=1679840352&sprefix=cricket+glasses%2Caps%2C302&sr=8-14" target="_blank">SS Cricket Sunglasses</a><br>
                <a class="mt-1" href="https://www.amazon.in/Cricket-Sunglasses-Legacy-White-SS/dp/B09HQRTNBL/ref=sr_1_14?crid=3K2KGYHGS1BS1&keywords=cricket+glasses&qid=1679840352&sprefix=cricket+glasses%2Caps%2C302&sr=8-14" target="_blank">Rs. 1,871</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="zoom-box">
              <a class="block relative h-48 overflow-hidden" href="https://www.amazon.in/SF7-Embroidered-Indian-Cricket-Sports/dp/B0BNBKLLFT/ref=sr_1_7?crid=1A7P3LAR40M9V&keywords=cricket+cap&qid=1679840519&sprefix=cricket+cap%2Caps%2C294&sr=8-7" target="_blank" style="border: none; border-radius: 12px 12px 0px 0px;">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="cricketcap.png">
              </a>
              <div class="mt-0" style="background-color: white; padding: 8px; border: none; border-radius: 0px 0px 12px 12px;">
                <a class="text-gray-500 text-xs tracking-widest title-font mb-1">Accessories</a><br>
                <a class="text-gray-900 title-font text-lg font-medium" href="https://www.amazon.in/SF7-Embroidered-Indian-Cricket-Sports/dp/B0BNBKLLFT/ref=sr_1_7?crid=1A7P3LAR40M9V&keywords=cricket+cap&qid=1679840519&sprefix=cricket+cap%2Caps%2C294&sr=8-7" target="_blank">SF7 Indian Team Cap</a><br>
                <a class="mt-1" href="https://www.amazon.in/SF7-Embroidered-Indian-Cricket-Sports/dp/B0BNBKLLFT/ref=sr_1_7?crid=1A7P3LAR40M9V&keywords=cricket+cap&qid=1679840519&sprefix=cricket+cap%2Caps%2C294&sr=8-7" target="_blank">Rs. 495</a>
              </div>
            </div>
          </div>
        </div>
        <div>
            <a style="margin-left: 2%; background-color: white; color: rgb(50, 50, 50); padding: 6px; border: none; border-radius: 8px; opacity: 0.8;" href="shopc.php"><button>< Previous</button></a> 
            <a style="margin-left: 94%; background-color: white; color: rgb(50, 50, 50); padding: 6px; border: none; border-radius: 8px; opacity: 0.6;"><button>Next ></button></a> 
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