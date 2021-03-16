<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
         <script src="{{asset('js/app.js')}}"></script>
    </head>
    <body >
        <div class="container">
          <div class="row">
            <div class="col">
              First in DOM, no order applied
              <img src="{{asset('imagenes/82367.png')}}" class="img-fluid" alt="...">
            </div>
            <div class="col order-5">
              Second in DOM, with a larger order
              <img src="{{asset('imagenes/82365.png')}}" class="img-fluid" alt="...">
            </div>
            <div class="col order-1">
              Third in DOM, with an order of 1
              <img src="{{asset('imagenes/82366.jpg')}}" class="img-fluid" alt="...">
            </div>
          </div>
        </div>

    </body>
</html>
