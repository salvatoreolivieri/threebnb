<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/front/style.css')}}">

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500&display=swap" rel="stylesheet">

    <title>ThreeBnB | I migliori appartamenti, in tutto il mondo</title>
</head>
<body>
    <div id="app">

    </div>

    <script src="{{asset('js/frontend.js')}}"></script>
    <script>
        window.User = {!! Auth::User() !!}
        window.Id = {!! Auth::Id() !!}
    </script>
</body>
</html>
