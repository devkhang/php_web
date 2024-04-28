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
            animation: blink 1s infinite; /* lặp lại mãi mãi, mỗi chu kỳ 1 giây */
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
    <h5 style="color:red " class="float-right blink">1 có nghĩa là đã xử lý<br>0 có là chưa xử lý<br>khi chỉnh sửa hãy chỉnh 0 hoặc 1</h5>
    <h2>Quản Lý Đơn Hàng</h2>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Mã HĐ</th>
                <th>Thời Gian Đặt</th>
                <th>Trạng Thái Xử Lý</th>
                <th>Mã TK</th>
                <th>Địa Chỉ</th>
                <th>Tổng Tiền</th>
                <th>Chi Tiết</th>
                <th>Chỉnh sửa trạng thái</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Lấy dữ liệu từ database và hiển thị các dòng dữ liệu ở đây
            // Giả sử bạn đã lấy một mảng $donHang từ cơ sở dữ liệu
            $sql = "select * from hoadon";
            $result = mysqli_execute_query($conn,$sql);
            while($hd = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>{$hd['MaHD']}</td>";
                    echo "<td>{$hd['ThoiGianDat']}</td>";
                    if($hd['TrangThaiXuLy']==1){
                        echo "<td>đã xử lý</td>";
                    }else{
                        echo "<td>chưa xử lý</td>";
                    }
                    echo "<td>{$hd['MaTK']}</td>";
                    echo "<td>{$hd['diachi']}</td>";
                    echo "<td>{$hd['Tongtien']}</td>";
                    echo "<td><a href='../order_detail.php?id={$hd['MaHD']}' class='btn btn-info'>Xem</a></td>";
                    echo "<td><button class='btn btn-primary' data-toggle='modal' data-target='#editStatusModal' data-mahd='{$hd['MaHD']}' data-trangthaixuly='{$hd['TrangThaiXuLy']}'>Chỉnh Sửa</button></td>";
                    echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

        </div>

        <?php include_once("rightPannelRegion.php"); ?>
<!-- Modal -->
        <div class="modal fade" id="editStatusModal" tabindex="-1" role="dialog" aria-labelledby="editStatusModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="update_script.php" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="editStatusModalLabel">Chỉnh Sửa Trạng Thái Xử Lý</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <div class="form-group" method="POST">
                    <label for="trangThaiXuLy">Trạng Thái Xử Lý</label>
                    <input type="text" class="form-control" id="trangThaiXuLy" name="trangThaiXuLy" required>
                    <input type="hidden" id="maHD" name="maHD">
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-primary">Cập Nhật</button>
                </div>
            </div>
            </form>
        </div>
        </div>

    </div>

    <?php include_once("footerRegion.php"); ?>

    <!-- Thêm Bootstrap JS và các dependency (Popper.js và jQuery) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.8.7/umd.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="layout_skeleton_js.js"></script>
    <script>
        $('#editStatusModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Nút kích hoạt modal
        var maHD = button.data('mahd'); // Lấy thông tin từ thuộc tính data-mahd
        var trangThaiXuLy = button.data('trangthaixuly'); // Lấy thông tin từ thuộc tính data-trangthaixuly

        // Cập nhật các trường input trong modal
        var modal = $(this);
        modal.find('.modal-body #trangThaiXuLy').val(trangThaiXuLy);
        modal.find('.modal-body #maHD').val(maHD);
        });
    </script>

</body>
</html>