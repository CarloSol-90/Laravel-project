<div {{ $attributes->merge(['class' => 'w-1/2 p-4 text-sm rounded-full ' . $class]) }}  role="alert">
    <span class="font-medium">{{ $title ?? 'Info alert' }}</span> {{ $slot }}

</div>