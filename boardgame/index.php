<?php
ini_set('display_errors', 0);
$log = $_COOKIE["logP"];
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>桌遊館</title>
    <link rel="stylesheet" href="../_css/bootstrap.css">
    <link rel="stylesheet" href="../_css/addition.css">
    <script src="../_js/bootstrap.bundle.js"></script>
    <script src="../_js/jQuery-3.6.3.min.js"></script>

    <style>
        .CRSchange {
            position: relative;
        }

        .carousel-control-prev-icon {
            background-image: url(../_image/back.png);
        }

        .carousel-control-next-icon {
            background-image: url(../_image/next.png);
        }

        .card {
            background-color: lightskyblue;
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
                    <li class="nav-item active">
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
    <div class="text-center middle">
        <img src="../_image/table_back.jpg" class="w-100">
        <!-- 最新消息part -->
        <div class="p-3">
            <h1 id="new" class="p-1">最新消息</h1>
            <div class="row text-decoration-none " style="font-size: 15px;">
                <div class="col-1"></div>
                <div class="col-10 row m-0">
                    <div class="col-sm-6 col-lg-3">
                        <a href="">
                            <img src="../_image/table.png" class="w-100 my-2">
                            [桌遊比賽]第五屆OO盃</a>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <a href=""><img src="../_image/sv.jpg" class="w-100 my-2">
                            [寶可夢]「朱&紫」 全新上市</a>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <a href=""><img src="../_image/mtg13.jpg" class="w-100 my-2">
                            [MTG] 非瑞克西亞 萬界歸一</a>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <a href=""><img src="../_image/newyear.svg" class="w-100 bg-light my-2">
                            [公告] 新年假期相關公告</a>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
        <!-- 熱銷新品part -->
        <hr class="text-primary">
        <div class="p-3">
            <h1 id="new" class="p-1">熱銷新品</h1>
            <div class="container text-center my-3">
                <div class="row mx-auto my-auto">
                    <div id="myCarousel" class="carousel slide w-100" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item py-5 active">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-3 my-2">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <a href="pm1.php"><img class="card-img-top my-2" src="../_image/pm1.jpg"
                                                        alt="Card image cap">
                                                    <h4 class="card-title">擴充包「紫ex」</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3 my-2">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <a href="pm2.php"><img class="card-img-top my-2" src="../_image/pm2.jpg"
                                                        alt="Card image cap">
                                                    <h4 class="card-title">擴充包「朱ex」</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3 my-2">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <a href="mtg3.php"><img class="card-img-top my-2" src="../_image/mtg3.jpg"
                                                        alt="Card image cap">
                                                    <h4 class="card-title">近代新篇 擴充盒</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3 my-2">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <a href="c10.php"><img class="card-img-top my-2" src="../_image/c10.jpg"
                                                        alt="Card image cap">
                                                    <h4 class="card-title">阿瓦隆</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item py-5 ">
                                <div class="row">
                                <div class="col-sm-6 col-lg-3 my-2">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <a href="c1.php"><img class="card-img-top my-2" src="../_image/c1.jpg"
                                                        alt="Card image cap">
                                                    <h4 class="card-title">璀璨寶石</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3 my-2">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <a href="c2.php"><img class="card-img-top my-2" src="../_image/c2.jpg"
                                                        alt="Card image cap">
                                                    <h4 class="card-title">圖騰快手</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3 my-2">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <a href="c3.php"><img class="card-img-top my-2" src="../_image/c3.jpg"
                                                        alt="Card image cap">
                                                    <h4 class="card-title">諾亞方舟</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3 my-2">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <a href="mtg2.php"><img class="card-img-top my-2" src="../_image/mtg2.jpg"
                                                        alt="Card image cap">
                                                    <h4 class="card-title">萬界歸一 補充包</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-12 d-flex">
                        <button class="carousel-control-prev CRSchange" type="button" data-bs-target="#myCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next CRSchange ms-auto" type="button"
                            data-bs-target="#myCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon " aria-hidden="true"></span>
                            <span class="">Next</span>
                        </button>
                    </div>
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


        var num = document.getElementById("number");
        var nowPrice = "<?php echo $price ?>";
        var notAgain = "<?php echo $qtt ?>";

        var buybtn = document.getElementById("buy");
        var success = document.getElementById("toastSuccess");
        var wrong = document.getElementById("toastWrong");


        function cal() {
            console.log(num.value);
            if (notAgain < 1) {
                var add = parseInt(num.value) * parseInt(nowPrice)
                buybtn.innerText = "已放入購物車"; //加入購物車後更改按鍵屬性
                buybtn.style.color = "black";
                buybtn.style.pointerEvents = "none";
                document.cookie = `c2qtt = ${num.value}`;
                var success2 = new bootstrap.Toast(success); //顯示加入購物車成功
                success2.show();
            } else {
                var wrong2 = new bootstrap.Toast(wrong); //顯示購物車已有資料
                wrong2.show();
            }
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

</html>