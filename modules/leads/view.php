<?php
$stmt = $pdo->query("SELECT * FROM leads ORDER BY created_at DESC");
$leads = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<table class="table table-bordered text-end">
    <thead>
        <tr>
            <th>תאריך</th>
            <th>סטטוס</th>
            <th>טלפון</th>
            <th>שם</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($leads)): ?>
            <?php foreach ($leads as $lead): ?>
                <tr>
                    <td><?php echo date('d/m/Y', strtotime(htmlspecialchars($lead['created_at']))); ?></td>
                    <td><?php echo htmlspecialchars($lead['status']); ?></td>
                    <td><?php echo htmlspecialchars($lead['phone']); ?></td>
                    <td><?php echo htmlspecialchars($lead['name']); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">אין לידים במערכת כרגע.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
