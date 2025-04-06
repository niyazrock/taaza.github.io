<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free online calculators and tools for finance, health, education, and more.">
    <meta name="keywords" content="calculator, tools, finance, health, education, math, science">
    <meta name="author" content="MultiTool">
    <meta name="robots" content="index, follow">
    
    <title><?php echo isset($pageTitle) ? $pageTitle : 'MultiTool - Free Online Calculators'; ?></title>
    
    <!-- Favicon -->
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link href="/assets/css/style.css" rel="stylesheet">
    
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "MultiTool",
      "url": "https://yourdomain.com",
      "description": "Free online calculators and tools for various needs",
      "applicationCategory": "UtilitiesApplication",
      "operatingSystem": "Web"
    }
    </script>
</head>
<body>
    <!-- Navigation -->
    <?php include 'navigation.php'; ?>