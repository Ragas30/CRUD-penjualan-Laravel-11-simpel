<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-blue-500">
    <section class="flex justify-center items-center h-screen">
        <div class="flex flex-col border-0 bg-gray-200 rounded-sm shadow-xl h-[40%] w-1/4 p-5">
            <h1 class="text-2xl font-bold">Register Page</h1>
            <form action="{{ route('register.store') }}" enctype="multipart/form-data" method="POST">
                <div class="mt-4 px-10">
                    <label for="email">E-mail</label>
                    <input class="w-full" type="email" name="email" id="email">
                </div>
                <div class="mt-4 px-10">
                    <label for="">Username</label>
                    <input class="w-full" type="text" name="username" id="username">
                </div>
                <div class="mt-4 px-10">
                    <label for="password">Password</label>
                    <input class="w-full" type="password" name="password" id="password">
                </div>
                <div class="mt-4 px-10">
                    <button class="bg-white w-1/4 rounded-lg hover:bg-blue-500 font-bold" type="submit">Dafar</button>
                </div>
                <div class="flex flex-col justify-center text-center mt-4">
                    <a href="{{ route('login') }}" class=" hover:text-blue-800">Sudah Punya Account?</a>
                    <a href="{{ route('home') }}" class=" hover:text-blue-800">Kembali Ke Home</a>
                </div>
            </form>
        </div>


    </section>
    
</body>
</html>