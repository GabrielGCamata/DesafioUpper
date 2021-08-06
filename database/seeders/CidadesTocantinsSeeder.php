<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CidadesTocantinsSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['cidade' => 'Abreulândia', 'estado_id' => 27],
            ['cidade' => 'Aguiarnópolis', 'estado_id' => 27],
            ['cidade' => 'Aliança do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Almas', 'estado_id' => 27],
            ['cidade' => 'Alvorada', 'estado_id' => 27],
            ['cidade' => 'Ananás', 'estado_id' => 27],
            ['cidade' => 'Angico', 'estado_id' => 27],
            ['cidade' => 'Aparecida do Rio Negro', 'estado_id' => 27],
            ['cidade' => 'Aragominas', 'estado_id' => 27],
            ['cidade' => 'Araguacema', 'estado_id' => 27],
            ['cidade' => 'Araguaçu', 'estado_id' => 27],
            ['cidade' => 'Araguaína', 'estado_id' => 27],
            ['cidade' => 'Araguanã', 'estado_id' => 27],
            ['cidade' => 'Araguatins', 'estado_id' => 27],
            ['cidade' => 'Arapoema', 'estado_id' => 27],
            ['cidade' => 'Arraias', 'estado_id' => 27],
            ['cidade' => 'Augustinópolis', 'estado_id' => 27],
            ['cidade' => 'Aurora do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Axixá do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Babaçulândia', 'estado_id' => 27],
            ['cidade' => 'Bandeirantes do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Barra do Ouro', 'estado_id' => 27],
            ['cidade' => 'Barrolândia', 'estado_id' => 27],
            ['cidade' => 'Bernardo Sayão', 'estado_id' => 27],
            ['cidade' => 'Bom Jesus do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Brasilândia do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Brejinho de Nazaré', 'estado_id' => 27],
            ['cidade' => 'Buriti do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Cachoeirinha', 'estado_id' => 27],
            ['cidade' => 'Campos Lindos', 'estado_id' => 27],
            ['cidade' => 'Cariri do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Carmolândia', 'estado_id' => 27],
            ['cidade' => 'Carrasco Bonito', 'estado_id' => 27],
            ['cidade' => 'Caseara', 'estado_id' => 27],
            ['cidade' => 'Centenário', 'estado_id' => 27],
            ['cidade' => 'Chapada da Natividade', 'estado_id' => 27],
            ['cidade' => 'Chapada de Areia', 'estado_id' => 27],
            ['cidade' => 'Colinas do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Colméia', 'estado_id' => 27],
            ['cidade' => 'Combinado', 'estado_id' => 27],
            ['cidade' => 'Conceição do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Couto de Magalhães', 'estado_id' => 27],
            ['cidade' => 'Cristalândia', 'estado_id' => 27],
            ['cidade' => 'Crixás do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Darcinópolis', 'estado_id' => 27],
            ['cidade' => 'Dianópolis', 'estado_id' => 27],
            ['cidade' => 'Divinópolis do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Dois Irmãos do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Dueré', 'estado_id' => 27],
            ['cidade' => 'Esperantina', 'estado_id' => 27],
            ['cidade' => 'Fátima', 'estado_id' => 27],
            ['cidade' => 'Figueirópolis', 'estado_id' => 27],
            ['cidade' => 'Filadélfia', 'estado_id' => 27],
            ['cidade' => 'Formoso do Araguaia', 'estado_id' => 27],
            ['cidade' => 'Fortaleza do Tabocão', 'estado_id' => 27],
            ['cidade' => 'Goianorte', 'estado_id' => 27],
            ['cidade' => 'Goiatins', 'estado_id' => 27],
            ['cidade' => 'Guaraí', 'estado_id' => 27],
            ['cidade' => 'Gurupi', 'estado_id' => 27],
            ['cidade' => 'Ipueiras', 'estado_id' => 27],
            ['cidade' => 'Itacajá', 'estado_id' => 27],
            ['cidade' => 'Itaguatins', 'estado_id' => 27],
            ['cidade' => 'Itapiratins', 'estado_id' => 27],
            ['cidade' => 'Itaporã do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Jaú do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Juarina', 'estado_id' => 27],
            ['cidade' => 'Lagoa da Confusão', 'estado_id' => 27],
            ['cidade' => 'Lagoa do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Lajeado', 'estado_id' => 27],
            ['cidade' => 'Lavandeira', 'estado_id' => 27],
            ['cidade' => 'Lizarda', 'estado_id' => 27],
            ['cidade' => 'Luzinópolis', 'estado_id' => 27],
            ['cidade' => 'Marianópolis do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Mateiros', 'estado_id' => 27],
            ['cidade' => 'Maurilândia do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Miracema do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Miranorte', 'estado_id' => 27],
            ['cidade' => 'Monte do Carmo', 'estado_id' => 27],
            ['cidade' => 'Monte Santo do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Muricilândia', 'estado_id' => 27],
            ['cidade' => 'Natividade', 'estado_id' => 27],
            ['cidade' => 'Nazaré', 'estado_id' => 27],
            ['cidade' => 'Nova Olinda', 'estado_id' => 27],
            ['cidade' => 'Nova Rosalândia', 'estado_id' => 27],
            ['cidade' => 'Novo Acordo', 'estado_id' => 27],
            ['cidade' => 'Novo Alegre', 'estado_id' => 27],
            ['cidade' => 'Novo Jardim', 'estado_id' => 27],
            ['cidade' => 'Oliveira de Fátima', 'estado_id' => 27],
            ['cidade' => 'Palmas', 'estado_id' => 27],
            ['cidade' => 'Palmeirante', 'estado_id' => 27],
            ['cidade' => 'Palmeiras do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Palmeirópolis', 'estado_id' => 27],
            ['cidade' => 'Paraíso do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Paranã', 'estado_id' => 27],
            ['cidade' => 'Pau d`Arco', 'estado_id' => 27],
            ['cidade' => 'Pedro Afonso', 'estado_id' => 27],
            ['cidade' => 'Peixe', 'estado_id' => 27],
            ['cidade' => 'Pequizeiro', 'estado_id' => 27],
            ['cidade' => 'Pindorama do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Piraquê', 'estado_id' => 27],
            ['cidade' => 'Pium', 'estado_id' => 27],
            ['cidade' => 'Ponte Alta do Bom Jesus', 'estado_id' => 27],
            ['cidade' => 'Ponte Alta do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Porto Alegre do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Porto Nacional', 'estado_id' => 27],
            ['cidade' => 'Praia Norte', 'estado_id' => 27],
            ['cidade' => 'Presidente Kennedy', 'estado_id' => 27],
            ['cidade' => 'Pugmil', 'estado_id' => 27],
            ['cidade' => 'Recursolândia', 'estado_id' => 27],
            ['cidade' => 'Riachinho', 'estado_id' => 27],
            ['cidade' => 'Rio da Conceição', 'estado_id' => 27],
            ['cidade' => 'Rio dos Bois', 'estado_id' => 27],
            ['cidade' => 'Rio Sono', 'estado_id' => 27],
            ['cidade' => 'Sampaio', 'estado_id' => 27],
            ['cidade' => 'Sandolândia', 'estado_id' => 27],
            ['cidade' => 'Santa Fé do Araguaia', 'estado_id' => 27],
            ['cidade' => 'Santa Maria do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Santa Rita do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Santa Rosa do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Santa Tereza do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Santa Terezinha do Tocantins', 'estado_id' => 27],
            ['cidade' => 'São Bento do Tocantins', 'estado_id' => 27],
            ['cidade' => 'São Félix do Tocantins', 'estado_id' => 27],
            ['cidade' => 'São Miguel do Tocantins', 'estado_id' => 27],
            ['cidade' => 'São Salvador do Tocantins', 'estado_id' => 27],
            ['cidade' => 'São Sebastião do Tocantins', 'estado_id' => 27],
            ['cidade' => 'São Valério da Natividade', 'estado_id' => 27],
            ['cidade' => 'Silvanópolis', 'estado_id' => 27],
            ['cidade' => 'Sítio Novo do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Sucupira', 'estado_id' => 27],
            ['cidade' => 'Taguatinga', 'estado_id' => 27],
            ['cidade' => 'Taipas do Tocantins', 'estado_id' => 27],
            ['cidade' => 'Talismã', 'estado_id' => 27],
            ['cidade' => 'Tocantínia', 'estado_id' => 27],
            ['cidade' => 'Tocantinópolis', 'estado_id' => 27],
            ['cidade' => 'Tupirama', 'estado_id' => 27],
            ['cidade' => 'Tupiratins', 'estado_id' => 27],
            ['cidade' => 'Wanderlândia', 'estado_id' => 27],
            ['cidade' => 'Xambioá', 'estado_id' => 27]
        ]);

        $this->command->info('Cidades de Tocantins importadas com sucesso!');
    }
}
