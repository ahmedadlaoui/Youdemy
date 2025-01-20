<?php 
require 'OOP_classes/user.php';
require 'OOP_classes/Course.php';
require 'OOP_classes/tags.php';
require 'OOP_classes/category.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'  && isset($_POST['log_out-button'])) {
    User::log_out();
}

$users_instance = new User(null, null, null, null);
$users = $users_instance->fetchusers();
$admin_instance = new admin(null, null, null, null);


$current_page = 1;
$courses = course::fetchallcoursesindex($current_page);

$topteacher = $admin_instance->topteacher();

$user_instance = new teacher(null, null, null, null, null);
$toptwo = $user_instance->top2courses();

$categoriesinstance = new category(null, null);
$Allcategories = $categoriesinstance->fetchallcategories();



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['activate_user'])) {

  $admin_instance->activateaccount($_POST['user_id_tomanage'], $_POST['user_status']);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_user'])) {
  $admin_instance->deleteaccount($_POST['user_id_tomanage']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['suspend'])) {
  $admin_instance->suspenduser($_POST['user_id_tomanage'], $_POST['user_statusB']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add-categories'])) {
  $categories = array_filter(
    array_map('trim', explode(',', $_POST['categories_to_add'])),
    fn($value) => $value !== ''
  );

  $newcategories = array_diff($categories, array_column($Allcategories, 'category_title'));
  //     var_dump($newcategories);
  //     die('c');
  $category_instance = new category(null, null);
  $category_instance->insertcategories($newcategories);

}

$tagsinstance = new tags(null, null);
$Alltags = $tagsinstance->fetchalltags();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_tags'])) {
  $tags = array_filter(
    array_map('trim', explode(',', $_POST['tags_to_add'])),
    fn($value) => $value !== ''
  );
  $newtags = array_diff($tags, array_column($Alltags, 'tag_title'));

  $tags_instance = new tags(null, null);
  $tags_instance->inserttags($newtags);
}


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete-category'])){
  $categoriesinstance->Deletecategory($_POST['category_todelete']);
}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_category'])){
  $categoriesinstance->Editcategory($_POST['category_todelete'],$_POST['category_to_edit']);
}


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_tag'])){
  $tagsinstance->Edittag($_POST['tag_title_toedit'],$_POST['oldtag_title_toedit']);
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Delete_tag'])){
  $tagsinstance->Deletetag($_POST['tag_title_toedit'],$_POST['oldtag_title_toedit']);
}


$current_page = 1;

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['previous'])){
  if($current_page > 1){
    $current_page--;
    $courses = course::fetchallcoursesindex($current_page);
  }
}


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['next'])){
  if($current_page < count($courses)){
    $current_page++;
    $courses = course::fetchallcoursesindex($current_page);
  }
}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dlete_from_system'])){
  course::deletecourse($_POST['course_to_delete']);
}