<?php

headerDetalle($data); 

$banner = $data['page']['portada'];
$idpagina = $data['page']['idpost'];
?>

    <!-- ************************************************************** -->
    <!-- *************************  portada  ************************* -->
    <!-- ************************************************************** -->
    <section class="banner">
    <div class="capa">
        
        <h1 class="bannerTit estiloServi">
        ALOJAMIENTO
        </h1>
    </div>
    
    </section>
    <!-- ************************************************************** -->
    <!-- *************************  /portada  ************************* -->
    <!-- ************************************************************** -->

    <div class="container-fluid">
        <ul class="breadcrumb">
            <li><a href="<?= base_url(); ?>">Inicio</a></li> / 
            <li class="active"><strong> <?php
            if(viewPage($idpagina)){
                echo $data['page']['titulo'];
            } ?> </strong></li>
        </ul>
    </div>

        <div class="container">
                <div class="row">
                  
                            <?php
	if(viewPage($idpagina)){
		?>

<h1 class="text-center" >Hogar de Mamina</h1>
<div class="espacio"></div>
<h2 class="text-center">ALOJAMIENTO PERMANENTE O TEMPORAL</h2>
<div class="espacio"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p>El hogar de Mamina es un alojamiento temporal y permanente, nuestros huéspedes contaran con los servicios de terapia física, evaluación psicológica, evaluación geriátrica semanal, odontología, pedicure, manicure, peluquería, recreación asistida, lavandería y alimentación completa balanceada.</p>
        </div>
    </div>
</div>
        <?php
	}else{
  ?>
<div>
	<div class="container-fluid py-5 text-center" >
		<img src="<?= media() ?>/images/construction.png" alt="En construcción">
		<h3>Estamos trabajando para usted.</h3>
	</div>
</div>
<?php 
	}

?>

                   

                    </div>
        </div>
<?php

footerDetalle($data); 

?>            