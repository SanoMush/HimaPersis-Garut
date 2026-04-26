@extends('front.layouts.app')

@section('content')

<!-- Hero Section -->
<div id="about-hero" class="bg-gray-50 relative overflow-hidden">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10 px-4 pb-32">
        <x-navbar/>
        
        <div class="flex flex-col gap-6 mt-20 relative z-10 text-center lg:text-left lg:w-3/4 mx-auto lg:mx-0">
            <p class="badge w-fit mx-auto lg:mx-0 bg-maroon-light text-maroon-dark p-[8px_16px] rounded-full uppercase font-bold text-sm tracking-wider">
                TENTANG KAMI
            </p>
            <h1 class="font-extrabold text-4xl sm:text-5xl lg:text-6xl leading-tight">
                Lokomotif Intelektual <br class="hidden lg:block"/>
                <span class="text-maroon-primary">Hima Persis</span>
            </h1>
            <p class="text-gray-600 text-lg sm:text-xl leading-relaxed max-w-2xl mx-auto lg:mx-0 mt-4">
                Himpunan Mahasiswa Persatuan Islam (HIMA PERSIS) adalah wadah pergerakan mahasiswa yang berlandaskan Al-Quran dan As-Sunnah, menggabungkan kekuatan tradisi keilmuan dengan responsivitas terhadap tantangan zaman.
            </p>
        </div>
    </div>
    
    <!-- Background Decor -->
    <div class="absolute right-0 top-0 w-1/3 h-full bg-maroon-primary/5 blur-3xl rounded-full translate-x-1/2 -translate-y-1/4"></div>
</div>

<!-- Values Section (Ilmiah, Progresif, Revolusioner) -->
<div id="core-values" class="container max-w-[1130px] mx-auto px-4 -mt-20 relative z-20 mb-20">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Card 1: Ilmiah -->
        <div class="bg-white p-8 rounded-[24px] shadow-[0_15px_50px_0_rgba(0,0,0,0.05)] border border-gray-100 hover:border-maroon-light hover:-translate-y-2 transition-all duration-300 group">
            <div class="w-16 h-16 bg-maroon-light rounded-2xl flex items-center justify-center mb-8 group-hover:bg-maroon-primary transition-colors duration-300">
                <svg class="w-8 h-8 text-maroon-primary group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
            </div>
            <h3 class="font-bold text-2xl mb-4 group-hover:text-maroon-primary transition-colors duration-300">Ilmiah</h3>
            <p class="text-gray-600 leading-relaxed">Menjunjung tinggi nalar kritis, tradisi literasi, dan riset akademik. Segala bentuk pergerakan harus didasarkan pada argumen keilmuan yang kuat dan Shahih.</p>
        </div>
        <!-- Card 2: Progresif -->
        <div class="bg-white p-8 rounded-[24px] shadow-[0_15px_50px_0_rgba(0,0,0,0.05)] border border-gray-100 hover:border-maroon-light hover:-translate-y-2 transition-all duration-300 group">
            <div class="w-16 h-16 bg-maroon-light rounded-2xl flex items-center justify-center mb-8 group-hover:bg-maroon-primary transition-colors duration-300">
                <svg class="w-8 h-8 text-maroon-primary group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
            </div>
            <h3 class="font-bold text-2xl mb-4 group-hover:text-maroon-primary transition-colors duration-300">Progresif</h3>
            <p class="text-gray-600 leading-relaxed">Berorientasi ke depan, responsif terhadap perubahan sosial tekonologi, serta terus berinovasi untuk memberikan kebermanfaatan nyata bagi kemajuan umat.</p>
        </div>
        <!-- Card 3: Revolusioner -->
        <div class="bg-white p-8 rounded-[24px] shadow-[0_15px_50px_0_rgba(0,0,0,0.05)] border border-gray-100 hover:border-maroon-light hover:-translate-y-2 transition-all duration-300 group">
            <div class="w-16 h-16 bg-maroon-light rounded-2xl flex items-center justify-center mb-8 group-hover:bg-maroon-primary transition-colors duration-300">
                <svg class="w-8 h-8 text-maroon-primary group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
            <h3 class="font-bold text-2xl mb-4 group-hover:text-maroon-primary transition-colors duration-300">Revolusioner</h3>
            <p class="text-gray-600 leading-relaxed">Berani membawa perubahan mendasar dan meruntuhkan kebatilan. Mampu menawarkan solusi transformatif dan inovatif untuk membangun masyarakat yang madani.</p>
        </div>
    </div>
</div>

<!-- History & Philosophy -->
<div class="bg-white relative py-20 border-t border-gray-100">
    <div class="container max-w-[1130px] mx-auto px-4 flex flex-col lg:flex-row gap-16 items-center">
        <div class="lg:w-1/2 flex flex-col gap-6">
            <p class="text-maroon-primary font-bold uppercase tracking-widest text-sm">Prinsip Pergerakan</p>
            <h2 class="font-bold text-4xl sm:text-5xl leading-tight">Melangkah Bersama <br> Menjaga Kemurnian <span class="text-maroon-primary">Risalah</span></h2>
            <div class="prose max-w-none text-gray-600 text-lg leading-relaxed mt-4 flex flex-col gap-4">
                <p>
                    Sebagai otonom dari jamiyyah Persatuan Islam (PERSIS), kehadiran HIMA PERSIS dirancang untuk menyinergikan gairah intelektual mahasiswa dengan nilai-nilai puritanisme Islam. Kami meyakini bahwa mahasiswa adalah rahim peradaban, agen perubahan (agent of change), dan pengawal kemurnian moral (iron stock).
                </p>
                <p>
                    Dengan semboyan khasnya, HIMA PERSIS tidak sekadar bergerak lewat retorika jalanan, melainkan juga mendalami diskusi dialektis di kelas, pusat kajian, dan ruang akademik. Harmoni antara iman, ilmu, dan amal menjadi landasan paling utama dan absolut bagi setiap kader HIMA PERSIS di seluruh Nusantara pada setiap kiprah dan langkahnya.
                </p>
            </div>
        </div>
        <!-- Image display -->
        <div class="lg:w-1/2 w-full flex justify-center">
            <div class="aspect-square max-w-[500px] w-full bg-gray-50 rounded-[40px] p-10 flex items-center justify-center relative shadow-2xl">
                <!-- Add a subtle rotated square in background -->
                <div class="absolute inset-0 bg-maroon-primary/10 rounded-[40px] transform rotate-6 scale-95 -z-10"></div>
                <img src="{{ asset('assets/logo/pd.svg') }}" class="w-full h-auto object-contain drop-shadow-xl z-10" alt="Hima Persis Logo">
            </div>
        </div>
    </div>
</div>

<!-- Dynamic CMS Content (if admin adds some "Company About" structures) -->
@if($abouts->count() > 0)
<div class="bg-gray-50 py-24">
    <div class="container max-w-[1130px] mx-auto px-4 flex flex-col gap-12">
        <div class="text-center">
            <h2 class="font-bold text-3xl sm:text-4xl text-gray-900">Histori & Dokumen Penting</h2>
            <p class="text-gray-500 mt-3">Dokumentasi dan Informasi Struktural Tambahan</p>
        </div>
        
        <div class="flex flex-col gap-16">
            @foreach($abouts as $about)
                <div class="flex flex-col lg:flex-row justify-between items-center gap-10 bg-white p-8 sm:p-12 rounded-[30px] shadow-sm border border-gray-100 hover:shadow-lg transition-all duration-300">
                    <div class="flex flex-col gap-6 lg:w-1/2">
                        <div class="flex flex-col gap-2">
                            <p class="badge w-fit bg-maroon-light text-maroon-dark p-[8px_16px] rounded-full uppercase font-bold text-xs tracking-wider">
                                {{ $about->type }}
                            </p>
                            <h3 class="font-extrabold text-3xl sm:text-4xl leading-tight text-gray-900">
                                {{ $about->name }} 
                            </h3>
                        </div>
                        
                        @if($about->keypoints)
                            <div class="flex flex-col gap-4 mt-2">
                                @foreach($about->keypoints as $keypoint)
                                    <div class="flex items-start gap-4 bg-gray-50 p-4 rounded-2xl">
                                        <div class="w-8 h-8 rounded-full bg-maroon-light flex items-center justify-center shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5 text-maroon-primary">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>
                                        </div>
                                        <span class="text-gray-700 font-medium leading-relaxed mt-0.5">{{ $keypoint->keypoint }}</span>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <div class="w-full lg:w-[45%] shrink-0">
                        <img src="{{ Storage::url($about->thumbnail) }}" alt="{{ $about->name }}" class="w-full rounded-3xl object-cover aspect-[4/3] shadow-md">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endif

@endsection