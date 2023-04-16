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
            background-image: url(coaching.png);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        body.img{
            opacity: 0.5;
        }
        #colorchange{
          height: 100%;
        }
        #zoom-box:hover{
            transition: 0.7s;
            -webkit-transform: scale(1.1);
	        transform: scale(1.1);
          
        }
        #zoom-box2:hover{
            transition: 1.5s;
            -webkit-transform: scale(1.4);
	        transform: scale(1.4);
            border-radius: 12px 12px 12px 12px;
            object-fit:contain;
        }
        #colorchange:hover{
          transition: 0.7s;
          background-color: rgb(228, 243, 255);
        }
    </style>
</head>
<body>
    <header class="text-gray-600 body-font" style="margin-bottom: 0px; background-color: rgb(228, 243, 255);">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">

            <span class="ml-2 text-xl" style="font-size: xx-large; font-weight: bolder; color: rgb(2, 0, 17);">Sportèfit</span>
          </a>
          <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-gray-900" href="sports.php"id="zoom-box">Home</a>
            <a class="mr-5 hover:text-gray-900" href="shopa.php" id="zoom-box">Shop</a>
            <a class="mr-5 hover:text-gray-900" href="coaching.php"id="zoom-box">Coaching</a>
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
          <div class="flex flex-wrap w-full mb-20">
            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
              <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white">Basic Training</h1>
              <div style="background-color: rgb(228, 243, 255); width: 22%;" class="h-1  rounded"></div>
            </div>
          </div>
          <div class="flex flex-wrap -m-4">
            <div class="xl:w-1/4 md:w-1/2 p-4" id="zoom-box">
             <div class="bg-gray-100 p-6 rounded-lg" id="colorchange">
                <a href="https://youtu.be/MCAfC-Q5Kik" target="_blank"><img id="zoom-box2" class="h-40 rounded w-full object-cover object-center mb-6" src="wu.png" alt="content">
                <h3 class="tracking-widest text-xs font-medium title-font" style="color:rgb(0, 27, 54);">Pre-Training Exercise</h3>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Warm-up</h2>
                <p class="leading-relaxed text-base">Before Starting to practice we need to warmup our body</p> </a>
              </div> 
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4" id="zoom-box">
              <div class="bg-gray-100 p-6 rounded-lg" id="colorchange">
                <a href="https://www.youtube.com/watch?v=EAGPc7A94p4&list=PLWgKm7kgxzCvvDpVco2GviFvi61l-z1xQ" target="_blank"><img id="zoom-box2" class="h-40 rounded w-full object-cover object-center mb-6" src="cricketcoaching.png" alt="content">
                <h3 class="tracking-widest  text-xs font-medium title-font" style="color:rgb(0, 27, 54);">CRICKET</h3>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Learn Cricket</h2>
                <p class="leading-relaxed text-base">Learn the most favourite sport of India for free</p> </a>
              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4" id="zoom-box">
              <div class="bg-gray-100 p-6 rounded-lg" id="colorchange">
               <a href="https://www.youtube.com/watch?v=oPtXLmHOKEw&list=PLWgKm7kgxzCsb95LfyzKCAxRve8WdU-ek" target="_blank"> <img id="zoom-box2" class="h-40 rounded w-full object-cover object-center mb-6" src="fbcoaching.png" alt="content">
                <h3 class="tracking-widest  text-xs font-medium title-font" style="color:rgb(0, 27, 54);">FOOTBALL</h3>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Learn Football</h2>
                <p class="leading-relaxed text-base">Kick your way into any team by learning all the skills</p> </a>
              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4" id="zoom-box">
              <div class="bg-gray-100 p-6 rounded-lg" id="colorchange">
               <a href="https://www.youtube.com/watch?v=S1XlNopJ1GM&list=PLWgKm7kgxzCvAmlFZzwXxJED5NhSeUvT-" target="_blank"> <img id="zoom-box2" class="h-40 rounded w-full object-cover object-center mb-6" src="badmintoncoaching.png" alt="content">
                <h3 class="tracking-widest text-xs font-medium title-font" style="color:rgb(0, 27, 54);">BADMINTON</h3>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Learn Badminton</h2>
                <p class="leading-relaxed text-base">Learn to play Badminton for free</p> </a>
              </div>
            </div>
          </div>
          <div style="margin-top: 5%;" class="flex flex-wrap -m-4">
            <div class="xl:w-1/4 md:w-1/2 p-4" id="zoom-box">
              <div class="bg-gray-100 p-6 rounded-lg" id="colorchange">
               <a href="https://www.youtube.com/watch?v=GYGzu9afduQ&list=PLWgKm7kgxzCuaTMjQ0mYmOgsh62LPcq5O" target="_blank"> <img id="zoom-box2" class="h-40 rounded w-full object-cover object-top mb-6" src="bbcoaching.png" alt="content">
                <h3 class="tracking-widest text-xs font-medium title-font" style="color:rgb(0, 27, 54);">BASKETBALL</h3>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Learn Basketball</h2>
                <p class="leading-relaxed text-base">Learn to jump higher</p> </a>
              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4" id="zoom-box">
              <div class="bg-gray-100 p-6 rounded-lg" id="colorchange">
               <a href="https://www.youtube.com/watch?v=eKUJt1eWnDg&list=PLWgKm7kgxzCvorhXw3TpYROk7fMj3hPLs" target="_blank"> <img id="zoom-box2" class="h-40 rounded w-full object-cover object-top mb-6" src="tenniscoaching.png" alt="content">
                <h3 class="tracking-widest text-xs font-medium title-font" style="color:rgb(0, 27, 54);">TENNIS</h3>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Learn Tennis</h2>
                <p class="leading-relaxed text-base">Play tennis like proffesionals</p> </a>
              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4" id="zoom-box">
              <div class="bg-gray-100 p-6 rounded-lg" id="colorchange">
               <a href="https://www.youtube.com/watch?v=fwbV4cS2LMg&list=PLWgKm7kgxzCvT0CNDyHrFYumNnNzg0SEQ" target="_blank"><img id="zoom-box2" class="h-40 rounded w-full object-cover object-top mb-6" src="golf.png" alt="content">
                <h3 class="tracking-widest  text-xs font-medium title-font" style="color:rgb(0, 27, 54);">GOLF</h3>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Learn Golf</h2>
                <p class="leading-relaxed text-base">Learn how to ply the rich sport</p> </a>
              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4" id="zoom-box">
              <div class="bg-gray-100 p-6 rounded-lg" id="colorchange">
               <a href="https://www.youtube.com/watch?v=shR1YoKAK20&list=PLWgKm7kgxzCuatVLgD0_Xx206hm4MENZJ" target="_blank"> <img id="zoom-box2" class="h-40 rounded w-full object-cover object-right mb-6" src="swimcoaching.png" alt="content">
                <h3 class="tracking-widest text-xs font-medium title-font" style="color:rgb(0, 27, 54);">SWIMMING</h3>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Learn Swimming</h2>
                <p class="leading-relaxed text-base">Overcome the fear of water</p> </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col" style="position:static;">

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