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

<h1 class="text-center" >Casa de reposo Surco</h1>
<div class="espacio"></div>
<h2 class="text-center">ALOJAMIENTO PERMANENTE O TEMPORAL</h2>
<div class="espacio"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p>En “Casa de reposo Surco”,  queremos que el paciente se sienta como en casa, incluso mejor por ello contamos con actividades recreativas, para lograr el fin. Contamos con médicos, enfermeros especialistas en el cuidado del adulto mayor. El ocupante puede quedarse de forma temporal o permanente. Con la ayuda de su familia y nuestro staff de especialistas podemos hacer una vida plena para el residente.</p>
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