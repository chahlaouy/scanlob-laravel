<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/app.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</head>
<body>
    <!-- 
    *****************************
    *     Registration page     *
    *****************************
    -->
    <section class="flex items-center justify-center h-screen w-full text-gray-600">
        <div class="bg-white shadow-2xl rounded-xl w-96 p-8">
            <form action="{{route ('user.create')}}" method="POST">
                @csrf
                <div>
                    <h1 class="text-center capitalize tracking-wide leading-loose text-2xl text-gray-800">Inscription</h1>
                    <div>
                        @if (Session::get('success'))
                            <div class="w-full px-4 py-2 my-4 bg-green-300 rounded text-center text-gray-500">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        @if (Session::get('fail'))
                            <div class="w-full px-4 py-2 my-4 bg-red-300 rounded text-white text-center text-gray-500">
                                {{Session::get('fail')}}
                            </div>
                        @endif
                        
                    </div>
                    <input type="text" class="w-full px-4 py-2 my-4 bg-red-200 rounded outline-white" placeholder="Nom Prénom" name="username" value="{{ old('username') }}">
                    <span class="block text-red-400">
                        @error('username')
                            {{$message}}
                        @enderror
                    </span>
                    
                    <input type="email" class="w-full px-4 py-2 my-4 bg-red-200 rounded outline-white" placeholder="Email" name="email" value="{{ old('email') }}">
                    <span class="block text-red-400">
                        @error('email')
                            {{$message}}
                        @enderror
                    </span>
                    <input type="password" class="w-full px-4 py-2 my-4 bg-red-200 rounded outline-white" placeholder="mot de passe" name="password">
                    <span class="block text-red-400">
                        @error('password')
                            {{$message}}
                        @enderror
                    </span>
                    <input type="password" class="w-full px-4 py-2 my-4 bg-red-200 rounded outline-white" placeholder="Confirmer mot de passe" name="confirm-password">
                    <span class="block text-red-400">
                        @error('confirm-password')
                            {{$message}}
                        @enderror
                    </span>
                    <button class="w-full px-4 py-2 my-4 bg-indigo-600 rounded text-gray-100 focus:outline-none">Inscription</button>
                    <hr class="my-4">
                    <h1 class="text-center">Ou Connectez avec</h1>
                    <div class="flex items-center justify-around mt-4">
                        <div class="flex justify-center items-center w-10 h-10 bg-indigo-600 shadow-2xl rounded-full">
                            <ion-icon name="logo-facebook" class="text-3xl text-gray-100"></ion-icon>
                        </div>
                        <div class="flex justify-center items-center w-10 h-10 bg-red-500 shadow-2xl rounded-full">
                            <ion-icon name="logo-google" class="text-3xl text-gray-100"></ion-icon>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script src="./assets/js/app.js"></script>
</body>
</html>