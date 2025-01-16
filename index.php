<?php
session_start();
// echo $_SESSION['user_fullname'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YouDemy - Learn Your Way</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="index.css?<?php echo time() ?>">
</head>

<body class="bg-gradient-to-br from-[#f9f4f0] to-[#d9c5b2] text-[#4b3832]">

  <header class='flex shadow-lg py-4 px-4 sm:px-10 bg-white font-[sans-serif] min-h-[70px] tracking-wide relative z-50'>
    <div class='flex flex-wrap items-center justify-between gap-4 w-full'>

      <div id="collapseMenu"
        class='max-lg:hidden lg:!block max-lg:w-full max-lg:fixed max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
        <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white w-9 h-9 flex items-center justify-center border'>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 fill-black" viewBox="0 0 320.591 320.591">
            <path
              d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
              data-original="#000000"></path>
            <path
              d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
              data-original="#000000"></path>
          </svg>
        </button>

        <ul
          class='lg:flex lg:gap-x-5 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
          <li class='mb-6 hidden max-lg:block'>
            <a href="javascript:void(0)"><img src="https://readymadeui.com/readymadeui.svg" alt="logo" class='w-36' />
            </a>
          </li>
          <li class='max-lg:border-b max-lg:py-3 px-3'>
            <a href='javascript:void(0)'
              class='tt text-white block font-semibold text-[15px]'>Home</a>
          </li>
          <li class='max-lg:border-b max-lg:py-3 px-3'><a href='javascript:void(0)'
              class='tt text-white block font-semibold text-[15px]'>My courses</a>
          </li>
          <li class='max-lg:border-b max-lg:py-3 px-3'><a href='javascript:void(0)'
              class='tt text-white block font-semibold text-[15px]'>Profile</a>
          </li>
          <li class='max-lg:border-b max-lg:py-3 px-3'><a href='javascript:void(0)'
              class='tt text-white block font-semibold text-[15px]'>Dashboard</a>
          </li>
        </ul>


  <a href="index.php">
  <h1 class="logo lg:absolute max-lg:left-10 lg:top-2/4 lg:left-2/4 lg:-translate-x-1/2 lg:-translate-y-1/2 max-sm:hidden"><img src="images/logo.png" alt="" style="width: 70px;scale:1.5;"></h1>

  </a>

      </div>

      <div class='flex items-center ml-auto space-x-6'>
        <a href="sign-in.php">
        <button class='font-semibold text-[15px] border-none outline-none'>Login</button>
        </a>
        <a href="sign-up.php">
          <button
            class='px-4 py-2 text-sm  font-bold text-white border-2 border-[#4b3832] bg-[#4b3832] transition-all ease-in-out duration-300 hover:bg-transparent hover:text-[#4b3832] rounded'>Sign
            up</button>
        </a>

        <button id="toggleOpen" class='lg:hidden'>
          <svg class="w-7 h-7" fill="#333" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
    </div>
  </header>
  <div class="fake"></div>
  <!-- Hero Section -->
  <section class="ss relative text-white">
    <div class="container mx-auto flex flex-col lg:flex-row items-center py-20 px-6 lg:px-20">
      <div class="lg:w-1/2 text-center lg:text-left">
        <h1 class="text-5xl font-extrabold leading-tight mb-6 animate-float">
          Welcome to <span>Youdemy</span> : Learn, Grow & Succeed
        </h1>
        <p class="text-lg mb-8">
          Empower your future with Youdemy, the ultimate online e-courses platform. From tech skills to creative arts, business strategies to personal development, we provide expert-led courses to help you achieve your goals. Start learning today and unlock your true potential!
        </p>
        <button class="bg-[#4b3832] text-WHITE px-6 py-3 rounded-lg font-semibold hover:bg-[#382c27]">Start Learning</button>
      </div>
      <div class="dd lg:w-1/2 mt-10 lg:mt-0">
        <img src="images/books-removebg-preview (1).png" alt="Learning Illustration" class="rounded-lg  animate-float">
      </div>
    </div>

    <div class="sb flex border-2 border-none overflow-hidden max-w-md mx-auto font-[sans-serif]">
      <input type="email" placeholder="Search for a course..."
        class="w-full outline-none bg-white text-gray-600 text-sm px-4 py-3" />
      <button type='button' class="flex items-center justify-center bg-[#4b3832] px-5 text-sm text-white">
        Search
      </button>
    </div>

  </section>


  <section class="courses">
    <div class="grid">
      <div class="card">
        <img src="https://media.licdn.com/dms/image/v2/D4D22AQEXseFqRCzbxA/feedshare-shrink_2048_1536/feedshare-shrink_2048_1536/0/1695607566242?e=2147483647&v=beta&t=GOPbr-fGpY6ep4-qycqnfo9QjoCCkPC-T7rb7jEGkjQ" alt="">
        <h2>The ultimate Webdev course</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, natus?</p>
        <div class="btn-rating">
          <button class="start-button">Start</button>


          <div class="flex items-center">
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-gray-300 me-1 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">4.95</p>
            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">out of</p>
            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">5</p>
          </div>
        </div>


      </div>
      <div class="card">
        <img src="https://media.licdn.com/dms/image/v2/D4D22AQEXseFqRCzbxA/feedshare-shrink_2048_1536/feedshare-shrink_2048_1536/0/1695607566242?e=2147483647&v=beta&t=GOPbr-fGpY6ep4-qycqnfo9QjoCCkPC-T7rb7jEGkjQ" alt="">
        <h2>The ultimate Webdev course</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, natus?</p>
        <div class="btn-rating">
          <button class="start-button">Start</button>


          <div class="flex items-center">
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-gray-300 me-1 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">4.95</p>
            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">out of</p>
            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">5</p>
          </div>
        </div>


      </div>
      <div class="card">
        <img src="https://media.licdn.com/dms/image/v2/D4D22AQEXseFqRCzbxA/feedshare-shrink_2048_1536/feedshare-shrink_2048_1536/0/1695607566242?e=2147483647&v=beta&t=GOPbr-fGpY6ep4-qycqnfo9QjoCCkPC-T7rb7jEGkjQ" alt="">
        <h2>The ultimate Webdev course</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, natus?</p>
        <div class="btn-rating">
          <button class="start-button">Start</button>


          <div class="flex items-center">
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-gray-300 me-1 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">4.95</p>
            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">out of</p>
            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">5</p>
          </div>
        </div>


      </div>
      <div class="card">
        <img src="https://media.licdn.com/dms/image/v2/D4D22AQEXseFqRCzbxA/feedshare-shrink_2048_1536/feedshare-shrink_2048_1536/0/1695607566242?e=2147483647&v=beta&t=GOPbr-fGpY6ep4-qycqnfo9QjoCCkPC-T7rb7jEGkjQ" alt="">
        <h2>The ultimate Webdev course</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, natus?</p>
        <div class="btn-rating">
          <button class="start-button">Start</button>


          <div class="flex items-center">
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-gray-300 me-1 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">4.95</p>
            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">out of</p>
            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">5</p>
          </div>
        </div>


      </div>
      <div class="card">
        <img src="https://media.licdn.com/dms/image/v2/D4D22AQEXseFqRCzbxA/feedshare-shrink_2048_1536/feedshare-shrink_2048_1536/0/1695607566242?e=2147483647&v=beta&t=GOPbr-fGpY6ep4-qycqnfo9QjoCCkPC-T7rb7jEGkjQ" alt="">
        <h2>The ultimate Webdev course</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, natus?</p>
        <div class="btn-rating">
          <button class="start-button">Start</button>


          <div class="flex items-center">
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-gray-300 me-1 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">4.95</p>
            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">out of</p>
            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">5</p>
          </div>
        </div>


      </div>
      <div class="card">
        <img src="https://media.licdn.com/dms/image/v2/D4D22AQEXseFqRCzbxA/feedshare-shrink_2048_1536/feedshare-shrink_2048_1536/0/1695607566242?e=2147483647&v=beta&t=GOPbr-fGpY6ep4-qycqnfo9QjoCCkPC-T7rb7jEGkjQ" alt="">
        <h2>The ultimate Webdev course</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, natus?</p>
        <div class="btn-rating">
          <button class="start-button">Start</button>


          <div class="flex items-center">
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-gray-300 me-1 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">4.95</p>
            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">out of</p>
            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">5</p>
          </div>
        </div>


      </div>
  </section>



  <ul style="padding-top: 40px;padding-bottom: 40px;" class="flex space-x-5 justify-center font-[sans-serif] bg-white">
    <li class="flex items-center justify-center shrink-0 bg-gray-100 w-10 h-10 rounded-full">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-gray-300" viewBox="0 0 55.753 55.753">
        <path
          d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z"
          data-original="#000000" />
      </svg>
    </li>
    <li
      class="flex items-center justify-center shrink-0 bg-[#e6ba88]  border-2 border-[#e6ba88] cursor-pointer text-base font-bold text-white w-10 h-10 rounded-full">
      1
    </li>
    <li
      class="flex items-center justify-center shrink-0 hover:bg-gray-50  border-2 cursor-pointer text-base font-bold text-[#333] w-10 h-10 rounded-full">
      2
    </li>
    <li
      class="flex items-center justify-center shrink-0 hover:bg-gray-50  border-2 cursor-pointer text-base font-bold text-[#333] w-10 h-10 rounded-full">
      3
    </li>
    <li
      class="flex items-center justify-center shrink-0 hover:bg-gray-50  border-2 cursor-pointer text-base font-bold text-[#333] w-10 h-10 rounded-full">
      4
    </li>
    <li class="flex items-center justify-center shrink-0 hover:bg-gray-50 border-2 cursor-pointer w-10 h-10 rounded-full">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-gray-400 rotate-180" viewBox="0 0 55.753 55.753">
        <path
          d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z"
          data-original="#000000" />
      </svg>
    </li>
  </ul>


  <!-- Footer -->
  <footer class="font-sans tracking-wide bg-gray-50 px-10 pt-12 pb-6">
    <div class="flex flex-wrap justify-between gap-10">
      <div class="max-w-md">
        <a href='javascript:void(0)'>
          <img src="images/logo.png" alt="logo" class='w-36' />
        </a>
        <div class="mt-6">
          <p class="text-white leading-relaxed text-sm">ReadymadeUI is a library of pre-designed UI components built for Tailwind CSS. It offers a collection of versatile, ready-to-use components that streamline the development process by providing a wide range of UI elements.</p>
        </div>
        <ul class="mt-10 flex space-x-5">
          <li>
            <a href='javascript:void(0)'>
              <svg xmlns="http://www.w3.org/2000/svg" class="fill-blue-600 w-8 h-8" viewBox="0 0 49.652 49.652">
                <path d="M24.826 0C11.137 0 0 11.137 0 24.826c0 13.688 11.137 24.826 24.826 24.826 13.688 0 24.826-11.138 24.826-24.826C49.652 11.137 38.516 0 24.826 0zM31 25.7h-4.039v14.396h-5.985V25.7h-2.845v-5.088h2.845v-3.291c0-2.357 1.12-6.04 6.04-6.04l4.435.017v4.939h-3.219c-.524 0-1.269.262-1.269 1.386v2.99h4.56z" data-original="#000000" />
              </svg>
            </a>
          </li>
          <li>
            <a href='javascript:void(0)'>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 112.196 112.196">
                <circle cx="56.098" cy="56.097" r="56.098" fill="#007ab9" data-original="#007ab9" />
                <path fill="#fff" d="M89.616 60.611v23.128H76.207V62.161c0-5.418-1.936-9.118-6.791-9.118-3.705 0-5.906 2.491-6.878 4.903-.353.862-.444 2.059-.444 3.268v22.524h-13.41s.18-36.546 0-40.329h13.411v5.715c-.027.045-.065.089-.089.132h.089v-.132c1.782-2.742 4.96-6.662 12.085-6.662 8.822 0 15.436 5.764 15.436 18.149zm-54.96-36.642c-4.587 0-7.588 3.011-7.588 6.967 0 3.872 2.914 6.97 7.412 6.97h.087c4.677 0 7.585-3.098 7.585-6.97-.089-3.956-2.908-6.967-7.496-6.967zm-6.791 59.77H41.27v-40.33H27.865v40.33z" data-original="#f1f2f2" />
              </svg>
            </a>
          </li>
          <li>
            <a href='javascript:void(0)'>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 152 152">
                <linearGradient id="a" x1="22.26" x2="129.74" y1="22.26" y2="129.74" gradientUnits="userSpaceOnUse">
                  <stop offset="0" stop-color="#fae100" />
                  <stop offset=".15" stop-color="#fcb720" />
                  <stop offset=".3" stop-color="#ff7950" />
                  <stop offset=".5" stop-color="#ff1c74" />
                  <stop offset="1" stop-color="#6c1cd1" />
                </linearGradient>
                <g data-name="Layer 2">
                  <g data-name="03.Instagram">
                    <rect width="152" height="152" fill="url(#a)" data-original="url(#a)" rx="76" />
                    <g fill="#fff">
                      <path fill="#ffffff10" d="M133.2 26c-11.08 20.34-26.75 41.32-46.33 60.9S46.31 122.12 26 133.2q-1.91-1.66-3.71-3.46A76 76 0 1 1 129.74 22.26q1.8 1.8 3.46 3.74z" data-original="#ffffff10" />
                      <path d="M94 36H58a22 22 0 0 0-22 22v36a22 22 0 0 0 22 22h36a22 22 0 0 0 22-22V58a22 22 0 0 0-22-22zm15 54.84A18.16 18.16 0 0 1 90.84 109H61.16A18.16 18.16 0 0 1 43 90.84V61.16A18.16 18.16 0 0 1 61.16 43h29.68A18.16 18.16 0 0 1 109 61.16z" data-original="#ffffff" />
                      <path d="m90.59 61.56-.19-.19-.16-.16A20.16 20.16 0 0 0 76 55.33 20.52 20.52 0 0 0 55.62 76a20.75 20.75 0 0 0 6 14.61 20.19 20.19 0 0 0 14.42 6 20.73 20.73 0 0 0 14.55-35.05zM76 89.56A13.56 13.56 0 1 1 89.37 76 13.46 13.46 0 0 1 76 89.56zm26.43-35.18a4.88 4.88 0 0 1-4.85 4.92 4.81 4.81 0 0 1-3.42-1.43 4.93 4.93 0 0 1 3.43-8.39 4.82 4.82 0 0 1 3.09 1.12l.1.1a3.05 3.05 0 0 1 .44.44l.11.12a4.92 4.92 0 0 1 1.1 3.12z" data-original="#ffffff" />
                    </g>
                  </g>
                </g>
              </svg>
            </a>
          </li>
          <li>
            <a href='javascript:void(0)'>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 1227 1227">
                <path d="M613.5 0C274.685 0 0 274.685 0 613.5S274.685 1227 613.5 1227 1227 952.315 1227 613.5 952.315 0 613.5 0z" data-original="#000000" />
                <path fill="#fff" d="m680.617 557.98 262.632-305.288h-62.235L652.97 517.77 470.833 252.692H260.759l275.427 400.844-275.427 320.142h62.239l240.82-279.931 192.35 279.931h210.074L680.601 557.98zM345.423 299.545h95.595l440.024 629.411h-95.595z" data-original="#ffffff" />
              </svg>
            </a>
          </li>
        </ul>
      </div>

      <div class="max-lg:min-w-[140px]">
        <h4 class=" font-semibold text-base relative max-sm:cursor-pointer">Services</h4>

        <ul class="mt-6 space-y-4">
          <li>
            <a href='javascript:void(0)' class=' text-sm'>Web Development</a>
          </li>
          <li>
            <a href='javascript:void(0)' class='text-sm'>Pricing</a>
          </li>
          <li>
            <a href='javascript:void(0)' class=' text-sm'>Support</a>
          </li>
          <li>
            <a href='javascript:void(0)' class=' text-sm'>Client Portal</a>
          </li>
          <li>
            <a href='javascript:void(0)' class='text-sm'>Resources</a>
          </li>
        </ul>
      </div>

      <div class="max-lg:min-w-[140px]">
        <h4 class="text-white font-semibold text-base relative max-sm:cursor-pointer">Platforms</h4>
        <ul class="space-y-4 mt-6">
          <li>
            <a href='javascript:void(0)' class=' text-white text-sm'>Hubspot</a>
          </li>
          <li>
            <a href='javascript:void(0)' class=' text-white text-sm'>Integration Services</a>
          </li>
          <li>
            <a href='javascript:void(0)' class='text-white text-sm'>Marketing Glossar</a>
          </li>
          <li>
            <a href='javascript:void(0)' class=' text-white text-sm'>UIPath</a>
          </li>
        </ul>
      </div>

      <div class="max-lg:min-w-[140px]">
        <h4 class="text-white font-semibold text-base relative max-sm:cursor-pointer">Company</h4>

        <ul class="space-y-4 mt-6">
          <li>
            <a href='javascript:void(0)' class=' text-white text-sm'>About us</a>
          </li>
          <li>
            <a href='javascript:void(0)' class=' text-white text-sm'>Careers</a>
          </li>
          <li>
            <a href='javascript:void(0)' class=' text-white text-sm'>Blog</a>
          </li>
          <li>
            <a href='javascript:void(0)' class='text-white text-sm'>Portfolio</a>
          </li>
          <li>
            <a href='javascript:void(0)' class=' text-white text-sm'>Events</a>
          </li>
        </ul>
      </div>

      <div class="max-lg:min-w-[140px]">
        <h4 class="text-white font-semibold text-base relative max-sm:cursor-pointer">Additional</h4>

        <ul class="space-y-4 mt-6">
          <li>
            <a href='javascript:void(0)' class=' text-white text-sm'>FAQ</a>
          </li>
          <li>
            <a href='javascript:void(0)' class=' text-white text-sm'>Partners</a>
          </li>
          <li>
            <a href='javascript:void(0)' class= 'text-white text-sm'>Sitemap</a>
          </li>
          <li>
            <a href='javascript:void(0)' class=' text-white text-sm'>Contact</a>
          </li>
          <li>
            <a href='javascript:void(0)' class=' text-white text-sm'>News</a>
          </li>
        </ul>
      </div>
    </div>

    <hr class="mt-10 mb-6 border-gray-300" />

    <div class="flex flex-wrap max-md:flex-col gap-4">
      <ul class="md:flex md:space-x-6 max-md:space-y-2">
        <li>
          <a href='javascript:void(0)' class=' text-white text-sm'>Terms of Service</a>
        </li>
        <li>
          <a href='javascript:void(0)' class=' text-white text-sm'>Privacy Policy</a>
        </li>
        <li>
          <a href='javascript:void(0)' class=' text-white text-sm'>Security</a>
        </li>
      </ul>

      <p class='text-white text-sm md:ml-auto'>© ReadymadeUI. All rights reserved.</p>
    </div>
  </footer>


  <script src="index.js"></script>
</body>

</html>