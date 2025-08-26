<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TOTAL STRENGTH</title>
</head>
<body>
   <nav class="navbar">
    <div class="logo"><img src="img/logo.png" alt="TOTAL STRENGTH"></div>
    <div>
       <ul class="nav-links">
           <li><a href="#">About</a></li>
           <li><a href="#">Services</a></li>
           <li><a href="#">Contact</a></li>
       </ul>
    </div>
   </nav>
 

<?php
if (isset($_GET["name"]) && isset($_GET["age"])) {
    $name = $_GET["name"];
    $age = $_GET["age"];

    echo "<h3>Hola $name 👋</h3>";

    if ($age < 18) {
        echo "<p>Tienes $age años. Te recomiendo deportes, cardio suave y ejercicios con tu propio peso.</p>";
    } elseif ($age >= 18 && $age <= 40) {
        echo "<p>Tienes $age años. Es una gran etapa para entrenar fuerza, resistencia y hacer HIT.</p>";
    } elseif ($age > 40 && $age <= 60) {
        echo "<p>Tienes $age años. Te convienen rutinas equilibradas: yoga, pesas moderadas y caminatas.</p>";
    } else {
        echo "<p>Tienes $age años. Lo ideal son actividades de bajo impacto: natación, pilates y movilidad.</p>";
    }

    echo "<br><a class='back' href='index.php'>Volver al formulario</a>";
} else {
    ?>
   
  <h1>Bienvenido a Total Strength!!</h1>

   <h2>Por favor indicanos tu informacion para darte las mejores recomendaciones</h2>

   <form action="index.php" method="GET">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required>

        <input type="submit" value="Enviar">
</form>

 <?php
}
?>

</body>
</html>