<?php
/**
 * Created by PhpStorm.
 * User: Arnold
 * Date: 08.05.2018
 * Time: 02:36
 */

/*ROUTE::get("abc",function(){
    echo __DIR__."<br>";
    return "jiangnan";
});*/


ROUTE::group(["prefix" => "admin"],function(){
    ROUTE::get("/abc",function(){
        return "hah";
    });
});