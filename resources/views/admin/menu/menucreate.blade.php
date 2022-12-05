<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('menutypes.store')}}" method="post">
        @csrf
        <label >Menu Type:</label><br>
        <input input type="text" class="form-control"  name="name"><br><br>
        <button type="submit" class="col-md-12 btn btn-lg btn-primary text-center"> Submit </button>
    </form>
</body>
</html>
