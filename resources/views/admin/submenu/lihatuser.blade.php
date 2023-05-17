<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2>Administrator</h2>
            <div class="ml-20 space-x-3 text-blue-500">
                <a href="#" class="text-black">Daftar User</a>
                <a href="{{route('adm-showArt')}}">Daftar Artikel</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="ml-20 text-2xl font-bold">Daftar User</h1>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama User
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tanggal terdaftar
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jumlah Artikel yang dibuat
                                </th>
{{--                                <th scope="col" class="px-6 py-3">--}}
{{--                                    Price--}}
{{--                                </th>--}}
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $data)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$data->nama}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$data->tanggal}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$data->jumlah}}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Lihat Detail</a>
                                    </td>
                                    {{--                                <td class="px-6 py-4">--}}
                                    {{--                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>--}}
                                    {{--                                </td>--}}
                                </tr>
                            @endforeach

{{--                            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">--}}
{{--                                <th scope="row"--}}
{{--                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">--}}
{{--                                    Microsoft Surface Pro--}}
{{--                                </th>--}}
{{--                                <td class="px-6 py-4">--}}
{{--                                    White--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4">--}}
{{--                                    Laptop PC--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4">--}}
{{--                                    $1999--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4">--}}
{{--                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>--}}
{{--                                </td>--}}

{{--                            </tr>--}}

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>

