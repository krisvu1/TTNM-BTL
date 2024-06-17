<?php

use Illuminate\Support\Facades\Route;

Route::get("/donhang", function () {
    return view("donhang.index");
});