<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employer | Employers</title>

    <link rel="stylesheet" href="css/employer_stl.css" type="text/css">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body id="as">
    <header>
        <div id="top-nav"></div>
        <div class="main-nav-desktop"></div>
    </header>
    <main>
        <form id="main-form" action="AddEmployer.php">
            <div id="main-form-content">
                <h2>Registrar Empleado</h2>

                <input class="fields" type="text" name="names" id="names" placeholder="Ingresa tus nombres">
                <input class="fields" type="text" name="lastnames" id="lastnames" placeholder="Ingresa tus apellidos">
                <input class="fields" type="text" name="number-id" id="number-id"
                    placeholder="Ingresa tu número de identificación">
                <p id="title-type">Escoge tu tipo de identificación:</p>
                <p>
                    <label>
                        <input type="checkbox" class="filled-in" value="CC" />
                        <span>CC</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="checkbox" class="filled-in" value="CE" />
                        <span>CE</span>
                    </label>
                </p>
                <input class="fields" type="text" name="number-one" id="number-one"
                    placeholder="Ingresa un número de télefono">
                <input class="fields" type="text" name="number-two" id="number-two"
                    placeholder="Ingresa un número de télefono">
                <input class="fields" type="text" name="number-three" id="number-three"
                    placeholder="Ingresa un número de télefono">
                <input class="fields" type="text" name="email" id="email" placeholder="Ingresa un correo eléctronico">
                <input class="fields" type="text" name="salary" id="salary" placeholder="Ingresa tu salario">
                <div id="main-btns">
                    <input class="btn" type="submit" value="Registrar Empleado">
                </div>
            </div>
        </form>
    </main>
</body>

</html>