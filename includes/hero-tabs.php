<?php
/**
 * Componente Hero Tabs Interactivo - Inspirado en VoltEdge
 */
?>
<div class="hero-tabs-card">
    <!-- Pestañas de Navegación -->
    <div class="tabs-nav" role="tablist" aria-label="Servicios Destacados">
        <button class="tab-btn active" data-tab="tab-te1" role="tab" aria-selected="true" aria-controls="tab-te1">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
            Certificado TE1 SEC
        </button>
        <button class="tab-btn" data-tab="tab-urgencias" role="tab" aria-selected="false" aria-controls="tab-urgencias">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
            Urgencias 24/7
        </button>
        <button class="tab-btn" data-tab="tab-domicilio" role="tab" aria-selected="false" aria-controls="tab-domicilio">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            Electricista a Domicilio
        </button>
        <button class="tab-btn" data-tab="tab-tableros" role="tab" aria-selected="false" aria-controls="tab-tableros">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg>
            Tableros y Empalmes
        </button>
    </div>

    <!-- Contenido Pestaña 1: TE1 SEC -->
    <div id="tab-te1" class="tab-pane active" role="tabpanel">
        <div class="tab-content-grid">
            <div class="tab-info">
                <h3>Tramitación & Aprobación Oficial de Certificado TE1 SEC</h3>
                <p>
                    Elaboración de planos CAD normalizados, memoria técnica explicativa y medición de puesta a tierra para obtener el certificado TE1 ante la SEC. Garantía de aprobación sin rechazos para viviendas, locales y empalmes nuevos.
                </p>
                <ul class="tab-features-list">
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Planos eléctricos en AutoCAD
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Firma de Instalador Autorizado SEC
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Aprobado para Enel y CGE
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Recepción final municipal
                    </li>
                </ul>
                <div class="hero-cta-group">
                    <a href="<?= BASE_URL ?>/servicios/certificacion-te1-sec" class="btn btn-volt">Ver Proceso TE1 SEC →</a>
                    <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= urlencode('Hola Domingo, necesito cotizar un Certificado TE1 SEC.') ?>" target="_blank" rel="noopener" class="btn btn-whatsapp">Cotizar TE1 por WhatsApp</a>
                </div>
            </div>
            <div>
                <div class="tab-media-card">
                    <img src="<?= BASE_URL ?>/assets/img/te1-blueprint.jpg" alt="Certificado TE1 SEC Planos e Ingeniería" class="tab-media-img" loading="lazy" width="600" height="375">
                    <div class="tab-media-overlay">
                        <div class="rating-pill-card">
                            <div>
                                <div class="stars-group">★★★★★</div>
                                <div class="rating-text" style="margin-top: 4px;">
                                    <div class="rating-score">100% Aprobación SEC</div>
                                    <div>Basado en <span class="rating-count"><?= number_format(REVIEW_COUNT, 0, ',', '.') ?> Reseñas</span> en Google</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido Pestaña 2: Urgencias 24/7 -->
    <div id="tab-urgencias" class="tab-pane" role="tabpanel">
        <div class="tab-content-grid">
            <div class="tab-info">
                <h3>Electricista de Emergencia 24 Horas en Santiago</h3>
                <p>
                    ¿Se cortó la luz, saltó el diferencial o tienes chispas en el tablero? Domingo despacha móviles de asistencia inmediata con tiempo promedio de respuesta entre <strong>20 y 45 minutos</strong> a cualquier comuna.
                </p>
                <ul class="tab-features-list">
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Atención 24/7 y feriados
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Detección térmica de fallas
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Repuestos originales en stock
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Restablecimiento seguro
                    </li>
                </ul>
                <div class="hero-cta-group">
                    <a href="tel:<?= PHONE_RAW ?>" class="btn btn-volt">📞 Llamar Urgencia al <?= PHONE_DISPLAY ?></a>
                    <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= WHATSAPP_URGENCIA_MSG ?>" target="_blank" rel="noopener" class="btn btn-whatsapp">Pedir Móvil de Emergencia</a>
                </div>
            </div>
            <div>
                <div class="tab-media-card">
                    <img src="<?= BASE_URL ?>/assets/img/urgencias-electricas.jpg" alt="Electricista Urgencias 24 Horas en Santiago" class="tab-media-img" loading="lazy" width="600" height="375">
                    <div class="tab-media-overlay">
                        <div class="rating-pill-card">
                            <div>
                                <div class="stars-group">★★★★★</div>
                                <div class="rating-text" style="margin-top: 4px;">
                                    <div class="rating-score">Respuesta Inmediata</div>
                                    <div>Móviles en ruta: <span class="rating-count">20 a 45 min</span> en Santiago</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido Pestaña 3: Domicilio -->
    <div id="tab-domicilio" class="tab-pane" role="tabpanel">
        <div class="tab-content-grid">
            <div class="tab-info">
                <h3>Electricista Certificado a Domicilio para Casas y Departamentos</h3>
                <p>
                    Soluciones integrales de electricidad domiciliaria: reparación de enchufes quemados, instalación de iluminación LED, corrección de caídas de tensión y recableado con conductores libres de halógeno.
                </p>
                <ul class="tab-features-list">
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Presupuestos sin sorpresas
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Garantía escrita en mano de obra
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Materiales de primera calidad
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Puntualidad y limpieza
                    </li>
                </ul>
                <div class="hero-cta-group">
                    <a href="<?= BASE_URL ?>/servicios/electricista-a-domicilio" class="btn btn-volt">Ver Servicios a Domicilio →</a>
                    <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= urlencode('Hola Domingo, necesito un electricista a domicilio.') ?>" target="_blank" rel="noopener" class="btn btn-whatsapp">Agendar por WhatsApp</a>
                </div>
            </div>
            <div>
                <div class="tab-media-card">
                    <img src="<?= BASE_URL ?>/assets/img/electricista-domicilio.jpg" alt="Electricista a Domicilio Certificado SEC" class="tab-media-img" loading="lazy" width="600" height="375">
                    <div class="tab-media-overlay">
                        <div class="rating-pill-card">
                            <div>
                                <div class="stars-group">★★★★★</div>
                                <div class="rating-text" style="margin-top: 4px;">
                                    <div class="rating-score">Garantía Escrita</div>
                                    <div>Más de <span class="rating-count">15 Años</span> de Trayectoria</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido Pestaña 4: Tableros y Empalmes -->
    <div id="tab-tableros" class="tab-pane" role="tabpanel">
        <div class="tab-content-grid">
            <div class="tab-info">
                <h3>Normalización de Tableros Eléctricos & Aumento de Capacidad</h3>
                <p>
                    Actualizamos tu tablero antiguo con protecciones termomagnéticas y diferenciales clase A (Legrand / Schneider). Gestionamos aumentos de empalme ante Enel y CGE para aires acondicionados y cargadores de vehículos eléctricos.
                </p>
                <ul class="tab-features-list">
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Cumplimiento norma SEC RIC
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Trámite de empalme Enel / CGE
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Diagrama unilineal rotulado
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        Protección contra sobretensiones
                    </li>
                </ul>
                <div class="hero-cta-group">
                    <a href="<?= BASE_URL ?>/servicios/tableros-y-aumento-capacidad" class="btn btn-volt">Ver Tableros y Empalmes →</a>
                    <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= urlencode('Hola Domingo, quiero cotizar cambio de tablero o aumento de capacidad.') ?>" target="_blank" rel="noopener" class="btn btn-whatsapp">Cotizar Tablero</a>
                </div>
            </div>
            <div>
                <div class="tab-media-card">
                    <img src="<?= BASE_URL ?>/assets/img/tablero-cargador-ev.jpg" alt="Tableros Eléctricos y Cargador de Auto Eléctrico Wallbox" class="tab-media-img" loading="lazy" width="600" height="375">
                    <div class="tab-media-overlay">
                        <div class="rating-pill-card">
                            <div>
                                <div class="stars-group">★★★★★</div>
                                <div class="rating-text" style="margin-top: 4px;">
                                    <div class="rating-score">Norma SEC RIC & EV</div>
                                    <div>Tableros <span class="rating-count">Schneider / Legrand</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
