<?php include('incs/header_1.php'); ?>
<?php include('incs/side_1.php'); ?>
<?php include('incs/subheader.php'); ?>


                   <style>
                	    .c {
               text-transform: uppercase;
                 }
                
                </style>	


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
	<?php echo form_open("admin/cash_transaction_blanch"); ?>
	<div class="kt-portlet__head kt-portlet__head--lg">
		<div class="kt-portlet__head-label">
			<span class="kt-portlet__head-icon">
				<i class="kt-font-brand flaticon-list-2"></i>
			</span>
			<h3 class="kt-portlet__head-title">
				Today Cash Transaction
			</h3>
			&nbsp;&nbsp;&nbsp;&nbsp;
			
			
		</div>
		<div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
	<div class="kt-portlet__head-actions">

	
		&nbsp;
		
		<a href="" class="btn btn-info" class="kt-nav__link" data-toggle="modal" data-target="#kt_modal_4"><i class="kt-menu__link-icon flaticon2-search-1"></i>Filter</a>
		<a href="<?php echo base_url("admin/print_cash"); ?>" class="btn btn-brand btn-elevate btn-icon-sm" target="_blank">
			<i class="flaticon-technology"></i>
			Print
		</a>
	</div>	
</div>		</div>
	</div>
  <?php echo form_close(); ?>

	<div class="kt-portlet__body">
		<!--begin: Datatable -->
	
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
		<!--end: Datatable -->
	</div>
</div>
</div>
<!-- end:: Content -->
<!-- end:: Content -->
				</div>				
				
<?php include('incs/footer_1.php') ?>

<div class="modal fade" id="kt_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xs" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter cash transaction By</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open("admin/prev_cashtransaction"); ?>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6">
                            <label class="form-control-label">*Select Branch:</label>
                            <select class="form-control kt-selectpicker" id="blanch" name="blanch_id" required data-live-search="true">
                                   <option value="">Select Branch</option>
                                    <?php foreach ($blanch as $blanchs): ?>
                                <option value="<?php echo $blanchs->blanch_id; ?>"><?php echo $blanchs->blanch_name; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                               
                        </div>
               
                         <div class="col-lg-6">
                            <label class="form-control-label">*Select Employee:</label>
                            <select class="form-control" name="empl_id" id="empl" required>
                                 <option value="">Select Employee</option>
                                 <option value="all">ALL</option>
                                </select>
                               
                        </div>
                          <?php $date = date("Y-m-d"); ?>
                          <input type="hidden" name="comp_id" value="<?php echo $_SESSION['comp_id']; ?>">  
                        
                      <div class="col-lg-6">
                          <label class="form-control-label">*From:</label>
                            <input type="date" value="<?php echo $date; ?>" name="from" class="form-control">
                        </div>
                         <div class="col-lg-6">
                          <label class="form-control-label">*To:</label>
                            <input type="date" name="to" value="<?php echo $date; ?>" class="form-control">
                        </div>
                    </div>  
                 </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Filter Data</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!--end::Modal-->
</div>


<!--end::Modal-->



  <script>
$(document).ready(function(){
$('#blanch').change(function(){
var blanch_id = $('#blanch').val();
//alert(blanch_id)
if(blanch_id != ''){

$.ajax({
url:"<?php echo base_url(); ?>admin/fetch_employee_blanch",
method:"POST",
data:{blanch_id:blanch_id},
success:function(data)
{
$('#empl').html(data);
//$('#district').html('<option value="">All</option>');
}
});
}
else
{
$('#empl').html('<option value="">Select Employee</option>');
//$('#district').html('<option value="">All</option>');
}
});

});
</script>