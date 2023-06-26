<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <title>Product for Product</title>
</head>

<body class="m-0 p-0">
    <div class="flex">
        <div id="links" class="bg-red-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
            <img src="docs/img/index.jpg" alt="" class="w-full h-full object-cover">
        </div>
        <div class="bg-green-400 w-1/2 md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/3 xl:w-1/4 h-screen px-6 lg:px-16 xl:px-12
          flex items-center justify-center">
            <div id="rechts" class="w-full h-100 items-center">
                <div class="mb-2 ml-6">
                    <img src="docs/img/PFP_logo.png" alt="">
                </div>
                <form action="#" method="POST" style="margin-top: 150px;">
                    <div>
                        <input type="text" name="username" placeholder="Username"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                            autofocus autocomplete required>
                    </div>
                    <div class="mt-4">
                        <input type="password" name="password1" id="" placeholder="Password" minlength="6" 
                        class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                        focus:bg-white focus:outline-none" required>
                    </div>
                    <div class="flex justify-center">
                        <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 
                        focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-6 py-2.5 mr-2 mb-2
                        dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 mt-4 w-full">
                            Login
                        </button>
                    </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>

</html>