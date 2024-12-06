@props(['type'])

@php
    switch ($type) {
        case 'info':
            $class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';

            break;

        case 'danger':
            $class = 'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400';

            break;

        case 'success':
            $class = 'text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400';

            break;

        case 'warning':
            $class = 'text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300';

            break;

        case 'dark':
            $class = 'text-gray-800 bg-gray-50 dark:bg-gray-800 dark:text-yellow-300';

            break;

        default:
            $class = 'text-red-600 bg-red-200 dark:bg-red-200 dark:text-red-500 border-4 border-red-600';

            break;
    }
@endphp

<div {{ $attributes->merge(['class' => 'w-1/2 p-4 text-sm rounded-full ' . $class]) }}  role="alert">
    <span class="font-medium">{{ $title ?? 'Info alert' }}</span> {{ $slot }}

</div>