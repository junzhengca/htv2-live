<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\AccessKey;

class ListAccessKeys extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'access_key:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        $keys = AccessKey::all();
        foreach($keys as $index => $key){
            $this->info($index . " -> " . $key->key_body);
        }
    }
}
