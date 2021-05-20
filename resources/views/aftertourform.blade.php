@extends('layouts.app')

@section('title')Form @endsection

@section('css')
    <link rel="stylesheet" href="/css/tourinfocss.css">
@endsection

@section('content')
{{dd($id)}}
<section class="main_frame">
	<h1 class="zagolovok1">
		<img src="img/Polygon_blue.svg" alt="poligon">
		Форма замовлення
		<img src="img/Polygon_blue.svg" alt="poligon" class="transform">
	</h1>	
    @include('inc.messages')
    <form action="{{ route('tour-form', $tour->id) }}" method="post">
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
					<select class="input" name="days">
						<option value="{{ $tour->duration }}">{{$tour->duration}} дні</option>
						<option value="{{ $tour->spec_duration }}">{{$tour->spec_duration}} днів</option>
					</select>
				</div>
				<div class="single_input">
					<p>Період</p>
					<input type="date" name="date" class="outline input">
				</div>
			</div>
			<div class="check_line">
				<p>Дитина до 6 років</p>
				<input type="checkbox" name="child" class="checkbox" value="1">
			</div>
			<input type="submit" name="submit" value="Замовити тур" class="button"> 
		</form>
	</section>
@endsection