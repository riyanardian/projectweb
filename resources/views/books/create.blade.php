@extends('layout.main')

@section('container')
    <center><h1>Tambah Buku Pinjaman</h1></center>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="borrower">Nama Peminjam</label>
            <input type="text" class="form-control" id="borrower" name="borrower" required>
        </div>
        <div class="form-group">
            <label for="days_borrowed">Jumlah Hari Pinjam</label>
            <input type="number" class="form-control" id="days_borrowed" name="days_borrowed" required>
        </div>
        <div class="form-group">
            <label for="title">Judul Buku</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="author">Penulis</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>
        <div class="form-group">
            <label for="publisher">Penerbit</label>
            <input type="text" class="form-control" id="publisher" name="publisher" required>
        </div>
        <div class="form-group">
            <label for="year">Tahun</label>
            <input type="number" class="form-control" id="year" name="year" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
