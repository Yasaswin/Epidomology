<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\Page;

class PageMigrate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'page:migrate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed pages table';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('pages')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
            DB::beginTransaction();
            try 
            {
                $page = new Page();
                $page->title_en = 'About Us';
                $page->title_si = 'About Us';
                $page->title_ta = 'About Us';
                $page->body_en = null;
                $page->body_si = null;
                $page->body_ta = null;
                $page->category_id = null;
                $page->layout_id = 4;
                $page->save();

                $page = new Page();
                $page->title_en = 'Vision and Mission';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 1;
                $page->save();

                $page = new Page();
                $page->title_en = 'Organization Structure';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 2;
                $page->save();

                $page = new Page();
                $page->title_en = 'History';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 3;
                $page->save();

                $page = new Page();
                $page->title_en = 'Key Achievements';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 4;
                $page->save();

                $page = new Page();
                $page->title_en = 'Careers at EPID';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 5;
                $page->save();

                //NIP
                $page = new Page();
                $page->title_en = 'Immunization programme Implementation';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 6;
                $page->save();

                $page = new Page();
                $page->title_en = 'VPD';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 6;
                $page->save();

                $page = new Page();
                $page->title_en = 'Special vaccination campaigns';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 6;
                $page->save();
                
                $page = new Page();
                $page->title_en = 'Reporting Forms';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 6;
                $page->save();

                $page = new Page();
                $page->title_en = 'Web Resources';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 6;
                $page->save();

                //•	Communicable Disease Surveillance 

                $page = new Page();
                $page->title_en = 'Surveillance Methods';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 6;
                $page->save();

                
                $page = new Page();
                $page->title_en = 'List of Notifiable Diseases';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 6;
                $page->save();
                
                $page = new Page();
                $page->title_en = 'Vaccine Preventable Diseases';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 6;
                $page->save();
                
                $page = new Page();
                $page->title_en = 'Weekly Epidemiological Report';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 6;
                $page->save();

                $page = new Page();
                $page->title_en = 'Quarterly Epidemiological Bulletin';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 6;
                $page->save();

                $page = new Page();
                $page->title_en = 'Investigation Forms ';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 6;
                $page->save();

                $page = new Page();
                $page->title_en = 'Disease surveillance during disaster';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 6;
                $page->save();

                //•	Disease Information 

                $page = new Page();
                $page->title_en = 'Fact Sheets';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 6;
                $page->save();

                //•	Training
                $page = new Page();
                $page->title_en = 'Local ';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 6;
                $page->save();

                $page = new Page();
                $page->title_en = 'International';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 6;
                $page->save();
                
                $page = new Page();
                $page->title_en = 'Web-based opportunities';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 6;
                $page->save();

                //•	Dashboards

                $page = new Page();
                $page->title_en = 'Immunization';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 7;
                $page->save();

                $page = new Page();
                $page->title_en = 'Disease Surveillance';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 7;
                $page->save();

                $page = new Page();
                $page->title_en = 'High Endemic Diseases/Outbreaks';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 7;
                $page->save();

                //Resources 

                $page = new Page();
                $page->title_en = 'Publications';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 6;
                $page->save();

                $page = new Page();
                $page->title_en = 'Circulars/Circular Letters';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 6;
                $page->save();

                $page = new Page();
                $page->title_en = 'Policy/Strategic Plans';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 6;
                $page->save();

                $page = new Page();
                $page->title_en = 'Review/Reporting/Surveillance Forms';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 6;
                $page->save();

                $page = new Page();
                $page->title_en = 'Other Downloads';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 6;
                $page->save();

                //Gallery

                $page = new Page();
                $page->title_en = 'Video Gallery';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 8;
                $page->save();

                $page = new Page();
                $page->title_en = 'Image Gallery';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 8;
                $page->save();

                $page = new Page();
                $page->title_en = 'Events';
                $page->body_en = null;
                $page->category_id = null;
                $page->layout_id = 9;
                $page->save();







                $page = new Page();
                $page->title_en = 'Dynamic1';
                $page->body_en = ' <p align="justify"><strong>ln 1959, after its establishment with the assistance of the WH0, the Epidemiology Unit was operated by a World Health 0rganization (WHO) public health consultant and a local Medical 0fficer qualified in public health. The latter was appointed formally in 1961 as the Epidemiologist. The Unit was housed along with the Public Health Veterinary Services and the Medical Statistics Unit at Chelsea Gardens, Colombo 03.<strong><br>

                <br>ln 1967, two more assistant Epidemiologists trained in epidemiology were appointed to the Unit. By 1970 two peripheral health divisions, namely Kalutara and Kurunegala had their own Regional Epidemiologists.These officers have had their epidemiological training with the support of the WHO.<br>

                <br>The plan to appoint Regional Epidemiologists to all regional health divisions was hindered due to the scarcity of officers opting to remain in the field of public health. Those trained with the support of the WHO were appointed as Medical 0fficers of Health rather than Regional Epidemiologists. However, the next two regions covered by the services of Regional Epidemiologists were Jaffna and Vavuniya and thereafter, Kandy.<br>

                <br>Colombo region was served by an assistant Epidemiologist from the Epidemiology Unit. Another assistant Epidemiologist from the Unit was assigned for non-communicable disease epidemiolgy. This officer was later appointed as the first director of the Cancer Control Programme after its establishment as a separate unit within the Ministry of Health.<br>

                <br>A public health bacteriologist with postgraduate qualifications in bacteriology as well as in public health was appointed to the Unit in 1975. This officer was attached to the lnfectious Diseases Hospital and the Lady Ridgeway Children\'s Hospital in Colombo, but worked as a member of the Epidemiology Unit team and was involved in outbreak investigations and in special epidemiological studies. However, this post was suppressed following the retirement of this officer in the early eighties.<br>

                <br>ln early 1970s, the Unit was shifted to the building that now houses the Ministry of Health. By February 1986, the Epidemiology Unit was relocated at the present building at 231, De Saram Place, Colombo 10, which also houses the Family Health Bureau.<br>

                <br>ln 1995, the cadre allocated to the Unit was revised and the total number of Medical Officers was increased to 13. This number included two senior administrative grade officers and eight specialist grade officers. ln addition to this, it was planned to appoint Regional Epidemiologists to all Districts and Provincial Epidemiologists to the Provinces. All 26 RDHS divisions are now served by a Regional Epidemiologist.<br>

                <br>Over the years since 1959, the Unit has been steered by nine Chief Epidemiologists and at present, the Unit functions with a full cadre headed by the Chief Epidemiologist, Dr. Sudath Samaraweera.
                </p>';
                $page->category_id = null;
                $page->layout_id = 4;
                $page->save();

            }
            catch (Exception $e)
            {
                DB::rollback();
                throw $e;
            }
    
            DB::commit();    }
}
