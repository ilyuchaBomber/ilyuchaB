<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Производственная практика Кузьмин</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>
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
							<?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) : ?>
            <ul class="login">
                <li><a href="profile.php">Личный кабинет</a></li>
                <li><a href="logout.php">Выход</a></li>
            </ul>
        <?php else : ?>
            <ul class="login">
                <li><a href="login.php">Вход</a></li>
                <li><a href="register.php">Регистрация</a></li>
            </ul>
        <?php endif; ?>
						<div class="cart"><a href="#"><span> </span>Корзина</a></div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	<div class="container">
			<div class="shoes-grid">
			<a href="single.php">
			<div class="wrap-in">
				<div class="wmuSlider example1 slide-grid">		 
				   <div class="wmuSliderWrapper">		  
					   <article style="position: absolute; width: 100%; opacity: 0;">					
						<div class="banner-matter">
						<div class="col-md-5 banner-bag">
							<img class="img-responsive " src="images/bag.jpg" alt=" " />
							</div>
							<div class="col-md-7 banner-off">							
								<h2>СКИДКА 50%</h2>
								<label>СКИДКА ДЕЙСТВУЕТ ТОЛЬКО<b>СЕГОДНЯ</b></label>
								<p>Рюкзак AMERICAN TOURISTER из нейлона коричневый</p>					
								<span class="on-get">КУПИТЬ</span>
							</div>
							
							<div class="clearfix"> </div>
						</div>
						
					 	</article>
					 	<article style="position: absolute; width: 100%; opacity: 0;">					
						<div class="banner-matter">
						<div class="col-md-5 banner-bag">
							<img class="img-responsive " src="images/bag1.jpg" alt=" " />
							</div>
							<div class="col-md-7 banner-off">							
								<h2>СКИДКА 50%</h2>
								<label>СКИДКА ДЕЙСТВУЕТ ТОЛЬКО<b>СЕГОДНЯ</b></label>
								<p>Рюкзак PIQUADRO из кожи коричневый</p>					
								<span class="on-get">КУПИТЬ</span>
							</div>
							
							<div class="clearfix"> </div>
						</div>
						
					 	</article>
					 	<article style="position: absolute; width: 100%; opacity: 0;">					
						<div class="banner-matter">
						<div class="col-md-5 banner-bag">
							<img class="img-responsive " src="images/s4.jpg" alt=" " />
							</div>
							<div class="col-md-7 banner-off">							
								<h2>СКИДКА 50%</h2>
								<label>СКИДКА ДЕЙСТВУЕТ ТОЛЬКО<b>СЕГОДНЯ</b></label>
								<p>Рюкзак PIQUADRO из кожи красный</p>

								<span class="on-get">КУПИТЬ</span>
							</div>
							
							<div class="clearfix"> </div>
						</div>
						
					 	</article>
						
					 </div>
					 </a>
	                <ul class="wmuSliderPagination">
	                	<li><a href="#" class="">0</a></li>
	                	<li><a href="#" class="">1</a></li>
	                	<li><a href="#" class="">2</a></li>
	                </ul>
					 <script src="js/jquery.wmuSlider.js"></script> 
				  <script>
	       			$('.example1').wmuSlider();         
	   		     </script> 
	            </div>
	          </div>
	           	</a>
	   		    
	   		     <div class="products">
	   		     	<h5 class="latest-product">ПОСЛЕДНИЕ ПОКУПКИ</h5>	
	   		     	  <a class="view-all" href="product.php">Посмотреть все<span> </span></a> 		     
	   		     </div>
	   		     <div class="product-left">
	   		     	<div class="col-md-4 chain-grid">
	   		     		<a href="single.php"><img class="img-responsive chain" src="images/s4.jpg" alt=" " /></a>
	   		     		<span class="star"> </span>
	   		     		<div class="grid-chain-bottom">
	   		     			<h6><a href="single.php">Сумка PIQUADRO красный</a></h6>
	   		     			<div class="star-price">
	   		     				<div class="dolor-grid"> 
		   		     				<span class="actual">4999 руб</span>
		   		     				<span class="reducedfrom">9999</span>
		   		     				  <span class="rating">
									        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
									        <label for="rating-input-1-5" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
									        <label for="rating-input-1-4" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
									        <label for="rating-input-1-3" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
									        <label for="rating-input-1-2" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
									        <label for="rating-input-1-1" class="rating-star"> </label>
							    	   </span>
	   		     				</div>
	   		     				<a class="now-get get-cart" href="#">В КОРЗИНУ</a> 
	   		     				<div class="clearfix"> </div>
							</div>
	   		     		</div>
	   		     	</div>
	   		     	<div class="col-md-4 chain-grid">
	   		     		<a href="single.php"><img class="img-responsive chain" src="images/ba.jpg" alt=" " /></a>
	   		     		<span class="star"> </span>
	   		     		<div class="grid-chain-bottom">
	   		     			<h6><a href="single.php">Сумка PIQUADRO черный</a></h6>
	   		     			<div class="star-price">
	   		     				<div class="dolor-grid"> 
		   		     				<span class="actual">5999 руб</span>
		   		     				<span class="reducedfrom">7999</span>
		   		     				  <span class="rating">
									        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
									        <label for="rating-input-1-5" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
									        <label for="rating-input-1-4" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
									        <label for="rating-input-1-3" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
									        <label for="rating-input-1-2" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
									        <label for="rating-input-1-1" class="rating-star"> </label>
							    	   </span>
	   		     				</div>
	   		     				<a class="now-get get-cart" href="#">В КОРЗИНУ</a> 
	   		     				<div class="clearfix"> </div>
							</div>
	   		     		</div>
	   		     	</div>
	   		     	<div class="col-md-4 chain-grid grid-top-chain">
	   		     		<a href="single.php"><img class="img-responsive chain" src="images/baa.jpg" alt=" " /></a>
	   		     		<span class="star"> </span>
	   		     		<div class="grid-chain-bottom">
	   		     			<h6><a href="single.php">Сумка PIQUADRO табачный</a></h6>
	   		     			<div class="star-price">
	   		     				<div class="dolor-grid"> 
		   		     				<span class="actual">9999 руб</span>
		   		     				<span class="reducedfrom">12999</span>
		   		     				  <span class="rating">
									        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
									        <label for="rating-input-1-5" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
									        <label for="rating-input-1-4" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
									        <label for="rating-input-1-3" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
									        <label for="rating-input-1-2" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
									        <label for="rating-input-1-1" class="rating-star"> </label>
							    	   </span>
	   		     				</div>
	   		     				<a class="now-get get-cart" href="#">В КОРЗИНУ</a> 
	   		     				<div class="clearfix"> </div>
							</div>
	   		     		</div>
	   		     	</div>
	   		     
	   		     <div class="clearfix"> </div>
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