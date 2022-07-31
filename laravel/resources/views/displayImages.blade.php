<!DOCTYPE html>
    <head>
    <meta charset="UTF-8" >
    <title> Test </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
        @foreach ($image as $imag)
            <img src="{{ asset('uploads/categoryImages/'.$imag->image) }}" >
        @endforeach 

    </body>

</html> 