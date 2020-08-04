<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie App</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    <style>
        .primary-g {
            background-image: linear-gradient(to top, rgba(3, 3, 231, 0.932), rgb(37, 37, 161), rgb(126, 126, 168));
            border-width: 1px;
        }

        .secondary-g {
            background-image: linear-gradient(to top, rgba(2, 241, 241, 0.932), rgb(53, 192, 197), rgb(158, 219, 221));
            border-width: 1px;
        }

        .alert-g {
            background-image: linear-gradient(to top, rgba(233, 85, 0, 0.932), rgb(199, 124, 63), rgb(221, 192, 158));
            border-width: 1px;
        }
    </style>

</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto md:flex justify-between md:px-4 px-8 py-3">
            <ul class="md:flex items-center mx-10">
                <li>
                    <a href="" class="md:ml-6 ml-4 flex items-center hover:text-blue-200">
                        <i class="fas fa-video text-2xl"></i>
                        <h4 class="mx-3">MovieApp</h4>
                    </a>
                </li>
                <li class="md:flex items-center mx-10">
                    <div class="mx-2">
                        <a href="" class="hover:text-blue-200">Movies </a>
                    </div>
                    <div class="mx-2">
                        <a href="" class="hover:text-blue-200">TV Shows </a>
                    </div>
                    <div class="mx-2">
                        <a href="" class="hover:text-blue-200">Actors </a>
                    </div>
                </li>
            </ul>
            <div class="md:flex md:items-center">
                <div class="md:flex md:items-center">
                   <livewire:search-dropdown/>
                    <div class="md:ml-1 ml-20 pl-3 mt-1">
                        <div><img src="{{ asset ('img/ops.jpg') }}" class="rounded-full w-6 object-cover ml-1 h-6"
                                alt="avatar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="https://kit.fontawesome.com/8cb3936b7f.js" crossorigin="anonymous"></script>
    @livewireScripts
</body>

</html>
