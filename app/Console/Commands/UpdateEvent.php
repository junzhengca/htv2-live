<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Event;

class UpdateEvent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'event:update {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update an event by ID';

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
        $input = [];
        if($event){
            $field = $this->ask("Which field do you wish to update? (name, start_time, end_time, description, tags, meta)");
            if(in_array($field, ['name', 'start_time', 'end_time', 'description', 'tags'])){
                $input[$field] = $this->ask("Please enter a new value");
                $event->fill($input);
                $event->save();
                $this->info($event);
            } else {
                // Meta is special
                if($field == 'meta'){
                    $meta = $event->meta;
                    $meta[$this->ask("Please enter a name for your metadata")] = $this->ask("Please enter a value");
                    $event->meta = $meta;
                    $event->save();
                    $this->info($event);
                } else {
                    $this->info("Please enter a valid field");
                }
            }
        } else {
            $this->info("Event not found");
        }
    }
}
