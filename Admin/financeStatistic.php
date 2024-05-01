<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Thêm Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/layout_style.css">
    <style>
        @keyframes blink {
            0%, 100% { opacity: 1; }  /* Hiển thị */
            50% { opacity: 0; }       /* Ẩn */
        }

        /* Áp dụng animation cho phần tử */
        .blink {
            animation: blink 2s infinite; /* lặp lại mãi mãi, mỗi chu kỳ 1 giây */
        }
    </style>
</head>
<body>
    <?php include_once("headerRegion.php"); 
    include_once("include/db.inc.php")
    ?>

    <div id="main_body">
    <?php include_once("leftPannelRegion.php"); ?>
    <div id="main_content" class="container mt-3">
    <h2>Quản Lý Đơn Hàng <select name="filter" id="filter">
        <option value="all">tất cả đơn hàng người dùng có đơn hàng</option>
        <option value="#thongke">liệt kệ 5 người có đơn hàng với tổng tiền cao nhất</option>
    </select></h2>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Mã TK</th>
                <th>Tên Tài khoản</th>
                <th>Địa chỉ</th>
                <th>Tổng tiền mua</th>
                <th>Chi Tiết hóa đơn</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Lấy dữ liệu từ database và hiển thị các dòng dữ liệu ở đây
            // Giả sử bạn đã lấy một mảng $donHang từ cơ sở dữ liệu
            $sql = "SELECT t2.MaTK, t2.user_account, t2.DiaChi, SUM(t1.Tongtien) AS total_money_of_a_account 
            FROM hoadon t1 
            INNER JOIN taikhoan t2 ON t1.MaTK = t2.MaTK 
            GROUP BY t2.MaTK, t2.user_account, t2.DiaChi";    
            $result = mysqli_execute_query($conn,$sql);
            while($hd = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>{$hd['MaTK']}</td>";
                    echo "<td>{$hd['user_account']}</td>";
                    echo "<td>{$hd['DiaChi']}</td>";
                    echo "<td>" . number_format($hd['total_money_of_a_account'], 2, '.', ',') . " đ</td>";
                    echo "<td><a href='history.php?MaTK={$hd['MaTK']}' class='btn btn-info'>Xem</a></td>";
                    echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

        </div>

        <?php include_once("rightPannelRegion.php"); ?>
<!-- Modal -->
        <div class="modal fade" id="thongke" tabindex="-1" role="dialog" aria-labelledby="dateLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dateLabel">thống kê 5 người có tổng tiền mua hàng lớn nhất</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="dateForm">
                        From: <input type="date" id="startDate"><br>
                        To: <input type="date" id="endDate"><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary" onclick="submitDateFilter();">Lọc</button>
                </div>
            </div>
        </div>
        </div>
    <?php include_once("footerRegion.php"); ?>

    <!-- Thêm Bootstrap JS và các dependency (Popper.js và jQuery) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.8.7/umd.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <script src="layout_skeleton_js.js"></script> -->
    <script>
        $(document).ready(function() {
            $('#filter').change(function() {
                var modalToOpen = $(this).val();
                if(modalToOpen=="all"){
                    submitAllFilter();
                }
                $(modalToOpen).modal('show');  // Sử dụng giá trị của option được chọn để mở modal tương ứng
            });
        });

        function submitDateFilter() {
            var startDate = $('#startDate').val();
            var endDate = $('#endDate').val();

            $.ajax({
                url: 'process_filter_for_Statistic.php', // Script phía server xử lý lọc
                type: 'POST',
                data: {
                    filterType: 'date',
                    start: startDate,
                    end: endDate
                },
                success: function(response) {
                        // Xử lý phản hồi ở đây, ví dụ: cập nhật dữ liệu hiển thị
                    $('tbody').html(response);
                    $('#thongke').modal('hide'); // Ẩn modal sau khi xử lý
                },
                error: function() {
                    alert('Lỗi xử lý yêu cầu của bạn');
                }
            });
        }
        function submitAllFilter() {
            $.ajax({
                url: 'process_filter_for_Statistic.php', // Script phía server xử lý lọc
                type: 'POST',
                data: {
                    filterType: 'nothing',
                },
                success: function(response) {
                        // Xử lý phản hồi ở đây, ví dụ: cập nhật dữ liệu hiển thị
                    $('tbody').html(response);
                },
                error: function() {
                    alert('Lỗi xử lý yêu cầu của bạn');
                }
            });
        }
    </script>
</body>
</html>