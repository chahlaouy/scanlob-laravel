@extends('layouts.master')

@section('title')

    Profile
    @isset($user)
        {{$user->username}}
    @endisset
@endsection

@section('content')
@isset($user)
    <!-- The Modal -->
    <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="w-full">
            <label class="block mt-4">
                <span class="text-gray-700">titre</span>
                <input class="form-input mt-1 block w-full" placeholder="Placer le titre de votre message ici" name="title">
            </label>
            <label class="block mt-4">
                <span class="text-gray-700">Message</span>
                <input class="form-input mt-1 block w-full" placeholder="votre message" name="body">
            </label>
        </div>
    </div>

    </div>
    <section class="container mx-auto bg-profile flex justify-between rounded-3xl">
            
        <div class="bg-gray-800 bg-opacity-5 rounded-3xl p-16 w-full">
            <div class="flex">
                <div class="bg-white rounded-2xl shadow-2xl w-96 mr-6">
                    <div class="flex p-4">
                        @if (isset($user->userExtraInfo->img_url))
                            <img src="{{asset('assets/images/') . '/' .$user->userExtraInfo->img_url }}" class="h-96 w-full rounded-2xl object-cover" alt="">
                        @else
                            <img src="{{asset('assets/images/profile.png') }}" class="h-96 w-full rounded-2xl object-cover" alt=""> 
                        @endif
                        
                    </div>
                    <div class="p-4 text-gray-700">
                        <div class="flex items-center justify-between">
                            <div class="flex-1">
                                <h1 class="tracking-wide leading-loose capitalize">{{$user->username}}</h1>
                                <span class="text-xs block">{{$user->email}}</span>
                                @isset($$user->userExtraInfo->phone)
                                    <span class="text-xs block">{{$user->userExtraInfo->phone}}</span>
                                @endisset
                                @isset($user->userExtraInfo->gender)
                                    <span class="text-xs block">{{$user->userExtraInfo->gender}}</span>
                                @endisset
                            </div>
                            <div class="flex-1">
                                <ion-icon name="qr-code" class="text-4xl text-gray-600"></ion-icon>
                            </div>
                        </div>
                        <hr class="my-4">
                        <p class="text-sm tracking-wide leading-loose text-gray-700">
                            @isset($$user->userExtraInfo->summary)  
                                {{$user->userExtraInfo->summary}}
                            @endisset
                        </p>
                    </div>
                    <div class="p-4">
                        <div class="bg-indigo-200 w-full h-96 rounded-xl">
                            <div class="h-full w-full" id="map_profile"></div>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="bg-white rounded-2xl shadow-2xl p-8">
                        <div class="flex items-center justify-between">
                            <div>
                                <h1 class="tracking-wide leading-loose capitalize tex-3xl">Profile</h1>
                                <span class="text-xs">Profile</span>
                            </div>
                            <div class="flex items-center justify-around">
                                <div
                                    class="h-8 w-8 border border-gray-500 rounded-full flex justify-center items-center mx-1">
                                    <ion-icon name="logo-github" class="text-gray-800"></ion-icon>
                                </div>
                                <div
                                    class="h-8 w-8 border border-gray-500 rounded-full flex justify-center items-center mx-1">
                                    <ion-icon name="logo-facebook" class="text-indigo-600"></ion-icon>
                                </div>
                                <div
                                    class="h-8 w-8 border border-gray-500 rounded-full flex justify-center items-center mx-1">
                                    <ion-icon name="logo-youtube" class="text-red-400"></ion-icon>
                                </div>
                                <div
                                    class="h-8 w-8 border border-gray-500 rounded-full flex justify-center items-center mx-1">
                                    <ion-icon name="logo-linkedin" class="text-blue-500"></ion-icon>
                                </div>
                                <div
                                    class="h-8 w-8 border border-gray-500 rounded-full flex justify-center items-center mx-1">
                                    <ion-icon name="logo-pinterest" class="text-red-400"></ion-icon>
                                </div>
                                <div
                                    class="h-8 w-8 border border-gray-500 rounded-full flex justify-center items-center mx-1">
                                    <ion-icon name="logo-behance" class="text-blue-400"></ion-icon>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="flex items-center justify-around">
                            <div class=" text-center p-4 text-sm">
                                <!-- <ion-icon name="person" class="text-xl  text-indigo-600"></ion-icon> -->
                                <span class="block">Profile</span>
                                <span class="text-gray-500">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star-half"></ion-icon>
                                </span>
                            </div>
                            <div class="p-4 text-center text-sm">
                                <!-- <ion-icon name="heart" class="text-red-400 text-xl"></ion-icon> -->
                                <span class="block">Poke</span>
                                <span class="text-gray-500">155 personne</span>
                            </div>

                            <div class="text-center p-4 text-sm">
                                <span class="block">Pin</span>
                                <span class="text-gray-500">155 personne</span>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <button class="px-4 py-2 bg-indigo-600 rounded-lg shadow-xl text-white mt-4 flex items-center mr-4">
                                <ion-icon name="flash-outline" class="mr-2 text-lg"></ion-icon>
                                <span>Poke</span>
                            </button>
                            <button class="px-4 py-2 bg-gray rounded-lg shadow-xl text-indigo-600 mt-4 flex items-center">
                                <ion-icon name="locate-outline" class="mr-2 text-xl"></ion-icon>
                                <span>Pin</span>
                            </button>
                            <button id="btn-modal" class="px-4 py-2 bg-gray rounded-lg shadow-xl text-white bg-indigo-600 mt-4 flex items-center">
                                <ion-icon name="chatbubbles-outline" class="mr-2 text-xl"></ion-icon>
                                <span>Dis Quelquechose</span>
                            </button>

                        </div>

                    </div>
                    <div class="bg-white rounded-2xl shadow-2xl p-8 mt-8">
                        <h1 class="tracking-wide leading-loose capitalize tex-3xl">Education</h1>
                        <span class="text-xs">Education</span>
                        <hr>
                        <div class="my-4">
                            @isset($$user->userExtraInfo->education)                              
                                <ul>
                                    @foreach ($user->userExtraInfo->education as $item)
                                    <li class="flex items-center">
                                        <ion-icon name="ellipse" class="text-indigo-600 mr-2"></ion-icon>
                                        <div class="leading-loose tracking-wider">
                                            @foreach ($item as $it)
                                                <span class="mr-1"> {{$it}}</span>
                                            @endforeach
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            @endisset
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl shadow-2xl p-8 mt-8">
                        <h1 class="tracking-wide leading-loose capitalize tex-3xl">Intérêt</h1>
                        <span class="text-xs">Intérêt</span>
                        <hr>
                        <div class="my-4">
                            @isset($$user->userExtraInfo->interet)                              
                                <ul>
                                    @foreach ($user->userExtraInfo->interet as $item)
                                    <li class="flex items-center">
                                        <ion-icon name="checkmark-done-circle" class="text-indigo-600 mr-2"></ion-icon>
                                        <div class="leading-loose tracking-wider uppercase">
                                            {{$item}}
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            @endisset
                        </div>

                    </div>
                    <div class="bg-white rounded-2xl shadow-2xl p-8 mt-8">
                        <h1 class="tracking-wide leading-loose capitalize tex-3xl">Compétences</h1>
                        <span class="text-xs">Compétences</span>
                        <hr>
                        <div class="my-4">
                            @isset($$user->userExtraInfo->skills)                               
                            <ul>
                                @foreach ($user->userExtraInfo->skills as $item)
                                <li class="flex items-center">
                                    <ion-icon name="checkmark-done-circle" class="text-indigo-600 mr-2"></ion-icon>
                                    <div class="leading-loose tracking-wider uppercase">
                                        {{$item}}
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            @endisset
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl shadow-2xl p-8 mt-8">
                        <h1 class="tracking-wide leading-loose capitalize tex-3xl">Langues</h1>
                        <span class="text-xs">Langues</span>
                        <hr>
                        <div class="my-4">
                            @isset($$user->userExtraInfo->languages)                               
                                <ul>
                                    @foreach ($user->userExtraInfo->languages as $item)
                                    <li class="flex items-center">
                                        <ion-icon name="checkmark-done-circle" class="text-indigo-600 mr-2"></ion-icon>
                                        <div class="leading-loose tracking-wider uppercase">
                                            {{$item}}
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </section>
@endisset
@endsection