<?php
namespace App\Services;

use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\MasterStudent;

class ExcelImportService
{
    public function import()
    {
        ini_set('max_execution_time', '0');
        $spreadsheet = IOFactory::load('D:/Kimi Martua/BTS/Quotes/DATA QUOTES 18.xlsx');
        $sheet = $spreadsheet->getActiveSheet();
        $rows = $sheet->toArray(null, true, true, true);

        foreach ($rows as $index => $row) {
            if ($index === 1) {
                continue;
            }

            $nama = $row['B'];
            $kelas = $this->cekKelas($row['C']);
            $student = MasterStudent::where('student_name', 'like' , '%' .  $this->cleanString($nama) . '%')
                                    ->where('class_id', '=', $kelas);
            if ($student) {
                $student->update([
                    'quotes' => $row['D'],
                ]);
            }
        }
    }

    public function cekKelas( $kelas ) 
    {
        $kelas = explode( " ", $kelas );
        $jurusan = $kelas[1];
        $kelas = $kelas[2];

        $id = '01.';
        if(  $jurusan == 'AKL'){
            $id = $id . '01.';
        }else if( $jurusan == 'RPL' ){
            $id = $id . '02.';
        }elseif ( $jurusan == 'TEI' ) {
            $id = $id . '03.';
        }elseif ( $jurusan == 'TET' ) {
            $id = $id . '04.';
        }elseif ( $jurusan == 'TSM' ) {
            $id = $id . '05.';
        }elseif ( $jurusan == 'TKJ' ) {
            $id = $id . '06.';
        }

        if( $kelas == '1' ){
            $id = $id . '01.';
        }elseif ( $kelas == '2' ) {
            $id = $id . '02.';
        }elseif ( $kelas == '3' ) {
            $id = $id . '03.';
        }elseif ( $kelas == 'U' ) {
            $id = $id . '04.';
        }

        return $id;
    }

    public static function cleanString($string)
    {
        $string = str_replace(['.', '_'], '', $string);
        
        $string = preg_replace('/^\d+[\.\s]*/', '', $string);
        
        $string = preg_replace('/[^a-zA-Z0-9\s]/', '', $string);

        $string = preg_replace('/[^a-zA-Z\s]/', '', $string);
        
        $string = trim($string);
        
        return $string;
    }
}