<?php 
  session_start();
  require 'OOP_classes/database_connection.php';
  require 'OOP_classes/Course.php';

$mycourses = course::fetchstudent_courses($_SESSION['user_id']);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="External_files/index.css?<?php echo time() ?>">
</head>
<body>


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

    </ul>
  </nav>

  <?php
  if (!empty($mycourses)):
  ?>

    <div class="coursestt-container  left-[260px]">
    <h1 id="cgm"> My courses :</h1>
      <div class="teacher_courses  overflow-x-auto mt-8" style="border:1px solid gray;">
    

        <?php
        foreach ($mycourses as $mycourse):
        ?>
          <div class="card">
            <img src="<?php echo $mycourse['course_banner'] ?>" alt="">
            <h2><?php echo $mycourse['course_title'] ?></h2>
            <p><?php echo $mycourse['course_description'] ?></p>
            <div class="btn-rating">
              <form action="teacher_dashboard.php" method="POST">
                <button name="submit-remove" type="submit" class="start-button" style="background-color:rgb(254, 52, 52);width:70px;">Remove</button>
                <input type="hidden" name="course_to_delete" value="<?php echo $mycourse['course_id'] ?>">
                <a class="start-buttonn" href="course_details.php?course_id=<?php echo $mycourse['course_id'] ?>" style="background-color:rgb(52, 163, 254);width:70px;margin-left:10px;text-align:center;">Details</a>
              </form>

            </div>
          </div>

        <?php
        endforeach;
        ?>

      </div>




    </div>
  <?php endif; ?>
  
    
</body>
</html>