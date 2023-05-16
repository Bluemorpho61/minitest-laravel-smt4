<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h2>Penulis</h2>
            <div class="ml-20 space-x-3 text-blue-500">
                <a href="{{route('tulis-art')}}">Tulis Artikel Baru</a>
                <a href="{{route('man-art')}}">Kelola Artikel</a>
            </div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
