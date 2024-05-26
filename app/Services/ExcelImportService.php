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
            $student = MasterStudent::where('student_name', 'like' , '%' .  $this->cleanString($nama) . '%');
            if ($student) {
                $student->update([
                    'quotes' => $row['D'],
                ]);
            }
        }
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