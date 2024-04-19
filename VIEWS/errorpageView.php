<!DOCTYPE html>
<html>
<?php
require_once 'INCLUDE/head.php';
?>
<body>
<style>
    *{
        padding: 0;
        margin: 0;
    }
    .main_error{
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #fff3cd;
    }
</style>
    <main class="main_error">
        <h1> Error 404 page not found</h1>
        <button type="button" class="btn btn-primary" onclick="backerror();" id="returbutton">Back</button>
    </main>
</body>
</html>