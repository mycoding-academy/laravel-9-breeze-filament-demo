<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ExampleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:something';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example Command';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info("Command ran successfully");
        
        return 0;
    }
}
