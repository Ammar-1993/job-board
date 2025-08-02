@php
    $Current = "bg-gray-900 text-white";
    $Default = "text-gray-300 hover:bg-gray-700 hover:text-white";
@endphp

<a class="rounded-md px-3 py-2 text-sm font-medium {{ $active ? $Current : $Default }}" {{ $attributes }}>
    {{ $slot }}
</a>