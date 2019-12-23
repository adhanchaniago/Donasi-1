<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donasi</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}"> 
    <!-- <link rel="stylesheet" href="css/style2.css"> -->
    <!-- <link rel="stylesheet" href="css/style3.css"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
</head>
<body>

    @yield('content')
    <script>
    $(document).ready(function(){

        // Format mata uang.
        $( '.uang' ).mask('0.000.000.000', {reverse: true});
        $( '.no_hp').mask('0000−0000−00000');

    });
    </script>
</body>
</html>