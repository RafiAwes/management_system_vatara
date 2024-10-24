<!DOCTYPE html>
<html>
<head>
    <title>Notice</title>
</head>
<body>
    <h1>{{$mailData['title']}}</h1>
    <p>Dear {{$mailData['student_name']}}</p>
    <p>{{strip_tags($mailData['body'])}}</p>

    <p>Vatara Taekwondo Association.</p>

    <p>Thank you</p>
</body>
</html>
