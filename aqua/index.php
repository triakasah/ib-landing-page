<!DOCTYPE html>
<html>
    <head>
        <meta content="IE=EmulateIE9,IE=edge" http-equiv="X-UA-Compatible" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Program kemitraan FBS baru yang revolusioner</title>
        <meta name="title" content="Program kemitraan FBS baru yang revolusioner" />
        <meta name="keywords" content="Program kemitraan FBS baru yang revolusioner" />
        <meta name="description" content="Program kemitraan FBS baru yang revolusioner" />
        <link href="assets/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600&subset=latin,vietnamese,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://landing.idnfbs.com/ru/partner-new/js/jquery.ui.slider.css">
        <script src="http://landing.idnfbs.com/ru/partner-new/js/jquery-1.9.1.js"></script>
        <script src="http://landing.idnfbs.com/ru/partner-new/js/jquery.ui.core.js"></script>
        <script src="http://landing.idnfbs.com/ru/partner-new/js/jquery.ui.widget.js"></script>
        <script src="http://landing.idnfbs.com/ru/partner-new/js/jquery.ui.mouse.js"></script>
        <script src="http://landing.idnfbs.com/ru/partner-new/js/jquery.ui.slider.js"></script>
        <script>
        var __formatSumm = function(sum)
        {
        var c = sum.length, s = sum, m = "", i = 0;
        while(c--){if(i==3){m+=' '+s[c];i=0;}else{m += s[c];}i++;}
        return m.split("").reverse().join("");
        }
        $(function() {
        $summa1 = 10;
        $summa2 = 1;
        $( "#slider" ).slider({
        value:10,
        min: 10,
        max: 999,
        step: 1,
        slide: function( event, ui ) {//ui.value
        $summa1 = ui.value + "";
        var c_right = ui.value + "";
        $( "#slider .right-b" ).html(__formatSumm(c_right));
        var proc = $("#slider .ui-slider-handle").attr('style');
        $("#slider .count").attr('style',proc);
        var summa_end = $summa1*$summa2*20 + "";
        $('#summa').html(__formatSumm(summa_end)+"$");
        }
        });
        $( "#slider2" ).slider({
        value:0.5,
        min: 1,
        max: 50,
        step: 1,
        slide: function( event, ui ) {//ui.value
        $summa2 = ui.value + "";
        var c_right = ui.value + "";
        $( "#slider2 .right-b" ).html(__formatSumm(c_right));
        var proc = $("#slider2 .ui-slider-handle").attr('style');
        $("#slider2 .count").attr('style',proc);
        var summa_end = $summa1*$summa2*20 + "";
        $('#summa').html(__formatSumm(summa_end)+"$");
        }
        });
        });
        </script>
        <link rel="shortcut icon" type="image/x-icon" href="http://landing.idnfbs.com/en/5bonus/images/favicon.ico" />
        <meta property="og:type" content="website">
        <meta property="og:title" content=""/>
        <meta property="og:image" content="http://landing.idnfbs.com/en/5bonus/images/logo_300x300.png">
        <meta property="og:image:type" content="image/png">
    </head>
    <body>
        <div class="background">
            <div class="container col-null">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-null">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-null banner-left">
                        <center><img src="images/logo.jpg" alt="" class="logo"></center>
                        <form class="form" method="get" action="https://my.idnfbs.com/registration">
                            <h2 class="title-banner">Buka Account</h2>
                            <p class="title-banner">Member baru bisa request $5.<br/> Tanpa perlu deposit.</p>
                            <div class="inp">
                                <input type="hidden" value="micro" name="account">
                                <input type="hidden" value="id" name="lang">
                                <input type="hidden" value="450471" name="ppu">
                                <center><input placeholder="Nama Lengkap" type="text" name="name" class="input-form" /><br></center>
                                <center><input placeholder="E-mail Anda" type="text" name="email" class="input-form"/></center>
                            </div>
                            <div class="subm">
                                <input type="submit" class="" value="" />
                                <span>Buka akun</span>
                            </div>
                            <div class="t-bot"><a href="http://my.idnfbs.com">Saya sudah memiliki akun di FBS</a></div>
                            <p class="text_count">Lebih dari 130 000 mitra di seluruh dunia<br/></p>
                            <p class="text_count mt_5"><b>Program kemitraan FBS baru yang revolusioner</b></p>
                        </form>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-null">
                        <p class="text_lot ml_20">15$ per 1 lot untuk EUR/USD <sup class="fs_12">dan lebih banyak!</sup></p>
                        <p class="text_count_big mt_20">berlaku hingga akhir 2015</p>
                        <div class="calc">
                            <div class="head_calc">Hitung profit Anda</div>
                            <div id="slider">
                                <div class="left-min">10</div>
                                <div class="right-max">999</div>
                                <div class="count">
                                    <div class="r-t">Jumlah klien <br />yang ditarik</div>
                                    <div class="right-b">10</div>
                                </div>
                            </div>
                            <div id="slider2">
                                <div class="left-min">1</div>
                                <div class="right-max">50</div>
                                <div class="count">
                                    <div class="r-t">Jumlah order dari <br/>1 klien per hari</div>
                                    <div class="right-b">1</div>
                                </div>
                            </div>
                            <div class="text_count_big_l">Hasil bulanan Anda: <div class="summa" id="summa">200$</div></div>
                            <div class="sliders_bg2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background2">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text_count_middle">
                        <blockquote><b class="salad">Kami mematahkan stereotype kemitraan</b><br/>
                            - Pembayaran komisi kepada setiap klien seumur hidup<br/>
                            - Penarikan dana setiap hari mulai dari $1 melalui pilihan pembayaran apapun<br/>
                        - Statistik rinci secara online<br/></blockquote>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text_count_middle margintop">
                        <blockquote><b class="salad">Kami menggandakan kesempatan Anda:</b><br/>
                            - Materi promosi gratis untuk menarik lebih banyak klien<br/>
                            - Personal manager untuk menyelesaikan semua masalah secara cepat<br/>
                        - Hadiah-hadiah bergengsi dan kontes dengan hadiah-hadiah yang berharga<br/></blockquote>
                    </div>
                </div>
            </div>
        </div>
        <div class="background3">
            <p class="text_count_big2">Sementara Anda membaca halaman ini FBS membayarkan kepada partnernya sekitar 200 000$!</p>
        </div>
        <div class="background4 text_count_middle2">
            <b class="salad">Penghargaan kami</b><br/>
            <a href="http://www.idnfbs.com/id/awards"><img class="img-responsive img-reward" src="http://landing.idnfbs.com/ru/partner-new/images/nagr.png"/></a>
            <div class="text_count_small">
                <a href="http://www.fbs.market/">www.fbs.com</a><br />
                <a href="http://www.fbs.com/sites/default/files/doc/fbs_privacy_policy.pdf" target="_blank">Privacy Policy</a>
            </div>
            <div style="height:0; overflow:hidden;">
            </div>
        </div>
        <script src="assets/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    </body>
</html>