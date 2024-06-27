<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;900&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <title>Halaman <?= $data['judul'] ?> </title>
    <style>
        .max-w-screen-xxl {
            padding-left: 100PX;
            padding-right: 100PX;
        }

        @media (max-width: 991px) {
            .max-w-screen-xxl {
                padding-left: 20px;
                padding-right: 20px;
            }
        }
    </style>
</head>

<body>
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xxl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="<?= BASEURL; ?>home" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="../public/img/WhatsApp_Image_2023-11-21_at_10.05 3.png" class="logo" alt="">
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <div class="hover">
                    <a href="<?= BASEURL; ?>/login" class="btn yellow">
                        <span>Sign Up</span>
                        <ion-icon name="arrow-forward"></ion-icon>
                    </a>
                </div>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="<?= BASEURL; ?>/home" class="linkmenu " aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="<?= BASEURL; ?>/about" class="linkmenu ">About</a>
                    </li>
                    <li>
                        <a href="#" class="linkmenu ">Services</a>
                    </li>
                    <li>
                        <a href="#" class="linkmenu ">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>