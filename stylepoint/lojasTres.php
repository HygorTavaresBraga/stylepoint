<header>
    <?php
    include "header.php";
    ?>
</header>


<body>
    <!--PRIMEIRA LOJA-->

        <div class="container-12">
            <div class="row local">
                <div class="col-lg-12">
                    <img id="img-loja" src="img-lojas/caxias.jpg" alt="Loja Caxias">
                </div>
            </div>
        </div>

    <div class="container-12">
        <div class="row endereco-loja text-center">
            <h2>Rod. Washington Luíz, 2895 - Parque Duque, Duque de Caxias - RJ, 25085-008 | 2º Andar</h2>
        </div>
    </div>


    <div class="back-map">

        <div style='overflow:hidden;height:280px;width:100%;color: #0095eb'>
            <div id='gmap_canvas' style='height:280px;width:100%;'></div>
            <style>#gmap_canvas img{max-width:none!important;background:none!important}.gm-ui-hover-effect{
            display: none!important;}</style>
        </div>

            <!-- Alterar apenas Aqui -->
            <script type='text/javascript'>
                function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng(-22.9216159,-43.2352604),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-22.9216159,-43.2352604)});infowindow = new google.maps.InfoWindow({content:'<strong> STYLEPOINT </strong><br> SHOPPING TIJUCA <br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
            </script>
            <!-- Alterar apenas Aqui -->

    </div>


    <div class="nav-pages">
            <a button id="btn-pages" href="lojasDois.php">
                página anterior
            </a>

            <button id="num-pages" disabled>
               &nbsp; 3 &nbsp;
            </button>
        </div>

    <?php
        include "footer.php";
    ?>

</body>