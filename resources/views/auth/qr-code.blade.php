<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/app.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qr Code</title>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</head>
<body>
    <!-- 
    *****************************
    *       Qr Code Login       *
    *****************************
    -->
    <section class="flex items-center justify-center h-screen w-full text-gray-600">
        <div class="bg-white shadow-2xl rounded-xl w-96 h-96 flex items-center justify-center p-8">
            <div>
                <h1 class="text-center capitalize tracking-wide leading-loose text-2xl text-gray-800">Qr Code</h1>
                <input type="text" class="w-full px-4 py-2 my-4 bg-red-200 rounded outline-white" placeholder="Qr Code">
                <button class="w-full px-4 py-2 my-4 bg-indigo-600 rounded text-gray-100 focus:outline-none">Connexion</button>
            </div>
        </div>
    </section>
    <script src="./assets/js/app.js"></script>
</body>
</html>