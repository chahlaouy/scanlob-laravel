@extends('layouts.master')

@section('title')
    Panier
@endsection

@section('content')
@isset($loggedUserInfo)
<section class="container mx-auto bg-profile">
    <div>
        @if (Session::get('success'))
            <div class="w-full px-4 py-2 my-4 bg-green-400 rounded text-white">
                {{Session::get('success')}}
            </div>
        @endif
    </div>
    <div class="bg-gray-800 bg-opacity-50 rounded-3xl p-12 w-full flex">
        @if (isset($items))
        <div class="flex-1">
            @foreach ($items as $item)           
                <div class="mt-5">
                    <div class="p-4 bg-white shadow-2xl flex rounded-2xl">
                        <div class="flex mr-8">
                            <img src="{{asset('assets/images/') . '/' . $item->associatedModel->img_url}}" class="w-24 rounded-2xl object-cover  shadow-2xl" alt=""> 
                        </div>
                        <div>
                            <div class="flex items-center justify-between">
                                <div>
                                    <h1 class="text-2xl text-gray-800">
                                        {{$item->name}}
                                    </h1>
                                    <span class="text-sm block text-gray-600">Quantité:</span>
                                    <span class="text-xl block text-indigo-700">{{$item->quantity}}</span>
                                </div>
                                <div class="text-3xl">
                                    {{$item->price}}€
                                </div>
                            </div>
                            <hr class="my-4">
                            <p class="text-sm tracking-wide leading-loose text-gray-700">
                                {{$item->associatedModel->description}}
                            </p>
                            <div class="flex items-center justify-end">
                                <button class="bg-red-400 text-gray-100 shadow-2xl rounded px-4 py-2">
                                    <a href="/delete-item/{{$item->id}}">Enléver</a>  
                                </button>
                            </div>
                        </div>
                    </div>
    
                    {{-- <section>
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
                    </section> --}}
                </div>
            @endforeach
        </div>
        <div class="flex-1 px-6">
            
            <div class="bg-white shadow-2xl rounded-2xl mt-5 p-8">
                <h1 class="text-3xl mb-16">Liste Des Produits</h1>
                @foreach ($items as $item)
                    <div class="flex items-center justify-between my-2">
                        <div class="text-lg text-gray-700">
                            {{$item->name}}
                        </div>
                        <div class="font-bold text-lg">
                            {{$item->quantity * $item->price}}€
                            
                        </div>
                    </div>
                    <hr>
                @endforeach
                <div class="flex items-center justify-between mt-16">
                    <div class="text-3xl">
                        Total
                    </div>
                    <div>
                        {{$total}}€
                        
                    </div>
                </div>
            </div>
        </div>
            
        @else
            <h1 class="text-gray-700 text-4xl">Sorry No Cart is empty</h1>
        @endif
    </div>
     
</section>
@endisset
@endsection