<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vue Js Page</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
        <script src="https://unpkg.com/vue-chartjs/dist/vue-chartjs.min.js"></script>
    </head>
    <body>

        <div id="app">
            <paper-component id="{!!$id!!}"></paper-component>
        </div>

        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
