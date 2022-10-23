<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Opera GX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atomblack Games</title>
    <link rel="icon" type="image/png" href="assets/img/icono.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <header>
        <div class="content-header">
            <div class="logo"><img src="assets/img/logo.png"></div>
            <div class="item"><a href="#inicio">Nosotros</a></div>
            <div class="item"><a href="#juegos">Nuestros Juegos</a></div>
            <div class="item"><a href="#contacto">Suscribete</a></div>
        </div>
    </header>
    <section>
        <div class="content-banner">
            <div class="banner-text">
                <h1>Noticias</h1>
                <p>¿Quieres enterarte de las ultimas novedades de Atomblack Games?</p>
                <p>¿Proximas actualizaciones?</p>
                <p>¿El gran misterios de Resilio? ¡Leenos!</p>
                <center><button onclick="location.href='http://localhost/Atom_landingpage/blog.php'">Leer ultimas noticias</button></center>
            </div>
            <div class="banner-img">
                <img src="assets/img/consola.jpg">
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 100 1440 200">
  <path fill="#273036" fill-opacity="1" d="M0,96L48,133.3C96,171,192,245,288,282.7C384,320,480,320,576,293.3C672,267,768,213,864,165.3C960,117,1056,75,1152,53.3C1248,32,1344,32,1392,32L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>

    <div class="contents">
        <section id="inicio">

            <h1>Nosotros</h1>
            <div class="div-flex">
                <div class="parts">
                    <div class="content-img">
                        <div class="img"></div>
                </div>
                </div>
                <div class="parts">
                    <h2>Trabajando en los mejores juegos</h2>
                    <p>Somos una empresa dedicada al diseño, producción y creación de IP’s propios y third parties.</p>
                    <p> Nuestro objetivo principal es el brindar a nuestra comunidad el mejor servicio en cuanto al
                    gaming se refiere; con juegos que se primen en calidad sobre cantidad, con un apartado
                    técnico detallado y que principalmente se basará en una comunicación con el jugador</p>
                </div>
            </div>
        </section>
        <section id="juegos">
            <h1>Nuestro catalogo</h1>
            <div class="div-grid">
                <div class="grid-item">
                    <div class="content-img-juegos">
                        <img src="assets/img/c-19 project.jpeg">
                    </div>
                        <h3>C-19 Project</h3>
                        <p>Eres el ultimo humano sano en un mundo de Covid-19</p>
                        <p>¿Serás capaz de sobrevivir el mayor tiempo posible?</p>
                    
                </div>
                
                <div class="grid-item">
                    <div class="content-img-juegos">
                        <img src="assets/img/UfoGO!.jpeg">
                    </div>
                        <h3>UfoGO!</h3>
                        <p>¿Que se sentirá ser un alienigena viajando a través del basto cosmos?
                        Con UfoGO! podrás experimentarlo esquivando todo tipo de peligros</p>
                    
                </div>
                
                <div class="grid-item">
                    <div class="content-img-juegos">
                        <img src="assets/img/111.png">
                        </div>
                        <h3>Resilio</h3>
                        <p>Proximamente...</p>
                    
                </div>

            </div>
        </section>
        <section id="contacto">
            <div class="div-flex">
                <div class="parts">
                    <h2>Contacto</h2>
                    <p>Correo: atomblackgames@gmail.com</p>
                    <p>Telefonos: +57 315 6687196</br>
                                +57 301 6689277</br>
                                +57 318 4314848</br></p>
                </div>
                <div class="parts">
                    <h2 style="margin-bottom: 10px;">Suscribete para recibir noticias en tu EMAIL</h2>
                    <form id="contact-form" class="contact" name="contact-form" method="post" action="enviar.php"> 
                        <label>Nombre</label>
                        <div class="form-group">
                        <input type="text" name="nombre" class="form-control name field" require="required" placeholder="Nombre">
                        <br>
                        </div>
                        <label>Correo</label>
                        <div class="form-group">  
                        <input type="email" name="email" class="form-control name field" require="required" placeholder="Correo">
                        <br>
                        </div>
                        <div class="form-group"> 
                        <button type="submit" class="btn btn-primary">Suscribirme</button>
                        </div>
                    </form>
                </div>
            </div>



        </section>

    </div>
    <footer>
        <center><p>Atomblack Games® Todos los derechos reservados | 2022</p></center>
    </footer>
    
</body>
</html>