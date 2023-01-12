<?php 

    function generateCsrfToken(){
        $token = bin2hex(random_bytes(32));
        return $token;
    }