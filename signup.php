<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css\layout_style.css">
    <link rel="stylesheet" href="css\modify_layout.css">

    <style>
        #avatarFrom{
            box-sizing: border-box;
            height: 100%;
            width: 100%;
        }
        #avatarFrom #avatar-real-value{
            box-sizing: border-box;
            height: 90%;
            width: 100%;
            background-color:chartreuse;
        }
        #avatarFrom #avatar-real-value:hover{
            box-sizing: border-box;
            height: 90%;
            width: 100%;
            background-color:aqua;
            cursor: pointer;
        }
        
        #right_panel #add-all-button{
            background-color: green;
        }
        #right_panel #add-all-button:hover{
            background-color: red;
        }
    </style>

</head>
<body>
    <?php include_once("headerRegion.php"); ?>
    <div id="main_body">
        <?php include_once("leftPannelRegion.php"); ?>
        
<style> 
#btnOrder {
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 30px;
    background: #cf2030;
    /* background-image: linear-gradient(to right, #ffde17, #ffc100, #ffa302, #fb8614, #f26822); */
    border: solid 1px #fff;
    font-weight: 700;
    color: #fff;
    /* background-color: #000; */
    line-height: 40px;
    padding: 0 40px;
}

#btnOrder:hover{
    box-shadow: 0 5px 20px -7px rgba(0,0,0,.9)!important;
    top: -2px;
}
    .row {
    margin-right: -15px;
    margin-left: -15px;
    }
    .cart-page h2 {
    margin-bottom: 30px;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 18px;
    margin-top: 25px;
    text-align: center;
    color: #555;
    }
    .text-black {
    color: #000;
    min-width: 120px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem !important;
}
.info-custommer .form-group label {
    width: 100%;
    text-align: center;
}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
}
.info-custommer .form-group input {
    box-sizing: border-box;
    border: 1px solid #ddd;
    padding: 0 10px;
    height: 40px;
    font-size: 14px;
    border-radius: 0;
    max-width: 100%;
    width: 100%;
    vertical-align: middle;
    background-color: #fff;
    color: #333;
    box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
    transition: color .3s,border .3s,background .3s,opacity .3s;
}
.info-custommer .form-group label {
    width: 100%;
    text-align: center;
}
.info-custommer .form-group select {
    box-sizing: border-box;
    border: 1px solid #ddd;
    padding: 0 10px;
    height: 40px;
    font-size: 14px;
    border-radius: 0;
    max-width: 100%;
    width: 100%;
    vertical-align: middle;
    background-color: #fff;
    color: #333;
    box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
    transition: color .3s,border .3s,background .3s,opacity .3s;
}
.form-group textarea.form-control {
    height: auto;
}
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
}
.form-group .form-control {
    height: 43px;
}
.info-custommer .form-group.full {
    width: 100%;
}
.form-group {
    margin-bottom: 15px;
}
.info-custommer .form-group {
    display: inline-block;
    width: 49.7%;
}
.container {
    width: 50%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

</style> 

                 
        <div class="container cart-page">
                    <div class="cart-step-2">
                        <div class="row">
                            <div class="col-12 col-lg-7 infoCustomer">
                                <h2 class="h3 mb-3 text-black" id="Account">Đăng Ký Thành Viên</h2>
                                <div class="info-custommer">
                                    <div class="form-group">
                                        <label id="UserName-title">Họ và tên*</label>
                                    <div id="UserName" class="real-value"> 
                                           <input id="UserName" name="UserName" type="text" value=""class="form-control validate[required] input" placeholder="">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label >Số điện thoại*</label>
                                        <input type="text" name="Mobile" class="validate[required,custom[phone]] input form-control" value="" placeholder="">
                                    </div>
                                    <div class="form-group full">
                                        <label id="Email-title">Email*</label>
                                        <div id="Email" class="real-value">
                                        <input placeholder=""  id="Email" name="Email" type="text"  class=" input form-control" value="">
                                    </div>
                                    </div>
                                    <div class="form-group full">
                                        <label id="Adress-title">Địa chỉ*</label>
                                    <div id="Address" class="real-value"> 
                                        <input   placeholder="Địa chỉ" id="Adress" name="Adress" type="text" value=""class="validate[required] input form-control">
                                    </div>
                                    </div>
                                      <div class="form-group full ">
                                      <label id="Pwd-title">Mật Khẩu*</label>
                                      <div id="Pwd" class="real-value">
                                        <input id="Adress" name="Adress" type="password" value="" class="validate[required] input form-control" placeholder=" ">
                                    </div>                     
                                    </div> </div> 
                                                                                    <button id="btnOrder" type="submit"   onclick="AddUser(this)" >Đăng Ký</button>
                                                                                    <div id="add-all-button">
                        
                                                                                </div>
                                </div>
                            </div>
                        </div>
                    </div> 
            
           


        <?php include_once("rightPannelRegion.php"); ?>
    </div>    

    <?php include_once("footerRegion.php"); ?>


</body>
</html>


        
