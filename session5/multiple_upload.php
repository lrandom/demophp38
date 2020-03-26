<?php
$count = count($_FILES);
for ($i = 0; $i < $count; $i++) {
    if (isset($_FILES['file_' . $i]) && $_FILES['file_' . $i]['name'] != null) {
        move_uploaded_file($_FILES['file_' . $i]['tmp_name'], 'uploads/' . $_FILES['file_' . $i]['name']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <form enctype="multipart/form-data" method="post">
        <input type="file" name="file_0" />
        <div class="wrap-input"></div>
        <a href="javascript:void(0)" class="add-more">Thêm hình ảnh</a>
        <input type="submit" value="Submit" />
    </form>
</body>

<script>
$index = 0;
$('.add-more').click(function() {
    $index++;
    $('form .wrap-input').append(`<div><input type="file" name="file_${$index}" /></div>`);
})
</script>

</html>