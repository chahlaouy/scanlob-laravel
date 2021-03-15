@extends('layouts.master')

@section('title')
    visit card
@endsection

@section('content')
@isset($offer) 
    <section class="container mx-auto">
        
        <div class="flex">
            <div class="flex-1 p-24">
                <div id="card" class="overflow-hidden rounded-lg">
                    <div class="w-full relative z-0">
                        <div class="bg-gray-900 bg-opacity-10 w-full h-full absolute z-10 rounded-lg overflow-hidden">
                            
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
                        <img src="{{asset('assets/images/') . '/' . $offer->img_url }}" alt="" class="w-full h-96 object-filt rounded-t-lg shadow-lg" />
                    </div>
                    <div class="bg-white shadow-lg rounded-b-lg">
                        <div class="px-6">
                            <div class="flex justify-between items-center">
                                <h1 class="text-2xl font-bold my-4">{{ $offer->title }}</h1>
                                <h1 class="flex items-start text-right">
                                    <div class="font-bold text-xl py-3">{{ $offer->title }}</div>
                                    <span class="text-xs text-gray-600 pt-3">/euro</span>
                                </h1>
                            </div>
                            <div class="relative text-sm text-gray-500 pb-2">
                                <p>{{ $offer->description }}</p>
                                <button
                                    class="w-8 h-8 bg-indigo-300 rounded-full absolute z-0 bottom-8 right-0 outline-none"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-1 p-24">
                <h1 class="tracking-wider leading-loose text-lg uppercase text-indigo-600">{{ $offer->category }}</h1>
                <h1 class="text-4xl text-gray-800">
                    {{ $offer->title }}
                </h1>
                <span class="text-sm">{{ $offer->tag }}</span>
                <hr class="my-4">
                <p class="tracking-wide leading-loose text-sm">
                    {{ $offer->description }}
                </p>
                <div class="mt-10">
                    {{-- <form action=""> --}}
                        <div class="flex items-center justify-between">
                            <h1 class="text-2xl text-gray-800">
                                Qauntite
                            </h1>
                            <input name="quantity" type="number" class="px-2 py-2 w-32 bg-red-100 rounded-lg border-2 border-indigo-600" placeholder="1000">
                        </div>
                        <button class="bg-indigo-600 rounded-lg px-4 py-2 text-gray-100 mt-5">Commander</button>
                    {{-- </form> --}}
                </div>

            </div>
        </div>

    </section>
@endisset
@endsection