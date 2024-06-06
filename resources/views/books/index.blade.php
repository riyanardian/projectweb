@extends('layout.main')

@section('container')
<div class="container mt-5">
    <h1 class="text-center mb-4">Daftar Peminjam Buku</h1>
    <div class="text-center mb-3">
        <a href="/books/create" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Buku</a>
    </div>
    @if (session('success'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Jumlah Peminjam</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $book->borrower }}</td>
                    <td>{{ $book->days_borrowed }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>{{ $book->year }}</td>
                    <td>
                        <a href="/books/{{ $book->id }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Lihat</a>
                        <a href="/books/{{ $book->id }}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                        <form action="/books/{{ $book->id }}" method="post" style="display: inline;" onsubmit="return hapusData()">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function hapusData() {
        return confirm('Yakin hapus data?');
    }
</script>
@endsection
