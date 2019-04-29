<?php
include "../koneksi.php";
$id=$_GET['id'];
$query= "DELETE FROM tbl_artikel WHERE id_artikel='$id'";
$result = $db -> query($query);
if($result){?>
		<script>window.alert('Data Berhasil Di Hapus');</script>
<?php
}
?> 

<script language = "JavaScript">
document.location = 'kelolahartikel.php'</script>