<?php
require_once 'assets/php/admin_dashboard_logic.php';
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Fußball</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="assets/css/admin_dashboard.css" rel="stylesheet">
</head>
<body>
    <div class="dashboard-container">
        <!-- Include Sidebar -->
        <?php include 'includes/sidebar.php'; ?>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Top Navigation -->
            <nav class="top-nav">
                <button id="sidebar-toggle" class="sidebar-toggle">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="user-info">
                    <span>Willkommen, <?php echo htmlspecialchars($userEmail); ?></span>
                    <span class="role-badge"><?php echo htmlspecialchars($userRole); ?></span>
                </div>
            </nav>

            <!-- Dashboard Content -->
            <div class="dashboard-content">
                <h1>Dashboard Übersicht</h1>
                
                <!-- Statistics Cards -->
                <div class="stats-container">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <h3>Teams</h3>
                            <p><?php echo $stats['teams']; ?></p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-running"></i>
                        </div>
                        <div class="stat-info">
                            <h3>Spieler</h3>
                            <p><?php echo $stats['players']; ?></p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <div class="stat-info">
                            <h3>Aktive Spieler</h3>
                            <p><?php echo $stats['active_players']; ?></p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <div class="stat-info">
                            <h3>Benutzer</h3>
                            <p><?php echo $stats['users']; ?></p>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="quick-actions">
                    <h2>Schnellzugriff</h2>
                    <div class="action-buttons">
                        <a href="add_team" class="action-button">
                            <i class="fas fa-plus-circle"></i>
                            Team hinzufügen
                        </a>
                        <a href="add_player" class="action-button">
                            <i class="fas fa-user-plus"></i>
                            Spieler hinzufügen
                        </a>
                        <a href="blankett" class="action-button">
                            <i class="fas fa-file-alt"></i>
                            Blankett erstellen
                        </a>
                        <a href="settings" class="action-button">
                            <i class="fas fa-cog"></i>
                            Einstellungen
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/admin_dashboard.js"></script>
</body>
</html>

