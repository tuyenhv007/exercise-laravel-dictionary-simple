<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dictionary English - Vietnamese</title>
</head>
<body>
<div>
    <h3>Dictionary English - Vietnamese</h3>
    <form action="/search" method="post">
        @csrf
        <label for="">English</label>
        <input type="text" name="keyword" placeholder="keyword">
        <br>
        <button type="submit">Dịch</button>
    </form>
</div>

</body>
</html>
