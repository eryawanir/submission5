@include('layout.header', ['title' => 'Edit Data Buku'])

<div class="container pt-4 ">
 <div class="row">
  <div class="col-md-8 col-xl-6 border bg-dark-subtle ">
   <h1>Edit Buku</h1>
   <hr>

   <form action="{{ route('books.update', ['book' => $book->id]) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-3">
     <label for="title" class="form-label">Judul Buku</label>
     <input type="text" id="title" name="title" value="{{ old('title') ?? $book->title }}"
      class="form-control @error('title') is-invalid @enderror">
     @error('title')
      <div class="text-danger">{{ $message }}</div>
     @enderror
    </div>
    <div class="mb-3">
     <label for="author" class="form-label">Pengarang</label>
     <input type="text" id="author" name="author" value="{{ old('author') ?? $book->author }}"
      class="form-control @error('author') is-invalid @enderror">
     @error('author')
      <div class="text-danger">{{ $message }}</div>
     @enderror
    </div>
    <div class="mb-3">
     <label for="publisher" class="form-label">Penerbit</label>
     <input type="text" id="publisher" name="publisher" value="{{ old('publisher') ?? $book->publisher }}"
      class="form-control @error('publisher') is-invalid @enderror">
     @error('publisher')
      <div class="text-danger">{{ $message }}</div>
     @enderror
    </div>
    <div class="mb-3">
     <label for="published_at" class="form-label">Tanggal Terbit</label>
     <input type="date" id="published_at" name="published_at"
      value="{{ old('published_at') ?? $book->published_at }}"
      class="form-control @error('published_at') is-invalid @enderror">
     @error('published_at')
      <div class="text-danger">{{ $message }}</div>
     @enderror
    </div>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Submit</button>
   </form>
  </div>
 </div>
</div>

@include('layout.footer')
