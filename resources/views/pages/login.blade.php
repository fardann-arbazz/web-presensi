<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Pages</title>
    @vite('resources/css/app.css') 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="flex flex-col justify-center items-center h-screen">
     <div class="py-5 px-4 rounded-md w-[500px] h-auto ">
        <div class="flex justify-center items-center flex-col">
            <div class="w-32 h-32">
                <img src="{{ asset('imgLogin.png') }}" alt="logo login" class="w-full h-full">
            </div>
        </div>

        <label class="form-control w-full mt-5">
            <div class="label">
              <span class="label-text">Username</span>
            </div>
            <input type="text" placeholder="Username" class="input input-bordered w-full" />
          </label>
        <label class="form-control w-full mt-1">
            <div class="label">
              <span class="label-text">Password</span>
            </div>
            <input type="password" placeholder="Password" class="input input-bordered w-full" />
          </label>
        
          <div class="mt-6 flex justify-center items-center">
           <button class="py-2 px-14 rounded-full bg-sky-400 text-white">Login</button>
          </div>
     </div>

     
    </div>
</body>
</html>
