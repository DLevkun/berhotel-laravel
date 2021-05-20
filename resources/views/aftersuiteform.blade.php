@extends('layouts.app')

@section('title')Form @endsection

@section('css')
    <link rel="stylesheet" href="/css/roominfocss.css">
@endsection

@section('content')

<section class="main_frame">
	<h1 class="zagolovok1">
		<img src="img/Polygon_blue.svg" alt="poligon">
		Форма замовлення
		<img src="img/Polygon_blue.svg" alt="poligon" class="transform">
	</h1>	
    @include('inc.messages')
    <form action="{{ route('room-form') }}" method="post">
			@csrf
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
					<p>Телефон</p>
					<input type="text" name="phone" placeholder="Введіть телефон" class="input">
				</div>
				<div class="single_input">
					<p>Електронна адреса</p>
					<input type="text" name="mail" placeholder="Введіть e-mail" class="input">
				</div>
			</div>
			<p class="period">Період</p>
			<div class="special_row">
				<div class="single_input_inline">
					<p>з</p>
					<input type="date" name="date1" class="input_inline">
				</div>
				<div class="single_input_inline">
					<p>по</p>
					<input type="date" name="date2" class="input_inline">
				</div>
			</div>
			<div class="special_row">
				<div class="check_line">
					<p>Спортзал</p>
					<input type="checkbox" name="sport" class="checkbox" value="0">
				</div>
				<div class="check_line">
					<p>Сніданки</p>
					<input type="checkbox" name="food" class="checkbox" value="0">
				</div>
			</div>
			<div class="special_row">
				<div class="check_line">
					<p>Сауна та СПА</p>
					<input type="checkbox" name="spa" class="checkbox" value="0">
				</div>
				<div class="check_line">
					<p>Басейн</p>
					<input type="checkbox" name="pool" class="checkbox" value="0">
				</div>
			</div>

			<input type="submit" name="submit" value="Забронювати номер" class="button"> 
		</form>
	</section>
@endsection