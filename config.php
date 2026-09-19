<?php
/**
 * Configuración Global - Eléctrico Certificado SEC
 * Domingo - Instalador Eléctrico Autorizado
 */

// Detección automática del protocolo y dominio base
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (!empty($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';

// Cálculo exacto del subdirectorio raíz relativo al DOCUMENT_ROOT
$docRoot = str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT'] ?? '') ?: '');
$appDir  = str_replace('\\', '/', realpath(__DIR__) ?: '');

$subDir = '';
if (!empty($docRoot) && strpos($appDir, $docRoot) === 0) {
    $subDir = substr($appDir, strlen($docRoot));
    $subDir = '/' . trim(str_replace('\\', '/', $subDir), '/');
    if ($subDir === '/') $subDir = '';
} else {
    // Respaldo en caso de entornos Laragon con alias
    if (!empty($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], '/electrico-certificado') !== false) {
        $subDir = '/electrico-certificado';
    }
}

define('BASE_URL', $protocol . $host . $subDir);
define('SITE_URL', BASE_URL);

// Datos del Profesional y de Contacto
define('SITE_NAME', 'Eléctrico Certificado SEC - Domingo Isain Plaza Caamaño');
define('ELECTRICIAN_NAME', 'Domingo Isain Plaza Caamaño');
define('ELECTRICIAN_SHORT_NAME', 'Domingo Plaza Caamaño');
define('SEC_CREDENTIAL', 'Instalador Eléctrico Autorizado SEC - Clase A');
define('SEC_LICENSE_NUMBER', 'SEC Reg. N° 481920');
define('PHONE_DISPLAY', '+56 9 5769 5395');
define('PHONE_RAW', '56957695395');
define('WHATSAPP_NUMBER', '56957695395');
define('BRAND_DOMAIN', 'electrico-certificado.cl');
define('LOGO_URL', BASE_URL . '/assets/img/logotipo-electrico-certificado.jpg');
define('WHATSAPP_DEFAULT_MSG', urlencode('Hola Domingo, necesito consultar por un servicio de eléctrico certificado SEC y solicitar presupuesto.'));
define('WHATSAPP_URGENCIA_MSG', urlencode('🚨 URGENCIA ELÉCTRICA: Hola Domingo, requiero atención inmediata de un eléctrico certificado SEC.'));
define('CONTACT_EMAIL', 'contacto@electrico-certificado.cl');
define('OFFICE_ADDRESS', 'Av. Libertador Bernardo O’Higgins 1302, Santiago, Chile');
define('BRAND_SLOGAN', 'Eléctrico Certificado SEC, Instalador Electricista Autorizado a Domicilio');

// Parámetros de Reseñas y Calificación Google
define('REVIEW_RATING', '4.9');
define('REVIEW_COUNT', '4747');
define('BEST_RATING', '5');

/**
 * Función helper para generar URL canónica limpia
 */
function get_canonical_url($path = '') {
    $cleanPath = ltrim($path, '/');
    return BASE_URL . ($cleanPath ? '/' . $cleanPath : '');
}

/**
 * Función para generar JSON-LD de LocalBusiness y Electrician con 4.747 reseñas
 */
function get_schema_local_business($customTitle = '', $customDesc = '') {
    $schema = [
        "@context" => "https://schema.org",
        "@type" => ["LocalBusiness", "Electrician"],
        "@id" => BASE_URL . "/#organization",
        "name" => SITE_NAME,
        "alternateName" => "Servicios Eléctricos Certificados SEC Domingo",
        "url" => BASE_URL,
        "telephone" => "+" . PHONE_RAW,
        "email" => CONTACT_EMAIL,
        "priceRange" => "$$",
        "image" => [
            BASE_URL . "/assets/img/og-preview.jpg"
        ],
        "description" => $customDesc ?: "Servicios de eléctrico certificado SEC a domicilio en Santiago de Chile. Certificación TE1, urgencias 24 horas, tableros eléctricos y aumento de carga con más de 4.747 reseñas verificadas.",
        "address" => [
            "@type" => "PostalAddress",
            "streetAddress" => "Av. Providencia 1208",
            "addressLocality" => "Santiago",
            "addressRegion" => "Región Metropolitana",
            "postalCode" => "7500000",
            "addressCountry" => "CL"
        ],
        "geo" => [
            "@type" => "GeoCoordinates",
            "latitude" => -33.4372,
            "longitude" => -70.6345
        ],
        "openingHoursSpecification" => [
            [
                "@type" => "OpeningHoursSpecification",
                "dayOfWeek" => ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
                "opens" => "00:00",
                "closes" => "23:59"
            ]
        ],
        "hasOfferCatalog" => [
            "@type" => "OfferCatalog",
            "name" => "Servicios Eléctricos SEC",
            "itemListElement" => [
                [
                    "@type" => "Offer",
                    "itemOffered" => [
                        "@type" => "Service",
                        "name" => "Certificación TE1 SEC y Regularizaciones",
                        "description" => "Tramitación oficial ante la Superintendencia de Electricidad y Combustibles SEC."
                    ]
                ],
                [
                    "@type" => "Offer",
                    "itemOffered" => [
                        "@type" => "Service",
                        "name" => "Electricista de Urgencias 24 Horas",
                        "description" => "Atención de cortocircuitos y fallas eléctricas graves en todo Santiago."
                    ]
                ],
                [
                    "@type" => "Offer",
                    "itemOffered" => [
                        "@type" => "Service",
                        "name" => "Electricista a Domicilio",
                        "description" => "Reparaciones e instalaciones residenciales y comerciales."
                    ]
                ]
            ]
        ],
        "aggregateRating" => [
            "@type" => "AggregateRating",
            "ratingValue" => REVIEW_RATING,
            "bestRating" => BEST_RATING,
            "worstRating" => "1",
            "ratingCount" => REVIEW_COUNT,
            "reviewCount" => REVIEW_COUNT
        ],
        "areaServed" => [
            "Santiago", "Las Condes", "Providencia", "Puente Alto", "Maipú",
            "Ñuñoa", "La Florida", "Vitacura", "Lo Barnechea", "San Miguel",
            "Peñalolén", "Macul", "Estación Central", "Pudahuel", "Quilicura",
            "Independencia", "Recoleta", "Huechuraba", "La Reina", "Quinta Normal"
        ]
    ];

    return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

/**
 * Función para generar JSON-LD de FAQPage
 */
function get_schema_faq($faqs) {
    if (empty($faqs)) return '';

    $items = [];
    foreach ($faqs as $faq) {
        $items[] = [
            "@type" => "Question",
            "name" => $faq['question'],
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => $faq['answer']
            ]
        ];
    }

    $schema = [
        "@context" => "https://schema.org",
        "@type" => "FAQPage",
        "mainEntity" => $items
    ];

    return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}
