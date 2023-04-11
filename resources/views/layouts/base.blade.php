<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ATL - это компания, которая специализируется на подборе профессиональных исполнителей для выполнения заказов любой сложности и нахождении заказчиков, которые нуждаются в этих услугах. Она предоставляет высококачественные услуги и использует современные технологии для удовлетворения потребностей своих клиентов.') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js"></script>
    <!--Styles-->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/min/dropzone.min.css">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <style>
        body{
            font-size: 16px;
            background-color: #F5F5F5;
            font-family: 'Raleway', sans-serif;
        }
        a{
            text-decoration: none;
        }
        li{
            list-style: none;
        }
        .wrapper{
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            width: 100%;
        }
        .header__row{
           margin-top:50px;
        }
        .header__row{
            display: flex;
            justify-content: space-between;
        }
        .nav-item{
            display: inline-block;
        }
        .header__title{
            font-style: normal;
            font-weight: 900;
            font-size: 30px;
            line-height: 35px;
            color: #99532E;
        }
        .navbar__nav-item a{
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 19px;
            color: #99532E;
            margin: 0px 25px 0px 25px;
        }
        .nav-item{
        padding: 10px;
        background: #F5F5F5;
        border-radius: 20px;
        }
        .nav-item a::before{
            content: url('');

        }
        .nav-item:hover{
            background-color: #E7D6BC;
        }
        /*---------------------------------*/
        .main{
            margin-top:80px;
            flex: 1 1 auto;
        }
        .main__fullscrean{
            display: flex;
            justify-content: space-between;
            text-align: center;
            align-items: center;
        }
        .fullscrean__tiitle{
            font-style: normal;
            font-weight: 500;
            font-size: 48px;
            line-height: 56px;
            color: #3D1D0C;
            text-align: right;
        }
        .fullscrean__text{
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            line-height: 21px;
            text-align: right;
            color: rgba(61, 29, 12, 0.7);
        }

        .fullscrean__info{
            display: flex;
            justify-content: flex-end;
            flex-direction: column;
            align-items: flex-end;
          text-align: end;
          margin-bottom: 260px;
        }
        .fullscrean__column{
            position: relative;
            display: flex;
            flex-wrap: wrap;
        }
        .buttons{
            padding: 20px 15px;
            width: 232px;
            height: 68px;
            border-color: #E7EFC8;
            border-radius: 30px;
            margin-top: 25px;
            box-shadow: 5px 5px 5px #00000021
        }

        .fullscrean__button a{
            color:#3D1D0C;
            text-align: center;
        }
        .border__text{
            padding: 10px 15px;
            gap: 10px;
            background: #FFFFFF;
            border-radius: 15px;
            box-shadow: 5px 5px 5px #00000021;
            width: 212px;
            height: 48px;
        }
        .border__text span{
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 26px;
            text-align: right;
            color: #000000;
        }
        .item__text-1 {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            position: absolute;
            left: 295px;
            top: 41px;
        }

        .fullscrean-item-1{
            margin-bottom: -100px;
        }
        .fullscrean-item-2{
            margin-left: 300px;
            margin-bottom: -100px;
            margin-right:100px;
        }
        .fullscrean-item-2 img{
            width: 300px;
            height: 300px;
            border-radius:520px;
        }
        .fullscrean-item-3{
            width: 300px;
        }
        .fullscrean-item-3 img{
            height: 300px;
            width: 320px;
            border-radius:520px;
        }
        .item__text-2{
            position: absolute;
            left: 578px;
            top: 322px;
        }
        .item__text-3{
            position: absolute;
            left: 290px;
            top: 654px;
        }
        /*-------------------------*/
        .about__us{
            margin-top:150px;
        }
        .about_us__title{
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .main__title{
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 500;
            font-size: 36px;
            line-height: 42px;
            text-align: center;
            color: #3D1D0C;

        }

        .about_us_row{
        display: flex;
        flex-wrap: wrap;
        }
        .card__body{
            text-align: center;
            max-width: 280px;
            max-height: 262px;
            margin: 30px 30px;
        }
        .card__img{
            margin-bottom: 25px;
        }
        .card__title h3{
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
            line-height: 19px;
            text-align: center;
            color: #3D1D0C;
        }

        .page__text{
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 19px;
            text-align: center;
            color: #3D1D0C;
        }
        /*-----------------*/
        .reviews{
            margin-top: 101px;
        }
        .reviews__body{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 50px;
        }

        .reviews__card{
            display: flex;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            align-items: center;
            position: relative;
        }
        .reviews__card img {
            width: 200px;
            height: 200px;
            border-radius:500px;
        }
        .reviews__border{
            position: absolute;
            left: 650px;
            top: 0px;

        }
        .role{
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 16px;
            text-align: center;
            color: #3D1D0C;
            }
            .star-rating {
            font-size: 0;
            }

            .star-rating__wrap {
            display: inline-block;
            font-size: 1rem;
            }

            .star-rating__wrap:after {
            content: "";
            display: table;
            clear: both;
            }

            .star-rating__ico {
            float: right;
            padding-left: 2px;
            cursor: pointer;
            color: #FFB300;
            }

            .star-rating__ico:last-child {
            padding-left: 0;
            }

            .star-rating__input {
            display: none;
            }

            .star-rating__ico:hover:before,
            .star-rating__ico:hover~.star-rating__ico:before,
            .star-rating__input:checked~.star-rating__ico:before {
            content: "\f005";
            }
            .reviews__stars{
                margin-top:25px;
            }
            .role{
                margin-top: 20px;
            }
            .role span{
                font-family: 'Raleway';
                font-style: normal;
                font-weight: 500;
                font-size: 14px;
                line-height: 16px;
                text-align: center;
                color: #3D1D0C;

            }
            .reviews__stars{
                margin-bottom: 30px;
            }
            .reviews__arrow-left , .reviews__arrow-right{
                cursor: pointer;
            }
            /*--------------------*/
            .contractor-or-customer__body{
                margin-top: 60px;
                display: flex;
                justify-content: space-between;
            }
            .contractor-or-customer__title{
                margin-top: 100px;
            }
            .contractor__body{
                max-width: 600px;
                max-height: 400px;
            }
            .contractor__body{
                margin-right: 50px;
            }
            .cardt__title{
                font-family: 'Raleway';
                font-style: normal;
                font-weight: 500;
                font-size: 26px;
                line-height: 31px;
                text-align: right;
                color: #3D1D0C;
            }
            .contractor__text{
                font-family: 'Raleway';
                font-style: normal;
                font-weight: 500;
                font-size: 16px;
                line-height: 19px;
                text-align: right;
            }
            .customer__title{
                text-align: left;
            }
            .contractor__title{
                text-align: right;
            }
            .customer__text{
                text-align: left;
            }
            .contractor__button  a, .customer__button a{
                color:#3D1D0C;
            }
            .contractor__button{
                margin-left: 350px;
            }
            .customer__button{
                margin-top: 180px;
            }

            /*-------------------*/
            footer{
                margin-top: 100px;
            }
            .footer__row{
                display: flex;
                justify-content: center;
            }

            .copirate{
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;

            }
            .copirate img{
                padding: 20px;
            }
            .copirate p{
                width: 68px;
                height: 19px;
                font-family: 'Raleway';
                font-style: normal;
                font-weight: 400;
                font-size: 16px;
                line-height: 19px;
                text-align: center;
                color: #99532E;
                display: flex;
                justify-content: center;
                align-items: center;
                align-items: center;
                margin-top: 10px;
            }
            .social__body, .social__row{
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
            }
            .vk img, .whatsapp img,.telelgram img{
                margin: 15px;
            }
    </style>
</head>
<body>
<div class="wrapper">
    @include('includes.header')
<main class="" id="app">
    @yield('content')
</main>
@include('includes.footer')
</div>
</body>
</html>
