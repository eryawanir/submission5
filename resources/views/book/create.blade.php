@include('layout.header', ['title' => 'Pendaftaran Buku'])

<div class="container pt-4 bg-white">
 <div class="row">
  <div class="col-md-8 col-xl-6">
   <h1>Pendaftaran Buku</h1>
   <hr>

   <form action="{{ route('books.store') }}" method="POST">
    @csrf
    <div class="mb-3">
     <label class="form-label" for="title">Judul</label>
     <input type="text" id="title" name="title" value="{{ old('title') }}"
      class="form-control @error('title') is-invalid @enderror">
     @error('title')
      <div class="text-danger">{{ $message }}</div>
     @enderror
    </div>

    <div class="mb-3">
     <label class="form-label" for="author">Pengarang</label>
     <input type="text" id="author" name="author" value="{{ old('author') }}"
      class="form-control @error('author') is-invalid @enderror">
     @error('author')
      <div class="text-danger">{{ $message }}</div>
     @enderror
    </div>

    <div class="mb-3">
     <label class="form-label" for="publisher">Penerbit</label>
     <input type="text" id="publisher" name="publisher" value="{{ old('publisher') }}"
      class="form-control @error('publisher') is-invalid @enderror">
     @error('publisher')
      <div class="text-danger">{{ $message }}</div>
     @enderror
    </div>

    <div class="mb-3">
     <label class="form-label" for="published_at">Penerbit</label>
     <input type="date" id="published_at" name="published_at" value="{{ old('published_at') }}"
      class="form-control @error('published_at') is-invalid @enderror">
     @error('published_at')
      <div class="text-danger">{{ $message }}</div>
     @enderror
    </div>


    <button type="submit" class="btn btn-primary mb-2">Daftar</button>
   </form>

  </div>
 </div>
</div>

@include('layout.footer')
