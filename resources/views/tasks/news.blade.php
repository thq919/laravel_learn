<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Все новости</title>

    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            font-size: 16px;
            color: #333;
        }

        .news-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.3);
            margin: 20px;
            padding: 20px;
        }

        .news-card h1 {
            font-size: 32px;
            margin-top: 0;
        }

        .news-card h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .news-card p {
            font-size: 18px;
        }
    </style>
    
</head>

<body>

    @foreach ($news as $new)
    <div class="news-card">
        <h1>{{ $new->title }}</h1>
        <h3>{{ $new->my_description }}</h3>
        <p>{{ $new->body }}</p>
    </div>
    @endforeach

</body>
</html>