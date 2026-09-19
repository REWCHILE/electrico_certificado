<?php
/**
 * Grid de Servicios Visual VoltEdge (8 Tarjetas de Alto Impacto)
 * Soporta contextualización automática por Comuna o Global
 */
$contextTitle = isset($comunaContext) && !empty($comunaContext) ? $comunaContext : 'Santiago';
$contextQuery = isset($comunaContext) && !empty($comunaContext) ? " en " . $comunaContext : "";
?>

<section class="voltedge-services-section">
    <div class="container">
        <div class="section-header" style="margin-bottom: 40px;">
            <span class="section-badge" style="background: rgba(243, 112, 33, 0.15); color: var(--volt-orange); border-color: rgba(243, 112, 33, 0.3);">
                SERVICIOS TÉCNICOS SEC
            </span>
            <h2 class="section-title" style="color: #FFFFFF;">
                Soluciones Eléctricas de Excelencia <?= isset($comunaContext) ? 'en <span class="text-orange">' . htmlspecialchars($comunaContext) . '</span>' : '' ?>
            </h2>
            <p class="section-subtitle" style="color: #94A3B8; max-width: 680px; margin: 0 auto;">
                Instaladores autorizados SEC equipados con herramientas de diagnóstico de última generación y cumplimiento estricto del reglamento SEC RIC.
            </p>
        </div>

        <div class="voltedge-services-grid">
            <!-- 1. Reparaciones Eléctricas -->
            <a href="<?= BASE_URL ?>/servicios/electricista-a-domicilio" class="voltedge-card" title="Reparaciones Eléctricas<?= $contextQuery ?>">
                <img 
                    src="<?= BASE_URL ?>/assets/img/services/electrical-repair.jpg" 
                    alt="Reparaciones Eléctricas Certificadas SEC<?= $contextQuery ?>" 
                    class="voltedge-card-img"
                    loading="lazy"
                    width="400"
                    height="310"
                >
                <div class="voltedge-card-notch">
                    <div class="voltedge-notch-icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                    </div>
                </div>
                <div class="voltedge-card-tab">
                    <span>Reparaciones Eléctricas</span>
                </div>
            </a>

            <!-- 2. Urgencias 24 Horas (Destacado Activo) -->
            <a href="<?= BASE_URL ?>/servicios/urgencias-24-horas" class="voltedge-card is-emergency" title="Urgencias Eléctricas 24 Horas<?= $contextQuery ?>">
                <img 
                    src="<?= BASE_URL ?>/assets/img/services/emergency-services.jpg" 
                    alt="Servicio de Urgencias Eléctricas 24 Horas SEC<?= $contextQuery ?>" 
                    class="voltedge-card-img"
                    loading="lazy"
                    width="400"
                    height="310"
                >
                <div class="voltedge-card-notch">
                    <div class="voltedge-notch-icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
                    </div>
                </div>
                <div class="voltedge-card-tab">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    <span>Urgencias 24 Horas</span>
                </div>
            </a>

            <!-- 3. Instalación Iluminación -->
            <a href="<?= BASE_URL ?>/servicios/electricista-a-domicilio" class="voltedge-card" title="Instalación de Iluminación LED<?= $contextQuery ?>">
                <img 
                    src="<?= BASE_URL ?>/assets/img/services/lighting-installation.jpg" 
                    alt="Instalación de Iluminación LED y Focos<?= $contextQuery ?>" 
                    class="voltedge-card-img"
                    loading="lazy"
                    width="400"
                    height="310"
                >
                <div class="voltedge-card-notch">
                    <div class="voltedge-notch-icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                    </div>
                </div>
                <div class="voltedge-card-tab">
                    <span>Instalación Iluminación</span>
                </div>
            </a>

            <!-- 4. Cargadores Autos Eléctricos EV -->
            <a href="<?= BASE_URL ?>/servicios/tableros-y-aumento-capacidad" class="voltedge-card" title="Instalación Cargadores Autos Eléctricos EV<?= $contextQuery ?>">
                <img 
                    src="<?= BASE_URL ?>/assets/img/services/ev-charger-install.jpg" 
                    alt="Instalación Cargadores Wallbox Autos Eléctricos SEC<?= $contextQuery ?>" 
                    class="voltedge-card-img"
                    loading="lazy"
                    width="400"
                    height="310"
                >
                <div class="voltedge-card-notch">
                    <div class="voltedge-notch-icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                    </div>
                </div>
                <div class="voltedge-card-tab">
                    <span>Cargadores Autos EV</span>
                </div>
            </a>

            <!-- 5. Enchufes e Interruptores -->
            <a href="<?= BASE_URL ?>/servicios/electricista-a-domicilio" class="voltedge-card" title="Instalación de Enchufes e Interruptores<?= $contextQuery ?>">
                <img 
                    src="<?= BASE_URL ?>/assets/img/services/electrical-switches.jpg" 
                    alt="Instalación y Cambio de Enchufes e Interruptores<?= $contextQuery ?>" 
                    class="voltedge-card-img"
                    loading="lazy"
                    width="400"
                    height="310"
                >
                <div class="voltedge-card-notch">
                    <div class="voltedge-notch-icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                    </div>
                </div>
                <div class="voltedge-card-tab">
                    <span>Enchufes e Interruptores</span>
                </div>
            </a>

            <!-- 6. Normalización Tableros TE1 -->
            <a href="<?= BASE_URL ?>/servicios/tableros-y-aumento-capacidad" class="voltedge-card" title="Normalización y Aumento de Tableros TE1<?= $contextQuery ?>">
                <img 
                    src="<?= BASE_URL ?>/assets/img/services/panel-upgrade.jpg" 
                    alt="Renovación de Tableros Eléctricos y Automáticos SEC<?= $contextQuery ?>" 
                    class="voltedge-card-img"
                    loading="lazy"
                    width="400"
                    height="310"
                >
                <div class="voltedge-card-notch">
                    <div class="voltedge-notch-icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                    </div>
                </div>
                <div class="voltedge-card-tab">
                    <span>Normalización Tableros</span>
                </div>
            </a>

            <!-- 7. Detectores de Humo y Seguridad -->
            <a href="<?= BASE_URL ?>/servicios/certificacion-te1-sec" class="voltedge-card" title="Detectores de Humo y Seguridad Eléctrica<?= $contextQuery ?>">
                <img 
                    src="<?= BASE_URL ?>/assets/img/services/smoke-detectors.jpg" 
                    alt="Instalación de Detectores de Humo y Protecciones Eléctricas<?= $contextQuery ?>" 
                    class="voltedge-card-img"
                    loading="lazy"
                    width="400"
                    height="310"
                >
                <div class="voltedge-card-notch">
                    <div class="voltedge-notch-icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                    </div>
                </div>
                <div class="voltedge-card-tab">
                    <span>Detectores de Humo</span>
                </div>
            </a>

            <!-- 8. Tarjeta Especial 24/7 Promo -->
            <a href="tel:<?= PHONE_RAW ?>" class="voltedge-promo-card" title="Llamar Urgencias Eléctricas 24/7<?= $contextQuery ?>">
                <div class="voltedge-promo-notch"></div>
                <div class="voltedge-promo-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="13 10 11 14 14 14 11 18"/></svg>
                </div>
                <div>
                    <div class="voltedge-promo-big">24/7</div>
                    <div class="voltedge-promo-title">
                        Electricistas<?= !empty($comunaContext) ? ' en ' . htmlspecialchars($comunaContext) : ' a Domicilio' ?>, Siempre que lo Necesites
                    </div>
                    <div class="voltedge-promo-cta">
                        <span>Llamada de Asistencia Inmediata</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
