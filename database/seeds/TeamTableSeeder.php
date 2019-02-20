<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Bio;


class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        $peoples = Bio::all();

        $now = date('Y-m-d H:i:s');

        for($i= 0; $i < count($peoples); $i++){
            $coral_team['coral_team'][] = [
                'name' => $peoples[$i]['name'],
                'slug' => $peoples[$i]['slug'],
                'image' => $peoples[$i]['image'],
                'candid_image' => $peoples[$i]['candid_image'],
                'large_image' => $peoples[$i]['large_image'],
                'body' => $peoples[$i]['content'],
                'created_at' => $now,
                'updated_at' => $now,
            ];
            if(isset($peoples[$i]['job_titles']))
            {
                // $jobTitles=explode(',',$peoples[$i]['job_titles']);

                for($j= 0; $j < count($peoples[$i]['job_titles']); $j++)
                {
                    $coral_team['coral_team_jobs'][] = [
                        'title' => $peoples[$i]['job_titles'][$j],
                        'team_id' => $i+1,
                        'created_at' => $now,
                        'updated_at' => $now,
                    ];
                }
            }

            if(isset($peoples[$i]['focus']))
            {

                for($k= 0; $k < count($peoples[$i]['focus']); $k++)
                {
                    $coral_team['coral_team_focus'][] = [
                        'title' => $peoples[$i]['focus'][$k],
                        'team_id' => $i+1,
                        'created_at' => $now,
                        'updated_at' => $now,
                    ];
                }
            }
            if(isset($peoples[$i]['certifications']))
            {
                for($l= 0; $l < count($peoples[$i]['certifications']); $l++)
                {
                    $coral_team['coral_team_certification'][] = [
                        'title' => $peoples[$i]['certifications'][$l]['title'],
                        'team_id' => $i+1,
                        'created_at' => $now,
                        'updated_at' => $now,
                    ];
                }
            }
            if(isset($peoples[$i]['affiliations']))
            {
                for($m= 0; $m < count($peoples[$i]['affiliations']); $m++)
                {
                    $coral_team['coral_team_affiliation'][] = [
                        'title' => $peoples[$i]['affiliations'][$m]['title'],
                        'team_id' => $i+1,
                        'created_at' => $now,
                        'updated_at' => $now,
                    ];
                }
            }
            if(isset($peoples[$i]['board-memberships']))
            {
                for($n= 0; $n < count($peoples[$i]['board-memberships']); $n++)
                {
                    $coral_team['coral_team_board_membership'][] = [
                        'title' => $peoples[$i]['board-memberships'][$n]['title'],
                        'team_id' => $i+1,
                        'created_at' => $now,
                        'updated_at' => $now,
                    ];
                }
            }

            if(isset($peoples[$i]['other-experience']))
            {
                for($o= 0; $o < count($peoples[$i]['other-experience']); $o++)
                {
                    $coral_team['coral_team_Other_experience'][] = [
                        'title' => $peoples[$i]['other-experience'][$o]['title'],
                        'team_id' => $i+1,
                        'created_at' => $now,
                        'updated_at' => $now,
                    ];
                }
            }


        }
        //return $coral_team;

        DB::table('coral_team')->insert($coral_team['coral_team']);
        DB::table('coral_team_jobs')->insert($coral_team['coral_team_jobs']);
        DB::table('coral_team_certification')->insert($coral_team['coral_team_certification']);
        DB::table('coral_team_focus')->insert($coral_team['coral_team_focus']);
        DB::table('coral_team_affiliation')->insert($coral_team['coral_team_affiliation']);
        DB::table('coral_team_board_membership')->insert($coral_team['coral_team_board_membership']);
        DB::table('coral_team_Other_experience')->insert($coral_team['coral_team_Other_experience']);

    }


    public function down()
    {
        DB::table('coral_team')->delete();
        DB::table('coral_team_jobs')->delete();
        DB::table('coral_team_certification')->delete();
        DB::table('coral_team_focus')->delete();
        DB::table('coral_team_affiliation')->delete();
        DB::table('coral_team_board_membership')->delete();
        DB::table('coral_team_Other_experience')->delete();
    }





}
