<?php    
    function data($nama, $umur) {
        $biodata = [
            'name' => $nama,
            'age' => $umur,
            'address' => 'Jl. Melati Blok Q1 No. 16, Kota Tangerang Selatan',
            'hobbies' => [
                'Music',
                'Games',
                'Reading'
            ],
            'is_married' => false,
            'list_school' => [
                [
                    'name' => 'SDN Serua 03',
                    'year_in' => 2008,
                    'year_out' => 2014,
                    'major' => '-'
                ],
                [
                    'name' => 'SMP Muhammadiyah 03',
                    'year_in' => 2014,
                    'year_out' => 2017,
                    'major' => '-'
                ],
                [
                    'name' => 'SMK Letris Indonesia 2',
                    'year_in' => 2017,
                    'year_out' => 2020,
                    'major' => 'Software Engineering / Rekayasa Perangkat Lunak'
                ]
            ],
            'skills' => [
                [
                    'skill_name' => 'PHP',
                    'level' => 'Beginner'
                ],
                [
                    'skill_name' => 'Javascript',
                    'level' => 'Beginner'
                ],
                [
                    'skill_name' => 'Html & Css',
                    'level' => 'Beginner'
                ],
                [
                    'skill_name' => 'Web Design',
                    'level' => 'Beginner'
                ]
            ],
            'interest_in_coding' => true
        ];

        return json_encode($biodata);
    }
    header('Content-Type:application/json');
    echo data("Revo Arya", 18);
?>
