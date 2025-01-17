<?php

require 'OOP_classes/user.php';
require 'OOP_classes/Course.php';
require 'OOP_classes/tags.php';
require 'OOP_classes/category.php';

$mycourses = course::fetchteachercourses($_SESSION['user_id']);
$tagsinstance = new tags(null, null);
$tags = $tagsinstance->fetchalltags();


//inscriptions array 
$user_instance = new teacher(null, null, null, null, null);
$inscriptions = $user_instance->fetch_inscriptions();

$categoriesinstance = new category(null, null);
$categories = $categoriesinstance->fetchallcategories();


// top2
$toptwo = $user_instance->top2courses();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_creation'])) {
    $tags_to_add = $_POST['tags'];
    $course_to_create = coursefactory::createcourse_instance($_POST['courseContent'], $_POST['courseTitle'], $_POST['courseDescription'], $_POST['courseCategory'], $_POST['courseBanner'], $_POST['contentType'], $_SESSION['user_id']);
    $course_to_create->addcourse($tags_to_add);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit-deletion'])) {
    course::deletecourse($_POST['course_to_delete']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['load-infos'])) {
    $course_to_modify =  $_POST['course_to_delete'];
    $course_to_edit = course::fetchcourseinfos($course_to_modify);
    $tags_to_edit = tags::fetchspecifictags($course_to_modify);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_edit'])) {
    $tags_to_add = $_POST['newtags'];
    $course_to_create = coursefactory::createcourse_instance($_POST['newcourseContent'], $_POST['newcourseTitle'], $_POST['newcourseDescription'], $_POST['newcourseCategory'], $_POST['newcourseBanner'], $_POST['newcontentType'], $_SESSION['user_id']);
    $course_to_create->modifycourse($tags_to_add, $_POST['course_id_to_edit']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'  && isset($_POST['log_out-button'])) {
    User::log_out();
}
