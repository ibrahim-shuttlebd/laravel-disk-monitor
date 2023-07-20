<?php

use Ibrahimshuttlebd\LaravelDiskMonitor\Tests\TestCase;
use Illuminate\Support\Facades\Storage;

uses(TestCase::class)
->beforeEach(function(){
    Storage::fake('local');
})
->in(__DIR__);
