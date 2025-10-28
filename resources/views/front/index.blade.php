@extends('front.layouts.app')

@section('content')
{{-- Header: Latar belakang diganti menjadi abu-abu sangat muda --}}
<div id="header" class="bg-gray-50 relative overflow-hidden">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10 px-4">
        <x-navbar/>

        @forelse($hero_sections as $hero_section)
        <input type="hidden" name="path_video" id="path_video" value="{{Storage::url($hero_section->path_video)}}">
        <div id="Hero" class="flex flex-col gap-[30px] mt-20 pb-20">
            <input type="hidden" id="path_video" value="{{ $hero_section->path_video }}">
            <div class="flex items-center bg-white p-[8px_16px] gap-[10px] rounded-full w-fit border border-gray-200">
                <div class="w-5 h-5 flex shrink-0 overflow-hidden">
                    <img src="{{asset('assets/icons/crown.svg')}}" class="object-contain" alt="icon">
                </div>
                <p class="font-semibold text-sm">{{ $hero_section->achievement}}</p>
            </div>
            <div class="flex flex-col gap-[10px]">
                <h1 class="font-extrabold text-4xl sm:text-[50px] leading-[50px] sm:leading-[65px] max-w-[536px]">{{ $hero_section->heading}}</h1>
                {{-- Teks subjudul diganti ke abu-abu standar --}}
                <p class="text-gray-600 leading-[30px] max-w-[437px]">{{$hero_section->subheading}}</p>
            </div>
        </div>
    </div>
    
    <div class="relative w-full aspect-video sm:aspect-auto sm:h-full sm:absolute sm:w-[43%] top-0 right-0 overflow-hidden z-0">
        <img src="{{ Storage::url($hero_section->banner) }}" class="object-cover w-full h-full" alt="banner">
    </div>
    
    @empty
    <p class="text-center py-20 px-4">Belum ada data terbaru</p>
    @endforelse
</div>

{{-- Clients: Latar belakang putih --}}
<div id="Clients" class="container max-w-[1130px] mx-auto flex flex-col justify-center text-center gap-5 mt-20 px-4">
    <h2 class="font-bold text-lg">Pimpinan Komisariat Hima Persis Garut</h2>
    <div class="logo-container flex flex-wrap gap-5 justify-center">
        {{-- Hover border diubah ke maroon --}}
        <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-gray-200 rounded-[18px] p-4 gap-[10px] bg-white hover:border-maroon-primary transition-all duration-300">
            <div class="overflow-hidden h-9">
                <img src="{{asset('assets/logo/ipi.svg')}}" class="object-contain w-full h-full" alt="logo">
            </div>
        </div>
        <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-gray-200 rounded-[18px] p-4 gap-[10px] bg-white hover:border-maroon-primary transition-all duration-300">
            <div class="overflow-hidden h-9">
                <img src="{{asset('assets/logo/uniga.svg')}}" class="object-contain w-full h-full" alt="logo">
            </div>
        </div>
        <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-gray-200 rounded-[18px] p-4 gap-[10px] bg-white hover:border-maroon-primary transition-all duration-300">
            <div class="overflow-hidden h-9">
                <img src="{{asset('assets/logo/iai.svg')}}" class="object-contain w-full h-full" alt="logo">
            </div>
        </div>
        <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-gray-200 rounded-[18px] p-4 gap-[10px] bg-white hover:border-maroon-primary transition-all duration-300">
            <div class="overflow-hidden h-9">
                <img src="{{asset('assets/logo/unipi.svg')}}" class="object-contain w-full h-full" alt="logo">
            </div>
        </div>
        <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-gray-200 rounded-[18px] p-4 gap-[10px] bg-white hover:border-maroon-primary transition-all duration-300">
            <div class="overflow-hidden h-9">
                <img src="{{asset('assets/logo/stais.svg')}}" class="object-contain w-full h-full" alt="logo">
            </div>
        </div>
        <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-gray-200 rounded-[18px] p-4 gap-[10px] bg-white hover:border-maroon-primary transition-all duration-300">
            <div class="overflow-hidden h-9">
                <img src="{{asset('assets/logo/logo-55.svg')}}" class="object-contain w-full h-full" alt="logo">
            </div>
        </div>
        <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-gray-200 rounded-[18px] p-4 gap-[10px] bg-white hover:border-maroon-primary transition-all duration-300">
            <div class="overflow-hidden h-9">
                <img src="{{asset('assets/logo/logo-52.svg')}}" class="object-contain w-full h-full" alt="logo">
            </div>
        </div>
    </div>
</div>

{{-- Our Principles: Latar belakang putih --}}
<div id="OurPrinciples" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20 px-4">
    <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-5">
        <div class="flex flex-col gap-[14px]">
            {{-- Badge diubah ke warna maroon muda --}}
            <p class="badge w-fit bg-maroon-light text-maroon-dark p-[8px_16px] rounded-full uppercase font-bold text-sm">OUR PROJECT</p>
            <h2 class="font-bold text-3xl sm:text-4xl leading-[40px] sm:leading-[45px]">Our Projects Rooted in Values<br class="hidden sm:inline"> Driven by Change </h2>
        </div>
        {{-- Tombol diubah ke maroon --}}
        <a href="" class="bg-maroon-primary p-[14px_20px] w-fit rounded-xl font-bold text-white shrink-0 hover:opacity-90 transition-opacity duration-300">Explore More</a>
    </div>

    <div class="flex flex-wrap items-center gap-[30px] justify-center">
        @forelse($principles as $principle)
        {{-- Card hover diubah ke maroon --}}
        <div class="card w-full sm:w-[356.67px] flex flex-col bg-white border border-gray-200 rounded-[20px] gap-[30px] overflow-hidden hover:border-maroon-primary transition-all duration-300">
            <div class="thumbnail h-[200px] flex shrink-0 overflow-hidden">
                <img src="{{Storage::url($principle->thumbnail)}}" class="object-cover object-center w-full h-full" alt="thumbnails">
            </div>
            <div class="flex flex-col p-[0_30px_30px_30px] gap-5">
                <div class="w-[55px] h-[55px] flex shrink-0 overflow-hidden">
                    <img src="{{Storage::url($principle->icon)}}" class="w-full h-full object-contain" alt="icon">
                </div>
                <div class="flex flex-col gap-1">
                    <p class="title font-bold text-xl leading-[30px]">{{$principle->name}}</p>
                    <p class="leading-[30px] text-gray-600">{{$principle->subtitle}}</p>
                </div>
                {{-- Link diubah ke maroon --}}
                <a href="" class="font-semibold text-maroon-primary">Learn More</a>
            </div>
        </div>
        @empty
        <p class="text-center py-5 w-full">Belum ada data terbaru</p>
        @endforelse
    </div>
</div>

{{-- Stats: Latar belakang diubah ke maroon tua --}}
<div id="Stats" class="bg-maroon-dark w-full mt-20">
    <div class="container max-w-[1000px] mx-auto py-10 px-4">
        <div class="flex flex-wrap items-start justify-center md:justify-between p-[10px] gap-y-8">
            @forelse($statistics as $statistic)
            <div class="card w-1/2 md:w-[200px] flex flex-col items-center gap-[10px] text-center">
                <div class="w-[55px] h-[55px] flex shrink-0 overflow-hidden">
                    {{-- Asumsi ikon ini terlihat bagus di bg gelap. Jika tidak, Anda mungkin perlu ikon versi putih. --}}
                    <img src="{{Storage::url($statistic->icon)}}" class="object-contain w-full h-full" alt="icon">
                </div>
                {{-- Teks stats diubah ke putih agar kontras --}}
                <p class="text-white font-bold text-3xl sm:text-4xl leading-[54px]">{{$statistic->goal}}</p>
                <p class="text-gray-300 text-sm">{{$statistic->name}}</p>
            </div>
            @empty
            <p class="text-center py-5 w-full text-white">Belum ada data terbaru</p>
            @endforelse
        </div>
    </div>
</div>

{{-- Teams: Latar belakang abu-abu muda --}}
<div id="Teams" class="bg-gray-50 w-full py-20 px-[10px] mt-20">
    <div class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] items-center px-4">
        <div class="flex flex-col gap-[14px] items-center">
            {{-- Badge diubah ke maroon --}}
            <p class="badge w-fit bg-maroon-primary text-white p-[8px_16px] rounded-full uppercase font-bold text-sm">OUR POWERFUL TEAM</p>
            <h2 class="font-bold text-3xl sm:text-4xl leading-[40px] sm:leading-[45px] text-center">We Share Same Dreams <br> Change The World</h2>
        </div>
        <div class="teams-card-container grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[20px] sm:gap-[30px] justify-center">
            @forelse ($teams as $team)
            {{-- Card hover diubah ke maroon --}}
            <div class="card bg-white flex flex-col h-full justify-center items-center p-[30px] px-[20px] sm:px-[29px] gap-[30px] rounded-[20px] border border-white hover:shadow-[0_10px_30px_0_#D1D4DF80] hover:border-maroon-primary transition-all duration-300">
                {{-- Gradient diubah ke maroon --}}
                <div class="w-[90px] h-[90px] flex shrink-0 items-center justify-center rounded-full bg-[linear-gradient(150.55deg,_#B91C1C_8.72%,_#800000_87.11%)]">
                    <div class="w-[80px] h-[80px] rounded-full overflow-hidden">
                        <img src="{{Storage::url($team->avatar)}}" class="object-cover w-full h-full object-center" alt="photo">
                    </div>
                </div>
                <div class="flex flex-col gap-1 text-center">
                    <p class="font-bold text-base sm:text-xl leading-[25px] sm:leading-[30px]">{{ $team->name }}</p>
                    <p class="text-gray-600 text-sm">{{$team->occupation}}</p>
                </div>
                <div class="flex items-center justify-center gap-[10px]">
                    <div class="w-6 h-6 flex shrink-0">
                        <img src="{{asset('assets/icons/global.svg')}}" alt="icon">
                    </div>
                    {{-- Teks lokasi diubah ke maroon --}}
                    <p class="text-maroon-primary font-semibold text-sm">{{$team->location}}</p>
                </div>
            </div>
            @empty
            <p class="text-center py-5 w-full">Belum ada data terbaru</p>
            @endforelse
            <a href="team.html" class="view-all-card">
                <div class="card bg-white flex flex-col h-full justify-center items-center p-[30px] gap-[30px] rounded-[20px] border border-white hover:shadow-[0_10px_30px_0_#D1D4DF80] hover:border-maroon-primary transition-all duration-300">
                    <div class="w-[60px] h-[60px] flex shrink-0">
                        <img src="{{asset('assets/icons/profile-2user.svg')}}" alt="icon">
                    </div>
                    <div class="flex flex-col gap-1 text-center">
                        <p class="font-bold text-xl leading-[30px]">View All</p>
                        <p class="text-gray-600">Our Great People</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

{{-- Testimonials: Latar belakang putih --}}
<div id="Testimonials" class="w-full flex flex-col gap-[50px] items-center mt-20">
    <div class="flex flex-col gap-[14px] items-center px-4">
        {{-- Badge diubah ke maroon muda --}}
        <p class="badge w-fit bg-maroon-light text-maroon-dark p-[8px_16px] rounded-full uppercase font-bold text-sm">Voice of Our Members</p>
        <h2 class="font-bold text-3xl sm:text-4xl leading-[40px] sm:leading-[45px] text-center">Inspirasi dan refleksi dari para kader Hima Persis yang terus bergerak dengan<br class="hidden lg:inline">Semangat keilmuan, progresivitas, dan semangat perubahan.</h2>
    </div>
    <div class="main-carousel w-full">
        @forelse($testimonials as $testimonial)
        <div class="carousel-card container max-w-[1130px] w-full flex flex-col lg:flex-row justify-between items-center gap-8 px-4 lg:mx-[calc((100vw-1130px)/2)]">
            <div class="testimonial-container flex flex-col gap-[50px] lg:gap-[112px] w-full lg:w-[565px] order-2 lg:order-1">
                <div class="flex flex-col gap-[30px]">
                    <div class="h-9 overflow-hidden">
                        <img src="{{Storage::url($testimonial->client->logo)}}" class="object-contain" alt="icon">
                    </div>
                    <div class="relative pt-[27px] pl-[30px]">
                        <div class="absolute top-0 left-0">
                            <img src="{{asset('assets/icons/quote.svg')}}" alt="icon">
                        </div>
                        <p class="font-semibold text-xl sm:text-2xl leading-[35px] sm:leading-[46px] relative z-10">{{$testimonial->message}}</p>
                    </div>
                    <div class="flex items-center justify-between pl-[30px]">
                        <div class="flex items-center gap-6">
                            <div class="w-[60px] h-[60px] flex shrink-0 rounded-full overflow-hidden">
                                <img src="{{Storage::url($testimonial->client->avatar)}}" class="w-full h-full object-cover" alt="photo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold">{{$testimonial->client->name}}</p>
                                <p class="text-sm text-gray-600">{{$testimonial->client->occupation}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-indicator flex items-center justify-center gap-2 h-4 shrink-0">
                </div>
            </div>
            <div class="testimonial-thumbnail w-full lg:w-[470px] h-[400px] lg:h-[550px] rounded-[20px] overflow-hidden bg-[#D9D9D9] order-1 lg:order-2">
                <img src="{{Storage::url($testimonial->thumbnail)}}" class="w-full h-full object-cover object-center" alt="thumbnail">
            </div>
        </div>
        @empty
        <p class="text-center py-5 w-full">Belum ada data terbaru</p>
        @endforelse
    </div>
</div>

{{-- Awards: Latar belakang putih --}}
<div id="Awards" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20 px-4">
    <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-5">
        <div class="flex flex-col gap-[14px]">
            {{-- Badge diubah ke maroon muda --}}
            <p class="badge w-fit bg-maroon-light text-maroon-dark p-[8px_16px] rounded-full uppercase font-bold text-sm">OUR AWARDS</p>
            <h2 class="font-bold text-3xl sm:text-4xl leading-[40px] sm:leading-[45px]">We’ve Dedicated Our<br class="hidden sm:inline">Best Team Efforts</h2>
        </div>
        {{-- Tombol diubah ke maroon --}}
        <a href="" class="bg-maroon-primary p-[14px_20px] w-fit rounded-xl font-bold text-white shrink-0 hover:opacity-90 transition-opacity duration-300">Explore More</a>
    </div>
    <div class="awards-card-container grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[20px] sm:gap-[30px] justify-center">
        {{-- Card hover diubah ke maroon --}}
        <div class="card bg-white flex flex-col h-full p-[20px] sm:p-[30px] gap-[20px] sm:gap-[30px] rounded-[20px] border border-gray-200 hover:border-maroon-primary transition-all duration-300">
            <div class="w-[55px] h-[55px] flex shrink-0">
                {{-- Ikon cup perlu diganti ke aset maroon jika ada, jika tidak, kita biarkan --}}
                <img src="{{asset('assets/icons/cup-blue.svg')}}" alt="icon">
                {{-- TODO: Jika Anda punya 'cup-red.svg', ganti src di atas --}}
            </div>
            <hr class="border-gray-200">
            <p class="font-bold text-base sm:text-xl leading-[25px] sm:leading-[30px]">Solid Fundamental Crafter Async</p>
            <hr class="border-gray-200">
            <p class="text-gray-600 text-sm">Bali, 2020</p>
        </div>
        <div class="card bg-white flex flex-col h-full p-[20px] sm:p-[30px] gap-[20px] sm:gap-[30px] rounded-[20px] border border-gray-200 hover:border-maroon-primary transition-all duration-300">
            <div class="w-[55px] h-[55px] flex shrink-0">
                <img src="{{asset('assets/icons/cup-blue.svg')}}" alt="icon">
            </div>
            <hr class="border-gray-200">
            <p class="font-bold text-base sm:text-xl leading-[25px] sm:leading-[30px]">Most Crowded Yet Harmony Place</p>
            <hr class="border-gray-200">
            <p class="text-gray-600 text-sm">Shanghai, 2021</p>
        </div>
        <div class="card bg-white flex flex-col h-full p-[20px] sm:p-[30px] gap-[20px] sm:gap-[30px] rounded-[20px] border border-gray-200 hover:border-maroon-primary transition-all duration-300">
            <div class="w-[55px] h-[55px] flex shrink-0">
                <img src="{{asset('assets/icons/cup-blue.svg')}}" alt="icon">
            </div>
            <hr class="border-gray-200">
            <p class="font-bold text-base sm:text-xl leading-[25px] sm:leading-[30px]">Small Things Made Much Big Impacts</p>
            <hr class="border-gray-200">
            <p class="text-gray-600 text-sm">Zurich, 2022</p>
        </div>
        <div class="card bg-white flex flex-col h-full p-[20px] sm:p-[30px] gap-[20px] sm:gap-[30px] rounded-[20px] border border-gray-200 hover:border-maroon-primary transition-all duration-300">
            <div class="w-[55px] h-[55px] flex shrink-0">
                <img src="{{asset('assets/icons/cup-blue.svg')}}" alt="icon">
            </div>
            <hr class="border-gray-200">
            <p class="font-bold text-base sm:text-xl leading-[25px] sm:leading-[30px]">Teamwork and Solidarity</p>
            <hr class="border-gray-200">
            <p class="text-gray-600 text-sm">Bandung, 2023</p>
        </div>
    </div>
</div>

{{-- FAQ: Latar belakang abu-abu muda --}}

<div id="FAQ" class="bg-gray-50 w-full py-20 px-[10px] mt-20 mb-0">
    <div class="container max-w-[1000px] mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-[50px] sm:gap-[70px] items-start lg:items-center">
            <div class="flex flex-col gap-[30px] w-full lg:w-auto shrink-0">
                <div class="flex flex-col gap-[10px]">
                    <h2 class="font-bold text-3xl sm:text-4xl leading-[40px] sm:leading-[45px]">Frequently Asked Questions</h2>
                </div>
                {{-- Tombol diubah ke maroon --}}
                <a href="contact.html" class="p-5 bg-maroon-primary rounded-xl text-white w-fit font-bold hover:opacity-90 transition-opacity duration-300">Contact Us</a>
            </div>
            <div class="flex flex-col gap-[30px] w-full sm:w-[603px] shrink-0">
                
                <div class="flex flex-col p-5 rounded-2xl bg-white w-full">
                    <button class="accordion-button flex justify-between gap-1 items-center" data-accordion="accordion-faq-1">
                        <span class="font-bold text-base sm:text-lg leading-[24px] sm:leading-[27px] text-left">Apa itu HIMA PERSIS?</span>
                        <div class="arrow w-9 h-9 flex shrink-0">
                            <img src="{{asset('assets/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
                        </div>
                    </button>
                    <div id="accordion-faq-1" class="accordion-content hide">
                        <p class="leading-[30px] text-gray-600 pt-[14px]">HIMA PERSIS (Himpunan Mahasiswa Persatuan Islam) adalah organisasi mahasiswa yang berlandaskan nilai-nilai Islam dan bertujuan untuk membentuk mahasiswa yang berilmu, berakhlak, serta berperan aktif dalam dakwah dan pembangunan masyarakat kampus.</p>
                    </div>
                </div>

                <div class="flex flex-col p-5 rounded-2xl bg-white w-full">
                    <button class="accordion-button flex justify-between gap-1 items-center" data-accordion="accordion-faq-2">
                        <span class="font-bold text-base sm:text-lg leading-[24px] sm:leading-[27px] text-left">Siapa saja yang bisa bergabung dengan HIMA PERSIS?</span>
                        <div class="arrow w-9 h-9 flex shrink-0">
                            <img src="{{asset('assets/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
                        </div>
                    </button>
                    <div id="accordion-faq-2" class="accordion-content hide">
                        <p class="leading-[30px] text-gray-600 pt-[14px]">Semua mahasiswa yang memiliki semangat belajar, berdakwah, dan berkontribusi dalam kegiatan keislaman serta kemahasiswaan dapat bergabung, tanpa memandang latar belakang jurusan atau angkatan.</p>
                    </div>
                </div>

                <div class="flex flex-col p-5 rounded-2xl bg-white w-full">
                    <button class="accordion-button flex justify-between gap-1 items-center" data-accordion="accordion-faq-3">
                        <span class="font-bold text-base sm:text-lg leading-[24px] sm:leading-[27px] text-left">Kegiatan apa saja yang dilakukan oleh HIMA PERSIS?</span>
                        <div class="arrow w-9 h-9 flex shrink-0">
                            <img src="{{asset('assets/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
                        </div>
                    </button>
                    <div id="accordion-faq-3" class="accordion-content hide">
                        <p class="leading-[30px] text-gray-600 pt-[14px]">Kegiatan HIMA PERSIS meliputi kajian keislaman, pelatihan kepemimpinan, kegiatan sosial, seminar, serta pengembangan soft skill dan akademik mahasiswa yang sejalan dengan nilai-nilai Islam.</p>
                    </div>
                </div>

                <div class="flex flex-col p-5 rounded-2xl bg-white w-full">
                    <button class="accordion-button flex justify-between gap-1 items-center" data-accordion="accordion-faq-4">
                        <span class="font-bold text-base sm:text-lg leading-[24px] sm:leading-[27px] text-left">Bagaimana cara bergabung dengan HIMA PERSIS?</span>
                        <div class="arrow w-9 h-9 flex shrink-0">
                            <img src="{{asset('assets/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
                        </div>
                    </button>
                    <div id="accordion-faq-4" class="accordion-content hide">
                        <p class="leading-[30px] text-gray-600 pt-[14px]">Calon anggota dapat mendaftar melalui formulir online atau langsung menghubungi pengurus HIMA PERSIS di kampus. Informasi pendaftaran biasanya diumumkan melalui media sosial resmi dan kegiatan orientasi.</p>
                    </div>
                </div>

                <div class="flex flex-col p-5 rounded-2xl bg-white w-full">
                    <button class="accordion-button flex justify-between gap-1 items-center" data-accordion="accordion-faq-5">
                        <span class="font-bold text-base sm:text-lg leading-[24px] sm:leading-[27px] text-left">Apakah HIMA PERSIS terbuka untuk kolaborasi dengan organisasi lain?</span>
                        <div class="arrow w-9 h-9 flex shrink-0">
                            <img src="{{asset('assets/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
                        </div>
                    </button>
                    <div id="accordion-faq-5" class="accordion-content hide">
                        <p class="leading-[30px] text-gray-600 pt-[14px]">Ya, HIMA PERSIS terbuka untuk berkolaborasi dengan berbagai organisasi intra maupun ekstra kampus selama sejalan dengan visi dan nilai-nilai keislaman yang dipegang.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


{{-- Footer: Latar belakang diubah ke maroon tua --}}
<footer class="bg-maroon-dark w-full relative overflow-hidden mt-20">
    <div class="container max-w-[1130px] mx-auto flex flex-col sm:flex-row flex-wrap gap-y-10 sm:gap-y-4 items-start sm:items-center justify-between pt-[50px] sm:pt-[100px] pb-[150px] sm:pb-[220px] relative z-10 px-4">
        <div class="flex flex-col gap-10 w-full sm:w-auto">
            <div class="flex items-center gap-3">
                <div class="flex shrink-0 h-[43px] overflow-hidden">
                    <img src="assets/logo/pd.svg" class="object-contain w-full h-full" alt="logo">
                </div>
                <div class="flex flex-col">
                    <p id="CompanyName" class="font-extrabold text-xl leading-[30px] text-white">Hima Persis Garut</p>
                    <p id="CompanyTagline" class="text-sm text-gray-300">Ilmiah Progresif Revolusioner</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <a href="https://www.youtube.com/@himapersisgarut7731" target="_blank" class="transition-all duration-300 hover:opacity-75">
                    <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                        <img src="assets/icons/youtube.svg" class="w-full h-full object-contain" alt="youtube">
                    </div>
                </a>
                <a href="https://www.instagram.com/himapersis_garut/" target="_blank" class="transition-all duration-300 hover:opacity-75">
                    <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                        <img src="assets/icons/instagram.svg" class="w-full h-full object-contain" alt="instagram">
                    </div>
                </a>
            </div>
        </div>
        <div class="flex flex-wrap justify-between w-full sm:w-auto gap-x-[30px] sm:gap-x-[50px] gap-y-8">
            <div class="flex flex-col w-[45%] sm:w-[200px] gap-3">
                <p class="font-bold text-lg text-white">Products</p>
                <!-- <a href="" class="text-gray-300 text-sm sm:text-base hover:text-white transition-all duration-300">General Contract</a>
                <a href="" class="text-gray-300 text-sm sm:text-base hover:text-white transition-all duration-300">Building Assessment</a>
                <a href="" class="text-gray-300 text-sm sm:text-base hover:text-white transition-all duration-300">3D Paper Builder</a>
                <a href="" class="text-gray-300 text-sm sm:text-base hover:text-white transition-all duration-300">Legal Constructions</a> -->
            </div>
            <div class="flex flex-col w-[45%] sm:w-[200px] gap-3">
                <p class="font-bold text-lg text-white">About</p>
                <!-- <a href="" class="text-gray-300 text-sm sm:text-base hover:text-white transition-all duration-300">We’re Hiring</a>
                <a href="" class="text-gray-300 text-sm sm:text-base hover:text-white transition-all duration-300">Our Big Purposes</a>
                <a href="" class="text-gray-300 text-sm sm:text-base hover:text-white transition-all duration-300">Investor Relations</a> -->
                <a href="" class="text-gray-300 text-sm sm:text-base hover:text-white transition-all duration-300">Media Press</a>
            </div>
            <div class="flex flex-col w-[45%] sm:w-[200px] gap-3">
                <p class="font-bold text-lg text-white">Useful Links</p>
                <!-- <a href="" class="text-gray-300 text-sm sm:text-base hover:text-white transition-all duration-300">Privacy & Policy</a>
                <a href="" class="text-gray-300 text-sm sm:text-base hover:text-white transition-all duration-300">Terms & Conditions</a>
                <a href="contact.html" class="text-gray-300 text-sm sm:text-base hover:text-white transition-all duration-300">Contact Us</a>
                <a href="" class="text-gray-300 text-sm sm:text-base hover:text-white transition-all duration-300">Download Template</a> -->
            </div>
        </div>
    </div>
    <div class="absolute -bottom-[60px] sm:-bottom-[135px] w-full">
        <p class="font-extrabold text-[100px] sm:text-[250px] leading-[150px] sm:leading-[375px] text-center text-white opacity-5">BERINTEGRITAS</p>
    </div>
</footer>
<div id="video-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full lg:w-1/2 max-h-full">
        <div class="relative bg-white rounded-[20px] overflow-hidden shadow">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Company Profile Video
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" onclick="{modal.hide()}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="">
                <iframe id="videoFrame" class="aspect-[16/9]" width="100%" src="" title="Demo Project Laravel Portfolio" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@endsection

@push('after-scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
<script src="{{ asset('js/carousel.js') }}"></script>
<script src="{{ asset('js/accordion.js') }}"></script>
<script src="{{ asset('js/modal-video.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
@endpush