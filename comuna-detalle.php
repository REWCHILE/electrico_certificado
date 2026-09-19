<?php
/**
 * Plantilla Dinámica de Landing Local para Comunas de Santiago
 * Posicionamiento SEO Local Google Chile con Schema y 4.747 Reseñas
 */

require_once __DIR__ . '/config.php';
$comunas = require __DIR__ . '/data/comunas.php';
$faqs = require __DIR__ . '/data/faqs.php';

$slug = $_GET['slug'] ?? '';
$slug = strtolower(trim(preg_replace('/[^a-zA-Z0-9_-]/', '', $slug)));

if (!isset($comunas[$slug])) {
    http_response_code(404);
    $pageTitle = "Comuna No Encontrada | Eléctrico Certificado SEC";
    $pageDescription = "La comuna solicitada no está disponible en este momento. Revisa nuestras zonas de cobertura en Santiago.";
    require_once __DIR__ . '/includes/header.php';
    ?>
    <section class="section-padding" style="text-align: center;">
        <div class="container">
            <h1 class="section-title">Comuna No Encontrada</h1>
            <p class="section-subtitle">No encontramos la página solicitada. Puedes revisar el listado completo de comunas que atendemos.</p>
            <a href="<?= BASE_URL ?>/comunas/" class="btn btn-volt" style="margin-top: 20px;">Ver Todas las Comunas</a>
        </div>
    </section>
    <?php
    require_once __DIR__ . '/includes/footer.php';
    exit;
}

$comuna = $comunas[$slug];

// Metadatos SEO hiper-localizados para la comuna
$pageTitle = $comuna['title'];
$pageDescription = $comuna['meta_desc'];
$canonicalUrl = get_canonical_url("comunas/{$slug}");

// Filtramos FAQs relevantes
$pageFaqs = array_slice($faqs, 0, 5);

require_once __DIR__ . '/includes/header.php';
?>

<!-- HERO LOCAL DE LA COMUNA -->
<section class="hero-voltedge" style="padding: 45px 0 65px;">
    <div class="container">
        <!-- Breadcrumbs -->
        <nav aria-label="Ruta de navegación" style="margin-bottom: 20px;">
            <ol style="display: flex; flex-wrap: wrap; gap: 8px; list-style: none; padding: 0; margin: 0; font-size: 0.82rem; color: #94A3B8;">
                <li><a href="<?= BASE_URL ?>/" style="color: #94A3B8; text-decoration: none;">Inicio</a></li>
                <li>/</li>
                <li><a href="<?= BASE_URL ?>/comunas/" style="color: #94A3B8; text-decoration: none;">Comunas</a></li>
                <li>/</li>
                <li style="color: var(--volt-orange); font-weight: 700;"><?= htmlspecialchars($comuna['name']) ?></li>
            </ol>
        </nav>

        <div class="comuna-hero-grid">
            <!-- Columna Izquierda: Información y CTAs -->
            <div>
                <div class="hero-badge-row">
                    <span class="badge-sec-verified">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                        <?= SEC_CREDENTIAL ?>
                    </span>
                    <span class="badge-urgencias-247">
                        ⚡ Móviles de Guardia en <?= htmlspecialchars($comuna['name']) ?>
                    </span>
                </div>

                <h1 class="hero-heading" style="font-size: clamp(2.1rem, 4.5vw, 3.6rem); margin-bottom: 18px; text-align: left;">
                    Eléctrico Certificado SEC en <span class="text-orange"><?= htmlspecialchars($comuna['name']) ?></span>
                </h1>
                <p class="hero-subheading" style="text-align: left; margin: 0 0 24px;">
                    <?= htmlspecialchars($comuna['description']) ?>
                </p>

                <!-- CTAs Inmediatos -->
                <div class="hero-cta-group" style="justify-content: flex-start; margin-top: 10px;">
                    <a href="tel:<?= PHONE_RAW ?>" class="btn btn-volt btn-lg">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.45.57 3.57a1 1 0 01-.25 1.02l-2.2 2.2z"/></svg>
                        Llamar Urgencia en <?= htmlspecialchars($comuna['name']) ?>
                    </a>
                    <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= urlencode("Hola Domingo, necesito un eléctrico certificado SEC a domicilio en {$comuna['name']}.") ?>" target="_blank" rel="noopener" class="btn btn-whatsapp btn-lg">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.312.045-.694.062-1.11-.073-.255-.083-.585-.205-1.002-.387-1.765-.772-2.91-2.553-2.998-2.671-.088-.119-.714-.95-.714-1.812 0-.862.453-1.285.614-1.46.161-.174.351-.218.468-.218.118 0 .235.001.338.006.107.005.251-.041.393.3.143.344.49 1.196.533 1.283.043.088.072.19.014.305-.058.117-.087.19-.174.292-.088.102-.185.228-.264.306-.088.088-.18.184-.078.36.102.175.454.748.974 1.212.67.596 1.235.782 1.41.87.175.088.278.073.38-.044.103-.117.44-.512.558-.687.117-.175.234-.146.394-.088.161.058 1.025.483 1.201.571.176.088.293.131.337.205.044.073.044.424-.1.829z"/></svg>
                        Cotizar por WhatsApp
                    </a>
                </div>

                <div style="margin-top: 20px; display: inline-flex; align-items: center; gap: 8px; font-size: 0.82rem; color: #94A3B8; background: rgba(255,255,255,0.05); padding: 8px 14px; border-radius: var(--radius-pill); border: 1px solid rgba(255,255,255,0.1);">
                    <span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: #4ADE80; box-shadow: 0 0 6px #4ADE80;"></span>
                    <span>Respuesta promedio: <strong><?= htmlspecialchars($comuna['arrival_time']) ?></strong> • Atención en terreno con boleta/factura</span>
                </div>
            </div>

            <!-- Columna Derecha: Tarjeta Fotográfica de Hito Emblemático & Coordenadas -->
            <div>
                <div class="comuna-showcase-card">
                    <div class="comuna-showcase-media">
                        <img 
                            src="<?= BASE_URL ?>/assets/img/comunas/<?= htmlspecialchars($comuna['landmark_image']) ?>" 
                            alt="<?= htmlspecialchars($comuna['landmark_title']) ?> - Cobertura Eléctrico SEC <?= htmlspecialchars($comuna['name']) ?>" 
                            class="comuna-showcase-img"
                            width="600" 
                            height="340"
                            loading="eager"
                        >
                        <div class="comuna-showcase-vignette"></div>

                        <div class="comuna-showcase-badge-top">
                            <span>📍 <?= htmlspecialchars($comuna['zona']) ?></span>
                        </div>

                        <div class="comuna-showcase-coords">
                            <?= htmlspecialchars($comuna['coords']) ?>
                        </div>

                        <div class="comuna-showcase-caption">
                            <div class="comuna-showcase-landmark"><?= htmlspecialchars($comuna['landmark_title']) ?></div>
                            <div class="comuna-showcase-sub">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                Cobertura residencial, condominios y locales en <?= htmlspecialchars($comuna['name']) ?>
                            </div>
                        </div>
                    </div>

                    <div class="comuna-showcase-info">
                        <div class="comuna-showcase-stat">
                            <span class="comuna-showcase-stat-val"><?= htmlspecialchars($comuna['arrival_time']) ?></span>
                            <span class="comuna-showcase-stat-lbl">Tiempo Respuesta</span>
                        </div>
                        <div class="comuna-showcase-stat">
                            <span class="comuna-showcase-stat-val" style="color: #38BDF8;">Clase A</span>
                            <span class="comuna-showcase-stat-lbl">Licencia SEC</span>
                        </div>
                        <div class="comuna-showcase-stat">
                            <span class="comuna-showcase-stat-val" style="color: var(--volt-orange);">100%</span>
                            <span class="comuna-showcase-stat-lbl">Garantía Escrita</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECCIÓN SERVICIOS FRECUENTES EN ESTA COMUNA -->
<section class="section-padding">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Atención Especializada</span>
            <h2 class="section-title">Trabajos Más Solicitados en <?= htmlspecialchars($comuna['name']) ?></h2>
            <p class="section-subtitle">
                Brindamos soluciones integrales adaptadas a las características residenciales y comerciales del sector.
            </p>
        </div>

        <div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
            <?php foreach ($comuna['common_services'] as $serv): ?>
            <div class="service-card" style="justify-content: flex-start;">
                <div class="service-icon-box" style="margin-bottom: 16px;">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <h3 class="service-card-title" style="font-size: 1.15rem;"><?= htmlspecialchars($serv) ?></h3>
                <p class="service-card-desc">
                    Trabajo ejecutado bajo normativa SEC vigente con materiales certificados y garantía escrita.
                </p>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Sectores y Barrios de la Comuna -->
        <?php if (!empty($comuna['sectors'])): ?>
        <div style="background: #FFFFFF; border: 1px solid var(--volt-light-border); border-radius: var(--radius-lg); padding: 30px; margin-top: 45px;">
            <h3 style="font-family: var(--font-display); font-size: 1.3rem; font-weight: 800; margin-bottom: 14px;">
                Barrios y Sectores con Cobertura Inmediata en <?= htmlspecialchars($comuna['name']) ?>:
            </h3>
            <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                <?php foreach ($comuna['sectors'] as $sector): ?>
                <span style="background: var(--volt-light-bg); border: 1px solid var(--volt-light-border); padding: 6px 14px; border-radius: var(--radius-pill); font-size: 0.88rem; font-weight: 600; color: var(--text-dark);">
                    📍 <?= htmlspecialchars($sector) ?>
                </span>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- BANNER DE URGENCIA -->
<?php require __DIR__ . '/includes/cta-emergency.php'; ?>

<!-- FAQ ACCORDION -->
<section class="section-padding" style="background: var(--volt-light-bg);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Preguntas Frecuentes</span>
            <h2 class="section-title">Dudas Frecuentes sobre Electricistas en <?= htmlspecialchars($comuna['name']) ?></h2>
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

<?php require_once __DIR__ . '/includes/footer.php'; ?>
