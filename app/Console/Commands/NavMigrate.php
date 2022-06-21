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

                        $parent_menu2 = $menu->id;

                        $menu = new Menu();
                        $menu->name_lang = 'Service Delivery';
                        $menu->name_en = 'Service Delivery';
                        $menu->name_si = 'Service Delivery';
                        $menu->name_ta = 'Service Delivery';
                        $menu->parent_id = $parent_menu2;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '2011';
                        $menu->status = 'SHOW';
                        $menu->save();

                            $parent_menu3 = $menu->id;

                            $menu = new Menu();
                            $menu->name_lang = 'Immunization Programme Implementation';
                            $menu->name_en = 'Immunization Programme Implementation';
                            $menu->name_si = 'Immunization Programme Implementation';
                            $menu->name_ta = 'Immunization Programme Implementation';
                            $menu->parent_id = $parent_menu3;
                            $menu->route = null;
                            $menu->policy = null;
                            $menu->icon = null;
                            $menu->model = null;
                            $menu->active = null;
                            $menu->order = '20112';
                            $menu->status = 'SHOW';
                            $menu->save();

                            $menu = new Menu();
                            $menu->name_lang = 'Schedule';
                            $menu->name_en = 'Schedule';
                            $menu->name_si = 'Schedule';
                            $menu->name_ta = 'Schedule';
                            $menu->parent_id = $parent_menu3;
                            $menu->route = null;
                            $menu->policy = null;
                            $menu->icon = null;
                            $menu->model = null;
                            $menu->active = null;
                            $menu->order = '20112';
                            $menu->status = 'SHOW';
                            $menu->save();

                        $menu = new Menu();
                        $menu->name_lang = 'Cold Chain';
                        $menu->name_en = 'Cold Chain';
                        $menu->name_si = 'Cold Chain';
                        $menu->name_ta = 'Cold Chain';
                        $menu->parent_id = $parent_menu2;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '2012';
                        $menu->status = 'SHOW';
                        $menu->save();

                        $menu = new Menu();
                        $menu->name_lang = 'Adverse Events Following Immunization';
                        $menu->name_en = 'Adverse Events Following Immunization';
                        $menu->name_si = 'Adverse Events Following Immunization';
                        $menu->name_ta = 'Adverse Events Following Immunization';
                        $menu->parent_id = $parent_menu2;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '2013';
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

                    $parent_menu2 = $menu->id;

                    $menu = new Menu();
                    $menu->name_lang = 'Polio Eradication programme';
                    $menu->name_en = 'Polio Eradication programme';
                    $menu->name_si = 'Polio Eradication programme';
                    $menu->name_ta = 'Polio Eradication programme';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '2021';
                    $menu->status = 'SHOW';
                    $menu->save();

                    $menu = new Menu();
                    $menu->name_lang = 'Measles / Rubella / CRS Elimination Programme';
                    $menu->name_en = 'Measles / Rubella / CRS Elimination Programme';
                    $menu->name_si = 'Measles / Rubella / CRS Elimination Programme';
                    $menu->name_ta = 'Measles / Rubella / CRS Elimination Programme';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '2022';
                    $menu->status = 'SHOW';
                    $menu->save();

                    $menu = new Menu();
                    $menu->name_lang = 'MNTE';
                    $menu->name_en = 'MNTE';
                    $menu->name_si = 'MNTE';
                    $menu->name_ta = 'MNTE';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '2023';
                    $menu->status = 'SHOW';
                    $menu->save();

                    $menu = new Menu();
                    $menu->name_lang = 'Other VPD (HPV / JE)';
                    $menu->name_en = 'Other VPD (HPV / JE)';
                    $menu->name_si = 'Other VPD (HPV / JE)';
                    $menu->name_ta = 'Other VPD (HPV / JE)';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '2024';
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
    
                    $parent_menu2 = $menu->id;

                    $menu = new Menu();
                    $menu->name_lang = 'AEFI';
                    $menu->name_en = 'AEFI';
                    $menu->name_si = 'AEFI';
                    $menu->name_ta = 'AEFI';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '2061';
                    $menu->status = 'SHOW';
                    $menu->save();

                    $menu = new Menu();
                    $menu->name_lang = 'NIP/VPD Review Formats';
                    $menu->name_en = 'NIP/VPD Review Formats';
                    $menu->name_si = 'NIP/VPD Review Formats';
                    $menu->name_ta = 'NIP/VPD Review Formats';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '2062';
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

                        $parent_menu2 = $menu->id;

                        $menu = new Menu();
                        $menu->name_lang = 'Special Surveillance';
                        $menu->name_en = 'Special Surveillance';
                        $menu->name_si = 'Special Surveillance';
                        $menu->name_ta = 'Special Surveillance';
                        $menu->parent_id = $parent_menu2;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '3061';
                        $menu->status = 'SHOW';
                        $menu->save();

                        $menu = new Menu();
                        $menu->name_lang = 'Other Surveillance';
                        $menu->name_en = 'Other Surveillance';
                        $menu->name_si = 'Other Surveillance';
                        $menu->name_ta = 'Other Surveillance';
                        $menu->parent_id = $parent_menu2;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '3062';
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

                    //dieses info

                    $menu = new Menu();
                    $menu->name_lang = 'Disease Information';
                    $menu->name_en = 'Disease Information';
                    $menu->name_si = 'Disease Information';
                    $menu->name_ta = 'Disease Information';
                    $menu->parent_id = null;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '400';
                    $menu->status = 'SHOW';
                    $menu->save();

                    $parent_menu = $menu->id;

                    $menu = new Menu();
                    $menu->name_lang = 'Fact Sheets';
                    $menu->name_en = 'Fact Sheets';
                    $menu->name_si = 'Fact Sheets';
                    $menu->name_ta = 'Fact Sheets';
                    $menu->parent_id = $parent_menu;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '401';
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
                    $menu->order = '402';
                    $menu->status = 'SHOW';
                    $menu->save();

                    $menu = new Menu();
                    $menu->name_lang = 'High Endemic Diseases / Outbreaks';
                    $menu->name_en = 'High Endemic Diseases / Outbreaks';
                    $menu->name_si = 'High Endemic Diseases / Outbreaks';
                    $menu->name_ta = 'High Endemic Diseases / Outbreaks';
                    $menu->parent_id = $parent_menu;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '403';
                    $menu->status = 'SHOW';
                    $menu->save();

                //Training

                $menu = new Menu();
                $menu->name_lang = 'Training';
                $menu->name_en = 'Training';
                $menu->name_si = 'Training';
                $menu->name_ta = 'Training';
                $menu->parent_id = null;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '500';
                $menu->status = 'SHOW';
                $menu->save();

                $parent_menu = $menu->id;

                $menu = new Menu();
                $menu->name_lang = 'Local';
                $menu->name_en = 'Local';
                $menu->name_si = 'Local';
                $menu->name_ta = 'Local';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '501';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'International';
                $menu->name_en = 'International';
                $menu->name_si = 'International';
                $menu->name_ta = 'International';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '502';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'Web-based opportunities';
                $menu->name_en = 'Web-based opportunities';
                $menu->name_si = 'Web-based opportunities';
                $menu->name_ta = 'Web-based opportunities';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '503';
                $menu->status = 'SHOW';
                $menu->save();

                //•	Dashboards

                $menu = new Menu();
                $menu->name_lang = 'Dashboards';
                $menu->name_en = 'Dashboards';
                $menu->name_si = 'Dashboards';
                $menu->name_ta = 'Dashboards';
                $menu->parent_id = null;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '600';
                $menu->status = 'SHOW';
                $menu->save();

                $parent_menu = $menu->id;

                $menu = new Menu();
                $menu->name_lang = 'Immunization';
                $menu->name_en = 'Immunization';
                $menu->name_si = 'Immunization';
                $menu->name_ta = 'Immunization';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '601';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'Disease Surveillance';
                $menu->name_en = 'Disease Surveillance';
                $menu->name_si = 'Disease Surveillance';
                $menu->name_ta = 'Disease Surveillance';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '602';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'High Endemic Diseases / Outbreaks';
                $menu->name_en = 'High Endemic Diseases / Outbreaks';
                $menu->name_si = 'High Endemic Diseases / Outbreaks';
                $menu->name_ta = 'High Endemic Diseases / Outbreaks';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '603';
                $menu->status = 'SHOW';
                $menu->save();
                

                //•	Dashboards

                $menu = new Menu();
                $menu->name_lang = 'Epid Web Systems';
                $menu->name_en = 'Epid Web Systems';
                $menu->name_si = 'Epid Web Systems';
                $menu->name_ta = 'Epid Web Systems';
                $menu->parent_id = null;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '700';
                $menu->status = 'SHOW';
                $menu->save();

                $parent_menu = $menu->id;

                $menu = new Menu();
                $menu->name_lang = 'eNIP';
                $menu->name_en = 'eNIP';
                $menu->name_si = 'eNIP';
                $menu->name_ta = 'Immunization';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '701';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'eAEFI';
                $menu->name_en = 'eAEFI';
                $menu->name_si = 'eAEFI';
                $menu->name_ta = 'eAEFI';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '702';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'eSurveillance';
                $menu->name_en = 'eSurveillance';
                $menu->name_si = 'eSurveillance';
                $menu->name_ta = 'eSurveillance';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '703';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'Flusys';
                $menu->name_en = 'Flusys';
                $menu->name_si = 'Flusys';
                $menu->name_ta = 'Flusys';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '704';
                $menu->status = 'SHOW';
                $menu->save();

                //Resources 

                $menu = new Menu();
                $menu->name_lang = 'Resources ';
                $menu->name_en = 'Resources ';
                $menu->name_si = 'Resources ';
                $menu->name_ta = 'Resources ';
                $menu->parent_id = null;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '800';
                $menu->status = 'SHOW';
                $menu->save();

                $parent_menu = $menu->id;

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
                $menu->order = '801';
                $menu->status = 'SHOW';
                $menu->save();

                    //	NIP
                    $parent_menu2 = $menu->id;

                    $menu = new Menu();
                    $menu->name_lang = 'NIP';
                    $menu->name_en = 'NIP';
                    $menu->name_si = 'NIP';
                    $menu->name_ta = 'NIP';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '8011';
                    $menu->status = 'SHOW';
                    $menu->save();

                        $parent_menu3 = $menu->id;

                        $menu = new Menu();
                        $menu->name_lang = 'Immunization Programme Implementation';
                        $menu->name_en = 'Immunization Programme Implementation';
                        $menu->name_si = 'Immunization Programme Implementation';
                        $menu->name_ta = 'Immunization Programme Implementation';
                        $menu->parent_id = $parent_menu3;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '80111';
                        $menu->status = 'SHOW';
                        $menu->save();

                        $menu = new Menu();
                        $menu->name_lang = 'Cold Chain';
                        $menu->name_en = 'Cold Chain';
                        $menu->name_si = 'Cold Chain';
                        $menu->name_ta = 'Cold Chain';
                        $menu->parent_id = $parent_menu3;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '80112';
                        $menu->status = 'SHOW';
                        $menu->save();

                        $menu = new Menu();
                        $menu->name_lang = 'Adverse Events Following Immunization';
                        $menu->name_en = 'Adverse Events Following Immunization';
                        $menu->name_si = 'Adverse Events Following Immunization';
                        $menu->name_ta = 'Adverse Events Following Immunization';
                        $menu->parent_id = $parent_menu3;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '80113';
                        $menu->status = 'SHOW';
                        $menu->save();

                    //VPD

                    $menu = new Menu();
                    $menu->name_lang = 'VPD';
                    $menu->name_en = 'VPD';
                    $menu->name_si = 'VPD';
                    $menu->name_ta = 'VPD';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '8012';
                    $menu->status = 'SHOW';
                    $menu->save();

                    //	Disease Surveillance

                    $menu = new Menu();
                    $menu->name_lang = 'Disease Surveillance';
                    $menu->name_en = 'Disease Surveillance';
                    $menu->name_si = 'Disease Surveillance';
                    $menu->name_ta = 'Disease Surveillance';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '8013';
                    $menu->status = 'SHOW';
                    $menu->save();

                        $parent_menu3 = $menu->id;

                        $menu = new Menu();
                        $menu->name_lang = 'Surveillance Case Definitions for Notifiable Diseases in Sri Lanka';
                        $menu->name_en = 'Surveillance Case Definitions for Notifiable Diseases in Sri Lanka';
                        $menu->name_si = 'Surveillance Case Definitions for Notifiable Diseases in Sri Lanka';
                        $menu->name_ta = 'Surveillance Case Definitions for Notifiable Diseases in Sri Lanka';
                        $menu->parent_id = $parent_menu3;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '80131';
                        $menu->status = 'SHOW';
                        $menu->save();

                        $menu = new Menu();
                        $menu->name_lang = 'WER';
                        $menu->name_en = 'WER';
                        $menu->name_si = 'WER';
                        $menu->name_ta = 'WER';
                        $menu->parent_id = $parent_menu3;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '80132';
                        $menu->status = 'SHOW';
                        $menu->save();

                        $menu = new Menu();
                        $menu->name_lang = 'QEB';
                        $menu->name_en = 'QEB';
                        $menu->name_si = 'QEB';
                        $menu->name_ta = 'QEB';
                        $menu->parent_id = $parent_menu3;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '80133';
                        $menu->status = 'SHOW';
                        $menu->save();

                    //Covid-19

                    $menu = new Menu();
                    $menu->name_lang = 'Covid-19';
                    $menu->name_en = 'Covid-19';
                    $menu->name_si = 'Covid-19';
                    $menu->name_ta = 'Covid-19';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '8014';
                    $menu->status = 'SHOW';
                    $menu->save();

                    $menu = new Menu();
                    $menu->name_lang = 'Dengue';
                    $menu->name_en = 'Dengue';
                    $menu->name_si = 'Dengue';
                    $menu->name_ta = 'Dengue';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '8015';
                    $menu->status = 'SHOW';
                    $menu->save();

                    $menu = new Menu();
                    $menu->name_lang = 'Leptospirosis';
                    $menu->name_en = 'Leptospirosis';
                    $menu->name_si = 'Leptospirosis';
                    $menu->name_ta = 'Leptospirosis';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '8016';
                    $menu->status = 'SHOW';
                    $menu->save();

                    $menu = new Menu();
                    $menu->name_lang = 'Influenza';
                    $menu->name_en = 'Influenza';
                    $menu->name_si = 'Influenza';
                    $menu->name_ta = 'Influenza';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '8017';
                    $menu->status = 'SHOW';
                    $menu->save();

                    $menu = new Menu();
                    $menu->name_lang = 'CKDu';
                    $menu->name_en = 'CKDu';
                    $menu->name_si = 'CKDu';
                    $menu->name_ta = 'CKDu';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '8018';
                    $menu->status = 'SHOW';
                    $menu->save();

                    $menu = new Menu();
                    $menu->name_lang = 'Other';
                    $menu->name_en = 'Other';
                    $menu->name_si = 'Other';
                    $menu->name_ta = 'Other';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '8019';
                    $menu->status = 'SHOW';
                    $menu->save();


                $menu = new Menu();
                $menu->name_lang = 'Circulars / Circular Letters';
                $menu->name_en = 'Circulars / Circular Letters';
                $menu->name_si = 'Circulars / Circular Letters';
                $menu->name_ta = 'Circulars / Circular Letters';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '802';
                $menu->status = 'SHOW';
                $menu->save();

                    //	NIP
                    $parent_menu2 = $menu->id;

                    $menu = new Menu();
                    $menu->name_lang = 'NIP';
                    $menu->name_en = 'NIP';
                    $menu->name_si = 'NIP';
                    $menu->name_ta = 'NIP';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '8021';
                    $menu->status = 'SHOW';
                    $menu->save();

                        $parent_menu3 = $menu->id;

                        $menu = new Menu();
                        $menu->name_lang = 'Immunization Programme Implementation';
                        $menu->name_en = 'Immunization Programme Implementation';
                        $menu->name_si = 'Immunization Programme Implementation';
                        $menu->name_ta = 'Immunization Programme Implementation';
                        $menu->parent_id = $parent_menu3;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '80211';
                        $menu->status = 'SHOW';
                        $menu->save();

                        $menu = new Menu();
                        $menu->name_lang = 'Cold Chain';
                        $menu->name_en = 'Cold Chain';
                        $menu->name_si = 'Cold Chain';
                        $menu->name_ta = 'Cold Chain';
                        $menu->parent_id = $parent_menu3;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '80212';
                        $menu->status = 'SHOW';
                        $menu->save();

                        $menu = new Menu();
                        $menu->name_lang = 'Adverse Events Following Immunization';
                        $menu->name_en = 'Adverse Events Following Immunization';
                        $menu->name_si = 'Adverse Events Following Immunization';
                        $menu->name_ta = 'Adverse Events Following Immunization';
                        $menu->parent_id = $parent_menu3;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '80213';
                        $menu->status = 'SHOW';
                        $menu->save();

                    //VPD
                    $menu = new Menu();
                    $menu->name_lang = 'VPD';
                    $menu->name_en = 'VPD';
                    $menu->name_si = 'VPD';
                    $menu->name_ta = 'VPD';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '8022';
                    $menu->status = 'SHOW';
                    $menu->save();

                        $parent_menu3 = $menu->id;

                        $menu = new Menu();
                        $menu->name_lang = 'Polio Eradication programme';
                        $menu->name_en = 'Polio Eradication programme';
                        $menu->name_si = 'Polio Eradication programme';
                        $menu->name_ta = 'Polio Eradication programme';
                        $menu->parent_id = $parent_menu3;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '80221';
                        $menu->status = 'SHOW';
                        $menu->save();

                        $menu = new Menu();
                        $menu->name_lang = 'Measles / Rubella / CRS Elimination Programme';
                        $menu->name_en = 'Measles / Rubella / CRS Elimination Programme';
                        $menu->name_si = 'Measles / Rubella / CRS Elimination Programme';
                        $menu->name_ta = 'Measles / Rubella / CRS Elimination Programme';
                        $menu->parent_id = $parent_menu3;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '80222';
                        $menu->status = 'SHOW';
                        $menu->save();

                    //	Disease Surveillance
                    $menu = new Menu();
                    $menu->name_lang = 'Disease Surveillance';
                    $menu->name_en = 'Disease Surveillance';
                    $menu->name_si = 'Disease Surveillance';
                    $menu->name_ta = 'Disease Surveillance';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '8023';
                    $menu->status = 'SHOW';
                    $menu->save();

                        $parent_menu3 = $menu->id;

                        $menu = new Menu();
                        $menu->name_lang = 'Surveillance Case Definitions for Notifiable Diseases in Sri Lanka';
                        $menu->name_en = 'Surveillance Case Definitions for Notifiable Diseases in Sri Lanka';
                        $menu->name_si = 'Surveillance Case Definitions for Notifiable Diseases in Sri Lanka';
                        $menu->name_ta = 'Surveillance Case Definitions for Notifiable Diseases in Sri Lanka';
                        $menu->parent_id = $parent_menu3;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '80231';
                        $menu->status = 'SHOW';
                        $menu->save();

                        $menu = new Menu();
                        $menu->name_lang = 'WER';
                        $menu->name_en = 'WER';
                        $menu->name_si = 'WER';
                        $menu->name_ta = 'WER';
                        $menu->parent_id = $parent_menu3;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '80232';
                        $menu->status = 'SHOW';
                        $menu->save();

                        $menu = new Menu();
                        $menu->name_lang = 'QEB';
                        $menu->name_en = 'QEB';
                        $menu->name_si = 'QEB';
                        $menu->name_ta = 'QEB';
                        $menu->parent_id = $parent_menu3;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '80233';
                        $menu->status = 'SHOW';
                        $menu->save();

                    //Covid-19
                    $menu = new Menu();
                    $menu->name_lang = 'Covid-19';
                    $menu->name_en = 'Covid-19';
                    $menu->name_si = 'Covid-19';
                    $menu->name_ta = 'Covid-19';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '8024';
                    $menu->status = 'SHOW';
                    $menu->save();

                    $menu = new Menu();
                    $menu->name_lang = 'Dengue';
                    $menu->name_en = 'Dengue';
                    $menu->name_si = 'Dengue';
                    $menu->name_ta = 'Dengue';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '8025';
                    $menu->status = 'SHOW';
                    $menu->save();

                    $menu = new Menu();
                    $menu->name_lang = 'Leptospirosis';
                    $menu->name_en = 'Leptospirosis';
                    $menu->name_si = 'Leptospirosis';
                    $menu->name_ta = 'Leptospirosis';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '8026';
                    $menu->status = 'SHOW';
                    $menu->save();

                    $menu = new Menu();
                    $menu->name_lang = 'Influenza';
                    $menu->name_en = 'Influenza';
                    $menu->name_si = 'Influenza';
                    $menu->name_ta = 'Influenza';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '8027';
                    $menu->status = 'SHOW';
                    $menu->save();

                    $menu = new Menu();
                    $menu->name_lang = 'CKDu';
                    $menu->name_en = 'CKDu';
                    $menu->name_si = 'CKDu';
                    $menu->name_ta = 'CKDu';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '8028';
                    $menu->status = 'SHOW';
                    $menu->save();

                    $menu = new Menu();
                    $menu->name_lang = 'Other';
                    $menu->name_en = 'Other';
                    $menu->name_si = 'Other';
                    $menu->name_ta = 'Other';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '8029';
                    $menu->status = 'SHOW';
                    $menu->save();
                

                $menu = new Menu();
                $menu->name_lang = 'Policy / Strategic Plans';
                $menu->name_en = 'Policy / Strategic Plans';
                $menu->name_si = 'Policy / Strategic Plans';
                $menu->name_ta = 'Policy / Strategic Plans';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '803';
                $menu->status = 'SHOW';
                $menu->save();

                $menu = new Menu();
                $menu->name_lang = 'Review / Reporting / Surveillance Forms';
                $menu->name_en = 'Review / Reporting / Surveillance Forms';
                $menu->name_si = 'Review / Reporting / Surveillance Forms';
                $menu->name_ta = 'Review / Reporting / Surveillance Forms';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '804';
                $menu->status = 'SHOW';
                $menu->save();

                    //	Reporting Forms
                    $parent_menu2 = $menu->id;

                    $menu = new Menu();
                    $menu->name_lang = 'Reporting Forms';
                    $menu->name_en = 'Reporting Forms';
                    $menu->name_si = 'Reporting Forms';
                    $menu->name_ta = 'Reporting Forms';
                    $menu->parent_id = $parent_menu2;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '8041';
                    $menu->status = 'SHOW';
                    $menu->save();

                        $parent_menu3 = $menu->id;

                        $menu = new Menu();
                        $menu->name_lang = 'AEFI';
                        $menu->name_en = 'AEFI';
                        $menu->name_si = 'AEFI';
                        $menu->name_ta = 'AEFI';
                        $menu->parent_id = $parent_menu3;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '80411';
                        $menu->status = 'SHOW';
                        $menu->save();

                        $menu = new Menu();
                        $menu->name_lang = 'NIP/VPD Review Formats';
                        $menu->name_en = 'NIP/VPD Review Formats';
                        $menu->name_si = 'NIP/VPD Review Formats';
                        $menu->name_ta = 'NIP/VPD Review Formats';
                        $menu->parent_id = $parent_menu3;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '80412';
                        $menu->status = 'SHOW';
                        $menu->save();
                    
                    

                $menu = new Menu();
                $menu->name_lang = 'Other Downloads';
                $menu->name_en = 'Other Downloads';
                $menu->name_si = 'Other Downloads';
                $menu->name_ta = 'Other Downloads';
                $menu->parent_id = $parent_menu;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '805';
                $menu->status = 'SHOW';
                $menu->save();


                //Gallery 

                $menu = new Menu();
                $menu->name_lang = 'Gallery ';
                $menu->name_en = 'Gallery ';
                $menu->name_si = 'Gallery ';
                $menu->name_ta = 'Gallery ';
                $menu->parent_id = null;
                $menu->route = null;
                $menu->policy = null;
                $menu->icon = null;
                $menu->model = null;
                $menu->active = null;
                $menu->order = '900';
                $menu->status = 'SHOW';
                $menu->save();

                    $parent_menu = $menu->id;

                    $menu = new Menu();
                    $menu->name_lang = 'Video Gallery';
                    $menu->name_en = 'Video Gallery';
                    $menu->name_si = 'Video Gallery';
                    $menu->name_ta = 'Video Gallery';
                    $menu->parent_id = $parent_menu;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '901';
                    $menu->status = 'SHOW';
                    $menu->save();

                        $parent_menu2 = $menu->id;

                        $menu = new Menu();
                        $menu->name_lang = 'National Immunization Programme';
                        $menu->name_en = 'National Immunization Programme';
                        $menu->name_si = 'National Immunization Programme';
                        $menu->name_ta = 'National Immunization Programme';
                        $menu->parent_id = $parent_menu2;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '9012';
                        $menu->status = 'SHOW';
                        $menu->save();

                        $menu = new Menu();
                        $menu->name_lang = 'Past events';
                        $menu->name_en = 'Past events';
                        $menu->name_si = 'Past events';
                        $menu->name_ta = 'Past events';
                        $menu->parent_id = $parent_menu2;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '9013';
                        $menu->status = 'SHOW';
                        $menu->save();

                        $menu = new Menu();
                        $menu->name_lang = 'Other';
                        $menu->name_en = 'Other';
                        $menu->name_si = 'Other';
                        $menu->name_ta = 'Other';
                        $menu->parent_id = $parent_menu2;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '9014';
                        $menu->status = 'SHOW';
                        $menu->save();



                    $menu = new Menu();
                    $menu->name_lang = 'Image Gallery';
                    $menu->name_en = 'Image Gallery';
                    $menu->name_si = 'Image Gallery';
                    $menu->name_ta = 'Image Gallery';
                    $menu->parent_id = $parent_menu;
                    $menu->route = null;
                    $menu->policy = null;
                    $menu->icon = null;
                    $menu->model = null;
                    $menu->active = null;
                    $menu->order = '902';
                    $menu->status = 'SHOW';
                    $menu->save();

                        $parent_menu2 = $menu->id;

                        $menu = new Menu();
                        $menu->name_lang = 'National Immunization Programme';
                        $menu->name_en = 'National Immunization Programme';
                        $menu->name_si = 'National Immunization Programme';
                        $menu->name_ta = 'National Immunization Programme';
                        $menu->parent_id = $parent_menu2;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '9021';
                        $menu->status = 'SHOW';
                        $menu->save();

                        $menu = new Menu();
                        $menu->name_lang = 'Leptospirosis';
                        $menu->name_en = 'Leptospirosis';
                        $menu->name_si = 'Leptospirosis';
                        $menu->name_ta = 'Leptospirosis';
                        $menu->parent_id = $parent_menu2;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '9022';
                        $menu->status = 'SHOW';
                        $menu->save();

                        $menu = new Menu();
                        $menu->name_lang = 'Other';
                        $menu->name_en = 'Other';
                        $menu->name_si = 'Other';
                        $menu->name_ta = 'Other';
                        $menu->parent_id = $parent_menu2;
                        $menu->route = null;
                        $menu->policy = null;
                        $menu->icon = null;
                        $menu->model = null;
                        $menu->active = null;
                        $menu->order = '9023';
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
