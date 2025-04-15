<nav class="flex flex-wrap items-center justify-between bg-white p-[20px_30px] rounded-[20px] gap-y-3">
            <div class="flex items-center gap-3">
                <div class="flex shrink-0 h-[43px] overflow-hidden">
                    <img src="{{asset('assets/logo/pd.svg')}}" class="object-contain w-full h-full" alt="logo">
                </div>
                <div class="flex flex-col">
                  <p id="CompanyName" class="font-extrabold text-xl leading-[30px]">Hima Persis Garut</p>
                  <p id="CompanyTagline" class="text-sm text-cp-light-grey">Ilmiah,Progresif,Revolusioner</p>
                </div>
            </div>
            <ul class="flex flex-wrap items-center gap-[30px]">
              <li class="font-semibold hover:text-cp-dark-blue transition-all duration-300">
                <a href="{{route('front.index')}}">Home</a>
              </li>
              <li class="font-semibold hover:text-cp-dark-blue transition-all duration-300">
                <a href="">Products</a>
              </li>
              <li class="font-semibold hover:text-cp-dark-blue transition-all duration-300">
                <a href="{{route('front.team')}}">Organization</a>
              </li>
              <li class="font-semibold hover:text-cp-dark-blue transition-all duration-300">
                <a href="">Blog</a>
              </li>
              <li class="font-semibold hover:text-cp-dark-blue transition-all duration-300">
                <a href="{{route('front.about')}}">About</a>
              </li>
            </ul>
            <a href="" class="bg-cp-dark-blue p-[14px_20px] w-fit rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">Get a Quote</a>
        </nav>