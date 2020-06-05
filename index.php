<?php

// Head
include_once __DIR__ . '/partials/template/head.php';

?>


<body>
    <!-- App Container -->
    <div class="app">
        
        <?php //header
            include __DIR__ . '/partials/template/header.php';
        ?>

        <main class="main-content">
            <section class="movies-ctn container-fluid">

            <?php // include MOVIE CLASS
                include __DIR__ . '/partials/classes/movie.php';
                include __DIR__ . '/partials/movie-collection.php';
            ?>

                <div class="movie row position-relative d-flex align-items-center">
                    <div class="movie-info">
                        <?php echo $movie_1->printMovieInfo(); ?>
                    </div>
                    <div class="movie-trailer">
                        <div class="iframe-container">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $movie_1->trailer; ?>" frameborder="0" allow="accelerometer; autoplay;    encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Movie Cover -->
                    <div class="movie-cover position-absolute">
                        <img class="img-fluid" src="dist/img/<?php echo $movie_1->cover; ?>" alt="">
                    </div>
                </div>

                <div class="movie row position-relative d-flex align-items-center">
                    <div class="movie-info">
                        <?php echo $movie_2->printMovieInfo(); ?>
                    </div>
                    <div class="movie-trailer">
                        <div class="iframe-container">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $movie_2->trailer; ?>" frameborder="0" allow="accelerometer; autoplay;    encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Movie Cover -->
                    <div class="movie-cover position-absolute">
                        <img class="img-fluid" src="dist/img/<?php echo $movie_2->cover; ?>" alt="">
                    </div>
                </div>
                <div class="movie row position-relative d-flex align-items-center">
                    <div class="movie-info">
                        <?php echo $movie_3->printMovieInfo(); ?>
                    </div>
                    <div class="movie-trailer">
                        <div class="iframe-container">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $movie_3->trailer; ?>" frameborder="0" allow="accelerometer; autoplay;    encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Movie Cover -->
                    <div class="movie-cover position-absolute">
                        <img class="img-fluid" src="dist/img/<?php echo $movie_3->cover; ?>" alt="">
                    </div>
                </div>
            </section>
        </main>

<?php

// footer and tag's close
include_once __DIR__ . '/partials/template/footer.php';

?>