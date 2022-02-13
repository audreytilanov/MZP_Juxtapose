<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <title>Admin Melali</title>
</head>
<body>
    <section id="login">
        <div id="form">
            <h1>LOGIN ADMIN MELALI</h1>
            <form action="{{ route('login.post') }}" method="post">
                @csrf
                <input type="text" name="name" id="input" placeholder="Username"><br>
                <input type="password" name="password" id="input" placeholder="Password"><br>
                <input type="submit" name="submit" id="submit">
            </form>
        </div>
    </section>
</body>
@include('sweetalert::alert')
</html>