@extends('layouts.app')

@section('title')Our rooms @endsection

@section('css')
    <link rel="stylesheet" href="/css/rooms-container.css">
    <link rel="stylesheet" href="/css/rooms-container-adaptive.css">
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="main-screen">
                <h1>
                    <img id="left" src="img/white_left.png" width="42">
                    Бронювання номерів
                    <img id="right" src="img/white_right.png" width="42">
                </h1>
                <form class="book-form" action="{{ route('search-room')}}">
                    <div class="dates">
                        <div>
                            <label for="arrival-date">Дата заїзду</label>
                            <input type="date" name="arrival-date" class="input">
                        </div>
                        <div>
                            <label for="departure-date">Дата виїзду</label>
                            <input type="date" name="departure-date" class="input">
                        </div>
                    </div>
                    <div class="search-guests">
                        <div>
                            <label for="guest-quantity">Кількість гостей</label>
                            <input type="text" name="guest-quantity" class="input">
                        </div>
                        <button class="submit"> Пошук </button>
                    </div>    
                </form>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="rooms">
                <h1>
                    <img id="left" src="img/white_left.png">
                    Номери
                    <img id="right" src="img/white_right.png">
                </h1>
                <div class="rooms-grid">
                    @foreach($rooms as $room)
                        <div class="room">
                            <div class="room-img">
                                <img src="img/rooms/{{ $room->image}}.png" alt="Чотирьохмісний Duplex">
                            </div>
                            <h3 class="room-title">
                                <a href="{{ route('room-info', $room->id) }}"> {{ $room->title }} </a>
                            </h3>
                            <div class="room-params">
                                <div class="room-person">
                                    <img src="img/room-person.png" alt="people">
                                    <p> {{ $room->guests }} </p>
                                </div>
                                <div class="room-area">
                                    <img src="img/room-area.png" alt="area">
                                    <p> {{$room->area}} м<sup>2</sup> </p>
                                </div>
                            </div>
                            <div class="room-price">
                                <h3> {{$room->price}}$ </h3>
                            </div>
                        </div>
                    @endforeach
                    <!-- <div class="room">
                        <div class="room-img">
                            <img src="img/rooms/junior_suite.png" alt="Чотирьохмісний Duplex">
                        </div>
                        <h3 class="room-title">
                            Чотирьохмісний <br> номер Duplex Suite
                        </h3>
                        <div class="room-params">
                            <div class="room-person">
                                <img src="img/room-person.png" alt="people">
                                <p> 4 </p>
                            </div>
                            <div class="room-area">
                                <img src="img/room-area.png" alt="area">
                                <p> 155 м<sup>2</sup> </p>
                            </div>
                        </div>
                        <div class="room-price">
                            <h3> 200$ </h3>
                        </div>
                    </div>

                    <div class="room">
                        <div class="room-img">
                            <img src="img/rooms/senior_suite.png" alt="Чотирьохмісний Duplex">
                        </div>
                        <h3 class="room-title">
                            Чотирьохмісний <br> номер Duplex Suite
                        </h3>
                        <div class="room-params">
                            <div class="room-person">
                                <img src="img/room-person.png" alt="people">
                                <p> 4 </p>
                            </div>
                            <div class="room-area">
                                <img src="img/room-area.png" alt="area">
                                <p> 155 м<sup>2</sup> </p>
                            </div>
                        </div>
                        <div class="room-price">
                            <h3> 200$ </h3>
                        </div>
                    </div>

                    <div class="room">
                        <div class="room-img">
                            <img src="img/rooms/family_room.png" alt="Чотирьохмісний Duplex">
                        </div>
                        <h3 class="room-title">
                            Чотирьохмісний <br> номер Duplex Suite
                        </h3>
                        <div class="room-params">
                            <div class="room-person">
                                <img src="img/room-person.png" alt="people">
                                <p> 4 </p>
                            </div>
                            <div class="room-area">
                                <img src="img/room-area.png" alt="area">
                                <p> 155 м<sup>2</sup> </p>
                            </div>
                        </div>
                        <div class="room-price">
                            <h3> 200$ </h3>
                        </div>
                    </div>

                    <div class="room">
                        <div class="room-img">
                            <img src="img/rooms/studio.png" alt="Чотирьохмісний Duplex">
                        </div>
                        <h3 class="room-title">
                            Чотирьохмісний <br> номер Duplex Suite
                        </h3>
                        <div class="room-params">
                            <div class="room-person">
                                <img src="img/room-person.png" alt="people">
                                <p> 4 </p>
                            </div>
                            <div class="room-area">
                                <img src="img/room-area.png" alt="area">
                                <p> 155 м<sup>2</sup> </p>
                            </div>
                        </div>
                        <div class="room-price">
                            <h3> 200$ </h3>
                        </div>
                    </div>

                    <div class="room">
                        <div class="room-img">
                            <img src="img/rooms/superior.png" alt="Чотирьохмісний Duplex">
                        </div>
                        <h3 class="room-title">
                            Чотирьохмісний <br> номер Duplex Suite
                        </h3>
                        <div class="room-params">
                            <div class="room-person">
                                <img src="img/room-person.png" alt="people">
                                <p> 4 </p>
                            </div>
                            <div class="room-area">
                                <img src="img/room-area.png" alt="area">
                                <p> 155 м<sup>2</sup> </p>
                            </div>
                        </div>
                        <div class="room-price">
                            <h3> 200$ </h3>
                        </div>
                    </div>

                    <div class="room">
                        <div class="room-img">
                            <img src="img/rooms/suite_mini.png" alt="Чотирьохмісний Duplex">
                        </div>
                        <h3 class="room-title">
                            Чотирьохмісний <br> номер Duplex Suite
                        </h3>
                        <div class="room-params">
                            <div class="room-person">
                                <img src="img/room-person.png" alt="people">
                                <p> 4 </p>
                            </div>
                            <div class="room-area">
                                <img src="img/room-area.png" alt="area">
                                <p> 155 м<sup>2</sup> </p>
                            </div>
                        </div>
                        <div class="room-price">
                            <h3> 200$ </h3>
                        </div>
                    </div>

                    <div class="room">
                        <div class="room-img">
                            <img src="img/rooms/apartment.png" alt="Чотирьохмісний Duplex">
                        </div>
                        <h3 class="room-title">
                            Чотирьохмісний <br> номер Duplex Suite
                        </h3>
                        <div class="room-params">
                            <div class="room-person">
                                <img src="img/room-person.png" alt="people">
                                <p> 4 </p>
                            </div>
                            <div class="room-area">
                                <img src="img/room-area.png" alt="area">
                                <p> 155 м<sup>2</sup> </p>
                            </div>
                        </div>
                        <div class="room-price">
                            <h3> 200$ </h3>
                        </div>
                    </div>

                    <div class="room">
                        <div class="room-img">
                            <img src="img/rooms/business_superior.png" alt="Чотирьохмісний Duplex">
                        </div>
                        <h3 class="room-title">
                            Чотирьохмісний <br> номер Duplex Suite
                        </h3>
                        <div class="room-params">
                            <div class="room-person">
                                <img src="img/room-person.png" alt="people">
                                <p> 4 </p>
                            </div>
                            <div class="room-area">
                                <img src="img/room-area.png" alt="area">
                                <p> 155 м<sup>2</sup> </p>
                            </div>
                        </div>
                        <div class="room-price">
                            <h3> 200$ </h3>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="arrow-up">
            <a href="#">
                <img src="img/Arrow_up.svg" alt="Up" width="76">
            </a>
        </div>
    </div>
@endsection