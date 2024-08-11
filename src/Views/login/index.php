<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php require_once "../src/Views/login/partial/header.php"?>
    <style>
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-image: url('https://asset-2.tstatic.net/tribunnewswiki/foto/bank/images/pnc.jpg');
            background-size: cover;
            background-position: center;
            opacity: 0.7;
            z-index: -1;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center relative">
    <div class="w-full max-w-md mt-8 sm:h-full">
        <div class="bg-white bg-opacity-90 rounded shadow-2xl overflow-hidden">
            <div class="p-8">
                <div class="flex justify-center mb-8">
                    <img class="w-16 h-16" src="https://upload.wikimedia.org/wikipedia/id/d/db/Politeknik_Negeri_Cilacap.png" alt="logo">
                </div>
                <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Sign in to your account</h1>
                <form class="space-y-6" action="/login" method="post">
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                        <input type="text" name="username" id="username" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="username" required>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <input type="password" name="password" id="password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="••••••••" required>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
                        </div>
                        <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-500">Forgot password?</a>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200">Sign in</button>
                </form>
            </div>
            <div class="px-8 py-4 bg-gray-50 bg-opacity-90 border-t border-gray-100">
                <p class="text-xs text-gray-600 text-center">
                    Don't have an account yet? 
                    <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Sign up</a>
                </p>
            </div>
        </div>
    </div>
    <?php require_once "../src/Views/login/partial/footer.php"?>