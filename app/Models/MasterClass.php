<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;
use App\Models\PhotoGroup;


class MasterClass extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
    ];
    
    public $incrementing = false;
    protected $keyType = 'string';

    public function getSingkatanNamaJurusan() 
    {
        $id = $this->id;
        $singkatan = null;
        
        if (strlen($id) == 9) {
            $id = substr($id, 0, strlen($id) - 3);
        }

        if ( $id == '01.01.' ) {
            $singkatan = 'ak';            
        }else if ( $id == '01.02.'){
            $singkatan = 'rpl';
        }else if( $id == '01.03.' ){
            $singkatan = 'tei';
        }else if( $id == '01.04.' ){
            $singkatan = 'tet';
        }elseif( $id == '01.05.' ){
            $singkatan = 'tsm';
        }else if( $id == '01.06.' ){
            $singkatan = 'tkj';
        }else{
            $singkatan = null;
        }

        return $singkatan;

    }

    public function enkripsiId(  ) 
    {
        return  Crypt::encrypt($this->id);
    }

    public function ambilSatuFotoKelas(  ) 
    {
        $satuFoto = PhotoGroup::where('class_id', '=', $this->id)->where('type_foto', 1)->first();
        return $satuFoto;
    }
    
    public function ambilFotoKelas(  ) 
    {
        $fotoSekelas = PhotoGroup::where('class_id', '=', $this->id)->where('type_foto', 1)->take(5)->get();
        return $fotoSekelas;
    }
}
