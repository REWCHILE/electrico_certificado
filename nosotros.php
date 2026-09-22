<?php
/**
 * Página: Sobre Domingo - Instalador Autorizado SEC
 * Construye autoridad técnica y factor E-E-A-T en Google
 */

require_once __DIR__ . '/config.php';

$pageTitle = "⭐⭐⭐⭐⭐ Sobre Domingo | Instalador Eléctrico Autorizado SEC - Santiago";
$pageDescription = "⭐⭐⭐⭐⭐ 4.747 Reseñas. Conoce a Domingo Isain Plaza Caamaño, Instalador Eléctrico Autorizado SEC Clase B en Santiago. Más de 15 años de experiencia y 100% de aprobación en TE1.";
$canonicalUrl = get_canonical_url('nosotros');

require_once __DIR__ . '/includes/header.php';
?>

<!-- HERO NOSOTROS -->
<section class="hero-voltedge" style="padding: 60px 0 70px; text-align: center;">
    <div class="container">
        <span class="badge-sec-verified" style="margin-bottom: 16px;">
            <?= SEC_CREDENTIAL ?> (<?= SEC_LICENSE_NUMBER ?>)
        </span>
        <h1 class="hero-heading" style="font-size: clamp(2.2rem, 4.5vw, 3.8rem);">
            Compromiso con la Seguridad Eléctrica <br><span class="text-orange">en Todo Santiago</span>
        </h1>
        <p class="hero-subheading" style="margin: 0 auto 30px;">
            Más de 15 años de experiencia ejecutando proyectos eléctricos residenciales, comerciales e industriales bajo los más estrictos estándares normativos de Chile.
        </p>
    </div>
</section>

<!-- PERFIL DE DOMINGO Y PILARES DE TRABAJO -->
<section class="section-padding" style="background: #FFFFFF;">
    <div class="container">
        <div class="profile-showcase-grid">
            <div class="profile-img-wrap">
                <picture>
                    <source srcset="<?= SEC_CARD_WEBP ?>" type="image/webp">
                    <img src="<?= SEC_CARD_IMAGE ?>" alt="Credencial Oficial Instalador Autorizado SEC - <?= ELECTRICIAN_NAME ?>" loading="lazy" width="800" height="446">
                </picture>
                <div class="profile-badge-float">
                    <img src="<?= LOGO_URL ?>" alt="Sello Oficial SEC" width="48" height="48">
                    <div>
                        <strong style="display: block; font-size: 0.95rem;"><?= ELECTRICIAN_NAME ?></strong>
                        <span style="font-size: 0.8rem; color: var(--text-muted-dark);"><?= SEC_CREDENTIAL ?> • <?= SEC_LICENSE_NUMBER ?></span>
                    </div>
                </div>
            </div>

            <div>
                <span class="section-badge">Autoridad y Experiencia</span>
                <h2 style="font-family: var(--font-display); font-size: clamp(1.8rem, 3.2vw, 2.5rem); font-weight: 900; margin-bottom: 18px; color: var(--volt-dark);">
                    Trayectoria, Responsabilidad y Certificación Oficial SEC
                </h2>
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-dark); margin-bottom: 16px;">
                    Soy <strong>Domingo Isain Plaza Caamaño</strong>, instalador eléctrico autorizado por la Superintendencia de Electricidad y Combustibles (SEC) con <strong>Licencia Clase B</strong>, titulado como Técnico en Electricidad y Electrónica Industrial por el Instituto Profesional Santo Tomás.
                </p>
                <p style="font-size: 1.02rem; line-height: 1.7; color: var(--text-dark); margin-bottom: 16px;">
                    A lo largo de más de 15 años de trayectoria en Santiago y regiones (con oficina central en <strong>Av. Libertador Bernardo O'Higgins 1302</strong>), he atendido a más de <strong>4.747 clientes</strong>, resolviendo desde complejas urgencias domiciliarias hasta la regularización e inscripción de expedientes <strong>TE1</strong> para viviendas, condominios y locales comerciales.
                </p>
                <p style="font-size: 0.95rem; line-height: 1.6; color: var(--text-muted); margin-bottom: 24px; background: var(--volt-light-bg); padding: 12px 16px; border-radius: var(--radius-sm); border-left: 3px solid var(--brand-blue);">
                    <strong>Cobertura y Escala de Proyectos:</strong> Para obras eléctricas de alta tensión, subestaciones o proyectos industriales de gran envergadura sin límite de potencia, nuestro equipo integra a reconocidos <strong>Ingenieros Eléctricos Clase A</strong>, asegurando solvencia técnica integral en cualquier requerimiento a nivel nacional.
                </p>

                <div style="display: flex; flex-wrap: wrap; gap: 14px; margin-bottom: 10px;">
                    <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= urlencode('Hola Domingo, quiero agendar una visita o consultar un trabajo eléctrico.') ?>" target="_blank" rel="noopener" class="btn btn-volt">Hablar con Domingo por WhatsApp</a>
                    <a href="<?= SEC_VERIFICATION_URL ?>" target="_blank" rel="noopener noreferrer" referrerpolicy="no-referrer" class="btn btn-sec-verify">Verificar en SEC.cl ↗</a>
                    <a href="tel:<?= PHONE_RAW ?>" class="btn btn-outline">📞 <?= PHONE_DISPLAY ?></a>
                </div>
            </div>
        </div>

        <!-- MÓDULO DE VERIFICACIÓN OFICIAL SEC CON QR EN VIVO -->
        <?php require __DIR__ . '/includes/sec-verification-card.php'; ?>

        <!-- Tarjetas de Garantías -->
        <div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); margin-top: 30px;">
            <div class="service-card" style="padding: 26px;">
                <div class="service-icon-box" style="margin-bottom: 14px;">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                </div>
                <h3 style="font-family: var(--font-display); font-size: 1.2rem; font-weight: 800; margin-bottom: 8px;">Credencial SEC Vigente</h3>
                <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6;">
                    Acreditación oficial verificable en tiempo real en la Superintendencia (SEC) con RUT <strong><?= SEC_RUT ?></strong> o escaneando el código QR.
                </p>
                <a href="<?= SEC_VERIFICATION_URL ?>" target="_blank" rel="noopener noreferrer" referrerpolicy="no-referrer" style="display: inline-flex; align-items: center; gap: 4px; color: var(--brand-blue); font-weight: 700; font-size: 0.88rem; margin-top: 10px;">
                    Comprobar en SEC.cl ↗
                </a>
            </div>

            <div class="service-card" style="padding: 26px;">
                <div class="service-icon-box" style="margin-bottom: 14px;">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="m9 12 2 2 4-4"/></svg>
                </div>
                <h3 style="font-family: var(--font-display); font-size: 1.2rem; font-weight: 800; margin-bottom: 8px;">Garantía Escrita</h3>
                <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6;">Cada intervención incluye boleta o factura legal y póliza de garantía técnica por escrito sobre mano de obra y materiales.</p>
            </div>

            <div class="service-card" style="padding: 26px;">
                <div class="service-icon-box" style="margin-bottom: 14px;">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 18V6"/></svg>
                </div>
                <h3 style="font-family: var(--font-display); font-size: 1.2rem; font-weight: 800; margin-bottom: 8px;">Presupuesto Transparente</h3>
                <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6;">Sin costos sorpresivos. Inspeccionamos la instalación, diagnosticamos la raíz técnica de la falla y cotizamos antes de trabajar.</p>
            </div>
        </div>
    </div>
</section>

<!-- BANNER DE URGENCIA -->
<?php require __DIR__ . '/includes/cta-emergency.php'; ?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
