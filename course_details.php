<?php
session_start();
require 'OOP_classes/database_connection.php';
require 'OOP_classes/Course.php';


$course_type = course::getcontent_type($_GET['course_id']);

$mycourses = course::fetchstudent_coursess($_SESSION['user_id']);

$found = false; 
foreach ($mycourses as $mycourse) {
    if ($mycourse['course_id'] == $_GET['course_id']) {
        $found = true;
        break; 
    }
}

$course_to_display = coursefactory::createcourse_instance($_GET['course_id'], null, null, null, null, null, $course_type, null);
$current_course =  $course_to_display->display();

if(!$found){
    header('location: library.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course_details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="External_files/index.css?<?php echo time() ?>">
</head>

<body style="background-color: hsl(0, 0.00%, 86.30%)!important;">
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

    <?php
    if (isset($current_course) && $current_course['course_type'] === 'video'):
    ?>

        <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;width:100%;height:calc(100vh - 71.2px);">
            <div style="text-align:start;width:800px;margin-bottom:24px;">
                <h1 style="font-size:36px;font-weight:800;border-bottom:1px solid black;margin-bottom:12px;"><?php echo $current_course['course_title'] ?></h1>
            </div>
            <iframe width="800" height="450" src="<?php echo $current_course['video_content'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

    <?php
    endif;
    ?>


    <?php
    if (isset($current_course) && $current_course['course_type'] === 'text'):
    ?>

        <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;width:100%;height:calc(100vh - 71.2px);">
            <div style="text-align:start;width:800px;margin-bottom:24px;">
                <h1 style="font-size:36px;font-weight:800;border-bottom:1px solid black;margin-bottom:12px;"><?php echo $current_course['course_title'] ?></h1>
            </div>
            <p  style="text-align:start;width:800px;"><?php echo nl2br($current_course['text_content'])?></p>
        </div>

    <?php
    endif;
    ?>
</body>

</html>