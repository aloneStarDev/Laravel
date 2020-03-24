<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subscribe</title>
    <style>
        body {
            margin: 3rem 30rem 4rem;
            padding-top: 3rem;
        }

        div {
            background-color: forestgreen;
            padding: 1.2rem 2rem;
            text-align: center;
            border-radius: 6px;
        }

        a {
            color: white;
        }
    </style>
</head>
<body>
<div>
    <form action="/subscribe/payment/" method="post">
        @csrf
        <input type="hidden" name="month" value="1">
        <button type="submit">خرید اشتراک یک ماهه</button>
    </form>
</div>
<div>
    <form action="/subscribe/payment/" method="post">
        @csrf
        <input type="hidden" name="month" value="3">
        <button type="submit">خرید اشتراک سه ماهه</button>
    </form>
</div>
<div>
    <form action="/subscribe/payment/" method="post">
        @csrf
        <input type="hidden" name="month" value="6">
        <button type="submit">خرید اشتراک شش ماهه</button>
    </form>
</div>
<div>
    <form action="/subscribe/payment/" method="post">
        @csrf
        <input type="hidden" name="month" value="12">
        <button type="submit">خرید اشتراک یک ساله</button>
    </form>
</div>
</body>
</html>
{{--<div><a href="/subscribe/payment/1">خرید اشتراک یک ماهه</a></div>
    <div><a href="/subscribe/payment/2">خرید اشتراک دو ماهه</a></div>
    <div><a href="/subscribe/payment/3">خرید اشتراک سه ماهه</a></div>--}}
