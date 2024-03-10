<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MasterKelas;

class KelasFactory extends Factory
{
    protected $model = MasterKelas::class;

    public function definition()
    {
        return [
            'id' => '01.01.01.',
            'name' => 'AKUNTANSI 1',
        ];
    }
}
