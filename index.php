<?php
/*=========================================
   GUÍA DE PROCEDIMIENTOS
   Archivo raíz — esqueleto general del sitio
=========================================*/
$page_title = "Guía de Procedimientos";

/* URL pública absoluta del PDF, necesaria para el visor de Google Docs
   (requiere una URL accesible desde internet, no una ruta relativa). */
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$base_dir = rtrim(str_replace('\\', '/', dirname($_SERVER['PHP_SELF'])), '/');
$pdf_url  = $protocol . $_SERVER['HTTP_HOST'] . $base_dir . '/Machote_Procedimiento.pdf';
?>
<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo htmlspecialchars($page_title); ?></title>

<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="styles.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>
<body>

<!-- =====================================================
     BARRA DE NAVEGACIÓN PRINCIPAL
====================================================== -->
<header class="gp-header">

    <div class="gp-brand">
        <i class="fa-solid fa-book-open"></i>
        <span>GUÍA DE PROCEDIMIENTOS</span>
    </div>

    <button class="gp-toggle" id="gpToggle" aria-label="Abrir menú">
        <i class="fa-solid fa-bars"></i>
    </button>

    <nav class="gp-nav" id="gpNav">

        <div class="gp-mobile-header">
            <div class="gp-brand"><i class="fa-solid fa-book-open"></i><span>GUÍA</span></div>
            <button class="gp-close" id="gpClose" aria-label="Cerrar menú">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <button class="gp-nav-item active" data-target="presentacion">
            <i class="fa-solid fa-person-chalkboard"></i>
            <span>Presentación</span>
        </button>

        <button class="gp-nav-item" data-target="super-prompt">
            <i class="fa-solid fa-wand-magic-sparkles"></i>
            <span>Tu Súper Prompt</span>
        </button>

        <button class="gp-nav-item" data-target="guia-procedimiento">
            <i class="fa-solid fa-file-lines"></i>
            <span>Guía de Procedimiento</span>
        </button>

    </nav>

</header>

<!-- =====================================================
     CONTENIDO PRINCIPAL
====================================================== -->
<main class="gp-main">

    <section id="presentacion" class="gp-section active">
        <div class="gp-section-header">
            <span class="gp-section-icon"><i class="fa-solid fa-person-chalkboard"></i></span>
            <div>
                <h2>Presentación</h2>
                <p>Elaboración de Procedimientos — Juan Pablo Paz</p>
            </div>
        </div>
        <div class="gp-card">
            <div class="gp-embed-wrap">
                <iframe loading="lazy" class="gp-embed-frame"
                    src="https://www.canva.com/design/DAHQITzz4lI/gaazBEGxj7RcHj9O9pAViw/view?embed"
                    allowfullscreen="allowfullscreen" allow="fullscreen">
                </iframe>
            </div>
            <div class="gp-card-actions">
                <a class="gp-btn gp-btn-primary" href="https://www.canva.com/design/DAHQITzz4lI/gaazBEGxj7RcHj9O9pAViw/view" target="_blank" rel="noopener">
                    <i class="fa-solid fa-up-right-from-square"></i>
                    <span>Abrir en Canva</span>
                </a>
            </div>
        </div>
    </section>

    <section id="super-prompt" class="gp-section">
        <div class="gp-placeholder">
            <i class="fa-solid fa-wand-magic-sparkles"></i>
            <p>Aquí va el apartado 2: Tu Súper Prompt</p>
        </div>
    </section>

    <section id="guia-procedimiento" class="gp-section">
        <div class="gp-section-header">
            <span class="gp-section-icon"><i class="fa-solid fa-file-lines"></i></span>
            <div>
                <h2>Guía de Procedimiento</h2>
                <p>Machote y guía de uso para la elaboración de procedimientos</p>
            </div>
        </div>
        <div class="gp-card">
            <div class="gp-card-actions gp-card-actions-top">
                <a class="gp-btn gp-btn-primary" href="<?php echo htmlspecialchars($pdf_url); ?>" target="_blank" rel="noopener">
                    <i class="fa-solid fa-up-right-from-square"></i>
                    <span>Abrir en otra pestaña</span>
                </a>
                <a class="gp-btn gp-btn-secondary" href="Machote_Procedimiento.pdf" download="Machote_Procedimiento.pdf">
                    <i class="fa-solid fa-download"></i>
                    <span>Descargar PDF</span>
                </a>
            </div>
            <div class="gp-embed-wrap gp-embed-pdf">
                <iframe loading="lazy" class="gp-embed-frame"
                    src="https://docs.google.com/viewer?url=<?php echo urlencode($pdf_url); ?>&embedded=true"
                    title="Guía de Procedimiento">
                </iframe>
            </div>
        </div>
    </section>

</main>

<!-- =====================================================
     FOOTER
====================================================== -->
<footer class="gp-footer">
    <div class="gp-footer-copy">© Guía de Procedimientos</div>
</footer>

<script>
(() => {

    const toggle  = document.getElementById('gpToggle');
    const close   = document.getElementById('gpClose');
    const nav     = document.getElementById('gpNav');
    const navItems = document.querySelectorAll('.gp-nav-item');
    const sections  = document.querySelectorAll('.gp-section');

    /* Menú móvil */
    toggle.addEventListener('click', () => nav.classList.add('open'));
    close.addEventListener('click', () => nav.classList.remove('open'));
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') nav.classList.remove('open');
    });

    /* Navegación entre apartados */
    function showSection(target) {
        sections.forEach(s => s.classList.toggle('active', s.id === target));
        navItems.forEach(i => i.classList.toggle('active', i.dataset.target === target));
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    navItems.forEach(item => {
        item.addEventListener('click', () => {
            showSection(item.dataset.target);
            nav.classList.remove('open');
        });
    });

})();
</script>

</body>
</html>
