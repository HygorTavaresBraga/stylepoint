<body>

    <?php
    include "header.php";
    ?>


    <main>
        <!-- ÁREA DE PESQUISA -->
        <div class="container-fluid busca">
                <div class="col-sm-12">
                    <form action="action.php" method="POST">

                        <input a class="area-busca" type="text" name="search" id="search" placeholder="Área de pesquisa" required>
                        <button a class="btn-busca" type="submit"><i class="fas fa-search"></i></button>

                    </form>
                </div>
            </div>
        </div>



        <!--PRIMEIRA LINHA DE ROUPAS-->

        <div class="container-fluid roupas">
            <div class="row">
                <div class="col-lg-2"></div>

                <div class="col-lg-2">
                    <div class="box">

                        <div>
                            <img id="img-roupa" src="img/roupas/camiseta-adidas.jpeg" alt="Camiseta Adidas">
                        </div>

                        <div class="nome-roupa">
                            <span>Camisa Adidas Originals</span>
                        </div>  
                        
                        <div class="valor">
                             <strong>R$42,87 - dia</strong>
                        </div>

                        <div>
                            <button id="btn-locacao" href="#">
                                LOCAR
                            </button>
                        </div>

                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="box">

                        <div>
                            <img id="img-roupa" src="img/roupas/vestido-gucci.jpg" alt="Camiseta Adidas">
                        </div>

                        <div class="nome-roupa">
                            <span>Vestido Gucci Jersey Light</span>
                        </div>  

                        <div class="valor">
                             <strong>R$1.875,22 - dia</strong>
                        </div>

                        <div>
                            <button id="btn-locacao" href="#">
                                LOCAR
                            </button>
                        </div>

                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="box">

                        <div>
                            <img id="img-roupa" src="img/roupas/conjunto-dior.jpg" alt="Camiseta Adidas">
                        </div>

                        <div class="nome-roupa">
                            <span>Conjunto Dior Pulôver</span>
                        </div>  

                        <div class="valor">
                             <strong>R$2.299,90 - dia</strong>
                        </div>

                        <div>
                            <button id="btn-locacao" href="#">
                                LOCAR
                            </button>
                        </div>

                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="box">

                        <div>
                            <img id="img-roupa" src="img/roupas/calca-amiri.jpg" alt="Camiseta Adidas">
                        </div>

                        <div class="descricao-roupas">

                            <div class="nome-roupa">
                                <span>Casaco Amiri</span>
                            </div>  

                            <div class="valor">
                                <strong>R$292,70 - dia</strong>
                            </div>

                            <div class="btn-posicao">
                                <button id="btn-locacao" href="#">
                                    LOCAR
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2"></div>

            </div>

            <div class="row">
                <div class="col-lg-2"></div>

                <div class="col-lg-2">
                    <div class="box">

                        <div>
                            <img id="img-roupa" src="img/roupas/dior-oblique.jpg" alt="Camiseta Adidas">
                        </div>

                        <div class="nome-roupa">
                            <span>Dior Oblique Pixel</span>
                        </div>  
                        
                        <div class="valor">
                            <strong>R$1.477,29 - dia</strong>
                        </div>

                        <div>
                            <button id="btn-locacao" href="#">
                                LOCAR
                            </button>
                        </div>

                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="box">

                        <div>
                            <img id="img-roupa" src="img/roupas/polo-gucci.jpg" alt="Camiseta Adidas">
                        </div>

                        <div class="nome-roupa">
                            <span>Camisa Gucci Polo</span>
                        </div>  

                        <div class="valor">
                            <strong>R$1.104,90 - dia</strong>
                        </div>

                        <div>
                            <button id="btn-locacao" href="#">
                                LOCAR
                            </button>
                        </div>

                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="box">

                        <div>
                            <img id="img-roupa" src="img/roupas/boot-gucci.jfif" alt="Ankle Boot">
                        </div>

                        <div class="nome-roupa">
                            <span>Gucci Ankle Boot</span>
                        </div>  

                        <div class="valor">
                            <strong>R$1.149,90 - dia</strong>
                        </div>

                        <div>
                            <button id="btn-locacao" href="#">
                                LOCAR
                            </button>
                        </div>

                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="box">

                        <div>
                            <img id="img-roupa" src="img/roupas/bolsa-prada.jpg" alt="Bolsa Prada">
                        </div>

                        <div class="descricao-roupas">

                            <div class="nome-roupa">
                                <span>Bolsa Prada</span>
                            </div>  

                            <div class="valor">
                                <strong>R$367,80 - dia</strong>
                            </div>

                            <div class="btn-posicao">
                                <button id="btn-locacao" href="#">
                                    LOCAR
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2"></div>

            </div>

        </div>

        <div class="nav-pages">
            <button id="btn-pages" disabled>
               &nbsp; 1 &nbsp;
            </button>

            <a button id="btn-pages" href="listaDois.php">
                próxima página
            </a>
        </div>

    </main>

    <?php
        include "footer.php";
    ?>

</body>