<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CidadesPiauiSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['cidade' => 'Acauã', 'estado_id' => 18],
            ['cidade' => 'Agricolândia', 'estado_id' => 18],
            ['cidade' => 'Água Branca', 'estado_id' => 18],
            ['cidade' => 'Alagoinha do Piauí', 'estado_id' => 18],
            ['cidade' => 'Alegrete do Piauí', 'estado_id' => 18],
            ['cidade' => 'Alto Longá', 'estado_id' => 18],
            ['cidade' => 'Altos', 'estado_id' => 18],
            ['cidade' => 'Alvorada do Gurguéia', 'estado_id' => 18],
            ['cidade' => 'Amarante', 'estado_id' => 18],
            ['cidade' => 'Angical do Piauí', 'estado_id' => 18],
            ['cidade' => 'Anísio de Abreu', 'estado_id' => 18],
            ['cidade' => 'Antônio Almeida', 'estado_id' => 18],
            ['cidade' => 'Aroazes', 'estado_id' => 18],
            ['cidade' => 'Aroeiras do Itaim', 'estado_id' => 18],
            ['cidade' => 'Arraial', 'estado_id' => 18],
            ['cidade' => 'Assunção do Piauí', 'estado_id' => 18],
            ['cidade' => 'Avelino Lopes', 'estado_id' => 18],
            ['cidade' => 'Baixa Grande do Ribeiro', 'estado_id' => 18],
            ['cidade' => 'Barra d`Alcântara', 'estado_id' => 18],
            ['cidade' => 'Barras', 'estado_id' => 18],
            ['cidade' => 'Barreiras do Piauí', 'estado_id' => 18],
            ['cidade' => 'Barro Duro', 'estado_id' => 18],
            ['cidade' => 'Batalha', 'estado_id' => 18],
            ['cidade' => 'Bela Vista do Piauí', 'estado_id' => 18],
            ['cidade' => 'Belém do Piauí', 'estado_id' => 18],
            ['cidade' => 'Beneditinos', 'estado_id' => 18],
            ['cidade' => 'Bertolínia', 'estado_id' => 18],
            ['cidade' => 'Betânia do Piauí', 'estado_id' => 18],
            ['cidade' => 'Boa Hora', 'estado_id' => 18],
            ['cidade' => 'Bocaina', 'estado_id' => 18],
            ['cidade' => 'Bom Jesus', 'estado_id' => 18],
            ['cidade' => 'Bom Princípio do Piauí', 'estado_id' => 18],
            ['cidade' => 'Bonfim do Piauí', 'estado_id' => 18],
            ['cidade' => 'Boqueirão do Piauí', 'estado_id' => 18],
            ['cidade' => 'Brasileira', 'estado_id' => 18],
            ['cidade' => 'Brejo do Piauí', 'estado_id' => 18],
            ['cidade' => 'Buriti dos Lopes', 'estado_id' => 18],
            ['cidade' => 'Buriti dos Montes', 'estado_id' => 18],
            ['cidade' => 'Cabeceiras do Piauí', 'estado_id' => 18],
            ['cidade' => 'Cajazeiras do Piauí', 'estado_id' => 18],
            ['cidade' => 'Cajueiro da Praia', 'estado_id' => 18],
            ['cidade' => 'Caldeirão Grande do Piauí', 'estado_id' => 18],
            ['cidade' => 'Campinas do Piauí', 'estado_id' => 18],
            ['cidade' => 'Campo Alegre do Fidalgo', 'estado_id' => 18],
            ['cidade' => 'Campo Grande do Piauí', 'estado_id' => 18],
            ['cidade' => 'Campo Largo do Piauí', 'estado_id' => 18],
            ['cidade' => 'Campo Maior', 'estado_id' => 18],
            ['cidade' => 'Canavieira', 'estado_id' => 18],
            ['cidade' => 'Canto do Buriti', 'estado_id' => 18],
            ['cidade' => 'Capitão de Campos', 'estado_id' => 18],
            ['cidade' => 'Capitão Gervásio Oliveira', 'estado_id' => 18],
            ['cidade' => 'Caracol', 'estado_id' => 18],
            ['cidade' => 'Caraúbas do Piauí', 'estado_id' => 18],
            ['cidade' => 'Caridade do Piauí', 'estado_id' => 18],
            ['cidade' => 'Castelo do Piauí', 'estado_id' => 18],
            ['cidade' => 'Caxingó', 'estado_id' => 18],
            ['cidade' => 'Cocal', 'estado_id' => 18],
            ['cidade' => 'Cocal de Telha', 'estado_id' => 18],
            ['cidade' => 'Cocal dos Alves', 'estado_id' => 18],
            ['cidade' => 'Coivaras', 'estado_id' => 18],
            ['cidade' => 'Colônia do Gurguéia', 'estado_id' => 18],
            ['cidade' => 'Colônia do Piauí', 'estado_id' => 18],
            ['cidade' => 'Conceição do Canindé', 'estado_id' => 18],
            ['cidade' => 'Coronel José Dias', 'estado_id' => 18],
            ['cidade' => 'Corrente', 'estado_id' => 18],
            ['cidade' => 'Cristalândia do Piauí', 'estado_id' => 18],
            ['cidade' => 'Cristino Castro', 'estado_id' => 18],
            ['cidade' => 'Curimatá', 'estado_id' => 18],
            ['cidade' => 'Currais', 'estado_id' => 18],
            ['cidade' => 'Curral Novo do Piauí', 'estado_id' => 18],
            ['cidade' => 'Curralinhos', 'estado_id' => 18],
            ['cidade' => 'Demerval Lobão', 'estado_id' => 18],
            ['cidade' => 'Dirceu Arcoverde', 'estado_id' => 18],
            ['cidade' => 'Dom Expedito Lopes', 'estado_id' => 18],
            ['cidade' => 'Dom Inocêncio', 'estado_id' => 18],
            ['cidade' => 'Domingos Mourão', 'estado_id' => 18],
            ['cidade' => 'Elesbão Veloso', 'estado_id' => 18],
            ['cidade' => 'Eliseu Martins', 'estado_id' => 18],
            ['cidade' => 'Esperantina', 'estado_id' => 18],
            ['cidade' => 'Fartura do Piauí', 'estado_id' => 18],
            ['cidade' => 'Flores do Piauí', 'estado_id' => 18],
            ['cidade' => 'Floresta do Piauí', 'estado_id' => 18],
            ['cidade' => 'Floriano', 'estado_id' => 18],
            ['cidade' => 'Francinópolis', 'estado_id' => 18],
            ['cidade' => 'Francisco Ayres', 'estado_id' => 18],
            ['cidade' => 'Francisco Macedo', 'estado_id' => 18],
            ['cidade' => 'Francisco Santos', 'estado_id' => 18],
            ['cidade' => 'Fronteiras', 'estado_id' => 18],
            ['cidade' => 'Geminiano', 'estado_id' => 18],
            ['cidade' => 'Gilbués', 'estado_id' => 18],
            ['cidade' => 'Guadalupe', 'estado_id' => 18],
            ['cidade' => 'Guaribas', 'estado_id' => 18],
            ['cidade' => 'Hugo Napoleão', 'estado_id' => 18],
            ['cidade' => 'Ilha Grande', 'estado_id' => 18],
            ['cidade' => 'Inhuma', 'estado_id' => 18],
            ['cidade' => 'Ipiranga do Piauí', 'estado_id' => 18],
            ['cidade' => 'Isaías Coelho', 'estado_id' => 18],
            ['cidade' => 'Itainópolis', 'estado_id' => 18],
            ['cidade' => 'Itaueira', 'estado_id' => 18],
            ['cidade' => 'Jacobina do Piauí', 'estado_id' => 18],
            ['cidade' => 'Jaicós', 'estado_id' => 18],
            ['cidade' => 'Jardim do Mulato', 'estado_id' => 18],
            ['cidade' => 'Jatobá do Piauí', 'estado_id' => 18],
            ['cidade' => 'Jerumenha', 'estado_id' => 18],
            ['cidade' => 'João Costa', 'estado_id' => 18],
            ['cidade' => 'Joaquim Pires', 'estado_id' => 18],
            ['cidade' => 'Joca Marques', 'estado_id' => 18],
            ['cidade' => 'José de Freitas', 'estado_id' => 18],
            ['cidade' => 'Juazeiro do Piauí', 'estado_id' => 18],
            ['cidade' => 'Júlio Borges', 'estado_id' => 18],
            ['cidade' => 'Jurema', 'estado_id' => 18],
            ['cidade' => 'Lagoa Alegre', 'estado_id' => 18],
            ['cidade' => 'Lagoa de São Francisco', 'estado_id' => 18],
            ['cidade' => 'Lagoa do Barro do Piauí', 'estado_id' => 18],
            ['cidade' => 'Lagoa do Piauí', 'estado_id' => 18],
            ['cidade' => 'Lagoa do Sítio', 'estado_id' => 18],
            ['cidade' => 'Lagoinha do Piauí', 'estado_id' => 18],
            ['cidade' => 'Landri Sales', 'estado_id' => 18],
            ['cidade' => 'Luís Correia', 'estado_id' => 18],
            ['cidade' => 'Luzilândia', 'estado_id' => 18],
            ['cidade' => 'Madeiro', 'estado_id' => 18],
            ['cidade' => 'Manoel Emídio', 'estado_id' => 18],
            ['cidade' => 'Marcolândia', 'estado_id' => 18],
            ['cidade' => 'Marcos Parente', 'estado_id' => 18],
            ['cidade' => 'Massapê do Piauí', 'estado_id' => 18],
            ['cidade' => 'Matias Olímpio', 'estado_id' => 18],
            ['cidade' => 'Miguel Alves', 'estado_id' => 18],
            ['cidade' => 'Miguel Leão', 'estado_id' => 18],
            ['cidade' => 'Milton Brandão', 'estado_id' => 18],
            ['cidade' => 'Monsenhor Gil', 'estado_id' => 18],
            ['cidade' => 'Monsenhor Hipólito', 'estado_id' => 18],
            ['cidade' => 'Monte Alegre do Piauí', 'estado_id' => 18],
            ['cidade' => 'Morro Cabeça no Tempo', 'estado_id' => 18],
            ['cidade' => 'Morro do Chapéu do Piauí', 'estado_id' => 18],
            ['cidade' => 'Murici dos Portelas', 'estado_id' => 18],
            ['cidade' => 'Nazaré do Piauí', 'estado_id' => 18],
            ['cidade' => 'Nossa Senhora de Nazaré', 'estado_id' => 18],
            ['cidade' => 'Nossa Senhora dos Remédios', 'estado_id' => 18],
            ['cidade' => 'Nova Santa Rita', 'estado_id' => 18],
            ['cidade' => 'Novo Oriente do Piauí', 'estado_id' => 18],
            ['cidade' => 'Novo Santo Antônio', 'estado_id' => 18],
            ['cidade' => 'Oeiras', 'estado_id' => 18],
            ['cidade' => 'Olho d`Água do Piauí', 'estado_id' => 18],
            ['cidade' => 'Padre Marcos', 'estado_id' => 18],
            ['cidade' => 'Paes Landim', 'estado_id' => 18],
            ['cidade' => 'Pajeú do Piauí', 'estado_id' => 18],
            ['cidade' => 'Palmeira do Piauí', 'estado_id' => 18],
            ['cidade' => 'Palmeirais', 'estado_id' => 18],
            ['cidade' => 'Paquetá', 'estado_id' => 18],
            ['cidade' => 'Parnaguá', 'estado_id' => 18],
            ['cidade' => 'Parnaíba', 'estado_id' => 18],
            ['cidade' => 'Passagem Franca do Piauí', 'estado_id' => 18],
            ['cidade' => 'Patos do Piauí', 'estado_id' => 18],
            ['cidade' => 'Pau d`Arco do Piauí', 'estado_id' => 18],
            ['cidade' => 'Paulistana', 'estado_id' => 18],
            ['cidade' => 'Pavussu', 'estado_id' => 18],
            ['cidade' => 'Pedro II', 'estado_id' => 18],
            ['cidade' => 'Pedro Laurentino', 'estado_id' => 18],
            ['cidade' => 'Picos', 'estado_id' => 18],
            ['cidade' => 'Pimenteiras', 'estado_id' => 18],
            ['cidade' => 'Pio IX', 'estado_id' => 18],
            ['cidade' => 'Piracuruca', 'estado_id' => 18],
            ['cidade' => 'Piripiri', 'estado_id' => 18],
            ['cidade' => 'Porto', 'estado_id' => 18],
            ['cidade' => 'Porto Alegre do Piauí', 'estado_id' => 18],
            ['cidade' => 'Prata do Piauí', 'estado_id' => 18],
            ['cidade' => 'Queimada Nova', 'estado_id' => 18],
            ['cidade' => 'Redenção do Gurguéia', 'estado_id' => 18],
            ['cidade' => 'Regeneração', 'estado_id' => 18],
            ['cidade' => 'Riacho Frio', 'estado_id' => 18],
            ['cidade' => 'Ribeira do Piauí', 'estado_id' => 18],
            ['cidade' => 'Ribeiro Gonçalves', 'estado_id' => 18],
            ['cidade' => 'Rio Grande do Piauí', 'estado_id' => 18],
            ['cidade' => 'Santa Cruz do Piauí', 'estado_id' => 18],
            ['cidade' => 'Santa Cruz dos Milagres', 'estado_id' => 18],
            ['cidade' => 'Santa Filomena', 'estado_id' => 18],
            ['cidade' => 'Santa Luz', 'estado_id' => 18],
            ['cidade' => 'Santa Rosa do Piauí', 'estado_id' => 18],
            ['cidade' => 'Santana do Piauí', 'estado_id' => 18],
            ['cidade' => 'Santo Antônio de Lisboa', 'estado_id' => 18],
            ['cidade' => 'Santo Antônio dos Milagres', 'estado_id' => 18],
            ['cidade' => 'Santo Inácio do Piauí', 'estado_id' => 18],
            ['cidade' => 'São Braz do Piauí', 'estado_id' => 18],
            ['cidade' => 'São Félix do Piauí', 'estado_id' => 18],
            ['cidade' => 'São Francisco de Assis do Piauí', 'estado_id' => 18],
            ['cidade' => 'São Francisco do Piauí', 'estado_id' => 18],
            ['cidade' => 'São Gonçalo do Gurguéia', 'estado_id' => 18],
            ['cidade' => 'São Gonçalo do Piauí', 'estado_id' => 18],
            ['cidade' => 'São João da Canabrava', 'estado_id' => 18],
            ['cidade' => 'São João da Fronteira', 'estado_id' => 18],
            ['cidade' => 'São João da Serra', 'estado_id' => 18],
            ['cidade' => 'São João da Varjota', 'estado_id' => 18],
            ['cidade' => 'São João do Arraial', 'estado_id' => 18],
            ['cidade' => 'São João do Piauí', 'estado_id' => 18],
            ['cidade' => 'São José do Divino', 'estado_id' => 18],
            ['cidade' => 'São José do Peixe', 'estado_id' => 18],
            ['cidade' => 'São José do Piauí', 'estado_id' => 18],
            ['cidade' => 'São Julião', 'estado_id' => 18],
            ['cidade' => 'São Lourenço do Piauí', 'estado_id' => 18],
            ['cidade' => 'São Luis do Piauí', 'estado_id' => 18],
            ['cidade' => 'São Miguel da Baixa Grande', 'estado_id' => 18],
            ['cidade' => 'São Miguel do Fidalgo', 'estado_id' => 18],
            ['cidade' => 'São Miguel do Tapuio', 'estado_id' => 18],
            ['cidade' => 'São Pedro do Piauí', 'estado_id' => 18],
            ['cidade' => 'São Raimundo Nonato', 'estado_id' => 18],
            ['cidade' => 'Sebastião Barros', 'estado_id' => 18],
            ['cidade' => 'Sebastião Leal', 'estado_id' => 18],
            ['cidade' => 'Sigefredo Pacheco', 'estado_id' => 18],
            ['cidade' => 'Simões', 'estado_id' => 18],
            ['cidade' => 'Simplício Mendes', 'estado_id' => 18],
            ['cidade' => 'Socorro do Piauí', 'estado_id' => 18],
            ['cidade' => 'Sussuapara', 'estado_id' => 18],
            ['cidade' => 'Tamboril do Piauí', 'estado_id' => 18],
            ['cidade' => 'Tanque do Piauí', 'estado_id' => 18],
            ['cidade' => 'Teresina', 'estado_id' => 18],
            ['cidade' => 'União', 'estado_id' => 18],
            ['cidade' => 'Uruçuí', 'estado_id' => 18],
            ['cidade' => 'Valença do Piauí', 'estado_id' => 18],
            ['cidade' => 'Várzea Branca', 'estado_id' => 18],
            ['cidade' => 'Várzea Grande', 'estado_id' => 18],
            ['cidade' => 'Vera Mendes', 'estado_id' => 18],
            ['cidade' => 'Vila Nova do Piauí', 'estado_id' => 18],
            ['cidade' => 'Wall Ferraz', 'estado_id' => 18]
        ]);

        $this->command->info('Cidades do Piauí importadas com sucesso!');
    }
}
