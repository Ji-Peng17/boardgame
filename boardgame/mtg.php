<?php
ini_set('display_errors', 0);
$log = $_COOKIE["logP"];
?>
<!DOCTYPE php>
<php lang="zh-Hant-TW">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MTG</title>
        <link rel="stylesheet" href="../_css/bootstrap.css">
        <link rel="stylesheet" href="../_css/addition.css">
        <script src="../_js/bootstrap.bundle.js"></script>
        <script src="../_js/jQuery-3.6.3.min.js"></script>

        <style>
            .container {
                border-radius: 0 0 10px 10px;
            }
        </style>
    </head>

    <body>
        <header class="sticky-top ">
            <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                <a class="navbar-brand" href="index.php"> <img src="../_image/table.png" width="70" alt="桌遊館"></a>
                <button class="navbar-toggler m-2 " type="button" data-bs-toggle="collapse" data-bs-target="#mylist"
                    aria-controls="mylist" aria-expanded="false" aria-label="Toggle navigation"
                    style="margin-right: 0;">
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
                        <li class="nav-item active">
                            <a class="nav-link mybtn1 m-2 px-3" href="cart.php"><img src="../_image/bag-check.svg"
                                    width="20" alt="購物車" title="購物車"></a>
                        </li>
                        <li class="nav-item">
                            <span class="nav-link mybtn1 m-2 px-3" onclick="logpage()"><img
                                    src="../_image/person-vcard.svg" width="20" alt="會員登入" title="會員登入"></span>
                        </li>
                </div>
            </nav>
        </header>
        <div class="middle text-center pb-5">
            <ul class="nav nav-fill nav-pills flex-column flex-md-row bg-secondary p-3 container ">
                <li class="nav-item"><a data-bs-toggle="pill" href="" class="nav-link active" onclick="aL()">全部產品</a>
                </li>
                <li class="nav-item"><a data-bs-toggle="pill" href="" class="nav-link" onclick="mtg1()">擴充包</a></li>
                <li class="nav-item"><a data-bs-toggle="pill" href="" class="nav-link" onclick="mtg2()">指揮官套牌</a></li>
                <li class="nav-item"><a data-bs-toggle="pill" href="" class="nav-link" onclick="mtg3()">Bundle/肥包</a>
                </li>
                <li class="nav-item"><a data-bs-toggle="pill" href="" class="nav-link" onclick="mtg4()">禮盒</a></li>
            </ul>

            <div class="row text-decoration-none pt-4" style="font-size: 20px;">
                <div class="col-2"></div>
                <div class="col-8 row m-0">
                    <div class="col-sm-6 col-lg-3 py-3 cmd mtg1">
                        <a href="mtg1.php">
                            <img src="../_image/mtg1.jpg" class="w-100">
                            <div class="m-1">兄弟之戰 補充盒</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 py-3 cmd mtg1">
                        <a href="mtg2.php">
                            <img src="../_image/mtg2.jpg" class="w-100">
                            <div class="m-1">非瑞克西亞:萬界歸一 補充盒</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 py-3 cmd mtg1">
                        <a href="mtg3.php">
                            <img src="../_image/mtg3.jpg" class="w-100">
                            <div class="m-1">近代新篇2 補充盒</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 py-3 cmd mtg1">
                        <a href="mtg4.php">
                            <img src="../_image/mtg4.jpg" class="w-100">
                            <div class="m-1">被遺忘國度戰記 補充盒</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 py-3 cmd mtg1">
                        <a href="mtg5.php">
                            <img src="../_image/mtg5.jpg" class="w-100">
                            <div class="m-1">斯翠海文:魔法學校 補充盒</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 py-3 cmd mtg1">
                        <a href="mtg6.php">
                            <img src="../_image/mtg6.jpg" class="w-100">
                            <div class="m-1">多明納里亞:眾志成城 補充盒</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 py-3 cmd mtg1">
                        <a href="mtg7.php">
                            <img src="../_image/mtg7.jpg" class="w-100">
                            <div class="m-1">神河霓朝紀 補充盒</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 py-3 cmd mtg2">
                        <a href="mtg8.php">
                            <img src="../_image/mtg8.jpg" class="w-100">
                            <div class="m-1">指揮官套牌 龍之毀滅</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 py-3 cmd mtg2">
                        <a href="mtg9.php">
                            <img src="../_image/mtg9.jpg" class="w-100">
                            <div class="m-1">指揮官套牌 混沌化身</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 py-3 cmd mtg2">
                        <a href="mtg10.php">
                            <img src="../_image/mtg10.jpg" class="w-100">
                            <div class="m-1">指揮官套牌 極度危險</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 py-3 cmd mtg4">
                        <a href="mtg11.php">
                            <img src="../_image/mtg11.jpg" class="w-100">
                            <div class="m-1">魔法書 茜卓</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 py-3 cmd mtg4">
                        <a href="mtg12.php">
                            <img src="../_image/mtg12.jpg" class="w-100">
                            <div class="m-1">指揮官禮包 黑色</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 py-3 cmd mtg2 mtg3">
                        <a href="mtg13.php">
                            <img src="../_image/mtg13.jpg" class="w-100">
                            <div class="m-1">非瑞克西亞:萬界歸一 Bundle</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 py-3 cmd mtg3">
                        <a href="mtg14.php">
                            <img src="../_image/mtg14.jpg" class="w-100">
                            <div class="m-1">兄弟之戰 Bundle</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 py-3 cmd mtg3">
                        <a href="mtg15.php">
                            <img src="../_image/mtg15.jpg" class="w-100">
                            <div class="m-1">新卡佩納:喧囂黑街 Bundle</div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 py-3 cmd mtg3">
                        <a href="mtg16.php">
                            <img src="../_image/mtg16.jpg" class="w-100">
                            <div class="m-1">近代新篇2 Bundle</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
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
                    $("php, body").animate(
                        {
                            scrollTop: 0
                        },
                        300 // 回頂部時間為 500 毫秒
                    );
                });
            });
            var allcmd = document.getElementsByClassName("cmd");
            var c1cmd = document.getElementsByClassName("mtg1");
            var c2cmd = document.getElementsByClassName("mtg2");
            var c3cmd = document.getElementsByClassName("mtg3");
            var c4cmd = document.getElementsByClassName("mtg4");


            function mtg1() {
                var hiding = [];
                for (var bc1 = 0; bc1 < allcmd.length; bc1++) {
                    allcmd[bc1].style.display = "none";
                } //隱藏全部
                for (var bc1 = 0; bc1 < c1cmd.length; bc1++) {
                    c1cmd[bc1].style.display = "block";
                    hiding[hiding.length] = bc1;//以陣列取得此類桌遊總數
                } //叫出c1
            }

            function mtg2() {
                var hiding = [];
                for (var bc2 = 0; bc2 < allcmd.length; bc2++) {
                    allcmd[bc2].style.display = "none";
                } //隱藏全部
                for (var bc2 = 0; bc2 < c2cmd.length; bc2++) {
                    c2cmd[bc2].style.display = "block";
                    hiding[hiding.length] = bc2;//以陣列取得此類桌遊總數
                } //叫出c2
                console.log(hiding);
            }
            function mtg3() {
                var hiding = [];
                for (var bc3 = 0; bc3 < allcmd.length; bc3++) {
                    allcmd[bc3].style.display = "none";
                } //隱藏全部
                for (var bc3 = 0; bc3 < c3cmd.length; bc3++) {
                    c3cmd[bc3].style.display = "block";
                    hiding[hiding.length] = bc3;//以陣列取得此類桌遊總數
                } //叫出c3
                console.log(hiding);
            }
            function mtg4() {
                var hiding = [];
                for (var bc4 = 0; bc4 < allcmd.length; bc4++) {
                    allcmd[bc4].style.display = "none";
                } //隱藏全部
                for (var bc4 = 0; bc4 < c4cmd.length; bc4++) {
                    c4cmd[bc4].style.display = "block";
                    hiding[hiding.length] = bc4;//以陣列取得此類桌遊總數
                } //叫出c4
                console.log(hiding);
            }


            function aL() {
                page1();
                b1sty.pointerEvents = "all";
                b1sty.opacity = "1";
                b2sty.display = "inline";
                b1sty2.pointerEvents = "all";
                b1sty2.opacity = "1";
                b2sty2.display = "inline";
            }

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

</php>