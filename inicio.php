
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'head.php' ;?>          
</head>
<body>
    <header>  
    </header>    
    <nav>
        <?php include 'nav.php' ;?>
    </nav>
    <main>
        <!-- Presentacion -->

        <div class="container-fluid px-5 cntr-green">
            <div class="row g-1">  
                <div class="col-xl-12 portada">
                    <div class="col w-auto flex-row justify-content-center align-items-center">
                        <a onclick="redirectWithBlur(event)" href=<?php echo $l_inicio;?> class="d-flex flex-row" ><img  class="me-1" src="imagenes/base-icon.png" alt="Imagen temporal" width="45" height="45"><h1 class="text-base" > Ultra<span class="text-bold">Tech</span> </h1></a>
                        <a onclick="redirectWithBlur(event)" href=<?php echo $l_inicio;?> class="mt-1" ><h3 class="text-base" > El poder de la tecnología a tu alcance. </h3></a>
                    </div>
                    <h3> "Soluciones Digitales y Tecnológicas a tu Medida" </h3>
                    <br>
                    <br>    
                    <h1 class="pb-2" > ¿Quienes Somos? </h1> 
                    <div class="col w-auto flex-row justify-content-center align-items-center">
                        <h5 class="w-50" > Somos una Pyme especializada en soluciones digitales integrales. Ofrecemos desarrollo web personalizado, soporte técnico eficiente, hosting web confiable, implementación de software licenciado y estrategias de marketing digital. En Ultratech Chile, nos comprometemos a impulsar tu negocio en el mundo digital, proporcionando soluciones adaptadas a tus necesidades y objetivos. </h5>
                    </div>
                </div>
            </div>
        </div>
        <br>
            <!-- Servicios -->           
        <div class="container-fluid px-5 cntr-green">
            <div class="row g-1">  
                <div class="col-xl-12">
                    <h1 class="text-center pb-4" >Servicios Informáticos</h1> 
                </div>
                <div class="col-xl-4 mb-3 px-2">                   
                    <div class="row card card-base g-0">
                        <div class="col-xl-4">
                            <img src=<?php echo $tmp_img;?> class="img-fluid rounded-start" alt="tmp image">
                        </div>
                        <div class="col-xl-8">
                            <div class="card-body">
                                <h5 class="card-title">Desarrollo de páginas web</h5>
                                <p class="card-text">Creación y diseño de sitios web personalizados para satisfacer las necesidades en línea de individuos o empresas, mejorando la presencia digital.</p>                                
                                <div class="mt-auto text-end">
                                    <a href="https://wa.me/56953077891?text=Me%20interesa%20el%20servicio%20de%20Desarrollo%20de%20p%C3%A1ginas%20web%2C%20vengo%20desde%20el%20sitio%20web%20UltraTech" class="btn btn-base btn-lg">
                                        <img src="imagenes/wsp-icon.png" alt="Imagen temporal" width="30" height="30"> Consulte
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mb-3 px-2" style="max-width: 540px;">
                    <div class="row card card-base g-0">
                        <div class="col-xl-4">
                            <img src=<?php echo $tmp_img;?> class="img-fluid rounded-start" alt="tmp image">
                        </div>
                        <div class="col-xl-8">
                            <div class="card-body">
                                <h5 class="card-title">Soporte técnico de computadoras</h5>
                                <p class="card-text">Asistencia y mantenimiento de hardware y/o software para resolver problemas técnicos, mejorar el rendimiento y asegurar el funcionamiento óptimo de computadoras.</p>                            
                                <div class="mt-auto text-end">
                                    <a href="https://wa.me/56953077891?text=Me%20interesa%20el%20servicio%20de%20Soporte%20t%C3%A9cnico%20de%20computadoras%2C%20vengo%20desde%20el%20sitio%20web%20UltraTech%20" class="btn btn-base btn-lg">
                                        <img src="imagenes/wsp-icon.png" alt="Imagen temporal" width="30" height="30"> Consulte
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mb-3 px-2" style="max-width: 540px;">
                    <div class="row card card-base g-0">
                        <div class="col-xl-4">
                            <img src=<?php echo $tmp_img;?> class="img-fluid rounded-start" alt="tmp image">
                        </div>
                        <div class="col-xl-8">
                            <div class="card-body">
                                <h5 class="card-title">Servicio de hosting web</h5>
                                <p class="card-text">Orientación especializada en la selección y gestión de soluciones de alojamiento web, enfocada en garantizar seguridad, rendimiento y escalabilidad para sitios web.</p>                            
                                <div class="mt-auto text-end">
                                    <a href="https://wa.me/56953077891?text=Me%20interesa%20el%20servicio%20de%20Servicio%20de%20hosting%20web%2C%20vengo%20desde%20el%20sitio%20web%20UltraTech" class="btn btn-base btn-lg">
                                        <img src="imagenes/wsp-icon.png" alt="Imagen temporal" width="30" height="30"> Consulte
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mb-3 px-2" style="max-width: 540px;">
                    <div class="row card card-base g-0">
                        <div class="col-xl-4">
                            <img src=<?php echo $tmp_img;?> class="img-fluid rounded-start" alt="tmp image">
                        </div>
                        <div class="col-xl-8">
                            <div class="card-body">
                                <h5 class="card-title">Instalación de software licenciado</h5>
                                <p class="card-text">Implementación y configuración de programas informáticos con licencia oficial, asegurando su correcta activación y funcionamiento conforme a las normativas legales.</p>                            
                                <div class="mt-auto text-end">
                                    <a href="https://wa.me/56953077891?text=Me%20interesa%20el%20servicio%20de%20Instalaci%C3%B3n%20de%20software%20licenciado%2C%20vengo%20desde%20el%20sitio%20web%20UltraTech" class="btn btn-base btn-lg">
                                        <img src="imagenes/wsp-icon.png" alt="Imagen temporal" width="30" height="30"> Consulte
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mb-3 px-2" style="max-width: 540px;">
                    <div class="row card card-base g-0">
                        <div class="col-xl-4">
                                <img src=<?php echo $tmp_img;?> class="img-fluid rounded-start" alt="tmp image">
                        </div>
                            <div class="col-xl-8">
                                <div class="card-body">
                                    <h5 class="card-title">Asesorías en marketing digital</h5>
                                    <p class="card-text">Estrategias y recomendaciones personalizadas para promocionar productos o servicios en internet, optimizando la presencia en línea y maximizando el retorno de inversión.</p>                                
                                    <div class="mt-auto text-end">
                                    <a href="https://wa.me/56953077891?text=Me%20interesa%20el%20servicio%20de%20Asesor%C3%ADas%20en%20marketing%20digital%2C%20vengo%20desde%20el%20sitio%20web%20UltraTech" class="btn btn-base btn-lg">
                                        <img src="imagenes/wsp-icon.png" alt="Imagen temporal" width="30" height="30"> Consulte
                                    </a> 
                                </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-xl-4 mb-3 px-2" style="max-width: 540px;">
                    <div class="row card card-base g-0">
                        <div class="col-xl-4">
                            <img src=<?php echo $tmp_img;?> class="img-fluid rounded-start" alt="tmp image">
                        </div>
                        <div class="col-xl-8">
                            <div class="card-body">
                                <h5 class="card-title">Diagnóstico y/o Instalación de impresoras</h5>
                                <p class="card-text">Evaluación y configuración de dispositivos de impresión para garantizar su correcto funcionamiento, incluyendo diagnóstico de problemas y instalación de hardware y software necesarios.</p>                                
                                <div class="mt-auto text-end">
                                <a href="https://wa.me/56953077891?text=Me%20interesa%20el%20servicio%20de%20Diagn%C3%B3stico%20y%2Fo%20Instalaci%C3%B3n%20de%20impresoras%2C%20vengo%20desde%20el%20sitio%20web%20UltraTech" class="btn btn-base btn-lg">
                                    <img src="imagenes/wsp-icon.png" alt="Imagen temporal" width="30" height="30"> Consulte
                                </a> 
                            </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-xl-4 mb-3 px-2" style="max-width: 540px;">
                    <div class="row card card-base g-0">
                        <div class="col-xl-4">
                            <img src=<?php echo $tmp_img;?> class="img-fluid rounded-start" alt="tmp image">
                        </div>
                        <div class="col-xl-8">
                            <div class="card-body">
                                <h5 class="card-title">Atención remota o presencial</h5>
                                <p class="card-text">Soporte técnico y asesoramiento disponible tanto de manera remota como presencial para resolver problemas y brindar soluciones adaptadas a las necesidades del cliente.</p>                                
                                <div class="mt-auto text-end">
                                <a href="https://wa.me/56953077891?text=Me%20interesa%20el%20servicio%20de%20Atenci%C3%B3n%20remota%20o%20presencial%2C%20vengo%20desde%20el%20sitio%20web%20UltraTech%20" class="btn btn-base btn-lg">
                                    <img src="imagenes/wsp-icon.png" alt="Imagen temporal" width="30" height="30"> Consulte
                                </a> 
                            </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>                    
    </main>
    <footer>
        <?php include 'footer.php' ;?>
    </footer>
</body>
</html>
