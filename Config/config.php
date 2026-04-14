<?php
if (!defined('BASE_URL')) {
    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];

    if ($host === 'localhost') {
        // Use 'assets' lowercase to match your localhost setup if needed
        $basePath = $protocol . $host . '/PanchTatva/assets/';
        $pagePath = $protocol . $host . '/PanchTatva/api/';
    } else {
        // ON VERCEL: BASE_URL should just point to the Assets folder
        $basePath = $protocol . $host . '/Assets/'; 
        $pagePath = $protocol . $host . '/';
    }

    define('BASE_URL', $basePath);
    define('PAGE_URL', $pagePath);
}
?>