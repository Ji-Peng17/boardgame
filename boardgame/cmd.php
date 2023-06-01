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
    <title>精選商品</title>
    <link rel="stylesheet" href="../_css/bootstrap.css">
    <link rel="stylesheet" href="../_css/addition.css">
    <script src="../_js/bootstrap.bundle.js"></script>
    <script src="../_js/jQuery-3.6.3.min.js"></script>

    <style>
        .text-light {
            background-color: black;
            padding: 3px 4px;
            border-radius: 5px;
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
                <ul class="navbar-nav m-2 me-auto" id="ulone">
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
                <form action="" method="get" class="d-flex m-2 ms-auto ">
                    <input class="form-control ms-2" type="search" placeholder="搜尋產品" aria-label="Search">
                    <a href=""><img src="../_image/search.svg" class="m-2" alt=""></a>
                </form>
                <ul class="navbar-nav d-flex ms-auto">
                    <li class=" nav-item">
                        <a class="nav-link mybtn1 m-2 px-3" href="cart.php"><img src="../_image/bag-check.svg"
                                width="19" alt="購物車" title="購物車"></a>
                    </li>
                    <li class="nav-item">
                    <span class="nav-link mybtn1 m-2 px-3" onclick="logpage()"><img src="../_image/person-vcard.svg"
                                width="20" alt="會員登入" title="會員登入"></span>
                    </li>
            </div>
        </nav>
    </header>
    <div class="middle text-center pb-5">
        <ul class="nav nav-fill nav-pills flex-column flex-md-row bg-secondary p-3 container ">
            <li class="nav-item"><a data-bs-toggle="pill" href="" class="nav-link active" onclick="aL()">全部遊戲</a></li>
            <li class="nav-item"><a data-bs-toggle="pill" href="" class="nav-link" onclick="c1()">策略遊戲</a></li>
            <li class="nav-item"><a data-bs-toggle="pill" href="" class="nav-link" onclick="c2()">派對遊戲</a></li>
            <li class="nav-item"><a data-bs-toggle="pill" href="" class="nav-link" onclick="c3()">兒童遊戲</a></li>
            <li class="nav-item"><a data-bs-toggle="pill" href="" class="nav-link" onclick="c4()">陣營遊戲</a></li>
        </ul>
        <div class="row">
            <div class="col-2"></div>
            <div class="p-3 text-end col-8">
                <button class="mybtn2" onclick="page1()" id="btn1"> 1</button>
                <button class="mybtn2" onclick="page2()" id="btn2"> 2</button>
                <button class="mybtn2" onclick="page3()" id="btn3"> 3</button>
            </div>
            <div class="col-2"></div>
        </div>

        <div class="row text-decoration-none " style="font-size: 20px;">
            <div class="col-2"></div>
            <div class="col-8 row m-0">
                <div class="col-sm-6 col-lg-3 py-3 cmd c1">
                    <a href="c1.php">
                        <img src="../_image/c1.jpg" class="w-100">
                        <div class="m-1">璀璨寶石</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">策略</div>
                            <div class=""> <i><b> 遊玩人數：2-4人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c2">
                    <a href="c2.php">
                        <img src="../_image/c2.jpg" class="w-100">
                        <div class="m-1">圖騰快手</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">派對</div>
                            <div class=""> <i><b> 遊玩人數：2-8人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c3">
                    <a href="c3.php">
                        <img src="../_image/c3.jpg" class="w-100">
                        <div class="m-1">諾亞方舟</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">兒童</div>
                            <div class=""> <i><b> 遊玩人數：2-6人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c4">
                    <a href="c4.php">
                        <img src="../_image/c4.jpg" class="w-100">
                        <div class="m-1">風聲</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">陣營</div>
                            <div class=""> <i><b> 遊玩人數：3-9人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c1">
                    <a href="c5.php">
                        <img src="../_image/c5.jpg" class="w-100">
                        <div class="m-1">四季物語</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">策略</div>
                            <div class=""> <i><b> 遊玩人數：2-4人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c3">
                    <a href="c6.php">
                        <img src="../_image/c6.jpg" class="w-100">
                        <div class="m-1">精靈捕手</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">兒童</div>
                            <div class=""> <i><b> 遊玩人數：2-4人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c1">
                    <a href="c7.php">
                        <img src="../_image/c7.jpg" class="w-100">
                        <div class="m-1">兔子王國</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">策略</div>
                            <div class=""> <i><b> 遊玩人數：2-4人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c3">
                    <a href="c8.php">
                        <img src="../_image/c8.jpg" class="w-100">
                        <div class="m-1">色彩大作戰</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">兒童</div>
                            <div class=""> <i><b> 遊玩人數：2-6人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c4">
                    <a href="c9.php">
                        <img src="../_image/c9.jpg" class="w-100">
                        <div class="m-1">米勒山谷 狼人</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">陣營</div>
                            <div class=""> <i><b> 遊玩人數：8-18人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c4">
                    <a href="c10.php">
                        <img src="../_image/c10.jpg" class="w-100">
                        <div class="m-1">阿瓦隆</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">陣營</div>
                            <div class=""> <i><b> 遊玩人數：5-10人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c4">
                    <a href="c11.php">
                        <img src="../_image/c11.jpg" class="w-100">
                        <div class="m-1">CS犯罪現場</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">陣營</div>
                            <div class=""> <i><b> 遊玩人數：4-12人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c2">
                    <a href="c12.php">
                        <img src="../_image/c12.jpg" class="w-100">
                        <div class="m-1">終極審判：電車難題</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">派對</div>
                            <div class=""> <i><b> 遊玩人數：3-13人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c1">
                    <a href="c13.php">
                        <img src="../_image/c13.jpg" class="w-100">
                        <div class="m-1">七大奇蹟</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">策略</div>
                            <div class=""> <i><b> 遊玩人數：3-7人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c2">
                    <a href="c14.php">
                        <img src="../_image/c14.jpg" class="w-100">
                        <div class="m-1">黃牌</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">派對</div>
                            <div class=""> <i><b> 遊玩人數：4-10+人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c4">
                    <a href="c15.php">
                        <img src="../_image/c15.jpg" class="w-100">
                        <div class="m-1">驚爆倫敦</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">陣營</div>
                            <div class=""> <i><b> 遊玩人數：4-8人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c4">
                    <a href="c16.php">
                        <img src="../_image/c16.jpg" class="w-100">
                        <div class="m-1">機密代號</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">陣營</div>
                            <div class=""> <i><b> 遊玩人數：2-8人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c1">
                    <a href="c17.php">
                        <img src="../_image/c17.jpg" class="w-100">
                        <div class="m-1">瘟疫危機</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">策略</div>
                            <div class=""> <i><b> 遊玩人數：2-4人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c4">
                    <a href="c18.php">
                        <img src="../_image/c18.jpg" class="w-100">
                        <div class="m-1">矮人礦坑</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">陣營</div>
                            <div class=""> <i><b> 遊玩人數：3-10人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c1">
                    <a href="c19.php">
                        <img src="../_image/c19.jpg" class="w-100">
                        <div class="m-1">農家樂</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">策略</div>
                            <div class=""> <i><b> 遊玩人數：2-4人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c2">
                    <a href="c20.php">
                        <img src="../_image/c20.jpg" class="w-100">
                        <div class="m-1">傳情畫意</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">派對</div>
                            <div class=""> <i><b> 遊玩人數：2-4人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c4">
                    <a href="c21.php">
                        <img src="../_image/c21.jpg" class="w-100">
                        <div class="m-1">血契獵殺</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">陣營</div>
                            <div class=""> <i><b> 遊玩人數：6-12人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c1">
                    <a href="c22.php">
                        <img src="../_image/c22.jpg" class="w-100">
                        <div class="m-1">石器時代</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">策略</div>
                            <div class=""> <i><b> 遊玩人數：2-4人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c2">
                    <a href="c23.php">
                        <img src="../_image/c23.jpg" class="w-100">
                        <div class="m-1">妙語說書人</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">派對</div>
                            <div class=""> <i><b> 遊玩人數：3-6人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c2">
                    <a href="c24.php">
                        <img src="../_image/c24.jpg" class="w-100">
                        <div class="m-1">犯人在跳舞</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">派對</div>
                            <div class=""> <i><b> 遊玩人數：3-8人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c1">
                    <a href="c25.php">
                        <img src="../_image/c25.jpg" class="w-100">
                        <div class="m-1">卡坦島</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">策略</div>
                            <div class=""> <i><b> 遊玩人數：2-4人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c2">
                    <a href="c26.php">
                        <img src="../_image/c26.jpg" class="w-100">
                        <div class="m-1">德國蟑螂</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">派對</div>
                            <div class=""> <i><b> 遊玩人數：2-6人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c3">
                    <a href="c27.php">
                        <img src="../_image/c27.jpg" class="w-100">
                        <div class="m-1">伐木達人</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">兒童</div>
                            <div class=""> <i><b> 遊玩人數：2-7人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c2">
                    <a href="c28.php">
                        <img src="../_image/c28.jpg" class="w-100">
                        <div class="m-1">眨眨眼</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">派對</div>
                            <div class=""> <i><b> 遊玩人數：4-8人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c2">
                    <a href="c29.php">
                        <img src="../_image/c29.jpg" class="w-100">
                        <div class="m-1">印加寶藏</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">派對</div>
                            <div class=""> <i><b> 遊玩人數：3-8人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c1">
                    <a href="c30.php">
                        <img src="../_image/c30.jpg" class="w-100">
                        <div class="m-1">馬尼拉</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">策略</div>
                            <div class=""> <i><b> 遊玩人數：3-5人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c1">
                    <a href="c31.php">
                        <img src="../_image/c31.jpg" class="w-100">
                        <div class="m-1">富饒之城</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">策略</div>
                            <div class=""> <i><b> 遊玩人數：3-8人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c3">
                    <a href="c32.php">
                        <img src="../_image/c32.jpg" class="w-100">
                        <div class="m-1">作弊飛蛾</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">兒童</div>
                            <div class=""> <i><b> 遊玩人數：3-5人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c2">
                    <a href="c33.php">
                        <img src="../_image/c33.jpg" class="w-100">
                        <div class="m-1">駱駝大賽</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">派對</div>
                            <div class=""> <i><b> 遊玩人數：2-8人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c1">
                    <a href="c34.php">
                        <img src="../_image/c34.jpg" class="w-100">
                        <div class="m-1">卡卡頌</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">策略</div>
                            <div class=""> <i><b> 遊玩人數：3-5人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c3">
                    <a href="c35.php">
                        <img src="../_image/c35.jpg" class="w-100">
                        <div class="m-1">嗒寶</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">兒童</div>
                            <div class=""> <i><b> 遊玩人數：2-8人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c1">
                    <a href="c36.php">
                        <img src="../_image/c36.jpg" class="w-100">
                        <div class="m-1">女巫的佳釀</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">策略</div>
                            <div class=""> <i><b> 遊玩人數：3-5人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c3">
                    <a href="c37.php">
                        <img src="../_image/c37.jpg" class="w-100">
                        <div class="m-1">多米諾王國</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">策略</div>
                            <div class=""> <i><b> 遊玩人數：2-4人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c4">
                    <a href="c38.php">
                        <img src="../_image/c38.jpg" class="w-100">
                        <div class="m-1">狼人真言</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">陣營</div>
                            <div class=""> <i><b> 遊玩人數：4-10人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c2">
                    <a href="c39.php">
                        <img src="../_image/c39.jpg" class="w-100">
                        <div class="m-1">德國心臟病</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">派對</div>
                            <div class=""> <i><b> 遊玩人數：2-6人 </b></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 cmd c3">
                    <a href="c40.php">
                        <img src="../_image/c40.jpg" class="w-100">
                        <div class="m-1">奇雞連連</div>
                        <div class="d-flex">
                            <div class="me-auto text-light">兒童</div>
                            <div class=""> <i><b> 遊玩人數：2人 </b></i></div>
                        </div>
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
                <button class="mybtn2" onclick="page3()" id="btn3-2"> 3</button>
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
        var c1cmd = document.getElementsByClassName("c1");
        var c2cmd = document.getElementsByClassName("c2");
        var c3cmd = document.getElementsByClassName("c3");
        var c4cmd = document.getElementsByClassName("c4");
        var b1sty = document.getElementById("btn1").style;
        var b2sty = document.getElementById("btn2").style;
        var b3sty = document.getElementById("btn3").style;
        var b1sty2 = document.getElementById("btn1-2").style;
        var b2sty2 = document.getElementById("btn2-2").style;
        var b3sty2 = document.getElementById("btn3-2").style;

        function c1() {
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
                b3sty.display = "none";
                b1sty2.pointerEvents = "none";
                b1sty2.opacity = "0.3";
                b2sty2.display = "none";
                b3sty2.display = "none";
            }//不到一頁不顯示
        }

        function c2() {
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
                b3sty.display = "none";
                b1sty2.pointerEvents = "none";
                b1sty2.opacity = "0.3";
                b2sty2.display = "none";
                b3sty2.display = "none";
            }//不到一頁不顯示
        }
        function c3() {
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
                b3sty.display = "none";
                b1sty2.pointerEvents = "none";
                b1sty2.opacity = "0.3";
                b2sty2.display = "none";
                b3sty2.display = "none";
            }//不到一頁不顯示
        }
        function c4() {
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
                b3sty.display = "none";
                b1sty2.pointerEvents = "none";
                b1sty2.opacity = "0.3";
                b2sty2.display = "none";
                b3sty2.display = "none";
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
            for (var p2 = 0; p2 < 32; p2++) {
                allcmd[p2].style.display = "block";
            } //顯示到p2
            for (var p2 = 0; p2 < 16; p2++) {
                allcmd[p2].style.display = "none";
            } //p2以前隱藏
            for (var p2 = allcmd.length - 1; p2 >= 32; p2--) {
                allcmd[p2].style.display = "none";
            } //p2以後隱藏
        }
        function page3() {
            for (var p3 = 0; p3 < allcmd.length; p3++) {
                allcmd[p3].style.display = "block";
            } //顯示到尾頁
            for (var p3 = 0; p3 < 32; p3++) {
                allcmd[p3].style.display = "none";
            } //尾頁以前隱藏
        }
        function aL() {
            page1();
            b1sty.pointerEvents = "all";
            b1sty.opacity = "1";
            b2sty.display = "inline";
            b3sty.display = "inline";
            b1sty2.pointerEvents = "all";
            b1sty2.opacity = "1";
            b2sty2.display = "inline";
            b3sty2.display = "inline";
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