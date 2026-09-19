<?php
/**
 * Landing Pilar: Electricista a Domicilio en Santiago
 * Keywords: electricista a domicilio, electricistas cerca de mi, tecnico electricista a domicilio
 */

require_once __DIR__ . '/../config.php';
$faqs = require __DIR__ . '/../data/faqs.php';

$pageTitle = "⭐⭐⭐⭐⭐ Electricista a Domicilio en Santiago | Técnico Autorizado SEC";
$pageDescription = "⭐⭐⭐⭐⭐ 4.747 Reseñas. Electricista a domicilio en Santiago certificado SEC. Reparación de cortocircuitos, enchufes, automáticos y tableros. ¡Respuesta rápida hoy!";
$canonicalUrl = get_canonical_url('servicios/electricista-a-domicilio');

$pageFaqs = [
    $faqs[0], // Por qué contratar SEC
    $faqs[3], // Urgencias 24h
    $faqs[5], // Precios y visitas
    $faqs[7], // Comunas de atención
];

require_once __DIR__ . '/../includes/header.php';
?>

<!-- HERO ELECTRICISTA A DOMICILIO -->
<section class="hero-voltedge" style="padding: 50px 0 70px;">
    <div class="container">
        <div class="profile-showcase-grid">
            <div>
                <div class="hero-badge-row" style="justify-content: flex-start;">
                    <span class="badge-sec-verified">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                        <?= SEC_CREDENTIAL ?> • Cobertura Inmediata
                    </span>
                    <span class="badge-urgencias-247">
                        ⚡ Respuesta en 20-45 min a tu casa
                    </span>
                </div>

                <h1 class="hero-heading" style="font-size: clamp(2.2rem, 4.2vw, 3.8rem); text-align: left;">
                    Electricista a Domicilio <br><span class="text-orange">en Santiago de Chile</span>
                </h1>
                <p class="hero-subheading" style="text-align: left; margin: 0 0 25px;">
                    Técnico electricista certificado por la SEC para casas, departamentos y condominios. Solución certera a cortes de luz, caídas de diferencial y recableados con garantía por escrito.
                </p>

                <div class="hero-cta-group">
                    <a href="tel:<?= PHONE_RAW ?>" class="btn btn-volt btn-lg">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.45.57 3.57a1 1 0 01-.25 1.02l-2.2 2.2z"/></svg>
                        Llamar a Domingo: <?= PHONE_DISPLAY ?>
                    </a>
                    <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= urlencode('Hola Domingo, necesito un electricista a domicilio en Santiago.') ?>" target="_blank" rel="noopener" class="btn btn-whatsapp btn-lg">
                        Agendar Visita por WhatsApp
                    </a>
                </div>
            </div>

            <div>
                <div class="tab-media-card" style="aspect-ratio: 16 / 11;">
                    <img src="<?= BASE_URL ?>/assets/img/electricista-domicilio.jpg" alt="Electricista a Domicilio Instalando Iluminación y Protecciones" class="tab-media-img" loading="eager" width="700" height="480">
                    <div class="tab-media-overlay">
                        <div class="rating-pill-card">
                            <div>
                                <div class="stars-group">★★★★★</div>
                                <div class="rating-text" style="margin-top: 4px;">
                                    <div class="rating-score">Servicio Domiciliario 5 Estrellas</div>
                                    <div>Puntualidad, orden y materiales normados SEC</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PRINCIPALES REPARACIONES A DOMICILIO -->
<section class="section-padding" style="background: #FFFFFF;">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Reparaciones en Tu Hogar</span>
            <h2 class="section-title">¿Qué Problemas Resolvemos en Tu Domicilio?</h2>
            <p class="section-subtitle">
                Atención rápida y profesional con herramientas de diagnóstico avanzadas y repuestos originales de marcas líderes.
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card" style="justify-content: flex-start;">
                <div class="service-icon-box">⚡</div>
                <h3 class="service-card-title">Cortes de Luz y Cortocircuitos</h3>
                <p class="service-card-desc">
                    Identificación exacta del punto de falla con pinza amperimétrica y cámara termográfica. Reparación segura sin dañar tus paredes.
                </p>
            </div>

            <div class="service-card" style="justify-content: flex-start;">
                <div class="service-icon-box">🛡️</div>
                <h3 class="service-card-title">Salto del Diferencial</h3>
                <p class="service-card-desc">
                    ¿Se te baja el botón del diferencial y te quedas a oscuras? Detectamos fugas de aislamiento en artefactos o líneas húmedas subterráneas.
                </p>
            </div>

            <div class="service-card" style="justify-content: flex-start;">
                <div class="service-icon-box">🔌</div>
                <h3 class="service-card-title">Cambio de Enchufes e Interruptores</h3>
                <p class="service-card-desc">
                    Sustitución de enchufes quemados o sueltos por placas modulares de alta durabilidad (Schneider, Bticino, Legrand).
                </p>
            </div>

            <div class="service-card" style="justify-content: flex-start;">
                <div class="service-icon-box">💡</div>
                <h3 class="service-card-title">Iluminación LED y Focos</h3>
                <p class="service-card-desc">
                    Instalación de paneles LED embutidos, rieles magnéticos, iluminación decorativa exterior y sensores de movimiento.
                </p>
            </div>

            <div class="service-card" style="justify-content: flex-start;">
                <div class="service-icon-box">❄️</div>
                <h3 class="service-card-title">Circuitos Dedicados</h3>
                <p class="service-card-desc">
                    Tendido de líneas independientes con su propio disyuntor automático para aire acondicionado, hornos eléctricos y termotanques.
                </p>
            </div>

            <div class="service-card" style="justify-content: flex-start;">
                <div class="service-icon-box">🔄</div>
                <h3 class="service-card-title">Recableado Completo</h3>
                <p class="service-card-desc">
                    Reemplazo de cables antiguos de tela o alambres rígidos por conductores EVA libres de halógeno según norma SEC RIC.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- BANNER DE URGENCIA -->
<?php require __DIR__ . '/../includes/cta-emergency.php'; ?>

<!-- FAQS ELECTRICISTA A DOMICILIO -->
<section class="section-padding" style="background: var(--volt-light-bg);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Preguntas Frecuentes</span>
            <h2 class="section-title">Dudas sobre el Servicio a Domicilio</h2>
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
