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
    <title>寶可夢</title>
    <link rel="stylesheet" href="../_css/bootstrap.css">
    <link rel="stylesheet" href="../_css/addition.css">
    <script src="../_js/bootstrap.bundle.js"></script>
    <script src="../_js/jQuery-3.6.3.min.js"></script>

    <style>

        #middle li a {
            color: #ffffff;
        }

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
                        <a class="nav-link mybtn1 m-2 px-3" href="cart.php"><img src="../_image/bag-check.svg" width="20"
                                alt="購物車" title="購物車"></a>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link mybtn1 m-2 px-3" onclick="logpage()"><img
                                src="../_image/person-vcard.svg" width="20" alt="會員登入" title="會員登入"></span>
                    </li>
            </div>
        </nav>
    </header>
    <div class="middle text-center pb-5" >
        <ul class="nav nav-fill nav-pills flex-column flex-md-row bg-secondary p-3 container ">
            <li class="nav-item"><a data-bs-toggle="pill" href="" class="nav-link active" onclick="aL()">全部產品</a></li>
            <li class="nav-item"><a data-bs-toggle="pill" href="" class="nav-link" onclick="pm1()">擴充包</a></li>
            <li class="nav-item"><a data-bs-toggle="pill" href="" class="nav-link" onclick="pm2()">預組套牌</a></li>
            <li class="nav-item"><a data-bs-toggle="pill" href="" class="nav-link" onclick="pm3()">其他商品</a></li>
            <li class="nav-item"><a data-bs-toggle="pill" href="" class="nav-link" onclick="pm4()">周邊產品</a></li>
        </ul>
        <div class="row">
            <div class="col-2"></div>
            <div class="p-3 text-end col-8">
                <button class="mybtn2" onclick="page1()" id="btn1"> 1</button>
                <button class="mybtn2" onclick="page2()" id="btn2"> 2</button>
            </div>
            <div class="col-2"></div>
        </div>

        <div class="row text-decoration-none " style="font-size: 20px;">
            <div class="col-2"></div>
            <div class="col-8 row m-0">
                <div class="col-sm-6 col-lg-3 py-3 cmd pm1">
                    <a href="pm1.php">
                        <img src="../_image/pm1.jpg" class="w-100">
                        <div class="m-1">擴充包「紫ex」</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd pm1">
                    <a href="pm2.php">
                        <img src="../_image/pm2.jpg" class="w-100">
                        <div class="m-1">擴充包「朱ex」</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd pm1">
                    <a href="pm3.php">
                        <img src="../_image/pm3.jpg" class="w-100">
                        <div class="m-1">高級擴充包「天地萬物VSTAR」</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd pm1">
                    <a href="pm4.php">
                        <img src="../_image/pm4.jpg" class="w-100">
                        <div class="m-1">擴充包「思維激盪」</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd pm1">
                    <a href="pm5.php">
                        <img src="../_image/pm5.jpg" class="w-100">
                        <div class="m-1">強化擴充包「白熱奧祕」</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd pm1">
                    <a href="pm6.php">
                        <img src="../_image/pm6.jpg" class="w-100">
                        <div class="m-1">擴充包「迷途深淵」</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd pm1">
                    <a href="pm7.php">
                        <img src="../_image/pm7.jpg" class="w-100">
                        <div class="m-1">強化擴充包「Pokémon GO」</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd pm1">
                    <a href="pm8.php">
                        <img src="../_image/pm8.jpg" class="w-100">
                        <div class="m-1">強化擴充包「黑暗亡靈」</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd pm1">
                    <a href="pm9.php">
                        <img src="../_image/pm9.jpg" class="w-100">
                        <div class="m-1">擴充包「空間魔術師」</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd pm2">
                    <a href="pm10.php">
                        <img src="../_image/pm10.jpg" class="w-100">
                        <div class="m-1">起始組合ex 潤水鴨&謎擬Ｑ ex</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd pm2">
                    <a href="pm11.php">
                        <img src="../_image/pm11.jpg" class="w-100">
                        <div class="m-1">起始組合ex 呆火鱷&電龍 ex</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd pm2">
                    <a href="pm12.php">
                        <img src="../_image/pm12.jpg" class="w-100">
                        <div class="m-1">起始組合ex 新葉喵&路卡利歐 ex</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd pm2">
                    <a href="pm13.php">
                        <img src="../_image/pm13.jpg" class="w-100">
                        <div class="m-1">噴火龍VSTAR vs 烈空坐VMAX</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd pm3">
                    <a href="pm14.php">
                        <img src="../_image/pm14.jpg" class="w-100">
                        <div class="m-1">頂級訓練家收藏箱ex</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd pm3">
                    <a href="pm15.php">
                        <img src="../_image/pm15.jpg" class="w-100">
                        <div class="m-1">特別卡組 新葉喵 呆火鱷 潤水鴨</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd pm3">
                    <a href="pm16.php">
                        <img src="../_image/pm16.jpg" class="w-100">
                        <div class="m-1">能量卡組合</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd pm4">
                    <a href="pm17.php">
                        <img src="../_image/pm17.jpg" class="w-100">
                        <div class="m-1">寶可夢卡牌收納盒 帕底亞御三家</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd pm4">
                    <a href="pm18.php">
                        <img src="../_image/pm18.jpg" class="w-100">
                        <div class="m-1">寶可夢卡牌收納盒 密勒頓</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd pm4">
                    <a href="pm19.php">
                        <img src="../_image/pm19.jpg" class="w-100">
                        <div class="m-1">寶可夢卡牌收納盒 故勒頓</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
        <div class="row">
            <div class="col-2"></div>
            <div class="p-3 text-end col-8">
                <button class="mybtn2" onclick="page1()" id="btn1-2"> 1</button>
                <button class="mybtn2" onclick="page2()" id="btn2-2"> 2</button>
            </div>
            <div class="col-2"></div>
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
        var allcmd = document.getElementsByClassName("cmd");
        var c1cmd = document.getElementsByClassName("pm1");
        var c2cmd = document.getElementsByClassName("pm2");
        var c3cmd = document.getElementsByClassName("pm3");
        var c4cmd = document.getElementsByClassName("pm4");
        var b1sty = document.getElementById("btn1").style;
        var b2sty = document.getElementById("btn2").style;
        var b1sty2 = document.getElementById("btn1-2").style;
        var b2sty2 = document.getElementById("btn2-2").style;


        function pm1() {
            var hiding = [];
            for (var bc1 = 0; bc1 < allcmd.length; bc1++) {
                allcmd[bc1].style.display = "none";
            } //隱藏全部
            for (var bc1 = 0; bc1 < c1cmd.length; bc1++) {
                c1cmd[bc1].style.display = "block";
                hiding[hiding.length] = bc1;//以陣列取得此類桌遊總數
            } //叫出c1
            console.log(hiding);
            if (hiding.length < 24) {
                b1sty.pointerEvents = "none";
                b1sty.opacity = "0.3";
                b2sty.display = "none";
                b1sty2.pointerEvents = "none";
                b1sty2.opacity = "0.3";
                b2sty2.display = "none";
            }//不到一頁不顯示
        }

        function pm2() {
            var hiding = [];
            for (var bc2 = 0; bc2 < allcmd.length; bc2++) {
                allcmd[bc2].style.display = "none";
            } //隱藏全部
            for (var bc2 = 0; bc2 < c2cmd.length; bc2++) {
                c2cmd[bc2].style.display = "block";
                hiding[hiding.length] = bc2;//以陣列取得此類桌遊總數
            } //叫出c2
            console.log(hiding);
            if (hiding.length < 24) {
                b1sty.pointerEvents = "none";
                b1sty.opacity = "0.3";
                b2sty.display = "none";
                b1sty2.pointerEvents = "none";
                b1sty2.opacity = "0.3";
                b2sty2.display = "none";
            }//不到一頁不顯示
        }
        function pm3() {
            var hiding = [];
            for (var bc3 = 0; bc3 < allcmd.length; bc3++) {
                allcmd[bc3].style.display = "none";
            } //隱藏全部
            for (var bc3 = 0; bc3 < c3cmd.length; bc3++) {
                c3cmd[bc3].style.display = "block";
                hiding[hiding.length] = bc3;//以陣列取得此類桌遊總數
            } //叫出c3
            console.log(hiding);
            if (hiding.length < 24) {
                b1sty.pointerEvents = "none";
                b1sty.opacity = "0.3";
                b2sty.display = "none";
                b1sty2.pointerEvents = "none";
                b1sty2.opacity = "0.3";
                b2sty2.display = "none";
            }//不到一頁不顯示
        }
        function pm4() {
            var hiding = [];
            for (var bc4 = 0; bc4 < allcmd.length; bc4++) {
                allcmd[bc4].style.display = "none";
            } //隱藏全部
            for (var bc4 = 0; bc4 < c4cmd.length; bc4++) {
                c4cmd[bc4].style.display = "block";
                hiding[hiding.length] = bc4;//以陣列取得此類桌遊總數
            } //叫出c4
            console.log(hiding);
            if (hiding.length < 24) {
                b1sty.pointerEvents = "none";
                b1sty.opacity = "0.3";
                b2sty.display = "none";
                b1sty2.pointerEvents = "none";
                b1sty2.opacity = "0.3";
                b2sty2.display = "none";
            }//不到一頁不顯示
        }


        function page1() {
            for (var p1 = 0; p1 < 16; p1++) {
                allcmd[p1].style.display = "block";
            } //顯示到p1
            for (var p1 = allcmd.length - 1; p1 >= 16; p1--) {
                allcmd[p1].style.display = "none";
            } //p1以後隱藏
        }
        page1();
        function page2() {
            for (var p2 = 0; p2 < allcmd.length; p2++) {
                allcmd[p2].style.display = "block";
            } //顯示到p2
            for (var p2 = 0; p2 < 16; p2++) {
                allcmd[p2].style.display = "none";
            } //p2以前隱藏
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
                if(logP == "1"){
                    location.href = "personal.php"
                } else{
                console.log("never");
                var login2 = new bootstrap.Toast(login);
                login2.show();
            }}
            function userLog() {
                if((log1.value == "ball") && (log2.value == "1234")){
                    location.href = "personal.php";
                    document.cookie = "logP = 1"
                } else{
                    log1.style.border = "red solid 2px";
                    log2.style.border = "red solid 2px";
                    document.getElementById("bad").style.display = "inline";                  
                }    
            }
        </script>
</body>

</html>