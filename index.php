
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validate Telephone</title>
</head>
<body>
<form method="post">
    <input type="text" name="input">
    <button>Check</button>
</form>
<?php
$data = $_POST['input'];
function validateTelephone($data)
{
    $pattern = '/^\((\d{2}\))(\-)(\(\d{10})\)$/';
    if (preg_match($pattern, $data)) {
        echo "So dien thoai hop le";
    } else {
        echo "So dien thoai khong hop le";
    }
}
validateTelephone($data);
?>
</body>
</html>
