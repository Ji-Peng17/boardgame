<?php
ini_set('display_errors', 0);
$log = $_COOKIE["logP"];
$cook = $_COOKIE["cDate"];
?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上訂位</title>
    <link rel="stylesheet" href="../_css/bootstrap.css">
    <link rel="stylesheet" href="../_css/addition.css">
    <script src="../_js/bootstrap.bundle.js"></script>
    <script src="../_js/jQuery-3.6.3.min.js"></script>

    <style>

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
    <div class="middle ">
        <div class="text-center">
            <div class="p-5 m-2 "
                style=" font-size: 50px; border-radius: 10px; background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%)">
                線上訂位
            </div>
            <div id="logwrong" style="color : red ;display:none; font-size: 20px"> 請先登入 </div>
            <div id="havewrong" style="color : red ;display:none; font-size: 20px"> 已有訂位紀錄 </div>
            <div id="dwrong" style="color: red; display:none; ">日期有誤</div>
            <div id="hwrong" style="color: red; display:none; ">人數有誤</div>
        </div>
        <div class="p-5">
            <div class="row text-decoration-none " style="font-size: 15px;">
                <div class="col-1"></div>
                <div class="col-10 ">
                    <div class="rounded-3 bg-info p-5 d-flex row">
                        <div class="me-auto col-sm-6 col-lg-3">請選擇日期：
                            <input type="date" id="rDate"><br>
                        </div>
                        <div class="m-auto col-sm-6 col-lg-3">請選擇時間：
                            <select id="rTime">
                                <option value="12" selected>12:00</option>
                                <option value="13">13:00</option>
                                <option value="14">14:00</option>
                                <option value="15">15:00</option>
                                <option value="16">16:00</option>
                                <option value="17">17:00</option>
                                <option value="18">18:00</option>
                                <option value="19">19:00</option>
                            </select>
                        </div>
                        <div class="m-auto col-sm-6 col-lg-4">請輸入人數：
                            <input type="number" id="rHuman">
                            
                        </div>
                        <div class=" col-sm-6 col-lg-2 text-center">
                            <button  onclick="res()">確認</button>
                        </div>
                    </div>

                </div>
                <div class="col-1"></div>
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
                        300 // 回頂部時間為 500 毫秒
                    );
                });
            });


            var rdate = document.getElementById("rDate");
            var rtime = document.getElementById("rTime");
            var rhuman = document.getElementById("rHuman");
            var d = new Date();
            var cDate = "<?php echo $cook ?>"

            var logP = "<?php echo $log ?>";
            if (logP != "1") {
                document.getElementById("logwrong").style.display = "inline";
            }


            function res() {
                    if (parseInt(cDate) > 0) {
                        document.getElementById("havewrong").style.display = "inline";
                    }
                    else {
                        var nowTime = d.toLocaleDateString() + d.toLocaleTimeString();
                        var Y = d.getFullYear();
                        var M = `${d.getMonth() + 1}`.padStart(2, "0"); //得到M(從0開始)+1 補到2位
                        var D = d.getDate();
                        var mix = `${Y}-${M}-${D}`
                        console.log(rdate.value > mix);
                        console.log(typeof rhuman.value);
                        if (rdate.value > mix) {
                            rdate.style.border = "black solid 1px";
                            document.getElementById("dwrong").style.display = "none";
                            if (parseInt(rhuman.value) >= 1) {
                                rhuman.style.border = "black solid 1px";
                                document.getElementById("hwrong").style.display = "none";
                                document.cookie = `cDate = ${rdate.value}`;
                                document.cookie = `cTime = ${rtime.value}`;
                                document.cookie = `cHuman = ${rhuman.value}`;
                                document.cookie = `cResTime = ${nowTime}`;
                                location.href = "resthx.html";
                            } else {
                                rhuman.style.border = "red solid 2px";
                                document.getElementById("hwrong").style.display = "inline"; //錯誤顯示
                            }
                        } else {
                            rdate.style.border = "red solid 2px";
                            document.getElementById("dwrong").style.display = "inline";     //錯誤顯示 
                        }
                    }
                }



            var login = document.getElementById("toastLogin");
            var log1 = document.getElementById("log1");
            var log2 = document.getElementById("log2");
            function logpage() {
                var logP = "<?php echo $log ?>";
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