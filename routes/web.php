<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function(){
    return view("homepage");
});

Route::get("/article", function(){
    return view("article");
})->name("article");