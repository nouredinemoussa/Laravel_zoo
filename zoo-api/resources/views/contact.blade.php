<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{__('pages.home.h1')}}</h1>
    <a href="{{ route('language-switcher', ['lang' => 'fr']) }}">Français</a>
<a href="{{ route('language-switcher', ['lang' => 'en']) }}">English</a>

   
</body>
</html>