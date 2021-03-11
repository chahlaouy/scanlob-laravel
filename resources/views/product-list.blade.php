@extends('layouts.master')

@section('title')
    Nos Offres
@endsection

@section('content')
<!-- 
    *****************************
    *    header Section         *
    *****************************
-->
<section class="container mx-auto">

    <div class="flex items-center">
        <div class="flex-1 p-24">
            <div class="bg-red-400 w-full rounded-2xl flex items-center justify-center shadow-2xl">
                <img src="./assets/images/photographie.png" class="w-full" alt="">
            </div>
        </div>

        <div class="flex-1 max-w-2xl">
            <h1 class="tracking-wider leading-loose text-lg uppercase text-indigo-600">design</h1>
            <h1 class="text-7xl text-gray-800">
                Nos Meilleur Choix pour les categories design
            </h1>
            <p class="tracking-wide leading-loose text-sm text-gray-700 my-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum quis unde temporibus? Nesciunt eum
                necessitatibus deleniti velit.
            </p>

        </div>
    </div>
</section>
<!-- 
    *****************************
    *    body Section         *
    *****************************
-->
<section class="flex container mx-auto">
    <div class="w-full">
        <section class="md:grid md:grid-cols-2 md:gap-8 xl:grid-cols-4 xl:gap-6 px-12">
            <!-- 1111111111 -->

            <div id="card" class="overflow-hidden rounded-lg">
                <div class="w-full relative z-0">
                    <div class="bg-gray-900 bg-opacity-5 w-full h-full absolute z-10 rounded-lg overflow-hidden">
                        <div
                            class="flex justify-center items-center py-4 text-gray-600 text-sm bg-opacity-75 text-center rounded-t-lg">
                            <div class="flex-1 flex items-center justify-center">
                                <div
                                    class="w-12 h-12 flex items-center justify-center rounded-full bg-indigo-500 rounded-icon rounded-icon-1">
                                    <ion-icon name="desktop-outline" class="text-xl text-gray-100"></ion-icon>
                                </div>
                            </div>
                            <div class="flex-1 flex items-center justify-center">
                                <div
                                    class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-100 rounded-icon rounded-icon-2">
                                    <ion-icon name="stats-chart-outline" class="text-xl"></ion-icon>
                                </div>
                            </div>
    
                            <div class="flex-1 flex items-center justify-center">
                                <div
                                    class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-100 rounded-icon rounded-icon-3">
                                    <ion-icon name="list-outline" class="text-xl"></ion-icon>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-0 w-full z-0">
                            <div class="flex items-center text-xs text-gray-100 ">
                                <div class="px-1 py-2 ">
                                    <ion-icon name="cloud-download" class="pr-1"></ion-icon>
                                    <span class="text-xs">122</span>
                                </div>
                                <div class="px-1 py-2">
                                    <ion-icon name="star" class="pr-1"></ion-icon>
                                    <span class="text-xs">4/5</span>
                                </div>
    
                            </div>
                        </div>
                    </div>
                    <img src="./assets/images/visit-card.png" alt="" class="w-full rounded-t-lg shadow-lg" />
                </div>
                <div class="bg-white shadow-lg rounded-b-lg">
                    <div class="px-6">
                        <div class="flex justify-between items-center">
                            <h1 class="text-2xl font-bold my-4">Carte Viste </h1>
                            <h1 class="flex items-start text-right">
                                <div class="font-bold text-xl py-3">69</div>
                                <span class="text-xs text-gray-600 pt-3">/TND</span>
                            </h1>
                        </div>
                        <div class="relative text-sm text-gray-500 pb-2">
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <button
                                class="w-8 h-8 bg-indigo-300 rounded-full absolute z-0 bottom-8 right-0 outline-none"></button>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- 222222 -->
    
    
            <div id="card" class="overflow-hidden rounded-lg">
                <div class="w-full relative z-0">
                    <div class="bg-gray-900 bg-opacity-20 w-full h-full absolute z-10 rounded-lg overflow-hidden">
                        <div
                            class="flex justify-center items-center py-4 text-gray-600 text-sm bg-opacity-75 text-center rounded-t-lg">
                            <div class="flex-1 flex items-center justify-center">
                                <div
                                    class="w-12 h-12 flex items-center justify-center rounded-full bg-indigo-500 rounded-icon rounded-icon-1">
                                    <ion-icon name="desktop-outline" class="text-xl text-gray-100"></ion-icon>
                                </div>
                            </div>
                            <div class="flex-1 flex items-center justify-center">
                                <div
                                    class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-100 rounded-icon rounded-icon-2">
                                    <ion-icon name="stats-chart-outline" class="text-xl"></ion-icon>
                                </div>
                            </div>
    
                            <div class="flex-1 flex items-center justify-center">
                                <div
                                    class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-100 rounded-icon rounded-icon-3">
                                    <ion-icon name="list-outline" class="text-xl"></ion-icon>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-0 w-full z-0">
                            <div class="flex items-center text-xs text-gray-100 ">
                                <div class="px-1 py-2 ">
                                    <ion-icon name="cloud-download" class="pr-1"></ion-icon>
                                    <span class="text-xs">122</span>
                                </div>
                                <div class="px-1 py-2">
                                    <ion-icon name="star" class="pr-1"></ion-icon>
                                    <span class="text-xs">4/5</span>
                                </div>
    
                            </div>
                        </div>
                    </div>
                    <img src="./assets/images/visit-card-2.png" alt="" class="w-full rounded-t-lg shadow-lg" />
                </div>
                <div class="bg-white shadow-lg rounded-b-lg">
                    <div class="px-6">
                        <div class="flex justify-between items-center">
                            <h1 class="text-2xl font-bold my-4">Carte Viste</h1>
                            <h1 class="flex items-start text-right">
                                <div class="font-bold text-xl py-3">69</div>
                                <span class="text-xs text-gray-600 pt-3">/TND</span>
                            </h1>
                        </div>
                        <div class="relative text-sm text-gray-500 pb-2">
                            <p>Lorem ipsum dolor sit amet consectetur ad</p>
                            <button
                                class="w-8 h-8 bg-red-400 rounded-full absolute z-0 bottom-8 right-0 outline-none"></button>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- 33333 -->
    
    
            <div id="card" class="overflow-hidden rounded-lg">
                <div class="w-full relative z-0">
                    <div class="bg-gray-900 bg-opacity-50 w-full h-full absolute z-10 rounded-lg overflow-hidden">
                        <div
                            class="flex justify-center items-center py-4 text-gray-600 text-sm bg-opacity-75 text-center rounded-t-lg">
                            <div class="flex-1 flex items-center justify-center">
                                <div
                                    class="w-12 h-12 flex items-center justify-center rounded-full bg-indigo-500 rounded-icon rounded-icon-1">
                                    <ion-icon name="desktop-outline" class="text-xl text-gray-100"></ion-icon>
                                </div>
                            </div>
                            <div class="flex-1 flex items-center justify-center">
                                <div
                                    class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-100 rounded-icon rounded-icon-2">
                                    <ion-icon name="stats-chart-outline" class="text-xl"></ion-icon>
                                </div>
                            </div>
    
                            <div class="flex-1 flex items-center justify-center">
                                <div
                                    class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-100 rounded-icon rounded-icon-3">
                                    <ion-icon name="list-outline" class="text-xl"></ion-icon>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-0 w-full z-0">
                            <div class="flex items-center text-xs text-gray-100 ">
                                <div class="px-1 py-2 ">
                                    <ion-icon name="cloud-download" class="pr-1"></ion-icon>
                                    <span class="text-xs">122</span>
                                </div>
                                <div class="px-1 py-2">
                                    <ion-icon name="star" class="pr-1"></ion-icon>
                                    <span class="text-xs">4/5</span>
                                </div>
    
                            </div>
                        </div>
                    </div>
                    <img src="./assets/images/visit-card-3.png" alt="" class="w-full rounded-t-lg shadow-lg" />
                </div>
                <div class="bg-white shadow-lg rounded-b-lg">
                    <div class="px-6">
                        <div class="flex justify-between items-center">
                            <h1 class="text-2xl font-bold my-4">Carte Viste</h1>
                            <h1 class="flex items-start text-right">
                                <div class="font-bold text-xl py-3">69</div>
                                <span class="text-xs text-gray-600 pt-3">/TND</span>
                            </h1>
                        </div>
                        <div class="relative text-sm text-gray-500 pb-2">
                            <p>Lorem ipsum dolor sit amet consectetur adipisi.</p>
                            <button
                                class="w-8 h-8 bg-red-400 rounded-full absolute z-0 bottom-8 right-0 outline-none"></button>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- 33333 -->
    
    
            <div id="card" class="overflow-hidden rounded-lg">
                <div class="w-full relative z-0">
                    <div class="bg-gray-900 bg-opacity-50 w-full h-full absolute z-10 rounded-lg overflow-hidden">
                        <div
                            class="flex justify-center items-center py-4 text-gray-600 text-sm bg-opacity-75 text-center rounded-t-lg">
                            <div class="flex-1 flex items-center justify-center">
                                <div
                                    class="w-12 h-12 flex items-center justify-center rounded-full bg-indigo-500 rounded-icon rounded-icon-1">
                                    <ion-icon name="desktop-outline" class="text-xl text-gray-100"></ion-icon>
                                </div>
                            </div>
                            <div class="flex-1 flex items-center justify-center">
                                <div
                                    class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-100 rounded-icon rounded-icon-2">
                                    <ion-icon name="stats-chart-outline" class="text-xl"></ion-icon>
                                </div>
                            </div>
    
                            <div class="flex-1 flex items-center justify-center">
                                <div
                                    class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-100 rounded-icon rounded-icon-3">
                                    <ion-icon name="list-outline" class="text-xl"></ion-icon>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-0 w-full z-0">
                            <div class="flex items-center text-xs text-gray-100 ">
                                <div class="px-1 py-2 ">
                                    <ion-icon name="cloud-download" class="pr-1"></ion-icon>
                                    <span class="text-xs">122</span>
                                </div>
                                <div class="px-1 py-2">
                                    <ion-icon name="star" class="pr-1"></ion-icon>
                                    <span class="text-xs">4/5</span>
                                </div>
    
                            </div>
                        </div>
                    </div>
                    <img src="./assets/images/visit-card-2.png" alt="" class="w-full rounded-t-lg shadow-lg" />
                </div>
                <div class="bg-white shadow-lg rounded-b-lg">
                    <div class="px-6">
                        <div class="flex justify-between items-center">
                            <h1 class="text-2xl font-bold my-4">Carte Viste</h1>
                            <h1 class="flex items-start text-right">
                                <div class="font-bold text-xl py-3">69</div>
                                <span class="text-xs text-gray-600 pt-3">/TND</span>
                            </h1>
                        </div>
                        <div class="relative text-sm text-gray-500 pb-2">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                            <button
                                class="w-8 h-8 bg-red-400 rounded-full absolute z-0 bottom-8 right-0 outline-none"></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 4444444 -->
    
    
            <div id="card" class="overflow-hidden rounded-lg">
                <div class="w-full relative z-0">
                    <div class="bg-gray-900 bg-opacity-50 w-full h-full absolute z-10 rounded-lg overflow-hidden">
                        <div
                            class="flex justify-center items-center py-4 text-gray-600 text-sm bg-opacity-75 text-center rounded-t-lg">
                            <div class="flex-1 flex items-center justify-center">
                                <div
                                    class="w-12 h-12 flex items-center justify-center rounded-full bg-indigo-500 rounded-icon rounded-icon-1">
                                    <ion-icon name="desktop-outline" class="text-xl text-gray-100"></ion-icon>
                                </div>
                            </div>
                            <div class="flex-1 flex items-center justify-center">
                                <div
                                    class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-100 rounded-icon rounded-icon-2">
                                    <ion-icon name="stats-chart-outline" class="text-xl"></ion-icon>
                                </div>
                            </div>
    
                            <div class="flex-1 flex items-center justify-center">
                                <div
                                    class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-100 rounded-icon rounded-icon-3">
                                    <ion-icon name="list-outline" class="text-xl"></ion-icon>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-0 w-full z-0">
                            <div class="flex items-center text-xs text-gray-100 ">
                                <div class="px-1 py-2 ">
                                    <ion-icon name="cloud-download" class="pr-1"></ion-icon>
                                    <span class="text-xs">122</span>
                                </div>
                                <div class="px-1 py-2">
                                    <ion-icon name="star" class="pr-1"></ion-icon>
                                    <span class="text-xs">4/5</span>
                                </div>
    
                            </div>
                        </div>
                    </div>
                    <img src="./assets/images/visit-card-3.png" alt="" class="w-full rounded-t-lg shadow-lg" />
                </div>
                <div class="bg-white shadow-lg rounded-b-lg">
                    <div class="px-6">
                        <div class="flex justify-between items-center">
                            <h1 class="text-2xl font-bold my-4">Carte Viste</h1>
                            <h1 class="flex items-start text-right">
                                <div class="font-bold text-xl py-3">69</div>
                                <span class="text-xs text-gray-600 pt-3">/TND</span>
                            </h1>
                        </div>
                        <div class="relative text-sm text-gray-500 pb-2">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit</p>
                            <button
                                class="w-8 h-8 bg-red-400 rounded-full absolute z-0 bottom-8 right-0 outline-none"></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <aside class="w-96  px-4 text-sm" style="background: #e7eeed;">
        <h1 class="px-2 uppercase tracking-wide leading-loose text-gray-800">Catégories</h1>
        <ul class="w-full text-indigo-600 mt-6">
            <li class="py-2 px-2 bg-indigo-600 text-gray-100 rounded"> 
                design
            </li>
            <li class="py-2 px-2"> 
                photographie
            </li>
            <li class="py-2 px-2"> 
                dev
            </li>
            <li class="py-2 px-2"> 
                medecine
            </li>
            <li class="py-2 px-2"> 
                business
            </li>
            <li class="py-2 px-2"> 
                front end
            </li>
        </ul>
    </aside>
</section>
<!-- 
    *****************************
    *    pagination Section     *
    *****************************
-->
<section>
    <div class="flex items-center justify-center my-10">

        <div class="flex items-center">
            <div class="text-white bg-indigo-600 px-4 py-2 rounded mr-2 shadow-2xl border-gray-300 border">
                1
            </div>
            <div class="bg-white text-indigo-600 px-4 py-2 rounded mr-2 shadow-2xl border-gray-300 border">
                2
            </div>
            <div class="bg-white text-indigo-600 px-4 py-2 rounded mr-2 shadow-2xl border-gray-300 border">
                3
            </div>
            <div class="bg-white text-indigo-600 px-4 py-2 rounded shadow-2xl border-gray-300 border">
                4
            </div>
        </div>

    </div>
</section>
@endsection