@props(['active' => false])

<a {{ $attributes->merge(['class' => $active ? 'bg-gray-900 px-3 py-2 text-sm font-medium text-white rounded' : 'text-gray-300 px-3 py-2 rounded hover:bg-gray-700 hover:text-white']) }} aria-current="{{ $active ? 'page' : 'false' }}">
    {{ $slot }}
</a>
