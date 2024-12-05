<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Производственная практика Кузьмин</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link rel="stylesheet" href="css/etalage.css" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="js/jquery.min.js"></script>

<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>

</head>
<body> 
	<div class="header">
		<div class="top-header">
			<div class="container">
				<div class="top-header-right">
				 <div class="down-top">		
						  <select class="in-drop">
							  <option value="Russian" class="in-of">Russian</option>
							  <option value="English" class="in-of">English</option>
							  <option value="Japanese" class="in-of">Japanese</option>
							  <option value="French" class="in-of">French</option>
							  <option value="German" class="in-of">German</option>
							</select>
					 </div>
					<div class="down-top top-down">
						  <select class="in-drop">
						  
						  <option value="Rub" class="in-of">Rub</option>
						  <option value="Dollar" class="in-of">Dollar</option>
						  <option value="Yen" class="in-of">Yen</option>
						  <option value="Euro" class="in-of">Euro</option>
							</select>
					 </div>
					<div class="clearfix"> </div>	
				</div>
				<div class="clearfix"> </div>		
			</div>
		</div>
		<div class="bottom-header">
			<div class="container">
				<div class="header-bottom-left">
					<div class="logo">
						<a href="index.php"><img src="images/logo.png" alt=" " /></a>
					</div>
					<div class="search">
						<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
						<input type="submit"  value="Поиск">

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom-right">					
							<ul class="login">
								<li><a href="login.php"><span> </span>Вход</a></li> |
								<li ><a href="register.php">Регистрация</a></li>
							</ul>
						<div class="cart"><a href="#"><span> </span>Корзина</a></div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	
	 <div class="container"> 
	 	
	 	<div class=" single_top">
	      <div class="single_grid">
				<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.php">
									<img class="etalage_thumb_image" src="images/pic6.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="images/pic6.jpg" class="img-responsive" title="" />
								</a>
							</li>
							
						</ul>
						 <div class="clearfix"> </div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
				  
					
					<h4>Сумка PIQADRO черный кожа</h4>
				<div class="cart-b">
					<div class="left-n ">11999 руб</div>
				    <a class="now-get get-cart-in" href="#">В КОРЗИНУ</a> 
				    <div class="clearfix"></div>
				 </div>
				 <h6>100 штук в наличии</h6>
			   	<p>Это стильный и универсальный аксессуар, который подойдёт для любого образа. Она выполнена из высококачественной кожи, что обеспечивает долгий срок службы и устойчивость к внешним воздействиям. Сумка имеет лаконичный дизайн, удобна в использовании и функциональна..</p>
			            	   
	<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="sub-cate">
				<div class=" top-nav rsidebar span_1_of_left">
					<div class=" top-nav rsidebar span_1_of_left">
					<h3 class="cate">Сумки</h3>
		 <ul class="menu">
				<li>
			<ul class="kid-menu">
				<li><a href="product.php">Женские</a></li>
				<li ><a href="product.php">Мужские</a></li>
				<li ><a href="product.php">Детские</a></li>
			</ul>
		</li>
					</div>
					</div>
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>	
			</div>
			  <div class="clearfix"> </div>
      	 </div>
      	 
	<div class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="latter">
					<h6>Наши новости</h6>
					<div class="sub-left-right">
						<form>
							<input type="text" value="Email адрес"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter email here';}" />
							<input type="submit" value="Подписаться" />
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="footer-bottom-cate">
					<h6>Сумки</h6>
					<ul>
						<li><a href="#">Женские</a></li>
						<li ><a href="#">Мужские</a></li>
						<li ><a href="#">Детские</a></li>
					</ul>
				</div>
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac8d826ee016ee33877744c30c761b0f6b232650c865f1142d95dcfb00868e876&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
				
				<div class="footer-bottom-cate cate-bottom">
					<h6>Контакты</h6>
						<ul>
						<li>+78005553535</li>
						<li>SymkiRu@mail.ru</li>
						<li>664000</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</body>
</html>