<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>First Laravel</title>
</head>

<body>
    <header>
        <navbar>


            <a href=" {{ route('home') }} "> HOME </a>
            <a href=" {{ route('about_us') }} "> ABOUT US </a>
            <a href=" {{ route('contacts') }} "> CONTACTS </a>




        </navbar>
    </header>
    <main>
        <div class="container">
            <h1>Hello World</h1>
            <h2>Welcome {{ $user['name'] }} {{ $user['surname'] }} </h2>
            <h3>You are an {{ $user['role'] }} </h3>

            @if ($user['role'] === 'admin')
                <h4>As an Admin you might change the page content</h4>
            @elseif($user['role'] === 'user')
                <h4>You are in read-only-mode</h4>
            @endif
        </div>
    </main>
</body>

</html>
