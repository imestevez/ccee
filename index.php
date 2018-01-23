<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Prácticum</title>
        <meta name="description" content="Una guía interactiva de primeros pasos para Brackets.">
        <link rel="stylesheet" href="../style/style.css">
    </head>
    <body>
        <h1>PRACTICUM DE GRAO</h1>
        <H4>Elixe o teu grao</H4>
        <section class="texto">
        <form action="Controllers/indexController.php" method="post" id="trabajosocial"> 
            <fieldset>
                <legend>Graos</legend>
                <select name="selectTitulo">
                  <option value="trabajosocial">Traballo Social</option>
                  <option value="educacionsocial">Educacion Social</option>
                  <option value="infantil">Educación Infantil</option>
                  <option value="primaria">Educación Primaria</option>
                </select>
            </fieldset>         
            <button type="submit" form="trabajosocial" value="Submit">Enviar</button>
        </form>
        </section>
    </body>
</html>
