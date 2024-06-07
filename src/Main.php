<?php

namespace Mpu\NopFormater;

class Main
{
    /**
     * @params $kd_prpinsi, $kd_dati, $kd_kecamatan, $kd_kelurahan, $kd_blok, $no_urut, $kd_jns_op
     * @return string NOP format contoh 32.10.010.001.0010.0010.0
     */
    public function formatNopFromString(
        string $kd_prpinsi,
        string $kd_dati,
        string $kd_kecamatan,
        string $kd_kelurahan,
        string $kd_blok,
        string $no_urut,
        string $kd_jns_op
    ): string {
        return "{$kd_prpinsi}.{$kd_dati}.{$kd_kecamatan}.{$kd_kelurahan}.{$kd_blok}.{$no_urut}.{$kd_jns_op}";
    }

    /**
     * @params $kd_prpinsi, $kd_dati, $kd_kecamatan, $kd_kelurahan, $kd_blok, $no_urut, $kd_jns_op, $thn_pajak
     * @return string NOP format contoh 32.10.010.001.0010.0010.0
     */
    public function formatNopWithYearFromString(
        string $kd_prpinsi,
        string $kd_dati,
        string $kd_kecamatan,
        string $kd_kelurahan,
        string $kd_blok,
        string $no_urut,
        string $kd_jns_op,
        string $thn_pajak
    ): string {
        return "{$kd_prpinsi}.{$kd_dati}.{$kd_kecamatan}.{$kd_kelurahan}.{$kd_blok}.{$no_urut}.{$kd_jns_op}-{$thn_pajak}";
    }
}
