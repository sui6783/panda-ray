<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class CountGuest extends Middleware {
    /**
     * 統計到站人數
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function countGuest($request) {
        $now = now();
        echo $now;exit();
    }
}
