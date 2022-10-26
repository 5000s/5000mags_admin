<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Module</title>
</head>
<body>
<form action="{{url('moduledata/edit')}}" method="post">
        <textarea name="moduledata" style="width: 800px; height: 600px;">{{$moduledata}}</textarea>
    <button type="submit"> summit</button>
</form>


<form action="{{url('moduledata/save')}}" method="post">
    <textarea name="config" style="width: 800px; height: 600px;">{{$config}}</textarea>
    <button type="submit"> save</button>
</form>
</body>
</html>
