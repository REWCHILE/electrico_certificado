<?php
/**
 * Componente: Formulario de Cotización Directa a WhatsApp
 * Envía el caso estructurado al WhatsApp de Domingo Isain (+56 9 5769 5395)
 */
$comunasList = require __DIR__ . '/../data/comunas.php';
$formTitle = $formTitle ?? 'Solicitar Presupuesto o Asistencia SEC';
$formSubtitle = $formSubtitle ?? 'Completa los datos y se abrirá tu WhatsApp con el caso listo para enviar a Domingo.';
?>
<div class="quote-card-wrapper" style="background: var(--volt-light-card); border: 2px solid var(--volt-light-border); border-radius: var(--radius-lg); padding: 36px 28px; box-shadow: var(--shadow-card); max-width: 760px; margin: 0 auto; position: relative;">
    <!-- Sello de Marca -->
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px; flex-wrap: wrap; gap: 12px;">
        <div style="display: flex; align-items: center; gap: 12px;">
            <img src="<?= LOGO_URL ?>" alt="Sello Eléctrico Certificado SEC" width="44" height="44" style="border-radius: 50%; box-shadow: 0 2px 8px rgba(0,0,0,0.15);">
            <div>
                <strong style="display: block; font-family: var(--font-display); font-size: 1.05rem; color: var(--volt-dark);">Domingo Isain Plaza Caamaño</strong>
                <span style="font-size: 0.78rem; color: var(--brand-blue); font-weight: 700; text-transform: uppercase;">
                    <?= SEC_CREDENTIAL ?> • <a href="<?= SEC_VERIFICATION_URL ?>" target="_blank" rel="noopener noreferrer" referrerpolicy="no-referrer" style="color: var(--volt-orange); text-decoration: underline;">Verificar en SEC.cl ↗</a>
                </span>
            </div>
        </div>
        <span style="background: rgba(37, 211, 102, 0.15); color: #1EBE5D; border: 1px solid rgba(37, 211, 102, 0.3); padding: 4px 12px; border-radius: var(--radius-pill); font-size: 0.8rem; font-weight: 700; display: inline-flex; align-items: center; gap: 6px;">
            <span style="width: 8px; height: 8px; background: #25D366; border-radius: 50%; display: inline-block;"></span>
            WhatsApp Directo Activo
        </span>
    </div>

    <div style="text-align: left; margin-bottom: 24px;">
        <h3 style="font-family: var(--font-display); font-size: clamp(1.4rem, 2.5vw, 1.85rem); font-weight: 900; color: var(--volt-dark); line-height: 1.2; margin-bottom: 8px;">
            <?= htmlspecialchars($formTitle) ?>
        </h3>
        <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.5;">
            <?= htmlspecialchars($formSubtitle) ?>
        </p>
    </div>

    <form class="whatsapp-case-form" onsubmit="event.preventDefault(); procesarEnvioWhatsApp(this);" style="display: flex; flex-direction: column; gap: 18px;">
        <div style="display: grid; grid-template-columns: 1fr; gap: 16px;">
            <div>
                <label style="display: block; font-size: 0.85rem; font-weight: 700; margin-bottom: 6px; color: var(--text-dark);">Tu Nombre y Apellido *</label>
                <input type="text" name="cliente_nombre" required placeholder="Ej: Marcelo Gómez" style="width: 100%; padding: 13px 16px; border: 1px solid var(--volt-light-border); border-radius: var(--radius-sm); font-size: 0.95rem; background: var(--volt-light-bg); transition: border-color 0.2s;">
            </div>
            <div>
                <label style="display: block; font-size: 0.85rem; font-weight: 700; margin-bottom: 6px; color: var(--text-dark);">Tu Teléfono Celular *</label>
                <input type="tel" name="cliente_telefono" required placeholder="Ej: +56 9 8765 4321" style="width: 100%; padding: 13px 16px; border: 1px solid var(--volt-light-border); border-radius: var(--radius-sm); font-size: 0.95rem; background: var(--volt-light-bg);">
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr; gap: 16px;">
            <div>
                <label style="display: block; font-size: 0.85rem; font-weight: 700; margin-bottom: 6px; color: var(--text-dark);">Comuna de Atención *</label>
                <select name="cliente_comuna" required style="width: 100%; padding: 13px 16px; border: 1px solid var(--volt-light-border); border-radius: var(--radius-sm); font-size: 0.95rem; background: var(--volt-light-bg);">
                    <option value="">Selecciona tu comuna en Santiago...</option>
                    <?php foreach ($comunasList as $cSlug => $cItem): ?>
                    <option value="<?= htmlspecialchars($cItem['name']) ?>"><?= htmlspecialchars($cItem['name']) ?> (<?= htmlspecialchars($cItem['zona']) ?>)</option>
                    <?php endforeach; ?>
                    <option value="Otra Comuna / Región">Otra Comuna de la Región Metropolitana</option>
                </select>
            </div>
            <div>
                <label style="display: block; font-size: 0.85rem; font-weight: 700; margin-bottom: 6px; color: var(--text-dark);">Tipo de Caso o Servicio *</label>
                <select name="cliente_servicio" required style="width: 100%; padding: 13px 16px; border: 1px solid var(--volt-light-border); border-radius: var(--radius-sm); font-size: 0.95rem; background: var(--volt-light-bg);">
                    <option value="Certificado TE1 SEC">Certificado TE1 SEC (Planos e Inscripción)</option>
                    <option value="🚨 Urgencia Eléctrica 24h">🚨 Urgencia Eléctrica 24h (Cortocircuito / Sin luz)</option>
                    <option value="Electricista a Domicilio">Electricista a Domicilio (Reparaciones del Hogar)</option>
                    <option value="Tablero Eléctrico / Diferencial">Cambio o Normalización de Tablero Eléctrico</option>
                    <option value="Aumento de Capacidad Enel/CGE">Aumento de Capacidad de Empalme</option>
                    <option value="Cargador Vehículo Eléctrico (EV)">Instalación Cargador EV Wallbox</option>
                    <option value="Puesta a Tierra y Mallas">Medición de Puesta a Tierra</option>
                    <option value="Otro Caso">Otro requerimiento</option>
                </select>
            </div>
        </div>

        <div>
            <label style="display: block; font-size: 0.85rem; font-weight: 700; margin-bottom: 6px; color: var(--text-dark);">Describe Brevemente el Caso *</label>
            <textarea name="cliente_detalle" required rows="3" placeholder="Ej: Se cayó el automático del diferencial en la cocina y no sube, o necesito cotizar TE1 para empalme nuevo..." style="width: 100%; padding: 13px 16px; border: 1px solid var(--volt-light-border); border-radius: var(--radius-sm); font-size: 0.95rem; background: var(--volt-light-bg); resize: vertical;"></textarea>
        </div>

        <button type="submit" class="btn btn-whatsapp btn-lg" style="width: 100%; padding: 16px 24px; font-size: 1.05rem; font-weight: 800; display: flex; align-items: center; justify-content: center; gap: 12px; margin-top: 6px;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.312.045-.694.062-1.11-.073-.255-.083-.585-.205-1.002-.387-1.765-.772-2.91-2.553-2.998-2.671-.088-.119-.714-.95-.714-1.812 0-.862.453-1.285.614-1.46.161-.174.351-.218.468-.218.118 0 .235.001.338.006.107.005.251-.041.393.3.143.344.49 1.196.533 1.283.043.088.072.19.014.305-.058.117-.087.19-.174.292-.088.102-.185.228-.264.306-.088.088-.18.184-.078.36.102.175.454.748.974 1.212.67.596 1.235.782 1.41.87.175.088.278.073.38-.044.103-.117.44-.512.558-.687.117-.175.234-.146.394-.088.161.058 1.025.483 1.201.571.176.088.293.131.337.205.044.073.044.424-.1.829z"/>
            </svg>
            Enviar Caso a WhatsApp de Domingo (9 5769 5395) →
        </button>
        <span style="display: block; text-align: center; font-size: 0.78rem; color: var(--text-muted); margin-top: 4px;">
            🔒 Tus datos se envían de forma privada directamente al chat de WhatsApp oficial de Domingo Isain Plaza Caamaño.
        </span>
    </form>
</div>

<script>
function procesarEnvioWhatsApp(form) {
    const nombre = form.cliente_nombre.value.trim();
    const telefono = form.cliente_telefono.value.trim();
    const comuna = form.cliente_comuna.value;
    const servicio = form.cliente_servicio.value;
    const detalle = form.cliente_detalle.value.trim();

    const mensaje = 
`⚡ *SOLICITUD DE ATENCIÓN ELÉCTRICA SEC* ⚡
━━━━━━━━━━━━━━━━━━━━
👤 *Cliente:* ${nombre}
📱 *Teléfono:* ${telefono}
📍 *Comuna:* ${comuna}
🛠️ *Servicio:* ${servicio}
📝 *Detalle del Caso:*
${detalle}
━━━━━━━━━━━━━━━━━━━━
🌐 _Enviado desde electrico-certificado.cl_`;

    const url = `https://wa.me/<?= WHATSAPP_NUMBER ?>?text=${encodeURIComponent(mensaje)}`;
    window.open(url, '_blank');
}
</script>
