@include('layout.header', ['title' => 'Detail Data Buku'])

<div class="container mt-3">
 <div class="row">
  <div class="col-12 col-md-8 col-lg-6 ">

   <div class="pt-3 d-flex justify-content-between align-items-center">
    <h2>Buku {{ $book->title }}</h2>

   </div>

   <hr>

   @if (session()->has('pesan'))
    <div class="alert alert-success" role="alert">
     {{ session()->get('pesan') }}
    </div>
   @endif

   <ul>
    <li>Judul Buku: {{ $book->title }} </li>
    <li>Pengarang: {{ $book->author }} </li>
    <li>Penerbit: {{ $book->publisher }} </li>
    <li>Tanggal Terbit: {{ $book->published_at }} </li>
   </ul>
   <div class="row">
    <div class="col-6">
     <a href="{{ route('books.index') }}" class="btn btn-secondary">Kembali</a>
     <a href="{{ route('books.edit', ['book' => $book->id]) }}" class="btn btn-primary">Edit</a>
    </div>
   </div>

  </div>
 </div>
</div>

@include('layout.footer')
