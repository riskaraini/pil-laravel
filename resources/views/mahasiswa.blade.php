<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>Ini adalah Halaman Mahasiswa</h1>
<div class="row">
    <div class="col-sm-6">
        <h4>Tabel Mahasiswa</h4>
         <table class="table table-danger table-sm table-hover table-striped table-bordered text-center">
        <thead>
            <tr>
                <th>NPM</th>
                <th>Nama Mahasiswa</th>
                <th>Jenis Kelamin</th>
                <th colspan="2">TmTL</th>
            </tr>
        </thead>
        <tbody>
           @for ($i = 0; $i < $jumlah; $i++)
           <tr>
            <td>{{  $npm[$i] }}</td>
            <td>{{  $nama[$i] }}</td>
            <td>Perempuan</td>
            <td>Binjai</td>
           </tr>
               
           @endfor
        </tbody>
    </table>
    </div>
    <div class="col-sm-6">
        <h4>Form Mahasiswa</h4>
        <form action="" method="GET">
        <div class="row">
            <div class="col-sm-6">
                <div class="label">NPM</div>
                <input type="number" name="npm" class="form-control" placeholder="Input NPM">
            </div>
            <div class="col-sm-6">
            <div class="label">Nama Mahasiswa</div>
            <input type="text" name="nama_mahasiswa"  class="form-control" placeholder="Input Nama Mahasiswa">
        </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="label">Tanggal Lahir</div>
                <input type="date" name="tgl_lahir" class="form-control">
            </div>
            <div class="col-sm-6">
                <label for="">Prodi</label>
                <select name="prodi" class="form-control">
                    <option value="">Sistem Informasi</option>
                    <option value="">Teknik Informatika</option>
                    <option value="">Data Sains</option>
                </select>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-12">
            <div class="form-group">
                 <button class="btn btn-primary" style="width: 100%" type="submit">Simpan</button>
            </div>
            </div>
        </div>
</form>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>