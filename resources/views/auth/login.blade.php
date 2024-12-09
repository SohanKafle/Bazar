<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Khusi Bazar</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@100;300;400;600;700&display=swap"
    rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="flex h-screen flex-col md:flex-row">

        <!-- Left Section (Image and Social Links) -->
        <div class="flex-1 md:flex hidden flex-col justify-between bg-gray-100 p-6">
            <div class="text-center mt-6">
                <img src="images/login.svg" alt="Khusi Bazar Image" class="w-[400px] mx-auto h-auto rounded-lg shadow-none">
            </div>

            <div class="text-center mt-8">
                <div class="flex justify-center space-x-6">
                    <a href="#" target="_blank" class="text-red-600 hover:text-red-600 transition-colors">
                        <i class="ri-facebook-box-fill text-3xl"></i>
                    </a>
                </div>
            </div>

            <div class="text-center mt-4 text-sm text-black">
                <p>&#169; 2024. KhusiBazar. All Rights Reserved</p>
            </div>
        </div>

        <!--Login Form -->
        <div class="flex-1 text-black p-8 flex flex-col justify-center items-center bg-gray-200">

            <a href="">
                <img class="mb-8 w-48" src="images/logo.png" alt="Logo">
            </a>

            <h2 class="text-3xl font-bold mb-4">Login</h2>
            <small class="text-black text-2xl">Welcome to KhusiBazar</small>

            <form method="POST" action="" class="w-full max-w-md mt-8 space-y-6">

                <!-- Email -->
                <input id="email" type="email" name="email" required autocomplete="email" placeholder="Email"
                    class="w-full p-4 rounded-lg bg-white text-black focus:outline-none focus:ring-2 focus:ring-red-500 transition-all duration-300 shadow-md">

                <!-- Password -->
                <input id="password" type="password" name="password" required autocomplete="current-password"
                    placeholder="Password"
                    class="w-full p-4 rounded-lg bg-white text-black focus:outline-none focus:ring-2 focus:ring-red-500 transition-all duration-300 shadow-md">

                <!-- Forgot Password -->
                <div class="flex justify-end mt-2">
                    <a href="#" class="text-red-600 text-sm font-medium hover:underline">Forgot Password?</a>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full py-3 bg-red-600 text-white rounded-lg font-semibold hover:bg-red-700 transition-colors shadow-md focus:ring-2 focus:ring-red-500">
                    Login
                </button>
            </form>

            <!-- Or Divider -->
            <div class="flex items-center my-4 w-full">
                <hr class="w-full border-t-2 border-gray-300">
                <span class="px-4 text-gray-700">OR</span>
                <hr class="w-full border-t-2 border-gray-300">
            </div>

            <!-- Sign Up Text -->
            <div class="mt-4 text-sm text-black">
                <p>Don't have an account? <a href="/register" class="text-red-600 hover:underline font-bold">Sign Up</a>
                </p>
            </div>

            <!-- Mobile View: Copyright Section -->
            <div class="md:hidden text-center mt-[20vh] text-sm text-black p-6">
                <p>&#169; 2024. KhusiBazar. All Rights Reserved</p>
            </div>
        </div>

    </div>



</body>

</html>
