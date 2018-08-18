<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require '../Controller/main_controller.php';
include '../Model/QuizModel.php';
define('base_url', 'localhost/Questioniers/');
define('pageTitle', 'MSQ')
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo pageTitle; ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.4 -->
        <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
        <!-- FontAwesome 4.3.0 -->
        <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/customcss.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        
            