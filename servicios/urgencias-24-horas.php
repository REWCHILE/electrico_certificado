<?php
/**
 * Landing Pilar: Electricista de Urgencias 24 Horas en Santiago
 * Keywords: electricista 24 horas, electricista de urgencia, electricista emergencia, electricista urgente
 */

require_once __DIR__ . '/../config.php';
$faqs = require __DIR__ . '/../data/faqs.php';

$pageTitle = "⭐⭐⭐⭐⭐ Electricista de Urgencia 24 Horas en Santiago | Asistencia en 20-45 min";
$pageDescription = "⭐⭐⭐⭐⭐ 4.747 Reseñas. Electricista de urgencias 24 horas en todo Santiago. Respuesta en 20 a 45 minutos para cortocircuitos, cortes de luz y caídas de automático. ¡Llama ya!";
$canonicalUrl = get_canonical_url('servicios/urgencias-24-horas');

$pageFaqs = [
    $faqs[3], // Urgencias 24h
    $faqs[0], // Por qué SEC
    $faqs[5], // Cobros
    $faqs[7], // Comunas
];

require_once __DIR__ . '/../includes/header.php';
?>

<!-- HERO URGENCIAS 24/7 -->
<section class="hero-voltedge" style="padding: 50px 0 70px; background: radial-gradient(circle at 70% 30%, #3b1404 0%, #0B0E14 100%);">
    <div class="container">
        <div class="profile-showcase-grid">
            <div>
                <div class="hero-badge-row" style="justify-content: flex-start;">
                    <span class="badge-urgencias-247" style="background: var(--volt-orange); color: #FFF; font-size: 0.9rem;">
                        🚨 DISPONIBILIDAD INMEDIATA 24/7 Y FESTIVOS
                    </span>
                    <span class="badge-sec-verified">
                        <?= SEC_CREDENTIAL ?>
                    </span>
                </div>

                <h1 class="hero-heading" style="font-size: clamp(2.2rem, 4.2vw, 3.8rem); text-align: left;">
                    Electricista de Urgencias 24 Horas <br><span class="text-orange">en Todo Santiago</span>
                </h1>
                <p class="hero-subheading" style="text-align: left; margin: 0 0 25px;">
                    ¿Olor a quemado, chispas en el tablero o se cortó la energía de golpe? Móviles de asistencia técnica rápida con tiempo estimado de respuesta de <strong>20 a 45 minutos</strong>.
                </p>

                <div class="hero-cta-group">
                    <a href="tel:<?= PHONE_RAW ?>" class="btn btn-volt btn-lg" style="font-size: 1.15rem; padding: 16px 28px; box-shadow: 0 0 30px rgba(251,88,0,0.5);">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.45.57 3.57a1 1 0 01-.25 1.02l-2.2 2.2z"/></svg>
                        Llamar Urgencia al <?= PHONE_DISPLAY ?>
                    </a>
                    <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= WHATSAPP_URGENCIA_MSG ?>" target="_blank" rel="noopener" class="btn btn-whatsapp btn-lg">
                        Pedir Móvil por WhatsApp 24/7
                    </a>
                </div>
            </div>

            <div>
                <div class="tab-media-card" style="aspect-ratio: 16 / 11;">
                    <img src="<?= BASE_URL ?>/assets/img/urgencias-electricas.jpg" alt="Móvil de Asistencia Urgencias Eléctricas 24 Horas Santiago" class="tab-media-img" loading="eager" width="700" height="480">
                    <div class="tab-media-overlay">
                        <div class="rating-pill-card">
                            <div>
                                <div class="stars-group">★★★★★</div>
                                <div class="rating-text" style="margin-top: 4px;">
                                    <div class="rating-score">Móviles Equipados 24/7</div>
                                    <div>Respuesta estimada en Santiago: <span class="rating-count">20 a 45 min</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROTOCOLO DE ATENCIÓN EN CASO DE EMERGENCIA -->
<section class="section-padding" style="background: #FFFFFF;">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Seguridad Inmediata</span>
            <h2 class="section-title">¿Qué Hacer Mientras Esperas la Asistencia Técnica?</h2>
            <p class="section-subtitle">
                Tu seguridad y la de tu familia es lo primero. Sigue estas recomendaciones básicas:
            </p>
        </div>

        <div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));">
            <div class="service-card" style="border-top: 4px solid var(--volt-orange);">
                <h3 class="service-card-title">1. Baja el Automático General</h3>
                <p class="service-card-desc">
                    Si observas chispas, humo o zumbidos extraños en el tablero, baja la palanca del disyuntor general inmediatamente para desenergizar la vivienda.
                </p>
            </div>

            <div class="service-card" style="border-top: 4px solid var(--volt-orange);">
                <h3 class="service-card-title">2. No Toques Enchufes Calientes</h3>
                <p class="service-card-desc">
                    Nunca toques artefactos con las manos húmedas o descalzo si notas cosquilleo o vibración al contacto con el refrigerador o lavadora.
                </p>
            </div>

            <div class="service-card" style="border-top: 4px solid var(--volt-orange);">
                <h3 class="service-card-title">3. Desconecta Artefactos Críticos</h3>
                <p class="service-card-desc">
                    Desenchufa computadores, televisores y equipos electrónicos delicados para protegerlos de posibles sobretensiones de retorno.
                </p>
            </div>

            <div class="service-card" style="border-top: 4px solid var(--volt-orange);">
                <h3 class="service-card-title">4. Espera al Técnico SEC</h3>
                <p class="service-card-desc">
                    No intentes puentear térmicos ni manipular cables con cinta aisladora común. Domingo llegará en 20-45 minutos con instrumentos normados.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- BANNER DE URGENCIA -->
<?php require __DIR__ . '/../includes/cta-emergency.php'; ?>

<!-- FAQS URGENCIAS -->
<section class="section-padding" style="background: var(--volt-light-bg);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Dudas Urgentes</span>
            <h2 class="section-title">Preguntas Frecuentes sobre el Servicio 24 Horas</h2>
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
