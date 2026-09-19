<?php
/**
 * Índice de Servicios Eléctricos SEC
 */

require_once __DIR__ . '/../config.php';
$faqs = require __DIR__ . '/../data/faqs.php';

$pageTitle = "⭐⭐⭐⭐⭐ Servicios de Electricista Autorizado SEC en Santiago | Domingo";
$pageDescription = "⭐⭐⭐⭐⭐ 4.747 Reseñas. Catálogo completo de servicios eléctricos certificados SEC: Certificado TE1, urgencias 24h, tableros y reparaciones a domicilio.";
$canonicalUrl = get_canonical_url('servicios');
$pageFaqs = array_slice($faqs, 0, 5);

require_once __DIR__ . '/../includes/header.php';
?>

<!-- HEADER SERVICIOS -->
<section style="background: radial-gradient(circle at 50% 20%, #1e2638 0%, #0B0E14 100%); color: #FFF; padding: 60px 0; text-align: center;">
    <div class="container">
        <span class="badge-sec-verified" style="margin-bottom: 14px;"><?= SEC_CREDENTIAL ?> (<?= SEC_LICENSE_NUMBER ?>)</span>
        <h1 class="hero-heading" style="font-size: clamp(2rem, 4vw, 3.2rem);">
            Servicios Eléctricos Certificados SEC <br><span class="text-orange">en Todo Santiago</span>
        </h1>
        <p class="hero-subheading" style="margin: 0 auto 25px;">
            Atención profesional garantizada bajo los nuevos Pliegos Técnicos Normativos RIC de la SEC para hogares, condominios e industrias.
        </p>
    </div>
</section>

<!-- GRID DE SERVICIOS COMPLETOS -->
<section class="section-padding">
    <div class="container">
        <div class="services-grid">
            <!-- Servicio 1: TE1 -->
            <article class="service-card">
                <div>
                    <div class="service-icon-box">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                    </div>
                    <h2 class="service-card-title">Certificado TE1 SEC y Regularizaciones</h2>
                    <p class="service-card-desc">
                        Elaboración de planos CAD, memoria de cálculo, medición de malla a tierra y firma digital para nuevos empalmes con Enel/CGE y recepciones municipales.
                    </p>
                </div>
                <a href="<?= BASE_URL ?>/servicios/certificacion-te1-sec" class="service-link">
                    Ver Detalles TE1 SEC →
                </a>
            </article>

            <!-- Servicio 2: Electricista a Domicilio -->
            <article class="service-card">
                <div>
                    <div class="service-icon-box">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    </div>
                    <h2 class="service-card-title">Electricista a Domicilio</h2>
                    <p class="service-card-desc">
                        Reparaciones domésticas rápidas: cambio de automáticos y diferenciales, enchufes recalentados, fugas a tierra e iluminación LED de diseño.
                    </p>
                </div>
                <a href="<?= BASE_URL ?>/servicios/electricista-a-domicilio" class="service-link">
                    Ver Reparaciones a Domicilio →
                </a>
            </article>

            <!-- Servicio 3: Urgencias 24h -->
            <article class="service-card">
                <div>
                    <div class="service-icon-box">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                    </div>
                    <h2 class="service-card-title">Urgencias Eléctricas 24 Horas</h2>
                    <p class="service-card-desc">
                        Asistencia rápida en 20 a 45 minutos para cortocircuitos graves, corte total de suministro y fallas nocturnas o en días feriados.
                    </p>
                </div>
                <a href="<?= BASE_URL ?>/servicios/urgencias-24-horas" class="service-link">
                    Ver Servicio de Urgencia 24h →
                </a>
            </article>

            <!-- Servicio 4: Tableros y Empalmes -->
            <article class="service-card">
                <div>
                    <div class="service-icon-box">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg>
                    </div>
                    <h2 class="service-card-title">Tableros y Aumento de Capacidad</h2>
                    <p class="service-card-desc">
                        Reemplazo de tableros obsoletos con protecciones Schneider y Legrand. Trámite de aumento de potencia ante Enel y CGE para aires acondicionados y cocinas.
                    </p>
                </div>
                <a href="<?= BASE_URL ?>/servicios/tableros-y-aumento-capacidad" class="service-link">
                    Ver Tableros y Empalmes →
                </a>
            </article>
        </div>
    </div>
</section>

<!-- BANNER DE URGENCIA -->
<?php require __DIR__ . '/../includes/cta-emergency.php'; ?>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
