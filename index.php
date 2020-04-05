<?php
include 'aset/header.php';
include 'koneksi.php';

$sql = "SELECT * FROM siswa";

$res = mysqli_query($koneksi, $sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)) {
  $pinjam[] = $data;
}

?>
<style>
thead{
  background-color: #222831;
  color: white;
}
tbody{
  background-color: #414854;
  color: white;
}
</style>
<div class="container">
  <div class="row mt-4">
    <div class="col-md">
      <div class="card bg-dark">
        <div class="card-header">
          <h2 class="card-title text-white"><i class="fas fa-edit"></i>Tabel Nilai Siswa</h2>
        </div>
        <div class="card-body">
          <table class="table table-striped col-12">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Kelas</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nilai Web</th>
                <th scope="col">Nilai PBO</th>
                <th scope="col">Nilai Basdat</th>
                <th scope="col">Nilai Desain</th>
                <th scope="col">Nilai ProgDas</th>
                <th scope="col">Nilai Rata-rata</th>
                <th scope="col">Predikat Nilai</th>
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($pinjam as $p ) { ?>
                <tr>
                  <th scope="row"><?= $no ?></th>
                    <td><?= $p['NIS'] ?></th>
                    <td><?= $p['Nama'] ?></td>
                    <td><?= $p['Jurusan'] ?></td>
                    <td><?= $p['Kelas'] ?></td>
                    <td><?= $p['Alamat'] ?></td>
                    <td><?= $p['Nilai_Web'] ?></td>
                    <td><?= $p['Nilai_PBO'] ?></td>
                    <td><?= $p['Nilai_Basdat'] ?></td>
                    <td><?= $p['Nilai_Desain'] ?></td>
                    <td><?= $p['Nilai_Progdas'] ?></td>
                    <td><?= $p['Rata_rata'] ?></td>
                    <td><?= $p['Predikat_Nilai'] ?></td>
                    <td><?= $p['Keterangan'] ?></td>
                  </tr>
                  <?php
                  $no++;
                }
                ?>
              </tbody>
            </table>
            <a href="tambah.php"><button type="submit" class="btn btn-success" >Isi Data</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php
  include 'aset/footer.php';
  ?>
