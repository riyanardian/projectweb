@extends('layout.main')

@section('container')
    <div class="container">
        <h1>Detail Buku Pinjaman</h1>
        <ul class="list-group">
            <li class="list-group-item"><strong>Nama Peminjam:</strong> {{ $book->borrower }}</li>
            <li class="list-group-item"><strong>Jumlah Hari Pinjam:</strong> {{ $book->days_borrowed }}</li>
            <li class="list-group-item"><strong>Judul:</strong> {{ $book->title }}</li>
            <li class="list-group-item"><strong>Penulis:</strong> {{ $book->author }}</li>
            <li class="list-group-item"><strong>Penerbit:</strong> {{ $book->publisher }}</li>
            <li class="list-group-item"><strong>Tahun Terbit:</strong> {{ $book->year }}</li>
        </ul>
        <a href="{{ route('books.index') }}" class="btn btn-primary mt-3">Kembali</a>
    </div>
@endsection
