<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h2>Penulis</h2>
            <div class="ml-20 space-x-3 text-blue-500">
                <a href="{{route('tulis-art')}}">Tulis Artikel Baru</a>
                <a href="#">Kelola Artikel</a>
            </div>
        </h2>
    </x-slot>


    <script>
        function deleteWarning(event) {
            event.preventDefault();
            if (confirm('Apakah anda yakin untuk menghapus data ini?')) {
                document.getElementById('hapusArtikel').submit
            }
        }
    </script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 ">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Judul Artikel
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Pertama Kali Diunggah
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tanggal Disunting
                                </th>
                                <th scope="col" class="px-4 py-3">
                                    Aksi
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($articles as $artikel)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$artikel->judul_artikel}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$artikel->tanggal}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$artikel->updated_at}}
                                    </td>
                                    <td class="px-4 space-x-3 py-4">
                                        <a href="/kelola-artikel/edit-artikel/{{$artikel->id}}"
                                           class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="/kelola-artikel/hapus-artikel/{{$artikel->id}}"
                                           class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>

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
