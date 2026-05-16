<?php

include '../config/koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,
"DELETE FROM t_booking WHERE id_booking='$id'");

echo "

<script>

alert('Data berhasil dihapus');

window.location='index.php';

</script>

";

?>s