@extends('layouts.app')

@section('title')TourInfo @endsection

@section('content')

	<section class="first_screen">
		<h1 class="name">
			<img src="img/Polygon_white.svg" alt="poligon">
			Морозне золоте кільце
			<img src="img/Polygon_white.svg" alt="poligon" class="transform">
		</h1>		
		<div class="input_1st_screen">
			<div class="detail">
				<p>Детальніше</p>
				<img src="img/Arrow_white.svg" alt="arrow">
			</div>
			<div class="book">
				<p>Замовити</p>
				<img src="img/Arrow_container.svg" alt="arrow">
			</div>
		</div>
	</section>
	<section class="main_frame">
		<h1 class="zagolovok1" id="special">
			<img src="img/Polygon_white.svg" alt="poligon">
			Трошки про тур
			<img src="img/Polygon_white.svg" alt="poligon" class="transform">
		</h1>		
		<div class="shortinfo">
			<div class="text">
				<p class="simple_text">Найпопулярній тур, що пропонується нашим готелем. Ви матимете змогу побачити життя деяких містечок, а завершиться поїздка відвідуванням найбільш живописної вершини могутніх Альп.</p>
				<div class="mark">
					<p>Гід:</p>
					<img src="img/Stars.png" alt="Mark" class="stars">
				</div>
				<div class="mark">
					<p>Тур:</p>
					<img src="img/Stars.png" alt="Mark" class="stars">
				</div>
			</div>
			<img src="img/Short_info.png" alt="Mountains" class="first_image">
		</div>
		<div class="mark_adapt">
			<p>Гід:</p>
			<img src="img/Stars.png" alt="Mark" class="stars">
		</div>
		<div class="mark_adapt">
			<p>Тур:</p>
			<img src="img/Stars.png" alt="Mark" class="stars">
		</div>

		<div class="inline-top">
			<p>ГРАУБЮНДЕН</p><p>ЗАЙС</p>
		</div>
		<img src="img/Vector.png" alt="Arrow" class="arrow">
		<div class="inline-bottom">
			<p>УНТЕРВАЦ</p><p>ГОРА ХОХВАНГ</p>
		</div>

		<div class="characteristics">
			<div class="rect1">
				<div class="content_rect">
			    	<p class="rect_zag">ТРАНСПОРТ</p>
			    	<img src="img/Bus.svg" alt="person" class="img1">
			    	<p class="rect_text">Пересування групи до комуни Зайс здійснюється автобусом. До гори Хохванг дістаємося поїздом. У ціну туру вже включено вартість дороги. Мінімальна необхідна кількість людей - 8.</p>
			  	</div>
			</div>
			<div class="rect2">
				<div class="content_rect">
			    	<p class="rect_zag">МОВА</p>
			    	<img src="img/Language.svg" alt="person" class="img2">
			    	<p class="rect_text verticalstep">Екскурсії доступні українською, англійською та німецькою мовами</p>
			  	</div>
			</div>
			<div class="rect1">
				<div class="content_rect">
			    	<p class="rect_zag">ТРИВАЛІСТЬ</p>
			    	<img src="img/Calendar.svg" alt="person" class="calendar">
			    	<p class="rect_text">Тривалість туру - 2 дні. Наявні спеціальні пропозиції, що передбачають довше перебування на деяких локаціях. У цьому випадку до туру додаються функції, які Ви можете уточнити при замовленні туру. </p>
			  	</div>
			</div>
		</div>
		<h1 class="zagolovok1" id="special">
			<img src="img/Dollar.svg" alt="Dollar" class="dollar" id="top">
			Вартість туру
		</h1>
		<div class="blue_line">
			<p>2 денна поїздка - 450$</p>
			<img src="img/Arrow_white.svg" alt="Arrow">
		</div>
		<div class="white_line">
			<p>Спеціальна пропозиція - 700$</p>
			<img src="img/Arrow_container.svg" alt="Arrow">
		</div>
		<h1 class="zagolovok1">
			<img src="img/Polygon_blue.svg" alt="poligon">
			Форма замовлення
			<img src="img/Polygon_blue.svg" alt="poligon" class="transform">
		</h1>	 
		<form action="">
			<div class="row">
				<div class="single_input">
					<p>Ім’я</p>
					<input type="text" name="name" placeholder="Введіть ім'я" class="input">
				</div>
				<div class="single_input">
					<p>Прізвище</p>
					<input type="text" name="surname" placeholder="Введіть прізвище" class="input">
				</div>
			</div>
			<div class="row">
				<div class="single_input">
					<p>Електронна адреса</p>
					<input type="text" name="mail" placeholder="Введіть e-mail" class="input">
				</div>
				<div class="single_input">
					<p>Телефон</p>
					<input type="text" name="phone" placeholder="Введіть телефон" class="input">
				</div>
			</div>
			<div class="row">
				<div class="single_input">
					<p>Кількість днів</p>
					<select class="input">
						<option>2 дні</option>
						<option>6 днів</option>
					</select>
				</div>
				<div class="single_input">
					<p>Період</p>
					<input type="date" name="date" class="outline input">
				</div>
			</div>
			<div class="check_line">
				<p>Дитина до 6 років</p>
				<input type="checkbox" name="child" class="checkbox">
			</div>
			<input type="submit" name="submit" value="Замовити тур" class="button"> 
		</form>
	</section>
@endsection