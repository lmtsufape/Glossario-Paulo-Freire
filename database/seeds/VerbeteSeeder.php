<?php

use Illuminate\Database\Seeder;

class VerbeteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\App\Verbete::create(['descricao' => 'Adultos (capacitação)'] ); 
		\App\Trecho::create([
			"verbete_id" => 1,
			"titulo_video" => "Conferência do professor Paulo Freire e entrega do título de cidadão uberabense",
			"tipo_recurso" => "vídeo", 
			"tempo" => "03h10min34s a 03h12min08s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1893", 
			"texto" => "Em primeiro lugar o comando que a cabeça dá aos músculos do braço e da mão para ele apanhar o lápis é o mesmo comando que ela daria para levantar a colher de pedreiro, por exemplo, e ele faz isso e sente que o peso não é o suficiente para a força que ele pôs, mas isso é um descompasso que se gera através da experiência. O homem analfabeto de trinta anos passou já no mínimo vinte pegando pesos e não lápis. Outro aspecto que fica claro nessa experiência é que diante de mim o pintor não tinha nenhuma inibição com relação a fazer o que ele sabia que sabia fazer, mas diante de mim ele tinha uma inibição de fazer uma coisa que ele sabia que não sabia. Então, é por isso que eu acho inclusive, que na alfabetização de adultos é preciso que os adultos se capacitem se convençam de que eles também sabem fazer qualquer coisa que ninguém ignora tudo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Afetividade'] ); 
		\App\Trecho::create([
			"verbete_id" => 2,
			"titulo_video" => "Programa 'Clodovil Abre o Jogo' entrevista Paulo Freire e Tatiana Belinky",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h04min29s a 00h05min01s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1915", 
			"texto" => "Eu acho que não há outro caminhar para chegar a ele a não ser o do respeito, o da amorosidade e da compreensão enquanto diferente e não se zangar porque é diferente, entendeu? Eu não posso te impor o meu sonho, mas posso te falar do meu sonho e posso brigar até, não no sentido de murro, eu posso lutar e é isso que eu acho que tenho que fazer para que tu acredites que meu sonho vale. Eu acho que é isso que faz a gente chegar ao outro sem recusas.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Alfabetização'] ); 
		\App\Trecho::create([
			"verbete_id" => 3,
			"titulo_video" => "Diálogo com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h50min51s a 01h50min26s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3229", 
			"texto" => "Por um lado, é preciso ter uma positividade, uma politização da educação e da alfabetização. Quer dizer, as educadoras são formadas pessimamente nas escolas normais e não tem nenhuma noção do que é classe social, não tem noção nenhuma. Como é que você pode trabalhar na alfabetização sem ter o mínimo de convivência com a compreensão profunda do fenômeno da linguagem? Não pode. Alfabetização não é Ba Be Bi Bo Bu é jogar com a linguagem humana.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 3,
			"titulo_video" => "A dimensão pedagógica da produção científica",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h32min27s a 01h32min54s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3232", 
			"texto" => "Assim como a alfabetização do ponto de vista linguístico se é entendida de forma crítica, é um exercício da assunção por parte do falante da razão de ser da sua linguagem. Isso no fundo é a alfabetização, não é um Ba, Be, Bi, Bo, Bu.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 3,
			"titulo_video" => "Seminário 'Reflexão sobre processo metodológico de alfabetização'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h42min46s a 00h44min54s", 
			"endereco_video" => ": http://acervo.paulofreire.org:8080/jspui/handle/7891/3308", 
			"texto" => "A educação de um modo geral e a alfabetização de modo particular que me interessava na época é um ato político, quer dizer, isso significava que a alfabetização não é um processo puramente técnico de natureza linguística, metodológica através do qual uma pessoa considerada letrada, quer dizer, que lê e escreve, ensina a outra considerada letrada, quer dizer, analfabeto, o domínio mecânico, técnico da linguagem. Daí uma afirmação, não há alfabetização neutra, pense como soa a vocês hoje absolutamente óbvio, mas não era óbvio quando eu disse isso pela primeira vez e é interessante é que isso foi dito pela primeira vez e a segunda e uma terceira assim mais uma coisa diferente o que não quer dizer que eu tenha sido o primeiro no mundo que viu isso, outras pessoas viram também possivelmente só não disseram.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 3,
			"titulo_video" => "Paulo Freire conversa com estudantes de curso para o magistério",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h47min22s a 00h47min41s", 
			"endereco_video" => ": http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3292", 
			"texto" => "Alfabetização, no fundo, é exatamente o domínio da leitura da palavra nunca dissociada, a leitura da palavra, da leitura do mundo, da leitura das realidades que todos nós fazemos.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 3,
			"titulo_video" => "Entrevista com Paulo Freire em sua casa (Vídeo 1 e 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h02min14s a 00h05min42s (VÍDEO 1)", 
			"endereco_video" => ": http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1913", 
			"texto" => "Eu tinha dito momentos antes a vocês que a intenção minha ao trabalhar com a alfabetização, nunca foi a de ficar na alfabetização, mas, pelo contrário, baseado em todo o esforço anterior que eu tinha participado nos servem. Eu vinha tentando era fazer uma compreensão crítica da prática educativa e uma crítica à prática educativa, mas a alfabetização é exatamente um capítulo disso, um capítulo fundamental um capítulo importante. E agora sobre alguns episódios das primeiras experiências, primeiras buscas que eu fiz enquanto método de trabalho enquanto procedimento que eu gostaria de dizer porquê. Eu me lembro de que no movimento de popular eu comecei um dia desenvolver uma atividade que me pareceu muito interessante com a periferia do Recife com grupos de homens e de mulheres populares  independentemente de serem ou não analfabetos, e eu discutia com eles uma provável temática que lhes interessasse e em segundo ponto eu fazia um roll de temas, de assuntos e a partir daí eu trabalhava esses temas do ponto de vista pedagógico e eu estudava melhor o conteúdo desses temas, convidava professores amigos meus e buscava uma análise desses temas juntos com os grupos populares e os resultados eram os melhores possíveis. E um dia eu dizia a mim mesmo se é possível discutir desenvolvimento por exemplo nacionalismo, reformas de base, que eram temas que os grupos populares me proponham, se é possível discutir lucidamente com os grupos populares essa temática por que não seria possível trabalhar um pouco no procedimento da alfabetização dos adultos e então ajudar homens e mulheres analfabetos do Brasil a ultrapassar rapidamente a impossibilidade de ler e escrever palavras.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 3,
			"titulo_video" => "Entrevista de Paulo Freire ao Globo Ciência sobre Alfabetização (Programa 281)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h14min20s a 00h14min45s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1899", 
			"texto" => "Eu acho que o trabalho sério de alfabetização do Brasil, não apenas ok! do menino, mas ok! sobretudo do adulto, teria que jogar com essa compreensão maior, mais ampla do que é alfabetização. Quer dizer, o alfabetizado não apenas ler e escrever bilhetes, ou cartas, ou ler jornais, mas ler o mundo também.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 3,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h11min17s a 00h12min16s (PROGRAMA 10)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "Alfabetizar é montar os sistemas de sinais gráficos sobre o sistema anterior que a gente já tem que é o sistema da linguagem oral, que a gente domina, que é o falante. Por isso mesmo que não há analfabeto oral. Ora, essa montagem do sinal gráfico, no meu entender, eu continuo brigando até hoje por isso, essa montagem não é coisa a ser feita de um para o outro. O papel do alfabetizador nem é o de cruzar os braços diante do processo de aprender que o outro tem. Nem tão pouco de pensar que pode aprender em nome do outro, em lugar do outro. O papel do alfabetizador é muito importante, mas é o de quem participa de um ato criador com o alfabetizando.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 3,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h15min57s a 00h16min31s (PROGRAMA 10)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "Não me interessava apenas que alfabetizando aprendesse de cor a ler ou a juntar pedaços de sílabas para depois constituir palavras e ler com dificuldade, escrever um bilhete etc. O que me interessava era juntar as duas leituras básicas: a leitura do mundo e a leitura da palavra. E aí está toda a força política de uma proposta como esta.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 3,
			"titulo_video" => "Paulo Freire: o revolucionário educador (Programa 1 e 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h03min08s a 00h03min49s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1946", 
			"texto" => "Eu acho que o que mais me tocou para que eu buscasse, para que eu pesquisasse algo, foi o que parecia uma profunda injustiça e uma imensa ofensa aos adultos que não tendo sido, não tendo tido oportunidade de estudar enquanto crianças, chegar à maturidade sem o comando da palavra escrita. E isso me parecia, como me parece, um absurdo.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 3,
			"titulo_video" => "Paulo Freire: o revolucionário educador (Programa 1 e 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h06min37s a 00h07min05s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1946", 
			"texto" => "A alfabetização é uma experiência criadora. E significa que o alfabetizando tem que criar, tem que montar para usar uma expressão mais técnica o seu sistema de sinais gráficos, quer dizer ele tem que ser, no fundo, um arquiteto desta produção, obviamente, ajudado ele ou ela, ajudado pelo educadora ou pelo educador.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Alfabetização (adultos)'] ); 
		\App\Trecho::create([
			"verbete_id" => 4,
			"titulo_video" => "Conferência do professor Paulo Freire e entrega do título de cidadão uberabense",
			"tipo_recurso" => "vídeo", 
			"tempo" => "03h12min27s a 03h13min00s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1893", 
			"texto" => "Os primeiros momentos da alfabetização de adultos deveriam ser usados no sentido de trabalhar a superação desses saberes infundados que os analfabetos criam como o saber da sua inferioridade. Não! Não é inferior. Quer dizer, ele pode também saber fazer as coisas que a gente sabe que a gente teve prática para saber.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 4,
			"titulo_video" => "Arquivo N  Paulo Freire, o Educador",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h13min37s a 00h14min03s", 
			"endereco_video" => ": http://acervo.paulofreire.org:8080/jspui/handle/7891/1888", 
			"texto" => "Qualquer campanha de alfabetização no Brasil que não passe por uma séria e profunda preocupação com a escola pública primária e qualquer preocupação com a alfabetização de adultos, que não implique numa injeção de verbas nas escolas públicas de primeiro grau tende a fracassar.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 4,
			"titulo_video" => "Seminário 'Reflexão sobre processo metodológico de alfabetização'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h38min28s a 00h40min20s", 
			"endereco_video" => ": http://acervo.paulofreire.org:8080/jspui/handle/7891/3308", 
			"texto" => "Me lembro depois de ter trabalhado desde 1945/46 junto com operários limpando os municípios e de ter aprendido no meu trabalho e de ter ensinado aos operários. Me lembro de ter aprendido muito com eles e foi exatamente nesse processo de ensinar e aprender e ao analisar sempre os resultados do trabalho que eu um dia me coloquei a questão de por que não pesquisar alguma coisa no campo da alfabetização dos adultos com que nós pudéssemos dar uma contribuição ao processo do ensino de ler e escrever que superasse os absurdos que se faziam na época. Essa indagação que se fundava muito na minha experiência anterior que começou no fim dos anos 40  eu não teria feito a pergunta que fiz.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 4,
			"titulo_video" => "Paulo Freire entrevistado no programa 'Matéria Prima' da TV Cultura",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h25min36s a 00h27min13s", 
			"endereco_video" => ": http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3218", 
			"texto" => "Quando a gente pensa em alfabetização, em programas de alfabetização de adultos, em projetos de alfabetização de adultos, eu acho que a gente deve pensar, deve se preocupar com os seguintes itens, sem os quais não é possível fazer um programa válido primeiro é preciso haver dinheiro, educação é uma coisa cara, realmente cara, é preciso haver dinheiro, quer dizer, só na base da boa vontade não se faz uma coisa dessas segundo é preciso haver competência científica, uma parte daqueles que fazem o programa que fazem o projeto terceiro é preciso haver por parte daqueles que se fazem os alfabetizandos é preciso que na sociedade se faça um tal clima histórico, cultural, político que provoque nos alfabetizandos a consciência do direito de ler, de ler a palavra e de ler o mundo, sem esses itens, sem esses momentos, o dinheiro pra financiar, a competência científica, técnica, o respeito a isso, o respeito ao povo, sem a vontade popular que esteja clara, lúcida, como demandante de um direito que tem, um direito de ler a palavra, de ler o mundo, então não pode haver programa.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 4,
			"titulo_video" => "Entrevista de Paulo Freire ao Globo Ciência sobre Alfabetização (Programa 281)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h19min25s a 00h20min38s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1899", 
			"texto" => "Quando você pensa no trabalho de alfabetização de adultos se chame campanha, ou movimento, como você quiser chamar. Você tem que pensar numa espécie assim de conjuntos, de componentes, faltando um dos quais a coisa começa a embananar. Que componentes são esses? De um lado, o dinheiro. Você tem que ter na verdade uma verba forte, grossa, graúda, você tem que ter um baita orçamento. Educação é uma coisa cara, é preciso que o Brasil se capacite sabendo que é uma coisa cara, a educação. Não é de graça que se faz a educação. Segundo, você tem que ter um quadro, isso tudo simultaneamente, um quadro competente. Uma competência científica, uma competência técnica, seja inclusive capaz de se reproduzir, se multiplicar. O que vale dizer, que eu falo inicialmente em equipe centrais, em equipe geradoras.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 4,
			"titulo_video" => "Entrevista de Paulo Freire ao Globo Ciência sobre Alfabetização (Programa 281)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h29min24s a 00h30min45s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1899", 
			"texto" => "[Entrevistadora]: Qual é o pulo do gato na alfabetização de jovens e adultos? Qual é o grande segredo desse trabalho? [Paulo Freire]: Há alguns segredos neste trabalho, que no fundo não são segredos. Um deles é aquele que eu falei antes, quer dizer, é preciso que o educando, que isso não é só na alfabetização, mas que o educando não apenas se reconheça, mas se assuma como sujeito, como curiosidade crítica, e como criatividade no processo de saber, quer dizer, no processo de conhecer. Agora você veja que para que um educador possibilite, chame, convoque, desafie o educando, no sentido em que o educando tome na mão dele ou dela, esse gosto de criar, de se arriscar, de se aventurar , é preciso que esse educador seja democrático, é preciso que esse educador ou essa educadora respeite na verdade a limitação,  as limitações, as possibilidades, a curiosidade do educando.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 4,
			"titulo_video" => "Lançamento do livro 'Paulo Freire: uma Biobibliografia'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h36min04s a 01h40min50s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1901", 
			"texto" => "O que há é utopia, o que há é sonho que o neoliberalismo cismou que acabou e é preciso para o neoliberalismo que acabem os sonhos e as utopias, porque eles não resistem aos sonhos e às utopias. Um outro camponês, que no Brasil, debate o conceito de Cultura, ele disse, agora, e, esse foi um discurso lapidado, ele disse Agora, até pode que o Brasil não mude, agora eu sei que até pode que o Brasil não mude, mas não é por causa da vontade de Deus. Não é porque brasileiro seja político, quer dizer, aquele outro professor, aquele outro grande educador que fez esse discurso estava realmente ateoriando-se, tomando nas mãos a compreensão da história como possibilidade e não da história como determinação. A mesma coisa eu ouvi em Caboeiro, anos atrás, quando visitando uma experiência numa cooperativa de produção de bananas. Cheguei e os educadores estavam trabalhando com os grupos de alfabetizados, que se reuniram todos num galpão, e aí eu fui me apresentar pessoalmente, e um deles avança assim e pede a palavra e fala. Faz um discurso, simples como o povo, fala e em um certo momento, me olha e diz, se esses intelectuais não tiveram nunca essa experiência salutar que é o diálogo com o povo-povo, pode até ter a tentação de dizer que essas coisas que eu estou citando aqui são mentirosas, não ouvem. Mas, qualquer intelectual que tenha tido experiências em áreas culturais, sabe que eu não estou mentindo. E aquele camponês de Caboeiro, em certo momento da sua fala, me olha e me diz: Camarada, Paulo Freire, nós queremos agradecer a você pelas ideias que você teve de facilitar que a gente aprenda a ler e escrever, mas muito mais importante que do aprender a escrever e a ler, foi juntar a aprender a ler e a escrever, aprender também a pensar. Puxa, quando aquele camponês de Caboeiro disse, eu sabia que ele não estava dizendo antes de você eu não pensava, sabia disso. Não era isso que ele estava dizendo, o que ele estava dizendo, o que ele estava tentando dizer mesmo que não explicitasse ao nível da teoria, não importa, como teórico cabia a mim até interpretar a teoria que ele não estava ainda capaz de dizer. Mas, no fundo, o que ele estava dizendo Paulo, velho, muito obrigado porque você veio provando que não é possível aprender a ler e escrever sem pensar criticamente. Era isso que ele queria dizer. E, na verdade, é impossível. A concepção mecanicista da linguagem é absolutamente falida. É preciso entender a substantividade crítica do fenômeno da linguagem, enquanto invenção da gente.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Alfabetização (científica)'] ); 
		\App\Trecho::create([
			"verbete_id" => 5,
			"titulo_video" => "A dimensão pedagógica da produção científica",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h33min07s a 01h34min06s", 
			"endereco_video" => ": http://acervo.paulofreire.org:8080/jspui/handle/7891/3232", 
			"texto" => "Essa introdução pedagógica para o educando do ponto de vista científico, se inicia no processo científico e que vai fazer com que ele assuma também o comportamento científico, a postura científica como algo que exige dele, que ele crie também. Por isso que não é possível um trabalho de natureza pedagógica científica sem liberdade, sem criatividade, sem curiosidade, sem pergunta não é possível. Eu acho que aí há também nesse processo uma alfabetização científica.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Alfabetização (contexto)'] ); 
		\App\Trecho::create([
			"verbete_id" => 6,
			"titulo_video" => "A dimensão pedagógica da produção científica",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h42min42s a 00h44min04s", 
			"endereco_video" => ": http://acervo.paulofreire.org:8080/jspui/handle/7891/3232", 
			"texto" => "Uma educadora que alfabetiza um menino no Araguaia pegando a palavra canoa, e outra que alfabetiza o menino aqui no Pacaembu teria que necessariamente levar em conta esses dois universos de experiência que estão constituindo a linguagem dos dois. A palavra canoa se escreve do mesmo jeito, mas no fundo ela tem em certo momento essa diversificação semântica. As duas chegam ao conhecimento em certo sentido canoa é canoa cá e no Araguaia. Mas, é que isso não basta para compreender a canoa. A canoa é percebida ou entendida exatamente quando a gente percebe também o universo que conota a palavra, então a partir daí é realmente impossível separar linguagem e pensamento do mundo.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 6,
			"titulo_video" => "Entrevista de Paulo Freire à TV Itália",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h13min23s a 00h14min18s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1937", 
			"texto" => "Os alunos estão socialmente experimentando-se em um contexto que pertence a todos, e não a eles só. Aí você vai encontrar diferenças individuais. Mas se você for trabalhar em uma alfabetização numa área da periferia de São Paulo, por exemplo, o universo da linguagem não pertence a um só.[Entrevistador]: Mas a todos eles. [Paulo Freire]: A todos eles, dentro de um contexto de classe, por exemplo, de classe social então a tese minha, porque eu me bato sempre, é de que não cabe as professoras, por mais competente que sejam e aos educadores, dentro de um gabinete escolher as palavras com que começar o exercício do aprendizado da leitura e da escrita, mas cabe pelo contrário, compreender, apreender a linguagem, a estrutura do pensamento do grupo que se vai trabalhar. Esse é o ponto de partida.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Alfabetização (cultural)'] ); 
		\App\Trecho::create([
			"verbete_id" => 7,
			"titulo_video" => "Seminário 'Reflexão sobre processo metodológico de alfabetização'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h49min02s a 00h51min42s", 
			"endereco_video" => ": http://acervo.paulofreire.org:8080/jspui/handle/7891/3308", 
			"texto" => "Um outro ponto que me parecia também óbvio pra fundar um trabalho de alfabetização é que a alfabetização não  importa de criança ou de adultos, como a educação em geral é também um momento cultural, quer dizer, alfabetizar é engajar-se num processo cultural, portanto de experiência e expressão da cultura, mas no momento exato em que você reconhece que não pode trabalhar em alfabetização de adultos deixando de lado, uma coisa sem sentido que é a cultura, no momento que você se convence disso obviamente que você tem que reconhecer o passo imediato de que a cultura está cortada por anseios, gostos, desejos, precisões, no sentido de necessidades de classe, dentro da história, quer dizer então a alfabetização é algo que se dá num certo momento histórico, tempo de uma certa expressão, de uma certa liquidação cultural, quer dizer, há uma imbricação no tempo, da forma cultural de estar sendo dos educadores e dos educandos. E esta forma está cortada tanto pela classe social do educador, pela classe social do educando. E esse movimento vai exigir a compreensão cada vez mais profundamente crítica da implicação dessa relação entre alfabetizar e a cultura e para clarear todas as consequências que isso tem.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Alfabetização (direitos)'] ); 
		\App\Trecho::create([
			"verbete_id" => 8,
			"titulo_video" => "Paulo Freire: Educação e mudança",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h10min06s a 00h10min49s", 
			"endereco_video" => ": http://acervo.paulofreire.org:80/xmlui/handle/7891/1931", 
			"texto" => "Para mim o homem e a mulher são algo mais do que a economia, são os sujeitos da economia e não objetos dela, então eu acho que numa perspectiva ética, descente de uma política democrática, você não pode restringir, limitar o direito dos idosos como eu de aprenderem a ler e a escrever eu acho que o direito de saber é um direito que acompanha a homens e mulheres durante toda a vida nossa então eu brigo contra isso.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Alfabetização (ensinar a pensar)'] ); 
		\App\Trecho::create([
			"verbete_id" => 9,
			"titulo_video" => "Encontro com Paulo Freire no Ginásio Tesourinha em Porto Alegre",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h33min55s a 00h34min16s", 
			"endereco_video" => ": http://acervo.paulofreire.org:8080/jspui/handle/7891/1933", 
			"texto" => "Para nós a maior importância do que você está fazendo, é que você não está satisfeito apenas com ensinar a ler e escrever, mas você se preocupa com ensinar a pensar.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Alfabetização (investimento)'] ); 
		\App\Trecho::create([
			"verbete_id" => 10,
			"titulo_video" => "Paulo Freire: Educação e mudança",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h10min06s a 00h10min49s", 
			"endereco_video" => ": http://acervo.paulofreire.org:80/xmlui/handle/7891/1931", 
			"texto" => "É possível fazer alguma hierarquização sobre isso? Eu creio que sim, quer dizer, entre gastar milhares de dólares ou de cruzeiros pra alfabetizar apenas homens e mulheres de 70 anos e deixar os meninos de 15/16, eu acho que não, você teria que dar um certo equilíbrio a isso, mas simplesmente dizer não a quem chega com 70 anos porque tem 70 anos é um absurdo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Alfabetização (ler e escrever)'] ); 
		\App\Trecho::create([
			"verbete_id" => 11,
			"titulo_video" => "Leitura do Mundo, Leitura da Palavra",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h22min36s a 01h25min33s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1926", 
			"texto" => "A única coisa que eu acho que se poderia fazer aqui agora é, primeiro, é ver em que altura do ponto de vista da capacidade para ler e escrever se encontra um certo adulto, num certo momento. Segundo, é preciso que o adulto, vou falar só nele aqui, que aprenda a escrever e aprenda a ler, que seja tanto quanto possível o sujeito mesmo do aprendizado e da sua leitura, e da sua escrita. Quer dizer que, nesse processo, não haja nenhuma separação entre ler e escrever. Há uma marca entre nós, não só entre nós, já que tem muita gente brasileira. Há uma marca que a escola nossa não conseguiu superar ainda, a não ser por exceções, que é a de tomar a escrita e a leitura em momentos diferentes, como se fossem coisas muito diferentes. E o que eu quero dizer é que não é possível ler sem escrever e escrever sem ler, quer dizer, no próprio momento em que a pessoa começa a dominar técnicas de escrever a palavra, que nem sempre é o som, é preciso, então, que não separe o momento da escritura, do momento da leitura. Até isso eu tenho encontrado em universidades, entre mestrandas, doutorandas, doutorandos da pós-graduação universitária. Às vezes com uma dificuldades enorme de escrever a tese e com uma certa facilidade de entender os textos. Lê os textos que a gente sugere, mas não escreve. É que não conseguiu ainda ultrapassar um certo defeito de aprendizagem que vem da infância, que separou leitura de escrita. Quer dizer, era preciso que, nesse caso concreto, que se tentasse uma unidade maior entre a experiência do homem ou da mulher ao ler e ao escrever pra ver se as duas coisas não se apresentam de forma muito diferente pra ele ou pra ela.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Alfabetização (método Paulo Freire)'] ); 
		\App\Trecho::create([
			"verbete_id" => 12,
			"titulo_video" => "Paulo Freire em aula na PUC-SP com o Grupo Banzo",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h11min50s a 00h13min58s", 
			"endereco_video" => ": http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1904", 
			"texto" => "Vocês têm alguma experiência disso, todo mundo começou a rir. Então, disse não foi assim. Como começaram a falar os filhos de vocês?! Aí, disseram: Mama, Papa. Eu disse você sabe o que quer dizer isso mama, papa?! Não. Eu digo, olhe, isso é o seguinte, quando o menino diz mama, no fundo ele tá dizendo outras coisas que a gente precisa de certa maneira muito astutamente, muito inteligentemente traduzir, porque na verdade o discursinho dele não parou na mama não está faltando a ele ainda é a estrutura do que está se montando e que possibilite que ele diga: Mama, agora eu tenho sede. É isso. Mas como esse treco está oculto e há n hipóteses, por exemplo, mamãe me molhei, mamãe tenho sede, mamãe tenho fome, são várias hipóteses de afirmação do menino que estão escondidas, cabe a mamãe com sua prática, com sua quase adivinhação e o papai também ir descobrindo a tradução do mamãe. Aí, eu tenho uns caras por aí que vivem estudando isso e que chama isso de sentença monopalavra, quer dizer, que só tem uma palavra. Quer dizer, é uma sentença toda que gira em torno de uma só palavra. Aí disse, se o ser humano começa a falar assim é ou não é uma violência convida-lo depois para aprender a escrever e a ler, partindo da letra que o treco mais mínimo que a gente tem.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Alfabetização (Paulo Freire)'] ); 
		\App\Trecho::create([
			"verbete_id" => 13,
			"titulo_video" => "Encontro com Paulo Freire no Ginásio Tesourinha em Porto Alegre",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h39min53s a 00h40min44s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1933", 
			"texto" => "O que fundamentalmente me trouxe/levou a questão da alfabetização do Brasil? Eu diria a vocês que muitas coisas me empurram para essa questão da alfabetização. A primeira delas foi essa minha preocupação com a educação mesmo, que é algo de que alfabetização é um capítulo, uma meta. Quer dizer, no fundo, a educação de adultos com a educação popular é um capítulo da educação geral que se dá dentro da sociedade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Alfabetização científica'] ); 
		\App\Trecho::create([
			"verbete_id" => 14,
			"titulo_video" => "Encontro com o Professor Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h30min00s a 00h31min09s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1894", 
			"texto" => "Não é possível ensinar ciência, criar as condições... para isso alguns cientistas estão chamando de alfabetização, numa linguagem metafórica, alfabetização científica, alfabetização da visão científica do mundo. Para mim, não é possível fazer isso sem estar muito lúcido, muito claro com relação, por exemplo, primeiro ao que é ciência mesmo, quer dizer, porque eu não posso trabalhar em torno de algo que eu não sei o que é. Então, é preciso que eu saiba, pelo menos que eu esteja aproximando-me de algo da coisa que se chama ciência para entender o que é isso, o que esse conceito significa para mim. Em segundo lugar, é preciso que eu saiba o que significa educar.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Alfabetização (leitura do mundo)'] ); 
		\App\Trecho::create([
			"verbete_id" => 15,
			"titulo_video" => "Alfabetização  Globo Ciência (Programa 281)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h01min54s a 00h02min15s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1899", 
			"texto" => "Eu acho que de modo geral a pessoa alfabetizada é a pessoa que domina razoavelmente bem as técnicas de escrever e de ler, a que junta à possibilidade de ler também o mundo. Quer dizer, para mim o alfabetizado nesse sentido, se você aceita essa exigência você vê como a educação no Brasil está falha. Porque eu não, quantos de nós já lendo razoavelmente bem, porque eu acho que a gente lê... Os que estamos nessa sala aqui e nesse terraço temos uma certa experiência de ler e escrever, e ficamos nos perguntando quantos de nós lemos razoavelmente bem o mundo. Quer dizer, quantos de nós estamos entendendo, na verdade, as coisas que se passam num dia de São Paulo, um dia do Brasil.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Alfabetizador(a)'] ); 
		\App\Trecho::create([
			"verbete_id" => 16,
			"titulo_video" => "Ler, Escrever, Libertar  BB-Educar",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h06min09s a 00h06min31s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1919", 
			"texto" => "O alfabetizador, além, em primeiro lugar, ele tem que partir da compreensão crítica da sua experiência de vida e da experiência de vida do educando. Quer dizer, sem a experiência e o conhecimento da experiência de vida do educando, o educador falha, entende? Então ele precisa ter uma competência especial para compreender essa experiência de vida, sua e do educando.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 16,
			"titulo_video" => "Ler, Escrever, Libertar  BB-Educar",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h10min36s a 00h10min56s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1919", 
			"texto" => "O alfabetizador precisa, primeiro estar lúcido, politicamente, ele precisa ter uma competência científica e precisa ter uma clareza política com relação ao conhecimento em torno de que ele se engaja, quer dizer, o que é , porque é que ele alfabetiza, para quê, como etc.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Alfabetizador (perfil)'] ); 
		\App\Trecho::create([
			"verbete_id" => 17,
			"titulo_video" => "Paulo Freire: Educação e mudança",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h02min34s a 00h03min14s", 
			"endereco_video" => "http://acervo.paulofreire.org:80/xmlui/handle/7891/1931", 
			"texto" => "O alfabetizador precisa, primeiro, estar lúcido politicamente, claro, saber em favor de que e em favor de quem ele alfabetiza, quer dizer, ele precisa conhecer, ele precisa saber alfabetizar, quer dizer, ele precisa conhecer o mínimo de princípios de natureza científica no campo da linguagem, se não ele dá com os burros nágua, quer dizer, ele precisa ter uma clareza política com relação ao conhecimento em torno do que ele se engaja, o que é que ele, porque é que alfabetiza, para que, como etc.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Alfabetizador(a) (qualidades)'] ); 
		\App\Trecho::create([
			"verbete_id" => 18,
			"titulo_video" => "Alfabetizar é construir",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h20min13s a 00h21min12s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1953", 
			"texto" => "O bom alfabetizador é aquele que sendo aberto crítico, democrático, experimentador, respeita a criatividade do alfabetizando, respeita os temores do alfabetizando, respeita as vergonhas do alfabetizando, as inibições do alfabetizando e sonha com o alfabetizando por um mundo melhor. Mas para fazer isso ele tem que ter, tem que se cercar de duas indispensáveis qualidades, a qualidade de amar, de querer bem e de querer bem ao próprio processo de ensinar, mais ainda ao próprio alfabetizando, e de saber manejar as técnicas da aprendizagem, da leitura e da escrita esse é o perfil, esse é o alfabetizador que eu procuro e é o alfabetizador que eu tentei formar.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Alfabetizando'] ); 
		\App\Trecho::create([
			"verbete_id" => 19,
			"titulo_video" => "Paulo Freire: o revolucionário educador (Programa 1 e 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h08min21s a 00h08min35s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1946", 
			"texto" => "Então eu defendia isso, o direito que o alfabetizando tinha e tem de fazer parte da criação da sua capacidade de ler e escrever.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Amílcar Cabral'] ); 
		\App\Trecho::create([
			"verbete_id" => 20,
			"titulo_video" => "Diálogos com Paulo Freire sobre Amílcar Cabral",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h48min00s a 00h49min16s (DIÁLOGO 1)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3356", 
			"texto" => "Uma coisa que eu observo muito nos textos dele é, quando ele se revela um grande pedagogo da revolução como, por exemplo, quando ele analisa o que ele chamava de debilidades da cultura e é fantástico, porque, combatendo as debilidades da cultura com o povo, ele revelava, contudo, um profundo respeito do povo com as debilidades, porque ele estava convencido de que não se podiam superar as debilidades por decreto, nem por imposição, mas com a transformação da prática social que constituía a própria debilidade. E como isso não é mecânico. Ele tinha uma visão dialética fantástica. Ele sabia que era importante o trabalho de esclarecimento em torno das debilidades, para superação da própria debilidade, para uma nova prática social. E nessa luta contra as debilidades, ele sempre insistia na constituição de uma cultura científica, mas nunca foi um cientificista.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 20,
			"titulo_video" => "Diálogos com Paulo Freire sobre Amílcar Cabral",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h26min38s a 00h27min36s (DIÁLOGO 2)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3356", 
			"texto" => "Uma das qualidades maiores de Cabral que ele compreendia, mas não sabia explicar. Uma coisa linda, uma maneira como ele falava, era isso mesmo, essa capacidade. E ele, para explicar essa capacidade de prever, antever, ele me disse o seguinte: camarada Paulo Freire é capaz de pensar, camarada amigo Cabral também, mas a grande diferença entre Paulo Freire e o camarada Amílcar Cabral é a seguinte: é que Paulo Freire é capaz de pensar sobre quinhentos metros em torno de si e o camarada Amílcar era capaz de sonhar com alguma coisa seis anos antes.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 20,
			"titulo_video" => "Diálogos com Paulo Freire sobre Amílcar Cabral",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h27min54s a 00h29min09s (DIÁLOGO 6)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3356", 
			"texto" => "Amílcar não é apenas um cabo-verdiano guineense, é um homem da África, é um homem do mundo. Evidentemente, para que ele fosse um homem do mundo foi preciso primeiro que ele fosse cabo verdiano e guineense, e depois africano é toda essa realidade da África que o faz universal. E ele percebeu isso com muita clareza, daí, inclusive, a humildade também dele. Era de uma simplicidade extraordinária e decidido também. Há um texto dele sobre resistência cultural em que ele diz: Se nós tivermos que sair e matar na luta um Tuga invasor, isto é a resistência cultural. Quer dizer, era de uma clareza fantástica. Depois, a visão política que ele tinha da libertação, que a libertação era um ato cultural, e um fator da cultura.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Amílcar Cabral (autocrítica)'] ); 
		\App\Trecho::create([
			"verbete_id" => 21,
			"titulo_video" => "Diálogos com Paulo Freire sobre Amílcar Cabral",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h49min54s a 00h50min19s (DIÁLOGO 2)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3356", 
			"texto" => "A crítica e a autocrítica em Amílcar Cabral não era um comportamento burocrático, porque tem muita gente pra quem a autocrítica é apenas uma espécie de exercício burocrático. Então, o cara comete uma porção de erros hoje faz uma autocrítica para a semana e depois continua agindo do mesmo jeito. Em Amílcar não em Amílcar a crítica era como você dizia realmente, fazia parte do processo formador.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Amílcar Cabral (tensão existencial)'] ); 
		\App\Trecho::create([
			"verbete_id" => 22,
			"titulo_video" => "Diálogos com Paulo Freire sobre Amílcar Cabral",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h37min24s a 00h38min41s (DIÁLOGO 2)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3356", 
			"texto" => "Porque também se ele não tivesse tido essa confiança, ele não teria sido o grande pedagogo revolucionário que ele foi. Porque no fundo claro, Cabral para mim foi um homem que viveu intensamente, o que eu costumo chamar de tensão dramática entre contraditórios. Por exemplo porque ele viveu intensamente a tensão entre vida e morte, porque ele jamais teve medo de morrer, é que ele continua vivo. Quer dizer, ele encarnou essa tensão constante entre a vida e a morte, entre ficar e partir, entre a paciência e a impaciência, e intensamente ele viveu a dramaticidade desta tensão. Só os homens e as mulheres que são capazes de viver/encarnar a dramaticidade da tensão existencial são capazes de ser grandes.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Amor'] ); 
		\App\Trecho::create([
			"verbete_id" => 23,
			"titulo_video" => "Paulo FreireŽs Message  perceptions on Education and fundamental moments in educational practices towards democratic choice",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h14min21s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1921", 
			"texto" => "Eu diria que o amor é uma tarefa fundamental para ser um professor. Ou seja, eu não posso ter medo de amar, mas, é claro, que preciso saber como amar. As vezes, nós amamos sem saber como amar melhor e mais seriamente, e ao invés de construir algo bonito nós distorcemos as pessoas porque não soubemos amar direito. Mas o que quero dizer é que é impossível ser um bom professor, um bom educador, sem experimentar permanentemente a possibilidade de amar. E quando falo dessa possibilidade não estou dizendo apenas que devemos amar nossos alunos e sim que devemos amar também o processo de ensinar.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 23,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h08min25s a 00h08min28s (PROGRAMA 1)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "Amar é admitir e respeitar a diversidade.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 23,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h24min47s a 00h25min15s (PROGRAMA 7)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "Para mim, tu amas na medida em que tu não te aproprias do sujeito e nunca do objeto do teu amor. Dizendo isso, em outras palavras, quer dizer, tu amas na medida em que tu experimentas uma busca de liberdade no outro e com o outro.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Amor (pessoas e mundo)'] ); 
		\App\Trecho::create([
			"verbete_id" => 24,
			"titulo_video" => "Paulo Freire: o Andarilho da utopia",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h06min28s a 00h06min44s (PROGRAMA 1)", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3279", 
			"texto" => "Eu sou um intelectual que não tem medo de ser amoroso. Eu amo as gentes e amo o mundo, e é porque amo as pessoas e amo o mundo, que eu brigo pra que a justiça social se em implante antes da caridade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Analfabetismo'] ); 
		\App\Trecho::create([
			"verbete_id" => 25,
			"titulo_video" => "Ler, Escrever, Libertar  BB-Educar",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h14min18s a 00h14min22s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1919", 
			"texto" => "Ninguém opta pela miséria e pela tristeza, ninguém é analfabeto por opção.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 25,
			"titulo_video" => "Paulo Freire: o revolucionário educador (Programa 1 e 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h04min03s a 00h04min12s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1946", 
			"texto" => "Quer dizer, o analfabetismo no fundo esconde uma proibição, que é uma proibição de classe social.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Analfabetismo (adulto)'] ); 
		\App\Trecho::create([
			"verbete_id" => 26,
			"titulo_video" => "Entrevista de Paulo Freire à TV Itália",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h05min08s a 00h06min11s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1937", 
			"texto" => "A questão do analfabetismo adulto é enorme nesse país, não é um fenômeno de hoje, o analfabetismo vem acompanhando a história desse país. Minha mulher, por exemplo, recentemente acaba de fazer uma dissertação de mestrado em que ela estuda a história do analfabetismo no país, vai sair agora até um livro, um livro que eu acho excelente. Mas você veja o seguinte, que ao mesmo tempo em que os índices do analfabetismo continuam grande no Brasil, nós temos oito milhões, aproximadamente, de crianças em idade escolar proibidas de estar na escola, quer dizer, quando eu digo proibida não quer dizer que haja a polícia fechando as escolas, mas que não há escolas para essas crianças estudar.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Anestesia histórica'] ); 
		\App\Trecho::create([
			"verbete_id" => 27,
			"titulo_video" => "vídeo",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h34min12s a 00h34min51s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1941", 
			"texto" => "A anestesia histórica tem a ver com a perda da memória e tem a ver com a perda como consequência da visão do amanhã. E gera um não sei o que fazer, gera uma dúvida permanente. Já não é, se quer, a dúvida, a dúvida é um estado excelente, porém gera um senso de impotência, isto é, já não há o que fazer.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Aprender'] ); 
		\App\Trecho::create([
			"verbete_id" => 28,
			"titulo_video" => "Seymour Papert e Paulo Freire: uma conversa sobre informática, ensino e aprendizagem",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h20min28s a 00h 22min26s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/395", 
			"texto" => "Eu não tenho dúvida nenhuma de que se a gente pensa muito remotamente alguns milênios naqueles primeiros momentos em que homens e mulheres ao se experimentar socialmente defronte do desafio terminará por descobrir que estavam fazendo uma coisa que não sabiam o que era ainda, quer dizer, não havia sequer ainda possivelmente na sua linguagem o apelido da coisa que estavam fazendo, quer dizer, elas e eles estavam sabendo, mas não havia o verbo ainda ou mesmo porque a linguagem só chegou muitos milênios depois que homens e mulheres já estavam de pé mudando o mundo, que a primeira coisa que nós fizemos foi mudar e dar nome  a mudança só veio depois com a linguagem. Portanto, começamos a saber, sem dizer que sabíamos muito tempo antes. Aprendemos antes de ensinar. Foi exatamente a constatação de que aprendíamos antes sem ensinar que nos ensinou a ensinar, quer dizer, foi a experiência de aprender, foi a experiência do primeiro estágio que inventou o segundo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Aprender (conceito)'] ); 
		\App\Trecho::create([
			"verbete_id" => 29,
			"titulo_video" => "Paulo Freire: o revolucionário educador (Programa 1 e 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h07min40s a 00h07min51s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1946", 
			"texto" => "Aprender é uma experiência de quem cria e não uma experiência de quem é teleguiado.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Aprendizado'] ); 
		\App\Trecho::create([
			"verbete_id" => 30,
			"titulo_video" => "Paulo Freire at Highlander: A Conversation with Myles Horton",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h29min52s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1883", 
			"texto" => "O que eu aprendi? Eu aprendi novamente o fantástico sabor de aprender. Para mim, aprender é como fazer amor, isso torna possível certos sabores fantásticos e, eu falaria para você, eu não posso separar o saber, comer, viver, criar, da sensualidade, para mim, isso deveria ser impossível. Quando venho para os meus livros é quase o mesmo que conhecer pessoas. Quando como, eu amo comer, o que não significa que eu como muito, tenho meus limites, eu amo comer e eu tenho muito, muito medo de pessoas que não gostam de comer [RISOS]. Pessoas que não gostam de comer poderiam nos matar, [RISOS] é importante comer, viver. Então eu aprendi hoje de novo, o quão bonito é aprender. Eu confirmei hoje também outra coisa bonita de pensar para um educador, que trabalhou muito em diferentes países, em diferentes culturas, em diferentes situações, isso é como as pessoas são capazes de entender. Isso é algo que eu acho bonito, é que todos vocês aqui não estavam com medo de assumir a responsabilidade de serem educadores .", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 30,
			"titulo_video" => "Paulo Freire: o revolucionário educador (Programa 1 e 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h07min30s a 00h07min37s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1946", 
			"texto" => "Você só aprende quando você apreende a razão de ser do objeto que você aprende.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Aprendizado (Paulo Freire)'] ); 
		\App\Trecho::create([
			"verbete_id" => 31,
			"titulo_video" => "Programa 'Clodovil Abre o Jogo' entrevista Paulo Freire e Tatiana Belinky",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h15min35s a 00h15min59s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1915", 
			"texto" => "Eu aprendi a ler e a escrever no chão com gravetos, com as palavras que eu usava, essa coisa que eu desenvolvi mais velho, já homem, estava lá enraizada na memória de meu corpo. Um dia explodiu aquilo, 30 anos depois e foi assim que eu aprendi a ler e foi assim que a palavra me fascinou.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Aprendizagem'] ); 
		\App\Trecho::create([
			"verbete_id" => 32,
			"titulo_video" => "Debate: o futuro da escola",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h24min32s a 00h24min47s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1896", 
			"texto" => "Aprendemos antes de ensinar. Foi exatamente a constatação que aprendíamos sem ensinar, que nos ensinou a ensinar.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Arte'] ); 
		\App\Trecho::create([
			"verbete_id" => 33,
			"titulo_video" => "Conversando com Paulo Freire sobre Arte e Educação aos 21 anos da Pedagogia do Oprimido",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h42min42s a 00h43min30s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1882", 
			"texto" => "[Paulo Freire]: Eu acho que a arte tem uma importância fantástica na articulação do conhecimento. [Entrevistadora]: Ela é si um objeto de conhecimento? [Paulo Freire]: Ela pode ser objeto de conhecimento quando eu me pergunto o que é arte. Quer dizer, eu digo a você o que vem sendo a arte, mas não transformo você em artista, porque disse isso. Em outras palavras, por exemplo, eu formo, eu ensino alguém a ser médico, mas o que há também na própria prática médica de artístico eu também não ensino como na prática educativa.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Arte (escola)'] ); 
		\App\Trecho::create([
			"verbete_id" => 34,
			"titulo_video" => "Conversando com Paulo Freire sobre Arte e Educação aos 21 anos da Pedagogia do Oprimido",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h44min04s a 00h44min41s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1882", 
			"texto" => "Na medida em que uma prática escolar considerar a expressão artística como algo substantivo, como algo tão necessário como saber matemática para vida. No momento em que a escola testemunhar isso ao aluno, no momento em que a escola respeitar a expressividade criadora do aluno em que a escola respeita as práticas fazedoras de bonitezas dos meninos.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Assistente Social'] ); 
		\App\Trecho::create([
			"verbete_id" => 35,
			"titulo_video" => "Entrevista de Paulo Freire concedida à Carmelita e Mariângela Wanderlei",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h13min57s a 00h15min49s (LADO A)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3241", 
			"texto" => "Mas não há dúvida nenhuma que há uma enorme contribuição por parte delas, dessas primeiras assistentes sociais, que iniciaram a curiosidade nessa faixa. E desde aquela época, enquanto esses estudantes de nível superior em outros setores da universidade não tinham nada que ver com a prática, as assistentes sociais, exatamente por causa dos chamados trabalhos de campo, já estavam sendo levadas à prática. Então elas iam para áreas populares, para os montões, os portos do Recife, fazer os seus estágios em certas agências locais. Quer dizer, essa coisa enquanto os estudantes de Medicina continuavam dentro das suas faculdades cortando cadáveres para estudar sua anatomia, enquanto os estudantes de Sociologia estavam memorizando textos de uma teoria, de A e de B e de C, as assistentes sociais com toda ingenuidade que houvesse  já estavam fazendo seus estágios lá nas áreas populares e isso teria necessariamente que despertar a consciência das assistentes sociais para dar o salto de uma visão mais ingênua da realidade social até uma visão mais crítica dessa realidade. E creio que hoje em dia, inclusive, os escudos de uma imagem, aproximadamente, Marxista, por exemplo. De quem começou a perder o medo que havia por ter me dado uma contribuição enorme a uma criticidade do serviço social do Marxismo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Ato de conhecer'] ); 
		\App\Trecho::create([
			"verbete_id" => 36,
			"titulo_video" => "Aprendendo didática com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h7min57s a 00h8min55s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1887", 
			"texto" => "Só que para mim, quando me refiro ao ato de conhecer que o educando deve assumir também, eu estou exigindo desde o começo uma posição bastante lúcida, bastante crítica que vai se criando, se construindo na altura da prática educativa, de um lado no educador mesmo que inclusive  experimenta esta preocupação antes do próprio educando, pelo próprio fato que ele chegou ao mundo primeiro. Mas o educando também ele tem que assumir uma posição, criar, forjar uma posição em termos sistemáticos, crítica diante do objeto que ele pretende conhecer e que ele não conhece ele não apreende, se ele não apreende o objeto através da conceituação do objeto.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Autoridade'] ); 
		\App\Trecho::create([
			"verbete_id" => 37,
			"titulo_video" => "A Ética na Educação",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h33min07s a 00h33min50s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1920", 
			"texto" => "A autoridade que não se limita eticamente é a autoridade que vira autoritarismo que, portanto, já não é autoridade.  Como professor, eu não posso nem ser o veículo do desrespeito da autoridade e nem ser a expressão do desrespeito a liberdade. Quer dizer, como professor eu assumo uma autoridade que, respeitando a liberdade do educando, se respeita como autoridade, mas que assume uma tarefa reguladora, sem a qual não funciona nem a autoridade nem a liberdade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Autoridade (liberdade)'] ); 
		\App\Trecho::create([
			"verbete_id" => 38,
			"titulo_video" => "Conferência do professor Paulo Freire e entrega do título de cidadão uberabense",
			"tipo_recurso" => "vídeo", 
			"tempo" => "02h24min42s a 02h26min08s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1893", 
			"texto" => "O que faz a autoridade autoritária é o desrespeito profundo as liberdades dos educandos, por exemplo, as preferências dos educandos. Quer dizer, a autoridade não tem...até eu digo também não me lembro em que livrinho, eu digo que a autoridade é uma invenção da liberdade, quer dizer, a liberdade descobriu em certo momento que sem limites a liberdade fenece e aí inventou a autoridade. A autoridade tem a tarefa de limitar as liberdades, mas também a si mesma. Quer dizer, quando a autoridade fracassa nesse exercício de se limitar, quando não percebe que ao limitar a liberdade, ela necessariamente se limita, então a autoridade é autoritária. Mas o exercício da autoridade da professora, do professor não os faz necessariamente autoritários. Cabe a autoridade coordenar os trabalhos da escola senão é caos, senão é uma licenciosidade, isto tem a ver com a ética necessariamente. Os limites da autoridade são limites também éticos e são limites políticos.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Autoridade (sala de aula)'] ); 
		\App\Trecho::create([
			"verbete_id" => 39,
			"titulo_video" => "Paulo Freire on Critical Pedagogy",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h11min30s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1922", 
			"texto" => "Quem possui a autoridade necessária para ensinar, no espaço de autoridade de ensino, não é mais autoridade, pois foi transformado em presença autoritária. E com a mudança de autoridade para presença autoritária na sala de aula, os medos dos estudantes serão privados por serem exercitados. A curiosidade dos estudantes, por exemplo, é quebrada. Isso é um professor autoritário, nesse caso então, permita-me repetir, as diferenças se tornaram inconciliáveis. Na posição que defendo, a diferença continua a existir, mas constantemente sendo conciliada em um processo permanente. Desse modo, o professor se torna constantemente um aluno que é aluno de seus alunos e os alunos se tornam também professores, é uma constante contradição. A contradição continua a existir, mas não poder ser transformada em um tipo de contradição antagonista. É como é procuro, como opero como professor.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Autoritarismo'] ); 
		\App\Trecho::create([
			"verbete_id" => 40,
			"titulo_video" => "Escola Pública",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h11min32s a 00h12min42s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3220", 
			"texto" => "No Brasil, a autoridade tende de ter a tendência de ficar muito forte, musculosa como esses caras que vivem fazendo do corpo, e as liberdades têm que ficar franzininha, fraquinhas diante dessa autoridade grossa. No Brasil é horrível isso, a geração de vocês deve ter essa tarefa também de brigar contra isso. Pois olha, uma das coisas que a gente quer ver se a gente faz com vocês, com as professoras, com as diretoras, não se trata de ficar contra as professoras, mas contra a pedagogia destas professoras. Vejam bem, sem autoridade não dá também. A professora tem uma autoridade, e tem que exercer. A professorar tem o dever de estabelecer para os meninos, e as meninas, o que são as liberdades. A diretora, a professora, têm obrigação de estabelecer princípios, limites de disciplinas.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Autoritarismo (sala de aula)'] ); 
		\App\Trecho::create([
			"verbete_id" => 41,
			"titulo_video" => "Palestra de Paulo Freire no DESED (Banco do Brasil)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h21min12s a 00h23min20s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1891", 
			"texto" => "Finalmente a gente lida também na prática educativa com uma outra coisa que a gente chama estética, quer dizer, a prática educativa é bonita. Há uma boniteza na prática educativa que precisa ser vivida por nós. A boniteza faz parte do mundo, quer dizer, o projeto nosso de mundo, de vida, de sociedade, tem que ser um projeto estético, tem que ser um projeto bonito. Então, pensar a prática educativa envolve todos esses elementos de que eu falei a vocês e de que sobretudo ela é eminentemente política. Agora o fato de ser política não significa que ela deva ser necessariamente partidária. Quando, por exemplo, o professor não pretende esmagar a opção do educando, nem abertamente, nem sub-repticiamente, porque o professor também tem armas para massacrar o aluno de quem ele não gosta ou porque, de quem discorda, de forma sorrateira, eu acho que isso não é ético, eu acho que isso é um absurdo, isso revela o autoritarismo, portanto o equívoco de um professor progressista. Eu não entendo um professor progressista e que diminui, que esmaga, que ironiza o aluno porque discorda dele. Eu acho isso um absurdo. Então, sendo política a educação, a prática educativa exige da educadora e do educador uma postura ética suficiente para que o professor ou a professora respeitem o educando.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Avaliação (prática)'] ); 
		\App\Trecho::create([
			"verbete_id" => 42,
			"titulo_video" => "Entrevista de Paulo Freire concedida a Eitan Bronstein",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h17min51s a 00h20min20s (LADO A)", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3244", 
			"texto" => "Para mim, não há prática nenhuma sem a avaliação dela; isso não é possível. Então, a prática escolar, que é a prática do educador e do educando precisa ser avaliada então essa é a tese fundamental. Dar notas é uma expressão da avaliação apenas, é uma forma da avaliação, mas é uma forma coerente?  Eu diria depende. O que acho em primeiro lugar se você tirar o conceito de nota 4, 3, 2 e puser A, B ou C é a mesma coisa. O que não é possível para mim é deixar de atribuir alguma agradação. Para mim é fundamental é diminuir o arbítrio do professor, o poder do professor, mas não negar a necessidade de uma certa valoração com relação à prática do educando, porque se não tanto tem êxito o que fez quanto o que não fez. Quer dizer, não é justo que você tenha um estudante que no semestre produziu tanto quanto ele pode e que seja nivelado da mesma forma como o estudante que faltou seis aulas e que não produziu nada é injusto isso. Qual é a maneira justa que você tem de reprovar ou aprovar? Existe isso, tá entendendo. É preciso haver, em primeiro lugar, a avaliação da prática é indispensável e em segundo lugar o que precisa é democratizar a avaliação como prática. Você pode ter vários caminhos você pode ter uma democratização da avaliação em que você como professor discute com os educandos a melhor maneira ou as melhores maneiras as mais objetivas nunca demasiada fixa que pode, portanto, mudar. A melhor maneira  ou as melhores maneiras de você avaliar o trabalho seu e dos alunos.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Atividade científica'] ); 
		\App\Trecho::create([
			"verbete_id" => 43,
			"titulo_video" => "Encontro com o Professor Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h32min35s a 00h33min29s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1894", 
			"texto" => "Do objeto que me preocupa que é a atividade científica, para tomando distância dele e objetivá-lo, quer dizer, epistemologicamente eu tomo distância de um objeto quando eu objetivo o objeto, isto é, quando eu transformo o objeto na curiosidade epistemológica. Quando eu oriento minha mente, quando minha mente muda de qualidade diante do mundo, minha qualidade continua sendo minha mente, meu corpo inteligente, meu corpo crítico, meu corpo consciente, muda de posição diante do mundo. Quer dizer, assume uma coisa ou um estado.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Basismo'] ); 
		\App\Trecho::create([
			"verbete_id" => 44,
			"titulo_video" => "Seminário 'Reflexão sobre processo metodológico de alfabetização'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h30min58s a 00h31min21s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3308", 
			"texto" => "Tenho tanta raiva do autoritarismo quanto tenho da licenciosidade, da irresponsabilidade, desse chamado basismo que é uma das enfermidades dramáticas que a gente vive nesse país, não as bases, o basismo que é enfermo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Bom senso'] ); 
		\App\Trecho::create([
			"verbete_id" => 45,
			"titulo_video" => "Seminário 'Reflexão sobre processo metodológico de alfabetização'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h03min49s a 01h04min22s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3308", 
			"texto" => "Eu tô cansado de ver acadêmico com uma falta trágica de bom senso e sem bom senso não se faz política, sem bom senso não se ama, não se vai ao cinema nem ao teatro, sem bom senso se morre! Por exemplo, o basismo era uma extraordinária falta de bom senso. E sem bom senso não se alcança a rigorosidade indispensável pra mudar o mundo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Bolonha (universidade)'] ); 
		\App\Trecho::create([
			"verbete_id" => 46,
			"titulo_video" => "Entrevista de Paulo Freire à TV Itália",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h03min50s a 00h03min57s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1937", 
			"texto" => "A universidade de Bolonha não homenageou só a mim, mas homenageou o pensamento pedagógico deste país.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Brigar (pessimismo)'] ); 
		\App\Trecho::create([
			"verbete_id" => 47,
			"titulo_video" => "Diálogo com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h21min37s a 00h21min47s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3229", 
			"texto" => "É brigar contra a possibilidade do pessimismo, mas isso de forma crítica e não de forma ingênua.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Brigar (ser)'] ); 
		\App\Trecho::create([
			"verbete_id" => 48,
			"titulo_video" => "Diálogo com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h19min17s a 00h19min47s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3229", 
			"texto" => "Não há possibilidade de sermos, se nós homens e mulheres, se nós não continuarmos brigando para ser. Quer dizer, ninguém é se não briga para ser. Em outras palavras ninguém é gratuitamente, ninguém é sem fazer força. Ninguém é sem brigar.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Briga (vida)'] ); 
		\App\Trecho::create([
			"verbete_id" => 49,
			"titulo_video" => "Aula magna de Paulo Freire em Goioerê",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h38min54s a 00h39min18s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3230", 
			"texto" => "A grande briga que a gente tem é a briga no sentido de tornar a existência a altura da vida. Quer dizer, é pôr a existência à altura da vida, é isso que a gente tem que fazer e não manter a existência contra a vida como ela está se dando.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Cansaço existencial'] ); 
		\App\Trecho::create([
			"verbete_id" => 50,
			"titulo_video" => "Paulo Freire en la Argentina: Encuentro con Alfredo Mofatt",
			"tipo_recurso" => "???", 
			"tempo" => "00h33min09s a 00h33min19s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1941", 
			"texto" => "O cansaço existencial é o cansaço do mundo, é o cansaço da vida, é o começo do desespero.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Cidadania (conceito)'] ); 
		\App\Trecho::create([
			"verbete_id" => 51,
			"titulo_video" => "Paulo Freire: Educação e mudança",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h01min05s a 00h01min29s", 
			"endereco_video" => "http://acervo.paulofreire.org:80/xmlui/handle/7891/1931", 
			"texto" => "A cidadania é uma invenção política, quer dizer, é uma criação, uma produção política. A cidadania não resulta, simplesmente, do fato de você ter nascido num país e, então, tem cidadania desse país, isso pode ser do ponto de vista legal, mas do ponto de vista político a cidadania é criada ou não é criada, quer dizer, é produzida ou não produzida.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Ciência'] ); 
		\App\Trecho::create([
			"verbete_id" => 52,
			"titulo_video" => "Aula magna de Paulo Freire em Goioerê",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h34min53s a 00h35min34s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3230", 
			"texto" => "A ciência não é a priori da história. A ciência não existia antes da história e estava escondida em um certo bosque que um príncipe encantado, pai da ciência, tivesse depositado lá para depois a gente sair procurando de um em um o curioso qualquer descobrir. Poxa, encontrei a ciência! Não. A ciência não é uma priori da história, a ciência se constitui historicamente por nós, quer dizer, nós criamos a ciência e necessariamente criamos a tecnologia enquanto aplicação da própria ciência.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Ciência (incerteza)'] ); 
		\App\Trecho::create([
			"verbete_id" => 53,
			"titulo_video" => "A dimensão pedagógica da produção científica",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h37min58s a 01h39min13s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3232", 
			"texto" => "Eu acho que ciência é certo só que o certo científico para ser certo é preciso estar incerto da certeza. Quer dizer, quanto mais incerto eu fique da certeza, tanto mais eu estou certo, porque eu estarei certo na medida em que o certo não é imutável. Em outras palavras, para usar uma linguagem mais epistemológica, eu diria, eu estou certo na medida em que eu percebo um conhecimento em quanto histórico e por isso tem historicidade. O que vale dizer que, no momento que crio, o conhecimento tem historicidade eu reconheço que ele é hoje, mas não necessariamente amanhã. Quer dizer, a historicidade do conhecimento é que me dá uma incerteza que me faz certo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Círculo de cultura'] ); 
		\App\Trecho::create([
			"verbete_id" => 54,
			"titulo_video" => "Paulo Freire em aula na PUC-SP com o Grupo Banzo",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h16min15s a 00h20min33s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1904", 
			"texto" => "Vamos admitir que nós tivéssemos uma reunião hoje com um grupo de pais e estivéssemos discutindo um tema qualquer, então terminado aquela reunião, aquele debate durante meia hora antes de terminar a reunião a gente, então, discutia qual seria o conteúdo ou tema central da próxima reunião, o tema central. Então vamos admitir, e isso vinha deles dos pais, mas as professoras também tinham o direito de participar, porque eu defendia exatamente essa dialogicidade. Então vamos admitir que o tema sugerido fosse disciplina escolar etc. esse foi o tema escolhido pelos pais e pelas professoras. Então o que fazíamos, nós marcavamos com eles a próxima reunião que viria a ser, a hora e no dia seguinte no escritório eu escrevia um texto de três páginas. Eu tenho alguns dessa época que foram encontrados como sobreviventes das cheias e dos cupins que me engoliram 3500 livros da minha biblioteca original. Eu tenho hoje 1200 aqueles da sala encadernados, negros são os que escaparam [Paulo Freire falando da biblioteca dele, original, antes do exílio]. Então eu escrevia três, quatro páginas, textinho pequeno, sobre o tema. Segundo, eu escrevia um convite incluindo o tema e sugerindo duas ou três perguntas e dizia para ser mandados para os pais. E na cartinha para os pais eu sugeria que eles discutissem aquele tema com os compadres da vizinhança, com o companheiro da barraca, com os amigos que fazem compras na barraquinha que durante um mês que eles se preparassem ouvindo tanto quanto possível pessoas que não estão ligadas à associação deles de pais e professores, mas que mora na área e que tem filhos também. De tal maneira que quando viessem para sua reunião eles trouxessem não só a sua posição de pai e mãe, mas a opinião também de vizinhos com relação ao tema da disciplina. Então a intenção minha era ir alargando esse tema esse círculo de cultura, partindo da escola para uma área maior. Agora o outro texto que eu escrevia eu mimiografava e mandava para as professoras com antecedência marcando um seminário com elas sobre o tema. Quer dizer, vocês vejam o seguinte a gente preparava os dois polos da reunião. A gente sugeria que o polo família se preparasse e a gente dava a eles matérias. Quer dizer, vocês vejam que mais uma vez aí nessa prática minha não tem nada de espontanês na minha, tá lá o material oferecido. Eu só não podia era uma coisa era colocar vinte automóveis com vinte assistentes meus indo de casa em casa e carregando a gente para ir se preparando para a reunião, isso não dá, mas iam os materiais estimulantes para isso.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Círculo de pais e professoras'] ); 
		\App\Trecho::create([
			"verbete_id" => 55,
			"titulo_video" => "Paulo Freire em aula na PUC-SP com o Grupo Banzo",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h22min47s a 00h23min14s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1904", 
			"texto" => "Círculo de pais e professoras não é reunião para fazer queixa de criança. Quer dizer, a gente resolve esse problema aqui. De noite essa reunião é para debater a política educacional nossa, é para debater a melhoria do trato nosso e deles e o que a gente pode fazer junto de melhor, mas não fica fazendo queixa de Pedrinho nem de Maria, entende.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Classe Dominante'] ); 
		\App\Trecho::create([
			"verbete_id" => 56,
			"titulo_video" => "Paulo Freire conversa com americanos acompanhado por Myles Horton.",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h03min22s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1885", 
			"texto" => "Quando você me pergunta sobre a interação das classes opressoras, dominantes, primeiro de tudo, eles não se sentem opressores. As classes dominantes são as classes dominantes, eles não podem libertar eles mesmos, é muito fantástico para mim, eles não podem se libertar de serem opressivos. Isso porque oprimir é a principal razão de viver para eles. Se não houver mais opressão, não tem mais exploração, eles não irão mais se reconhecer.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 56,
			"titulo_video" => "Paulo Freire conversa com americanos acompanhado por Myles Horton.",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h05min39s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1885", 
			"texto" => "O que quero enfatizar é que é impossível a conversão da classe dominante como tal. Mas não significa, entretanto, que não podemos ter indivíduos pertencentes a classe dominante os quais fazem dele/dela ideia de conversão. Individualmente é possível, mas não com uma classe.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 56,
			"titulo_video" => "Compilado de falas de Paulo Freire enquanto Secretário de Educação",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h00min03s a 01h00min52s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3210", 
			"texto" => "Uma das preocupações de uma classe social dominante, de uma classe social dominante que domina uma nação que invade a outra, que caracteriza exatamente a invasão imperialista, colonialista. Uma das primeiras preocupações do colonizador é exatamente destruir e negar, dificultar a possibilidade de o colonizado se reconhecer como tal. Quer dizer, não como colonizado, mas se reconhecer como gente. Quer dizer, uma das preocupações da política do dominador é acabar, nunca consegue, mas sempre tenta, é acabar com a identidade cultural.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 56,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h05min15s a 00h06min40s (PROGRAMA 2)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "A política dominante pode variar um pouco em função da cor de quem chegou ao governo. Exemplo, indiscutivelmente, que a política dominante durante todo regime militar no Brasil não estava a favor e nem estava aí para atender as massas populares brasileiras. Era uma política dominante mesmo de grupo dominante, de classe dominante, mas exercitada de uma maneira rigidamente autoritária reacionaríssima. Se você hoje se pergunta em torno da política, do governo brasileiro hoje você tem que honestamente reconhecer que, na verdade, a política geral do governo é uma política de classe dominante, no fundo, é uma política de classe dominante. Você não pode comparar é a forma de comportamento, de orientação dessa política hoje e anterior, entende. Hoje você tem uma política de classe dominante de corte liberal, onde você tem uma certa ambiguidade, você encontra faixas do governo mais para direita, faixas do governo mais no centro, faixas do governo com um sonho pelo menos um pouco mais à esquerda do centro, entende. Ora, esse é um momento eu em que o espaço político cresce, você tem muito mais áreas, se eu pudesse usar uma expressão mais simbólica, você tem muito mais ruas, tem muito mais praças, muito mais campos para andar politicamente do que você tinha antes.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Classes populares'] ); 
		\App\Trecho::create([
			"verbete_id" => 57,
			"titulo_video" => "Paulo Freire: Educação e mudança",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h08min10s a 00h09min54s", 
			"endereco_video" => "http://acervo.paulofreire.org:80/xmlui/handle/7891/1931", 
			"texto" => "A barreira não é pedagógica, a barreira é ideológica, quer dizer, isto daí é uma das expressões da ideologia dominante, segundo a qual as classes populares são inferiores de nascimento, quer dizer, elas são incompetentes de nascença e isso é um absurdo, isso é ideologia mesmo, isso não é, isso não tem nada de científico, isso é profundamente ideológico.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 57,
			"titulo_video" => "Série Encontro: Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h37min32s a 00h37min59s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3294", 
			"texto" => "Não é que o intelectual de repente diga eu sou igual aos outros. Não, ele tem uma função diferente e uma função organizadora da cultura o Gramsci está absolutamente certo, mas o que não é possível é primeiro desconhecer que os grupos populares também são intelectuais, eles podem não ter tarefas intelectuais é nesse sentido entende que eu colocava o acompanheirar-se.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Classes populares (ciência)'] ); 
		\App\Trecho::create([
			"verbete_id" => 58,
			"titulo_video" => "Seminário 'Reflexão sobre processo metodológico de alfabetização'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h09min24s a 01h10min45s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3308", 
			"texto" => "Essa passagem do prático para o teórico sem a qual não é possível alfabetizar bem sem a qual não é possível superar os equívocos anteriores, os desconhecimentos anteriores isso é tarefa nossa. E é cumprindo essa tarefa que a gente tem que convidar os movimentos populares. Não cabe ao progressista dizer: eu não quero saber desse negócio de teoria de academia, porque isso não tem sentido. Essa posição só ajuda as classes dominantes. As classes sociais populares precisam da teoria, só precisam é exigir que essa teoria seja posta a serviço de seus reais interesses, isso sim. É preciso que essa teoria fique iluminada por uma política popular. Porque não de qualquer ciência que as classes populares precisam, de jeito nenhum, mas é de uma certa ciência que coincida com os seus interesses populares.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Classes populares (mobilização)'] ); 
		\App\Trecho::create([
			"verbete_id" => 59,
			"titulo_video" => "Conversatório com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h10min10s a 00h12min18s (PARTE 2)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3233", 
			"texto" => "As classes populares seguem sendo proibidas de ter acesso à cultura e ao saber. E o que acontece é que, pelo mesmo eixo de que falta acesso à cultura e saber, falta acesso também, não porque seja uma coisa de causa e efeito, porém falta também poder político. A classe trabalhadora em poucos anos se organizou em São Paulo, digo poucos anos, provavelmente dos anos 30 para cá, isto é, está faltando às grandes massas populares no Brasil, a mobilização de si mesmas, a organização de si com lideranças que lhe sejam líderes, e não lideranças autoritárias que se apropriem das rédeas para agredi-las. Quer dizer, está faltando, afinal, todo um movimento de organização e mobilização popular para chegar ao poder, mas não para chegar ou tomar o poder simplesmente, porque esse me parece que era um objetivo da modernidade, inclusive marxista.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Classe trabalhadora (identidade)'] ); 
		\App\Trecho::create([
			"verbete_id" => 60,
			"titulo_video" => "Paulo Freire conversa com americanos (vídeo 1)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h00min38s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3259", 
			"texto" => "Eu acho impossível, impossível não, mas que é absolutamente importante para a classe trabalhadora ter a sensação de identidade, para dominar um pouco a história do país, geografia e sua linguagem. Eles tem de dominar, mais ou menos bem, a sintaxe que os professores e políticos dominam, e a linguagem é um instrumento de dominação. Então eles tem que dominar a sintaxe, a linguagem dominante para poder lutar melhor.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Conceitos'] ); 
		\App\Trecho::create([
			"verbete_id" => 61,
			"titulo_video" => "Paulo Freire conversa com americanos (vídeo 2)",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h17min55s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3258", 
			"texto" => "Nós temos uma tendência de usar alguns conceitos sem entender seus significados. Nós incorporamos esses conceitos mecanicamente, apenas os memorizamos e um dia um pergunta ao outro o que você quer dizer com isso?  E então você diz o conceito ou que não sabe. É necessário ir além disso e ganhar distância disso, e isso é difícil pois nós somos educadores nesse espaço, temos que fazer um grande esforço para nos distanciar etimologicamente de nossa própria realidade para entender isso.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Concurso público'] ); 
		\App\Trecho::create([
			"verbete_id" => 62,
			"titulo_video" => "II Plenária Pedagógica com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h44min28s a 00h49min46s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3234", 
			"texto" => "Eu queria fazer uma consideração a propósito dessa questão do concurso. Em primeiro lugar, não cabe a nós da Secretaria de Educação organizar isso, isso é feito na Secretaria de Administração. Mas há uns dez dias atrás, numa reunião do secretariado, eu posso dizer isso aqui porque não é pecado, não é falta de ética da minha parte, mas, numa reunião do secretariado, quando se falou nessa questão de concurso, eu pedi a palavra para defender uma tese, que é da Secretaria de Educação, que ainda pode ser de outras também, eu creio e espero que seja de outras. E a tese era a seguinte nós precisamos fazer concurso, isso daí, inclusive é um imperativo constitucional, temos que fazer concurso, e é também um imperativo ético e é político. Concurso, apesar, de ser um meio ruim de você medir a capacidade de quem se candidata, é o que melhor defende os direitos das pessoas. Mas eu dizia: o que não é possível que numa administração popular, e não populista, faça com relação aos concursos, é propor provas para trabalhador preponderantemente manual. Quando eu digo preponderantemente manual, é porque todo trabalho implica a dialeticidade entre mão e cabeça, entre mão e emoção e razão, nós somos uma totalidade. É porque não possível é pedir a uma mulher que faz merenda, num concurso de habilitação para ser merendeira efetiva que ela separe sílabas (Aplausos). O que não é possível é pedir a um homem que limpa a escola, que é tão importante quanto nós, mas que tem uma tarefa específica, a de limpar a escola, o que não é possível é pedir a ele seu ponto de vista sobre Machado de Assis (Aplausos). Agora, para mim, o que é importante é que um dia ele estude também Machado de Assis. Isso é outra coisa. Fazer concurso pra ser um zelador da escola, um vigia da escola e discutir sobre Machado de Assis, ou Eça de Queiroz. E eu dizia, então, pelo menos a proposta nossa e a posição da secretaria é que a gente retarde inclusive os concursos, mas a gente não pode é submeter os nossos trabalhadores a uma humilhação como essa, eu acho isso uma humilhação. Não é possível, por exemplo, um concurso pra professora, na Secretaria de Educação, que não se vai fazer assim, eu nunca pude entender como uma professora faz concurso e o conteúdo sobre o qual o concurso quer girar, em lugar de ser conteúdo, é nome de autor. Como é que você pode compreender que a professora vai fazer um concurso sobre o pensamento do professor Saviani, do professor Gadotti e da professora Ana Maria Saul. Não! Concurso é sobre temas, é sobre a temática. O máximo que a secretaria faz é sugerir algumas leituras, mas que leiam quem quiser, quer dizer, então era isso que eu queria falar sobre esse problema do concurso público. Nós estamos lutando, agorinha contemplar umas companheiras nossas da Secretaria de Educação que estão aflitissímas, a minha assistente particular tá até querendo dar uma aula a elas, elas estão assustadas, elas fazem um café maravilhoso pra nós, mas vão aprender, não sabe o que diabos significa separar sílabas. Estão assustadas em perder o emprego delas. Essa coisa eu prometo a vocês, pode ser até que eu perca, essa guerra em imediato, pode ser até que eu perca e o fato de perder significa que eu peço demissão. Eu vou vir a ganhar essa guerra, concurso que não pode ser assim mais, numa administração como essa.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Conhecimento'] ); 
		\App\Trecho::create([
			"verbete_id" => 63,
			"titulo_video" => "II Plenária Pedagógica com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h07min59s a 01h10min23s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3234", 
			"texto" => "O ato de conhecer é um ato curioso, indagador, cheio de dúvidas, de crenças e descrenças, é um ato de risco, é um ato que envolve práticas, que envolve ação. Ou diretamente exercida ou pensada, ou um pensamento sobre uma ação já exercida. O ato de conhecer não pode ser o resultado de uma pura transferência do ato de ensinar o conteúdo, do perfil do conteúdo, para ser ele memorizado pelo educando. Porque, isso daí dava até um semestre todo. Intelectualmente, a professora que diz Poxa, mas é verdade, esse negócio parte desse sentido, você chega e diz Olha, o respeito que a escola deve ter pelo saber de experiência feito, como diria Camões, que a criança traz para escola. É um dever esse respeito. É a partir, exatamente, desse saber experiencial que a escola deveria ir criando e desenvolvendo, ampliando a curiosidade do aluno, que não foi percebida no processo em que ele criou o saber feito de experiência. O que a escola tem que fazer agora é, exatamente, proporcionar a consciência da curiosidade que antes nos trabalhos se chamava de experiência do senso comum, que não há. E é a partir, então, do conhecimento do senso comum que o menino traz, e só a partir daí que é possível dar o salto para um conhecimento do qual se tem uma consciência e o único que se faz uma opção. Intelectualmente eu acho que aqui tá meio difícil de entender porque tô falando muito depressa, assim se tivesse um quadro negro pra ajudar, mas intelectualmente é possível, como é possível entender que a escola tem que respeitar a identidade cultural do menino, do aluno, da aluna, que é uma identidade de classe social, é preciso compreender isso, respeitar isso, intelectualmente também, entende-se.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Compreensão ética e política'] ); 
		\App\Trecho::create([
			"verbete_id" => 64,
			"titulo_video" => "Paulo Freire: o revolucionário educador (Programa 1 e 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h04min21s a 00h04min37s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1946", 
			"texto" => "Eu não tenho dúvida nenhuma de que eu não posso ser entendido fora de uma compreensão da ética em mim e da política. Eu acho que nenhum educador, nenhum pensador da educação, está afastado disso.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Comunicação'] ); 
		\App\Trecho::create([
			"verbete_id" => 65,
			"titulo_video" => "A Ética na Educação",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h25min43s a 00h26min17s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1920", 
			"texto" => "A comunicação implica uma certa compreensão do mundo, a comunicação implica a produção de uma nova compreensão do mundo. Quer dizer, não há uma comunicação que exista sem uma inteligência do mundo e toda inteligência do mundo gera, necessariamente, a possibilidade da comunicação sobre a inteligência do mundo. A inteligência não é ainda comunicabilidade, mas ela gera a comunicabilidade sobre a inteligência do mundo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Comunicabilidade'] ); 
		\App\Trecho::create([
			"verbete_id" => 66,
			"titulo_video" => "Aula inaugural do Mestrado em Educação da Universidade de Juiz de Fora realizada por Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h03min25s a 01h04min38s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1911", 
			"texto" => "Uma das coisas mais bonitas que mulheres e homens inventamos ao longo da nossa presença no mundo foi e é a seguinte nós nos tornamos capazes de inteligir o mundo, quer dizer, nos tornamos capazes de apreender uma certa compreensão do mundo, que eu chamo de leitura do mundo. Mas segundo no mesmo momento em que nos tornamos capazes de inteligir o mundo, descobrimos que não era possível inteligir o mundo sem fazer a comunicabilidade do percebido. Então, não é possível compreender sem comunicar o compreendido. A inteligência do mundo está casada visceralmente casada  com a comunicabilidade do inteligível, isso é pesquisa e docência.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Conflito'] ); 
		\App\Trecho::create([
			"verbete_id" => 67,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h15min22s a 00h15min58s (PROGRAMA 5)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "Em primeiro lugar, não há vida sem conflito, entende. Não há vida sem diferenças. Isso faz parte da dinâmica mesma da existência humana. Em segundo lugar, a melhor maneira que você tem de conhecer você mesma, suas potencialidades, seus limites é engajar-se em lugar de fugir, é confrontar o conflito a situação conflitiva em que de repente você se acha, vê bem isso até nível individual. Agora, em nível social, é isso também.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 67,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h18min18s a 00h18min50s (PROGRAMA 5)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "[Paulo Freire]: Na verdade, o conflito parteja, é a parteira mesmo da consciência. O conflito ilumina, o conflito te muda, te reeduca, te educa, inclusive, você tem que aprender a enfrentar o conflito para também não se machucar muito, entende.[Entrevistadora]: Mostra caminhos que às vezes nem se via.[Paulo Freire]: Mostra caminhos e te ensina sobretudo uma coisa que, eu acho fundamental que é a noção dos limites da ação.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Conselho Escolar'] ); 
		\App\Trecho::create([
			"verbete_id" => 68,
			"titulo_video" => "Escola Cidadã",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h10min28s a 00h10min47s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1906", 
			"texto" => "O conselho de escola é um dos momentos, é um dos meios de que a gente pode se servir, se é que eu posso usar esse verbo nessa luta pela democratização da escola e pela democratização do ensino no Brasil.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Conhecimento'] ); 
		\App\Trecho::create([
			"verbete_id" => 69,
			"titulo_video" => "Educación y participación comunitária",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h36min56s a 00h37min10s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3211", 
			"texto" => "Conhecimento, por isso mesmo, não se come, não se engole. Conhecimento se produz, se cria, se inventa na práxis.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Conhecimento (acadêmico)'] ); 
		\App\Trecho::create([
			"verbete_id" => 70,
			"titulo_video" => "Paulo Freire e a Educação Matemática",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h14min30 a 00h15mim33s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1880", 
			"texto" => "Uma das coisas que a escola teria que fazer e eu venho insistindo nisso há 30 anos ou mais de 30 anos e foi muito mal entendido hoje continua ser, mas foi no começo muito menos entendido quando eu insistia por exemplo que o ponto de partida da prática educativa tem de ser não a compreensão do mundo que tem o educador e seu sistema de conhecimento, mas a compreensão do mundo que tenha ou que esteja tendo o educando. Quer dizer, a gente parte do que o educando sabe, para que o educando possa saber melhor, e saber mais e saber o que ainda não sabe. Então eu acho que está nesse desrespeito que é um desrespeito elitista está na superação desse desrespeito está no aprofundamento de uma postura democrática.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Conhecimento (produção)'] ); 
		\App\Trecho::create([
			"verbete_id" => 71,
			"titulo_video" => "Conferência do professor Paulo Freire e entrega do título de cidadão uberabense",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h48min00s a 01h48min31s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1893", 
			"texto" => "Ensinar e aprender são momentos de um processo maior, que é o processo da produção do conhecimento, ora do conhecimento que já existe, ora do conhecimento que ainda não existe que será produzido e uma das tarefas da escola é preparar os educandos para participarem do processo de produção do conhecimento que ainda não existe.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Conhecimento (universal)'] ); 
		\App\Trecho::create([
			"verbete_id" => 72,
			"titulo_video" => "Encontro com o Professor Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h08min00s a 01h08min38s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1894", 
			"texto" => "O ponto de partida do conhecimento rigoroso de algo é a compreensão ingênua desse conhecimento que o estudante traz para a escola. O que a escola tem que fazer é trazer ao conhecimento elaborado na localidade e a dimensão universal dele, esse que é o trabalho da escola. Agora o que a escola não pode é partir da dimensão universal, porque é incompreensível para qualquer um de nós.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Conscientização'] ); 
		\App\Trecho::create([
			"verbete_id" => 73,
			"titulo_video" => "Reading the World",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h11min31s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3298", 
			"texto" => "Conscientização é algo que vai além da prise de conscience. É algo o qual começa pela habilidade de pegar a prise de conscience. É algo o qual implica para analisar. É como ler o mundo rigorosamente, ou quase rigorosamente. É o modo como a sociedade funciona. É a maneira de entender como conseguir poderes, o que significa não ter poderes. Finalmente, conscientizar exige uma leitura profunda da realidade, em outras palavras, conscientização exige que nós comecemos a estabelecer relações entre fatos.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Conscientização'] ); 
		\App\Trecho::create([
			"verbete_id" => 74,
			"titulo_video" => "Arquivo N  Paulo Freire, o Educador",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h09min54s a 00h10min55s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1888", 
			"texto" => "Ninguém se conscientiza porque foi a escola, entende? Quer dizer, o processo de conscientização, palavra que, aliás, não uso desde 74, porque foi tão gasta que eu preferi deixar de usar. A conscientização se dá é na prática política, se dá na prática existencial, na prática social de que nós todos participamos. Quer dizer, na medida em que o sofrimento, por exemplo, traz as massas populares a certas situações conflitivas para satisfazer as suas demandas imediatas de sobrevivência, essas situações são conscientizantes muito mais do que um discurso, muito mais do que um seminário. Quer dizer, você se conscientiza na história, engajado num processo histórico a conscientização, no fundo implica uma leitura e releitura mais crítica da realidade em que você está.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Consciência'] ); 
		\App\Trecho::create([
			"verbete_id" => 75,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h20min26s 00h20min43s (PROGRAMA 5)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "A consciência do limite da sua ação nasce na medida em que você procura compreender o equilíbrio de forças. Não há política sem isso. Isso é uma questão de poder.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Consciência (corpo)'] ); 
		\App\Trecho::create([
			"verbete_id" => 76,
			"titulo_video" => "Corpo e dança dos povos",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h10min12s a 00h10min48s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3208", 
			"texto" => "A minha consciência não está aqui no coração, nem na cabeça, nem no pulmão, minha consciência sou eu mesmo, é meu corpo que é consciente, é meu corpo que apreende o outro corpo que se constitui, porque apreende o outro. Quer dizer, é socialmente que a gente se constitui. De modo geral, o chamado primeiro mundo em certo sentido, tem uma espécie assim de remorso do corpo ele tem uma vergonha do corpo e isso tem muito a ver, inclusive, com as igrejas.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Coragem'] ); 
		\App\Trecho::create([
			"verbete_id" => 77,
			"titulo_video" => "A Ética na Educação",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h30min24s a 00h30min47s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1920", 
			"texto" => "A coragem não é uma categoria que está lá na esquina esperando por nós para ir buscá-la. Aonde você vai, Paulo? Vou ali buscar um pouco de coragem. Não! A coragem depende da maneira como eu trato, como eu lido com o meu medo que, por sua vez, é absolutamente indispensável à minha sobrevivência.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Corpo'] ); 
		\App\Trecho::create([
			"verbete_id" => 78,
			"titulo_video" => "Conversatório com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h26min03s a 00h27min17s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3233", 
			"texto" => "A educação sexual tem a ver com a associação conosco e nosso corpo. E isso provavelmente é exatamente a compreensão da sexualidade a qual me dá mais possibilidade de assumir meu corpo. Não é, por exemplo, a filosofia em si, não é o estudo da geografia, ainda que seja muito importante para localizar o corpo no espaço, não é a história onde tu localizas o corpo no tempo. Para mim, a associação do corpo e da importância do corpo, da boniteza do corpo, do cuidado que devemos ter com o corpo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Corpo (cultura)'] ); 
		\App\Trecho::create([
			"verbete_id" => 79,
			"titulo_video" => "Corpo e dança dos povos",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h11min00s a 00h11min15s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3208", 
			"texto" => "A dicotomia entre corpo e alma que considera que o corpo é a sede do pecado e a alma é a sede da virtude, então tudo que você fizer...[Entrevistadora]: Não que a alma esteja no corpo.[Paulo Freire]: Exato, extragantes por causa do corpo. Uma das contribuições que a gente pode dar e a África mais do que nós, é exatamente o valor do corpo na cultura.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Corpo (compreensão)'] ); 
		\App\Trecho::create([
			"verbete_id" => 80,
			"titulo_video" => "Conversando com Paulo Freire sobre Arte e Educação aos 21 anos da Pedagogia do Oprimido",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h51min45s a 00h52min39s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1882", 
			"texto" => "O que se vem comprovando é que, de modo geral, os adolescentes se comprometeram com a busca da compreensão de seu corpo. Os adolescentes que começaram a desinibir com relação a seu corpo, a não ter, primeiro, vergonha dele, a não ter medo dele, a afastar do corpo essa aderência do pecado, podendo voar um pouco com sua fantasia, a não ter medo de perguntar, de inquerir, indagar os temas geradores fundamentais da experiência da sexualidade. Foram masturbação, aborto, relações sexuais, fazer amor ou não amor, castidade ou não castidade esses são os temas geradores postos, não pelos professores, mas pelo os adolescentes.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Corpo e educação sexual'] ); 
		\App\Trecho::create([
			"verbete_id" => 81,
			"titulo_video" => "Conversatório com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h28min04s 00h28min40s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3233", 
			"texto" => "Não tenho o direito de dizer: O corpo é meu, eu que estrago, ponho-me a estragar. Não posso, porque se eu estragar o meu corpo, significa que um corpo entre milhões de outros corpos foi desrespeitado. Então, eu acredito que a educação sexual é exatamente se centrar na compreensão crítico afetiva do corpo. Eu não tenho porque ter vergonha do meu corpo, meu corpo sou eu, eu sou esse corpo!.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Corporeidade (consciência)'] ); 
		\App\Trecho::create([
			"verbete_id" => 82,
			"titulo_video" => "Corpo e dança dos povos",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h09min26s a 00h09min44s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3208", 
			"texto" => "A corporeidade implica a consciência dela mesma que vem através da consciência do mundo. Quer dizer, não é a consciência de mim que cria a minha consciência do mundo, mas é a consciência do mundo que me faz ter consciência de mim.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Cultura'] ); 
		\App\Trecho::create([
			"verbete_id" => 83,
			"titulo_video" => "Paulo Freire in action",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h07min40s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3223", 
			"texto" => "Cultura é tudo o que nós fazemos no mundo, com o mundo, sobre ele, em torno dele, através do nosso trabalho.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 83,
			"titulo_video" => "Paulo Freire in action",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h08min30s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3223", 
			"texto" => "Se nós discutirmos com as classes populares o conceito de cultura nós poderemos mostrar evidentemente que se é possível a nós, enquanto homens e mulheres, transformar o mundo que não fizemos, porque então não é possível mudar o mundo que fazemos, que é o mundo da cultura e o mundo da história?", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 83,
			"titulo_video" => "Seminário 'Reflexão sobre processo metodológico de alfabetização'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h30min12s a 01h31min21s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3308", 
			"texto" => "Era preciso chamar a atenção dos alfabetizadores de todo país para o seguinte fato: Como os grupos percebiam o que era cultura e descobrir que no fundo a cultura é produzida através do trabalho do ser humano, transformando o mundo que o ser humano não fez, quer dizer, é mudando o mundo que se faz a cultura em diferentes níveis. No momento que o camponês, o operário do campo descobriu que mudando o mundo que não fizeram produziram a cultura e podem mudar a cultura, porque não é possível então, a eles, mudar a história, mudar a sociedade, mudar a política que são coisas que eles fazem, quer dizer, que o ser humano faz.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 83,
			"titulo_video" => "Paulo Freire em aula na PUC com o Grupo Banzo  Experiências com grupos indígenas",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h05min28s a 00h05min44s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1943", 
			"texto" => "Uma coisa para terminar, que a gente constata é a de que nessas culturas é fundamental o consenso.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Cultura (alfabetização)'] ); 
		\App\Trecho::create([
			"verbete_id" => 84,
			"titulo_video" => "Seminário 'Reflexão sobre processo metodológico de alfabetização'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h55min08s a 00h59min10s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3308", 
			"texto" => "Quando a gente descobre a implicação da cultura na alfabetização depois de ter feito sentido a coisa óbvia de que ela não é neutra, é política então a gente é levada, necessariamente, a questão da memória, quer dizer, tanto é que eu sei, como é que eu guardo o que eu sei. Uma cultura de memória preponderantemente oral como é a nossa significa que ela tem pouca experiência da leitura da palavra, quer dizer, ela tem uma experiência riquíssima da leitura do mundo a um certo nível desta leitura e que necessariamente nessas culturas de memória oral o que está acontecendo é que na elite do poder econômico, cultural e político essa elite domina a leitura da palavra e essa elite, você pode concluir isso quando você chega a uma cultura e percebe que ela tem uma memória oral você pode saber que essa sociedade está num estágio de briga em que uma elite pequena, classe dominante mínima comanda a leitura da palavra e distancie cada vez mais as classes populares da possibilidade de adquirir a possibilidade de ler a palavra. Aí cabe as massas populares exercitar a capacidade de memorizar e de contar as histórias que se dão através da oralidade apenas. Romper com isso não é fácil porque uma cultura de memória oral não passa automaticamente não muda sua memória por decreto, porque a memória tem haver também com a infraestrutura da sociedade, quer dizer, com as condições materiais de vida da sociedade, com a produção e com o desenvolvimento produtivo da sociedade, então isso não se faz por decreto.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Cultural (conhecimento)'] ); 
		\App\Trecho::create([
			"verbete_id" => 85,
			"titulo_video" => "Seminário 'Reflexão sobre processo metodológico de alfabetização'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h52min05s a 00h54min25s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3308", 
			"texto" => "O que é que eu quero dizer com a oralidade de uma cultura, eu quero me referir exatamente a duas coisas centrais que tem a ver com a teoria do conhecimento, quer dizer, com esse conjunto de princípios científicos que explicam como a gente conhece social e individualmente. De um lado, a constatação a necessidade de pesquisar ou de perguntar pelo menos essa cultura na qual eu me acho é marcadamente oral ou não? Essa pergunta tem a ver com o conhecimento que precisamos ganhar com relação a como os alfabetizandos com quem trabalharemos conhecem e em que nível conhecem e em que nível guardam o conhecimento adquirido. Portanto, isso tem que ver, de um lado, com o uso da curiosidade diante do mundo, isso que eu chamo leitura do mundo, quer dizer, é preciso que a gente inclusive perceba que quando eu falei \"a leitura do mundo precede a leitura da palavra\", não é simplesmente uma frase bonita, mas ela tem uma profundidade de natureza político-ideológica científica, e epistemológica por causa da qual eu procurei dar quando cunhei a expressão.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Curiosidade'] ); 
		\App\Trecho::create([
			"verbete_id" => 86,
			"titulo_video" => "Encontro com o Professor Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h33min46s a 00h35min38s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1894", 
			"texto" => "A curiosidade entendida pelo senso comum participa no mínimo da curiosidade epistemológica que é que nos interessa aqui. Mas minha mente muda de qualidade e cai na perspectiva epistemológica, quando na verdade ela agora opera com cientificidade. Quer dizer, quando ela agora apura a sua curiosidade. O que é que eu quero dizer com apura? Eu quero dizer quando ela instrumenta, quando ela aperfeiçoa, quando ela oferece condições a sua própria curiosidade, a ela mesma, quando ela toda vira uma curiosidade, a mente. Quer dizer, quando a mente não se satisfaz com a pura explicação periférica em torno do problema, quando a mente vai mais além do terço que é, quando a mente agarra pelo gogó, pelo colarinho. O objeto balança para cá para lá delimita o objeto, enquadra o objeto, indaga sobre ele e buscam as finalidades, as causalidades do objeto, a relação entre ele e outro objeto, porque a mente epistemológica descobre, na sua prática de que afinal ela não conhece o objeto, mas ela conhece as relações entre os objetos, os objetos em relação. Quer dizer, essa curiosidade é exatamente a qualidade sem a qual a ciência não se fez ou não se faria, e sem a qual a ciência não continuaria.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 86,
			"titulo_video" => "Aula de encerramento com Paulo Freire e Moacir Gadotti na FE-USP",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h35min28s a 00h36min26s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1935", 
			"texto" => "A curiosidade está associada também ao espanto, está associada ao estranho que nos desafia, ao não comum. Desperta então em nós o desejo e, às vezes, a necessidade que qualificar a estranheza. Quer dizer, sem a curiosidade não haveria ciência, não haveria conhecimento no sentido científico e dificilmente haveria o próprio senso comum. Quer dizer, a curiosidade é pra mim [...]a fonte fundamental do conhecimento.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 86,
			"titulo_video" => "Reading the World",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h01min03s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3298", 
			"texto" => "[Música de fundo] Para mim, ser curioso quando eu era uma criança foi um estado permanente da mente. Política, cultura, temos o dever de entender um mais ou menos para poder sobreviver em sociedade e, acima de tudo, para poder mudar a sociedade. Conscientização implica que nós comecemos a estabelecer relações entre fatos. Nós os ensinamos a como ler textos, mas nunca ensinamos como ler contextos. É impossível, como sempre digo, ler as palavras sem ler o mundo.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 86,
			"titulo_video" => "Palestra de Paulo Freire no Banco Central",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h31min51s a 00h32min04s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3219", 
			"texto" => "\"A curiosidade é indiscutivelmente um dos fundamentais motores da produção do conhecimento e da produção da comunicação, da sensibilidade\".", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Curiosidade (científica)'] ); 
		\App\Trecho::create([
			"verbete_id" => 87,
			"titulo_video" => "Encontro com o Professor Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h37min25s a 00h38min32s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1894", 
			"texto" => "O homem ou a mulher que opera ao nível do senso comum, se eu posso dizer de uma forma grosseira, eu diria que opera a curiosidade de forma \"grossa\", ainda não tratada (...), a curiosidade não está desperta. Segundo, a curiosidade em si se sinta nutrida antes do tempo (...), satisfeita antes do tempo. A curiosidade do cientista jamais se satisfaz, porque inclusive a curiosidade no cientista sabe que ela não tem ponto de chegada.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Curiosidade (cientista)'] ); 
		\App\Trecho::create([
			"verbete_id" => 88,
			"titulo_video" => "Aula inaugural do Mestrado em Educação da Universidade de Juiz de Fora realizada por Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h56min06s a 00h56min46s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1911", 
			"texto" => "A curiosidade pode ser educada no sentido de se transformar em uma curiosidade metodicamente rigorosa, essa é a curiosidade do cientista. Quer dizer, ele disciplina a sua curiosidade enquanto momento de observação, enquanto momento de comparação, enquanto momento de prova, de teste, ele examina o objeto da sua curiosidade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Curiosidade (criança)'] ); 
		\App\Trecho::create([
			"verbete_id" => 89,
			"titulo_video" => "Conferência do professor Paulo Freire e entrega do título de cidadão uberabense",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h49min08s a 01h50min17s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1893", 
			"texto" => "A curiosidade do educando sem a qual não haverá conhecimento, não haverá aprendizagem. A curiosidade do educando, da criança, ela começa a se experimentar antes mesmo que a criança nasça no útero materno a criança já estabelece relações com mundo de fora, e no mundo de fora, a criança tem uma fase primeira de conhecimento e produção do conhecimento que ela faz com as mãos através do toque nas coisas e na curiosidade que ela já tem no olhar, que vai crescendo cuja amplitude da curiosidade vai de um lado satisfazer o ser, ao bebê, e do outro vai crescendo o crescimento do bebê.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 89,
			"titulo_video" => "Paulo Freire: o revolucionário educador (Programa 1 e 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h02min03s a 00h03min05s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1946", 
			"texto" => "Tem uma origem muito remota, quer dizer, eu não tenho dúvida nenhuma de que a minha relação com os meus pais, o testemunho de meus pais a exemplaridade com que eles foram educadores de mim e dos outros filhos, irmãos meus, isso me marcou enormemente. E, do ponto de vista da tarefa de ensinar, é algo também que na infância aparecia, como no mínimo, uma boa curiosidade diante do mundo. Eu fui, as crianças de modo geral são curiosas, mas eu tive uma especial curiosidade em saber coisas, em querer aprender. Eu acho que aí está uma remota razão.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Curiosidade (educando)'] ); 
		\App\Trecho::create([
			"verbete_id" => 90,
			"titulo_video" => "Conferência do professor Paulo Freire e entrega do título de cidadão uberabense",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h52min21s a 01h53min04s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1893", 
			"texto" => "O ideal é que a gente conseguisse manter esse segundo momento da curiosidade do educando, que a gente conseguisse conciliar a curiosidade crescente do educando com a liberdade de ser curiosa. Que a gente pudesse estimular a curiosidade livre do educando para dirigir-se ao mundo e saber o mundo. Se a gente pudesse conciliar essa curiosidade com a liberdade maior de exercê-la.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Curiosidade (epistemológica)'] ); 
		\App\Trecho::create([
			"verbete_id" => 91,
			"titulo_video" => "Aula de encerramento com Paulo Freire e Moacir Gadotti na FE-USP",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h42min22s a 00h43min05s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1935", 
			"texto" => "Um dos cabais da escola e da pedagogia é como o educando trabalha a curiosidade epistemológica e não fazer a transferência dos conteúdos, isso que é a grande diferença. Um grande desafio da escola é o de ensinar os conteúdos um procedimento epistemológico correto, criando a curiosidade epistemológica sem a qual o conhecimento não é feito, nem produzido, nem concedido.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Curiosidade (rigor)'] ); 
		\App\Trecho::create([
			"verbete_id" => 92,
			"titulo_video" => "Encontro com o Professor Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h48min19s a 00h49min08s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1894", 
			"texto" => "Quanto mais à curiosidade se faz crítica, tanto mais aprofunda a leitura do mundo que já era feita antes da mente ficar ou virar epistemológica. Porque há uma leitura do mundo que se faz ao nível da ingenuidade mental, quer dizer, ingenuidade da consciência, na medida em que você agora criticiza a capacidade indagadora da consciência. O que é que vai acontecer? Vai acontecer uma releitura da leitura anterior, que é o rigor. Quer dizer a releitura da leitura anterior se faz a base da aprendizagem da rigorosidade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Curiosidade epistemológica'] ); 
		\App\Trecho::create([
			"verbete_id" => 93,
			"titulo_video" => "Paulo Freire en la Argentina: Encuentro con Alfredo Mofatt",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h34min32s a 01h35min01", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1941", 
			"texto" => "Esta curiosidade epistemológica me move a trabalhar o objeto de minha curiosidade tomando uma certa distância do objeto para poder me aproximar melhor do objeto e conhecê-lo, desvelá-lo, despi-lo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Democracia (Brasil)'] ); 
		\App\Trecho::create([
			"verbete_id" => 94,
			"titulo_video" => "Conversando com Paulo Freire sobre Arte e Educação aos 21 anos da Pedagogia do Oprimido",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h29min22s a 00h30min11s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1882", 
			"texto" => "Eu acho que uma das coisas que a gente tem que discutir com os educadores, e não impor a eles, porque seria uma forma contraditória demais, antagônica, é você fazer democracia no porrete. Quer dizer, não é possível fazer democracia batendo nas pessoas que preferem não ser democráticas, quer dizer, não pode. Você tem que convencer. No fundo, fazer esse trabalho pedagógico democrático no Brasil implica uma certa fascinação, entende? Quer dizer, ou você é capaz de fascinar também, nem tanto você mesmo, mas o sonho que você traz.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Democracia (liberdade)'] ); 
		\App\Trecho::create([
			"verbete_id" => 95,
			"titulo_video" => "Conversando sobre Educação e Liberdade com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "15min58s 16min17s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3216", 
			"texto" => "A questão que se coloca a nós para experimentar autenticamente a democracia não é acabar com a autoridade de um lado ou liquidar a liberdade do outro, mas é experimentar a tensão entre ambas, é viver a tensão entre ambas.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Desvelamento (sociedade)'] ); 
		\App\Trecho::create([
			"verbete_id" => 96,
			"titulo_video" => "Paulo Freire conversa com americanos (vídeo 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h02min18s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3258", 
			"texto" => "Claro que na América Latina as contradições são muito mais visíveis, você quase pode tocar essas contradições sociais. Em sociedades como a sua, muitas coisas estão escondidas, mas elas existem. Essa é a questão, elas existem e estão escondidas, e estão escondidas por existir. Então...[incompreensível] Alguns tem poder e condições materiais e tecnológicas para esconder muitos aspectos da vida em sociedade, e na América Latina isso não tem sido possível ainda. Apenas em cidades como São Paulo algumas coisas podem ser escondidas, mas as contradições são tão visíveis que você as vê nas ruas, as contradições falam com você, a miséria, por exemplo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Dever da alfabetizadora/alfabetizador'] ); 
		\App\Trecho::create([
			"verbete_id" => 97,
			"titulo_video" => "Paulo Freire: Educação e mudança",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h01min38s a 00h02m23s", 
			"endereco_video" => "http://acervo.paulofreire.org:80/xmlui/handle/7891/1931", 
			"texto" => "O alfabetizador ou a alfabetizadora precisa saber que seu grande dever não é o de fazer memorizar por parte de quem não sabe ler as técnicas da leitura e da escrita, pelo contrário, ao ensinar a leitura da palavra, a escrita da palavra, a alfabetizadora tem esse dever político que é aquilo, não poderia e não deveria fugir, que é o de trabalhar no sentido de produção da cidadania por parte daqueles que estão faltosos dos direitos e dos deveres da cidadania.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Direito à participação'] ); 
		\App\Trecho::create([
			"verbete_id" => 98,
			"titulo_video" => "Conversatório com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h17min27s a 00h18min18s (PARETE 3)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3233", 
			"texto" => "Como fazendo educação, em uma perspectiva crítica, progressista, nos obrigamos por coerência a enredar, a estimular, a favorecer na própria prática educativa o exercício do direito à participação por parte de quem esteja direta ou indiretamente ligado ao fazer educativo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Discurso (neoliberal)'] ); 
		\App\Trecho::create([
			"verbete_id" => 99,
			"titulo_video" => "Aula inaugural do Mestrado em Educação da Universidade de Juiz de Fora realizada por Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h15min22s 01h15min40s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1911", 
			"texto" => "A falta de perspectiva utópica do discurso neoliberal, a falta de sonho, a morte dos sonhos do discurso neoliberal, reduziu a prática educativa a um puro treinamento pragmático.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Discriminação'] ); 
		\App\Trecho::create([
			"verbete_id" => 100,
			"titulo_video" => "O menino popular e a educação",
			"tipo_recurso" => "vídeo", 
			"tempo" => "02hh24min17s a 02h25min39s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/864", 
			"texto" => "O que é discriminar? Discriminar é menosprezar, minimizar, esta competência linguística, essa forma de falar e considerar que tudo que a criança popular diz é corruptela, vejam bem que palavra horrível. Corruptela. Da fala, legítima, correta, que é do padrão chamado culto. E quem disse que esse é culto? Quem disse isso? Quem definiu a nossa fala com um padrão culto? É quem tem poder. E se há um padrão chamado culto é porque há um diferente desse que é o inculto. E o inculto não é do meu neto não, é do povão aí. A imprensa já disse que, no tempo de Paulo Freire, professora nenhuma vai corrigir mais ninguém. Eu nunca disse isso.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (discurso)'] ); 
		\App\Trecho::create([
			"verbete_id" => 101,
			"titulo_video" => "Conversando com Paulo Freire sobre Arte e Educação aos 21 anos da Pedagogia do Oprimido",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h28min09s a 00h29min06s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1882", 
			"texto" => "Fazemos um discurso em favor da maior abertura da escola, da democratização da escola, da superação do elitismo, do autoritarismo da escola. Portanto, fazemos um discurso tido como teórico em favor da maior abertura da escola, mas, na prática, nós continuamos autoritários. Então, o que acontece é o seguinte há uma inconsistência entre o que dizemos e o que fazemos e é o que fazemos, e não o que dizemos, que testemunha, que fala de nós. Porque, o que fala de mim, não é o discurso que faço sobre coisas, mas a coisa que eu faço através da minha ação, da minha prática. O que faço é o que fala de mim, não o que eu falo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Discurso (popular)'] ); 
		\App\Trecho::create([
			"verbete_id" => 102,
			"titulo_video" => "Seminário 'Reflexão sobre processo metodológico de alfabetização'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h19min30s a 01h23min41s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3308", 
			"texto" => "Um outro ponto que eu consideraria importante também é o da relação entre linguagem, pensamento e mundo, na composição do discurso popular ou erudita. Por isso, mesmo que a pesquisa se impunha através do universo popular, por isso mesmo se impunha o trabalho como eu chamei de codificações. Isso significa que a tese que eu defendia não era a tese de uma alfabetização que primeiro partisse da letra a um assunto, segundo que partisse da sílaba a continuidade do mesmo assunto, terceiro que partisse da palavra-chave mais delicada do mesmo assunto. O que eu propunha era uma alfabetização a partir da leitura da descodificação de uma codificação. Tenho discurso o discurso se insere a palavra geradora() O ponto de partida aproveitando-se o universo vocabular e o uso da codificação, o ponto de partida é exatamente o exercício da oralidade na cultura oral ou preponderantemente oral. O discurso não é nem a frase só, mas é o discurso inteiro do alfabetizando pelo qual se sublinhará a palavra que é geradora.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Discurso (utópico)'] ); 
		\App\Trecho::create([
			"verbete_id" => 103,
			"titulo_video" => "Paulo Freire: educação, autonomia e as drogas",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h22min01s a 00h22min49s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1934", 
			"texto" => "Esse discurso é um discurso de esperança, esse discurso é um discurso utópico, não no sentido de que fala de algo que não pode ser feito, mas pelo contrário é utópico porque é anunciador, porque é denunciador, eu denuncio e anuncio que é possível ganhar a guerra contra o vício que toma conta de mim, mas não é possível só através do discurso, mas através de uma prática da vontade, que não prescinde da raiva contra aquilo que tira a minha vontade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Ditadura Militar'] ); 
		\App\Trecho::create([
			"verbete_id" => 104,
			"titulo_video" => "Paulo Freire entrevistado no programa 'Matéria Prima' da TV Cultura",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h14min13s a 00h15min52s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3218", 
			"texto" => "A ditadura considerou, a ditadura militar de 64, não só considerou como disse por escrito, publicou que eu era um perigoso, subversivo internacional, um inimigo do povo brasileiro e um inimigo de deus, ainda arranjaram essa carga para mim de ser inimigo de deus. Eu acho que a ditadura estragou esse país da gente durante muito tempo e continua estragando hoje. Evidentemente que a ditadura militar não inaugurou no Brasil o autoritarismo o autoritarismo está entranhado na natureza mesma da nossa sociedade o Brasil foi inventado autoritariamente, mas os militares deram uma indiscutível contribuição ao autoritarismo, eles ajudaram muito a crescer o autoritarismo, a violência, a mentira foi uma coisa trágica eu acho que esse período de ditadura no Brasil, deus queira, agora diria eu que jamais se reinvente. Quer dizer, meu gosto é que nós todos brasileiros e brasileiras, meninos, meninas, velhos, maduros que nós todos tomemos um tal gosto pela liberdade, pela presença no mundo, pela criatividade, pela pergunta, pela ação, pela denúncia, pelo anúncio, que jamais seja possível que no Brasil a gente volte àquela experiência do pesado silêncio sobre nós.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Dom Paulo'] ); 
		\App\Trecho::create([
			"verbete_id" => 105,
			"titulo_video" => "O simbólico e o diabólico na política: um testemunho de fé",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h09min49s a 01h14min08s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1938", 
			"texto" => "Ele encarna a utopia, porque não é possível falar no meu entender em simbolismo, em diabolismo sem falar em sonho, sem falar em utopia, sem falar em desejos, sem falar em aspirações, mas também sem deixar de falar na ideologia diabólica do fatalismo que nega o sonho. E Dom Paulo representa exatamente esse gosto de sonhar, esse gosto indomável de mudar o mundo, de mudar o mundo por fazer justiça a quem vem sendo injustiçado e fazer justiça aos quem vem injustiçando. Porque não é possível justiçar apenas fazendo feliz a vida dos injustiçados, é preciso que os que injustiçaram se assumam como autores de [risos] contravenção. Tem que se assumir, em linguagem teológica seria como pecador e Dom Paulo representa isso. Eu me lembro de uma noite, aliás a história começou mais em uma tarde nos anos 70 em que Dom Paulo estava em Genebra e nos encontramos em um fim de tarde e eu fui com mais dois amigos depois de uma conversa ampla com ele, fomos ao aeroporto e ficamos lá sentados em uma sala de espera e a conversa toda ela estava cheia, molhada do sonho da libertação desse país,[comentário com a plateia] o sofrimento com que Dom Paulo falava da necessidade de intervir, de testemunhar, de lutar, de amar e vocês imaginem que a profundidade dos sonhos simbólicos foi tão grande que Dom Paulo perdeu o avião no aeroporto [risos da plateia] [descrição sobre o acontecido]. Foi uma coisa interessante que aconteceu na minha vida e na vida dele e a conversa provocadora dessa perda, não era o bem-estar dele, mas era o mal estar de muita gente nesse país por causa de quem ele brigava, no sentido que esse mal estar no mínimo diminuísse e quem mal estava pudesse sonhar com a possibilidade de bem-estar.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Drogas (discurso)'] ); 
		\App\Trecho::create([
			"verbete_id" => 106,
			"titulo_video" => "Paulo Freire: educação, autonomia e as drogas",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h10min29s a 00h11min47s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1934", 
			"texto" => "O discurso sobre o vício, o discurso sobre a ética, para quem se droga não basta, é preciso que haja muito mais do que o discurso, haja caminhos que se inventem, no sentido, de uma apreensão da razão de ser da droga, quer dizer, na razão de ser que me faz se drogar, da razão de ser sobretudo que faz com que a droga esteja sendo instrumento, porque no fundo a droga é hoje um instrumento de poder na mão de quem detém, nas mãos de uma minoria que detém o seu comércio através de cuja economia produzida pela droga, essa minoria termina por deter o poder político também por escravizar a economia e então comandar politicamente o Estado.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Drogas (vício/ausência de escolha)'] ); 
		\App\Trecho::create([
			"verbete_id" => 107,
			"titulo_video" => "Paulo Freire: educação, autonomia e as drogas",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h05min43 a 00h07min47s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1934", 
			"texto" => "A primeira reflexão para mim é que a grande desgraça da droga não está nela, mas está na relação entre ela e nós, está em como nós nos relacionamos com a droga e em como essa relação vira vício o vício é exatamente o que me faz, por exemplo, não resistir, o vício de fumar, todas as coisas que são tomadas como vício e terminam por destruir nos, em gente ou na gente. As coisas que viram vício destroem em nós a capacidade de decidir, que no fundo significa romper, decidir é romper e romper é optar. O viciado não decide, nem rompe, nem opta. O viciado se entrega docilmente se há morfina. O viciado perde a capacidade de ser sujeito, na medida em que não pode decidir.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educação'] ); 
		\App\Trecho::create([
			"verbete_id" => 108,
			"titulo_video" => "Aula de encerramento com Paulo Freire e Moacir Gadotti na FE-USP",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h05min34s a 00h07min18s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1935", 
			"texto" => "A educação não é a chave porque poderia ser. Quer dizer, há de pensar no que há de contraditório deste discurso e esse discurso que eu fiz agora é tão contraditório quanto a educação em que a realidades são contraditórias. Eu não posso apreender a significação de um fenômeno contraditório através de um discurso linear, quer dizer, o meu discurso também tem que ser contraditório para que eu apreenda as contorções contraditórias do conceito que eu quero esclarecer. Ora, o que eu quero dizer com isso, a educação é chave das soluções dos problemas sociais, porque poderia ser a chave. Na medida mesma em que ela podendo ser posta em prática seria a chave, o poder dominante não permite que ela seja. Então é isso que quero dizer. Uma outra frase que eu poderia usar: a educação não pode tudo, mas pode algo. E o algo que ela pode é um algo significativo. Qualquer desses dois discursos, eu acho, empurra o sujeito do discurso para uma postura crítica, mas jamais pessimista.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 108,
			"titulo_video" => "Aula inaugural do Mestrado em Educação da Universidade de Juiz de Fora realizada por Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h13min12s a 01h14min20s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1911", 
			"texto" => "Uma das tarefas fundamentais de uma educação progressista, de uma educação respeitosa do ser humano, disso que eu chamo a vocação do ser humano, é exatamente a educação que primeiro se sabe existente, porque os sujeitos dela educadores e educandos são sujeitos que sendo inacabados se sabe inacabado. Segundo, a educação é uma experiência esperançosa, precisamente, porque os sujeitos dela inacabados se sabem inacabados e não é possível fazer educação sem procurar, e não é possível procurar sem esperança. Terceiro é preciso estimular a busca eficaz, é preciso estimular e trabalhar a curiosidade sem a qual a busca também não se faz.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 108,
			"titulo_video" => "Paulo Freire Especial  Globo Ciência (Programa 607)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h00min26s a 00h00min58s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1930", 
			"texto" => "Para mim, por exemplo, uma educação correta para esse país, é a educação que se preocupa fundamentalmente com o exercício democrático.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 108,
			"titulo_video" => "Darcy Ribeiro e Paulo Freire  Educadores do Brasil",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h43min02s a 00h44min01s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1914", 
			"texto" => "O meu primeiro ponto de partida era essa convicção que afinal a educação implica uma certa convivência ou uma relação que não pode ser rompida entre o conteúdo que se pretende ensinar e a experiência social e cultural que tem a ver com a identidade cultural, com os anseios, com os medos, com as frustrações do educando e não do educador, entende. Isso não significa inclusive que o educador não possa e não tenha o direito de falar também de suas preferências culturais, mas o que ele não pode é fazer o trabalho educativo a partir de suas preferências culturais quando sobretudo o que ocorre é uma diferença de classe social entre o educador e o educando, mas quase sempre.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 108,
			"titulo_video" => "Palestra de Paulo Freire no Banco do Brasil sobre 'As Relações Humanas no Trabalho",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h05min44s a 01h07min12s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1944", 
			"texto" => "Evidentemente que a gente não pode ser ingênuo de pensar que a educação é a alavanca de transformação radical da sociedade. Não é. Nunca foi. A educação não é a chave pra transformação da sociedade, mas a transformação não se dá sem ela. É essa dialética que as vezes deixa o pensamento ingênuo perdido, que o cara ingênuo diz vem cá, eu não entendo esse discurso. Num momento você diz: A educação não é a chave, no outro, imediatamente, você diz mas a transformação não se dá sem ela, então ela é a chave. Não! Não é a chave. Entende? Quer dizer, o que é preciso também é a gente aprender a pensar também essa coisa contraditória é e não é. Eu até agora poderia dizer mais complicadamente. A educação não é a chave porque poderia ser. Quer dizer, exatamente porque poderia ser, quem tem o poder não deixa que ela seja. É por isso que ela não é. Agora o que não é possível é deixar de fazê-la.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 108,
			"titulo_video" => "Entrevista de Paulo Freire concedida à Carmelita e Mariângela Wanderlei",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h08min11s a 00h09min22s (LADO B)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3241", 
			"texto" => "O fato mesmo da educação ser um ato político e não neutro. Você tem um caminho que é fundamental no educador primeiro é a sua opção política, e segundo é a correspondência ou a consistência ou a coerência entre a sua opção e a sua prática, com tanto o seu discurso e a sua prática, ele pode ter um discurso revolucionário e uma prática reacionária e disso a gente está cheio. Então a educação tanto pode se orientar no sentido da preservação do status quo como quanto da manutenção do poder antipopular, como pode se orientar no sentido de uma contribuição ao desmantelamento do poder anti-povo, antipopular.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 108,
			"titulo_video" => "Entrevista de Paulo Freire concedida à Carmelita e Mariângela Wanderlei",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h10min54s a 00h11min33s (LADO B)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3241", 
			"texto" => "Mas eu acho que pode haver uma educação popular anti-povo, quer dizer, uma educação que se dando sobre as massas populares e não com elas, está precisamente lutando contra os seus interesses. Então essa seria a educação deformadora, tá entendendo? deformadora das massas populares.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 108,
			"titulo_video" => "Entrevista de Paulo Freire concedida à Carmelita e Mariângela Wanderlei",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h14min42s a 00h15min40s (LADO B)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3241", 
			"texto" => "E tu defines o popular enquanto, também, uma prática que se dá na área dos historiados mesmo que seja mentirosa, mesmo que seja contra os interesses populares. É a mesma coisa da educação que domestica, e que se chama de educação, e da educação que não domestica, e que se chama de educação. Quer dizer o problema aí, eu acho, que é saber em favor de quem será libertadora. Em lugar de definir como popular exclusivamente eu definiria mais como educação popular libertadora, educação popular domesticante.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 108,
			"titulo_video" => "Entrevista de Paulo Freire concedida à Carmelita e Mariângela Wanderlei",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h15min52s a 00h16min07s (LADO B)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3241", 
			"texto" => "O que importa, porém, na discussão nisso é que se a nossa opção é libertária, agora eu tô passando pra uma educação popular realmente com as massas populares e não para elas, apenas, e nunca sobre elas.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 108,
			"titulo_video" => "Paulo FreireŽs Message  perceptions on Education and fundamental moments in educational practices towards democratic choice",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h02min10s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1921", 
			"texto" => "Nós temos que entender educação como uma prática humana, que nos pertence, aos homens e as mulheres. Temos que entender a prática educacional como uma prática humana que tem educadores e educandos como sujeitos da ação.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 108,
			"titulo_video" => "Paulo Freire  some thoughts",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h07min48s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1952", 
			"texto" => "Educação sempre foi e é agora o tipo de prática que envolve dois sujeitos do saber: o educador e o educando. Eles são objetos cognitivos e são mediados por um certo objeto para ser conhecido, que é o assunto da educação.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 108,
			"titulo_video" => "Educación y participación comunitária",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h17min48s a 00h18min03s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3211", 
			"texto" => "A educação deveria ser um permanente esforço crítico de desocultação de verdades.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 108,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h03min24s a 00h04min25s (PROGRAMA 2)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "A educação, no fundo, torna clara, na política de quem está no poder, quer dizer, ela tem a ver, portanto, com os interesses, ela, às vezes está ligada ocultamente, às vezes, mais claramente, mas a educação, a escola, está ligada aos interesses que são econômicos, sociais, culturais, políticos de quem tem poder na sociedade. Isso é certo, é claro que ninguém pode contestar isso. Agora, aí, se coloca a questão que você colocou. Ora, Paulo, mas se isso é uma verdade, como é que agora você vem com esse papo de melhorar e de ampliar e intensificar a escola? Exatamente, porque aí a gente tem que ver a questão de aumentar a rede escolar e de melhorar a qualidade, vira uma questão política, porque ela é, na verdade, uma questão política.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 108,
			"titulo_video" => "Leitura do Mundo, Leitura da Palavra",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h16min06s a 01h18min37s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1926", 
			"texto" => "A educação não é a chave da transformação do mundo porque poderia ser. Isso é uma afirmação, aparentemente, maluca. Quer dizer, ela não é porque poderia ser, então, mas ela é verdadeira. Vamos tentar compreender melhor isso. Entendendo-se, em primeiro lugar, que a educação é um ato político, quer dizer, a educação não é de jeito nenhum um ato neutro. E ainda tem muita gente que aposta, que mistura, que morre pela neutralidade da educação. Uns, ingenuamente, outros, sabidamente. Na verdade, a educação não é isso, não é neutra. Em segundo lugar, o poder político em uma sociedade está nas mãos, coincidentemente, também, de quem tem o poder econômico na sociedade. Por mais que se diga hoje que se acabaram as classes sociais, que não há mais direita, que não há mais esquerda, que não há mais ideologia, que não há mais sonhos. Por mais que se diga isso, cada vez mais há mais classes sociais, há ideologia, há lutas, há interesses sociais em conflito na sociedade. E o grupo do poder, que alcança poder na sociedade e dirige isto para educação, não iria por conta própria aplicar uma educação que desnudasse a realidade, que deixasse a realidade desocultada. Se desocultasser as verdades da realidade. Pelo contrário, os grupos do poder, no poder, mascaram tanto quanto podem a verdade ou as verdades dentro da realidade.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 108,
			"titulo_video" => "Paulo Freire: o revolucionário educador (Programa 1 e 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h04min38s a 00h04min44s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1946", 
			"texto" => "Quer dizer a educação enquanto formação humana é um esforço indiscutivelmente ético e estético.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 108,
			"titulo_video" => "Paulo Freire: Constructor de Sueños",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h01min45s a 00h00min02min01s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1940", 
			"texto" => "podemos dizer que a educação ou que a prática educativa é sempre uma certa teoria do conhecimento posta em prática, sempre.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educação (bancária)'] ); 
		\App\Trecho::create([
			"verbete_id" => 109,
			"titulo_video" => "Darcy Ribeiro e Paulo Freire  Educadores do Brasil",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h46min39s a 00h48min06s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1914", 
			"texto" => "A alfabetização é uma experiência criadora significa que o alfabetizando tem que criar, tem que montar, para usar uma expressão mais técnica, o seu sistema de sinais gráficos. Quer dizer, ele tem que ser no fundo o arquiteto desta produção ou desta criação, obviamente, ajudado ele ou ela pela educadora ou pelo educador. Mas o que eu quero dizer é que o exercício de tornar capaz de ler e escrever exige de quem realmente aprende uma postura de sujeito que cria seu próprio aprendizado. Então a minha crítica ao que eu chamei de bancarismo na educação que é exatamente essa prática educativa em que o professor deposita, é como o professor abrisse a cabeça do educando e metesse lá dentro os pacotes de conteúdo, isso é uma inconsistência. Isso não tem sentido. Então, eu defendia por isso mesmo então o direito que o alfabetizando tinha e tem de fazer parte da criação da sua capacidade de ler e de escrever.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educação (boniteza)'] ); 
		\App\Trecho::create([
			"verbete_id" => 110,
			"titulo_video" => "Paulo Freire: o revolucionário educador (Programa 1 e 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h04min46s a 00h05min19s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1946", 
			"texto" => "Não há como separar também a decência da boniteza. Quer dizer, a educação, enquanto busca da boniteza necessariamente procura a decência também. A decência do ser, e a natureza política dela, e a educação nos inviabiliza de ser neutros, quer dizer, você tem que, no fundo, ter uma opção. Você tem que ter uma escolha e depois brigar pela sua escolha, brigar pelo seu sonho.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educação (cultura)'] ); 
		\App\Trecho::create([
			"verbete_id" => 111,
			"titulo_video" => "Arquivo N  Paulo Freire, o Educador",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h11min02s a 00h11min54s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1888", 
			"texto" => "A educação implica uma certa convivência ou uma relação que não pode ser rompida entre o conteúdo que se pretende ensinar e a experiência social, cultural, que tem a ver com a identidade cultural, com anseios, com os medos, com as frustrações do educando, e não do educador, entende? Isso não significa inclusive que o educador não possa e não tenha o direito de falar também de suas preferências culturais, mas o que não pode é fazer o trabalho educativo a partir de suas preferências culturais quando, sobretudo, o que ocorre é uma diferença de classe social entre o educador e o educando. Nem sempre, mas quase sempre.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educação (curiosidade)'] ); 
		\App\Trecho::create([
			"verbete_id" => 112,
			"titulo_video" => "Aula inaugural do Mestrado em Educação da Universidade de Juiz de Fora realizada por Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h58min56s a 00h59min15s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1911", 
			"texto" => "A boa educação é aquela que primeiro ou uma das coisas que a educação boa deve fazer é  primeiro  jamais inibir a curiosidade do educando e a curiosidade do educador.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educação (desocultadora)'] ); 
		\App\Trecho::create([
			"verbete_id" => 113,
			"titulo_video" => "Leitura do Mundo, Leitura da Palavra",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h18min47s a 01h20min19s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1926", 
			"texto" => "Então, vocês imaginem numa luta democrática! Claro vocês imaginem quanto é difícil fazer uma educação desocultadora, uma educação séria, real, uma educação crítica numa sociedade mesmo como a nossa. Porque é a mesma coisa que pensar em nadar contra correnteza forte de um rio. Mas esse é o papel de quem é educador progressista. É exatamente o de lutar, quer dizer, eu não acho que tenha conseguido muita coisa no mundo, eu, de nenhum modo vou morrer cantando felicidade, mas canto, vou morrer feliz porque briguei, porque lutei à minha maneira, mas sei das dificuldades fantásticas que eu tive que enfrentar. Eu, outro dizia a um grupo de jovens, pedagogos, que me visitavam, que eu não sou um bom exemplo pra um, pra carreira pedagógica de ninguém. Porque aos setenta e quatro anos com que eu tenho, se eu vivesse só da aposentadoria que o Golpe de Estado me impôs, eu estava, eu estava pedindo esmola também, não daria para viver.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educação (Estado)'] ); 
		\App\Trecho::create([
			"verbete_id" => 114,
			"titulo_video" => "Alfabetização  Globo Ciência (Programa 281)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h10min55s a 00h12min34s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1899", 
			"texto" => "[Entrevistadora]: É possível resolver o problema do analfabetismo sem ter resolvido o problema da escola formal?[Paulo Freire]: A tua pergunta tem um sentido muito concreto porque não resulta positivamente que o Estado desempenhe um papel ou o faça, por mais amorosamente que faça o esforço fantástico de tentar superar o analfabetismo no Brasil, adulto, se ao mesmo tempo não parte para resolver esse déficit da quantidade, da educação no Brasil. De maneira que uma política educacional no Brasil teria que simultaneamente de um lado, partir para a formação de oito milhões a nove milhões de novos professores, segundo para a reformação ou para formação permanente de uma quantidade extraordinária de educadores chamados leigos pelo nordeste brasileiro. O que vale dizer também teria que pagar menos imoralmente a estes professores. Quer dizer é preciso então de um lado atacar o problema da deficiência da escola para as crianças, no sentido de evitar o crescente número de analfabetos jovens e depois adultos e do outro pegar os jovens e adultos de hoje, a quem se negou o direito de ler e escrever, e trabalhar com eles.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educação (diretividade)'] ); 
		\App\Trecho::create([
			"verbete_id" => 115,
			"titulo_video" => "Palestra de Paulo Freire no Banco Central",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h50min07s a 00h51min55s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3219", 
			"texto" => "Essa capacidade misteriosa que a prática educativa tem de transcendê-la a si própria se chama diretividade da educação. Veja bem, diretividade aqui não tem a ver com dirigismo. Dirigismo é uma perturbação da prática educativa em que a autoridade se degenera em autoritarismo, isso é o que é dirigismo. Mas estou falando aqui em diretividade que é um conceito técnico no campo da filosofia da educação para entender essa transcendência da educação, o que a educação faz ou implica de si mesma. No fundo o sonho e a utopia de que a prática educativa se impregna constitui o que eu chamo de politicidade da prática educativa. Quer dizer, não a prática educativa, nunca houve, não há no momento e até o começo do outro milênio não vai haver depois, talvez, porque eu não sou o dono da história. Mas para que a prática educativa deixe de ser política é preciso que as mulheres e os homens se transformem na história, a tal ponto que o processo de conhecer mude não seja mais o que estar sendo hoje e que o processo de valorar também mude. Quer dizer, que mude ética, que mude tudo e essas coisas mudanças significa milênios também.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educação doméstica'] ); 
		\App\Trecho::create([
			"verbete_id" => 116,
			"titulo_video" => "Conferência do professor Paulo Freire e entrega do título de cidadão uberabense",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h48min42s a 01h49min06s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1893", 
			"texto" => "A educação, por exemplo, que se dá no lar, a educação doméstica chamada a primeira com que nós nos defrontamos, também exige a existência dos educadores e dos educandos que são mãe e pai, filhos e filhas e também gira em torno da produção do conhecimento.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educação permanente'] ); 
		\App\Trecho::create([
			"verbete_id" => 117,
			"titulo_video" => "Encontro com Paulo Freire no Ginásio Tesourinha em Porto Alegre",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h56min23s a 00h57min30s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1933", 
			"texto" => "Para que a educação desapareça seja desnecessária é preciso que os homens e as mulheres em um milênio ou dois milênios a mais sofram uma alteração genética, tal que o que a gente entende hoje, pelo processo de produção de conhecimento, mude definitivamente.(...) Pode ser até do ponto de vista biológico, do ponto de vista anatômico, seja parecido, mas do ponto de vista da posição no mundo, não. Então, eu afirmo sem medo que vamos continuar necessitando da educação.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educação (formação humana)'] ); 
		\App\Trecho::create([
			"verbete_id" => 118,
			"titulo_video" => "Arquivo N  Paulo Freire, o Educador",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h00min27s a 00h00min48s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1888", 
			"texto" => "A educação enquanto formação humana é um esforço indiscutivelmente ético e estético. Quer dizer, não há como separar também a decência da boniteza, entende. Quer dizer, a educação enquanto busca de boniteza, necessariamente, procura a decência também, a decência do ser.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educação (implicações)'] ); 
		\App\Trecho::create([
			"verbete_id" => 119,
			"titulo_video" => "Paulo Freire: o revolucionário educador (Programa 1 e 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h05min28s a 00h06min19s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1946", 
			"texto" => "A educação implica uma certa convivência ou uma relação que não pode ser rompida entre o conteúdo que se pretende ensinar e a experiência social, cultural que tem que ver com a identidade cultural, com os anseios, com os medos, com as frustrações do educando e não do educador. Isso não significa inclusive que o educador não possa e não tenha o direito de falar também de suas preferências culturais, mas o que ele não pode é fazer o trabalho educativo a partir de suas preferências culturais quando, sobretudo, o que ocorre é uma diferença de classe social entre o educador e o educando nem sempre, mas quase sempre.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educação (instrumento)'] ); 
		\App\Trecho::create([
			"verbete_id" => 120,
			"titulo_video" => "Aula de encerramento com Paulo Freire e Moacir Gadotti na FE-USP",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h9min24s a 00h10min04s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1935", 
			"texto" => "O que é importante em última análise creio eu para nós brasileiras e brasileiros desse fim de século, é não assumir a posição de quem cruza os braços diante da problemática social, política desse país e descobrir que há uma certa tarefa a ser comprida pela educação à qual a gente não pode se furtar quer dizer, a educação é tão possível, quanto a história é possível. Então, ela é no fundo instrumental também.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educação (investimento)'] ); 
		\App\Trecho::create([
			"verbete_id" => 121,
			"titulo_video" => "Entrevista com Paulo Freire para o Diário de Pernambuco",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h00min57s a 00h03min46s (LADO B)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3240", 
			"texto" => "A minha posição pessoal é a seguinte é imperioso que nos preocupemos com isso. Quer dizer, isso significa inversão, investir em educação. Quer dizer, eu estou absolutamente convencido disso, ou o Brasil leva a sério profundamente a questão da Educação Nacional ou o Brasil corre o risco de nem sequer poder iniciar tentativas de uma medíocre resposta aos desafios tecnológicos que estão aí diante nós. A tecnologia ou as revoluções tecnológicas não vão parar simplesmente por que os governos brasileiros não têm se preocupado em investir em educação para o povo brasileiro. As revoluções tecnológicas não vão dizer \"vamos parar aqui um ano à espera que o povo brasileiro, o governo brasileiro ou os governos brasileiros levem a sério isso\". De jeito nenhum vai haver essa coisa. Quem não entrar na luta para ficar tanto quanto possível em dia com os desafios que a tecnologia moderna apresenta perde o bonde da história. Eu acho que nós já temos perdido muitos bondes e não podemos estar perdendo mais. Agora evidentemente que para mim isso não é uma questão puramente tecnológica. Não é a questão, como eu coloco, é o meu sonho não tem nada que ver com o sonho pragmático de neoliberais. Quer dizer, o grande problema estaria apenas na capacitação tecnológica, técnica e científica dos educandos sem nenhuma preocupação com a própria presença nossa no mundo. Quer dizer a minha preocupação é muito política e ela é exatamente a visão política da própria revolução tecnológica que me move. Mas o que é preciso deixar bem claro é que não é mais possível perder tempo sem seriamente investir na educação do povo brasileiro.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educação (mudança)'] ); 
		\App\Trecho::create([
			"verbete_id" => 122,
			"titulo_video" => "Palestra de Paulo Freire no Banco Central",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h11min40s a 01h14min07s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3219", 
			"texto" => "No meu entender a educação é absolutamente indispensável para a mudança de qualquer sociedade, mas ao mesmo tempo a educação não é em si a chave das mudanças. É um negócio contraditório, a gente não pode entender esse discurso numa lógica formal. Quer dizer, porque ao mesmo tempo em que a educação é fundamental no processo de formação ela não é  porém a chave das transformações. Eu até costumo dizer também que talvez mais contraditoriamente ainda que a educação não é as chaves das transformações, porque poderia ser, quer dizer, então é o discurso mais contraditório ainda. Quer dizer, a educação não é, mas poderia ser. Esse discurso poderia ser, mas não é, implica a existência de um obstáculo que fica no meio, se não esse discurso não era dito. Qual é esse obstáculo? Esse obstáculo é exatamente o poder de quem tem poder, tá entendendo? (...) É o seguinte a educação não é a chave das transformações de uma sociedade, porque para se transformasse numa sociedade radicalmente no sentido de atender as necessidades universais do ser humano é necessário indiscutivelmente  que se façam transformações de natureza econômica, de natureza política que vão ferir os interesses instalados nas estruturas do poder.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educação (Nordeste)'] ); 
		\App\Trecho::create([
			"verbete_id" => 123,
			"titulo_video" => "Palestra de Paulo Freire no Banco Central",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h43min29s a 01h44min25s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3219", 
			"texto" => "Eu acho que a solidariedade mesmo se encaminhando numa boa linha de ordem política não seria suficiente para mudar a educação no Nordeste e nem em lugar nenhum. Eu acho que o que pode reconstruir a educação no Nordeste é a decência com que os educadores e educadoras sejam tratados. E quando eu digo a decência com que os educadores e as educadoras sejam tratados eu quero incluir a minha compreensão da decência em salários não imorais como os de hoje e formação permanente política pedagógica da educadora, respeito aos educandos e aos espaços pedagógico em que os educandos trabalham com as educadoras, materiais necessários.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educação (poder)'] ); 
		\App\Trecho::create([
			"verbete_id" => 124,
			"titulo_video" => "Paulo Freire  some thoughts",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h11min26s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1952", 
			"texto" => "O poder da educação reside na sua fraqueza. Ou seja, a educação não pode fazer tudo, mas pode fazer alguma coisa. A questão para nós é sabermos o que podemos fazer, como fazer, com quem fazer, a favor de quem, contra quem, a favor de qual sonho a educação pode agir.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educação (política)'] ); 
		\App\Trecho::create([
			"verbete_id" => 125,
			"titulo_video" => "Palestra de Paulo Freire no DESED (Banco do Brasil)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h23min22s a 00h26min44s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1891", 
			"texto" => "Por isso é que o educando deve ser livre para conhecer a posição eu não concordo com essa história de você dizer Não, o educador deve ficar silencioso com relação a sua opção política para não influenciar o aluno. Não, isso é uma mentira. Eu acho que isso é um desrespeito ao aluno também. Eu acho que uma das coisas fantásticas na educação é exatamente a possibilidade de o aluno crescer como ele, como a pessoa dele e isso ele cresce na medida em que ele se experimenta em posições até que se antagonizam. Quer dizer, ele precisa experimentar as diferentes opções que são políticas para fazer também a sua opção. Agora se vocês pensam nisso tudo do ponto de vista do alfabetizador, é a mesma coisa. Quer dizer, o alfabetizador, que trabalha com grupos de adultos, deve ter sua opção política, não há dúvida nenhuma, é um direito dele e um dever dele, mas deve respeitar profundamente a ingenuidade e, sobretudo, a debilidade não física, as vezes também física, mas debilidade moral, quando eu digo moral não no sentido de imoralidade. Quer dizer, a debilidade da personalidade, as experiências negativas do oprimido que fazem com que ele seja, às vezes, um quase vencido. O educador tem, nesse caso, tem que ser muito cuidadoso para não insinuar que está querendo mandar votar nesse ou naquele, mas deve enfatizar a necessidade de assumir-se o direito e o dever de votar. Quando você faz uma análise histórica você vê que há um número de coisas que se passaram ou que não se passaram e que estão condicionando o que está passando, e dificultando o que deve passar amanhã. Quer dizer, fazer uma combinação entre o hoje, o ontem, o hoje e o amanhã, e sabendo sobretudo que o amanhã não é uma província histórica que está ali à espera que a gente chegue. Pelo contrário, o amanhã só existe como a gente quer se a gente transformar o hoje como a gente quer, quer dizer, amanhã nenhum será presente de Deus. O amanhã é a transformação do hoje com a iluminação da sabedoria do ontem, com a experiência que o ontem nos deu. E o futuro em primeiro lugar, o futuro é problemático, o futuro não é inexorável como alguns dos companheiros nossos de esquerda pensavam, mecanicistamente, que o amanhã vem no socialismo mesmo e isso não vem não, só vem se a gente fizer. Se não fizer, ele não vem. Quer dizer, o futuro é problema e não inexorabilidade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educação (prática da libertação)'] ); 
		\App\Trecho::create([
			"verbete_id" => 126,
			"titulo_video" => "Pedagogia do oprimido e a educação do colonizador",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h05min38s a 00h06min18s (LADO B)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3260", 
			"texto" => "Na educação como prática da libertação, o desenvolvimento da consciência de si, do sujeito, é indispensável para que haja uma relação dialética com desenvolvimento da coisa e dos fatos que lhe rodeiam. Naquelas domesticadoras, apresentam ao educando a realidade como um dado alheio, feito e acabado.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educação (respeito)'] ); 
		\App\Trecho::create([
			"verbete_id" => 127,
			"titulo_video" => "Diálogo com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h59min20s a 01h59min50s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3229", 
			"texto" => "A gente tem é que brigar nesse país por uma reorientação da educação brasileira, que partindo do respeito à escola pública, que partindo do respeito aos educadores da escola primária, ao pagamento menos imoral de seus salários. É preciso pagar decentemente o trabalho pedagógico nesse país. Não é possível que continuemos desse jeito. É preciso haver uma reorientação da política de gastos desse país.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educação (subdesenvolvimento)'] ); 
		\App\Trecho::create([
			"verbete_id" => 128,
			"titulo_video" => "Conversatório com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h14min25s a 00h15min20s (PARTE 1)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3233", 
			"texto" => "Que núcleo central eu veria nas relações entre educação e subdesenvolvimento? Eu acredito que há muitos, há muitos aspectos a serem vistos, a serem pensados. Em primeiro lugar, só há subdesenvolvimento, porque há desenvolvimento. O que eu quero dizer é que não seria possível entender o subdesenvolvimento sem o esmagamento que o desenvolvimento provoca criando o subdesenvolvimento.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educação (universidade/extensão)'] ); 
		\App\Trecho::create([
			"verbete_id" => 129,
			"titulo_video" => "Paulo Freire entrevistado no programa 'Matéria Prima' da TV Cultura",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h06min22s a 00h08min29s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3218", 
			"texto" => "Educação informal, uma educação que não sendo antagônica a educação formal, a essa que a escola deve dar, ela pode, porém, complementar a educação que se dá dentro da escola. Eu participei de algumas dessas experiências de educação informal dentro do Brasil e fora do Brasil. Ontem, muito ontem, relativamente hoje, de uma dessas experiências eu me lembro agora, mas faz muito tempo, foi antes do exílio ainda, eu dirigia na universidade então chamada do Recife, hoje Federal de Pernambuco, eu dirigia o que a gente chamava lá de serviço de extensão cultural, eu me lembro que ofereciamos uma série de cursos informais a jovens como vocês sobre realidade brasileira, sobre democracia, sobre socialismo, isso foi nos anos 60, com uma presença enorme de jovens. O que foi interessante é que aqueles cursos que nós dávamos aos jovens alunos de cursos secundário, terminaram por provocar seus professores a nos procurar também, porque os jovens começaram a fazer um tipo diferente de pergunta aos professores no ginásio de que eles participavam, e os professores tinham dificuldade de responder e os jovens estavam ganhando um tipo de conhecimento mais rigoroso do que os professores deles. Então os professores também nos procuraram e nós passamos a dar cursos informais a eles também. Eu acho que isso é um direito nosso, dos jovens como dos velhos também, dos velhos que não se deixam envelhecer, o direito de continuar conhecendo, o direito de continuar curioso.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educador(a)'] ); 
		\App\Trecho::create([
			"verbete_id" => 130,
			"titulo_video" => "Programa 'Clodovil Abre o Jogo' entrevista Paulo Freire e Tatiana Belinky",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h05min50s a 00h06min15s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1915", 
			"texto" => "Eu acho que o educador é profissional, agora, é um profissional que funda sua prática numa amorosidade, primeiro, ao próprio processo em que ele se mete, entendeu? Um educador que não gosta do processo de educar, de ensinar deveria deixar a educação. Segundo você tem que, sendo educador, que amar, que amar não só o processo de educar, mas o educando com quem você trabalha.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 130,
			"titulo_video" => "Programa 'Clodovil Abre o Jogo' entrevista Paulo Freire e Tatiana Belinky",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h07min5s a 00h08min47s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1915", 
			"texto" => "Eu acho que o educador aberto é o educador que não mente, que não esconde, que não tem medo de dizer eu sei que posso lhe influenciar, porque influencia não é má, não há quem não esteja sujeito a uma influência. Eu mesmo, de vez em quando, me surpreendo influenciado até por um aluno, por exemplo, mas o que é errado é pressionar o ser do outro, quer dizer, é puni-lo se ele não concorda comigo. Eu acho que é possível uma educação democrática eticamente fundada, que respeita a liberdade, mas que não é licenciosa.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educador(a) (atitude)'] ); 
		\App\Trecho::create([
			"verbete_id" => 131,
			"titulo_video" => "Aprendendo didática com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h14min45s a 00h16min22s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1887", 
			"texto" => "O educador e a educadora não devem simplesmente esperar que as coisas ocorram que as coisas aconteçam. Quer dizer, eu acho que qualquer posição que o educador assuma diante do educando em face da necessidade, diria até que tem a educadora e o educando, e que o educando apreende o objeto, ele ganha a inteligência do objeto. Diante disso, eu não vejo como a educadora se entregue ao acaso. Quer dizer, não é possível se entregar ao acaso. O entregar-se ao acaso para ver no que vai dar chegar à sala de aula absolutamente despreparada pra ver o que acontece, eu acho que é uma posição irresponsável, absolutamente irresponsável, uma posição que nega a própria natureza diretiva que está no corpo da educação. Que nega a responsabilidade formadora da educadora.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educador (astuto/ingênuo)'] ); 
		\App\Trecho::create([
			"verbete_id" => 132,
			"titulo_video" => "Palestra de Paulo Freire no Banco Central",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h04min13s a 01h04min55s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3219", 
			"texto" => "Um educador que defende uma não politicidade da educação ou é astuto demais ou é ingênuo. Quer dizer, defender a neutralidade da educação ou se faz por causa de uma esperteza que não deve ser revelada ou se faz por uma enorme ingenuidade, porque, na verdade a própria natureza da prática e do ser humano nos levam a uma compreensão política da educação que é o que ela sempre foi, que ela vai continuar a ser.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educador(a) (educando)'] ); 
		\App\Trecho::create([
			"verbete_id" => 133,
			"titulo_video" => "Aprendendo didática com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h06min53s a 00h07min20s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1887", 
			"texto" => "O papel do educando e o papel do professor neste ato de conhecer difere um pouco, por que no fundo o professor ensina através do testemunho dele ao educando, como o educando deve se aproximar do objeto do conhecimento que mediatiza, os dois na prática de conhecer esse objeto, que é a educação.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 133,
			"titulo_video" => "Aprendendo didática com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h03min51s a 00h6min51s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1887", 
			"texto" => "Toda vez que eu penso em ensino-aprendizagem, eu estou pensando centralmente no ato do conhecimento que funda e que justifica a relação ensino-aprendizagem. E isso exige de nós algumas explicações eu creio, porque veja, quando você no lugar de referir-se à relação ensino-aprendizagem, você sublinha o ato de conhecer que caracteriza a prática educativa ou que faz parte da natureza mesma da prática educativa você pode, à primeira vista, por exemplo, você pode dizer: muito bem, veja bem, se o Paulo Freire no lugar de pensar na relação ensino-aprendizagem ele sublinha o ato de conhecer que explica em grande parte a prática educativa pode parecer pelo menos que Paulo Freire esteja negando ao educador, ao professor o papel de ensinar, já que no lugar de falar em ensino-aprendizagem e quando você fala de ensino-aprendizagem você tem que falar do ensinante, portanto, do professor. Quando você fala de aprendizagem, você inclui aí o aluno. Só que para mim eu vejo o ensinante  não apenas como ensinante, mas também como aprendiz, e como aluno não apenas o aluno, mas também ensinante. Mas eu gostaria de dizer que não, quando eu falo no ato de conhecimento, eu acho que eu caminho em uma linha mais ampla, mais problemática, desafiadora do que quando fico apenas na relação ensino-aprendizagem. Mas, eu não nego que no ato de conhecimento os sujeitos que conhecem que são o educador e o educando e que têm,  indiscutivelmente,  nesta relação, posições e responsabilidades diferentes, por que não são de maneira nenhuma iguais. Em que pese que ambos estejam engajados no ato de conhecer um dado objeto que é exatamente uma dimensão do conteúdo programático da educação.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educador (experiência)'] ); 
		\App\Trecho::create([
			"verbete_id" => 134,
			"titulo_video" => "Paulo Freire: Educação e mudança",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h04min10s a 00h05min53s", 
			"endereco_video" => "http://acervo.paulofreire.org:80/xmlui/handle/7891/1931", 
			"texto" => "Ao mesmo tempo em que a experiência de vida é absolutamente necessária, fundamental, a tarefa do educador, ela sozinha não basta porque, por exemplo, se você toma, sobretudo, a experiência de vida como se desgastar-nos da vida, quer dizer, essa coisa de estar sendo na vida a forma como a gente come, como a gente acredita nas pessoas, como a gente não acredita, nossas esperanças, os nossos sentimentos, afinal de contas, tudo isso envolve essa coisa que a gente chama, geralmente, de experiência de vida do que a gente tem na classe social a que a gente pertence, por exemplo, essa sala rodeada desses quadros constitui um momento importante da minha experiência de vida, se você pergunta se essas coisas todas têm que ver com o trabalho do educador, seja ele um alfabetizador seja ele um pesquisador, não há dúvida nenhuma que tem que ver. Agora essa experiência sozinha, que é tão importante, não explica a totalidade do trabalho. Então o alfabetizador em primeiro lugar ele tem de partir da compreensão crítica da sua experiência de vida do educando, quer dizer, sem a experiência, sem o conhecimento da experiência de vida do educando, o educador falha, então ele precisa ter uma competência especial para compreender essa experiência de vida sua e do educando.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educador(a) (missionário/a)'] ); 
		\App\Trecho::create([
			"verbete_id" => 135,
			"titulo_video" => "Programa 'Clodovil Abre o Jogo' entrevista Paulo Freire e Tatiana Belinky",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h05min08s a 00h05min49s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1915", 
			"texto" => "Você vê que às vezes a gente pensa que o educador é um missionário. Eu diria que não. Quer dizer, há momentos missionários na tua tarefa, qualquer que seja ela, na tua profissão. Tu podes, em certo momento, na tua atividade, quase fazê-la missão, mas, no fundo, tu és um profissional. Tu tens que lutar para ser cada vez mais um melhor profissional, mais competente profissional, profissional de caráter, que encara a profissão com ética, com respeito etc..", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educador(a) (papel)'] ); 
		\App\Trecho::create([
			"verbete_id" => 136,
			"titulo_video" => "Paulo Freire entrevistado no programa 'Matéria Prima' da TV Cultura",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h11min41s a 00h12min42s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3218", 
			"texto" => "O que o senhor acha dessa frase: mestre não é aquele que ensina, mas é aquele que de repente aprende? [Paulo Freire]: Talvez a gente possa ouvir e ler a frase sob dois aspectos, o primeiro talvez sobre o aspecto da boniteza da frase, a frase é bonita, eu pelo menos acho, agora a rigor a frase não é correta, por que que eu digo que a frase não é rigorosamente correta, porque pra mim o mestre é o que ensina também, mas é o que ensinando aprende, aquele que democraticamente está convencido de que não possui a verdade toda, de que não possui o conhecimento, o conhecimento não é propriedade sua, mas ele ao mesmo tempo, ou ela, está convencido/a, que por ser mestre tem o dever e a obrigação de ensinar.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 136,
			"titulo_video" => "Paulo Freire: Constructor de Sueños",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h02min26s a 00h03min45s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1940", 
			"texto" => "O educador necessita do educando, assim como o educando necessita do educador, ambos se educam. Ainda que as tarefas de ambos sejam específicas, o educador não é igual ao educando. O educador tem que educar, o professor tem que ensinar e o educando tem que aprender. A questão é saber como se dão essas relações de tal maneira que seja uma prática democrática, mas depende de certas qualidades que o professor tem que criar... como não ter vergonha de não saber, de não conhecer alguma coisa que o educando o pergunta, como portanto, a qualidade da humildade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educador(a) (progressista)'] ); 
		\App\Trecho::create([
			"verbete_id" => 137,
			"titulo_video" => "Lançamento do livro 'Paulo Freire: uma Biobibliografia'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h28min44s a 01h29min29s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1901", 
			"texto" => "Eu acho que um dos papéis fundamentais de um educador progressista é descruzar os braços diante da história e desocultar as plenas liberdades escondidas. E foi exatamente a minha resposta, foi exatamente a de que, através da inteligência do fenômeno da cultura, seria possível ajudar a superação da percepção fatalista da história e empurrarmos para as brigas futuras.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educador(a) (realidade)'] ); 
		\App\Trecho::create([
			"verbete_id" => 138,
			"titulo_video" => "Aprendendo didática com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h19min39s a 00h21min15s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1887", 
			"texto" => "A necessidade crítica que tem a educadora de não pensar jamais que a sala onde ela está é assim uma espécie de gueto em relação ao resto do mundo, entende? Não é. Quer dizer, o que está ocorrendo ali naquela sala tem ramificações com algo que ocorreu fora daquela sala e tem que ver com algo que vai ocorrer depois daquele tempo e fora daquele espaço. Significa então, por isso para mim, que não é possível que a professora se despreocupe, por exemplo, com as condições materiais, culturais, de classe social de seus alunos. Quando ela está trabalhando com eles, por exemplo, substantivos, ou ilhas, ou seja lá o que for, matemática, quer dizer, é preciso que ela também se preocupe com o que pode ocorrer com apreensão por parte dos alunos daqueles objetos, daqueles conteúdos que fazem parte da sua programação.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educador(a) (sonho)'] ); 
		\App\Trecho::create([
			"verbete_id" => 139,
			"titulo_video" => "Ler, Escrever, Libertar  BB-Educar",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h05min10s a 00h05min23s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1919", 
			"texto" => "O educador é um sonhador político, ele tem ideias e tem aspirações políticas e ele sonha com um certo modelo de sociedade, que é um modelo político.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Educador (tarefa)'] ); 
		\App\Trecho::create([
			"verbete_id" => 140,
			"titulo_video" => "Paulo Freire: Educação e mudança",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h07min05s a 00h07min48s", 
			"endereco_video" => "http://acervo.paulofreire.org:80/xmlui/handle/7891/1931", 
			"texto" => "Uma das tarefas do educador, do alfabetizador é, exatamente, a de ajudar o alfabetizando assumindo-se como analfabeto, sabendo, porém, que a culpa é social e não dele, que o fracasso não é dele, o fracasso é de uma sociedade perversa, que é a nossa. Então é possível que a partir daí ao descobrir que a perversidade da sociedade é a culpada pelo fato dele não saber ler, que ele se prepara amadurecendo para superar o que haja de inibidor no processo de alfabetização.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 140,
			"titulo_video" => "Paulo Freire in action",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h04min10s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3223", 
			"texto" => "[barulho de animal  cachorro - e várias pessoas falando] Eu acho que uma das tarefas do educador popular é com o diálogo, através do diálogo, mostrar para o povo os seus avanços, para que o povo não desanime e não caia na desesperança.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 140,
			"titulo_video" => "Especial Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h20min56s a 00h21min19s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1918", 
			"texto" => "Uma das tarefas do educador popular é, com diálogo através do diálogo, é mostrar ao povo os seus avanços para que o povo não desanime e caia na desesperança.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Elitismo (autoritarismo)'] ); 
		\App\Trecho::create([
			"verbete_id" => 141,
			"titulo_video" => "II Plenária Pedagógica com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h57min38s a 01h03min08s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3234", 
			"texto" => "Associada a essa ideologia elitista, está o autoritarismo, de modo geral, é elitismo. Eu acho que esse pró-ideológico se constituiu num obstáculo maior do que a falta de verbas. Nós temos, inclusive, um orçamento milionário e o obstáculo maior continuaria lá. O elitismo e o autoritarismo. Eu poderia dar assim uns dois exemplos, disso, do autoritarismo e do elitismo, e os dois juntos, as vezes um autoritarismo que não é nem, se quer, da pessoa física, professor A, professor B. Mas, que é da estrutura mesma, da escola, do sistema, do subsistema escolar e, por sua vez, é subsistema do sistema maior que é a estrutura social, política, ideológica, econômica, e que dá corpo e que dá alma à sociedade que a gente tem. Dessa coisa que tá aí. Eu tenho dado sempre esse exemplo, porque eu vou repetir quando a gente pensa, por exemplo, que há oito milhões  de meninos e meninas brasileiras em idade escolar que estão impedidos de estar na escola e quando se fala disso se diz que estão fora da escola, em lugar de dizer que estão proibidos de estar na escola se diz fora da escola, se diz fora da escola Oito milhões fora da escola, é como se a gente dissesse Estão fora, mas poderiam estar dentro, só não estão porque não quer, porque é uma mentira. É ideologia. Isso daí representa indiscutivelmente, é um dos pontos de partida da ideologia, das duas ideologias, é o autoritarismo casado com o elitismo dentro da constituinte da alma, o sopro vital do sistema que está aí brasileiro. O sistema que está aí não tem, porque veja a estatística fala em oito milhões, mas não diz onde busca esses oito milhões, não diz. De onde é que vem esses meninos e meninas que compõem esses oito milhões, fica lá discreta, bem-educada, que fala apenas nos números. Obviamente, desses oito milhões não há um menino ou uma menina das chamadas classes remediadas que estejam fora da escola, um, para constituir ou para aumentar essa estatística. E isso não ocorre porque Papai do Céu só gosta de menino remediado. Os oito milhões são meninos populares, são meninos do povo. Eu acho interessante que outro dia andaram no jornal, um jornal andou pesquisando que isso era uma concepção extravagante que Paulo Freire tava inventando de menino popular, que maravilha de ignorância. Pois bem, tem mais para mostrar o elitismo e o autoritarismo com que se decreta que oito milhões ficam fora e depois os governos ainda falam isso com pena, apenados desse fato e dizendo Poxa, mais como é que isso ocorre ainda no fim do século? E acha dinheiro para outras coisas. Eu não tenho dúvida nenhuma que as escolas desse país podiam ser outras se a política do uso, se a política dos gastos públicos fosse outra nesse país. Mas, há um outro dado que vai em cima da questão que se coloca. Que pega de novo as duas ideologias juntas. É que entra por questão de pressão fantástica, as classes populares terminam como uma quantidade grande de meninos populares dentro das escolas públicas. Porque sejam meninos de faixa popular cujos pais conseguiram já um pouco de possibilidade econômica, material, que lhes deu chance de brigar mais, de pressionar mais, de chegar cedo para matricular o filho. Eu sei que entram meninos populares. E o que é que acontece com eles? Do primeiro para o segundo ano levam pau, como se dizia antigamente. Porque não aprendeu a ler e escrever e as escolas começam a falar, com exceções, de que há sim uma certa incapacidade natal, ontológica, do menino popular. E isso é uma vez mais mentira, é ideologia dominante. Evidentemente que as condições materiais precárias prejudicam a capacidade de aprender, mas não mudam a natureza do ser.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Elitismo (academia)'] ); 
		\App\Trecho::create([
			"verbete_id" => 142,
			"titulo_video" => "Aula inaugural do Mestrado em Educação da Universidade de Juiz de Fora realizada por Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h53min48s a 00h54min17s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1911", 
			"texto" => "Eu acho que um dos pecados da academia é quando ela vira academicista e aí se transforma em elitista. E aí estabelece uma relação de desprezo com relação ao saber comum, ela renega a sabedoria  ingênua.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Ensinar'] ); 
		\App\Trecho::create([
			"verbete_id" => 143,
			"titulo_video" => "Palestra de Paulo Freire no Banco Central",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h46min49s a 00h47min36s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3219", 
			"texto" => "Os homens e mulheres primeiro aprenderam para depois ensinar. Nós começamos o amplo processo de ensinar e aprender de aprender e ensinar socialmente aprendendo e foi socialmente aprendendo que nós descobrimos que era possível ensinar. Então a atividade docente vem depois da atividade discente ou em outra palavra a atividade discente tinha dentro dela quase que diluída a habilidade docente e a gente nunca se lembra disso nem percebe que a coisa foi ao contrário...", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 143,
			"titulo_video" => "Paulo Freire e a Educação Matemática",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h24min52s a 00h25min27s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1880", 
			"texto" => "Ele/ela tem uma grande responsabilidade de ensinar. E o professor que não ensina, não se justifica, ele não se explica a si mesmo agora é preciso clarear e esclarecer o que é mesmo ensinar. E quando a gente busca compreender na própria prática o que é ensinar a gente tem que concluir que o próprio esforço e o processo social da produção do conhecimento põe de lado qualquer possibilidade de transferir conhecimento.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 143,
			"titulo_video" => "Paulo Freire In Memorian",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h06min33s a 00h07min02s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1942", 
			"texto" => "Ensinar exige amor ao ensino e amor a pessoa com quem se trabalha para ensinar. Exige humildade, exige esperança, exige tolerância. Você não pode ensinar se você se sente mal com o outro porque o outro é simplesmente diferente de você. A intolerância inviabiliza o ensinar.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 143,
			"titulo_video" => "Reading the World",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h17min29s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3298", 
			"texto" => "Antes de tudo, ensinar alguém como ler e escrever palavras é algo sério, muito sério. O que implica ou exige dos que ensinam um grande respeito por aqueles que estão sendo ensinados. O que quero dizer com respeito por aqueles que estão sendo ensinados ou serão ensinados? Quero dizer, o respeito pelo conhecimento, baseado, claro, no senso comum, o qual a interação traz com eles para a escola, para a sala. Respeito pelo conhecimento o qual eles já possuem, e respeito pela língua deles é que é cultura, para a identidade deles.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 143,
			"titulo_video" => "Conversando com Paulo Freire sobre Arte e Educação aos 21 anos da Pedagogia do Oprimido",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h39min21s a 00h41min24s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1882", 
			"texto" => "O ser da educação tem a ver com conhecimento, tem a ver com política, tem a ver com ética e tem que haver com estética. Vale dizer, em outras palavras, não há prática educativa que não seja, ao mesmo tempo, um quê fazer gnosiológico em que os sujeitos, educador e educandos, se envolvem mediados pelo conteúdo, se envolvem na busca da decifração: o que é ensinar? Ensinar não é fazer o discurso sobre o perfil do conteúdo, mas ensinar é propor ao educando uma aproximação gnosiológica ao conteúdo enquanto objeto de conhecimento.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 143,
			"titulo_video" => "Especial Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h08min48s a 00h09min17s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1918", 
			"texto" => "Ensinar exige amor, amor ao ensino e amor a pessoa que quem se trabalha para ensinar. Exige humildade, exige esperança, exige tolerância, quer dizer, você não pode ensinar se você se sente mal com o outro porque o outro simplesmente é diferente de você. Quer dizer, a intolerância inviabiliza o ensinar.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 143,
			"titulo_video" => "Paulo Freire: Constructor de Sueños",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h01min33s a 00h01min44s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1940", 
			"texto" => "Ensinar faz parte do processo maior de conhecer e ensinar implica necessariamente aprender.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Ensinar e aprender'] ); 
		\App\Trecho::create([
			"verbete_id" => 144,
			"titulo_video" => "Paulo Freire: o revolucionário educador (Programa 1 e 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h08min41s a 00h09min04s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1946", 
			"texto" => "A certeza que eu tenho, e continuo tendo, é de que a prática ensinante e a prática de aprender, da aprendizagem, são práticas que se dão num clima de, num clima que deve ser, necessariamente, de boniteza, quer dizer e de alegria.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Ensinar (educação bancária)'] ); 
		\App\Trecho::create([
			"verbete_id" => 145,
			"titulo_video" => "Alfabetizar é construir",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h07min16s a 00h07min38s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1953", 
			"texto" => "Ensinar, quer dizer, não é simplesmente fazer um discurso que transfere para o educando um saber imobilizado, um saber estático. Ensinar é provocar, é desafiar, estimular, despertar o educando para que ele se assuma como aprendiz.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Ensinar (leitura)'] ); 
		\App\Trecho::create([
			"verbete_id" => 146,
			"titulo_video" => "Reading the World",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h30min48s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3298", 
			"texto" => "Às vezes ensinamos os estudantes como ler textos, mas nós nunca ensinamos como ler as palavras. É impossível ensinar como ler textos sem relaciona-los com o contexto. É impossível, como eu sempre digo: Ler palavras sem ler o mundo. Isso é necessário, convidar, desafiar os estudantes, desde quanto eles são crianças, para começar a olhar para a realidade e quando falo sobre o mundo eu não estou falando exclusivamente sobre natureza, mas sobre estruturas sociais, políticas, culturais. Nós temos o dever de entender um mais ou menos, para sobrevivermos a sociedade, e acima de tudo, para mudar a sociedade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Ensino-aprendizagem'] ); 
		\App\Trecho::create([
			"verbete_id" => 147,
			"titulo_video" => "Palestra de Paulo Freire no DESED (Banco do Brasil)",
			"tipo_recurso" => "Vídeo", 
			"tempo" => "00h07min56s a 00h13min58s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1891", 
			"texto" => "Toda situação educativa tem, necessariamente, um sujeito educador e tem um sujeito educando, mas quando eu agora digo que toda relação educativa tem um sujeito educador e um sujeito educando eu já estou afirmando a quem me ouve, ou quem me lê, eu já estou afirmando uma, eu quero só chamar atenção disso, mas uma certa posição política e ideológica. Quer dizer, no momento em que eu digo que o educando é também sujeito do processo de sua própria educação e não só o objeto do trabalho educador, da educadora ou do educador, eu estou afirmando uma certa opção política e uma certa posição ideológica quando dizendo que o educando é também sujeito eu não aceito que ele seja mero objeto da prática pedagógica. Então isso significa já no primeiro momento, se o ouvinte me ouve de forma crítica, ele já pode ficar despertado para o fato de que eu estou fazendo uma afirmação democrática e não autoritária. Um segundo elemento que jamais pode faltar na prática educativa na situação educativa é o que a gente chama, o conteúdo da prática educativa o que posso chamar também de objeto a ser ensinado e a ser aprendido. O conteúdo programático ou objeto de conhecimento não há uma situação educativa que não tenha o conteúdo que o professor ou professora ensina e que o aluno aprende. Quando eu digo isso eu estou afirmando que toda situação educativa é uma situação que envolve o processo de conhecimento. Quer dizer, não há situação educativa sem objeto de conhecimento. Em outras palavras, a gente fala, usa uma expressão de origem grega para dizer que a situação educativa é sempre gnosiológica, quer dizer, ela envolve sempre o ato de conhecer o processo de conhecer. O meu comportamento ou a minha posição difere da posição do educando porque se pressupõe e se admite que o professor sabe o objeto ou entrou no processo de saber, de conhecer o objeto que ele ensina, antes do aluno, é óbvio isso. Mas nem sempre se dá isso, às vezes, o aluno soube antes ou sabe concomitante com o professor. Mas em regra implica que o professor estudou, que o professor conheceu aquele objeto antes do aluno. É exatamente por isso que no momento por exemplo, em que o professor ensina o objeto, o conteúdo, o professor faz um processo fundamental ou entra num processo fundamental que quando é sentido quando é assumido pelo professor dá à tarefa do professor uma boniteza fantástica e uma situação de alegria e de felicidade que é a seguinte, na medida em que o professor ensina o objeto que ele conheceu antes ele reconhece o objeto que ensina, quer dizer ele re-sabe o objeto que sabia. E no momento em que o educando travando a sua relação com o educador ou com o professor começa a procurar conhecer o objeto de que o professor fala, o educando entra no processo de conhecer o ainda não conhecido ou o mal conhecido ainda. Quer dizer, um começa a aprender o outro reconhece o aprendido ao ensinar. Vocês vejam que esse processo em si mesmo é de uma boniteza fantástica, entendeu? Eu que, me desculpem a modéstia, eu que sei isso toda vez que dou uma aula fico formidavelmente feliz e alegre, porque no fundo eu estou me reconhecendo ou estou reconhecendo o conhecimento que eu tinha antes e toda vez que a gente reconhece um conhecimento que a gente tinha antes, a gente primeiro se certifica melhor do conhecimento que tinha, segundo a gente se prepara para conhecer o que ainda não conhece. Quer dizer, então, a tarefa pedagógica de quem ensina é uma tarefa profundamente rica quando ela é realmente assumida. Quer dizer, é preciso que eu como educador saiba o que é que eu faço e o que é que existe no que eu faço.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Ensino (matemática)'] ); 
		\App\Trecho::create([
			"verbete_id" => 148,
			"titulo_video" => "Paulo Freire e a Educação Matemática",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h17min04s a 00h24min09s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1880", 
			"texto" => "A minha preocupação ao estar escrevendo esse livro é mostrar as vezes mais do que saberes, mostrar certas sabedorias indispensáveis ao professor ou a formação do educador por exemplo talvez o primeiro saber que deve virar uma sabedoria é o seguinte, a prática educativa se funda não apenas na inconclusão antológica do ser humano, mas na consciência da inconclusão. Quer dizer, é em cima desses dois pés de um lado a minha inconclusão do outro a minha consciência da minha inconclusão é aí que se funda a educação. Quer dizer, a educabilidade humana não tem outra explicação na assunção da minha inconclusão consciente como também é aí que se fundamenta minha esperança. Você imagine que incoerência seria, se inconcluso como somos e consciente da inconclusão não nos lançássemos num permanente movimento de procura, de busca. O ser que não procura é aquele que sendo inconcluso não se sabe inconcluso por exemplo a jabuticabeira, eu gosto muito de citar as jabuticabeiras que eu tenho aqui no quintalzinho aqui de casa, ela é inconclusa também porque o fenômeno da inconclusão é um fenômeno vital, portanto, não é exclusivo da existência humana. Mas o nível da inconclusão da jabuticabeira não tem nada a mais a ver com meu nível de inconclusão. Quer dizer, a jabuticabeira é inconclusa como inconcluso é meu Pastor Alemão aí nesse quintal, mas eles não se sabem inconclusos no caso da gente a gente assumiu a inconclusão e ao assumir a inconclusão a gente é levado a busca seria um absurdo a gente buscar sem esperança. É o seguinte, eu posso até buscar e não encontrar, mas a minha esperança faz parte do processo de buscar. Uma busca desesperançada é um contrassenso. Por exemplo nem sempre os educadores foram um dia desafiados para saber-se interminados, entende. Então eu estou escrevendo sobre isso. Um outro saber que eu acho que é uma sabedoria já sem o qual eu acho que não dá para ir a uma escola é o saber de que mudar é difícil, mas é possível. Quer dizer, como é Ubiratã que tu poderias andarilhar pelo mundo como tu andas na África, na Europa, nos Estados Unidos, discutindo o que é a matemática e discutindo como propor a matemática se tu não estivesse convencido de que um dia pode mudar mas é claro não dava para você sair nem para Campinas está aí o impulso. Esse saber precisa ser discutido não imposto, porque nada disso pode ser imposto, mas posto em cima da mesa para que o jovem que está se formando para ser professor amanhã ele repouse nessa verdade. Eu me movo como professora como professor, porque apesar de saber quão é difícil é mudar, mas é possível pode ser até quem vai mudar o agente da mudança não seja nem se quer a minha geração, mas sem a minha geração a outra não vai mudar. [Entrevistador]: Nós trabalhamos para o outro do futuro que nós já acreditamos que seja possível. [Paulo Freire]: Exato. Então, um outro saber por exemplo, que eu preciso saber é que ensinar não é transferir conhecimento, transferir conteúdo, é lutar para com os alunos criar as condições em que o conhecimento seja construído, seja reconstruído. Quer dizer, isso para mim que é ensinar e quando eu não estiver convencido disso enquanto eu estiver convencido pelo contrário de que ensinar é chegar as nove da manhã e despeja um discurso transferidor de objetos que são apenas perfis de objetos que são os conteúdos, então eu não sei o que é ensinar, eu não sei o que é aprender. Por exemplo é preciso que eu como professor saiba que do ponto de vista histórico o homem e a mulher primeiro aprenderam para depois ensinar. Quer dizer, o aprender precedeu sempre o ensinar. O que está acontecendo na sistemática da escola? O ensinar virou o mais importante e o aprender foi burocratizado com a burocratização do ensinar. Quer dizer, na verdade o que eu não posso deixar de conhecer ou reconhecer é que os dois em processo contraditório dialético em que quanto melhor eu aprendo tanto melhor eu posso ensinar e quanto mais eu ensinar tanto melhor se pode aprender, mas foi aprendendo socialmente e historicamente as mulheres e os homens descobriram no ato de aprender diluída a prática de ensinar. Um dia na história dos homens e das mulheres e um dia mais ou menos recente descobriram que porque aprenderam era possível ensinar e aí se sistematizou o trabalho do ensino. A gente perdeu essa noção na história e inverteu os papéis. Eu estou escrevendo sobre isso também. Quer dizer, é preciso recuperar historicamente o grande papel do aprender, sem que isso signifique nenhuma diminuição ao ensinar.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Ensino (religioso)'] ); 
		\App\Trecho::create([
			"verbete_id" => 149,
			"titulo_video" => "Paulo Freire at Highlander: A Conversation with Myles Horton",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h14min50s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1883", 
			"texto" => "É uma tremenda contradição aceitar o ensinar sobre nosso Cristo sem por isso em prática. O único modo que eu tenho de ler sobre Cristo é experienciar Cristo, não apenas memorizando os versículos. E experienciar Cristo significa lutar contra injustiça. Para mim é impossível amar sem isto, é impossível caridade antes de justiça. Primeiro preciso ser justo e depois disso eu posso ter caridade ou não é outro capítulo. Eu não posso entender o cristão que discrimina os outros. Racismo, xenofobia, dominação, não tem nada a ver, para mim, com o cristão de posição séria. O que coincide, pelo meu ponto de vista, com uma séria e profunda revolução em nossas posições.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Envelhecimento'] ); 
		\App\Trecho::create([
			"verbete_id" => 150,
			"titulo_video" => "Arquivo N  Paulo Freire, o Educador",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h15min40s a 00h16min32s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1888", 
			"texto" => "Umas das coisas que eu acho que precisa fazer são não ficar velho nunca, quer dizer, é não deixar envelhecer o menino que a gente foi, ou a menina que a gente foi nesse sentido eu sou e não sou novo, eu sou um velho que se renova. Eu digo envelhecer no sentido de esclerosar, no sentido, por exemplo, de passar a admitir que só o bom foi o do seu tempo de jovem que as coisas boas foram as de ontem. Não para mim a coisa boa, o momento bom é o que eu vivo hoje é nessa acepção que te falo, de que busco sempre guardar em mim, o menino e o adolescente que eu fui, sempre inserido na busca de algo novo, de algo diferente.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Epitáfio'] ); 
		\App\Trecho::create([
			"verbete_id" => 151,
			"titulo_video" => "Arquivo N  Paulo Freire, o Educador",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h23min14s a 00h23min28s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1888", 
			"texto" => "Eu gostaria de ser lembrado como um sujeito que amou profundamente o mundo e as pessoas, os bichos, as árvores, as águas, a vida.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Erro'] ); 
		\App\Trecho::create([
			"verbete_id" => 152,
			"titulo_video" => "Aula de encerramento com Paulo Freire e Moacir Gadotti na FE-USP",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h39min03s a 00h39min27s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1935", 
			"texto" => "Errar faz parte do processo de conhecer e, portanto, errar não é desdenhar. Errar não é pecado, é testemunho que você procura. Tu errou, erradamente cometeu o erro, mas porque errou pode consertar depois.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola'] ); 
		\App\Trecho::create([
			"verbete_id" => 153,
			"titulo_video" => "Debate: o futuro da escola",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h22min06s a 00h22min26s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1896", 
			"texto" => "Para mim a questão não é acabar com ela [escola], mas é mudá-la completamente. É radicalmente fazer que nasça dela do corpo que não mais corresponde à verdade tecnológica do mundo, um novo ser tão atual quanto à tecnologia.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 153,
			"titulo_video" => "Debate: o futuro da escola",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h22min29s a 00h22min53s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1896", 
			"texto" => "Eu continuo lutando no sentido de pôr a escola à altura do seu tempo. E pôr a escola na altura do seu tempo não é soterrá-la, mas é refazê-la.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 153,
			"titulo_video" => "Conversando sobre Educação e Liberdade com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h05min35s a 00h05min53s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3216", 
			"texto" => "Mudar a cara da escola municipal, quer dizer, de fazê-la uma escola não o apenas mais alegre, não apenas mais contente, mas uma escola séria, uma escola corajosa, uma escola competente.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 153,
			"titulo_video" => "Conferência do professor Paulo Freire e entrega do título de cidadão uberabense",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h54min39s a 01h55min13s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1893", 
			"texto" => "Para mim, a solução não é acabar com escola, é melhorar a escola. E tem gente que acha que ela deve acabar mesmo, por exemplo, o Seymour Papert (...) ele acha que com a escola não dá. Eu acho que sem escola não dá, mas com a que está aí também não dá. O meu problema é como brigar pra reconstruir a escola e não acabar com a escola.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 153,
			"titulo_video" => "Seymour Papert e Paulo Freire: uma conversa sobre informática, ensino e aprendizagem",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h19min04s a 00h20min21s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/395", 
			"texto" => "Quer dizer, eu constato que a escola está péssima, mas eu não constato que a escola esteja desaparecendo e vai desaparecer! Por isso então eu apelo para que nós os que escapamos da morte da escola e que estamos sobreviventes aqui modifiquemos a escola. Para mim a questão não é acabar com ela, mas é mudá-la completamente. É radicalmente fazer que nasça dela, de um corpo que não mais corresponde à verdade tecnológica do mundo um novo ser, tão atual quanto a tecnologia, quer dizer, eu continuo lutando no sentido de pôr a escola a altura do seu tempo. E pôr a escola a altura do seu tempo não é soterrá-la, sepultá-la, mas é refazê-la.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 153,
			"titulo_video" => "Escola Cidadã",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h00min57s a 00h01min30s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1906", 
			"texto" => "Eu acho que a grande tarefa da gente é fazer dessa escola burocrática, dessa escola que não é feliz, dessa escola triste, autoritária e incompetente, uma escola que, problematizando o amanhã, trabalhe para que a criança descubra a necessidade de transformar o hoje. Quer dizer, uma escola que vire alegre, que acabe com a tristeza, apesar da dor.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 153,
			"titulo_video" => "Escola Cidadã",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h07min51s a 00h08min50s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1906", 
			"texto" => "Tudo que a gente puder fazer no sentido de abrir mais a escola, no sentido de provocar, pedir, convocar, desafiar estudantes, merendeiras, zeladores, vigias, diretores de escola, coordenadores pedagógicos, NAES [Núcleo de Ação Educativa], quer dizer, médico, dentista, aluno, vizinho da escola, quer dizer, tudo que a gente puder fazer no sentido de convocar os que vivem entorno da escola e dentro da escola, no sentido de participarem, de tomarem um pouco o destino da escola na mão também. Tudo o que a gente puder fazer nesse sentido, é pouco, ainda, considerando o trabalho imenso que se põe diante de nós, que é o de assumir esse país democraticamente.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 153,
			"titulo_video" => "Escola Pública",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h08min57s a 00h09min59s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3220", 
			"texto" => "A gente quer uma escola democrática, quer dizer, o que é que a gente quer dizer com essa escola democrática, a gente quer uma escola que supere as discriminações, a discriminação racial, discriminação sexual, em que índio não é discriminado, em que preto não é discriminado, em que pobre não é discriminado. Nós queremos uma escola democrática, uma escola aberta, uma escola abrindo-se, uma escola de gente, nós queremos uma escola também feliz, mas muita gente diz a mim: mas Paulo como é que você pode querer uma escola feliz cheia de goteira, cheia de buraco. Evidentemente o fato de que haja tantas escolas estragadas não significa que deixemos de sonhar com uma escola melhor, com uma escola mais justa. E a briga nossa então é fazer essa escola.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola brasileira'] ); 
		\App\Trecho::create([
			"verbete_id" => 154,
			"titulo_video" => "Conversando com Paulo Freire sobre Arte e Educação aos 21 anos da Pedagogia do Oprimido",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h27min17s a 00h27min58s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1882", 
			"texto" => "A escola brasileira indiscutivelmente vem sendo uma escola autoritária e, quase como consequência, vem sendo uma escola elitista, uma escola discursiva, uma escola que faz discursos em torno do perfil dos conteúdos, eu não sei se fica claro isso. Quer dizer, a gente não está ensinando propriamente o conteúdo, a gente tá discursando sobre o perfil dos conteúdos e exigindo que os meninos, os jovens memorizem mecanicistamente o perfil do conteúdo, que é o discurso nosso.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola Cidadã'] ); 
		\App\Trecho::create([
			"verbete_id" => 155,
			"titulo_video" => "Escola Cidadã",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h17min04s a 00h18min04s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1906", 
			"texto" => "A escola cidadã é, no meu entender, é aquela que se assume como um centro de direitos e um centro de deveres. A formação que se dá dentro do espaço e do tempo que caracterizam a escola cidadã é uma formação para a cidadania. Quer dizer, a escola cidadã é, então, a escola que viabiliza a cidadania de quem está nela e de quem vem a ela. Porque a escola cidadã não pode ser uma escola cidadã em si para si, ela é cidadã na medida mesma também em que ela briga pela cidadania, pelo exercício e pela fabricação da cidadania de quem vem para ela, de quem usa o seu espaço.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 155,
			"titulo_video" => "Escola Cidadã",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h18min25s a 00h19min27s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1906", 
			"texto" => "Então, a escola cidadã é uma escola coerente com a liberdade, é coerente com seu discurso formador, com seu discurso libertador. Em outras palavras, a escola cidadã é aquela, que brigando para ser ela mesma, viabiliza ou luta para que os educandos e as educadores também sejam eles mesmos. E, como ninguém pode ser só, a escola cidadã é uma escola de comunidade, quer dizer, é uma escola de companheirismo, é uma escola de produção comum do saber e da liberdade, mas é uma escola que não pode ser jamais silenciosa e nem jamais autoritária. Quer dizer, uma escola que vive a experiência tensa da democracia que, em outras palavras, implica a experiência tensa, contraditória e permanente entre autoridades e liberdade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (autoridade)'] ); 
		\App\Trecho::create([
			"verbete_id" => 156,
			"titulo_video" => "II Plenária Pedagógica com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h29min24s a 00h31min44s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3234", 
			"texto" => "Há um possessivismo. Eu não sei se lá na experiência da rede escolar do Estado essa coisa ocorre, mas há sim um possessivismo enorme das direções das escolas com relação à escola mesmo. Quer dizer, a escola vive uma propriedade privada. Mais do que uma propriedade privada, a escola é como se fosse, assim, uma espécie de continuação do ser da diretora e do diretor e, a partir daí, ninguém pode tocar num tijolo dessa escola, porque está ameaçando a propriedade, tá ameaçando o poder, tá ameaçando a paz da diretora ou do diretor e isso tá errado, puxa, não é possível! Você imagine que se o diretor ficasse aqui agora preocupado se a gente tá pisando bem nesse negócio aí pra não estragar e advertindo: Olha, nivele um pouco o piso. Não encoste na parede!. É bem enfermo. [Risos] Daqui a pouco a gente precisa de uma psicoterapia especificada para diretor de escola [Aplausos]. Agora vê, o que a gente tá querendo quando a gente pensa em mudar a escola. A gente quer uma escola que se funde na autoridade que, por sua vez, nunca seja autoritária. Uma escola que querendo bem a liberdade, rejeita a licenciosidade. Uma escola que, sendo democrática, não é democratista. Porque isto, que é outra coisa tá acontecendo também entre nós. Está havendo uma incompreensão do que é a participação, do que é um comportamento democrático. Então, e é preciso outros limites também. E a autoridade sim, se obriga a estabelecer limites.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (comunidade)'] ); 
		\App\Trecho::create([
			"verbete_id" => 157,
			"titulo_video" => "Conversando sobre Educação e Liberdade com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h06min24s a 00h07min07s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3216", 
			"texto" => "A democratização da escola é uma tarefa que ultrapassa grupos pequenos por mais valorosos que eles sejam. A democratização da escola depende de todos aqueles, de todas aquelas, primeiro, que fazem a escola por dentro. Mas a democratização da escola depende também dos entornos da escola, quer dizer, depende da comunidade local em que a escola se situa, depende da vizinhança, depende da participação efetiva de todos os que estão dentro da escola e fora da escola.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (conceito)'] ); 
		\App\Trecho::create([
			"verbete_id" => 158,
			"titulo_video" => "Debate: o futuro da escola",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h41min28s a 00h42min00s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1896", 
			"texto" => "Em primeiro lugar, o meu problema não é acabar, não é preservar o nome escola. Amanhã pode se chamar Memória: Aonde vás? - Vou à Memória, estar indo à escola. Quer dizer, não interessa o nome, para mim interessa um determinado espaço e tempo onde determinadas tarefas se cumprem sociais e não só individuais, históricas, políticas etc.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (conhecimento)'] ); 
		\App\Trecho::create([
			"verbete_id" => 159,
			"titulo_video" => "Debate: o futuro da escola",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h42min52s a 00h43min53s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1896", 
			"texto" => "Uma das razões da criação da escola, que ficou muito claro só muito recentemente, é a de que, na experiência do primeiro estágio, (...) e isso é um dos pecados dela [escola], você não chega (...) a fazer a sistemática do conhecimento que assegure a continuidade do processo da busca do novo conhecimento. Quer dizer, uma das tarefas centrais da escola é proporcionar o conhecimento do conhecimento já existente e a produção do conhecimento ainda não existente.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (contextos)'] ); 
		\App\Trecho::create([
			"verbete_id" => 160,
			"titulo_video" => "Conversando sobre Educação e Liberdade com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h09min13s a 00h09min35s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3216", 
			"texto" => "A escola não foi feita pra se isolar dentro de si mesma, pra se fechar, mas para servir, para abrir-se como um contexto produtor de conhecimento como um contexto produtor de alegria como um contexto criador, um contexto desafiador.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (curiosidade)'] ); 
		\App\Trecho::create([
			"verbete_id" => 161,
			"titulo_video" => "Conferência do professor Paulo Freire e entrega do título de cidadão uberabense",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h56min33s a 01h56min58s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1893", 
			"texto" => "Eu acho que o que a gente tem que fazer é tentar refazer a escola, obedecendo tanto quanto possível esse anseio de criação, de que a curiosidade é um marco absolutamente necessário.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (democracia)'] ); 
		\App\Trecho::create([
			"verbete_id" => 162,
			"titulo_video" => "Conversando sobre Educação e Liberdade com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h08min14s a 00h08min46s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3216", 
			"texto" => "Só se democratiza a escola quando professoras, diretoras, zeladoras, vigias, merendeiras, coordenadoras pedagógicas, alunos, alunas, pais, mães, vizinhos, quando toda comunidade assume a escola como algo seu. Aí, então, uma das repercussões dessa democracia na escola vai ser o respeito a escola, ao prédio.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (democratização)'] ); 
		\App\Trecho::create([
			"verbete_id" => 163,
			"titulo_video" => "Conversando sobre Educação e Liberdade com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h10min17s a 00h11min02s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3216", 
			"texto" => "Ao falarmos da democratização da escola estaremos falando necessariamente também em novas relações entre a direção da escola, as professoras, os que fazem a escola nos diferentes níveis, os alunos. Estaremos falando, necessariamente, também uma compreensão diferente do processo de ensinar, do processo de aprender, do processo de conhecer. Mas estaremos, sobretudo, falando na relação tensa entre a autoridade e a liberdade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (sonho)'] ); 
		\App\Trecho::create([
			"verbete_id" => 164,
			"titulo_video" => "Paulo Freire: o revolucionário educador (Programa 1 e 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h10min26s a 00h10min39s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1946", 
			"texto" => "Então, a escola de que eu sonhava era uma escola de alegria, uma escola de festa, mas também, e necessariamente, uma escola de rigor, de seriedade científica etc.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (esperança)'] ); 
		\App\Trecho::create([
			"verbete_id" => 165,
			"titulo_video" => "Conversando sobre Educação e Liberdade com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h20min01s a 00h20min26s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3216", 
			"texto" => "O que é importante é que continuemos otimistas, é que acreditamos em nós mesmos, para que possamos fazer a mudança e as mudanças que este país precisa. Lutemos pela escola pública, pela escola pública competente, pela escola pública séria, pela escola pública democrática.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (evasão)'] ); 
		\App\Trecho::create([
			"verbete_id" => 166,
			"titulo_video" => "II Plenária Pedagógica com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h04min11s a 01h06min44s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3234", 
			"texto" => "Fui para o primeiro ano do ginásio com dezesseis anos de idade e escrevi um bocado de coisa, inclusive, até não precisei de nenhum nome das ilhas que me obrigaram a decorar, parece que eram catorze ilhas. As ilhas, o nome dos arquipélagos. Então, mas há uns que ficam, há uns que conseguem e se alfabetizam de qualquer jeito, conseguem e ficam quando chegam da terceira para quarta aí a escola diz: Chegou até aqui, né, seu arrogante? E rua com eles. E aí os especialistas, que são necessários, aparecem para explicar o fenômeno e chamam isso de evasão escolar. E isso é expulsão escolar, não evasão escolar. Falam em evasão como se os meninos fizessem um congresso com os garotos, mas um congresso daqueles que sabem e depois decidem que vão se evadir da escola. Não, eles são expulsos da escola, a escola virou incompetente para fazê-los permanentes na escola. Porque que é que os meninos chamados bem-nascidos ficam? Ficam porque eles têm todo um condicionamento favorável, além das aulas privadas que podem ter, e estão nas particulares que fazem um outro tipo de trabalho. Aí você tem a ideologia dominante, autoritária e elitista cortando o trabalho da escola. No momento em que você chega e quer mudar a cara da escola, você teria duas hipóteses, a primeira era fazer um decreto dizendo De hoje em diante, todo mundo é democrático e não é mais elitista, acabou o autoritarismo. Isso simplesmente não ocorre, não acontece. Quer dizer, isso é um trabalho de convencimento, é um trabalho científico, naturalmente, implica uma capacitação científica da nossa parte, nós precisamos saber o que estamos dizendo, e sabemos que precisamos defender o que estamos dizendo cientificamente. Mas isso é um trabalho, é um trabalho quase de conversão, é preciso que se convertam as pessoas a essas coisas óbvias, que os meninos populares também aprendem.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (ideologia)'] ); 
		\App\Trecho::create([
			"verbete_id" => 167,
			"titulo_video" => "II Plenária Pedagógica com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h21min45s a 00h23min27S", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3234", 
			"texto" => "Acontece que uma das coisas que a gente deve mudar na cara da escola de hoje é exatamente a ideologia autoritária que corta a educação brasileira toda e a qual está ligada, tremendamente ligada, à ideologia elitista que a gente encontra nas escolas nossas. Um subsistema educacional brasileiro, não apenas nas escolas do município de São Paulo, na Educação Brasileira. Eu acho que essas duas ideologias que se entrecruzam são básicas para a gente compreender como se comporta a Educação Brasileira, uma educação mista e uma educação autoritária. Então, o que a gente tá querendo é ver se a gente confronta essas ideologias, reconhecendo o poder das ideologias e isso implica o trabalho científico, um trabalho ideológico, um trabalho político, e um trabalho artístico também. Implica um trabalho ético também. Implica uma aventura, implica o gosto do risco. Sem risco, sem aventura, sem a coragem de expor-se, ninguém muda coisa nenhuma, nem uma cadeira dentro de casa. Porque tem medo que a posição da cadeira vá ser considerada feia por outra pessoa que chega, então termina não fazendo nada.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 167,
			"titulo_video" => "II Plenária Pedagógica com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h57min13s a 00h57min35s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3234", 
			"texto" => "Para mim, o maior obstáculo que nós temos, a maior dificuldade que nós temos para mudar a cara da escola, reformular o conteúdo, reorientar a política educacional é exatamente a ideologia autoritária.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (ideologia dominante)'] ); 
		\App\Trecho::create([
			"verbete_id" => 168,
			"titulo_video" => "Debate: o futuro da escola",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h40min03s a 00h40min44s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1896", 
			"texto" => "Eu sempre procurei ver o outro ângulo da reprodutividade da escola. A escola tendo como tarefa a reprodução da ideologia dominante. E o outro lado, que até chego numa conversa mais dialética, menos mecanicista é exatamente o lado daqueles e daquelas que se dão uma tarefa. Uma tarefa de não reproduzir uma ideologia dominante. É a mesma briga de quem quer mudar a política geral da sociedade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (laica)'] ); 
		\App\Trecho::create([
			"verbete_id" => 169,
			"titulo_video" => "Aula de encerramento com Paulo Freire e Moacir Gadotti na FE-USP",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h17min57s a 01h18min18s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1935", 
			"texto" => "Esse negócio de dizer simplesmente que burocraticamente não, a escola é laica! Não é democrático porque o mundo não é laico, o mundo inteiro não é laico, então a escola não pode ser exclusivamente laica. A escola representa um determinado clima da sociedade que não é laica.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (memorística)'] ); 
		\App\Trecho::create([
			"verbete_id" => 170,
			"titulo_video" => "Escola Pública",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h13min43s a 00h14min18s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3220", 
			"texto" => "Nós queremos então uma escola em que se ensine com gosto, e em que se aprenda com criticidade, quer dizer, nós não queremos uma escola memorística, em que os meninos decorem mecanicistamente as lições que a gente ensina, quer dizer, uma escola em que as crianças possam ir apreendendo a razão de ser, dos conteúdos que são ensinados a ela, e não memorizem mecanicistamente a descrição.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola Nova'] ); 
		\App\Trecho::create([
			"verbete_id" => 171,
			"titulo_video" => "Paulo Freire e Myles Horton no Núcleo de Estudos de Educação Comparada da PUC-SP",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h25min05s a 00h25min43s (LADO B)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3245", 
			"texto" => "Esse amplo movimento que não pode ser reduzido a uma coisa, a escola nova não é uma singularidade, é uma pluralidade em que a gente encontra desde as mais ingênuas posturas diante do mundo, diante do aluno, da compreensão da relação educador-educando, até posturas valentes, corajosas, radicais como a do Ferre o espanhol.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 171,
			"titulo_video" => "Paulo Freire e Myles Horton no Núcleo de Estudos de Educação Comparada da PUC-SP",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h32min36s a 00h33min06s (LADO B)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3245", 
			"texto" => "Então você vê que nem tudo que nasce soprado por alguns desafios do chamado movimento escola nova é burguês e reacionário, quer dizer, é isso que eu acho que nós estudantes e intelectuais sérios precisamos ver é disso que precisamos estar de olhos abertos inclusive para poder entender a história.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (mudança)'] ); 
		\App\Trecho::create([
			"verbete_id" => 172,
			"titulo_video" => "Conversando com Paulo Freire sobre Arte e Educação aos 21 anos da Pedagogia do Oprimido",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h26min14s a 00h27min06s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1882", 
			"texto" => "Enquanto educadores temos, às vezes, um discurso democrático. Portanto, falamos, por exemplo, em mudar a cara da escola e quando a gente fala em mudar a cara da escola é porque a cara atual da escola não nos alegra ou não nos satisfaz, se não, não tinha que mudar a cara. Ninguém muda sua cara e procura o cirurgião para mudar a cara se estiver contente com ela. E também, portanto, mudar a cara significa não concordar com a cara atual e ter um sonho de cara nova. Quer dizer, quando a gente pensar em mudar a cara da escola a gente pensa em mudar o que ela está sendo e ter um certo sonho, um certo desenho de uma nova escola.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola pública'] ); 
		\App\Trecho::create([
			"verbete_id" => 173,
			"titulo_video" => "Aula com Paulo Freire sobre seus planos no curso de educação comparada e para onde vai a educação?",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h21min14s a 00h22min05s (LADO B)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3275", 
			"texto" => "Procurando fazer da escola pública e na escola pública uma escola popular. Realmente naquele sentido que Gadotti sublinhava ontem, quer dizer, é uma escola pública não somente porque é do município, mas porque dentro dela o interesse político, a direção, a direcionalidade da prática estam sendo realmente em função dos interesses das classes populares. Então, é bacana, por exemplo, discutir com ela o que está significando lá o processo de formação permanente da educadora.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 173,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h04min29s a 00h04min54s (PROGRAMA 2)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "A gente precisa estar ao lado das grandes fatias de massa popular, o povão, nesse país, reivindicando a escola pública. Se você luta politicamente, reivindicando a escola pública ela deixa de ser uma doação como doação ela não vem como diz o camponês que você citou, entende. Agora ela vem sobre pressão.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (preservação)'] ); 
		\App\Trecho::create([
			"verbete_id" => 174,
			"titulo_video" => "Diálogo de Paulo Freire com as crianças sobre sua atuação como Secretário de Educação",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h01min51s a 00h02min50s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1928", 
			"texto" => "O Brasil, minhas amigas e meus amigos, tem um mau hábito que é de ser um país de inaugurações. Quer dizer, a gente inaugura no Brasil até o que não pode ser inaugurado ainda, por isso que se inaugura e reinaugura uma porção de construções, um só edifício é inaugurado e reinaugurado como se fosse inaugurado. Mas se inaugura a escola e se deixa a escola estragar. Eu disse hoje, se eu tiver dinheiro só para preservar a escola ou construir nova escola, eu preservo as escolas que estão aí. Eu faço a manutenção das escolas, mas não construo escolas novas. A não ser... eu só construo se tiver possibilidade de consertar as escolas.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola radiofônica'] ); 
		\App\Trecho::create([
			"verbete_id" => 175,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h16min10s a 00h19min56s (PROGRAMA 9)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "Quando me punha diante da experiência da escola radiofônica estava implícito, então, ou implícita na minha postura uma crítica a experiência mais geral, menos bem compreendida, do papel da escola radiofônica. Vou explicar. É que, de maneira geral, a escola radiofônica funcionava com um locutor que comandava da rádio, como a gente está aqui agora, uns 100 números de recipientes. Quer dizer, havia espalhado numa área rural, por exemplo, vamos admitir 150 monitores. Cada monitor com vinte, trinta com seu grupo e um rádio cativo. Então, cabia ao locutor dirigente comandar a tarefa desde o começo até o fim, dizia companheiro monitor venha até ao quadro negro escreva aí isso, aquilo outro. Então a minha tese era a seguinte, é que o próprio testemunho do educador ao educando era um testemunho de que era guiado e não de quem criava. Então minha proposta se opunha a isso. Foi com esse estado de espírito, veja bem, eu nunca assumi, porém, mesmo quando ainda eu não conhecia mais de perto o MEB, eu nunca assumi uma posição contra ao MEB, entende. Porque eu, inclusive, não costumo fazer isso. Eu fundamento a razão de estar contra, mas eu tinha minhas divergências, isso eu acho formidável. Mas, por outro lado, também, eu achava que uma das responsabilidades minhas e dos outros era a de ver se seria ou não possível. Eu achava que seria possível. Você minimizar ou diminuir o caráter teleguiado, se eu posso dizer assim, a passividade que estava implícita na escola radiofônica, no sentido de você aproveitar toda uma infraestrutura que estava feita já. Quer dizer, me parecia um absurdo que se dissesse, de repente, não, esse negócio de escola radiofônica não tem sentido, sobretudo, porque tinha sentido mesmo e que tinha muita gente aprendendo a ler, sobretudo, porque a escola radiofônica poderia alcançar áreas que o educador ou outro comum não poderia alcançar por n razões era importante que se mantivesse a estrutura. Foi com esse estado de espírito que eu fui um dia no Recife procurado por um homem extraordinário que lamentavelmente morreu, que foi o bispo de Aracaju Dom Távora e ele era, na verdade, na Comissão Nacional dos Bispos do Brasil (CNBB), ele era pelo MEB. E, então, conversamos muito. Eu disse, Dom Távora eu não tenho dúvida nenhuma de que é possível melhorar isso, diminuir a passividade e ao mesmo tempo, então, preservar a estrutura que seria um crime, botaria isso a perder .", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (realidade)'] ); 
		\App\Trecho::create([
			"verbete_id" => 176,
			"titulo_video" => "Aprendendo didática com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h21min27s a 00h22min00s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1887", 
			"texto" => "A escola não é um parêntese da realidade social e histórica. Na geografia onde ela está, quer dizer, a escola está sendo penetrada pela própria postura e pela apreensão, pelos gostos de classe, por exemplo, da professora. E pelos gostos de classe, e pelas desconfianças, por exemplo, e aspirações dos educandos.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (manha da classe trabalhadora)'] ); 
		\App\Trecho::create([
			"verbete_id" => 177,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h20min15s a 00h23min09s (PROGRAMA 11)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "A escola com a qual eu sonho precisa, de um lado, do saber, que está gerando-se na prática do saber popular, que está gerando no campo, por exemplo, na periferia das cidades grandes. Precisa desse saber que nasce das manhas que os oprimidos têm que ter para pôde continuar vivendo. Se os oprimidos não virarem manhosos, inclusive, do ponto de vista biológico, do ponto de vista físico do corpo. Você já imaginou o corpo de oprimido que não fique manhoso como é que aguenta dormir na lama ou perto da lama? como é que um corpo de oprimido que não se imunize, que não fique manhoso, aguenta muriçocas aos montes? E o povão que tá lá aos montes do Nordeste sendo picado de mutuca, de tudo isso que tem por aí e o corpo vai absorvendo tudo isso? Quer dizer, isso que eu chamo de manha e a manha do oprimido é a manha que se dá no corpo ao nível da biologia, da fisiologia, é a manha que se dá ao nível da psicologia também, é a manha que se dá ao nível da cultura de modo geral. É preciso, então, que essa escola com a qual eu sonho precisa conhecer essas manhas, que ao mesmo tempo, são saberes que geram saberes, mas, por outro lado, não podem proceder do saber que a academia também cria, que a academia também gera, que à ciência, que é saber científico. Não podem proceder da formação mais rigorosa, mais precisa, inclusive, dos meninos dos mangues. Quer dizer, veja bem, os meninos dos mangues, os meninos populares, os meninos discriminados, precisam também desse saber mais rigoroso, precisam aprender matemática, precisam aprender biologia, precisam aprender tudo que os meninos ricos também aprendem. Há quem pense, por exemplo, de um ponto de vista reacionário, obviamente, que você pode fazer escolas de pobres, escolas de ricos. E a escola para os pobres seria exatamente aquela escola de meias verdades. Isso a classe dominante faz. Agora, eu não, eu acho que a criança popular tem o direito de saber.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (sonho)'] ); 
		\App\Trecho::create([
			"verbete_id" => 178,
			"titulo_video" => "Arquivo N  Paulo Freire, o Educador",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h14min08s a 00h14min21s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1888", 
			"texto" => "A escola com que eu sonhava era uma escola de alegria, uma escola de festa, mas também, e necessariamente, uma escola de rigor, de seriedade científica, etc.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (tecnologia)'] ); 
		\App\Trecho::create([
			"verbete_id" => 179,
			"titulo_video" => "Paulo Freire Especial  Globo Ciência (Programa 607)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h28min56s a 00h30min20s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1930", 
			"texto" => "Eu acho que a escola tá longe de tudo isso e precisa estar perto, e vejam bem eu não tenho dúvida nenhuma de que é possível atualizar muito mais a escola mesmo até antes de a gente poder usar instrumentos tão altamente tecnológicos como esses. Eu acho que uma das coisas que estão faltando a educação brasileira é também de um lado aquele descaso pela curiosidade epistemológica, mas do outro é o descaso pela criatividade das pessoas. Quer dizer, essa mania, por exemplo, muito autoritária de fundando-se no despreparo do professor preparar módulos, preparar pacotes de receitas para o educador seguir exatamente o que uma equipe de inteligentes, sábios e iluminados faz do gabinete a milhares de quilômetros do contexto do professor isso é um desrespeito ao professor. Veja bem, eu não estou condenando materiais que ajudem o professor a se tornar melhor professor, não, isso a gente tem que ter, mas o que eu acho é que isso só funciona na medida em que eu exercito a curiosidade crítica do educador.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Escola (transformação)'] ); 
		\App\Trecho::create([
			"verbete_id" => 180,
			"titulo_video" => "Aula com Paulo Freire sobre seus planos no curso de educação comparada e para onde vai a educação?",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h41min46s a 00h43min53s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3275", 
			"texto" => "Eu acho que como eixo de uma educação que se oriente nesse sentido que é seu, que é meu, que é nosso, uma educação inclusive uma escola pública que esteja a serviço da transformação, uma escola que saiba que não é a chave da transformação, mas que sabe também que a transformação passa por ela. Isso é dialético, não dá para entender se aristotelicamente, não dá para entender cartesianamente, só entende na contradição disso, entendeu? Ela não é a chave, mas passa por ela a chave. Eu acho que essa escola tem que pensar necessariamente no permanente processo de saber que sabe, saber que pode saber, saber o que sabe, saber melhor o que sabe, é claro estou me referindo ao educando, saber o que sabe não é um saber individualmente criado, mas socialmente elaborado. Mas saber que no processo social de saber há uma dimensão individual de que ninguém foge. Não é possível, tu tens a tua forma própria de saber social e essa dimensão de ti é exatamente essa dimensão que faz com tu seja tu, única no mundo inteiro, não tem outra, só tem você mesmo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Esperança'] ); 
		\App\Trecho::create([
			"verbete_id" => 181,
			"titulo_video" => "Discurso de Paulo Freire no Teatro da Universidade Católica (TUCA) da PUC-SP ao retornar do exílio",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h20min28s a 00h21min10s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3243", 
			"texto" => "Eu aprendi também a esperar no afã e não na pura espera. Porque a espera que se dá na pura espera, é uma espera sem esperança. A espera só é esperançosa, quando ela se dá na prática, através da qual se busca o esperado.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Esperança (busca)'] ); 
		\App\Trecho::create([
			"verbete_id" => 182,
			"titulo_video" => "Aula inaugural do Mestrado em Educação da Universidade de Juiz de Fora realizada por Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h40min35s a 00h41min30s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1911", 
			"texto" => "A esperança não é a expressão de uma necessidade, ou de um desejo, ou uma necessidade do homem, da mulher e dos povos, em si um certo gosto de esperança, mas a esperança faz parte da natureza socialmente construindo-se historicamente, construindo-se no ser o humano. Seria um disparate, se inconcluso e inserido no processo de busca permanente o ser humano fizesse a busca sem esperança. É possível até que não ache nunca o que busca, mas é a busca em si mesma que gera a esperança.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Esperança (crítica)'] ); 
		\App\Trecho::create([
			"verbete_id" => 183,
			"titulo_video" => "Programa de TV sobre os títulos recebidos por Paulo Freire em Juiz de Fora",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h02min02s a 00h02min50s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3221", 
			"texto" => "Isso me dá a esperança da minha briga e essa esperança tem que ser uma esperança crítica, uma esperança que tem um fundamento sério e isso não significa, por exemplo, que eu esteja absolutamente convencido de que, aos 75 anos, eu ainda vou ver daqui a vinte anos ou trinta anos as mudanças radicais no Brasil, não eu não vou ver, mas ao mesmo tempo em que eu tenho a certeza de que eu não vou possivelmente participar de algumas mudanças pelas quais eu me bato desde que eu tinha vinte anos eu estou certo, porém, de que a vida da sociedade do meu país não se acaba com a minha morte.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Esperança (mundo)'] ); 
		\App\Trecho::create([
			"verbete_id" => 184,
			"titulo_video" => "Entrevista de Paulo Freire no Programa Caminhos da Rede Vida",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h09min50s a 00h11min20s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1923", 
			"texto" => "Eu acho que não é só apenas possível, mas é preciso. Esses exemplos que Vera agora enfatizou de acordou com o que ela ouviu ontem do especialista, esses exemplos que não são singulares, que eles se pluralizam cada vez mais e repetem. Esses exemplos que são de um lado a morte, também, ou a tentativa da morte da esperança, mas do outro, são um desafio para que a esperança não morra. Se nós cruzarmos os braços diante dessas barbaridades e dissermos que não há mais o que fazer, então nos entregamos definitivamente. E eu te diria que a minha convicção é que homens e mulheres não vieram ao mundo para assistir o que ocorre, viemos ao mundo para mudá-lo. Quer dizer, eu não estou no mundo simplesmente para me ajustar às feiuras do mundo, eu estou no mundo, inclusive para quando me ajusto a um determinado momento da realidade, eu me ajustou para poder intervir na realidade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Estudar (conceito)'] ); 
		\App\Trecho::create([
			"verbete_id" => 185,
			"titulo_video" => "Paulo Freire e Myles Horton no Núcleo de Estudos de Educação Comparada da PUC-SP",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h29min58s a 00h30min10s (LADO B)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3245", 
			"texto" => "Estudar é um ato danadamente difícil, mas é tão difícil quanto provocador de gozo e não há gozo sem alegria.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Ética'] ); 
		\App\Trecho::create([
			"verbete_id" => 186,
			"titulo_video" => "Diálogo com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h13min07s a 01h13min32s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3229", 
			"texto" => "Uma das formas de preparar a nova ética, era a de viver com os alunos a experiência, testemunhando a eles a experiência de não estarmos demasiados certos das velhas certezas.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 186,
			"titulo_video" => "A dimensão pedagógica da produção científica",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h08min26s a 01h08min57s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3232", 
			"texto" => "A relação do cientista com o mundo que não é apenas o mundo natural, mas o mundo político, social, histórico etc, é também uma relação ética. Possivelmente, uma das diferenças é que o bicho que a gente virou e o bicho que não virou a gente estão em exatamente em quando a gente virou o bicho que a gente está sendo, a gente virou eticamente quer dizer, a gente inventou a ética sem a qual a gente não pode ser o bicho que a gente é.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 186,
			"titulo_video" => "Entrevista de Paulo Freire concedida a Eitan Bronstein",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h09min46s a 00h10min02s (LADO A)", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3244", 
			"texto" => "Eu não sou contra nenhuma postura ética que pense um pouco diferente de mim. O que eu não entendo é uma ética que não esteja a serviço da humanização do ser humano, não entendo. Eu não vejo ética no racismo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Eticidade (educação)'] ); 
		\App\Trecho::create([
			"verbete_id" => 187,
			"titulo_video" => "Palestra de Paulo Freire no Banco Central",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h54min08s a 00h57min21s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3219", 
			"texto" => "Há uma outra qualidade que eu acho que uma importância enorme, é a qualidade moral de que a prática educativa está impregnada. Quer dizer, é que eu chamo de eticidade da prática educativa, quer dizer, a prática educativa como prática formadora não pode deixar de ser ética. Então, as exigências, eu acho meus amigos e minhas amigas nesse fim de século que a gente está vivendo no mundo todo os desvalores, os descompassos, à negação de princípios, à pulverização de uma ética do ser humano, nunca talvez tenhamos precisado tanto de uma briga pela ética que eu costumo chamar de ética universal do ser humano, do que hoje. Nós estamos hoje sob o comando indiscutivelmente não só no Brasil, mas no mundo, todo nós estamos sob o comando de uma ética menor, de uma ética pequena, de uma ética malvada, estreita que é a ética do mercado. Quer dizer, essa se sobrepõe as bonitezas da vida humana. E é interessante observar que a ética do mercado gera necessariamente uma ideologia capitalista. Eu não sei, por exemplo se dá até para dar nota, contar com o número de vezes que as pessoas me dizem quando eu digo, por exemplo, mas veja rapaz não é possível que a gente chegue no fim do milênio com trinta milhões de brasileiros brasileiras morrendo de fome. E o cara me diz Paulo você tem razão é uma coisa terrível, mas o que fazer, a realidade é assim mesmo. Eu insisto em gritar, não mais nem dizer, que nenhuma realidade é assim mesmo. Nenhuma realidade é inexorável, nenhuma. Quando nós nos curvamos à inexorabilidade de um fato é que estamos submersos já, na ética da independência dos interesses reais dos seres humanos. E eu costumo dizer, e digo nesse nível que terminei agora, eu prefiro ser chamado de idealista e sonhador a me curva a ética do mercado, de jeito nenhum. Nem tão pouco eu aceito nenhum desenvolvimento tecnológico científico que trabalhe contra os interesses dos seres humanos.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Evasão Escolar'] ); 
		\App\Trecho::create([
			"verbete_id" => 188,
			"titulo_video" => "Palestra de Paulo Freire no DESED (Banco do Brasil)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h26min45s a 00h33min19s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1891", 
			"texto" => "Dentro desse futuro e desse presente que a gente teria que, no caso da educação por exemplo indiscutivelmente, pensar na quantidade de educação pública que o país, que o Brasil, que o governo oferece, por isso que eu tô falando em educação pública, a quantidade de educação que o governo oferece à demanda social por educação. Ora, quando a gente sabe, por exemplo, que as estatísticas brasileiras ainda são muito incompletas, mas que há entre seis a oito milhões de Mariazinhas e Pedrinhos brasileiros com uma idade na faixa etária de sete a catorze anos sem ter escolas para ir e que eu até costumo dizer sempre proibidos de ter escola. Quando a gente sabe que nos centros urbanos a luta operária forçou o estado burguês, quando eu digo agora estado burguês é sem nenhuma verborreia, forçou o estado a responder à demanda popular que a classe popular pressionou como resultado da pressão que a classe popular fez, então, muitos meninos proletários entram na escola pública e o que é que acontece com eles? Uma grande parte é expulsa da escola no primeiro e segundo ano e aí a esse fenômeno de expulsão da escola, os especialistas chamam de evasão escolar. Como se os meninos tivessem feito um congresso aqui em Brasília [RISOS] e tivessem decidido que do primeiro para o segundo se evadem.[RISOS] O verbo evadir significa outra coisa, entende? Então, menino não sai porque quer, porque ele decidiu, menino foi expulso porque não aprendeu, por exemplo, porque não se alfabetizou. E não se alfabetizou porque houve incompetência da escola e porque houve ideologia negativa da massa popular no processo de ensinar a língua portuguesa. É isso que se dá. Segundo, uma grande parte dos que entraram, passaram pela alfabetização, mas morrem do terceiro para o quarto em Matemática. E no quinto morrem em Geografia. Isso eu sei por causa dos estudos que estão sendo feitos. Então quando você acompanha uma geração de crianças que se matricularam na escola no ano X, cinco anos depois se vocês forem ver o que foi que chegou ao fim dessa geração é uma coisa, uma quantidade, irrisória. Então, os meninos que entram grande parte são excluídos no primeiro ano, do primeiro para segundo e a outra parte que fica é expulsa mais adiante. E fica então uma minoria que chega ao fim do curso ginasial, na minha época e hoje é - [Terceiros] primeiro grau. - primeiro grau. Vou sempre perguntando a ela [RISOS]. Então... acontece então uma coisa terrível, nesse momento que é que de um lado vão os meninos que puderam estudar. Olha, os meninos ricos estudaram na escola primária paga e chegam aqui com os meninos que chegaram pela escola pública caindo, quando chegam aqui os meninos ricos fazem isso e vão para universidades gratuitas e os pobres fazem isso e vão para universidades pagas. Quer dizer, esse treco é imoral, a solução não é privatizar a educação. Essa mania de privatizar tudo e que não é privatizar. Quer dizer, eles pegam uma coisa pública e transformam em privatização absoluta para eles. Ninguém privatiza o que não dá lucro. É preciso que haja uma reorientação desta política que não pode ser feita se a reorientação se dá apenas na educação. Tem que ser uma reorientação dentro da globalidade a ser reorientada da política; quer dizer, em favor de quem eu administro? E se eu administro em favor de alguém é porque eu estou contra alguém, e não há que ter medo de dizer essas coisas. Quer dizer, mas ser contra não é mandar matar os caras, por exemplo, eu vou seguir um exemplo aqui, em lugar de fazer escola, por exemplo, uma escola a mais numa zona rica de São Paulo que já tem suficiente escola, porque não fazer essa então na zona periférica que não tem? Uma praça pública, vocês já viram, eu pelo menos nunca vi, nem no estrangeiro e nem em canto nenhum. Nenhuma zona popular que tenha jardins de árvores, não sei se em Brasília tem. Agora onde você começa a chegar e vê jardim arborizado e isso aqui você pode dizer nisso aqui mora uns caras mais ou menos. Quer dizer, então em lugar de fazer jardins nas zonas mais bonitas, porque não fazer jardinagem nas zonas desprezadas? Porque não trabalhar com as massas populares lá? Fazer uma educação democrática é eminentemente democrático, uma educação antielitista, uma educação que refaça a compreensão da vida do menino pobre, quer dizer, que os educadores sejam ideológicos e politicamente reformados para saber que a criança que tem fome, tendo dificuldade indiscutível de aprender, não ganha uma inteligência má só porque tem fome. Porque ainda tem essa, esses preconceitos, os meninos chamados carentes. Os carentes afetivos, os carentes físicos, mudam, mudam de inteligência. Na verdade, ninguém nasce inteligente, a gente faz a inteligência. Quer dizer, a gente constrói a inteligência, fábrica a inteligência, melhora a inteligência na medida em que a gente que é inclusive convidado a tratar da inteligência da gente. Isso é o que a escola não faz. Quer dizer, a escola atrofia a capacidade da gente, de modo geral, com exceções.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Exílio (aprendizado)'] ); 
		\App\Trecho::create([
			"verbete_id" => 189,
			"titulo_video" => "Darcy Ribeiro e Paulo Freire  Educadores do Brasil",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h40min15s a 00h41min35s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1914", 
			"texto" => "Este aprendizado da cadeia que em muitos aspectos me preparou para a vida fora do Brasil. Quer dizer, o exílio em muitos sentidos se forjou da cadeia. Diante de um certo problema, em uma certa situação o que você tem que fazer é aprender com as positividades e as negatividades da situação. Eu sempre recusei choramingar, entende. Quer dizer, eu sempre recusei lamentar-me, eu sempre recusei ter pena de mim. Mas procurei sempre aprender do sofrimento, do gozo, de aprender de tudo. Então o exílio foi uma das grandes oportunidades de aprendizado para mim. As diferenças culturais por exemplo, a forma de andar, a forma de dizer bom dia, o gosto da comida. Tudo isso é cultura.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Exílio (cultura)'] ); 
		\App\Trecho::create([
			"verbete_id" => 190,
			"titulo_video" => "Paulo Freire entrevistado no programa 'Matéria Prima' da TV Cultura",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h02min22s a 00h03min48s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3218", 
			"texto" => "Em primeiro lugar que o meu tempo de exílio foi um tempo de intensa aprendizagem, quer dizer eu aprendi muito durante o exílio, mas não é fácil, é uma aprendizagem difícil porque é uma aprendizagem que você faz longe da sua realidade, do seu contexto, longe de sua família de seus amigos, do cheiro do chão, da cor das nuvens, o gosto da comida e não é fácil a gente aguentar essa saudade, mas eu aprendi desde muito cedo no exílio uma coisa fundamental que não é possível fazer juízos de valor para culturas. Cultura você entende, você procura entender, perceber a diferença entre a forma de estar sendo do chileno e a nossa de brasileiro, do genebrino onde morei também, dos Estados Unidos, mas não cabe a gente dizer no Brasil isso é melhor do que aqui, não dá, é simplesmente diferente, não é melhor nem pior.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Fadiga existencial'] ); 
		\App\Trecho::create([
			"verbete_id" => 191,
			"titulo_video" => "Paulo Freire en los 90: Diálogo con Francisco Vío Grossi en Chile",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h10min21s a 00h10min40s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/527", 
			"texto" => "A fadiga existencial que leva ao desespero. Isto é, tu olhas para frente e não vês a frente. Tu não vês mais futuro, tu não vês amanhã. E ao não ter amanhã não há como ter esperança.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Fé'] ); 
		\App\Trecho::create([
			"verbete_id" => 192,
			"titulo_video" => "Entrevista de Paulo Freire no Programa Caminhos da Rede Vida",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h20min17s a 00h21min20s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1923", 
			"texto" => "Eu dizia semana passada a um jornalista que me entrevistava que inclusive em mim a questão da fé, e não propriamente da religiosidade. Eu me considero um homem muito mais de fé do que religioso. Então, quer dizer, para mim, inclusive essa questão, talvez agora o que eu vou dizer não seja humilde, é uma, essa coisa em mim, e não é nem virtuosa, o que eu quero dizer é o seguinte, eu não faço força para ter fé. Eu não me esforço para isso, é claro, eu cuido da minha fé, como eu cuido de uma flor. Eu cuido da minha fé procurando criticar a própria criticidade que pode colocá-la em tela de juízo.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 192,
			"titulo_video" => "Programa 'Clodovil Abre o Jogo' entrevista Paulo Freire e Tatiana Belinky",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h03min52s a 00h04min15s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1915", 
			"texto" => "A minha fé está em mim mesmo, está na minha presença no mundo. Agora se, o senhor quer entrar em mim para saber onde ela anda, não vai dar, porque eu não permito, primeiro que o senhor entre, segundo, que não cabe. Esse tipo de gente eu acho horrível, porque, de modo geral, são pessoas sectárias que não compreendem nem aceitam o diferente.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Felicitação (homenagem)'] ); 
		\App\Trecho::create([
			"verbete_id" => 193,
			"titulo_video" => "Entrega de título Doutor Honoris Causa ao Prof. Paulo Freire pela UFRRJ",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h44min15s a 00h44min51s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1912", 
			"texto" => "Termino dizendo uma coisa também a vocês com muita lealdade, eu já disse antes que estas coisas me alegram, eu tenho o direito de experimentar a alegria em ser homenageado, ninguém pode tirar de mim esse direito, mas eu recuso o direito de ficar besta por causa disso. [Risos] Eu recuso o direito de uma academia dizer a expressão ficar besta, sem ter medo de ter ferido a academia.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Fenômeno vital'] ); 
		\App\Trecho::create([
			"verbete_id" => 194,
			"titulo_video" => "Paulo Freire conversa com estudantes de curso para o magistério",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h12min07s a 00h12min18s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3292", 
			"texto" => "O fenômeno vital é o fenômeno que se constitui na base da correção e da autocorreção, não existe vida sem correção.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Filosofia'] ); 
		\App\Trecho::create([
			"verbete_id" => 195,
			"titulo_video" => "Encontro com Paulo Freire no Ginásio Tesourinha em Porto Alegre",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h40min59s a 00h41min51s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1933", 
			"texto" => "Eu não me conformava e continuo não me conformando com a profunda injustiça que as proibições das classes poderosas impõem as grandes classes populares de não aprender a ler filosofia. Eu acho que isso é uma imoralidade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Força (qualidade)'] ); 
		\App\Trecho::create([
			"verbete_id" => 196,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h12min00s a 00h13min54s (PROGRAMA 3)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "Eu acho que a fortaleza como resposta depende do desafio que eu tenho. O que eu também não gostaria de ser era uma pessoa falsamente forte, tá entendendo. Inautenticamente forte, que quisesse ser forte diante de tudo. Ou ter que ser forte, eu recuso isso. Por exemplo, eu acho que fui relativamente ou suficientemente forte para resistir o tipo de desafio que eu tive quando fui preso. Agora, eu não sei se seria suficientemente forte para resistir ao tipo de tratamento de prisão de companheiros brasileiros que eu conheço e que alguns morreram diante da tortura, por exemplo, entende. Eu não sei bem qual é o meu limite. Eu me sinto forte com a possibilidade de ter querido bem e de querer bem aos meus filhos, as minhas filhas, à minha mulher, me sinto forte quando criei a capacidade de ficar forte, buscando estudar, buscando compreender o que eu não compreendia, saber o que eu não sabia. Me senti forte quando aguentei 16 anos de exílio sem churumingar, sem poder voltar para casa e sem estar me lamentando todo dia. Me senti forte quando aprendi a respeitar as diferenças das culturas por onde andei, a respeitar os outros povos, entende. Agora, no fundo, Toninho, eu acho que ninguém é forte ou é fraco. A gente vira uma coisa ou outra em função das circunstâncias também.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Formação (educando)'] ); 
		\App\Trecho::create([
			"verbete_id" => 197,
			"titulo_video" => "Encontro com Paulo Freire: reflexões sobre a prática educacional",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h02min52s a 00h03min18s (2° ÁUDIO)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3280", 
			"texto" => "Existe hoje uma tendência no mundo de acabar com os sonhos, de acabar com a utopia, acabar com a formação e fazer treinamentos técnicos e treinamento científico dos educandos. Eu acho isso uma violência. A natureza humana se constitui social e historicamente e por isso não é um a priori da história.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Formação (educadores/as)'] ); 
		\App\Trecho::create([
			"verbete_id" => 198,
			"titulo_video" => "Paulo Freire entrevistado no programa 'Matéria Prima' da TV Cultura",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h16min56s a 00h18min34s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3218", 
			"texto" => "Eu acho que a formação nossa, de educadores, deveria ser uma das preocupações centrais da administração pública, mas há entre nós um tal desrespeito pela pessoa, pela figura, pela tarefa do educador e da educadora que a formação é relegada a um plano inferior. Eu vou dizer a vocês uma coisa que é absolutamente verdadeira por exemplo eu, se dependesse de minha opção direta, eu preferiria mil vezes ser professor de uma escola normal, de um organismo como esse a ser professor de cursos universitários mesmo de pós-graduação, por isso que depois que voltei para o Brasil não recusei um convite que me tenha sido feito para falar com moços e moças como vocês que estudam nos cursos de formação. Então a minha resposta em suma pra ti é que sou a favor e até que eu brigo pela formação permanente do educador e pela formação rigorosa dos jovens e das jovens que amanhã assumirão as tarefas de educação ou de educadores de meninos e meninas brasileiros.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 198,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h10min21s a 00h11min10s (PROGRAMA 2)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "É preciso que, na formação, a educadora ganhe uma necessária e indispensável qualificação técnica científica. Quer dizer, que ela se faça realmente competente. Ela tem que conhecer relativamente bem os conteúdos com que ela vai lidar, que vão ficar no meio, entre ela e os alunos. E ela tem que conhecer como vai trabalhar esses conteúdos com as crianças. O que vale dizer que ela tem que conhecer também as crianças. Mas, além disso, ela precisa desenvolver o que eu chamo clareza política da sua própria tarefa.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Formação (permanente)'] ); 
		\App\Trecho::create([
			"verbete_id" => 199,
			"titulo_video" => "Conferência do professor Paulo Freire e entrega do título de cidadão uberabense",
			"tipo_recurso" => "vídeo", 
			"tempo" => "02h37min19s a 02h39min02s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1893", 
			"texto" => "A formação permanente da educadora deve ser muito bem trabalhada e a educadora ou as educadoras devem assumir sua própria formação com absoluta responsabilidade, quer dizer, com a consciência de que é preciso formar-se permanentemente. De que a formação não é uma experiência transitória. É preciso a gente superar a compreensão da formação permanente que, às vezes, a gente faz coincidir com o que se chama de reciclagem da educadora. Eu acho que a formação permanente tem nada a ver com esse conceito mecanicista da reciclagem. Por isso mesmo então a formação permanente, no meu entender, se funda na análise da prática. Quer dizer, é analisando a minha prática com outros que analisam também sua prática que é possível que eu descubra na prática dos outros alguma coisa que ilumine problemas que eu tinha e tenho na minha prática. Quer dizer, é analisando a prática, é discutindo os obstáculos encontrados na prática que eu percebo a teoria da prática.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 199,
			"titulo_video" => "Paulo Freire Especial  Globo Ciência (Programa 607)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h30min27s a 00h30min35s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1930", 
			"texto" => "A formação permanente do educador passa pela reflexão crítica que o educador exerce sobre sua prática.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 199,
			"titulo_video" => "Palestra de Paulo Freire no DESED (Banco do Brasil)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h17min37s a 00h21min11s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1891", 
			"texto" => "E mais uma vez a gente vê, por exemplo, como os governos que a gente tem tido desprezam tanto a formação da professora e a formação do professor. Quer dizer, é uma coisa absurda a realidade brasileira. E o problema da formação do educador que é um problema dos mais importantes que a gente tem é uma coisa que não para nunca, quer dizer, porque ninguém nunca parou, ninguém nunca para a sua formação. A formação é um processo permanente, quer dizer, eu deixo de me formar quando morro, mas enquanto vivo estou bulindo, mexendo, eu estou continuando a me formar. Então a formação não é, por exemplo, a formação do professor se dá antes que ele seja professor, se dá durante o tempo que está sendo professor. Quer dizer, e a sua formação permanente tem que ver com o aprofundamento crítico da análise que ele faça de sua própria prática. Quer dizer, é estudando o que eu faço, é procurando conhecer melhor a razão de ser daquilo que eu faço que eu me preparo melhor para continuar fazendo. Eu não invejo quem seja Ministro da Educação desse país daqui a pouco, porque enfrentar o déficit da quantidade e o déficit da qualidade na educação brasileira é tarefa para negócio de cinquenta, vinte anos, no mínimo, ou trinta. A gente chega ao fim de um século que é milênio com umas estatísticas vergonhosas com relação a isso e ao resto. O Brasil é todo ele um grande problema. Então essa questão ética, eu diria que também se coloca na prática educativa e deveria ser uma exigência a nós próprios. Quer dizer, até que ponto eu teria o direito de enganar o aluno, por exemplo, de mentir. O aluno faz uma pergunta e em lugar de que eu diga a ele: Olha, puxa, eu sinto muito, mas no momento eu não sei responder a tua pergunta, mas eu vou estudar. Eu vou estudar durante essa semana e possivelmente na próxima semana a gente volta a esse tema e eu te digo como é que eu ando no meu estudo. Quer dizer em lugar de dizer isso o professor inventa uma resposta que não tem nada que ver com a pergunta que foi feita. Quer dizer, por quê? Por quê isso? Porque o professor não pode dizer que não sabe, você veja que isso é um mito absolutamente ingênuo e absurdo. Quer dizer, não saber é uma das condições para vir a saber. E não uma condição de vergonha. Quer dizer, errar faz parte do processo de conhecimento e não está fora do processo de conhecimento como um pecado. Um pecado que deve ser punido.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 199,
			"titulo_video" => "Escola Pública",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h20min17s a 00h20min46s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3220", 
			"texto" => "Nós estamos impenhadíssimos no que a gente vem chamando de formação permanente da educadora. Quer dizer, não é possível mudar a cara da escola sem se centrar fundamentalmente na formação permanente da educadora. Quer dizer, para nós, a formação permanente passa pela análise crítica da prática da educadora.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 199,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h12min20s a 00h13min59s (PROGRAMA 2)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "Essa questão de capacitar, da capacitação do educador, é indispensável, mas é preciso saber que toda capacitação técnico científica é também já política. Eu vou ver se eu explico isso. Quer dizer, não nenhuma prática científica que não seja política ao mesmo tempo. Por exemplo, basta que eu pergunte a mim mesmo: em favor de quem eu faço ciência, em favor de quem eu estou conhecendo essas coisas e contra a quem eu estou conhecendo? Para eu conhecer que o ato de experimentar-me cientificamente não é neutro de jeito nenhum. Ora, e, aí é que é outro nó. É que você não pode exigir de uma política dominante, de uma classe dominante, que ela ilumine politicamente em função dos interesses populares o trabalho da educadora. Não sei se estou claro ou estou confundindo muita coisa. Então, aí, Toninho que uma das tarefas, por exemplo, dos órgãos de categoria, por exemplo, da categoria dos professores. Uma das tarefas políticas para mim desses órgãos seria exatamente tomar a si, com uma seriedade enorme, a responsabilidade também da formação permanente dos quadros dos professores, como tarefa política da formação científica e da formação política das educadoras e dos educadores.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Formação (política)'] ); 
		\App\Trecho::create([
			"verbete_id" => 200,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h17min37s a 00h18min16s (PROGRAMA 2)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "O que eu também queria deixar claro é que essa formação científica tem que estar iluminada pela clareza política da educadora e por clareza política eu quero me referir exatamente à opção política. Quer dizer, em favor de quem a educadora trabalha, com quem ela estar. O papel dela do ponto de vista com quem ela estar. Então, e por isso, que eu acho que isso é muito mais trabalho nosso, trabalho de governos progressistas, mas você não pode esperar que todo mundo dentro de uma faixa de poder dominante pense assim.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Formação (professores)'] ); 
		\App\Trecho::create([
			"verbete_id" => 201,
			"titulo_video" => "Darcy Ribeiro e Paulo Freire  Educadores do Brasil",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h48min38s a 00h49min09s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1914", 
			"texto" => "Tudo o que a gente puder fazez no sentido de convocar os que vivem entorno da escola e dentro da escola, no sentido de participarem, de tomarem um pouco o destino da escola na mão também. Tudo que a gente puder fazer nesse sentido é pouco ainda considerando o trabalho imenso que se põe diante de nós que é o de assumir esse país democraticamente.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 201,
			"titulo_video" => "Palestra de Paulo Freire no DESED (Banco do Brasil)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h33min20s a 00h35min27s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1891", 
			"texto" => "Então, todo um trabalho que uma perspectiva de governo democrático tem que ter num país como o da gente. Já imaginou chegar no Nordeste brasileiro, com uma quantidade extraordinária de professores e professoras leigas. Quer dizer, e que são às vezes menosprezados porque são leigos, na verdade, são ótimos educadores, as vezes. Mas, essa gente precisa toda ela ser refeita, toda ela ser reorganizada. Então o papel das universidades, quer dizer, como trabalhar nas universidades no sentido de que elas se insiram também... veja bem o grande desafio que a gente tem, pra universidade, é o de que ela mantendo a sua o seu anseio em torno da produção do conhecimento científico a formação do profissional, ela tenha, também, um dever de inserir na pobreza e na deficiência da cultura, ou não diria da cultura, das deficiências materiais do país em que elas são universidades. Então isso significava que o Ministério da Educação, por exemplo, teria que não impor, mas teria que tratar de convencer as universidades todas brasileiras para que elas se entregassem também a essa tarefa de formar e reformar a prática pedagógica do país. Quer dizer, porque não meter, porque deixar que as suas faculdades de educação, das diferentes universidades brasileiras, continuem trabalhando apenas na formação de professores de Ensino Médio e da criação de mestrandos e doutorandos, por quê? Minha proposta não era fechar isso, mas minha proposta era alargar a responsabilidade e um dever da universidade com relação ao estado, ao município, formando e reformando o corpo docente em função do desafio nacional.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 201,
			"titulo_video" => "Paulo Freire conversa com americanos em sua casa",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h09min48s a", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3257", 
			"texto" => "A formação dos educadores é contínua e quando falo sobre formação dos educadores eu sou forçado a fazer referência a posição política dos professores, dos educadores. Eles não são apenas os técnicos, eles são políticos e eles tem que ter clara preocupação com isso. Não estou dizendo que eles devem se tornar parte A, parte B ou parte C. Saber o conceito de que enquanto professores nós temos o direito de pertencer a parte A, B ou C, mas nós não temos o direito de impor aos estudantes nossas condições sobre as partes. Mas nós somos políticos, temos sonhos. Eu nunca pergunto questões apenas sobre as técnicas que eles estão utilizando para ensinar ABC, nunca pergunto sobre isso. Eu estou interessado em saber, por exemplo, como eles estão criando materiais para os estudantes, como eles estão utilizando as ruas, por exemplo, como eles estão utilizando as paredes das ruas, porque nós temos muitas possibilidades para usar materiais e as paredes.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Formação (treinamento)'] ); 
		\App\Trecho::create([
			"verbete_id" => 202,
			"titulo_video" => "Do Silêncio à Palavra (vídeo 1 e 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h41min04s a 00h41min17s (VÍDEO 2)", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1936", 
			"texto" => "Eu defendo uma educação que forme, e não uma educação que treine. Eu sou muito mais do que um ser no mundo, eu sou um ser com o mundo e com os outros. Se dermos uma olhadela na história da educação brasileira ela está repleta de desrespeito à educação.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Futuro'] ); 
		\App\Trecho::create([
			"verbete_id" => 203,
			"titulo_video" => "Aula inaugural do Mestrado em Educação da Universidade de Juiz de Fora realizada por Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h07min30s a 01h08min28s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1911", 
			"texto" => "O futuro pra nós  não é uma província histórica que fica na esquina da avenida A com avenida B a espera da gente. O futuro é o próprio presente sendo mantido reacionariamente ou transformado revolucionariamente por nós. [Aplausos] O futuro somos nós que fazemos, o futuro é questão de nossa opção política, de nossa opção ética, de nossa opção estética, que não se separa e que envolve a nossa decisão no sentido de intervir no mundo.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 203,
			"titulo_video" => "Movimento de Defesa do Favelado",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h12min31s a 00h13min06s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1903", 
			"texto" => "Eu acho que só quem não briga é quem não tem futuro. E quem não tem futuro, não tem presente. Entende? Porque o futuro afinal de contas não é uma província que fica distanciada de mim, muito além de mim, à espera de que eu chegue lá, pelo contrário, eu sou fazedor do futuro. Somos nós enquanto gente, enquanto povo, enquanto classe social e, também, enquanto indivíduos que temos que transformando o presente, com o aprendizado que a experiência do passado nos deu, criar o futuro. Quer dizer, o futuro é uma invenção da gente.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Globalização'] ); 
		\App\Trecho::create([
			"verbete_id" => 204,
			"titulo_video" => "Palestra de Paulo Freire no Banco Central",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h35min33s a 01h37min35s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3219", 
			"texto" => "A mim não me convencem quererem me impingir que a globalização é um fenômeno natural. Porque no momento em que você multiplica a ideia fatalista da globalização quando você diz a realidade é essa mesma você está naturalizando um fenômeno histórico-social. Olhe, o fenômeno da globalização é histórico e é social e não natural. Segundo, a globalização é fenômeno histórico e social e não natural ela é um momento do desenvolvimento econômico capitalista ela é um dos momentos, talvez o mais atual do desenvolvimento da economia capitalista. Não é necessariamente do desenvolvimento da economia no mundo, mas é do desenvolvimento da economia capitalista. E essas coisas não se dizem. Terceiro, porque é um momento da economia capitalista as sociedades que lideram hoje não se comportaram, necessariamente, diante da globalização antes dela existir. Então antes dela existir as lideranças dessas sociedades hoje globalizantes eram muito mais exigentes para defender suas economias do que querem que hoje que estão entrando na globalização se defendam. Quer dizer, nós temos que nos comportar aqui na Argentina, no México como Japão como Estados Unidos, mas não pode. Eu acho que não pode, entende. Quer dizer, por outro lado, por causa disso tudo querem passar a globalização como ela fosse uma categoria metafísica, abstrata, intocável. É porque é, é e não pode deixar de ser assim.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Highlander'] ); 
		\App\Trecho::create([
			"verbete_id" => 205,
			"titulo_video" => "Paulo Freire at Highlander: A Conversation with Myles Horton",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h31min55s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1883", 
			"texto" => "Veja, como um educador pode, como eu, um homem comum que ama acima de tudo. Tenho a impressão de que eu sei alguma coisa, pois eu amo tudo. Como posso dizer para você, depois de ver e ouvir, o que vi e ouvi aqui esta manhã? Primeiro de tudo, tenho que deixar claro que eu não poderia viver highlander sem conhecer todos vocês, isso seria errado, para eu aprender melhor todas as coisas que aprendi sobre highlanders. Segundamente, eu gostaria agora como homem que ama e morre todos os dias na tentativa permanente de procurar o que faço. Para mim, é impossível ter prática sem procurar pela prática constantemente. Em outras palavras, para mim, é impossível separar prática de teoria, é impossível separar ação de reflexão. É pensando sobre o que fazemos que nós nos preparamos para fazer melhor o que fizemos antes.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'História'] ); 
		\App\Trecho::create([
			"verbete_id" => 206,
			"titulo_video" => "Paulo Freire conversa com Patrick Clarke",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h15min42s a 00h15min55s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1950", 
			"texto" => "Eu, que entendo a História como uma possibilidade, compreendo então a grande responsabilidade que temos nós, como fazedores desta história que por sua vez também nos faz.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 206,
			"titulo_video" => "Especial Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h26min08s a 00h27min57s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1918", 
			"texto" => "Eu diria que a minha vida como educador, e, portanto, como político, tem girado centralmente sobre esse tema, nem sempre, necessariamente me referindo ao simbolismo, ao diabolismo, mas sempre, por exemplo, e sobretudo agora, de cinco ou seis anos para cá insistindo fortemente na questão da utopia, na questão, do sonho, na questão da esperança, na questão da ética. Eu venho falando tanto sobre essas coisas e escrevendo, que as vezes até quando eu abro aboca, a impressão que eu tenho é que o aluno vai me dizer Paulo, vai falar sobre utopia porque isto tá presente, tá no meu corpo, tá na minha convicção. E se há um tempo em que mais até do que falar, mas falar a palavra certa, falar a palavra que atua, a palavra que transforma é já começar a transformar. Mas se há um tempo em que a necessidade da luta, da briga para um convencimento de que a esperança não se acabou, de que a história está aí, de que a história não morreu. Para que a história morra, é preciso primeiro que homens e mulheres morram, aí, então, a história morrerá. Fora disso, não!.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'História (raiva)'] ); 
		\App\Trecho::create([
			"verbete_id" => 207,
			"titulo_video" => "Diálogo com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h55min08s a 00h55min58s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3229", 
			"texto" => "A história se faz com luta, a história se faz com saberes, a história se faz com decisão se faz com gosto, a história se faz com amor, mas a história se faz também com raiva. Quer dizer, a raiva é inclusive um direito e em certas circunstâncias históricas a raiva é um dever. A raiva se impõe a mim como um dever para que me afirme como sujeito.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Highlander (princípios)'] ); 
		\App\Trecho::create([
			"verbete_id" => 208,
			"titulo_video" => "Paulo Freire e Myles Horton no Núcleo de Estudos de Educação Comparada da PUC-SP",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h33min20s a 00h35min06s (LADO B)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3245", 
			"texto" => "Eu acho um pouco fácil entender alguns dos princípios fundamentais dessa filosofia de Highlander. Highlander não acredita em educação popular em que os grupos populares não se afirmem como sujeitos que conhecem e como sujeitos que podem conhecer mais, porque como sujeitos que praticam. Highlander então põe como ênfase a relação inseparável de prática e de teoria na qual o conhecimento se dá a nível crítico, esse é um ponto. E por isso é que não é possível para Highlander entender que o educando também não eduque o educador, é por isso. Highlander não pensa assim numa perspectiva licenciosa, mas pensa sim numa perspectiva radicalmente democrática. Eu tenho umas briguinhas com Highlander, porque eu sou mais demandante da presença do professor do que Highlander e eu exijo muito mais do processo pedagógico a presença atuante, viva do professor que chega e diz eu sou o professor, do que Highlander.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Homenagem (Universidade de Bolonha)'] ); 
		\App\Trecho::create([
			"verbete_id" => 209,
			"titulo_video" => "Entrevista de Paulo Freire à TV Itália",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h01min14s a 00h02min49s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1937", 
			"texto" => "[Paulo Freire]: Para mim significa muita coisa. Claro que, em primeiro lugar, não foi a primeira vez que eu fui homenageado assim. Antes eu tinha recebido já outras homenagens de universidade também muito famosas como a Universidade de Louvain, por exemplo, quando completou 500 anos, recebi também o doutoramento. Universidade de Londres, de Estados Unidos, quer dizer, recebi quatorze láureas assim, mas a homenagem de Bolonha tem uma significação especial para qualquer educador, para qualquer intelectual. [Entrevistador]: Pelo fato de ser, sem dúvida, a mais antiga, mais completa? [Paulo Freire]: Mas claro. Uma universidade que está repleta de tradições positivas. Uma universidade que não vive apenas das suas tradições, porque ela é, no momento, uma universidade séria. [Entrevistador]: Mas sem dúvida atualizada, também? [Paulo Freire] Atualizada, obviamente. Então essa homenagem que a universidade me prestou, e que eu acho não pertence só a mim, eu acho que essa homenagem é uma homenagem que pertence ao nosso país, à nossa cultura e até assim de passagem eu diria que vocês estão sendo o único veículo que chama atenção para isso.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Ideologia'] ); 
		\App\Trecho::create([
			"verbete_id" => 210,
			"titulo_video" => "Paulo Freire conversa com Patrick Clarke",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h9min58s a 00h10min47s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1950", 
			"texto" => "Ele é um homem que necessariamente tem que fazer isso. Quer dizer, porque ele primeiro tem o direito de existir, entende. Segundo ele tem o direito de ter uma opção política, que é a da Direita que é da direita a opção dele; e terceiro: eu tenho o direito de não cair na opção dele, não repetir a opção dele, não trabalhar pela opção dele pelo contrário, de trabalhar contra a opção dele. Esse é um direito que nós dois temos, e o que eu puder fazer para derrubar, não ele pessoalmente ele vem aí de enxerido. O que eu quero derrubar é exatamente a concepção de mundo, a concepção de vida centrada apenas nos grandes viadutos. Para mim os viadutos são a gente, somos nós, quer dizer a prioridade sobre nós mesmos.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 210,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h07min41s a 00h08min30s (PROGRAMA 2)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "Para mim, é uma ingenuidade pensar que a educação sistemática ou que a escola faz apenas reproduzir a ideologia dominante. Essa compreensão parece muito mecânica. O que ocorre é o seguinte, é que, indiscutivelmente, a escola reproduz, a ideologia dominante, reproduz o autoritarismo do modo de produção capitalista, mas não faz só isso, tá entendendo? [Entrevistador]: Quer dizer que ela carrega, ao reproduzir os modelos de produção, ela carrega uma contradição? [Paulo Freire]: Ela carrega uma contradição. E é exatamente nessa contradição que ela carrega ao reproduzir o modelo, que a gente entra como contraditor também do próprio ato reprodutivo.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 210,
			"titulo_video" => "Programa 'Clodovil Abre o Jogo' entrevista Paulo Freire e Tatiana Belinky",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h08min56s a 00h09min22s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1915", 
			"texto" => "O problema da ideologia não é nem sequer um problema e por opção minha, quer dizer, eu não posso decretar que não há mais ideologia. Vivem dizendo isso às vezes. Há muito tempo já se afirmou que as ideologias morreram. E eu costumo sempre dizer: para você dizer que as ideologias morreram você tem que ter uma afirmação ideológica. Porque, quando eu digo as ideologias morreram, essa é uma afirmação ideológica, não há nada que seja exclusivamente científico.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Ideologia (autoritarismo)'] ); 
		\App\Trecho::create([
			"verbete_id" => 211,
			"titulo_video" => "Reading the World",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h22min38s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3298", 
			"texto" => "O poder da ideologia do autoritarismo, o qual mantenho dentro de mim, é tão forte. Estou de tal forma dependente disso, historicamente, socialmente e individualmente, que mesmo teoricamente eu gostaria de ser e proclamar a excelência da democracia, mas em prática, eu sou um professor autoritário", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Ideologia (neoliberal)'] ); 
		\App\Trecho::create([
			"verbete_id" => 212,
			"titulo_video" => "Palestra de Paulo Freire no Banco Central",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h23min45s a 01h24min54s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3219", 
			"texto" => "Essa ideologia do neoliberal, do fatalismo que propõe a nós uma obediência silenciosa, eu recuso, quer dizer, eu recuso gritando, eu não aceito. Para mim, não a realidades que não podem ser mudadas. Não há realidade que necessitando da mudança não envolva interesses por se consolidar e interesses por se diluir não existe isso. O que vale dizer que todo processo de mudanças radicais, necessariamente, sendo como é um processo de ordem política provoca resistências, provoca reações.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Imoralidade'] ); 
		\App\Trecho::create([
			"verbete_id" => 213,
			"titulo_video" => "Paulo Freire conversa com estudantes de curso para o magistério",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h38min07s a 00h38min36s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3292", 
			"texto" => "Imoral é permitir que uma sociedade possibilite que uma criança do povo diga: Eu não sou ninguém. Não tenho nome'", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Inacabamento'] ); 
		\App\Trecho::create([
			"verbete_id" => 214,
			"titulo_video" => "Encontro com Paulo Freire no Ginásio Tesourinha em Porto Alegre",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h53min04s a 00h54min10s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1933", 
			"texto" => "A educabilidade do ser humano reside, precisamente, no fato de que nós mulheres e homens somos inacabados e conscientes do inacabamento. Seria um absurdo que sendo inacabados não nos estivéssemos metidos num processo permanente e a permanência da educação reside aí também e não de uma razão puramente neurológica. A educação é permanente, porque o ser humano é indeterminado e se sabe como tal. Então, a educação resulta da inconclusão que assim se percebe e aí esta a chave da permanência da educação.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Inconclusão'] ); 
		\App\Trecho::create([
			"verbete_id" => 215,
			"titulo_video" => "Encontro com Paulo Freire no Ginásio Tesourinha em Porto Alegre",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h50min07s a 00h50min55s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1933", 
			"texto" => "Eu acho que uma dessas qualidades que constitui a gente como gente é que somos indeterminados. Quer dizer, é a qualidade de ser, a nossa natureza é de inconclusão. Quer dizer, inconclusão significa exatamente não está concluída. Por isso, mesmo nós somos muito mais projetos dentro da história.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 215,
			"titulo_video" => "Conferência do professor Paulo Freire e entrega do título de cidadão uberabense",
			"tipo_recurso" => "vídeo", 
			"tempo" => "02h28min52s a 02h29min52s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1893", 
			"texto" => "Como é possível que eu me descubra um ser ou como um ser histórico, como um ser finito, como um ser inacabado, sem me perceber também como um ser permanentemente em busca. Quer dizer, se eu sou inconcluso, se eu sou inacabado, se eu sei que sou inconcluso, como é então que eu não me descubro também um ser educável, como um ser inserido num permanente processo de busca. E se eu estou em processo permanente de busca, como posso estar nele sem esperança.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 215,
			"titulo_video" => "Aula inaugural do Mestrado em Educação da Universidade de Juiz de Fora realizada por Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h35min56s a 00h37min18s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1911", 
			"texto" => "O fato de ser um ser inacabado não é, porém, uma exclusividade do ser humano. A marca do inacabamento ou da inclusão faz parte da experiência vital. A árvore é inacabada também, o leão é inacabado, os pássaros são inacabados, quer dizer, a vida se caracteriza por ser um processo inconcluso. Acontece, porém, que mulheres e homens somos os únicos seres que nos tornamos capazes na experiência social e histórica em que fazemos parte, nos tornamos capazes de nos moldar sobre nós e perceber a nossa inconclusão.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Inconclusão (consciência)'] ); 
		\App\Trecho::create([
			"verbete_id" => 216,
			"titulo_video" => "Darcy Ribeiro e Paulo Freire  Educadores do Brasil",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h52min34s a 00h53min38s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1914", 
			"texto" => "Eu estou absolutamente convencido de que a inconclusão, o interminado é uma característica da experiência vital. Mais de que um puro inacabamento nós somos conscientes do inacabamento. Ora, minha tese é a seguinte, um ser que inacabado se sabe, necessariamente, se insere num permanente processo de procura, a educação é esse processo. E agora a minha pergunta é a seguinte, será possível procurar sem esperança? Eu tenho um certo gosto, um gosto gostoso, um gosto verdadeiro que é o meu ser na intimidade do meu ser de brigar pela esperança. Fora disso, eu não me entenderia no mundo", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Indignação'] ); 
		\App\Trecho::create([
			"verbete_id" => 217,
			"titulo_video" => "Diálogo com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h56min04s a 00h56min13s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3229", 
			"texto" => "A indignação é um direito e devemos ter o dever de protestar contra a exacerbação dos limites do desrespeito.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 217,
			"titulo_video" => "Paulo Freire conversa com Patrick Clarke",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h12min57 a 00h13min30s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1950", 
			"texto" => "A gente deveria com uma consciência tranquila, mas alerta, desperta a gente devia assumir uma posição de indignação, a gente deveria ficar indignado, mas não indignado com relação ao favelado que me mata, mas indignado com a situação histórica, política, social e econômica que cria possibilidade de eu ser morto pelo desgraçado. Sem meter nisso nenhuma posição cristã de doação.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Infância (intolerância ao racismo)'] ); 
		\App\Trecho::create([
			"verbete_id" => 218,
			"titulo_video" => "Seminário 'Reflexão sobre processo metodológico de alfabetização'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h29min55s a 00h30min49s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3308", 
			"texto" => "Eu revelava esse gosto da rebeldia desde criança e tinha horror a certos traços racistas que minha avó tinha, era uma mulher ótima, mas tinha ranço de racista que me dava raiva tremenda mesmo aos seis, cinco anos de idade. Eu nem sabia ainda o que era raça e já estava combatendo o racismo e eu era contra toda posição sectária e rebelde. Quer dizer, no fundo, eu me preparava para uma posição que eu acho que tenho hoje politicamente de ser um democrata sem jamais ser um democratista.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Infância (Paulo Freire)'] ); 
		\App\Trecho::create([
			"verbete_id" => 219,
			"titulo_video" => "Seminário 'Reflexão sobre processo metodológico de alfabetização'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h28min59s a 00h29min44s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3308", 
			"texto" => "Eu já era em primeiro lugar um sujeito rebelde. Menino ainda eu não me conformava e protestava quando tinha cinco anos de idade e me disse muito tempo depois minha mãe que meu pai costumava dizer o que pra mim é uma satisfação que representava nele uma opinião positiva com relação aos comunistas ele costumava dizer esse menino vai ser comunista quando ficar homem.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Intelectual (intuições)'] ); 
		\App\Trecho::create([
			"verbete_id" => 220,
			"titulo_video" => "Aula inaugural do Mestrado em Educação da Universidade de Juiz de Fora realizada por Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h56min46s a 00h57min26s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1911", 
			"texto" => "O bom cientista é também aquele que respeite suas intuições e não rejeita suas intuições. O mal intelectual é aquele que só aceita a intuição e se entrega facilmente aos resultados de suas intuições. Eu acho que o bom intelectual respeita sua intuição que é uma forma de adivinhar, mas testa a sua intuição. Quer dizer, ele prova o resultado, o objeto da sua intuição, o achado que ele faz.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Intelectual (respeito)'] ); 
		\App\Trecho::create([
			"verbete_id" => 221,
			"titulo_video" => "Série Encontro: Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h36min10s a 00h37min06s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3294", 
			"texto" => "Por exemplo, eu acho que um intelectual que não se esforça no sentido de compreender a linguagem metafórica popular, que chega a área popular convencido de que o corpo individual e social da área popular é um corpo vazio de saber, e que esquece e desconhece que o fato mesmo de que as classes populares têm uma certa prática é suficiente para lhes dá uma certa sabedoria. E esquecendo como se gesta essa sabedoria e desrespeitando a validade dessa sabedoria pretendem impor em nome da salvação da classe popular que se dá pela revolução.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Inteligência'] ); 
		\App\Trecho::create([
			"verbete_id" => 222,
			"titulo_video" => "Paulo Freire conversa com Patrick Clarke",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h08min57s a 00h09min17s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1950", 
			"texto" => "Frente a um dado concreto, e isso é que se chama inteligência, quer dizer, a inteligência se cria, se constrói, não se recebe, quer dizer, a gente vai construindo a inteligência na luta para compreender e mudar o mundo. É aí que a inteligência se faz, se constrói, se dá.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Intervenção democrática'] ); 
		\App\Trecho::create([
			"verbete_id" => 223,
			"titulo_video" => "Educación Formal y no formal",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h21min24s a 00h22min08s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/2946", 
			"texto" => "Eu acredito que a intervenção prescritiva é determinação autoritária enquanto a intervenção democrática é sugestão para que, aqueles e aquelas a quem sugerimos, refaçam a sugestão. Isto é, a sugestão só é válida quando as pessoas a quem sugerimos refazem e recriam o sugerido.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Intervenção pedagógica'] ); 
		\App\Trecho::create([
			"verbete_id" => 224,
			"titulo_video" => "Programa 'Clodovil Abre o Jogo' entrevista Paulo Freire e Tatiana Belinky",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h07min18s a 00h07min45s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1915", 
			"texto" => "Será possível uma intervenção pedagógica que seja respeitosa da liberdade do educando? Eu acho que sim, entendeu? Eu não tenho dúvida nenhuma de que trabalhando com 20, 30 estudantes, por exemplo, eu posso e devo a eles, explicar, e explicitar o meu sonho desde que eu deixe a eles o direito de também ter sonho.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Inacabamento (consciência)'] ); 
		\App\Trecho::create([
			"verbete_id" => 225,
			"titulo_video" => "A Ética na Educação",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h17min56s a 00h18min35s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1920", 
			"texto" => "O inacabamento faz parte do mundo natural, quer dizer, todo ser vivo que se experimenta como tal tem a característica do inacabamento. Nesse sentido, é tão inacabada quanto nós a árvore que está aí no quintal. São tão inacabados quanto nós os outros animais. Nós, mulheres e homens, ao longo da longa história em que nos fizemos e em que estamos fazendo, nós conseguimos um passo definitivo além da mangueira, além da jaqueira e o passo que nós conseguimos dar, e que foi um passo decisivo, foi o passo de ganhar a consciência do inacabamento. Quer dizer, nós somos tão inacabados quanto as árvores, mas nós temos uma desvantagem ou uma vantagem sobre as árvores é, que nos sabemos inacabados. Quer dizer, então, o passo que teríamos necessariamente que dar ao ganha a possibilidade de nos saber inconcluso, foi exatamente, o de uma certa disponibilidade permanente à inserção no processo de busca, de curiosidade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Interligir (mundo)'] ); 
		\App\Trecho::create([
			"verbete_id" => 226,
			"titulo_video" => "A Ética na Educação",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h19min29s a 00h22min14s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1920", 
			"texto" => "Falando concomitantemente, intervindo no mundo nós fomos nos tornando capazes de nomear o mundo ou nomear as coisas que fizemos com o mundo e, ao lado disso, nos tornamos capazes de, em nossas relações com o mundo, eu falo agora em questões de milênios, afinal nós não somos de anteontem, foi possível ao homem e a mulher desenvolver uma outra competência, que eu acho fantástica, que é a competência de inteligir o mundo, de inteligir a realidade. Quer dizer, nós somos capazes de compreender o mundo que nos cerca e em que nós estamos, não importa compreender bem ou mal, compreender erradamente, compreender com certo acerto, compreender deficientemente, não importa. Mas nós nos tornamos capazes de uma compreensão do mundo, de uma compreensão da realidade que pode ser uma compreensão ingênua como pode ser uma compreensão crítica, uma compreensão fundada apenas no senso comum, uma compreensão fundada na rigorosidade científica, não importa. O que importa é que centralmente nós nos tornamos capazes de inteligir o mundo e precisamente porque nos tornamos capazes de inteligir o mundo, de compreender o mundo, nós produzimos simultaneamente, com a capacidade de inteligir o mundo, a capacidade de comunicar o inteligido. Quer dizer, não há inteligência do mundo sem comunicabilidade do inteligido. O homem e a mulher, somos além de seres inconclusos e conscientes da inconclusão históricos, nós somos seres inteligentes e comunicadores da compreensão inteligente que fazemos da realidade. Quer dizer, não há então inteligibilidade sem comunicabilidade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Liberdade (autoridade)'] ); 
		\App\Trecho::create([
			"verbete_id" => 227,
			"titulo_video" => "Conversando sobre Educação e Liberdade com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h17min56s a 00h18min35s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3216", 
			"texto" => "A questão não é fazer o que a gente quer fazer, mas é fazer o que a gente pode fazer e viabilizar, às vezes, o que não é possível fazer, mas vivendo a tensão dos limites. Não há liberdade que cresça, que se constitua fora dos limites que a própria autoridade tem que imprimir. Mas o que não é possível é que a autoridade apenas limite as liberdades e não se limite a si também. É esse aprendizado que há quinhentos anos não conseguimos ter, não conseguimos fazer.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Liberdade'] ); 
		\App\Trecho::create([
			"verbete_id" => 228,
			"titulo_video" => "A Ética na Educação",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h32min26s a 00h32min57s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1920", 
			"texto" => "A liberdade sem limite se perde e com dificuldade se reacha. Quer dizer, a liberdade sem limites se constitui no que eu chamo de tirania da liberdade, quer dizer, é a licenciosidade que implica num desrespeito total de tudo e na falta absoluta de qualquer limite. Isso não leva a nenhuma experiência humanizante do mundo.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 228,
			"titulo_video" => "Paulo Freire: o revolucionário educador (Programa 1 e 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h09min37s a 00h09min57s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1946", 
			"texto" => "Eu estou absolutamente convencido de que a liberdade não cresce, nem se constitui, sem limites é como assumir os limites eticamente não como assumir com medo da autoridade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Liberdade (autoritarismo)'] ); 
		\App\Trecho::create([
			"verbete_id" => 229,
			"titulo_video" => "Conversando sobre Educação e Liberdade com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h14min50s a 00h15min57s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3216", 
			"texto" => "Ao mesmo tempo em que quase a gente canta à liberdade, que a gente faz hinos à liberdade, a gente explicita o que está implícito na gente, apitando no corpo da gente que são as marcas do autoritarismo pesado brasileiro. Então de um lado, a vontade de libertar-se, do outro, o medo da liberdade. De um lado, a coragem de arriscar, do outro, a recusa a ousadia e aceitação da repetição burocrática, obediência, arbítrio e autoritarismo. No fundo, está faltando a nós a experiência difícil, mas possível de viver a tensão entre a liberdade e a autoridade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Leitura (memória/poder)'] ); 
		\App\Trecho::create([
			"verbete_id" => 230,
			"titulo_video" => "Paulo Freire conversa com Patrick Clarke",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h06min10s a 00h07min47s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1950", 
			"texto" => "Quando nós à custa de nosso esforço de nossa luta, de nossa esperança, conseguimos cortar os arames do latifúndio, e entramos fisicamente na terra que era propriedade exclusiva dos ricos, nós descobrimos que havia muito ainda que caminhar, porque descobrimos que haviam obstáculos em nós mesmos. E esses obstáculos, dentre eles, por exemplo, o da nossa ignorância, quanto mais ignorantes, quanto menos pudéssemos ler a palavra tanto mais facilmente os donos da vida podiam dormir em paz. Pelo contrário, quanto mais melhorassemos nossa memória, eu achei lindo isso, porque o uso da memória e a palavra memória como capacidade captadora da realidade, como inteligência, quanto melhor trabalhássemos nossa memória, quanto mais pudéssemos ler as palavras, tanto mais medo criaríamos nos poderosos. Por isso o nosso sonho  agora é transformar este enorme ex-latifúndio num grande círculo de cultura.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Leitura da palavra (leitura do mundo)'] ); 
		\App\Trecho::create([
			"verbete_id" => 231,
			"titulo_video" => "Entrevista de Paulo Freire concedida à Carmelita e Mariângela Wanderlei",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h01min01s a 00h03min29s (LADO B)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3241", 
			"texto" => "É urgente que percebamos que a nossa tarefa enquanto educadores populares não é a de ir às áreas populares para depositar na cabeça das populações um conteúdo temático que tenhamos adquirido em nossas leituras de livro. O que é fundamental é discutir com os grupos populares. Aplicar nesta discussão uma metodologia rigorosa de conhecimento do real, do conhecimento da realidade para que os grupos populares adquiriram o método de ler a realidade e não a conclusão da minha leitura. Isso é que é para mim o fundamental. Foi exatamente, por exemplo, a comparação não é boa, mas foi exatamente o que pretendemos fazer e sempre tentamos fazer, Elza e eu, com relação a nossos filhos. Não foi jamais eu que botei na cabeça deles o conhecimento acabado que não existe em primeiro lugar de A, E, I, O, U, mas a maneira crítica de conhecer. Então se você aprende a entender este canequinho aqui de café, você entende a mesa. Agora o que não é possível é eu meter na sua cabeça o que é esse caneco primeiro eu tenho que meter na sua cabeça o que é essa mesa. Depois o que é essa sala, depois o que é essa casa, depois o que é essa rua, depois o que é Estado. Entende? Então não tem fim. Daí a minha insistência. O que importa a nós é trabalhando com o povo, ler bem o real, respeitando inclusive as punições, e que o pouco se encontra diante desse real. É respeitar os temores do povo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Leitura do mundo'] ); 
		\App\Trecho::create([
			"verbete_id" => 232,
			"titulo_video" => "Depoimento de Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h37min42s a 00h38min51s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1881", 
			"texto" => "Quando eu falo na competência científica, eu estou também querendo me referir ao fato de que a questão que se coloca ao ano internacional da alfabetização, não é apenas a da leitura da palavra, mas também é a da releitura do mundo. Quer dizer que quando eu digo releitura do mundo, é porque eu estou convencido dessa coisa óbvia, de que o ser humano é um ser que antes de ler a palavra, ler lê o mundo, lê a realidade. Então, durante a prática da alfabetização o que é preciso se fazer é ao ensinar a ler a palavra escrita, debater com o alfabetizando a leitura que ele fazia antes já do seu mundo, o que vale dizer é que ao proporcionar a ele a oportunidade de uma releitura do mundo, através da leitura da palavra, isso é absolutamente indispensável.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 232,
			"titulo_video" => "Do Silêncio à Palavra (vídeo 1 e 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h11min59s a 00h12min20s (VÍDEO 2)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1936", 
			"texto" => "E a Leitura do Mundo é uma leitura que precede historicamente e atualmente, precede sempre a leitura da palavra. Quer dizer, ninguém começa lendo a palavra, porque antes da palavra o que a gente tem pra ler, a disposição da gente é o mundo, e a gente ler o mundo na medida em que a gente o compreende e o interpreta.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 232,
			"titulo_video" => "Encontro com Paulo Freire no Ginásio Tesourinha em Porto Alegre",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h38min28s a 00h39min13s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1933", 
			"texto" => "Ninguém pode fazer a leitura da palavra sem fazer a leitura do mundo, no entanto, é possível ler o mundo sem ler a palavra. A primeira coisa que nós fazemos mulheres e homens é ler o mundo e  depois a partir da invenção da linguagem que é uma produção social, nós então aprendemos a ler aquilo que é a linguagem escrita, aprendemos a ler e a escrever.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 232,
			"titulo_video" => "Entrevista com Paulo Freire em sua casa (Vídeo 1 e 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h05min46s a 00h07min34s (VÍDEO 1)", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1913", 
			"texto" => "O processo de definir, de como ler, de como escrever palavras estivesse inserido no processo de leitura da realidade, quer dizer, a mim não interessava de maneira nenhuma que o alfabetizando dominasse rapidamente os processos de ler, de escrever, mas não fizesse nenhuma reflexão sobre a própria prática de ler e de escrever. Quer dizer, o que interessava a mim era o que sempre venho dizendo era pôr em relação muito íntima a leitura do mundo e a leitura da palavra, tanto a compreensão em torno de como a sociedade mesma trabalha, funciona a questão política, a organização do poder na sociedade ao mesmo tempo em que o alfabetizando fosse capaz de ir dominando as técnicas de leitura e da escrita. Para mim desde aquela época fazer qualquer tipo de separação entre uma e outra dessas duas leituras a leitura da palavra e a leitura do mundo era/poderia ser cientificamente errado e politicamente, do meu ponto de vista, errado. Obviamente que quando eu digo do meu ponto de vista é que do ponto de vista de educador reacionário o bom é dicotomizar a leitura da palavra e a leitura do mundo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Leitura e escrita'] ); 
		\App\Trecho::create([
			"verbete_id" => 233,
			"titulo_video" => "Palestra de Paulo Freire aos estudantes universitários",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h18min45s a 00h21min34s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3270", 
			"texto" => "A gente vem sendo condicionado a separar a compreensão do mundo da compreensão da palavra, da compreensão do texto. O que vale dizer a gente vem sendo treinado, na educação formal da gente, a separar a compreensão do texto da compreensão do contexto em que o texto se gera. Então isso é um negócio terrível também. É outro desses mistérios de separar os inseparáveis. Então a gente lê os textos sem nenhuma conexão ou até se fosse bonito mesmo ler o texto de um autor sem ter ideia nenhuma do contexto histórico, social, político, ideológico, cultural do autor. Quer dizer, a gente lê Gramsci como se tivesse nascido em Caruaru ano passado. Ano passado não podia porque não teria escrito. Mas, há 30 anos atrás. Não dá, não é possível isso. Quer dizer, a gente tem que ler o texto e contextualizá-lo. Então a contextualização do texto é um sine qua non pra mim pra compreensão do texto. Daí a dificuldade ou daí o maior trabalho que a leitura exige do leitor. Quer dizer, o leitor deve, ao ler um texto brigar por se informar em torno do contexto, e quando eu digo contexto eu digo contexto no sentido amplo dessa palavra incluindo tempo e espaço e não apenas espaço do autor. Quer dizer, quando eu digo contexto eu falo da história e da geografia ou da geografia que se fez história do autor. E quando o texto é de um autor estrangeiro a exigência maior para nós se faz em que a gente deveria ter uma noção do texto, do contexto histórico, social, político do autor do texto e mais, estabelecer uma relação entre esse texto, o contexto do autor com o nosso contexto de leitor. E a falta, as vezes, disso nos leva a incompreensões tremendas.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 233,
			"titulo_video" => "Palestra de Paulo Freire aos estudantes universitários",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h29min11s a 00h31min18s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3270", 
			"texto" => "Então, consultar dicionário é tarefa indispensável de quem lê. A primeira coisa que a gente tem que fazer é arrebentar com essa preguiça de que eu falava. É como se, por exemplo, abrir o dicionário aqui e passar dez minutos consultando o dicionário me fizesse perder o tempo que eu não vou, inclusive, dedicar à leitura. (...) eu sempre digo aos estudantes com quem trabalho, custa muito caro, possivelmente vocês não podem ter em casa, uma bateria de dicionários importantes. Então, procure a universidade e se a universidade não tiver, exige da biblioteca que compre. Então um dicionário normal, comum da Língua Portuguesa, esse é o primeiro que tem que ser consultado, mas esse não basta. Porque o dicionário, afinal de contas, registra a palavra quase sempre imobilizada nele. Então, tem que ultrapassar. Às vezes a gente resolve, satisfaz. Mas é preciso então ir mais além do dicionário que registra. É preciso pegar, por exemplo, um dicionário que eu acho de uma importância enorme que é o dicionário etimológico, por exemplo. Porque as vezes sabendo a etimologia da palavra a gente avança fantasticamente para compreender o que tá dito lá. Mas é preciso também um dicionário filosófico, por exemplo, é preciso pegar a palavra, e um dicionário filosófico vai mais além do dicionário que registra, imobilizadamente a compreensão da palavra.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 233,
			"titulo_video" => "Palestra de Paulo Freire aos estudantes universitários",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h33min47s a 00h38min20s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3270", 
			"texto" => "E acho que escrever, em primeiro lugar não se separa de ler, e é uma coisa muito gostosa escrever. Segundo lugar é uma coisa muito difícil. Não é fácil escrever, escrever implica em um certo artesanato, implica uma paciente impaciência de procurar, implica um trabalho de busca, mas sobretudo, pra mim, implica a busca permanente de um momento de boniteza ao qual é preciso dar atenção. Quer dizer, a gente tem o dever até de testar do ponto de vista do ouvido da gente, da vista da gente, a forma que a gente está dando para ver qual é a menos feia, portanto qual é a mais gostosa. E isso, na Língua Portuguesa, por exemplo, a colocação dos pronomes, os meus, seus, te, os me. Esses pronomezinhos não se colocam ao gosto irreverente da gente, eles obedecem a um certo ritmo estético da linguagem, essa coisa existe, não é invencionisse. Eu só não sugiro que vocês obedeçam aos gramáticos, mas aos bons escritores sim. Por isso, então é que eu acho e eu sempre pus isso como uma condição pra trabalhar comigo, quando eu tinha estudantes escrevendo dissertação, é que qualquer que seja o tema dissertação, pra trabalhar comigo o estudante deveria ler pelo menos um livro de Machado de Assis, deveria ler mais de um livro de Graciliano Ramos, deveria ler Manoel Bandeira, deveria ler Carlos Drummond de Andrade, deveria ler Gilberto Freyre, não enquanto sociólogo, mas enquanto estilista. Gilberto Freyre pra mim é um dos maiores escritores de Língua Portuguesa, um dos maiores do ponto de vista do gosto, do bom gosto. E gente que tá escrevendo tese deve conviver com autores que escreveram e escrevem gostosamente. Quer dizer, a questão de quem escreve um trabalho está na seriedade com que escreve, na seriedade com que trata o tema, na rigorosidade com que trata o tema. Segundo, está também na forma elegante, bonita com que fala do que tratou. Essa história de dizer que só quem se preocupa com a boniteza da fala é poeta e não cientista é incompetência do cientista. Quando um cientista diz isso a mim eu o considero absolutamente incapaz, isso é incapacidade dele ou dela, é limitação. Eu digo sempre, o senhor escreve feio porque não sabe escrever bonito e não gosta de escrever bonito, o senhor tem mau gosto. Então, se tem mau gosto fique com ele, mas não transforme o mau gosto em dogma. Pelo contrário eu acho que se dogma pudesse haver seria o da boniteza, se pudesse haver um dogma  seria o de que nós temos o dever de ficar bonitos e quando eu digo bonitos eu não tô me referindo a... eu mesmo perderia qualquer concurso de boniteza", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 233,
			"titulo_video" => "Paulo Freire: o revolucionário educador (Programa 1 e 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h07min07s a 00h07min20s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1946", 
			"texto" => "O exercício de tornar-se capaz de ler ou escrever exige de quem realmente aprende uma postura de sujeito que cria o seu próprio aprendizado.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Liberdade'] ); 
		\App\Trecho::create([
			"verbete_id" => 234,
			"titulo_video" => "Paulo Freire  some thoughts",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h04min00s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1952", 
			"texto" => "Toda vez que eu luto para criar a liberdade é porque a liberdade já não é mais aqui, então preciso recriar a liberdade, lhe dar uma nova forma. E essa liberdade não pode ser formada apenas na minha cabeça, é historicamente que eu olho para a liberdade com os outros e necessariamente às vezes, contra alguns outros. É impossível lutar e criar liberdade sem lutar contra quem nos nega a liberdade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Liberdade (medo)'] ); 
		\App\Trecho::create([
			"verbete_id" => 235,
			"titulo_video" => "Paulo Freire conversa com americanos (vídeo 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h10min33s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3258", 
			"texto" => "O medo da liberdade é terrível. Algumas vezes nós estamos com medo da liberdade mas dizendo que queríamos ser livres, ou pior, que somos livres, mas não estamos, e estamos com medo da liberdade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Linguagem'] ); 
		\App\Trecho::create([
			"verbete_id" => 236,
			"titulo_video" => "Aula magna de Paulo Freire em Goioerê",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h15min44s a 00h16min12s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3230", 
			"texto" => "A linguagem que não é um puro instrumento de transmissão de conhecimento, porque ela é o conhecimento também. Quer dizer, eu falo o conhecimento que estou criando, que estou produzindo a minha fala, o meu discurso sai do meu corpo carregado já com o peso do conhecimento ou da ignorância.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 236,
			"titulo_video" => "Seminário 'Reflexão sobre processo metodológico de alfabetização'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h17min13s a 01h18min05s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3308", 
			"texto" => "Linguagem não é puro instrumento de comunicação. A linguagem está grávida de ideologia e ela sofre um corte de classe. Portanto, a linguagem popular teria que ser respeitada dentro da cultura popular, que é cultura de classe. E só a partir daquela linguagem e daquela cultura que a identidade do povo se constitui que era possível como povo dar um salto para a compreensão de outros níveis culturais e de outros níveis linguísticos.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 236,
			"titulo_video" => "A conversation with Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h04min10s a 00h05min32s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3209", 
			"texto" => "Quem disse que um certo sotaque ou uma certa maneira de pensar é a mais certa? Se existe uma que é certa então existe uma que não é. Então veja, é impossível pensar a linguagem sem pensar em ideologia e poder. Eu defendo o dever dos professores de ensinar esse padrão certo e eu defendo os direitos das crianças e adultos de aprender o padrão dominante. Mas é necessário para ser um professor democrático e tolerante que se explicite, é necessário que deixe claro para as crianças ou adultos que a maneira deles de falar é tão bonita quanto a nossa, e que é direito deles falar de tal modo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Linguagem (cultura)'] ); 
		\App\Trecho::create([
			"verbete_id" => 237,
			"titulo_video" => "O menino popular e a educação",
			"tipo_recurso" => "vídeo", 
			"tempo" => "02h23min00s a 02h24min14s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/864", 
			"texto" => "Linguagem da criança é uma linguagem de classe. É preciso que a gente saiba que linguagem não é instrumento de conversa. Linguagem faz parte da identidade cultural daquela pessoa que fala. É preciso que a gente saiba que ninguém ensina linguagem a ninguém, alguém ensina gramática a alguém. Linguagem não. Basta falar, articular para ter já, um pouco consciente, estruturada a linguagem. (...) Outros linguistas chamam competência linguística. As crianças populares chegam com uma competência linguística, só que é uma competência linguística de classe. E é diferente da nossa competência linguística, da competência linguística de meus netos.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Linguagem (padrão culto)'] ); 
		\App\Trecho::create([
			"verbete_id" => 238,
			"titulo_video" => "Diálogo com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h52min40s a 01h53min15s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3229", 
			"texto" => "O fato é que se pretendem impor aos meninos da favela a linguagem chamada do padrão culto que é esse que estou falando aqui, que nós estamos falando aqui isso quer dizer não se respeita a estrutura de pensamento dos meninos do morro, dos meninos dos córregos. Então, os meninos dizem: a gente chegamos, e a professora manda os calar e diz que não pode repetir isso isso é um erro, um absurdo, não pode falar assim. Mas, é assim que fala o pai do menino, é assim que fala o irmão do menino, é assim que fala o vizinho do menino.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Linguagem (respeito)'] ); 
		\App\Trecho::create([
			"verbete_id" => 239,
			"titulo_video" => "Aprendendo didática com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h56min35s a 00h57min21s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1887", 
			"texto" => "Você tem que respeitar os níveis de experiência concreta dos educandos quando você discute com eles ciências sociais, quando você discute com os meninos o conhecimento do meio, quando você discute com os meninos a linguagem. Quer dizer, como é que você pode dar gramática de língua portuguesa sem estudar a linguagem de classe com quem fala. Quer dizer, a massa popular, isso que os linguistas chamam, tem uma competência linguística, porque todo mundo que fala uma língua tem competência nela, tecnicamente isso é que significa competência, fala.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Limites'] ); 
		\App\Trecho::create([
			"verbete_id" => 240,
			"titulo_video" => "Diálogo com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h42min38s a 00h42min51s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3229", 
			"texto" => "Não é possível fugir dos limites, pois sem limite não há vida sem limite não há crescimento, sem limite não há disciplina, sem limite não há criatividade, sem limite não há presença no mundo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Limite (ética)'] ); 
		\App\Trecho::create([
			"verbete_id" => 241,
			"titulo_video" => "Arquivo N  Paulo Freire, o Educador",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h18min49s a 00h19min32s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1888", 
			"texto" => "Eu estou absolutamente convencido de que a liberdade não cresce nem se constitui sem limites. Quer dizer, ela tem inclusive o grande problema da liberdade é como assumir os limites eticamente e não como assumir com medo da autoridade. Quer dizer, o pai que grita, esperneia e que tem um filho silenciado, não é o pai que convence e que discute que tem um filho silencioso, entende? Quer dizer, o que eu quero é um filho que saiba assumir o silêncio e não um filho que viva silenciado, entende? E isso exige o respeito ético dos limites.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Linguagem'] ); 
		\App\Trecho::create([
			"verbete_id" => 242,
			"titulo_video" => "Paulo Freire conversa com estudantes de curso para o magistério",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h07min18s a 01h08min51s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3292", 
			"texto" => "No fundo, as classes populares devem aprender a sintaxe dominante a partir de três pontos. Primeiro, reconhecendo que sua linguagem das classes populares é bonita também; Segundo, é preciso aprender a sintaxe dominante para sobreviver, para ter emprego, porque se o sujeito chega dizendo 'A gente cheguemos', 'menas verdades', o cara se fecha e não dá emprego a ele, portanto, é preciso dominar pra sobreviver, pra conseguir emprego, pra viver na vida; Terceiro, para brigar melhor pelos seus direitos, é isso, é à medida em que a classe popular aprende como a classe dominante fala, fala o mesmo discurso, ela briga muito mais, então é por essa razão, essas razões e não razão reacionária. Qual é a razão reacionária pela qual a classe dominada deve falar como a classe dominante? É porque a classe dominada é uma classe inferior, fala uma língua inferior, uma linguagem inferior e precisa aprender a melhor, a mais bonita, a mais bonita não, a bonita. Isso é um argumento autoritário e não científico, é ideológico, puramente ideológico.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Local (contexto)'] ); 
		\App\Trecho::create([
			"verbete_id" => 243,
			"titulo_video" => "A dimensão pedagógica da produção científica",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h46min00s a 00h47min57s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3232", 
			"texto" => "O que eu acho formidável é essa capacidade que o bicho gente veio historicamente desenvolvendo que a da abstração do saber. Você pode trabalhando com um grupo de crianças do Araguaia discutir a temática dessas crianças você pode em um certo momento com ajuda inclusive de certos elementos visuais, você pode mostrar uma situação urbana e apesar da distância física você pode provocar o exercício de imaginação que ajudaria as crianças do Araguaia a dar um voo, ficando no seu espaço e de entender um pouco a diferença e, portanto, compreender a compreensão diferente da cultura e vice-versa. Se isso fosse necessário evidentemente, eu acho que,  em certo momento é necessário. Na medida em que você entra no processo de fazer ciência, você vê que o próprio processo de fazer ciência demanda de a gente ir mais além do contexto local, no qual a gente começa a compreender o processo, mas se a gente ficar adstrito ao contexto local a gente deixa de ser local e passa a ser localista, e aí então, o localismo inviabiliza o processo de interdisciplinaridade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Luta'] ); 
		\App\Trecho::create([
			"verbete_id" => 244,
			"titulo_video" => "Diálogo com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h23min59s a 00h26min06s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3229", 
			"texto" => "A deterioração ética que nós temos experimentado na sucessão de escândalos no país, a impunidade no país, a sem-vergonhice que se democratiza no país, que tudo isso cria/gera certa atitude de descrença, o que será pior, pode se estender até a uma posição de cinismo também diante do mundo em que a gente diz: puxa eu já fiz alguma coisa, cabe agora as gerações mais novas. E quando a deterioração ética cresce muito e você ouve de uma geração de dezoito anos que já fez muita coisa e que a outra geração que faça, então, está tudo acabado. Porque o importante, o fundamental é que a gente chegue, é que a gente lute para chegar a idade pós-moderna continuando na briga. Quer dizer, eu me recuso a fazer o discurso de que as gerações mais novas agora que façam; eu continuo com o dever de fazer e continuo lutando. Mas te digo para terminar a resposta para tua pergunta, implica em  nós cada vez mais um conhecimento mais rigoroso das razões do desânimo de um lado e do outro, implica a prática ou a participação crítica na prática política. É essa que pode, no meu entender, pelo menos no meu caso é assim, ajudar, que nós como educadoras e como educadores continuemos apostando na necessidade de trabalhar seriamente apesar de tudo.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 244,
			"titulo_video" => "Darcy Ribeiro e Paulo Freire  Educadores do Brasil",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h50min45s a 00h52min29s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1914", 
			"texto" => "Eu morreria feliz se eu visse o Brasil cheio em seu tempo histórico de marchas, de marcha dos que não tem escola, marcha dos reprovados, marcha dos que querem amar e não podem, marcha dos que se recusam a uma obediência servil, marcha dos que se rebelam, marcha dos que querem ser e são proibidos de ser. Eu acho que afinal de contas as marchas são andarilhagens históricas pelo mundo. Por exemplo eu lamento que tristemente que Darcy Ribeiro já não possa saber, já não possa estar vendo e sentindo e vendo uma marcha como essa. Como eu acredito em Deus, eu agradeço muito a Deus por estar vivo e poder ver e saber que os sem terras luta contra uma vontade reacionária e histórica implantada nesse país. E meu apelo quando eu termino tua primeira pergunta meu desejo, meu sonho como eu disse antes é que outras marchas se instale nesse país, por exemplo, a marcha pela decência, marcha pela superação da sem-vergonhice que se democratizou terrivelmente nesse país. Quer dizer, eu acho que essas marcham nos afirmam como gente, como sociedade, querendo se democratizar.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Luta (consciência)'] ); 
		\App\Trecho::create([
			"verbete_id" => 245,
			"titulo_video" => "Paulo Freire conversa com estudantes de curso para o magistério",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h27min20s a 00h27min45s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3292", 
			"texto" => "Assumir a seriedade do que fazem, vocês têm que ser coerentes com o que fazem, vocês têm que ser coerentes com a exigência, se vocês exigem da direção da escola, vocês têm que exigir de vocês, quer dizer, vocês têm que levar a sério o protesto que fazem e levar a sério a resposta que recebem.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Luta (escola)'] ); 
		\App\Trecho::create([
			"verbete_id" => 246,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h27min15s a 00h27min46s (PROGRAMA 1)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "Uma das lutas que a gente deveria ter no Brasil é a luta em favor da escola pública melhor, gratuita. A educação gratuita pela qual a gente precisa lutar para obter e para estender ao maior número possível de brasileiros. Primeiro a escolar do primeiro grau, mas de boa qualidade. A gente precisa lutar para melhorar e ampliar a escola. A gente precisa fazer crescer a quantidade e crescer a qualidade da escola pública brasileira de primeiro grau.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Luta (vida)'] ); 
		\App\Trecho::create([
			"verbete_id" => 247,
			"titulo_video" => "Paulo Freire conversa com Patrick Clarke",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h14min12s a 00h15min27s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1950", 
			"texto" => "Eu acho que só quem não briga é quem não tem futuro, e quem não tem futuro não tem presente, porque o futuro afinal de contas não é uma província que fica distanciada de mim, muito além de mim, à espera que eu chegue lá, pelo contrário, eu sou fazedor do futuro. Quando eu digo eu, eu tô dizendo nós, quer dizer, uma quantidade x de gente que pensa mais ou menos igual, diferentemente, mas que tem o mesmo sonho. E por isso é que não é possível esquecer a ética, quer dizer, você não pode fazer coisas que a Ciência permite, mas que possivelmente do ponto de vista ético, não deve ser feita. Ao pensar assim eu estou pondo em cima da mesa para mim a possibilidade ou não de lutar, quer dizer, a luta passa a ser um ingrediente fundamental da existência humana, e eu até diria a luta é um ingrediente fundamental da vida.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Machismo'] ); 
		\App\Trecho::create([
			"verbete_id" => 248,
			"titulo_video" => "Diálogo com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h20min06s 01h20min40s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3229", 
			"texto" => "A gente tem que acabar com o machismo no meu entender que é tão errado quanto o antinatureza. É outra ética, a ética macha tem que acabar e ao acabar essa ética machista, tem que acabar a linguagem machista, tem acabar com a moda machista, tem que acabar com tudo que esta envolvido nesse poderio absoluto do homem sob a mulher.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Marginalização'] ); 
		\App\Trecho::create([
			"verbete_id" => 249,
			"titulo_video" => "Educación Formal y no formal",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h24min29s a 00h25min17s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/2946", 
			"texto" => "Eu creio que o conceito de marginalização é, como muitos outros, um conceito que adocica, ameniza e esconde, oculta uma verdade. Por isso eu falo de desocultação da verdade ou de verdades. Este conceito, marginalização, parece que faz isso. Eu, em lugar de marginalizado, falo de oprimidos, eu falo de ofendidos, eu falo de roubados.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Marx'] ); 
		\App\Trecho::create([
			"verbete_id" => 250,
			"titulo_video" => "Entrevista de Paulo Freire no Programa Caminhos da Rede Vida",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h13min04s a 00h14min09s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1923", 
			"texto" => "Marx para mim não era, continua. Quer dizer, em segundo lugar, ele continua mais como ser histórico, ele precisa continuar a revisto. Eu acho que ninguém é, a gente está sempre sendo, e a condição de estar sempre sendo implica uma revisão naquelas coisas que a gente fez, que a gente pensou, que a gente sonhou em fazer. Em terceiro lugar eu gostaria de dizer o que eu uma vez disse na Inglaterra a um jornalista quando me perguntou se eu era marxista, e eu disse: o respeito a Marx eu tenho que não mentir e dizer que não posso ser marxista, e o cara perguntou o porquê, e eu disse: olha, uma condição fundamental para você ser marxista é você não aceitar nenhum a priori da história. Isso é uma condição fundamental para o pensamento marxista.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Massa popular'] ); 
		\App\Trecho::create([
			"verbete_id" => 251,
			"titulo_video" => "Arquivo N  Paulo Freire, o Educador",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h08min37s a 00h9min23s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1888", 
			"texto" => "As grandes massas populares do país sempre foram muito relegadas. Quer dizer, essa sociedade nossa é uma sociedade profundamente autoritária, ela foi inventada autoritariamente e no autoritarismo que ela foi gerada e em que ela se nutre até hoje, as massas populares estiveram sempre muito distantes de qualquer prerrogativa. Quer dizer, é em nome delas que nós falamos que o poder se faz, que o poder se executa, mas dificilmente com elas. E o analfabetismo é uma expressão da condição de exploradas, da condição de dominadas e não da condição de incapazes. Quer dizer, as massas populares brasileiras não são incompetentes, nem massa popular nenhuma é incompetente.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Matemática'] ); 
		\App\Trecho::create([
			"verbete_id" => 252,
			"titulo_video" => "Paulo Freire e a Educação Matemática",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h03min53s a 00h04min34s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1880", 
			"texto" => "Eu não tenho dúvida nenhuma da importância de qualquer esforço que não deve inclusive ser um esforço exclusivo do matemático, do professor de matemática por exemplo mas que deveria ser no meu entender um esforço do homem e da mulher, matemático, biólogo, físico ou carpinteiro, que é exatamente o esforço de nos reconhecer como corpos consciente matematicizados.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 252,
			"titulo_video" => "Paulo Freire e a Educação Matemática",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h06min13s 00h07min08s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1880", 
			"texto" => "A vida que vira existência se matematiza. Para mim, voltando a esse ponto, eu acho que uma preocupação fundamental não apenas dos matemáticos, mas de todo nós, sobretudo, dos educadores a quem cabe certas decifrações do mundo, eu acho que uma das grandes preocupações deveria ser essa: a de propor aos jovens, estudantes, alunos, educandos, que antes e ao mesmo tempo que descobrem que 4 por 4 são 16, descobrem também que há uma forma matemática de estar no mundo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Matemática (libertação)'] ); 
		\App\Trecho::create([
			"verbete_id" => 253,
			"titulo_video" => "Paulo Freire e a Educação Matemática",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h10min15s a 000h12min55s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1880", 
			"texto" => "Essa possível alfabetização da matemática... ajudaria enormemente a própria criação da cidadania. Eu acho que no momento em que você traduz a naturalidade da matemática como uma condição de estar no mundo, você trabalha contra um certo elitismo matemático, mesmo contra a vontade que alguns matemáticos têm. Você democratiza a possibilidade da naturalidade da matemática e isso é cidadania. Enquanto você viabiliza a convivência com a matemática você ajuda na solução de inúmeras questões que ficam aí as vezes entulhadas precisamente por falta de mínima competência sobre a matéria, porque a compreensão da matemática virou uma coisa profundamente refinada, quando na verdade não é e não deveria ser, e não quero com isso dizer que os estudos matemáticos não deveriam ter a profundidade e a complexidade que eles têm de ter. Mas o que eu digo é o seguinte: na medida em que você não faz simplismo, mas torna simples a compreensão da existência matemática da existência humana aí não há dúvida nenhuma que você perceberá a importância desta compreensão matemática, tão grande quanto a linguagem.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Medo'] ); 
		\App\Trecho::create([
			"verbete_id" => 254,
			"titulo_video" => "Conversando com Paulo Freire sobre Arte e Educação aos 21 anos da Pedagogia do Oprimido",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h44min54s a 00h45min09s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1882", 
			"texto" => "A escola precisa diminuir os medos. Medos que o menino faça isso, que o menino faça aquilo. É preciso desneurotizar a escola. E, pra mim, a coragem da liberdade leva para isso.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 254,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h11min24s a 00h11min43s (PROGRAMA 1)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "Eu aprendi a só aceitar que o medo me dominasse quando eu, ou depois que eu descobri uma razão plausível, uma razão razoável, racional, para aquilo que estava parecendo ser irregular.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Memorização (aprendizado)'] ); 
		\App\Trecho::create([
			"verbete_id" => 255,
			"titulo_video" => "Aprendendo didática com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h30min41s a 00h31min45s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1887", 
			"texto" => "Para mim no momento que qualquer um de nós alcança a razão de ser ou as possíveis razões de ser, que explicam um certo conteúdo, um certo objeto, então a gente apreende o objeto. E ao apreender o objeto, a gente sabe o objeto. E por que a gente sabe o objeto? A gente memoriza a descrição do conceito dele. Então, a memorização se autentica e é absolutamente indispensável enquanto consequência. Pra mim, o equívoco está em que se usa o sintoma, a memorização mecânica como meio de conhecer. Para mim, ela é consequência de saber.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Método (teoria do conhecimento)'] ); 
		\App\Trecho::create([
			"verbete_id" => 256,
			"titulo_video" => "Encontro com Paulo Freire: reflexões sobre a prática educacional",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h21min08s a 00h21min47s (1°ÁUDIO)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3280", 
			"texto" => "A experiência em tomar distância do objeto de pesquisa para melhor entendê-lo tem um nome técnico que se chama distanciamento epistemológico do objeto. O distanciamento epistemológico do objeto é exatamente o método da teoria do conhecimento, através do qual, afastando-se do objeto, o sujeito se aproxima do objeto.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Mérito'] ); 
		\App\Trecho::create([
			"verbete_id" => 257,
			"titulo_video" => "Entrega do prêmio interamericano de educação 'Andres Bello' pela OEA a Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h08min38s a 00h10min09s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1886", 
			"texto" => "Obviamente, eu tenho tido, ao longo da minha vida, experiências de festas, em que me abraçam, em que me homenageiam, e festas que me tocam, que me sensibilizam na medida mesma em que me dizem: veja, Paulo, que coisa interessante, você não precisou morrer para, 50 anos depois um historiador descobrir que você viveu, que fez a pedagogia do oprimido, e que teria merecido alguns prêmios. E, hoje, você vivo, recebe estas festas. Evidentemente que esse quase recado, eu escuto nas festas, nos doutoramentos, Honoris Causa, que eu tenho recebido, e também eu nunca disse nessas festas que não deveria ser bem eu que aqui estivesse e outro, ou outros com mais valor. Não, eu acho que eu mereço.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Metodologias (bancárias)'] ); 
		\App\Trecho::create([
			"verbete_id" => 258,
			"titulo_video" => "Paulo Freire: Constructor de Sueños",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h11min45s a 00h12min27s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1940", 
			"texto" => "A ideologia dominante involucra sempre metodologias bancárias. Quanto mais você castra a capacidade de pensar certo, que implica capturar a essência dos acontecimentos, quanto mais você sugere as pessoas que a realidade é um puro dado, um puro dado, mais você domestica.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Modestia'] ); 
		\App\Trecho::create([
			"verbete_id" => 259,
			"titulo_video" => "Entrega do prêmio interamericano de educação 'Andres Bello' pela OEA a Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h11min00s a 00h12min56s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1886", 
			"texto" => "A falsa modéstia eu acho imoral, absolutamente imoral. Quer dizer, o sujeito dizer que não deveria bem estar aqui, que era melhor não ter vindo. Eu vim porque eu acho que está certo. Agora, repito que isso me dá alegria, uma alegria sadia de um sujeito que tem boa saúde, eu tenho boa saúde, então não posso dizer que uma festa dessa me faz mal. Ela me faz bem. Agora, só que, nas experiências todas que tenho experimentado, que eu tenho vivido, quando acaba a festa, e que eu volto para casa, eu volto mais convencido de duas coisas: a primeira, de que eu tenho um direito pleno de ficar contente com isso. A segunda, de que eu não tenho direito nenhum de ficar metido a besta por causa disso. Quer dizer, não há como ficar arrogante porque organismos do mundo, porque homens e mulheres, universidades, camponeses também, plantadores de roças me, homenageiam da mesma forma, e me dão, não os cheques, mas me dão os diplomas. Eu tenho essa alegria comigo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'MOVA'] ); 
		\App\Trecho::create([
			"verbete_id" => 260,
			"titulo_video" => "Paulo Freire entrevistado no programa 'Matéria Prima' da TV Cultura",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h19min00s a 00h20min50s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3218", 
			"texto" => "O projeto MOVA é um dos projetos que eu diria que é um dos encantos pra mim da secretaria de educação, o projeto MOVA teria que me recordar de tantos anos atrás quando eu coordenei, quando eu dirigi no Plano Nacional em Brasília o Programa Nacional de Cultura Popular e de educação Popular, só que agora a gente tá fazendo isso, possivelmente o que deveria ser de forma um tanto diferente, agora nós estamos tentando trabalhar diretamente com relação aos movimentos sociais populares nós não temos no projeto MOVA educadores por cuja tarefa nós nos responsabilizemos diretamente os educadores são dos movimentos nós assumimos a responsabilidade da formação técnica científica dos educadores e das educadoras e passamos também verbas para os movimentos que pagam aos educadores.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'MOVA (São Paulo)'] ); 
		\App\Trecho::create([
			"verbete_id" => 261,
			"titulo_video" => "Alfabetização  Globo Ciência (Programa 281)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h05min00s a 00h06min18s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1899", 
			"texto" => "O MOVA São Paulo é, em primeiro lugar, um esforço de natureza política e obviamente como todo projeto pedagógico também de natureza pedagógica. No sentido de darmos nós a frente da Secretaria Municipal de Educação de São Paulo uma contribuição por pequena que seja e até coincidentemente dentro do ano internacional da alfabetização, uma contribuição a jovens e adultos que na cidade de São Paulo por n razões não leem, nem escrevem a palavra, e ele não é uma campanha. Por exemplo, no sentido tradicional da palavra em que você lança um esforço dirigido, no sentido de A, B, ou C para em seguida parar. Ele é muito mais um movimento mesmo. Mas, uma outra coisa interessante além de ser um movimento, é que não é um trabalho feito apenas pela Secretária Municipal de Educação, mas um trabalho feito por ela em colaboração com os movimentos populares, com os movimentos populares, sociais da cidade de São Paulo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Movimentos Sociais'] ); 
		\App\Trecho::create([
			"verbete_id" => 262,
			"titulo_video" => "Movimento de Defesa do Favelado",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h11min40s a 00h12min19s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1950", 
			"texto" => "Eu acho que o papel dos movimentos sociais é um papel importantíssimo de natureza política, de natureza ética, de natureza estética. Eu não afasto a boniteza de nada, quer dizer, eu acho que os movimentos têm que, tem a própria, os movimentos teriam que encarnar a boniteza da libertação, entende, e lutar por ela, também, a poesia da libertação, que para mim não existe sem ela. Não estou propondo aos movimentos que em dia de sábado fiquem lendo poesias é brigando, é que entendam a sua briga como um grande poema, entende, como sonetos, como epopeias, quer dizer, a briga é uma coisa bonita, e sendo bonita necessariamente também é ética.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Mudança'] ); 
		\App\Trecho::create([
			"verbete_id" => 263,
			"titulo_video" => "A conversation with Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h08min05s a 00h08min25s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3209", 
			"texto" => "Minha convicção filosófica é de que nós não viemos para manter o mundo como ele é. Nós viemos ao mundo para mudar. Nós temos que mudar a realidade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Nacionalidade'] ); 
		\App\Trecho::create([
			"verbete_id" => 264,
			"titulo_video" => "Fala de Paulo Freire na Universidade de Recife ao retornar ao Brasil",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h15min30s a 00h17min33", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3253", 
			"texto" => "Se eu não tivesse sido intensamente marcado pelo Recife, pelo Nordeste, pelo Brasil, eu não teria me sentido latino-americano, é a minha pernambucanidade que me faz brasileiro, profundamente, brasileiro. Uma brasilidade que rejeita o loteamento do Brasil. E ver o Brasil em toda parte que seja Brasil, Rio, São Paulo, Recife, Maceió, Aracaju, Campina Grande, Caruaru, Jaboatão Moreno, Bahia, é grande. E é essa brasilidade que em última análise que decorre pernambucanidade, que me faz descobrir, depois, desdobrando em latino-americano. Por isso mesmo quando me perguntam hoje, na Europa, nos Estados Unidos, de onde eu sou, eu digo sempre Latino Americano do Brasil. E se insistir um pouco mais, então eu venho à minha raiz que ela explica o resto. E essa latino americanidade que finalmente me faz ver o mundo distante que me leva a essa andarilhagem pelo mundo afora.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Natureza humana'] ); 
		\App\Trecho::create([
			"verbete_id" => 265,
			"titulo_video" => "Encontro com Paulo Freire no Ginásio Tesourinha em Porto Alegre",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h48min17s a 00h49min06s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1933", 
			"texto" => "Há quem pense que a natureza humana é algo com o qual a gente nasce completa, e é algo que se constituiu antes de nós. Quando digo de nós não digo de mim, melhor eu diria antes da história. Eu acho que não, eu acho que a natureza humana vem se organizando, se constituindo socialmente e historicamente na prática histórica social nossa.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 265,
			"titulo_video" => "Entrevista de Paulo Freire concedida a Eitan Bronstein",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h03min26s a 00h05min14s (LADO A)", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3244", 
			"texto" => "Eu estou absolutamente convencido de que em primeiro lugar é possível falar-se de uma natureza humana, mas estou absolutamente convencido de que a natureza humana não é uma a priori da história. A natureza humana não precede a presença do homem e da mulher no mundo e na história. Terceiro que a natureza humana, pelo contrário, vem constituindo social e historicamente, quer dizer, a natureza humana é uma produção histórica. Na medida, porém, em que o ser humano experimentando-se historicamente começou a constituir sua natureza começou, portanto, a explicitar ou expressar a onde quer que ele em Israel ou em São Paulo na África ou no Estados Unidos na medida em que o ser humano veio e vem constituindo essa natureza social e historicamente, ele vem explicitando determinadas qualidades ou determinadas exigências enquanto ser humano que eu considero como sendo a ética universal do ser humano.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Oprimido (manhas)'] ); 
		\App\Trecho::create([
			"verbete_id" => 266,
			"titulo_video" => "Seminário 'Reflexão sobre processo metodológico de alfabetização'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h32min57s a 00h34min06s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3308", 
			"texto" => "Eu aprendi certas astúcias, certas manhas que as classes sociais oprimidas têm que ter, precisam inventar e criar, quer dizer, não há um oprimido que não invente manhas para se defender da força do poder de quem oprime e de quem manda. E o caso mais radical de sofrimento do povo também é o corpo dos oprimidos que se defende e cria imunizações, quer dizer, uma capacidade de resistir a certas invasões de fora obviamente e que o corpo de experiência não oprimida não conseguiu construir e dificilmente se defenderia", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Oprimido (luta)'] ); 
		\App\Trecho::create([
			"verbete_id" => 267,
			"titulo_video" => "Seminário 'Reflexão sobre processo metodológico de alfabetização'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h37min50s a 00h38min24s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3308", 
			"texto" => "Eu nunca recusei ter uma roupinha que pudesse vestir, como tenho hoje, morar numa casa gostosinha, a questão era poder e brigar por poder, mas sempre estive metido na loucura de fazer alguma coisa em que eu pudesse dar alguma contribuição pequena que ela fosse à luta dos oprimidos.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Oralidade (aprendizagem)'] ); 
		\App\Trecho::create([
			"verbete_id" => 268,
			"titulo_video" => "Alfabetizar é construir",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h10min45s a 00h11min51s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1953", 
			"texto" => "Que ele continue desenvolvendo sua oralidade que era uma ou que é uma das conotações do seu de perfil de analfabeto. Quer dizer, ele é profunda e exclusivamente oral. Então, você não tem de um lado o direito, de outro, não é científico que você decrete que a partir da quarta-feira que vem o alfabetizando no circo ou na escola, seja lá onde for já não vai ser oral. Não é porque vai entrar na experiência gráfica que ele vai então esquecer a sua oralidade. Eu insisto em que o exercício da oralidade continue constantemente e será a partir da leitura do mundo que a leitura da palavra vai fruir. Quer dizer, no fundo o comando da palavra escrita nasce da compreensão do mundo sobre a qual ele faz nascer do  discurso dele.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Palavra escrita'] ); 
		\App\Trecho::create([
			"verbete_id" => 269,
			"titulo_video" => "Programa 'Clodovil Abre o Jogo' entrevista Paulo Freire e Tatiana Belinky",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h17min49s a 00h18min00s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1915", 
			"texto" => "É, quando ela se articula, porque a palavra em si sozinha, isolada, a palavra não é nada.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Paulo Freire (experiências)'] ); 
		\App\Trecho::create([
			"verbete_id" => 270,
			"titulo_video" => "Paulo Freire: o Andarilho da utopia",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h09min35s a 00h10min34s (PROGRAMA 1)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3279", 
			"texto" => "Agora como é que nós moramos, uma casa que tem um quarto só que é tudo. É banheiro, é sala, é quarto de dormir, é tudo, com os cachorros misturados. Quando nós chegamos em casa às 22:00h da noite, 20h da noite, 19h da noite, os meninos estão endiabrados porque não comeram bem, tão sujos não tem água para tomar banho, porque a gente não tem chuveiro elétrico, a gente não tem água assim a solta em casa, os meninos estão com fome, chateados, cansados, aborrecidos e impertinentes, e nós não podemos deixar de dormir porque no dia seguinte às 04:00h da manhã a fábrica apita para acordar o bairro inteiro. E aí dizia ele, como é que o senhor vai querer que, com uma situação como essa, a gente tem o diálogo que o senhor quer? Quer dizer, ele me fez naquela noite uma análise de classe que eu não tinha sido capaz de fazer.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Paulo Freire (método)'] ); 
		\App\Trecho::create([
			"verbete_id" => 271,
			"titulo_video" => "Paulo Freire conversa com americanos em sua casa",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h02min54s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3257", 
			"texto" => "O que Paulo Freire está dizendo não é exclusivamente sobre metodologia, porque isso não existe. Se eu falar exclusivamente sobre metodologia, eu estarei fazendo alguns pensamentos errados entre métodos e contextos e os objetivos, o compreender não me permitiria falar sobre métodos. O que digo é que os métodos não existem neles mesmos por eles mesmos. Então, todos nós precisamos saber, ter a mesma convivência com a globalidade dos pensamentos. [Barulho de bebê] eu tenho dito constantemente que para me seguir é necessário não me seguir. O que significa que para me seguir é preciso me recriar, e me recriando é o único modo que eu poderia ser entendido. Isso é uma declaração a qual tem algumas bases teóricas e condições políticas. Se pegarmos essa declaração e se pensarmos agora sobre a experiência que podemos perguntar a nós mesmos eu tenho que trabalhar com as ideias de Paulo Freire ou não?, em primeira abordagem elas são ao lado, pois elas estão me inventando.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Partido dos Trabalhadores'] ); 
		\App\Trecho::create([
			"verbete_id" => 272,
			"titulo_video" => "Viva Paulo Freire: educador da liberdade",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h27min03s a 01h28min08s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3235", 
			"texto" => "Gramaticalmente não se pode entender isso, mas linguisticamente se pode, dialeticamente se pode, quer dizer, eu deixo precisamente porque fico. Mas fico no teu governo, fico na tua utopia, fico no teu sonho, fico nos teus desejos. Como por exemplo o desejo de fazer deste país uma sociedade menos perversa, menos malvada, mais capaz de amar e de querer bem. Eu vou para casa, mas fico no partido da gente. Não há nada entre mim, em mim contra o projeto fantástico de governo que tu trazes na mão e com qual tu pedagogizas o PT.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 272,
			"titulo_video" => "Viva Paulo Freire: educador da liberdade",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h28min09s a 01h28min33s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3235", 
			"texto" => "O PT precisa ser discípulo de ti e de nós. O PT precisa aprender a governar e PT precisa acabar com aquela mania de ficar feliz... o que tu citaste outro dia, de ficar feliz pra burro quando elege um e depois fica feliz de novo pra burro quando o que se elege deixa o partido. NÃO! A gente tem que pedagogizar esse partido.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 272,
			"titulo_video" => "Viva Paulo Freire: educador da liberdade",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h29min19s a 01h30min15s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3235", 
			"texto" => "O PT é uma criança ainda, é um menino, é um adolescente, que está aprendendo como devia aprender e como só se aprende... molhado da prática de nós todos. Mas é preciso que alguns de nós no PT com posição mais responsável que alguns de nós assumamos uma qualidade revolucionária sem a qual não se muda o mundo que é a humildade. De aprender a tolerância de conviver com o diferente para poder brigar com o antagônico. E tu estás pedagogizando o PT também e eu bato palmas para ti.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 272,
			"titulo_video" => "Viva Paulo Freire: educador da liberdade",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h31min24s a 01h32min39s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3235", 
			"texto" => "E se um dia eu ficasse tão horrorizado com o Partido dos Trabalhadores não havia também nenhum outro [partido] pra eu ir. Sem que ao dizer isso eu esteja pretendendo de maneira nenhuma diminuir as virtudes e as qualidades dos outros partidos, como o teu por exemplo. Agora isso não significa que eu concorde com tudo que o PT diz. E é preciso que não se concorde. O gostoso é ser diferente. Para poder fazer democracia desse país e neste país.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 272,
			"titulo_video" => "Compilado de falas de Paulo Freire enquanto Secretário de Educação",
			"tipo_recurso" => "???", 
			"tempo" => "00h20min29s a 00h21min18s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3210", 
			"texto" => "O PT é uma criança ainda, é um menino, é um adolescente que tá aprendendo e só se aprende, molhado da prática de nós todos. Mas é preciso que alguns de nós, no PT, com posição mais responsável, que alguns de nós assumamos uma qualidade revolucionaria sem a qual não se muda, o mundo,  que é a humildade de aprender, a tolerância de conviver com o diferente pra poder brigar com o antagônico.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Patriotismo'] ); 
		\App\Trecho::create([
			"verbete_id" => 273,
			"titulo_video" => "Darcy Ribeiro e Paulo Freire  Educadores do Brasil",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h41min40s a 00h42min10s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1914", 
			"texto" => "Eu nunca me senti melhor do que ninguém porque sou brasileiro, mas nunca me senti pior do que ninguém porque sou brasileiro. Quer dizer, eu tenho uma alegria especial por ser brasileiro. Não um orgulho maluco, porque seria inclusive, burrice, mas um gosto de falar esse português nordestino.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Pedagogia'] ); 
		\App\Trecho::create([
			"verbete_id" => 274,
			"titulo_video" => "Seminário 'Reflexão sobre processo metodológico de alfabetização'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h31min23s a 00h31min57s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3308", 
			"texto" => "Mas, naquela época, eu era estudante, eu era professor de um colégio excelente do Recife e eu fui aluno e depois fui professor desse colégio de português e foi esse talvez o meu primeiro momento de gosto pela pedagogia", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Pedagogia antidroga'] ); 
		\App\Trecho::create([
			"verbete_id" => 275,
			"titulo_video" => "Paulo Freire: educação, autonomia e as drogas",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h19min19s a 00h20min40s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1934", 
			"texto" => "Então uma pedagogia antidroga precisa valorizar o corpo, que se deteriora com a droga, que se estraga com a droga, e o corpo cujas veias são perfuradas com injeções que me trazem a droga e sem falar nos riscos colaterais, mas eu preciso recuperar meu bem querer ao meu corpo. Eu preciso descobrir que por dramática que seja a minha situação no mundo eu tenho um papel qualquer a cumprir no mundo e que o vício destrói qualquer possibilidade de ter o papel, de desenvolver o papel, de assumir o papel, mas, ao mesmo tempo, eu preciso saber das razões políticas, das razões sociais, das razões econômicas, que explicam o fenômeno da droga.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Pedagogia da Decisão'] ); 
		\App\Trecho::create([
			"verbete_id" => 276,
			"titulo_video" => "Paulo Freire: educação, autonomia e as drogas",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h07min50s a 00h10min19s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1934", 
			"texto" => "Vamos fazer uma pedagogia da decisão e para a decisão, e aí acabaremos com o vício da droga... Há uma só aparência de prazer no gosto que o vício dá.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Pedagogia da Indignação'] ); 
		\App\Trecho::create([
			"verbete_id" => 277,
			"titulo_video" => "Paulo Freire: educação, autonomia e as drogas",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h14min07s 00h15min49s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1934", 
			"texto" => "Se teria que buscar ao mesmo tempo no meu entender caminhos de natureza sociopedagógico, psicopedagógico... se sugere que os sujeitos ameaçados, ou já tocados pelo vício, se sugere a possibilidade de que eles tenham ódio, que eles tenha raiva, de que eles se indignem, o que eu venham chamando de Pedagogia da Indignação, é preciso ter raiva diante dos absurdos, eu não posso ficar em paz com um discurso ameno, caviloso, ..., diante da miséria a que eu assisto no mundo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Pedagogia da pergunta'] ); 
		\App\Trecho::create([
			"verbete_id" => 278,
			"titulo_video" => "Debate: o futuro da escola",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h07min59s a 00h08min20s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1896", 
			"texto" => "Por isso, eu defendi com o filósofo chileno Fagundes, uma pedagogia da pergunta e não da resposta é exatamente a pedagogia que se funda nessa curiosidade, sem a qual não há pedagogia que aumenta essa curiosidade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Pedagogia Pragmática'] ); 
		\App\Trecho::create([
			"verbete_id" => 279,
			"titulo_video" => "Palestra de Paulo Freire no Banco Central",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h05min33s a 01h08min03s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3219", 
			"texto" => "Vejam bem, eu disse formação e não treino, eu me recuso a usar a expressão treinamento, eu acho que as educadoras os educadores e os educandos estamos nos formando permanentemente, e não treinados. Por exemplo, uma das preocupações atuais que nós chamamos pedagogia pragmática é aquela apenas do treinamento técnico científico dos alunos. Para essa perspectiva pragmatista o bom torneio é o homem que sabe manejar bem os instrumentos do seu torno. Para mim, o bom torneio é o que sabe comportar-se, fazer-se em torno, mas além disso sabe discutir a eleição que vem aí. Sabe decide, sabe crítica. É isso que eu chamo de cidadania. A cidadania não se esgota na alfabetização mecânica dos homens e das mulheres. Nesse sentido, tem um bando de intelectuais, assinando por nome que não exercem a cidadania que não tem consciência cívica suficiente para ajudar as transformações necessárias ao país. Então, quando a gente elege a prática docente com a prática profissional da gente, a gente deve ao mesmo tempo aberto não apenas a formação permanente de que a gente precisa, mas aberto também para brigar por essa formação. Quer dizer os professores as professoras do Brasil precisam continuar a lutar pelos salários menos imorais, mas precisam começar a lutar no sentido de ter condições cada vez melhores para poder atuar menos mal como educadores.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Pedagogia da resposta'] ); 
		\App\Trecho::create([
			"verbete_id" => 280,
			"titulo_video" => "Encontro com Paulo Freire: reflexões sobre a prática educacional",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h22min24s a 00h23min00s (1° ÁUDIO)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3280", 
			"texto" => "O professor chega no primeiro dia de aula e faz uma conferência sobre perguntas que os alunos não lhe fizeram, é isso que eu chamo da pedagogia da resposta, não de pedagogia da pergunta. Quer dizer, o aluno chega e ouve uma hora e meia de discurso e, o que é mais trágico, é que, às vezes, nós, os professores não sabemos sequer quem fez as perguntas primeiras e provocaram as respostas que estamos dando.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Pesquisa'] ); 
		\App\Trecho::create([
			"verbete_id" => 281,
			"titulo_video" => "Palestra e entrevista com Paulo Freire realizada no CEFOR",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h00min58s a 00h05min30s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1927", 
			"texto" => "O que é fundamentalmente pesquisar? O que é também agir? pesquisar é buscar, é procurar, é uma ação, é um agir em que quem procura aprende também ao procurar. Porque veja bem procurar é algo importante e fundamental, por isso procurar implica algo que vai se aprendendo com o processo mesmo de procurar. Quer dizer, procurar implica por exemplo ter uma certa ideia prévia do que se procura. Eu não posso procurar nada, a não ser que o nada vire objeto de minha procura, quer dizer, eu estou procurando o nada para saber o que é que a negação de coisas significa, aí eu posso procurar o nada, mas o que eu não posso é procurar nada. Quer dizer, por isso mesmo que o verbo procurar é um verbo que só se satisfaz quando a ação dele se despeja sobre um certo objeto, que é um objeto da procura. Em segundo lugar, procurar ter ideia do que fazer com o objeto em que se procura, quer dizer, como procurar também implica uma certa clareza em torno de para que eu procuro esta coisa e procurar implica também em aprender a procurar. Quer dizer, aprender a procurar envolve o próprio método de procurar, quer dizer, o agir procurar implica metodologia. Quer dizer implica um certo caminho. De maneira geral a vários caminhos através dos quais você pode procurar e você tem que escolher o caminho que você acha mais conveniente para dar a você o resultado da sua ação de procurar, mas procurar também implica uma certa consciência que vai ficando clara de com quem você procura e também procurar significa a favor de quem você quer acha alguma coisa, portanto, contra quem e a favor de que sonho você está envolvida para procurar. Isso tudo põe muito claro que não é procurar sem conhecer. Quer dizer, o ato da procura, o ato da busca, da pesquisa em si provoca conhecimento e necessita de que quem procura conheça e saiba procurar. Ora, eu acho que essa reflexão  inicial deixa muito clara diante de nós que a pesquisa envolve curiosidade.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 281,
			"titulo_video" => "Palestra e entrevista com Paulo Freire realizada no CEFOR",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h07min00s a 00h09min26s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1927", 
			"texto" => "Do ponto de vista do seu achado e do ponto de vista do seu próprio método a busca joga com dois aspectos que muita gente pensou que poderiam ser tratados, feitos ou vividos de formas diferentes, mas que na verdade não podem ser separados que são: de um lado o aspecto da quantidade e do outro o aspecto da qualidade. Quer dizer, a pesquisa não pode ser apenas quantitativa não pode ser medida apenas estatisticamente, quer dizer, o método quantitativo não satisfaz nem esgota toda a pesquisa toda a curiosidade humana, a curiosidade humana não pode estar submetida a centímetros. Você já imaginou se a gente pudesse se perguntar um dia nas escolas no fim do ano quantos quilos de conhecimento as crianças dessa classe conseguiram, quantos metros de saber no campo da biologia? A professora para medir pegaria uma maquininha para fazer as contas e diria os meninos daqui conseguiram um pouquinho menos que as outras eles conseguiram 22m e 22cm de saber. Minha nossa senhora, não pode. Mas por outro lado a pesquisa envolve também uma certa medição uma certa quantificação, mas o que importa em certo tipo de pesquisa, sobretudo, a qualidade que a pesquisa dá com relação a clareza, por exemplo, com que o grupo e eu agora de propósito não direi o grupo pesquisado, mas o grupo sujeito da própria pesquisa sua revelou.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 281,
			"titulo_video" => "Entrevista na casa de Paulo Freire com Alma Flor Ada",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h31min20s a 00h32min23s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1905", 
			"texto" => "Então, eu acho que há o ponto o qual o pesquisador deveria ter explanado, é que se todo tipo de pesquisa tem algo a ver com a educação, a metodologia é participação faz com que o pesquisador use atividades educacionais, ao mesmo tempo, esse tipo de aproximação acaba sendo também que todo tipo de atividade educacional é também pesquisa.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 281,
			"titulo_video" => "Entrevista na casa de Paulo Freire com Alma Flor Ada",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h1min16s a 01h2min17s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1905", 
			"texto" => "Primeiro de tudo, eu acho que nós deveríamos entender que os números, as estatísticas, sozinhos não representam a realidade, em outras palavras, a realidade é algo mais dinâmica, mais vivo, mais contraditório. Eu acho que sendo algo tão dinâmico, realidade mesmo assim, não rejeita numerificação. Realidade não pode aceitar ser transformada em quantificação.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Pesquisa (docência)'] ); 
		\App\Trecho::create([
			"verbete_id" => 282,
			"titulo_video" => "Aula inaugural do Mestrado em Educação da Universidade de Juiz de Fora realizada por Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h02min18s a 01h02min28s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1911", 
			"texto" => "Não é possível separar pesquisa de docência, porque toda pesquisa implica uma docência e toda docência implica uma pesquisa.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Pesquisa (neutralidade)'] ); 
		\App\Trecho::create([
			"verbete_id" => 283,
			"titulo_video" => "Palestra e entrevista com Paulo Freire realizada no CEFOR",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h09min46s a 00h12min47s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1927", 
			"texto" => "Em primeiro lugar não é possível pesquisa neutra, porque como disse a você antes o ato de pesquisar envolve pesquisar o que, pesquisar para que, pesquisa com quem, pesquisar em favor de que, em favor de quem, e, portanto, contra que e contra quem. Ora, um ato com esse ou um processo como esse que é o processo de conhecer não pode se dar indiferente aos problemas, as lutas sociais, não pode se dar diferente aos gostos até, quanto mais aos interesses. Quer dizer, você pode ter uma pesquisa cujos resultados você pode dirigir no sentido de interesse da classe dominante de uma certa sociedade que preserva as maiorias populares ingênuas por exemplo ou distante da razão de ser do que explica que elas sejam dominadas, exploradas etc., mas você pode ter uma pesquisa que pelo contrário o sonho da equipe pesquisadora, pelo contrário, no próprio processo da pesquisa desvelar aos sujeitos também da pesquisa que são os grupos populares desvelar a razão de ser da sua própria espoliação. Ora, no fundo não a pesquisa neutra, então, e as metodologias variam também em função do objetivo que você tem do sonho que você tem. Uma pesquisa que marche no sentido mais aberto mais democrático, necessariamente, tem a participação crescente dos grupos populares e uma pesquisa que pretenda manter as classes populares domesticadas mais e mais manterá as classes dominadas, transformará as classes dominadas em objeto da pesquisa e não em sujeitos da pesquisa. Quer dizer, a pesquisa a pesquisa participante se fundamenta sobretudo por isso, por um sonho também, por um anseio, por uma utopia realizável que é a de ter nos grupos populares sujeitos da própria ação de buscar.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Pesquisador'] ); 
		\App\Trecho::create([
			"verbete_id" => 284,
			"titulo_video" => "Entrevista na casa de Paulo Freire com Alma Flor Ada",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h50min00s a 00h50min22s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1905", 
			"texto" => "Primeiro de tudo, eu vejo que nós temos que reconhecer que é uma situação muito concreta, mas o pesquisador não poderia, através dele ou dela, mudar o mundo entre segunda e terça-feira.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Poder'] ); 
		\App\Trecho::create([
			"verbete_id" => 285,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h22min06s a 00h23min03s (PROGRAMA 5)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "Até hoje, na história, eu não conheço nenhum caso em que uma sociedade tivesse radicalmente transformada através de uma mesa redonda em que, aqueles que precisavam mudar para pode ser, encontraram-se com aqueles que não queriam mudar para continuar a ser. Agora veja, a minha convicção é a seguinte: é a de que todo processo de mudança fere interesses arrumados. A questão que se coloca é saber se aquele que têm o poder para defender os interesses seus montados, instalados cedem ou não cedem o direto àqueles outros, que não têm, a ser e isso, em certo momento, sempre haverá algum tipo de conflito mais forte.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Politicidade (educação)'] ); 
		\App\Trecho::create([
			"verbete_id" => 286,
			"titulo_video" => "Palestra de Paulo Freire no Banco Central",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h53min05s a 00h54min00s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3219", 
			"texto" => "Como educador democrático e não autoritário, eu defendo a politicidade da educação, mas não posso dar nota seis a um aluno, porque ele faz parte de um partido que não é o meu de maneira nenhuma isso é safadeza, isso é imoralidade. Quer dizer, eu estou atribuindo nota ao trabalho do aluno e não a opção política do aluno, partidária do aluno. Quer dizer, portanto, eu insisto em dizer que essa qualidade da prática educativa que eu chamei de politicidade não é partidarismo. Agora, obviamente, que toda politicidade engaja-se se compromete com opções partidárias, mas isso é o direito que tem o educador a educadora.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 286,
			"titulo_video" => "Paulo Freire: Educação e mudança",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h13min54s a 00h14min23s", 
			"endereco_video" => "http://acervo.paulofreire.org:80/xmlui/handle/7891/1931", 
			"texto" => "Politicidade, em outras palavras a qualidade política da educação, quer dizer, não há e nunca haverá, não há e, possivelmente não haverá, jamais, uma prática educativa neutra, quer dizer, toda prática educativa tem uma conotação, uma marca, que não se afasta da prática educativa que é a política.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Pós-alfabetização'] ); 
		\App\Trecho::create([
			"verbete_id" => 287,
			"titulo_video" => "Paulo Freire conversa com estudantes de curso para o magistério",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h44min49s a 00h46min14s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3292", 
			"texto" => "No primeiro momento eu trabalhei muito com o que a gente chama hoje de pós-alfabetização, quer dizer, eu trabalhei com homens e mulheres ora sabendo já ler, ora sem saber ler e trabalhei com conteúdo que eu arrancava da experiência de vida deles.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Postura dialógica'] ); 
		\App\Trecho::create([
			"verbete_id" => 288,
			"titulo_video" => "Compilado de falas de Paulo Freire enquanto Secretário de Educação",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h16min20s a 01h16min45s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3210", 
			"texto" => "A postura dialógica não necessita toda vez de que você faça perguntas e respostas. A postura dialógica tá muito mais capacidade crítica de você provocar a permanente e crescente curiosidade de quem a ouve durante o processo em que você fala.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Prática (motivadora)'] ); 
		\App\Trecho::create([
			"verbete_id" => 289,
			"titulo_video" => "Aprendendo didática com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h45min11s a 00h45min57s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1887", 
			"texto" => "A motivação não precede a prática, ela é um momento necessário da prática. Um dos equívocos nossos antidialéticos é exatamente o de separar motivação de prática, programação de prática, e avaliação de prática, tudo isso são momentos engendrados na prática mesma. Então, no momento em que tu tens uma prática, uma prática crítica é essa prática crítica que motiva o educador e não uma prática fora dessa prática pra motivá-lo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Prática (objeto)'] ); 
		\App\Trecho::create([
			"verbete_id" => 290,
			"titulo_video" => "Aprendendo didática com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h16min50s a 00h17min52s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1887", 
			"texto" => "Na prática de se aproximar do objeto, na prática de tratar com o educando para o educando, o conteúdo. A educadora, indiscutivelmente termina por apreender a fazer melhor essa prática, tá entendendo? Quer dizer, ela termina por descobrir também que ela pode ir inventando caminhos, caminhos eficientes, caminhos eficientes de aproximação, caminhos metódicos de aproximação do objeto. Agora pra mim o que é fundamental é que esta consciência do estar responsabilizada na prática com o educando acompanha constantemente o educador.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Prática (teoria)'] ); 
		\App\Trecho::create([
			"verbete_id" => 291,
			"titulo_video" => "Conferência do professor Paulo Freire e entrega do título de cidadão uberabense",
			"tipo_recurso" => "vídeo", 
			"tempo" => "02h39min06s a 02h39min32s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1893", 
			"texto" => "A prática não é, por exemplo, a sua teoria, mas a prática engendra um certo saber. É preciso que eu me aproprie com lucidez da teoria que está sendo vivida na prática que eu estou realizando.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 291,
			"titulo_video" => "Seminário 'Reflexão sobre processo metodológico de alfabetização'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h05min50s a 01h06min43s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3308", 
			"texto" => "Não é possível passar do senso comum, atravessar o bom senso e alcançar uma maior rigorosidade sem teoria. Porque a prática sozinha não dá. Nenhuma prática é a teoria de si mesma. O que é preciso é analisar a prática para desembutir de dentro dela a teoria que está lá e não é vista ou a teoria que ainda não está lá e que precisa ser vista é que é o trabalho da gente.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Prática educacional'] ); 
		\App\Trecho::create([
			"verbete_id" => 292,
			"titulo_video" => "Paulo Freire  some thoughts",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h05min20s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1952", 
			"texto" => "A prática educacional nunca é, nunca foi e provavelmente nunca será uma prática neutra. Ou seja, a prática educacional é algo que sempre vai além dela mesma. A prática educacional tem objetivos, tem metas, e o fato de ter um objetivo não permite que esse tipo de prática seja neutra.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Prática educativa'] ); 
		\App\Trecho::create([
			"verbete_id" => 293,
			"titulo_video" => "Diálogo com Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h49min17s a 00h50min17s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1896", 
			"texto" => "A educação tem uma importância enorme nisso, porque ela pode ajudar a clarear. Sobretudo, uma educação que se funde nesse sonho maravilhoso de que nós participamos liderados por eles, pelo Carlos, pelo Sebastião e pelo sonho de outros mais. O sonho de permear a prática educativa da iluminação científica. Quanto mais a gente possa fazer isso na escola primária e na universitária, tanto melhor a gente ajuda a compreender como a gente se molha nas mudanças.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 293,
			"titulo_video" => "Palestra de Paulo Freire no DESED (Banco do Brasil)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h13min59s a 00h17min36s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1891", 
			"texto" => "Então, um outro elemento que não pode deixar de existir na prática educativa é, por exemplo, o objetivo ou o sonho com relação ao amanhã. Quer dizer, esse sonho tem que ver com um certo conjunto de valores éticos e valores morais, intelectuais a que eu aspiro como educador. Olha, um educador ou uma educadora que me diga: Paulo, eu faço a minha tarefa, mas não tenho nada que ver com o amanhã. Quer dizer, ela devia, fazendo um bordado, ela escaparia um pouco, mas não totalmente [Risos]. Porque não é possível estar no mundo, essa coisa que a gente inventou, sem existir e a existência que é uma invenção da gente ultrapassa a vida. No fundo, mulheres e homens inventaram a existência precisamente a partir da libertação das mãos, da invenção da fala, da linguagem sobre os materiais da vida a gente ergueu a existência. E a existência humana não prescinde de sonho, de maneira nenhuma. Eu recentemente acabei de escrever um livro em que eu digo que é possível haja vida e há sem sonho, o que não há é existência sem sonho. Quer dizer, essa história de dizer que as utopias morreram, que hoje você tem que ser pragmático, isso é um discurso neoliberal, é falso e mentiroso que se pretende apresentar como não-ideológico, porque esse discurso decretou a morte da ideologia e a única maneira que a gente tem que matar a ideologia é fazer um discurso ideológico. Quer dizer, não se mata a ideologia a não ser ideologicamente. Então a impossibilidade da neutralidade faz parte da natureza mesma do fenômeno educativo. Toda prática educativa implica métodos de trabalho. É óbvio isso na medida em que sendo a prática educativa uma prática gnosiológica, quer dizer, uma prática em que o processo de conhecer é exigido, ela não pode deixar de ter método, mesmo porque além disso é que a própria posição nossa ou a nossa situação no mundo e com o mundo implica no método de andar no mundo e, além do método, aí vocês tem como continuidade do próprio como necessidade ou como exigência do próprio método, a gente tem, também, na prática educativa processos, técnicas, etc. Então esses são os elementos que constituem a prática educativa.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 293,
			"titulo_video" => "Corpo e dança dos povos",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h03min10s a 00h04min07s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3208", 
			"texto" => "Eu diria que um dos eixos fundamentais para uma prática educativa e para uma compreensão da vida e do mundo, deveria ser aquela que se chocasse, aquela que buscasse negar ou superar uma certa compreensão da prática do primeiro mundo que eu chamaria de pragmatista. Quer dizer, uma prática educativa que vise apenas a instrumentalização do homem e da mulher para enfrentar o mundo tecnológico que tende a crescer mais em sua aplicação.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 293,
			"titulo_video" => "Aula de encerramento com Paulo Freire e Moacir Gadotti na FE-USP",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h08min10s a 00h09min19s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1935", 
			"texto" => "A prática educativa tem uma indiscutível tarefa no processo político, social nosso do ser humano. O que é preciso pra eu evitar numa perspectiva crítica é, de um lado, um discurso ingenuamente otimista segundo o qual a educação faz tudo, exemplo, o discurso que diga hoje que a gente tá precisando nesse país é só educação, não é. Mas é preciso que evitemos o discurso do absoluto pessimismo que é um discurso dos anos 70, que é o seguinte, a escola e a educação não são outra coisa senão a reprodução da ideologia dominante, não é isso. É também isso, mas não é só isso.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 293,
			"titulo_video" => "Palestra de Paulo Freire no Banco Central",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h14min45s a 00h19min30s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3219", 
			"texto" => "Em face de um certo objeto sobre o qual eu me indago, eu nunca vou diretamente ao objeto e o agarro, mas sempre eu faço curvas em torno do objeto o que eu chamo de cercar o objeto, quer dizer que eu cerco o objeto. Do ponto de vista da teoria do conhecimento eu chamo esse cercar o objeto aproximação epistemológica ao objeto. Quer dizer, eu tento me aproximar do objeto para em certo momento apanha-lo na minha mão, olha-lo e quando eu faço isso eu estou fazendo uma coisa que em teoria do conhecimento se chama tomar distância do conhecimento por mais perto que você esteja dele. Quer dizer, em primeiro lugar, eu me aproximo, portanto, eu cerco o objeto e em segundo lugar é como eu estivesse cercando um pequeno animal e em um certo momento eu seguro e agarrasse o animal essa é uma operação que estou chamando aqui de operação epistemológica que vocês fazem no campo da pesquisa de vocês. O problema é que a gente faz e não sabe que esta fazendo no fundo para conhecer é preciso fazer isso. Quer dizer, eu vou cercando o objeto e em determinado momento eu agarro o objeto na minha mão, eu ponho da minha mesa do ponto de vista técnico da teoria do conhecimento este pôr o objeto na minha mesa defronte de mim para me indagar sobre ele se chama tomar distância do objeto, tomar distância epistemológica do objeto. E é interessante, é contraditório, é dialético que é tomando distância do objeto que você se aproxima do objeto. Então a tomada de distância não é uma questão geográfica, é uma questão epistemológica. Portanto, não é a distância física que me explica a tomada de distância do objeto é uma distância reflexivo crítica do objeto. Quer dizer, quanto melhor eu tomo distância do objeto tanto mais perto do objeto eu fico do ponto de vista da minha capacidade de conhecê-lo. Isso é uma coisa que as escolas não fazem, algumas fazem, mas explicitam essa experiência intelectual ao aluno, ao educando e não exigem que o educando se assuma curiosamente, isso é que eu chamo de assumir-se curiosamente e não apassivar-se diante do discurso do educador. São coisas absolutamente contraditórias e diferentes. Então eu estou tentando aqui, agora, cercando o objeto. O objeto da nossa conversa é exatamente uma compreensão crítica da prática educativa, esse é o objeto é o meu foco aqui agora é meu objeto conceitual que eu preciso desvelar. Quer dizer, em lugar de eu ir diretamente a ele, quer dizer, a expressividade conceitual numa compreensão crítica da prática educativa eu estou cercando este objeto para ver o que é que eu encontro no meio do caminho que me ajuda a compreender o próprio objeto.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 293,
			"titulo_video" => "Palestra de Paulo Freire no Banco Central",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h00min37s a 01h01min17s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3219", 
			"texto" => "A prática educativa tem fundamentos para que a gente saiba que ela é política, e não necessariamente partidária, isso aí sim é outra coisa. Mas que ela tenha uma politicidade intrínseca a ela e que ela é ética, na medida em que ela tem que defender princípios que correspondam aos interesses humano do ser humano, quer dizer, que transcendem os interesses puramente de lucro.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 293,
			"titulo_video" => "Palestra de Paulo Freire no Banco do Brasil sobre 'As Relações Humanas no Trabalho'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h01min15s a 00h02min32s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1944", 
			"texto" => "Não há educação neutra, nem há educador neutro. A prática educativa tem uma natureza política e o problema que se coloca, então, ao educador e à educadora é o de assumir a politicidade de sua prática. Quer dizer, em lugar de fugir desta natureza política que marca a sua prática, não há outro caminho senão assumir esta natureza política e ao assumir a natureza política da prática, reconhecer-se também como política, não necessariamente partidária, mas cedo ou tarde devendo ser também partidária. Quer dizer, eu acho que é um dever e um direito que nós... a assunção da cidadania implica a participação militante do ponto de vista político-partidário.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 293,
			"titulo_video" => "Paulo Freire in action",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h04min30s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3223", 
			"texto" => "Eu partia, como parto ainda hoje, de que o ponto inicial de uma prática educativa tem que ter a ver com a experiência direta, imediata, cultural do educando. Quer dizer, tem que ter a ver com os seus níveis de leitura do mundo. E muita gente E eu sempre disse tem de partir daí. E houve, constantemente, críticos disseram que eu reduzia a prática educativa a uma posição localista, que eu defendia a tese de que o educando deve ficar girando em torno do seu local. E eu sempre ria disso porque eu usei o verbo partir, partir não significa ficar. A educação deve partir daí e projetar-se. Então pra mim o problema fundamental como ponto de partida de uma discussão no processo da alfabetização era apresentar decodificações que dissessem respeito ao contexto concreto da experiência social dos educandos.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 293,
			"titulo_video" => "Paulo Freire: educação, autonomia e as drogas",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h00min49s a 00h02min23s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1934", 
			"texto" => "Pensando a prática educativa, pensando a debilidade, a fraqueza da prática educativa que no fundo é o que faz a prática educativa forte, quer dizer, a força da prática educativa reside exatamente na sua fraqueza. Se a prática educativa pudesse fazer tudo como já se pensou, não havia então o porquê de falar na fraqueza da prática educativa uma vez que ela podia fazer tudo, se a prática educativa nada pudesse fazer, não havia tampouco porque falar na fraqueza da prática educativa porque ela já seria fraqueza...", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 293,
			"titulo_video" => "Encontro com Paulo Freire: reflexões sobre a prática educacional",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h14min51s a 00h16min07s (3° ÁUDIO)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3280", 
			"texto" => "Não há prática educativa que não seja, ao mesmo tempo, uma certa teoria do conhecimento posta em prática, então, não há prática educativa que não seja uma experiência cognoscitiva. Toda prática educativa envolve um ato de conhecimento. Aí começa, então, uma possível briga, que é com relação ao papel, por exemplo, de qual é o papel no processo de conhecimento que tem o educador de um lado e o educando do outro? E é exatamente, e essa indagação está presa também ao seguinte: a produção do conhecimento não é uma produção neutra. Quer dizer, quando você conhece, você está produzindo um conhecimento a serviço de alguma coisa, a serviço de algum sonho, a serviço de algum estilo de vida.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Prática educativa (conteúdos)'] ); 
		\App\Trecho::create([
			"verbete_id" => 294,
			"titulo_video" => "Conferência do professor Paulo Freire e entrega do título de cidadão uberabense",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h46min38s a 01h47min17s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1893", 
			"texto" => "Toda prática educativa implica necessariamente a exigência de determinado processo de conhecer. Quer dizer, não há prática educativa que não jogue com a produção de um certo conhecimento. E isso então se explícita no que a gente chama de conteúdo, quer dizer, toda prática educativa envolve certos conteúdos que se ensinam.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Prática educativa (esperança)'] ); 
		\App\Trecho::create([
			"verbete_id" => 295,
			"titulo_video" => "Conferência do professor Paulo Freire e entrega do título de cidadão uberabense",
			"tipo_recurso" => "vídeo", 
			"tempo" => "03h28min04s a 03h28min42s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1893", 
			"texto" => "A minha esperança é que isso não vai ficar no mundo sem mais nem menos. Quer dizer, um dia essas coisas serão superadas, daí minha grande esperança também. O meu apelo é que vocês façam uma prática educativa livre, feliz, democrática, respeitosa das classes populares e com isso para um testemunho, dando uma contribuição fundamental a democracia brasileira.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 295,
			"titulo_video" => "Conferência do professor Paulo Freire e entrega do título de cidadão uberabense",
			"tipo_recurso" => "vídeo", 
			"tempo" => "02h31min59s a 02h32min36s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1893", 
			"texto" => "No fundo a prática educativa é toda ela uma prática que implica esperança que por sua vez coincide com os momentos éticos da própria prática. É uma prática que gera esperança, apesar de também ter momentos de profunda ou gerar momentos de profunda desesperança.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Prática educativa (formação)'] ); 
		\App\Trecho::create([
			"verbete_id" => 296,
			"titulo_video" => "Corpo e dança dos povos",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h05min36s a 00h05min53s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3208", 
			"texto" => "Uma pedagogia ou uma prática educativa que esteja claramente responsável do ponto de vista ético, do ponto de vista político e do ponto de vista epistemológico. No fundo eu defendo formação e não adestramento.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Prática educativa (gnosiológico)'] ); 
		\App\Trecho::create([
			"verbete_id" => 297,
			"titulo_video" => "Conferência do professor Paulo Freire e entrega do título de cidadão uberabense",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h58min34s a 01h59min55s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1893", 
			"texto" => "Na medida em que a educação envolve a produção do conhecimento, envolve a formação integral da pessoa do educando isso é um procedimento único. Há uma marca estética na prática educativa que se entranha nela, quer dizer, tanto quanto há uma marca que a gente pode chamar com outro nome bonito também que é gnosiológica. Quer dizer, toda educação tem algo de gnosiológico, isto é, tem algo que é teoria do conhecimento. Não há educação sem sujeitos, não há educação então sem produção do conhecimento, portanto, a prática educativa é gnosiológica e não há prática educativa sem uma certa boniteza portanto, a prática educativa é estética também, mas não prática educativa sem ética.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Prática educativa (problema)'] ); 
		\App\Trecho::create([
			"verbete_id" => 298,
			"titulo_video" => "Conferência do professor Paulo Freire e entrega do título de cidadão uberabense",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h47min20s a 01h47min58s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1893", 
			"texto" => "O problema central da prática educativa está em como os sujeitos pedagógicos que são de um lado o sujeito educador, do outro o sujeito educando de como esses sujeitos mediados pelo objeto se relacionam para que um exerça a sua tarefa específica que é a de ensinar e com que o outro exerça sua tarefa específica que é a de aprender.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Prática educativa (qualidade)'] ); 
		\App\Trecho::create([
			"verbete_id" => 299,
			"titulo_video" => "Palestra de Paulo Freire no Banco Central",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h01min17s a 01h01min53s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3219", 
			"texto" => "\"Por último, uma outra qualidade da prática educativa, sem a qual eu acho que ela também não existe é o que eu chamo de esteticidade da prática educativa ou é a boniteza da prática educativa. Quer dizer, a prática educativa é em si uma boniteza, enquanto prática formadora, poderá haver coisa mais bacana mais bonita do que participar da formação permanente de um ser. É por isso que eu continuou educador, apesar de tudo\".", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Prática educativa (social)'] ); 
		\App\Trecho::create([
			"verbete_id" => 300,
			"titulo_video" => "Conversatório com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h26min33s a 00h26min57s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3233", 
			"texto" => "Enquanto prática social, a prática educativa em sua riqueza, em sua complexidade é fenômeno típico da existência, por isso mesmo é um fenômeno exclusivamente humano.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Prática educativa (sujeitos)'] ); 
		\App\Trecho::create([
			"verbete_id" => 301,
			"titulo_video" => "Conferência do professor Paulo Freire e entrega do título de cidadão uberabense",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h41min51s a 01h42min26s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1893", 
			"texto" => "O primeiro elemento indispensável a prática educativa é a existência nela de sujeitos da prática. Quer dizer, não há prática educativa, se não há nela sujeitos da própria prática de um lado o sujeito educador ou educadora do outro o sujeito educando.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Prática pedagógica'] ); 
		\App\Trecho::create([
			"verbete_id" => 302,
			"titulo_video" => "Paulo Freire: Constructor de Sueños",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h04min32s a 00h05min36s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1940", 
			"texto" => "A outra questão é perguntar-nos qual é a nossa compreensão do ato de ensinar e qual é a nossa compreensão do ato de aprender e foi exatamente a partir daí que eu fiz a crítica ao que eu chamei de educação bancária. Você não pode ensinar ninguém a amar, você tem que amar. A única forma que você tem para ensinar a amar é amando e eu creio que o amor é a transformação definitiva. Isto me diz novamente que tem que partir, tem que saber partir, do nível de onde o educando está, ou os educandos estão, este é um nível cultural, ideológico, político e por isso que o educador tem que ser sensível.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Prática programada'] ); 
		\App\Trecho::create([
			"verbete_id" => 303,
			"titulo_video" => "Aula inaugural do Mestrado em Educação da Universidade de Juiz de Fora realizada por Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h18min14s a 01h18min33s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1911", 
			"texto" => "Não é possível ter prática sem programar a prática, de como ela avalia o seu estar sendo. Então, o processo de programar e avaliar a prática fazem parte da prática não são momentos anterior ou posterior da prática como algumas ingenuidades pensam.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Prisão (aprendizagem)'] ); 
		\App\Trecho::create([
			"verbete_id" => 304,
			"titulo_video" => "O Educador da Liberdade",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h19min30s a 00h19min50s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1932", 
			"texto" => "Que foi este aprendizado da cadeia, que em muito aspecto me preparou para vida fora do Brasil. Quer dizer o exílio  em muito sentido  se forjou da cadeia.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Professores'] ); 
		\App\Trecho::create([
			"verbete_id" => 305,
			"titulo_video" => "Paulo FreireŽs Message  perceptions on Education and fundamental moments in educational practices towards democratic choice",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h08min34s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1921", 
			"texto" => "Eu defendo que os professores não podem esconder o modo como pensam, como lidam com a realidade, porque eles respeitam os estudantes e eles não gostariam de exercer algum tipo de influência sob os estudantes.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Professor (desvalorização)'] ); 
		\App\Trecho::create([
			"verbete_id" => 306,
			"titulo_video" => "Leitura do Mundo, Leitura da Palavra",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h03min5s8 a 00h07min00s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1926", 
			"texto" => "Eu acho que os governos brasileiros não tem posto em prática, depois de eleitos, o que eles proclamaram enquanto candidatos. No Brasil, é uma coisa interessante. Você vê um candidato a presidente da república, candidato a vereador, candidato a deputado federal, deputado estadual, senador da república, governador do estado. Todos eles, nos discursos de sua campanha política, defendem a educação e a saúde como prioridades, quando se elegem, a prática é diferente. Quer dizer, de maneira nenhuma eu estou vendo no Brasil a prática educativa como uma prioridade, de maneira nenhuma. A prioridade, para mim, existe quando você tem recursos financeiros, quando você tem dinheiro. E não vale também a explicação que alguns homens políticos do Brasil usam constantemente, diante das greves dos professores, Os professores tem razão, ganham mal, mas nós não temos dinheiro. A minha esperança é a de que, em alguns anos mais, nenhum homem público brasileiro possa usar mais esse discurso sob pena de ser vaiado. Quer dizer, é preciso que a sociedade brasileira, toda ela, a sociedade civil brasileira, toda ela, agarre a prioridade da educação nas mãos e esfregue essa prioridade na cara dos políticos brasileiros, não é possível continuar assim, é preciso criar caminhos para isso. Um dos caminhos é uma reorientação da política de gastos do Estado.  Quer dizer, não é possível continuar gastando tanto dinheiro para pagar outros funcionários dez vezes do que, quinze vezes mais, mais do que isso, do que uma professora. Recentemente, eu escrevi um texto em que disse: Um presidente nacional, de uma companhia nacional, ganha não sei quantas vezes mais, apesar da responsabilidade que ele tem. Eu não quero, eu não quero discutir isso, mas ele ganha uma porção de vezes mais o que ganha uma professora. No entanto, ele precisou de uma professora primária. Quer dizer, não há nenhum presidente, de empresa nenhuma desse país ou fora desse país, que um dia não tenha passado pela mão de uma professora primária e o descaso, desrespeito dos governos brasileiros em torno da educação pública, é vergonhoso, é um insulto, eu me sinto como brasileiro insultado, entende? E, por isso, que eu até peço desculpa aos telespectadores pela raiva com que eu tô falando, entendeu? Eu não posso falar dessas coisas em paz. Eu falo irritado, porque, puxa, minha idade até que autoriza eu ter mais raiva do que estou tendo hoje, porque, desde que eu era menino, eu via falar que educação devia ser uma prioridade e nunca foi.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Professores (formação)'] ); 
		\App\Trecho::create([
			"verbete_id" => 307,
			"titulo_video" => "Darcy Ribeiro e Paulo Freire  Educadores do Brasil",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h48min38s a 00h49min09s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1914", 
			"texto" => "Tudo o que a gente puder fazer no sentido de convocar os que vivem entorno da escola e dentro da escola, no sentido de participarem, de tomarem um pouco o destino da escola na mão também. Tudo que a gente pôde fazer nesse sentido é pouco ainda, considerando o trabalho imenso que se põe diante de nós que o de assumir esse país democraticamente.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Professores e alunos (diferenças)'] ); 
		\App\Trecho::create([
			"verbete_id" => 308,
			"titulo_video" => "Paulo Freire on Critical Pedagogy",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h09min20s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1922", 
			"texto" => "As diferenças sobre o processo do conhecimento, no qual ambos devem estar engajados, como eu disse agora há pouco, como um. É esperado do professor, até porque o professor, supostamente, veio ao mundo antes, antes do estudante, pertencendo a outra geração e assim se supõe que o professor tenha tido algumas experiências anteriores com o objeto trabalhado em relação aos estudantes. Essas experiências anteriores, experiências intelectuais, experiência existencial, experiência emocional com o objeto trabalhado, dá ao professor muito mais convivência com o objeto com o qual os estudantes vão começar a ter, a cuidar. Eles são diferentes por conta disso. Entretanto, e para mim essa é a questão principal, a diferença entre os professores e os alunos deve ser, pode ser transformada.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Professores (política)'] ); 
		\App\Trecho::create([
			"verbete_id" => 309,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h14min34s a 00h16min01s (PROGRAMA 11)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "É possível fazer um trabalho, não para transformar esses professores leigos em doutores de nível acadêmico. Não precisa nem podia. Mas é possível aproveitar a sabedoria da vida que ele já tem, independentemente, da sua experiência escolar. E, partindo dela, melhorar seus conhecimentos enormemente, que é possível. Para isso, porém, você precisa de decisão política. A decisão política é absolutamente indispensável. O educador fica ao nível do que ele escreve. Quer dizer, quem faz as escolas, na verdade, não são os filósofos, mesmo quando estes sejam fundamentais para desenhar modelos pedagógicos, propostas pedagógicas etc., mas é preciso que haja decisão política do querer fazer, porque senão o filósofo fica ao nível de uma escola particular. Quer dizer, você planeja um treco bacanérrimo depois você faz uma experiência com dez alunos que pagam, mas, quando você quer fazer a generalização, a decisão política se impõe.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Psicoterapia'] ); 
		\App\Trecho::create([
			"verbete_id" => 310,
			"titulo_video" => "Paulo Freire  some thoughts",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h00min55s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1952", 
			"texto" => "Às vezes, nós temos de ter liberdade de algum evento misterioso do passado que nos tocou profundamente e está muito escondido dentro de nós e nós não o compreendemos claramente. É isso que a psicoterapia pode fazer conosco, nos ajudar a achar algo que está profundamente enterrado em nós mesmos e dificulta nossa vida, trabalho e nosso caminho livre.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Reconhecimento (homenagem)'] ); 
		\App\Trecho::create([
			"verbete_id" => 311,
			"titulo_video" => "Entrega de título Doutor Honoris Causa ao Prof. Paulo Freire pela UFRRJ",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h23min31s a 00h25min23s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1912", 
			"texto" => "É uma coisa interessante que quando falava no honoris eu me via, me analisava na condição de um ouvinte do discurso sobre mim, é uma experiência realmente estranha. Em certo momento, a gente se pergunta: quem é esse Paulo Freire? E em seguida a gente descobre que esse sou eu. Quer dizer, então, eu sou objeto de uma explicação, de uma história. É uma experiência realmente gratificante, eu sempre digo aqui e fora do Brasil, que essa experiência do reconhecimento, das pautas que se batem, esse ouvir obrigado porque estás vivo ainda, o que eu ouço nas ruas, nas universidades do mundo, nas associações populares, essa coisa não faz mal a ninguém.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Reconhecimento (homenagem em vida)'] ); 
		\App\Trecho::create([
			"verbete_id" => 312,
			"titulo_video" => "Entrega de título Doutor Honoris Causa ao Prof. Paulo Freire pela UFRRJ",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h26min00s a 00h27min20s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1912", 
			"texto" => "Eu sou expressão de um momento histórico, de uma cultura, e de uma dor, e de uma desesperança contra o qual luto para criar esperança. Eu não existiria só. O que eu acho, às vezes penoso é que uma pessoa vive o tempo todo assim, morre e só 50 anos depois um pesquisador descobre que esse cara fez isso ou aquilo, e aí então ele começa a aparecer, 50 anos depois que morreu. Uma das minhas imensas alegrias é que eu não precisei morrer para ser visto. [Risos] Porque, inclusive, eu não tenho dúvida nenhuma se perguntar se o senhor prefere morrer e depois ser descoberto, ou continuar por aí mesmo sem ser descoberto? Eu diria sem ser descoberto. O gostoso é ser descoberto vivo, é saber, é ouvir alguém fazer um discurso da vida. E a gente ver que a coisa foi aquilo mesmo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Reinvenção'] ); 
		\App\Trecho::create([
			"verbete_id" => 313,
			"titulo_video" => "Dois olhares reinventando a escola - Paulo e Madalena Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h46min57s a 00h48min41s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1910", 
			"texto" => "Mas o primeiro risco que nós, educadoras e educadores, corremos quando pensamos na reinvenção da escola é começar a reinvenção e, em seguida, a reinvenção virar pura invenção. Isto é contraditório, é dialético... mas façam uma forcinha para trabalhar agora... para serem existentes. O que eu quero dizer com isso? O que eu quero dizer é que no fundo a mulher e o homem...nunca inventam, sempre reinventam. O que eu quero dizer é que faz parte da natureza da existência que ela, depois que foi inventada, nunca mais possa permanecer inventada. O que eu quero dizer é que faz parte da natureza, da nossa experiência histórica que tudo o que fazemos enquanto vivendo o momento de inventividade embute na inventividade a necessidade da reinventividade. Quer dizer, nada pode paralisar-se, imobilizar-se no ato da invenção. Ao ser inventado começa a querer ser reinventada. Um dos grandes problemas nossos então, é que somos especializados em inventar, mas não em reinventar. E quando pensamos que estamos reinventando estamos parados, paralisados, imobilizados, porque não fomos capazes de tratar o medo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Reinvenção (validade de uma tese)'] ); 
		\App\Trecho::create([
			"verbete_id" => 314,
			"titulo_video" => "Compilado de falas de Paulo Freire enquanto Secretário de Educação",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h45min19s a 00h45min47s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3210", 
			"texto" => "Só há validade de algum pensamento quando ele é passível de ser refeito, entende? Quer dizer, quando um pensamento ou uma proposta teórica tem que ser repetida estritamente como ela é feita, eu não acredito nela. Eu acho que a validade de uma proposta está na possibilidade que ela tem de ser recriada, que tem de ser reinventada.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Reinvenção (poder)'] ); 
		\App\Trecho::create([
			"verbete_id" => 315,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h10min05s a 00h10min57s (PROGRAMA 5)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "Eu acho que um dos pontos que se coloca hoje é de se ir além da tomada do poder. É tomando-se o poder, é reinventar-se o poder e a reinvenção do poder passa, necessariamente, pela reinvenção da produção, da compreensão do ato produtivo. Eu acho que quanto mais as massas populares participarem da política de produção, tanto mais será possível reinventar a cultura, reinventar a educação, reinventar a linguagem também. Fora dessa participação mais direta, enquanto ficar isso na mão de especialista que advogam para si um conhecimento fantástico de que o povo deve conhecer e do que o povo comer e vestir, e o povo fica longe disso e não experimentem, não se reinventa o poder.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Religiosidade'] ); 
		\App\Trecho::create([
			"verbete_id" => 316,
			"titulo_video" => "Entrevista de Paulo Freire concedida a Eitan Bronstein",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h08min09s a 00h09min10s (LADO A)", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3244", 
			"texto" => "Se ser mais religioso não coincide com a vocação humanizante da minha presença no mundo não tem sentido. Quer dizer, para mim, a grande significação histórica que eu encontro na minha presença no mundo é a de reconstruir permanentemente o mundo para fazer o mundo mais bonito e quando eu digo mais bonito, eu digo mais ético, entende? Eu não separo estética de ética, entende? Eu digo mais valente, mais corajoso, entende? Então se a minha religiosidade não me empurra nesse sentido da boniteza do mundo não tem sentido para mim.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 316,
			"titulo_video" => "Programa 'Clodovil Abre o Jogo' entrevista Paulo Freire e Tatiana Belinky",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h01min17s a 00h01min38s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1915", 
			"texto" => "Depende de como a gente compreende a religiosidade e a experiência da religiosidade. Talvez eu pudesse dizer a você, com mais certeza, que eu sou um homem de fé, mas menos religioso do que se poderia pensar que eu sou.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Religiosidade (Deus)'] ); 
		\App\Trecho::create([
			"verbete_id" => 317,
			"titulo_video" => "Programa 'Clodovil Abre o Jogo' entrevista Paulo Freire e Tatiana Belinky",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h01min51s a 00h02min34s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1915", 
			"texto" => "Olha eu te diria que a significação de Deus para mim é tão intensa, tão profunda, é tão criadora, é tão desafiadora para mim mesmo, que fica difícil se definir. Já é difícil, quer dizer, definir um objeto, definir um conceito, definir Deus, descrever, é pior ainda, quer dizer, é mais difícil eu poderia simplesmente dizer que Ele é, Ele não está. Ele é! Mas é um Ser que me acalma, é um ser que me orienta.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Revolução'] ); 
		\App\Trecho::create([
			"verbete_id" => 318,
			"titulo_video" => "Paulo Freire conversa com americanos (vídeo 1)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h03min18s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3259", 
			"texto" => "Isso é uma coisa interessante e também ideológica. Por exemplo, nós sempre pensamos nos perigos e riscos da revolução, mas nunca falamos das razões, das terríveis razões, que nos levam a precisar de uma revolução. Veja, quando nós apenas falamos dos riscos de uma revolução ao invés de falar da concreta situação atual, eu não quero ter que pensar sobre a possível revolução brasileira do próximo século para poder ver o quanto as pessoas estão sendo exploradas. Porque elas estão sendo exploradas hoje, eu não quero pensar sobre o que pode acontecer, o que pode acontecer é o futuro do que tenho que fazer. Então tem uma responsabilidade em cada um de nós quando se diz respeito ao que se pode acontecer em uma revolução", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 318,
			"titulo_video" => "Paulo Freire on Critical Pedagogy",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h35min18s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1922", 
			"texto" => "Se as pessoas, pessoas [arruinada] tem a história delas nas próprias mãos, claro, o processo de interação estar também estar nas mãos deles. Tendo a história, a educação, incluindo sobre a literatura, tem a saúde, tem a cultura, tem planificação, tem entretenimento, desculpa, mas isso não é tudo. Pois tendo a história nas mãos deles, toda revolução pode ser resolvida em alguns meses, às vezes em um ano ou dois anos. O problema sobre a literatura é interessante, não há tanta preocupação quanto com os métodos de ensinar a ler e escrever. A revolução em si própria é uma grande motivação para as pessoas, nós podemos ver isso na Nicarágua, por exemplo..", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Responsabilidade'] ); 
		\App\Trecho::create([
			"verbete_id" => 319,
			"titulo_video" => "A Ética na Educação",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h28min52s a 00h29min56s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1920", 
			"texto" => "Precisamente porque não há decisão sem responsabilidade, não há responsabilidade que não possa ou que não deva ser assumida pelo responsável. Quer dizer, então, eu acho que uma das coisas fundamentais na educação é o exercício da assunção da responsabilidade, quer dizer, a criança precisa ir aprendendo a assumir o que faz. Como o professor precisa testemunhar ao aluno a responsabilidade da assunção de sua posição científica, política e ética na classe. Quer dizer, o que não é possível é dar um testemunho adocicado de quem não é nada, quer dizer, eu me recuso a não assumir.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Rigor (coerência)'] ); 
		\App\Trecho::create([
			"verbete_id" => 320,
			"titulo_video" => "Série Encontro: Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h26min33s a 00h29min34s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3294", 
			"texto" => "Do ponto de vista da compreensão do lado nosso da compreensão que nós temos ou que estamos tendo dos fatos, por exemplo, e tem que ver com os procedimentos que nós usamos para nos aproximar dos fatos e dos objetos no sentido de conhecê-los. Procedimentos que no fundo nos darão mais ou menos rigorosidade ou nos farão mais ou menos rigorosos na aproximação ao objeto, na tomada de distância do objeto e que em função dessa maior ou menor rigorosidade de aproximação ao objeto nos darão maior ou menor exatidão no achado. A nossa ida aos grupos populares e você vê que a gente está usando aqui ida, significa que a gente está fazendo aqui um movimento que vai de fora para dentro, a gente não está lá, a gente não é de lá. Isso tem que ver, exatamente, com posição da classe em que a gente se situa em que a gente nasceu, para mim então a questão fundamental é saber, e aí entra a questão da opção política que eu acho fundamental para compreender a prática do educador é a opção dele ou dela e depois a coerência com esta opção explicitada na sua prática. Portanto, como é que eu sou coerente no momento em que opto pelas classes populares e marcho até lá, como é que eu busco ser coerente já no ato de marchar até lá, quer dizer, como é que a minha marcha até lá já tem que ser uma marcha não de quem invade, mas de quem pretende companheirar-se de quem pretende virar companheiro. Quer dizer, minha viagem até lá tem que ser coerente com a minha opção que me fez viajar até lá. Por isso mesmo eu não posso invadir a área a que essa viagem me leva.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Rigorosidade'] ); 
		\App\Trecho::create([
			"verbete_id" => 321,
			"titulo_video" => "Aula com Paulo Freire sobre seus planos no curso de educação comparada e para onde vai a educação?",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h45min42s a 00h46min08s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3275", 
			"texto" => "A rigorosidade não está no objeto, está na aproximação ao objeto. No objeto se encontra a maior ou menor exatidão nossa em identificá-lo, em encontrá-lo, em decifrá-lo. Então, o estudante precisa saber que sabia, por isso saber que sabe e saber que não sabe.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Saber'] ); 
		\App\Trecho::create([
			"verbete_id" => 322,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h14min06s a 00h14min29s (PROGRAMA 7)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "Ninguém sabe tudo, ninguém ignora tudo. Todo mundo sabe alguma coisa. Então, o problema que se coloca a nós é saber, primeiro, se a gente pode saber melhor o que já sabe. Segundo, se a gente pode ou não pode participar da produção do saber que não existe ainda.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Saber (acumulado)'] ); 
		\App\Trecho::create([
			"verbete_id" => 323,
			"titulo_video" => "Entrevista com Paulo Freire em sua casa (Vídeo 1 e 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h00min23s a 00h003min45s (VÍDEO 2)", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1913", 
			"texto" => "Saber, fazendo, como fazer, eu poderia nesse sentido dizer umas duas coisas. A primeira coisa que eu diria é que no momento que há essa decisão de associar o esforço de alfabetização com a preocupação por exemplo com a luta já fora de seus organismos o que se coloca ao educador agora enquanto político também é aprender como o povo aprende, por exemplo. Quer dizer, essa seria umas das preocupações aprender o que o povo aprende portanto, saber o que o povo está sabendo e saber como o povo está sabendo. O que vale dizer de um lado a preocupação é saber o conteúdo de conhecimento que a massa popular que o grupo popular já tem e em segundo lugar como é que o grupo popular venha a saber. Isso significa então que o educador ou alfabetizador ele tem que sem idealizar jamais os grupos populares, idealizar é por exemplo cair na posição que a gente chama de basista, quer dizer, cair na ingenuidade de decretar a pureza absoluta das bases populares que só é puro, só é sábio quem é base popular, quem não é base popular não sabe nada, é incompetente. Isso é tão errado quanto o contrário disso que é o elitismo dizer que só quem sabe é o intelectual, só quem sabe é o professor, é a elite, a massa popular não sabe. Então a massa popular precisa ser objeto de saber do intelectual isso é tão político quanto o outro lado dizer só quem sabe é a base popular. Eu acho que os dois sabem a questão agora é saber como pôr em relação esses dois saberes o saber popular que tem uma razão de ser e o saber não popular que também tem sua razão de ser. Compreender esta relação e nunca apenas um dos saberes, porque você repare a gente tem uma tendência terrível para isolar coisas e esquecer que elas nunca existem nelas próprias. Em lugar por exemplo de eu saber a relação dos saberes eu quero saber um dos saberes. Os basistas querem saber da base os intelectuais querem saber dos intelectuais e nenhum dos dois querem saber a relação dos dois. A mim interessa saber a relação dos dois.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Saber (curiosidade)'] ); 
		\App\Trecho::create([
			"verbete_id" => 324,
			"titulo_video" => "Aula com Paulo Freire sobre seus planos no curso de educação comparada e para onde vai a educação?",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h46min12s a 00h46min58s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3275", 
			"texto" => "Saber que não sabe, foi inclusive um dos pontos de partida na transformação do outro bicho, no bicho que a gente vem sendo. Porque houve um momento que nesse tempo muito distante de nós em que esse bicho que a gente está virando agora e que continua virando, esse bicho soube que sabia. E no momento que soube que sabia, necessariamente, soube que não sabia alguma coisa e descobriu que é um bicho curioso, por isso começou a perguntar.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Saber (direitos)'] ); 
		\App\Trecho::create([
			"verbete_id" => 325,
			"titulo_video" => "Seminário 'Reflexão sobre processo metodológico de alfabetização'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h02min47s a 01h03min48s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3308", 
			"texto" => "Essa coisa de mudar o mundo exige o saber científico sem o qual o mundo não muda. Por isso, é que um dos direitos que as classes populares têm é o direito passar do mito do senso comum para um nível da rigorosidade do saber sobre o mundo e do mundo que o senso comum não tem. Isso é um dos direitos que o povo tem. E eu chamo esse direito de saber melhor do que já sabe, o que é que significa saber melhor do que já sabe? Significa saltar do senso comum, passar pelo bom senso que é indispensável a nós todos, inclusive nós que pensamos que somos estudiosos já.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 325,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h08min22s a 00h09min36s (PROGRAMA 5)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "Entre os vários direitos que as classes trabalhadoras têm, há dois fundamentais, muito fundamentais. O primeiro deles é o de viver mesmo, de comer com alegria, é o de vestir, é o de dormir. Esses são os direitos fundamentais. Mas depois de satisfeito esses direitos, há dois direitos que simultaneamente ou simultaneamente com a satisfação deles, há dois direitos que eu acho fundamentalmente importantes. Primeiro, é o direito de saber melhor o que já sabe. O que é que significa saber melhor o que já sabe? Significa ir mais além do saber popular que essa massa guardou e aprendeu com a própria experiência. Segundo, é o direito de participar da produção direta ou indiretamente da produção do saber que ainda não existe. Esse é um degrau bem mais distante, bem mais difícil, porque, inclusive, para que isso haja, é preciso que a massa popular cada vez mais participe no sentido concreto dessa palavra, dessa expressão, o participe da própria produção, da própria política de produção da sociedade. Para isso, na sociedade burguesa é inviável e, para mim, é um sonho de uma sociedade socialista.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Saber popular (postura basista)'] ); 
		\App\Trecho::create([
			"verbete_id" => 326,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h06min44s a 00h08min20s (PROGRAMA 5)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "Uma das coisas que, as vezes, os militantes políticos se esquecem e os educadores autoritários sempre, é que o seu aqui e o seu agora são quase sempre o amanhã e o lá do educando. E o educador tem que partir não é do seu aqui e do seu agora, é do aqui e do agora da massa para vir com ela, não para o aqui do educador, mas para um ali também. O que eu quero deixar claro é que a postura elitista recusa definitivamente o aqui dos outros, desdenha e considera como coisa degenerada. Quer dizer, o saber popular é uma degenerência, a postura basista renega a teoria e considera que toda teoria atrapalha a prática. A postura basista, então, hipertrofia o valor que existe na sabedoria popular. A minha postura considera que é absolutamente indispensável o saber teórico, mas considera que não é possível desdenhar e desprezar a sabedoria popular. Mas admite e reconhece que seria uma idealização, por exemplo, da sabedoria popular você pretender que a massa popular fica só nela, enquanto os intelectuais pudessem entender Marx e Hegel e outras coisas. E a massa popular nada, porque o que ela tem que fazer é trabalhar mesmo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Saber (rigorosidade)'] ); 
		\App\Trecho::create([
			"verbete_id" => 327,
			"titulo_video" => "Aula com Paulo Freire sobre seus planos no curso de educação comparada e para onde vai a educação?",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h44min14s a 00h45min36s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3275", 
			"texto" => "Eu acho que a escola, que esta escola tem que estar advertida para isso que há um saber que preexiste a ela. Há um saber que se projeta, e se cria, e se constrói nela, que é um saber de enorme importância e é um saber que ultrapassa a escola. É preciso que saiba. O aluno precisa saber que sabe, o aluno precisa saber que já sabia, mas o aluno precisa saber que tipo de saber é esse que ele já sabia, para inclusive saber melhor o que já sabia e saber melhor o que já sabia socialmente. E aproxima-se mais rigorosamente do real que lhe deu através de uma prática social certo saber para rigorosamente conhecer o que conhecia com maior exatidão. Isso que é a tal da rigorosidade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Segundo estágio (correção)'] ); 
		\App\Trecho::create([
			"verbete_id" => 328,
			"titulo_video" => "Seymour Papert e Paulo Freire: uma conversa sobre informática, ensino e aprendizagem",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h22min27s a 00h23min11s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/395", 
			"texto" => "Para mim, o problema que se coloca hoje é de se corrigir os equívocos do segundo estágio, que são todos, para mim, equívocos não didáticos ou metodológicos, mas ideológicos e políticos. Por isso é que tem que ser mudado o mundo politicamente, é o poder que tem que ser mudado. E para isso, não tem que falar que a história morreu, nem que as classe desapareceram, isso é tudo conversa para não mudar o segundo estágio, quer dizer, sob a perspectiva da nova ideologia liberal trabalham juntas pra preservar o segundo estágio", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Semântica'] ); 
		\App\Trecho::create([
			"verbete_id" => 329,
			"titulo_video" => "A dimensão pedagógica da produção científica",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h41min25s 00h41min39s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3232", 
			"texto" => "A semântica não gira em torno da palavra, mas faz criar a palavra em torno da experiência. Apreende exatamente a significação diferente de um contexto dá a uma palavra.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Sem-terra'] ); 
		\App\Trecho::create([
			"verbete_id" => 330,
			"titulo_video" => "Palestra de Paulo Freire no Banco Central",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h21min54s 01h22min59s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3219", 
			"texto" => "Eu acho por exemplo analisando os comportamentos dos jovens, dos maduros, das mulheres, dos homens do sem-terra, no comportamento atual, a gente começa a perceber que no fundo os comportamentos deles hoje não pode ser entendido só hoje, mas tem que ser entendido historicamente, quer dizer, vocês tem que entender o acúmulo de magoas, o acúmulo de raiva legítimas, o acúmulo de sonhos desfeitos, o acúmulo de mentiras sobre eles historicamente em quinhentos anos de vida brasileira para que eles hoje, inclusive, em certos momentos talvez percam o sentido da oportunidade e digam o que não devia dizer, talvez. Eu não estou dizendo que é possível uma análise como está. Porque, na verdade, eles não são invasores, eles são ocupantes, aliás, eles dizem isso com muita clareza.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Sensação (títulos)'] ); 
		\App\Trecho::create([
			"verbete_id" => 331,
			"titulo_video" => "Entrevista com Paulo Freire sobre o doutor honoris causa da Unicamp",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h04min19s a 00h05min02s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3295", 
			"texto" => "[Entrevistador]: Professor, e qual é a sensação de receber esse título hoje dado por esta universidade? [Paulo Freire]: Pois é, é uma sensação quase estranha. Eu não sei se eu poderia perder agora um pouco a humildade, eu tenho catorze títulos como este, dos quais onze são títulos europeus e norte americanos. Quer dizer, eu sou doutor honoris causa de algumas famosíssimas universidades de 500 anos de vida, por exemplo, de 600 anos de vida. Mas, ser doutor desta universidade que é adolescente, que é criança ainda, como ter sido doutor da universidade Santa Maria do Rio Grande do Sul, Professor Emérito da Universidade do Recife. Isso, para mim, me torna enormemente, é claro que eu sou onze vezes doutor fora do Brasil, três vezes aqui, mas não me entristece isso. Um dia eu acho que serei mais doutor do Brasil do que fora, mas enquanto esse dia não chegue, eu não fico triste, nem fico de beicinho, porque isso é assim mesmo. Eu sou muito mais conhecido fora do Brasil, do que no Brasil, mas sou muito conhecido no Brasil e sou muito querido.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Senso comum'] ); 
		\App\Trecho::create([
			"verbete_id" => 332,
			"titulo_video" => "Conferência do professor Paulo Freire e entrega do título de cidadão uberabense",
			"tipo_recurso" => "vídeo", 
			"tempo" => "02h00min06s a 02h00min52s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1893", 
			"texto" => "Eu sempre costumo, muito, nas minhas discussões sobre isso, na minha reflexão, apelar muito para o senso comum que é para certos pensadores da educação uma coisa nefasta que o senso comum é um desastre. E eu acho que não é tão isso, o senso comum é um momento da busca, da curiosidade, inclusive, historicamente é isso também. Os homens e as mulheres não começaram pela rigorosidade científica, começaram exatamente pelo penso que é que é a marca decisiva do senso comum.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 332,
			"titulo_video" => "Seminário 'Reflexão sobre processo metodológico de alfabetização'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h59min12s a 01h02min02s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3308", 
			"texto" => "Mas um outro advento que eu quero me referir é o do nível de conhecimento em que se dão e corresponde, agora, o nível de conhecimento da memória oral das classes populares, das grandes massas populares. É aquele em que o saber do mundo para no: \"penso que é\". O que é que eu quero dizer com isso, o povo sabe coisa pra burro, mas não sabe, de modo geral, a razão de ser da coisa que ele sabe. Quer dizer o povo fica com o \"penso que é assim\" porque fulano disse que é, o padre disse que é, o delegado disse que é, o patrão disse que é, o tenente disse que é. Essa coisa, os acadêmicos chamam esse momento do saber e esse próprio saber, Camões chamou isso de saber de experiência feito, e nós os acadêmicos chamamos isso de senso comum.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 332,
			"titulo_video" => "Paulo Freire e a Educação Matemática",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h13min36 a 00h14min28s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1880", 
			"texto" => "Isso tem muito que ver com a postura elitista da escola, renegando toda a contribuição que o aluno possa dar para a escola, é a supervalorização do conhecimento denominado como acadêmico, diante da desvalorização do conhecimento comum, é a posição epistemológica segundo a qual por exemplo, entre um e outro conhecimento você tem uma definitiva ruptura. No meu entender, o que há não é uma ruptura, o que há é uma superação.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Sexo'] ); 
		\App\Trecho::create([
			"verbete_id" => 333,
			"titulo_video" => "Conversatório com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h11min15s a 00h11min37s (PARTE 1)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3233", 
			"texto" => "Uma coisa que acompanha mulheres e homens desde que nós fizemos mulheres e homens é que segue sendo uma espécie de tabu. Falar em sexo no mundo todo, com algumas exceções, é ainda, uma aventura do espírito e do corpo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Silenciamento (crianças)'] ); 
		\App\Trecho::create([
			"verbete_id" => 334,
			"titulo_video" => "Paulo Freire conversa com estudantes de curso para o magistério",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h56min00s a 00h56min36s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3292", 
			"texto" => "O primeiro absurdo que a escola faz é não tomar conhecimento do saber acumulado fora dela e antes dela, pela criança. O segundo absurdo que a escola comete é castrar, de forma grossa ou de forma sub-reptícia, o que é o autoritarismo, é castrar a curiosidade das crianças.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 334,
			"titulo_video" => "Paulo Freire: o revolucionário educador (Programa 1 e 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h09min58s a 00h10min07s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1946", 
			"texto" => "O pai que grita, esperneia e que tem o filho silenciado, não é o pai que convence que discute e que tem um filho silencioso.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Sistema capitalista'] ); 
		\App\Trecho::create([
			"verbete_id" => 335,
			"titulo_video" => "Encontros com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h11min39s a 00h14min11s (PROGRAMA 5)", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/129", 
			"texto" => "Eu não considero o sistema capitalista imobilista, ele é muito móvel do ponto de vista das classes dominantes, tá entendendo. Porque não existe nada que não se mova, tá entendendo, não há nada parado. Tudo está sendo, nada é. Ora, o sistema capitalista tem, inclusive, uma inteligência em si mesma, entende. Esse negócio de pensar que o sistema capitalista está se acabando e está na sua última, é conversa, eu não acredito nisso. Esse negócio de determinar, de decretar o desaparecimento do sistema capitalista, porque a fase posterior é a socialista, eu acho que não. Imobilismo é pensar que necessariamente o sistema capitalista se acaba e o socialismo vem, isso é imobilismo de esquerda, é fatalismo libertador, entende. É um fatalismo ao reverso. Eu acho, pelo contrário, que, historicamente, tudo indica que vai ser mesmo, mas é preciso que historicamente os homens e as mulheres façam a história e fazendo-se se façam e se refaçam. Quer dizer, Marx disse isso, não sou eu que estou dizendo, mas não tem por que não aceitar que isso é verdade mesmo, entende. Então, quando você diz que estou caindo no imobilismo. Não! Eu acho que o sistema capitalista, pelo contrário, ele tem astúcias maravilhosas. Quer dizer, ele vem defendendo-se inclusive de previsões do próprio Marx. Quer dizer, ele se refez também. Agora o que eu quis dizer é que não havia como que o sistema capitalista se mover-se no sentido de respostas aos interesses fundamentais da classe trabalhadora, mas isso também não significa que o sistema capitalista não alcance níveis, ele já alcançou nos Estados Unidos, na Suíça etc. níveis de uma modernidade capitalista em que sua economia, inclusive apoiada na dependência do capitalismo, dependente da periferia, por exemplo, reverte em níveis bem razoáveis de vida do trabalhador, o que, em certo sentido, também anestesia a classe trabalhadora, entende. Isso existe, isso ocorre.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Sistema educacional (crise)'] ); 
		\App\Trecho::create([
			"verbete_id" => 336,
			"titulo_video" => "Arquivo N  Paulo Freire, o Educador",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h20min52s a 00h21min31s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1888", 
			"texto" => "Eu vejo a educação no Brasil como outras coisas no Brasil, entende? Profundamente tocadas pela crise do regime, que  por sua vez  é uma crise que corresponde também a uma crise do sistema que o regime serve. A educação não poderia ser vista a parte, quer dizer, você não poderia tomar o tecido da educação independentemente da contextura geral da sociedade e dizer: esse está doente! Não, o mal-estar não é em si do sistema educacional, o sistema educacional reflete uma crise geral que o poder no Brasil está vivendo, está sofrendo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Socialismo'] ); 
		\App\Trecho::create([
			"verbete_id" => 337,
			"titulo_video" => "Paulo Freire entrevistado no programa 'Matéria Prima' da TV Cultura",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h10min19s a 00h11min35s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3218", 
			"texto" => "[Serginho]: O senhor se considera um educador comunista? E por que o senhor acha que perguntas como essa aparecem? [Paulo Freire]: Em primeiro lugar essa pergunta é absolutamente legítima, eu acho que é um direito, o direito a pergunta, foi por causa do direito a pergunta que eu fui preso e exilado. Só que eu acho que o moço que perguntou está pouco informado com relação as minhas opções, eu não sou anticomunista no sentido medieval, de considerar que comunista come gente como come rosbif, mas também não sou comunista. Eu sou porém um socialista, eu acredito no socialismo, eu acredito na participação popular, acredito na transformação do mundo realizada sobretudo por aqueles e por aquelas que se encontram desprovidos ou roubados no seu direito de ser.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Sociedade'] ); 
		\App\Trecho::create([
			"verbete_id" => 338,
			"titulo_video" => "Programa de TV sobre os títulos recebidos por Paulo Freire em Juiz de Fora",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h01min16s a 00h02min01s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3221", 
			"texto" => "O educador precisa sonhar com um tipo de sociedade que lhe pareça oferecer condições melhores de vida do que hoje, por exemplo, quando eu saio de casa para ir à universidade coordenar um debate, um seminário, eu saio de casa e vou até lá porque há uma coisa de que eu estou convencido: que mudar é difícil, mas é possível.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Sociedade (contradição)'] ); 
		\App\Trecho::create([
			"verbete_id" => 339,
			"titulo_video" => "Paulo Freire conversa com americanos (vídeo 2)",
			"tipo_recurso" => "???", 
			"tempo" => "00h04min40s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3258", 
			"texto" => "Nós temos dentro de nossas casas a mulher pobre que vem da periferia para cozinhar para nós. Todo dia a periferia de São Paulo vem para dentro da minha casa. Se eu não vejo essa contradição é porque eu não quero ver, mas a tenho dentro de casa. Aqui, claro que, aqui nós temos as contradições, algumas muito visíveis, como a violência racial aqui. É absurdo, mas uma das tarefas que o educador tem em sociedades como essas, não exclusivamente a sua, é ainda mais difícil, pois em ruas como essas você não vê quase nada, [RISOS] tudo é escondido. Então uma de suas tarefas é de descobrir o que são essas coisas escondidas, de como ir de rua em rua [e não digo rua literalmente, mas metaforicamente], passo a passo até dizer uhu, aqui está a contradição, isso é algo que vocês tem de aprender a fazer.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Sonho'] ); 
		\App\Trecho::create([
			"verbete_id" => 340,
			"titulo_video" => "Do Silêncio à Palavra (vídeo 1 e 2)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h44min22s a 00h45min09s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1936", 
			"texto" => "Eu acho que não é possível existir humanamente, sem sonhos, sem utopias, sem sonho enquanto projeto, enquanto programa, enquanto curiosidade, enquanto querer ser diferente. Esses discursos que falam na morte dos sonhos, das utopias, são os mesmos que dizem que a história se acabou, são os mesmos que dizem que as classes sociais sumiram, mas que nós continuamos como classes sociais, continuamos com lutas de interesses entre interesses diferentes, antagônicos e continuamos a precisar dos sonhos.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 340,
			"titulo_video" => "Museu da Pessoa entrevista Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h55min37s a 01h00min37s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1909", 
			"texto" => "O sonho não é apenas um direito e até um dever que a gente tem, mas que o sonho faz parte da natureza do ser que nós, mulheres e homens, estamos sendo. Quer dizer, em outras palavras não era possível ser esse ser que somos. Que você veja, do ponto de vista biológico, do ponto de vista genético nós somos seres muito especiais. Nós somos seres programados, realmente, mas não determinados e a nossa programação é uma programação que se funda numa coisa com a qual a gente nasce, mas a gente recria que é isso que eu chamo a curiosidade diante do mundo. E por isso então nós somos também seres, ou estamos sendo seres que não resistimos continuar a viver sem estar envolvidos num pensamento permanente sobre o amanhã. Entende? É inviável para o ser humano continuar se ele parar de pensar no amanhã. Não importa que seja um pensamento em torno do amanhã. O mais ingênuo possível, o mais imediato o de se a gente vai ter café amanhã ou se a gente vai ler ou reler Hegel ou Marx, não importa. O que importa é que somos seres, de tal maneira constituídos, que o presente, o passado e o futuro nos enlaçam. A minha tese, então, é a seguinte não pode existir um ser permanentemente preocupado com o vir a ser, portanto, com o amanhã, sem sonhar. É inviável. Sonhar aí não significa sonhar a impossibilidade, mas significa projetar, significa arquiteturar, significa conjecturar sobre o amanhã. E quando tu me perguntas: A questão agora é saber qual é o sonho em torno desse amanhã? Segunda questão fundamental é saber com que sonho e contra que sonho. Porque eu não posso sonhar em favor de alguma coisa senão sonho contra outra, que é exatamente aquela que obstaculiza a realização do meu sonho. Eu não posso sonhar se eu não estou claro, também, a favor de quem eu sonho. Daí que o ato de sonhar seja um ato político, um ato ético e um ato estético. Quer dizer, não é possível sonhar sem boniteza, sem moralidade e sem opção política. Então, eu quero saber, quando você me diz Paulo, eu também sonho e eu quero saber com que e a favor de quem você sonha. Quer dizer, qual é o sujeito beneficiário do teu sonho, é a burguesia que explora ou é a massa desertada que sofre e não basta que você me diga: eu sonho pela humanidade, porque a humanidade é uma abstração e não existe. Entende? Então agora quando você me pergunta: Paulo, me diga qualquer coisa sobre seu sonho. Eu te diria: O meu sonho fundamental é o sonho pela liberdade que me estimula a brigar pela justiça, pelo respeito do outro, pelo respeito à diferença, pelo respeito ao direito que o outro tem e a outra tem de ser ele ou ela mesma. Quer dizer, o meu sonho é que nós inventamos uma sociedade menos feia do que a nossa de hoje, menos injusta, mas que tenha mais vergonha. Esse é o meu sonho. O meu sonho é um sonho da bondade e da beleza.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 340,
			"titulo_video" => "Paulo Freire at Highlander: A Conversation with Myles Horton",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h16min51s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1883", 
			"texto" => "Mas agora, você está falando precisamente sobre o sonho, esse fato de agora. Minha questão é são esses sonhos seus ou são também grandes sonhos da comunidade que você está fazendo? Pois, se este for seu sonho, talvez você não venha a realizá-lo, se for seu sonho ou o sonho do time. Isso não significa que seu sonho não poderia ser compartilhado com a comunidade, deveria ser uma das táticas do educador compartilhar os sonhos com as pessoas, e assim em algum momento, as pessoas iriam pegar os sonhos de tal modo que os sonhos irão pertencer também as pessoas. Essa é uma das táticas do educador as vezes o educador não precisa compartilhar os sonhos, mas compartilhar o sonho por causa das pessoas mostrando ao educador a aderir os sonhos deles (pessoas) como sonhos do educador.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Subdesenvolvimento (superação do subdesenvolvimento)'] ); 
		\App\Trecho::create([
			"verbete_id" => 341,
			"titulo_video" => "Conversatório com Paulo Freire",
			"tipo_recurso" => "áudio", 
			"tempo" => "00h24min26s 00h25min25s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3233", 
			"texto" => "Eu acredito que umas das preocupações nossas, de intelectuais, do chamado subdesenvolvimento, para poder ajudar a superação do subdesenvolvimento, que não se faz sem decisão política, que não se faz sem transformação econômica, que não se faz sem capacitação tecnológica e científica. Não há como fazer, não há como sair sem essas coisas. A decisão política em primeiro lugar, quer dizer, tem que decidir o que há que fazer. E para fazer então temos que estar capacitados cientificamente, tecnologicamente, humanisticamente. Quer dizer, tem que ter uma compreensão do mundo, uma compreensão da gente no mundo como sujeito da transformação do mundo mesmo.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Tecnologia'] ); 
		\App\Trecho::create([
			"verbete_id" => 342,
			"titulo_video" => "Aula magna de Paulo Freire em Goioerê",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h30min24s a 00h30min42s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3230", 
			"texto" => "A tecnologia é algo que eu até diria, ela quase faz parte da natureza humana constituindo-se na história. Agora é um bicho perigoso como o homem e a mulher. Somos tão perigosos quanto a tecnologia que inventamos.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 342,
			"titulo_video" => "Especial Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h23min58s a 00h25min44s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1918", 
			"texto" => "Eu gostaria, em primeiro lugar, fazer uma espécie de listagem temática, de temas geradores que eu captei. Por exemplo, a dimensão histórica, história e tecnologia, história geração e tecnologia, cultura. Falando em cultura, eu incluo, imediatamente, cultura de classe. Uma coisa, por exemplo, é que eu tenho um neto hoje de 23 anos, uma baita especialista nesse negócio de net, e uma neta de 6 anos operando um computador, mas isso é a minoria da sociedade brasileira. E o que dizer dos filhos dos 33 milhões de brasileiros que a essa hora estão morrendo de fome? Quer dizer, qual é a repercussão da tecnologia junto da maioria das crianças brasileiras, hoje, e daqui a vinte e trinta anos esses milhões de meninos brasileiros estarão mais distante ainda da tecnologia.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Tecnologia (uso)'] ); 
		\App\Trecho::create([
			"verbete_id" => 343,
			"titulo_video" => "Conferência do professor Paulo Freire e entrega do título de cidadão uberabense",
			"tipo_recurso" => "vídeo", 
			"tempo" => "02h58min57s a 03h00min16s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1893", 
			"texto" => "A tecnologia pode de vez em quando fazer armadilhas para nós mesmos. Há quem diante da tecnologia em lugar de endeusá-la, apenas a diaboliza. Há gente que acha, que afirma que o avanço tecnológico é um perigo, um risco para o ser humano; eu acho que não, eu acho que a tecnologia é uma criação humana, é invenção nossa e tem trazido contribuições extraordinárias para mudar a qualidade de vida, mas também pode atrapalhar, depende então, para mim muito mais, a tecnologia depende muito mais da política do que dela mesma. Quer dizer, se a tecnologia é um fator de avanço ou regresso não é um problema tecnológico é um problema filosófico, é um problema político da decisão política do uso da tecnologia.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Temática (reunião)'] ); 
		\App\Trecho::create([
			"verbete_id" => 344,
			"titulo_video" => "Paulo Freire em aula na PUC-SP com o Grupo Banzo",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h21min20s a 00h22min18s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1904", 
			"texto" => "A maioria desses pais não sabia ler então havia um terceiro trabalho que se fazia entre as professoras e os alunos dela. Então as professoras e alunos faziam um seminário em que discutiam com as crianças o tema que ia ser objeto de reflexão dela com os pais deles que era o tema disciplina por exemplo. E terminado o seminário cada menino tinha o temário tal qual os pais e  aí a sugestão da professora era a seguinte: olhar ler para o papai que não tenha prática de ler ou que sejam analfabetos e discute com papai e mamãe também, e dá o teu palpite sobre o que é disciplina.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Terceiro mundo'] ); 
		\App\Trecho::create([
			"verbete_id" => 345,
			"titulo_video" => "Corpo e dança dos povos",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h12min00s a 00h13min12s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3208", 
			"texto" => "No dia em que a gente conseguir começar a mostrar que o terceiro mundo se desenvolveu, cresceu, superou ou pôde, pelo menos, tentar a superação do domínio econômico deles que os faz também culturalmente dominadores, quando a gente der, quando o terceiro mundo der testemunhos que também pode ser primeiro, aí eles deixarão possivelmente de ver o nosso bater de ombros como coisa exótica. [Entrevistadora] Então, seríamos nós, do terceiro mundo, nos colocarmos ao lado dos educadores e dessa grande massa de trabalhadores do terceiro mundo que você falava. [Paulo Freire] Eu acho que não se pode fugir cada vez esse mundo é um só. Quer dizer, é um só dividido pelo poder vivido, pelas diferenças. Mas eu acho que a gente tem que testemunhar o gosto de ser que a gente tem, o gosto de estar sendo, eu acho que é isso.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Técnicas'] ); 
		\App\Trecho::create([
			"verbete_id" => 346,
			"titulo_video" => "Paulo Freire conversa com americanos em sua casa",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h13min45s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3257", 
			"texto" => "Para mim, um dos perigos que temos com [Barulho de bebê] técnicas e métodos, é de escravizar os educadores às técnicas, as regras, as quais também são importantes, [Barulho de bebê] mas não podem se tornar os mestres dos professores. [Barulho de bebê] Os professores deveriam utilizar a imaginação deles para irem além disso com os estudantes.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Teologia (libertação)'] ); 
		\App\Trecho::create([
			"verbete_id" => 347,
			"titulo_video" => "Entrevista de Paulo Freire no Programa Caminhos da Rede Vida",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h26min40s a 00h26min57s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1923", 
			"texto" => "O que eu diria sem falsa modéstia, mas humildemente diria é que há uma presença da teologia da libertação em mim, mas há também uma presença de mim na teologia da libertação.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Teoria (universidade)'] ); 
		\App\Trecho::create([
			"verbete_id" => 348,
			"titulo_video" => "Paulo Freire at Highlander: A Conversation with Myles Horton",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h40min08s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1883", 
			"texto" => "Nas academias [universidades] se tem tamanha distância do concreto que em algum momento o conceito tem a obrigação de mediar o entender do concreto, abstratamente. Esse é a obrigação do conceito, e a história do conceito, mas muitas vezes na academia temos tamanha distância da realidade, que em algum momento nós perdemos endereço epistemológico, nós nos perdemos, e assim nós não sabemos nada além de ler textos. E para mim, isso é um desastre. Não é a teoria que está errada, o que está errado é teoriquismo, isso é que está errado. Teoria é fantástica, hoje tivemos teoria aqui.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 348,
			"titulo_video" => "Conversando com Paulo Freire sobre Arte e Educação aos 21 anos da Pedagogia do Oprimido",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h05min50s a 01h06min43", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1882", 
			"texto" => "O que medeia a distância entre a prática e teoria é a própria compreensão crítica da prática e da teoria. Quer dizer, vamos ver se eu digo isso melhor, eu acho o seguinte, que quando eu penso sobre a prática, sobre a teoria eu não penso sobre uma e a outra, mas eu penso sobre a relação contraditória, processual que há entre as duas. Quer dizer, nesse sentido, pra mim, não há boa teoria que não seja prática e não há prática verdadeira que não esconda ou que não involucre no seu corpo a teoria ou uma certa teoria.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Tolerância'] ); 
		\App\Trecho::create([
			"verbete_id" => 349,
			"titulo_video" => "Paulo Freire Especial  Globo Ciência (Programa 607)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h27min39s a 27min 55s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1930", 
			"texto" => "Tolerância pra mim não é conivência por isso é que eu não posso fazer acordo com o oposto a mim, com o contrário total de mim, mas eu posso fazer acordo com o diferente de mim.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 349,
			"titulo_video" => "Paulo Freire en la Argentina: Encuentro con Alfredo Mofatt",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h18min25s a 01h18min35s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1941", 
			"texto" => "A tolerância é este poder coexistir com diferenças.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Tolerância ( virtude)'] ); 
		\App\Trecho::create([
			"verbete_id" => 350,
			"titulo_video" => "A conversation with Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h00min42s a", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3209", 
			"texto" => "Para entender o outro, eu descubro que preciso criar em mim uma virtude, e sem essa virtude é difícil entender o outro: a virtude da tolerância. É pelo exercício da tolerância que eu descubro a possibilidade de fazer e aprender coisas diferentes com pessoas diferentes. Ser tolerante não é uma questão de ser ingênuo, ao contrário, é um dever ser tolerante, um dever ético, histórico, político, mas isso não significa que eu precise perder a minha personalidade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Trabalho (pedagógico)'] ); 
		\App\Trecho::create([
			"verbete_id" => 351,
			"titulo_video" => "Paulo Freire conversa com estudantes de curso para o magistério",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h26min08s a 00h27min15s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/3292", 
			"texto" => "Vocês teriam de aproveitar o que disse que conflito é também método de trabalho. Quer dizer, vocês precisariam entre vocês em primeiro lugar discutir o que parece a vocês que está significando insuficiência de preparo, porque vocês também são capazes de perceber o que esta faltando. Mais adiante num diálogo com os professores vocês ampliam um pouco a área daquilo que lhe parece faltar e conversar com a direção da escola para saber se é possível, por exemplo, suprir certas dessas falhas e ouvir qual é a resposta da direção da escola. Eu acho que essa escola está em certo nível de poder, em outro não. Quer dizer, mas num certo nível de poder essa escola está aberta para ouvir.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'UNICAMP (afeição)'] ); 
		\App\Trecho::create([
			"verbete_id" => 352,
			"titulo_video" => "Entrevista com Paulo Freire sobre o doutor honoris causa da Unicamp",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h04min19s a 00h05min02s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3295", 
			"texto" => "Finalmente, em setembro de 80 eu fui aceito por pressão da faculdade, dos alunos, e comecei minha vida acadêmica aqui, como comecei na PUC de São Paulo. Tu podes imaginar o que significou para um homem que tinha passado quase 16 anos no exílio, o seu retorno a seu país, a seu chão, a sua terra, a sua história, começar a trabalhar aqui. Eu me senti profundamente afeiçoado, e é essa afeição continuo a ter como professor desta casa.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'UNICAMP (relação)'] ); 
		\App\Trecho::create([
			"verbete_id" => 353,
			"titulo_video" => "Entrevista com Paulo Freire sobre o doutor honoris causa da Unicamp",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h00min27s a 00h03min22s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3295", 
			"texto" => "Em primeiro lugar, eu acho que seria importante salientar os níveis em que eu me relaciono com a UNICAMP, indiscutivelmente há um nível afetivo, um nível político, a que se segue um nível que continuando afetivo e político, também virou um nível acadêmico. A UNICAMP foi, ao lado da PUC de São Paulo, a primeira universidade brasileira que no tempo ainda em que eu não tinha um passaporte brasileiro, em que eu estava escorraçado, expelido do país, com meu nome proibido de ser se quer citado em jornais do país, a UNICAMP, eu te diria, não a UNICAMP enquanto poder, enquanto organização, enquanto estrutura, enquanto reitoria, mas a UNICAMP enquanto Faculdade de Educação me convidou para duas coisas importantes: uma pra vir à Primeira Conferência Nacional de Educação de Adultos aqui realizada. E a segunda, para que eu aceitasse um lugar como professor dessa casa, esse foi um convite, foi uma iniciativa da Faculdade de Educação desta universidade. Obviamente eu não tinha passaporte, e não podia ter o passaporte. O governo de então não permitia se quer que eu passasse pelo Brasil sobre como trânsito e eu não podia vir. Como não pude vir a este Encontro Nacional de Educação, o que eu quero salientar esse convite que eu recebi na época, exilado, saudoso, terrivelmente saudoso do meu país, do meu sol, do meu céu azul, da linguagem do meu povo, da minha comida, esse convite me tocou muito, e foi feito ao mesmo tempo em que a PUC de São Paulo fazia o mesmo convite, então esse é o lado afetivo que me prende a esta faculdade.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Universalidade'] ); 
		\App\Trecho::create([
			"verbete_id" => 354,
			"titulo_video" => "Encontro com o Professor Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h6min26seg a 01h6min57seg", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1894", 
			"texto" => "Não há localidade sem universalidade, nem universalidade sem localidade. Toda experiência universalizante tem um ponto de partida sem o qual ela não se faz que seja a localidade em que se expira a partir de que essa experiência se universaliza.", 
			"arquivo" => ""]);
		\App\Trecho::create([
			"verbete_id" => 354,
			"titulo_video" => "Alfabetização  Globo Ciência (Programa 281)",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h10min37s a 00h10min47s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1899", 
			"texto" => "Ninguém se universaliza a partir do universo, você só se universaliza a partir de um local.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Universidade (formação)'] ); 
		\App\Trecho::create([
			"verbete_id" => 355,
			"titulo_video" => "Aula inaugural do Mestrado em Educação da Universidade de Juiz de Fora realizada por Paulo Freire",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h01min30s a 01h01min41s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/1911", 
			"texto" => "As universidades estão aí e deviam estar sendo convidadas para contribuir com a formação permanente das redes educativas desse país.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Vida'] ); 
		\App\Trecho::create([
			"verbete_id" => 356,
			"titulo_video" => "Aula magna de Paulo Freire em Goioerê",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h40min40s 00h41min07s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3230", 
			"texto" => "A existência precisa ficar à altura da vida ou a existência será severamente punida, porque a vida ferida termina por matar a existência. O meu apelo a vocês é de que eticamente, historicamente, politicamente e cientificamente fiquem a favor da vida.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Vida (amor)'] ); 
		\App\Trecho::create([
			"verbete_id" => 357,
			"titulo_video" => "Compilado de falas de Paulo Freire enquanto Secretário de Educação",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h37min08s a 00h37min23s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3210", 
			"texto" => "Eu amo profundamente a vida, é uma coisa óbvia. Mas eu acho que se a gente insistisse nessa obviedade, quer dizer, se a gente dissesse todo dia que a gente quer bem ao mundo, quer bem à vida, talvez até a gente vivesse com mais humor.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Vida pública (vida privada)'] ); 
		\App\Trecho::create([
			"verbete_id" => 358,
			"titulo_video" => "Diálogos com Paulo Freire sobre Amílcar Cabral",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h48min07s a 00h48min21s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3356", 
			"texto" => "Eu sou muito rigoroso com o problema dessa coerência entre a chamada vida pública e a chamada vida privada sem politicanismo, mas é preciso ser muito coerente.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Violência'] ); 
		\App\Trecho::create([
			"verbete_id" => 359,
			"titulo_video" => "Paulo Freire conversa com Patrick Clarke",
			"tipo_recurso" => "vídeo", 
			"tempo" => "00h11min50s a 00h12min32s", 
			"endereco_video" => "http://www.acervo.paulofreire.org:8080/jspui/handle/7891/1950", 
			"texto" => "De modo geral a gente não vê que a malvadez primeira, o pontapé inicial dessa partida estranha, desse jogo estranho que a gente vive no Brasil, quem iniciou isso há muito tempo foi a burguesia e não a massa popular, entende?! Foi o poder colonial que começou a fazer isso. Foram as classes dominantes brasileiras que iniciaram o processo de violência, de negação da vida, do subalterno, hoje, nesse processo histórico, alguns representantes dessas massas populares aprenderam também a ser malvados, e aí, tão matando a gente.", 
			"arquivo" => ""]);
		\App\Verbete::create(['descricao' => 'Vocabular (mínimo)'] ); 
		\App\Trecho::create([
			"verbete_id" => 360,
			"titulo_video" => "Seminário 'Reflexão sobre processo metodológico de alfabetização'",
			"tipo_recurso" => "vídeo", 
			"tempo" => "01h12min49s a 01h15min57s", 
			"endereco_video" => "http://acervo.paulofreire.org:8080/jspui/handle/7891/3308", 
			"texto" => "A alfabetização de adultos devia girar em torno do que eu chamava, na época, universo vocabular mínimo do povo. () pesquisado seriamente numa região podia dar a nós educadores o mínimo vocabular que serviria de conteúdo desdobrado em temas com que pudéssemos fazer a alfabetização. Quando eu digo por exemplo que o conteúdo da educação deve partir da experiência de leitura e de compreensão do mundo dos educandos. Partir, em língua nenhuma significa ficar, então eu jamais disse que a educação deve ficar no nível da conversa ingênua do senso comum. Mas partir dela, sim. E até para provar que não é possível fora disso, eu costumo sempre dá esse exemplo. Ninguém chega lá, e esse lá pode ser do outro lado da rua ou do país, ninguém chega partindo de lá. Toda vez que alguém quer chegar a um certo lá tem que chegar a um certo aqui.", 
			"arquivo" => ""]);

    }
}
