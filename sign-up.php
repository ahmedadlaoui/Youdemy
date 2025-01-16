<?php

require 'OOP_classes/user.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submitSU'])) {

    $sign_up_instance = new User($_POST['full_name'], $_POST['email'], $_POST['password'], $_POST['role']);
    $sign_up_instance->sign_up();


    header("location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-gray-800">Sign Up</h2>
        <form action="sign-up.php" method="POST" class="space-y-4">

            <div>
                <label for="full-name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input
                    type="text"
                    id="full-name"
                    name="full_name"
                    required
                    class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Enter your full name" />
            </div>

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

            <div>
                <span class="block text-sm font-medium text-gray-700">Register as:</span>
                <div class="flex items-center mt-2 space-x-4">
                    <label class="flex items-center space-x-2">
                        <input
                            type="radio"
                            name="role"
                            value="teacher"
                            required
                            class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500" />
                        <span class="text-sm text-gray-700">Teacher</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input
                            type="radio"
                            name="role"
                            value="student"
                            required
                            class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500" />
                        <span class="text-sm text-gray-700">Student</span>
                    </label>
                </div>
            </div>

            <button
                name="submitSU"
                type="submit"
                class="w-full px-4 py-2 font-medium text-white rounded-lg"
                style="background-color: #6c492f;">
                Sign Up
            </button>
        </form>

        <p class="text-sm text-center text-gray-600">
            Already have an account?
            <a href="/login" class="font-medium text-blue-600 hover:underline">Log In</a>
        </p>
    </div>
</body>

</html>