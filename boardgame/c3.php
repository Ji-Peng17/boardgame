<?php
ini_set('display_errors', 0);
// session_start();
$qtt = $_COOKIE["c3qtt"];
$price = 1399;
$log = $_COOKIE["logP"];
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>諾亞方舟</title>
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
    <div class="middle ">
        <div class="text-center">
            <div class="p-5 m-2 "
                style=" font-size: 50px; border-radius: 10px; background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%)">
                商品資訊
            </div>
        </div>
        <div class="row p-3">
            <div class="col-2"></div>
            <div class="col-8 row" style="color: gray;">
                <div class="col-md-5 col-12">
                    <img src="../_image/c3.jpg" alt="" class="w-100">
                </div>
                <div class="col-md-7 col-12">
                    <div>
                        <div style="font-size: 40px; color: black;">諾亞方舟</div>
                        <div style="font-size: 30px; color: rgb(0, 51, 255) ;">NT$ 1,399</div>
                    </div>
                    <hr>
                    <div>輸入購買數量:
                        <select name="q1" id="number">
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div><button onclick="cal()" id="buy" class="btn-buy my-3">加入購物車</button></div>
                    <div id="theprice"></div>
                    <hr>
                    <div class="text-primary">
                        作者｜Stefano Groppi
                        <br>
                        美術｜Paolo Vallerga, Ivan Zoni
                        <br>
                        4+歲｜2-4人｜20-45分鐘
                    </div>
                    <hr>
                    <div>
                        遊戲目標在於幫忙動物們搭上諾亞方舟並且保持方舟的平衡。
                        <br><br> 動物依實體縮小製作精良，附帶動物介紹有圖形、及各種語言的解說，
                        可以讓玩家認識動物以及各種語言的說法，不論男女老少都可以由此遊戲中增長知識，並且提供空間與重量之平衡能力訓練與提昇手部的靈活反應，
                        若全家人陪伴兒童一起玩更可以增進親子關係。
                    </div>
                </div>
                <div class="text-end m-2 fs-6">
                    <a href="cmd.php"> 回上一頁</a>
                </div>
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
            <div class="toast-body">可於<a href="cart.php">購物車</a>內確認訂單</div>
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
        var num = document.getElementById("number");
        var nowPrice = "<?php echo $price ?>";
        var totalPrice = "<?php echo $totalprice ?>";
        var notAgain = "<?php echo $qtt ?>";

        var buybtn = document.getElementById("buy");
        var success = document.getElementById("toastSuccess");
        var wrong = document.getElementById("toastWrong");


        console.log(buybtn.innerText.style);
        console.log(buybtn.innerText);
        console.log(buybtn.style);
        function cal() {
            console.log(num.value);
            if (notAgain < 1) {
                var add = parseInt(num.value) * parseInt(nowPrice)
                buybtn.innerText = "已放入購物車"; //加入購物車後更改按鍵屬性
                buybtn.style.color = "black";
                buybtn.style.pointerEvents = "none";
                document.cookie = `c3qtt = ${num.value}`;
                var success2 = new bootstrap.Toast(success); //顯示加入購物車成功
                success2.show();
                if (totalPrice < 1) {
                    document.cookie = `totalprice = ${add}`;
                    console.log(add);
                } else {
                    var plus = parseInt(add) + parseInt(totalPrice);
                    document.cookie = `totalprice = ${plus}`;
                    console.log(plus);
                }
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