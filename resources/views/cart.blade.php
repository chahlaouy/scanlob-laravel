@extends('layouts.master')

@section('title')
    Panier
@endsection

@section('content')
@isset($loggedUserInfo)
<section class="container mx-auto bg-profile">
    <div class="bg-gray-800 bg-opacity-50 rounded-3xl p-12 w-full">
        @if (isset($reviews))
        @foreach ($reviews as $review)
            
            <div class="">
                <div class="p-4 bg-white shadow-2xl flex rounded-2xl">
                    <div class="flex mr-8">
                        <img src="{{asset('assets/images/profile.png')}}" class="w-24 rounded-2xl object-cover  shadow-2xl" alt=""> 
                    </div>
                    <div>
                        <div class="flex items-center">
                            <div>
                                <h1 class="text-2xl text-gray-800">
                                    {{$review->author}}
                                </h1>
                                <span class="text-sm block text-gray-600">Avis titre:</span>
                                <span class="text-sm block text-indigo-700">{{$review->title}}</span>
                            </div>
                        </div>
                        <hr class="my-4">
                        <p class="text-sm tracking-wide leading-loose text-gray-700">
                            {{$review->body}}
                        </p>
                    </div>
                </div>

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
            </div>
        @endforeach
            
        @else
            <h1 class="text-gray-700 text-4xl">Sorry No Reviews</h1>
        @endif
    </div>
     
</section>
@endisset
@endsection