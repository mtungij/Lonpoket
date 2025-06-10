<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title><?= htmlspecialchars($company_name) ?> - Cash Transactions</title>
    <style>
    html, body {
        margin: 0;
        padding: 0;
        width: 100%;
        box-sizing: border-box;
    }
    body { font-family: Arial, sans-serif; font-size: 12px; color: #333; }
    table { border-collapse: collapse; width: 100%; margin-top: 20px; }
    th, td { border: 1px solid #ccc; padding: 6px 8px; text-align: left; }
    th { background-color: #00bcd4; color: white; }
    tr:nth-child(even) { background-color: #f2f2f2; }
    .total-row { background-color: #ddd; font-weight: bold; }
    .text-right { text-align: right; }
</style>

</head>
<body>
    <!-- <h2></?= htmlspecialchars($company_name) ?></h2> -->
    <h3>Representatives Report</h3>

    <table>
        <thead>
            <tr>
                <th>Employee Name</th>
                <th>Payment Method</th>
                <th>Representative</th>
                <th>Customer Name</th>
                <th class="text-right">Deposit</th>
                <th>Wakala</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($grouped_payments)): ?>
                <?php foreach ($grouped_payments as $employee): ?>
                    <?php
                    // Calculate rowspan for employee
                    $rowCount = 0;
                    foreach ($employee['payment_methods'] as $method) {
                        foreach ($method['representatives'] as $rep) {
                            $rowCount += count($rep['customers']);
                        }
                    }
                    $firstEmpRow = true;
                    ?>
                    <?php foreach ($employee['payment_methods'] as $method): ?>
                        <?php
                        $methodRowCount = 0;
                        foreach ($method['representatives'] as $rep) {
                            $methodRowCount += count($rep['customers']);
                        }
                        $firstMethodRow = true;
                        ?>
                        <?php foreach ($method['representatives'] as $rep): ?>
                            <?php foreach ($rep['customers'] as $customer): ?>
                                <tr>
                                    <?php if ($firstEmpRow): ?>
                                        <td rowspan="<?= $rowCount; ?>"><?= htmlspecialchars($employee['empl_name']); ?></td>
                                        <?php $firstEmpRow = false; ?>
                                    <?php endif; ?>

                                    <?php if ($firstMethodRow): ?>
                                        <td rowspan="<?= $methodRowCount; ?>"><?= htmlspecialchars($method['method']); ?></td>
                                        <?php $firstMethodRow = false; ?>
                                    <?php endif; ?>

                                    <td><?= htmlspecialchars($rep['representative']); ?></td>
                                    <td><?= htmlspecialchars($customer['customer_name']); ?></td>
                                    <td class="text-right"><?= number_format($customer['deposit'], 2); ?></td>
                                    <td><?= htmlspecialchars($customer['wakala']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    <?php endforeach; ?>

                    <!-- Employee total -->
                    <tr class="total-row">
                        <td colspan="4" class="text-right">Total for <?= htmlspecialchars($employee['empl_name']); ?></td>
                        <td class="text-right"><?= number_format($employee['total_deposit'], 2); ?></td>
                        <td></td>
                    </tr>
                <?php endforeach; ?>

                <!-- General total -->
                <tr class="total-row">
                    <td colspan="4" class="text-right">General Total</td>
                    <td class="text-right"><?= number_format($generalTotalDeposit, 2); ?></td>
                    <td></td>
                </tr>
            <?php else: ?>
                <tr>
                    <td colspan="6" style="text-align:center;">No payments found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
