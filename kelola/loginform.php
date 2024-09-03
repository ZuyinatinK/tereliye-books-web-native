<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/stylelogin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="wadah w3-container">
    <!-- bagian header -->
    <div class="w3-container w3-red w3-text-sand w3-border-top w3-border-left
    w3-border-right w3-border-red">
        <h4 style="font-size: 14px; text-align: center">Kelola Konten</h4>
    </div>
    <!-- bagian form -->
    <div style="font-size: 12px;" class="w3-container w3-padding w3-border-right 
    w3-border-left w3-border-red">
        <form id="formlogin" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="w3-input
            w3-border w3-margin-bottom username">

            <label for="pass">Password</label>
            <input type="password" id="pass" name="pass" class="w3-input
            w3-border w3-margin-bottom pass">
        </form>
    </div>
    <!-- bagian tombol -->
    <div style="font-size: 12px;" class="w3-container w3-border-left w3-border-right
    w3-border-bottom w3-border-red w3-light-red w3-padding">
        <button type="button" id="tombollogin" class="w3-button w3-green
        w3-text-sand w3-block tombollogin">Login</button>
        <span class="w3-right">
        
        </span>
    </div>
    <a style="font-size: 12px;" class="w3-container w3-light-red w3-padding" href="http://localhost/Tugas2_blogprogramming/weblayout2.php">[Kembali ke Home]</a>
    </div>
</body>
<script>
    $(document).ready(function(){
        $('#tombollogin').click(function(){
            var data_login = $('#formlogin').serialize();
            $.ajax({
                type: 'POST',
                url: 'loginaksi.php',
                data: data_login,
                cache: false,
                success: function(response){
                    if(response === "berhasil") {
                        window.location = 'kategorikelola.php'
                    }
                    else{
                        window.alert('Username atau Password Anda Salah.');
                    }
                }
            });
        });
    });
</script>
</html>