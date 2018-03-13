<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<title>Pizza</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
	 crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Podkova" rel="stylesheet">
	<link rel="stylesheet" href="css/csspizza.css" media="screen and (min-width: 768px) ">
	<link rel="stylesheet" href="css/csspizzamin.css" media="screen and (max-width: 768px)">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
							<span class="sr-only"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="responsive-menu">
						<ul class="nav navbar-nav">
							<li>
								<a href="pizza.html#myCarousel" title="pizza">Главная</a>
							</li>
							<li>
								<a href="pizza.html#opizza" title="pizzao">О "pizza"</a>
							</li>
							<li>
								<a href="pizza.html#menu" title="pizzaz" >Меню</a>
							</li>
							<li>
								<a href="pizza.html#event" title="pizzae">События</a>
							</li>
							<li>
								<a href="pizza.html#forma" title="pizzaf">Контакты</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="carousel slide" id="myCarousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img src="background/pizza-2589569_1920.jpg" alt="pizza1">
				<div class="carousel-caption">
					<div id="logo" class="logo">
						<a href="http://vikee.herokuapp.com/pizza.html" title="Home" rel="home">
							<img src="background/3ad4dd83d2de60d005906101cabd7d8a.png" alt="opiza" title="pizza1" >
						</a>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="background/pizza-2589577_1920.jpg" alt="pizza2">
				<div class="carousel-caption">
					<div id="logo1" class="logo1">
						<a href="#responsive-menu" title="Home" rel="home">
							<img src="background/3ad4dd83d2de60d005906101cabd7d8a.png" alt="Home" title="pizzad">
						</a>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="background/pizza-2589575_1920.jpg" alt="pizza3" title="pizza">
				<div class="carousel-caption">
					<div id="logo2" class="logo2">
						<a href="#responsive-menu" title="Home" rel="home">
							<img src="background/3ad4dd83d2de60d005906101cabd7d8a.png" alt="Home" title="pizzay">
						</a>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="chef" id="opizza">
					<h2>Добро пожаловать в PIZZA!</h2>
					<p>Пицца (итал. pizza от итал. pizzicare — быть острым) — итальянское национальное блюдо в виде круглой открытой лепёшки,
						покрытой в классическом варианте томатами и расплавленным сыром. Сыр является главным ингредиентом пиццы (как правило,
						моцарелла). Одно из самых популярных блюд в мире, в т.ч. как в домашней кухне, так и особенно в ресторанах, кафе и
						фастфуде.</p>
					<img src="background/chef-1245676_640.jpg" alt="chef" id="chef" class="img-circle" title="pizzach">
					<p>Шеф-повар Шелдон Купер</p>
				</div>
			</div>
		</div>
	</div>
	<div class="expirience">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="oil">
						<img src="background/adult-1868396_1920.jpg" alt="oil" id="oil" title="pizzaoi">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="adult">
						<h3>Приготовление.
							<br>The Taste of Italy!</h3>
							<p>Классическое тесто для пиццы делается из специальной муки, натуральных дрожжей, оливкового масла, соли и воды. Тесто
								замешивается вручную и после расстойки раскатывается тонким слоем. Тесто покрывается томатным соусом либо его аналогами.
								После этого возможно добавление практически любых начинок.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="learn">
					<h4>Cooking Classes at Our Restaurant!
						<br> Учебные классы в нашем ресторане!</h4>
						<p>Традиционную классическую большую "коллективную" пиццу перед употреблением радиально разрезают специальным ножом на
							4, 6, 8 и т. д. кусочков.Существует небольшая "персональная" пиццетта, которая не требует разрезания. Все виды пиццы
							едят руками.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="menupizza" id="menu">
		<div class="container-fluid">
			<div class="row">
				<h5>Menu
					<br>PIZZA</h5>
				<img src="background/pizza-3000285_640.png" alt="pizza" title="pizzam">
				<div class="menu1">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Маргарита</strong>
							<br>Сыр «Моцарелла», соус для пиццы, орегано, соус чесночный &hellip; &hellip; &hellip; 10$</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Пепперони</strong>
							<br>Ветчина, колбаса, сыр, лук, перец маринованный, перец пеперони, соус для пиццы, соус чесночный &hellip; &hellip; &hellip;
							10$</p>
					</div>
				</div>
				<div class="menu2">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Четыре сыра</strong>
							<br>Сыр «Моцарелла», сыр «Джюгас», сыр «Доблю», сыр твёрдый, соус для пиццы, соус чесночный &hellip; &hellip; &hellip;
							10$</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Итальянская</strong>
							<br>Пицца-соус, пепперони, свежие шампиньоны, грудинка (свинина), маслины, сыр моцарелла, базилик &hellip; &hellip; &hellip;
							10$</p>
					</div>
				</div>
				<div class="menu3">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Барбекю</strong>
							<br>Пицца-соус, охотничьи колбаски, свежий лук, свежие шампиньоны, грудинка (свинина), соленые огурцы, соус ранч, соус
							барбекю, сыр моцарелла, базилик &hellip; &hellip; &hellip; 10$</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Острая чили</strong>
							<br>Чесночный соус, сладкий соус чили, пепперони, грудинка (свинина), свежий болгарский перец, перец халапеньо, сыр моцарелла,
							перец кайенский &hellip; &hellip; &hellip; 10$</p>
					</div>
				</div>
				<div class="menu4">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Вегетарианская</strong>
							<br>Пицца-соус, свежий болгарский перец, свежий лук, сыр фета, свежие томаты, маслины, свежие шампиньоны, сыр моцарелла,
							базилик &hellip; &hellip; &hellip; 10$</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Грибная</strong>
							<br>Чесночный соус, ветчина, свежие шампиньоны, сыр моцарелла, базилик &hellip; &hellip; &hellip; 10$</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="menudessert">
		<h5>DESSERTS</h5>
		<img src="background/c6cfde145b281d062af5ecc8de7778c9.png" alt="dessert" title="pizzade">
		<div class="container-fluid">
			<div class="row">
				<div class="menu1">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Чизкейк</strong> &hellip; &hellip; &hellip; 5$</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Шоколадный торт</strong> &hellip; &hellip; &hellip; 5$</p>
					</div>
				</div>
				<div class="menu2">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Медовик</strong> &hellip; &hellip; &hellip; 5$</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Воздушный десерт</strong> &hellip; &hellip; &hellip; 10$</p>
					</div>
				</div>
				<div class="menu3">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Мороженое</strong> &hellip; &hellip; &hellip; 5$</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Десерт творожный</strong> &hellip; &hellip; &hellip; 5$</p>
					</div>
				</div>
				<div class="menyu4">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Банановое парфе</strong> &hellip; &hellip; &hellip; 5$</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Безе</strong> &hellip; &hellip; &hellip; 5$</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="menudrink">
		<h5>DRINKS</h5>
		<img src="background/w2y5P_croper_ru-copy-1.jpeg" alt="drink" title="pizzadr">
		<div class="container-fluid">
			<div class="row">
				<div class="menu1">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Coca-Cola</strong>&hellip; &hellip; &hellip; &hellip; &hellip; &hellip; 2$</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Fanta</strong>&hellip; &hellip; &hellip; &hellip; &hellip; &hellip; 2$</p>
					</div>
				</div>
				<div class="menu2">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Sprite</strong>&hellip; &hellip; &hellip; &hellip; &hellip; &hellip; 2$</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Pepsi</strong>&hellip; &hellip; &hellip; &hellip; &hellip; &hellip; 2$</p>
					</div>
				</div>
				<div class="menu3">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Burn</strong>&hellip; &hellip; &hellip; &hellip; &hellip; &hellip; 2$</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>BonAqua</strong>&hellip; &hellip; &hellip; &hellip; &hellip; &hellip; 2$</p>
					</div>
				</div>
				<div class="menyu4">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Сок RICH</strong>&hellip; &hellip; &hellip; &hellip; &hellip; &hellip; 2$</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p>
							<strong>Fresh</strong>&hellip; &hellip; &hellip; &hellip; &hellip; &hellip; 2$</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="endmenu">
					<h4>Best Recipes
						<br>With Best Ingredients</h4>
						<p>Тесто замешивается вручную и отправляется на 2-х часовой отдых, после этого тесто делят на шарики и отправляют на длительный
							отдых около 8 часов. При помощи рук из шарика формируется основа для пиццы, тесто покрывается томатным соусом либо
							его аналогами.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="blog" id="event">
		<h5>Events.
			<br>Будьте в курсе событий с нами.</h5>
		<div class="container-fluid">
			<div class="row">
				<div class="blog1">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<img src="background/restaurant-690975_640.jpg" alt="restaurant" id="restaurant" title="pizzay">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<span>05/03/18
							<br>Favorite dish</span>
						<p>Известное блюдо итальянской кухни, которое любят миллионы людей во всем мире – это пицца.</p>
						<p>
							<a href="blog.html#blog1" title="Читать полностью">Подробнее...</a>
						</p>
					</div>
				</div>
				<div class="blog2">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<span>18/04/17
							<br>The first</span>
						<p>В 1738 году, в итальянском Неаполе, была открыта первая в мире пиццерия. </p>
						<p>
							<a href="blog.html#blog2" title="Читать полностью">Подробнее...</a>
						</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<img src="background/pizza-2810589_640.jpg" alt="pizza" id="restaurant1" title="pizzau">
					</div>
				</div>
				<div class="blog3">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<img src="background/coffee-2425275_640.jpg" alt="restaurant" id="restaurant2" title="pizzai">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<span>06/08/17
							<br>PowerPizza</span>
						<p>Компактность и легкий вес ноутбука – не только его достоинства, но и недостатки, ведь портативную технику намного легче
							украсть. </p>
						<p>
							<a href="blog.html#blog3" title="Читать полностью">Подробнее...</a>
						</p>
					</div>
				</div>
				<div class="blog4">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<span>27/09/17
							<br>Pizzafest</span>
						<p>У пиццы есть свой профессиональный праздник – Pizzafest, который проводится, конечно же, в Италии. </p>
						<p>
							<a href="blog.html#blog4" title="Читать полностью">Подробнее...</a>
						</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<img src="background/pizza-744405_640.jpg" alt="pizza" id="restaurant3" title="pizzam">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="btnblog">
				<a href="blog.html" class="btn btn-default">Read more</a>
			</div>
		</div>
	</div>
	<div class="form" id="forma">
		<h6>Reservation.
			<br>Заполните форму чтобы сделать заказ.</h6>
		<form action="send.php" method="post">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4">
						<input type="text" name="fio" placeholder="Name:" size="23" required>
						<br>
					</div>
					<div class="col-lg-4">
						<input type="text" name="email" placeholder="E-mail:" size="23" required>
						<br>
					</div>
					<div class="col-lg-4">
						<input type="text" name="date" placeholder="Date:" size="23" required>
						<br>
					</div>
					<div class="col-lg-12">
						<textarea name="Message" placeholder="Message:"></textarea>
						<br>
					</div>
				</div>
			</div>
			<div>
				<input type="submit" value="Send reservation">
			</div>
		</form>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="contactss">
					<h4>Location
						<br>Contact us right now!</h4>
					<p>Phone: +375 25 688 677 3
						<br>Address: 220000, Республика Беларусь, г. Минск
						<br>E-mail: vikee_13@inbox.ru
						<br>
					</p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d25838.672102202436!2d27.563953045259108!3d53.9004862116111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sby!4v1520712672708"
					  style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	<div class="scrollup">
        <img src="background/arrow.png" class="img-responsive center block" alt="Наверх">
        </div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.js"></script>
	<script>
$(function() {
		$('.scrollup').click(function() {
			$("html, body").animate({
			scrollTop:0
			},1000);
		})
    })
	$(window).scroll(function() {
		if ($(this).scrollTop()>500) {
			$('.scrollup').fadeIn();
		}
		else {
			$('.scrollup').fadeOut();
		}
    });
</script>
</body>

</html>
