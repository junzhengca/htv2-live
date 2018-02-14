<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Validator;
use App\Event;
use Carbon\Carbon;

class CreateEvent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'event:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new event';

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
        $input                = [];
        $input['name']        = $this->ask("What is the name of the event?");
        $input['start_time']  = $this->ask("What is the start time of this event?");
        $input['end_time']    = $this->ask("What is the end time of this event?");
        $input['description'] = $this->ask("Give this event a short description: ");
        $input['tags']        = $this->ask("What are tags associated with this event? Seperate by comma.");
        $input['meta']        = [];

        $validator = Validator::make($input, [
            'name' => 'required',
            'description' => 'required',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
            'tags' => 'required'
        ]);

        $event = new Event();
        $event->fill($input);
        $event->start_time = new Carbon($input['start_time']);
        $event->end_time   = new Carbon($input['end_time']);
        $event->save();
        $this->info($event);
    }
}
