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
    <table class="table table-danger table-sm table-hover table-striped table-bordered text-center">
        <thead>
            <tr>
                <th>NPM</th>
                <th>Nama Mahasiswa</th>
                <th>Jenis Kelamin</th>
                <th colspan="2">TTL</th>
            </tr>
        </thead>
        <tbody>
            <?php $nilai_awal = 0; ?>
            @while ($nilai_awal < $jumlah)
            <tr>
                <td>{{$npm[$nilai_awal]}}</td>
                <td>{{$nama[$nilai_awal]}}</td>
                <td>Perempuan</td>
                <td>20 Januari 2006</td>
                <td>Binjai</td>
            </tr>
            <?php $nilai_awal++ ?>
                
            @endwhile
        </tbody>
    </table>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>