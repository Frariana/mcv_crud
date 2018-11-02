<?php
    #para redireccionar pagina
    function redireccionar($pagina){
        header('Location: '.RUTA_URL.$pagina);
    }