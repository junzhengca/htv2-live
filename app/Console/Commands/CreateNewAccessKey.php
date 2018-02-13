<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\AccessKey;
use Carbon\Carbon;

class CreateNewAccessKey extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'access_key:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new random access key';

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
        $key = new AccessKey();
        $key->key_body = AccessKey::genRandomStr(128);
        $this->info('Access key created: ' . $key->key_body . " (will expire in 24 hours)");
        $key->save();
    }
}
