<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CidadesCearaSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['cidade' => 'Abaiara', 'estado_id' => 6],
            ['cidade' => 'Acarape', 'estado_id' => 6],
            ['cidade' => 'Acaraú', 'estado_id' => 6],
            ['cidade' => 'Acopiara', 'estado_id' => 6],
            ['cidade' => 'Aiuaba', 'estado_id' => 6],
            ['cidade' => 'Alcântaras', 'estado_id' => 6],
            ['cidade' => 'Altaneira', 'estado_id' => 6],
            ['cidade' => 'Alto Santo', 'estado_id' => 6],
            ['cidade' => 'Amontada', 'estado_id' => 6],
            ['cidade' => 'Antonina do Norte', 'estado_id' => 6],
            ['cidade' => 'Apuiarés', 'estado_id' => 6],
            ['cidade' => 'Aquiraz', 'estado_id' => 6],
            ['cidade' => 'Aracati', 'estado_id' => 6],
            ['cidade' => 'Aracoiaba', 'estado_id' => 6],
            ['cidade' => 'Ararendá', 'estado_id' => 6],
            ['cidade' => 'Araripe', 'estado_id' => 6],
            ['cidade' => 'Aratuba', 'estado_id' => 6],
            ['cidade' => 'Arneiroz', 'estado_id' => 6],
            ['cidade' => 'Assaré', 'estado_id' => 6],
            ['cidade' => 'Aurora', 'estado_id' => 6],
            ['cidade' => 'Baixio', 'estado_id' => 6],
            ['cidade' => 'Banabuiú', 'estado_id' => 6],
            ['cidade' => 'Barbalha', 'estado_id' => 6],
            ['cidade' => 'Barreira', 'estado_id' => 6],
            ['cidade' => 'Barro', 'estado_id' => 6],
            ['cidade' => 'Barroquinha', 'estado_id' => 6],
            ['cidade' => 'Baturité', 'estado_id' => 6],
            ['cidade' => 'Beberibe', 'estado_id' => 6],
            ['cidade' => 'Bela Cruz', 'estado_id' => 6],
            ['cidade' => 'Boa Viagem', 'estado_id' => 6],
            ['cidade' => 'Brejo Santo', 'estado_id' => 6],
            ['cidade' => 'Camocim', 'estado_id' => 6],
            ['cidade' => 'Campos Sales', 'estado_id' => 6],
            ['cidade' => 'Canindé', 'estado_id' => 6],
            ['cidade' => 'Capistrano', 'estado_id' => 6],
            ['cidade' => 'Caridade', 'estado_id' => 6],
            ['cidade' => 'Cariré', 'estado_id' => 6],
            ['cidade' => 'Caririaçu', 'estado_id' => 6],
            ['cidade' => 'Cariús', 'estado_id' => 6],
            ['cidade' => 'Carnaubal', 'estado_id' => 6],
            ['cidade' => 'Cascavel', 'estado_id' => 6],
            ['cidade' => 'Catarina', 'estado_id' => 6],
            ['cidade' => 'Catunda', 'estado_id' => 6],
            ['cidade' => 'Caucaia', 'estado_id' => 6],
            ['cidade' => 'Cedro', 'estado_id' => 6],
            ['cidade' => 'Chaval', 'estado_id' => 6],
            ['cidade' => 'Choró', 'estado_id' => 6],
            ['cidade' => 'Chorozinho', 'estado_id' => 6],
            ['cidade' => 'Coreaú', 'estado_id' => 6],
            ['cidade' => 'Crateús', 'estado_id' => 6],
            ['cidade' => 'Crato', 'estado_id' => 6],
            ['cidade' => 'Croatá', 'estado_id' => 6],
            ['cidade' => 'Cruz', 'estado_id' => 6],
            ['cidade' => 'Deputado Irapuan Pinheiro', 'estado_id' => 6],
            ['cidade' => 'Ererê', 'estado_id' => 6],
            ['cidade' => 'Eusébio', 'estado_id' => 6],
            ['cidade' => 'Farias Brito', 'estado_id' => 6],
            ['cidade' => 'Forquilha', 'estado_id' => 6],
            ['cidade' => 'Fortaleza', 'estado_id' => 6],
            ['cidade' => 'Fortim', 'estado_id' => 6],
            ['cidade' => 'Frecheirinha', 'estado_id' => 6],
            ['cidade' => 'General Sampaio', 'estado_id' => 6],
            ['cidade' => 'Graça', 'estado_id' => 6],
            ['cidade' => 'Granja', 'estado_id' => 6],
            ['cidade' => 'Granjeiro', 'estado_id' => 6],
            ['cidade' => 'Groaíras', 'estado_id' => 6],
            ['cidade' => 'Guaiúba', 'estado_id' => 6],
            ['cidade' => 'Guaraciaba do Norte', 'estado_id' => 6],
            ['cidade' => 'Guaramiranga', 'estado_id' => 6],
            ['cidade' => 'Hidrolândia', 'estado_id' => 6],
            ['cidade' => 'Horizonte', 'estado_id' => 6],
            ['cidade' => 'Ibaretama', 'estado_id' => 6],
            ['cidade' => 'Ibiapina', 'estado_id' => 6],
            ['cidade' => 'Ibicuitinga', 'estado_id' => 6],
            ['cidade' => 'Icapuí', 'estado_id' => 6],
            ['cidade' => 'Icó', 'estado_id' => 6],
            ['cidade' => 'Iguatu', 'estado_id' => 6],
            ['cidade' => 'Independência', 'estado_id' => 6],
            ['cidade' => 'Ipaporanga', 'estado_id' => 6],
            ['cidade' => 'Ipaumirim', 'estado_id' => 6],
            ['cidade' => 'Ipu', 'estado_id' => 6],
            ['cidade' => 'Ipueiras', 'estado_id' => 6],
            ['cidade' => 'Iracema', 'estado_id' => 6],
            ['cidade' => 'Irauçuba', 'estado_id' => 6],
            ['cidade' => 'Itaiçaba', 'estado_id' => 6],
            ['cidade' => 'Itaitinga', 'estado_id' => 6],
            ['cidade' => 'Itapagé', 'estado_id' => 6],
            ['cidade' => 'Itapipoca', 'estado_id' => 6],
            ['cidade' => 'Itapiúna', 'estado_id' => 6],
            ['cidade' => 'Itarema', 'estado_id' => 6],
            ['cidade' => 'Itatira', 'estado_id' => 6],
            ['cidade' => 'Jaguaretama', 'estado_id' => 6],
            ['cidade' => 'Jaguaribara', 'estado_id' => 6],
            ['cidade' => 'Jaguaribe', 'estado_id' => 6],
            ['cidade' => 'Jaguaruana', 'estado_id' => 6],
            ['cidade' => 'Jardim', 'estado_id' => 6],
            ['cidade' => 'Jati', 'estado_id' => 6],
            ['cidade' => 'Jijoca de Jericoacoara', 'estado_id' => 6],
            ['cidade' => 'Juazeiro do Norte', 'estado_id' => 6],
            ['cidade' => 'Jucás', 'estado_id' => 6],
            ['cidade' => 'Lavras da Mangabeira', 'estado_id' => 6],
            ['cidade' => 'Limoeiro do Norte', 'estado_id' => 6],
            ['cidade' => 'Madalena', 'estado_id' => 6],
            ['cidade' => 'Maracanaú', 'estado_id' => 6],
            ['cidade' => 'Maranguape', 'estado_id' => 6],
            ['cidade' => 'Marco', 'estado_id' => 6],
            ['cidade' => 'Martinópole', 'estado_id' => 6],
            ['cidade' => 'Massapê', 'estado_id' => 6],
            ['cidade' => 'Mauriti', 'estado_id' => 6],
            ['cidade' => 'Meruoca', 'estado_id' => 6],
            ['cidade' => 'Milagres', 'estado_id' => 6],
            ['cidade' => 'Milhã', 'estado_id' => 6],
            ['cidade' => 'Miraíma', 'estado_id' => 6],
            ['cidade' => 'Missão Velha', 'estado_id' => 6],
            ['cidade' => 'Mombaça', 'estado_id' => 6],
            ['cidade' => 'Monsenhor Tabosa', 'estado_id' => 6],
            ['cidade' => 'Morada Nova', 'estado_id' => 6],
            ['cidade' => 'Moraújo', 'estado_id' => 6],
            ['cidade' => 'Morrinhos', 'estado_id' => 6],
            ['cidade' => 'Mucambo', 'estado_id' => 6],
            ['cidade' => 'Mulungu', 'estado_id' => 6],
            ['cidade' => 'Nova Olinda', 'estado_id' => 6],
            ['cidade' => 'Nova Russas', 'estado_id' => 6],
            ['cidade' => 'Novo Oriente', 'estado_id' => 6],
            ['cidade' => 'Ocara', 'estado_id' => 6],
            ['cidade' => 'Orós', 'estado_id' => 6],
            ['cidade' => 'Pacajus', 'estado_id' => 6],
            ['cidade' => 'Pacatuba', 'estado_id' => 6],
            ['cidade' => 'Pacoti', 'estado_id' => 6],
            ['cidade' => 'Pacujá', 'estado_id' => 6],
            ['cidade' => 'Palhano', 'estado_id' => 6],
            ['cidade' => 'Palmácia', 'estado_id' => 6],
            ['cidade' => 'Paracuru', 'estado_id' => 6],
            ['cidade' => 'Paraipaba', 'estado_id' => 6],
            ['cidade' => 'Parambu', 'estado_id' => 6],
            ['cidade' => 'Paramoti', 'estado_id' => 6],
            ['cidade' => 'Pedra Branca', 'estado_id' => 6],
            ['cidade' => 'Penaforte', 'estado_id' => 6],
            ['cidade' => 'Pentecoste', 'estado_id' => 6],
            ['cidade' => 'Pereiro', 'estado_id' => 6],
            ['cidade' => 'Pindoretama', 'estado_id' => 6],
            ['cidade' => 'Piquet Carneiro', 'estado_id' => 6],
            ['cidade' => 'Pires Ferreira', 'estado_id' => 6],
            ['cidade' => 'Poranga', 'estado_id' => 6],
            ['cidade' => 'Porteiras', 'estado_id' => 6],
            ['cidade' => 'Potengi', 'estado_id' => 6],
            ['cidade' => 'Potiretama', 'estado_id' => 6],
            ['cidade' => 'Quiterianópolis', 'estado_id' => 6],
            ['cidade' => 'Quixadá', 'estado_id' => 6],
            ['cidade' => 'Quixelô', 'estado_id' => 6],
            ['cidade' => 'Quixeramobim', 'estado_id' => 6],
            ['cidade' => 'Quixeré', 'estado_id' => 6],
            ['cidade' => 'Redenção', 'estado_id' => 6],
            ['cidade' => 'Reriutaba', 'estado_id' => 6],
            ['cidade' => 'Russas', 'estado_id' => 6],
            ['cidade' => 'Saboeiro', 'estado_id' => 6],
            ['cidade' => 'Salitre', 'estado_id' => 6],
            ['cidade' => 'Santa Quitéria', 'estado_id' => 6],
            ['cidade' => 'Santana do Acaraú', 'estado_id' => 6],
            ['cidade' => 'Santana do Cariri', 'estado_id' => 6],
            ['cidade' => 'São Benedito', 'estado_id' => 6],
            ['cidade' => 'São Gonçalo do Amarante', 'estado_id' => 6],
            ['cidade' => 'São João do Jaguaribe', 'estado_id' => 6],
            ['cidade' => 'São Luís do Curu', 'estado_id' => 6],
            ['cidade' => 'Senador Pompeu', 'estado_id' => 6],
            ['cidade' => 'Senador Sá', 'estado_id' => 6],
            ['cidade' => 'Sobral', 'estado_id' => 6],
            ['cidade' => 'Solonópole', 'estado_id' => 6],
            ['cidade' => 'Tabuleiro do Norte', 'estado_id' => 6],
            ['cidade' => 'Tamboril', 'estado_id' => 6],
            ['cidade' => 'Tarrafas', 'estado_id' => 6],
            ['cidade' => 'Tauá', 'estado_id' => 6],
            ['cidade' => 'Tejuçuoca', 'estado_id' => 6],
            ['cidade' => 'Tianguá', 'estado_id' => 6],
            ['cidade' => 'Trairi', 'estado_id' => 6],
            ['cidade' => 'Tururu', 'estado_id' => 6],
            ['cidade' => 'Ubajara', 'estado_id' => 6],
            ['cidade' => 'Umari', 'estado_id' => 6],
            ['cidade' => 'Umirim', 'estado_id' => 6],
            ['cidade' => 'Uruburetama', 'estado_id' => 6],
            ['cidade' => 'Uruoca', 'estado_id' => 6],
            ['cidade' => 'Varjota', 'estado_id' => 6],
            ['cidade' => 'Várzea Alegre', 'estado_id' => 6],
            ['cidade' => 'Viçosa do Ceará', 'estado_id' => 6]
        ]);

        $this->command->info('Cidades do Ceará importadas com sucesso!');
    }
}
