<?php

if (!function_exists('formatTanggalIndonesia')) {
    /**
     * Format tanggal ke bahasa Indonesia
     */
    function formatTanggalIndonesia($date, $format = 'd F Y')
    {
        if (!$date) return null;

        $bulanIndonesia = [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember'
        ];

        $hariIndonesia = [
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
        ];

        $dateObj = \Carbon\Carbon::parse($date);

        $formatted = $dateObj->format($format);

        // Replace month numbers with Indonesian month names
        foreach ($bulanIndonesia as $num => $name) {
            $formatted = str_replace($dateObj->format('F'), $name, $formatted);
            $formatted = str_replace(sprintf('%02d', $num), $name, $formatted);
        }

        // Replace day names
        foreach ($hariIndonesia as $eng => $ind) {
            $formatted = str_replace($eng, $ind, $formatted);
        }

        return $formatted;
    }
}

if (!function_exists('rupiah')) {
    /**
     * Format angka ke format rupiah
     */
    function rupiah($angka)
    {
        return 'Rp ' . number_format($angka, 0, ',', '.');
    }
}
