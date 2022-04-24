<!DOCTYPE html>
<html lang="en">

<!-- HEADER -->

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/public/global_components/head.php'; ?>
    <link rel="stylesheet" href='/public/css/talent_page/talent_page.css'>
</head>

<!-- BODY -->

<body>
    <!-- NAVIGATION -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/public/global_components/navigation.php'; ?>

    <!-- HERO TALENT -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/public/pages/talent_page/components/hero_talent.php'; ?>

    <!-- FEATURED TALENT -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/public/pages/talent_page/components/featured_talent.php'; ?>

    <!-- FOOTER -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/public/global_components/footer.php'; ?>

    <!-- LOAD SCRIPTS -->
    <script src="../../js/hamburger_menu.js"></script>

</body>

</html>