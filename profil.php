<style>
    .tabel{
        font-family: sans-serif;
        color: #000000;
        border-collapse: collapse;
        border: 0px solid #f2f5f7;
    }
    .table tr td{
        background: #35A9DB;
        color: #fff;
        font-weight: normal;
    }
    .table, tr, td {
        padding: 8px 20px;
    }
</style>

<?php
    function usia(){
    $tanggal_lahir = new DateTime("2002-06-12");
    $sekarang = new DateTime("today");
    if ($tanggal_lahir > $sekarang) { 
    $thn = "0";
    $bln = "0";
    $tgl = "0";
    }
    $thn = $sekarang->diff($tanggal_lahir)->y;
    $bln = $sekarang->diff($tanggal_lahir)->m;
    $tgl = $sekarang->diff($tanggal_lahir)->d;
    echo "$thn tahun $bln bulan $tgl hari";
    };

    $profil = [
        "nama" => "Mutya Anissa Maulinda",
        "ttl" => "Ngawi, 12 Juni 2002",
        "alamat" => "Ds. Legundi, Kec. Karangjati, Kab. Ngawi",
        "jenis kelamin" => "Perempuan",
        "agama" => "Islam",
        "hobi" => "Dancing",
        "email" => "mtyanss071@gmail.com",
        "prodi" => "Informatika",
        "fakultas" => "Ilmu Komputer",
    ];
    ?>

<html>
    <body>
    <h2><center>Biodata</center><h2>
        <table class="tabel">
        <tr>
            <td><b>Nama : </b> <?php echo $profil["nama"]; ?></td>
        </tr>
        <tr>
            <td><b>TTL : </b> <?php echo $profil["ttl"]; ?></td>
        </tr>
        <tr>
            <td><b>Usia : </b> <?php usia(); ?></td>
        </tr>
        <tr>
            <td><b>Alamat : </b> <?php echo $profil["alamat"]; ?></td>
        </tr>
        <tr>
            <td><b>Jenis kelamin : </b> <?php echo $profil["jenis kelamin"]; ?></td>
        </tr>
        <tr>
            <td><b>Agama : </b> <?php echo $profil["agama"]; ?></td>
        </tr>
        <tr>
            <td><b>Hobi : </b> <?php echo $profil["hobi"]; ?></td>
        </tr>
        <tr>
            <td><b>Email : </b> <?php echo $profil["email"]; ?></td>
        </tr>
        <tr>
            <td><b>Prodi : </b> <?php echo $profil["prodi"]; ?></td>
        </tr>
        <tr>
            <td><b>Fakultas : </b> <?php echo $profil["fakultas"]; ?></td>
        </tr>
        </table>
    </body>
</html>