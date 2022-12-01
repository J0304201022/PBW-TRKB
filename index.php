<?php include 'header.php'; ?>

        <h1 class="mt-3 mb-3">Pegawai</h1>
        <a href="formPegawai.php" class="btn btn-sm btn-info mb-3">Tambah</a>
        <table class="table">
            <thead class="table-info">
                <tr>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Jabatan</th>
                </tr>
            </thead>
            <tbody>

            <?php 
                $sql = 'SELECT * FROM pegawai JOIN jabatan ON jabatan.id_jabatan = pegawai.id_jabatan';

                $query = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_object($query)) {
            ?> 

                <tr>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->jenis_kelamin; ?></td>
                    <td><?php echo $row->tanggal_lahir; ?></td>
                    <td><?php echo $row->alamat; ?></td>
                    <td><?php echo $row->jabatan; ?></td>
                    <td>
                        <a href="formPegawai.php?id_pegawai=<?php echo $row->id_pegawai; ?>" class="btn btn-sm btn-warning" onclick="">Edit</a>
                        <a href="deletePegawai.php?id_pegawai=<?php echo $row->id_pegawai; ?>" class="btn btn-sm btn-danger"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data?');">Hapus</a>
                    </td>
                </tr>

            <?php
                } if (mysqli_num_rows($query) == 0) {
                    echo '<tr><td colspan="5" class="text-center" >Tidak ada data.</td></tr>';
                }
            ?>

            </tbody>
        </table>

<?php include 'footer.php'; ?>