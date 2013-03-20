<?php $location = 1; ?>

<!-- HEAD:INI -->
<?php include("modules/head.php") ?>
<!-- HEAD:FIN -->

<body>
<!-- CONTAINERS-BG:INI --> 
<div id="container_bg_0">
<div id="container_bg_1">
<div id="container_bg_2">

    <!-- CONTAINER:INI -->
    <div id="container">
    	
        <!-- HEADER:INI -->
        <?php include("modules/header.php") ?>
	<!-- HEADER:END -->
        
        <!-- ARTICLE:INI -->
        <section id="home">
            
            <!-- ABOUT -->
            <article>
                <div class="content">
                    <a href="aboutme.php">
                        <img src="img/pic_01.jpg" />
                        <span class="frame"></span>
                    </a>
                </div>
                <h2>
                    <a href="aboutme.php">Sobre mí</a>
                </h2>
            </article>
            
            <!-- PORTFOLIO -->
            <article>
                <div class="content">
                    <a href="#">
                        <img src="img/pic_02.jpg" />
                        <span class="frame"></span>
                    </a>
                </div>
                <h2>
                    <a href="#">Portfolio</a>
                </h2>
            </article>
            
            <!-- SERVICES -->
            <article>
                <div class="content">
                    <a href="#">
                        <img src="img/pic_03.jpg" />
                        <span class="frame"></span>
                    </a>
                </div>
                <h2>
                    <a href="#">Servicios</a>
                </h2>
            </article>
            
            
        </section>
        <!-- ARTICLE:END -->
        
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