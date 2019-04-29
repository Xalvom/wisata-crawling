<?php
   require_once("../koneksi.php");
   $judul = $_POST['judul'];
   $lokasi = $_POST['lokasi'];   
   $kategori = $_POST['kategori'];   
   $textArtikel = $_POST['textArtikel'];   
   $sql = "SELECT * FROM tbl_artikel WHERE judul = '$judul'";
   $query = mysqli_query($db,$sql); //$db->query($sql)
     if(!$judul || !$lokasi || !$textArtikel) {
       echo "<script>alert('Masih ada data yang kosong!');history.go(-1)</script>";
     } else {
       $data = "INSERT INTO tbl_artikel VALUES (NULL, '$judul', '$lokasi', '$kategori', '$textArtikel')";
       $simpan = $db->query($data);
       if($simpan) {
         ?>
		 <script language='javascript'> 
					window.alert('Proses Berhasil'); 
		 </script>
		<?php   } else { ?>
		<script language='javascript'> 
					window.alert('Proses Gagal'); 
		 </script>
      <?php } } ?>
<script language = "JavaScript">
document.location = 'tambahartikel.php'</script>
