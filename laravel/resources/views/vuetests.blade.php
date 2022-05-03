<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- csrf token to be able to send ajax requests with axios -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <title>Document</title>
</head>
<body>

    <!-- Utilizando um componente -->

    <div id="app">
    <example-component></example-component>

    <br><br>

        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2>Contact me</h2>
                    </div>
                    <div class="card-body">
                        <!--
                            Our component:
                        -->
                        <contact-form></contact-form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Incluindo Javascript -->
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>