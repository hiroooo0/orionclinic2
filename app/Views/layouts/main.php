<!doctype html>
<html lang="id" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Orion Clinic' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>
<body class="h-full bg-white">
    <div id="app" class="h-full w-full mx-auto bg-white relative overflow-hidden md:flex" style="max-height: 100%;">
        <?php if(!isset($hide_sidebar)): ?>
            <?= $this->include('components/sidebar') ?>
        <?php endif; ?>
        
        <!-- Render current view content -->
        <?= $this->renderSection('content') ?>

    </div>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Custom JS -->
    <script src="<?= base_url('script.js') ?>"></script>
    <script>
        // Highlighting active nav items dynamically
        $(document).ready(function() {
            var currentPath = window.location.pathname;
            $('.nav-item, aside nav button').each(function() {
                var onclick = $(this).attr('onclick');
                if (onclick && onclick.includes(currentPath)) {
                    if($(this).hasClass('nav-item')) {
                        $(this).addClass('active text-blue-600').removeClass('text-gray-400');
                    } else {
                        $(this).addClass('bg-blue-50 text-blue-600').removeClass('text-gray-600');
                    }
                }
            });
        });
    </script>
</body>
</html>
