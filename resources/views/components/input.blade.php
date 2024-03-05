@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'px-2 py-2 text-xs bg-transparent border rounded-md outline-none border-stroke text-gray-800 focus:border-indigo-500 focus-visible:shadow-none']) !!}>
