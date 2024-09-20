<?php

return [
    'match_status' => [
        '1' => 'Not started',
        '2' => 'First half',
        '3' => 'Half-time',
        '4' => 'Second half',
        '5' => 'Overtime',
        '6' => 'Overtime(deprecated)',
        '7' => 'Penalty Shoot-out',
        '8' => 'End',
        '9' => 'Delay',
    ],
    'score_rules' => [
        'regular_time_score',
        'halftime_score',
        'red_cards',
        'yellow_cards',
        'corners',
        'overtime_score',
        'penalty_score',
    ],
];
