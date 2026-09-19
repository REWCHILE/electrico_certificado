<?php
/**
 * Página: Preguntas Frecuentes con Schema FAQPage para Google Rich Snippets
 */

require_once __DIR__ . '/config.php';
$faqs = require __DIR__ . '/data/faqs.php';

$pageTitle = "⭐⭐⭐⭐⭐ Preguntas Frecuentes | Eléctrico Certificado SEC en Santiago";
$pageDescription = "⭐⭐⭐⭐⭐ 4.747 Reseñas. Respuestas a preguntas comunes sobre Certificado TE1, precios de electricista a domicilio, urgencias 24h y trámites Enel/CGE.";
$canonicalUrl = get_canonical_url('faq');
$pageFaqs = $faqs; // Pasa todas las FAQs para generar el schema completo en header.php

require_once __DIR__ . '/includes/header.php';
?>

<!-- HERO FAQS -->
<section class="hero-voltedge" style="padding: 50px 0 60px; text-align: center;">
    <div class="container">
        <span class="badge-sec-verified" style="margin-bottom: 14px;">RESOLUCIÓN DE DUDAS TÉCNICAS Y LEGALES</span>
        <h1 class="hero-heading" style="font-size: clamp(2rem, 4vw, 3.4rem);">
            Preguntas Frecuentes <br><span class="text-orange">sobre Electricidad SEC</span>
        </h1>
        <p class="hero-subheading" style="margin: 0 auto 20px;">
            Aclara tus dudas sobre normativas chilenas, tramitación de certificados TE1, costos de visita y tiempos de atención de emergencias.
        </p>
    </div>
</section>

<!-- LISTADO DE FAQS COMPLETO -->
<section class="section-padding" style="background: var(--volt-light-bg);">
    <div class="container">
        <div class="faq-list">
            <?php foreach ($faqs as $index => $faq): ?>
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

        <div style="text-align: center; margin-top: 50px;">
            <p style="font-size: 1.1rem; font-weight: 600; margin-bottom: 15px;">¿Tienes otra consulta o caso especial?</p>
            <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= urlencode('Hola Domingo, tengo una consulta sobre mi instalación eléctrica.') ?>" target="_blank" rel="noopener" class="btn btn-whatsapp btn-lg">
                Hablar Directo con Domingo por WhatsApp
            </a>
        </div>
    </div>
</section>

<!-- BANNER DE URGENCIA -->
<?php require __DIR__ . '/includes/cta-emergency.php'; ?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
