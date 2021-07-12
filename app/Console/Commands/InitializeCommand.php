<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InitializeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'template:new';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create 2 users; Admin and User.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->call('create:admin');
        $this->call('create:role', ['--name' => 'User']);
    }
}
