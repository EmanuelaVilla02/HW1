<?php
    session_start();

    function SessioneAttiva() {
        if(isset($_SESSION['User'])) {
            return $_SESSION['User'];
        } else 
            return 0;
    }
?>