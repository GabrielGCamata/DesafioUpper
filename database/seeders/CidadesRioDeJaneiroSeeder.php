<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CidadesRioDeJaneiroSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['cidade' => 'Angra dos Reis', 'estado_id' => 19],
            ['cidade' => 'Aperibé', 'estado_id' => 19],
            ['cidade' => 'Araruama', 'estado_id' => 19],
            ['cidade' => 'Areal', 'estado_id' => 19],
            ['cidade' => 'Armação dos Búzios', 'estado_id' => 19],
            ['cidade' => 'Arraial do Cabo', 'estado_id' => 19],
            ['cidade' => 'Barra do Piraí', 'estado_id' => 19],
            ['cidade' => 'Barra Mansa', 'estado_id' => 19],
            ['cidade' => 'Belford Roxo', 'estado_id' => 19],
            ['cidade' => 'Bom Jardim', 'estado_id' => 19],
            ['cidade' => 'Bom Jesus do Itabapoana', 'estado_id' => 19],
            ['cidade' => 'Cabo Frio', 'estado_id' => 19],
            ['cidade' => 'Cachoeiras de Macacu', 'estado_id' => 19],
            ['cidade' => 'Cambuci', 'estado_id' => 19],
            ['cidade' => 'Campos dos Goytacazes', 'estado_id' => 19],
            ['cidade' => 'Cantagalo', 'estado_id' => 19],
            ['cidade' => 'Carapebus', 'estado_id' => 19],
            ['cidade' => 'Cardoso Moreira', 'estado_id' => 19],
            ['cidade' => 'Carmo', 'estado_id' => 19],
            ['cidade' => 'Casimiro de Abreu', 'estado_id' => 19],
            ['cidade' => 'Comendador Levy Gasparian', 'estado_id' => 19],
            ['cidade' => 'Conceição de Macabu', 'estado_id' => 19],
            ['cidade' => 'Cordeiro', 'estado_id' => 19],
            ['cidade' => 'Duas Barras', 'estado_id' => 19],
            ['cidade' => 'Duque de Caxias', 'estado_id' => 19],
            ['cidade' => 'Engenheiro Paulo de Frontin', 'estado_id' => 19],
            ['cidade' => 'Guapimirim', 'estado_id' => 19],
            ['cidade' => 'Iguaba Grande', 'estado_id' => 19],
            ['cidade' => 'Itaboraí', 'estado_id' => 19],
            ['cidade' => 'Itaguaí', 'estado_id' => 19],
            ['cidade' => 'Italva', 'estado_id' => 19],
            ['cidade' => 'Itaocara', 'estado_id' => 19],
            ['cidade' => 'Itaperuna', 'estado_id' => 19],
            ['cidade' => 'Itatiaia', 'estado_id' => 19],
            ['cidade' => 'Japeri', 'estado_id' => 19],
            ['cidade' => 'Laje do Muriaé', 'estado_id' => 19],
            ['cidade' => 'Macaé', 'estado_id' => 19],
            ['cidade' => 'Macuco', 'estado_id' => 19],
            ['cidade' => 'Magé', 'estado_id' => 19],
            ['cidade' => 'Mangaratiba', 'estado_id' => 19],
            ['cidade' => 'Maricá', 'estado_id' => 19],
            ['cidade' => 'Mendes', 'estado_id' => 19],
            ['cidade' => 'Mesquita', 'estado_id' => 19],
            ['cidade' => 'Miguel Pereira', 'estado_id' => 19],
            ['cidade' => 'Miracema', 'estado_id' => 19],
            ['cidade' => 'Natividade', 'estado_id' => 19],
            ['cidade' => 'Nilópolis', 'estado_id' => 19],
            ['cidade' => 'Niterói', 'estado_id' => 19],
            ['cidade' => 'Nova Friburgo', 'estado_id' => 19],
            ['cidade' => 'Nova Iguaçu', 'estado_id' => 19],
            ['cidade' => 'Paracambi', 'estado_id' => 19],
            ['cidade' => 'Paraíba do Sul', 'estado_id' => 19],
            ['cidade' => 'Parati', 'estado_id' => 19],
            ['cidade' => 'Paty do Alferes', 'estado_id' => 19],
            ['cidade' => 'Petrópolis', 'estado_id' => 19],
            ['cidade' => 'Pinheiral', 'estado_id' => 19],
            ['cidade' => 'Piraí', 'estado_id' => 19],
            ['cidade' => 'Porciúncula', 'estado_id' => 19],
            ['cidade' => 'Porto Real', 'estado_id' => 19],
            ['cidade' => 'Quatis', 'estado_id' => 19],
            ['cidade' => 'Queimados', 'estado_id' => 19],
            ['cidade' => 'Quissamã', 'estado_id' => 19],
            ['cidade' => 'Resende', 'estado_id' => 19],
            ['cidade' => 'Rio Bonito', 'estado_id' => 19],
            ['cidade' => 'Rio Claro', 'estado_id' => 19],
            ['cidade' => 'Rio das Flores', 'estado_id' => 19],
            ['cidade' => 'Rio das Ostras', 'estado_id' => 19],
            ['cidade' => 'Rio de Janeiro', 'estado_id' => 19],
            ['cidade' => 'Santa Maria Madalena', 'estado_id' => 19],
            ['cidade' => 'Santo Antônio de Pádua', 'estado_id' => 19],
            ['cidade' => 'São Fidélis', 'estado_id' => 19],
            ['cidade' => 'São Francisco de Itabapoana', 'estado_id' => 19],
            ['cidade' => 'São Gonçalo', 'estado_id' => 19],
            ['cidade' => 'São João da Barra', 'estado_id' => 19],
            ['cidade' => 'São João de Meriti', 'estado_id' => 19],
            ['cidade' => 'São José de Ubá', 'estado_id' => 19],
            ['cidade' => 'São José do Vale do Rio Pret', 'estado_id' => 19],
            ['cidade' => 'São Pedro da Aldeia', 'estado_id' => 19],
            ['cidade' => 'São Sebastião do Alto', 'estado_id' => 19],
            ['cidade' => 'Sapucaia', 'estado_id' => 19],
            ['cidade' => 'Saquarema', 'estado_id' => 19],
            ['cidade' => 'Seropédica', 'estado_id' => 19],
            ['cidade' => 'Silva Jardim', 'estado_id' => 19],
            ['cidade' => 'Sumidouro', 'estado_id' => 19],
            ['cidade' => 'Tanguá', 'estado_id' => 19],
            ['cidade' => 'Teresópolis', 'estado_id' => 19],
            ['cidade' => 'Trajano de Morais', 'estado_id' => 19],
            ['cidade' => 'Três Rios', 'estado_id' => 19],
            ['cidade' => 'Valença', 'estado_id' => 19],
            ['cidade' => 'Varre-Sai', 'estado_id' => 19],
            ['cidade' => 'Vassouras', 'estado_id' => 19],
            ['cidade' => 'Volta Redonda', 'estado_id' => 19]
        ]);

        $this->command->info('Cidades do Rio de Janeiro importadas com sucesso!');
    }
}
