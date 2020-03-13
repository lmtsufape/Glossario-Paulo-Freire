<?php

use Illuminate\Database\Seeder;

class TrechoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Trecho::create([
            "verbete_id" => 1,
            "titulo_video" => "Conferência do professor Paulo Freire e entrega do título de cidadão uberabense",
            "tipo_recurso" => "vídeo",
            "tempo" => "3h10min34s 3h12min08s",
            "endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1893",
            "texto" => "Em primeiro lugar o comando que a cabeça dá aos músculos do braço e da mão para ele apanhar o lápis é o mesmo comando que ela daria para levantar a colher de pedreiro, por exemplo, e ele faz isso e sente que o peso não é o suficiente para a força que ele pôs, mas isso é um descompasso que se gera através da experiência. O homem analfabeto de trinta anos passou já no mínimo vinte pegando pesos e não lápis. Outro aspecto que fica claro nessa experiência é que diante de mim o pintor não tinha nenhuma inibição com relação a fazer o que ele sabia que sabia fazer, mas diante de mim ele tinha uma inibição de fazer uma coisa que ele sabia que não sabia. Então, é por isso que eu acho inclusive, que na alfabetização de adultos é preciso que os adultos se capacitem se convençam de que eles também sabem fazer qualquer coisa que ninguém ignora tudo",
            "arquivo" => ""]);

        \App\Trecho::create([
            "verbete_id" => 2,
            "titulo_video" => "Programa \'Clodovil Abre o Jogo\' entrevista Paulo Freire e Tatiana Belinky",
            "tipo_recurso" => "vídeo",
            "tempo" => "04min29s 05min01s",
            "endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1915",
            "texto" => "Eu acho que não há outro caminhar para chegar a ele a não ser o do respeito, o da amorosidade e da compreensão enquanto diferente e não se zangar porque é diferente, entendeu? Eu não posso te impor o meu sonho, mas posso te falar do meu sonho e posso brigar até, não no sentido de murro, eu posso lutar e é isso que eu acho que tenho que fazer para que tu acredites que meu sonho vale. Eu acho que é isso que faz a gente chegar ao outro sem recusas",
            "arquivo" => ""]);

        \App\Trecho::create([
            "verbete_id" => 3,
            "titulo_video" => "Diálogo com Paulo Freire",
            "tipo_recurso" => "vídeo",
            "tempo" => "1h50min51seg 1h50min26seg",
            "endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3229",
            "texto" => "Por um lado, é preciso ter uma positividade, uma politização da educação e da alfabetização. Quer dizer, as educadoras são formadas pessimamente nas escolas normais e não tem nenhuma noção do que é classe social, não tem noção nenhuma. Como é que você pode trabalhar na alfabetização sem ter o mínimo de convivência com a compreensão profunda do fenômeno da linguagem? Não pode. Alfabetização não é Ba Be Bi Bo Bu é jogar com a linguagem humana",
            "arquivo" => ""]);

    }
}
