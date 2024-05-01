<?php
// Khởi động session và include các file cần thiết
session_start();
include_once("include/db.inc.php");

// Lấy kiểu lọc và các tham số
$filterType = isset($_POST['filterType']) ? $_POST['filterType'] : '';

// Biến để lưu kết quả trả về
$output = "";

if ($filterType == 'date') {
    // Lấy các tham số ngày bắt đầu và kết thúc từ AJAX
    $startDate = $_POST['start'];
    $endDate = $_POST['end'];

    // SQL truy vấn dựa trên ngày
    $sql = "SELECT t2.MaTK, t2.user_account, t2.DiaChi, SUM(t1.Tongtien) AS total_money_of_a_account
            FROM hoadon t1
            INNER JOIN taikhoan t2 ON t1.MaTK = t2.MaTK
            WHERE t1.ThoiGianDat BETWEEN ? AND ?
            GROUP BY t2.MaTK, t2.user_account, t2.DiaChi
            ORDER BY total_money_of_a_account DESC
            LIMIT 5";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $startDate, $endDate);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $output .= "<tr>
                        <td>{$row['MaTK']}</td>
                        <td>{$row['user_account']}</td>
                        <td>{$row['DiaChi']}</td>
                        <td>" . number_format($row['total_money_of_a_account'], 2, '.', ',') . " đ</td>;
                        <td><a href='history.php?MaTK={$row['MaTK']}&startDate={$startDate}&endDate={$endDate}' class='btn btn-info'>Xem</a></td>
                    </tr>";
    }
    $stmt->close();
} elseif ($filterType == 'nothing') {
    // SQL truy vấn lấy tất cả các đơn hàng có đơn
    $sql = "SELECT t2.MaTK, t2.user_account, t2.DiaChi, SUM(t1.Tongtien) AS total_money_of_a_account
            FROM hoadon t1
            INNER JOIN taikhoan t2 ON t1.MaTK = t2.MaTK
            GROUP BY t2.MaTK, t2.user_account, t2.DiaChi";

    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<tr>
                        <td>{$row['MaTK']}</td>
                        <td>{$row['user_account']}</td>
                        <td>{$row['DiaChi']}</td>
                        <td>" . number_format($row['total_money_of_a_account'], 2, '.', ',') . " đ</td>;
                        <td><a href='history.php?MaTK={$row['MaTK']}' class='btn btn-info'>Xem</a></td>
                    </tr>";
    }
}

// Đóng kết nối
$conn->close();

// Trả kết quả về cho client
echo $output;
?>
