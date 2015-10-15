<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Todo;

//@@ Step 26 @@//
class TodoAll extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'todo:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description.';

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
        //@@ Step 28 @@//
        //{{
        $todos = Todo::all();

        foreach ($todos as $todo) {
            $this->info($todo->title);
        }
        //}}
    }
}
