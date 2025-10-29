<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Articles') }}
            </h2>
            <a href="{{ route('admin.articles.create') }}" class="font-bold py-3 px-5 bg-maroon-primary text-white rounded-full">
                Add New
            </a>
        </div>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">
                
                @forelse($articles as $article)
                <div class="item-card flex flex-row justify-between items-center">
                    <div class="flex flex-row items-center gap-x-3">
                        <img src="{{ Storage::url($article->thumbnail) }}" alt="" class="rounded-2xl object-cover w-[90px] h-[90px]">
                        <div class="flex flex-col">
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $article->title }}</h3>
                            <p class="text-slate-500 text-sm">by {{ $article->author_name }}</p>
                        </div>
                    </div> 
                    <div class="hidden md:flex flex-row items-center gap-x-3">
                        <a href="{{ route('admin.articles.edit', $article) }}" class="font-bold py-3 px-5 bg-indigo-700 text-white rounded-full">
                            Edit
                        </a>
                        <form action="{{ route('admin.articles.destroy', $article) }}" method="POST"> 
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-bold py-3 px-5 bg-red-700 text-white rounded-full" onclick="return confirm('Yakin ingin hapus?')">
                                Delete
                            </button>
                        </form>
                    </div>
                </div> 
                @empty
                <p>Belum ada artikel. Silakan buat baru.</p>
                @endforelse

                {{ $articles->links() }}

            </div>
        </div>
    </div>
</x-app-layout>