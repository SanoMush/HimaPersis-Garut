<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Testimonial') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">

                {{-- Error Handling --}}
                @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="py-3 mb-3 px-4 w-full rounded-xl bg-red-500 text-white">
                    {{ $error }}
                </div>
                @endforeach
                @endif

                <form method="POST" action="{{ route('admin.testimonials.update', $testimonial) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- Select Client --}}
                    <div class="mt-4">
                        <x-input-label for="project_client_id" :value="__('Project Client')" />
                        <select name="project_client_id" id="project_client_id" class="py-3 rounded-lg pl-3 w-full border border-slate-300">
                            @foreach ($clients as $client)
                            <option value="{{ $client->id }}" {{ $testimonial->client->id == $client->id ? 'selected' : '' }}>
                                {{ $client->name }}
                            </option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('project_client_id')" class="mt-2" />
                    </div>

                    {{-- Message Textarea --}}
                    <div class="mt-4">
                        <x-input-label for="message" :value="__('Message')" />
                        <textarea name="message" id="message" cols="30" rows="5" class="border border-slate-300 rounded-xl w-full">{{ old('message', $testimonial->message) }}</textarea>
                        <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    </div>


                    {{-- Thumbnail Upload --}}
                    <div class="mt-4">
                        <x-input-label for="thumbnail" :value="__('Thumbnail')" />
                        @if ($testimonial->thumbnail)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $testimonial->thumbnail) }}" alt="Current Thumbnail" class="rounded-2xl object-cover w-[90px] h-[90px]">
                        </div>
                        @endif
                        <x-text-input id="thumbnail" class="block mt-1 w-full" type="file" name="thumbnail" autocomplete="thumbnail" />
                        <x-input-error :messages="$errors->get('thumbnail')" class="mt-2" />
                    </div>

                    {{-- Submit --}}
                    <div class="flex items-center justify-end mt-6">
                        <button type="submit" class="font-bold py-3 px-6 bg-indigo-700 text-white rounded-full hover:bg-indigo-800 transition">
                            Update Testimonial
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>