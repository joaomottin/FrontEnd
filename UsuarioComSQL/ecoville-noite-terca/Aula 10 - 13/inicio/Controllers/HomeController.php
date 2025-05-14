<?php

class HomeController{

    public static function index(){
        HomeController::login();
    }


    public static function login(){
        require "../arquivos/login.php"
    }





}











?>