@extends('front.layouts.app')

@section('content')
{{-- Header --}}
<div id="header" class="bg-gray-50 relative overflow-hidden">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10 px-4">
        <x-navbar/>
        <div id="Hero" class="flex flex-col gap-[30px] mt-20 pb-10">
            {{-- Judul Artikel --}}
            <h1 class="font-extrabold text-3xl sm:text-4xl leading-snug">
                {{ $article->title }}
            </h1>
            {{-- Info Penulis/Tanggal --}}
            <div class="flex items-center gap-4 text-sm text-gray-500">
                <span>Ditulis oleh {{ $article->author_name }}</span>
                <span>•</span>
                <span>{{ $article->created_at->format('d M Y') }}</span>
            </div>
        </div>
    </div>
</div>

{{-- Isi Artikel & Artikel Terkait --}}
<div id="ArticleContent" class="container max-w-[1130px] mx-auto flex flex-col lg:flex-row gap-10 lg:gap-[50px] mt-10 px-4 pb-20">

    {{-- Kolom Kiri: Isi Artikel --}}
    <div class="lg:w-2/3 flex flex-col gap-8">
        {{-- Gambar Thumbnail --}}
        <div class="rounded-[20px] overflow-hidden">
            <img src="{{ Storage::url($article->thumbnail) }}" class="w-full object-cover" alt="{{ $article->title }}">
        </div>

        {{-- Isi Konten (gunakan prose agar formatnya rapi) --}}
        <div class="prose max-w-none text-gray-700 leading-relaxed">
            {!! $article->content !!}
        </div>
    </div>

    {{-- Kolom Kanan: Artikel Terkait --}}
    <div class="lg:w-1/3 flex flex-col gap-8">
        <h2 class="font-bold text-2xl">Karya Lainnya</h2>
        <div class="flex flex-col gap-6">
            @forelse($related_articles as $related)
            <div class="flex items-center gap-4">
                <div class="w-[100px] h-[70px] rounded-lg overflow-hidden flex-shrink-0">
                    <img src="{{ Storage::url($related->thumbnail) }}" class="w-full h-full object-cover" alt="{{ $related->title }}">
                </div>
                <div>
                    <a href="{{ route('front.article.details', $related->slug) }}" class="font-semibold text-lg hover:text-maroon-primary transition-all duration-300 line-clamp-2">
                        {{ $related->title }}
                    </a>
                    <p class="text-sm text-gray-500 mt-1">{{ $related->created_at->format('d M Y') }}</p>
                </div>
            </div>
            @empty
            <p class="text-gray-500">Belum ada karya lainnya.</p>
            @endforelse
        </div>
    </div>

</div>
@endsection