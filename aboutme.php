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
        <section id="aboutme">

            <!-- PHOTOS -->
            <div class="photos">
                <div id="photo01" class="shadow"><img src="img/myphoto01.jpg" alt="my photo 01" /></div>
                <div id="photo02" class="shadow"><img src="img/myphoto02.jpg" alt="my photo 02" /></div>
                <!--<img src="img/myphotos.png" alt="my photos" />-->
            </div>
            
            <!-- INFO -->
            <article class="info">
                <h2>Sobre m�</h2>
                <div class="textinfo">
                    <p>�Hola! soy Andr�s Sa�, <strong>dise�ador web freelance.</strong></p>
                    <p>�Eres un particular o una empresa? �No importa!<br />
                       Si buscas soluciones creativas y resultados profesionales
                       a precios razonables, est�s en el lugar adecuado.
                    </p>
                    <p>Realizo todo tipo de webs: Blogs, Foros, Tiendas Online,
                       Portfolios, Webs Personales y Profesionales...
                    </p>
                    <p>Contacta conmigo y te ofrecer� el producto
                       que mejor se adapte a tus necesidades.
                    </p>
                    <p>Email:&nbsp;&nbsp;<span class="contactinfo">info@imaginand.com</span><br />
                       Telf:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="contactinfo">675 357 974</span>
                    </p>
                </div>
            </article>
            
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
                <!-- jQuery Mobile -->
                <li id="jquerym">
                    <div class="name">jQuery Mobile</div>
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
                <!-- Django -->
                <li id="django">
                    <div class="name">Django</div>
                    <div class="bar"><div class="level"></div></div>
                </li>
                <!-- NodeJS -->
                <li id="nodejs">
                    <div class="name">NodeJS</div>
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
 

        </section>
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