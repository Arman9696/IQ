
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="http://allfont.ru/allfont.css?fonts=europe-normal" rel="stylesheet" type="text/css" />
	<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>

	<link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <script src="js/ajax.js"></script>
  	<script src="js/script.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

	<title>World Bank</title>
</head>
<body>
	
<div class="container-fluid">
	<header>

		<div class="row no-gutters header">
			<div class="col-md-6">
				<a href=""><img src="img/Logo.jpg"></a>
			</div>
			<div class="col-md-6">
				<p class="num">8-800-100-50
				<p class="num2">+7 (3452) 522-000</p>
			</div>
		</div>
		<div class="row no-gutters menu">

			<div class="col-12">
				<nav >
					<ul>
						<li><a href="">Кредитные карты</a></li>
						<li><a href="" class="active">Вклады</a></li>
						<li><a href="">Дебетовая карта</a></li>
						<li><a href="">Страхование</a></li>
						<li><a href="">Друзья</a></li>
						<li><a href="">Интернет-банк</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<section>
		<ol class="breadcrumb">
  <li class="breadcrumb"><a href="#">Каталог</a></li>
  <li class="breadcrumb-item"><a href="#">Смартфоны</a></li>
  <li class="breadcrumb-item">Вклады</li>
</ol>  
		<form method="post" id="ajax_form" action="" >
		<div class="row no-gutters content">
			<div class="col-6">
			<h1>Калькулятор</h1>
			<p id="date">Дата оформление вклада<input type="text"  name="date" id="datepicker" value="дд.мм.гггг"></p>
			<p id="summ">Сумма вклада<input type="text" name="cash" id="cash" class="amount2" data-min="1000" data-max="3000000">
			 </p>
			<p id="time">Срок вклада
				<select name="select">
  				<option value="365">1 Год</option>
  				<option value="730">2 Года</option>
  				<option value="1095">3 Года</option>
  				<option value="1460">4 Года</option>
  				<option value="1825">5 Лет</option>
				</select>
			</p>
			<p id="replenishment">Пополнение вклада<input name="radio" id="radio1" type="radio" checked="checked" value="false">Нет<input name="radio" id="radio2" type="radio" value="true">Да</p>
			<p id="pay">Сумма пополнения вклада<input type="text" name="pay" class="amount" data-min="1000" data-max="3000000"></p>
			<button type="button" id="btn" class="calc">Расчитать </button>
			
		</div>
		<div class="col-6">
			<div class=" slider-range-min2 no-gutters">
				<span>1 тыс руб. <span id="max-min2">3 000 000</span></span>
			</div>
			<div class="slider-range-min">
				<span>1 тыс руб. </span><span id="max-min">3 000 000 </span>
			</div>

		</div>
		<p id="result"></p><div id="result_form"></div>
		</div>
	</form>
	</section>
	<footer>
	<div class="row no-gutters footer">
		<div class="col-12">
			<nav>
				<ul>
					<li><a href="">Кредитные карты</a></li>
					<li><a href="">Вклады</a></li>
					<li><a href="">Дебетовая карта</a></li>
					<li><a href="">Страхование</a></li>
					<li><a href="">Друзья</a></li>
					<li><a href="">Интернет-банк</a></li>
				</ul>
			</nav>
		</div>
	</div>
	</footer>
</div>
</body>
</html>

