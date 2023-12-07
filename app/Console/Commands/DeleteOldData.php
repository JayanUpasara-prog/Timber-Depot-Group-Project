<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DeleteOldData extends Command
{
    protected $signature = 'Delete:Old-Data';

    protected $description = 'Delete Old data From tha database';

    public function handle()
    {
        // Your logic to delete data older than one minute
        DB::table('wild_criminals')
            ->where('created_at', '<=', Carbon::now()->subMinute(1))
            ->delete();

        $this->info('Your scheduled task has run successfully!');
    }
}
