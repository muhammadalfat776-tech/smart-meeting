<?php
include '../config/koneksi.php';

$data = mysqli_query($koneksi,"
SELECT * FROM t_booking
JOIN m_ruangan
ON t_booking.id_ruangan = m_ruangan.id_ruangan
JOIN m_karyawan
ON t_booking.id_karyawan = m_karyawan.id_karyawan
");
?>

<!DOCTYPE html>
<html>
<head>

    <title>Data Booking</title>

    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>

<div class="container">

<h1>Data Booking</h1>

<table>

<tr>
    <th>No</th>
    <th>Waktu</th>
    <th>Ruangan</th>
    <th>Karyawan</th>
    <th>Divisi</th>
    <th>Agenda</th>
    <th>Action</th>
</tr>

<?php
$no=1;

while($d=mysqli_fetch_array($data)){
?>

<tr>

    <td><?php echo $no++; ?></td>

    <td>
        <?php echo $d['jam_mulai']; ?>
        -
        <?php echo $d['jam_selesai']; ?>
    </td>

    <td><?php echo $d['nama_ruangan']; ?></td>

    <td><?php echo $d['nama_karyawan']; ?></td>

    <td><?php echo $d['divisi']; ?></td>

    <td><?php echo $d['agenda']; ?></td>

    <td>

        <button class="btn btn-edit">
            Edit
        </button>

        <a href="hapus.php?id=<?php echo $d['id_booking']; ?>">

<button class="btn btn-hapus">
    Hapus
</button>

</a>

    </td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>