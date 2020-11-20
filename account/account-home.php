<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="style.css">


<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->
<section id="acount">
    <div class="container">
        <div class="row my-5"></div>
    </div>
    <!-- aside-bar 側邊攔 -->
    <div class="container">
        <div class="row ">
            <div class="col-3 aside-bar">
                <h2 class="list-group-item text-center t-xxl">會員中心</h2>

                <div class="list-group text-center t-l" id="list-tab" role="tablist">

                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">會員資料</a>

                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-order" role="tab" aria-controls="messages">我的訂單</a>

                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-wishlist" role="tab" aria-controls="profile">願望清單</a>

                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-mailbox" role="tab" aria-controls="settings">會員信箱</a>

                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-coupon" role="tab" aria-controls="settings">優惠券</a>

                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-qa" role="tab" aria-controls="settings">Q&A</a>
                </div>
            </div>

            <!-- 會員資料 -->

            <div class="col-9">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="col mb-3 " id="member-list">
                            <div class="row pt-3 p-2">
                                <div class="line mr-2"></div>
                                <h4 class="t-xxl">會員資料</h4>
                            </div>
                            <div class="row">
                                <div class="col-4 member-card ">
                                    <div class="member-img ">
                                        <img src="./img/avatar-1.jpg" alt="">

                                    </div>
                                    <a href="" class="camera-icon">
                                        <img src="../icon/camera.svg" alt="">
                                    </a>
                                    <div class="member-id text-center mt-3">
                                        <p> ID:pity0507
                                        </p>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <form>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">姓名</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="黎小霈">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">生日</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="1996/08/24">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="pity0824@gmail.com">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">地址</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="台北市">
                                            </div>
                                        </div>
                                        <br>

                                    </form>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <button class="btn">資料修改</button>
                                <button class="btn">密碼更改</button>

                            </div>
                        </div>

                        <!-- 寵物資料 -->

                        <div class="col mb-3" id="pet-list">
                            <div class="row pt-3 p-2">
                                <div class="line mr-2"></div>
                                <h4 class="t-xxl ">寵物資料</h4>
                            </div>
                            <!-- 單筆寵物資料 -->
                            <div class="row" id="pet-info">
                                <div class="col-4 pet-card">
                                    <div class="pet-img">
                                        <img src="./img/avatar-pet1.jpg" alt="">
                                    </div>
                                    <a href="" class="camera-icon">
                                        <img src="../icon/camera.svg" alt="">
                                    </a>

                                </div>
                                <div class="col-6">
                                    <div>
                                        <h6 class="t-l">Qbone</h6>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">品種</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="柴犬">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">年齡</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="1歲">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">生日</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="2019/09/10">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-2 d-flex justify-content-around align-items-center" id="page-icon">
                                    <a href="" class="edit-icon">
                                        <img src="../icon/edit.svg" alt="">
                                    </a>
                                    <a href="" class="del-icon">
                                        <img src="../icon/trash.svg" alt="">
                                    </a>
                                </div>

                            </div>
                            <div class="row" id="pet-info">
                                <div class="col-4 pet-card">
                                    <div class="pet-img">
                                        <img src="./img/avatar-pet1.jpg" alt="">
                                    </div>
                                    <a href="" class="camera-icon">
                                        <img src="../icon/camera.svg" alt="">
                                    </a>

                                </div>
                                <div class="col-6">
                                    <div>
                                        <h6 class="t-l">Qbone</h6>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">品種</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="柴犬">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">年齡</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="1歲">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">生日</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="2019/09/10">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-2 d-flex justify-content-around align-items-center" id="page-icon">
                                    <a href="" class="edit-icon">
                                        <img src="../icon/edit.svg" alt="">
                                    </a>
                                    <a href="" class="del-icon">
                                        <img src="../icon/trash.svg" alt="">
                                    </a>
                                </div>

                            </div>
                            <div class="row justify-content-end">
                                <button class="btn">新增寵物</button>
                            </div>
                        </div>


                    </div>
                    <!--  list-order 我的訂單-->
                    <div class="tab-pane fade" id="list-order" role="tabpanel" aria-labelledby="list-messages-list">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-home-list">
                                <div class="col mb-3 " id="member-list">
                                    <div class="row pt-3 p-2">
                                        <div class="line mr-2"></div>
                                        <h4 class="t-xxl">我的訂單</h4>
                                    </div>
                                    <div class="row ">
                                        <div class="col-4 ">
                                            <div class="member-img">
                                                <img src="./img/avatar-1.jpg" alt="">
                                            </div>
                                            <div class="member-id ">
                                                ID:pity0507
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <form>
                                                <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-2 col-form-label ">姓名</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="黎小霈">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-2 col-form-label">生日</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="1996/08/24">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="pity0824@gmail.com">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <button class="btn">資料編輯</button>
                                        <button class="btn">密碼更改</button>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="list-wishlist" role="tabpanel" aria-labelledby="list-profile-list">list-wishlist</div>

                            <div class="tab-pane fade" id="list-mailbox" role="tabpanel" aria-labelledby="list-settings-list">list-mailbox</div>

                            <div class="tab-pane fade" id="list-coupon" role="tabpanel" aria-labelledby="list-settings-list">list-coupon</div>

                            <div class="tab-pane fade" id="list-qa" role="tabpanel" aria-labelledby="list-settings-list">list-coupon</div>
                        </div>
                    </div>
                </div>
</section>








<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<?php include __DIR__ . '/../parts/html-script.php' ?>
<script>
    // ------JS開始 以上勿刪-------



    // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>