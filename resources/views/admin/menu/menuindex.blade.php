<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
          <th>Company</th>
          <th>Action</th>
        </tr>
        @foreach($menutypes as $menutype)
            <tr>
                <td>{{$menutype['menu_name']}}</td>
                <td><a class="btn btn-primary" href="#">Edit</a></td>
                <td><a class="btn btn-danger text-white">Delete</a></td>
            </tr>
        @endforeach

      </table>
</body>
</html>
