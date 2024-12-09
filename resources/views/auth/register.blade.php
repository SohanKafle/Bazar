<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | Khusi Bazar</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@100;300;400;600;700&display=swap"
    rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 h-full">

    <div class="flex h-full">

        <div class="hidden md:flex flex-1 flex-col justify-center items-center bg-gray-100 p-6 space-y-4">

            <!-- Image Section -->
            <div class="flex justify-center items-center mb-4">
                <img src="images/signup.svg" alt="Khusi Bazar Image"
                    class="w-[450px] mx-auto h-auto rounded-lg shadow-none">
            </div>

            <!-- Facebook Icon Section -->
            <div class="flex justify-center space-x-6">
                <a href="#" target="_blank" class="text-red-600 hover:text-red-600 transition-colors">
                    <i class="ri-facebook-box-fill text-3xl"></i>
                </a>
            </div>

            <div class="text-center text-sm text-black mt-4">
                <p>&#169; 2024. KhusiBazar. All Rights Reserved</p>
            </div>
        </div>

        <!-- Register Form -->
        <div class="flex-1 bg-gray-200 p-8 flex flex-col justify-center items-center overflow-auto">

            <a href="">
                <img class="mb-8 w-48" src="images/logo.png" alt="Logo">
            </a>

            <h2 class="text-3xl font-bold mb-4">Sign Up</h2>
            <small class="text-black text-lg">Create your account</small>

            <form method="POST" action="" class="w-full max-w-md mt-8 space-y-6">
                @csrf
                <!-- Full Name -->
                <input id="fullname" type="text" name="fullname" required placeholder="Full Name"
                    class="w-full p-4 rounded-lg bg-white text-black focus:outline-none focus:ring-2 focus:ring-red-500 transition-all duration-300 shadow-md">

                <!-- Email -->
                <input id="email" type="email" name="email" required autocomplete="email" placeholder="Email"
                    class="w-full p-4 rounded-lg bg-white text-black focus:outline-none focus:ring-2 focus:ring-red-500 transition-all duration-300 shadow-md">

                <!-- Phone -->
                <input id="phone" type="tel" name="phone" required placeholder="Phone Number"
                    class="w-full p-4 rounded-lg bg-white text-black focus:outline-none focus:ring-2 focus:ring-red-500 transition-all duration-300 shadow-md">

                <!-- Password -->
                <input id="password" type="password" name="password" required autocomplete="new-password"
                    placeholder="Password"
                    class="w-full p-4 rounded-lg bg-white text-black focus:outline-none focus:ring-2 focus:ring-red-500 transition-all duration-300 shadow-md">

                <!-- Confirm Password -->
                <input id="confirm_password" type="password" name="confirm_password" required
                    autocomplete="new-password" placeholder="Confirm Password"
                    class="w-full p-4 rounded-lg bg-white text-black focus:outline-none focus:ring-2 focus:ring-red-500 transition-all duration-300 shadow-md">

                <!-- I Agree to Terms and Privacy -->
                <div class="flex items-center space-x-2">
                    <input type="checkbox" id="agree" name="agree" required
                        class="focus:ring-red-500 text-red-600">
                    <label for="agree" class="text-sm text-black">
                        I agree to the <a href="/terms" class="text-red-600 hover:underline font-semibold">Terms</a>
                        and
                        <a href="/privacy" class="text-red-600 hover:underline font-semibold">Privacy Policy</a>
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full py-3 bg-red-600 text-white rounded-lg font-semibold hover:bg-red-700 transition-colors shadow-md focus:ring-2 focus:ring-red-500">
                    Sign Up
                </button>
            </form>

            <div class="flex items-center my-4 w-full">
                <hr class="w-full border-t-2 border-gray-300">
                <span class="px-4 text-gray-700">OR</span>
                <hr class="w-full border-t-2 border-gray-300">
            </div>

            <div class="mt-6 text-sm text-black">
                <p>Already have an account? <a href="/login" class="text-red-600 hover:underline font-bold">Login</a>
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
