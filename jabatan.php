<?php include 'header.php'; ?>

<h1>Jabatan</h1>
<a href="formJabatan.php" class="btn btn-sm btn-info mb-3">Tambah</a>
<table class="table mt-2">
  <thead class="table table-striped">
    <tr>
      <th>ID Jabatan</th>
      <th>Nama Jabatan</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = 'SELECT * FROM jabatan';
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_object($query)) {
    ?>
      <tr>
        <td><?php echo $row->id_jabatan; ?> </td>
        <td><?php echo $row->jabatan; ?> </td>
        <td>
            <a href="formJabatan.php?id_jabatan=<?php echo $row->id_jabatan; ?>" class="btn btn-sm btn-warning" onclick="">Edit</a>
            <a href="deleteJabatan.php?id_jabatan=<?php echo $row->id_jabatan; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data?');">Hapus</a>
        </td>
      </tr>
    <?php
    }
    if (mysqli_num_rows($query) == 0) {
      echo '<tr><td coslpan="5" class="text-center">tidak ada data.</td></tr>';
    }
    ?>



  </tbody>
</table>

<?php include 'footer.php'; ?>