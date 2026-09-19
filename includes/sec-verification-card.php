<?php
/**
 * Componente: Tarjeta de Verificación Oficial de Licencia SEC
 * Vinculada con el Registro Nacional de Instaladores e Inspectores (eRNII) de la SEC
 * URL Oficial: https://wlhttp.sec.cl/rnii/public/licencia/qr?o=1cdda99e804b48a2aca00851368f5642
 */

$secCardMode = $secCardMode ?? 'full'; // 'full' o 'compact'
?>
<div class="sec-verify-card <?= $secCardMode === 'compact' ? 'is-compact' : '' ?>">
    <!-- Encabezado de la Acreditación Oficial -->
    <div class="sec-verify-header">
        <div class="sec-verify-brand">
            <span class="sec-seal-circle">SEC</span>
            <div>
                <span class="sec-seal-sub">Superintendencia de Electricidad y Combustibles</span>
                <h3 class="sec-verify-title">Registro Oficial de Instalador Autorizado</h3>
            </div>
        </div>
        <div class="sec-status-badge">
            <span class="sec-status-beacon"></span>
            <span>ESTADO: <strong>ACTIVO Y VIGENTE</strong></span>
        </div>
    </div>

    <!-- Contenido Principal: QR + Ficha Técnica -->
    <div class="sec-verify-body">
        <!-- Columna 1: Código QR Oficial Escaneable -->
        <div class="sec-verify-qr-col">
            <div class="sec-qr-frame">
                <span class="corner-bracket top-left"></span>
                <span class="corner-bracket top-right"></span>
                <span class="corner-bracket bottom-left"></span>
                <span class="corner-bracket bottom-right"></span>

                <a href="<?= SEC_VERIFICATION_URL ?>" target="_blank" rel="noopener" title="Haz clic para verificar licencia en la web oficial de la SEC" class="sec-qr-link">
                    <picture>
                        <source srcset="<?= SEC_QR_WEBP ?>" type="image/webp">
                        <img src="<?= SEC_QR_IMAGE ?>" alt="Código QR Licencia Oficial SEC - Domingo Isain Plaza Caamaño" width="220" height="220" loading="lazy" class="sec-qr-img">
                    </picture>
                    <span class="sec-qr-overlay">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                        <span>Abrir en SEC.cl</span>
                    </span>
                </a>
            </div>
            <p class="sec-qr-caption">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect width="18" height="18" x="3" y="3" rx="2"/><circle cx="8" cy="8" r="1.5"/><circle cx="16" cy="8" r="1.5"/><circle cx="8" cy="16" r="1.5"/><circle cx="16" cy="16" r="1.5"/></svg>
                Escanea con tu celular o haz clic para verificar en vivo
            </p>
        </div>

        <!-- Columna 2: Datos Oficiales de la Licencia -->
        <div class="sec-verify-info-col">
            <div class="sec-data-grid">
                <div class="sec-data-item">
                    <span class="sec-data-label">Instalador Responsable</span>
                    <strong class="sec-data-val"><?= ELECTRICIAN_NAME ?></strong>
                </div>
                <div class="sec-data-item">
                    <span class="sec-data-label">RUT Verificable</span>
                    <strong class="sec-data-val text-orange"><?= SEC_RUT ?></strong>
                </div>
                <div class="sec-data-item">
                    <span class="sec-data-label">Categoría Oficial</span>
                    <strong class="sec-data-val">
                        <span class="badge-class-pill">Clase B</span> Instalador Eléctrico Autorizado
                    </strong>
                </div>
                <div class="sec-data-item">
                    <span class="sec-data-label">Título / Especialidad</span>
                    <strong class="sec-data-val"><?= SEC_SPECIALTY ?></strong>
                </div>
                <div class="sec-data-item">
                    <span class="sec-data-label">Institución Evaluadora</span>
                    <strong class="sec-data-val"><?= SEC_INSTITUTION ?></strong>
                </div>
                <div class="sec-data-item">
                    <span class="sec-data-label">Alcance y Respaldo Técnico</span>
                    <span class="sec-data-desc">
                        Habilitado para proyectos residenciales y comerciales, tableros, aumentos de carga y TE1. <em>Respaldado por un equipo con Ingenieros Eléctricos Clase A para obras de alta tensión y potencia sin límite.</em>
                    </span>
                </div>
            </div>

            <!-- Botones de Acción -->
            <div class="sec-verify-actions">
                <a href="<?= SEC_VERIFICATION_URL ?>" target="_blank" rel="noopener" class="btn btn-sec-verify">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
                    <span>Verificar Licencia en Vivo en SEC.cl ↗</span>
                </a>
                <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= urlencode('Hola Domingo, vi tu acreditación verificable SEC y quisiera coordinar una visita técnica o cotización.') ?>" target="_blank" rel="noopener" class="btn btn-whatsapp-subtle">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.301-.15-1.782-.879-2.057-.98-.276-.1-.477-.15-.677.15-.2.301-.777.98-.953 1.18-.176.2-.351.226-.652.075-.301-.15-1.272-.469-2.423-1.496-.895-.798-1.5-1.784-1.676-2.085-.175-.301-.019-.464.132-.614.136-.135.301-.351.452-.527.15-.175.2-.301.301-.502.1-.2.05-.376-.025-.526-.075-.15-.677-1.631-.928-2.235-.244-.588-.493-.508-.677-.517-.175-.01-.376-.01-.577-.01-.2 0-.527.075-.803.376s-1.054 1.029-1.054 2.511c0 1.482 1.079 2.91 1.23 3.111.15.2 2.122 3.24 5.141 4.544.718.311 1.279.497 1.716.636.721.229 1.377.197 1.895.12.578-.087 1.782-.728 2.032-1.431.251-.703.251-1.305.176-1.431-.076-.126-.277-.201-.578-.351z"/></svg>
                    <span>Cotizar por WhatsApp</span>
                </a>
            </div>

            <!-- Disclaimer de Certeza Legal -->
            <div class="sec-verify-legal">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                <span>Validación directa en la base de datos oficial eRNII (Superintendencia de Electricidad y Combustibles - Gobierno de Chile).</span>
            </div>
        </div>
    </div>
</div>
