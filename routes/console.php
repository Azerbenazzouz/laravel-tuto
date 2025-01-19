<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', callback: function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();
