<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Pro-Manage | Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root { --sidebar-bg: #2c3e50; --main-bg: #f4f7f6; --accent: #3498db; }
        body { font-family: 'Segoe UI', sans-serif; margin: 0; display: flex; background: var(--main-bg); }
        
        /* Sidebar */
        .sidebar { width: 250px; height: 100vh; background: var(--sidebar-bg); color: white; position: fixed; }
        .sidebar h2 { text-align: center; padding: 20px; border-bottom: 1px solid #3e4f5f; }
        .sidebar-menu { list-style: none; padding: 0; }
        .sidebar-menu li { padding: 15px 25px; cursor: pointer; transition: 0.3s; }
        .sidebar-menu li:hover { background: var(--accent); }
        .sidebar-menu i { margin-right: 10px; }

        /* Main Content */
        .content { margin-left: 250px; padding: 30px; width: 100%; }
        .stats-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 30px; }
        .stat-card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border-top: 4px solid var(--accent); }
        
        .project-list { background: white; padding: 20px; border-radius: 8px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { text-align: left; padding: 12px; border-bottom: 1px solid #eee; }
        .status { padding: 5px 10px; border-radius: 15px; font-size: 0.8rem; }
        .status-doing { background: #fff3cd; color: #856404; }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Pro-Manage</h2>
    <ul class="sidebar-menu">
        <li><i class="fas fa-home"></i> Dashboard</li>
        <li><i class="fas fa-briefcase"></i> Mes Projets</li>
        <li><i class="fas fa-plus-circle"></i> Nouveau Projet</li>
        <li><i class="fas fa-cog"></i> Paramètres</li>
    </ul>
</div>

<div class="content">
    <h1>Bienvenue, Maleèk !</h1>
    
    <div class="stats-grid">
        <div class="stat-card">
            <h3>Projets Actifs</h3>
            <p style="font-size: 1.5rem; font-weight: bold; color: var(--accent);">05</p>
        </div>
        <div class="stat-card">
            <h3>Budget Total</h3>
            <p style="font-size: 1.5rem; font-weight: bold; color: #27ae60;">2,500 TND</p>
        </div>
        <div class="stat-card">
            <h3>Tâches à faire</h3>
            <p style="font-size: 1.5rem; font-weight: bold; color: #e67e22;">12</p>
        </div>
    </div>

    <div class="project-list">
        <h2>Derniers Projets</h2>
        <table>
            <thead>
                <tr>
                    <th>Nom du Projet</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Développement Site Web E-commerce</td>
                    <td>15/05/2026</td>
                    <td><span class="status status-doing">En cours</span></td>
                    <td><button>Gérer</button></td>
                </tr>
                </tbody>
        </table>
    </div>
</div>

</body>
</html>