<?php

namespace Ibrahimshuttlebd\LaravelDiskMonitor\Commands;

use Ibrahimshuttlebd\LaravelDiskMonitor\Models\DiskMonitorEntries;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class LaravelDiskMonitorCommand extends Command
{
    public $signature = 'disk-monitor:record-metrics';

    public $description = 'Record the metrics of a disk';

    public function handle(): int
    {
        $this->comment('Recording metrics....');

        $disk_name = config('disk-monitor.disk_name');

        $file_count = count(Storage::disk($disk_name)->allFiles());


        DiskMonitorEntries::create([
            'disk_name' => $disk_name,
            'file_count' => $file_count,
        ]);

        $this->comment('All done');

        return self::SUCCESS;
    }
}
