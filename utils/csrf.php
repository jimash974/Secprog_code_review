<?php 

    function generateCsrfToken(){
        $token = md5(uniqid());
        return $token;
    }