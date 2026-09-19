<?php
/**
 * Página: Contacto y Cotización Rápida
 */

require_once __DIR__ . '/config.php';
$comunas = require __DIR__ . '/data/comunas.php';

$pageTitle = "⭐⭐⭐⭐⭐ Contacto y Cotizaciones | Eléctrico Certificado SEC Domingo";
$pageDescription = "⭐⭐⭐⭐⭐ 4.747 Reseñas. Contacta a Domingo Isain Plaza Caamaño, instalador eléctrico certificado SEC. Solicita presupuesto rápido por WhatsApp o llama directamente al +56 9 5769 5395.";
$canonicalUrl = get_canonical_url('contacto');

require_once __DIR__ . '/includes/header.php';
?>

<!-- HERO CONTACTO -->
<section class="hero-voltedge" style="padding: 50px 0 60px; text-align: center;">
    <div class="container">
        <span class="badge-sec-verified" style="margin-bottom: 14px;">PRESUPUESTOS CLAROS Y SIN COMPROMISO</span>
        <h1 class="hero-heading" style="font-size: clamp(2rem, 4vw, 3.4rem);">
            Contáctate con Domingo <br><span class="text-orange">Instalador Autorizado SEC</span>
        </h1>
        <p class="hero-subheading" style="margin: 0 auto 20px;">
            Atención telefónica 24 horas y cotizaciones ágiles por WhatsApp para cualquier comuna de la Región Metropolitana.
        </p>
    </div>
</section>

<!-- FORMULARIO & DETALLES DE CONTACTO -->
<section class="section-padding" style="background: #FFFFFF;">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr; gap: 40px;">
            <div style="display: grid; grid-template-columns: 1fr; gap: 30px;" class="services-grid">
                <!-- Tarjeta de Llamada Directa -->
                <div class="service-card" style="text-align: center; align-items: center;">
                    <div class="service-icon-box" style="margin: 0 auto 16px;">📞</div>
                    <h3 class="service-card-title">Llamada Telefónica 24/7</h3>
                    <p class="service-card-desc">Para emergencias eléctricas graves y despacho inmediato.</p>
                    <a href="tel:<?= PHONE_RAW ?>" class="btn btn-volt btn-lg" style="width: 100%;">
                        Llamar <?= PHONE_DISPLAY ?>
                    </a>
                </div>

                <!-- Tarjeta de WhatsApp -->
                <div class="service-card" style="text-align: center; align-items: center;">
                    <div class="service-icon-box" style="margin: 0 auto 16px; background: rgba(37, 211, 102, 0.15); color: #25D366;">💬</div>
                    <h3 class="service-card-title">WhatsApp Directo</h3>
                    <p class="service-card-desc">Envíanos fotos de tu tablero o plano para una cotización inmediata.</p>
                    <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= WHATSAPP_DEFAULT_MSG ?>" target="_blank" rel="noopener" class="btn btn-whatsapp btn-lg" style="width: 100%;">
                        Enviar Mensaje WhatsApp
                    </a>
                </div>

                <!-- Tarjeta de Registro SEC -->
                <div class="service-card" style="text-align: center; align-items: center;">
                    <div class="service-icon-box" style="margin: 0 auto 16px;">🛡️</div>
                    <h3 class="service-card-title">Registro Oficial SEC</h3>
                    <p class="service-card-desc"><?= SEC_CREDENTIAL ?></p>
                    <strong style="font-size: 1.05rem; color: var(--volt-dark); margin-bottom: 12px;"><?= SEC_LICENSE_NUMBER ?></strong>
                    <a href="<?= SEC_VERIFICATION_URL ?>" target="_blank" rel="noopener noreferrer" referrerpolicy="no-referrer" class="btn btn-sec-verify" style="width: 100%; font-size: 0.85rem; padding: 10px 14px;">
                        Verificar en SEC.cl ↗
                    </a>
                </div>
            </div>

            <!-- Formulario de Cotización Rápida Directa a WhatsApp -->
            <div style="margin-top: 20px;">
                <?php require __DIR__ . '/includes/quote-form.php'; ?>
            </div>
        </div>
    </div>
</section>

<!-- BANNER DE URGENCIA -->
<?php require __DIR__ . '/includes/cta-emergency.php'; ?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
