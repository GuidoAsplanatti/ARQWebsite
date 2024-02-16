<?php
// Obtener el nombre de la página actual desde el parámetro de consulta 'page'
$current_page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Definir las páginas y sus nombres en el menú
$pages = array(
    'home' => 'INICIO',
    'biografia' => 'ESTUDIO',
    'proyectos' => 'PROYECTOS',
    'noticias' => 'NOTICIAS',
    'contactos' => 'CONTACTO'
);
?>

<header class="head-container">
  <div class="container">
      <div class="d-flex flex-wrap justify-content-center py-4">
        <a href="index.php?page=home" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
          <img src="contents/Logo_ARQFernandez.png" class="img-fluid" alt="ARQ Carlos Fernanez Cabrera">
        </a>
  
        <ul class="nav nav-underline nav-scroller mb-3">
          <?php foreach ($pages as $page => $label): ?>
            <li class="nav-item <?php echo ($current_page == $page) ? 'active' : ''; ?>">
              <a href="index.php?page=<?php echo $page; ?>" class="nav-link link-body-emphasis"><?php echo $label; ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
  </div>
  
</header>
