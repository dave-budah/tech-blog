@props(['textColor', 'bgColor'])
@php
$textColor = match($textColor) {
    'gray' => 'text-gray-800',
    'blue' => 'text-blue-800',
    'green' => 'text-green-800',
    'red' => 'text-red-800',
    'yellow' => 'text-yellow-800',
    default => 'text-gray-700',
};
$bgColor = match($textColor) {
    'gray' => 'bg-gray-100',
    'blue' => 'bg-blue-100',
    'green' => 'text-green-100',
    'red' => 'bg-red-100',
    'yellow' => 'bg-yellow-100',
    default => 'bg-gray-200',
};
 @endphp
<span {{ $attributes }} class="{{ $bgColor }} {{ $textColor }} text-xs font-medium space-x-1 space-y-2 px-3 py-1 rounded-full cursor-pointer">{{ $slot }}</span>
