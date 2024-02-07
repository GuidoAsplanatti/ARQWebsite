<?php include('templates/head.html'); ?>

<?php
// Definir una variable para la página actual
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>

<body>
    <?php
    // Cargar el contenido de la página correspondiente
    switch ($page) {
        case 'home':
            include 'templates/webpages/home.html';
            break;
        case 'proyectos':
            include 'templates/webpages/proyectos.html';
            break;
        case 'contacto':
            include 'contacto.php';
            break;
        // Agregar más casos según las páginas que tengas
        default:
            include 'home.php'; // Página predeterminada
            break;
    }
    ?>
</body>

<?php include('templates/footer.html'); ?>

<?php include('assets/assets.html'); ?>
