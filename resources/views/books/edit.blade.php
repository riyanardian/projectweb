@extends('layout.main')

@section('container')
    <center><h1>Edit Pinjaman Buku</h1></center>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="borrower">Nama Peminjam</label>
            <input type="text" class="form-control" id="borrower" name="borrower" value="{{ $book->borrower }}" required>
        </div>
        <div class="form-group">
            <label for="days_borrowed">Jumlah Hari Pinjam</label>
            <input type="number" class="form-control" id="days_borrowed" name="days_borrowed" value="{{ $book->days_borrowed }}" required>
        </div>
        <div class="form-group">
            <label for="title">Judul Buku</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}" required>
        </div>
        <div class="form-group">
            <label for="author">Penulis</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}" required>
        </div>
        <div class="form-group">
            <label for="publisher">Penerbit</label>
            <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $book->publisher }}" required>
        </div>
        <div class="form-group">
            <label for="year">Tahun</label>
            <input type="number" class="form-control" id="year" name="year" value="{{ $book->year }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
