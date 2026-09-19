<?php
/**
 * Página de Inicio - Eléctrico Certificado SEC
 * Estilo VoltEdge | SEO Optimizado para Google Chile
 */

require_once __DIR__ . '/config.php';
$comunas = require __DIR__ . '/data/comunas.php';
$faqs = require __DIR__ . '/data/faqs.php';

// Metadatos SEO específicos con 4.747 Reseñas en el Title y Description
$pageTitle = "⭐⭐⭐⭐⭐ Eléctrico Certificado SEC en Santiago | Domingo Instalador Autorizado";
$pageDescription = "⭐⭐⭐⭐⭐ 4.747 Reseñas verificadas (5.0). Eléctrico Certificado SEC a domicilio en Santiago. Certificado TE1, urgencias 24 horas y tableros. ¡Cotiza hoy!";
$canonicalUrl = get_canonical_url();
$pageFaqs = array_slice($faqs, 0, 6); // Primeras 6 preguntas para la Home

require_once __DIR__ . '/includes/header.php';
?>

<!-- HERO SECTION (ESTILO VOLTEDGE) -->
<section class="hero-voltedge">
    <div class="container">
        <!-- Badges Superiores -->
        <div class="hero-badge-row">
            <span class="badge-sec-verified">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                <?= SEC_CREDENTIAL ?> (<?= SEC_LICENSE_NUMBER ?>)
            </span>
            <span class="badge-urgencias-247">
                ⚡ Respuesta en 20-45 min a cualquier comuna
            </span>
        </div>

        <!-- Títulos de Alto Impacto -->
        <h1 class="hero-heading">
            Eléctrico Certificado SEC <br>
            <span class="text-orange">a Domicilio</span> en Santiago
        </h1>
        <p class="hero-subheading">
            Instalador profesional autorizado para tramitación inmediata de <strong>Certificado TE1</strong>, atención de urgencias 24 horas y normalización de tableros bajo la nueva norma SEC RIC.
        </p>

        <!-- Pestañas Interactivas del Hero (VoltEdge) -->
        <?php require __DIR__ . '/includes/hero-tabs.php'; ?>
    </div>
</section>

<!-- BARRA DE ESTADÍSTICAS Y MÉTRICAS CLAVE -->
<section class="stats-bar">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <div>
                    <div class="stat-number">4.747+</div>
                    <div class="stat-label">Reseñas 5 Estrellas Google</div>
                </div>
            </div>

            <div class="stat-item">
                <div class="stat-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <div>
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Aprobación Certificados TE1</div>
                </div>
            </div>

            <div class="stat-item">
                <div class="stat-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <div>
                    <div class="stat-number">20-45m</div>
                    <div class="stat-label">Tiempo Respuesta Urgencias</div>
                </div>
            </div>

            <div class="stat-item">
                <div class="stat-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                </div>
                <div>
                    <div class="stat-number">15+</div>
                    <div class="stat-label">Años de Trayectoria SEC</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECCIÓN DE FORMULARIO DE COTIZACIÓN RÁPIDA -->
<section style="padding: 40px 0 20px;">
    <div class="container">
        <?php 
        $formTitle = "Envía Tu Requerimiento Directo al WhatsApp de Domingo";
        $formSubtitle = "Describe tu problema o proyecto. Domingo te responderá a la brevedad con diagnóstico inicial o cotización.";
        require __DIR__ . '/includes/quote-form.php'; 
        ?>
    </div>
</section>

<!-- SECCIÓN DE SERVICIOS PRINCIPALES (VOLTEDGE SIGNATURE GRID) -->
<?php require __DIR__ . '/includes/services-grid-voltedge.php'; ?>

<!-- SECCIÓN INSTALADOR DESTACADO (E-E-A-T & AUTORIDAD SEC) -->
<section class="section-padding profile-showcase">
    <div class="container">
        <div class="profile-showcase-grid">
            <div class="profile-img-wrap">
                <img src="<?= BASE_URL ?>/assets/img/hero-electrician.jpg" alt="Domingo Isain Plaza Caamaño Instalador Eléctrico Autorizado SEC" loading="lazy" width="800" height="500">
                <div class="profile-badge-float">
                    <img src="<?= LOGO_URL ?>" alt="Sello Oficial SEC Instalgas Chile" width="48" height="48">
                    <div>
                        <strong style="display: block; font-size: 0.95rem;"><?= ELECTRICIAN_NAME ?></strong>
                        <span style="font-size: 0.8rem; color: var(--text-muted-dark);"><?= SEC_CREDENTIAL ?> • <?= SEC_LICENSE_NUMBER ?></span>
                    </div>
                </div>
            </div>

            <div>
                <span class="section-badge">Trayectoria & Respaldo Legal</span>
                <h2 class="section-title" style="text-align: left; margin-bottom: 20px;">
                    Instalador Eléctrico Autorizado SEC
                </h2>
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-dark); margin-bottom: 18px;">
                    En Chile, la seguridad de tu hogar, edificio o empresa no se puede dejar en manos inexpertas. Con acreditación oficial otorgada por la <strong>Superintendencia de Electricidad y Combustibles (SEC)</strong> y formación técnica en el IP Santo Tomás, cuento con las facultades legales y técnicas para diseñar, normalizar y certificar instalaciones bajo el nuevo reglamento SEC RIC.
                </p>
                <p style="font-size: 1.02rem; line-height: 1.7; color: var(--text-dark); margin-bottom: 24px;">
                    Más de <strong>4.747 clientes atendidos</strong> en Santiago avalan un trabajo limpio, ordenado y respaldado con boleta, factura y garantía técnica por escrito. Además, contamos con alianzas técnicas e <strong>ingenieros Clase A</strong> para proyectos de envergadura industrial sin límite de potencia.
                </p>

                <div style="display: flex; flex-wrap: wrap; gap: 14px;">
                    <a href="<?= BASE_URL ?>/nosotros" class="btn btn-volt">Conocer Más Sobre Domingo →</a>
                    <a href="<?= SEC_VERIFICATION_URL ?>" target="_blank" rel="noopener noreferrer" referrerpolicy="no-referrer" class="btn btn-sec-verify">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
                        Verificar Licencia en SEC.cl ↗
                    </a>
                    <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= urlencode('Hola Domingo, quiero consultar por un servicio eléctrico.') ?>" target="_blank" rel="noopener" class="btn btn-whatsapp">Contactar por WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECCIÓN DE COBERTURA POR COMUNAS DE SANTIAGO -->
<section class="section-padding comunas-section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Cobertura Región Metropolitana</span>
            <h2 class="section-title">Electricista Certificado en Tu Comuna</h2>
            <p class="section-subtitle">
                Atención rápida con vehículos equipados con herramientas de diagnóstico y repuestos en las principales comunas del Gran Santiago.
            </p>
        </div>

        <div class="comunas-grid">
            <?php foreach ($comunas as $slug => $c): ?>
            <a href="<?= BASE_URL ?>/comunas/<?= $slug ?>" class="comuna-card" title="Electricista en <?= htmlspecialchars($c['name']) ?>">
                <div class="comuna-map-thumb">
                    <svg class="comuna-map-svg" viewBox="0 0 240 84" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <pattern id="home-grid-<?= $slug ?>" width="16" height="16" patternUnits="userSpaceOnUse">
                                <path d="M 16 0 L 0 0 0 16" fill="none" stroke="rgba(255,255,255,0.06)" stroke-width="0.75"/>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="#0A0F1D"/>
                        <rect width="100%" height="100%" fill="url(#home-grid-<?= $slug ?>)"/>
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
                            <?= htmlspecialchars($c['sectors'][0] ?? '') ?>, <?= htmlspecialchars($c['sectors'][1] ?? '') ?>...
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

        <div style="text-align: center; margin-top: 35px;">
            <a href="<?= BASE_URL ?>/comunas/" class="btn btn-outline">Ver Todas las Comunas de Cobertura →</a>
        </div>
    </div>
</section>

<!-- SECCIÓN PROCESO DE TRAMITACIÓN TE1 SEC -->
<section class="section-padding" style="background: var(--volt-light-bg);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Proceso Garantizado</span>
            <h2 class="section-title">¿Cómo Obtenemos Tu Certificado TE1 SEC?</h2>
            <p class="section-subtitle">
                Trámite 100% legal, expedito y sin complicaciones administrativas. Domingo se encarga de todo el expediente de principio a fin.
            </p>
        </div>

        <div class="process-grid">
            <div class="process-step">
                <div class="step-badge">1</div>
                <h3 class="step-title">Inspección Técnica</h3>
                <p class="step-desc">
                    Revisión exhaustiva en terreno de tableros, calibres de conductores, protecciones diferenciales y medición de puesta a tierra.
                </p>
            </div>

            <div class="process-step">
                <div class="step-badge">2</div>
                <h3 class="step-title">Planos en AutoCAD</h3>
                <p class="step-desc">
                    Dibujo de planos unilineales y arquitectónicos cumpliendo estrictamente los formatos normativos exigidos por la SEC.
                </p>
            </div>

            <div class="process-step">
                <div class="step-badge">3</div>
                <h3 class="step-title">Ingreso Plataforma SEC</h3>
                <p class="step-desc">
                    Firma digital autorizada SEC de instalador acreditado y carga del expediente en el sistema e-declarador de la SEC.
                </p>
            </div>

            <div class="process-step">
                <div class="step-badge">4</div>
                <h3 class="step-title">Certificado Aprobado</h3>
                <p class="step-desc">
                    Entrega del documento oficial con código QR y folio SEC válido para trámites municipales y distribuidoras (Enel/CGE).
                </p>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIOS Y RESEÑAS GOOGLE (4.747 REVIEWS) -->
<section class="section-padding" style="background: #FFFFFF;">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Opiniones de Clientes</span>
            <h2 class="section-title">Más de 4.747 Clientes Confían en Domingo</h2>
            <p class="section-subtitle">
                Calificación promedio de 4.9 sobre 5.0 en Google Reviews por puntualidad, transparencia en precios y profesionalismo técnico.
            </p>
        </div>

        <div class="services-grid">
            <!-- Testimonio 1 -->
            <div class="service-card" style="justify-content: flex-start;">
                <div class="stars-group" style="margin-bottom: 12px; font-size: 1.2rem;">★★★★★</div>
                <p style="font-size: 0.95rem; color: var(--text-dark); line-height: 1.6; margin-bottom: 18px; font-style: italic;">
                    "Excelente trabajo en Las Condes. Se me cayó la luz completa un domingo en la noche y Domingo llegó en 25 minutos. Detectó una fuga en la cocina que ningún otro técnico había encontrado. 100% recomendado."
                </p>
                <div style="margin-top: auto; display: flex; align-items: center; gap: 10px;">
                    <div style="width: 38px; height: 38px; background: var(--volt-orange-subtle); color: var(--volt-orange); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800;">MC</div>
                    <div>
                        <strong style="display: block; font-size: 0.9rem;">Matías Campbell</strong>
                        <span style="font-size: 0.78rem; color: var(--text-muted);">Las Condes • Urgencia 24h</span>
                    </div>
                </div>
            </div>

            <!-- Testimonio 2 -->
            <div class="service-card" style="justify-content: flex-start;">
                <div class="stars-group" style="margin-bottom: 12px; font-size: 1.2rem;">★★★★★</div>
                <p style="font-size: 0.95rem; color: var(--text-dark); line-height: 1.6; margin-bottom: 18px; font-style: italic;">
                    "Tramitamos el certificado TE1 para un local comercial en Providencia. La municipalidad nos pedía la regularización urgente para la patente. Domingo hizo los planos, corrigió el tablero y el TE1 salió aprobado sin objeciones."
                </p>
                <div style="margin-top: auto; display: flex; align-items: center; gap: 10px;">
                    <div style="width: 38px; height: 38px; background: var(--volt-orange-subtle); color: var(--volt-orange); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800;">CR</div>
                    <div>
                        <strong style="display: block; font-size: 0.9rem;">Carolina Rojas</strong>
                        <span style="font-size: 0.78rem; color: var(--text-muted);">Providencia • Certificado TE1</span>
                    </div>
                </div>
            </div>

            <!-- Testimonio 3 -->
            <div class="service-card" style="justify-content: flex-start;">
                <div class="stars-group" style="margin-bottom: 12px; font-size: 1.2rem;">★★★★★</div>
                <p style="font-size: 0.95rem; color: var(--text-dark); line-height: 1.6; margin-bottom: 18px; font-style: italic;">
                    "En Puente Alto cambiamos el tablero antiguo de plomos por automáticos Schneider para instalar aire acondicionado. Trabajo limpio, ordenado y con factura y garantía escrita. Da mucha tranquilidad tener un instalador SEC de verdad."
                </p>
                <div style="margin-top: auto; display: flex; align-items: center; gap: 10px;">
                    <div style="width: 38px; height: 38px; background: var(--volt-orange-subtle); color: var(--volt-orange); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800;">HA</div>
                    <div>
                        <strong style="display: block; font-size: 0.9rem;">Héctor Albornoz</strong>
                        <span style="font-size: 0.78rem; color: var(--text-muted);">Puente Alto • Cambio de Tablero</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECCIÓN DE COTIZACIÓN RÁPIDA POR WHATSAPP -->
<section class="section-padding" style="background: var(--volt-light-bg); border-top: 1px solid var(--volt-light-border);">
    <div class="container">
        <div class="section-header" style="margin-bottom: 35px;">
            <span class="section-badge">Presupuesto en 15 Minutos</span>
            <h2 class="section-title">Envía Tu Caso Directo al WhatsApp de Domingo</h2>
            <p class="section-subtitle">
                Completa el formulario y se abrirá tu WhatsApp con el mensaje estructurado para que Domingo Isain te responda de inmediato con asesoría o cotización.
            </p>
        </div>

        <?php 
        $formTitle = "Describe Tu Requerimiento Eléctrico";
        $formSubtitle = "Tus datos se formatean automáticamente para enviarse al WhatsApp oficial de Domingo (+56 9 5769 5395).";
        require __DIR__ . '/includes/quote-form.php'; 
        ?>
    </div>
</section>

<!-- BANNER DE URGENCIA 24/7 -->
<?php require __DIR__ . '/includes/cta-emergency.php'; ?>

<!-- SECCIÓN PREGUNTAS FRECUENTES (SCHEMA FAQS) -->
<section class="section-padding" style="background: var(--volt-light-bg);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Preguntas Frecuentes</span>
            <h2 class="section-title">Respuestas Claras sobre Servicios Eléctricos SEC</h2>
            <p class="section-subtitle">
                Resolvemos las dudas habituales sobre normativas, certificados TE1, costos y tiempos de atención.
            </p>
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

        <div style="text-align: center; margin-top: 35px;">
            <a href="<?= BASE_URL ?>/faq" class="btn btn-outline">Ver Todas las Preguntas Frecuentes →</a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
