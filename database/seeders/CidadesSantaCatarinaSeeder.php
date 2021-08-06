<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CidadesSantaCatarinaSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['cidade' => 'Abdon Batista', 'estado_id' => 24],
            ['cidade' => 'Abelardo Luz', 'estado_id' => 24],
            ['cidade' => 'Agrolândia', 'estado_id' => 24],
            ['cidade' => 'Agronômica', 'estado_id' => 24],
            ['cidade' => 'Água Doce', 'estado_id' => 24],
            ['cidade' => 'Águas de Chapecó', 'estado_id' => 24],
            ['cidade' => 'Águas Frias', 'estado_id' => 24],
            ['cidade' => 'Águas Mornas', 'estado_id' => 24],
            ['cidade' => 'Alfredo Wagner', 'estado_id' => 24],
            ['cidade' => 'Alto Bela Vista', 'estado_id' => 24],
            ['cidade' => 'Anchieta', 'estado_id' => 24],
            ['cidade' => 'Angelina', 'estado_id' => 24],
            ['cidade' => 'Anita Garibaldi', 'estado_id' => 24],
            ['cidade' => 'Anitápolis', 'estado_id' => 24],
            ['cidade' => 'Antônio Carlos', 'estado_id' => 24],
            ['cidade' => 'Apiúna', 'estado_id' => 24],
            ['cidade' => 'Arabutã', 'estado_id' => 24],
            ['cidade' => 'Araquari', 'estado_id' => 24],
            ['cidade' => 'Araranguá', 'estado_id' => 24],
            ['cidade' => 'Armazém', 'estado_id' => 24],
            ['cidade' => 'Arroio Trinta', 'estado_id' => 24],
            ['cidade' => 'Arvoredo', 'estado_id' => 24],
            ['cidade' => 'Ascurra', 'estado_id' => 24],
            ['cidade' => 'Atalanta', 'estado_id' => 24],
            ['cidade' => 'Aurora', 'estado_id' => 24],
            ['cidade' => 'Balneário Arroio do Silva', 'estado_id' => 24],
            ['cidade' => 'Balneário Barra do Sul', 'estado_id' => 24],
            ['cidade' => 'Balneário Camboriú', 'estado_id' => 24],
            ['cidade' => 'Balneário Gaivota', 'estado_id' => 24],
            ['cidade' => 'Bandeirante', 'estado_id' => 24],
            ['cidade' => 'Barra Bonita', 'estado_id' => 24],
            ['cidade' => 'Barra Velha', 'estado_id' => 24],
            ['cidade' => 'Bela Vista do Toldo', 'estado_id' => 24],
            ['cidade' => 'Belmonte', 'estado_id' => 24],
            ['cidade' => 'Benedito Novo', 'estado_id' => 24],
            ['cidade' => 'Biguaçu', 'estado_id' => 24],
            ['cidade' => 'Blumenau', 'estado_id' => 24],
            ['cidade' => 'Bocaina do Sul', 'estado_id' => 24],
            ['cidade' => 'Bom Jardim da Serra', 'estado_id' => 24],
            ['cidade' => 'Bom Jesus', 'estado_id' => 24],
            ['cidade' => 'Bom Jesus do Oeste', 'estado_id' => 24],
            ['cidade' => 'Bom Retiro', 'estado_id' => 24],
            ['cidade' => 'Bombinhas', 'estado_id' => 24],
            ['cidade' => 'Botuverá', 'estado_id' => 24],
            ['cidade' => 'Braço do Norte', 'estado_id' => 24],
            ['cidade' => 'Braço do Trombudo', 'estado_id' => 24],
            ['cidade' => 'Brunópolis', 'estado_id' => 24],
            ['cidade' => 'Brusque', 'estado_id' => 24],
            ['cidade' => 'Caçador', 'estado_id' => 24],
            ['cidade' => 'Caibi', 'estado_id' => 24],
            ['cidade' => 'Calmon', 'estado_id' => 24],
            ['cidade' => 'Camboriú', 'estado_id' => 24],
            ['cidade' => 'Campo Alegre', 'estado_id' => 24],
            ['cidade' => 'Campo Belo do Sul', 'estado_id' => 24],
            ['cidade' => 'Campo Erê', 'estado_id' => 24],
            ['cidade' => 'Campos Novos', 'estado_id' => 24],
            ['cidade' => 'Canelinha', 'estado_id' => 24],
            ['cidade' => 'Canoinhas', 'estado_id' => 24],
            ['cidade' => 'Capão Alto', 'estado_id' => 24],
            ['cidade' => 'Capinzal', 'estado_id' => 24],
            ['cidade' => 'Capivari de Baixo', 'estado_id' => 24],
            ['cidade' => 'Catanduvas', 'estado_id' => 24],
            ['cidade' => 'Caxambu do Sul', 'estado_id' => 24],
            ['cidade' => 'Celso Ramos', 'estado_id' => 24],
            ['cidade' => 'Cerro Negro', 'estado_id' => 24],
            ['cidade' => 'Chapadão do Lageado', 'estado_id' => 24],
            ['cidade' => 'Chapecó', 'estado_id' => 24],
            ['cidade' => 'Cocal do Sul', 'estado_id' => 24],
            ['cidade' => 'Concórdia', 'estado_id' => 24],
            ['cidade' => 'Cordilheira Alta', 'estado_id' => 24],
            ['cidade' => 'Coronel Freitas', 'estado_id' => 24],
            ['cidade' => 'Coronel Martins', 'estado_id' => 24],
            ['cidade' => 'Correia Pinto', 'estado_id' => 24],
            ['cidade' => 'Corupá', 'estado_id' => 24],
            ['cidade' => 'Criciúma', 'estado_id' => 24],
            ['cidade' => 'Cunha Porã', 'estado_id' => 24],
            ['cidade' => 'Cunhataí', 'estado_id' => 24],
            ['cidade' => 'Curitibanos', 'estado_id' => 24],
            ['cidade' => 'Descanso', 'estado_id' => 24],
            ['cidade' => 'Dionísio Cerqueira', 'estado_id' => 24],
            ['cidade' => 'Dona Emma', 'estado_id' => 24],
            ['cidade' => 'Doutor Pedrinho', 'estado_id' => 24],
            ['cidade' => 'Entre Rios', 'estado_id' => 24],
            ['cidade' => 'Ermo', 'estado_id' => 24],
            ['cidade' => 'Erval Velho', 'estado_id' => 24],
            ['cidade' => 'Faxinal dos Guedes', 'estado_id' => 24],
            ['cidade' => 'Flor do Sertão', 'estado_id' => 24],
            ['cidade' => 'Florianópolis', 'estado_id' => 24],
            ['cidade' => 'Formosa do Sul', 'estado_id' => 24],
            ['cidade' => 'Forquilhinha', 'estado_id' => 24],
            ['cidade' => 'Fraiburgo', 'estado_id' => 24],
            ['cidade' => 'Frei Rogério', 'estado_id' => 24],
            ['cidade' => 'Galvão', 'estado_id' => 24],
            ['cidade' => 'Garopaba', 'estado_id' => 24],
            ['cidade' => 'Garuva', 'estado_id' => 24],
            ['cidade' => 'Gaspar', 'estado_id' => 24],
            ['cidade' => 'Governador Celso Ramos', 'estado_id' => 24],
            ['cidade' => 'Grão Pará', 'estado_id' => 24],
            ['cidade' => 'Gravatal', 'estado_id' => 24],
            ['cidade' => 'Guabiruba', 'estado_id' => 24],
            ['cidade' => 'Guaraciaba', 'estado_id' => 24],
            ['cidade' => 'Guaramirim', 'estado_id' => 24],
            ['cidade' => 'Guarujá do Sul', 'estado_id' => 24],
            ['cidade' => 'Guatambú', 'estado_id' => 24],
            ['cidade' => 'Herval d`Oeste', 'estado_id' => 24],
            ['cidade' => 'Ibiam', 'estado_id' => 24],
            ['cidade' => 'Ibicaré', 'estado_id' => 24],
            ['cidade' => 'Ibirama', 'estado_id' => 24],
            ['cidade' => 'Içara', 'estado_id' => 24],
            ['cidade' => 'Ilhota', 'estado_id' => 24],
            ['cidade' => 'Imaruí', 'estado_id' => 24],
            ['cidade' => 'Imbituba', 'estado_id' => 24],
            ['cidade' => 'Imbuia', 'estado_id' => 24],
            ['cidade' => 'Indaial', 'estado_id' => 24],
            ['cidade' => 'Iomerê', 'estado_id' => 24],
            ['cidade' => 'Ipira', 'estado_id' => 24],
            ['cidade' => 'Iporã do Oeste', 'estado_id' => 24],
            ['cidade' => 'Ipuaçu', 'estado_id' => 24],
            ['cidade' => 'Ipumirim', 'estado_id' => 24],
            ['cidade' => 'Iraceminha', 'estado_id' => 24],
            ['cidade' => 'Irani', 'estado_id' => 24],
            ['cidade' => 'Irati', 'estado_id' => 24],
            ['cidade' => 'Irineópolis', 'estado_id' => 24],
            ['cidade' => 'Itá', 'estado_id' => 24],
            ['cidade' => 'Itaiópolis', 'estado_id' => 24],
            ['cidade' => 'Itajaí', 'estado_id' => 24],
            ['cidade' => 'Itapema', 'estado_id' => 24],
            ['cidade' => 'Itapiranga', 'estado_id' => 24],
            ['cidade' => 'Itapoá', 'estado_id' => 24],
            ['cidade' => 'Ituporanga', 'estado_id' => 24],
            ['cidade' => 'Jaborá', 'estado_id' => 24],
            ['cidade' => 'Jacinto Machado', 'estado_id' => 24],
            ['cidade' => 'Jaguaruna', 'estado_id' => 24],
            ['cidade' => 'Jaraguá do Sul', 'estado_id' => 24],
            ['cidade' => 'Jardinópolis', 'estado_id' => 24],
            ['cidade' => 'Joaçaba', 'estado_id' => 24],
            ['cidade' => 'Joinville', 'estado_id' => 24],
            ['cidade' => 'José Boiteux', 'estado_id' => 24],
            ['cidade' => 'Jupiá', 'estado_id' => 24],
            ['cidade' => 'Lacerdópolis', 'estado_id' => 24],
            ['cidade' => 'Lages', 'estado_id' => 24],
            ['cidade' => 'Laguna', 'estado_id' => 24],
            ['cidade' => 'Lajeado Grande', 'estado_id' => 24],
            ['cidade' => 'Laurentino', 'estado_id' => 24],
            ['cidade' => 'Lauro Muller', 'estado_id' => 24],
            ['cidade' => 'Lebon Régis', 'estado_id' => 24],
            ['cidade' => 'Leoberto Leal', 'estado_id' => 24],
            ['cidade' => 'Lindóia do Sul', 'estado_id' => 24],
            ['cidade' => 'Lontras', 'estado_id' => 24],
            ['cidade' => 'Luiz Alves', 'estado_id' => 24],
            ['cidade' => 'Luzerna', 'estado_id' => 24],
            ['cidade' => 'Macieira', 'estado_id' => 24],
            ['cidade' => 'Mafra', 'estado_id' => 24],
            ['cidade' => 'Major Gercino', 'estado_id' => 24],
            ['cidade' => 'Major Vieira', 'estado_id' => 24],
            ['cidade' => 'Maracajá', 'estado_id' => 24],
            ['cidade' => 'Maravilha', 'estado_id' => 24],
            ['cidade' => 'Marema', 'estado_id' => 24],
            ['cidade' => 'Massaranduba', 'estado_id' => 24],
            ['cidade' => 'Matos Costa', 'estado_id' => 24],
            ['cidade' => 'Meleiro', 'estado_id' => 24],
            ['cidade' => 'Mirim Doce', 'estado_id' => 24],
            ['cidade' => 'Modelo', 'estado_id' => 24],
            ['cidade' => 'Mondaí', 'estado_id' => 24],
            ['cidade' => 'Monte Carlo', 'estado_id' => 24],
            ['cidade' => 'Monte Castelo', 'estado_id' => 24],
            ['cidade' => 'Morro da Fumaça', 'estado_id' => 24],
            ['cidade' => 'Morro Grande', 'estado_id' => 24],
            ['cidade' => 'Navegantes', 'estado_id' => 24],
            ['cidade' => 'Nova Erechim', 'estado_id' => 24],
            ['cidade' => 'Nova Itaberaba', 'estado_id' => 24],
            ['cidade' => 'Nova Trento', 'estado_id' => 24],
            ['cidade' => 'Nova Veneza', 'estado_id' => 24],
            ['cidade' => 'Novo Horizonte', 'estado_id' => 24],
            ['cidade' => 'Orleans', 'estado_id' => 24],
            ['cidade' => 'Otacílio Costa', 'estado_id' => 24],
            ['cidade' => 'Ouro', 'estado_id' => 24],
            ['cidade' => 'Ouro Verde', 'estado_id' => 24],
            ['cidade' => 'Paial', 'estado_id' => 24],
            ['cidade' => 'Painel', 'estado_id' => 24],
            ['cidade' => 'Palhoça', 'estado_id' => 24],
            ['cidade' => 'Palma Sola', 'estado_id' => 24],
            ['cidade' => 'Palmeira', 'estado_id' => 24],
            ['cidade' => 'Palmitos', 'estado_id' => 24],
            ['cidade' => 'Papanduva', 'estado_id' => 24],
            ['cidade' => 'Paraíso', 'estado_id' => 24],
            ['cidade' => 'Passo de Torres', 'estado_id' => 24],
            ['cidade' => 'Passos Maia', 'estado_id' => 24],
            ['cidade' => 'Paulo Lopes', 'estado_id' => 24],
            ['cidade' => 'Pedras Grandes', 'estado_id' => 24],
            ['cidade' => 'Penha', 'estado_id' => 24],
            ['cidade' => 'Peritiba', 'estado_id' => 24],
            ['cidade' => 'Petrolândia', 'estado_id' => 24],
            ['cidade' => 'Piçarras', 'estado_id' => 24],
            ['cidade' => 'Pinhalzinho', 'estado_id' => 24],
            ['cidade' => 'Pinheiro Preto', 'estado_id' => 24],
            ['cidade' => 'Piratuba', 'estado_id' => 24],
            ['cidade' => 'Planalto Alegre', 'estado_id' => 24],
            ['cidade' => 'Pomerode', 'estado_id' => 24],
            ['cidade' => 'Ponte Alta', 'estado_id' => 24],
            ['cidade' => 'Ponte Alta do Norte', 'estado_id' => 24],
            ['cidade' => 'Ponte Serrada', 'estado_id' => 24],
            ['cidade' => 'Porto Belo', 'estado_id' => 24],
            ['cidade' => 'Porto União', 'estado_id' => 24],
            ['cidade' => 'Pouso Redondo', 'estado_id' => 24],
            ['cidade' => 'Praia Grande', 'estado_id' => 24],
            ['cidade' => 'Presidente Castelo Branco', 'estado_id' => 24],
            ['cidade' => 'Presidente Getúlio', 'estado_id' => 24],
            ['cidade' => 'Presidente Nereu', 'estado_id' => 24],
            ['cidade' => 'Princesa', 'estado_id' => 24],
            ['cidade' => 'Quilombo', 'estado_id' => 24],
            ['cidade' => 'Rancho Queimado', 'estado_id' => 24],
            ['cidade' => 'Rio das Antas', 'estado_id' => 24],
            ['cidade' => 'Rio do Campo', 'estado_id' => 24],
            ['cidade' => 'Rio do Oeste', 'estado_id' => 24],
            ['cidade' => 'Rio do Sul', 'estado_id' => 24],
            ['cidade' => 'Rio dos Cedros', 'estado_id' => 24],
            ['cidade' => 'Rio Fortuna', 'estado_id' => 24],
            ['cidade' => 'Rio Negrinho', 'estado_id' => 24],
            ['cidade' => 'Rio Rufino', 'estado_id' => 24],
            ['cidade' => 'Riqueza', 'estado_id' => 24],
            ['cidade' => 'Rodeio', 'estado_id' => 24],
            ['cidade' => 'Romelândia', 'estado_id' => 24],
            ['cidade' => 'Salete', 'estado_id' => 24],
            ['cidade' => 'Saltinho', 'estado_id' => 24],
            ['cidade' => 'Salto Veloso', 'estado_id' => 24],
            ['cidade' => 'Sangão', 'estado_id' => 24],
            ['cidade' => 'Santa Cecília', 'estado_id' => 24],
            ['cidade' => 'Santa Helena', 'estado_id' => 24],
            ['cidade' => 'Santa Rosa de Lima', 'estado_id' => 24],
            ['cidade' => 'Santa Rosa do Sul', 'estado_id' => 24],
            ['cidade' => 'Santa Terezinha', 'estado_id' => 24],
            ['cidade' => 'Santa Terezinha do Progresso', 'estado_id' => 24],
            ['cidade' => 'Santiago do Sul', 'estado_id' => 24],
            ['cidade' => 'Santo Amaro da Imperatriz', 'estado_id' => 24],
            ['cidade' => 'São Bento do Sul', 'estado_id' => 24],
            ['cidade' => 'São Bernardino', 'estado_id' => 24],
            ['cidade' => 'São Bonifácio', 'estado_id' => 24],
            ['cidade' => 'São Carlos', 'estado_id' => 24],
            ['cidade' => 'São Cristovão do Sul', 'estado_id' => 24],
            ['cidade' => 'São Domingos', 'estado_id' => 24],
            ['cidade' => 'São Francisco do Sul', 'estado_id' => 24],
            ['cidade' => 'São João Batista', 'estado_id' => 24],
            ['cidade' => 'São João do Itaperiú', 'estado_id' => 24],
            ['cidade' => 'São João do Oeste', 'estado_id' => 24],
            ['cidade' => 'São João do Sul', 'estado_id' => 24],
            ['cidade' => 'São Joaquim', 'estado_id' => 24],
            ['cidade' => 'São José', 'estado_id' => 24],
            ['cidade' => 'São José do Cedro', 'estado_id' => 24],
            ['cidade' => 'São José do Cerrito', 'estado_id' => 24],
            ['cidade' => 'São Lourenço do Oeste', 'estado_id' => 24],
            ['cidade' => 'São Ludgero', 'estado_id' => 24],
            ['cidade' => 'São Martinho', 'estado_id' => 24],
            ['cidade' => 'São Miguel da Boa Vista', 'estado_id' => 24],
            ['cidade' => 'São Miguel do Oeste', 'estado_id' => 24],
            ['cidade' => 'São Pedro de Alcântara', 'estado_id' => 24],
            ['cidade' => 'Saudades', 'estado_id' => 24],
            ['cidade' => 'Schroeder', 'estado_id' => 24],
            ['cidade' => 'Seara', 'estado_id' => 24],
            ['cidade' => 'Serra Alta', 'estado_id' => 24],
            ['cidade' => 'Siderópolis', 'estado_id' => 24],
            ['cidade' => 'Sombrio', 'estado_id' => 24],
            ['cidade' => 'Sul Brasil', 'estado_id' => 24],
            ['cidade' => 'Taió', 'estado_id' => 24],
            ['cidade' => 'Tangará', 'estado_id' => 24],
            ['cidade' => 'Tigrinhos', 'estado_id' => 24],
            ['cidade' => 'Tijucas', 'estado_id' => 24],
            ['cidade' => 'Timbé do Sul', 'estado_id' => 24],
            ['cidade' => 'Timbó', 'estado_id' => 24],
            ['cidade' => 'Timbó Grande', 'estado_id' => 24],
            ['cidade' => 'Três Barras', 'estado_id' => 24],
            ['cidade' => 'Treviso', 'estado_id' => 24],
            ['cidade' => 'Treze de Maio', 'estado_id' => 24],
            ['cidade' => 'Treze Tílias', 'estado_id' => 24],
            ['cidade' => 'Trombudo Central', 'estado_id' => 24],
            ['cidade' => 'Tubarão', 'estado_id' => 24],
            ['cidade' => 'Tunápolis', 'estado_id' => 24],
            ['cidade' => 'Turvo', 'estado_id' => 24],
            ['cidade' => 'União do Oeste', 'estado_id' => 24],
            ['cidade' => 'Urubici', 'estado_id' => 24],
            ['cidade' => 'Urupema', 'estado_id' => 24],
            ['cidade' => 'Urussanga', 'estado_id' => 24],
            ['cidade' => 'Vargeão', 'estado_id' => 24],
            ['cidade' => 'Vargem', 'estado_id' => 24],
            ['cidade' => 'Vargem Bonita', 'estado_id' => 24],
            ['cidade' => 'Vidal Ramos', 'estado_id' => 24],
            ['cidade' => 'Videira', 'estado_id' => 24],
            ['cidade' => 'Vitor Meireles', 'estado_id' => 24],
            ['cidade' => 'Witmarsum', 'estado_id' => 24],
            ['cidade' => 'Xanxerê', 'estado_id' => 24],
            ['cidade' => 'Xavantina', 'estado_id' => 24],
            ['cidade' => 'Xaxim', 'estado_id' => 24],
            ['cidade' => 'Zortéa', 'estado_id' => 24]
        ]);

        $this->command->info('Cidades de Santa Catarina importadas com sucesso!');
    }
}
