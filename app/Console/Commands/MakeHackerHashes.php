<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\HashLetter;

class MakeHackerHashes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hash:generate {count} {phrase}';

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

    private function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $strIndex = 0;
        for($i = 0; $i < $this->argument('count'); $i++){
            $hash = $this->generateRandomString(10);
            $this->info($i . " " . $this->argument('phrase')[$strIndex] . " " . $hash);
            $letter = new HashLetter();
            $letter->letter =$this->argument('phrase')[$strIndex];
            $letter->hash = $hash;
            $letter->save();
            $strIndex++;
            $strIndex = $strIndex % strlen($this->argument('phrase'));
        }
    }
}
