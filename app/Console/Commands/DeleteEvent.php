<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Event;

class DeleteEvent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'event:delete {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete an event by ID';

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
        $event = Event::find($this->argument('id'));
        if($event){
            if($this->ask("Are you sure? (y)") === "y"){
                $event->delete();
                $this->info("Event removed");
            }
        } else {
            $this->info("Event not found");
        }
    }
}
