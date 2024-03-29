<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CidadesAlagoasSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
            ['cidade' => 'Água Branca', 'estado_id' => 2],
            ['cidade' => 'Anadia', 'estado_id' => 2],
            ['cidade' => 'Arapiraca', 'estado_id' => 2],
            ['cidade' => 'Atalaia', 'estado_id' => 2],
            ['cidade' => 'Barra de Santo Antônio', 'estado_id' => 2],
            ['cidade' => 'Barra de São Miguel', 'estado_id' => 2],
            ['cidade' => 'Batalha', 'estado_id' => 2],
            ['cidade' => 'Belém', 'estado_id' => 2],
            ['cidade' => 'Belo Monte', 'estado_id' => 2],
            ['cidade' => 'Boca da Mata', 'estado_id' => 2],
            ['cidade' => 'Branquinha', 'estado_id' => 2],
            ['cidade' => 'Cacimbinhas', 'estado_id' => 2],
            ['cidade' => 'Cajueiro', 'estado_id' => 2],
            ['cidade' => 'Campestre', 'estado_id' => 2],
            ['cidade' => 'Campo Alegre', 'estado_id' => 2],
            ['cidade' => 'Campo Grande', 'estado_id' => 2],
            ['cidade' => 'Canapi', 'estado_id' => 2],
            ['cidade' => 'Capela', 'estado_id' => 2],
            ['cidade' => 'Carneiros', 'estado_id' => 2],
            ['cidade' => 'Chã Preta', 'estado_id' => 2],
            ['cidade' => 'Coité do Nóia', 'estado_id' => 2],
            ['cidade' => 'Colônia Leopoldina', 'estado_id' => 2],
            ['cidade' => 'Coqueiro Seco', 'estado_id' => 2],
            ['cidade' => 'Coruripe', 'estado_id' => 2],
            ['cidade' => 'Craíbas', 'estado_id' => 2],
            ['cidade' => 'Delmiro Gouveia', 'estado_id' => 2],
            ['cidade' => 'Dois Riachos', 'estado_id' => 2],
            ['cidade' => 'Estrela de Alagoas', 'estado_id' => 2],
            ['cidade' => 'Feira Grande', 'estado_id' => 2],
            ['cidade' => 'Feliz Deserto', 'estado_id' => 2],
            ['cidade' => 'Flexeiras', 'estado_id' => 2],
            ['cidade' => 'Girau do Ponciano', 'estado_id' => 2],
            ['cidade' => 'Ibateguara', 'estado_id' => 2],
            ['cidade' => 'Igaci', 'estado_id' => 2],
            ['cidade' => 'Igreja Nova', 'estado_id' => 2],
            ['cidade' => 'Inhapi', 'estado_id' => 2],
            ['cidade' => 'Jacaré dos Homens', 'estado_id' => 2],
            ['cidade' => 'Jacuípe', 'estado_id' => 2],
            ['cidade' => 'Japaratinga', 'estado_id' => 2],
            ['cidade' => 'Jaramataia', 'estado_id' => 2],
            ['cidade' => 'Jequiá da Praia', 'estado_id' => 2],
            ['cidade' => 'Joaquim Gomes', 'estado_id' => 2],
            ['cidade' => 'Jundiá', 'estado_id' => 2],
            ['cidade' => 'Junqueiro', 'estado_id' => 2],
            ['cidade' => 'Lagoa da Canoa', 'estado_id' => 2],
            ['cidade' => 'Limoeiro de Anadia', 'estado_id' => 2],
            ['cidade' => 'Maceió', 'estado_id' => 2],
            ['cidade' => 'Major Isidoro', 'estado_id' => 2],
            ['cidade' => 'Mar Vermelho', 'estado_id' => 2],
            ['cidade' => 'Maragogi', 'estado_id' => 2],
            ['cidade' => 'Maravilha', 'estado_id' => 2],
            ['cidade' => 'Marechal Deodoro', 'estado_id' => 2],
            ['cidade' => 'Maribondo', 'estado_id' => 2],
            ['cidade' => 'Mata Grande', 'estado_id' => 2],
            ['cidade' => 'Matriz de Camaragibe', 'estado_id' => 2],
            ['cidade' => 'Messias', 'estado_id' => 2],
            ['cidade' => 'Minador do Negrão', 'estado_id' => 2],
            ['cidade' => 'Monteirópolis', 'estado_id' => 2],
            ['cidade' => 'Murici', 'estado_id' => 2],
            ['cidade' => 'Novo Lino', 'estado_id' => 2],
            ['cidade' => 'Olho d`Água das Flores', 'estado_id' => 2],
            ['cidade' => 'Olho d`Água do Casado', 'estado_id' => 2],
            ['cidade' => 'Olho d`Água Grande', 'estado_id' => 2],
            ['cidade' => 'Olivença', 'estado_id' => 2],
            ['cidade' => 'Ouro Branco', 'estado_id' => 2],
            ['cidade' => 'Palestina', 'estado_id' => 2],
            ['cidade' => 'Palmeira dos Índios', 'estado_id' => 2],
            ['cidade' => 'Pão de Açúcar', 'estado_id' => 2],
            ['cidade' => 'Pariconha', 'estado_id' => 2],
            ['cidade' => 'Paripueira', 'estado_id' => 2],
            ['cidade' => 'Passo de Camaragibe', 'estado_id' => 2],
            ['cidade' => 'Paulo Jacinto', 'estado_id' => 2],
            ['cidade' => 'Penedo', 'estado_id' => 2],
            ['cidade' => 'Piaçabuçu', 'estado_id' => 2],
            ['cidade' => 'Pilar', 'estado_id' => 2],
            ['cidade' => 'Pindoba', 'estado_id' => 2],
            ['cidade' => 'Piranhas', 'estado_id' => 2],
            ['cidade' => 'Poço das Trincheiras', 'estado_id' => 2],
            ['cidade' => 'Porto Calvo', 'estado_id' => 2],
            ['cidade' => 'Porto de Pedras', 'estado_id' => 2],
            ['cidade' => 'Porto Real do Colégio', 'estado_id' => 2],
            ['cidade' => 'Quebrangulo', 'estado_id' => 2],
            ['cidade' => 'Rio Largo', 'estado_id' => 2],
            ['cidade' => 'Roteiro', 'estado_id' => 2],
            ['cidade' => 'Santa Luzia do Norte', 'estado_id' => 2],
            ['cidade' => 'Santana do Ipanema', 'estado_id' => 2],
            ['cidade' => 'Santana do Mundaú', 'estado_id' => 2],
            ['cidade' => 'São Brás', 'estado_id' => 2],
            ['cidade' => 'São José da Laje', 'estado_id' => 2],
            ['cidade' => 'São José da Tapera', 'estado_id' => 2],
            ['cidade' => 'São Luís do Quitunde', 'estado_id' => 2],
            ['cidade' => 'São Miguel dos Campos', 'estado_id' => 2],
            ['cidade' => 'São Miguel dos Milagres', 'estado_id' => 2],
            ['cidade' => 'São Sebastião', 'estado_id' => 2],
            ['cidade' => 'Satuba', 'estado_id' => 2],
            ['cidade' => 'Senador Rui Palmeira', 'estado_id' => 2],
            ['cidade' => 'Tanque d`Arca', 'estado_id' => 2],
            ['cidade' => 'Taquarana', 'estado_id' => 2],
            ['cidade' => 'Teotônio Vilela', 'estado_id' => 2],
            ['cidade' => 'Traipu', 'estado_id' => 2],
            ['cidade' => 'União dos Palmares', 'estado_id' => 2],
            ['cidade' => 'Viçosa', 'estado_id' => 2]
        ]);

        $this->command->info('Cidades do Alagoas importadas com sucesso!');
    }
}
