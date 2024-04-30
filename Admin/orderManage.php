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
    <h5 style="color:red " class="float-right blink">1 có nghĩa là đã xử lý<br>0 có là chưa xử lý<br>khi chỉnh sửa hãy chỉnh 0 hoặc 1</h5>
    <h2>Quản Lý Đơn Hàng <select name="filter" id="filter">
        <option value="all">tất cả đơn hàng</option>
        <option value="#date">đơn hàng theo tháng ngày</option>
        <option value="#address">đơn hàng theo địa chỉ</option>
        <option value="#status">đơn hàng theo trạng thái</option>
    </select></h2>
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
        <div class="modal fade" id="date" tabindex="-1" role="dialog" aria-labelledby="dateLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dateLabel">lọc theo date</h5>
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
        <div class="modal fade" id="address" tabindex="-1" role="dialog" aria-labelledby="dateLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dateLabel">lọc theo địa chỉ/h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="dateForm">
                        <input type="text" id="address_value" placeholder="nhập địa chỉ">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary" onclick="submitAddressFilter();">Lọc</button>
                </div>
            </div>
        </div>
        </div>
        <div class="modal fade" id="status" tabindex="-1" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal2Label">lọc theo trạng thái</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" id="status_value" placeholder="chỉ nhập 0 hoặc 1">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary" onclick="submitStatusFilter();">Lọc</button>
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
        $('#editStatusModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Nút kích hoạt modal
        var maHD = button.data('mahd'); // Lấy thông tin từ thuộc tính data-mahd
        var trangThaiXuLy = button.data('trangthaixuly'); // Lấy thông tin từ thuộc tính data-trangthaixuly

        // Cập nhật các trường input trong modal
        var modal = $(this);
        modal.find('.modal-body #trangThaiXuLy').val(trangThaiXuLy);
        modal.find('.modal-body #maHD').val(maHD);
        });

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
                url: 'process_filter.php', // Script phía server xử lý lọc
                type: 'POST',
                data: {
                    filterType: 'date',
                    start: startDate,
                    end: endDate
                },
                success: function(response) {
                        // Xử lý phản hồi ở đây, ví dụ: cập nhật dữ liệu hiển thị
                    $('tbody').html(response);
                    $('#date').modal('hide'); // Ẩn modal sau khi xử lý
                },
                error: function() {
                    alert('Lỗi xử lý yêu cầu của bạn');
                }
            });
        }
        function submitStatusFilter() {
            var status_value = $("#status_value").val();
            $.ajax({
                url: 'process_filter.php', // Script phía server xử lý lọc
                type: 'POST',
                data: {
                    filterType: 'status',
                    status : status_value
                },
                success: function(response) {
                        // Xử lý phản hồi ở đây, ví dụ: cập nhật dữ liệu hiển thị
                    $('tbody').html(response);
                    $('#date').modal('hide'); // Ẩn modal sau khi xử lý
                },
                error: function() {
                    alert('Lỗi xử lý yêu cầu của bạn');
                }
            });
        }
        function submitAddressFilter() {
            var address_value = $('#address_value').val();
            console.log(address_value);
            $.ajax({
                url: 'process_filter.php', // Script phía server xử lý lọc
                type: 'POST',
                data: {
                    filterType : 'address',
                    address : address_value
                },
                success: function(response) {
                        // Xử lý phản hồi ở đây, ví dụ: cập nhật dữ liệu hiển thị
                    $('tbody').html(response);
                    $('#date').modal('hide'); // Ẩn modal sau khi xử lý
                },
                error: function() {
                    alert('Lỗi xử lý yêu cầu của bạn');
                }
            });
        }
        function submitAllFilter() {
            $.ajax({
                url: 'process_filter.php', // Script phía server xử lý lọc
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