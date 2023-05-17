<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2>Administrator</h2>
            <div class="ml-20 space-x-3 text-blue-500">
                <a href="{{route('show-usr')}}">Daftar User</a>
                <a href="{{route('adm-showArt')}}">Daftar Artikel</a>
            </div>
        </div>
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
{{--<a href="{{route('logout')}}">logout</a>--}}
