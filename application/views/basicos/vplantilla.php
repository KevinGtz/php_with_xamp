<html>
<head>
	<title>Plantilla Esquema</title>
    <style>
        
        header, footer{
            background-color: black;
            color: white;
            width: auto;
            height: 100px;
            padding: 20px 20px 0px 30px;
            text-align: left;
        }
        
        nav, a{
            background-color: darkblue;
            color: white;
            width: auto;
            height: 30px;
            padding: 5px 20px 0px 20px;
            text-align: right;
        }
        
        section{
            background-color: lightcyan;
            width: auto;
            height: 800px;
            float: inherit
        }
        
        article{
            width: 900px;
            height: 400px;
            background-color: bisque;
            float: left;
        }
        
        aside{
            width: 400px;
            height: 350px;
            background-color:antiquewhite;
            float: right;
                
        }
    
    </style>
</head>
<body>
    <!-- Estructura general -->
    
    <!-- Encabezado -->
    <header>
        <h1>Encabezado</h1>
    </header>
    <nav>
        <a href="#">Opcion 1</a>
        <a href="#">Opcion 2</a>
        <a href="#">Opcion 3</a>    
    </nav>
    
    <section>
        <article>
            <h1>Articulo</h1>
        </article>
        
        <aside>
            <h1>Menu lateral</h1>
        </aside>
    </section>
    
    <footer>
        <p>Derechos de autor</p>
    </footer>
</body>
</html>