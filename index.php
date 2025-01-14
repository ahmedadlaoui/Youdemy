<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YouDemy - Learn Your Way</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="index.css">
</head>
<body class="bg-gradient-to-br from-[#f9f4f0] to-[#d9c5b2] text-[#4b3832]">

  <!-- Navbar -->
  <header class='flex shadow-lg py-4 px-4 sm:px-10 bg-white font-[sans-serif] min-h-[70px] tracking-wide relative z-50'>
    <div class='flex flex-wrap items-center justify-between gap-4 w-full'>
      <a href="javascript:void(0)"
        class="lg:absolute max-lg:left-10 lg:top-2/4 lg:left-2/4 lg:-translate-x-1/2 lg:-translate-y-1/2 max-sm:hidden"><img
          src="https://readymadeui.com/readymadeui.svg" alt="logo" class='w-36' />
      </a>
      <a href="javascript:void(0)"
        class="hidden max-sm:block"><img
          src="https://readymadeui.com/readymadeui-short.svg" alt="logo" class='w-9' />
      </a>

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
              class='hover:text-[#007bff] text-[#007bff] block font-semibold text-[15px]'>Home</a>
          </li>
          <li class='max-lg:border-b max-lg:py-3 px-3'><a href='javascript:void(0)'
            class='hover:text-[#007bff] text-[#333] block font-semibold text-[15px]'>Team</a>
          </li>
          <li class='max-lg:border-b max-lg:py-3 px-3'><a href='javascript:void(0)'
            class='hover:text-[#007bff] text-[#333] block font-semibold text-[15px]'>Feature</a>
          </li>
          <li class='max-lg:border-b max-lg:py-3 px-3'><a href='javascript:void(0)'
            class='hover:text-[#007bff] text-[#333] block font-semibold text-[15px]'>Blog</a>
          </li>
        </ul>
      </div>

      <div class='flex items-center ml-auto space-x-6'>
        <button class='font-semibold text-[15px] border-none outline-none'><a href='javascript:void(0)'
          class='text-[#4b3832] hover:underline'>Login</a></button>
        <button
          class='px-4 py-2 text-sm  font-bold text-white border-2 border-[#4b3832] bg-[#4b3832] transition-all ease-in-out duration-300 hover:bg-transparent hover:text-[#4b3832] rounded'>Sign
          up</button>

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
        <button class="bg-[#4b3832] text-[#d9c5b2] px-6 py-3 rounded-lg font-semibold hover:bg-[#382c27]">Start Learning</button>
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

  <!-- Categories Section -->
  <!-- <section class="py-16 bg-[#f9f4f0]">
    <div class="container mx-auto text-center">
      <h2 class="text-4xl font-bold mb-10 text-[#4b3832]">Explore Categories</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition">
          <h3 class="text-2xl font-semibold mb-4 text-[#4b3832]">Development</h3>
          <p>Learn coding, web development, and more.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition">
          <h3 class="text-2xl font-semibold mb-4 text-[#4b3832]">Design</h3>
          <p>Master UI/UX design, graphics, and tools.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition">
          <h3 class="text-2xl font-semibold mb-4 text-[#4b3832]">Marketing</h3>
          <p>Boost your marketing skills with expert courses.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition">
          <h3 class="text-2xl font-semibold mb-4 text-[#4b3832]">Photography</h3>
          <p>Learn photography and editing techniques.</p>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Featured Courses -->
  <section class="py-16 bg-gradient-to-br from-[#b8a090] to-[#4b3832] text-white">
    <div class="container mx-auto text-center">
      <h2 class="text-4xl font-bold mb-10">Featured Courses</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="https://source.unsplash.com/400x200/?technology" alt="Course" class="w-full">
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2 text-[#4b3832]">Full-Stack Web Development</h3>
            <p class="text-gray-600">Learn to build modern web applications from scratch.</p>
            <button class="mt-4 bg-[#4b3832] text-white px-4 py-2 rounded-md hover:bg-[#382c27]">Enroll Now</button>
          </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="https://source.unsplash.com/400x200/?design" alt="Course" class="w-full">
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2 text-[#4b3832]">UI/UX Design Mastery</h3>
            <p class="text-gray-600">Master the art of user experience design.</p>
            <button class="mt-4 bg-[#4b3832] text-white px-4 py-2 rounded-md hover:bg-[#382c27]">Enroll Now</button>
          </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="https://source.unsplash.com/400x200/?business" alt="Course" class="w-full">
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2 text-[#4b3832]">Digital Marketing Essentials</h3>
            <p class="text-gray-600">Grow your business with effective strategies.</p>
            <button class="mt-4 bg-[#4b3832] text-white px-4 py-2 rounded-md hover:bg-[#382c27]">Enroll Now</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-[#4b3832] text-[#d9c5b2] py-10">
    <div class="container mx-auto text-center">
      <h3 class="text-2xl font-bold mb-4">YouDemy</h3>
      <p class="text-[#e2d3c5] mb-6">Empowering learners worldwide to achieve their goals.</p>
      <div class="flex justify-center space-x-4">
        <a href="#" class="hover:text-yellow-400">Facebook</a>
        <a href="#" class="hover:text-yellow-400">Twitter</a>
        <a href="#" class="hover:text-yellow-400">LinkedIn</a>
      </div>
      <p class="mt-6 text-[#e2d3c5]">© 2025 YouDemy. All rights reserved.</p>
    </div>
  </footer>
  

  <script src="index.js"></script>
</body>
</html>
