<?php include 'vars.php' ?>
<div class="container-fluid">
    <div class="row moviles">
        <div class="blurry-transition" id="blurryTransition"></div>
        <div class="col-xl-8 justify-content-center align-items-start moviles">
            <div class="row align-items-center">
                <div class="col w-auto">
                    <a onclick="redirectWithBlur(event)" href=<?php echo $l_inicio;?> class="d-flex flex-row align-items-center" ><img  class="me-1" src="imagenes/base-icon.png" alt="Imagen temporal" width="45" height="45"><h1 class="text-base" > Ultra<span class="text-bold">Tech</span> Chile</h1></a>
                    <a onclick="redirectWithBlur(event)" href=<?php echo $l_inicio;?>><h3 class="text-base" > El poder de la tecnología a tu alcance. </h3></a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 justify-content-center align-items-end moviles">
            <!-- Botón para abrir el menú lateral -->
            <button class="me-3 btn btn-outline btn-lg" onclick="toggleNav()"><h3 class="text-gold" >☰ Menú</h3></button>
            <!-- El menú lateral -->
            <div class="row sidenav d-grid" id="mySidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a onclick="redirectWithBlur(event)" href=<?php echo $l_inicio;?>> 
                    <button type="button" class="btn btn-outline btn-lg"> Inicio </button>    
                </a>
                <a onclick="redirectWithBlur(event)" href=<?php echo $l_precios;?>> 
                    <button type="button" class="btn btn-outline btn-lg"> Precios </button>    
                </a>
                <a onclick="redirectWithBlur(event)" href=<?php echo $l_prfs;?>> 
                    <button type="button" class="btn btn-outline btn-lg"> Preguntas Frecuentes </button>    
                </a>
                <a onclick="redirectWithBlur(event)" href=<?php echo $l_comments;?>> 
                    <button type="button" class="btn btn-outline btn-lg"> Deje sus comentarios </button>    
                </a>
                <a href="#contacto" onclick="closeNav()" class="smooth-scroll-link" > 
                    <button type="button" class="btn btn-outline btn-lg"> Contacto </button>    
                </a>
            </div>
        </div>        
    </div>
</div>