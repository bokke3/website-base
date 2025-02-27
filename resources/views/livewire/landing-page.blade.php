<div>
    {{-- The whole world belongs to you. --}}
</div>
<div class="relative h-screen overflow-hidden">
    <div class="absolute inset-0 flex items-center justify-center text-white">
        <h1 class="text-4xl font-bold">Welcome to My Site</h1>
    </div>

    <div class="absolute inset-0">
        <div class="flex w-full h-full animate-scroll">
            @foreach ($images as $image)
                <img src="{{ $image->url }}" class="w-full h-full object-cover">
            @endforeach
        </div>
    </div>
</div>

<style>
@keyframes scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-100%); }
}
.animate-scroll {
    display: flex;
    animation: scroll 10s linear infinite;
}
</style>
