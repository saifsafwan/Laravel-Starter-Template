<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class CreateNewRole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:role';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new role';

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
        $name = $this->ask('What is the role name?');
        
        Role::create(['name' => Str::slug($name)]);

        $headers = ['Role Name', 'Role Key'];

        $data = [
            [$name, Str::slug($name)],
        ];

        $this->info("Role : $name created");
        $this->table($headers, $data);
        
    }
}
