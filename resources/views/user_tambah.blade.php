<html>
<body>
    <h1>Form Tambah Data User</h1>
    <form method="post" action="/user/tambah_simpan">

        {{@csrf_field()}}

        <label>Username</label>
        <input type="text" name="Username" placeholder="Masukkan Username">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama">
        <br>
        <label>Password</label>
        <input type="text" name="password" placeholder="Masukkan Password">
        <br>
        <label>Level ID</label>
        <input type="text" name="level_id" placeholder="Masukkan ID Level">
        <br><br>
        <input type="submit"class="btn btn_success"values="simpan">

    </form>
</body>
<html>