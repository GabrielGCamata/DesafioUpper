<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		Model::unguard();

		// Estados
        $this->call(EstadoSeeder::class);

        // Cidades
        $this->call(CidadesAcreSeeder::class);
        $this->call(CidadesAlagoasSeeder::class);
        $this->call(CidadesAmapaSeeder::class);
        $this->call(CidadesAmazonasSeeder::class);
        $this->call(CidadesBahiaSeeder::class);
        $this->call(CidadesCearaSeeder::class);
        $this->call(CidadesDistritoFederalSeeder::class);
        $this->call(CidadesEspiritoSantoSeeder::class);
        $this->call(CidadesGoiasSeeder::class);
        $this->call(CidadesMaranhaoSeeder::class);
        $this->call(CidadesMatoGrossoSeeder::class);
        $this->call(CidadesMatoGrossoDoSulSeeder::class);
        $this->call(CidadesMinasGeraisSeeder::class);
        $this->call(CidadesParaSeeder::class);
        $this->call(CidadesParaibaSeeder::class);
        $this->call(CidadesParanaSeeder::class);
        $this->call(CidadesPernambucoSeeder::class);
        $this->call(CidadesPiauiSeeder::class);
        $this->call(CidadesRioDeJaneiroSeeder::class);
        $this->call(CidadesRioGrandeDoNorteSeeder::class);
        $this->call(CidadesRioGrandeDoSulSeeder::class);
        $this->call(CidadesRondoniaSeeder::class);
        $this->call(CidadesRoraimaSeeder::class);
        $this->call(CidadesSantaCatarinaSeeder::class);
        $this->call(CidadesSaoPauloSeeder::class);
        $this->call(CidadesSergipeSeeder::class);
        $this->call(CidadesTocantinsSeeder::class);
	}

}
