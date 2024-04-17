<div class="container-fluid" id="contacto" >
    <div class="row moviles">
        <div class="col-xl-7 justify-content-center align-items-start ">
            <div class="d-flex flex-column">      
                <div class="col pb-3">
                    <a onclick="redirectWithBlur(event)" href=<?php echo $l_inicio;?> class="d-flex flex-row" ><img  class="me-1" src="imagenes/base-icon.png" alt="Imagen temporal" width="45" height="45"><h1 class="text-base" > Ultra<span class="text-bold">Tech</span> Chile</h1></a>
                    <a onclick="redirectWithBlur(event)" href=<?php echo $l_inicio;?>><h3 class="text-base" > El poder de la tecnología a tu alcance. </h3></a>
                </div>   
                <a class="d-flex flex-row align-items-center"><img class="me-1" src="imagenes/telefono-icon.png" alt="Imagen temporal" width="30" height="30"><h5 class="text-base"> (+56) 9 5307 7891 </h5></a>            
                <a class="d-flex flex-row align-items-center"><img class="me-1" src="imagenes/mail-icon.png" alt="Imagen temporal" width="30" height="30"><h5 class="text-base"> ultratech.chile @ gmail.com </h5></a>
                <a class="d-flex flex-row align-items-center"><img class="me-1" src="imagenes/ubi-icon.png" alt="Imagen temporal" width="30" height="30"><h5 class="text-base"> Lomas Coloradas, San Pedro de la Paz, Concepcion, Chile </h5></a>
            </div>
        </div>
        <div class="col-xl-5 justify-content-center align-items-end moviles">
            <div class="row" >
                <div class="col align-items-center justify-content-center w-auto btns">
                    <a href=<?php echo $l_email;?> target="_blank" rel="noopener noreferrer">
                        <button class="btn btn-base btn-lg"><img src="imagenes/email-icon.png" alt="Imagen temporal" width="30" height="30"> Envianos un Email </button> 
                    </a>                                
                    <a href=<?php echo $l_wsp;?> target="_blank" rel="noopener noreferrer">
                        <button class="btn btn-base btn-lg"><img src="imagenes/wsp-icon.png" alt="Imagen temporal" width="30" height="30"> Contactanos </button> 
                    </a>  
                    <a href=<?php echo $l_ig;?> target="_blank" rel="noopener noreferrer">
                        <button class="btn btn-base btn-lg"><img src="imagenes/ig-icon.png" alt="Imagen temporal" width="30" height="30"> Instagram </button> 
                    </a>
                </div>
            </div>
        </div>                                
    </div>
</div>
<!-- Aquí puedes incluir información de pie de página -->
<p class="d-flex justify-content-center copyright m-0 p-0" >&copy; 2024 Ultra<span class="text-bold">Tech</span> . Todos los derechos reservados.</p>

<button onclick="topFunction()" id="rollUp" title="Ir arriba">⇪</button>  

<script>
    document.querySelectorAll('.smooth-scroll-link').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            // Si el elemento de destino existe, desplázate suavemente hacia él
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth' // Opciones: 'auto' | 'smooth'
                });
            }
        });
    }); 

    function toggleNav() {
        var sidenav = document.getElementById("mySidenav");
        if (sidenav.style.width === "270px") {
            sidenav.style.width = "0";
        } else {
            sidenav.style.width = "270px";
        }
    }
    
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    function toggleAnswer(answerId) {
        var answer = document.getElementById(answerId);
        var maxHeight = "0"; // Valor inicial para la altura máxima cuando está cerrado.
        
        // Si la respuesta está oculta, queremos mostrarla.
        if (answer.style.maxHeight === "0px" || answer.style.maxHeight === "") {
            maxHeight = "1000px"; // Ajusta esto según el contenido más alto que tengas.
            answer.style.visibility = "visible";
            answer.style.maxHeight = maxHeight;
            answer.style.padding = "8px"; // Restaura el padding.
        } else {
            // Si la respuesta está visible, queremos ocultarla.
            answer.style.visibility = "hidden";
            answer.style.maxHeight = "0";
            answer.style.padding = "0 8px"; // Elimina el padding verticalmente.
        }
    }

    function toggleAllAnswers() {
        var answers = document.querySelectorAll('.faq-answer');
        answers.forEach(function(answer) {
            // Comprobamos el estado actual y aplicamos el cambio apropiado.
            if (answer.style.maxHeight === "0px" || answer.style.maxHeight === "") {
                answer.style.visibility = "visible";
                answer.style.maxHeight = "1000px"; // Ajusta esto según el contenido más alto que tengas.
                answer.style.padding = "8px"; // Restaura el padding.
            } else {
                answer.style.visibility = "hidden";
                answer.style.maxHeight = "0";
                answer.style.padding = "0 8px"; // Elimina el padding verticalmente.
            }
        });
    }

    function redirectWithBlur(event) {
        event.preventDefault(); // Prevenir la acción predeterminada del enlace
        const blurryTransition = document.getElementById('blurryTransition');
        const linkHref = event.currentTarget.href; // Obtener el atributo href del enlace
        
        // Añadir clase para activar la transición borrosa
        blurryTransition.classList.add('active');

        // Redirigir después de la transición
        setTimeout(() => {
            window.location.href = linkHref;
        }, 50); // x.x segundos de transición borrosa
    }

    // Cuando el usuario se desplaza hacia abajo 20px desde el principio de la página, muestra el botón
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 450 || document.documentElement.scrollTop > 450) {
        document.getElementById("rollUp").style.display = "block";
    } else {
        document.getElementById("rollUp").style.display = "none";
    }
    }

    // Cuando el usuario hace clic en el botón, se desplaza hacia el principio de la página
    function topFunction() {
    document.body.scrollTop = 0; // Para Safari
    document.documentElement.scrollTop = 0; // Para Chrome, Firefox, IE y Opera
    }
   
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

