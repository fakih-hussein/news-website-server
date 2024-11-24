<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::prefix("/courses")->group(function() {
  Route::post("/", [NewsController::class, "post_news"]);
  Route::put("/{id}", [NewsController::class, "edit_news"]);
  Route::delete("/{id}", [NewsController::class, "delete_news"]);
});