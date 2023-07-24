<?php
require_once 'templates/config.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/login.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="assets/images/jumbotron.png" alt="">
                <div class="text">
                    <span class="text-1">Every new friend is a <br> new adventure</span>
                    <span class="text-2">Let's get connected</span>
                </div>
            </div>
            <div class="back">
                <img class="backImg" src="assets/images/jumbotron.png" alt="">
                <div class="text">
                    <span class="text-1">Complete miles of journey <br> with one step</span>
                    <span class="text-2">Let's get started</span>
                </div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>
                    <form action="#" method="post">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Masukkan Username" name="username" required autocomplete="current-username">
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Masukkan password" name="password" required autocomplete="current-password">
                            </div>
                            <div class="button input-box">
                                <input type="button" id="submit" value="Sumbit">
                            </div>
                            <!-- <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label>
                            </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // when button login clicked
        $("#submit").on('click', function() {
            // login ajax request to api
            let username = $("input[name=username]").val();
            let password = $("input[name=password]").val();
            $.ajax({
                url: '<?= api_login ?>login',
                type: 'POST',
                dataType: 'json',
                data: {
                    nama_user: username,
                    password: password
                },
                success: function(result) {
                    if (result['status']) {
                        // set session id_user,nama_user,alamat,jk,foto,no_telp
                        sessionStorage.setItem('id_user', result['data']['id_user']);
                        sessionStorage.setItem('nama_user', result['data']['nama_user']);
                        sessionStorage.setItem('alamat', result['data']['alamat']);
                        sessionStorage.setItem('jk', result['data']['jk']);
                        sessionStorage.setItem('foto', result['data']['foto']);
                        sessionStorage.setItem('no_telp', result['data']['no_telp']);

                        // redirect to dashboard
                        window.location.href = 'dashboard.php';
                    } else {
                        alert(result['message']);
                    }
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        })

    });
</script>