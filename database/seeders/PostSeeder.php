<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Certifique-se de que existam usuários
        $users = User::all();

        // Se não houver usuários, aborta
        if ($users->count() === 0) {
            $this->command->info('Nenhum usuário encontrado. Rode o UserSeeder primeiro.');
            return;
        }

        $post1 = Post::create([
            'title' => 'O Impacto da Inteligência Artificial no Mercado de Trabalho',
            'body' => 'A inteligência artificial (IA) está revolucionando profundamente o mercado de trabalho global. Com algoritmos avançados e aprendizado de máquina, tarefas repetitivas estão sendo automatizadas, impactando setores como logística, atendimento ao cliente e manufatura. Embora muitos temam a substituição de empregos, a IA também cria novas oportunidades em áreas como ciência de dados, desenvolvimento de software e análise preditiva. Empresas estão investindo em requalificação de funcionários para adaptação a esse novo cenário. A questão ética sobre decisões automatizadas também se intensifica, exigindo regulação responsável. O futuro do trabalho dependerá da integração equilibrada entre humanos e máquinas inteligentes.',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '1'
        ]);
        $post1->tags()->sync([1, 4, 12]);

        $post2 = Post::create([
            'title' => 'Os Melhores Filmes do Cinema Independente em 2025',
            'body' => 'O cinema independente continua a surpreender com narrativas ousadas e criativas. Em 2025, obras como "Luz do Norte" e "Fragmentos do Tempo" se destacaram por suas abordagens inovadoras e atuações marcantes. Esses filmes, muitas vezes produzidos com orçamentos modestos, priorizam o conteúdo artístico e a originalidade, conquistando crítica e público. Além disso, festivais como Sundance e Cannes têm valorizado cada vez mais essas produções, oferecendo visibilidade global a novos talentos. A ausência de grandes estúdios permite uma liberdade criativa maior, tornando o cinema independente uma das formas mais puras de expressão audiovisual da atualidade.',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '2'
        ]);
        $post2->tags()->sync([2, 7, 16]);

        $post3 = Post::create([
            'title' => 'Rock Alternativo: A Resistência Sonora da Nova Geração',
            'body' => 'O rock alternativo mantém sua relevância ao longo das décadas por se reinventar constantemente. Em 2025, bandas emergentes como “Sombra Urbana” e “Os Disformes” trazem novas propostas sonoras que misturam elementos eletrônicos com guitarras distorcidas e letras introspectivas. Enquanto a indústria musical foca no pop e no hip hop, o rock alternativo continua como refúgio de autenticidade. Com letras críticas e produção mais artesanal, o gênero tem se fortalecido em plataformas de streaming e redes sociais. Shows ao vivo em casas menores e festivais independentes ajudam a manter acesa a chama desse estilo que nunca se conforma.',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '3'
        ]);
        $post3->tags()->sync([3, 6, 13]);

        $post4 = Post::create([
            'title' => 'O Futuro da Internet com a Chegada do 5G',
            'body' => 'A tecnologia 5G está transformando a forma como nos conectamos. Com velocidades até 100 vezes maiores que o 4G, o 5G permite transmissões em tempo real com baixa latência, ideal para jogos, cirurgias remotas e veículos autônomos. Cidades inteligentes e dispositivos IoT dependem diretamente dessa nova infraestrutura. A expansão do 5G promete integrar o mundo digital com ainda mais fluidez, impulsionando áreas como educação à distância, trabalho remoto e entretenimento imersivo. No entanto, a implementação ainda enfrenta desafios como cobertura em regiões remotas e preocupações com segurança cibernética.',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '4'
        ]);
        $post4->tags()->sync([1, 18, 9]);

        $post5 = Post::create([
            'title' => 'Como a Cobertura Jornalística Está se Adaptando ao Digital',
            'body' => 'O jornalismo vive uma transformação sem precedentes. Com a ascensão das redes sociais e das plataformas digitais, a cobertura jornalística precisa ser rápida, precisa e acessível. Grandes veículos estão investindo em formatos multimídia, como vídeos curtos e podcasts, para alcançar públicos mais jovens. Além disso, ferramentas de inteligência artificial estão sendo usadas para monitorar tendências e auxiliar na apuração de dados. Apesar da velocidade exigida, a credibilidade continua sendo o pilar essencial. A presença de fake news reforça a importância do jornalismo profissional como guardião da informação de qualidade.',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '5'
        ]);
        $post5->tags()->sync([5, 19, 20]);

        $post6 = Post::create([
            'title' => 'Análise: Os Destaques do Festival de Cannes 2025',
            'body' => 'O Festival de Cannes de 2025 trouxe à tona uma safra de filmes instigantes, com temáticas diversas e profundas. Destaque para a produção japonesa “Silêncio e Neve”, que emocionou com sua narrativa contemplativa. Filmes latino-americanos também ganharam espaço, abordando questões sociais urgentes. A presença feminina cresceu entre diretores e roteiristas, refletindo um movimento de equidade no cinema. A diversidade de estilos e a mistura de culturas reforçaram a importância do festival como vitrine para o cinema mundial. O evento mostrou que a arte cinematográfica continua sendo uma poderosa ferramenta de reflexão e transformação.',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '6'
        ]);
        $post6->tags()->sync([2, 16, 10]);

        $post7 = Post::create([
            'title' => 'O Papel das Trilhas Sonoras no Sucesso de Séries e Filmes',
            'body' => 'As trilhas sonoras são elementos essenciais na construção da atmosfera de séries e filmes. Elas intensificam emoções, criam identidade e muitas vezes tornam-se ícones culturais. Compositores como Hans Zimmer e Hildur Guðnadóttir são exemplos de artistas que transformaram cenas simples em momentos inesquecíveis. Em 2025, a tendência é o uso de trilhas personalizadas criadas por IA, aliando precisão emocional com inovação tecnológica. Além disso, plataformas de streaming facilitam o acesso às trilhas, ampliando seu impacto fora das telas. A música se consolida como coautora da narrativa audiovisual moderna.',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '7'
        ]);
        $post7->tags()->sync([14, 20, 3]);

        $post8 = Post::create([
            'title' => 'O Avanço dos Dispositivos Inteligentes na Vida Cotidiana',
            'body' => 'Dispositivos inteligentes estão cada vez mais presentes no cotidiano. De assistentes de voz a geladeiras conectadas, a tecnologia evolui para tornar tarefas mais práticas e eficientes. Em 2025, a integração entre dispositivos é um dos maiores avanços, permitindo controle total por meio de smartphones ou comandos de voz. A automação residencial ganha força, oferecendo segurança, economia de energia e conforto. No entanto, esse avanço também levanta questões sobre privacidade e dependência digital. O desafio é equilibrar inovação com responsabilidade, garantindo que o usuário mantenha controle sobre suas informações e rotina.',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '8'
        ]);
        $post8->tags()->sync([9, 1, 18]);

        $post9 = Post::create([
            'title' => 'O Streaming de Música e o Novo Comportamento do Ouvinte',
            'body' => 'Com o crescimento dos serviços de streaming como Spotify, Deezer e Apple Music, o modo como consumimos música mudou radicalmente. As playlists personalizadas, algoritmos de recomendação e acesso instantâneo a milhões de faixas transformaram o ouvinte em um curador ativo. Em vez de álbuns completos, muitos preferem faixas soltas ou listas de humor. Isso impacta diretamente a forma como artistas planejam seus lançamentos, focando em singles virais. Ao mesmo tempo, surgem críticas sobre a remuneração dos músicos, o que gera discussões sobre a sustentabilidade do modelo. O cenário é dinâmico e em constante adaptação.',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '9'
        ]);
        $post9->tags()->sync([3, 6, 13]);

        $post10 = Post::create([
            'title' => 'A Importância da Cultura Pop na Formação da Identidade Jovem',
            'body' => 'A cultura pop influencia gerações há décadas, moldando comportamentos, linguagem e até aspirações. Em 2025, com redes sociais como TikTok e Instagram, o alcance da cultura pop se intensificou. Personagens de séries, artistas musicais e tendências visuais se tornam referências instantâneas. Para os jovens, a cultura pop serve como um espelho e também como um espaço de pertencimento. A identificação com fandoms e a criação de conteúdo colaborativo são parte do processo. Além disso, a cultura pop tem se mostrado cada vez mais diversa, refletindo questões de gênero, raça e identidade de maneira mais representativa.',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '10'
        ]);
        $post10->tags()->sync([8, 14, 17]);

        $post11 = Post::create([
            'title' => 'Inovações em Software: O Que Esperar da Próxima Década',
            'body' => 'O setor de desenvolvimento de software está em plena transformação. Novas linguagens, frameworks e metodologias surgem com frequência. Em 2025, o foco está em inteligência artificial, programação low-code e soluções em nuvem. O conceito de software como serviço (SaaS) continua crescendo, e a demanda por automação personalizada nas empresas aumenta. Ferramentas de colaboração remota e integração contínua também se consolidam. A segurança cibernética passa a ser uma prioridade, com camadas adicionais de proteção e testes automatizados. O desenvolvedor moderno precisa aliar conhecimento técnico a uma visão de produto e experiência do usuário.',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '11'
        ]);
        $post11->tags()->sync([1, 12, 18]);

        $post12 = Post::create([
            'title' => 'Como as Séries de TV Moldam a Opinião Pública',
            'body' => 'Séries de TV deixaram de ser apenas entretenimento para se tornarem instrumentos poderosos de formação de opinião. Produções como “Corações Urbanos” e “Justiça Invisível” levantam questões sociais, políticas e éticas. A estrutura narrativa prolongada permite aprofundar personagens e temas, incentivando reflexões mais densas. Em tempos de polarização e excesso de informação, as séries oferecem novas perspectivas e contribuem para o debate público. Estúdios têm apostado em roteiros mais ousados, enquanto o público se torna mais exigente e engajado. A televisão moderna é agora uma plataforma de influência cultural e social.',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '12'
        ]);
        $post12->tags()->sync([14, 5, 8]);

        $post13 = Post::create([
            'title' => 'Tecnologia e Educação: A Nova Realidade das Salas de Aula',
            'body' => 'A integração entre tecnologia e educação avançou significativamente nos últimos anos. Plataformas de ensino remoto, realidade aumentada e inteligência artificial estão reformulando a didática tradicional. Alunos têm acesso a conteúdos mais dinâmicos, interativos e personalizados. Professores adotam ferramentas para avaliar desempenho em tempo real e adaptar metodologias conforme o progresso da turma. A sala de aula não é mais um espaço físico, mas sim um ecossistema digital. Apesar dos avanços, persistem desafios como desigualdade de acesso e capacitação de docentes. A educação do futuro é híbrida, inclusiva e centrada no estudante.',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '13'
        ]);
        $post13->tags()->sync([1, 4, 9]);

        $post14 = Post::create([
            'title' => 'O Papel do Jornalismo na Era da Desinformação',
            'body' => 'Com o crescimento de fake news e deepfakes, o jornalismo profissional nunca foi tão necessário. Em 2025, veículos de comunicação enfrentam o desafio de checar dados rapidamente e manter a credibilidade frente à avalanche de boatos online. Projetos de fact-checking se tornam ferramentas essenciais no combate à desinformação. A transparência nas fontes e processos editoriais passa a ser uma exigência do público. Redes sociais também colaboram com algoritmos para filtrar conteúdo duvidoso. Apesar das dificuldades, o jornalismo ético continua sendo o pilar da democracia e da liberdade de expressão.',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '14'
        ]);
        $post14->tags()->sync([5, 19, 4]);

        $post15 = Post::create([
            'title' => 'Artistas da Nova Geração: Quem Está Mudando a Música Brasileira',
            'body' => 'A cena musical brasileira está em ebulição com novos talentos que misturam gêneros, linguagens e influências. Em 2025, nomes como Lia Lua e DJ Vórtice representam uma geração mais conectada, criativa e engajada. Com o apoio das redes sociais e das plataformas digitais, artistas independentes conquistam visibilidade e público fiel. A mistura entre funk, pop, trap e MPB forma um caldeirão sonoro que reflete a diversidade cultural do país. Essa nova geração também se destaca por sua postura política e por discutir temas como identidade, periferia e inclusão. A música brasileira nunca foi tão plural e inovadora.',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '15'
        ]);
        $post15->tags()->sync([3, 6, 17]);

        $post16 = Post::create([
            'title' => 'Diretores em Ascensão: Quem São os Novos Nomes do Cinema Mundial',
            'body' => 'A cada ano, novos diretores ganham destaque por suas propostas ousadas e narrativas autênticas. Em 2025, nomes como Aiko Tanaka, Juan Mendez e Clara Gauthier conquistam espaço em festivais com filmes que fogem do convencional. Essas novas vozes representam diferentes culturas e perspectivas, trazendo uma diversidade essencial ao cinema contemporâneo. Plataformas de streaming democratizam o acesso às obras, permitindo que cineastas independentes sejam descobertos por públicos de todo o mundo. A nova geração de diretores desafia normas estéticas e narrativas tradicionais, oferecendo experiências cinematográficas inovadoras.',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '16'
        ]);
        $post16->tags()->sync([2, 10, 8]);

        $post17 = Post::create([
            'title' => 'Gadgets Inovadores que Estão Transformando 2025',
            'body' => 'Em 2025, os gadgets não são apenas acessórios, mas protagonistas na experiência do usuário. Fones com tradução simultânea, óculos de realidade aumentada e smartwatches com monitoramento de saúde em tempo real são alguns dos destaques. A integração entre software e hardware é cada vez mais refinada, tornando os dispositivos verdadeiros assistentes pessoais. Empresas apostam em design ergonômico, sustentabilidade e inteligência artificial embarcada. Os gadgets deixaram de ser luxo para se tornarem itens essenciais no cotidiano. A evolução tecnológica caminha para um futuro em que a interação homem-máquina será cada vez mais fluida e natural.',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '17'
        ]);
        $post17->tags()->sync([9, 1, 4]);

        $post18 = Post::create([
            'title' => 'Premiações do Cinema: Entre o Reconhecimento e a Política',
            'body' => 'As premiações do cinema, como Oscar, BAFTA e Cannes, continuam sendo vitrines de prestígio, mas também palco de tensões políticas e sociais. Em 2025, temas como inclusão, diversidade e representatividade dominaram os discursos e escolhas dos vencedores. Filmes que abordam questões raciais, de gênero e ambientais ganham espaço e reconhecimento. Ao mesmo tempo, há críticas sobre favoritismos, lobby e falta de transparência nas votações. Apesar disso, as premiações ainda servem como termômetro para o que está em voga na indústria audiovisual e influenciam diretamente o mercado e o público.',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '18'
        ]);
        $post18->tags()->sync([2, 10, 16]);

        $post19 = Post::create([
            'title' => 'Como o Jornalismo Local Está se Reinventando com a Tecnologia',
            'body' => 'O jornalismo local, frequentemente ignorado pelas grandes mídias, está passando por uma transformação digital significativa. Pequenos veículos utilizam redes sociais, newsletters e aplicativos para se aproximar das comunidades que atendem. A inteligência artificial e ferramentas de análise de dados ajudam na apuração e personalização de conteúdo. Em 2025, há um resgate da importância do repórter de bairro, com pautas mais humanas e contextualizadas. O jornalismo local também é essencial no combate à desinformação, oferecendo relatos próximos e confiáveis. Com criatividade e tecnologia, ele se mostra mais relevante do que nunca.',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '19'
        ]);
        $post19->tags()->sync([5, 19, 12]);

        $post20 = Post::create([
            'title' => 'A Evolução das Interfaces Musicais Digitais',
            'body' => 'Com a digitalização da música, surgiram novas formas de criar, editar e performar sons. Softwares como Ableton, Logic Pro e ferramentas online oferecem controle absoluto sobre mixagem e produção. Em 2025, as interfaces musicais evoluíram para incluir sensores de movimento, comandos por voz e integração com IA. DJs e produtores exploram novos formatos de expressão, tornando a música mais performática e acessível. Além disso, instrumentos híbridos permitem fusões inéditas entre gêneros. A música digital não substitui a arte tradicional, mas a expande, criando novos horizontes para a criatividade sonora.',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '20'
        ]);
        $post20->tags()->sync([3, 13, 1]);

        $post21 = Post::create([
            'title' => 'Como a Inteligência Artificial Está Influenciando o Jornalismo',
            'body' => 'Ferramentas de inteligência artificial estão mudando a forma como jornalistas produzem e divulgam conteúdo. Algoritmos são usados para identificar tendências em redes sociais, automatizar relatórios de dados e até escrever textos simples. Em 2025, grandes redações utilizam IA para ajudar em pautas investigativas, acelerar a checagem de fatos e melhorar o SEO de seus portais. No entanto, especialistas alertam sobre o risco da perda de autonomia editorial e do viés algorítmico. A IA deve ser vista como um apoio à prática jornalística, não como substituto. Ética e transparência continuam sendo fundamentos indispensáveis no jornalismo moderno.',
            'status' => 'DRAFT',
            'authorId' => 1,
            'slug' => '21'
        ]);
        $post21->tags()->sync([1, 4, 5]);

        $post22 = Post::create([
            'title' => 'Música e Representatividade: Novos Rumos em 2025',
            'body' => 'A música sempre foi uma ferramenta de expressão social, e em 2025, artistas de diversas identidades vêm ganhando espaço e voz. O crescimento da representatividade nas letras, videoclipes e posicionamentos públicos tem feito com que a música cumpra um papel ainda mais relevante na transformação cultural. Novos intérpretes falam sobre temas como racismo, gênero, periferia e acessibilidade de forma direta e impactante. Festivais e premiações têm reconhecido esses nomes e oferecido maior visibilidade. Essa nova fase da música, mais consciente e inclusiva, mostra que o entretenimento pode e deve ser também uma ferramenta de empatia.',
            'status' => 'DRAFT',
            'authorId' => 1,
            'slug' => '22'
        ]);
        $post22->tags()->sync([3, 17, 8]);

        $post23 = Post::create([
            'title' => 'Os Bastidores dos Grandes Festivais de Música',
            'body' => 'Os festivais de música são eventos gigantescos que envolvem meses de planejamento, produção minuciosa e uma cadeia complexa de profissionais. Em 2025, a tecnologia tem sido uma aliada importante nesse processo: desde pulseiras inteligentes para controle de acesso até aplicativos com mapas interativos e programação em tempo real. Os bastidores mostram a dedicação de equipes que cuidam de som, luz, palco, segurança e logística. Além disso, há uma crescente preocupação com sustentabilidade, com ações para reduzir o lixo, incentivar transporte coletivo e valorizar artistas locais. Os festivais evoluem como experiências completas, muito além da música.',
            'status' => 'DRAFT',
            'authorId' => 1,
            'slug' => '23'
        ]);
        $post23->tags()->sync([13, 6, 9]);

        $post24 = Post::create([
            'title' => 'A Nova Era do Entretenimento em Streaming',
            'body' => 'O streaming revolucionou o modo como consumimos entretenimento. Em 2025, além de filmes e séries, há plataformas voltadas para teatro, música ao vivo e até jogos interativos. A personalização do conteúdo com base nos hábitos do usuário se tornou padrão, e a competição entre plataformas como Netflix, Disney+ e outras forçou a inovação contínua. O conteúdo local tem mais destaque, com produções originais de cada país. Apesar do conforto, surgem debates sobre excesso de opções, vício em maratonas e isolamento. Ainda assim, o streaming democratizou o acesso e criou novas formas de contar histórias.',
            'status' => 'DRAFT',
            'authorId' => 1,
            'slug' => '24'
        ]);
        $post24->tags()->sync([2, 6, 14]);

        $post25 = Post::create([
            'title' => 'Cobertura Jornalística em Zonas de Conflito: Os Riscos e os Heróis',
            'body' => 'Cobrir zonas de conflito é uma das missões mais arriscadas e nobres do jornalismo. Em 2025, com conflitos armados e crises humanitárias em diversas regiões do mundo, os correspondentes internacionais enfrentam perigos físicos, censura e desafios logísticos. Muitos arriscam suas vidas para mostrar a realidade de populações afetadas, dar voz a vítimas e denunciar abusos. As tecnologias ajudam, com drones, satélites e redes seguras para envio de material. A cobertura responsável é essencial para pressionar líderes e mobilizar ajuda internacional. O jornalismo em campo continua sendo uma profissão de coragem e compromisso com a verdade.',
            'status' => 'DRAFT',
            'authorId' => 1,
            'slug' => '25'
        ]);
        $post25->tags()->sync([5, 19, 12]);

        $post26 = Post::create([
            'title' => 'Roteiristas do Futuro: Criatividade Humana ou Algorítmica?',
            'body' => 'Com o avanço da inteligência artificial, surgem ferramentas capazes de criar roteiros completos com base em comandos simples. Em 2025, grandes estúdios já testam sistemas que sugerem enredos, personagens e até diálogos. Apesar disso, muitos especialistas apontam que a criatividade humana, com sua subjetividade e capacidade emocional, ainda é insubstituível. A combinação entre IA e roteiristas humanos pode resultar em colaborações interessantes, mas o risco de padronização narrativa preocupa. A pergunta que fica é: a audiência notará a diferença entre uma história escrita por uma pessoa e outra por uma máquina? O tempo dirá.',
            'status' => 'DRAFT',
            'authorId' => 1,
            'slug' => '26'
        ]);
        $post26->tags()->sync([1, 2, 10]);

        $post27 = Post::create([
            'title' => 'Trilhas Sonoras que Marcaram o Cinema na Última Década',
            'body' => 'Músicas e trilhas sonoras têm o poder de marcar não apenas cenas, mas épocas inteiras. Nos últimos dez anos, filmes como “Duna”, “Pantera Negra” e “La La Land” contaram com trilhas que ajudaram a imortalizar suas histórias. Em 2025, a tendência é a fusão de estilos e a personalização da trilha de acordo com o tom emocional da narrativa. A música original continua sendo valorizada em premiações e se torna parte essencial do marketing dos filmes. Compositores contemporâneos ganham status de estrelas e conquistam seguidores fiéis. A trilha sonora é, sem dúvida, uma das protagonistas da experiência cinematográfica.',
            'status' => 'DRAFT',
            'authorId' => 1,
            'slug' => '27'
        ]);
        $post27->tags()->sync([14, 20, 3]);

        $post28 = Post::create([
            'title' => 'O Desafio da Produtividade em um Mundo Cheio de Tecnologia',
            'body' => 'Com tantos aplicativos, notificações e dispositivos, manter o foco tornou-se um dos maiores desafios da vida moderna. Em 2025, surgem novas estratégias para lidar com a sobrecarga digital: técnicas de mindfulness, uso de inteligência artificial para organização de tarefas e até detox digital. As empresas também repensam a produtividade, valorizando mais qualidade do que quantidade. O equilíbrio entre o uso da tecnologia e o bem-estar mental é tema central de pesquisas e livros. A produtividade agora é vista como uma habilidade que envolve autoconhecimento, limite e adaptação constante. Saber usar a tecnologia a favor, e não contra, é o segredo.',
            'status' => 'DRAFT',
            'authorId' => 1,
            'slug' => '28'
        ]);
        $post28->tags()->sync([4, 9, 1]);

        $post29 = Post::create([
            'title' => 'Cinema e Sustentabilidade: Uma Nova Consciência nos Bastidores',
            'body' => 'A indústria cinematográfica, conhecida por seus grandes orçamentos e produções complexas, começa a adotar práticas mais sustentáveis. Em 2025, muitos sets utilizam energia limpa, reciclam materiais de cenário e limitam o uso de transporte aéreo. A pressão do público e de profissionais conscientes tem feito estúdios reconsiderarem seus impactos ambientais. Além disso, o próprio conteúdo das obras aborda temas ecológicos, ajudando a promover uma nova mentalidade. O cinema não apenas reflete mudanças sociais, como também pode liderá-las, mostrando que é possível unir arte e responsabilidade ambiental em prol de um futuro melhor.',
            'status' => 'DRAFT',
            'authorId' => 1,
            'slug' => '29'
        ]);
        $post29->tags()->sync([2, 16, 4]);

        $post30 = Post::create([
            'title' => 'Como Podcasts Estão Reformulando o Jornalismo Narrativo',
            'body' => 'Os podcasts se consolidaram como um dos formatos mais populares de conteúdo em áudio. Em 2025, eles se tornaram uma importante ferramenta para o jornalismo narrativo, permitindo contar histórias de forma envolvente e profunda. Combinando entrevistas, ambientações sonoras e roteiros elaborados, programas como “Vozes do Subsolo” e “Arquivo Aberto” conquistam ouvintes semanais. A acessibilidade e a intimidade do formato favorecem uma conexão emocional com o público. Profissionais de imprensa aproveitam o podcast para explorar temas com mais calma, longe da pressão do factual. O futuro do jornalismo passa também pelos fones de ouvido.',
            'status' => 'DRAFT',
            'authorId' => 1,
            'slug' => '30'
        ]);
        $post30->tags()->sync([5, 19, 20]);
    }
}
