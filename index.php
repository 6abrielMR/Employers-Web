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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
            <div class="row employer">
                <div id="field-title" class="col s12 m10 l1">
                    <h3>
                        <label>
                            <input type="checkbox" class="filled-in"/>
                            <span id="id-ct">0001</span>
                        </label>
                    </h3>
                </div>
                <div id="field-title" class="col s12 m10 l2"><h3>Omar David Montes Rodriguez</h3></div>
                <div id="field-title" class="col s12 m10 l1"><h3>TI</h3></div>
                <div id="field-title" class="col s12 m10 l2"><h3>311 824 3879</h3></div>
                <div id="field-title" class="col s12 m10 l2"><h3>montesdavid121@gmail.com</h3></div>
                <div id="field-title" class="col s12 m10 l2"><h3>2.500.000 COP</h3></div>
                <div id="field-title" class="col s12 m10 l2"><h3>Acciones</h3></div>
            </div>
            <div class="separator"></div>

            <div class="row employer">
                <div id="field-title" class="col s12 m10 l1">
                    <h3>
                        <label>
                            <input type="checkbox" class="filled-in"/>
                            <span id="id-ct">0002</span>
                        </label>
                    </h3>
                </div>
                <div id="field-title" class="col s12 m10 l2"><h3>Gabriel Omar Montes Rodriguez</h3></div>
                <div id="field-title" class="col s12 m10 l1"><h3>CC</h3></div>
                <div id="field-title" class="col s12 m10 l2"><h3>311 537 5511</h3></div>
                <div id="field-title" class="col s12 m10 l2"><h3>gabriel.montes716@gmail.com</h3></div>
                <div id="field-title" class="col s12 m10 l2"><h3>2.000.000 COP</h3></div>
                <div id="field-title" class="col s12 m10 l2"><h3>Acciones</h3></div>
            </div>
            <div class="separator"></div>
        </div>

    </main>

</body>

</html>