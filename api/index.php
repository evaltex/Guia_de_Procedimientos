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
        <div class="gp-section-header">
            <span class="gp-section-icon"><i class="fa-solid fa-wand-magic-sparkles"></i></span>
            <div>
                <h2>Tu Súper Prompt</h2>
                <p>Llena los 11 datos de tu proceso y arma el prompt para redactar tu procedimiento con IA</p>
            </div>
        </div>

        <div class="gp-sp-layout">

            <!-- Columna principal: formulario -->
            <div class="gp-sp-main">

                <!-- Formulario -->
                <div class="gp-card gp-sp-card">
                    <form id="spForm" class="gp-form-grid">

                        <div class="gp-field">
                            <label for="f1">1. Nombre del procedimiento</label>
                            <input type="text" id="f1" name="f1" placeholder="Ej. Atención de solicitudes de compra">
                        </div>

                        <div class="gp-field">
                            <label for="f2">2. Área o proceso al que pertenece</label>
                            <input type="text" id="f2" name="f2" placeholder="Ej. Compras">
                        </div>

                        <div class="gp-field">
                            <label for="f3">3. Giro o actividad de la empresa</label>
                            <input type="text" id="f3" name="f3" placeholder="Ej. Manufactura textil">
                        </div>

                        <div class="gp-field">
                            <label for="f4">4. ¿Dónde inicia y dónde termina el proceso?</label>
                            <input type="text" id="f4" name="f4" placeholder="Ej. Inicia con la requisición, termina con la entrega">
                        </div>

                        <div class="gp-field">
                            <label for="f5">5. Puestos que intervienen</label>
                            <input type="text" id="f5" name="f5" placeholder="Ej. Comprador, Gerente de Compras">
                        </div>

                        <div class="gp-field gp-field-wide">
                            <label for="f6">6. Equipo, herramienta, materiales o sistemas que se utilizan</label>
                            <textarea id="f6" name="f6" rows="2" placeholder="Ej. ERP, catálogo de proveedores, formato de requisición"></textarea>
                        </div>

                        <div class="gp-field gp-field-wide">
                            <label for="f7">7. Riesgos o condiciones de seguridad, salud y ambiente relevantes</label>
                            <textarea id="f7" name="f7" rows="2" placeholder="Ej. No aplica, o detalle los riesgos"></textarea>
                        </div>

                        <div class="gp-field gp-field-wide">
                            <label for="f8">8. Parámetros o variables que se controlan (si aplica)</label>
                            <textarea id="f8" name="f8" rows="2" placeholder="Ej. Tiempo de respuesta, presupuesto autorizado"></textarea>
                        </div>

                        <div class="gp-field gp-field-wide">
                            <label for="f9">9. Formatos o registros que ya existen en el área</label>
                            <textarea id="f9" name="f9" rows="2" placeholder="Ej. Formato de requisición F-CO-01"></textarea>
                        </div>

                        <div class="gp-field gp-field-wide">
                            <label for="f10">10. Normas, NOM o documentos internos que debo citar</label>
                            <textarea id="f10" name="f10" rows="2" placeholder="Ej. ISO 9001:2015, Política de compras"></textarea>
                        </div>

                        <div class="gp-field">
                            <label for="f11">11. Código y versión que le voy a asignar</label>
                            <input type="text" id="f11" name="f11" placeholder="Ej. P-CO-01, versión 00">
                        </div>

                    </form>
                </div>

            </div>

            <!-- Columna lateral: progreso, siempre visible -->
            <aside class="gp-sp-sidebar">
                <div class="gp-card gp-progress-card">
                    <div class="gp-progress-top">
                        <span class="gp-progress-title">Estado de llenado</span>
                        <span class="gp-progress-count" id="spCount">0/11</span>
                    </div>
                    <div class="gp-progress-track">
                        <div class="gp-progress-fill" id="spProgressFill" style="width:0%"></div>
                    </div>
                    <p class="gp-progress-ready" id="spReadyMsg">Tu Súper Prompt está listo</p>

                    <button type="button" id="spGoToPromptBtn" class="gp-btn gp-btn-primary gp-btn-block">
                        <i class="fa-solid fa-arrow-down"></i>
                        <span>Ver mi prompt</span>
                    </button>

                    <p class="gp-sidebar-hint">No tienes que llenar todo en orden. El prompt se completa solo conforme avanzas.</p>
                </div>
            </aside>

        </div>

        <!-- Prompt en vivo: fuera del layout de 2 columnas, a todo lo ancho -->
        <div class="gp-card gp-sp-card gp-sp-prompt-card" id="spPromptSection">
            <div class="gp-prompt-head">
                <i class="fa-solid fa-terminal"></i>
                <span>Tu prompt, actualizándose en vivo</span>
            </div>
            <div class="gp-prompt-actions">
                <button type="button" id="spCopyBtn" class="gp-btn gp-btn-primary">
                    <i class="fa-solid fa-copy"></i>
                    <span>Copiar Prompt</span>
                </button>
                <button type="button" id="spDownloadBtn" class="gp-btn gp-btn-secondary">
                    <i class="fa-solid fa-download"></i>
                    <span>Descargar .txt</span>
                </button>
                <span id="spCopyMsg" class="gp-copy-msg"></span>
            </div>
            <textarea id="spPromptBox" class="gp-prompt-box" readonly></textarea>
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

/* =====================================================
   GENERADOR DE SÚPER PROMPT
===================================================== */
(() => {

    const form          = document.getElementById('spForm');
    if (!form) return;

    const fieldIds      = ['f1','f2','f3','f4','f5','f6','f7','f8','f9','f10','f11'];
    const countEl       = document.getElementById('spCount');
    const fillEl        = document.getElementById('spProgressFill');
    const readyMsg      = document.getElementById('spReadyMsg');
    const promptBox     = document.getElementById('spPromptBox');
    const promptSection = document.getElementById('spPromptSection');
    const goToPromptBtn = document.getElementById('spGoToPromptBtn');
    const copyBtn       = document.getElementById('spCopyBtn');
    const downloadBtn   = document.getElementById('spDownloadBtn');
    const copyMsg       = document.getElementById('spCopyMsg');
    const copyBtnLabel  = copyBtn.querySelector('span');
    const defaultLabel  = copyBtnLabel.textContent;

    function getValue(id){
        const el = document.getElementById(id);
        const v  = el.value.trim();
        return v.length ? v : '[POR DEFINIR]';
    }

    function buildPrompt(){
        const v = {};
        fieldIds.forEach(id => v[id] = getValue(id));

        return `Actúa como especialista en sistemas de gestión e información documentada. Redacta mi procedimiento respetando EXACTAMENTE la estructura que indico abajo, conforme a ISO 10013:2021 y al apartado 7.5 de ISO 9001:2015.

Qué es y para qué sirve (contextualízalo así):
Un procedimiento es la forma especificada de llevar a cabo una actividad o un proceso. Debe responder seis preguntas: qué se hace, quién lo hace, cuándo, dónde, cómo y con qué. Su prueba de calidad es que una persona ajena al área pueda ejecutar la actividad leyendo solo el documento.

Reglas obligatorias:
1) Un paso equivale a una sola acción. Si un paso necesita la conjunción «y» dos veces, divídelo en dos.
2) Cada paso inicia con el responsable y el verbo en presente: «El supervisor verifica…». Queda prohibido el impersonal «se debe» y el futuro «se deberá».
3) Usa siempre puestos, nunca nombres de personas.
4) Distingue responsabilidad (lo que el puesto debe hacer) de autoridad (lo que puede decidir, autorizar, liberar o detener).
5) Todo paso que genere evidencia debe nombrar su registro; todo registro que menciones debe aparecer también en la sección de registros.
6) Los parámetros llevan valor normal, límite mínimo, límite máximo y la acción a tomar cuando se salen de rango.
7) No inventes datos. Lo que yo no te haya proporcionado, márcalo como [POR DEFINIR: qué dato falta] en lugar de suponerlo.
8) Define toda sigla la primera vez que la uses y regístrala en la tabla de abreviaturas.
9) Redacta en español de México, en tercera persona y tiempo presente, con lenguaje claro y sin errores ortográficos.
10) Entrega en tablas las secciones que lo piden, listas para copiar y pegar en Word. No agregues, elimines ni reordenes secciones.

Llena y devuélveme estas secciones, en este orden:
1) OBJETIVO: una sola oración con la fórmula verbo en infinitivo + qué se establece + para qué fin.
2) ALCANCE: qué proceso cubre, a qué áreas y puestos aplica, dónde inicia, dónde termina y qué queda excluido.
3) DOCUMENTOS DE REFERENCIA: tabla con código, título completo y tipo (interno o externo).
4) DEFINICIONES Y ABREVIATURAS: dos tablas, una de término y definición, otra de sigla y significado.
5) RESPONSABILIDADES Y AUTORIDADES: tabla con puesto, responsabilidad y autoridad.
6) CONDICIONES GENERALES: 6.1 competencia y capacitación requerida; 6.2 seguridad, salud y medio ambiente; 6.3 recursos, en tabla de recurso, especificación y observaciones; 6.4 parámetros de control, en tabla de variable, cómo se mide, dónde se mide, valor normal, límite mínimo y límite máximo.
7) DESARROLLO: 7.1 descripción del flujo en texto, redactada de modo que yo pueda dibujar el diagrama; 7.2 tabla de actividades con número, responsable, descripción y registro o evidencia, con un mínimo de ocho pasos; 7.3 tabla de desviaciones con problema, causa probable, acción inmediata y acción definitiva.
8) REGISTROS: tabla con registro, código, quién lo genera, dónde se resguarda, tiempo de retención y disposición final.
9) ANEXOS: lista de formatos o diagramas con su código.
10) CONTROL DE CAMBIOS: tabla con la fila de la versión 00 como emisión inicial.
11) AUTORIZACIONES: indica qué puesto elabora, cuál revisa y cuál autoriza, sin nombres propios.

Datos de mi proceso (los completo yo):
– Nombre del procedimiento: ${v.f1}
– Área o proceso al que pertenece: ${v.f2}
– Giro o actividad de la empresa: ${v.f3}
– ¿Dónde inicia y dónde termina el proceso?: ${v.f4}
– Puestos que intervienen: ${v.f5}
– Equipo, herramienta, materiales o sistemas que se utilizan: ${v.f6}
– Riesgos o condiciones de seguridad, salud y ambiente relevantes: ${v.f7}
– Parámetros o variables que se controlan (si aplica): ${v.f8}
– Formatos o registros que ya existen en el área: ${v.f9}
– Normas, NOM o documentos internos que debo citar: ${v.f10}
– Código y versión que le voy a asignar: ${v.f11}`;
    }

    function refresh(){
        const completed = fieldIds.filter(id => document.getElementById(id).value.trim().length > 0).length;
        const pct = Math.round((completed / fieldIds.length) * 100);

        countEl.textContent = `${completed}/${fieldIds.length}`;
        fillEl.style.width = pct + '%';
        readyMsg.classList.toggle('visible', completed === fieldIds.length);
        promptBox.value = buildPrompt();
        copyMsg.textContent = '';
    }

    form.addEventListener('input', refresh);
    refresh();

    goToPromptBtn.addEventListener('click', () => {
        promptSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });

    downloadBtn.addEventListener('click', () => {
        const blob = new Blob([promptBox.value], { type: 'text/plain;charset=utf-8' });
        const url  = URL.createObjectURL(blob);
        const a    = document.createElement('a');
        a.href     = url;
        a.download = 'super-prompt-procedimiento.txt';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
    });

    copyBtn.addEventListener('click', () => {
        const missing = fieldIds.filter(id => document.getElementById(id).value.trim().length === 0).length;

        if (missing > 0){
            copyMsg.textContent = 'Todas las preguntas son obligatorias. Te faltan ' + missing + ' por responder.';
            copyMsg.classList.add('gp-copy-msg-error');
            return;
        }

        navigator.clipboard.writeText(promptBox.value).then(() => {
            copyMsg.classList.remove('gp-copy-msg-error');
            copyMsg.textContent = '';
            copyBtnLabel.textContent = '¡Copiado con éxito!';
            setTimeout(() => { copyBtnLabel.textContent = defaultLabel; }, 2200);
        });
    });

})();
</script>

</body>
</html>
