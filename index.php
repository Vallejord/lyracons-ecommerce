<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- custom CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Google fonts Monserrat extra-light 200 , regular 400 , bold 700 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,400;1,700&display=swap" rel="stylesheet">

    
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Lyracon ecommerce challenge</title>
    
    <script type="text/javascript">
      

      function displayMoreProducts() {
      fetch("./products.json")
      .then(response => response.json()) // convert to json
      .then( data => {
          
        data.products.forEach(element => {//iterates array 
          console.log(element);
          let productTemplate = document.getElementById("productTemplate");//corregir nombre con guiones
          let productTemplateClone = productTemplate.cloneNode(true);
          productTemplateClone.getElementsByClassName("image-template")[0].setAttribute("src",element.imageSrc); //[0] porque la busqueda genera un array con todos los resultados
          productTemplateClone.getElementsByClassName("name")[0].innerHTML = element.name;
          productTemplateClone.getElementsByClassName("list-price")[0].innerHTML = element.listPrice;
          productTemplateClone.getElementsByClassName("best-price")[0].innerHTML = element.bestPrice;
          productTemplateClone.getElementsByClassName("fees")[0].innerHTML = element.fees
          productTemplateClone.classList.remove("invisible");
          productTemplateClone.classList.add("item"); // quitar
          document.getElementById('main-product-grid').appendChild(productTemplateClone);
        });
        

  
        })
      };
      </script>

  </head>
  <body>
    <div class="container-fluid px-0" id="fixed">
    <!-- Container fluid de bootstrap 5 sirve para que ese div siempre este al 100% del ancho-->
    <header class="p-2 bg-dark text-white flex flex-justify-content-center">
      <p class="my-0"><b>¡Aprovechá la promo!</b></p> 
      <p class="mb-0">Comprá hasta 12 cuotas sin interés</p>
    </header>

    <nav class="flex align-items px-5 pt-4 pb-3 border-bottom" id="navbar">
      <a id="mainlogo"><img src="./img/logo.svg"></a>
      <ul class="flex flex-justify-content-center align-items text-uppercase l-space nav-menu">
        <div class="dropdown">
          <li class="dropbtn nav-item"><a>shop</a></li>
          <div class="dropdown-content">
            <a href="#">Pantalones</a>
            <a href="#">Remeras</a>
            <a href="#">Camperas</a>
          </div>
        </div> 
        <li class="red" id="trigger"><a>real winter</a></li>
        <li><a>complementos</a></li>
        <li><a>editoriales</a></li>
      </ul>
      <ul class="flex align-items flex-grow-1  text-muted text-uppercase">
        <form class="example">
          <input type="text" placeholder="BUSCAR" name="search2">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <li class="small px-3"><a id="log-in">ingresar</a></li>
        <li class="small"><a>carrito</a></li>
        <img src="./img/shop.svg" alt="">
      </ul>
      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
      <img src="./img/search.svg" class="hamburger" alt="">
      <img src="./img/shop.svg" class="hamburger" id="shop"alt="">
    </nav>
    </div>
    <div class="main-title px-5 pt-4 pb-2">
      <h6 class="very-small">Invierno 2020</h6>
      <h2 id="colortarget">Título de categoría</h2>
    </div>
    <div class="hamburger" id="hidden-bar">
      <div data-bs-toggle="modal" data-bs-target="#myModal"><a>filtrá por<a/></div>
      <div><a>ordenar por</a></div>
    </div>
    <main class="px-5 flex border-bottom">
      
      <div class="side-filter pt-4">
        <h6 class="uppercase border-bottom" >Filtrar por</h6>
        
        <ul class="filter-bar p-0">
          <button class="collapsible border-bottom">Talle</button>
          <div class="content">
            <form>
              <input type="radio" id="35" name="fav_language" value="35">
              <label for="35">35</label><br>
              <input type="radio" id="36" name="fav_language" value="36">
              <label for="36">36</label><br>
              <input type="radio" id="37" name="fav_language" value="37">
              <label for="37">37</label><br>
              <input type="radio" id="35" name="fav_language" value="35">
              <label for="35">35</label><br>
              <input type="radio" id="36" name="fav_language" value="36">
              <label for="36">36</label><br>
              <input type="radio" id="37" name="fav_language" value="37">
              <label for="37">37</label><br>
            </form>
          </div>
          <button class="collapsible border-bottom">Color</button>
          <div class="content">
            <form>
              <input type="radio" id="Amarillo" name="fav_language" value="Amarillo">
              <label for="Amarillo">Amarillo</label><br>
              <input type="radio" id="Blanco" name="fav_language" value="Blanco">
              <label for="Blanco">Blanco</label><br>
              <input type="radio" id="Hueso" name="fav_language" value="Hueso">
              <label for="Hueso">Hueso</label><br>
              <input type="radio" id="Marrón" name="fav_language" value="Marrón">
              <label for="Marrón">Marrón</label><br>
              <input type="radio" id="Negro" name="fav_language" value="Negro">
              <label for="Negro">Negro</label><br>
              <input type="radio" id="Nude" name="fav_language" value="Nude">
              <label for="Nude">Nude</label><br>
              <input type="radio" id="Plata" name="fav_language" value="Plata">
              <label for="Plata">Plata</label><br>
              <input type="radio" id="Rojo" name="fav_language" value="Rojo">
              <label for="Rojo">Rojo</label><br>
              <input type="radio" id="Suela" name="fav_language" value="Suela">
              <label for="Suela">Suela</label><br>
              <input type="radio" id="Vision" name="fav_language" value="Vision">
              <label for="Vision">Vision</label><br>
            </form>
          </div>
          <button class="collapsible border-bottom">Precio</button>
          <div class="content">
            <form>
              <input type="radio" id="$2000-$3000" name="fav_language" value="$2000-$3000">
              <label for="$2000-$3000">$2.000 - $.3000</label><br>
              <input type="radio" id="$3.000-$.4000" name="fav_language" value="$3.000-$.4000">
              <label for="$3.000-$.4000">$3.000 - $.4000</label><br>
            </form>
          </div>
          
          
          
          <button class="collapsible border-bottom">Temporada</button>
          <button class="collapsible border-bottom">Material</button>
        </ul>
      </div>


      <div class="grid-main flex-column">
        <div class="flex flex-justify-content-space pt-4" id="product-count">
          <p>6 productos</p>
          <p>ordenar por: relevancia</p>
        </div>
        
        

        <div class="grid-container" id="main-product-grid">

        <?php
          include('products.php');
          foreach($items as $item) {?>
              <div class="item" id="<?php echo $item['id'] ?>">
              <img src="<?php echo $item['imageSrc'] ?>" alt="">
            <p class="uppercase l-space-sm product-name mt-1 mb-2">
              <?php echo $item['name'] ?>
            </p>
            <div>
              <p class="promo promo-old">
                $<?php echo $item['listPrice'] ?>
              </p>
              <p class="promo"><b>
              $<?php echo $item['bestPrice'] ?>
              </b></p>
            </div>
            <p class="red fees">Hasta <b>
              <?php echo $item['fees'] ?>
            cuotas</b></p>
          </div>
            <?php       
          }
        ?>

         </div>
      <button class="btn btn-primary btn-dark align-self-center mt-4 mb-5" id="add-button" onclick="displayMoreProducts()"><b>Ver más productos</b></button>
      </div>
    </main>
    <footer class="flex flex-justify-content-center pt-4">
      <div class="flex-column">
        <nav class="flex-column align-items uppercase footer-nav">
          <a>Cambios y devoluciones</a>
          <a>envíos</a>
          <a>Medios de pago</a>
          <a>Preguntas frecuentes</a>
          <a>Venta mayorista</a>
        </nav>
        <div class="flex-column align-items pt-2 footer-form">
          <h4>News</h4>
          <p>Suscribite y entérate de las promos!</p>
         <input type="text" placeholder="Escribí tu Mail">
         <button class="btn btn-primary btn-dark my-3">Suscribite</button>
        </div>
      </div>
    </footer>

    <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Fitrá</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div id="talle">
          <h5>Talle:</h5>
          <div class="circle-containner">
            <button class="button">36</button>
            <button class="button">37</button>
            <button class="button">38</button>
            <button class="button">39</button>
            <button class="button">40</button>
            <button class="button">41</button>
            <button class="button">42</button>
          </div>
        </div>
        <div id="color">
          <h5>Color: Animal print negro</h5>
          <button></button>
          <button></button>
          <button></button>
        </div>
        <div id="precio"> 
          <h5>Precio:</h5>
          <form>
            <input type="radio" id="$2000-$3000" name="fav_language" value="$2000-$3000">
            <label for="$2000-$3000">$2.000 - $.3000</label><br>
            <input type="radio" id="$3.000-$.4000" name="fav_language" value="$3.000-$.4000">
            <label for="$3.000-$.4000">$3.000 - $.4000</label><br>
          </form>

        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>


    <div id="productTemplate" class="invisible">
      <img class="image-template">
      <p class="name"></p>
      <div>
        <p class="promo promo-old list-price"></p>
        <p class="promo best-price"></p>
      </div>
      <p class="red">Hasta <b><span class="fees"></span> cuotas</b></p>
    </div>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./js/functions.js"></script>
  </body>
</html>