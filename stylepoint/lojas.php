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
                    <img id="img-loja" src="img-lojas/tijuca.jpg" alt="Loja Tijuca">
                </div>
            </div>
        </div>


    <div class="container-12">
        <div class="row endereco-loja text-center">
            <h2>Av. Maracanã, 987 - Tijuca, Rio de Janeiro - RJ, 20511-000 | 2º Andar</h2>
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
            <button id="num-pages" disabled>
               &nbsp; 1 &nbsp;
            </button>

            <a button id="btn-pages" href="lojasDois.php">
                próxima página
            </a>
        </div>

    <?php
        include "footer.php";
    ?>

</body>