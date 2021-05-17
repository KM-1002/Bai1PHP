<html>
<head>
	<title>Form đăng ký thành viên</title>
    <script language ="javascript">
            function KiemTra(){
                myFrmObj = document.DKUser
                if (myFrmObj.textTenDN.value == "")
                {
                    window.alert("Tên đăng nhập không được để trống.");
                    myFrmObj.textTenDN.focus();
                    return false;
                }
                else if(myFrmObj.textMatKhau.value =="")
                {
                    alert("Mật khẩu không được để trống.");
                    myFrmObj.textMatKhau.focus();
                    return false;
                }
                else if(myFrmObj.textMatKhau.length < 5)
                {
                    window.alert("Mật khẩu ngắn quá.");
                    myFrmObj.textMatKhau.focus();
                    return false;
                }
                else if(myFrmObj.textMatKhau.value != myFrmObj.textMatKhaugolai.value )
                {
                    alert("Mật khẩu gõ lại không đúng.");
                    myFrmObj.textMatKhauGoLai.focus();
                    return false;
                }

                return true;
            }
    </script>
</head>
<body>
    <form name="DKUser" method="POST" action="DangNhap.php" onsubmit="return KiemTra()">
		<table> <H1 id="TieuDe">Đăng Ký Người Dùng</H1>
			<tr>
				<td>Tên đăng nhập :</td>
				<td><input type="singleline" name="textTenDN"></td>
			</tr>
			<tr>
				<td>Mật khẩu :</td>
				<td><input type="password" name="textMatKhau">  (Tối thiểu 5 ký tự)</td>
			</tr>
            <tr>
				<td>Nhập lại mật khẩu :</td>
				<td><input type="password" name="textMatKhaugolai"></td>
			</tr>
            <tr>
                <td colspan="2"  style="border-bottom: solid;">
                </td>
            </tr>
            <tr>
                <td><p style="font-style: italic; font-weight: bold;">Nhập thông tin mật khẩu khi quên</p></td>
            </tr>
            <tr>
                <td>Câu hỏi bí mật:</td>
                <td>
                    <select name="cars" id="cars">
                    <option value="[Chọn câu hỏi]">[Chọn câu hỏi]</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="width: 35%;">Trả lời:</td>
                <td><input size="60" type="text" name="txtTraloi"  /></td>
            </tr>
            <tr>
                <td><p style="font-style: italic; font-weight: bold;">Thông tin cá nhân</p></td>
            </tr>
            <tr>
                <td style="width: 35%;">Họ và chữ lót:</td>
                <td><input size="60" type="text" name="txtHo"  /></td>

            </tr>
            <tr>
                <td style="width: 35%;">Tên:</td>
                <td><input size="60" type="text" name="txtTen"  /></td>
            </tr>
            <tr>
                <td style="width: 35%;">Ngày sinh:</td>
                <td>  <select name="ngaysinh" id="ngaysinh">
                    <option value="5"></option>
                    </select>
                        .
                    <input size="20" type="text" name="txtThang"/>
                        .
                    <input size="27" type="text" name="txtNam"/>
                    (Month,DD,YYYY)
                </td>
            </tr>
            <tr>
                <td style="width: 35%;">Giởi tính:</td>
                <td><input size="30" type="checkbox" name="txtNam"/>
                                            Nam
                                          <input size="30" type="checkbox" name="txtNu"/>
                                            Nữ
                </td>
            </tr>
            <tr>
                <td style="width: 35%;">Nghành nghề liên quan:</td>
                <td>
                             <select name="cars" id="cars">
                            <option value="[Chọn nghành nghề]">[Chọn nghành nghề]</option>
                            </select></td>
            </tr>
            <tr>
                <td colspan="2"  style="border-bottom: solid;">
                </td>
            </tr>
            <tr>
                <td><p style="font-style: italic; font-weight: bold;">Sở thích (tuỳ chọn)</p></td>
            </tr>
            <tr>
                <td style="width: 35%;"><input size="30" type="checkbox" name="txtNam"/>
                            Âm nhạc
                </td>
                <td><input size="30" type="checkbox" name="txtNam" value="Du lịch"/> Du lịch</td>
            </tr>
            <tr>
                <td style="margin-left: 100px;"><input size="30" type="checkbox" name="txtNam"/>
                Nghiên cứu
                </td>
                <td><input size="30" type="checkbox" name="txtNam"/>Kinh doanh</td>
            </tr>
            <tr>
                <td colspan="2"  style="border-bottom: solid;">
                </td>
            </tr>          
		</table>
        <input type="submit" value="Đăng ký" name="btDangky">
        <input type="reset" value="Xóa"name="btXoa">
    </form>
</body>
</html>
<style>
 #TieuDe {
     text-align: center;
     background-color: skyblue;
 }
</style>