

<?php

include_once APPPATH . "views/partials/header.php";
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
            All Customer List
            </h2>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
            All Customer List
            </p>
        </div>

<div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700">
            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">All Customer List</h2>
            </div>
			   <div>
              <div class="inline-flex gap-x-2">
                <div class="hs-dropdown [--placement:bottom-right] relative inline-block">
                 
                  <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden divide-y divide-gray-200 min-w-48 z-20 bg-white shadow-md rounded-lg p-2 mt-2 dark:divide-neutral-700 dark:bg-neutral-800 dark:border dark:border-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-as-table-table-export-dropdown">
                    
                   
                      <a href="<?php echo base_url("admin/print_allCustomer"); ?>" class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M5.884 6.68a.5.5 0 1 0-.768.64L7.349 10l-2.233 2.68a.5.5 0 0 0 .768.64L8 10.781l2.116 2.54a.5.5 0 0 0 .768-.641L8.651 10l2.233-2.68a.5.5 0 0 0-.768-.64L8 9.219l-2.116-2.54z"/>
                          <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                        </svg>
                        PDF
                      </a>
                      <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM3.517 14.841a1.13 1.13 0 0 0 .401.823c.13.108.289.192.478.252.19.061.411.091.665.091.338 0 .624-.053.859-.158.236-.105.416-.252.539-.44.125-.189.187-.408.187-.656 0-.224-.045-.41-.134-.56a1.001 1.001 0 0 0-.375-.357 2.027 2.027 0 0 0-.566-.21l-.621-.144a.97.97 0 0 1-.404-.176.37.37 0 0 1-.144-.299c0-.156.062-.284.185-.384.125-.101.296-.152.512-.152.143 0 .266.023.37.068a.624.624 0 0 1 .246.181.56.56 0 0 1 .12.258h.75a1.092 1.092 0 0 0-.2-.566 1.21 1.21 0 0 0-.5-.41 1.813 1.813 0 0 0-.78-.152c-.293 0-.551.05-.776.15-.225.099-.4.24-.527.421-.127.182-.19.395-.19.639 0 .201.04.376.122.524.082.149.2.27.352.367.152.095.332.167.539.213l.618.144c.207.049.361.113.463.193a.387.387 0 0 1 .152.326.505.505 0 0 1-.085.29.559.559 0 0 1-.255.193c-.111.047-.249.07-.413.07-.117 0-.223-.013-.32-.04a.838.838 0 0 1-.248-.115.578.578 0 0 1-.255-.384h-.765ZM.806 13.693c0-.248.034-.46.102-.633a.868.868 0 0 1 .302-.399.814.814 0 0 1 .475-.137c.15 0 .283.032.398.097a.7.7 0 0 1 .272.26.85.85 0 0 1 .12.381h.765v-.072a1.33 1.33 0 0 0-.466-.964 1.441 1.441 0 0 0-.489-.272 1.838 1.838 0 0 0-.606-.097c-.356 0-.66.074-.911.223-.25.148-.44.359-.572.632-.13.274-.196.6-.196.979v.498c0 .379.064.704.193.976.131.271.322.48.572.626.25.145.554.217.914.217.293 0 .554-.055.785-.164.23-.11.414-.26.55-.454a1.27 1.27 0 0 0 .226-.674v-.076h-.764a.799.799 0 0 1-.118.363.7.7 0 0 1-.272.25.874.874 0 0 1-.401.087.845.845 0 0 1-.478-.132.833.833 0 0 1-.299-.392 1.699 1.699 0 0 1-.102-.627v-.495Zm8.239 2.238h-.953l-1.338-3.999h.917l.896 3.138h.038l.888-3.138h.879l-1.327 4Z"/>
                        </svg>
                        .CSV
                      </a>
                      <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                          <path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/>
                        </svg>
                        .PDF
                      </a>
                    </div>
                  </div>
                </div>

            <div class="p-4" data-hs-datatable='{
                "pageLength": 10, "paging": true,
                "pagingOptions": { "pageBtnClasses": "min-w-10 h-10 inline-flex justify-center items-center text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:focus:bg-gray-700 dark:hover:bg-gray-700" },
                "language": { "zeroRecords": "<div class=\"py-10 px-5 flex flex-col justify-center items-center text-center\"><svg class=\"shrink-0 size-6 text-gray-500 dark:text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"11\" cy=\"11\" r=\"8\"/><path d=\"m21 21-4.3-4.3\"/></svg><div class=\"max-w-sm mx-auto\"><p class=\"mt-2 text-sm text-gray-600 dark:text-gray-400\">No share holders found.</p></div></div>" }
            }'>
                <div class="flex flex-wrap items-center justify-between gap-2 mb-4">
                    <div class="relative max-w-xs w-full">
                        <label for="shareholder-table-search" class="sr-only">Search</label>
                        <input type="text" name="shareholder-table-search" id="shareholder-table-search" class="py-2 px-3 ps-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-cyan-500 focus:ring-cyan-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:placeholder-gray-500 dark:focus:ring-gray-600" placeholder="Search share holders..." data-hs-datatable-search="#shareholder_table">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3"><svg class="size-4 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg></div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <div class="min-w-full inline-block align-middle">
                        <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700" id="shareholder_table">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col" class="py-3 px-6 text-start"><div class="inline-flex items-center gap-x-2"><span class="text-xs font-semibold uppercase text-gray-500 dark:text-gray-400">S/No.</span></div></th>
                                        <th scope="col" class="py-3 px-6 text-start"><div class="inline-flex items-center gap-x-2"><span class="text-xs font-semibold uppercase text-gray-500 dark:text-gray-400">Customer Name</span><svg class="size-3.5 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path class="hs-datatable-ordering-desc:text-cyan-600 dark:hs-datatable-ordering-desc:text-cyan-500" d="m7 15 5 5 5-5"></path><path class="hs-datatable-ordering-asc:text-cyan-600 dark:hs-datatable-ordering-asc:text-cyan-500" d="m7 9 5-5 5 5"></path></svg></div></th>
                                        <th scope="col" class="py-3 px-6 text-start"><div class="inline-flex items-center gap-x-2"><span class="text-xs font-semibold uppercase text-gray-500 dark:text-gray-400">Gender</span><svg class="size-3.5 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path class="hs-datatable-ordering-desc:text-cyan-600 dark:hs-datatable-ordering-desc:text-cyan-500" d="m7 15 5 5 5-5"></path><path class="hs-datatable-ordering-asc:text-cyan-600 dark:hs-datatable-ordering-asc:text-cyan-500" d="m7 9 5-5 5 5"></path></svg></div></th>
                                        <th scope="col" class="py-3 px-6 text-start"><div class="inline-flex items-center gap-x-2"><span class="text-xs font-semibold uppercase text-gray-500 dark:text-gray-400">Phone Number</span><svg class="size-3.5 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path class="hs-datatable-ordering-desc:text-cyan-600 dark:hs-datatable-ordering-desc:text-cyan-500" d="m7 15 5 5 5-5"></path><path class="hs-datatable-ordering-asc:text-cyan-600 dark:hs-datatable-ordering-asc:text-cyan-500" d="m7 9 5-5 5 5"></path></svg></div></th>
                                        <th scope="col" class="py-3 px-6 text-start --exclude-from-ordering"><div class="inline-flex items-center gap-x-2"><span class="text-xs font-semibold uppercase text-gray-500 dark:text-gray-400">Branch</span></div></th>
                                        <th scope="col" class="py-3 px-6 text-start --exclude-from-ordering"><div class="inline-flex items-center gap-x-2"><span class="text-xs font-semibold uppercase text-gray-500 dark:text-gray-400">Status</span></div></th>
                                        <th scope="col" class="py-3 px-6 text-end --exclude-from-ordering"><div class="inline-flex items-center gap-x-2"><span class="text-xs font-semibold uppercase text-gray-500 dark:text-gray-400">Action</span></div></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                    <?php $no = 1; ?>
                                    <?php if (isset($customer ) && is_array($customer ) && !empty($customer )): ?>
                                        <?php foreach ($customer  as $customers): ?>
                                            <tr>
    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200"><?php echo $no++; ?>.</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><?php echo htmlspecialchars($customers->f_name, ENT_QUOTES, 'UTF-8'); ?> <?php echo htmlspecialchars($customers->m_name, ENT_QUOTES, 'UTF-8'); ?> <?php echo htmlspecialchars($customers->l_name, ENT_QUOTES, 'UTF-8'); ?></td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><?php echo htmlspecialchars($customers->gender, ENT_QUOTES, 'UTF-8'); ?></td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><?php echo ucfirst(htmlspecialchars($customers->phone_no, ENT_QUOTES, 'UTF-8')); ?></td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><?php echo ucfirst(htmlspecialchars($customers->blanch_name, ENT_QUOTES, 'UTF-8')); ?></td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
    <br>
  

    <?php if ($customers->customer_status == 'open') {
        ?>
        <a href="#" class="badge badge-success">Active</a>
       <?php }elseif ($customers->customer_status == 'close') {
        ?>
        <a href="#" class="badge badge-primary">Done</a>
        <?php }elseif($customers->customer_status == 'pending'){
         ?>
         <a href="#" class="badge badge-warning">Pending</a>
         <?php }elseif ($customers->customer_status == 'out') {
          ?>
          <a href="#" class="badge badge-danger">Default</a>
          <?php } ?>

</td>
    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
        <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
            <button id="hs-table-action-sh-<?php echo $customers->id; ?>" type="button" class="hs-dropdown-toggle py-1.5 px-2.5 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700">Action<svg class="hs-dropdown-open:rotate-180 size-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></button>
            <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden divide-y divide-gray-200 min-w-40 z-20 bg-white shadow-2xl rounded-lg p-2 mt-2 dark:divide-gray-700 dark:bg-gray-800 dark:border dark:border-gray-700" aria-labelledby="hs-table-action-sh-<?php echo $customers->id; ?>">

    <div class="py-2 first:pt-0 last:pb-0">
        <span class="block py-2 px-3 text-xs font-medium uppercase text-gray-400 dark:text-gray-500">Choose an option</span>
        <a href="<?php echo base_url("admin/view_more_customer/{$customers->customer_id}") ?>" class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-cyan-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
    </svg>
    View More
</a>



<a href="<?php echo base_url("admin/delete_customerData/{$customers->customer_id}") ?>"
   onclick="return confirm('Are you sure you want to delete this customer?')"
   class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-cyan-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
    
    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5-4h4m-4 0a1 1 0 00-1 1v1h6V4a1 1 0 00-1-1m-4 0h4" />
    </svg>
    Delete
</a>

    </div>
            </div>
        </div>
    </td>
</tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="py-3 px-4 border-t border-gray-200 dark:border-gray-700 hidden" data-hs-datatable-paging="">
                    <nav class="flex items-center space-x-1"><button type="button" class="p-2.5 min-w-10 h-10 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700" data-hs-datatable-paging-prev=""><span aria-hidden="true">«</span><span class="sr-only">Previous</span></button><div class="flex items-center space-x-1 [&>.active]:bg-gray-100 dark:[&>.active]:bg-gray-700" data-hs-datatable-paging-pages=""></div><button type="button" class="p-2.5 min-w-10 h-10 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700" data-hs-datatable-paging-next=""><span class="sr-only">Next</span><span aria-hidden="true">»</span></button></nav>
                </div>
            </div>
        </div>



        
            <div id="hs-edit-shareholder-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto">
                <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all lg:max-w-3xl lg:w-full m-3 lg:mx-auto"> <?php // Wider modal for more fields ?>
                    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                            <h3 class="font-bold text-gray-800 dark:text-white">Edit Staff</h3>
                            <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" ><span class="sr-only">Close</span><svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg></button>
                        </div>
                        <div class="p-4 sm:p-6 overflow-y-auto">
						<?php echo form_open("admin/filter_customer_status"); ?>
                        <div class="sm:col-span-4">
                            <label for="blanch_id" class="block text-sm font-medium mb-2 dark:text-gray-300">*Branch Name:</label>
                            <select id="blanch_id" name="blanch_id" 
                                    data-hs-select='{
									"hasSearch": true,
                                        "placeholder": "Select branch",
                                        "toggleTag": "<button type=\"button\" aria-expanded=\"false\"><span class=\"me-2\" data-icon></span><span class=\"text-gray-800 dark:text-gray-200\" data-title></span></button>",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-2.5 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-cyan-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:focus:ring-gray-600",
                                        "dropdownClasses": "mt-2 max-h-72 pb-1 px-1 space-y-0.5 z-50 w-full bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-gray-800 dark:border-gray-700",
                                        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:hover:bg-gray-700 dark:text-gray-200 dark:focus:bg-gray-700",
                                        "optionTemplate": "<div><div class=\"flex items-center\"><div class=\"me-2\" data-icon></div><div class=\"text-gray-800 dark:text-gray-200\" data-title></div></div></div>",
                                        "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 dark:text-gray-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                                      }'>
								<option value="">Select Branch</option>
								<?php foreach ($blanch as $blanchs): ?>
                                    <option value="<?php echo $blanchs->blanch_id; ?>"><?php echo $blanchs->blanch_name; ?> </option>
                               <?php endforeach; ?>
							

                            </select>
                            
                        </div>

                        <div classol-span-4">
                            <label for="empl_sex" class="block text-sm font-medium mb-2 dark:text-gray-300">* Gender:</label>
                            <select id="empl_sex" name="customer_status" required
                                    data-hs-select='{
                                        "placeholder": "Select gender",
                                        "toggleTag": "<button type=\"button\" aria-expanded=\"false\"><span class=\"me-2\" data-icon></span><span class=\"text-gray-800 dark:text-gray-200\" data-title></span></button>",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-2.5 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-cyan-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:focus:ring-gray-600",
                                        "dropdownClasses": "mt-2 max-h-72 pb-1 px-1 space-y-0.5 z-50 w-full bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-gray-800 dark:border-gray-700",
                                        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:hover:bg-gray-700 dark:text-gray-200 dark:focus:bg-gray-700",
                                        "optionTemplate": "<div><div class=\"flex items-center\"><div class=\"me-2\" data-icon></div><div class=\"text-gray-800 dark:text-gray-200\" data-title></div></div></div>",
                                        "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 dark:text-gray-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                                      }'>
                                <option value="">Select gender</option>
                                <option value="pending" <?php echo set_select('empl_sex', 'pending'); ?>>PENDING</option>
                                <option value="open" <?php echo set_select('empl_sex', 'open'); ?>>ACTIVE</option>
                                <option value="close" <?php echo set_select('empl_sex', 'close'); ?>>CLOSED</option>
                            </select>
   
                        </div>

                        <input type="hidden" name="comp_id" value="<?php echo $_SESSION['comp_id']; ?>">

					
                                <div class="mt-6 flex justify-end items-center gap-x-2 py-3">
                                    <button type="button" class="py-2 px-3 btn-secondary-sm" data-hs-overlay="#hs-edit-shareholder-modal">Close</button>
                                    <button type="submit" class="py-2 px-3 btn-primary-sm bg-cyan-600 hover:bg-cyan-700 text-white">Update</button>
                                </div>
                            <?php echo form_close(); ?>
                      /div>
                    </div>
                </div>
            </div>
         

  

        <?php
include_once APPPATH . "views/partials/footer.php";
?>

<?php // Script for cmd+a fix for DataTables search input (if used) ?>






