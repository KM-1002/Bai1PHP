<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"   /> 
    <title>Dang nhap he thong</title>
</head>
<body>
<?php
    include_once ("config.php");

?>
<form name="formDangnhap" method="post" action="DangNhap.php">
<table width="400" border="0">
    <tr>       
        <td>Tên đăng nhập</td>    
        <td><input type="text" name="txtTenDangNhap"/>    
        </td>  
    </tr>
    <tr>       
        <td> Mật khẩu</td>    
        <td> <input type="password" name="txtMatKhau" />      
        </td>  
    </tr>
    <tr>
        <td align="right">
            <input type="submit" name="btnDangNhap" value="Đăng nhập"/> 
        </td>
        <td>
            <input type="reset" name="btnLamLai" value="Làm lại" /> 
        </td>
    </tr>
    <tr>      
        <td>
        <a   href="TrangChu.php">Trở về trang chủ</a  >
        </td>    
        <td>  &nbsp;</td>  
    </tr>
</table>
</form>
</body>
</html>