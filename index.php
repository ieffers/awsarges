<?php
    require_once ('/var/www/html/assets/header.php');
?>

<body>
    <div class="container">
        <h1>Bienvenido a mi pagina en AWS!</h1>
        <ul class="menu">
            <li><a href="#"> Inicio </a></li>
            <li><a href="formularioRegistro.php"> Registro </a></li>
            <li><a href="#"> Quienes Somos </a></li>
            <li><a href="#"> Contacto </a></li>
            <li><a href="#"> Blog </a></li>
            <li><a href="formularioComentario.php"> Dejar Comentario </a></li>
        </ul>
        <hr>
        <main>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur repudiandae asperiores dolore officiis necessitatibus iure quia hic quod amet, natus saepe nesciunt incidunt molestiae blanditiis harum quaerat suscipit minus facere.<p>
        </main>
        <aside>
        <h3>Redes Sociales</h3>
        <ul>
            <li><a href="https://www.facebook.com/" target="_blank"> <img src="assets\icons\facebook.png" alt="facebook"> </a></li>
            <li><a href="https://www.instagram.com/" target="_blank"> <img src="assets\icons\instagram.png" alt="instagram">  </a></li>
            <li><a href="https://www.twitter.com/" target="_blank"> <img src="assets\icons\twitter.png" alt="twitter"> </a></li>
        </ul>
    </aside>
    </div>
    
    <?php
    require_once ('/var/www/html/assets/footer.php');
?>