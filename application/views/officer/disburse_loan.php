<?php include('incs/header_1.php'); ?>
<?php include('incs/side_1.php'); ?>
<?php include('incs/subheader.php'); ?>
	


<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">					
<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
   
</div>
<!-- end:: Subheader -->										
<!-- begin:: Content -->
<!-- begin:: Content -->


<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
	<!--begin::Portlet-->
	<?php if ($das = $this->session->flashdata('massage')): ?>
	  <div class="alert alert-success fade show alert-success" role="alert">
                            <div class="alert-icon"><i class="flaticon2-check-mark"></i></div>
                            <div class="alert-text"><?php echo $das;?></div>
                            <div class="alert-close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                </button>
                            </div>
                  </div>
         <?php endif; ?>

<div class="kt-portlet kt-portlet--mobile">
	<div class="kt-portlet__head kt-portlet__head--lg">
		<div class="kt-portlet__head-label">
			<span class="kt-portlet__head-icon">
				<i class="kt-font-brand flaticon-list-2"></i>
			</span>
			<h3 class="kt-portlet__head-title">
				Mikopo Iliyopitishwa
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
	<div class="kt-portlet__head-actions">

	
		&nbsp;
		<a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
			<i class="flaticon-technology"></i>
			Print
		</a>
	</div>	
</div>		</div>
	</div>

	<div class="kt-portlet__body">
		<!--begin: Datatable -->
		<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
									     <thead>
			  						          <tr>
		  							   <th><b>Jina La Mteja</b></th>
										<th><b>Tawi</b></th>
										<th><b>Mkopo Uliopitishwa</b></th>
										<th><b>Mkopo + Riba</b></th>
										<th><b>Rejesho</b></th>
										<th><b>Muda wa Marejesho</b></th>
										
										<th><b>Tarehe Ya Kupitishwa</b></th>
				  									
				  									
				  						         </tr>
						                  </thead>
			
								    <tbody>
                                        
									<?php foreach($disburse as $loan_aproveds): ?>
									          <tr>
				  					<td><?php echo $loan_aproveds->f_name; ?> <?php echo substr($loan_aproveds->m_name, 0,1); ?> <?php echo $loan_aproveds->l_name; ?></td>
				  					<td><?php echo $loan_aproveds->blanch_name; ?></td>
				  					<td><?php echo number_format($loan_aproveds->loan_aprove); ?></td>
				  					<td><?php echo number_format($loan_aproveds->loan_int); ?></td>
									  <td><?php echo number_format($loan_aproveds->restration); ?></td>
				  					<td>
    <?php
        $label = '';
        if ($loan_aproveds->day == 1) {
            $label = 'Siku';
        } elseif ($loan_aproveds->day == 7) {
            $label = 'Wiki';
        } elseif (in_array($loan_aproveds->day, [28, 29, 30, 31])) {
            $label = 'Mwezi';
        } else {
            $label = 'N/A';
        }

        echo $label . '(' . $loan_aproveds->session . ')';
    ?>
</td>

				  			
				  					
				  	
				  						<td>
				 <?php echo substr($loan_aproveds->loan_day, 0,10); ?>
				                        </td>
				                       
				  											  							
                                   </tr>

                       <?php endforeach; ?>
									
	                </tbody>
	                <tfoot>
                    <tr>
                                       <th><b>Jumla</b></th>
										<th><b></b></th>
										<th><b><?php echo number_format($total_loanDis->total_loan); ?>/=</b></th>
										<th><b><?php echo number_format($total_interest_loan->total_loan_int); ?>/=</b></th>
										<th><b></b></th>
										<th><b></b></th>
										<th><b></b></th>
										<th><b></b></th>
									
                    </tr>
                   </tfoot>
                   </table>
		<!--end: Datatable -->
	</div>
</div>
</div>
<!-- end:: Content -->
<!-- end:: Content -->
				</div>				
				
<?php include('incs/footer_1.php') ?>