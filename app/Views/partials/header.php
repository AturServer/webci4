<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=@$txtTittle?></title>

    <!-- Bootstrap -->
    <link href="<?=base_url('assets/vendors')?>/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url('assets/vendors')?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url('assets/vendors')?>/nprogress/nprogress.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="<?=base_url('assets/vendors')?>/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css"
        rel="stylesheet" />

    <!-- Custom Theme Style -->
    <link href="<?=base_url('assets/build')?>/css/custom.min.css" rel="stylesheet">
    <!-- select 2 -->
    <!--link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" / -->
    <link href="<?=base_url('assets/select2/dist/css/select2-custom.css')?>" rel="stylesheet">
    <style>
        select {
            height: 20px;
        }

        label {
            font-size: small;
            padding-bottom: 0px;
        }

        .select-input:hover {
            color: red;
        }
    </style>

    <head>