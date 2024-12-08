<?php
$movies = [

	[
        'title' => 'Blue Lock Nagi Movie',
        'thumbnail' => 'images/bluelock.jpg',
        'trailer' => 'videos/bluelcok.mp4',
        'description' => 'Blue Lock: Episode Nagi is a 2024 coming-of-age sports anime movie that tells the origin story of Seishiro Nagi, a fan-favorite character from the hit anime series Blue Lock'
    ],
	[
        'title' => 'Squid Game 2',
        'thumbnail' => 'images/squid.jpg',
        'trailer' => 'videos/squid.mp4',
        'description' => 'The second season of Squid Game is about Player 456, Seong Gi-hun, who returns to the deadly survival game to take revenge on the Front Man and end the game'
    ],
		[
        'title' => 'Spiderman No Way Home',
        'thumbnail' => 'images/spiderman.jpg',
        'trailer' => 'videos/spiderman.mp4',
		'description' => 'Mysterio exposes the identity of Peter causing him and his loved ones to face social and legal issues'
   ],
		[
        'title' => 'Avengers End Game',
        'thumbnail' => 'images/avengers.jpg',
        'trailer' => 'videos/avengers.mp4',
        'description' => 'The Avengers must come together to reverse the deed of Thanos and restore balance to the universe after he used the Infinity Stones to wipe out half of the population in Avengers: Infinity War. 
'
    ],
		[
        'title' => 'Geostorm',
        'thumbnail' => 'images/geostorm.jpg',
        'trailer' => 'videos/geostorm.mp4',
        'description' => 'In the movie, a satellite designer has to prevent a global geostorm brought on by broken climate control satellites. An worldwide alliance of nations developed the "Dutch Boy" satellites to safeguard Earth against natural disasters. However, the system starts attacking Earth after three years of successful use.
'
    ],
		[
        'title' => 'Captain America: Brave New World',
        'thumbnail' => 'images/captain.jpg',
        'trailer' => 'videos/captainamerica.mp4',
        'description' => 'The official plot summary for the film is as follows: "Captain America: Brave New World centers on Sam Wilson, who becomes embroiled in a global scandal following a meeting with recently elected U.S. President Thaddeus Ross."'
    ],
		[
        'title' => 'How To Train Your Dragon',
        'thumbnail' => 'images/howtotrain.jpg',
        'trailer' => 'videos/howtotrain.mp4',
        'description' => 'A young Viking named Hiccup aspires to follow the footsteps of his father and become a dragon slayer, but his father declines. The rarest dragon, the Night Fury, is captured by Hiccup, who chooses to make friends with it rather than kill it. Hiccup understands that in order to keep Toothless safe, he must reveal the truth about dragons to the Vikings.'
    ],
		[
        'title' => 'A Minecraft Movie',
        'thumbnail' => 'images/mine.jpg',
        'trailer' => 'videos/mine.mp4',
        'description' => 'Garrett "The Garbage Man" Garrison (Jason Momoa), Henry (Sebastian Eugene Hansen), Natalie (Emma Myers), and Dawn (Danielle Brooks) are among the odd explorers who are drawn into the Overworld through an enigmatic doorway. To return home, they have to conquer the Overworld, defend it from evil, and set out on a magnificent adventure with Steve (Jack Black). '
    ],
		[
        'title' => 'Arcane Season 2',
        'thumbnail' => 'images/arcane.jpg',
        'trailer' => 'videos/arcane.mp4',
        'description' => 'The League of Legends universe s power struggles, internal conflicts, and alliances are all continued in Arcane season 2. The season begins with Jinx launching a stolen Hextech gemstone at the Piltover council, following the events of season 1. The already strained relationship between the affluent utopia of Piltover and its sinister undercity, Zaun, is tipped by this attack. 
'
    ],	[
        'title' => 'Oppenheimer',
        'thumbnail' => 'images/Oppenheimer.jpg',
        'trailer' => 'videos/Oppenheimer.mp4',
        'description' => 'Oppenheimer is a 2023 biographical film about J. Robert Oppenheimer, the theoretical physicist who led the Manhattan Project s Los Alamos Laboratory during World War II'
    ]
	

	
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Watch For Fun - Movie Trailers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/watchforfun.jpg" width="50" height="50" alt="Watch For Fun">
                Watch For Fun
            </a>
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="text-center mb-4">Movie Trailers</h1>
        <div class="row">
            <?php foreach ($movies as $index => $movie): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?= $movie['thumbnail'] ?>" class="card-img-top movie-thumbnail" data-trailer="<?= $movie['trailer'] ?>" alt="<?= $movie['title'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $movie['title'] ?></h5>
                        <p class="card-text"><?= $movie['description'] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Trailer Modal -->
    <div class="modal fade" id="trailerModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Movie Trailer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    <video id="trailerVideo" width="100%" controls>
                        <source id="trailerSource" src="" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>