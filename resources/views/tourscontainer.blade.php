@extends('layouts.app')

@section('title')Our tours @endsection

@section('content')
	<section class="first_screen">
		<h1 class="name">
			<img src="img/Polygon_white.svg" alt="poligon">
			Тури
			<img src="img/Polygon_white.svg" alt="poligon" class="transform">
		</h1>
		<div class="date">
			<p class="first_text">Дата початку</p>
			<div class="input">
				<input type="date" name="date">
				<div class="search">
					<p>Пошук</p>
					<img src="img/Arrow_white.svg" alt="arrow">
				</div>
			</div>
		</div>
	</section>
	<section class="main_frame">
		<h1 class="zagolovok1">
			<img src="img/Polygon_white.svg" alt="poligon">
			Доступні пропозиції
			<img src="img/Polygon_white.svg" alt="poligon" class="transform">
		</h1>
		<div class="tour_image back1">
			<div class="plan">
				<p>Заплановано</p>
				<div class="inliner">
					<img src="img/Calendar.svg" alt="Calendar">
					<div class="dates">24 - 25 квітня</div>
				</div>
			</div>
			<div class="length">
				<p>Тривалість</p>
				<p>1 день</p>
			</div>
		</div>
		<div class="tour_text">
			<p class="zagolovok2">Екскурсія до озера Давозер</p>
			<p class="text">Влітку пейзажі озера Давозер чарівні в кращих швейцарських традиціях. Невелике дзеркало води оточене пасторальними картинками зелених схилів гір, хаотично розкиданими по ним будиночками і білої спіраллю ґрунтових доріг. До одного з берегів впритул підходить ліс. Ідеальне місце для відпочинку душею та єднанню з природою.</p>
		</div>
		<div class="buttons">
			<div class="more">
				<p>Детальніше</p>
				<img src="img/Arrow_container.svg" alt="arrow">
			</div>
			<div class="price">
				<p>Ціна 500$</p>
			</div>
		</div>
		<div class="tour_image back2">
			<div class="plan">
				<p>Заплановано</p>
				<div class="inliner">
					<img src="img/Calendar.svg" alt="Calendar">
					<div class="dates">4 - 6 березня</div>
				</div>
			</div>
			<div class="length">
				<p>Тривалість</p>
				<p>2 дні</p>
			</div>
		</div>
		<div class="tour_text">
			<p class="zagolovok2">Морозне золоте кільце</p>
			<p class="text">Хохванг - це гора в Плессурських Альпах, розташована між долинами Шанфігг і Преттігау в кантоні Граубюнден. Висотою 2534 метра над рівнем моря, це найвища вершина ланцюга, що лежить на захід від Дураннапасса. До його вершині веде кілька троп.</p>
		</div>
		<div class="buttons">
			<div class="more">
				<p>Детальніше</p>
				<img src="img/Arrow_container.svg" alt="arrow">
			</div>
			<div class="price">
				<p>Ціна 1075$</p>
			</div>
		</div>
		<div class="tour_image back3">
			<div class="plan">
				<p>Заплановано</p>
				<div class="inliner">
					<img src="img/Calendar.svg" alt="Calendar">
					<div class="dates">15 - 16 квітня</div>
				</div>
			</div>
			<div class="length">
				<p>Тривалість</p>
				<p>2 дні</p>
			</div>
		</div>
		<div class="tour_text">
			<p class="zagolovok2">Екскурсія до озера Лаго Б’янко</p>
			<p class="text">Лаго Б'янко (буквально "Біле озеро") розташовується в швейцарському кантоні Граубюнден між регіонами Поскьяво (Пушлав) і Берніна. Воно розташувалося на самому верху перевалу Гавія, на висоті близько 2620 м. над рівнем моря. Неземний колір води та магічна сила природи вразить вас з першої секунди. Розповідати немає сенсу, це потрібно побачити.</p>
		</div>
		<div class="buttons">
			<div class="more">
				<p>Детальніше</p>
				<img src="img/Arrow_container.svg" alt="arrow">
			</div>
			<div class="price">
				<p>Ціна 650$</p>
			</div>
		</div>
		<img src="img/Arrow_up.svg" alt="arrow_up">
	</section>
@endsection