<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html lang="es">

<head>
    <title>CIRUGÍA GENERAL</title>
    <meta charset="UTF-8">
    <meta name="description" content="Ejemplo de HTML5">
    <meta name="Keywords" content="HTML5,CSS3,JavaScript">
    <link rel="stylesheet" href="assets/css/CirugiaGeneral.css"/>
    <link rel="icon" href="assets/img/medical-icon.ico">

    <script>
        function cambiarPestania(enlaceSeleccionado) {
            //limpiar lo anterior
            //obtener elementos a manipular
            var enlaces = document.querySelectorAll("#titulos a");
            //  var enlaces = document.getElementsByClassName("tit");

            for (let i = 0; i < enlaces.length; i++) {
                enlaces[i].style.border = '';
            }


            // obtener elemento a manipular


            var div = document.getElementById("imagen2");

            var id = enlaceSeleccionado.getAttribute("id");
            enlaceSeleccionado.style.border = "2px solid #6E6E6E";
            enlaceSeleccionado.style.background = "#E6E6E6";
            enlaceSeleccionado.style.color = "black";
            let img = document.getElementById('imagen2');


            switch (id) {
                case "uno":

                    img.src = "assets/img/Cirugia/ETAPA1.jpg";
                    break;
                case "dos":

                    img.src = "assets/img/Cirugia/ETAPA2.jpg";
                    break;
                default:

                    img.src = "assets/img/Cirugia/ETAPA3.jpg";
                    break;
            }


            div.innerHTML = img;

        }
    </script>
</head>


<body>

    <div id="contendor1">
    <?php  require_once 'vista/Templates/encabezado.php'; ?>

          <div class="Sprincipal">
            <h2 class="mensaje"><strong>Cirugía General</strong></h2>
            <img class="imagenPrincipal" src="assets/img/Cirugia/CENTRO.png" title="cirugia">
            <h3 class="mensaje"><a  href="../../index.php?c=cursos&f=nuevo">AGENDAR TU CITA</a></h3>
                   

        </div>



        <div id="grid1">


            <div class="elemento1 ">
                <h2>CIRUGÍA GENERAL </h2> <br>
            </div>

            <div class="elemento1 ">

                <h3>Importancia de una Cirugía General</h3><br>
                <p>Fecha de Publicacion : <time>2021-12-11</time></p>
                <p>
                    La cirugía general aborda, todas aquellas patologías del aparato digestivo, sistema endocrino,
                    órganos intraabdominales y pared abdominal que requieren de una intervención quirúrgica,
                    la figura del cirujano general es esencial para el funcionamiento de los hospitales, pues, además de
                    la intervención, es el profesional responsable de la atención al paciente antes, durante y después
                    de la cirugía.
                    Contiene un profundo sentido humanista, integrando a la atención médico-clínica, las actividades de
                    investigación y los aspectos teórico – prácticos del área de la cirugía general
                    permitiendo generar un impacto positivo en la calidad de vida del individuo, la familia y la
                    comunidad.
                </p>

            </div>

            <div class="elemento1">

                <img class="imageno" src="assets/img/Cirugia/segunda.jpg" alt="descripcion" height="250" width="350" />
            </div>

            <div class="elemento1">
                <h2>¿Qué intervenciones abarca la cirugía general?</h2>
            </div>
            <div class="elemeneto1">
                <P>
                    <strong>Aparato digestivo:</strong><br> Enfermedades del esófago, estómago, intestino delgado, colon
                    y recto. Algunas de las más comunes son las relacionadas con procesos tumorales como el cáncer
                    gástrico o de de colon siendo menos habituales, aunque igualmente complejas.
                </P>
            </div>
            <div class="elemeneto1">
                <p>
                    <strong>Pared abdominal:</strong><br> Las cirugías más comunes son la Apendicitis Aguda y las
                    Hernias inguinales siendo también relevante la intervención de hernias umbilicales y las
                    eventraciones.
                </p>
            </div>
            <div class="elemeneto1">
                <p>
                    <strong>Piel y tejidos blandos:</strong> <br>Esta parte trata de eliminar quistes y tumores en la
                    piel y en las partes blandas afectadas por los mismos. A través de técnicas menos invasivas, se
                    eliminan quistes y tumores habitualmente beningnos.
                </p><br>
            </div>
            <div class="elemeneto1">
                <p>
                    <strong>Sistema endocrino:</strong> <br>Formado por glándulas que fabrican hormonas. Las hormonas
                    son los mensajeros químicos del organismo. Trasportan información e instrucciones de un conjunto de
                    células a otro.
                </p><br>
            </div>
        </div>


        <div class="artic2">
            <article id="at1">
                <h4><strong>Importancia de la Cirugía</strong></h4>
                <br>
                <p> Es una parte fundamental de todo sistema de salud. Su buena práctica puede tener un impacto positivo
                    y significativo en el desempeño del sistema. Formar excelentes cirujanos requiere procesos de
                    enseñanza y aprendizaje explícitos y predecibles en sus resultados. En esta revisión se presentan
                    tendencias contemporáneas en los enfoques y contenidos
                    de los procesos de enseñanza y aprendizaje quirúrgicos, y su relevancia en la formación del médico
                    general.</p>


            </article>
        </div>




        <aside id="Aside1">
            <div class="artic3">
                <blockquote>
                    <h5> Video explicativo de Tecnicas que utiliza un cirugano.</h5>
                    <iframe src="https://www.youtube.com/embed/NK5BV45rsXQ" height="350" width="450"
                        allowfullscreen></iframe>
                </blockquote>
            </div>

            <div class="artic3">

                <blockquote>
                    <h5>Video explicativo de Riesgos.</h5>
                    <iframe src="https://www.youtube.com/embed/ctiUaQiqWn0" height="350" width="450"
                        allowfullscreen></iframe>
                </blockquote>
            </div>
        </aside>


        <div id="TITULO">
            <h4 id="cambia">Etapas del proceso Quirúrgico</h4>
        </div>


        <div id="titulos">
            <a class="tit" id="uno" onmouseover="cambiarPestania(this)" href="#titulos">Periodo preoperatorio</a>
            <a class="tit" id="dos" onmouseover="cambiarPestania(this)" href="#titulos">Periodo intraoperatorio</a>
            <a class="tit" id="tres" onmouseover="cambiarPestania(this)" href="#titulos">Periodo postoperatorio</a>
        </div>
        <div id="contenido">

            <img id="imagen2" src="assets/img/Cirugia/ETAPA1.jpg" alt="">

        </div>
    </div>

    <<?php  require_once 'vista/Templates/piePagina.php'; ?>
</body>


</html>
