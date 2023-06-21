<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="/daftar/create" method="post">
        @csrf
        <div class="container py-5 w-25">
            <h2 class="text-center fw-bold mt-2">REGISTER</h2>
            <div class="form-outline mb-3 mt-2 form-control">
                <input type="text" name="name" class="form-control" placeholder="Nama" id="">
            </div>
            <div class="form-outline mb-3 mt-2 form-control">
                <input type="email" name="email" class="form-control" placeholder="Email" id="">
            </div>
            <div class="form-outline mb-3 form-control">
                <input type="password" name="password" id="form2Example2" class="form-control" placeholder="Password" />
            </div>
            <center><button class="mb-3 btn btn-primary"><input style="border: none" class="bg-transparent text-white" type="submit" value="Daftar"></button></center>
        </div>
    </form>
</body>
</html>
