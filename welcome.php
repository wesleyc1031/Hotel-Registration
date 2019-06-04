<link rel ="stylesheet" href ="form.css">

<?php session_start(); ?>
<div class="body content">
    <div class="welcome">
        <div class="alert alert-success"><?= $_SESSION ['message'] ?></div>
        <img <span class="user" ><img src='<?= $_SESSION ['avatar'] ?>'</span>
        Welcome <span class="user" ><?= $_SESSION ['username'] ?></span>


