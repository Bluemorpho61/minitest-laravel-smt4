@extends('layouts.untuklanding')

@section('content')
    <div class="flex-col justify-start justify-self-start max-w-3xl">
        @foreach($konten as $kontenn)

            <a class="w-fit h-fit font-bold text-4xl" href="{{route('showArt')}}">{{$kontenn->judul}}</a>
            <h2 class="font-light">{{$kontenn->tanggal}}</h2>
            <h3 class="text-teal-800">Oleh: {{$kontenn->pengarang}}</h3>
            <p class="font-serif max-h-44 overflow-hidden">{{$kontenn->isi}}</p>
    </div>
    @endforeach
    <a class="w-fit h-fit font-bold text-4xl" href="{{route('showArt')}}">Article</a>
    <h2 class="font-light">15/05/2023</h2>
    <h3 class="text-teal-800">Oleh: Penulis</h3>
    <p class="font-serif max-h-44 overflow-hidden">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
        adipisci atque corporis cumque cupiditate dicta
        distinctio ducimus earum eligendi fuga inventore ipsam neque nihil, perspiciatis quod recusandae rem rerum
        sit unde voluptas? A adipisci amet aspernatur aut autem dolore doloribus eligendi error esse et expedita
        ipsa iste iusto magnam maiores mollitia nemo nobis non obcaecati odit perferendis quos ratione repellat
        similique sint sunt tempore temporibus tenetur ullam ut, veritatis vero voluptas voluptatem! In, qui, rem.
        Aliquam amet commodi consequatur dolores, doloribus est exercitationem in itaque magnam magni nesciunt nihil
        non obcaecati officia perferendis perspiciatis placeat qui quia ratione recusandae rem sed similique tempore
        temporibus unde? Ab aperiam architecto assumenda atque autem culpa deserunt dolore dolorem doloribus, eaque
        enim esse ex fugit id laborum modi molestiae molestias nisi nulla obcaecati quaerat quis repellendus
        similique suscipit voluptate voluptatem voluptatibus. Adipisci, autem commodi cupiditate dolor dolorum eaque
        enim eveniet facilis, incidunt minus mollitia nemo nesciunt nobis placeat quidem quis ratione similique
        veniam veritatis voluptate? Ab accusamus alias amet architecto blanditiis deserunt dicta dignissimos impedit
        iusto labore maiores molestias officia saepe similique temporibus, vel, voluptas, voluptate! Aliquid
        aspernatur atque doloribus eum explicabo ipsum iure laboriosam libero magni nihil nostrum rerum, vel vitae.
        Aliquid aspernatur atque, autem beatae commodi consequatur, cum cupiditate doloremque eveniet fuga fugit
        impedit ipsa laudantium libero maiores maxime minus molestiae, odio officia perferendis quia quis reiciendis
        reprehenderit saepe sapiente totam veritatis vero. Cumque maiores natus odit quae rem voluptates. Aliquid
        architecto aut autem beatae consectetur cum delectus distinctio doloremque eligendi eum in incidunt, ipsa
        laudantium maxime mollitia nam nihil non nostrum nulla numquam odit possimus quas quis quo reiciendis
        reprehenderit repudiandae rerum sunt tempora ullam unde ut voluptatem voluptates. Atque ex molestias quaerat
        unde voluptates. Assumenda consequatur dicta dolor dolorem, eius, error iusto libero nam quasi quis quos
        tempora veritatis voluptatibus!</p>
    </div>
    <div class="flex-col justify-start justify-self-start max-w-3xl">
        <a class="w-fit h-fit font-bold text-4xl" href="#">Article</a>
        <h2 class="font-light">15/05/2023</h2>
        <h3 class="text-teal-800">Oleh: Penulis</h3>
        <p class="font-serif max-h-44 overflow-hidden">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
            adipisci atque corporis cumque cupiditate dicta
            distinctio ducimus earum eligendi fuga inventore ipsam neque nihil, perspiciatis quod recusandae rem rerum
            sit unde voluptas? A adipisci amet aspernatur aut autem dolore doloribus eligendi error esse et expedita
            ipsa iste iusto magnam maiores mollitia nemo nobis non obcaecati odit perferendis quos ratione repellat
            similique sint sunt tempore temporibus tenetur ullam ut, veritatis vero voluptas voluptatem! In, qui, rem.
            Aliquam amet commodi consequatur dolores, doloribus est exercitationem in itaque magnam magni nesciunt nihil
            non obcaecati officia perferendis perspiciatis placeat qui quia ratione recusandae rem sed similique tempore
            temporibus unde? Ab aperiam architecto assumenda atque autem culpa deserunt dolore dolorem doloribus, eaque
            enim esse ex fugit id laborum modi molestiae molestias nisi nulla obcaecati quaerat quis repellendus
            similique suscipit voluptate voluptatem voluptatibus. Adipisci, autem commodi cupiditate dolor dolorum eaque
            enim eveniet facilis, incidunt minus mollitia nemo nesciunt nobis placeat quidem quis ratione similique
            veniam veritatis voluptate? Ab accusamus alias amet architecto blanditiis deserunt dicta dignissimos impedit
            iusto labore maiores molestias officia saepe similique temporibus, vel, voluptas, voluptate! Aliquid
            aspernatur atque doloribus eum explicabo ipsum iure laboriosam libero magni nihil nostrum rerum, vel vitae.
            Aliquid aspernatur atque, autem beatae commodi consequatur, cum cupiditate doloremque eveniet fuga fugit
            impedit ipsa laudantium libero maiores maxime minus molestiae, odio officia perferendis quia quis reiciendis
            reprehenderit saepe sapiente totam veritatis vero. Cumque maiores natus odit quae rem voluptates. Aliquid
            architecto aut autem beatae consectetur cum delectus distinctio doloremque eligendi eum in incidunt, ipsa
            laudantium maxime mollitia nam nihil non nostrum nulla numquam odit possimus quas quis quo reiciendis
            reprehenderit repudiandae rerum sunt tempora ullam unde ut voluptatem voluptates. Atque ex molestias quaerat
            unde voluptates. Assumenda consequatur dicta dolor dolorem, eius, error iusto libero nam quasi quis quos
            tempora veritatis voluptatibus!</p>
    </div>

@endsection


