@extends('layouts.untuklanding')
@section('content')

    <article class="flex flex-col">
        <h1 class="font-bold text-4xl">{{$isiKonten->judul_artikel}}</h1>
        <h2 class="font-light">Oleh: (Nama Penulis)</h2>
        <h3 class="text-sm">{{$isiKonten->tanggal}}</h3>
{{--        <a class="mt-6 underline text-sm font-serif w-fit" href="#">Sunting</a>--}}

        <div class="max-w-5xl mt-6 mx-auto">
            <section>

        <p>{{$isiKonten->isi_artikel}}</p>
        </section>
        </div>
    </article>

@endsection
