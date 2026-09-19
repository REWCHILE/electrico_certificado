<?php
/**
 * Landing Pilar: Certificación TE1 SEC Oficial
 * Keywords: certificado te1, te1 sec, certificación sec electricidad, certificado de instalador electrico
 */

require_once __DIR__ . '/../config.php';
$faqs = require __DIR__ . '/../data/faqs.php';

$pageTitle = "⭐⭐⭐⭐⭐ Certificado TE1 SEC Oficial en Santiago | Trámite Rápido Aprobado";
$pageDescription = "⭐⭐⭐⭐⭐ 4.747 Reseñas. Obtén tu Certificado TE1 SEC sin rechazos. Planos CAD, memoria explicativa y firma de instalador autorizado SEC para Enel, CGE y municipalidades.";
$canonicalUrl = get_canonical_url('servicios/certificacion-te1-sec');

$pageFaqs = [
    $faqs[1], // Qué es TE1
    $faqs[2], // Cuánto demora
    $faqs[4], // Comprobar carnet SEC
    $faqs[6], // Trámite Enel / CGE
];

require_once __DIR__ . '/../includes/header.php';
?>

<!-- HERO TE1 SEC -->
<section class="hero-voltedge" style="padding: 50px 0 70px;">
    <div class="container">
        <div class="profile-showcase-grid">
            <div>
                <div class="hero-badge-row" style="justify-content: flex-start;">
<!-- HERO ESPECÍFICO TE1 -->
<section class="hero-voltedge" style="padding: 60px 0 80px;">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr; gap: 40px; align-items: center;" class="hero-service-layout">
            <div>
                <span class="badge-sec-verified" style="margin-bottom: 16px;">
                    <?= SEC_CREDENTIAL ?> (<?= SEC_LICENSE_NUMBER ?>)
                </span>
                <h1 class="hero-heading" style="text-align: left; font-size: clamp(2.2rem, 4.5vw, 3.6rem);">
                    Tramitación & Aprobación Oficial de <span class="text-orange">Certificado TE1 SEC</span>
                </h1>
                <p class="hero-subheading" style="text-align: left; margin: 0 0 30px;">
                    Gestionamos tu declaración eléctrica interior ante la Superintendencia de Electricidad y Combustibles de Chile. Planos en AutoCAD, memoria de cálculo, firma autorizada y seguimiento continuo hasta la entrega del folio con código QR.
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 14px;">
                    <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= urlencode('Hola Domingo, necesito tramitar o consultar por un Certificado TE1 SEC.') ?>" target="_blank" rel="noopener" class="btn btn-volt btn-lg">
                        ⚡ Cotizar TE1 por WhatsApp
                    </a>
                    <a href="<?= SEC_VERIFICATION_URL ?>" target="_blank" rel="noopener noreferrer" referrerpolicy="no-referrer" class="btn btn-sec-verify btn-lg">
                        Verificar Licencia SEC ↗
                    </a>
                    <a href="tel:<?= PHONE_RAW ?>" class="btn btn-outline btn-lg" style="color: #FFF; border-color: rgba(255,255,255,0.3);">
                        📞 <?= PHONE_DISPLAY ?>
                    </a>
                </div>
            </div>

            <div>
                <div class="tab-media-card" style="aspect-ratio: 16 / 11;">
                    <img src="<?= BASE_URL ?>/assets/img/te1-blueprint.jpg" alt="Planos de Certificación TE1 SEC y Memoria Técnica" class="tab-media-img" loading="eager" width="700" height="480">
                    <div class="tab-media-overlay">
                        <div class="rating-pill-card">
                            <div>
                                <div class="stars-group">★★★★★</div>
                                <div class="rating-text" style="margin-top: 4px;">
                                    <div class="rating-score">Expediente 100% Legal</div>
                                    <div>Planos CAD + Memoria + Firma Autorizada SEC</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ¿CUÁNDO ES OBLIGATORIO EL CERTIFICADO TE1? -->
<section class="section-padding" style="background: #FFFFFF;">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Requisitos Legales SEC</span>
            <h2 class="section-title">¿Cuándo Necesitas un Certificado TE1 en Chile?</h2>
            <p class="section-subtitle">
                El Certificado TE1 es el documento legal que acredita ante las autoridades que una instalación eléctrica es segura para la vida humana y bienes materiales.
            </p>
        </div>

        <div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));">
            <div class="service-card" style="justify-content: flex-start;">
                <div class="service-icon-box">🏢</div>
                <h3 class="service-card-title">Recepción Final Municipal</h3>
                <p class="service-card-desc">
                    Imprescindible para que la Dirección de Obras Municipales (DOM) otorgue la recepción definitiva de una vivienda nueva, edificio o ampliación.
                </p>
            </div>

            <div class="service-card" style="justify-content: flex-start;">
                <div class="service-icon-box">⚡</div>
                <h3 class="service-card-title">Nuevo Empalme Enel / CGE</h3>
                <p class="service-card-desc">
                    Las compañías distribuidoras no pueden conectar un medidor de luz nuevo sin la copia timbrada con código QR del folio TE1 emitido por la SEC.
                </p>
            </div>

            <div class="service-card" style="justify-content: flex-start;">
                <div class="service-icon-box">🏬</div>
                <h3 class="service-card-title">Patente Comercial</h3>
                <p class="service-card-desc">
                    Requisito obligatorio para locales comerciales, oficinas, restaurantes y talleres que deseen iniciar actividades o renovar su patente municipal.
                </p>
            </div>

            <div class="service-card" style="justify-content: flex-start;">
                <div class="service-icon-box">📈</div>
                <h3 class="service-card-title">Aumento de Capacidad</h3>
                <p class="service-card-desc">
                    Si requieres subir la potencia contratada de tu empalme (por ejemplo, de 25A a 40A o cambio a trifásico), la SEC exige un nuevo TE1.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- QUÉ INCLUYE EL SERVICIO DE DOMINGO -->
<section class="section-padding" style="background: var(--volt-light-bg);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Servicio Llave en Mano</span>
            <h2 class="section-title">¿Qué Incluye la Tramitación del TE1 con Domingo?</h2>
            <p class="section-subtitle">
                Nos encargamos del 100% de la gestión técnica y documental para que no pierdas tiempo en trámites burocráticos.
            </p>
        </div>

        <div class="process-grid">
            <div class="process-step">
                <div class="step-badge">1</div>
                <h3 class="step-title">Inspección In-Situ</h3>
                <p class="step-desc">
                    Revisión física de calibres de cables, tableros, rotulados y medición de resistividad de puesta a tierra con telurómetro calibrado.
                </p>
            </div>

            <div class="process-step">
                <div class="step-badge">2</div>
                <h3 class="step-title">Levantamiento & CAD</h3>
                <p class="step-desc">
                    Dibujo de planos unilineales y arquitectónicos en AutoCAD bajo simbología oficial de la SEC y formato reglamentario.
                </p>
            </div>

            <div class="process-step">
                <div class="step-badge">3</div>
                <h3 class="step-title">Memoria de Cálculo</h3>
                <p class="step-desc">
                    Cálculo de caídas de tensión, factores de demanda, potencias instaladas y especificación técnica de protecciones termomagnéticas y diferenciales.
                </p>
            </div>

            <div class="process-step">
                <div class="step-badge">4</div>
                <h3 class="step-title">Firma & Folio SEC</h3>
                <p class="step-desc">
                    Firma digital autorizada de instalador acreditado SEC, ingreso al portal oficial eRNII y entrega del certificado definitivo con folio y código QR.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ACREDITACIÓN OFICIAL SEC EN VIVO -->
<section class="section-padding" style="background: #FFFFFF; padding-top: 20px;">
    <div class="container">
        <div class="section-header" style="margin-bottom: 24px;">
            <span class="section-badge">Transparencia & Respaldo</span>
            <h2 class="section-title">Comprueba la Habilitación Oficial de Domingo en la SEC</h2>
            <p class="section-subtitle">
                Antes de tramitar un Certificado TE1, comprueba que tu instalador cuente con licencia activa en el Registro Nacional de la SEC para evitar rechazos o demoras.
            </p>
        </div>
        <?php require __DIR__ . '/../includes/sec-verification-card.php'; ?>
    </div>
</section>

<!-- BANNER DE URGENCIA -->
<?php require __DIR__ . '/../includes/cta-emergency.php'; ?>

<!-- FAQS SOBRE TE1 -->
<section class="section-padding" style="background: #FFFFFF;">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Preguntas Sobre TE1</span>
            <h2 class="section-title">Preguntas Frecuentes sobre el Certificado TE1 SEC</h2>
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
