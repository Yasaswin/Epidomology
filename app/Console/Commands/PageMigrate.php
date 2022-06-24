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
                $page->title = 'Vision and Mission';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.vision';
                $page->save();

                $page = new Page();
                $page->title = 'Organization Structure';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.organisation';
                $page->save();

                $page = new Page();
                $page->title = 'History';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.history';
                $page->save();

                $page = new Page();
                $page->title = 'Key Achievements';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.layout';
                $page->save();

                $page = new Page();
                $page->title = 'Careers at EPID';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.list';
                $page->save();

                //NIP
                $page = new Page();
                $page->title = 'Immunization programme Implementation';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.resources2';
                $page->save();

                $page = new Page();
                $page->title = 'VPD';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.resources2';
                $page->save();

                $page = new Page();
                $page->title = 'Special vaccination campaigns';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.resources2';
                $page->save();
                
                $page = new Page();
                $page->title = 'Reporting Forms';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.resources2';
                $page->save();

                $page = new Page();
                $page->title = 'Web Resources';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.resources2';
                $page->save();

                //•	Communicable Disease Surveillance 

                $page = new Page();
                $page->title = 'Surveillance Methods';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.resources2';
                $page->save();

                
                $page = new Page();
                $page->title = 'List of Notifiable Diseases';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.resources2';
                $page->save();
                
                $page = new Page();
                $page->title = 'Vaccine Preventable Diseases';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.resources2';
                $page->save();
                
                $page = new Page();
                $page->title = 'Weekly Epidemiological Report';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.resources2';
                $page->save();

                $page = new Page();
                $page->title = 'Quarterly Epidemiological Bulletin';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.resources2';
                $page->save();

                $page = new Page();
                $page->title = 'Investigation Forms ';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.resources2';
                $page->save();

                $page = new Page();
                $page->title = 'Disease surveillance during disaster';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.resources2';
                $page->save();

                //•	Disease Information 

                $page = new Page();
                $page->title = 'Fact Sheets';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.resources2';
                $page->save();

                //•	Training
                $page = new Page();
                $page->title = 'Local ';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.resources2';
                $page->save();

                $page = new Page();
                $page->title = 'International';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.resources2';
                $page->save();
                
                $page = new Page();
                $page->title = 'Web-based opportunities';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.resources2';
                $page->save();

                //•	Dashboards

                $page = new Page();
                $page->title = 'Immunization';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.dashboard';
                $page->save();

                $page = new Page();
                $page->title = 'Disease Surveillance';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.dashboard';
                $page->save();

                $page = new Page();
                $page->title = 'High Endemic Diseases/Outbreaks';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.dashboard';
                $page->save();

                //Resources 

                $page = new Page();
                $page->title = 'Publications';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.resources2';
                $page->save();

                $page = new Page();
                $page->title = 'Circulars/Circular Letters';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.resources2';
                $page->save();

                $page = new Page();
                $page->title = 'Policy/Strategic Plans';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.resources2';
                $page->save();

                $page = new Page();
                $page->title = 'Review/Reporting/Surveillance Forms';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.resources2';
                $page->save();

                $page = new Page();
                $page->title = 'Other Downloads';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.resources2';
                $page->save();

                //Gallery

                $page = new Page();
                $page->title = 'Video Gallery';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.gallery';
                $page->save();

                $page = new Page();
                $page->title = 'Image Gallery';
                $page->body = null;
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.gallery';
                $page->save();







                $page = new Page();
                $page->title = 'Dynamic1';
                $page->body = ' <p align="justify"><strong>ln 1959, after its establishment with the assistance of the WH0, the Epidemiology Unit was operated by a World Health 0rganization (WHO) public health consultant and a local Medical 0fficer qualified in public health. The latter was appointed formally in 1961 as the Epidemiologist. The Unit was housed along with the Public Health Veterinary Services and the Medical Statistics Unit at Chelsea Gardens, Colombo 03.<strong><br>

                <br>ln 1967, two more assistant Epidemiologists trained in epidemiology were appointed to the Unit. By 1970 two peripheral health divisions, namely Kalutara and Kurunegala had their own Regional Epidemiologists.These officers have had their epidemiological training with the support of the WHO.<br>

                <br>The plan to appoint Regional Epidemiologists to all regional health divisions was hindered due to the scarcity of officers opting to remain in the field of public health. Those trained with the support of the WHO were appointed as Medical 0fficers of Health rather than Regional Epidemiologists. However, the next two regions covered by the services of Regional Epidemiologists were Jaffna and Vavuniya and thereafter, Kandy.<br>

                <br>Colombo region was served by an assistant Epidemiologist from the Epidemiology Unit. Another assistant Epidemiologist from the Unit was assigned for non-communicable disease epidemiolgy. This officer was later appointed as the first director of the Cancer Control Programme after its establishment as a separate unit within the Ministry of Health.<br>

                <br>A public health bacteriologist with postgraduate qualifications in bacteriology as well as in public health was appointed to the Unit in 1975. This officer was attached to the lnfectious Diseases Hospital and the Lady Ridgeway Children\'s Hospital in Colombo, but worked as a member of the Epidemiology Unit team and was involved in outbreak investigations and in special epidemiological studies. However, this post was suppressed following the retirement of this officer in the early eighties.<br>

                <br>ln early 1970s, the Unit was shifted to the building that now houses the Ministry of Health. By February 1986, the Epidemiology Unit was relocated at the present building at 231, De Saram Place, Colombo 10, which also houses the Family Health Bureau.<br>

                <br>ln 1995, the cadre allocated to the Unit was revised and the total number of Medical Officers was increased to 13. This number included two senior administrative grade officers and eight specialist grade officers. ln addition to this, it was planned to appoint Regional Epidemiologists to all Districts and Provincial Epidemiologists to the Provinces. All 26 RDHS divisions are now served by a Regional Epidemiologist.<br>

                <br>Over the years since 1959, the Unit has been steered by nine Chief Epidemiologists and at present, the Unit functions with a full cadre headed by the Chief Epidemiologist, Dr. Sudath Samaraweera.
                </p>';
                $page->category_id = null;
                $page->layout = 'layouts.front.pages.layout';
                $page->save();

            }
            catch (Exception $e)
            {
                DB::rollback();
                throw $e;
            }
    
            DB::commit();    }
}
