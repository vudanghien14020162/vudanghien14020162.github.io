<!--<script type="text/javascript" src="mobile/lib/js/mobile.js"></script>-->
<script type="text/javascript">
    //Phat hien trinh duyet la mobile thi chuyen sang phien ban mobile
    //if (isMobile.any()) document.location.href = "mobile/";
</script>
<?php
//chua dang nhap he thong, thi ve trang login
include "includes/security.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $HOHOWeb; ?></title>
    <META content='no-cache' http-equiv='Pragma'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=8"/>
    <link rel="SHORTCUT ICON" href="icons/ico.png" type="image/x-icon"/>
    <script src="libs/jquery/js/jquery-2.1.4.min.js"></script>
</head>
<frameset rows="70, *" frameborder="0" framespacing="0">
    <frame id="topframe" src="includes/top.php">
    <frame id="mainframe" src="includes/main.php">
</frameset>
