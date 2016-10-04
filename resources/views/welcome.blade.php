<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                  position: absolute;
              		right: 0px;
              		top: 0px;
              		background-image: url("images/camuflagem.png");
              		width: 100%;
              		padding: 15px;
                  border-bottom: 3px solid #B27A49;
            }
            .top-right > a {
					color: white;
			}

            .content {
                text-align: center;
            }

            .title {
              font-size: 84px;
              margin-top: -184px;
              font-weight: 300;
            }

            .links > a {
                color: #fcfeff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                float: right;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #image {
              float: left;
              margin-top: -342px;
              margin-left: 42%;
            }
        </style>

    </head>
    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                  Gerenciador de Cautelas
                </div>
            </div>
        </div>
        <span id="image"><img src="images/exercito.jpg"  height="300" width="169"alt="" /></span>
    </body>
</html>
