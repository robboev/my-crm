<?php
require_once 'config.php';
require_once 'auth/session.php';
include 'templates/header.php';
?>

<div class="d-flex flex-row-reverse">
    <?php include 'templates/sidebar.php'; ?>

    <div class="flex-grow-1 p-4 text-end">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">ברוכים הבאים למערכת CRM</h2>
            <div>
                <a href="/modules/calendar/view.php" class="btn btn-outline-primary me-2">יומן</a>
                <a href="/modules/tasks/view.php" class="btn btn-outline-secondary">משימות</a>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">רשימת לידים</h5>
            <div>
                <a href="/modules/leads/add.php" class="btn btn-sm btn-success me-2">+ הוסף ליד חדש</a>
                <a href="/modules/leads/import.php" class="btn btn-sm btn-success">ייבוא CSV</a>
                <button class="btn btn-outline-secondary btn-sm ms-2">הוסף/הסר עמודות</button>
            </div>
        </div>

        <?php include 'modules/leads/view.php'; ?>
    </div>
</div>

<?php include 'templates/footer.php'; ?>
