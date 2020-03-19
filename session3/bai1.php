<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="display.php" method="post">
        <div>
            <label>Tên đăng nhập</label>
            <input type="text" name="username" />
        </div>

        <div>
            <label>Mật khẩu</label>
            <input type="password" name="password" />
        </div>

        <div>
            <label>Ngày sinh</label>
            <span>
                <select name="dob_date">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>

                <select name="dob_month">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>

                <select name="dob_year">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </span>
        </div>

        <div>
            <label>Giới tính</label>
            <span>
                <input type="radio" name="gender" value="1" />Nam
                <input type="radio" name="gender" value="2" />Nữ
            </span>
        </div>

        <div>
            <label>Địa chỉ</label>
            <textarea name="address"></textarea>
        </div>

        <input type="submit" name="submit" value="Submit" />
    </form>
</body>

</html>