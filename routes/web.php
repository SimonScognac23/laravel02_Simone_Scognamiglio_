<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');








//------------------------------------ PAGNA CHI SIAMO----------------------------------------------------------------------------------------------------------------------------

Route::get('/chi-siamo', function () {
    
    $singers = [
        ['name' => 'Snoop Dogg', 'dateBirth' => '1971', 'url' => 'https://th.bing.com/th/id/R.2deb7b7de4aa48e555aac37178085df4?rik=OtQMnot8u0Pmjg&pid=ImgRaw&r=0', 
         'biography' => 'Snoop Dogg, nato Calvin Cordozar Broadus Jr., è un rapper, cantante e personalità dei media americano. Conosciuto per il suo stile rilassato e per le sue collaborazioni con Dr. Dre, è diventato una delle figure più influenti dell\'hip-hop.',
         'albums' => [
            'Doggystyle' => [
                'year' => 1993,
                'tracks' => [
                    'Gin and Juice',
                    'What\'s My Name?',
                    'Murder Was the Case',
                    'Doggy Dogg World'
                ]
            ],
            'Tha Doggfather' => [
                'year' => 1996,
                'tracks' => [
                    'Snoop\'s Upside Ya Head',
                    'Nuthin\' but a "G" Thang',
                    'Doggy Dogg World'
                ]
            ]
        ]],
        
        ['name' => 'E-40', 'dateBirth' => '1967', 'url' => 'https://d3nxoulyw7bc8u.cloudfront.net/images/artists/1435/57156ec7-c51a-46b1-a288-9c303fda1e79.jpg', 
         'biography' => 'E-40, nato Earl Stevens, è un rapper e imprenditore americano proveniente da Vallejo, California. È conosciuto per il suo stile distintivo e l\'uso di un linguaggio ricco di slang, ed è stato una figura fondamentale nell\'hip-hop della costa occidentale.',
         'albums' => [
            'In a Major Way' => [
                'year' => 1995,
                'tracks' => [
                    'Sprinkle Me',
                    '1 Luv',
                    'The Mailman',
                    'Doin\' Too Much'
                ]
            ],
            'My Ghetto Report Card' => [
                'year' => 2006,
                'tracks' => [
                    'Tell Me When to Go',
                    'Yay Area',
                    'E-40\'s Anthem'
                ]
            ]
        ]],
        
        ['name' => 'The Game', 'dateBirth' => '1979', 'url' => 'https://th.bing.com/th/id/OIP.OgZf4Qe11v0WotCWzgCQhwHaEK?rs=1&pid=ImgDetMain', 
         'biography' => 'The Game, nato Jayceon Terrell Taylor, è un rapper americano che ha guadagnato fama con il suo album di debutto "The Documentary". È una delle figure più prominenti dell\'hip-hop della costa occidentale degli anni 2000.',
         'albums' => [
            'The Documentary' => [
                'year' => 2005,
                'tracks' => [
                    'Hate It or Love It',
                    'How We Do',
                    'Dreams',
                    'Put You on the Game'
                ]
            ],
            'Doctor\'s Advocate' => [
                'year' => 2006,
                'tracks' => [
                    'One Blood',
                    'Let\'s Ride',
                    'Wouldn\'t Get Far',
                    'Ain\'t No Doubt About It'
                ]
            ]
        ]],
        
        ['name' => 'Eminem', 'dateBirth' => '1972', 'url' => 'https://th.bing.com/th/id/OIP.GLeckuanHeKcc4TWRkFbGgHaF7?rs=1&pid=ImgDetMain', 
         'biography' => 'Eminem, nato Marshall Bruce Mathers III, è un rapper, paroliere e produttore discografico americano. Conosciuto per le sue rime rapide e i testi controversi, è spesso considerato uno dei rapper più grandi di tutti i tempi.',
         'albums' => [
            'The Slim Shady LP' => [
                'year' => 1999,
                'tracks' => [
                    'My Name Is',
                    'Guilty Conscience',
                    'Just Don\'t Give a F***',
                    '97 Bonnie & Clyde'
                ]
            ],
            'The Marshall Mathers LP' => [
                'year' => 2000,
                'tracks' => [
                    'The Real Slim Shady',
                    'Stan',
                    'The Way I Am',
                    'Marshall Mathers'
                ]
            ]
        ]],
        
        ['name' => 'Axl Rose', 'dateBirth' => '1962', 'url' => 'https://2.bp.blogspot.com/-wQIh352HdIM/WCwkXZ1XKLI/AAAAAAAAFPs/N0ljG22Na4AaarjlGUV-Z49KVl3NHmEhACLcB/s1600/AxlRose.jpg', 
         'biography' => 'Axl Rose, nato William Bruce Rose Jr., è il cantante principale della band rock Guns N\' Roses. Conosciuto per la sua voce potente e la sua presenza scenica, è diventato una figura iconica nel panorama del rock durante la fine degli anni 80 e l\'inizio degli anni 90.',
         'albums' => [
            'Appetite for Destruction' => [
                'year' => 1987,
                'tracks' => [
                    'Welcome to the Jungle',
                    'Sweet Child o\' Mine',
                    'Paradise City',
                    'Nightrain'
                ]
            ],
            'Use Your Illusion I' => [
                'year' => 1991,
                'tracks' => [
                    'November Rain',
                    'Don\'t Cry',
                    'You Could Be Mine',
                    'Live and Let Die'
                ]
            ]
        ]],
        
        ['name' => 'Noyz Narcos', 'dateBirth' => '1979', 'url' => 'https://hips.hearstapps.com/hmg-prod/images/italian-rapper-noyz-narcos-performs-at-the-otttoemezzo-news-photo-1665586419.jpg?crop=1xw:0.75263xh;center,top&resize=1200:*', 
         'biography' => 'Noyz Narcos, nato Emanuele Riva, è un rapper italiano noto per i suoi testi crudi e ispirati alla strada. È una delle figure principali nell\'hip-hop italiano e ha guadagnato un ampio seguito nella scena rap nazionale.',
         'albums' => [
            'Verba Manent' => [
                'year' => 2010,
                'tracks' => [
                    'Odio Puro',
                    'Slego',
                    'Dove Vai',
                    'Fatto Bene'
                ]
            ],
            'The Best of Noyz Narcos' => [
                'year' => 2015,
                'tracks' => [
                    'Milanese',
                    'Colpo Grosso',
                    'Più Di Un Amico',
                    'Odio il Rap'
                ]
            ]
        ]]
    ];
    
    
    

    return view('about-us' , ['singers'=>$singers] );    // sto assegnando l'array a singers cosi da renderlo disponibile  sulla pagina del chi siamo
    
})->name('aboutUs');


Route::get('/chi-siamo/detail/{name}', function($name){   
    //importante che il parametro che andremo a passare sia univoco, parametro in ingresso è $name
   //ci metto l'array di dat cosi da averli a disposizione anche in questa pagna
   // ora facciamo un controllo vogliamo che al click del bottone si visualizzi la pagina di dettagli rispettivamente dei singoli cantanti ciclati, 
   // il controllo sarà il nome che andremo a passare $name è lo stesso dell'array ciclato

   $singers = [
    ['name' => 'Snoop Dogg', 'dateBirth' => '1971', 'url' => 'https://th.bing.com/th/id/R.2deb7b7de4aa48e555aac37178085df4?rik=OtQMnot8u0Pmjg&pid=ImgRaw&r=0', 
     'biography' => 'Snoop Dogg, nato Calvin Cordozar Broadus Jr., è un rapper, cantante e personalità dei media americano. Conosciuto per il suo stile rilassato e per le sue collaborazioni con Dr. Dre, è diventato una delle figure più influenti dell\'hip-hop.',
     'albums' => [
        'Doggystyle' => [
            'year' => 1993,
            'tracks' => [
                'Gin and Juice',
                'What\'s My Name?',
                'Murder Was the Case',
                'Doggy Dogg World'
            ]
        ],
        'Tha Doggfather' => [
            'year' => 1996,
            'tracks' => [
                'Snoop\'s Upside Ya Head',
                'Nuthin\' but a "G" Thang',
                'Doggy Dogg World'
            ]
        ]
    ]],
    
    ['name' => 'E-40', 'dateBirth' => '1967', 'url' => 'https://d3nxoulyw7bc8u.cloudfront.net/images/artists/1435/57156ec7-c51a-46b1-a288-9c303fda1e79.jpg', 
     'biography' => 'E-40, nato Earl Stevens, è un rapper e imprenditore americano proveniente da Vallejo, California. È conosciuto per il suo stile distintivo e l\'uso di un linguaggio ricco di slang, ed è stato una figura fondamentale nell\'hip-hop della costa occidentale.',
     'albums' => [
        'In a Major Way' => [
            'year' => 1995,
            'tracks' => [
                'Sprinkle Me',
                '1 Luv',
                'The Mailman',
                'Doin\' Too Much'
            ]
        ],
        'My Ghetto Report Card' => [
            'year' => 2006,
            'tracks' => [
                'Tell Me When to Go',
                'Yay Area',
                'E-40\'s Anthem'
            ]
        ]
    ]],
    
    ['name' => 'The Game', 'dateBirth' => '1979', 'url' => 'https://th.bing.com/th/id/OIP.OgZf4Qe11v0WotCWzgCQhwHaEK?rs=1&pid=ImgDetMain', 
     'biography' => 'The Game, nato Jayceon Terrell Taylor, è un rapper americano che ha guadagnato fama con il suo album di debutto "The Documentary". È una delle figure più prominenti dell\'hip-hop della costa occidentale degli anni 2000.',
     'albums' => [
        'The Documentary' => [
            'year' => 2005,
            'tracks' => [
                'Hate It or Love It',
                'How We Do',
                'Dreams',
                'Put You on the Game'
            ]
        ],
        'Doctor\'s Advocate' => [
            'year' => 2006,
            'tracks' => [
                'One Blood',
                'Let\'s Ride',
                'Wouldn\'t Get Far',
                'Ain\'t No Doubt About It'
            ]
        ]
    ]],
    
    ['name' => 'Eminem', 'dateBirth' => '1972', 'url' => 'https://th.bing.com/th/id/OIP.GLeckuanHeKcc4TWRkFbGgHaF7?rs=1&pid=ImgDetMain', 
     'biography' => 'Eminem, nato Marshall Bruce Mathers III, è un rapper, paroliere e produttore discografico americano. Conosciuto per le sue rime rapide e i testi controversi, è spesso considerato uno dei rapper più grandi di tutti i tempi.',
     'albums' => [
        'The Slim Shady LP' => [
            'year' => 1999,
            'tracks' => [
                'My Name Is',
                'Guilty Conscience',
                'Just Don\'t Give a F***',
                '97 Bonnie & Clyde'
            ]
        ],
        'The Marshall Mathers LP' => [
            'year' => 2000,
            'tracks' => [
                'The Real Slim Shady',
                'Stan',
                'The Way I Am',
                'Marshall Mathers'
            ]
        ]
    ]],
    
    ['name' => 'Axl Rose', 'dateBirth' => '1962', 'url' => 'https://2.bp.blogspot.com/-wQIh352HdIM/WCwkXZ1XKLI/AAAAAAAAFPs/N0ljG22Na4AaarjlGUV-Z49KVl3NHmEhACLcB/s1600/AxlRose.jpg', 
     'biography' => 'Axl Rose, nato William Bruce Rose Jr., è il cantante principale della band rock Guns N\' Roses. Conosciuto per la sua voce potente e la sua presenza scenica, è diventato una figura iconica nel panorama del rock durante la fine degli anni 80 e l\'inizio degli anni 90.',
     'albums' => [
        'Appetite for Destruction' => [
            'year' => 1987,
            'tracks' => [
                'Welcome to the Jungle',
                'Sweet Child o\' Mine',
                'Paradise City',
                'Nightrain'
            ]
        ],
        'Use Your Illusion I' => [
            'year' => 1991,
            'tracks' => [
                'November Rain',
                'Don\'t Cry',
                'You Could Be Mine',
                'Live and Let Die'
            ]
        ]
    ]],
    
    ['name' => 'Noyz Narcos', 'dateBirth' => '1979', 'url' => 'https://hips.hearstapps.com/hmg-prod/images/italian-rapper-noyz-narcos-performs-at-the-otttoemezzo-news-photo-1665586419.jpg?crop=1xw:0.75263xh;center,top&resize=1200:*', 
     'biography' => 'Noyz Narcos, nato Emanuele Riva, è un rapper italiano noto per i suoi testi crudi e ispirati alla strada. È una delle figure principali nell\'hip-hop italiano e ha guadagnato un ampio seguito nella scena rap nazionale.',
     'albums' => [
        'Verba Manent' => [
            'year' => 2010,
            'tracks' => [
                'Odio Puro',
                'Slego',
                'Dove Vai',
                'Fatto Bene'
            ]
        ],
        'The Best of Noyz Narcos' => [
            'year' => 2015,
            'tracks' => [
                'Milanese',
                'Colpo Grosso',
                'Più Di Un Amico',
                'Odio il Rap'
            ]
        ]
    ]]
];



foreach($singers as $singer){
if($name == $singer['name']){  // $name parametro in ingresso nella funzione è uguale a quanto si trova nel singolo array singer in posizione name....se si fai qualcosa
return view('about-us-detail', ['singer'=>$singer]);  // ora passiamo il dato alla vista che sara  singer che corrispondera a $singer, ovvero il singolo array ciclato
}
}
})->name('aboutUsDetail');  // aggiungiamo un name alle rotte






//-----------------------------------PAGINA CONTATTI----------------------------------------------------------------------------------------------------------------------------------

Route::get('/contatti', function () {
    return view('contacts');
})->name('contacts');


//---------------------------------------------------------PAGINA SONGS --------------------------------------------------------------------------------------------------------------------

Route::get('/song' , function (){

    $songs = [
        [
            'id' => 1,
            'title' => 'Ensiferum - Iron',
            'year' => 2004,
            'img' => 'https://th.bing.com/th/id/OIP.Yp6AtMcKfIw9KKUymouk8gHaE8?rs=1&pid=ImgDetMain.jpg',
            'genres' => 'Folk Metal',
        ],
        [
            'id' => 2,
            'title' => 'Blind Guardian - Mirror Mirror',
            'year' => 1995,
            'img' => 'https://th.bing.com/th/id/OIP.2aJeYaJqpcQd7jBrdpz37AHaHa?rs=1&pid=ImgDetMain.jpg',
            'genres' => 'Power Metal',
        ],
        [
            'id' => 3,
            'title' => 'Notorious B.I.G. - Big Poppa',
            'year' => 1994,
            'img' => 'https://th.bing.com/th/id/OIP.RlhZtD7mjTGNQSIqZMRjDwHaD4?w=958&h=502&rs=1&pid=ImgDetMain.jpg',
            'genres' => 'Hip Hop',
        ],
        [
            'id' => 4,
            'title' => '2Pac - Changes',
            'year' => 1998,
            'img' => 'https://th.bing.com/th/id/R.93b15caa223bd7c5bfa9dac3b5455818?rik=OuPb5uWc%2bbfsrg&pid=ImgRaw&r=0',
            'genres' => 'Hip Hop',
        ],
        [
            'id' => 5,
            'title' => 'Iron Maiden - The Trooper',
            'year' => 1983,
            'img' => 'https://th.bing.com/th/id/OIP.9ZnVgKD9jAwl7L5jyq-nbwHaEK?rs=1&pid=ImgDetMain.jpg',
            'genres' => 'Heavy Metal',
        ],
        [
            'id' => 6,
            'title' => 'Ensiferum - Sword Chant',
            'year' => 2001,
            'img' => 'https://th.bing.com/th/id/OIP.Yp6AtMcKfIw9KKUymouk8gHaE8?rs=1&pid=ImgDetMain.jpg',
            'genres' => 'Folk Metal',
        ],
        [
            'id' => 7,
            'title' => 'Blind Guardian - Nightfall',
            'year' => 1998,
            'img' => 'https://th.bing.com/th/id/OIP.2aJeYaJqpcQd7jBrdpz37AHaHa?rs=1&pid=ImgDetMain.jpg',
            'genres' => 'Power Metal',
        ],
        [
            'id' => 8,
            'title' => 'Notorious B.I.G. - Juicy',
            'year' => 1994,
            'img' => 'https://th.bing.com/th/id/OIP.znoqrwJeqT8L0EMgZa1wOQHaFP?rs=1&pid=ImgDetMain',
            'genres' => 'Hip Hop',
        ],
        [
            'id' => 9,
            'title' => '2Pac - California Love',
            'year' => 1995,
            'img' => 'https://th.bing.com/th/id/OIP.yk5uKSctsNBU-VUiU_tz4wHaEc?rs=1&pid=ImgDetMain.jpg',
            'genres' => 'Hip Hop',
        ],
        [
            'id' => 10,
            'title' => 'Iron Maiden - Run to the Hills',
            'year' => 1982,
            'img' => 'https://th.bing.com/th/id/OIP.xRAIUEEQXwQ9Lzcub5hI2gHaHa?w=171&h=188&c=7&r=0&o=5&pid=1.7.jpg',
            'genres' => 'Heavy Metal'
        ],
        [
            'id' => 11,
            'title' => 'Britney Spears - Toxic',
            'year' => 2003,
            'img' => 'https://th.bing.com/th/id/R.948289d3918e315115d8dc005fe50ad6?rik=JH40tIdKqRC3RQ&pid=ImgRaw&r=0.jpg',
            'genres' => 'Pop'
        ],
        [
            'id' => 12,
            'title' => 'Amy Winehouse - Rehab',
            'year' => 2006,
            'img' => 'https://eskipaper.com/images/amy-winehouse-2.jpg',
            'genres' => 'Soul, Jazz, R&B'
        ]
    ];

    return view('song.songs' , ['songs'=>$songs]);

})->name('song.list');





//-----------------------PAGINA SONGS DETTAGLIO-------------------------------------------------------------------------------------------------------------
Route::get('/song/detail/{id}' , function ($id){

    $songs = [
        [
            'id' => 1,
            'title' => 'Ensiferum - Iron',
            'year' => 2004,
            'img' => 'https://th.bing.com/th/id/OIP.Yp6AtMcKfIw9KKUymouk8gHaE8?rs=1&pid=ImgDetMain.jpg',
            'genres' => 'Folk Metal',
        ],
        [
            'id' => 2,
            'title' => 'Blind Guardian - Mirror Mirror',
            'year' => 1995,
            'img' => 'https://th.bing.com/th/id/OIP.2aJeYaJqpcQd7jBrdpz37AHaHa?rs=1&pid=ImgDetMain.jpg',
            'genres' => 'Power Metal',
        ],
        [
            'id' => 3,
            'title' => 'Notorious B.I.G. - Big Poppa',
            'year' => 1994,
            'img' => 'https://th.bing.com/th/id/OIP.RlhZtD7mjTGNQSIqZMRjDwHaD4?w=958&h=502&rs=1&pid=ImgDetMain.jpg',
            'genres' => 'Hip Hop',
        ],
        [
            'id' => 4,
            'title' => '2Pac - Changes',
            'year' => 1998,
            'img' => 'https://th.bing.com/th/id/R.93b15caa223bd7c5bfa9dac3b5455818?rik=OuPb5uWc%2bbfsrg&pid=ImgRaw&r=0',
            'genres' => 'Hip Hop',
        ],
        [
            'id' => 5,
            'title' => 'Iron Maiden - The Trooper',
            'year' => 1983,
            'img' => 'https://th.bing.com/th/id/OIP.9ZnVgKD9jAwl7L5jyq-nbwHaEK?rs=1&pid=ImgDetMain.jpg',
            'genres' => 'Heavy Metal',
        ],
        [
            'id' => 6,
            'title' => 'Ensiferum - Sword Chant',
            'year' => 2001,
            'img' => 'https://th.bing.com/th/id/OIP.Yp6AtMcKfIw9KKUymouk8gHaE8?rs=1&pid=ImgDetMain.jpg',
            'genres' => 'Folk Metal',
        ],
        [
            'id' => 7,
            'title' => 'Blind Guardian - Nightfall',
            'year' => 1998,
            'img' => 'https://th.bing.com/th/id/OIP.2aJeYaJqpcQd7jBrdpz37AHaHa?rs=1&pid=ImgDetMain.jpg',
            'genres' => 'Power Metal',
        ],
        [
            'id' => 8,
            'title' => 'Notorious B.I.G. - Juicy',
            'year' => 1994,
            'img' => 'https://th.bing.com/th/id/OIP.znoqrwJeqT8L0EMgZa1wOQHaFP?rs=1&pid=ImgDetMain',
            'genres' => 'Hip Hop',
        ],
        [
            'id' => 9,
            'title' => '2Pac - California Love',
            'year' => 1995,
            'img' => 'https://th.bing.com/th/id/OIP.yk5uKSctsNBU-VUiU_tz4wHaEc?rs=1&pid=ImgDetMain.jpg',
            'genres' => 'Hip Hop',
        ],
        [
            'id' => 10,
            'title' => 'Iron Maiden - Run to the Hills',
            'year' => 1982,
            'img' => 'https://th.bing.com/th/id/OIP.xRAIUEEQXwQ9Lzcub5hI2gHaHa?w=171&h=188&c=7&r=0&o=5&pid=1.7.jpg',
            'genres' => 'Heavy Metal'
        ],
        [
            'id' => 11,
            'title' => 'Britney Spears - Toxic',
            'year' => 2003,
            'img' => 'https://th.bing.com/th/id/R.948289d3918e315115d8dc005fe50ad6?rik=JH40tIdKqRC3RQ&pid=ImgRaw&r=0.jpg',
            'genres' => 'Pop'
        ],
        [
            'id' => 12,
            'title' => 'Amy Winehouse - Rehab',
            'year' => 2006,
            'img' => 'https://eskipaper.com/images/amy-winehouse-2.jpg',
            'genres' => 'Soul, Jazz, R&B'
        ]
    ];


    // questo array andra ciclato e poi dovremo verificare se il singolo song ciclato si effettivamente quello di cu dobbiamo visualizzare nella pagina di dettaglio
    foreach($songs as $song){
        if($id == $song['id']){
            return view('song.songs-detail', ['song'=>$song]);
        }
    }
})->name('song.detail');


