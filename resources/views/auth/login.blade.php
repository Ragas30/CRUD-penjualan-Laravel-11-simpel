<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-blue-500">
    <section class="flex justify-center items-center h-screen">
        <div class="flex flex-col border-0 bg-gray-200 rounded-sm shadow-xl h-[30%] w-1/4">
            <h1 class="text-2xl font-bold">Login Page</h1>
            <form action="{{ route('login') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="mt-4 px-10">
                    <label for="">email</label>
                    <input class="w-full" type="email" name="email" id="username">
                </div>
                <div class="mt-4 px-10">
                    <label for="password">Password</label>
                    <input class="w-full" type="password" name="password" id="password">
                </div>
                <div class="mt-4 px-10">
                    <button class="bg-white w-1/4 rounded-lg hover:bg-blue-500 font-bold" type="submit">Login</button>
                </div>
                <div class="flex flex-col justify-center text-center mt-4">
                    <a href="{{ route('register') }}" class=" hover:text-blue-800">Belum Punya Account?</a>
                    <a href="{{ route('home') }}" class=" hover:text-blue-800">Kembali Ke Home</a>
                </div>
            </form>
        </div>


    </section>
    
</body>
</html>