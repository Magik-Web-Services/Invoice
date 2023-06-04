<?php
foreach (glob('assets/upload/*.*') as $v) {
    unlink($v);
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INVOICE GENERATOR</title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> -->
    <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css?v=<?php echo rand(); ?>">
    <link rel="stylesheet" href="assets/libs/jquery-ui/jquery-ui.min.css?v=<?php echo rand(); ?>">
    <link rel="stylesheet" href="assets/libs/jquery-ui/jquery-ui.structure.min.css?v=<?php echo rand(); ?>">
    <link rel="stylesheet" href="assets/libs/jquery-ui/jquery-ui.theme.min.css?v=<?php echo rand(); ?>">
    <link rel="stylesheet" href="assets/libs/fontawesome/css/all.min.css?v=<?php echo rand(); ?>">
    <link rel="stylesheet" href="assets/libs/datatable/datatables.min.css?v=<?php echo rand(); ?>">
    <link rel="stylesheet" href="assets/libs/datatable/responsive/css/responsive.bootstrap5.min.css?v=<?php echo rand(); ?>">
    <link rel="stylesheet" href="assets/libs/datatable/responsive/css/responsive.dataTables.min.css?v=<?php echo rand(); ?>">
    <link rel="stylesheet" href="assets/libs/datatable/responsive/css/responsive.jqueryui.min.css?v=<?php echo rand(); ?>">
    <link rel="stylesheet" href="assets/css/page-theme.css?v=<?php echo rand(); ?>">
    <link rel="stylesheet" href="assets/css/custom.css?v=<?php echo rand(); ?>">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header class="header">
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <h1><a href="index.php" class="navbar-brand d-block">Fee Quotation</a></h1>
                    <!-- <figure class="h-logo">
                        <img src="assets/images/logo.png" alt="logo">
                    </figure> -->
                </div>
            </div>
        </div>
    </header>