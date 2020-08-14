<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <div class="container">
        <div class="row">
            <ul>
                <li>{{$detail->loadingNotes}}</li>
                <li>{{$detail->product->name}}</li>
                <li>{{$detail->loadingLocation->address}}</li>
                <li>{{$detail->driver->lastName}}</li>
                <li></li>
            </ul>

        </div>
    </div>
</body>

</html>