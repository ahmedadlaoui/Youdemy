<?php

require 'OOP_classes/user.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submitSI'])) {

    $sign_up_instance = new User(null,null,null,null);
    $sign_up_instance->sign_in($_POST['email'],$_POST['password']);

    session_start();
    header("Location: index.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
  <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-center text-gray-800">Sign In</h2>
    <form action="sign-in.php" method="POST" class="space-y-4 mt-6">
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          required
          class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
          placeholder="Enter your email" />
      </div>
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input
          type="password"
          id="password"
          name="password"
          required
          class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
          placeholder="Enter your password" />
      </div>
      <button
        type="submit"
        name="submitSI"
        class="w-full px-4 py-2 font-medium text-white rounded-lg"
        style="background-color: #6c492f;">
        Sign In
      </button>
    </form>
    <p class="mt-4 text-sm text-center text-gray-600">
      Don't have an account?
      <a href="sign-up.php" class="text-blue-500 hover:underline">Sign Up</a>
    </p>
  </div>
</body>
</html>
