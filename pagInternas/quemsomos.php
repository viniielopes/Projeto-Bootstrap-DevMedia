<?php
require_once ('../templates/header.php');
require_once ('../templates/navbar.php');
?>

    <!-- Quem somos-->
    <section id="quemsomos" class="section_interna">
        <!-- Container -->
        <div class="container">
            <!-- Card -->
            <div class="card border-0">
                <!-- Row Cabeçalho -->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <!-- Card Cabeçalho -->
                        <div class="card-header text-center border mb-2">
                            <h4 class="card-title display-4">Quem somos</h4>
                            <h4 class="card-subtitle text-muted">Conheça a gente</h4>
                        </div>
                        <!-- //Card Cabeçalho -->
                    </div>
                </div>
                <!-- //Row Cabeçalho-->

                <!-- Row Corpo -->
                <div class="row">
                    <!-- Coluna esquerda -->
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <h4 class="card-title text-center font-weight-bold font-italic">Objetivo da empresa:</h4>
                        <p class="text-center text-lg-center card-text">Duis blandit nisl eu ante ullamcorper, id condimentum elit dapibus. Nulla ut mi at lacus dignissim
                            varius posuere sed elit. Mauris et sem sed ante cursus ultrices. Vivamus tortor dui, pharetra
                            sit amet eros vel, finibus imperdiet mauris. Curabitur vitae arcu nec mauris fermentum gravida.
                            Mauris dui enim, condimentum vel fringilla sed, pulvinar at nulla. Mauris sed varius neque. Praesent
                            et mauris placerat, sodales augue in, accumsan nulla. Donec euismod faucibus enim et dignissim.
                            Morbi aliquet hendrerit dui, id ornare sem congue id. Sed in nunc tortor. Fusce tellus mauris,
                            vulputate vitae pellentesque et, interdum a nisi. Maecenas nulla orci, porta quis turpis a, mollis
                            vulputate urna.</p>
                    </div>
                    <!-- //Coluna Esquerda -->

                    <!-- Coluna Central -->
                    <div class="col-lg-4 d-none d-sm-none d-md-none d-lg-block">
                        <img src="../img/gatoretangulo.jpg" alt="gato" class="img-fluid card-img">
                    </div>
                    <!-- //Coluna Central -->

                    <!-- Coluna Direita -->
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <h4 class="card-title text-center font-weight-bold font-italic">Missão da empresa:</h4>
                        <p class="text-center text-lg-center card-text">Duis blandit nisl eu ante ullamcorper, id condimentum elit dapibus. Nulla ut mi at lacus dignissim
                            varius posuere sed elit. Mauris et sem sed ante cursus ultrices. Vivamus tortor dui, pharetra
                            sit amet eros vel, finibus imperdiet mauris. Curabitur vitae arcu nec mauris fermentum gravida.
                            Mauris dui enim, condimentum vel fringilla sed, pulvinar at nulla. Mauris sed varius neque. Praesent
                            et mauris placerat, sodales augue in, accumsan nulla. Donec euismod faucibus enim et dignissim.
                            Morbi aliquet hendrerit dui, id ornare sem congue id. Sed in nunc tortor. Fusce tellus mauris,
                            vulputate vitae pellentesque et, interdum a nisi. Maecenas nulla orci, porta quis turpis a, mollis
                            vulputate urna.</p>
                    </div>
                    <!-- //Coluna Direita -->

                    <!-- Painel Equipe -->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center my-auto">
                        <h1 class="display-4 bg-light text-dark border rounded mt-2">Equipe</h1>
                        <img src="../img/gatinhos.jpg" alt="time de gatos" class="img-fluid w-100 h-75 card-img-bottom">
                    </div>
                    <!-- //Painel Equipe -->
                </div>
                <!-- //Row Corpo -->
            </div>
            <!-- //Card -->
            <a href="pagInternas/quemsomos.php" class="btn btn-lg btn-outline-dark form-control mt-2 mt-lg-4">Veja toda a nossa equipe!</a>
        </div>
        <!-- //Container -->
    </section>
    <!-- //Quem somos-->

    <?php
    require_once ('../templates/footer.php');
    ?>