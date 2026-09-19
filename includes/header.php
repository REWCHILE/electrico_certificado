<?php
/**
 * Header Global - VoltEdge Design
 * Generación dinámica de Metadatos SEO, OpenGraph y Microdatos JSON-LD
 */

require_once __DIR__ . '/../config.php';

// Valores por defecto para SEO si no son provistos por la página
$pageTitle = $pageTitle ?? '⭐⭐⭐⭐⭐ Eléctrico Certificado SEC en Santiago | Domingo Instalador Autorizado';
$pageDescription = $pageDescription ?? '⭐⭐⭐⭐⭐ 4.747 Reseñas (5.0). Eléctrico Certificado SEC a domicilio en Santiago. Certificado TE1, urgencias 24 horas y tableros. ¡Cotiza hoy!';
$canonicalUrl = $canonicalUrl ?? get_canonical_url();
$pageSchemaType = $pageSchemaType ?? 'default';
$pageFaqs = $pageFaqs ?? [];
$isHeaderDark = $isHeaderDark ?? true;
?>
<!DOCTYPE html>
<html lang="es-CL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO Meta Tags -->
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>">
    <meta name="author" content="<?= ELECTRICIAN_NAME ?>">
    <meta name="geo.region" content="CL-RM">
    <meta name="geo.placename" content="Santiago">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:locale" content="es_CL">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl) ?>">
    <meta property="og:site_name" content="<?= SITE_NAME ?>">
    <meta property="og:image" content="<?= BASE_URL ?>/assets/img/og-preview.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/jpeg">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta name="twitter:image" content="<?= BASE_URL ?>/assets/img/og-preview.jpg">

    <!-- Favicons & App Icons -->
    <link rel="icon" type="image/svg+xml" href="<?= BASE_URL ?>/assets/img/favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= BASE_URL ?>/assets/img/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= BASE_URL ?>/assets/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?= BASE_URL ?>/favicon.ico">

    <!-- Preconnect Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Stylesheet con Cache Busting Dinámico -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css?v=<?= file_exists(__DIR__ . '/../assets/css/style.css') ? filemtime(__DIR__ . '/../assets/css/style.css') : '2.1' ?>">

    <!-- JSON-LD Schema: LocalBusiness & Electrician con 4.747 Reseñas -->
    <script type="application/ld+json">
    <?= get_schema_local_business($pageTitle, $pageDescription) ?>
    </script>

    <?php if (!empty($pageFaqs)): ?>
    <!-- JSON-LD Schema: FAQPage para Rich Snippets en Google -->
    <script type="application/ld+json">
    <?= get_schema_faq($pageFaqs) ?>
    </script>
    <?php endif; ?>
</head>
<body>

    <!-- Barra Superior de Urgencias & Contacto Rápido -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-left">
                <span class="top-bar-badge">Atención SEC Activa 24/7</span>
                <span>Cobertura en todo Santiago de Chile</span>
            </div>
            <div class="top-bar-right">
                <a href="<?= SEC_VERIFICATION_URL ?>" target="_blank" rel="noopener noreferrer" referrerpolicy="no-referrer" class="top-bar-verify-pill" title="Verificar credencial en el Registro Nacional de la SEC">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
                    Verificar SEC: <?= SEC_RUT ?> ↗
                </a>
                <a href="tel:<?= PHONE_RAW ?>">📞 <?= PHONE_DISPLAY ?></a>
            </div>
        </div>
    </div>

    <!-- Navegación Principal (Estilo VoltEdge) -->
    <header class="site-header <?= $isHeaderDark ? 'is-dark' : '' ?>">
        <div class="container">
            <div class="header-inner">
                <!-- Logo Oficial -->
                <a href="<?= BASE_URL ?>/" class="logo" title="Eléctrico Certificado SEC - <?= ELECTRICIAN_NAME ?>">
                    <img src="<?= LOGO_URL ?>" alt="Logotipo Oficial Eléctrico Certificado SEC" width="66" height="66" class="logo-badge-img">
                    <div class="logo-text">
                        <span class="logo-main">ELÉCTRICO<span style="color: var(--volt-orange);">CERTIFICADO</span></span>
                        <span class="logo-sec-tag"><span class="logo-sec-prefix">INSTALADOR ELÉCTRICO </span>AUTORIZADO SEC - CLASE B</span>
                    </div>
                </a>

                <!-- Menú Desktop -->
                <nav class="nav-menu" aria-label="Navegación principal">
                    <div class="nav-item">
                        <a href="<?= BASE_URL ?>/" class="nav-link">Inicio</a>
                    </div>

                    <div class="nav-item">
                        <a href="<?= BASE_URL ?>/servicios/" class="nav-link">
                            Servicios
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m6 9 6 6 6-6"/></svg>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="<?= BASE_URL ?>/servicios/certificacion-te1-sec">Certificado TE1 SEC</a></li>
                            <li class="dropdown-item"><a href="<?= BASE_URL ?>/servicios/electricista-a-domicilio">Electricista a Domicilio</a></li>
                            <li class="dropdown-item"><a href="<?= BASE_URL ?>/servicios/urgencias-24-horas">Urgencias Eléctricas 24h</a></li>
                            <li class="dropdown-item"><a href="<?= BASE_URL ?>/servicios/tableros-y-aumento-capacidad">Tableros y Aumento de Carga</a></li>
                        </ul>
                    </div>

                    <div class="nav-item">
                        <a href="<?= BASE_URL ?>/comunas/" class="nav-link">
                            Comunas
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m6 9 6 6 6-6"/></svg>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="<?= BASE_URL ?>/comunas/las-condes">Las Condes</a></li>
                            <li class="dropdown-item"><a href="<?= BASE_URL ?>/comunas/providencia">Providencia</a></li>
                            <li class="dropdown-item"><a href="<?= BASE_URL ?>/comunas/puente-alto">Puente Alto</a></li>
                            <li class="dropdown-item"><a href="<?= BASE_URL ?>/comunas/maipu">Maipú</a></li>
                            <li class="dropdown-item"><a href="<?= BASE_URL ?>/comunas/santiago-centro">Santiago Centro</a></li>
                            <li class="dropdown-item"><a href="<?= BASE_URL ?>/comunas/nunoa">Ñuñoa</a></li>
                            <li class="dropdown-item"><a href="<?= BASE_URL ?>/comunas/">Ver Todas las Comunas →</a></li>
                        </ul>
                    </div>

                    <div class="nav-item">
                        <a href="<?= BASE_URL ?>/nosotros" class="nav-link">Sobre Domingo</a>
                    </div>

                    <div class="nav-item">
                        <a href="<?= BASE_URL ?>/faq" class="nav-link">Preguntas</a>
                    </div>

                    <div class="nav-item">
                        <a href="<?= BASE_URL ?>/contacto" class="nav-link">Contacto</a>
                    </div>
                </nav>

                <!-- Acciones & Teléfono de Llamada Directa -->
                <div class="header-actions">
                    <div class="header-phone-box">
                        <span class="header-phone-label">Llama Directo a Domingo</span>
                        <a href="tel:<?= PHONE_RAW ?>" class="header-phone-number"><?= PHONE_DISPLAY ?></a>
                    </div>
                    <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= WHATSAPP_DEFAULT_MSG ?>" target="_blank" rel="noopener" class="btn btn-volt btn-sm header-cta-btn" title="Cotizar por WhatsApp">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.312.045-.694.062-1.11-.073-.255-.083-.585-.205-1.002-.387-1.765-.772-2.91-2.553-2.998-2.671-.088-.119-.714-.95-.714-1.812 0-.862.453-1.285.614-1.46.161-.174.351-.218.468-.218.118 0 .235.001.338.006.107.005.251-.041.393.3.143.344.49 1.196.533 1.283.043.088.072.19.014.305-.058.117-.087.19-.174.292-.088.102-.185.228-.264.306-.088.088-.18.184-.078.36.102.175.454.748.974 1.212.67.596 1.235.782 1.41.87.175.088.278.073.38-.044.103-.117.44-.512.558-.687.117-.175.234-.146.394-.088.161.058 1.025.483 1.201.571.176.088.293.131.337.205.044.073.044.424-.1.829z"/>
                        </svg>
                        <span class="header-cta-text">Cotizar WhatsApp</span>
                    </a>

                    <!-- Toggle Móvil -->
                    <button class="mobile-toggle" aria-label="Abrir menú de navegación">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Menú Desplegable Lateral para Móviles -->
    <div class="drawer-overlay"></div>
    <div class="mobile-drawer">
        <div class="drawer-header">
            <span class="logo-main" style="color: #FFF;">ELÉCTRICO<span style="color: var(--volt-orange);">SEC</span></span>
            <button class="drawer-close" aria-label="Cerrar menú">&times;</button>
        </div>
        <ul class="drawer-nav">
            <li><a href="<?= BASE_URL ?>/">Inicio</a></li>
            <li><a href="<?= BASE_URL ?>/servicios/certificacion-te1-sec">Certificado TE1 SEC</a></li>
            <li><a href="<?= BASE_URL ?>/servicios/electricista-a-domicilio">Electricista a Domicilio</a></li>
            <li><a href="<?= BASE_URL ?>/servicios/urgencias-24-horas">Urgencias Eléctricas 24h</a></li>
            <li><a href="<?= BASE_URL ?>/servicios/tableros-y-aumento-capacidad">Tableros y Empalmes</a></li>
            <li><a href="<?= BASE_URL ?>/comunas/">Comunas de Santiago</a></li>
            <li><a href="<?= BASE_URL ?>/nosotros">Sobre Domingo (Instalador SEC)</a></li>
            <li><a href="<?= BASE_URL ?>/faq">Preguntas Frecuentes</a></li>
            <li><a href="<?= BASE_URL ?>/contacto">Contacto y Presupuestos</a></li>
        </ul>
        <div style="margin-top: auto; display: flex; flex-direction: column; gap: 10px;">
            <a href="tel:<?= PHONE_RAW ?>" class="btn btn-volt btn-sm">📞 Llamar <?= PHONE_DISPLAY ?></a>
            <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=<?= WHATSAPP_DEFAULT_MSG ?>" class="btn btn-whatsapp btn-sm">💬 Escribir al WhatsApp</a>
        </div>
    </div>
