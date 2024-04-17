
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
        <div class="container-fluid px-5 cntr-green">
            <button class="me-3 btn btn-outline btn-lg text-italic" onclick="toggleAllAnswers()">Abrir todas las respuestas</button>
            <div class="row">             
                <div class="col-xl-12 mb-3 px-2">
                    <div class="faq-question" onclick="toggleAnswer('r1')">
                        <h3>¿Qué servicios ofrece Ultratech Chile?</h3>
                    </div>
                    <div class="faq-answer" id="r1">
                        <h5>Ofrecemos una gama completa de servicios digitales y tecnológicos, incluyendo desarrollo de páginas web, soporte técnico de computadoras, servicio de hosting web, instalación de software licenciado, asesorías en marketing digital, diagnóstico y/o instalación de impresoras, y atención tanto remota como presencial.</h5>
                    </div>
                </div>
                <div class="col-xl-12 mb-3 px-2">
                    <div class="faq-question" onclick="toggleAnswer('r2')">
                        <h3>¿En qué se diferencia el desarrollo web de Ultratech Chile?</h3>
                    </div>
                    <div class="faq-answer" id="r2">
                        <h5>Nos especializamos en la creación y diseño de sitios web personalizados que no solo satisfacen tus necesidades en línea sino que también mejoran tu presencia digital. Cada proyecto es tratado de manera única, adaptándonos completamente a los requerimientos del cliente.</h5>
                    </div>
                </div>
                <div class="col-xl-12 mb-3 px-2">
                    <div class="faq-question" onclick="toggleAnswer('r3')">
                        <h3>¿Qué incluye el soporte técnico de computadoras?</h3>
                    </div>
                    <div class="faq-answer" id="r3">
                        <h5>Nuestro soporte técnico abarca asistencia y mantenimiento tanto de hardware como de software para resolver problemas técnicos, mejorar el rendimiento y asegurar el funcionamiento óptimo de tus computadoras.</h5>
                    </div>
                </div>
                <div class="col-xl-12 mb-3 px-2">
                    <div class="faq-question" onclick="toggleAnswer('r4')">
                        <h3>¿Cómo puedo elegir el plan de hosting adecuado para mi sitio web?</h3>
                    </div>
                    <div class="faq-answer" id="r4">
                        <h5>Brindamos orientación especializada para seleccionar y gestionar soluciones de alojamiento web, enfocadas en seguridad, rendimiento y escalabilidad. Evaluaremos tus necesidades específicas para recomendarte el mejor plan.</h5>
                    </div>
                </div>
                <div class="col-xl-12 mb-3 px-2">
                    <div class="faq-question" onclick="toggleAnswer('r5')">
                        <h3>¿Qué tipo de software licenciado instalan?</h3>
                    </div>
                    <div class="faq-answer" id="r5">
                        <h5>Instalamos y configuramos una amplia variedad de programas informáticos con licencia oficial, asegurando que su activación y funcionamiento cumplan con todas las normativas legales.</h5>
                    </div>
                </div>
                <div class="col-xl-12 mb-3 px-2">
                    <div class="faq-question" onclick="toggleAnswer('r6')">
                        <h3>¿Qué estrategias de marketing digital ofrecen?</h3>
                    </div>
                    <div class="faq-answer" id="r6">
                        <h5>Ofrecemos estrategias y recomendaciones personalizadas para promocionar tus productos o servicios en internet, optimizando tu presencia en línea y maximizando el retorno de inversión.</h5>
                    </div>
                </div>
                <div class="col-xl-12 mb-3 px-2">
                    <div class="faq-question" onclick="toggleAnswer('r7')">
                        <h3>¿Ofrecen servicios de mantenimiento o instalación de impresoras?</h3>
                    </div>
                    <div class="faq-answer" id="r7">
                        <h5>Sí, proporcionamos servicios de evaluación y configuración de dispositivos de impresión para garantizar su correcto funcionamiento, incluyendo diagnóstico de problemas y la instalación del hardware y software necesario.</h5>
                    </div>
                </div>
                <div class="col-xl-12 mb-3 px-2">
                <div class="faq-question" onclick="toggleAnswer('r8')">
                        <h3>¿Cómo funciona su atención remota?</h3>
                    </div>
                    <div class="faq-answer" id="r8">
                        <h5>Nuestra atención remota permite resolver problemas y brindar asesoramiento técnico a través de internet, lo cual es ideal para asistencia rápida y eficiente sin necesidad de visitas presenciales.</h5>
                    </div>
                </div>
                <div class="col-xl-12 mb-3 px-2">
                    <div class="faq-question" onclick="toggleAnswer('r9')">
                        <h3>¿Cómo puedo contactar a Ultratech Chile para un servicio?</h3>
                    </div>
                    <div class="faq-answer" id="r9">
                        <h5>Puedes contactarnos a través de nuestro formulario en línea, correo electrónico, o llamándonos directamente a nuestro número de teléfono. Estamos disponibles para atender tus necesidades y consultas.</h5>
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
