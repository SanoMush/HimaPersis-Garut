<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center gap-2">
            <h2 class="font-semibold text-base sm:text-xl text-gray-800 leading-tight">
                {{ __('Manage Principles') }}
            </h2>
            <a href="{{route('admin.principles.create')}}" class="font-bold py-2 px-3 sm:py-4 sm:px-6 bg-indigo-700 text-white rounded-full text-xs sm:text-base whitespace-nowrap">
                Add New
            </a>
        </div>
    </x-slot>
    
    <div class="py-4 sm:py-12">
        <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-3 sm:p-10">
                <div class="space-y-3 sm:space-y-4">
                    @forelse($principles as $principle)
                    <div class="border border-gray-200 rounded-lg p-3 sm:p-4">
                        <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4">
                            
                            <div class="flex items-center gap-3 flex-1 min-w-0">
                                <img src="{{Storage::url($principle->thumbnail)}}" alt="" class="rounded-lg object-cover w-14 h-14 sm:w-20 sm:h-20 flex-shrink-0">
                                
                                <div class="min-w-0 flex-1">
                                    <h3 class="text-indigo-950 text-sm sm:text-lg font-bold line-clamp-2">{{$principle->name}}</h3>
                                    <p class="text-slate-500 text-xs sm:text-sm mt-0.5 sm:mt-1">
                                        {{$principle->created_at->format('d M Y')}}
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex gap-2 w-full sm:w-auto sm:flex-shrink-0">
                                <a href="{{route('admin.principles.edit', $principle)}}" class="flex-1 sm:flex-none text-center font-semibold py-2 px-4 sm:px-5 bg-indigo-700 text-white rounded-full text-xs sm:text-sm">
                                    Edit
                                </a>
                                <form action="{{route('admin.principles.destroy', $principle)}}" method="POST" class="flex-1 sm:flex-none"> 
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-full font-semibold py-2 px-4 sm:px-5 bg-red-700 text-white rounded-full text-xs sm:text-sm">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div> 
                    @empty
                    <div class="text-center text-gray-500 py-8">
                        <p class="text-sm">Belum ada data terbaru!!</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>