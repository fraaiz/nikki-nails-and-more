@extends('layouts.master')

@inject('treatmentService', 'App\Services\TreatmentService')

@section('content')

<div class="pb-64 pt-12 text-center text-black text-lg">
    <p>Heeft u hulp nodig of komt u er niet uit? neem gerust contact met ons op via het onderstaande formulier.<br>
        Wij streven ernaan om zo spoedig mogelijk hierop te reageren. </p>
</div>
<div class="py-40"></div>

<div class="contact-form">
    <h1>Contact us</h1>
    <div class="txtb">
        <label>Full name:</label>
        <input type="text" name="" value="" placeholder="Enter your name">
    </div>

    <div class="txtb">
        <label>Email:</label>
        <input type="Email" name="" value="" placeholder="Enter your Email">
    </div>

    <div class="txtb">
        <label>Telefoonnummer</label>
        <input type="text" name="" value="" placeholder="Enter your Telefoonnummer">
    </div>

    <div class="txtb">
        <label>Message:</label>
        <textarea></textarea>
    </div>
    <a class="btn">send</a>

</div>



</body>



    <style>
        body{
            margin-top: -30px;
            padding: 0;
            background: url(bg.jfif);
            background-size: cover;
        }
        .contact-form{
            width: 85%;
            max-width: 600px;
            background: #f1f1f1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 30px 40px;
            box-sizing: border-box;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 0 20px #000000b3;
            font-family: "Montserrat",sans-serif;
        }
        .contact-form h1{
            margin-top: 0;
            font-weight: 200;
        }
        .txtb{
            border:1px solid gray;
            margin: 8px 0;
            padding: 12px 18px;
            border-radius: 8px;
        }
        .txtb label{
            display: block;
            text-align: left;
            color: #333;
            text-transform: uppercase;
            font-size: 14px;
        }
        .txtb input,.txtb textarea{
            width: 100%;
            border: none;
            background: none;
            outline: none;
            font-size: 18px;
            margin-top: 6px;
        }
        .btn{
            display: inline-block;
            background: #b6468c;
            padding: 14px 0;
            color: white;
            text-transform: uppercase;
            cursor: pointer;
            margin-top: 8px;
            width: 100%;
        }

    </style>
@endsection



