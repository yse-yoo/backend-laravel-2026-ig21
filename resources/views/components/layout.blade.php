<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/product/1">Product1</a>
    </header>
    <!-- 各ページのコンテンツを表示 -->
    {{ $slot }}

</body>

</html>