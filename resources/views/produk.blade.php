<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body>
<a href="{{ url('produk/add') }}"><button>Tambah Data</button></a>
    <table border="1" class="table table-striped mt-2 mx-2 text-center" style="border:none">
        <tr>
            <td>NO</td>
            <td>Foto Produk</td>
            <td>Nama Produk</td>
            <td>Harga Produk</td>
            <td>Aksi</td>
        </tr>
        @foreach ($produk as $key => $item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td><img src="{{ asset("storage/$item->foto")  }}" width="100" height="100"></td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->harga }}</td>
            <td>
                <a href="produk/hapus"><button class="btn-danger">Hapus</button></a>
            </td>
            <td>
                <a href="produk/edit"><button class="btn badge-primary">Edit</button></a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
