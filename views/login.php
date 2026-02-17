<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
include_once $_SERVER['DOCUMENT_ROOT'] . "/Helper/generalHelper.php";
// $discount = getData2("SELECT * FROM `tbl_discount` ORDER BY `id` DESC LIMIT 1")[0];

//  printWithPre($_SESSION);
date_default_timezone_set('Asia/Kolkata');
// printWithPre($_SESSION);
// die();
// Load custom routing system
include $_SERVER['DOCUMENT_ROOT'] . "/views/include/header.php"; ?>

<body class="bg-gray-50 font-sans">
    <div class="relative min-h-screen flex flex-col items-center justify-center px-4 bg-cover bg-center" style="background-image: url('/public/images/bg16.jpg'); background: #57458F;
background: linear-gradient(87deg, #000000 25%, #3f0200 75%);">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-10"></div>

        <!-- Login Card -->
         <!-- <div class=""></div> -->
          <div class=""></div>
        <div
            class="relative z-10 w-full max-w-md bg-white/10 backdrop-blur-lg rounded-lg shadow-lg border border-white/30 overflow-hidden">


            <div class="px-6 py-4 text-center">


                <!-- Logo -->
                <!-- <div class="inline-block p-3 mb-0">
                    <a href="/">
                        <img src="/public/logos/logo-white.png" alt="Company Logo" class="h-24 max-md:h-14 rounded-lg">
                    </a>
                </div> -->

                <h1 class="text-white text-3xl max-md:text-2xl font-bold text-center ">Login </h1>
                <p class="text-gray-200 max-md:text-sm mt-2 mb-6">Please sign in to continue</p>

                <form id="loginForm" class="space-y-4 md:p-3" method="post" action="" enctype="multipart/form-data">
                    <!-- Email input -->
                    <div class="relative">
                        <div class="flex items-center p-2.5  -lg border-b border-gray-200">
                            <span class="text-white mr-3">
                                <i class="fas fa-user"></i>
                            </span>
                            <input type="text" id="email" name="email" required placeholder="Userid"
                                class="w-full bg-transparent bg-none focus:outline-none text-white">
                        </div>
                    </div>

                    <!-- Password input -->
                    <div class="relative">
                        <div class="flex items-center p-2.5 -lg border-b border-gray-200">
                            <span class="text-white mr-3">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input type="password" id="password" name="password" required placeholder="Password"
                                class="w-full bg-transparent focus:outline-none text-white">
                            <button type="button" id="togglePassword" onclick="togglePasswordVisibility()"
                                class="text-white hover:text-gray-400">
                                <i class="fas fa-eye" id="eyeIcon"></i>
                            </button>
                        </div>
                    </div>

                    <input type="hidden" name="isdistributor" value="0">

                    <!-- Login button -->
                    <button type="submit" name="login"
                        class="w-full py-2.5 bg-white text-black font-medium rounded-lg shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                        Login
                    </button>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <!-- <footer class="absolute bottom-4 w-full text-center text-xs text-gray-300">
            &copy;<?php echo date('Y'); ?> Bloomhair Clinic. All rights reserved.
        </footer> -->
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("password");
            const eyeIcon = document.getElementById("eyeIcon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>

</body>

</html>