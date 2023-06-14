<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cafeteria Konecta</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


</head>

<body>


    <div class="bg-main">
        <center><a class="navbar-brand m-auto my-5">

                <img style="border-style: outset;"
                    src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/coffee-shop-logo-template-design-5a0e3cea955fde66f5e8e4e07c8759a1_screen.jpg?ts=1561483338"
                    width="220" alt="" loading="lazy"></>
                <h3
                    style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                    Cafeteria Konecta
                </h3><br>
                <h2
                    style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                    <center>Registro de productos</center>
                </h2>

            </a></center>
    </div><br>



    <b>
        <form method="POST" action="welcome.blade.php" style="text-align: center;">
            <div class="container">
                <div class="column">

                    Nombre del producto: <br />
                    <p>

                        <input type="text" name="nombre" size="40" />
                    <p>
                        Referencia del producto: <br />
                        <input type="text" name="referencia" size="40" />
                    <p>
                        Categoría del producto: <br />
                        <input type="text" name="categoria" size="40" />
                    <p>

                    </p>
                </div>

                <div class="column">
                    <p>
                        Precio del producto: <br />
                        <input type="text" name="Precio" size="5"></input>
                    <p>
                        Peso del producto: <br />
                        <input type="text" name="peso" size="5" />
                    <p>
                        Stock del producto: <br />
                        <input type="text" name="stock" size="5" />
                    <p>

                    </p>
                </div>
            </div>


        </form>
    </b>


    <center>
        <div>
            <a href="{{route('admin.producto.create')}}">
                <h1
                    style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                    <input type="submit" name="submit" value="Enviar" />
                </h1>
            </a>
        </div>
    </center>


    <div class="button-container">
        <nav>
            <div class="container p-4">
                <a class="custom-bottom" href="{{route('admin.producto.index')}}">
                    <h1
                        style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                        <button type="submit" size="10px" class="right-button">PAGINA PRINCIPAL</button>
                    </h1>
                </a>
            </div>
        </nav>

        <nav>
            <div class="container p-4">
                <a class="custom-bottom" href="{{route('admin.producto.sell')}}">
                    <h1
                        style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                        <button type="submit" size="10px" class="right-button">VENDER PRODUCTOS</button>
                    </h1>
                </a>
            </div>
        </nav>
    </div>


</body>

<footer class="container-fluid bg-main">
    <div class="row text-center p-4">
        <div id="col-md-10">

            <a href="linkedin.com/in/leonardo-rodriguez-developer/">
                <img src="https://www.pngmart.com/files/21/Linkedin-PNG-HD-Isolated.png" class="img-fluid" width="60px"
                    loading="lazy" alt="Linkedin Leonardo Rodríguez">
            </a>

            <a href="https://www.instagram.com/leoru88/">
                <img src="https://ouch-cdn2.icons8.com/_US60I188UuoRurpJ9lfFmfp5baT-Gtp3bghSn-AOL8/rs:fit:456:456/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvOTI0/L2NjYjgwMjlkLWZh/NWMtNDU5Yy05YjBk/LWI0Yzg2MzI3Zjc0/Mi5wbmc.png"
                    class="img-fluid" width="60px" loading="lazy" alt="Instagram Leonardo Rodríguez">
            </a>

            <a href="https://www.facebook.com/leonardo.rodriguez.uzcategui/">
                <img src="https://www.cousanostra.es/wp-content/uploads/2018/02/png-facebook-logo-for-email-marketing-you-can-trust-1000.png"
                    class="img-fluid" width="60px" loading="lazy" alt="Facebook Leonardo Rodríguez">
            </a>

        </div>
    </div>
</footer>

</html>