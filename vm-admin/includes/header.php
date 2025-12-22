<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Admin Panel'; ?> - Veddia Media</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f1f5f9;
            color: #1e293b;
            min-height: 100vh;
            position: relative;
        }

        /* Subtle Grid Pattern */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                linear-gradient(rgba(99, 102, 241, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(99, 102, 241, 0.03) 1px, transparent 1px);
            background-size: 50px 50px;
            pointer-events: none;
            z-index: 0;
        }

        /* ==========================================
           ADMIN LAYOUT
           ========================================== */

        .admin-layout {
            display: flex;
            position: relative;
            z-index: 1;
        }

        /* ==========================================
           SIDEBAR - Premium Design
           ========================================== */

        .admin-sidebar {
            width: 280px;
            background: linear-gradient(180deg, rgba(30, 41, 59, 0.95) 0%, rgba(15, 23, 42, 0.98) 100%);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            min-height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            border-right: 1px solid rgba(255, 255, 255, 0.05);
            display: flex;
            flex-direction: column;
            z-index: 100;
            box-shadow: 4px 0 24px rgba(0, 0, 0, 0.3);
        }

        .sidebar-brand {
            padding: 28px 24px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.06);
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .sidebar-brand-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 24px rgba(99, 102, 241, 0.35);
        }

        .sidebar-brand-icon i {
            font-size: 1.25rem;
            color: white;
        }

        .sidebar-brand-text h2 {
            font-size: 1.15rem;
            font-weight: 800;
            background: linear-gradient(135deg, #e2e8f0 0%, #94a3b8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -0.02em;
        }

        .sidebar-brand-text span {
            font-size: 0.75rem;
            color: #64748b;
            font-weight: 500;
        }

        /* Sidebar Menu */
        .sidebar-menu {
            list-style: none;
            padding: 20px 16px;
            flex: 1;
        }

        .sidebar-menu-label {
            padding: 12px 12px 8px;
            font-size: 0.7rem;
            font-weight: 700;
            color: #475569;
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }

        .sidebar-menu li {
            margin-bottom: 4px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 14px 16px;
            border-radius: 12px;
            color: #94a3b8;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            font-weight: 500;
            font-size: 0.925rem;
            position: relative;
            overflow: hidden;
        }

        .sidebar-menu a::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 3px;
            height: 100%;
            background: linear-gradient(180deg, #6366f1, #8b5cf6);
            border-radius: 0 3px 3px 0;
            transform: scaleY(0);
            transition: transform 0.3s ease;
        }

        .sidebar-menu a:hover {
            background: rgba(99, 102, 241, 0.08);
            color: #e2e8f0;
            transform: translateX(4px);
        }

        .sidebar-menu a.active {
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.15) 0%, rgba(139, 92, 246, 0.1) 100%);
            color: #a5b4fc;
        }

        .sidebar-menu a.active::before {
            transform: scaleY(1);
        }

        .sidebar-menu a.active i {
            color: #818cf8;
        }

        .sidebar-menu i {
            width: 22px;
            text-align: center;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        /* Menu Divider */
        .menu-divider {
            margin: 20px 12px;
            border: none;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.08), transparent);
        }

        /* Sidebar Footer */
        .sidebar-footer {
            padding: 20px 16px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        .sidebar-footer a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            border-radius: 10px;
            color: #ef4444;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .sidebar-footer a:hover {
            background: rgba(239, 68, 68, 0.1);
        }

        /* ==========================================
           MAIN CONTENT AREA
           ========================================== */

        .admin-main {
            margin-left: 280px;
            flex: 1;
            padding: 32px;
            min-height: 100vh;
            position: relative;
        }

        /* Top Header */
        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 36px;
            padding-bottom: 24px;
            border-bottom: 1px solid #e2e8f0;
        }

        .admin-header h1 {
            font-size: 1.75rem;
            font-weight: 800;
            color: #1e293b;
            letter-spacing: -0.02em;
        }

        .header-actions {
            display: flex;
            gap: 12px;
        }

        /* ==========================================
           BUTTONS - Premium Style
           ========================================== */

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 24px;
            border-radius: 12px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            border: none;
            font-size: 0.9rem;
            font-family: inherit;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.15), transparent);
            transition: left 0.5s ease;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(99, 102, 241, 0.4);
        }

        .btn-secondary {
            background: linear-gradient(135deg, #14b8a6 0%, #0891b2 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(20, 184, 166, 0.3);
        }

        .btn-secondary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(20, 184, 166, 0.4);
        }

        .btn-outline {
            background: white;
            border: 1px solid #e2e8f0;
            color: #475569;
        }

        .btn-outline:hover {
            border-color: #6366f1;
            background: rgba(99, 102, 241, 0.05);
            color: #6366f1;
        }

        .btn-danger {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(239, 68, 68, 0.3);
        }

        .btn-danger:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(239, 68, 68, 0.4);
        }

        .btn-sm {
            padding: 8px 16px;
            font-size: 0.8rem;
            border-radius: 8px;
        }

        /* ==========================================
           CARDS - Glassmorphism
           ========================================== */

        .card {
            background: white;
            border-radius: 20px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .card:hover {
            border-color: rgba(99, 102, 241, 0.3);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        }

        .card-header {
            padding: 24px;
            border-bottom: 1px solid #f1f5f9;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 1rem;
            color: #1e293b;
        }

        .card-header i {
            color: #6366f1;
            font-size: 1.1rem;
        }

        .card-body {
            padding: 24px;
        }

        /* ==========================================
           STATS GRID - Modern Cards
           ========================================== */

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
            margin-bottom: 36px;
        }

        .stat-card {
            background: white;
            border-radius: 20px;
            padding: 28px;
            border: 1px solid #e2e8f0;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            filter: blur(60px);
            opacity: 0.15;
            transition: opacity 0.4s ease;
        }

        .stat-card:hover {
            transform: translateY(-8px);
            border-color: rgba(99, 102, 241, 0.3);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .stat-card:hover::before {
            opacity: 0.25;
        }

        .stat-card-icon {
            width: 56px;
            height: 56px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            font-size: 1.4rem;
            transition: transform 0.4s ease;
        }

        .stat-card:hover .stat-card-icon {
            transform: scale(1.1);
        }

        .stat-card h3 {
            font-size: 2.25rem;
            font-weight: 800;
            margin-bottom: 6px;
            letter-spacing: -0.02em;
        }

        .stat-card p {
            color: #64748b;
            font-size: 0.9rem;
            font-weight: 500;
        }

        /* Stat Card Colors */
        .stat-card.primary::before {
            background: #6366f1;
        }

        .stat-card.primary .stat-card-icon {
            background: rgba(99, 102, 241, 0.1);
            color: #6366f1;
        }

        .stat-card.primary h3 {
            color: #4f46e5;
        }

        .stat-card.purple::before {
            background: #8b5cf6;
        }

        .stat-card.purple .stat-card-icon {
            background: rgba(139, 92, 246, 0.1);
            color: #8b5cf6;
        }

        .stat-card.purple h3 {
            color: #7c3aed;
        }

        .stat-card.orange::before {
            background: #f59e0b;
        }

        .stat-card.orange .stat-card-icon {
            background: rgba(245, 158, 11, 0.1);
            color: #f59e0b;
        }

        .stat-card.orange h3 {
            color: #d97706;
        }

        .stat-card.blue::before {
            background: #0ea5e9;
        }

        .stat-card.blue .stat-card-icon {
            background: rgba(14, 165, 233, 0.1);
            color: #0ea5e9;
        }

        .stat-card.blue h3 {
            color: #0284c7;
        }

        /* ==========================================
           TABLE - Modern Design
           ========================================== */

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 18px 20px;
            text-align: left;
            border-bottom: 1px solid rgba(255, 255, 255, 0.04);
        }

        .table th {
            color: #64748b;
            font-weight: 600;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            background: rgba(0, 0, 0, 0.2);
        }

        .table tbody tr {
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background: rgba(99, 102, 241, 0.05);
        }

        .table td {
            font-size: 0.925rem;
        }

        /* ==========================================
           BADGES
           ========================================== */

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 14px;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.02em;
        }

        .badge-success {
            background: rgba(16, 185, 129, 0.15);
            color: #34d399;
            border: 1px solid rgba(16, 185, 129, 0.2);
        }

        .badge-warning {
            background: rgba(245, 158, 11, 0.15);
            color: #fbbf24;
            border: 1px solid rgba(245, 158, 11, 0.2);
        }

        .badge-danger {
            background: rgba(239, 68, 68, 0.15);
            color: #f87171;
            border: 1px solid rgba(239, 68, 68, 0.2);
        }

        .badge-info {
            background: rgba(99, 102, 241, 0.15);
            color: #a5b4fc;
            border: 1px solid rgba(99, 102, 241, 0.2);
        }

        /* ==========================================
           FORM ELEMENTS
           ========================================== */

        .form-group {
            margin-bottom: 24px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: #94a3b8;
            font-size: 0.875rem;
        }

        .form-control {
            width: 100%;
            padding: 14px 18px;
            background: rgba(15, 23, 42, 0.6);
            border: 2px solid rgba(100, 116, 139, 0.2);
            border-radius: 12px;
            color: #e2e8f0;
            font-size: 0.95rem;
            font-family: inherit;
            transition: all 0.3s ease;
        }

        .form-control::placeholder {
            color: #475569;
        }

        .form-control:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.15);
            background: rgba(15, 23, 42, 0.8);
        }

        textarea.form-control {
            min-height: 160px;
            resize: vertical;
        }

        select.form-control {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%2394a3b8'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 24px;
            padding-right: 48px;
        }

        /* ==========================================
           ALERTS
           ========================================== */

        .alert {
            padding: 18px 24px;
            border-radius: 14px;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 14px;
            font-weight: 500;
        }

        .alert i {
            font-size: 1.25rem;
        }

        .alert-success {
            background: rgba(16, 185, 129, 0.1);
            border: 1px solid rgba(16, 185, 129, 0.25);
            color: #34d399;
        }

        .alert-danger {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.25);
            color: #f87171;
        }

        .alert-warning {
            background: rgba(245, 158, 11, 0.1);
            border: 1px solid rgba(245, 158, 11, 0.25);
            color: #fbbf24;
        }

        .alert-info {
            background: rgba(99, 102, 241, 0.1);
            border: 1px solid rgba(99, 102, 241, 0.25);
            color: #a5b4fc;
        }

        /* ==========================================
           EMPTY STATE
           ========================================== */

        .empty-state {
            text-align: center;
            padding: 60px 30px;
        }

        .empty-state-icon {
            width: 80px;
            height: 80px;
            background: rgba(99, 102, 241, 0.1);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
        }

        .empty-state-icon i {
            font-size: 2rem;
            color: #6366f1;
        }

        .empty-state h3 {
            font-size: 1.25rem;
            color: #e2e8f0;
            margin-bottom: 8px;
        }

        .empty-state p {
            color: #64748b;
            margin-bottom: 24px;
        }

        /* ==========================================
           RESPONSIVE
           ========================================== */

        @media (max-width: 1400px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 1024px) {
            .admin-sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }

            .admin-sidebar.active {
                transform: translateX(0);
            }

            .admin-main {
                margin-left: 0;
            }
        }

        @media (max-width: 768px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .admin-main {
                padding: 20px;
            }

            .admin-header {
                flex-direction: column;
                gap: 16px;
                align-items: flex-start;
            }

            .table-responsive {
                overflow-x: auto;
            }
        }
    </style>
</head>

<body>
    <div class="admin-layout">
        <?php include __DIR__ . '/sidebar.php'; ?>
        <main class="admin-main">