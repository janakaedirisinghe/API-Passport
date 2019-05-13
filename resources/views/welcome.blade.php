<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API service</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->
        <style>

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>


    </head>
    <body>
        <div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="jumbotron" style="text-align: center">
            <h1 class="display-4"  >Product & Reviews API</h1><br>
            <p class="lead" >A free API for generating products details for test</p>
            <br><br><br><br>
            <div class="row" style="text-align: center">
                <div class="col-md-4" >
                    <h3 >Fake Data</h3>
                    No more tedious sample data creation,<br>we've got it covered.

                </div>
                <div class="col-md-4" >
                    <h3>Real Responses</h3>
                    Develop with real response codes GET,UPDATE <br>POST & DELETE supported.
                </div>
                <div class="col-md-4" >
                    <h3>Always-On</h3>
                    24/7 free access in your develepmont. <br>Lets Go.
                </div>
            </div>
        </div>
        <br>
<div class="container">

    <div class="row">
        <div class="col-md-6" style="text-align: center;">
            <h3 >DELETE and UPDATE your data using access token</h3>
            <br>
<pre style="text-align: left">
    Content-Type: application/json
    Accept: application/json
    Authorization: Bearer {your_access_token_here}
</pre>
        </div>
        <div class="col-md-6" style="text-align: center">
            <h3 >Genarate Token manually</h3>
            <br>
            <pre style="text-align: left">
                POST /oauth/token? HTTP/1.1
                Host:
                Accept: application/json
                Content-Type: application/json
                cache-control:


                {
                    "grant_type": "password",
                    "client_id": "{client id}",
                    "client_secret" : {client_secret},
                    "username":"{your user email}",
                    "password":"{your password}"

                }
            </pre>

        </div>
    </div>
    <br>
    <hr>


        <h3>All Routes</h3>
        <br>
    <div class="row" style="align-items: center">
        <pre>
        | POST      | api/products                            | insert products | authentication is required
        | GET|HEAD  | api/products                            | get all products
        | GET|HEAD  | api/products/{product}                  | get single product
        | DELETE    | api/products/{product}                  | delete single product | authentication is required
        | PUT|PATCH | api/products/{product}                  | update your single product | authentication is required
        | POST      | api/products/{product}/reviews          | post review belong to product | authentication is required
        | GET|HEAD  | api/products/{product}/reviews          | get product reviews
        | DELETE    | api/products/{product}/reviews/{review} | delete single review | authentication is required
        | PUT|PATCH | api/products/{product}/reviews/{review} | update your single review | authentication is required

        </pre>
    </div>

    <hr>


    <br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>How to use?</h3>
            <p>You can use AJAX to call the Users Generator API and will receive a generated users in return. </p>
            <mark style="background-color: #bcc0c2;color: white;" >https://randomusersapi.000webhostapp.com/api </mark>
            <pre style="border-left-width: 5px;border-left-style: solid;border-left-color: #bcc0c2">

    $.ajax({
        url: 'https://randomusersapi.000webhostapp.com/api',
        dataType: 'json',
        success: function(data){
        console.log(data);
        }
    });
 </pre>
            <br>
            <h3>Result</h3>
            <p>The application will provide you with a object and apply to your application. </p>
            <pre style="border-left-width: 5px;border-left-style: solid;border-left-color:#bcc0c2">
 {
    "data": [
        {
            "name": "eum",
            "price": 809,
            "rating": 3,
            "href": {
                "link": "http://localhost:8000/api/products/1"
            }
        },
        {
            "name": "repellat",
            "price": 274,
            "rating": 1.71,
            "href": {
                "link": "http://localhost:8000/api/products/2"
            }
        },
        {
            "name": "updated",
            "price": 700,
            "rating": 2.25,
            "href": {
                "link": "http://localhost:8000/api/products/3"
            }
        },
        {
            "name": "est",
            "price": 536,
            "rating": 0.75,
            "href": {
                "link": "http://localhost:8000/api/products/5"
            }
        },
        {
            "name": "dolor",
            "price": 515,
            "rating": 2,
            "href": {
                "link": "http://localhost:8000/api/products/6"
            }
        }
    ],
    "links": {
        "first": "http://localhost:8000/api/products?page=1",
        "last": "http://localhost:8000/api/products?page=10",
        "prev": null,
        "next": "http://localhost:8000/api/products?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 10,
        "path": "http://localhost:8000/api/products",
        "per_page": 5,
        "to": 5,
        "total": 48
    }
}

 </pre>
            <br>

            <br>


        </div>
        <div class="col-md-3"></div>
    </div>
</div>






    </body>
</html>
