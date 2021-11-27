<html>

<head>
    <title>18600177 - Nguyễn Trung Nam</title>
</head>

<body>
    <form action="register.php" method="post">
        <table>
            <tr>
                <td colspan="2">Đăng kí học phần</td>
            </tr>
            <tr>
                <td>Mã số:</td>
                <td><input type="text" id="id" name="id"></td>
            </tr>
            <tr>
                <td>Họ tên:</td>
                <td><input type="text" id="name" name="name"></td>
            </tr>
            <tr>
                <td>Địa chỉ:</td>
                <td><input type="text" id="adress" name="adress"></td>
            </tr>
            <tr>
                <td>Điện thoại:</td>
                <td><input type="tel" id="numberphone" name="numberphone"></td>
            </tr>
            <tr>
                <td>Giới tính:</td>
                <td><input type="checkbox" id="man" name="man" value="Nam"> Nam</td>
                <td><input type="checkbox" id="woman" name="woman" value="Nữ"> Nữ</td>
            </tr>
            <tr>
                <td>Ngày sinh:</td>
                <td><input type="number" name="months" min="1" max="12">, </td>
                <td><input type="text" id="day" name="day">, </td>
                <td><input type="text" id="year" name="year"> (mm, dd, yyyy)</td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="btn_submit" value="Dang ky"></td>
            </tr>

        </table>

    </form>
</body>

</html>