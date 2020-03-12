<?php

namespace App\Console\Commands;

use Illuminate\Cache\Console\ClearCommand;

class CacheClearCommand extends ClearCommand
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (app()->isProduction()) {
            $this->warn('生产环境下严禁使用 cache:clear 命令！');
            return;
        }

        parent::handle();
    }
}
