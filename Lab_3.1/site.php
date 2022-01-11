<?
 include 'conn.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link href="css.css" rel="stylesheet">

    <title>Анализ крови на антитела IgM и IgG к коронавирусу (SARS-CoV-2) методом ИХГА</title>
  </head>
  <body>
	
	<nav class="py-2 bg-light border-bottom">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
        <li class="nav-item"><a href="#" class="nav-link link-dark px-2 active" aria-current="page">Волгоград</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-dark px-2" style="color:#FF0000; text-decoration:none">
		<img src="image/nav.png" style="width:7%" class="img-fluid">
		Адреса медицинских офисов</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-dark px-2">
		<img src="image/phone.png" style="width:13%" class="img-fluid">
		8 8442 68 48 36</a></li>
      </ul>
      <ul class="nav">
        <li class="nav-item"><a href="#" class="nav-link link-dark px-2">
		<img src="image/loupe.png" style="width:11%" class="img-fluid">
		Поиск анализов</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-dark px-2" style="color:#FF0000; text-decoration:none">
		<img src="image/res.png" style="width:7%" class="img-fluid">
		<b>Результаты анализов</b></a></li>
		<li class="nav-item"><a href="#" class="nav-link link-dark px-2">
		<img src="image/pers.png" style="width:30%" class="img-fluid">
		Вход</a></li>
		<li class="nav-item"><a href="#" class="nav-link link-dark px-2">
		<img src="image/basket.png" style="width:22%" class="img-fluid">
		Корзина</a></li>
      </ul>
    </div>
  </nav>
  <header class="py-3 mb-4 border-bottom">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
        <ul class="nav">
		<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="#" style="color:#000000; font-size: 20px; text-decoration:none">
			<img src="image/logo.png" style="width:90%" class="img-fluid">
			<!--<b>KDL</b>-->
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#" style="color:#FF0000; text-decoration:none"><b>ТЕСТЫ НА COVID-19</b></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#" style="color:#FF0000; text-decoration:none"><b>АНАЛИЗЫ НА ДОМУ</b></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" style="color:#3F1652" href="#">АНАЛИЗЫ И ЦЕНЫ</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" style="color:#3F1652" href="#">АКЦИИ</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" style="color:#3F1652" href="#">ОБРАЩЕНИЯ ПАЦИЕНТА</a>
		</li>
	</ul>
      </ul>
      <ul class="nav">
        
      </ul>
    </div>
  </header>
	
	
<div class="content">
	
	<div class="container">
		<p><b>Поиск клиентов:</b></p>
		<form>	
			<input class="q-input" type="text" name="q" placeholder="id... ">
			<input class="q-input" type="text" name="q" placeholder="Имя...">
			<input class="q-input" type="number" name="q" placeholder="Фамилия...">
			<button type="button" class="btn btn-primary search-btn query-button">Поиск🔍</button>
		</form>
	</div>
	
	
	<div class="row">
		<div class="col-6">
			<div class="card-fluid" >
				<img src="image/clients.png" style="width:10%" class="card-img-top">
				<div class="container">
					<?
					include 'query.php';
					echo '<table class="table">';
						echo '<tr>';
							echo '<td>' . '<b>№</b>' . '</td>';
							echo '<td>' . '<b>Имя</b>' . '</td>';
							echo '<td>' . '<b>Фамилия</b>' . '</td>';
							echo '<td>' . '<b>Телефон</b>' . '</td>';
							echo '</tr>';
						foreach($ar_result as $value){
							echo '<tr>';
							echo '<td>' . $value['id'] . '</td>';
							echo '<td>' . $value['first_name'] . '</td>';
							echo '<td>' . $value['last_name'] . '</td>';
							echo '<td>' . $value['phone'] . '</td>';
							echo '</tr>';
						}
					echo '</table>';
					?>	
				</div>
			</div>
		</div>
	</div>
	
	
</div>	

  <footer>
	<hr/ width="100%">
	<div class="row">
		<div class="col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2"><!--тут было 2-->
			<img src="image/logo.png" style="width:50%" class="img-fluid">
		</div>
		<div class="col-6 col-sm-6 col-md-8 col-lg-10 col-xl-10" align="right">
			<img src="image/vk.png" style="width:5%" class="img-fluid">
			<img src="image/facebook.png" style="width:5%" class="img-fluid">
			<img src="image/inst.png" style="width:5%" class="img-fluid">
			<img src="image/odnocl.png" style="width:5%" class="img-fluid">
		</div>
	</div>

    <hr/ width="100%">
	<div class="row">
		<div class="col-12 col-sm-6 col-md-4 col-lg-2 col-xl-2"><!--тут было 2-->
			<h5 style="color:#3F1652">Пациентам</h5><br>
			<p>Анализы и цены</p>
			<p>Анализы на дому</p>
			<p>После COVID-19</p>
			<p>Дородовая диагностика</p>
			<p>CHECK-UP программы</p>
			<p>Профилактика заболеваний от 1500р</p>
			<p>КХЛ. Готов к спорту!</p>
			<p>Здоровье щитовидной железы</p>
			<p>Бесконтактный анализ на COVID-19</p>
			<p>Жизнь без аллергии</p>
			<p>Часто задаваемые вопросы</p>
			<p>Карта здоровья</p>
			<p>Корпоративная карта здоровья</p>
			<p>Блог о здоровье</p>
		</div>
		<div class="col-12 col-sm-6 col-md-4 col-lg-2 col-xl-2"><!--тут было 2-->
			<h5 style="color:#3F1652">Врачам</h5><br>
			<p>Сотрудничество</p>
			<p>Анализы и цены</p>
			<p>Корпоративный портал</p>
		</div>
		<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3"><!--тут было 3-->
			<h5 style="color:#3F1652">Организациям</h5><br>
			<p>Частным медицинским центрам</p>
			<p>Государственным заказчикам</p>
			<p>Медицинский образовательный центр</p>
		</div>
		<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3"><!--тут было 3-->
			<h5 style="color:#3F1652">О нас</h5><br>
			<p>О компании</p>
			<p>Партнеры-медицинские центры</p>
			<p>Нормативные документы</p>
			<p>Вакансии</p>
			<p>Оборудование и оснащение</p>
			<p>Новости</p>
			<p>Партнерские программы</p>
			<p>Карта сайта</p>
		</div>
		<div class="col-12 col-sm-6 col-md-6 col-lg-2 col-xl-2"><!--тут было 2-->
			<h5 style="color:#3F1652">Контакты</h5><br>
			<p>Москва, ул. Енисейская, 37 стр. 1</p>
			<p>8 8442 59 95 00</p>
			<p><u>Связаться с нами</u></p>
			<p><u>Адреса медицинских офисов</u></p>
		</div>
	</div>
	<br><br>
	<div class="row">
		<p>© Группа компаний KDL. Все права защищены и охраняются законом.</p>
		<p>Копирование и публичное воспроизведение материалов и оформления 
		сайта допускается только с письменного разрешения правообладателя. </p>
	</div>
	<br>
  </footer>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
