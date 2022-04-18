<?php
    
    // Isi kode program agar dapat menampilkan form yang sudah di isi sebelumnya

    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];

        echo "Nama : " . $nama . "<br>";
        echo "Email : " . $email;
    }
    

?>