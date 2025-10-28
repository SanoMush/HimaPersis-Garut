@extends('front.layouts.app')

@section('content')

<div id="header" class="bg-gray-50 relative overflow-hidden">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10 px-4">
        <x-navbar/>
        
        @if($about)
            <div id="Hero" class="flex flex-col lg:flex-row justify-between items-center gap-10 mt-20 pb-20">
                
                {{-- Bagian Kiri: Teks --}}
                <div class="flex flex-col gap-5">
                    <h1 class="font-extrabold text-4xl sm:text-[50px] leading-[50px] sm:leading-[65px]">
                        {{ $about->name }} 
                    </h1>
                    
                    <p class="badge w-fit bg-maroon-light text-maroon-dark p-[8px_16px] rounded-full uppercase font-bold text-sm">
                        {{ $about->type }}
                    </p>

                    @if($about->keypoints)
                        <div class="flex flex-col gap-3">
                            @foreach($about->keypoints as $keypoint)
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-maroon-primary">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                    <span class="text-gray-600 leading-[30px]">{{ $keypoint->keypoint }}</span>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>

                {{-- Bagian Kanan: Gambar Thumbnail --}}
                <div class="w-full lg:w-1/2">
                    <img src="{{ Storage::url($about->thumbnail) }}" alt="{{ $about->name }}" class="w-full rounded-[20px] object-cover">
                </div>
            </div>
        @else
            {{-- Ini jika admin belum input data sama sekali --}}
            <div id="Hero" class="flex flex-col gap-[30px] mt-20 pb-20">
                <h1 class="font-extrabold text-4xl sm:text-[50px] leading-[50px] sm:leading-[65px]">
                    Tentang Kami
                </h1>
                <p class="text-gray-600 leading-[30px] max-w-2xl">
                    Konten belum tersedia. Silakan masukkan data di halaman admin.
                </p>
            </div>
        @endif
    </div>
</div>
@endsection