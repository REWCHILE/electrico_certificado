<?php
/**
 * Hub de Comunas - Cobertura Región Metropolitana de Santiago
 * SEO Local para Electricistas Certificados SEC
 */

require_once __DIR__ . '/config.php';
$comunas = require __DIR__ . '/data/comunas.php';
$faqs = require __DIR__ . '/data/faqs.php';

$pageTitle = "⭐⭐⭐⭐⭐ Electricistas en Santiago por Comunas | Cobertura SEC 24 Horas";
$pageDescription = "⭐⭐⭐⭐⭐ 4.747 Reseñas. Cobertura completa de eléctrico certificado SEC en las 32 comunas de Santiago. Respuesta en 20-45 min, certificado TE1 y urgencias.";
$canonicalUrl = get_canonical_url('comunas');

// Agrupamos comunas por zonas para facilitar navegación
$zonas = [];
foreach ($comunas as $slug => $data) {
    $zonas[$data['zona']][$slug] = $data;
}

require_once __DIR__ . '/includes/header.php';
?>

<!-- HEADER DE LA PÁGINA -->
<section style="background: radial-gradient(circle at 50% 20%, #1e2638 0%, #0B0E14 100%); color: #FFF; padding: 60px 0; text-align: center;">
    <div class="container">
        <span class="badge-sec-verified" style="margin-bottom: 14px;">COBERTURA EN TODA LA REGIÓN METROPOLITANA</span>
        <h1 class="hero-heading" style="font-size: clamp(2rem, 4vw, 3.2rem);">
            Electricista Certificado SEC <br><span class="text-orange">en Tu Comuna de Santiago</span>
        </h1>
        <p class="hero-subheading" style="margin: 0 auto 25px;">
            Móviles de asistencia técnica rápida para casas, departamentos y locales comerciales con garantía escrita y cumplimiento norma SEC RIC.
        </p>
    </div>
</section>

<!-- GRID DE COMUNAS POR ZONAS -->
<section class="section-padding">
    <div class="container">
        <?php foreach ($zonas as $nombreZona => $listaComunas): ?>
        <div style="margin-bottom: 50px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px; border-bottom: 2px solid var(--volt-light-border); padding-bottom: 10px;">
                <span style="width: 14px; height: 14px; background: var(--volt-orange); border-radius: 50%;"></span>
                <h2 style="font-family: var(--font-display); font-size: 1.6rem; font-weight: 800; color: var(--volt-dark);"><?= htmlspecialchars($nombreZona) ?></h2>
            </div>

            <div class="comunas-grid">
                <?php foreach ($listaComunas as $slug => $c): ?>
                <a href="<?= BASE_URL ?>/comunas/<?= $slug ?>" class="comuna-card">
                    <div class="comuna-map-thumb">
                        <svg class="comuna-map-svg" viewBox="0 0 240 84" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="hub-grid-<?= $slug ?>" width="16" height="16" patternUnits="userSpaceOnUse">
                                    <path d="M 16 0 L 0 0 0 16" fill="none" stroke="rgba(255,255,255,0.06)" stroke-width="0.75"/>
                                </pattern>
                            </defs>
                            <rect width="100%" height="100%" fill="#0A0F1D"/>
                            <rect width="100%" height="100%" fill="url(#hub-grid-<?= $slug ?>)"/>
                            <path d="M-20,42 Q80,25 140,55 T260,35" fill="none" stroke="rgba(56, 189, 248, 0.28)" stroke-width="2.5"/>
                            <path d="M60,-10 L80,95" fill="none" stroke="rgba(255, 255, 255, 0.12)" stroke-width="1.5"/>
                            <path d="M160,-10 L140,95" fill="none" stroke="rgba(255, 255, 255, 0.12)" stroke-width="1.5"/>
                            <path d="M-10,70 L250,20" fill="none" stroke="rgba(249, 115, 22, 0.25)" stroke-width="1.5" stroke-dasharray="4 3"/>
                        </svg>

                        <div class="comuna-map-beacon" style="left: <?= $c['map_pin_x'] ?? 50 ?>%; top: <?= $c['map_pin_y'] ?? 50 ?>%;">
                            <div class="beacon-pulse"></div>
                            <div class="beacon-core"></div>
                        </div>

                        <div class="comuna-map-overlay">
                            <span class="comuna-coords-chip"><?= htmlspecialchars($c['coords'] ?? 'Santiago SEC') ?></span>
                            <span class="comuna-active-badge">Móvil Activo</span>
                        </div>
                    </div>

                    <div class="comuna-card-body">
                        <div>
                            <h3 class="comuna-name"><?= htmlspecialchars($c['name']) ?></h3>
                            <div class="comuna-zone"><?= htmlspecialchars($c['zona']) ?></div>
                            <p class="comuna-sectors-list">
                                <?= htmlspecialchars($c['sectors'][0] ?? '') ?>, <?= htmlspecialchars($c['sectors'][1] ?? '') ?><?= isset($c['sectors'][2]) ? ', ' . htmlspecialchars($c['sectors'][2]) : '' ?>...
                            </p>
                        </div>
                        <div class="comuna-card-footer">
                            <div class="comuna-time">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                Respuesta: <?= htmlspecialchars($c['arrival_time']) ?>
                            </div>
                            <span class="comuna-arrow">Ver →</span>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- BANNER DE URGENCIA -->
<?php require __DIR__ . '/includes/cta-emergency.php'; ?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
