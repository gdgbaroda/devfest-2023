<?php

use Devfest\Models\Team;

$team_members = [
    new Team(
            'Akhil',
            [
                'linkedin' => 'https://www.linkedin.com/in/tusharakhil',
                'twitter' => 'https://twitter.com/Tusharakhil'
            ]
    ),
    new Team(
        'Dron',
        [
            'linkedin' => 'https://www.linkedin.com/in/drontrivedi',
            'twitter' => 'https://twitter.com/trivedidron',
            'instagram' => 'https://www.instagram.com/trivedidron/'
        ]
    ),
    new Team(
        'Hardik',
        [
            'github' => 'https://github.com/mistryhardik',
            'linkedin' => 'https://www.linkedin.com/in/mistryhardik05/',
            'twitter' => 'https://twitter.com/mistryhardik05'
        ]
    ),
    new Team(
            'Hardip',
            [
                    'github' => 'https://github.com/knightkill',
                    'linkedin' => 'https://www.linkedin.com/in/patelhardip/',
                    'twitter' => 'https://twitter.com/HardipDPatel'
            ]
    ),
    new Team(
            'Kushal',
            [
                    'github' => 'https://github.com/kushal2011',
                    'linkedin' => 'https://www.linkedin.com/in/kushaldave-android',
                    'twitter' => 'https://twitter.com/that_kushal_guy'
            ]
    ),
    new Team(
        'Rahul',
        [
            'github' => 'https://github.com/bankerrahul',
            'linkedin' => 'https://www.linkedin.com/in/bankerrahul/',
            'twitter' => 'https://twitter.com/bankerrahul'
        ]
    ),
];

if (empty($team_members)) {
    echo "No team members available";
    return;
}


?>
<div class="content__inner">
    <div class="section full-height over-y-scroll" id="boxscroll-5">
        <div class="section" id="boxscroll-in-5">
            <!-- Page start -->
            <div class="section padding-top-big">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="content__title">our team</h2>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <h3 class="content__subtitle">Meet the minds behind GDG Baroda.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section padding-top padding-bottom-big">
                <div class="container">
                        <div class="row">
                    <?php foreach($team_members as $team_member) {
                        echo $team_member->generateHTML();
                    }?>
                        </div>
                </div>
            </div>
        </div>
        <?php include "templates/footer.php" ?>
    </div>
</div>