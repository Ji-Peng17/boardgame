<?php
ini_set('display_errors', 0);
$log = $_COOKIE["logP"];

$L0p = $_COOKIE["list0price"];
$L1p = $_COOKIE["list1price"];
$L2p = $_COOKIE["list2price"];
$L3p = $_COOKIE["list3price"];
$L4p = $_COOKIE["list4price"];
$L5p = $_COOKIE["list5price"];

?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>購物車</title>
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

        .item_header img {
            width: 80px;
            height: 80px;
        }

        .newheader {
            display: flex;
            background-color: lightskyblue;
            border-radius: 3px;
            margin-top: 20px;
            height: 70px;
            align-items: center;
        }
        .newheader img{
            width: 80px;
            height: 50px;
            visibility: hidden;
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

        /* .item_detail .name {
            margin-left: 100px;
            margin-top: 20px;
        } */
        .finalprice {
            margin-top: 20px;
            padding: 10px;
            border-radius: 3px;
            height: fit-content;
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
    <div class="middle p-3">
        <div class="text-center">
            <div class="p-5 m-2 "
                style="font-size: 50px; border-radius: 10px; background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%)">
                購物車
                <img src="../_image/shopping-cart.png" width="48px" class="mb-2">
            </div>
            <div id="logwrong" style="color : red ;display:none; font-size: 20px"> 請先登入 </div>
            <div id="cartwrong" style="color : red ;display:none; font-size: 20px"> 購物車內無內容 </div>
        </div>
        <div id="app" class="row mx-2">
            <!-- 左邊 -->
            <div class="container-fluid col-md-9 ">
                <div class="newheader row mx-1 p-2">
                    <div class="col-5 d-flex">
                        <div><img src="../_image/table.png" alt="" class="me-auto"></div>
                        <div class="m-auto">商品名稱</div>
                    </div>
                    <div class="col-2">
                        單價
                    </div>
                    <div class="col-2">
                    &nbsp;&nbsp;數量
                    </div>
                    <div class="col-2">
                        總價
                    </div>
                    <div class="col-1">
                    </div>
                </div>
                <div class="item_header row mx-1 p-2">
                    <div class="col-5 d-flex">
                        <div><img src="../_image/c1.jpg" alt="" class="me-auto"></div>
                        <div class="m-auto">璀璨寶石</div>
                    </div>
                    <div class="col-2">$<span class="cartPrice">1400</span></div>
                    <div class="col-2">
                        <button class="btnreduce" onclick="reducebtn(0)">-</button>
                        <span class="cartCnt">
                            <?php echo $_COOKIE["c1qtt"] ?>
                        </span>
                        <button class="btnplus" onclick="plusbtn(0)">+</button>
                    </div>
                    <div class="col-2 cartTotal">0</div>
                    <div class="col-1 d-flex">
                        <div class="ms-auto">
                            <button class="text-danger" onclick="closebtn(0)">&times;</button>
                        </div>
                    </div>
                </div>
                <div class="item_header row mx-1 p-2">
                    <div class="col-5 d-flex">
                        <div><img src="../_image/c2.jpg" alt="" class="me-auto"></div>
                        <div class="m-auto">圖騰快手</div>
                    </div>
                    <div class="col-2">$<span class="cartPrice">790</span></div>
                    <div class="col-2">
                        <button class="btnreduce" onclick="reducebtn(1)">-</button>
                        <span class="cartCnt">
                            <?php echo $_COOKIE["c2qtt"] ?>
                        </span>
                        <button class="btnplus" onclick="plusbtn(1)">+</button>
                    </div>
                    <div class="col-2 cartTotal">0</div>
                    <div class="col-1 d-flex">
                        <div class="ms-auto">
                            <button class="text-danger" onclick="closebtn(1)">&times;</button>
                        </div>
                    </div>
                </div>
                <div class="item_header row mx-1 p-2">
                    <div class="col-5 d-flex">
                        <div><img src="../_image/c3.jpg" alt="" class="me-auto"></div>
                        <div class="m-auto">諾亞方舟</div>
                    </div>
                    <div class="col-2">$<span class="cartPrice">1399</span></div>
                    <div class="col-2">
                        <button class="btnreduce" onclick="reducebtn(2)">-</button>
                        <span class="cartCnt">
                            <?php echo $_COOKIE["c3qtt"] ?>
                        </span>
                        <button class="btnplus" onclick="plusbtn(2)">+</button>
                    </div>
                    <div class="col-2 cartTotal">0</div>
                    <div class="col-1 d-flex">
                        <div class="ms-auto">
                            <button class="text-danger" onclick="closebtn(2)">&times;</button>
                        </div>
                    </div>
                </div>
                <div class="item_header row mx-1 p-2">
                    <div class="col-5 d-flex">
                        <div><img src="../_image/c10.jpg" alt="" class="me-auto"></div>
                        <div class="m-auto">阿瓦隆</div>
                    </div>
                    <div class="col-2">$<span class="cartPrice">550</span></div>
                    <div class="col-2">
                        <button class="btnreduce" onclick="reducebtn(3)">-</button>
                        <span class="cartCnt">
                            <?php echo $_COOKIE["c4qtt"] ?>
                        </span>
                        <button class="btnplus" onclick="plusbtn(3)">+</button>
                    </div>
                    <div class="col-2 cartTotal">0</div>
                    <div class="col-1 d-flex">
                        <div class="ms-auto">
                            <button class="text-danger" onclick="closebtn(3)">&times;</button>
                        </div>
                    </div>
                </div>
                <div class="item_header row mx-1 p-2">
                    <div class="col-5 d-flex">
                        <div><img src="../_image/pm1.jpg" alt="" class="me-auto"></div>
                        <div class="m-auto">寶可夢 朱 & 紫 紫ex</div>
                    </div>
                    <div class="col-2">$<span class="cartPrice">1470</span></div>
                    <div class="col-2">
                        <button class="btnreduce" onclick="reducebtn(4)">-</button>
                        <span class="cartCnt">
                            <?php echo $_COOKIE["c5qtt"] ?>
                        </span>
                        <button class="btnplus" onclick="plusbtn(4)">+</button>
                    </div>
                    <div class="col-2 cartTotal">1470</div>
                    <div class="col-1 d-flex">
                        <div class="ms-auto">
                            <button class="text-danger" onclick="closebtn(4)">&times;</button>
                        </div>
                    </div>
                </div>
                <div class="item_header row mx-1 p-2">
                    <div class="col-5 d-flex">
                        <div><img src="../_image/mtg2.jpg" alt="" class="me-auto"></div>
                        <div class="m-auto">近代新篇2 補充盒</div>
                    </div>
                    <div class="col-2">$<span class="cartPrice">12000</span></div>
                    <div class="col-2">
                        <button class="btnreduce" onclick="reducebtn(5)">-</button>
                        <span class="cartCnt">
                            <?php echo $_COOKIE["c6qtt"] ?>
                        </span>
                        <button class="btnplus" onclick="plusbtn(5)">+</button>
                    </div>
                    <div class="col-2 cartTotal">0</div>
                    <div class="col-1 d-flex">
                        <div class="ms-auto">
                            <button class="text-danger" onclick="closebtn(5)">&times;</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 右邊 -->
            <div class="container-fluid col-md-3 bg-info finalprice">
                <div>
                    <div> 總共<span id="final1">0</span>樣產品</div>
                    <div> NT$<span id="final2">0</span></div>
                    <hr>
                    <div><button class="w-100" onclick="checkout()">去結帳</button></div>
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


        var f1 = document.getElementById("final1");
        var f2 = document.getElementById("final2");

        var parray = document.getElementsByClassName("cartPrice");  //單價
        var iarray = document.getElementsByClassName("cartCnt");    //數量
        var tarray = document.getElementsByClassName("cartTotal");  //總金額
        var harray = document.getElementsByClassName("item_header");//物件(做display)

        var d = new Date();



        var qtt = [];   //做給命名
        for (var y = 1; y <= 200; y++) {
            qtt[qtt.length] = `c${y}qtt`;
        }


        function plusbtn(x) {
            var num = parseInt(iarray[x].innerText) + 1;
            document.cookie = `${qtt[x]} = ${num}`;
            iarray[x].innerText = `${num}`;
            tarray[x].innerText = `${parseInt(parray[x].innerText) * parseInt(num)}`;
            second();
        }
        //減法按鍵 影響兩種總數
        function reducebtn(x) {
            if (parseInt(iarray[x].innerText) > 1) {
                var num = parseInt(iarray[x].innerText) - 1;
                iarray[x].innerText = `${num}`;
                document.cookie = `${qtt[x]} = ${num}`
                tarray[x].innerText = `${parseInt(parray[x].innerText) * num}`;
            }
            second();
        }
        function closebtn(x) {
            iarray[x].innerText = "0";
            tarray[x].innerText = "0";
            harray[x].style.display = "none";
            document.cookie = `${qtt[x]} = 0`
            second();
        }

        var namearray = ["璀璨寶石", "圖騰快手", "諾亞方舟", "阿瓦隆", "寶可夢 紫ex", "近代新篇2"];
        var listarray = ["<?php echo $L0p ?>", "<?php echo $L1p ?>", "<?php echo $L2p ?>", "<?php echo $L3p ?>", "<?php echo $L4p ?>", "<?php echo $L5p ?>"]

        console.log(listarray[0] < 1);

        function checkout() {
            var once = [];
            if (f2.innerText == "0") {
                document.getElementById("cartwrong").style.display = "inline"; //判斷購物車內容
            } else {
                for (var c = 0; c < namearray.length; c++) {     //做清單陣列
                    if (parseInt(iarray[c].innerText) > 0) {     //數字為0不列入
                        once[once.length] = `${namearray[c]}*${iarray[c].innerText}`;
                        var cc = 0;
                        while (listarray[cc] > 1) {
                            cc++;
                        }
                        var nowTime = d.toLocaleDateString() + d.toLocaleTimeString();
                        document.cookie = `list${cc}time = ${nowTime}`;
                        document.cookie = `list${cc} = ${once.join(" ")}`;
                        document.cookie = `list${cc}price = ${f2.innerText}`; //當陣列存在則不做
                        location.href = "cartthx.php";
                    }
                }
            }
        }

        function first() {
            for (var x = 0; x < iarray.length; x++) {
                if (iarray[x].innerText < 1) {
                    closebtn(x);  //數量為 0 做隱藏
                }
                var i = iarray[x];
                var p = parray[x];
                var t = tarray[x];
                var num = parseInt(i.innerText);
                i.innerText = `${num}`;
                t.innerText = `${parseInt(p.innerText) * parseInt(num)}`; //進場時做一次單項總金額檢驗
            }
        }
        function second() {
            var f1cal = 0 //協助得出總數量
            for (var cal1 = 0; cal1 < iarray.length; cal1++) {
                f1cal += parseInt(iarray[cal1].innerText);
                f1.innerText = `${f1cal}`;
            }
            var f2cal = 0 //協助得出總金額
            for (var cal2 = 0; cal2 < tarray.length; cal2++) {
                if (isNaN(tarray[cal2].innerText) == false) {  //如果是數值(NaN的相反)加入數字
                    f2cal += parseInt(tarray[cal2].innerText);
                    f2.innerText = `${f2cal}`;
                }
            }
        }
        //避免second接close迴圈 做第二組起始function

        first();
        second();
        var logP = "<?php echo $log ?>";
        if (logP != "1") {
            document.getElementById("logwrong").style.display = "inline";
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