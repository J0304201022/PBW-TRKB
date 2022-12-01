<?php include 'header.php'; ?>

<h1 class="mt-3 mb-3">Form Pegawai</h1>
<form action="saveJabatan.php" method="POST">
    <div class="mb-3">
        <label class="form-label">Nama Jabatan</label>
        <input type="text" class="form-control" name="jabatan" placeholder="Nama Jabatan" required>
    </div>

    <div class="mb-3">
        <input type="submit" value="Simpan" class="btn btn-sm btn-success">
    </div>
</form>

<?php include 'footer.php'; ?>