<?php

use Ibrahimshuttlebd\LaravelDiskMonitor\Commands\LaravelDiskMonitorCommand;
use Illuminate\Support\Facades\Storage;

use function Pest\Laravel\artisan;

it('can create a record of disk metrics', function(){

    Storage::disk('local')->put('test.txt', 'test');
    Storage::disk('local')->put('test1.txt', 'test');

    artisan(LaravelDiskMonitorCommand::class)->assertExitCode(0);
});
