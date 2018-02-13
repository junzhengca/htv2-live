<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Event;

class ListEvent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'event:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all events';

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
        $events = Event::all(['id', 'name', 'start_time', 'end_time', 'tags'])->toArray();
        $headers = ['ID', 'Name', 'Start Time', 'End Time', 'Tags'];
        $this->table($headers, $events);
    }
}
