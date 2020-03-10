<?php

    require_once('Employers.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employers | CRUD</title>

    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>

    <header>
        <div id="top-nav">
            <h1>EMPLOYERS</h1>
        </div>
        <div class="main-nav-desktop"></div>
    </header>

    <main>
        <div class="main-structure-data">
            <h1 id="main-title">Lista de Empleados</h1>
            <div class="row">
                <div id="field-title" class="col s12 m10 l1">
                    <h3>
                        <label>
                            <input type="checkbox" class="filled-in"/>
                            <span id="id-ct-title">Id</span>
                        </label>
                    </h3>
                </div>
                <div id="field-title" class="col s12 m10 l2"><h2>Nombres</h2></div>
                <div id="field-title" class="col s12 m10 l1"><h2>Type Id</h2></div>
                <div id="field-title" class="col s12 m10 l2"><h2>Telefonos</h2></div>
                <div id="field-title" class="col s12 m10 l2"><h2>correo</h2></div>
                <div id="field-title" class="col s12 m10 l2"><h2>Salario</h2></div>
                <div id="field-title" class="col s12 m10 l2"><h2>Acciones</h2></div>
            </div>
            <div class="separator"></div>
        </div>

        <div id="main-employers">
            <?php

                for($idx = 0; $idx < count($employers); $idx++) {
                    printEmployers($employers[$idx]);
                }

            ?>
        </div>

    </main>

</body>

</html>