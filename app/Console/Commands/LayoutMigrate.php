<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\layout;

class LayoutMigrate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'layout:migrate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seeding layouts';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('layouts')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::beginTransaction();
        try 
        {
            $page = new layout();
            $page->name = 'Vison & Mission';
            $page->layout = 'layouts.front.pages.vision';
            $page->save();
            
            $page = new layout();
            $page->name = 'Organisation Structure';
            $page->layout = 'layouts.front.pages.organisation';
            $page->save();

            $page = new layout();
            $page->name = 'History';
            $page->layout = 'layouts.front.pages.history';
            $page->save();

            $page = new layout();
            $page->name = 'Full page';
            $page->layout = 'layouts.front.pages.layout';
            $page->save();

            $page = new layout();
            $page->name = 'List page';
            $page->layout = 'layouts.front.pages.list';
            $page->save();

            $page = new layout();
            $page->name = 'Multiple Resources page';
            $page->layout = 'layouts.front.pages.resources2';
            $page->save();

            $page = new layout();
            $page->name = 'Diseases Card';
            $page->layout = 'layouts.front.pages.covid';
            $page->save();

            $page = new layout();
            $page->name = 'Disaster';
            $page->layout = 'layouts.front.pages.disaster';
            $page->save();

            $page = new layout();
            $page->name = 'Gallery';
            $page->layout = 'layouts.front.pages.gallery';
            $page->save();

            $page = new layout();
            $page->name = 'Events';
            $page->layout = 'layouts.front.pages.events';
            $page->save();

            $page = new layout();
            $page->name = 'Events single';
            $page->layout = 'layouts.front.pages.eventsingle';
            $page->save();



        }
        catch (Exception $e)
        {
            DB::rollback();
            throw $e;
        }

        DB::commit();    
    }
}
