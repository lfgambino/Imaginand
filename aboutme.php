<?php $location = 2; ?>

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
        
        <!-- CONTENT:INI -->
        <article class="aboutme">

            <!-- PHOTOS -->
            <div class="photos">
                <img src="img/myphotos.png" alt="my photos" />
            </div>
            
            <!-- INFO -->
            <div class="info">
                <h2>Sobre mí</h2>
                <div class="textinfo">
                    <p>¡Hola! soy Andrés Saá, <strong>diseñador web freelance.</strong></p>
                    <p>¿Eres un particular o una empresa? ¡No importa!<br />
                       Si buscas soluciones creativas y resultados profesionales<br />
                       a precios razonables, estás en el lugar adecuado.
                    </p>
                    <p>Realizo todo tipo de webs: Blogs, Foros, Tiendas Online,<br />
                       Portfolios, Webs Personales y Profesionales...
                    </p>
                    <p>Contacta conmigo y te ofreceré el producto<br />
                       que mejor se adapte a tus necesidades.
                    </p>
                    <p>Email:&nbsp;&nbsp;<span class="contactinfo">info@imaginand.com</span><br />
                       Telf:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="contactinfo">675 357 974</span>
                    </p>
                </div>
            </div>
            
            <!-- SKILLS -->
            <ul class="skills">
                <h3>Habilidades</h3>
                <!-- HTML5 -->
                <li id="html5">
                    <div class="name">HTML5</div>
                    <div class="bar"><div class="level"></div></div>
                </li>
                <!-- CSS3 -->
                <li id="css3">
                    <div class="name">CSS3</div>
                    <div class="bar"><div class="level"></div></div>
                </li>
                <!-- jQuery -->
                <li id="jquery">
                    <div class="name">jQuery</div>
                    <div class="bar"><div class="level"></div></div>
                </li>
                <!-- MooTools -->
                <li id="mootools">
                    <div class="name">MooTools</div>
                    <div class="bar"><div class="level"></div></div>
                </li>
                <!-- PHP -->
                <li id="php">
                    <div class="name">PHP</div>
                    <div class="bar"><div class="level"></div></div>
                </li>
                <!-- Symfony2 -->
                <li id="symfony2">
                    <div class="name">Symfony2</div>
                    <div class="bar"><div class="level"></div></div>
                </li>
                <!-- Zend -->
                <li id="zend">
                    <div class="name">Zend Framework</div>
                    <div class="bar"><div class="level"></div></div>
                </li>
                <!-- Photoshop -->
                <li id="photoshop">
                    <div class="name">Photoshop</div>
                    <div class="bar"><div class="level"></div></div>
                </li>
                <!-- Illustrator -->
                <li id="illustrator">
                    <div class="name">Illustrator</div>
                    <div class="bar"><div class="level"></div></div>
                </li>
            </ul>
 

        </article>
        <!-- CONTENT:END -->
        
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