<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' : ''; ?>Admin Panel - Veddia Media</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Flatpickr Dark Theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/dark.css">

    <!-- Admin CSS -->
    <link rel="stylesheet" href="assets/css/admin.css">

    <style>
        /* Flatpickr Custom Styles - Soft Dark Theme */
        .flatpickr-calendar {
            background: #252a3d !important;
            border: 1px solid rgba(255, 255, 255, 0.08) !important;
            border-radius: 12px !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3) !important;
        }

        .flatpickr-months .flatpickr-month {
            background: transparent !important;
            padding: 8px 0 !important;
        }

        .flatpickr-current-month .flatpickr-monthDropdown-months,
        .flatpickr-current-month input.cur-year {
            color: #e2e8f0 !important;
            font-weight: 500 !important;
        }

        .flatpickr-day {
            color: #a1a9b8 !important;
            border-radius: 6px !important;
        }

        .flatpickr-day:hover {
            background: rgba(100, 116, 139, 0.25) !important;
            border-color: transparent !important;
        }

        .flatpickr-day.selected {
            background: #4a5568 !important;
            border-color: transparent !important;
            color: #f1f5f9 !important;
        }

        .flatpickr-day.today {
            border-color: #64748b !important;
        }

        .flatpickr-weekday {
            color: #6b7280 !important;
            font-weight: 500 !important;
        }

        .flatpickr-months .flatpickr-prev-month,
        .flatpickr-months .flatpickr-next-month {
            fill: #94a3b8 !important;
        }

        .flatpickr-months .flatpickr-prev-month:hover,
        .flatpickr-months .flatpickr-next-month:hover {
            fill: #cbd5e1 !important;
        }

        .numInputWrapper:hover {
            background: rgba(255, 255, 255, 0.05) !important;
        }

        .flatpickr-day.flatpickr-disabled {
            color: #475569 !important;
        }
    </style>
</head>

<body>
    <?php include 'includes/sidebar.php'; ?>

    <main class="admin-main">