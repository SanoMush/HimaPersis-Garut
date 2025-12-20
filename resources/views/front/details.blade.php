@extends('front.layouts.app')

@section('content')
<div id="header" class="bg-gray-50 relative overflow-hidden">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10 px-4">
        <x-navbar/>
        <div class="flex flex-col gap-[30px] mt-20 pb-10">
            <h1 class="font-extrabold text-4xl leading-snug">{{ $product->name }}</h1>
            <p class="text-gray-500 text-xl">{{ $product->tagline }}</p>
        </div>
    </div>
</div>

<div class="container max-w-[1130px] mx-auto flex flex-col lg:row gap-10 mt-10 px-4 pb-20">
    <div class="lg:w-2/3 flex flex-col gap-8">
        <div class="rounded-[20px] overflow-hidden shadow-sm">
            <img src="{{ Storage::url($product->thumbnail) }}" class="w-full object-cover">
        </div>
        <div class="prose max-w-none text-gray-700 leading-relaxed text-lg">
            {!! $product->about !!}
        </div>
    </div>

    <div class="lg:w-1/3 flex flex-col gap-8">
        <h2 class="font-bold text-2xl">Project Lainnya</h2>
        <div class="flex flex-col gap-6">
            @foreach($other_products as $other)
            <a href="{{ route('front.details', $other->slug) }}" class="flex items-center gap-4 group">
                <img src="{{ Storage::url($other->thumbnail) }}" class="w-24 h-16 rounded-lg object-cover">
                <span class="font-semibold group-hover:text-maroon-primary">{{ $other->name }}</span>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection