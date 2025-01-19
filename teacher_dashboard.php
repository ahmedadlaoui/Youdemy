<?php

require 'actions.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'teacher' ) {
  header('location: index.php');
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher Course Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="External_files/index.css?<?php echo time() ?>">
</head>

<body class="bg-gray-10  min-h-screen">

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

  <!-- top-[71.2px] -->
  <!-- top-[calc(71.2px+calc(100vh-71.2px))] -->
  <!-- top-[calc(71.2px+calc(100vh-71.2px+456px))] -->

  <div
    class=" absolute top-[calc(71.2px+282px)] left-[260px] bg-white rounded-lg p-8"
    style="height:max-content; width: calc(100vw - 260px - 40px); margin-left: 10px; border:1px solid gray;">
    <h1 class="text-3xl font-extrabold text-gray-800 mb-6" style="position: relative;display:flex;align-items:center;"><span id="h1hd">Create Your Course</span></h1>



    <div style="position: relative;display:block;" id="add-form">

      <form class="space-y-6" method="POST" action="teacher_dashboard.php">


        <div>
          <label for="courseTitle" class="block text-sm font-medium text-gray-800">Course Title</label>
          <input
            type="text"
            id="courseTitle"
            name="courseTitle"
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-gray-100 text-gray-800"
            placeholder="Enter the course title">
        </div>


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

          <div class="flex-1">
            <label for="contentType" class="block text-sm font-medium text-gray-800">Content Type</label>
            <select
              id="contentType"
              name="contentType"
              class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-gray-100 text-gray-800">
              <option value="" selected disabled>Select Content Type</option>
              <option value="video">Video</option>
              <option value="text">Text</option>
            </select>
          </div>


          <div class="flex-1">
            <label for="courseCategory" class="block text-sm font-medium text-gray-800">Category</label>
            <select
              id="courseCategory"
              name="courseCategory"
              class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-gray-100 text-gray-800">
              <option value="" selected disabled>Select a category</option>
              <?php
              foreach ($categories as $category):
              ?>
                <option value="<?php echo $category['category_id'] ?>"><?php echo $category['category_title'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>



        <div>
          <label for="courseBanner" class="block text-sm font-medium text-gray-800">Course Banner</label>
          <input
            type="text"
            id="courseBanner"
            name="courseBanner"
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-gray-100 text-gray-800"
            placeholder="Enter the course banner path">
        </div>


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


        <div style="display: flex;flex-direction:column;">
          <label class="block text-sm font-medium text-gray-800">Tags </label>
          <div">
            <div id="second-form" class="bg-gray-100 border-gray-300 rounded-md py-2 border">
              <?php
              foreach ($tags as $tag):
              ?>
                <div style="width: 300px;display:flex;justify-content:space-between;align-items:center;">
                  <label style="cursor:pointer;" for="<?php echo $tag['tag_id'] ?>"># <?php echo $tag['tag_title'] ?></label>
                  <input class="h-4 w-4 text-blue-600 border-gray-300 rounded-full focus:ring-blue-500" style="cursor: pointer;" type="checkbox" name="tags[]" value="<?php echo $tag['tag_id'] ?>" id="<?php echo $tag['tag_id'] ?>">

                </div>
              <?php
              endforeach;
              ?>
            </div>

        </div>
    </div>

    <button
      type="submit"
      name="submit_creation"
      class="w-50 bg-[#6c492f] text-white py-2 px-4 rounded-md ">
      Add Course
    </button>
    </form>

  </div>


  </div>

  <?php
  if (!empty($mycourses)):
  ?>

    <div class="coursestt-container top-[calc(71.2px+232px+880px)] left-[260px]">
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
                <button name="submit-deletion" type="submit" class="start-button" style="background-color:rgb(254, 52, 52);">Delete</button>
                <input type="hidden" name="course_to_delete" value="<?php echo $mycourse['course_id'] ?>">
                <button name="load-infos" type="submit" style="background-color:rgb(52, 163, 254);" class="start-buttonn">Edit</button>
              </form>

            </div>
          <p class="inscriptions">Inscriptions : <?php echo $user_instance->inscriptions_per_course($mycourse['course_id']); ?></p>

          </div>

        <?php
        endforeach;
        ?>

      </div>




    </div>
  <?php endif; ?>


  <div class="teacher_stats absolute top-[71.2px] left-[260px]  overflow-x-auto mt-8" style="border:1px solid gray;">


    <div class="container">
      <div style="border-radius: 4px!important;" class=" bg-white  mx-auto rounded-sm overflow-hidden shadow-lg  transition duration-500 transform hover:scale-100 cursor-pointer">
        <div class="h-20 bg-[#6c492f] flex items-center justify-between">
          <p class="mr-0 text-white text-lg pl-5">My courses</p>
        </div>
        <div class="flex justify-between px-5 pt-6 mb-2 text-sm text-gray-600">
          <p>TOTAL</p>
        </div>
        <p class="py-4 text-3xl ml-5"><?php echo count($mycourses) ?></p>

      </div>
    </div>

    <div class="container">
      <div style="border-radius: 4px!important;" class=" bg-white mx-auto rounded-sm overflow-hidden shadow-lg  transition duration-500 transform hover:scale-100 cursor-pointer">
        <div class="h-20 bg-[#6c492f] flex items-center justify-between">
          <p class="mr-0 text-white text-lg pl-5">Inscriptions</p>
        </div>
        <div class="flex justify-between px-5 pt-6 mb-2 text-sm text-gray-600">
          <p>TOTAL</p>
        </div>
        <p class="py-4 text-3xl ml-5"><?php if (!empty($inscriptions)): echo count($inscriptions);
                                      endif; ?></p>

      </div>
    </div>

    <div class="container">
      <div style="border-radius: 4px!important;" class=" bg-white  mx-auto rounded-sm overflow-hidden shadow-lg  transition duration-500 transform hover:scale-100 cursor-pointer">
        <div class="h-20 bg-[#6c492f] flex items-center justify-between">
          <p class="mr-0 text-white text-lg pl-5">Most Popular Courses</p>
        </div>
        <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
          <p>#2
            <?php if (isset($toptwo) && isset($toptwo[1]['course_title'])):
            ?>

              <?php echo $toptwo[1]['course_title'] ?>
            <?php
            endif;
            ?>
          </p>
        </div>
        <p class="py-4 text-3xl ml-5">#1
          <?php if (isset($toptwo) && isset($toptwo[0]['course_title'])):
          ?>

            <?php echo $toptwo[0]['course_title'] ?>
          <?php
          endif;
          ?>
        </p>

      </div>
    </div>




  </div>

  <?php
  if (isset($course_to_edit['course_id'])):
  ?>

    <div
      class=" absolute top-[calc(71.2px+1655px)] left-[260px] bg-white rounded-lg p-8"
      style="height:max-content; width: calc(100vw - 260px - 40px); margin-left: 10px; border:1px solid gray;">
      <h1 class="text-3xl font-extrabold text-gray-800 mb-6" style="position: relative;display:flex;align-items:center;"><span id="h1hd">Edit Your Course</span> </h1>



      <div>
        <form class="space-y-6" method="POST" action="teacher_dashboard.php" id="edit-form">
          <input type="hidden" name="course_id_to_edit" value="<?php echo $course_to_edit['course_id']  ?>">
          <div>
            <label for="courseTitle" class="block text-sm font-medium text-gray-800">New Course Title</label>
            <input
              type="text"
              id="courseTitle"
              name="newcourseTitle"
              value="<?php if (isset($course_to_edit['course_title'])) {
                        echo $course_to_edit['course_title'];
                      } ?>"
              class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-gray-100 text-gray-800"
              placeholder="Enter the course title">
          </div>



          <div>
            <label for="courseDescription" class="block text-sm font-medium text-gray-800">New description</label>
            <textarea
              style="resize: none;"
              id="courseDescription"
              name="newcourseDescription"
              rows="4"
              class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-gray-100 text-gray-800"
              placeholder="Enter the course description"><?php if (isset($course_to_edit['course_description'])) {
                                                            echo $course_to_edit['course_description'];
                                                          } ?></textarea>
          </div>

          <div class="flex space-x-4">

            <div class="flex-1">
              <label for="contentType" class="block text-sm font-medium text-gray-800">Content Type</label>
              <select
                id="contentType"
                name="newcontentType"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-gray-100 text-gray-800">
                <option value="" selected disabled>Select Content Type</option>

                <option value="video" <?php if (isset($course_to_edit['course_type']) && $course_to_edit['course_type'] === 'video') {
                                        echo 'selected';
                                      } ?>>Video</option>
                <option value="text" <?php if (isset($course_to_edit['course_type']) && $course_to_edit['course_type'] === 'text') {
                                        echo 'selected';
                                      } ?>>Text</option>
              </select>
            </div>


            <div class="flex-1">
              <label for="courseCategory" class="block text-sm font-medium text-gray-800">Category</label>
              <select
                id="courseCategory"
                name="newcourseCategory"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-gray-100 text-gray-800">
                <option value="" selected disabled>Select a category</option>
                <?php
                foreach ($categories as $category):
                ?>
                  <option value="<?php echo $category['category_id'] ?>" <?php if ($category['category_id'] === $course_to_edit['category_id']): echo 'selected';
                                                                          endif; ?>><?php echo $category['category_title'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>



          <div>
            <label for="courseBanner" class="block text-sm font-medium text-gray-800">New course Banner</label>
            <input
              type="text"
              id="courseBanner"
              name="newcourseBanner"
              value="<?php if (isset($course_to_edit['course_banner'])) {
                        echo $course_to_edit['course_banner'];
                      } ?>"
              class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-gray-100 text-gray-800"
              placeholder="Enter the course banner path">
          </div>


          <div>
            <label for="courseContent" class="block text-sm font-medium text-gray-800">Course Content</label>
            <textarea
              style="resize: none;"
              id="courseContent"
              name="newcourseContent"
              rows="6"
              class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-gray-100 text-gray-800"
              placeholder="Enter the course content here">
            <?php

            if ($course_to_edit['course_type'] === 'text') {
              echo $course_to_edit['text_content'];
            } else {
              echo $course_to_edit['video_content'];
            }
            ?>
            </textarea>
          </div>
          <div style="display: flex;flex-direction:column;">
            <label class="block text-sm font-medium text-gray-800">Tags </label>
            <div">
              <div id="second-form" class="bg-gray-100 border-gray-300 rounded-md py-2 border">
                <?php
                foreach ($tags as $tag):
                ?>
                  <div style="width: 300px;display:flex;justify-content:space-between;align-items:center;">
                    <label style="cursor:pointer;" for="<?php echo $tag['tag_id'] ?>"># <?php echo $tag['tag_title'] ?></label>
                    <input class="h-4 w-4 text-blue-600 border-gray-300 rounded-full focus:ring-blue-500" style="cursor: pointer;" type="checkbox" name="newtags[]" value="<?php echo $tag['tag_id'] ?>" id="<?php echo $tag['tag_id'] ?>" <?php if (isset($tags_to_edit)) : foreach ($tags_to_edit as $tag_to_edit): if (isset($tag_to_edit) && $tag['tag_id'] === $tag_to_edit['tag_id']) {
                                                                                                                                                                                                                                                  echo 'checked';
                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                              endforeach;
                                                                                                                                                                                                                                            endif;
                                                                                                                                                                                                                                            ?>>
                  </div>


                <?php
                endforeach;
                ?>
              </div>

          </div>
      </div>
      <button
        style="margin-top: 10px;"
        type="submit"
        name="submit_edit"
        form="edit-form"
        class="w-50 bg-[#6c492f] text-white py-2 px-4 rounded-md ">
        Edit course
      </button>

      </form>

    </div>
    </div>
  <?php
  endif;
  ?>






  <script>
  </script>
</body>

</html>