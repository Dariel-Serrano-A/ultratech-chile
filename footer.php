<div class="container-fluid" id="contacto" >
    <div class="row">
        <div class="col-xl-7 justify-content-center align-items-start moviles">
            <div class="row justify-content-start">      
                <div class="col w-auto">
                    <a  onclick="redirectWithBlur(event)" href="http://localhost/ultratech/inicio.php" class="d-flex flex-row"><img class="me-1" src="imagenes/base-icon.png" alt="Imagen temporal" width="45" height="45"><h1 class="text-base" > Ultra<span class="text-bold">Tech</span> </h1></a>
                    <a  onclick="redirectWithBlur(event)" href="http://localhost/ultratech/inicio.php"><h3 class="text-base" > El poder de la tecnología a tu alcance. </h3></a>
                    <a class="d-flex flex-row align-items-center"><img class="me-1" src="imagenes/telefono-icon.png" alt="Imagen temporal" width="30" height="30"><h5 class="text-base"> (+56) 9 5307 7891 </h5></a>            
                    <a class="d-flex flex-row align-items-center"><img class="me-1" src="imagenes/mail-icon.png" alt="Imagen temporal" width="30" height="30"><h5 class="text-base"> ultratech.chile @ gmail.com </h5></a>            
                </div>      
            </div>
        </div>
        <div class="col-xl-5 justify-content-center align-items-end moviles">
            <div class="row" >
                <div class="col align-items-center justify-content-center w-auto">
                    <a  onclick="redirectWithBlur(event)" href="mailto:ultratech.chile@gmail.com?subject=Contacto%20desde%20sitio%20web&body=Escriba%20sus%20dudas,%20consultas%20o%20comentarios%20aqui...">
                        <button class="btn btn-base btn-lg"><img src="imagenes/email-icon.png" alt="Imagen temporal" width="30" height="30"> Envianos un Email </button> 
                    </a>                                
                    <a  onclick="redirectWithBlur(event)" href="https://wa.me/56953077891">
                        <button class="btn btn-base btn-lg"><img src="imagenes/wsp-icon.png" alt="Imagen temporal" width="30" height="30"> Contactanos </button> 
                    </a>  
                </div>
            </div>
        </div>                                
    </div>
</div>
<!-- Aquí puedes incluir información de pie de página -->
<p class="d-flex justify-content-center copyright m-0 p-0" >&copy; 2024 Ultra<span class="text-bold">Tech</span> . Todos los derechos reservados.</p>

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

    function redirectWithBlur(event) {
        event.preventDefault(); // Prevenir la acción predeterminada del enlace
        const blurryTransition = document.getElementById('blurryTransition');
        const linkHref = event.currentTarget.href; // Obtener el atributo href del enlace
        
        // Añadir clase para activar la transición borrosa
        blurryTransition.classList.add('active');

        // Redirigir después de la transición
        setTimeout(() => {
            window.location.href = linkHref;
        }, 100); // 0.1 segundos de transición borrosa
    }
   
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

