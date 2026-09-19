<?php
/**
 * Footer Global - VoltEdge Theme
 */
?>
    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Columna 1: Perfil & Reseñas -->
                <div class="footer-col">
                    <div class="logo" style="margin-bottom: 20px; color: #FFF;">
                        <img src="<?= LOGO_URL ?>" alt="Logotipo Oficial Eléctrico Certificado SEC" width="64" height="64" class="logo-badge-img">
                        <div class="logo-text">
                            <span class="logo-main">ELÉCTRICO<span style="color: var(--volt-orange);">CERTIFICADO</span></span>
                            <span class="logo-sec-tag"><?= SEC_CREDENTIAL ?></span>
                        </div>
                    </div>
                    <p style="font-size: 0.92rem; line-height: 1.6; margin-bottom: 20px;">
                        Servicio profesional de instalaciones y certificaciones eléctricas a domicilio en la Región Metropolitana. Especialista en <strong>Certificados TE1</strong>, emergencias 24 horas y regularizaciones bajo la nueva norma SEC RIC.
                    </p>
                    
                    <!-- Rating Widget Google (4.747 Reseñas) -->
                    <div class="rating-pill-card" style="display: inline-flex;">
                        <div>
                            <div class="stars-group">
                                ★★★★★
                            </div>
                            <div class="rating-text" style="margin-top: 4px;">
                                <span class="rating-score"><?= REVIEW_RATING ?> / 5.0</span>
                                <div>Google Reviews: <span class="rating-count"><?= number_format(REVIEW_COUNT, 0, ',', '.') ?> Reseñas</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna 2: Servicios -->
                <div class="footer-col">
                    <h4>Servicios Eléctricos</h4>
                    <ul class="footer-links">
                        <li><a href="<?= BASE_URL ?>/servicios/certificacion-te1-sec">Certificado TE1 SEC Oficial</a></li>
                        <li><a href="<?= BASE_URL ?>/servicios/electricista-a-domicilio">Electricista a Domicilio</a></li>
                        <li><a href="<?= BASE_URL ?>/servicios/urgencias-24-horas">Urgencias Eléctricas 24h</a></li>
                        <li><a href="<?= BASE_URL ?>/servicios/tableros-y-aumento-capacidad">Tableros y Automáticos</a></li>
                        <li><a href="<?= BASE_URL ?>/servicios/tableros-y-aumento-capacidad">Aumento de Capacidad Enel/CGE</a></li>
                        <li><a href="<?= BASE_URL ?>/servicios/">Ver Catálogo Completo →</a></li>
                    </ul>
                </div>

                <!-- Columna 3: Comunas Principales -->
                <div class="footer-col">
                    <h4>Zonas de Cobertura</h4>
                    <ul class="footer-links">
                        <li><a href="<?= BASE_URL ?>/comunas/las-condes">Las Condes</a></li>
                        <li><a href="<?= BASE_URL ?>/comunas/providencia">Providencia</a></li>
                        <li><a href="<?= BASE_URL ?>/comunas/puente-alto">Puente Alto</a></li>
                        <li><a href="<?= BASE_URL ?>/comunas/maipu">Maipú</a></li>
                        <li><a href="<?= BASE_URL ?>/comunas/santiago-centro">Santiago Centro</a></li>
                        <li><a href="<?= BASE_URL ?>/comunas/nunoa">Ñuñoa</a></li>
                        <li><a href="<?= BASE_URL ?>/comunas/la-florida">La Florida</a></li>
                        <li><a href="<?= BASE_URL ?>/comunas/">Todas las 15+ Comunas →</a></li>
                    </ul>
                </div>

                <!-- Columna 4: Contacto & Urgencias -->
                <div class="footer-col">
                    <h4>Atención Directa</h4>
                    <ul class="footer-links" style="gap: 14px;">
                        <li>
                            <span style="display: block; font-size: 0.8rem; color: var(--text-muted-dark); text-transform: uppercase; font-weight: 700;">Llamadas de Urgencia 24/7</span>
                            <a href="tel:<?= PHONE_RAW ?>" style="font-size: 1.15rem; font-weight: 800; color: var(--volt-orange);">📞 <?= PHONE_DISPLAY ?></a>
                        </li>
                        <li>
                            <span style="display: block; font-size: 0.8rem; color: var(--text-muted-dark); text-transform: uppercase; font-weight: 700;">WhatsApp Presupuestos</span>
                            <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= WHATSAPP_DEFAULT_MSG ?>" target="_blank" rel="noopener" style="font-weight: 700; color: #25D366;">💬 Chatear con Domingo</a>
                        </li>
                        <li>
                            <span style="display: block; font-size: 0.8rem; color: var(--text-muted-dark); text-transform: uppercase; font-weight: 700;">Carnet SEC Oficial</span>
                            <span style="color: #FFF; font-weight: 600;"><?= SEC_LICENSE_NUMBER ?></span>
                        </li>
                        <li>
                            <span style="display: block; font-size: 0.8rem; color: var(--text-muted-dark); text-transform: uppercase; font-weight: 700;">Oficina Base</span>
                            <span style="font-size: 0.88rem; color: var(--text-muted-dark);"><?= OFFICE_ADDRESS ?></span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Barra Inferior de Copyright & Legal -->
            <div class="footer-bottom">
                <div>
                    &copy; <?= date('Y') ?> <?= SITE_NAME ?>. Todos los derechos reservados.
                </div>
                <div style="display: flex; gap: 20px;">
                    <a href="<?= BASE_URL ?>/faq">FAQ</a>
                    <a href="<?= BASE_URL ?>/nosotros">Sobre Domingo</a>
                    <a href="<?= BASE_URL ?>/contacto">Contacto</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Barra fija inferior para móviles -->
    <?php require_once __DIR__ . '/mobile-sticky-bar.php'; ?>

    <!-- Scripts Vanilla JS -->
    <script src="<?= BASE_URL ?>/assets/js/main.js" defer></script>
</body>
</html>
