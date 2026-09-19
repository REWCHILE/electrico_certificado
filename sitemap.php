<?php
/**
 * Generador Dinámico de Sitemap XML para Google Search Console
 */

require_once __DIR__ . '/config.php';
$comunas = require __DIR__ . '/data/comunas.php';

header("Content-Type: application/xml; charset=utf-8");

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <!-- Home Principal -->
    <url>
        <loc><?= BASE_URL ?>/</loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>

    <!-- Páginas Pilares de Servicios -->
    <url>
        <loc><?= BASE_URL ?>/servicios/certificacion-te1-sec</loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc><?= BASE_URL ?>/servicios/electricista-a-domicilio</loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc><?= BASE_URL ?>/servicios/urgencias-24-horas</loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc><?= BASE_URL ?>/servicios/tableros-y-aumento-capacidad</loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= BASE_URL ?>/servicios/</loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <!-- Hub de Comunas -->
    <url>
        <loc><?= BASE_URL ?>/comunas/</loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>

    <!-- Páginas Individuales de Comunas (SEO Local) -->
    <?php foreach ($comunas as $slug => $c): ?>
    <url>
        <loc><?= BASE_URL ?>/comunas/<?= $slug ?></loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.75</priority>
    </url>
    <?php endforeach; ?>

    <!-- Institucionales -->
    <url>
        <loc><?= BASE_URL ?>/nosotros</loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc><?= BASE_URL ?>/faq</loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc><?= BASE_URL ?>/contacto</loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
</urlset>
