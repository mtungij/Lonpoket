


 
<?php
include_once APPPATH . "views/partials/officerheader.php";

// --- DUMMY DATA - REMOVE AND LOAD FROM YOUR CONTROLLER ---
// Controller should pass $share, an array of shareholder objects.
// Each object should have 'share_id', 'share_name', 'share_mobile', 'share_email', 'share_sex', 'share_dob'.
// if (!isset($share)) {
//     $share = [
//         (object)['share_id' => 1, 'share_name' => 'Alice Wonderland', 'share_mobile' => '0712345001', 'share_email' => 'alice@example.com', 'share_sex' => 'female', 'share_dob' => '1985-06-15'],
//         (object)['share_id' => 2, 'share_name' => 'Bob The Builder', 'share_mobile' => '0712345002', 'share_email' => 'bob@example.com', 'share_sex' => 'male', 'share_dob' => '1978-11-02'],
//     ];
// }
// --- END DUMMY DATA ---header.php
?>

<!-- ========== MAIN CONTENT BODY ========== -->
<div class="w-full lg:ps-64">
    <div class="p-4 sm:p-6 space-y-6">

        <!-- Page Title / Subheader -->
        <div class="mb-6">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 dark:text-gray-200">
               Loan Application Form
            </h2>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
			Loan Application Form.
            </p>
        </div>
        <!-- End Page Title / Subheader -->
        <?php if ($this->session->flashdata('error')): ?>
  <div id="flash-error-toast" class="max-w-xs bg-red-500 text-sm text-red-500 rounded-xl shadow-lg" role="alert" tabindex="-1" aria-labelledby="hs-toast-solid-color-red-label">
    <div id="hs-toast-solid-color-red-label" class="flex p-4">
      <?= htmlspecialchars($this->session->flashdata('error'), ENT_QUOTES, 'UTF-8'); ?>

      <div class="ms-auto">
        <button type="button" onclick="document.getElementById('flash-error-toast').style.display='none'" class="inline-flex shrink-0 justify-center items-center size-5 rounded-lg text-white hover:text-white opacity-50 hover:opacity-100 focus:outline-hidden focus:opacity-100" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php if ($this->session->flashdata('massage')): ?>
    <div class="max-w-xs bg-white border border-gray-200 rounded-xl shadow-lg dark:bg-neutral-800 dark:border-neutral-700" role="alert" tabindex="-1" aria-labelledby="hs-toast-success-example-label">
    <div class="flex p-4">
      <div class="shrink-0">
        <svg class="shrink-0 size-4 text-teal-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
        </svg>
      </div>
      <div class="ms-3">
        <p id="hs-toast-success-example-label" class="text-sm text-gray-700 dark:text-neutral-400">
        <?= $this->session->flashdata('massage'); ?>
        </p>
      </div>
    </div>
  </div>
<?php endif; ?>

            <!-- FALSE -->
      
        <!-- Card: Register Share Holder Form -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700">
            <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-6">
                    Loan Application Form
                </h3>

			
<?php echo form_open("oficer/create_loanapplication/{$customer->customer_id}", ['novalidate' => true]); ?>


<div class="grid sm:grid-cols-12 gap-4 sm:gap-6">

    <!-- Loan Product -->
    <div class="sm:col-span-4">
        <label for="branchSelect" class="block text-sm font-medium mb-2 dark:text-gray-300">* Loan Product Name:</label>
        <select id="branchSelect" name="category_id" class="py-3 px-4 pe-9 block w-full bg-cyan-600 border-gray-200 rounded-lg text-sm select2">
            <option value="">Select Loan Product</option>
            <?php foreach ($loan_category as $loan_categorys): ?>
                <option value="<?php echo $loan_categorys->category_id; ?>" <?php echo set_select('category_id', $loan_categorys->category_id); ?>>
                    <?php echo $loan_categorys->loan_name; ?> / <?php echo $loan_categorys->loan_price; ?> - <?php echo $loan_categorys->loan_perday; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <?php echo form_error("category_id", '<p class="text-xs text-red-600 mt-2">', '</p>'); ?>
    </div>

    <!-- Group Name (optional) -->
    <!--
    <div class="sm:col-span-4">
        <label for="employeeSelect" class="block text-sm font-medium mb-2 dark:text-gray-300">* Select Group Name:</label>
        <select id="employeeSelect" name="group_id" class="py-3 px-4 pe-9 block w-full bg-cyan-600 border-gray-200 rounded-lg text-sm select2">
            <option value="">Select Group Name</option>
            <?php foreach ($group as $groups): ?>
                <option value="<?php echo $groups->group_id; ?>" <?php echo set_select('group_id', $groups->group_id); ?>>
                    <?php echo $groups->group_name; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <?php echo form_error("group_id", '<p class="text-xs text-red-600 mt-2">', '</p>'); ?>
    </div>
    -->

    <!-- Employee -->
    <div class="sm:col-span-4">
        <label for="StaffSelect" class="block text-sm font-medium mb-2 dark:text-gray-300">* Select Employee:</label>
        <select id="StaffSelect" name="empl_id" class="py-2.5 px-4 block w-full border-gray-200 rounded-lg text-sm">
           
            <?php foreach ($empl_blanch as $empl_blanchs): ?>
                <option value="">select officer</option>
				<option value="<?php echo $empl_blanchs->empl_id; ?>"><?php echo $empl_blanchs->empl_name; ?></option>
				<?php endforeach; ?>
         
        </select>
        <?php echo form_error("empl_id", '<p class="text-xs text-red-600 mt-2">', '</p>'); ?>
    </div>

    <!-- Hidden Inputs -->
    <input type="hidden" name="comp_id" value="<?php echo $_SESSION['comp_id']; ?>">
    <input type="hidden" name="customer_id" value="<?php echo isset($customer) && is_object($customer) ? $customer->customer_id : ''; ?>">
    <input type="hidden" name="blanch_id" value="<?php echo isset($customer) && is_object($customer) ? $customer->blanch_id : ''; ?>">
    <input type="hidden" name="fee_status" value="YES">

    <!-- Loan Amount -->
    <div class="sm:col-span-4">
        <label for="how_loan" class="block text-sm font-medium mb-2 dark:text-gray-300">* Loan Amount:</label>
		<input
    type="text"
    id="how_loan"
    name="how_loan"
    placeholder="Kiasi cha mkopo kinachoombwa bila riba"
    autocomplete="off"
    required
    class="py-2.5 px-4 block w-full border-gray-200 rounded-lg text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300"
>
<?php echo form_error("how_loan", '<p class="text-xs text-red-600 mt-2">', '</p>'); ?>

    
    </div>

    <!-- Loan Duration -->
    <div class="sm:col-span-4">
        <label for="durationselect" class="block text-sm font-medium mb-2 dark:text-gray-300">* Loan Duration:</label>
        <select id="durationselect" name="day" class="py-3 px-4 pe-9 block w-full bg-cyan-600 border-gray-200 rounded-lg text-sm select2">
            <option value="">Loan Duration</option>
            <option value="1" <?php echo set_select('day', '1'); ?>>Siku</option>
            <option value="7" <?php echo set_select('day', '7'); ?>>Wiki</option>
            <option value="30" <?php echo set_select('day', '30'); ?>>Mwezi</option>
        </select>
        <?php echo form_error("day", '<p class="text-xs text-red-600 mt-2">', '</p>'); ?>
    </div>

    <!-- Repayment Sessions -->
    <div class="sm:col-span-4">
        <label for="session" class="block text-sm font-medium mb-2 dark:text-gray-300">* Number of Repayment:</label>
        <input type="number" id="session" name="session" placeholder="Andika idadi ya marejesho" value="<?php echo set_value('session'); ?>" autocomplete="off" required class="py-2.5 px-4 block w-full border-gray-200 rounded-lg text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
        <?php echo form_error("session", '<p class="text-xs text-red-600 mt-2">', '</p>'); ?>
    </div>

    <!-- Reason -->
    <div class="sm:col-span-4">
        <label for="reason" class="block text-sm font-medium mb-2 dark:text-gray-300">* Biashara/Kazi ya mkopaji:</label>
        <input type="text" id="reason" name="reason" placeholder="Kazi au biashara ya mkopaji" value="<?php echo set_value('reason'); ?>" autocomplete="off" required class="py-2.5 px-4 block w-full border-gray-200 rounded-lg text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
        <?php echo form_error("reason", '<p class="text-xs text-red-600 mt-2">', '</p>'); ?>
    </div>

    <!-- Interest Formula -->
	<input type="hidden" name="rate" value="SIMPLE">

</div>

<div class="mt-8 pt-6 border-t border-gray-200 dark:border-gray-700">
    <div class="flex justify-center gap-x-2">
        <button type="submit" class="py-2 px-4 btn-primary-sm bg-cyan-800 hover:bg-cyan-700 text-white">Next</button>
    </div>
</div>

<?php echo form_close(); ?>


            </div>
        </div>
    </div>
</div>
<!-- ========== END MAIN CONTENT BODY ========== -->

<?php
include_once APPPATH . "views/partials/footer.php";
?>

<?php // Script for cmd+a fix for DataTables search input (if used) ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- Include Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('how_loan');

        input.addEventListener('input', function (e) {
            let value = input.value.replace(/,/g, '').replace(/\D/g, ''); // remove commas and non-digits
            if (value) {
                input.value = Number(value).toLocaleString(); // format with commas
            } else {
                input.value = '';
            }
        });

        // Remove commas on form submit so backend gets clean number
        input.form.addEventListener('submit', function () {
            input.value = input.value.replace(/,/g, '');
        });
    });
</script>

<style>
.select2-container--default .select2-selection--single {
    background-color: #1f2937;
    border: 1px solid #374151;
    border-radius: 0.5rem;
    padding: 0.75rem 2.5rem 0.75rem 1rem;
    height: auto;
    color: #06b6d4; 
    font-size: 0.875rem;
    position: relative;
}
.select2-selection__rendered,
.select2-selection__clear,
.select2-selection__arrow {
    color: #d1d5db;
}
.select2-selection__arrow {
    right: 1rem;
    top: 0;
    width: 1.5rem;
    position: absolute;
}
.select2-selection__clear {
    right: 2.5rem;
    top: 50%;
    transform: translateY(-50%);
    position: absolute;
}
.custom-select2-dropdown {
    background-color: #1f2937;
    color: #d1d5db;
    border: 1px solid #374151;
    border-radius: 0.5rem;
    padding: 0.5rem;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #ffffff !important; /* Force white text */
}
.custom-select2-dropdown .select2-results__option--highlighted {
    background-color: #06b6d4 !important; /* Tailwind cyan-400 */
    color: #ffffff !important;
}

/* White text in the dropdown input if searchable */
.select2-search__field {
    color: #ffffff !important;
    background-color: #1f2937 !important; /* match dark bg */
    border: 1px solid #374151;
}
.custom-select2-dropdown .select2-results__option--highlighted {
    background-color: #06b6d4;
    color: #ffffff;
}
.custom-select2-container { margin: 0; }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        HSStaticMethods.autoInit(); // This is required to initialize all hs-select dropdowns
    });
</script>
<script>
window.addEventListener('load', () => {
  setTimeout(() => {
    const inputs = document.querySelectorAll('input[data-hs-datatable-search]');
    inputs.forEach((input) => {
      input.addEventListener('keydown', function (evt) {
        if ((evt.metaKey || evt.ctrlKey) && (evt.key === 'a' || evt.key === 'A')) {
          this.select();
        }
      });
    });
    // HSStaticMethods.autoInit(['select']); // If Preline selects need explicit init
  }, 500);
});
</script>


<script>
$(document).ready(function () {
    const selectConfig = {
        placeholder: "Select",
        allowClear: true,
        width: '100%',
        dropdownCssClass: 'custom-select2-dropdown',
        containerCssClass: 'custom-select2-container'
    };
	
    $('#branchSelect').select2({...selectConfig, placeholder: "Select Product Name"});
    $('#employeeSelect').select2({...selectConfig, placeholder: "Select Group Name"});
	$('#StaffSelect').select2({...selectConfig, placeholder: "Select Select Name"});
    rateSelect = $('#rateSelect').select2({...selectConfig, placeholder: "Select Interest Formular"});

	$('#durationselect').select2({...selectConfig, placeholder: "Chagua Aina Ya marejesho"});
    $('#branchSelect').on('change', function () {
        const branchId = $(this).val();

        $.post('fetch_employee_blanch', { blanch_id: branchId }, function (data) {
            const employeeSelect = $('#employeeSelect');
            employeeSelect.html(data).select2({...selectConfig, placeholder: "Select Employee"});

            // If using Preline's hsSelect
            const customSelect = $('[data-hs-select]');
            if (customSelect.length) {
                customSelect.html(data);
                customSelect.hsSelect();
            }
        }).fail(function (xhr, status, error) {
            console.error('AJAX error:', status, error);
        });
    });
});

// Age Calculation

</script>







