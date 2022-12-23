<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div>
        <nav>
            <ul>
                <li><a href="{{ route('main.home') }}">Main</a></li>
                <li><a href="{{ route('post.index') }}">Posts</a></li>
                <li><a href="{{ route('about.index') }}">About</a></li>
                <li><a href="{{ route('contact.index') }}">Contacts</a></li>
            </ul>
        </nav>
    </div>
    @yield('content')
</body>

</html>
