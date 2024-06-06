<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <h1 class="m-0">Chi tiết: {{ $user['name'] }}</h1>


    <table class="table table-striped">
        <thead>
            <tr>
                <th>Trường</th>
                <th>Gía trị</th>
               
            </tr>
        </thead>
        <tbody>

            @foreach ($user as $f => $value)
                <tr>
                    <td>{{$f}}</td>
                    <td>{{$value}}</td>
                </tr>
            @endforeach

        </tbody>
    </table>


</body>

</html>
