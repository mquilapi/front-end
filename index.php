
<!DOCTYPE HTML>
<html lang="es">

<HEAD>
    <META charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="destacando los servicios ofrecidos por Energy and Water SpA, incluyendo instalación y reparación de sistemas de ventilación, calefacción, electricidad y construcción.">
    <!-- framework bootstrap-->    
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <TITLE>Energy and Water</TITLE>

    <style>
        .bg-img {
            /*fondo imagende mi web*/
            width: 100%;
            height: 100%;
            background-image: url('assets/images/fondo-web.jpg');
            /* Reemplaza 'fondo-web.jpg' con la ruta de tu imagen */
            background-size: cover;
            /* Ajusta el tamaño de la imagen para cubrir completamente la sección */
            background-position: center;
            /* Centra la imagen dentro de la sección */
        }


        /* Estilo para el fondo del nav */
        .opacity-background {
            background-color: rgba(255, 255, 255, 0.5) !important;
            /* Color de fondo blanco  con 50% de opacidad */
        }

        .mi-div-especifico {
            padding-top: 150px; /* Agrega 20 píxeles de espacio arriba de este div */
            padding-bottom: 50px;
        }

        .carousel-inner {
            height: 400px; /* Altura fija para el carrusel */
            overflow: hidden; /* Ocultar el desbordamiento */
        }

        .carousel-item p {
            margin: 0 auto;
            max-height: 100%;
            overflow-y: auto; /* Agregar barra de desplazamiento si el contenido es demasiado largo */
        }

    </style>
</HEAD>

<BODY id="Inicio">
    <!--banner -->
    <header id="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top py-0">
            <div class="container-fluid">
                <a href="#header"
                    class="d-flex align-items-center mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <img src="assets/images/logo.jpg" alt="Logo" width="45" class="d-inline-block align-text-top mx-2">
                    <span class="fs-4 text-dark">Energy and Water</span>
                </a>
                <button class="navbar-toggler position-absolute top-0 end-0 p-1 my-1 me-3" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav" style="text-align: center;">
                        <a class="nav-link shadow-sm rounded-4 mx-2 px-md-3 my-2" aria-current="page"
                            href="#Inicio">Inicio</a>
                        <a class="nav-link shadow-sm rounded-4 mx-2 px-md-3 my-2" href="#Historia">Historia</a>
                        <a class="nav-link shadow-sm rounded-4 mx-2 px-md-3 my-2" href="#Equipo">Equipo</a>
                        <a class="nav-link shadow-sm rounded-4 mx-2 px-md-3 my-2" href="#Preguntas">Preguntas
                            Frecuentes</a>
                        <a class="nav-link shadow-sm rounded-4 mx-2 px-md-3 my-2" href="#Contacto">Contacto</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <script>
        // Selecciona todos los elementos de la clase .nav-link
        const navLinks = document.querySelectorAll('.nav-link');

        // Agrega un event listener a cada enlace
        navLinks.forEach(link => {
            // Agrega el efecto de resaltado cuando el cursor entra en el enlace
            link.addEventListener('mouseenter', () => {
                link.classList.add('highlighted');
            });

            // Remueve el efecto de resaltado cuando el cursor sale del enlace
            link.addEventListener('mouseleave', () => {
                link.classList.remove('highlighted');
            });
        });
    </script>
    <!--end banner -->

    <!--Sección Historia-->
    <section class="d-flex justify-content-center align-items-center">
    <div class="row container justify-content-center mx-md-3 mx-sm-4 pt-5 mt-5">
        
            <div class="col-md-8 col-sm-12 mt-sm-5 mt-md-5 lign-self-center">
                <div id="Historia" class="position-relative shadow py-3 px-sm-2 px-md-5 mx-sm-1 text-center text-muted bg-body border border-dashed rounded-5">
                    
                </div>
            </div>
    </div>
    </section>
            <!--end Sección Historia-->

    <!--Carousel-->
    <section class="d-flex justify-content-center align-items-center">    
    <div id="carousel" class="carousel slide col-md-6 col-sm-8 mt-sm-5" data-bs-ride="carousel">
        <h2 align="center">
            Testimonios de nuestros clientes
        </h2>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <p align="center">
                    1. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
            <div class="carousel-item">
                <p align="center">
                    2. Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
            <div class="carousel-item">
                <p align="center">
                   3. Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
    <!--end Carousel-->

    <!--Seccion Equipo-->
    <section id="Equipo">
        <div class="container mb-5 px-md-5 px-sm-2 ">
            <div
                class="position-relative shadow py-md-3 py-lg-5 py-sm-4 text-center text-muted bg-body border border-dashed rounded-5">
                <div class="row justify-content-center">
                    <div class="col-md-5 col-sm-11 ms-3 text-start">
                        <h2 class="text-body-emphasis fs-5 pt-3"> Compartimos una visión clara del objetivo, fomentamos
                            un clima de confianza, colaboración y apoyo mutuo entre los integrantes del equipo.</h2>
                        <p class="fs-6">
                            Liderazgo
                        </p>
                        <p class="fs-6 lh-1">
                            Mizraim Abello es el fundador de Energy and Water SpA, es un líder colaborativo que se
                            desempeña en el ámbito laboral, específicamente en el sector de la climatización y
                            electricidad. Practica un liderazgo democrático; es decir, que involucra al equipo de
                            trabajo en la toma de decisiones y valora sus opiniones y sugerencias. Sus principales
                            habilidades como líder son la resolución de problemas, la comunicación efectiva, el
                            pensamiento crítico, la capacidad de coordinación y gestión. Algunos de los logros más
                            destacados son haber participado en la acreditación de los centros de salud de la
                            municipalidad de San Joaquín, reparación del equipo de climatización para el museo de la
                            Universidad de los Andes y haber realizado reparaciones y cambios de grupos electrógenos que
                            son críticos para el funcionamiento de los edificios. Uno de los desafíos que enfrentó como
                            líder fue adaptarse a las nuevas normativas sanitarias por la pandemia y garantizar la
                            seguridad del equipo y los clientes. Lo logró implementando protocolos de prevención y
                            capacitando al personal. Su objetivo como líder es darle continuidad operacional a los
                            clientes y mejorar constantemente los procesos de mantenimiento y calidad.
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-11 mx-3">
                        <div class="row">
                            <h2 class="text-body-emphasis fs-5 pt-3 text-center">Este es nuestro equipo</h2>
                            <p class="fs-6 text-center">Liderazgo</p>
                            <p class="fs-6 lh-1 text-center">
                                En Energy And Water SpA nos dedicamos a crear ambientes gratos y confortables a través
                                del mantenimiento para calderas, aire acondicionado, salas de bombas, grupos
                                electrógenos y electricidad, entre otros.
                            </p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-3 mx-md-5 mx-sm-5 mb-2">
                                <div class="card" style="width: 10rem;">
                                    <img src="assets/images/perfil.jpg" class="card-img-top"
                                        alt="Foto de Mizraim Abello Avello">
                                    <div class="card-body">
                                        <p class="card-text">Mizraim Abello Avello</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mx-md-5 mx-sm-5 mb-2">
                                <div class="card " style="width: 10rem;">
                                    <img src="assets/images/perfil.jpg" class="card-img-top"
                                        alt="Foto de Marcelo Fuentes Orellana">
                                    <div class="card-body">
                                        <p class="card-text">Marcelo Fuentes Orellana</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-3 mx-md-5 mx-sm-5 mb-2">
                                <div class="card" style="width: 10rem;">
                                    <img src="assets/images/perfil.jpg" class="card-img-top" alt="Foto de [Nombre]">
                                    <div class="card-body">
                                        <p class="card-text">[Nombre]</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mx-md-5 mx-sm-5 mb-2">
                                <div class="card" style="width: 10rem;">
                                    <img src="assets/images/perfil.jpg" class="card-img-top" alt="Foto de [Nombre]">
                                    <div class="card-body">
                                        <p class="card-text">[Nombre]</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End Sección Equipo-->

    <!-- Servicios -->
    <section id="servicios">
        <div class="container">
            <div id="rowServicios" class="row ">

            </div>
        </div>
    </section>
    <!-- End servicios -->


    <!--Sección Preguntas Frecuentes -->
    <section class="mi-div-especifico">
        <div class="accordion accordion-flush border rounded-5" id="Preguntas">
      
        </div>
    </section>
    <!--End Sección Preguntas Frecuentes-->

    <!-- Seccion Form-->
    <section id="Contacto" class="bg-img py-md-5">
        <div class="container-fluid mx-auto">
            <div class="row justify-content-center mt-5 ">

                <div class="col-md-6 align-self-center mt-5 pb-4 ">
                    <img src="assets/images/edificios.jpg" class="img-fluid rounded-5 shadow-lg" alt="edificios" width="100%">
                </div>

                <div
                    class="col-md-5  shadow align-self-center bg-body-tertiary rounded-5 mx-md-1 mb-lg-2 mb-md-5 mb-sm-5">
                    <h2 class="my-auto text-center pt-4 px-1">Formulario de Contacto</h2>
                    <form class="justify-content-center px-lg-5 px-0 needs-validation" novalidate action="../BACK-END/v1/procesar_formulario.php"method="post">
                        <div class="row my-3">
                            <div class="col-md-6 col-sm-12 ">
                                <label for="firstName" class="form-label mb-0">Nombre:</label>
                                <input type="text" class="form-control" id="firstName" placeholder="Nombre" autocomplete="given-name" required>
                                <div class="invalid-feedback">
                                    Por favor introduce un Nombre.
                                </div>
                            </div>


                            <div class="col-md-6 col-sm-12">
                                <label for="lastName" class="form-label  mb-0">Apellido:</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Apellido" autocomplete="family-name" required>
                                <div class="invalid-feedback">
                                    Por favor introduce un Apellido.
                                </div>
                            </div>
                        </div>
                        <label for="servicioSelect" class="form-label">Servicio</label>
                        <select class="form-select" id="servicioSelect" required>
                            <option selected disabled value="">Servicios</option>                            
                            <option value="1">Aire Acondicionado</option>
                            <option value="2">Grupo Electrógeno</option>
                            <option value="3">Sala de Calderas</option>
                            <option value="4">Sala de Bombas</option>
                            
                        </select>
                        <div class="invalid-feedback">
                            Porfavor Selecciona un Servicio.
                        </div>
                        <div class="row my-3">
                            <div class="col-md-5 col-sm-12">
                                <div class="my-3">
                                    <label for="email" class="form-label  mb-0">Email:</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                        <input type="text" class="form-control" id="email"
                                            aria-describedby="inputGroupPrepend2" placeholder="email@example.com" autocomplete="email"
                                            required>
                                        <div class="invalid-feedback">
                                            Por favor introduce un Email.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7 col-sm-12">
                                <div class="my-3">
                                    <label for="direccion" class="form-label  mb-0">Dirección</label>
                                    <input type="text" class="form-control" id="direccion"
                                        placeholder="San Carlos 123, Santiago, Chile" autocomplete="street-address" required>
                                    <div class="invalid-feedback">
                                        Por favor introduce una Dirección.
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <label for="mensaje" class="form-label  mb-0">Escriba su mensaje:</label>
                                <textarea class="form-control" maxlength="250" placeholder="Detalle su mensaje"
                                    id="mensaje" style="height: 100px" autocomplete="off" required></textarea>
                                <div class="invalid-feedback">
                                    Por favor introduce un mensaje de No mas de 250 caracteres.
                                </div>
                            </div>

                            <div class="mb-md-3mb-sm-3 mt-1">
                                <input type="checkbox" class="form-check-input" id="Conditions" required>
                                <label class="form-check-label" for="Conditions">I agree to the Terms and
                                    Conditions.</label>
                                <div class="invalid-feedback">
                                    Debes aceptar las condiciones y terminos.
                                </div>
                            </div>

                            <div class="mb-md-5 mb-sm-3 mt-1">
                                <input type="checkbox" class="form-check-input" id="responseDesired">
                                <label class="form-check-label" for="responseDesired">Respuesta deseada</label>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LeQZ-4pAAAAAFf1sx16P6glOvo_SPxsAQeptPwY"></div>

                            <div class="row justify-content-center text-center mb-3 ">
                                <div class="col-sm-12">
                                    <button class="btn btn-primary" type="submit">Enviar</button>
                                </div>
                            </div>

                            <div id="responseMessage"></div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--end Sección form-->

    <!-- validación form con bootstrap-->
    <script>
    (() => {
        'use strict'

        const forms = document.querySelectorAll('.needs-validation')

        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                } else {
                    event.preventDefault(); // Prevenir el envío del formulario por defecto

                    // Verificar si se marcó el checkbox de respuesta deseada
                    const responseDesired = document.getElementById('responseDesired').checked;

                    if (responseDesired) {
                        // Mostrar la alerta de éxito con SweetAlert2
                        Swal.fire({
                            title: "¡Buen trabajo!",
                            text: "Has enviado el formulario con éxito.",
                            icon: "success"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Aquí puedes hacer cualquier otra cosa, como enviar el formulario realmente si es necesario
                                form.submit(); // Enviar el formulario si la alerta se confirma
                            }
                        });
                    } else {
                        Swal.fire({
                            title: "Error",
                            text: "Mensaje no enviado.",
                            icon: "error"
                        });
                    }
                }

                form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

    <!--footer-->
    <footer class="py-3 my-4" id="infoContacto">
      
    </footer>
    <!--end footer-->
</BODY>

<!-- script para Realizar API SERVICIOS -->
<script>       
        fetch('http://localhost/BACK-END/v1/categoria_servicio/', {     //es la dirección a la cual se envía la solicitud.
                method: 'GET',                                          //indica que estamos solicitando datos del servidor
                headers: {
                    'Authorization': 'Bearer get',                      //encabezados que especifican el tipo de autorización y el formato del contenido.
                    'Content-Type': 'application/json'
                }
            })

            .then(respuesta => {                
                if (!respuesta.ok) {                            //verifica si la respuesta del servidor no es exitosa (código de estado HTTP fuera del rango 200-299)
                    throw new Error('Error al recuperar');      //lanza un error si la respuesta no es exitosa.
                }
                return respuesta.json();                        //convierte la respuesta a un objeto-formato JSON.
            })

            .then(salida => {                                   //salida es el objeto Json que ya esta convertido
                // console.log(salida.data);                                       //salida.data (data es una porpiedad reservada de JS) nos mostrara la lista de objetos dentro de la propiedad ({id:'1', nombre: 'Aire acondicionado', imagen:'...'})
                
                const anchoColumnas = 12 / salida.data.length;                  //calcula el ancho de cada columna para repartirlas equitativamente en una fila de Bootstrap.
                
                
                const rowServicios = document.getElementById('rowServicios'); 
// Acceso al DOM: 'document' es un objeto que representa toda la estructura del documento HTML cargado en el navegador.
// getElementById: Esta función busca dentro del documento un elemento que tenga el valor especificado en su atributo id (en este caso busca 'rowServicios').
// Asignación: El resultado de getElementById (que es una referencia al elemento id del HTML) se asigna a la 'constante rowServicios'.

                
                rowServicios.innerHTML = '';                                    // vacía cualquier contenido existente dentro del elemento div con id="rowServicios".
                
                salida.data.forEach(element => {                                // itera sobre cada objeto en el array 'data'. en cada iteracion creamos sus elementos HTML
                    const columna = document.createElement('div');              // Se crean elementos div para columnas utilizando clases de Bootstrap col-md- + ancho columnas. 
                    columna.classList.add('col-md-' + Math.round((anchoColumnas)*2), 'col-lg-' + anchoColumnas, 'my-2');
                    

                    const tarjeta = document.createElement('div');              //se crea elementos div para tarjetas utilizando clases de Bootstrap card.
                    tarjeta.classList.add('card');
                    tarjeta.id = 'tarjeta-' + element.id; // Asigna el ID único a la tarjeta
                                        
                    const tarjetaImg = document.createElement('img');       //se crea elementos img para tarjetas utilizando clases de Bootstrap card-img-top. 
                    tarjetaImg.classList.add('card-img-top');
                    tarjetaImg.src = element.imagen;
                    

                    const tarjetaBody = document.createElement('div');          //se crea elementos div para tarjetas utilizando clases de Bootstrap card-body.
                    tarjetaBody.classList.add('card-body');

                    const tarjetaTitle = document.createElement('h5');        //se crea elementos h5 para tarjetas utilizando clases de Bootstrap card-header.
                    tarjetaTitle.classList.add('card-title','ps-3','pt-3');

                    const tarjetaFooter = document.createElement('div');       //se crea elementos div para tarjetas utilizando clases de Bootstrap card-footer. 
                    tarjetaFooter.classList.add('card-footer');

                    //trabajo con los datos
                    tarjetaBody.innerText = element.texto;                    //Se asigna el contenido de cada tarjeta (tarjetaBody) con los datos recibidos de (element.texto).
                    tarjetaTitle.innerText = element.nombre;                  //Se asigna el contenido de cada tarjeta (tarjetaTitle) con los datos recibidos de (element.nombre).
                                        
                    //Establece el contenido HTML dentro del elemento tarjetaFooter.
                    tarjetaFooter.innerHTML = '<a href="#Contacto"><button class="btn btn-primary" onclick="cambiaServicio(`'+element.id+'`)">Contáctanos</button></a>';

                    tarjeta.appendChild(tarjetaImg);
                    tarjeta.appendChild(tarjetaTitle);
                    tarjeta.appendChild(tarjetaBody);
                    tarjeta.appendChild(tarjetaFooter);                    
                    columna.appendChild(tarjeta);
                    rowServicios.appendChild(columna);
                });

                // console.log('cantidad columnas: ' + anchoColumnas);
                // console.log(rowServicios);
            })
            .catch(error => {                                   // catch captura cualquier error que ocurra durante la solicitud o el procesamiento de los datos.     
                console.error('Error al obtener: ', error);     //muestra el error en la consola.
            });
        

    function cambiaServicio(idServicio) {
    // Obtener la tarjeta de servicio seleccionada por su id
    const tarjetaSeleccionada = document.getElementById('tarjeta-' + idServicio);    
        
    // Obtener el nombre del servicio de la tarjeta seleccionada
    const servicioNombre = tarjetaSeleccionada.querySelector('.card-title').innerText;
            
    // Seleccionar automáticamente el servicio en el select
    const selectServicio = document.getElementById('servicioSelect');

    // Iterar sobre las opciones del select y seleccionar la que coincida con el servicio de la tarjeta
    let servicioEncontrado = false;
    for (let i = 0; i < selectServicio.options.length; i++) {
        if (selectServicio.options[i].text.trim() === servicioNombre.trim()) {
            selectServicio.selectedIndex = i;
            servicioEncontrado = true;
            break;
        }
    }   
}

</script>

<!-- script para Realizar historia -->
<script>
    // Función para obtener y mostrar la historia
    function fetchHistoria() {
        fetch('http://localhost/BACK-END/v1/historia/', {
            method: 'GET',
            headers: {
                'Authorization': 'Bearer get',
                'Content-Type': 'application/json'
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al recuperar');
            }
            return response.json();
        })
        .then(data => {

            const historia = data.data; // Suponiendo que data.data contiene los datos de la historia
            

            const Historia = document.getElementById('Historia');
            Historia.innerHTML = '';    // Vacía cualquier contenido existente dentro del elemento div con id="Historia".

            historia.forEach(element => {
                switch (element.tipo) {

                    case 'titulo':
                        const titulo = document.createElement('h2');
                        titulo.classList.add('text-body-emphasis', 'fs-4', 'pt-3');
                        titulo.innerText = element.texto;
                        Historia.appendChild(titulo);
                        break;

                    case 'subtitulo':
                        const subTitulo = document.createElement('h3');
                        subTitulo.classList.add('mx-auto', 'mb-2', 'mt-3');
                        subTitulo.innerText = element.texto;
                        Historia.appendChild(subTitulo);
                        break;

                    case 'parrafo':
                        const parrafo = document.createElement('p');
                        parrafo.classList.add('fs-6', 'lh-1');
                        parrafo.innerText = element.texto;
                        Historia.appendChild(parrafo);
                        break;

                    case 'imagen':
                        if (element.texto) { // Solo agrega la imagen si hay un texto (URL)
                            const imagen = document.createElement('img');
                            imagen.classList.add('img-fluid', 'mb-3');
                            imagen.src = element.texto;
                            Historia.appendChild(imagen);
                        }
                        break;

                    default:
                        console.warn('Tipo desconocido:', element.tipo);
                }
            });

            console.log(Historia);
        })
        .catch(error => {
            console.error('Error al obtener: ', error); // Muestra el error en la consola.
        });
    }

    // Llamar a la función para obtener y mostrar la historia
    fetchHistoria();
</script>

<!-- script para Realizar Preguntas frecuentes -->
<script>
    // Función para obtener y mostrar la información de contacto
    function fetchinfoContacto() {
        fetch('http://localhost/BACK-END/v1/info_contacto/', {
            method: 'GET',
            headers: {
                'Authorization': 'Bearer get',
                'Content-Type': 'application/json'
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al recuperar la información de contacto');
            }
            return response.json();
        })
        .then(data => {
            const contacto = data.data; // Suponiendo que data.data contiene la infoContacto 
            console.log(contacto);

            const infoContacto = document.getElementById('infoContacto');
            infoContacto.innerHTML = ''; // Vacía cualquier contenido existente dentro del elemento con id="infoContacto".

            // Crear el nuevo contenido del footer dinámicamente
            const contactoHTML = `
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><img src="assets/images/map-icon.svg" alt="Icono map"> ${contacto.direccion}</a></li>
                    <li class="nav-item"><a href="mailto:${contacto.email}" class="nav-link px-2 text-body-secondary"><img src="assets/images/email-icon.svg" alt="Icono email"> Email: ${contacto.email}</a></li>
                    <li class="nav-item"><a href="tel:${contacto.telefono}" class="nav-link px-2 text-body-secondary"><img src="assets/images/telephone-icon.svg" alt="Icono telefono"> Fono: ${contacto.telefono}</a></li>
                    <li class="nav-item"><a href="https://wa.me/${contacto.whatsapp}" class="nav-link px-2 text-body-secondary"><img src="assets/images/whatsapp.svg" alt="Icono whatsapp"> WhatsApp: ${contacto.whatsapp}</a></li>
                    <li class="nav-item"><a href="${contacto.web}" class="nav-link px-2 text-body-secondary"><img src="assets/images/globe.svg" alt="Icono world"> ${contacto.web}</a></li>
                </ul>
                <p class="text-center text-body-secondary"> &copy; 2024 Company, Inc</p>
            `;

            // Insertar el nuevo contenido
            infoContacto.innerHTML = contactoHTML;
        })
        .catch(error => {
            console.error('Error al obtener la información de contacto:', error);
        });
    }

    // Llamar a la función para obtener y mostrar la información de contacto al cargar la página
    document.addEventListener('DOMContentLoaded', fetchinfoContacto);
</script>

<!-- informacion de contacto -->
<script>
    // Función para obtener y mostrar la información de contacto
    function fetchinfoContacto() {
        fetch('http://localhost/BACK-END/v1/info_contacto/', {
            method: 'GET',
            headers: {
                'Authorization': 'Bearer get',
                'Content-Type': 'application/json'
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al recuperar la información de contacto');
            }
            return response.json();
        })
        .then(data => {
            const contacto = data.data; // La lista de objetos de información de contacto
            console.log(contacto);

            const infoContacto = document.getElementById('infoContacto');
            infoContacto.innerHTML = ''; // Vacía cualquier contenido existente dentro del elemento con id="infoContacto".

            // Crear el nuevo contenido del footer dinámicamente
            let contactoHTML = '<ul class="nav justify-content-center border-bottom pb-3 mb-3">';
            contacto.forEach(item => {
                let icono = '';
                if (item.nombre === 'email') 
                    icono = 'assets/images/email-icon.svg';
                if (item.nombre === 'direccion') 
                    icono = 'assets/images/map-icon.svg';
                if (item.nombre === 'telefono')     
                    icono = 'assets/images/telephone-icon.svg';
                if (item.nombre === 'whatsapp')     
                    icono = 'assets/images/whatsapp.svg';
                
                contactoHTML += `
                    <li class="nav-item">
                        <a href="${item.texto_adicional}" class="nav-link px-2 text-body-secondary">
                            <img src="${icono}" alt="Icono ${item.nombre}">
                            ${item.texto}
                        </a>
                    </li>
                `;
            });
            contactoHTML += '</ul><p class="text-center text-body-secondary"> &copy; 2024 Company, Inc</p>';

            // Insertar el nuevo contenido
            infoContacto.innerHTML = contactoHTML;
        })
        .catch(error => {
            console.error('Error al obtener la información de contacto:', error);
        });
    }

    // Llamar a la función para obtener y mostrar la información de contacto al cargar la página
    document.addEventListener('DOMContentLoaded', fetchinfoContacto);
</script>


</HTML> 