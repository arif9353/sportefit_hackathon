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
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.css" rel="stylesheet">
  <title>FACILITIES</title>
</head>
<body>
<header class="text-gray-600 body-font" style="margin-bottom: 0px; background-color: rgb(228, 243, 255);">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
         <!-- <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-blue-600 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg> -->
            <span class="ml-3 text-xl" style="font-size: xx-large; font-weight: bolder; color: rgb(2, 0, 17);">Sportèfit</span>
          </a>
          <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-gray-900" id="zoom-box" href="afterlog.php">Home</a>
            <a class="mr-5 hover:text-gray-900" id="zoom-box" href="afterloginpricing.php">Pricing</a>
            <a class="mr-5 hover:text-gray-900" id="zoom-box" href="nutritionist.php">Nutritionist</a>
            <a class="mr-5 hover:text-gray-900" id="zoom-box" href="afterlogingallery.php">Gallery</a>
            <a class="mr-5 hover:text-gray-900" id="zoom-box" href="afterlogincredits.php">Team</a>
            <a class="mr-5 hover:text-gray-900" id="zoom-box" href="facilities.php">Facilities</a>
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
    <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
      <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="kelly-sikkema-IZOAOjvwhaM-unsplash.jpg">
      <div class="text-center lg:w-2/3 w-full">
        <h1 class="title-font sm:text2xl text-3xl mb-4 font-medium text-gray-900">"The difference between try and triumph is a little umph."</h1>
        <p class="mb-7 leading-relaxed">One workout at a time. One day at a time. One meal at a time. Here are some workout tips and diet along with workout music</p>
        <div class="flex justify-center">
          <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg"><a href="workoutsanddiet.php">Workouts & diet</a></button>
          <button class="ml-4 inline-flex text-black bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg"><a href="https://open.spotify.com/playlist/2SM6rniZl84fEyMCB5KMQB?si=JBIWL9R5S8WEm8G43Jfk0A&utm_source=copy-link">Spotify</a></button>
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