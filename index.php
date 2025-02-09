<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilos de fuente -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="css/estilos.css">
    <!-- Comentario de prueba en WSL2 Fedora-->
    <!-- Comentario de prueba en Dell Precision 3530 -->
    <title>David Rojas Herrera</title>
</head>
<body>
    
    <div class="contenido-principal">
        <!-- Menu Principal -->
        <header class="header">
            <div class="cabecera">
                <figure class="logotipo">
                    <img src="./img/logo3.png" alt="logotipo">
                </figure>
                <!-- Menu Principal -->
                <div class="menu">
                    <ul>
                        <li>
                            <a href="#tecnologia">Conocimientos</a>
                        </li>
                        <li>
                            <a href="#certificacion">Certificaciones</a>
                        </li>
                        <li>
                            <a href="#experiencia">Experiencia Laboral</a>
                        </li>
                    </ul>
                </div>
                <div class="contacto">
                    <button class="btn"><a href="mailto:dfrojasherrera@gmail.com">Contactar</a></button>
                </div>
                <!-- Menu Mobile -->
                <div class="mobil-menu">
                    <a href="#"><span class="material-symbols-outlined">menu</span></a>
                </div>
            </div>
            <div class="column-menu inactive">
                <ul>
                    <li>
                        <a href="#tecnologia">Conocimientos</a>
                    </li>
                    <li>
                        <a href="#certificacion">Certificaciones</a>
                    </li>
                    <li>
                        <a href="#experiencia">Experiencia Laboral</a>
                    </li>
                    <li><a href="mailto:dfrojasherrera@gmail.com">Contacto</a></li>
                </ul>
            </div>
        </header>
        <!-- -->

        <!-- Descripcion de perfil -->
        <div class="landing">
            <div class="contenido-perfil">
                <div class="perfil-usuario">
                    <img src="./img/avatar.jpg" alt="" width="600px">
                </div>
                <div class="descripcion-usuario">
                    <h1>David Rojas Herrera</h1>
                    <h2><li>Técnico en programación y análisis de sistemas</li></h2>
                    <h2><li>Desarrollador Web</li></h2>
                    <p> "Me considero una persona totalmente autodidacta, pro activa, colaborativa y
                        por sobre todo apasionada a la tecnología, constantemente entregando ideas
                        que ayudan a mejorar resultados y objetivos de una organización"</p>
                </div>
            </div>
        </div>

        <div class="separador" id="tecnologia">Conocimientos técnicos y habilidades</div>

        <div class="descripcion-conocimientos">
            <div class="Habilidades">
                <div class="titulo-conocimiento">
                    <span class="material-symbols-outlined">Person</span>
                    <span>Competencias personales:</span>
                </div>
                <li>Capacidad para trabajar en equipo</li>
                <li>Fexibilidad y adaptabilidad</li>
                <li>Toma de deciciones</li>
                <li>Gestión de personas</li>
                <li>Resolución de conflictos</li>
                <li>Habildades analíticas</li>
            </div>

            <div class="frontend">
                <div class="titulo-conocimiento">
                    <span class="material-symbols-outlined">desktop_windows</span>
                    <span>Concimiento en Frontend:</span>
                </div>
                <li>HTML5</li>
                <li>CSS3, Flexbox, CSS Grid</li>
                <li>JavaScript</li>
                <li>Responsive Web Design (Diseño adaptable)</li>
                <li>Programas: Visual Studio Code, Photoshop CC, Inkscape</li>
                <li>Frameworks: Bootstrap 4, SASS</li>
                <li>Control de versiones: Git/GitHub</li>
            </div>
            
            <div class="backend">
                <div class="titulo-conocimiento">
                    <span class="material-symbols-outlined">database</span>
                    <span>Concimiento en Backend:</span>
                </div>
                <li>PHP 7</li>
                <li>Node JS</li>
                <li>Programación orientada a objetos</li>
                <li>Patrón de arquitectura: MVC</li>
                <li>Bases de datos: MySQL, SQL Server</li>
                <li>Entornos de servidor: WAMP, XAMPP</li>
                <li>Distribuciones Linux: Linea de comandos (fish shell y zsh)</li>
            </div>

            
        </div>

        <div class="separador" id="certificacion">Certificaciones</div>

        <div class="descripcion-certificaciones">
            <div class="iconos-certificaciones">
                <a href="./pdf/certificado-titulo.pdf"><img src="./img/certificaciones/aiep.png" alt=""></a>
                <a href=""><img src="./img/certificaciones/frontend.png" alt=""></a>
                <a href=""><img src="./img/certificaciones/js-practico.png" alt=""></a>
                <a href=""><img src="./img/certificaciones/git.png" alt=""></a>
                <a href=""><img src="./img/certificaciones/terminal.png" alt=""></a>
            </div>
            <div class="btn-vermas">
                <a href="#">Ver Mas</a>
            </div>
        </div>

        <div class="separador" id="experiencia">Experiencia Laboral</div>

        <div class="descripcion-experiencia">
            <div class="cuadro-info">
                <div class="imagen"></div>
                <div class="detalle">
                    <p>2022 - Actualidad</p>
                    <p>Supervisor de Control Calidad</p>
                </div>
            </div>
            <div class="cuadro-info">
                <div class="imagen"></div>
                <div class="detalle">
                    <p>2021 - 2022</p>
                    <p>Inspector de Control de Procesos</p>
                </div>
            </div>
            <div class="cuadro-info">
                <div class="imagen"></div>
                <div class="detalle">
                    <p>2017 - 2021</p>
                    <p>Inspector de Control de Calidad</p>
                </div>
            </div>
            <div class="cuadro-info">
                <div class="imagen"></div>
                <div class="detalle">
                    <p>2016 - 2017</p>
                    <p>Digitador en Control Produccion</p>
                </div>
            </div>
        </div>
        <footer>
            <p>Web Creada por David Rojas Herrera</p>
            <p>Diciembre 2022</p>
            <p>+56958523602</p>
        </footer>
    </div>
    
    
    <!-- Scripts -->
    <script src="./js/script.js"></script>
</body>
</html>