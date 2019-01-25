<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Siswa</title>
</head>

<body>
    <div class="panel-body">
    Selamat Datang <b><?php echo $this->session->userdata("username") ?></b> di halaman Siswa
    </div>
    <div class="pull-right">
    <a href="<?php echo site_url('login/logout');?>">Keluar</a>
    </div>
</body>
</html>