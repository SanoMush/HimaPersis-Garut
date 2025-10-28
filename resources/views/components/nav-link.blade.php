@props(['active'])

@php
$classes = ($active ?? false)
            // INI BAGIAN YANG DIUBAH:
            // Kita ganti 'border-indigo-400' menjadi 'border-maroon-primary'
            // Kita ganti 'text-gray-900' menjadi 'text-maroon-primary'
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-maroon-primary text-sm font-medium leading-5 text-maroon-primary focus:outline-none focus:border-maroon-dark transition duration-150 ease-in-out'
            
            // Bagian 'tidak aktif' sudah bagus, kita biarkan
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>