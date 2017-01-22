 <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill">
<img src="img/imagenes/img1.jpg" alt="Mountain View" style="width:1250px; height:550px;">
</div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill">
<img src="img/imagenes/img2.jpg" alt="Mountain View" style="width:1250px; height:550px;">
</div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill">
<img src="img/imagenes/img3.jpg" alt="Mountain View" style="width:1250px; height:550px;">
</div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header

<div class="jumbotron">
    <h2>Estimado (a): <?=$usuario['nombres']?> </h2>
Te damos la bienvenida a este sitio virtual donde podras registrar o consultar los datos que necesites.
</div>