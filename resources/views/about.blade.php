@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
@endsection


Post::create([
    'title' => 'judul kedua',
    'slug' => 'judul-kedua',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam, deserunt id suscipit totam illo nobis ',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam, deserunt id suscipit totam illo nobis mollitia iste qui doloribus magnam voluptatibus voluptate necessitatibus libero corporis, accusamus est ipsum alias cum voluptates illum</p><p>Dicta mollitia necessitatibus quae veritatis culpa verosimilique ipsa quaerat sed rerum tempore illo sequi aspernatur, in fugiat doloremque exercitationem aut dolorem vitae ratione! Aperiam voluptatem commodi explicabo id culpa, iure ipsum facilis expedita, cumque dolorum odit quis fuga possimus repellat nemo, illo rem hic assumenda doloribus molestias? Tenetur voluptatem laboriosam possimus vel, doloribus numquam impedit.Facere suscipit magnam ab at et nihil illum voluptatem amet ut voluptates! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, eum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum aut iure et.</p>'
])

Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam, deserunt id suscipit totam illo nobis mollitia iste qui doloribus magnam voluptatibus voluptate necessitatibus libero corporis, accusamus est ipsum alias cum voluptates illum! Dicta mollitia necessitatibus quae veritatis culpa vero
similique ipsa quaerat sed rerum tempore illo sequi aspernatur, in fugiat doloremque exercitationem aut dolorem vitae ratione! Aperiam voluptatem commodi explicabo id culpa, iure ipsum facilis expedita, cumque dolorum odit quis fuga possimus repellat nemo, illo rem hic assumenda doloribus molestias? Tenetur voluptatem
laboriosam possimus vel, doloribus numquam impedit. Facere suscipit magnam ab at et nihil illum voluptatem amet ut voluptates!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, eum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum aut iure et.
