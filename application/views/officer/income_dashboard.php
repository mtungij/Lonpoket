<?php include('incs/header_1.php'); ?>
<?php include('incs/side_1.php'); ?>
<?php include('incs/subheader.php'); ?>
	
<style>
    .select2-container .select2-selection--single{
    height:37px !important;
}
.select2-container--default .select2-selection--single{
         border: 1px solid #ccc !important; 
     border-radius: 0px !important; 
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
<div class="row">
	<div class="col-lg-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Income Dashboard
					</h3>
				</div>
			</div>
			<!--begin::Form-->
			<!-- <form method="post" action="ss" class="kt-form kt-form--label-right" id="kt_form_2"> -->
				<?php echo form_open("oficer/create_income_detail",['class'=>'kt-form kt-form--label-right','novalidate']); ?>
				<div class="kt-portlet__body">
					<div class="kt-section">
						<div class="kt-section__content">
							<div class="form-group form-group-last row">
								<!-- <div class="col-lg-4 form-group-sub">
									<label class="form-control-label">*Customer:</label>
									<select type="number" name="inc_id" class="form-control">
										<option value="">Select Customer</option>
										<?php foreach ($customer as $customers): ?>
										<option value="<?php echo $customers->customer_id; ?>"><?php echo $customers->f_name; ?> <?php echo $customers->m_name; ?> <?php echo $customers->l_name; ?></option>
										<?php endforeach; ?>
									</select>
								</div> -->

								
				
				<div class="col-lg-6 form-group-sub">
					<label class="form-control-label">*Customer:</label>
				<select class="form-control kt-selectpicker" name="customer_id" id="customer" required data-live-search="true">
						<option value="">Select customer</option>
						<?php foreach ($customer as $customers): ?>
					<option value="<?php echo $customers->customer_id; ?>"><?php echo $customers->f_name; ?> <?php echo $customers->m_name; ?> <?php echo $customers->l_name; ?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="col-lg-6 form-group-sub">
					<label class="form-control-label">*Active Loan:</label>
				<select class="form-control select2" name="loan_id" id="loan" required>
						<option value="">Select Active Loan</option>
					</select>
				</div>

					<div class="col-lg-6 form-group-sub">
					<label class="form-control-label">*Income Type:</label>
				<select class="form-control kt-selectpicker" name="inc_id" required data-live-search="true">
				<option value="">Select Income type</option>
					<?php foreach ($income as $incomes): ?>
				   <option value="<?php echo $incomes->inc_id; ?>"><?php echo $incomes->inc_name; ?></option>
					<?php endforeach; ?>
					</select>
				   </div>


								<div class="col-lg-6 form-group-sub">
									<label class="form-control-label">*Income Amount</label>
									<input type="number" name="receve_amount" autocomplete="off" class="form-control">
								</div>
								<input type="hidden" name="comp_id" value="<?php echo $empl_data->comp_id; ?>">
								<input type="hidden" name="blanch_id" value="<?php echo $empl_data->blanch_id; ?>">
								<input type="hidden" name="empl" value="<?php echo $_SESSION['username']; ?>">
								<?php $day = date("Y-m-d"); ?>
								<input type="hidden" name="receve_day" value="<?php echo $day;?>">
								<div class="col-lg-4 form-group-sub">
								<!-- 	<label  class="form-control-label">* Branch Phone Number:</label>
									<input type="number" required class="form-control" placeholder="Blanch phone number" name="blanch_no" placeholder="" value=""> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<div class="row">
							<div class="col-lg-12">
								<div class="text-center">
								<button type="submit" class="btn btn-brand  btn-elevate btn-pill btn-sm">Save</button>
								<button type="reset" class="btn btn-danger btn-elevate btn-pill btn-sm">Cancel</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php echo form_close(); ?>
			<!--end::Form-->
		</div>
		<!--end::Portlet-->
	</div>
</div>



<div class="kt-portlet kt-portlet--mobile">
	<div class="kt-portlet__head kt-portlet__head--lg">
		<div class="kt-portlet__head-label">
			<span class="kt-portlet__head-icon">
				<i class="kt-font-brand flaticon-list-2"></i>
			</span>
			<h3 class="kt-portlet__head-title">
				Today Income List
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
	<div class="kt-portlet__head-actions">

	
		<!-- &nbsp;
		<a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
			<i class="la la-plus"></i>
			New Record
		</a> -->
	</div>	
</div>		</div>
	</div>

	<div class="kt-portlet__body">
		<!--begin: Datatable -->
		<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
									     <thead>
			  						          <tr>
				  						
												<th>Customer Name</th>
											<!-- 	<th>Blanch Name</th> -->
												<th>Incomes Type</th>
												<th>Income Amount</th>
												<!-- <th>User Employee</th> -->
												<th>Date</th>
												<th>Action</th>
				  									
				  									
				  						         </tr>
						                  </thead>
			
								    <tbody>
                                        <?php //$no = 1; ?>
									<?php foreach ($detail_income as $detail_incomes): ?>
									          <tr>
				  			 <td><?php echo $detail_incomes->f_name; ?> <?php echo $detail_incomes->m_name; ?> <?php echo $detail_incomes->l_name; ?></td> 
				  			 <!-- <td><?php //echo $detail_incomes->blanch_name; ?></td> -->
				  			 <td><?php echo $detail_incomes->inc_name; ?></td> 
				  			 <td><?php echo number_format($detail_incomes->receve_amount); ?></td> 
				  			  
				  			 
				  			 <!-- <td><?php //echo $detail_incomes->empl; ?></td> --> 
				  			 <td><?php echo $detail_incomes->receve_day; ?></td> 
				  					
				  				<td>	
				  			<div class="dropdown dropdown-inline">
			<button type="button" class="btn btn-info  btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class=""></i> Action  	
			</button>
			<div class="dropdown-menu dropdown-menu-right">
				<ul class="kt-nav">
					<li class="kt-nav__section kt-nav__section--first">
						<span class="kt-nav__section-text">Choose an option</span>
					</li>
					
					<li class="kt-nav__item">
						<a href="<?php echo base_url("oficer/delete_receved/{$detail_incomes->receved_id}") ?>" class="kt-nav__link" onclick="return confirm('Are you sure?')">
							<i class="kt-nav__link-icon flaticon-delete"></i>
							<span class="kt-nav__link-text">Delete</span>
						</a>
					</li>
					
				</ul>
			</div>
	</div>
</td>			  											  							
</tr>


<!--end::Modal-->
<?php endforeach; ?>
									
	                </tbody>
	                <tfoot>
                    <tr>
					<th>TOTAL</th>
					<!-- <th></th> -->
					<th></th>
					<th><?php echo number_format($total_receved->total_receved); ?></th>
					<!-- <th></th> -->
					<th></th>
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


<script>
$(document).ready(function(){
$('#blanch').change(function(){
var blanch_id = $('#blanch').val();
//alert(blanch_id)
if(blanch_id != ''){

$.ajax({
url:"<?php echo base_url(); ?>admin/fetch_ward_data",
method:"POST",
data:{blanch_id:blanch_id},
success:function(data)
{
$('#customer').html(data);
//$('#district').html('<option value="">All</option>');
}
});
}
else
{
$('#customer').html('<option value="">Select customer</option>');
//$('#district').html('<option value="">All</option>');
}
});



$('#customer').change(function(){
var customer_id = $('#customer').val();
 //alert(customer_id)
if(customer_id != '')
{
$.ajax({
url:"<?php echo base_url(); ?>oficer/fetch_loanActive",
method:"POST",
data:{customer_id:customer_id},
success:function(data)
{
$('#loan').html(data);
//$('#malipo_name').html('<option value="">select center</option>');
}
});
}
else
{
$('#loan').html('<option value="">Select Active loan</option>');
//$('#malipo_name').html('<option value="">chagua vipimio</option>');
}
});

// $('#social').change(function(){
//  var district_id = $('#social').val();
//  if(district_id != '')
//  {
//   $.ajax({
//    url:"<?php echo base_url(); ?>user/fetch_data_malipo",
//    method:"POST",
//    data:{district_id:district_id},
//    success:function(data)
//    {
//     $('#malipo_name').html(data);
//     //$('#malipo').html('<option value="">chagua malipo</option>');
//    }
//   });
//  }
//  else
//  {
//   //$('#vipimio').html('<option value="">chagua vipimio</option>');
//   $('#malipo_name').html('<option value="">chagua vipimio</option>');
//  }
// });


});
</script>

<script>
    $('.select2').select2();
</script>