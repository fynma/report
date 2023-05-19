<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>
<body>
    <div class="container">
        <div class="con">
            <div class="img">
                <img src="image/sign-new.png" alt="">
            </div>
            <div class="form">
                <h2>Login Here !</h2>
                @csrf
                <form action="{{ route ('login')}}" method="post">
                        <label for="username">Username</label>
                        <input type="text" placeholder="Username" name="username"  class="input-user" required>

                        <label for="password">Password</label>
                        <input type="password" placeholder="Password" name="password" class="input-pass" required>
                    <button type="submit" name="submit" >Log in</button>
                </form>
            </div>
        </div>