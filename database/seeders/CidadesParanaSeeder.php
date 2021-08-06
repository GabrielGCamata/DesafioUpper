<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CidadesParanaSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['cidade' => 'Abatiá', 'estado_id' => 16],
            ['cidade' => 'Adrianópolis', 'estado_id' => 16],
            ['cidade' => 'Agudos do Sul', 'estado_id' => 16],
            ['cidade' => 'Almirante Tamandaré', 'estado_id' => 16],
            ['cidade' => 'Altamira do Paraná', 'estado_id' => 16],
            ['cidade' => 'Alto Paraíso', 'estado_id' => 16],
            ['cidade' => 'Alto Paraná', 'estado_id' => 16],
            ['cidade' => 'Alto Piquiri', 'estado_id' => 16],
            ['cidade' => 'Altônia', 'estado_id' => 16],
            ['cidade' => 'Alvorada do Sul', 'estado_id' => 16],
            ['cidade' => 'Amaporã', 'estado_id' => 16],
            ['cidade' => 'Ampére', 'estado_id' => 16],
            ['cidade' => 'Anahy', 'estado_id' => 16],
            ['cidade' => 'Andirá', 'estado_id' => 16],
            ['cidade' => 'Ângulo', 'estado_id' => 16],
            ['cidade' => 'Antonina', 'estado_id' => 16],
            ['cidade' => 'Antônio Olinto', 'estado_id' => 16],
            ['cidade' => 'Apucarana', 'estado_id' => 16],
            ['cidade' => 'Arapongas', 'estado_id' => 16],
            ['cidade' => 'Arapoti', 'estado_id' => 16],
            ['cidade' => 'Arapuã', 'estado_id' => 16],
            ['cidade' => 'Araruna', 'estado_id' => 16],
            ['cidade' => 'Araucária', 'estado_id' => 16],
            ['cidade' => 'Ariranha do Ivaí', 'estado_id' => 16],
            ['cidade' => 'Assaí', 'estado_id' => 16],
            ['cidade' => 'Assis Chateaubriand', 'estado_id' => 16],
            ['cidade' => 'Astorga', 'estado_id' => 16],
            ['cidade' => 'Atalaia', 'estado_id' => 16],
            ['cidade' => 'Balsa Nova', 'estado_id' => 16],
            ['cidade' => 'Bandeirantes', 'estado_id' => 16],
            ['cidade' => 'Barbosa Ferraz', 'estado_id' => 16],
            ['cidade' => 'Barra do Jacaré', 'estado_id' => 16],
            ['cidade' => 'Barracão', 'estado_id' => 16],
            ['cidade' => 'Bela Vista da Caroba', 'estado_id' => 16],
            ['cidade' => 'Bela Vista do Paraíso', 'estado_id' => 16],
            ['cidade' => 'Bituruna', 'estado_id' => 16],
            ['cidade' => 'Boa Esperança', 'estado_id' => 16],
            ['cidade' => 'Boa Esperança do Iguaçu', 'estado_id' => 16],
            ['cidade' => 'Boa Ventura de São Roque', 'estado_id' => 16],
            ['cidade' => 'Boa Vista da Aparecida', 'estado_id' => 16],
            ['cidade' => 'Bocaiúva do Sul', 'estado_id' => 16],
            ['cidade' => 'Bom Jesus do Sul', 'estado_id' => 16],
            ['cidade' => 'Bom Sucesso', 'estado_id' => 16],
            ['cidade' => 'Bom Sucesso do Sul', 'estado_id' => 16],
            ['cidade' => 'Borrazópolis', 'estado_id' => 16],
            ['cidade' => 'Braganey', 'estado_id' => 16],
            ['cidade' => 'Brasilândia do Sul', 'estado_id' => 16],
            ['cidade' => 'Cafeara', 'estado_id' => 16],
            ['cidade' => 'Cafelândia', 'estado_id' => 16],
            ['cidade' => 'Cafezal do Sul', 'estado_id' => 16],
            ['cidade' => 'Califórnia', 'estado_id' => 16],
            ['cidade' => 'Cambará', 'estado_id' => 16],
            ['cidade' => 'Cambé', 'estado_id' => 16],
            ['cidade' => 'Cambira', 'estado_id' => 16],
            ['cidade' => 'Campina da Lagoa', 'estado_id' => 16],
            ['cidade' => 'Campina do Simão', 'estado_id' => 16],
            ['cidade' => 'Campina Grande do Sul', 'estado_id' => 16],
            ['cidade' => 'Campo Bonito', 'estado_id' => 16],
            ['cidade' => 'Campo do Tenente', 'estado_id' => 16],
            ['cidade' => 'Campo Largo', 'estado_id' => 16],
            ['cidade' => 'Campo Magro', 'estado_id' => 16],
            ['cidade' => 'Campo Mourão', 'estado_id' => 16],
            ['cidade' => 'Cândido de Abreu', 'estado_id' => 16],
            ['cidade' => 'Candói', 'estado_id' => 16],
            ['cidade' => 'Cantagalo', 'estado_id' => 16],
            ['cidade' => 'Capanema', 'estado_id' => 16],
            ['cidade' => 'Capitão Leônidas Marques', 'estado_id' => 16],
            ['cidade' => 'Carambeí', 'estado_id' => 16],
            ['cidade' => 'Carlópolis', 'estado_id' => 16],
            ['cidade' => 'Cascavel', 'estado_id' => 16],
            ['cidade' => 'Castro', 'estado_id' => 16],
            ['cidade' => 'Catanduvas', 'estado_id' => 16],
            ['cidade' => 'Centenário do Sul', 'estado_id' => 16],
            ['cidade' => 'Cerro Azul', 'estado_id' => 16],
            ['cidade' => 'Céu Azul', 'estado_id' => 16],
            ['cidade' => 'Chopinzinho', 'estado_id' => 16],
            ['cidade' => 'Cianorte', 'estado_id' => 16],
            ['cidade' => 'Cidade Gaúcha', 'estado_id' => 16],
            ['cidade' => 'Clevelândia', 'estado_id' => 16],
            ['cidade' => 'Colombo', 'estado_id' => 16],
            ['cidade' => 'Colorado', 'estado_id' => 16],
            ['cidade' => 'Congonhinhas', 'estado_id' => 16],
            ['cidade' => 'Conselheiro Mairinck', 'estado_id' => 16],
            ['cidade' => 'Contenda', 'estado_id' => 16],
            ['cidade' => 'Corbélia', 'estado_id' => 16],
            ['cidade' => 'Cornélio Procópio', 'estado_id' => 16],
            ['cidade' => 'Coronel Domingos Soares', 'estado_id' => 16],
            ['cidade' => 'Coronel Vivida', 'estado_id' => 16],
            ['cidade' => 'Corumbataí do Sul', 'estado_id' => 16],
            ['cidade' => 'Cruz Machado', 'estado_id' => 16],
            ['cidade' => 'Cruzeiro do Iguaçu', 'estado_id' => 16],
            ['cidade' => 'Cruzeiro do Oeste', 'estado_id' => 16],
            ['cidade' => 'Cruzeiro do Sul', 'estado_id' => 16],
            ['cidade' => 'Cruzmaltina', 'estado_id' => 16],
            ['cidade' => 'Curitiba', 'estado_id' => 16],
            ['cidade' => 'Curiúva', 'estado_id' => 16],
            ['cidade' => 'Diamante d`Oeste', 'estado_id' => 16],
            ['cidade' => 'Diamante do Norte', 'estado_id' => 16],
            ['cidade' => 'Diamante do Sul', 'estado_id' => 16],
            ['cidade' => 'Dois Vizinhos', 'estado_id' => 16],
            ['cidade' => 'Douradina', 'estado_id' => 16],
            ['cidade' => 'Doutor Camargo', 'estado_id' => 16],
            ['cidade' => 'Doutor Ulysses', 'estado_id' => 16],
            ['cidade' => 'Enéas Marques', 'estado_id' => 16],
            ['cidade' => 'Engenheiro Beltrão', 'estado_id' => 16],
            ['cidade' => 'Entre Rios do Oeste', 'estado_id' => 16],
            ['cidade' => 'Esperança Nova', 'estado_id' => 16],
            ['cidade' => 'Espigão Alto do Iguaçu', 'estado_id' => 16],
            ['cidade' => 'Farol', 'estado_id' => 16],
            ['cidade' => 'Faxinal', 'estado_id' => 16],
            ['cidade' => 'Fazenda Rio Grande', 'estado_id' => 16],
            ['cidade' => 'Fênix', 'estado_id' => 16],
            ['cidade' => 'Fernandes Pinheiro', 'estado_id' => 16],
            ['cidade' => 'Figueira', 'estado_id' => 16],
            ['cidade' => 'Flor da Serra do Sul', 'estado_id' => 16],
            ['cidade' => 'Floraí', 'estado_id' => 16],
            ['cidade' => 'Floresta', 'estado_id' => 16],
            ['cidade' => 'Florestópolis', 'estado_id' => 16],
            ['cidade' => 'Flórida', 'estado_id' => 16],
            ['cidade' => 'Formosa do Oeste', 'estado_id' => 16],
            ['cidade' => 'Foz do Iguaçu', 'estado_id' => 16],
            ['cidade' => 'Foz do Jordão', 'estado_id' => 16],
            ['cidade' => 'Francisco Alves', 'estado_id' => 16],
            ['cidade' => 'Francisco Beltrão', 'estado_id' => 16],
            ['cidade' => 'General Carneiro', 'estado_id' => 16],
            ['cidade' => 'Godoy Moreira', 'estado_id' => 16],
            ['cidade' => 'Goioerê', 'estado_id' => 16],
            ['cidade' => 'Goioxim', 'estado_id' => 16],
            ['cidade' => 'Grandes Rios', 'estado_id' => 16],
            ['cidade' => 'Guaíra', 'estado_id' => 16],
            ['cidade' => 'Guairaçá', 'estado_id' => 16],
            ['cidade' => 'Guamiranga', 'estado_id' => 16],
            ['cidade' => 'Guapirama', 'estado_id' => 16],
            ['cidade' => 'Guaporema', 'estado_id' => 16],
            ['cidade' => 'Guaraci', 'estado_id' => 16],
            ['cidade' => 'Guaraniaçu', 'estado_id' => 16],
            ['cidade' => 'Guarapuava', 'estado_id' => 16],
            ['cidade' => 'Guaraqueçaba', 'estado_id' => 16],
            ['cidade' => 'Guaratuba', 'estado_id' => 16],
            ['cidade' => 'Honório Serpa', 'estado_id' => 16],
            ['cidade' => 'Ibaiti', 'estado_id' => 16],
            ['cidade' => 'Ibema', 'estado_id' => 16],
            ['cidade' => 'Ibiporã', 'estado_id' => 16],
            ['cidade' => 'Icaraíma', 'estado_id' => 16],
            ['cidade' => 'Iguaraçu', 'estado_id' => 16],
            ['cidade' => 'Iguatu', 'estado_id' => 16],
            ['cidade' => 'Imbaú', 'estado_id' => 16],
            ['cidade' => 'Imbituva', 'estado_id' => 16],
            ['cidade' => 'Inácio Martins', 'estado_id' => 16],
            ['cidade' => 'Inajá', 'estado_id' => 16],
            ['cidade' => 'Indianópolis', 'estado_id' => 16],
            ['cidade' => 'Ipiranga', 'estado_id' => 16],
            ['cidade' => 'Iporã', 'estado_id' => 16],
            ['cidade' => 'Iracema do Oeste', 'estado_id' => 16],
            ['cidade' => 'Irati', 'estado_id' => 16],
            ['cidade' => 'Iretama', 'estado_id' => 16],
            ['cidade' => 'Itaguajé', 'estado_id' => 16],
            ['cidade' => 'Itaipulândia', 'estado_id' => 16],
            ['cidade' => 'Itambaracá', 'estado_id' => 16],
            ['cidade' => 'Itambé', 'estado_id' => 16],
            ['cidade' => 'Itapejara d`Oeste', 'estado_id' => 16],
            ['cidade' => 'Itaperuçu', 'estado_id' => 16],
            ['cidade' => 'Itaúna do Sul', 'estado_id' => 16],
            ['cidade' => 'Ivaí', 'estado_id' => 16],
            ['cidade' => 'Ivaiporã', 'estado_id' => 16],
            ['cidade' => 'Ivaté', 'estado_id' => 16],
            ['cidade' => 'Ivatuba', 'estado_id' => 16],
            ['cidade' => 'Jaboti', 'estado_id' => 16],
            ['cidade' => 'Jacarezinho', 'estado_id' => 16],
            ['cidade' => 'Jaguapitã', 'estado_id' => 16],
            ['cidade' => 'Jaguariaíva', 'estado_id' => 16],
            ['cidade' => 'Jandaia do Sul', 'estado_id' => 16],
            ['cidade' => 'Janiópolis', 'estado_id' => 16],
            ['cidade' => 'Japira', 'estado_id' => 16],
            ['cidade' => 'Japurá', 'estado_id' => 16],
            ['cidade' => 'Jardim Alegre', 'estado_id' => 16],
            ['cidade' => 'Jardim Olinda', 'estado_id' => 16],
            ['cidade' => 'Jataizinho', 'estado_id' => 16],
            ['cidade' => 'Jesuítas', 'estado_id' => 16],
            ['cidade' => 'Joaquim Távora', 'estado_id' => 16],
            ['cidade' => 'Jundiaí do Sul', 'estado_id' => 16],
            ['cidade' => 'Juranda', 'estado_id' => 16],
            ['cidade' => 'Jussara', 'estado_id' => 16],
            ['cidade' => 'Kaloré', 'estado_id' => 16],
            ['cidade' => 'Lapa', 'estado_id' => 16],
            ['cidade' => 'Laranjal', 'estado_id' => 16],
            ['cidade' => 'Laranjeiras do Sul', 'estado_id' => 16],
            ['cidade' => 'Leópolis', 'estado_id' => 16],
            ['cidade' => 'Lidianópolis', 'estado_id' => 16],
            ['cidade' => 'Lindoeste', 'estado_id' => 16],
            ['cidade' => 'Loanda', 'estado_id' => 16],
            ['cidade' => 'Lobato', 'estado_id' => 16],
            ['cidade' => 'Londrina', 'estado_id' => 16],
            ['cidade' => 'Luiziana', 'estado_id' => 16],
            ['cidade' => 'Lunardelli', 'estado_id' => 16],
            ['cidade' => 'Lupionópolis', 'estado_id' => 16],
            ['cidade' => 'Mallet', 'estado_id' => 16],
            ['cidade' => 'Mamborê', 'estado_id' => 16],
            ['cidade' => 'Mandaguaçu', 'estado_id' => 16],
            ['cidade' => 'Mandaguari', 'estado_id' => 16],
            ['cidade' => 'Mandirituba', 'estado_id' => 16],
            ['cidade' => 'Manfrinópolis', 'estado_id' => 16],
            ['cidade' => 'Mangueirinha', 'estado_id' => 16],
            ['cidade' => 'Manoel Ribas', 'estado_id' => 16],
            ['cidade' => 'Marechal Cândido Rondon', 'estado_id' => 16],
            ['cidade' => 'Maria Helena', 'estado_id' => 16],
            ['cidade' => 'Marialva', 'estado_id' => 16],
            ['cidade' => 'Marilândia do Sul', 'estado_id' => 16],
            ['cidade' => 'Marilena', 'estado_id' => 16],
            ['cidade' => 'Mariluz', 'estado_id' => 16],
            ['cidade' => 'Maringá', 'estado_id' => 16],
            ['cidade' => 'Mariópolis', 'estado_id' => 16],
            ['cidade' => 'Maripá', 'estado_id' => 16],
            ['cidade' => 'Marmeleiro', 'estado_id' => 16],
            ['cidade' => 'Marquinho', 'estado_id' => 16],
            ['cidade' => 'Marumbi', 'estado_id' => 16],
            ['cidade' => 'Matelândia', 'estado_id' => 16],
            ['cidade' => 'Matinhos', 'estado_id' => 16],
            ['cidade' => 'Mato Rico', 'estado_id' => 16],
            ['cidade' => 'Mauá da Serra', 'estado_id' => 16],
            ['cidade' => 'Medianeira', 'estado_id' => 16],
            ['cidade' => 'Mercedes', 'estado_id' => 16],
            ['cidade' => 'Mirador', 'estado_id' => 16],
            ['cidade' => 'Miraselva', 'estado_id' => 16],
            ['cidade' => 'Missal', 'estado_id' => 16],
            ['cidade' => 'Moreira Sales', 'estado_id' => 16],
            ['cidade' => 'Morretes', 'estado_id' => 16],
            ['cidade' => 'Munhoz de Melo', 'estado_id' => 16],
            ['cidade' => 'Nossa Senhora das Graças', 'estado_id' => 16],
            ['cidade' => 'Nova Aliança do Ivaí', 'estado_id' => 16],
            ['cidade' => 'Nova América da Colina', 'estado_id' => 16],
            ['cidade' => 'Nova Aurora', 'estado_id' => 16],
            ['cidade' => 'Nova Cantu', 'estado_id' => 16],
            ['cidade' => 'Nova Esperança', 'estado_id' => 16],
            ['cidade' => 'Nova Esperança do Sudoeste', 'estado_id' => 16],
            ['cidade' => 'Nova Fátima', 'estado_id' => 16],
            ['cidade' => 'Nova Laranjeiras', 'estado_id' => 16],
            ['cidade' => 'Nova Londrina', 'estado_id' => 16],
            ['cidade' => 'Nova Olímpia', 'estado_id' => 16],
            ['cidade' => 'Nova Prata do Iguaçu', 'estado_id' => 16],
            ['cidade' => 'Nova Santa Bárbara', 'estado_id' => 16],
            ['cidade' => 'Nova Santa Rosa', 'estado_id' => 16],
            ['cidade' => 'Nova Tebas', 'estado_id' => 16],
            ['cidade' => 'Novo Itacolomi', 'estado_id' => 16],
            ['cidade' => 'Ortigueira', 'estado_id' => 16],
            ['cidade' => 'Ourizona', 'estado_id' => 16],
            ['cidade' => 'Ouro Verde do Oeste', 'estado_id' => 16],
            ['cidade' => 'Paiçandu', 'estado_id' => 16],
            ['cidade' => 'Palmas', 'estado_id' => 16],
            ['cidade' => 'Palmeira', 'estado_id' => 16],
            ['cidade' => 'Palmital', 'estado_id' => 16],
            ['cidade' => 'Palotina', 'estado_id' => 16],
            ['cidade' => 'Paraíso do Norte', 'estado_id' => 16],
            ['cidade' => 'Paranacity', 'estado_id' => 16],
            ['cidade' => 'Paranaguá', 'estado_id' => 16],
            ['cidade' => 'Paranapoema', 'estado_id' => 16],
            ['cidade' => 'Paranavaí', 'estado_id' => 16],
            ['cidade' => 'Pato Bragado', 'estado_id' => 16],
            ['cidade' => 'Pato Branco', 'estado_id' => 16],
            ['cidade' => 'Paula Freitas', 'estado_id' => 16],
            ['cidade' => 'Paulo Frontin', 'estado_id' => 16],
            ['cidade' => 'Peabiru', 'estado_id' => 16],
            ['cidade' => 'Perobal', 'estado_id' => 16],
            ['cidade' => 'Pérola', 'estado_id' => 16],
            ['cidade' => 'Pérola d`Oeste', 'estado_id' => 16],
            ['cidade' => 'Piên', 'estado_id' => 16],
            ['cidade' => 'Pinhais', 'estado_id' => 16],
            ['cidade' => 'Pinhal de São Bento', 'estado_id' => 16],
            ['cidade' => 'Pinhalão', 'estado_id' => 16],
            ['cidade' => 'Pinhão', 'estado_id' => 16],
            ['cidade' => 'Piraí do Sul', 'estado_id' => 16],
            ['cidade' => 'Piraquara', 'estado_id' => 16],
            ['cidade' => 'Pitanga', 'estado_id' => 16],
            ['cidade' => 'Pitangueiras', 'estado_id' => 16],
            ['cidade' => 'Planaltina do Paraná', 'estado_id' => 16],
            ['cidade' => 'Planalto', 'estado_id' => 16],
            ['cidade' => 'Ponta Grossa', 'estado_id' => 16],
            ['cidade' => 'Pontal do Paraná', 'estado_id' => 16],
            ['cidade' => 'Porecatu', 'estado_id' => 16],
            ['cidade' => 'Porto Amazonas', 'estado_id' => 16],
            ['cidade' => 'Porto Barreiro', 'estado_id' => 16],
            ['cidade' => 'Porto Rico', 'estado_id' => 16],
            ['cidade' => 'Porto Vitória', 'estado_id' => 16],
            ['cidade' => 'Prado Ferreira', 'estado_id' => 16],
            ['cidade' => 'Pranchita', 'estado_id' => 16],
            ['cidade' => 'Presidente Castelo Branco', 'estado_id' => 16],
            ['cidade' => 'Primeiro de Maio', 'estado_id' => 16],
            ['cidade' => 'Prudentópolis', 'estado_id' => 16],
            ['cidade' => 'Quarto Centenário', 'estado_id' => 16],
            ['cidade' => 'Quatiguá', 'estado_id' => 16],
            ['cidade' => 'Quatro Barras', 'estado_id' => 16],
            ['cidade' => 'Quatro Pontes', 'estado_id' => 16],
            ['cidade' => 'Quedas do Iguaçu', 'estado_id' => 16],
            ['cidade' => 'Querência do Norte', 'estado_id' => 16],
            ['cidade' => 'Quinta do Sol', 'estado_id' => 16],
            ['cidade' => 'Quitandinha', 'estado_id' => 16],
            ['cidade' => 'Ramilândia', 'estado_id' => 16],
            ['cidade' => 'Rancho Alegre', 'estado_id' => 16],
            ['cidade' => 'Rancho Alegre d`Oeste', 'estado_id' => 16],
            ['cidade' => 'Realeza', 'estado_id' => 16],
            ['cidade' => 'Rebouças', 'estado_id' => 16],
            ['cidade' => 'Renascença', 'estado_id' => 16],
            ['cidade' => 'Reserva', 'estado_id' => 16],
            ['cidade' => 'Reserva do Iguaçu', 'estado_id' => 16],
            ['cidade' => 'Ribeirão Claro', 'estado_id' => 16],
            ['cidade' => 'Ribeirão do Pinhal', 'estado_id' => 16],
            ['cidade' => 'Rio Azul', 'estado_id' => 16],
            ['cidade' => 'Rio Bom', 'estado_id' => 16],
            ['cidade' => 'Rio Bonito do Iguaçu', 'estado_id' => 16],
            ['cidade' => 'Rio Branco do Ivaí', 'estado_id' => 16],
            ['cidade' => 'Rio Branco do Sul', 'estado_id' => 16],
            ['cidade' => 'Rio Negro', 'estado_id' => 16],
            ['cidade' => 'Rolândia', 'estado_id' => 16],
            ['cidade' => 'Roncador', 'estado_id' => 16],
            ['cidade' => 'Rondon', 'estado_id' => 16],
            ['cidade' => 'Rosário do Ivaí', 'estado_id' => 16],
            ['cidade' => 'Sabáudia', 'estado_id' => 16],
            ['cidade' => 'Salgado Filho', 'estado_id' => 16],
            ['cidade' => 'Salto do Itararé', 'estado_id' => 16],
            ['cidade' => 'Salto do Lontra', 'estado_id' => 16],
            ['cidade' => 'Santa Amélia', 'estado_id' => 16],
            ['cidade' => 'Santa Cecília do Pavão', 'estado_id' => 16],
            ['cidade' => 'Santa Cruz de Monte Castelo', 'estado_id' => 16],
            ['cidade' => 'Santa Fé', 'estado_id' => 16],
            ['cidade' => 'Santa Helena', 'estado_id' => 16],
            ['cidade' => 'Santa Inês', 'estado_id' => 16],
            ['cidade' => 'Santa Isabel do Ivaí', 'estado_id' => 16],
            ['cidade' => 'Santa Izabel do Oeste', 'estado_id' => 16],
            ['cidade' => 'Santa Lúcia', 'estado_id' => 16],
            ['cidade' => 'Santa Maria do Oeste', 'estado_id' => 16],
            ['cidade' => 'Santa Mariana', 'estado_id' => 16],
            ['cidade' => 'Santa Mônica', 'estado_id' => 16],
            ['cidade' => 'Santa Tereza do Oeste', 'estado_id' => 16],
            ['cidade' => 'Santa Terezinha de Itaipu', 'estado_id' => 16],
            ['cidade' => 'Santana do Itararé', 'estado_id' => 16],
            ['cidade' => 'Santo Antônio da Platina', 'estado_id' => 16],
            ['cidade' => 'Santo Antônio do Caiuá', 'estado_id' => 16],
            ['cidade' => 'Santo Antônio do Paraíso', 'estado_id' => 16],
            ['cidade' => 'Santo Antônio do Sudoeste', 'estado_id' => 16],
            ['cidade' => 'Santo Inácio', 'estado_id' => 16],
            ['cidade' => 'São Carlos do Ivaí', 'estado_id' => 16],
            ['cidade' => 'São Jerônimo da Serra', 'estado_id' => 16],
            ['cidade' => 'São João', 'estado_id' => 16],
            ['cidade' => 'São João do Caiuá', 'estado_id' => 16],
            ['cidade' => 'São João do Ivaí', 'estado_id' => 16],
            ['cidade' => 'São João do Triunfo', 'estado_id' => 16],
            ['cidade' => 'São Jorge d`Oeste', 'estado_id' => 16],
            ['cidade' => 'São Jorge do Ivaí', 'estado_id' => 16],
            ['cidade' => 'São Jorge do Patrocínio', 'estado_id' => 16],
            ['cidade' => 'São José da Boa Vista', 'estado_id' => 16],
            ['cidade' => 'São José das Palmeiras', 'estado_id' => 16],
            ['cidade' => 'São José dos Pinhais', 'estado_id' => 16],
            ['cidade' => 'São Manoel do Paraná', 'estado_id' => 16],
            ['cidade' => 'São Mateus do Sul', 'estado_id' => 16],
            ['cidade' => 'São Miguel do Iguaçu', 'estado_id' => 16],
            ['cidade' => 'São Pedro do Iguaçu', 'estado_id' => 16],
            ['cidade' => 'São Pedro do Ivaí', 'estado_id' => 16],
            ['cidade' => 'São Pedro do Paraná', 'estado_id' => 16],
            ['cidade' => 'São Sebastião da Amoreira', 'estado_id' => 16],
            ['cidade' => 'São Tomé', 'estado_id' => 16],
            ['cidade' => 'Sapopema', 'estado_id' => 16],
            ['cidade' => 'Sarandi', 'estado_id' => 16],
            ['cidade' => 'Saudade do Iguaçu', 'estado_id' => 16],
            ['cidade' => 'Sengés', 'estado_id' => 16],
            ['cidade' => 'Serranópolis do Iguaçu', 'estado_id' => 16],
            ['cidade' => 'Sertaneja', 'estado_id' => 16],
            ['cidade' => 'Sertanópolis', 'estado_id' => 16],
            ['cidade' => 'Siqueira Campos', 'estado_id' => 16],
            ['cidade' => 'Sulina', 'estado_id' => 16],
            ['cidade' => 'Tamarana', 'estado_id' => 16],
            ['cidade' => 'Tamboara', 'estado_id' => 16],
            ['cidade' => 'Tapejara', 'estado_id' => 16],
            ['cidade' => 'Tapira', 'estado_id' => 16],
            ['cidade' => 'Teixeira Soares', 'estado_id' => 16],
            ['cidade' => 'Telêmaco Borba', 'estado_id' => 16],
            ['cidade' => 'Terra Boa', 'estado_id' => 16],
            ['cidade' => 'Terra Rica', 'estado_id' => 16],
            ['cidade' => 'Terra Roxa', 'estado_id' => 16],
            ['cidade' => 'Tibagi', 'estado_id' => 16],
            ['cidade' => 'Tijucas do Sul', 'estado_id' => 16],
            ['cidade' => 'Toledo', 'estado_id' => 16],
            ['cidade' => 'Tomazina', 'estado_id' => 16],
            ['cidade' => 'Três Barras do Paraná', 'estado_id' => 16],
            ['cidade' => 'Tunas do Paraná', 'estado_id' => 16],
            ['cidade' => 'Tuneiras do Oeste', 'estado_id' => 16],
            ['cidade' => 'Tupãssi', 'estado_id' => 16],
            ['cidade' => 'Turvo', 'estado_id' => 16],
            ['cidade' => 'Ubiratã', 'estado_id' => 16],
            ['cidade' => 'Umuarama', 'estado_id' => 16],
            ['cidade' => 'União da Vitória', 'estado_id' => 16],
            ['cidade' => 'Uniflor', 'estado_id' => 16],
            ['cidade' => 'Uraí', 'estado_id' => 16],
            ['cidade' => 'Ventania', 'estado_id' => 16],
            ['cidade' => 'Vera Cruz do Oeste', 'estado_id' => 16],
            ['cidade' => 'Verê', 'estado_id' => 16],
            ['cidade' => 'Virmond', 'estado_id' => 16],
            ['cidade' => 'Vitorino', 'estado_id' => 16],
            ['cidade' => 'Wenceslau Braz', 'estado_id' => 16],
            ['cidade' => 'Xambrê', 'estado_id' => 16]
        ]);

        $this->command->info('Cidades do Paraná importadas com sucesso!');
    }
}