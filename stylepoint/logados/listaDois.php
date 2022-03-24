<body>

    <?php
    include "header.php";
    ?>


    <main>
        <!-- ÁREA DE PESQUISA -->
        <div class="container-fluid busca">
                <div class="col-sm-6">
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
                            <img id="img-roupa" src="../img/roupas/calca-diesel.jpg" alt="Calça Diesel">
                        </div>

                        <div class="nome-roupa">
                            <span>Calça Diesel</span>
                        </div>  
                        
                        <div class="valor">
                             <strong>R$286,87 - dia</strong>
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
                            <img id="img-roupa" src="../img/roupas/bolsa-lv.jpg" alt="Bolsa Louis Vuitton">
                        </div>

                        <div class="nome-roupa">
                            <span>Bolsa Louis Vuitton</span>
                        </div>  

                        <div class="valor">
                             <strong>R$876,99 - dia</strong>
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
                            <img id="img-roupa" src="../img/roupas/casaco-dg.jpg" alt="Casaco Dolce & Gabbana">
                        </div>

                        <div class="nome-roupa">
                            <span>Casaco Dolce & Gabbana</span>
                        </div>  

                        <div class="valor">
                             <strong>R$1.899,90 - dia</strong>
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
                            <img id="img-roupa" src="../img/roupas/calca-zara.jpg" alt="Calça Zara">
                        </div>

                        <div class="descricao-roupas">

                            <div class="nome-roupa">
                                <span>Calça Zara</span>
                            </div>  

                            <div class="valor">
                                <strong>R$421,80 - dia</strong>
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
                            <img id="img-roupa" src="../img/roupas/jaqueta-ck.jpg" alt="Jaqueta Calvin Klein">
                        </div>

                        <div class="nome-roupa">
                            <span>Jaqueta Calvin Klein</span>
                        </div>  
                        
                        <div class="valor">
                            <strong>R$475,87 - dia</strong>
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
                            <img id="img-roupa" src="../img/roupas/tenis-nike.jfif" alt="Tênis Nike">
                        </div>

                        <div class="nome-roupa">
                            <span>Tênis Nike</span>
                        </div>  

                        <div class="valor">
                            <strong>R$244,99 - dia</strong>
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
                            <img id="img-roupa" src="../img/roupas/camisa-gucci.jpg" alt="Camisa Gucci">
                        </div>

                        <div class="nome-roupa">
                            <span>Camisa Gucci</span>
                        </div>  

                        <div class="valor">
                            <strong>R$821,90 - dia</strong>
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
                            <img id="img-roupa-indisponivel" src="../img/roupas/bolsa-prada.jpg" alt="Bolsa Prada">
                        </div>

                        <div class="descricao-roupas">

                            <div class="nome-roupa">
                                <span>Indisponível</span>
                            </div>  

                            <div class="indisponivel">
                                <strong> <i> <s> R$367,80 - dia </s> </i> </strong>
                            </div>

                            <div class="btn-posicao">
                                <button disabled id="btn-locacao-indisponivel" href="#">
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

            <a button id="btn-pages" href="lista.php">
                Página Anterior
            </a>

            <button id="btn-pages" disabled>
               &nbsp; 2 &nbsp;
            </button>

            
        </div>

    </main>

    <?php
        include "footer.php";
    ?>

</body>