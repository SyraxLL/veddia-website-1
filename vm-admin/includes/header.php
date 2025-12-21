<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Admin Panel'; ?> - Veddia Media</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #0f172a;
            color: #e2e8f0;
            min-height: 100vh;
        }

        .admin-layout {
            display: flex;
        }

        .admin-sidebar {
            width: 260px;
            background: #1e293b;
            min-height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
        }

        .admin-main {
            margin-left: 260px;
            flex: 1;
            padding: 30px;
            min-height: 100vh;
        }

        .sidebar-brand {
            padding: 25px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-brand h2 {
            font-size: 1.2rem;
            color: #14b8a6;
        }

        .sidebar-menu {
            list-style: none;
            padding: 20px 15px;
        }

        .sidebar-menu li {
            margin-bottom: 5px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 15px;
            border-radius: 8px;
            color: #94a3b8;
            text-decoration: none;
            transition: all 0.2s;
        }

        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background: rgba(20, 184, 166, 0.1);
            color: #14b8a6;
        }

        .sidebar-menu i {
            width: 20px;
            text-align: center;
        }

        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .admin-header h1 {
            font-size: 1.5rem;
            font-weight: 700;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            border: none;
            font-size: 0.9rem;
            transition: all 0.2s;
        }

        .btn-primary {
            background: linear-gradient(135deg, #14b8a6, #0ea5e9);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(20, 184, 166, 0.3);
        }

        .btn-outline {
            background: transparent;
            border: 1px solid #3d4657;
            color: #e2e8f0;
        }

        .btn-outline:hover {
            border-color: #14b8a6;
            color: #14b8a6;
        }

        .btn-danger {
            background: #ef4444;
            color: white;
        }

        .card {
            background: #1e293b;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .card-header {
            padding: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            font-weight: 600;
        }

        .card-body {
            padding: 20px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: #1e293b;
            border-radius: 12px;
            padding: 25px;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .stat-card h3 {
            font-size: 2rem;
            margin-bottom: 5px;
        }

        .stat-card p {
            color: #64748b;
            font-size: 0.9rem;
        }

        .stat-card.primary h3 {
            color: #14b8a6;
        }

        .stat-card.purple h3 {
            color: #8b5cf6;
        }

        .stat-card.blue h3 {
            color: #0ea5e9;
        }

        .stat-card.orange h3 {
            color: #f59e0b;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .table th {
            color: #64748b;
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
        }

        .table tr:hover {
            background: rgba(255, 255, 255, 0.02);
        }

        .badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .badge-success {
            background: rgba(20, 184, 166, 0.2);
            color: #14b8a6;
        }

        .badge-warning {
            background: rgba(245, 158, 11, 0.2);
            color: #f59e0b;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #94a3b8;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            background: #0f172a;
            border: 1px solid #3d4657;
            border-radius: 8px;
            color: #e2e8f0;
            font-size: 0.95rem;
        }

        .form-control:focus {
            outline: none;
            border-color: #14b8a6;
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .alert {
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .alert-success {
            background: rgba(20, 184, 166, 0.1);
            border: 1px solid #14b8a6;
            color: #14b8a6;
        }

        .alert-danger {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid #ef4444;
            color: #ef4444;
        }

        @media (max-width: 1200px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .admin-sidebar {
                display: none;
            }

            .admin-main {
                margin-left: 0;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <div class="admin-layout">
        <?php include __DIR__ . '/sidebar.php'; ?>
        <main class="admin-main">