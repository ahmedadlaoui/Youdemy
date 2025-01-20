<?php

require 'admin_actions.php';
if (!isset($_SESSION['role'])  || $_SESSION['role'] !== 'admin') {
  header('location: index.php');
  exit();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="External_files/index.css?<?php echo time() ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

  <section class="courses absolute  left-[266px]" style="width:1200px;top:272px;">
    <div class="gridd" style="width:1200px;">

      <?php
        foreach ($courses as $course):
      ?>

          <div class="card">
            <img src="<?php echo $course['course_banner'] ?>" alt="">
            <h2><?php echo  $course['course_title'] ?></h2>
            <p><?php echo $course['course_description'] ?></p>
            <div class="btn-rating">

              <form action="admin_dashboard.php" method="POST">
                <input type="hidden" name="course_to_delete" value="<?php echo $course['course_id'] ?>">
                <button class="start-button" name="dlete_from_system" style="background-color:rgb(254, 52, 52);">Delete</button>
              </form>

              <div class="strs flex items-center">
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

              </div>
            </div>


          </div>

      <?php
        endforeach;
      ?>
    </div>

    <form action="admin_dashboard.php" method="POST" style="padding-top: 40px;padding-bottom: 40px;" class="flex space-x-5 justify-center font-[sans-serif] bg-transparent absolute bottom-[-45px]">

      <button name="previous" class="flex items-center justify-center shrink-0 hover:bg-gray-100 border-2 cursor-pointer w-10 h-10 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-gray-400" viewBox="0 0 55.753 55.753">
          <path
            d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z"
            data-original="#000000" />
        </svg>
      </button>

      <li
        class="flex items-center justify-center shrink-0 bg-[#e6ba88]  border-2 border-[#e6ba88] cursor-pointer text-base font-bold text-white w-10 h-10 rounded-full">
        <?php echo $current_page; ?>
      </li>

      <button name="next" class="flex items-center justify-center shrink-0 hover:bg-gray-100 border-2 cursor-pointer w-10 h-10 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-gray-400 rotate-180" viewBox="0 0 55.753 55.753">
          <path
            d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z"
            data-original="#000000" />
        </svg>
      </button>
    </form>
  </section>


  <header class='flex shadow-lg py-4 px-4 sm:px-10 bg-white font-[sans-serif] min-h-[70px] tracking-wide relative z-50' style="position: relative;">
    <div class='flex flex-wrap items-center justify-between gap-4 w-full'>



      <a href="index.php">
        <h1 class="logo lg:absolute max-lg:left-10 lg:top-2/4 lg:left-2/4 lg:-translate-x-1/2 lg:-translate-y-1/2 max-sm:hidden" style="left: 100px;">
          <img src="images/logo.png" alt="" style="width: 70px; scale:1.4;">
        </h1>
      </a>

      <ul
        style="position:absolute;left:50%;transform:translateX(-50%);display:flex;">

        <?php
        if (isset($_SESSION['role']) && $_SESSION['role'] === 'teacher'):
        ?>
          <li class='max-lg:border-b max-lg:py-3 px-3'>
            <a href='teacher_dashboard.php' class='tt text-white block font-semibold text-[15px]'>Dashboard</a>
          </li>
        <?php endif; ?>
        <li class='max-lg:border-b max-lg:py-3 px-3'>
          <a href='index.php' class='tt text-white block font-semibold text-[15px]'>Home</a>
        </li>
        <?php
        if (isset($_SESSION['role']) && $_SESSION['role'] === 'student'):
        ?>
          <li class='max-lg:border-b max-lg:py-3 px-3'>
            <a href='library.php' class='tt text-white block font-semibold text-[15px]'>My courses</a>
          </li>
        <?php endif; ?>


        <?php
        if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'):
        ?>
          <li class='max-lg:border-b max-lg:py-3 px-3'>
            <a href='admin_dashboard.php' class='tt text-white block font-semibold text-[15px]'>Management</a>
          </li>
        <?php endif; ?>
      </ul>

      </ul>




      <div class='flex items-center ml-auto space-x-6'>
        <?php
        if (isset($_SESSION['user_id'])) {
          echo '<form method="post">  
          <button name="log_out-button"
            class="px-4 py-2 text-sm font-bold text-white border-2 border-[#4b3832] bg-[#4b3832] transition-all ease-in-out duration-300 hover:bg-transparent rounded">
            Log out
          </button>
          </form>';
        } else {
          echo '<a href="sign-in.php">
            <button class="font-semibold text-[15px] border-none outline-none">Login</button>
          </a>
          <a href="sign-up.php">
            <button 
              class="px-4 py-2 text-sm font-bold text-white border-2 border-[#4b3832] bg-[#4b3832] transition-all ease-in-out duration-300 hover:bg-transparent rounded">
              Sign up
            </button>
          </a>';
        }
        ?>



      </div>
    </div>
  </header>
  <div class="fake"></div>
  <nav
    style="height: 100%;"
    class="bg-[#2c251d] shadow-lg h-screen fixed top-71.2px left-0 min-w-[260px] py-6 px-6 font-[sans-serif] flex flex-col overflow-auto">

    <div class="flex flex-wrap items-center cursor-pointer">
      <div class="relative">
        <img src='<?php if (isset($_SESSION['profile_pic'])) {
                    echo $_SESSION['profile_pic'];
                  } else {
                    echo 'images/account_circle_24dp_D1D5DB_FILL1_wght400_GRAD-25_opsz40.png';
                  } ?>' class="w-12 h-12 rounded-full border-white" />
        <span class="h-3 w-3 rounded-full bg-green-600 border-2 border-white block absolute bottom-0 right-0"></span>
      </div>

      <div class="ml-4">
        <p class="text-sm text-gray-300"><?php echo $_SESSION['user_fullname'] ?></p>
        <p class="text-xs text-gray-400 mt-0.5"><?php echo $_SESSION['email'] ?></p>
      </div>
    </div>



    <ul class="space-y-10 flex-1 mt-4 mb-10" style="padding-top: 40px;border-top:1px solid white;">
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
          <img src="images/settings_24dp_D1D5DB_FILL0_wght400_GRAD0_opsz24.svg" alt="" class="w-[20px] h-[20px] mr-4">
          <span>Settings</span>
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






  <section class="flex flex-col absolute  left-[260px] ">
    <div
      class="mt-10 grid grid-cols-2 lg:grid-cols-4 gap-y-5 lg:gap-y-0 gap-x-5 place-items-center w-full mx-auto max-w-7xl px-5">
      <div
        class="flex flex-col justify-center items-center bg-[#FFF6F3] px-4 h-[126px] w-[100%] md:w-[281px] md:h-[192px] rounded-lg justify-self-center">
        <div class="flex flex-row justify-center items-center">
          <svg class="w-[35px] h-[35px] md:w-[50px] md:h-[50px]" viewBox="0 0 50 50" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M39.37 18.432c0 3.058-.906 5.862-2.466 8.203a14.728 14.728 0 0 1-10.079 6.367c-.717.127-1.455.19-2.214.19-.759 0-1.497-.063-2.214-.19a14.728 14.728 0 0 1-10.078-6.368 14.692 14.692 0 0 1-2.467-8.202c0-8.16 6.6-14.76 14.76-14.76s14.759 6.6 14.759 14.76Z"
              stroke="#FF6D42" stroke-width="3.473" stroke-linecap="round" stroke-linejoin="round"></path>
            <path
              d="m44.712 38.17-3.431.83a2.063 2.063 0 0 0-1.539 1.572l-.728 3.122c-.09.384-.281.734-.554 1.012a2.068 2.068 0 0 1-.992.564c-.375.09-.768.073-1.134-.052a2.078 2.078 0 0 1-.938-.653l-9.92-11.64-9.92 11.661a2.078 2.078 0 0 1-.938.653 2.038 2.038 0 0 1-1.134.052 2.067 2.067 0 0 1-.992-.563 2.137 2.137 0 0 1-.554-1.012l-.728-3.123a2.13 2.13 0 0 0-.55-1.01 2.06 2.06 0 0 0-.988-.562L6.24 38.19a2.073 2.073 0 0 1-.956-.533 2.14 2.14 0 0 1-.563-.953 2.175 2.175 0 0 1-.015-1.113c.091-.366.276-.7.536-.97l8.11-8.284a14.672 14.672 0 0 0 4.307 4.281 14.34 14.34 0 0 0 5.634 2.134 12.29 12.29 0 0 0 2.183.191c.749 0 1.477-.063 2.184-.19 4.138-.617 7.694-3.017 9.94-6.416l8.11 8.285c1.144 1.147.583 3.165-.998 3.547Zm-18.03-26.532 1.227 2.507c.167.34.603.68.998.743l2.226.383c1.414.233 1.747 1.296.727 2.336l-1.726 1.764c-.29.297-.457.87-.353 1.295l.499 2.188c.395 1.721-.5 2.4-1.996 1.487l-2.08-1.253a1.434 1.434 0 0 0-1.372 0l-2.08 1.253c-1.497.892-2.392.234-1.996-1.487l.499-2.188c.083-.403-.063-.998-.354-1.295l-1.726-1.764c-1.019-1.04-.686-2.081.728-2.336l2.225-.383c.375-.063.811-.403.977-.743l1.227-2.507c.604-1.36 1.685-1.36 2.35 0Z"
              stroke="#FF6D42" stroke-width="3.473" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
          <p class="font-bold text-3xl sm:text-l lg:text-l leading-9 text-primary ml-2"><?php echo $topteacher['user_fullname']; ?></p>
        </div>
        <p class="font-medium text-base sm:text-lg leading-6 mt-3 md:mt-6 text-center">Top teacher</p>
      </div>
      <div
        class="flex flex-col justify-center items-center bg-[#FFF6F3] px-4 h-[126px] w-[100%] md:w-[281px] md:h-[192px] rounded-lg justify-self-center">
        <div class="flex flex-row justify-center items-center">
          <svg class="w-[35px] h-[35px] md:w-[50px] md:h-[50px]" viewBox="0 0 51 50" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#a)">
              <path
                d="m26.91 5.776 4.483 10.683a1.544 1.544 0 0 0 1.287.942l11.474.992a1.544 1.544 0 0 1 .876 2.715L36.325 28.7a1.559 1.559 0 0 0-.49 1.523l2.61 11.296a1.544 1.544 0 0 1-2.295 1.677l-9.86-5.982a1.53 1.53 0 0 0-1.59 0l-9.861 5.982a1.544 1.544 0 0 1-2.295-1.677l2.609-11.296a1.56 1.56 0 0 0-.49-1.523l-8.705-7.593a1.544 1.544 0 0 1 .876-2.715l11.474-.992a1.544 1.544 0 0 0 1.287-.942l4.483-10.683a1.544 1.544 0 0 1 2.833 0Z"
                stroke="#FF6D42" stroke-width="4.341" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
            <defs>
              <clipPath id="a">
                <path fill="#fff" d="M.8.2h49.4v49.4H.8z"></path>
              </clipPath>
            </defs>
          </svg>
          <p class="font-bold text-3xl sm:text-l lg:text-l leading-9 text-primary ml-2"><?php echo $toptwo[0]['course_title']; ?></p>
        </div>
        <p class="font-medium text-base sm:text-lg leading-6 mt-3 md:mt-6 text-center">Top course</p>
      </div>
      <div
        class="flex flex-col justify-center items-center bg-[#FFF6F3] px-4 h-[126px] w-[100%] md:w-[281px] md:h-[192px] rounded-lg justify-self-center">
        <div class="flex flex-row justify-center items-center">
          <svg class="w-[35px] h-[35px] md:w-[50px] md:h-[50px]" viewBox="0 0 50 50" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#a)" stroke="#FF6D42" stroke-width="3.473" stroke-linecap="round" stroke-linejoin="round">
              <path
                d="M10.811 39.091c-1.775-1.775-.598-5.505-1.5-7.69-.939-2.255-4.377-4.089-4.377-6.5 0-2.413 3.438-4.246 4.376-6.502.903-2.182-.274-5.914 1.501-7.69 1.776-1.775 5.508-.598 7.69-1.5 2.266-.939 4.09-4.377 6.501-4.377 2.412 0 4.246 3.438 6.501 4.376 2.185.903 5.915-.274 7.69 1.501 1.776 1.776.598 5.506 1.502 7.69.937 2.266 4.376 4.09 4.376 6.501 0 2.412-3.439 4.246-4.377 6.501-.903 2.185.274 5.915-1.5 7.69-1.776 1.776-5.506.598-7.69 1.501-2.256.938-4.09 4.377-6.502 4.377s-4.245-3.439-6.5-4.377c-2.183-.903-5.915.275-7.69-1.5Z">
              </path>
              <path d="m17.281 26.444 4.632 4.631L32.718 20.27"></path>
            </g>
            <defs>
              <clipPath id="a">
                <path fill="#fff" d="M.3.2h49.4v49.4H.3z"></path>
              </clipPath>
            </defs>
          </svg>
          <p class="font-bold text-3xl sm:text-4xl lg:text-3xl leading-9 text-primary ml-2"><?php echo count($courses); ?></p>
        </div>
        <p class="font-medium text-base sm:text-lg leading-6 mt-3 md:mt-6 text-center">Total courses</p>
      </div>
      <div
        class="flex flex-col justify-center items-center bg-[#FFF6F3] px-4 h-[126px] w-[100%] md:w-[281px] md:h-[192px] rounded-lg justify-self-center">
        <div class="flex flex-row justify-center items-center">
          <svg class="w-[35px] h-[35px] md:w-[50px] md:h-[50px]" viewBox="0 0 51 50" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M45.571 12.006 27.046 30.531l-7.719-7.718L5.434 36.706" stroke="#FF6D42" stroke-width="4.341"
              stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M45.569 24.356v-12.35h-12.35" stroke="#FF6D42" stroke-width="4.341" stroke-linecap="round"
              stroke-linejoin="round"></path>
          </svg>
          <p class="font-bold text-3xl sm:text-4xl lg:text-3xl leading-9 text-primary ml-2"><?php echo count($users); ?></p>
        </div>
        <p class="font-medium text-base sm:text-lg leading-6 mt-3 md:mt-6 text-center">Total Users</p>
      </div>
    </div>
  </section>

  <div class="font-sans overflow-x-auto absolute  left-[260px] " style="height:max-content; width: calc(90vw - 260px);margin-left:4vw;top:2052px;">
    <h1 style="font-size: 26px;font-weight:800;margin-left:10px;margin-bottom:10px;border-bottom:1px solid gray;">All users :</h1>
    <table class="min-w-full divide-y divide-gray-200" id="users_table">
      <thead class=" bg-[#f9f4f0] whitespace-nowrap">
        <tr>
          <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
            Name
          </th>
          <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
            Email
          </th>
          <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
            Role
          </th>
          <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
            Status
          </th>
          <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
            Actions
          </th>
        </tr>
      </thead>

      <?php foreach ($users as $user): ?>

        <tbody class="bg-white divide-y divide-gray-200 whitespace-nowrap">
          <tr>
            <td class="px-4 py-4 text-sm text-gray-800">
              <?php echo $user['user_fullname'] ?>
            </td>
            <td class="px-4 py-4 text-sm text-gray-800">
              <?php echo $user['email'] ?>
            </td>
            <td class="px-4 py-4 text-sm text-gray-800">
              <?php echo $user['role'] ?>
            </td>
            <td class="px-4 py-4 text-sm text-gray-800">
              <?php if ($user['is_suspended'] == 0) {
                echo 'enabled';
              } else {
                echo 'disabled';
              }
              if ($user['is_active'] == 0 && $user['role'] === 'teacher') {
                echo ' / Not activated';
              } elseif ($user['is_active'] == 1 && $user['role'] === 'teacher') {
                echo ' / Activated';
              }
              ?>
            </td>
            <td class="px-4 py-4 text-sm text-gray-800">
              <form action="admin_dashboard.php" style="display: flex;align-items:center;" method="POST">
                <input type="hidden" name="user_id_tomanage" value="<?php echo $user['user_id'] ?>">
                <input type="hidden" name="user_status" value="<?php echo $user['is_active'] ?>">
                <input type="hidden" name="user_statusB" value="<?php echo $user['is_suspended'] ?>">
                <button name="suspend" class="text-blue-600 mr-4"><?php if ($user['is_suspended'] == 0) {
                                                                    echo 'Suspend /';
                                                                  } else {
                                                                    echo 'Unsuspend /';
                                                                  }; ?></button>
                <button title="Delete user" name="delete_user" class="text-red-600"><img src="images/person_remove_24dp_EA3323_FILL1_wght400_GRAD0_opsz24.svg" alt=""></button>
                <?php if ($user['role'] === 'teacher') { ?>

                  <button name="activate_user" type="submit" class="text-green-600" style="margin-left:10px;" title="Activate"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="<?php if ($user['is_active'] == 0) {
                                                                                                                                                                                                                                    echo 'gray';
                                                                                                                                                                                                                                  } else {
                                                                                                                                                                                                                                    echo 'green';
                                                                                                                                                                                                                                  }; ?>">
                      <path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q65 0 123 19t107 53l-58 59q-38-24-81-37.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160q133 0 226.5-93.5T800-480q0-18-2-36t-6-35l65-65q11 32 17 66t6 70q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-56-216L254-466l56-56 114 114 400-401 56 56-456 457Z" />
                    </svg> </button>

                <?php } ?>

              </form>
            </td>
          </tr>


        </tbody>
      <?php endforeach; ?>
    </table>
  </div>


  <div class="bg-white rounded-lg w-full max-w-3xl p-8 absolute top-[1062px]  left-[260px]" style=" width: calc(96vw - 260px);">
    <h2 class="text-3xl font-bold text-start text-[#4b3832] mb-6">Manage Tags & Categories</h2>
    <p class="text-start text-[#7d5e4d] mb-8">Add multiple tags and categories at once for courses.</p>


    <div class="overflow-auto h-[450px] p-2 border rounded-lg bg-white " style="width: calc(90vw - 260px); margin-left:2vw;">
      <div class="flex space-x-6">

        <div class="flex-1">
          <h3 class="text-xl font-semibold mb-2 text-[#4b3832]">Tags</h3>
          <div class="overflow-y-auto max-h-[400px]">
            <table class="min-w-full table-auto bg-[#f9f4f0] rounded-sm shadow-md">
              <tbody>
                <?php foreach ($Alltags as $tag):  ?>
                  <tr>
                    <form action="admin_dashboard.php" method="POST">
                      <td class="px-4 py-2">
                        <input type="text" name="tag_title_toedit" class="w-full px-2 py-1 border border-[#8B5E3C] rounded bg-white text-[#8B5E3C]" value="<?php echo $tag['tag_title'] ?>">
                        <input type="hidden" name="oldtag_title_toedit" value="<?php echo $tag['tag_title'] ?>">


                      </td>
                      <td class="px-4 py-2 flex space-x-2">
                        <button name="Delete_tag">
                          <img src="images/delete_24dp_EA3323_FILL1_wght400_GRAD0_opsz24.svg" alt="">
                        </button>
                        <button name="edit_tag" type="submit">
                          <img src="images/save_24dp_5985E1_FILL1_wght400_GRAD0_opsz24.svg" alt="">
                        </button>
                      </td>
                    </form>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="flex-1">
          <h3 class="text-xl font-semibold mb-2 text-[#4b3832]">Categories</h3>
          <div class="overflow-y-auto h-[400px]">
            <table class="min-w-full table-auto rounded-sm shadow-md bg-[#f9f4f0]">
              <tbody>
                <?php foreach ($Allcategories as $category):  ?>
                  <tr>
                    <form action="admin_dashboard.php" method="POST">
                      <td class="px-4 py-2">
                        <input type="text" name="category_todelete" class="w-full px-2 py-1 border border-[#8B5E3C] rounded bg-white text-[#8B5E3C]" value="<?php echo $category['category_title'] ?>">
                        <input type="hidden" name="category_to_edit" class="w-full px-2 py-1 border border-[#8B5E3C] rounded bg-white text-[#8B5E3C]" value="<?php echo $category['category_title'] ?>">
                      </td>
                      <td class="px-4 py-2 flex space-x-2">
                        <button name="delete-category" type="submit">
                          <img src="images/delete_24dp_EA3323_FILL1_wght400_GRAD0_opsz24.svg" alt="">
                        </button>
                        <button name="edit_category" type="submit">
                          <img src="images/save_24dp_5985E1_FILL1_wght400_GRAD0_opsz24.svg" alt="">
                        </button>
                      </td>
                    </form>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>



    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8" style="width: calc(90vw - 260px);margin-left:30px;margin-top:30px;">
      <form action="admin_dashboard.php" method="POST" class="bg-[#f9f4f0] p-6 rounded-lg shadow-md max-h-[400px] overflow-y-auto">
        <h3 class="text-xl font-semibold text-[#4b3832] mb-4">Add Tags</h3>
        <div class="mb-6">
          <label for="tags" class="block text-sm font-medium text-[#4b3832] mb-2">Tags (comma-separated)</label>
          <textarea
            style="resize: none;"
            id="tags"
            name="tags_to_add"
            rows="5"
            class="w-full px-4 py-3 border border-[#d9c5b2] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#b8a090] focus:border-[#b8a090] text-[#4b3832] placeholder-[#7d5e4d]"
            placeholder="Ex : JavaScript, Web Development, Tailwind"></textarea>
        </div>
        <div class="text-center">
          <button
            name="add_tags"
            type="submit"
            class="bg-[#4b3832] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#382c27] transition">
            Add Tags
          </button>
        </div>
      </form>

      <form action="admin_dashboard.php" method="POST" class="bg-[#f9f4f0] p-6 rounded-lg shadow-md max-h-[400px] overflow-y-auto">
        <h3 class="text-xl font-semibold text-[#4b3832] mb-4">Add Categories</h3>
        <div class="mb-6">
          <label for="categories" class="block text-sm font-medium text-[#4b3832] mb-2">Categories (comma-separated)</label>
          <textarea
            style="resize: none;"
            id="categories"
            name="categories_to_add"
            rows="5"
            class="w-full px-4 py-3 border border-[#d9c5b2] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#b8a090] focus:border-[#b8a090] text-[#4b3832] placeholder-[#7d5e4d]"
            placeholder="Ex : Development, Design, Marketing"></textarea>
        </div>
        <div class="text-center">
          <button
            name="add-categories"
            type="submit"
            class="bg-[#4b3832] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#382c27] transition">
            Add Categories
          </button>
        </div>
      </form>
    </div>
  </div>






</body>

</html>