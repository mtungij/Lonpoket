<?php $day = date('d-m-Y'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $compdata->comp_name; ?> | CASH TRANSACTION REPORT</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }
        th, td {
            padding: 6px;
            border: 1px solid #000;
            text-align: center;
        }
        th {
            background: #eee;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }
        .header img {
            height: 60px;
            margin-right: 15px;
        }
        .header .title {
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<!-- Company Logo + Name -->
<div class="header">
    <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Logo">
    <div class="title"><?php echo $compdata->comp_name; ?> | KUSANYO LA LEO REPORT</div>
</div>

<!-- Employee and Date Info -->


<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
    <thead>
        <tr>
            <th>S/No.</th>
            <th>JINA LA MTEJA</th>
            <th>REJESHO</th>
            <th>LIPWA</th>
            <th>LAZA</th>
            <th>ZIDI</th>
            <th>TAREHE</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        $total_rejesho = 0;
        $total_lipwa = 0;
        $total_laza = 0;
        $total_zidi = 0;

        foreach ($cash as $cashs): 
            if (empty($cashs->depost) || empty($cashs->customer_id)) {
                continue;
            }

            $rejesho = $cashs->restrations;
            $lipwa = $cashs->depost;
            $laza = ($lipwa < $rejesho) ? ($rejesho - $lipwa) : 0;
            $zidi = ($lipwa > $rejesho) ? ($lipwa - $rejesho) : 0;

            $total_rejesho += $rejesho;
            $total_lipwa += $lipwa;
            $total_laza += $laza;
            $total_zidi += $zidi;
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $cashs->f_name . ' ' . $cashs->m_name . ' ' . $cashs->l_name; ?></td>
            <td><?php echo number_format($rejesho); ?></td>
            <td><?php echo number_format($lipwa); ?></td>
            <td><?php echo $laza > 0 ? number_format($laza) : '-'; ?></td>
            <td><?php echo $zidi > 0 ? number_format($zidi) : '-'; ?></td>
            <td><?php echo date('d-m-Y', strtotime($cashs->lecod_day)); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <th>JUMLA</th>
            <th></th>
            <th><?php echo number_format($total_rejesho); ?></th>
            <th><?php echo number_format($total_lipwa); ?></th>
            <th><?php echo number_format($total_laza); ?></th>
            <th><?php echo number_format($total_zidi); ?></th>
            <th></th>
        </tr>
    </tfoot>
</table>

</body>
</html>
