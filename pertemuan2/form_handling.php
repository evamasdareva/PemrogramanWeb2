<!DOCTYPE html>
<html lang="en">
<head>
    <title>Praktikum 2 - Form Handling</title>
</head>
<body>
    <h1>Belajar Form Handling 1</h1>
    <form action="belajar_get.php" method="GET">
        <!-- tipe teks -->
        <label for="">Nama Mahasiswa</label><br>
        <input type="text" name="nama"><br><br>

        <!-- tipe radio -->
        <label for="">Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="laki_laki"> <label>Laki-Laki</label>
        <input type="radio" name="jenis_kelamin" value="perempuan"> <label>Perempuan</label><br><br>

        <!-- tipe checkbox -->
        <label for="hobi">Hobi</label><br>
        <input type="checkbox" name="hobi[]" value="Sepak Bola"><label>Sepak Bola</label><br>
        <input type="checkbox" name="hobi[]" value="Badminton"><label>Badminton</label><br>
        <input type="checkbox" name="hobi[]" value="Balap Lari"><label>Balap lari</label><br><br>

        <!-- tipe number -->
        <label for="umur">Umur</label><br>
        <input type="number" name="umur"><br><br>

        <!-- tipe date / tanggal -->
        <label for="tanggal lahir">Tanggal Lahir</label><br>
        <input type="date" name="tanggal_lahir" id=""><br><br>

        <!-- dropdown select -->
        <label for="prodi">Prodi</label><br>
        <select name="prodi">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Bisnis Digital">Bisnis Digital</option>
        </select><br><br>

        <!-- button -->
        <button type="submit">Simpan!</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>