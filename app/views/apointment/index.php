<?php if ($_SESSION['level'] == 1) { ?>
    <div class="apointment-wrapper">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-blue-100 dark:text-blue-100">
                <thead class="text-xs text-white uppercase bg-blue-600 dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3 center">No</th>
                        <th scope="col" class="px-6 py-3">Doktor name</th>
                        <th scope="col" class="px-6 py-3">Date Apointment</th>
                        <th scope="col" class="px-6 py-3">Apointment ID</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                        <th scope="col" class="px-6 py-3">Chat Doctor</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Tampilkan data -->
                    <?php foreach ($data['jadwal'] as $data) : ?>
                        <tr class="bg-blue-500 border-b border-blue-400">
                            <td class="px-6 py-4 center">-</td>
                            <th scope="row" class="px-6 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                                <?php echo $data['nama_psikolog']; ?>
                            </th>
                            <td class="px-6 py-4"> <?php echo $data['tanggal_konsul']; ?></td>
                            <td class="px-6 py-4"> <?php echo $data['id_jadwal']; ?></td>
                            <td class="px-6 py-4 font-bold text-white">
                                <?php echo $data['status']; ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php if ($data['status'] == 'Pending') { ?>
                                    ---
                                <?php } ?>
                                <?php if ($data['status'] == 'Accepted') { ?>
                                    <a href="http://wa.me/<?= $data['nomer_handphone_psikolog'] ?>?text=Halo saya dari aplikasi mindfull ease dengan id booking <?= $data['id_jadwal'] ?>"><span class="bg-indigo-100 text-indigo-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300">
                                            Chat Now
                                        </span></a>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php } ?>
<?php if ($_SESSION['level'] == 2) { ?>
    <div class="apointment-wrapper">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-blue-100 dark:text-blue-100">
                <thead class="text-xs text-white uppercase bg-blue-600 dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3 center">No</th>
                        <th scope="col" class="px-6 py-3">Patient Name</th>
                        <th scope="col" class="px-6 py-3">Patient Numbers</th>
                        <th scope="col" class="px-6 py-3">Date Apointment</th>
                        <th scope="col" class="px-6 py-3">Apointment ID</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                        <th scope="col" class="px-6 py-3">Chat Patient</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>

                <tbody>

                 

                    <!-- Tampilkan data -->
                    <?php foreach ($data['jadwal'] as $data) : ?>
                        <tr class="bg-blue-500 border-b border-blue-400">
                            <td class="px-6 py-4 center">-</td>
                            <th scope="row" class="px-6 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                                <?php echo $data['username']; ?>
                            </th>
                            <td class="px-6 py-4"> <?php echo $data['nomer_handphone_user']; ?></td>
                            <td class="px-6 py-4"> <?php echo $data['tanggal_konsul']; ?></td>
                            <td class="px-6 py-4"> <?php echo $data['id_jadwal']; ?></td>
                            <td class="px-6 py-4 font-bold text-white">
                                <?php echo $data['status']; ?>
                            </td>

                            <td class="px-6 py-4">
                                <?php if ($data['status'] == 'Pending') { ?>
                                    ---
                                <?php } ?>
                                <?php if ($data['status'] == 'Accepted') { ?>
                                    <a href="http://wa.me/<?= $data['nomer_handphone_user'] ?>"><span class="bg-indigo-100 text-indigo-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300">
                                            Chat Now
                                        </span></a>
                                <?php } ?>
                            </td>
                            <td class="px-6 py-4 flex white">
                            <?php if ($data['status'] == 'Pending') { ?>
                                <a href="<?= BASEURL; ?>/Apointment/acc/<?= $data['id_jadwal'] ?>"><svg class="white w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                
                                </svg></a>
                                
                                <a href="<?= BASEURL; ?>/Apointment/reject/<?= $data['id_jadwal'] ?>">
                                <svg class="white w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                                </svg>
                                </a>
                                
                            <?php } ?>
                            <?php if ($data['status'] == 'Accepted') { ?>
                                <a href="#"><span class="bg-indigo-100 text-indigo-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300">
                                           Done
                                        </span></a>
                                <?php } ?>
                                
                            </td>
                        </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php } ?>