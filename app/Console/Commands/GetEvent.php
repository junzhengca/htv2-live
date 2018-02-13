<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Event;

class GetEvent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'event:get {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get an event by id';

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
            $this->info("Name: " . $event->name);
            $this->info("Start Time: " . $event->start_time);
            $this->info("End Time: " . $event->end_time);
            $this->info("Description: " . $event->description);
            $this->info("Tags: " . $event->tags);
            $this->info("Meta: " . json_encode($event->meta));
        } else {
            $this->info("Event not found");
        }
    }
}
