<center>
    <h1>KenderStore</h1>
    <hr>

    <div class="module" style="width:50%">
        <h2>PIXELART</h2>
        <h3>Calcular precio</h3>
        <div class="form-group">
            <label for="exampleInputEmail1">Largo en centimetros</label>
            <input type="text" class="form-control" id="largo" aria-describedby="emailHelp" placeholder="Largo" autocomplete="off">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Ancho en centimetros</label>
            <input type="text" class="form-control" id="ancho" aria-describedby="emailHelp" placeholder="Ancho" autocomplete="off">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="llavero" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">llavero</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="imantado" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">imantado</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="reflectante" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">reflectante</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="volar" value="option3" disabled>
            <label class="form-check-label" for="inlineCheckbox3">volador (disabled)</label>
        </div>

        <!-- <button type="submit" class="btn btn-primary">Calcular</button> -->
        <button onclick="calcularPrecioPixelArt()" class="btn btn-primary">Calcular</button>

        <h1 id="precio">$0</h1>
        <small id="smallPrecio" class="form-text text-muted"></small>

        <h3>Inventario</h3>

        <img class="img-fluid img-thumbnail kImg" src="view\public\images\kenderStore\pixelart\img_pixelart.png" alt="some_pixelart_img">

        <h3>Ejemplos de uso</h3>
        <img class="img-fluid img-thumbnail kImg" src="view\public\images\kenderStore\pixelart\a (2).jpg" alt="some_pixelart_img">
        <img class="img-fluid img-thumbnail kImg" src="view\public\images\kenderStore\pixelart\a (3).jpg" alt="some_pixelart_img">
        
        <h3>Mas</h3>
        <img class="img-fluid img-thumbnail kImg" src="view\public\images\kenderStore\pixelart\a (1).jpg" alt="some_pixelart_img">
        <img class="img-fluid img-thumbnail kImg" src="view\public\images\kenderStore\pixelart\a (4).jpg" alt="some_pixelart_img">
    </div>

    <hr>

    <div class="module">
        <h2>STICKERS</h2>
        <h3>Como usar los stickers</h3>
        <p>
            1. doblar una punta de el sticker hacia el frente <br>
            2. pasar la uña hacia atras arrastrando el papel trasero <br>
            3. separar el sticker del papel con el espacio que quedo <br>
        </p>

        <h3>Ejemplos de uso</h3>
        <!-- <img src="view\public\images\kenderStore\stickers (1).jpg" alt="some-image"> -->
        <img style="width:40%" class="img-fluid img-thumbnail" src="view\public\images\kenderStore\stickers (2).jpg" alt="some-image">

        <h3>Inventario</h3>
        <img style="width:40%" class="img-fluid img-thumbnail" src="view\public\images\kenderStore\stickers (1).jpg" alt="some-image">
        <img style="width:40%" class="img-fluid img-thumbnail" src="view\public\images\kenderStore\stickers (4).jpg" alt="some-image">

        <img style="width:80%" class="img-fluid img-thumbnail" src="view\public\images\kenderStore\stickers (3).jpg" alt="some-image">
        <br>
        <img style="width:40%" class="img-fluid img-thumbnail" src="view\public\images\kenderStore\stickers (5).jpg" alt="some-image">
    </div>

    <hr>
    <script src="view\public\js\ks.js"></script>
</center>