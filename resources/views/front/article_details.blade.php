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

        {{-- === TOMBOL DOWNLOAD PDF DITAMBAHKAN DI SINI === --}}
        @if($article->pdf_path)
        <div class="mt-4">
             <a href="{{ Storage::url($article->pdf_path) }}" 
                download="{{ Str::slug($article->title) }}.pdf" {{-- Nama file saat download --}}
                target="_blank" {{-- Buka di tab baru (opsional) --}}
                class="inline-flex items-center gap-2 px-6 py-3 bg-maroon-primary text-white font-semibold rounded-lg hover:opacity-90 transition-opacity duration-300">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                 </svg>
                 Download PDF Karya
             </a>
        </div>
        @endif
        {{-- ============================================= --}}

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