@extends('front.layouts.app')

@section('content')
{{-- Header --}}
<div id="header" class="bg-gray-50 relative overflow-hidden">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10 px-4">
        <x-navbar/>
        <div id="Hero" class="flex flex-col gap-[30px] mt-20 pb-20">
            <h1 class="font-extrabold text-4xl sm:text-[50px] leading-[50px] sm:leading-[65px]">
                Karya Kader
            </h1>
            <p class="text-gray-600 leading-[30px] max-w-2xl">
                Kumpulan tulisan, gagasan, dan karya dari para kader Hima Persis Garut.
            </p>
        </div>
    </div>
</div>

{{-- Daftar Artikel --}}
<div id="Articles" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20 px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[30px] justify-center">
        @forelse($articles as $article)
        <div class="card w-full flex flex-col bg-white border border-gray-200 rounded-[20px] gap-[30px] overflow-hidden hover:border-maroon-primary transition-all duration-300">
            <div class="thumbnail h-[200px] flex shrink-0 overflow-hidden">
                <img src="{{ Storage::url($article->thumbnail) }}" class="object-cover object-center w-full h-full" alt="thumbnail">
            </div>
            <div class="flex flex-col p-[0_30px_30px_30px] gap-5">
                <div class="flex flex-col gap-1">
                    <p class="title font-bold text-xl leading-[30px]">{{ $article->title }}</p>
                    <p class="leading-[30px] text-gray-600">
                        {{-- Potong konten agar tidak terlalu panjang --}}
                        {{ Str::limit(strip_tags($article->content), 100) }}
                    </p>
                </div>
                <a href="{{ route('front.article.details', $article->slug) }}" class="font-semibold text-maroon-primary">
                    Baca Selengkapnya
                </a>
            </div>
        </div>
        @empty
        <p class="text-center col-span-3">Belum ada artikel yang dipublikasikan.</p>
        @endforelse
    </div>

    {{-- Pagination Links --}}
    <div class="mt-10">
        {{ $articles->links() }}
    </div>
</div>
@endsection