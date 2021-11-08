<html>

<head>

</head>

<body>
    <form action="post.php" method="POST" >
        <input type="button" value="Agregar" onclick="agregar()">
        <input type="text" name="nombre" placeholder="Escribir nombre">
        <input type="text" name="direccion[]" placeholder="direccion">

        <script type="text/javascript">
            function agregar() {
                var o = document.createElement('input');
                o.type = "text";
                o.name = "direccion[]";
                o.value = "";
                o.placeholder = "Nueva direccion"
                document.getElementById('padre').appendChild(o);
            }
        </script>

<div id="padre"></div>
<input type="submit" value="enviar">
        




    </form>


</body>

</html>