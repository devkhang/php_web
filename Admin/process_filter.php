<?php
include 'include/db.inc.php';

$filterType = $_POST['filterType'];

switch ($filterType) {
    case 'date':
        $startDate = $_POST['start'];
        $endDate = $_POST['end'];
        $sql = "SELECT * FROM hoadon WHERE ThoiGianDat BETWEEN '$startDate' AND '$endDate'";
        break;
    case 'address':
        $address = $_POST['address'];
        $sql = "SELECT * FROM hoadon WHERE diachi LIKE '%$address%'";
        break;
    case 'status':
        $status = $_POST['status'];
        $sql = "SELECT * FROM hoadon WHERE TrangThaiXuLy = '$status'";
        break;
    default:
        $sql = "SELECT * FROM hoadon";  // Default case to handle 'all' or undefined filters
        break;
}

$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['MaHD']}</td>
            <td>{$row['ThoiGianDat']}</td>
            <td>{$row['TrangThaiXuLy']}</td>
            <td>{$row['MaTK']}</td>
            <td>{$row['diachi']}</td>
            <td>{$row['Tongtien']}</td>
            <td><a href='../order_detail.php?id={$row['MaHD']}' class='btn btn-info'>View</a></td>
            <td><button class='btn btn-primary' data-toggle='modal' data-target='#editStatusModal' data-mahd='{$row['MaHD']}' data-trangthaixuly='{$row['TrangThaiXuLy']}'>Edit</button></td>
        </tr>";
}
mysqli_close($conn);
?>
