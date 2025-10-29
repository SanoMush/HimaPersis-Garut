<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">

                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="py-3 w-full rounded-3xl bg-red-500 text-white mb-4">{{$error}}</div>
                    @endforeach
                @endif
                
                <form method="POST" action="{{ route('admin.articles.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    {{-- Input Nama Penulis --}}
                    <div class="mt-4">
                        <x-input-label for="author_name" :value="__('Nama Penulis (Kader)')" />
                        <x-text-input id="author_name" class="block mt-1 w-full" type="text" name="author_name" :value="old('author_name')" required />
                        <x-input-error :messages="$errors->get('author_name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="thumbnail" :value="__('Thumbnail')" />
                        <x-text-input id="thumbnail" class="block mt-1 w-full" type="file" name="thumbnail" required />
                        <x-input-error :messages="$errors->get('thumbnail')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="content" :value="__('Content')" />
                        {{-- Ganti ini dengan Rich Text Editor jika Anda punya --}}
                        <textarea name="content" id="content" rows="10" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-maroon-primary focus:ring-maroon-primary">{{ old('content') }}</textarea>
                        <x-input-error :messages="$errors->get('content')" class="mt-2" />
                    </div>

                    {{-- Input PDF --}}
                    <div class="mt-4">
                        <x-input-label for="pdf_file" :value="__('Upload PDF Karya (Opsional)')" />
                        <x-text-input id="pdf_file" class="block mt-1 w-full" type="file" name="pdf_file" accept=".pdf" /> 
                        <x-input-error :messages="$errors->get('pdf_file')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="font-bold py-4 px-6 bg-maroon-primary text-white rounded-full">
                            Publish Article
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>