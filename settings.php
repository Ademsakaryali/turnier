<?php
require_once __DIR__ . '/assets/php/settings_logic.php';
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Einstellungen - Fußball</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="assets/css/settings.css" rel="stylesheet">
</head>
<body>
    <div class="dashboard-container">
        <?php include __DIR__ . '/includes/sidebar.php'; ?>

        <div class="main-content">
            <nav class="top-nav">
                <button id="sidebar-toggle" class="sidebar-toggle">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="user-info">
                    <span>Willkommen, <?php echo htmlspecialchars($userEmail); ?></span>
                    <span class="role-badge"><?php echo htmlspecialchars($userRole); ?></span>
                </div>
            </nav>

            <div class="settings-content">
                <h1>Einstellungen</h1>

                <div class="settings-layout">
                    <?php include __DIR__ . '/includes/settings_sidebar.php'; ?>

                    <div class="settings-main">
                        <?php
                        $settingsPage = isset($_GET['page']) ? $_GET['page'] : 'user_management';
                        $validPages = ['user_management', 'team_managers', 'players', 'roles', 'general_settings'];

                        if (in_array($settingsPage, $validPages)) {
                            include __DIR__ . "/includes/settings/{$settingsPage}.php";
                        } else {
                            echo "<p>Die angeforderte Seite wurde nicht gefunden.</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="assets/js/settings.js"></script>
    <script type="module" src="assets/js/user-management.js"></script>
</body>
</html>

