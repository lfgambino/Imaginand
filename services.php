<?php $location = 1; ?>

<!-- HEAD:INI -->
<?php include("modules/head.php") ?>
<!-- HEAD:FIN -->

<body>
<!-- CONTAINERS-BG:INI --> 
<div id="container_bg_0">
<div id="container_bg_1">
<div id="container_bg_2">

    <!-- NAVBAR:INI -->
    <?php include("modules/navbar.php") ?>
    <!-- NAVBAR:FIN -->

    <!-- CONTAINER:INI -->
    <div id="container">
    	
        <!-- HEADER:INI -->
        <?php include("modules/header.php") ?>
	   <!-- HEADER:END -->
        
        <!-- SERVICES:INI -->
        <section id="services">

            <!-- BASIC -->
            <article>
                <a href="aboutme.php">
                    <div class="shadow"><img src="img/pic_01.jpg" /></div>
                    <div class="info">
                        <h2>Sobre mí</h2>
                        <p>Conóceme! El mejor servicio a un click.</p>
                    </div>
                </a>
            </article>

            <!-- ADVANCED -->
            <article>
                <a href="portfolio.php">
                    <div class="shadow"><img src="img/pic_02.jpg" /></div>
                    <div class="info">
                        <h2>Portfolio</h2>
                        <p>Échale un vistazo a mi trabajo.</p>
                    </div>
                </a>
            </article>

            <!-- PROFESSIONAL -->
            <article>
                <a href="services.php">
                    <div class="shadow"><img src="img/pic_03.jpg" /></div>
                    <div class="info">
                        <h2>Servicios</h2>
                        <p>¿Qué necesitas?<br />¡Puedo ayudarte!</p>
                    </div>
                </a>
            </article>
            
        </section>
        <!-- SERVICES:END -->
        
        <!-- FOOTER:INI --> 
        <?php include("modules/footer.php") ?>
        <!-- FOOTER:END --> 

    </div>
    <!-- CONTAINER:END -->
    
</div>
</div>
</div>
<!-- CONTAINERS-BG:END --> 
</body>
</html>