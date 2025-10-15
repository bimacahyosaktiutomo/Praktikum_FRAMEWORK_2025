@props(['src'])

<div class="w-16 text-center ml-auto mr-auto">
    <img class="object-contain rounded-lg px-0.5 pt-0.5" src="{{ $src }}" alt="">
    {{ $slot }}
</div>