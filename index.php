<?php

include "konek.php";

$hasil = mysqli_query($mysqli, "SELECT * FROM identitas ORDER BY nim DESC");

if (isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    $tambah = mysqli_query($mysqli, "INSERT INTO identitas(nama,jurusan,Waktos) VALUES('$nama', '$jurusan', NOW())");
}
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>tugas ADBO</title>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Muhammad Zein Nurzaman</span>
            </div>
        </nav>

        <div class="bg-success p-2 text-dark bg-opacity-10">
            <h1 class="p-4 text-center">DAFTAR HADIR</h1>
            <div class="container">
                <form action="" method="post" name="form_absen">
                    <div class="col-md-6 offset-md-3">
                        <div class="mb-3">
                            <label class="form-label">NAMA</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jurusan</label>
                            <input type="text" class="form-control" name="jurusan" placeholder="Masukan Jurusan">
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="reset" class="btn btn-danger" name="Reset">reset</button>
                        <button type="submit" class="btn btn-primary" name="Submit">Hadir</button>
                    </div>
                </form>

                <table class="my-5 table table-striped">
                    <tr class="table-dark">
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Waktos</th>
                    </tr>

                    <?php
                    while ($r = mysqli_fetch_array($hasil)) {
                    ?>

                        <tr class="table-primary">
                            <td><?php echo $r['nama']; ?> </td>
                            <td><?php echo $r['jurusan']; ?> </td>
                            <td><?php echo $r['Waktos']; ?> </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    </body>
    </html>
