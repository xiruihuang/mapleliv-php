<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\DataCrawlController;

class VanpeopleCrawl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl:vanpeople';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get a list of new housing from vanpeople';

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
        //
        DataCrawlController::vanpeopleCrawl();
        DataCrawlController::populateCrawlList();
    }
}
