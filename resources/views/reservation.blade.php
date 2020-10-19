@extends('layouts.master')

@inject('treatmentService', 'App\Services\TreatmentService')

@section('content')

    <head>

        <title>Reserveren</title>
        <link rel="stylesheet" href="css/style.css">
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
    </head>

    <body>


    <div class="container-reservation rounded mt-20">
        <div class="container-time ">
            <h2 class="heading mt-16">Open op:</h2>
            <h3 class="heading-days">Maandag - Vrijdag</h3>
            <p>10:00 - 16:00 </p>


            <h3 class="heading-days">Zatedag & zondag</h3>
            <p>11:00 - 17:00</p>


            <hr class="mt-8">

            <h4 class="heading-phone mt-5">Telefoon: 06 - 12345678</h4>
        </div>

        <div class="container-form">
            <form method="POST" action="{{ route('contact.post') }}">
                @csrf

                <h1 class="heading heading-yellow">Reservation Online</h1>

                <div class="form-field">
                    <label>Full name:</label>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter your name" required>
                </div>
                @error('name')
                <p>{{ $message }}</p>
                @enderror


                <div class="form-field">
                    <label>Email:</label>
                    <input type="Email" name="email" value="{{ old('email') }}" placeholder="Enter your Email" required>
                </div>
                @error('email')
                <p>{{ $message }}</p>
                @enderror


                <div class="form-field">
                    <label>Datum</label>
                    <input type="date" name="date" value="{{ old('date') }}" placeholder="" required>
                </div>
                @error('date')
                <p>{{ $message }}</p>
                @enderror


                <div class="form-field">
                    <label>Tijd</label>
                    <input type="time" name="time" value="{{ old('time') }}" placeholder="" required>
                </div>
                @error('time')
                <p>{{ $message }}</p>
                @enderror

                <input type="submit" value="send" class="btn">
            </form>
        </div>
    </div>


    </body>


    <style>
        body {
            font-family: 'Raleway', sans-serif;
            font-weight: 400;
            color: #555555;
            letter-spacing: 1px;

        }

        .container-reservation {
            background-color:;

            box-shadow: 10px 15px 20px rgba(0, 0, 0, .1);
            display: grid;
            grid-template-columns: 40% 60%;
        }

        .container-time {
            background-color: white;
            padding: 50px;
            outline: 3px dashed #998100;
            outline-offset: -30px;
            text-align: center;
        }


        .heading {
            font-size: 35px;
            text-transform: uppercase;
        }

        .heading-days {
            color: #998100;
            font-size: 30px;
            text-align: center;

        }

        .heading-phone {
            font-size: 20px;
        }


        .container-form {
            padding: 20px 0;
            margin: 0 auto;
            color: #000;
        }

        form {
            display: grid;
            grid-row-gap: 20px;
        }

        form p {
            font-weight: 600;
        }

        .form-field {
            display: flex;
            justify-content: space-between;
        }

        input, select {
            padding: 10px 15px;
        }


        .btn {
            background-color: rgba(0, 0, 0, .95);
            color: #fff;
            padding: 10px 20px;
            border: none;
            font-size: 18px;
            border-radius: 100px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            -ms-border-radius: 100px;
            -o-border-radius: 100px;
            box-shadow: 7px 10px 12px rgba(0, 0, 0, .1);
            cursor: pointer;
            transition: all .3s;
            -webkit-transition: all .3s;
            -moz-transition: all .3s;
            -ms-transition: all .3s;
            -o-transition: all .3s;
        }

        .btn:hover {
            transform: scale(1.03);
            -webkit-transform: scale(1.03);
            -moz-transform: scale(1.03);
            -ms-transform: scale(1.03);
            -o-transform: scale(1.03);
            box-shadow: 10px 12px 15px rgba(0, 0, 0, .3);
        }


    </style>


@endsection
