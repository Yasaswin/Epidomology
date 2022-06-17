<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;

class NavMigrate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nav:migrate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'seed menu table';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('menus')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
            DB::beginTransaction();
            try 
            {
                //about us
                $menu = new Menu();
                $menu->name_lang = 'About Us';
                $menu->name_en = 'About Us';
                $menu->name_si = 'About Us';
                $menu->name_ta = 'About Us';
                $menu->parent_id = null;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '100';
                $menu->status = 'SHOW';
                $menu->save();

                $parent_menu = $menu->id;

                $menu = new Menu();
                $menu->name_lang = 'Vision and Mission';
                $menu->name_en = 'Vision and Mission';
                $menu->name_si = 'Vision and Mission';
                $menu->name_ta = 'Vision and Mission';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '101';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'Organization Structure';
                $menu->name_en = 'Organization Structure';
                $menu->name_si = 'Organization Structure';
                $menu->name_ta = 'Organization Structure';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '102';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'History';
                $menu->name_en = 'History';
                $menu->name_si = 'History';
                $menu->name_ta = 'History';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '103';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'Key Achievements';
                $menu->name_en = 'Key Achievements';
                $menu->name_si = 'Key Achievements';
                $menu->name_ta = 'Key Achievements';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '104';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'Careers at EPID';
                $menu->name_en = 'Careers at EPID';
                $menu->name_si = 'Careers at EPID';
                $menu->name_ta = 'Careers at EPID';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '105';
                $menu->status = 'SHOW';
                $menu->save();

                // NIP
                $menu = new Menu();
                $menu->name_lang = 'NIP';
                $menu->name_en = 'NIP';
                $menu->name_si = 'NIP';
                $menu->name_ta = 'NIP';
                $menu->parent_id = null;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '200';
                $menu->status = 'SHOW';
                $menu->save();

                $parent_menu = $menu->id;

                $menu = new Menu();
                $menu->name_lang = 'Immunization programme Implementation';
                $menu->name_en = 'Immunization programme Implementation';
                $menu->name_si = 'Immunization programme Implementation';
                $menu->name_ta = 'Immunization programme Implementation';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '201';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'VPD';
                $menu->name_en = 'VPD';
                $menu->name_si = 'VPD';
                $menu->name_ta = 'VPD';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '202';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'Special vaccination campaigns';
                $menu->name_en = 'Special vaccination campaigns';
                $menu->name_si = 'Special vaccination campaigns';
                $menu->name_ta = 'Special vaccination campaigns';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '203';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'Publications';
                $menu->name_en = 'Publications';
                $menu->name_si = 'Publications';
                $menu->name_ta = 'Publications';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '204';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'Circulars & Letters';
                $menu->name_en = 'Circulars & Letters';
                $menu->name_si = 'Circulars & Letters';
                $menu->name_ta = 'Circulars & Letters';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '205';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'Reporting Forms';
                $menu->name_en = 'Reporting Forms';
                $menu->name_si = 'Reporting Forms';
                $menu->name_ta = 'Reporting Forms';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '206';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'Web Resources';
                $menu->name_en = 'Web Resources';
                $menu->name_si = 'Web Resources';
                $menu->name_ta = 'Web Resources';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '207';
                $menu->status = 'SHOW';
                $menu->save();

                // Communicable Disease Surveillance

                $menu = new Menu();
                $menu->name_lang = 'Communicable Disease Surveillance';
                $menu->name_en = 'Communicable Disease Surveillance';
                $menu->name_si = 'Communicable Disease Surveillance';
                $menu->name_ta = 'Communicable Disease Surveillance';
                $menu->parent_id = null;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '300';
                $menu->status = 'SHOW';
                $menu->save();

                $parent_menu = $menu->id;

                $menu = new Menu();
                $menu->name_lang = 'Surveillance Methods';
                $menu->name_en = 'Surveillance Methods';
                $menu->name_si = 'Surveillance Methods';
                $menu->name_ta = 'Surveillance Methods';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '301';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'List of Notifiable Diseases';
                $menu->name_en = 'List of Notifiable Diseases';
                $menu->name_si = 'List of Notifiable Diseases';
                $menu->name_ta = 'List of Notifiable Diseases';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '302';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'Vaccine Preventable Diseases';
                $menu->name_en = 'Vaccine Preventable Diseases';
                $menu->name_si = 'Vaccine Preventable Diseases';
                $menu->name_ta = 'Vaccine Preventable Diseases';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '303';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'Weekly Epidemiological Report';
                $menu->name_en = 'Weekly Epidemiological Report';
                $menu->name_si = 'Weekly Epidemiological Report';
                $menu->name_ta = 'Weekly Epidemiological Report';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '304';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'Quarterly Epidemiological Bulletin';
                $menu->name_en = 'Quarterly Epidemiological Bulletin';
                $menu->name_si = 'Quarterly Epidemiological Bulletin';
                $menu->name_ta = 'Quarterly Epidemiological Bulletin';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '305';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'Investigation Forms';
                $menu->name_en = 'Investigation Forms';
                $menu->name_si = 'Investigation Forms';
                $menu->name_ta = 'Investigation Forms';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '306';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'Disease surveillance during disaster';
                $menu->name_en = 'Disease surveillance during disaster';
                $menu->name_si = 'Disease surveillance during disaster';
                $menu->name_ta = 'Disease surveillance during disaster';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '307';
                $menu->status = 'SHOW';
                $menu->save();

            

            }
            catch (Exception $e)
            {
                DB::rollback();
                throw $e;
            }
    
            DB::commit();    }
}
