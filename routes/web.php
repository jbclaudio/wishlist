<?php

Route::middleware('web')->group(function () {
    Route::view('account/wishlist', 'rapidez::wishlist.account.overview');
});
