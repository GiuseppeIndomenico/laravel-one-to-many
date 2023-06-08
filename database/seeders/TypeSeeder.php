<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Sito web',
            'App mobile',
            'Dashboard analitica',
            'Campagna di marketing',
            'Applicazione web personalizzata',
            'Design UI/UX',
            'Ottimizzazione del database',
            'Sistema di gestione dei contenuti',
            'Audit e ottimizzazione SEO',
            'Consulenza di sicurezza informatica',
        ];

        foreach ($types as $typeName) {
            Type::create(['name' => $typeName]);
        }
    }
}