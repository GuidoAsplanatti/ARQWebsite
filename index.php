<head>
    <?php 
        include('templates/head.html');
        include('assets/assets.html'); ?>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">

</head>


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
        case 'biografia':
            include 'templates/webpages/biografia.html';
            break;
        case 'noticias':
            include 'templates/webpages/noticias.html';
            break;
        case 'contactos':
            include 'templates/webpages/contactos.html';
            break;

        //Obras
        case 'Casa_Herzog':
            include 'templates/workspages/Casa_Herzog.html';
            break;
        // Agregar más casos según las páginas que tengas
        default:
            include 'home.php'; // Página predeterminada
            break;
    }
    ?>
</body>

<?php 
    include('templates/footer.html');
    include('assets/assets.html'); 
?>