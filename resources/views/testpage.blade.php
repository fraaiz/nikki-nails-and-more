@extends('layouts.master')


@section('content')

    <head>

        <title>Reserveren</title>
        <link rel="stylesheet" href="css/style.css">
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
    </head>

    <div class="navbar">
        <div class="dropdown">
            <button class="dropbtn">Menu</button>

            <div class="dropdown-content">
                <a href="/">Home</a>
                <a href="/treatments">Behandelingen</a>
                <a href="/pricelist">Prijslijst</a>
                <a href="/reservation">Reserveren</a>
                <a href="/about">About</a>
                <a href="/contact">Contact</a>
            </div>
        </div>
    </div>

    <div class="topnav" id="myTopnav">
        <a href="#home" class="active">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>


    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>









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
            <form action="#">
                <h2 class="heading heading-yellow">Reservation Online</h2>

                <div class="form-field">
                    <p>Je naam</p>
                    <input type="text" placeholder="Je naam">
                </div>
                <div class="form-field">
                    <p>Email adres</p>
                    <input type="email" placeholder="Je email">
                </div>
                <div class="form-field">
                    <p>Datum</p>
                    <input type="date">
                </div>
                <div class="form-field">
                    <p>Tijd</p>
                    <input type="time">
                </div>

                <button class="btn">Submit</button>
            </form>
        </div>
    </div>


    </body>


    <style>
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: pink;
            color: white;
        }

        .topnav .icon {
            display: none;
        }

        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {display: none;}
            .topnav a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {position: relative;}
            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }











        /* Navbar container */
        .navbar {
            width: 70px;
            overflow: hidden;
            background-color: #333;

        }

        /* Links inside the navbar */
        .navbar a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 14px;
            text-decoration: none;
        }

        /* The dropdown container */
        .dropdown {
            float: left;
            overflow: hidden;
        }

        /* Dropdown button */
        .dropdown .dropbtn {
            font-size: 16px;
            color: white;
            padding: 14px 14px;
            background-color: crimson;
            font-family: inherit; /* Important for vertical align on mobile phones */
            margin: 0; /* Important for vertical align on mobile phones */
        }

        /* Add a red background color to navbar links on hover */
        .navbar a:hover, .dropdown:hover .dropbtn {
            background-color: dimgrey;
        }

        /* Dropdown content (hidden by default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        /* Add a grey background color to dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #ddd;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }


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
