<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



  <?php
                        if(isset($err_moveFile)){?>
                            <div class="alert-danger">
                                
                                <strong>Thất bại!</strong> Đăng ký thất bại do không upload được file.
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            </div>
                    <?php
                        }
                        else if(isset($err_emptyValue)){?>
                            <div class="alert-danger">
                                
                                <strong>Thất bại!</strong>Do thiếu thông tin nhập.
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            </div>
                    <?php
                        } else{?>
                            <div class="alert-sucess">
                                    
                                <strong>Thất bại!</strong>Do thiếu thông tin nhập.
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            </div>
                    <?php
                        }
                    ?>