<?php

class Flasher
{
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flashLogin()
    {
        if (isset($_SESSION['flash'])) 
        {
            echo '<div class="alert alert-'.$_SESSION['flash']['tipe'].' alert-dismissible fade show" role="alert">
            Email/Sandi <strong>'.$_SESSION['flash']['pesan'].'</strong> '.$_SESSION['flash']['aksi'].'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          unset($_SESSION['flash']);
        }
    }

    public static function flashJadwal()
    {
        if (isset($_SESSION['flash'])) 
        {
            if($_SESSION['flash']['tipe'] == 'alert')
            {
                echo'<div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                <span class="font-medium">Jadwal '.$_SESSION['flash']['aksi'].'!</span> '.$_SESSION['flash']['pesan'].'
                </div>';
            }
            if($_SESSION['flash']['tipe'] == 'danger')
            {
                echo'<div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <span class="font-medium">Jadwal Penuh!</span> Mohon ganti jadwal
              </div>';
            }
          unset($_SESSION['flash']);
        }
    }

    public static function flashPasien()
    {
        if (isset($_SESSION['flash'])) 
        {
            echo '<div class="alert alert-'.$_SESSION['flash']['tipe'].' alert-dismissible fade show" role="alert">
            Data Pasien <strong>'.$_SESSION['flash']['pesan'].'</strong> '.$_SESSION['flash']['aksi'].'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          unset($_SESSION['flash']);
        }
    }
}
