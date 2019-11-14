<?php
require_once "core/core.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<script type="text/javascript">
var $page = $('html, body');
$('a[href*="#"]').click(function() {
    $page.animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 400);
    return false;
});
		//window.addEventListener('scroll', function() {
		//window.scrollBy(0, 50);

//window.scrollTo(0, 100);
//});
	</script>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Open+Sans|Roboto&display=swap');
		@import url('https://fonts.googleapis.com/css?family=Comfortaa|Yeon+Sung&display=swap');
		body{
			padding: 0;
			margin: 0;
			font-family: 'Roboto', sans-serif;
			font-family: 'Open Sans', sans-serif;
			background:#151515;
		}
		.line_n_1{
			width: 100%;
			height: 70px;
			background:#151515;
			position: fixed;
			color:#f1f1f1;
    		box-shadow: 0 0 40px rgba(0,0,0,0.5);
		}
		.logo_box{
			float: left;
			width: 300px;
			height: 70px;
		}
		.logo_box img{
			background: #ff3333;
			margin: 3px 15px 3px 15px;
			float: left;
		}
		.logo_text{
			margin: 15px 20px;
			font-size:28px;
			color: #ff3333;
			padding: 0 30px;
			font-family: 'Yeon Sung', cursive;

		}
		.line_n_1_l2{
			width: calc(100% - 510px);
			float: left;
			height: 70px
		}
		.element_topline_menu{
			float: right;
			margin: 20px 20px;
			border-bottom: 1px dotted #ff3333;
			font-size: 18px;
			color: #ff3333;
		}
		.element_topline_menu:hover{
			float: right;
			margin: 20px 20px;
			border-bottom: 1px dotted #ff3333;
			font-size: 18px;
			color: #ff3333;
    		box-shadow: 0 0 40px rgba(101,0,0,0.5);
		}
		.login_box{
			width: 200px;
			height: 40px;
			float: right;
			margin: 20px 0px;
			font-size: 18px;
			color: #ff7777;
			text-align: center;
		}

		.screen{
			width: 100%;
			height: 100vh;
			margin: 0;
			padding: 0;
		}
		#sl1{
			
			background: #151515;
			background-size: 100% 100%;
			}
		.smal_screen_1{
			width: 1000px;
			height: 80vh;
			margin: 10vh auto 0 auto;
			border: 1px solid #151515;
			background: #161616;
    		
    		box-shadow: 0 0 40px rgba(0,0,0,0.5);
    		//background:url("https://goverb.com/wp-content/uploads/2019/06/Verb-website-background-triangles.png");
			background-size: 100% 100%;
		}
		.smal_screen_1_s1{
			margin: 220px 0 0 0;
			font-size: 48px;
			text-align: center;
			font-family: 'Yeon Sung', cursive;
			color: red;
		}

		.smal_screen_1_s2{
			font-size: 12px;
			text-align: center;
			color: #fff;
			font-family: 'Comfortaa', cursive;
			font-weight: 900;
		}
		.left_bot_sl1_x1{
			padding: 20px;
			color: #999;
			font-family: 'Comfortaa', cursive;
			font-weight: 900;
			font-size: 10px;
			border: 1px dotted #999;
			float: left;
			margin: 50px 0 0 260px;

		}
		.right_bot_sl1_x1{
			padding: 20px 40px;
			color: #999;
			font-family: 'Comfortaa', cursive;
			font-weight: 900;
			font-size: 10px;
			border: 1px dotted #999;
			float: right;
			margin: 50px 260px 0 0;

		}
		.right_bot_sl1_x1:hover, .left_bot_sl1_x1:hover{			
			border: 1px dotted #ff3333;
			color:#ff3333;
			background: #251515;
    		box-shadow: 0 0 40px rgba(101,0,0,0.5);
		}


		body::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 5px rgba(0,0,0,0.3);
    background-color: #222;
}

body::-webkit-scrollbar
{
    width: 5px;
    background-color: #F5F5F5;
}

body::-webkit-scrollbar-thumb
{
        background-color: red;
    border: 1px solid #555555;
}
.screen h2{
	text-align: center;
			color: #eee;
			font-family: 'Comfortaa', cursive;
}
.main_paje_line{
	width: 1000px;
	margin: 0 auto;
	color:#eee;
}
.main_paje_line_l1_z1{
	float: left;
	width: 500px;
}
.main_paje_line_r1_z1{
	float: right;
	width: 500px;
}
.clear{
	clear: both;
}
.redline_phone{
	width: 100%;
	background:red;
	color: #fff;
	font-family: 'Comfortaa', cursive;
	text-align: center;
	font-size: 24px;
	padding: 20px 0 ;
}

	</style>
</head>
<body>
<div class="line_n_1">
	<div class="logo_box">
			<img src ="/RedCore/img/logo/logo64x64.png">
			<div class="logo_text">REDLAVA</div>
	</div>
	<div class="line_n_1_l2">
		<div class="element_topline_menu">ГРАФИКА</div>
		<div class="element_topline_menu">РЕКЛАММА</div>
		<div class="element_topline_menu">ПРОДВИЖЕНИЕ</div>
		<div class="element_topline_menu">СОЗДАНИЕ</div>
	</div>
	<div class="login_box">ВХОД</div>

</div>
<div class="screen" id="sl1">
	<br>
	<div class="smal_screen_1">
		<div class="smal_screen_1_s1">RED LAVA</div><BR>
		<div class="smal_screen_1_s2">МЫ СОЗДАЕМ ИНСТРУМЕНТ ДЛЯ ПРИВЛЕЧЕНИЯ КЛИЕНТОВ</div>
		<div class="left_bot_sl1_x1">БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ</div>
		<div class="right_bot_sl1_x1">УВЕЛИЧИТЬ ПРОДАЖИ</div>
	</div>

</div>
<div class="screen">
	<h2>Вам не нужен просто сайт. Вам нужен инструмент.</h2>
	<div class="main_paje_line">
		<div class="main_paje_line_l1_z1"> </div>
		<div class="main_paje_line_r1_z1">
			<br><br>
			<h3>Собственный движек</h3>
			<p><br>
				В отличии от других студий,у нас собствуный движек.
				Что позволяет убрать весь мусор, сократить время обработки.
				Сайт как автомобиль. У вас спорт кар? Все завидуют. А толку, если под копотом, до сих пор какой нибудь древний движек от копейки.<br><br>
				У нас правило: "Современным сайтам, современный движек."
				

			</p>
		</div>
	</div>
<div class="clear"></div><br><br><br><div class="clear"></div>
	<div class="main_paje_line">
		<div class="main_paje_line_l1_z1">

			<br><br>
			<h3>Продукт под ключ</h3>
			<p><br>
				Если вы заказывали уже сайт, то в 95% вам уже знакомо. Купили сайт, решили посмотреть статистику. 
				Нужна статистика? Купите плагин за 2000р и т.д.<br><br>
				Мы продаем сразу готовый продукт. У нас нет серых цеников!
				

			</p>
			 </div>
		<div class="main_paje_line_r1_z1">
		</div>
	</div>


</div>
<div class="clear"></div><br><br><br><div class="clear"></div>
	<div class="main_paje_line">
		<div class="main_paje_line_l1_z1"> </div>
		<div class="main_paje_line_r1_z1">
			<br><br>
			<h3>Сайт готов к продвижению</h3>
			<p><br>
				В каждую работу, мы вкладываем все необходимые инструменты, для дальнейшего его продвижения.
				Вам останется только зарегестрировать платформу в поисковых системах. И сайт начнет приносить клиентов!<br><br>
				Каждой твари по паре. А каждому сайт, по клиенту.
				

			</p>
		</div>
	</div>
<div class="clear"></div><br><br><br><div class="clear"></div>
	<div class="main_paje_line">
		<div class="main_paje_line_l1_z1">

			<br><br>
			<h3>Сопровождение целый год.</h3>
			<p><br>
				Мы всегда на связи с нашими клиентами. Мы предоставляем техническую поддержку, консультацию и сопровождение в течение года бесплатно! А вам при заказе сайта, дарили подарок? <br><br>
				Каждой клиенту, мы предоставляем хостинг на целый год в подарок. (экономия около 5000 руб.)
				

			</p>
			 </div>
		<div class="main_paje_line_r1_z1">
		</div>
	</div>


</div>
<div class="clear"></div><br><br><br><div class="clear"></div>
<div class="screen">
	<h2>Вам мало? А это еще не все!</h2>
	<div class="redline_phone">
		Позвони +7 (960) 49 44 999 и получи уникальное предложение!
	</div>

</div>
<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>	
</body>
</html>