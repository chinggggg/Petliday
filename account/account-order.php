<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<?php include __DIR__ . '/../parts/html-script.php' ?>

<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>account/style.css">


<?php include __DIR__ . '/../parts/html-navbar.php' ?>

<?php

$sql = "SELECT `amount` FROM `order_list` ORDER BY `order_list`.`sid` DESC LIMIT 1";
$output['sql'] = $sql;
$stmt = $pdo->prepare($sql);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $amount = $stmt->fetch()['amount'];
}

?>



<!-- ------------------ body開始 以上勿刪 ------------------ -->
<section id="acount">
    <div class="container">
        <div class="row my-0 my-lg-4"></div>
    </div>
    <div class="container">
        <div class="row">
            <!-- aside-bar 側邊攔 -->
            <?php include __DIR__ . '/../account/account-aside-bar-c.php' ?>
            <!-- endof  aside-bar 側邊攔 -->

            <!-- aside-bar點出的內容 -->
            <div class="col-12 col-lg-9">
                <div class="">
                    <!--list-order 我的訂單 -->
                    <div class="tab-pane list-section">
                        <div class="container mb-3" id="list-title">
                            <div class="row  mb-3">
                                <div class="d-flex pt-3 p-4">
                                    <div class="line mr-2"></div>
                                    <h4 class="t-xxl">我的訂單</h4>
                                </div>
                            </div>
                        </div>

                        <!-- search -->
                        <div class="container">
                            <div class="row ml-0">
                                <div class="col-12 col-lg-6 search align-items-center">
                                    <div class="icon-search" style="position: absolute;">
                                        <i class='fas fa-search'></i>
                                    </div>
                                    <input class=" form-control" type="search" placeholder="搜索歷史清單" aria-label="Search">
                                    <a class="btn-green btn btn-search" type="submit">go</a>
                                </div>
                            </div>
                        </div>
                        <!-- ----prod-box---- -->
                        <div class="container">
                            <div class="row prod-box mt-4 d-flex align-items-top">
                                <div class="prod-img col-2 col-lg-3">
                                    <img src="../products/img/pd6.jpg" alt="">
                                </div>
                                <div class="col-10 col-lg-6 prod-text d-flex flex-column">
                                    <h5 class="brown-color t-l title1-m">訂單編號: d0150505</h5>

                                    <div class="small-text">
                                        <h6 class=" text-gray t-s">訂購日期: 2020/12/18</h6>

                                    </div>
                                </div>
                                <div class="col-10 col-lg-3 d-flex flex-column ml-auto align-self-end">
                                    <h5 class="mb-5 ml-auto t-m brown-color prod-price-in">NT$ <?= $amount ?></h5>
                                    <h5 class="ml-auto green-color t-l title1-m">訂單已完成</h5>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <button class="btn btn-outline">訂單評論</button>
                                <a class="btn" href="./account-order-detail.php">訂單明細</a>
                            </div>

                        </div>
                        <!-- ----endof prod-box---- -->
                    </div>

                    <!-- endof list-order 我的訂單 -->



                </div>
            </div>
            <!-- endof aside-bar點出的內容 -->

        </div>
    </div>
</section>







<?php include __DIR__ . '/../userlogin/user-login.php' ?>
<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<script>
    // ------JS開始 以上勿刪-------



    // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>