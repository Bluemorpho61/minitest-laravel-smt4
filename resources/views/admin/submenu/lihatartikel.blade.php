<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2>Administrator</h2>
            <div class="ml-20 space-x-3 text-blue-500">
                <a href="{{route('show-usr')}}">Daftar User</a>
                <a href="{{route('adm-showArt')}}" class="text-black">Daftar Artikel</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="ml-20 text-2xl font-bold">Daftar Artikel</h1>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Judul Artikel
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tanggal Dibuat
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Penulis
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($articles as $artikel)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$artikel->judul}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$artikel->tanggal}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$artikel->penulis}}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{route('isi-art')}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Lihat Isi</a>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
