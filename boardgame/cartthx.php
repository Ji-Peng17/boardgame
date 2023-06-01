<?php
ini_set('display_errors', 0);
$qtt1 = $_COOKIE["c1qtt"];
$qtt2 = $_COOKIE["c2qtt"];
$qtt3 = $_COOKIE["c3qtt"];
$qtt4 = $_COOKIE["c4qtt"];
$qtt5 = $_COOKIE["c5qtt"];
$qtt6 = $_COOKIE["c6qtt"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>訂位成功</title>
    <link rel="stylesheet" href="../_css/bootstrap.css">
    <link rel="stylesheet" href="../_css/addition.css">
    <script src="../_js/bootstrap.bundle.js"></script>
    <script src="../_js/jQuery-3.6.3.min.js"></script>
    <style>

    </style>
</head>

<body class="middle">
    <div class="container-solid">
        <div class="m-5 rounded bg-light text-center" style="border: skyblue solid 3px;">
            <div class=" p-3">
                <h3 class="text-primary fs-2"><b>下定成功</b></h3>
                <a href="index.php">
                    <h5 class="card-subtitle mb-2 text-muted">點此回首頁</h5>
                </a>
            </div>
        </div>
        <script>
        document.cookie = "c1qtt = 0"
        document.cookie = "c2qtt = 0"
        document.cookie = "c3qtt = 0"
        document.cookie = "c4qtt = 0"
        document.cookie = "c5qtt = 0"
        document.cookie = "c6qtt = 0"
        setTimeout("location.href='index.php'",3000);
        </script>
</body>

</html>