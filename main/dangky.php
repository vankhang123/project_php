<?php 
session_start();
 if(isset($_POST['dangky'])) {
    $tenkhachhang = $_POST['hovaten'];
    $email = $_POST['email'];
    $dienthoai = $_POST['dienthoai'];
    $diachi = $_POST['diachi'];
    $matkhau =  md5($_POST['matkhau']);
    $sql_dangky = mysqli_query($mysqli,"INSERT INTO  tbl_dangky(tenkhachhang,email,dienthoai,matkhau,diachi)  VALUE('".$tenkhachhang."','".$email."','".$dienthoai."','".$matkhau."','".$diachi."')");
    if($sql_dangky) {
        echo '<p style = "color:green"> Bạn đã đăng ký thành công</p>';
         $_SESSION['dangky'] = $tenkhachhang;
         header('Location:index.php');
    }
 }
?>


<p>Đăng ký thành viên</p>
<style type = "text/css">

table.dangky tr td {
    padding:5px;
}

</style>

<form action = "" method = "POST">

<table  class = "dangky" width = "50%"  border = "1"  style = "border-collapse: collapse;">

   <tr>
    <td>Họ và tên</td>
    <td><input type = "text" size = "50" name = "hovaten"> </td>
   </tr>
   <tr>
    <td>Email</td>
    <td><input type = "text"  size = "50" name = "email"> </td>
   </tr>

   <tr>
    <td>Điện thoại</td>
    <td><input type = "text"   size = "50" name = "dienthoai"> </td>
   </tr>
   <tr>
    <td>Địa chỉ</td>
    <td><input type = "text" size = "50" name = "diachi"> </td>
   </tr>
   <tr>
    <td>Mật khẩu </td>
    <td> <input type = "text" size = "50" name = "matkhau"> </td>
</tr>
<tr>
    <td  colspan = "2"> <input type = "submit"  name = "dangky" value = "Đăng ký"> </td>
    <td> <a href = "index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản </a></td>
</tr>


</table>
</form>

