<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CidadesGoiasSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['cidade' => 'Abadia de Goiás', 'estado_id' => 9],
            ['cidade' => 'Abadiânia', 'estado_id' => 9],
            ['cidade' => 'Acreúna', 'estado_id' => 9],
            ['cidade' => 'Adelândia', 'estado_id' => 9],
            ['cidade' => 'Água Fria de Goiás', 'estado_id' => 9],
            ['cidade' => 'Água Limpa', 'estado_id' => 9],
            ['cidade' => 'Águas Lindas de Goiás', 'estado_id' => 9],
            ['cidade' => 'Alexânia', 'estado_id' => 9],
            ['cidade' => 'Aloândia', 'estado_id' => 9],
            ['cidade' => 'Alto Horizonte', 'estado_id' => 9],
            ['cidade' => 'Alto Paraíso de Goiás', 'estado_id' => 9],
            ['cidade' => 'Alvorada do Norte', 'estado_id' => 9],
            ['cidade' => 'Amaralina', 'estado_id' => 9],
            ['cidade' => 'Americano do Brasil', 'estado_id' => 9],
            ['cidade' => 'Amorinópolis', 'estado_id' => 9],
            ['cidade' => 'Anápolis', 'estado_id' => 9],
            ['cidade' => 'Anhanguera', 'estado_id' => 9],
            ['cidade' => 'Anicuns', 'estado_id' => 9],
            ['cidade' => 'Aparecida de Goiânia', 'estado_id' => 9],
            ['cidade' => 'Aparecida do Rio Doce', 'estado_id' => 9],
            ['cidade' => 'Aporé', 'estado_id' => 9],
            ['cidade' => 'Araçu', 'estado_id' => 9],
            ['cidade' => 'Aragarças', 'estado_id' => 9],
            ['cidade' => 'Aragoiânia', 'estado_id' => 9],
            ['cidade' => 'Araguapaz', 'estado_id' => 9],
            ['cidade' => 'Arenópolis', 'estado_id' => 9],
            ['cidade' => 'Aruanã', 'estado_id' => 9],
            ['cidade' => 'Aurilândia', 'estado_id' => 9],
            ['cidade' => 'Avelinópolis', 'estado_id' => 9],
            ['cidade' => 'Baliza', 'estado_id' => 9],
            ['cidade' => 'Barro Alto', 'estado_id' => 9],
            ['cidade' => 'Bela Vista de Goiás', 'estado_id' => 9],
            ['cidade' => 'Bom Jardim de Goiás', 'estado_id' => 9],
            ['cidade' => 'Bom Jesus de Goiás', 'estado_id' => 9],
            ['cidade' => 'Bonfinópolis', 'estado_id' => 9],
            ['cidade' => 'Bonópolis', 'estado_id' => 9],
            ['cidade' => 'Brazabrantes', 'estado_id' => 9],
            ['cidade' => 'Britânia', 'estado_id' => 9],
            ['cidade' => 'Buriti Alegre', 'estado_id' => 9],
            ['cidade' => 'Buriti de Goiás', 'estado_id' => 9],
            ['cidade' => 'Buritinópolis', 'estado_id' => 9],
            ['cidade' => 'Cabeceiras', 'estado_id' => 9],
            ['cidade' => 'Cachoeira Alta', 'estado_id' => 9],
            ['cidade' => 'Cachoeira de Goiás', 'estado_id' => 9],
            ['cidade' => 'Cachoeira Dourada', 'estado_id' => 9],
            ['cidade' => 'Caçu', 'estado_id' => 9],
            ['cidade' => 'Caiapônia', 'estado_id' => 9],
            ['cidade' => 'Caldas Novas', 'estado_id' => 9],
            ['cidade' => 'Caldazinha', 'estado_id' => 9],
            ['cidade' => 'Campestre de Goiás', 'estado_id' => 9],
            ['cidade' => 'Campinaçu', 'estado_id' => 9],
            ['cidade' => 'Campinorte', 'estado_id' => 9],
            ['cidade' => 'Campo Alegre de Goiás', 'estado_id' => 9],
            ['cidade' => 'Campo Limpo de Goiás', 'estado_id' => 9],
            ['cidade' => 'Campos Belos', 'estado_id' => 9],
            ['cidade' => 'Campos Verdes', 'estado_id' => 9],
            ['cidade' => 'Carmo do Rio Verde', 'estado_id' => 9],
            ['cidade' => 'Castelândia', 'estado_id' => 9],
            ['cidade' => 'Catalão', 'estado_id' => 9],
            ['cidade' => 'Caturaí', 'estado_id' => 9],
            ['cidade' => 'Cavalcante', 'estado_id' => 9],
            ['cidade' => 'Ceres', 'estado_id' => 9],
            ['cidade' => 'Cezarina', 'estado_id' => 9],
            ['cidade' => 'Chapadão do Céu', 'estado_id' => 9],
            ['cidade' => 'Cidade Ocidental', 'estado_id' => 9],
            ['cidade' => 'Cocalzinho de Goiás', 'estado_id' => 9],
            ['cidade' => 'Colinas do Sul', 'estado_id' => 9],
            ['cidade' => 'Córrego do Ouro', 'estado_id' => 9],
            ['cidade' => 'Corumbá de Goiás', 'estado_id' => 9],
            ['cidade' => 'Corumbaíba', 'estado_id' => 9],
            ['cidade' => 'Cristalina', 'estado_id' => 9],
            ['cidade' => 'Cristianópolis', 'estado_id' => 9],
            ['cidade' => 'Crixás', 'estado_id' => 9],
            ['cidade' => 'Cromínia', 'estado_id' => 9],
            ['cidade' => 'Cumari', 'estado_id' => 9],
            ['cidade' => 'Damianópolis', 'estado_id' => 9],
            ['cidade' => 'Damolândia', 'estado_id' => 9],
            ['cidade' => 'Davinópolis', 'estado_id' => 9],
            ['cidade' => 'Diorama', 'estado_id' => 9],
            ['cidade' => 'Divinópolis de Goiás', 'estado_id' => 9],
            ['cidade' => 'Doverlândia', 'estado_id' => 9],
            ['cidade' => 'Edealina', 'estado_id' => 9],
            ['cidade' => 'Edéia', 'estado_id' => 9],
            ['cidade' => 'Estrela do Norte', 'estado_id' => 9],
            ['cidade' => 'Faina', 'estado_id' => 9],
            ['cidade' => 'Fazenda Nova', 'estado_id' => 9],
            ['cidade' => 'Firminópolis', 'estado_id' => 9],
            ['cidade' => 'Flores de Goiás', 'estado_id' => 9],
            ['cidade' => 'Formosa', 'estado_id' => 9],
            ['cidade' => 'Formoso', 'estado_id' => 9],
            ['cidade' => 'Gameleira de Goiás', 'estado_id' => 9],
            ['cidade' => 'Goianápolis', 'estado_id' => 9],
            ['cidade' => 'Goiandira', 'estado_id' => 9],
            ['cidade' => 'Goianésia', 'estado_id' => 9],
            ['cidade' => 'Goiânia', 'estado_id' => 9],
            ['cidade' => 'Goianira', 'estado_id' => 9],
            ['cidade' => 'Goiás', 'estado_id' => 9],
            ['cidade' => 'Goiatuba', 'estado_id' => 9],
            ['cidade' => 'Gouvelândia', 'estado_id' => 9],
            ['cidade' => 'Guapó', 'estado_id' => 9],
            ['cidade' => 'Guaraíta', 'estado_id' => 9],
            ['cidade' => 'Guarani de Goiás', 'estado_id' => 9],
            ['cidade' => 'Guarinos', 'estado_id' => 9],
            ['cidade' => 'Heitoraí', 'estado_id' => 9],
            ['cidade' => 'Hidrolândia', 'estado_id' => 9],
            ['cidade' => 'Hidrolina', 'estado_id' => 9],
            ['cidade' => 'Iaciara', 'estado_id' => 9],
            ['cidade' => 'Inaciolândia', 'estado_id' => 9],
            ['cidade' => 'Indiara', 'estado_id' => 9],
            ['cidade' => 'Inhumas', 'estado_id' => 9],
            ['cidade' => 'Ipameri', 'estado_id' => 9],
            ['cidade' => 'Ipiranga de Goiás', 'estado_id' => 9],
            ['cidade' => 'Iporá', 'estado_id' => 9],
            ['cidade' => 'Israelândia', 'estado_id' => 9],
            ['cidade' => 'Itaberaí', 'estado_id' => 9],
            ['cidade' => 'Itaguari', 'estado_id' => 9],
            ['cidade' => 'Itaguaru', 'estado_id' => 9],
            ['cidade' => 'Itajá', 'estado_id' => 9],
            ['cidade' => 'Itapaci', 'estado_id' => 9],
            ['cidade' => 'Itapirapuã', 'estado_id' => 9],
            ['cidade' => 'Itapuranga', 'estado_id' => 9],
            ['cidade' => 'Itarumã', 'estado_id' => 9],
            ['cidade' => 'Itauçu', 'estado_id' => 9],
            ['cidade' => 'Itumbiara', 'estado_id' => 9],
            ['cidade' => 'Ivolândia', 'estado_id' => 9],
            ['cidade' => 'Jandaia', 'estado_id' => 9],
            ['cidade' => 'Jaraguá', 'estado_id' => 9],
            ['cidade' => 'Jataí', 'estado_id' => 9],
            ['cidade' => 'Jaupaci', 'estado_id' => 9],
            ['cidade' => 'Jesúpolis', 'estado_id' => 9],
            ['cidade' => 'Joviânia', 'estado_id' => 9],
            ['cidade' => 'Jussara', 'estado_id' => 9],
            ['cidade' => 'Lagoa Santa', 'estado_id' => 9],
            ['cidade' => 'Leopoldo de Bulhões', 'estado_id' => 9],
            ['cidade' => 'Luziânia', 'estado_id' => 9],
            ['cidade' => 'Mairipotaba', 'estado_id' => 9],
            ['cidade' => 'Mambaí', 'estado_id' => 9],
            ['cidade' => 'Mara Rosa', 'estado_id' => 9],
            ['cidade' => 'Marzagão', 'estado_id' => 9],
            ['cidade' => 'Matrinchã', 'estado_id' => 9],
            ['cidade' => 'Maurilândia', 'estado_id' => 9],
            ['cidade' => 'Mimoso de Goiás', 'estado_id' => 9],
            ['cidade' => 'Minaçu', 'estado_id' => 9],
            ['cidade' => 'Mineiros', 'estado_id' => 9],
            ['cidade' => 'Moiporá', 'estado_id' => 9],
            ['cidade' => 'Monte Alegre de Goiás', 'estado_id' => 9],
            ['cidade' => 'Montes Claros de Goiás', 'estado_id' => 9],
            ['cidade' => 'Montividiu', 'estado_id' => 9],
            ['cidade' => 'Montividiu do Norte', 'estado_id' => 9],
            ['cidade' => 'Morrinhos', 'estado_id' => 9],
            ['cidade' => 'Morro Agudo de Goiás', 'estado_id' => 9],
            ['cidade' => 'Mossâmedes', 'estado_id' => 9],
            ['cidade' => 'Mozarlândia', 'estado_id' => 9],
            ['cidade' => 'Mundo Novo', 'estado_id' => 9],
            ['cidade' => 'Mutunópolis', 'estado_id' => 9],
            ['cidade' => 'Nazário', 'estado_id' => 9],
            ['cidade' => 'Nerópolis', 'estado_id' => 9],
            ['cidade' => 'Niquelândia', 'estado_id' => 9],
            ['cidade' => 'Nova América', 'estado_id' => 9],
            ['cidade' => 'Nova Aurora', 'estado_id' => 9],
            ['cidade' => 'Nova Crixás', 'estado_id' => 9],
            ['cidade' => 'Nova Glória', 'estado_id' => 9],
            ['cidade' => 'Nova Iguaçu de Goiás', 'estado_id' => 9],
            ['cidade' => 'Nova Roma', 'estado_id' => 9],
            ['cidade' => 'Nova Veneza', 'estado_id' => 9],
            ['cidade' => 'Novo Brasil', 'estado_id' => 9],
            ['cidade' => 'Novo Gama', 'estado_id' => 9],
            ['cidade' => 'Novo Planalto', 'estado_id' => 9],
            ['cidade' => 'Orizona', 'estado_id' => 9],
            ['cidade' => 'Ouro Verde de Goiás', 'estado_id' => 9],
            ['cidade' => 'Ouvidor', 'estado_id' => 9],
            ['cidade' => 'Padre Bernardo', 'estado_id' => 9],
            ['cidade' => 'Palestina de Goiás', 'estado_id' => 9],
            ['cidade' => 'Palmeiras de Goiás', 'estado_id' => 9],
            ['cidade' => 'Palmelo', 'estado_id' => 9],
            ['cidade' => 'Palminópolis', 'estado_id' => 9],
            ['cidade' => 'Panamá', 'estado_id' => 9],
            ['cidade' => 'Paranaiguara', 'estado_id' => 9],
            ['cidade' => 'Paraúna', 'estado_id' => 9],
            ['cidade' => 'Perolândia', 'estado_id' => 9],
            ['cidade' => 'Petrolina de Goiás', 'estado_id' => 9],
            ['cidade' => 'Pilar de Goiás', 'estado_id' => 9],
            ['cidade' => 'Piracanjuba', 'estado_id' => 9],
            ['cidade' => 'Piranhas', 'estado_id' => 9],
            ['cidade' => 'Pirenópolis', 'estado_id' => 9],
            ['cidade' => 'Pires do Rio', 'estado_id' => 9],
            ['cidade' => 'Planaltina', 'estado_id' => 9],
            ['cidade' => 'Pontalina', 'estado_id' => 9],
            ['cidade' => 'Porangatu', 'estado_id' => 9],
            ['cidade' => 'Porteirão', 'estado_id' => 9],
            ['cidade' => 'Portelândia', 'estado_id' => 9],
            ['cidade' => 'Posse', 'estado_id' => 9],
            ['cidade' => 'Professor Jamil', 'estado_id' => 9],
            ['cidade' => 'Quirinópolis', 'estado_id' => 9],
            ['cidade' => 'Rialma', 'estado_id' => 9],
            ['cidade' => 'Rianápolis', 'estado_id' => 9],
            ['cidade' => 'Rio Quente', 'estado_id' => 9],
            ['cidade' => 'Rio Verde', 'estado_id' => 9],
            ['cidade' => 'Rubiataba', 'estado_id' => 9],
            ['cidade' => 'Sanclerlândia', 'estado_id' => 9],
            ['cidade' => 'Santa Bárbara de Goiás', 'estado_id' => 9],
            ['cidade' => 'Santa Cruz de Goiás', 'estado_id' => 9],
            ['cidade' => 'Santa Fé de Goiás', 'estado_id' => 9],
            ['cidade' => 'Santa Helena de Goiás', 'estado_id' => 9],
            ['cidade' => 'Santa Isabel', 'estado_id' => 9],
            ['cidade' => 'Santa Rita do Araguaia', 'estado_id' => 9],
            ['cidade' => 'Santa Rita do Novo Destino', 'estado_id' => 9],
            ['cidade' => 'Santa Rosa de Goiás', 'estado_id' => 9],
            ['cidade' => 'Santa Tereza de Goiás', 'estado_id' => 9],
            ['cidade' => 'Santa Terezinha de Goiás', 'estado_id' => 9],
            ['cidade' => 'Santo Antônio da Barra', 'estado_id' => 9],
            ['cidade' => 'Santo Antônio de Goiás', 'estado_id' => 9],
            ['cidade' => 'Santo Antônio do Descoberto', 'estado_id' => 9],
            ['cidade' => 'São Domingos', 'estado_id' => 9],
            ['cidade' => 'São Francisco de Goiás', 'estado_id' => 9],
            ['cidade' => 'São João d`Aliança', 'estado_id' => 9],
            ['cidade' => 'São João da Paraúna', 'estado_id' => 9],
            ['cidade' => 'São Luís de Montes Belos', 'estado_id' => 9],
            ['cidade' => 'São Luíz do Norte', 'estado_id' => 9],
            ['cidade' => 'São Miguel do Araguaia', 'estado_id' => 9],
            ['cidade' => 'São Miguel do Passa Quatro', 'estado_id' => 9],
            ['cidade' => 'São Patrício', 'estado_id' => 9],
            ['cidade' => 'São Simão', 'estado_id' => 9],
            ['cidade' => 'Senador Canedo', 'estado_id' => 9],
            ['cidade' => 'Serranópolis', 'estado_id' => 9],
            ['cidade' => 'Silvânia', 'estado_id' => 9],
            ['cidade' => 'Simolândia', 'estado_id' => 9],
            ['cidade' => 'Sítio d`Abadia', 'estado_id' => 9],
            ['cidade' => 'Taquaral de Goiás', 'estado_id' => 9],
            ['cidade' => 'Teresina de Goiás', 'estado_id' => 9],
            ['cidade' => 'Terezópolis de Goiás', 'estado_id' => 9],
            ['cidade' => 'Três Ranchos', 'estado_id' => 9],
            ['cidade' => 'Trindade', 'estado_id' => 9],
            ['cidade' => 'Trombas', 'estado_id' => 9],
            ['cidade' => 'Turvânia', 'estado_id' => 9],
            ['cidade' => 'Turvelândia', 'estado_id' => 9],
            ['cidade' => 'Uirapuru', 'estado_id' => 9],
            ['cidade' => 'Uruaçu', 'estado_id' => 9],
            ['cidade' => 'Uruana', 'estado_id' => 9],
            ['cidade' => 'Urutaí', 'estado_id' => 9],
            ['cidade' => 'Valparaíso de Goiás', 'estado_id' => 9],
            ['cidade' => 'Varjão', 'estado_id' => 9],
            ['cidade' => 'Vianópolis', 'estado_id' => 9],
            ['cidade' => 'Vicentinópolis', 'estado_id' => 9],
            ['cidade' => 'Vila Boa', 'estado_id' => 9],
            ['cidade' => 'Vila Propício', 'estado_id' => 9]
        ]);

        $this->command->info('Cidades de Goiás importadas com sucesso!');
    }
}
