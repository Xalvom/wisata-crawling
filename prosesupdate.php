<?php
include "../koneksi.php";
$id= $_POST['id'];
$judul= $_POST['judul'];
$lokasi= $_POST['lokasi'];
$kategori= $_POST['kategori'];
$artikel= $_POST['artikel'];

$sql = "UPDATE tbl_artikel SET  judul='$judul', lokasi='$lokasi', kategori='$kategori', artikel='$artikel' WHERE id_artikel='$id'";
$result = $db ->query($sql);
if($result){?>
		<script> window.alert('Proses edit berhasil'); </script>
<?php } ?>

<script language = "JavaScript">
document.location = 'kelolahartikel.php'</script>