<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Besteloverzicht</h1>
    <h4>Bestelnummer {{ $purchase->id }}</h4>
    <ul>
        @foreach( $purchase->supplies as $supply )
            <li> {{ $supply->name }} </li>
        @endforeach
    </ul>
</body>
</html>
