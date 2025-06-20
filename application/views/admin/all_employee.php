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


<div class="w-full lg:ps-64">
  <div class="= overflow-x-auto">
    <div class="min-w-full inline-block align-middle">
      <div
        class="bg-white border border-gray-200 rounded-xl shadow-2xs overflow-hidden dark:bg-gray-800 dark:border-gray-700">
        <!-- Header -->
        <div
          class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
          <div>
            <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
              Staff List
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
              Add users, edit and more.
            </p>
          </div>

         



              <div>
                <div class="space-y-3"><!-- vertical gap between items -->
                  <!-- Block button -->
                  <a href="<?php echo base_url("admin/block_allEmployee"); ?>" class="py-3 px-6 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 focus:outline-hidden focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none"
                    href="#">
                    Block All User
                    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none"
                      aria-hidden="true">
                      <!-- User head -->
                      <circle cx="24" cy="15" r="7" fill="currentColor" />
                      <!-- Shoulders / torso -->
                      <path d="M12 39c0-6.8 5.7-12 12-12s12 5.2 12 12" fill="currentColor" />
                      <!-- Red prohibition badge -->
                      <circle cx="34" cy="34" r="11" fill="#ef4444" />
                      <!-- White slash -->
                      <path d="M27.5 34h13" stroke="#ffffff" stroke-width="3.5" stroke-linecap="round"
                        transform="rotate(-45 34 34)" />
                    </svg>
                    </button>

                   

                    <!-- Unblock button -->
                    <a  href="<?php echo base_url("admin/unblock_allEmployee"); ?>" class="py-3 px-6 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 focus:outline-hidden focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none"
                      href="#">
                      Unblock All
                      <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none"
                        aria-hidden="true">
                        <!-- User head -->
                        <circle cx="24" cy="15" r="7" fill="currentColor" />
                        <!-- Shoulders / torso -->
                        <path d="M12 39c0-6.8 5.7-12 12-12s12 5.2 12 12" fill="currentColor" />
                        <!-- Green check badge -->
                        <circle cx="34" cy="34" r="11" fill="#22c55e" />
                        <path d="M30.5 34l2.8 2.8 4.7-4.7" stroke="#ffffff" stroke-width="3.5" stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
                    </a>

                    <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
              href="<?php echo base_url("admin/employee"); ?>">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M5 12h14" />
                  <path d="M12 5v14" />
                </svg>
                Add user
              </a>

         

                </div>
              </div>





        </div>
        <!-- End Header -->

        <!-- Table -->
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
          <thead class="bg-gray-50 dark:bg-gray-800">
            <tr>
              <th scope="col" class="ps-6 py-3 text-start">
                <label for="hs-at-with-checkboxes-main" class="flex">
                  <input type="checkbox"
                    class="shrink-0 border-gray-300 rounded-sm text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                    id="hs-at-with-checkboxes-main">
                  <span class="sr-only">Checkbox</span>
                </label>
              </th>

              <th scope="col" class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3 text-start">
                <div class="flex items-center gap-x-2">
                  <span class="text-xs font-semibold uppercase text-gray-800 dark:text-gray-200">
                    Staff Name
                  </span>
                </div>
              </th>

              <th scope="col" class="px-6 py-3 text-start">
                <div class="flex items-center gap-x-2">
                  <span class="text-xs font-semibold uppercase text-gray-800 dark:text-gray-200">
                    Phone Number
                  </span>
                </div>
              </th>

              <th scope="col" class="px-6 py-3 text-start">
                <div class="flex items-center gap-x-2">
                  <span class="text-xs font-semibold uppercase text-gray-800 dark:text-gray-200">
                    Position
                  </span>
                </div>
              </th>

              <th scope="col" class="px-6 py-3 text-start">
                <div class="flex items-center gap-x-2">
                  <span class="text-xs font-semibold uppercase text-gray-800 dark:text-gray-200">
                    Branch
                  </span>
                </div>
              </th>

              <th scope="col" class="px-6 py-3 text-start">
                <div class="flex items-center gap-x-2">
                  <span class="text-xs font-semibold uppercase text-gray-800 dark:text-gray-200">
                    Account Status
                  </span>
                </div>
              </th>

              <th scope="col" class="px-6 py-3 text-start">
                <div class="flex items-center gap-x-2">
                  <span class="text-xs font-semibold uppercase text-gray-80 dark:text-gray-200">
                    Created
                  </span>
                </div>
              </th>

              <th scope="col" class="px-6 py-3 text-start">
                <div class="flex items-center gap-x-2">
                  <span class="text-xs font-semibold uppercase text-gray-80 dark:text-gray-200">
                    Action
                  </span>
                </div>
              </th>
            </tr>
          </thead>

          <tbody class="divide-y divide-gray-200 dark:divide-gray-700">



            <?php $no = 1; ?>
            <?php foreach ($all_employee as $employees): ?>

              <tr>
                <td class="size-px whitespace-nowrap">
                  <div class="ps-6 py-3">
                    <label for="hs-at-with-checkboxes-12" class="flex">
                      <input type="checkbox"
                        class="shrink-0 border-gray-300 rounded-sm text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                        id="hs-at-with-checkboxes-12">
                      <span class="sr-only">Checkbox</span>
                    </label>
                  </div>
                </td>

                <td class="size-px whitespace-nowrap">
                  <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                    <div class="flex items-center gap-x-3">
                      <img class="inline-block size-9.5 rounded-full"
                        src="https://images.unsplash.com/photo-1670272505340-d906d8d77d03?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                        alt="Avatar">
                      <div class="grow">
                        <span
                          class="block text-sm font-semibold text-gray-800 dark:text-gray-200"><?= $employees->empl_name ?></span>
                        <span class="block text-sm text-gray-500 dark:text-gray-500"><?= $employees->empl_email; ?></span>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="h-px w-72 whitespace-nowrap">
                  <div class="px-6 py-3">
                    <span
                      class="block text-sm font-semibold text-gray-800 dark:text-gray-200"><?= $employees->empl_no ?></span>

                  </div>
                </td>
                <td class="h-px w-72 whitespace-nowrap">
                  <div class="px-6 py-3">
                    <span
                      class="block text-sm font-semibold text-gray-800 dark:text-gray-200"><?= $employees->position ?></span>

                  </div>
                </td>
                <td class="h-px w-72 whitespace-nowrap">
                  <div class="px-6 py-3">
                    <span
                      class="block text-sm font-semibold text-gray-800 dark:text-gray-200"><?= $employees->blanch_name ?></span>

                  </div>
                </td>

                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"> <?php
                $status = strtolower($employees->empl_status);   // e.g. "open" or "close"
              
                if ($status === 'open') { ?>

                    <div>
                      <span
                        class="py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                        <svg class="shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round">
                          <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                          <path d="m9 12 2 2 4-4"></path>
                        </svg>
                        Active
                      </span>
                    </div>

                  <?php } elseif ($status === 'close') { ?>
                    <div>
                      <span
                        class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full dark:bg-red-500/10 dark:text-red-500">
                        <svg class="shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round">
                          <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path>
                          <path d="M12 9v4"></path>
                          <path d="M12 17h.01"></path>
                        </svg>
                        Blocked
                      </span>
                    </div>

                  <?php } ?>
                </td>
                <!-- <td class="size-px whitespace-nowrap">
                      <div class="px-6 py-3">
                        <div class="flex items-center gap-x-3">
                          <span class="text-xs text-gray-500 dark:text-gray-500">0/5</span>
                          <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                            <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-gray-200" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </td> -->
                <td class="size-px whitespace-nowrap">
                  <div class="px-6 py-3">
                    <span class="text-sm text-gray-500 dark:text-gray-500"><?= $employees->empl_day ?></span>
                  </div>
                </td>

                <?php
/* -------------------------------------------------
 | Work out action, colours, icon and textblock_employee
 | ------------------------------------------------ */
$isOpen   = $employees->empl_status === 'open';   // user active, can be blocked
$isClosed = $employees->empl_status === 'close';  // user blocked, can be un‑blocked

$actionUrl   = $isOpen
    ? base_url("admin/block_employee/{$employees->empl_id}") 
    : base_url("admin/Unblock_employee/{$employees->empl_id}");

$actionLabel = $isOpen ? 'Block User' : 'Un‑block User';
$confirmText = $isOpen
    ? "Block "   . addslashes($employees->empl_name)   . "?"
    : "Un‑block " . addslashes($employees->empl_name) . "?";

$colour = $isOpen ? 'amber' : 'green';  // Tailwind colour family
?>
<td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
  <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
    <!-- dropdown trigger -->
    <button id="hs-table-action-sh-<?= $employees->account_no; ?>" type="button"
      class="hs-dropdown-toggle py-1.5 px-2.5 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700">
      Action
      <svg class="hs-dropdown-open:rotate-180 size-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none"
           xmlns="http://www.w3.org/2000/svg">
        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
              stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </button>

    <!-- dropdown menu -->
    <div
      class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden divide-y divide-gray-200 min-w-40 z-20 bg-white shadow-2xl rounded-lg p-2 mt-2 dark:divide-gray-700 dark:bg-gray-800 dark:border dark:border-gray-700"
      aria-labelledby="hs-table-action-sh-<?= $employees->account_no; ?>">

      <!-- view option -->
      <div class="py-2 first:pt-0 last:pb-0">
        <span class="block py-2 px-3 text-xs font-medium uppercase text-gray-400 dark:text-gray-500">
          Choose an option
        </span>
        <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-cyan-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
           href="#"
           data-hs-overlay="#hs-edit-shareholder-modal-<?= $employees->empl_id; ?>">
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
               fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4Z"/>
          </svg>
          View
        </a>
      </div>

      <!-- block OR unblock option (shown according to status) -->
      <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm
                text-<?= $colour ?>-600 hover:bg-<?= $colour ?>-50 focus:ring-2 focus:ring-<?= $colour ?>-500
                dark:text-<?= $colour ?>-400 dark:hover:bg-gray-700"
         href="<?= $actionUrl ?>"
         onclick="return confirm('<?= $confirmText ?>');">

        <?php if ($isOpen): ?>
          <!-- BLOCK icon -->
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
               fill="none" stroke="currentColor" stroke-width="1.5"
               stroke-linecap="round" stroke-linejoin="round">
            <circle cx="7.5" cy="6.5" r="3"/>
            <path d="M2 19c0-3 2.5-5 5.5-5s5.5 2 5.5 5"/>
            <circle cx="17" cy="15" r="5"/>
            <path d="M14.5 12.5 19.5 17.5"/>
          </svg>
        <?php else: ?>
          <!-- UNBLOCK icon -->
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
               fill="none" stroke="currentColor" stroke-width="1.5"
               stroke-linecap="round" stroke-linejoin="round">
            <circle cx="7.5" cy="6.5" r="3"/>
            <path d="M2 19c0-3 2.5-5 5.5-5s5.5 2 5.5 5"/>
            <polyline points="14 15 16 17 20 13"/> <!-- check -->
          </svg>
        <?php endif; ?>

        <?= $actionLabel ?>
      </a>

      <?php if ($employees->position_id == 22): ?>
  <!-- grant access option (always shown) -->
  <div class="py-2 first:pt-0 last:pb-0">
    <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-blue-600 hover:bg-blue-50 focus:ring-2 focus:ring-blue-500 dark:text-blue-400 dark:hover:bg-gray-700"
       href="<?= base_url("admin/manage/{$employees->empl_id}"); ?>">
      <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
           fill="none" stroke="currentColor" stroke-width="1.5"
           stroke-linecap="round" stroke-linejoin="round">
        <circle cx="7.5" cy="6.5" r="3"/>
        <path d="M2 19c0-3 2.5-5 5.5-5s5.5 2 5.5 5"/>
        <rect x="14" y="11" width="8" height="8" rx="1.5"/>
        <path d="M16 11v-2a3 3 0 0 1 6 0v2"/>
        <circle cx="18" cy="15" r="1"/>
      </svg>
      User Preveldeges
    </a>
  </div>
<?php else: ?>
  <div class="py-2 first:pt-0 last:pb-0">
    <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-blue-600 hover:bg-blue-50 focus:ring-2 focus:ring-blue-500 dark:text-blue-400 dark:hover:bg-gray-700"
       href="<?= base_url("admin/privillage/{$employees->empl_id}"); ?>">
      <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
           fill="none" stroke="currentColor" stroke-width="1.5"
           stroke-linecap="round" stroke-linejoin="round">
        <circle cx="7.5" cy="6.5" r="3"/>
        <path d="M2 19c0-3 2.5-5 5.5-5s5.5 2 5.5 5"/>
        <rect x="14" y="11" width="8" height="8" rx="1.5"/>
        <path d="M16 11v-2a3 3 0 0 1 6 0v2"/>
        <circle cx="18" cy="15" r="1"/>
      </svg>
      User Access
    </a>
  </div>
<?php endif; ?>


      <div class="py-2 first:pt-0 last:pb-0">
        <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-blue-600 hover:bg-blue-50 focus:ring-2 focus:ring-blue-500 dark:text-blue-400 dark:hover:bg-gray-700"
        href="<?php echo base_url("admin/delete_employee/{$employees->empl_id}") ?>">
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
               fill="none" stroke="currentColor" stroke-width="1.5"
               stroke-linecap="round" stroke-linejoin="round">
            <circle cx="7.5" cy="6.5" r="3"/>
            <path d="M2 19c0-3 2.5-5 5.5-5s5.5 2 5.5 5"/>
            <rect x="14" y="11" width="8" height="8" rx="1.5"/>
            <path d="M16 11v-2a3 3 0 0 1 6 0v2"/>
            <circle cx="18" cy="15" r="1"/>f
          </svg>
          Delete
        </a>
      </div>

    </div><!-- /.dropdown menu -->
  </div>
</td>

              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <!-- End Table -->

        <?php // Modals for Edit Share Holder ?>
        <?php if (isset($all_employee) && is_array($all_employee)): ?>
          <?php foreach ($all_employee as $employees): ?>
            <div id="hs-edit-shareholder-modal-<?php echo $employees->empl_id; ?>"
              class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto">
              <div
                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all lg:max-w-3xl lg:w-full m-3 lg:mx-auto">
                <?php // Wider modal for more fields ?>
                <div
                  class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700">
                  <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                    <h3 class="font-bold text-gray-800 dark:text-white">Edit Staff:
                      <?php echo htmlspecialchars($employees->empl_name, ENT_QUOTES, 'UTF-8'); ?>
                    </h3>
                    <button type="button"
                      class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      data-hs-overlay="#hs-edit-shareholder-modal-<?php echo $employees->empl_id; ?>"><span
                        class="sr-only">Close</span><svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                      </svg></button>
                  </div>
                  <div class="p-4 sm:p-6 overflow-y-auto">
                    <?php echo form_open("admin/modify_employee/{$employees->empl_id}"); ?>




                    <div class="grid sm:grid-cols-12 gap-4 sm:gap-6">
                      <div class="sm:col-span-4">
                        <label for="empl_name_<?php echo $employees->empl_id; ?>"
                          class="block text-sm font-medium mb-2 dark:text-gray-300">* Staff name:</label>
                        <input
                          class="py-2.5 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-cyan-500 focus:ring-cyan-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:placeholder-gray-500 dark:focus:ring-gray-600 type="
                          text" id="empl_name_<?php echo $employees->empl_id; ?>" name="empl_name"
                          value="<?php echo htmlspecialchars($employees->empl_name, ENT_QUOTES, 'UTF-8'); ?>"
                          class="py-2.5 px-4 input-text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300"
                          required>
                      </div>



                      <div class="sm:col-span-4">
                        <label for="share_mobile_<?php echo $employees->empl_id; ?>"
                          class="block text-sm font-medium mb-2 dark:text-gray-300">* Mobile no:</label>
                        <input type="number" id="share_mobile_<?php echo $employees->empl_id; ?>" name="empl_no"
                          placeholder="Mobile no" autocomplete="off" required
                          class="py-2.5 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-cyan-500 focus:ring-cyan-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:placeholder-gray-500 dark:focus:ring-gray-600"
                          value="<?php echo htmlspecialchars($employees->empl_no, ENT_QUOTES, 'UTF-8'); ?>">

                      </div>

                      <div class="sm:col-span-4">
                        <label for="empl_email_<?php echo $employees->empl_id; ?>"
                          class="block text-sm font-medium mb-2 dark:text-gray-300">* Email:</label>
                        <input type="email" id="empl_email_<?php echo $employees->empl_id; ?>" name="empl_email"
                          placeholder="Email" autocomplete="off" required
                          class="py-2.5 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-cyan-500 focus:ring-cyan-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:placeholder-gray-500 dark:focus:ring-gray-600"
                          value="<?php echo htmlspecialchars($employees->empl_email, ENT_QUOTES, 'UTF-8'); ?>">

                      </div>




                      <div class="sm:col-span-4">
                        <label for="blanch_id_<?php echo $employees->empl_id; ?>"
                          class="block text-sm font-medium mb-2 dark:text-gray-300">*Branch Name:</label>
                        <select id="blanch_id_<?php echo $employees->empl_id; ?>" name="blanch_id" data-hs-select='{
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
                            <option value="<?= $blanchs->blanch_id; ?>" <?= ($blanchs->blanch_id == $employees->blanch_id) ? 'selected' : ''; ?>>
                              <?= htmlspecialchars($blanchs->blanch_name, ENT_QUOTES, 'UTF-8'); ?>
                            </option>
                          <?php endforeach; ?>

                        </select>

                      </div>

                      <div class="sm:col-span-4">
                        <label for="position_id_<?php echo $employees->empl_id; ?>"
                          class="block text-sm font-medium mb-2 dark:text-gray-300">*Position:</label>
                        <select id="position_id_<?php echo $employees->empl_id; ?>" name="position_id" data-hs-select='{
                  "hasSearch": true,
                                        "placeholder": "Select Position",
                                        "toggleTag": "<button type=\"button\" aria-expanded=\"false\"><span class=\"me-2\" data-icon></span><span class=\"text-gray-800 dark:text-gray-200\" data-title></span></button>",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-2.5 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-cyan-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:focus:ring-gray-600",
                                        "dropdownClasses": "mt-2 max-h-72 pb-1 px-1 space-y-0.5 z-50 w-full bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-gray-800 dark:border-gray-700",
                                        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:hover:bg-gray-700 dark:text-gray-200 dark:focus:bg-gray-700",
                                        "optionTemplate": "<div><div class=\"flex items-center\"><div class=\"me-2\" data-icon></div><div class=\"text-gray-800 dark:text-gray-200\" data-title></div></div></div>",
                                        "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 dark:text-gray-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                                      }'>

                          <option value="">Select Position</option>
                          <?php foreach ($position as $positions): ?>
                            <option value="<?= $positions->position_id; ?>"
                              <?= ($positions->position_id == $employees->position_id) ? 'selected' : ''; ?>>
                              <?= htmlspecialchars($positions->position, ENT_QUOTES, 'UTF-8'); ?>
                            </option>
                          <?php endforeach; ?>
                        </select>
                        <?php echo form_error("position_id", '<p class="text-xs text-red-600 mt-2">', '</p>'); ?>
                      </div>

                      <div class="sm:col-span-4">
                        <label for="username_<?php echo $employees->empl_id; ?>"
                          class="block text-sm font-medium mb-2 dark:text-gray-300">*System Username:</label>
                        <input type="text" id="username_<?php echo $employees->empl_id; ?>" name="username"
                          placeholder="System Username" autocomplete="off"
                          class="py-2.5 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-cyan-500 focus:ring-cyan-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:placeholder-gray-500 dark:focus:ring-gray-600"
                          value="<?php echo htmlspecialchars($employees->username, ENT_QUOTES, 'UTF-8'); ?>">

                      </div>





                      <div class="sm:col-span-4">
                        <label for="account_no_<?php echo $employees->empl_id; ?>"
                          class="block text-sm font-medium mb-2 dark:text-gray-300">*Bank Account:</label>
                        <select id="account_no_<?php echo $employees->empl_id; ?>" name="bank_account" data-hs-select='{
                  "hasSearch": true,
                                        "placeholder": "Select gender",
                                        "toggleTag": "<button type=\"button\" aria-expanded=\"false\"><span class=\"me-2\" data-icon></span><span class=\"text-gray-800 dark:text-gray-200\" data-title></span></button>",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-2.5 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-cyan-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:focus:ring-gray-600",
                                        "dropdownClasses": "mt-2 max-h-72 pb-1 px-1 space-y-0.5 z-50 w-full bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-gray-800 dark:border-gray-700",
                                        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:hover:bg-gray-700 dark:text-gray-200 dark:focus:bg-gray-700",
                                        "optionTemplate": "<div><div class=\"flex items-center\"><div class=\"me-2\" data-icon></div><div class=\"text-gray-800 dark:text-gray-200\" data-title></div></div></div>",
                                        "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 dark:text-gray-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                                      }'>





                          <option value="CASH" <?php echo ($employees->bank_account == 'CASH') ? 'selected' : ''; ?>>CASH
                          </option>
                          <option value="NMB" <?php echo ($employees->bank_account == 'NMB') ? 'selected' : ''; ?>>NMB
                          </option>
                          <option value="CRDB" <?php echo ($employees->bank_account == 'CRDB') ? 'selected' : ''; ?>>CRDB
                          </option>
                        </select>
                        <?php echo form_error("account_no", '<p class="text-xs text-red-600 mt-2">', '</p>'); ?>
                      </div>

                      <div class="sm:col-span-4">
                        <label for="salary_<?php echo $employees->empl_id; ?>"
                          class="block text-sm font-medium mb-2 dark:text-gray-300">*Salary:</label>
                        <input type="number" id="salary_<?php echo $employees->empl_id; ?>" name="salary"
                          placeholder="System salary" autocomplete="off"
                          class="py-2.5 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-cyan-500 focus:ring-cyan-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:placeholder-gray-500 dark:focus:ring-gray-600"
                          value="<?php echo htmlspecialchars($employees->salary, ENT_QUOTES, 'UTF-8'); ?>">

                      </div>


                      <div class="sm:col-span-4">
                        <label for="account_no_<?php echo $employees->empl_id; ?>"
                          class="block text-sm font-medium mb-2 dark:text-gray-300">*Bank Account No:</label>
                        <input type="number" id="account_no_<?php echo $employees->empl_id; ?>" name="account_no"
                          placeholder="System account_no" autocomplete="off"
                          class="py-2.5 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-cyan-500 focus:ring-cyan-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:placeholder-gray-500 dark:focus:ring-gray-600"
                          value="<?php echo htmlspecialchars($employees->account_no, ENT_QUOTES, 'UTF-8'); ?>">
                        <?php echo form_error("account_no", '<p class="text-xs text-red-600 mt-2">', '</p>'); ?>
                      </div>

                    </div>






                    <div class="mt-6 flex justify-end items-center gap-x-2 py-3">
                      <button type="button" class="py-2 px-3 btn-secondary-sm"
                        data-hs-overlay="#hs-edit-shareholder-modal-<?php echo $employees->empl_id; ?>">Close</button>
                      <button type="submit"
                        class="py-2 px-3 btn-primary-sm bg-cyan-600 hover:bg-cyan-700 text-white">Update</button>
                    </div>
                    <?php echo form_close(); ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>

        <!-- Footer -->
        <div
          class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
          <div>
            <p class="text-sm text-gray-600 dark:text-gray-400">
              <span class="font-semibold text-gray-800 dark:text-gray-200">12</span> results
            </p>
          </div>

          <div>
            <div class="inline-flex gap-x-2">
              <button type="button"
                class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-800 dark:focus:bg-gray-800">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="m15 18-6-6 6-6" />
                </svg>
                Prev
              </button>

              <button type="button"
                class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-800 dark:focus:bg-gray-800">
                Next
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="m9 18 6-6-6-6" />
                </svg>
              </button>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>


  <?php
  include_once APPPATH . "views/partials/footer.php";
  ?>

  <?php // Script for cmd+a fix for DataTables search input (if used) ?>
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