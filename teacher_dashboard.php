<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher Course Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="index.css?<?php echo time() ?>">
</head>

<body class="bg-gray-10  min-h-screen">

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
            class='px-4 py-2 text-sm  font-bold text-white border-2 border-[#4b3832] bg-[#4b3832] transition-all ease-in-out duration-300  rounded'>Sign
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
  <nav
    class="bg-[#19191a] shadow-lg h-screen fixed top-71.2px left-0 min-w-[260px] py-6 px-6 font-[sans-serif] flex flex-col overflow-auto">

    <div class="flex flex-wrap items-center cursor-pointer">
      <div class="relative">
        <img src='https://readymadeui.com/profile_2.webp' class="w-12 h-12 rounded-full border-white" />
        <span class="h-3 w-3 rounded-full bg-green-600 border-2 border-white block absolute bottom-0 right-0"></span>
      </div>

      <div class="ml-4">
        <p class="text-sm text-gray-300">John Doe</p>
        <p class="text-xs text-gray-400 mt-0.5">D.IN Medicine</p>
      </div>
    </div>

    <div class="relative bg-[#1f1f22] px-4 py-3 rounded-md my-8">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 mr-3 inline fill-gray-300" viewBox="0 0 118.783 118.783">
        <path
          d="M115.97 101.597 88.661 74.286a47.75 47.75 0 0 0 7.333-25.488c0-26.509-21.49-47.996-47.998-47.996S0 22.289 0 48.798c0 26.51 21.487 47.995 47.996 47.995a47.776 47.776 0 0 0 27.414-8.605l26.984 26.986a9.574 9.574 0 0 0 6.788 2.806 9.58 9.58 0 0 0 6.791-2.806 9.602 9.602 0 0 0-.003-13.577zM47.996 81.243c-17.917 0-32.443-14.525-32.443-32.443s14.526-32.444 32.443-32.444c17.918 0 32.443 14.526 32.443 32.444S65.914 81.243 47.996 81.243z"
          data-original="#000000" />
      </svg>
      <input class="text-sm text-gray-300 outline-none bg-transparent px-1 max-w-[130px]" placeholder="Search..." />
    </div>

    <ul class="space-y-10 flex-1 mt-4 mb-10">
    <li>
        <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm flex items-center rounded-md">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[18px] h-[18px] mr-4" viewBox="0 0 16 16">
            <path
              d="M13 .5H3A2.503 2.503 0 0 0 .5 3v10A2.503 2.503 0 0 0 3 15.5h10a2.503 2.503 0 0 0 2.5-2.5V3A2.503 2.503 0 0 0 13 .5ZM14.5 13a1.502 1.502 0 0 1-1.5 1.5H3A1.502 1.502 0 0 1 1.5 13v-.793l3.5-3.5 1.647 1.647a.5.5 0 0 0 .706 0L10.5 7.207V8a.5.5 0 0 0 1 0V6a.502.502 0 0 0-.5-.5H9a.5.5 0 0 0 0 1h.793L7 9.293 5.354 7.647a.5.5 0 0 0-.707 0L1.5 10.793V3A1.502 1.502 0 0 1 3 1.5h10A1.502 1.502 0 0 1 14.5 3Z"
              data-original="#000000" />
          </svg>
          <span>Statistics</span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm flex items-center rounded-md">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[18px] h-[18px] mr-4"
            viewBox="0 0 512 512">
            <path
              d="M197.332 170.668h-160C16.746 170.668 0 153.922 0 133.332v-96C0 16.746 16.746 0 37.332 0h160c20.59 0 37.336 16.746 37.336 37.332v96c0 20.59-16.746 37.336-37.336 37.336zM37.332 32A5.336 5.336 0 0 0 32 37.332v96a5.337 5.337 0 0 0 5.332 5.336h160a5.338 5.338 0 0 0 5.336-5.336v-96A5.337 5.337 0 0 0 197.332 32zm160 480h-160C16.746 512 0 495.254 0 474.668v-224c0-20.59 16.746-37.336 37.332-37.336h160c20.59 0 37.336 16.746 37.336 37.336v224c0 20.586-16.746 37.332-37.336 37.332zm-160-266.668A5.337 5.337 0 0 0 32 250.668v224A5.336 5.336 0 0 0 37.332 480h160a5.337 5.337 0 0 0 5.336-5.332v-224a5.338 5.338 0 0 0-5.336-5.336zM474.668 512h-160c-20.59 0-37.336-16.746-37.336-37.332v-96c0-20.59 16.746-37.336 37.336-37.336h160c20.586 0 37.332 16.746 37.332 37.336v96C512 495.254 495.254 512 474.668 512zm-160-138.668a5.338 5.338 0 0 0-5.336 5.336v96a5.337 5.337 0 0 0 5.336 5.332h160a5.336 5.336 0 0 0 5.332-5.332v-96a5.337 5.337 0 0 0-5.332-5.336zm160-74.664h-160c-20.59 0-37.336-16.746-37.336-37.336v-224C277.332 16.746 294.078 0 314.668 0h160C495.254 0 512 16.746 512 37.332v224c0 20.59-16.746 37.336-37.332 37.336zM314.668 32a5.337 5.337 0 0 0-5.336 5.332v224a5.338 5.338 0 0 0 5.336 5.336h160a5.337 5.337 0 0 0 5.332-5.336v-224A5.336 5.336 0 0 0 474.668 32zm0 0"
              data-original="#000000" />
          </svg>
          <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm flex items-center rounded-md">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[18px] h-[18px] mr-4"
            viewBox="0 0 511.414 511.414">
            <path
              d="M497.695 108.838a16.002 16.002 0 0 0-9.92-14.8L261.787 1.2a16.003 16.003 0 0 0-12.16 0L23.639 94.038a16 16 0 0 0-9.92 14.8v293.738a16 16 0 0 0 9.92 14.8l225.988 92.838a15.947 15.947 0 0 0 12.14-.001c.193-.064-8.363 3.445 226.008-92.837a16 16 0 0 0 9.92-14.8zm-241.988 76.886-83.268-34.207L352.39 73.016l88.837 36.495zm-209.988-51.67 71.841 29.513v83.264c0 8.836 7.164 16 16 16s16-7.164 16-16v-70.118l90.147 37.033v257.797L45.719 391.851zM255.707 33.297l55.466 22.786-179.951 78.501-61.035-25.074zm16 180.449 193.988-79.692v257.797l-193.988 79.692z"
              data-original="#000000" />
          </svg>
          <span>My courses</span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm flex items-center rounded-md">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[18px] h-[18px] mr-4"
            viewBox="0 0 512 512">
            <path
              d="M122.39 165.78h244.87c10.49 0 19-8.51 19-19s-8.51-19-19-19H122.39c-10.49 0-19 8.51-19 19s8.51 19 19 19zm164.33 99.44c0-10.49-8.51-19-19-19H122.39c-10.49 0-19 8.51-19 19s8.51 19 19 19h145.33c10.49 0 19-8.51 19-19z"
              data-original="#000000" />
            <path
              d="M486.63 323.71c2.04-22.33 3.41-48.35 3.44-78.68-.06-57.07-4.85-98.86-9.96-129.57-8.94-50.6-54.9-96.56-105.5-105.5C343.9 4.85 302.11.06 245.03 0c-57.07.06-98.87 4.85-129.58 9.96C64.86 18.9 18.9 64.86 9.96 115.46 4.85 146.17.07 187.96 0 245.03c.07 57.07 4.85 98.87 9.96 129.58 8.94 50.6 54.9 96.56 105.5 105.5 30.71 5.11 72.5 9.89 129.58 9.96 30.32-.03 56.34-1.4 78.66-3.44 19.84 15.87 45 25.37 72.38 25.37 64.02 0 115.93-51.9 115.93-115.92 0-27.38-9.5-52.54-25.37-72.37zM245.04 452.07c-45.02-.05-85.3-3.13-123.13-9.41-16.81-3.01-33.84-12.44-47.95-26.55s-23.53-31.13-26.55-47.95c-6.28-37.79-9.35-78.07-9.41-123.13.05-45.04 3.13-85.32 9.41-123.13 3.01-16.81 12.44-33.83 26.55-47.94s31.13-23.53 47.95-26.55C159.72 41.13 200 38.06 245.04 38c45.02.05 85.3 3.13 123.13 9.41 16.81 3.01 33.83 12.44 47.95 26.55 14.11 14.11 23.53 31.13 26.55 47.95 6.28 37.83 9.35 78.1 9.41 123.13-.02 16.9-.48 33.11-1.36 48.79-16.28-8.72-34.88-13.66-54.64-13.66-64.02 0-115.93 51.9-115.93 115.92 0 19.76 4.95 38.35 13.66 54.63-15.68.88-31.89 1.34-48.78 1.35zM396.08 474c-42.97 0-77.93-34.95-77.93-77.92s34.96-77.92 77.93-77.92 77.93 34.95 77.93 77.92S439.05 474 396.08 474z"
              data-original="#000000" />
            <path
              d="M406.28 418.24c-2.42-.4-5.71-.78-10.2-.78s-7.78.38-10.2.78c-3.98.7-7.6 4.32-8.31 8.31-.4 2.42-.78 5.71-.78 10.2s.38 7.78.78 10.2c.7 3.98 4.32 7.6 8.31 8.31 2.42.4 5.71.78 10.2.78s7.78-.38 10.2-.78c3.98-.7 7.6-4.32 8.31-8.31.4-2.42.78-5.71.78-10.2s-.38-7.78-.78-10.2c-.7-3.98-4.32-7.6-8.31-8.31zm-10.21-12.61c10.49 0 19-8.51 19-19v-31.7c0-10.49-8.51-19-19-19s-19 8.51-19 19v31.7c0 10.49 8.51 19 19 19z"
              data-original="#000000" />
          </svg>
          <span>inscriptions</span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm flex items-center rounded-md">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke='currentColor' class="w-[18px] h-[18px] mr-4"
            viewBox="0 0 682.667 682.667">
            <defs>
              <clipPath id="a" clipPathUnits="userSpaceOnUse">
                <path d="M0 512h512V0H0Z" data-original="#000000" />
              </clipPath>
            </defs>
            <g clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
              <path fill="none" stroke-miterlimit="10" stroke-width="40"
                d="M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z"
                data-original="#000000" />
              <path
                d="M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z"
                data-original="#000000" />
            </g>
          </svg>
          <span>Inbox</span>
        </a>
      </li>
    </ul>

    <ul>
      <li>
        <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm flex items-center rounded-md">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[18px] h-[18px] mr-4"
            viewBox="0 0 6.35 6.35">
            <path
              d="M3.172.53a.265.266 0 0 0-.262.268v2.127a.265.266 0 0 0 .53 0V.798A.265.266 0 0 0 3.172.53zm1.544.532a.265.266 0 0 0-.026 0 .265.266 0 0 0-.147.47c.459.391.749.973.749 1.626 0 1.18-.944 2.131-2.116 2.131A2.12 2.12 0 0 1 1.06 3.16c0-.65.286-1.228.74-1.62a.265.266 0 1 0-.344-.404A2.667 2.667 0 0 0 .53 3.158a2.66 2.66 0 0 0 2.647 2.663 2.657 2.657 0 0 0 2.645-2.663c0-.812-.363-1.542-.936-2.03a.265.266 0 0 0-.17-.066z"
              data-original="#000000" />
          </svg>
          <span>Logout</span>
        </a>
      </li>
    </ul>
  </nav>

  <!-- top-[71.2px] -->
  <!-- top-[calc(71.2px+calc(100vh-71.2px))] -->
  <!-- top-[calc(71.2px+calc(100vh-71.2px+456px))] -->

  <div 
  class="absolute top-[calc(71.2px+282px)] left-[260px] bg-white rounded-lg p-8" 
  style="height:max-content; width: calc(100vw - 260px - 40px); margin-left: 10px; border:1px solid gray;">
  <h1 class="text-3xl font-extrabold text-gray-800 mb-6">Create Your Course</h1>
  <form class="space-y-6" method="POST" action="your_form_processing_script.php">
    <!-- Course Title -->
    <div>
      <label for="courseTitle" class="block text-sm font-medium text-gray-800">Course Title</label>
      <input 
        type="text" 
        id="courseTitle" 
        name="courseTitle" 
        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-gray-100 text-gray-800" 
        placeholder="Enter the course title">
    </div>

    <!-- Course Description -->
    <div>
      <label for="courseDescription" class="block text-sm font-medium text-gray-800">Description</label>
      <textarea 
        style="resize: none;"
        id="courseDescription" 
        name="courseDescription" 
        rows="4" 
        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-gray-100 text-gray-800" 
        placeholder="Enter the course description"></textarea>
    </div>

    <div class="flex space-x-4">
      <!-- Content Type -->
      <div class="flex-1">
        <label for="contentType" class="block text-sm font-medium text-gray-800">Content Type</label>
        <select 
          id="contentType" 
          name="contentType" 
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-gray-100 text-gray-800">
          <option value="">Select Content Type</option>
          <option value="video">Video</option>
          <option value="text">Text</option>
        </select>
      </div>

      <!-- Category -->
      <div class="flex-1">
        <label for="courseCategory" class="block text-sm font-medium text-gray-800">Category</label>
        <select 
          id="courseCategory" 
          name="courseCategory" 
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-gray-100 text-gray-800">
          <option value="">Select a category</option>
          <option value="programming">Programming</option>
          <option value="design">Design</option>
          <option value="marketing">Marketing</option>
          <option value="business">Business</option>
        </select>
      </div>
    </div>

    <!-- Video Path (only if content type is video) -->
    <div id="videoPathDiv" class="hidden">
      <label for="videoPath" class="block text-sm font-medium text-gray-800">Video Path</label>
      <input 
        type="text" 
        id="videoPath" 
        name="videoPath" 
        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-gray-100 text-gray-800" 
        placeholder="Enter the video path">
    </div>

    <!-- Course Banner -->
    <div>
      <label for="courseBanner" class="block text-sm font-medium text-gray-800">Course Banner</label>
      <input 
        type="text" 
        id="courseBanner" 
        name="courseBanner" 
        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-gray-100 text-gray-800" 
        placeholder="Enter the course banner path">
    </div>

    <!-- Content (Text Area) -->
    <div>
      <label for="courseContent" class="block text-sm font-medium text-gray-800">Course Content</label>
      <textarea 
        style="resize: none;"
        id="courseContent" 
        name="courseContent" 
        rows="6" 
        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-gray-100 text-gray-800" 
        placeholder="Enter the course content here"></textarea>
    </div>


    <div>
      <label for="tags" class="block text-sm font-medium text-gray-800">Tags (hold ctrl & click)</label>
      <select 
        id="tags" 
        name="tags[]" 
        multiple 
        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-gray-100 text-gray-800">
        <!-- Temporary tags -->
        <option value="1">#Programming</option>
        <option value="2">#Design</option>
        <option value="3">#Marketing</option>
        <option value="4">#Business</option>
        <option value="1">#Programming</option>
        <option value="2">#Design</option>
        <option value="3">#Marketing</option>
        <option value="4">#Business</option>
        <option value="1">#Programming</option>
        <option value="2">#Design</option>
        <option value="3">#Marketing</option>
        <option value="4">#Business</option>
        <option value="1">#Programming</option>
        <option value="2">#Design</option>
        <option value="3">#Marketing</option>
        <option value="4">#Business</option>

      </select>
    </div>

    <button 
      type="submit" 
      class="w-50 bg-[#6c492f] text-white py-2 px-4 rounded-md ">
      Add Course
    </button>
  </form>
</div>









  <div class="teacher_courses absolute top-[calc(71.2px+232px+900px)] left-[260px]  overflow-x-auto mt-8" style="border:1px solid gray;">

  <div class="card">
        <img src="https://media.licdn.com/dms/image/v2/D4D22AQEXseFqRCzbxA/feedshare-shrink_2048_1536/feedshare-shrink_2048_1536/0/1695607566242?e=2147483647&v=beta&t=GOPbr-fGpY6ep4-qycqnfo9QjoCCkPC-T7rb7jEGkjQ" alt="">
        <h2>The ultimate Webdev course</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, natus?</p>
        <div class="btn-rating">
          <button class="start-button" style="background-color:rgb(254, 52, 52);">Delete</button>


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
      

  </div>

  <div class="teacher_stats absolute top-[71.2px] left-[260px]  overflow-x-auto mt-8" style="border:1px solid gray;">


  <div class="container mx-auto pr-4">
    <div style="border-radius: 4px!important;" class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg  transition duration-500 transform hover:scale-100 cursor-pointer">
      <div class="h-20 bg-[#6c492f] flex items-center justify-between">
        <p class="mr-0 text-white text-lg pl-5">BT SUBSCRIBERS</p>
      </div>
      <div class="flex justify-between px-5 pt-6 mb-2 text-sm text-gray-600">
        <p>TOTAL</p>
      </div>
      <p class="py-4 text-3xl ml-5">20,456</p>
      <!-- <hr > -->
    </div>
  </div>

  <div class="container mx-auto pr-4">
    <div style="border-radius: 4px!important;" class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg  transition duration-500 transform hover:scale-100 cursor-pointer">
      <div class="h-20 bg-[#6c492f] flex items-center justify-between">
        <p class="mr-0 text-white text-lg pl-5">BT ACTIVE SUBSCRIBERS</p>
      </div>
      <div class="flex justify-between px-5 pt-6 mb-2 text-sm text-gray-600">
        <p>TOTAL</p>
      </div>
      <p class="py-4 text-3xl ml-5">19,694</p>
      <!-- <hr > -->
    </div>
  </div>

  <div style="border-radius: 4px!important;" class="container mx-auto pr-4">
    <div style="border-radius: 4px!important;" class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg  transition duration-500 transform hover:scale-100 cursor-pointer">
      <div class="h-20 bg-[#6c492f] flex items-center justify-between">
        <p class="mr-0 text-white text-lg pl-5">BT OPT OUTS</p>
      </div>
      <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
        <p>TOTAL</p>
      </div>
      <p class="py-4 text-3xl ml-5">711</p>
      <!-- <hr > -->
    </div>
  </div>

  <div style="border-radius: 4px!important;"   class="container mx-auto">
    <div style="border-radius: 4px!important;" class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg transition duration-500 transform hover:scale-100 cursor-pointer">
      <div class="h-20 bg-[#6c492f] flex items-center justify-between">
        <p class="mr-0 text-white text-lg pl-5">BT TODAY'S SUBSCRIPTION</p>
      </div>
      <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
        <p>TOTAL</p>
      </div>
      <p class="py-4 text-3xl ml-5">0</p>
    </div>
  </div>


  </div>

</body>

</html>