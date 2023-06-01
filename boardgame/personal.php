<?php
ini_set('display_errors', 0);

$log = $_COOKIE["logP"];

$qtt2 = $_COOKIE["c2qtt"];
$qtt3 = $_COOKIE["c3qtt"];
$qtt4 = $_COOKIE["c4qtt"];
$qtt5 = $_COOKIE["c5qtt"];
$qtt6 = $_COOKIE["c6qtt"];

$date = $_COOKIE["cDate"];
$time = $_COOKIE["cTime"];
$human = $_COOKIE["cHuman"];
$restime = $_COOKIE["cResTime"];


$L0 = $_COOKIE["list0"];
$L1 = $_COOKIE["list1"];
$L2 = $_COOKIE["list2"];
$L3 = $_COOKIE["list3"];
$L4 = $_COOKIE["list4"];
$L5 = $_COOKIE["list5"];

$L0p = $_COOKIE["list0price"];
$L1p = $_COOKIE["list1price"];
$L2p = $_COOKIE["list2price"];
$L3p = $_COOKIE["list3price"];
$L4p = $_COOKIE["list4price"];
$L5p = $_COOKIE["list5price"];

$L0t = $_COOKIE["list0time"];
$L1t = $_COOKIE["list1time"];
$L2t = $_COOKIE["list2time"];
$L3t = $_COOKIE["list3time"];
$L4t = $_COOKIE["list4time"];
$L5t = $_COOKIE["list5time"];

?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員資料</title>
    <link rel="stylesheet" href="../_css/bootstrap.css">
    <link rel="stylesheet" href="../_css/addition.css">
    <script src="../_js/bootstrap.bundle.js"></script>
    <script src="../_js/jQuery-3.6.3.min.js"></script>

    <style>
        .item_header {
            display: flex;
            background-color: #fff;
            border-radius: 3px;
            margin-top: 20px;
            height: 100px;
            align-items: center;
        }
        .newheader {
            display: flex;
            background-color: lightskyblue;
            border-radius: 3px;
            margin-top: 20px;
            height: 70px;
            align-items: center;
        }


        .item_header img {
            width: 80px;
            height: 80px;
        }

        .btnreduce {
            border: none;
            background: none;
            color: red;
        }

        .btnplus {
            border: none;
            background: none;
            color: green;
        }
    </style>
</head>

<body>
    <header class="sticky-top ">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <a class="navbar-brand" href="index.php"> <img src="../_image/table.png" width="70" alt="桌遊館"></a>
            <button class="navbar-toggler m-2 " type="button" data-bs-toggle="collapse" data-bs-target="#mylist"
                aria-controls="mylist" aria-expanded="false" aria-label="Toggle navigation" style="margin-right: 0;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mylist">
                <ul class="navbar-nav m-2  me-auto" id="ulone">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            商品資訊
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="cmd.php">精選桌遊</a></li>
                            <li><a class="dropdown-item" href="cmd2.php">周邊配件</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pm.php">寶可夢</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mtg.php">魔法風雲會</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reserve.php">線上訂位</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news.php">最新消息</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="qa.php">Q&A</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">關於我們</a>
                    </li>
                    </li>
                </ul>
                <form action="" method="get" class="d-flex m-2 ms-auto">
                    <input class="form-control ms-2" type="search" placeholder="搜尋產品" aria-label="Search">
                    <a href=""><img src="../_image/search.svg" class="m-2" alt=""></a>
                </form>
                <ul class="navbar-nav d-flex ms-auto">
                    <li class="nav-item ">
                        <a class="nav-link mybtn1 m-2 px-3" href="cart.php"><img src="../_image/bag-check.svg"
                                width="20" alt="購物車" title="購物車"></a>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link mybtn1 m-2 px-3" onclick="logpage()"><img src="../_image/person-vcard.svg"
                                width="20" alt="會員登入" title="會員登入"></span>
                    </li>
            </div>
        </nav>
    </header>
    <div class="middle p-3">
        <div class="text-center">
            <div class="p-5 m-2 "
                style="font-size: 50px; border-radius: 10px; background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%)">
                會員資料
                <img src="../_image/shopping-cart.png" width="48px" class="mb-2">
            </div>
        </div>
        <ul class="nav nav-fill nav-pills flex-column flex-md-row bg-secondary rounded-3">
            <li class="nav-item"><a data-bs-toggle="pill" href="#pp1" class="nav-link active">會員資料</a></li>
            <li class="nav-item"><a data-bs-toggle="pill" href="#pp2" class="nav-link">訂位紀錄</a></li>
            <li class="nav-item"><a data-bs-toggle="pill" href="#pp3" class="nav-link ">購買紀錄</a></li>
        </ul>

        <div class="tab-content m-2">
            <div class="tab-pane  m-2 text-center active" id="pp1">
                <div class="card w-auto mx-5">
                    <div class="card-body">
                        <h3 class="card-title text-primary"><b>個人資料</b></h3>
                        <h5 class="card-subtitle mb-2 text-muted">帳號</h5>
                        <p class="card-text"> ball </p>
                        <h5 class="card-subtitle mb-2 text-muted">姓名</h5>
                        <p class="card-text"> OXX </p>
                        <h5 class="card-subtitle mb-2 text-muted">信箱</h5>
                        <p class="card-text"> asd1234@gmail.com </p>
                        <h5 class="card-subtitle mb-2 text-muted">性別</h5>
                        <p class="card-text"> 男 </p>
                        <a href="logout.php" class="btn btn-danger">登出</a>
                    </div>
                </div>
            </div>
            <div class="tab-pane m-2 text-center" id="pp2">
                <div class="card w-auto mx-5 " id="personalRes" style="display : none;">
                    <div class="card-body">
                        <h3 class="card-title text-primary"><b>訂位資訊</b></h3>
                        <h5 class="card-subtitle mb-2 text-muted">預定時間</h5>
                        <p class="card-text">
                            <?php echo $date ?>&nbsp;
                            <?php echo $time ?>點
                        </p>
                        <h5 class="card-subtitle mb-2 text-muted">預定人數</h5>
                        <p class="card-text">
                            <?php echo $human ?>人
                        </p>
                        <h5 class="card-subtitle mb-2 text-muted">下訂時間</h5>
                        <p class="card-text">
                            <?php echo $restime ?>
                        </p>
                    </div>
                </div>
                <div id="noRes" class="p-4 rounded-3 bg-danger fs-3">目前尚無訂位紀錄</div>
            </div>
            <div class="tab-pane m-2 p-3" id="pp3">
                <div class="container-fluid text-center">
                    <div class="newheader row mx-1 p-2 ">
                        <div class="col-2">
                            訂單編號
                        </div>
                        <div class="col-4 ">
                            訂單內容
                        </div>
                        <div class="col-3 ">
                            總金額
                        </div>
                        <div class="col-3 ">
                            下單時間
                        </div>
                    </div>
                    <div class="item_header row mx-1 p-2 ">
                        <div class="col-2">
                            訂單001
                        </div>
                        <div class="col-4 pNumber">0
                        </div>
                        <div class="col-3 pPrice">
                            0
                        </div>
                        <div class="col-3 pDate">0</div>
                    </div>
                    <div class="item_header row mx-1 p-2 ">
                        <div class="col-2">
                            訂單002
                        </div>
                        <div class="col-4 pNumber">0
                        </div>
                        <div class="col-3 pPrice">
                            0
                        </div>
                        <div class="col-3 pDate">0</div>
                    </div>
                    <div class="item_header row mx-1 p-2 ">
                        <div class="col-2">
                            訂單003
                        </div>
                        <div class="col-4 pNumber">0
                        </div>
                        <div class="col-3 pPrice">
                            0
                        </div>
                        <div class="col-3 pDate">0</div>
                    </div>
                    <div class="item_header row mx-1 p-2 ">
                        <div class="col-2">
                            訂單004
                        </div>
                        <div class="col-4 pNumber">0
                        </div>
                        <div class="col-3 pPrice">
                            0
                        </div>
                        <div class="col-3 pDate">0</div>
                    </div>
                    <div class="item_header row mx-1 p-2 ">
                        <div class="col-2">
                            訂單005
                        </div>
                        <div class="col-4 pNumber">0
                        </div>
                        <div class="col-3 pPrice">
                            0
                        </div>
                        <div class="col-3 pDate">0</div>
                    </div>
                    <div class="item_header row mx-1 p-2 ">
                        <div class="col-2">
                            訂單006
                        </div>
                        <div class="col-4 pNumber">0
                        </div>
                        <div class="col-3 pPrice">
                            0
                        </div>
                        <div class="col-3 pDate">0</div>
                    </div>
                </div>

            </div>
        </div>

        <footer class="text-center text-white p-2" style="background-color: rgb(0, 92, 161);">
            <nav class="row ">
                <div class="col-3 "></div>
                <ul class="col-3 list-unstyled">網站總覽
                    <li> <a href="index.php">首頁</a></li>
                    <li> <a href="cmd.php">商品列表</a></li>
                    <li> <a href="news.php">最新消息</a></li>
                    <li> <a href="about.php">店家情報</a></li>
                    <li> <a href="qa.php">Q&A</a></li>
                    <li> <a href="reserve.php">線上訂位</a></li>
                    <li> <a href="">聯繫我們</a></li>
                </ul>
                <ul class="col-3 list-unstyled ">社群媒體
                    <li> <a href="">FaceBook</a></li>
                    <li> <a href="">Plurk</a></li>
                    <li> <a href="">Line@</a></li>
                    <li> <a href="">instagram</a></li>
                </ul>
                <div class="col-3"></div>
            </nav>
            <div>
                <p>Design by </p>
            </div>
        </footer>
        <!-- 內文外的東西 -->
        <!-- 登入卡 -->
        <div class="toast-container position-fixed p-3 end-0 mytst">
            <div id="toastLogin" class="toast text-center" data-bs-autohide="false">
                <div class="toast-header bg-info  ">
                    <span class="me-auto fs-2">會員登入</span>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    <div class="m-2">
                        帳號 : <input type="text" id="log1"> </div>
                    <div id="bad" style="color : red ;display : none;"> 帳號或密碼錯誤 </div>
                    <div class="m-2">
                        密碼 : <input type="password" id="log2"> </div>
                    <button onclick="userLog()">確認</button>
                </div>
            </div>
        </div>
        <!-- 內文外的東西 -->
        <div class="toast-container position-fixed end-0 p-3 mytst">
            <div id="toastSuccess" class="toast ">
                <div class="toast-header bg-info">
                    <span class="me-auto">成功加入購物車</span>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body"><a href="cmd.php">點此</a>參考其他商品</div>
            </div>
        </div>
        <div class="toast-container position-fixed end-0 p-3 mytst">
            <div id="toastWrong" class="toast bg-warning">
                <div class="toast-header">
                    <span class="me-auto">物品已在購物車內</span>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">可於<a href="cmd.php">購物車</a>內確認訂單</div>
            </div>
        </div>
        <div class="back-top hide" title="回頂部"><img src="../_image/arrow-up-circle.svg" width="60px"></div>

        <script>
            $(document).ready(function () {
                // 捲軸偵測距離頂部超過 50 才顯示按鈕
                $(window).scroll(function () {
                    if ($(window).scrollTop() > 50) {
                        if ($(".back-top").hasClass("hide")) {
                            $(".back-top").toggleClass("hide");
                        }
                    } else {
                        $(".back-top").addClass("hide");
                    }
                });
                // 點擊按鈕回頂部
                $(".back-top").on("click", function (event) {
                    $("html, body").animate(
                        {
                            scrollTop: 0
                        },
                        300 // 回頂部時間為 300 毫秒
                    );
                });
            });

            var jshuman = "<?php echo $human ?>";



            if (parseInt(jshuman) > 0) {
                document.getElementById("noRes").style.display = "none";
                document.getElementById("personalRes").style.display = "flex";
            }


            var qtt = [];   //做給命名
            for (var y = 1; y <= 200; y++) {
                qtt[qtt.length] = `c${y}qtt`;
            }

            var n = document.getElementsByClassName("pNumber");
            var p = document.getElementsByClassName("pPrice");
            var d = document.getElementsByClassName("pDate");
            var header = document.getElementsByClassName("item_header");

            var list = ["<?php echo $L0 ?>", "<?php echo $L1 ?>", "<?php echo $L2 ?>", "<?php echo $L3 ?>", "<?php echo $L4 ?>", "<?php echo $L5 ?>",];
            var listp = ["<?php echo $L0p ?>", "<?php echo $L1p ?>", "<?php echo $L2p ?>", "<?php echo $L3p ?>", "<?php echo $L4p ?>", "<?php echo $L5p ?>",];
            var listt = ["<?php echo $L0t ?>", "<?php echo $L1t ?>", "<?php echo $L2t ?>", "<?php echo $L3t ?>", "<?php echo $L4t ?>", "<?php echo $L5t ?>",];


            console.log(listp[3] < 1);

            function first() {
                for (var x = 0; x < p.length; x++) {
                    n[x].innerText = list[x];
                    p[x].innerText = listp[x];
                    d[x].innerText = listt[x];
                    if (listp[x] < 1) {
                        header[x].style.display = "none";
                    }
                }

            }
            first();

            var login = document.getElementById("toastLogin");
            var log1 = document.getElementById("log1");
            var log2 = document.getElementById("log2");
            function logpage() {
                var logP = "<?php echo $_COOKIE["logP"] ?>";
                console.log(typeof logP);
                if (logP == "1") {
                    location.href = "personal.php"
                } else {
                    console.log("never");
                    var login2 = new bootstrap.Toast(login);
                    login2.show();
                }
            }
            function userLog() {
                if ((log1.value == "ball") && (log2.value == "1234")) {
                    location.href = "personal.php";
                    document.cookie = "logP = 1"
                } else {
                    log1.style.border = "red solid 2px";
                    log2.style.border = "red solid 2px";
                    document.getElementById("bad").style.display = "inline";
                }
            }
        </script>
</body>

</html>