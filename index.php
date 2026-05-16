<?php
include 'config/koneksi.php';

$total_ruangan = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM m_ruangan"));
$total_booking = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM t_booking"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Smart Meeting</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">
    <h1>Dashboard Smart Meeting</h1>

    <div class="card-container">

        <div class="card">
            <h2><?php echo $total_ruangan; ?></h2>
            <p>Total Ruangan</p>
        </div>

        <div class="card">
            <h2><?php echo $total_booking; ?></h2>
            <p>Total Booking</p>
        </div>

    </div>
</div>

</body>
</html>