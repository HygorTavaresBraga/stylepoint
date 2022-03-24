<header>
    <?php
    include "header.php";
    ?>
</header>

<body>
    <main>
        <div class="container-fluid carrossel">
            <!--|CARROSSEL|-->
            <div class="row" style="margin-bottom: 50px;">
                <div id="carrossel" class="col-lg-12">
                <hr>
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="img/home/carrossel.jpg" class="d-block w-100" alt="Carrossel 1">
                            </div>
                            <div class="carousel-item">
                            <img src="img/home/carousel-2.jpg" class="d-block w-100" alt="Carrossel 2">
                            </div>
                            <div class="carousel-item">
                            <img src="img/home/carousel-3.jpg" class="d-block w-100" alt="Carrossel 3">
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        
            <div class="row">
                <div id="detail" class="col-lg-12">
                    <span>&nbsp;</span>
                </div>
            </div>

        <!--|CATEGORIAS|-->

        <hr>

        <div class="container-fluid categorias">
            <div class="row" style="margin-bottom: 50px;">

                <div class="col-sm-2"></div>
            
                <div class="col-sm-2 area-categoria">
                    <a href="masculino.php"> <img id="img-categorias" class="banner-bot-1" src="img/home/categorias/masculino.jpg"/> </a>
                    <span id="txt-categorias"> <a href="masculino.php"> Masculino </a> </span>
                </div>

                <div class="col-sm-2 area-categoria">
                <a href="feminino.php"> <img id="img-categorias" class="banner-bot-2" src="img/home/categorias/feminino.jpg"> </a>
                    <span id="txt-categorias"> <a href="feminino.php"> Feminino </a> </span>
                </div>

                <div class="col-sm-2 area-categoria">
                    <a href="infantil.php"> <img id="img-categorias" class="banner-bot-1" src="img/home/categorias/infantil.jpg"/> </a>
                    <span id="txt-categorias"> <a href="infantil.php"> Infantil </a> </span>
                </div>

                <div class="col-sm-2 area-categoria">
                    <a href="nao-binario.php"> <img id="img-categorias" class="banner-bot-1" src="img/home/categorias/nao-binario.jpg"/> </a>
                    <span id="txt-categorias"> <a href="nao-binario.php"> Não binário </a> </span>
                </div>

                <div class="col-sm-2"></div>

            </div>
        </div>

        <hr>
        
    </main>

    <footer>
        <?php
        include "footer.php";
        ?>
    </footer>
    

</body>