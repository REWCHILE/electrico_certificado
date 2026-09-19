<?php
/**
 * Landing Pilar: Tableros Eléctricos y Aumento de Capacidad
 * Keywords: instalacion electrica, aumento de capacidad sec, mantenimiento electrico, enel electricista
 */

require_once __DIR__ . '/../config.php';
$faqs = require __DIR__ . '/../data/faqs.php';

$pageTitle = "⭐⭐⭐⭐⭐ Tableros Eléctricos y Aumento de Capacidad en Santiago | SEC";
$pageDescription = "⭐⭐⭐⭐⭐ 4.747 Reseñas. Normalización de tableros eléctricos según norma SEC RIC y aumento de potencia ante Enel y CGE. Protecciones Schneider y Legrand.";
$canonicalUrl = get_canonical_url('servicios/tableros-y-aumento-capacidad');

$pageFaqs = [
    $faqs[6], // Aumento empalme Enel/CGE
    $faqs[0], // Por qué SEC
    $faqs[1], // TE1
    $faqs[5], // Presupuesto
];

require_once __DIR__ . '/../includes/header.php';
?>

<!-- HERO TABLEROS Y AUMENTO -->
<section class="hero-voltedge" style="padding: 50px 0 70px;">
    <div class="container">
        <div class="profile-showcase-grid">
            <div>
                <div class="hero-badge-row" style="justify-content: flex-start;">
                    <span class="badge-sec-verified">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                        <?= SEC_CREDENTIAL ?>
                    </span>
                    <span class="badge-urgencias-247">
                        ⚡ Nueva Normativa SEC Pliegos RIC & EV
                    </span>
                </div>

                <h1 class="hero-heading" style="font-size: clamp(2.2rem, 4.2vw, 3.8rem); text-align: left;">
                    Tableros Eléctricos & <br><span class="text-orange">Aumento de Capacidad</span>
                </h1>
                <p class="hero-subheading" style="text-align: left; margin: 0 0 25px;">
                    Modernización integral de tableros generales y de distribución. Eliminación de riesgos de incendio por sobrecarga, cargadores de autos eléctricos (Wallbox) y gestión de aumento de potencia ante Enel y CGE.
                </p>

                <div class="hero-cta-group">
                    <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= urlencode('Hola Domingo, quiero cotizar la modernización de mi tablero eléctrico o aumento de capacidad.') ?>" target="_blank" rel="noopener" class="btn btn-volt btn-lg">
                        Cotizar Tablero por WhatsApp
                    </a>
                    <a href="tel:<?= PHONE_RAW ?>" class="btn btn-outline btn-lg" style="color: #FFF; border-color: rgba(255,255,255,0.3);">
                        📞 <?= PHONE_DISPLAY ?>
                    </a>
                </div>
            </div>

            <div>
                <div class="tab-media-card" style="aspect-ratio: 16 / 11;">
                    <img src="<?= BASE_URL ?>/assets/img/tablero-cargador-ev.jpg" alt="Instalación de Tablero Eléctrico y Cargador EV Wallbox" class="tab-media-img" loading="eager" width="700" height="480">
                    <div class="tab-media-overlay">
                        <div class="rating-pill-card">
                            <div>
                                <div class="stars-group">★★★★★</div>
                                <div class="rating-text" style="margin-top: 4px;">
                                    <div class="rating-score">Automáticos Schneider / Legrand</div>
                                    <div>Protección diferencial Clase A y Pliego RIC 15</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BENEFICIOS DE NORMALIZAR EL TABLERO -->
<section class="section-padding" style="background: #FFFFFF;">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Seguridad & Cumplimiento</span>
            <h2 class="section-title">¿Por Qué Cambiar Tu Tablero Eléctrico Antiguo?</h2>
            <p class="section-subtitle">
                Las casas antiguas no estaban diseñadas para el consumo actual (aires acondicionados, secadoras, hornos eléctricos y autos enchufables).
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon-box">🔥</div>
                <h3 class="service-card-title">Prevención de Incendios</h3>
                <p class="service-card-desc">
                    Los automáticos obsoletos no reaccionan a tiempo ante un sobrecalentamiento. Los interruptores termomagnéticos modernos cortan el suministro en milisegundos.
                </p>
            </div>

            <div class="service-card">
                <div class="service-icon-box">⚡</div>
                <h3 class="service-card-title">Protección de Personas</h3>
                <p class="service-card-desc">
                    Instalamos disyuntores diferenciales de alta sensibilidad (30mA) clase A, que salvan vidas humanas ante cualquier descarga eléctrica accidental.
                </p>
            </div>

            <div class="service-card">
                <div class="service-icon-box">🔌</div>
                <h3 class="service-card-title">Aumento de Empalme Enel/CGE</h3>
                <p class="service-card-desc">
                    Para que la distribuidora autorice una subida de amperaje (por ejemplo, de 25A a 40A), el tablero interior debe estar 100% normalizado y con TE1 aprobado.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- BANNER DE URGENCIA -->
<?php require __DIR__ . '/../includes/cta-emergency.php'; ?>

<!-- FAQS TABLEROS -->
<section class="section-padding" style="background: var(--volt-light-bg);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Preguntas Sobre Tableros</span>
            <h2 class="section-title">Dudas Frecuentes sobre Tableros y Empalmes</h2>
        </div>

        <div class="faq-list">
            <?php foreach ($pageFaqs as $index => $faq): ?>
            <div class="faq-item <?= $index === 0 ? 'is-active' : '' ?>">
                <button class="faq-question" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>">
                    <span><?= htmlspecialchars($faq['question']) ?></span>
                    <span class="faq-icon">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
                    </span>
                </button>
                <div class="faq-answer">
                    <p><?= htmlspecialchars($faq['answer']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
