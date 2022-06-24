<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/mystyle.css">
    <!-- Bootstrap Icons -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title><?= $title ?></title>
</head>
<body style="background-color: #27281e;">
    <?= $this->include('layouts/nav') ?>
    <?= $this->renderSection('content') ?>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/sweetalert2.all.min.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/myscript.js"></script>
</body>

</html>