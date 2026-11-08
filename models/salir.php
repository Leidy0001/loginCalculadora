<?php
session_start();
session_destroy();
echo ("<script>location.href='../index.php?accion=login';</script>");
?>
