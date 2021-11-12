<?php
 include_once "header.php";
?>
<!-- header Start -->
<div class="row bg-custom">
    <div class="col-12">
        <div class="my-4 mx-2 p-4 d-flex justify-content-between">
            <div class="brand">
                <i class=" fab fa-gg-circle fa-2x"></i>
                <span>VICTOR(VV) WALLET</span>
            </div>
            <h5 class="text-white">Turvec Okafor</h5>

        </div>

    </div>
</div>
<!-- header Ends -->
<div class="page-content ">
    <div class="row mx-5">
        <div class="col-md-3">
            <div class="sidebar card card-body shadow">
                <div class="icon1 text-right ">
                    <i class="fas fa-ellipsis-v b1"></i>
                </div>
                <div class="avatar text-center">
                    <div class=" d-flex justify-content-center">
                        <div class="avatar-circle">
                            <img src="assets/img/dog.jpg" alt="avatar">
                        </div>
                    </div>
                    <h5 class="name">Turvec Okafor</h5>
                    <p class="name">Admin</p>
                </div>
                <div class="icon2 ">
                    <i class="fas fa-columns p-2 b1"> : Dashboard</i><br>
                    <i class="fas fa-wallet p-2 b1"> : My wallet</i><br>
                    <i class="fas fa-user-shield p-2 b1"> : security</i><br>
                    <i class="fas fa-fingerprint p-2 b1"> : Authentification</i><br>
                    <i class="fas fa-award p-2 b1"> : Rewards</i><br>
                    <i class="fas fa-tasks p-2 b1"> : More options</i>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="page-content1">
                <div class="row">
                    <div class="col-md-6">
                        <div class="page-content2a ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class=" box1 card card-body shadow">
                                        <div class="text-primary d-flex justify-content-between">
                                            <div>
                                                <h6>price/coin</h6><br>
                                                <p id="eth">$ 9,358.00</p>
                                                <p id="ethn">$ 9,358.00</p>
                                            </div>
                                            <i class="fab fa-ethereum fa-4x"></i>
                                        </div>
                                        <!-- <div class="percentage">-16%</div> -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box2 card card-body shadow">
                                        <div class="text-info d-flex justify-content-between">
                                            <div>
                                                <h6>price/coin</h6><br>
                                                <p id="bit">$30,564</p>
                                                <p id="bitn">$30,564</p>
                                            </div>
                                            <i class="fab fa-bitcoin fa-4x"></i>
                                        </div>
                                        <!-- <div class="percentage2">-84%</div> -->
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="box3 card card-body shadow">
                                        <div class="d-flex justify-content-between">
                                            <div style="color: rgb(40,61,146);">
                                                <h5>Trendings</h5><br>
                                                <p>Dogecoin</p>
                                                <i id="doge">$17,258</i>
                                                <p id="dogen"></p>
                                            </div>
                                            <div>
                                                <i class="fas fa-chart-line text-success fa-2x"></i><br>
                                                <i class="fas fa-chart-area text-dark fa-8x"></i>
                                            </div>

                                        </div>
                                        <div class="percentage3">-94%</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="box4 card card-body shadow">
                            <div style="color: rgb(40,61,146)">
                                <div class="d-flex justify-content-between">
                                    <h4>Analysis</h4>
                                    <div>
                                        <p>project-diagram details <button
                                                class="btn btn-primary text-white  p-1">HERE</button></p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p>10</p><br>
                                        <p>|</p><br>
                                        <p>6</p><br>
                                        <p>|</p><br>
                                        <p>2</p>
                                    </div>
                                    <i class="fas text-danger fa-project-diagram "></i><br>
                                    <i class="fas fa-chart-bar chart"></i>
                                </div>
                                <div class="ball"></div>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="page-content2b">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box5 card card-body shadow">
                                        <div class="d-flex justify-content-between" style="color: rgb(40,61,146)">
                                            <div>
                                                <h6>My first coin level</h6>
                                                <i>$1,036</i>
                                            </div>
                                            <div>
                                                <i class="fas fa-coins fa-4x text-warning"></i>
                                                <i class="fas fa-battery-half text-warning"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="box6 card card-body shadow">
                                        <div class="d-flex justify-content-between" style="color: rgb(40,61,146)">
                                            <div>
                                                <h6>My second coin level</h6>
                                                <i>$2,684</i>
                                            </div>
                                            <div>
                                                <i class="fas fa-coins fa-4x text-success"></i>
                                                <i class="fas fa-battery-three-quarters text-success"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="box7 card card-body shadow">
                                        <div class="d-flex justify-content-between" style="color: rgb(40,61,146)">
                                            <div>
                                                <h6>My third coin level</h6>
                                                <i>$10.985</i>
                                            </div>
                                            <div>
                                                <i class="fas fa-coins fa-4x text-danger"></i>
                                                <i class="fas fa-battery-quarter text-danger"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="box8 card card-body shadow">
                            <h5 style="color: rgb(40,61,146);">My Status:</h5>
                            <hr><br>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <i class="fas fa-id-card text-info fa-3x"></i>
                                    <hr>
                                    <i class="fas fa-clipboard-list fa-3x text-info"></i>
                                    <hr>
                                    <i class="fas fa-file-signature fa-3x text-info"></i>
                                    <hr>
                                </div>
                                <div>
                                    <i class="fas fa-qrcode fa-5x text-center my-5"></i><br>
                                    <p style="color: rgb(40,61,146)">scan code</p>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box9 card card-body shadow">
                            <h6 style="color: rgb(40,61,146);">Network pie</h6>
                            <hr><br>
                            <hr>
                            <i class="fas fa-chart-pie fa-9x text-warning"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box10 card card-body shadow"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="box11 card card-body shadow"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="box12 card card-body shadow"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bitcoin.js"></script>
<?php
include_once "footer.php";
?>