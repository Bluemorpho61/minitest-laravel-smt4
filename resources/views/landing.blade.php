@extends('layouts.untuklanding')

@section('content')
    <div class="flex-col justify-start justify-self-start max-w-3xl">
        @foreach($konten as $kontenn)

            <div class="flex-col justify-start justify-self-start max-w-3xl"><a class="w-fit h-fit font-bold text-4xl" href="/isi-artikel/{{$kontenn->id}}">{{$kontenn->judul}}</a>
                <h2 class="font-light">{{$kontenn->tanggal}}</h2>
                <h3 class="text-teal-800">Oleh: {{$kontenn->pengarang}}</h3>
                <p class="font-serif max-h-44 overflow-hidden">{{$kontenn->isi}}</p></div>
    </div>
    @endforeach



@endsection


