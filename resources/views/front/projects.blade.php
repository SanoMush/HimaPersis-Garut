@extends('front.layouts.app')

@section('content')
<div id="header" class="bg-gray-50 relative overflow-hidden">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10 px-4">
        <x-navbar/>
        <div class="flex flex-col gap-[30px] mt-20 pb-10">
            <p class="badge w-fit bg-maroon-light text-maroon-dark p-[8px_16px] rounded-full uppercase font-bold text-sm">OUR PROJECT</p>
            <h1 class="font-extrabold text-4xl sm:text-[50px] leading-tight">Our Projects Rooted in Values<br class="hidden sm:inline"> Driven by Change</h1>
        </div>
    </div>
</div>

<div id="OurProjects" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-10 px-4 pb-20">
    <div class="flex flex-wrap items-center gap-[30px] justify-center text-left">
        @forelse($projects as $project)
        <div class="card w-full sm:w-[356.67px] flex flex-col bg-white border border-gray-200 rounded-[20px] overflow-hidden hover:border-maroon-primary transition-all duration-300">
            <div class="thumbnail h-[200px] flex shrink-0 overflow-hidden">
                <img src="{{Storage::url($project->thumbnail)}}" class="object-cover object-center w-full h-full" alt="thumbnails">
            </div>
            <div class="flex flex-col p-[30px] gap-5">
                <div class="flex flex-col gap-1">
                    <p class="title font-bold text-xl leading-[30px]">{{$project->name}}</p>
                    <p class="leading-[30px] text-gray-600">{{$project->tagline}}</p>
                </div>
                <a href="{{ route('front.details', $project->slug) }}" class="font-semibold text-maroon-primary w-fit hover:opacity-80 transition-all">Learn More</a>
            </div>
        </div>
        @empty
        <p class="text-center py-5 w-full">Belum ada project saat ini</p>
        @endforelse
    </div>
</div>
@endsection
