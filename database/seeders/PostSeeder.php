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
            'title' => 'Review: Notebook Dell Inspiron para Desenvolvimento Web e Produtividade',
            'body' => 'O Dell Inspiron se destaca como uma excelente opção para programadores. Com processador i7 e SSD veloz, ele proporciona um ambiente ágil para projetos PHP e web. O desempenho consistente contribui para uma rotina produtiva e fluida no desenvolvimento de aplicações.',
            'cover' => 'https://example.com/images/notebook-dell.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '1'
        ]);
        $post1->tags()->sync([1, 8, 10]);

        $post2 = Post::create([
            'title' => 'Review: MacBook Pro M2 para Programadores Laravel',
            'body' => 'O MacBook Pro M2 entrega performance de sobra para desenvolvedores Laravel. Sua combinação de hardware potente e sistema macOS otimizado facilita a execução de containers, testes e build de aplicações web, otimizando cada minuto da rotina de desenvolvimento.',
            'cover' => 'https://example.com/images/macbook-m2.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '2'
        ]);
        $post2->tags()->sync([2, 8, 10]);

        $post3 = Post::create([
            'title' => 'Avaliação: Tablet Samsung Tab S8 para Estudos de Desenvolvimento',
            'body' => 'O Galaxy Tab S8 surpreende na fluidez e portabilidade para estudos em JavaScript, HTML e leitura técnica. Ideal para consumir conteúdos educacionais, acompanhar cursos e praticar códigos simples mesmo longe do desktop principal.',
            'cover' => 'https://example.com/images/tablet-tab-s8.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '3'
        ]);
        $post3->tags()->sync([3, 8, 10]);

        $post4 = Post::create([
            'title' => 'Notebook Lenovo: Ideal para Frontend e TypeScript',
            'body' => 'O Lenovo IdeaPad apresenta ótimo desempenho para tarefas frontend. A tela de alta definição aliada ao bom tempo de resposta facilita o desenvolvimento com TypeScript, React e Vue, além de ser eficiente para revisões de código colaborativas.',
            'cover' => 'https://example.com/images/lenovo-ideapad.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '4'
        ]);
        $post4->tags()->sync([1, 9, 8, 10]);

        $post5 = Post::create([
            'title' => 'Monitor LG UltraWide: Visualize Mais, Produza Melhor',
            'body' => 'O monitor LG UltraWide é perfeito para quem trabalha com múltiplas janelas. Durante testes com editores, navegadores e documentação lado a lado, o ganho de produtividade foi claro. A experiência visual melhora tanto o design quanto a codificação simultânea.',
            'cover' => 'https://example.com/images/monitor-lg.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '5'
        ]);
        $post5->tags()->sync([4, 8, 10]);

        $post6 = Post::create([
            'title' => 'Redragon Kumara: O Teclado Ideal para Programadores',
            'body' => 'Este teclado mecânico da Redragon oferece feedback preciso e excelente construção. Testado com IDEs, ambientes web e escrita de documentação, ele mostrou-se um grande aliado na produtividade diária de desenvolvedores frontend e backend.',
            'cover' => 'https://example.com/images/teclado-kumara.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '6'
        ]);
        $post6->tags()->sync([5, 8, 10]);

        $post7 = Post::create([
            'title' => 'SSD Kingston 480GB: Velocidade para o Seu Projeto Web',
            'body' => 'Ao substituir um HD tradicional pelo SSD Kingston, o impacto nos tempos de compilação, inicialização de projetos Laravel e bancos locais foi notável. Mais velocidade = mais produtividade. Um dos upgrades mais acessíveis e eficazes para qualquer dev.',
            'cover' => 'https://example.com/images/ssd-kingston.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '7'
        ]);
        $post7->tags()->sync([6, 8, 10]);

        $post8 = Post::create([
            'title' => 'Notebook Acer Aspire 5: Frontend com Alta Performance',
            'body' => 'O Acer Aspire 5 entrega uma excelente performance para desenvolvedores frontend. Trabalhar com frameworks modernos como Vue, React e Tailwind foi fluido, com multitarefa eficiente, contribuindo diretamente para uma produção mais ágil.',
            'cover' => 'https://example.com/images/acer-aspire5.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '8'
        ]);
        $post8->tags()->sync([1, 9, 8, 10]);

        $post9 = Post::create([
            'title' => 'ASUS VivoBook: Mobilidade e Eficiência para Frontend',
            'body' => 'O VivoBook se provou uma ferramenta de trabalho competente. Ideal para quem precisa de mobilidade, ele roda tranquilamente stacks frontend modernas e suporta múltiplas abas de navegador, design e código, elevando a produtividade sem pesar no bolso.',
            'cover' => 'https://example.com/images/asus-vivobook.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '9'
        ]);
        $post9->tags()->sync([1, 9, 8, 10]);

        $post10 = Post::create([
            'title' => 'Raspberry Pi 4: Protótipos e Automação na Palma da Mão',
            'body' => 'O Raspberry Pi 4 é ideal para testes rápidos, automações e projetos IoT. Durante o uso em simulações de servidores locais e sensores web, ele mostrou-se confiável, versátil e altamente adaptável ao ciclo de vida de um desenvolvedor maker.',
            'cover' => 'https://example.com/images/raspberry-pi-4.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '10'
        ]);
        $post10->tags()->sync([7, 8, 10]);

        $post11 = Post::create([
            'title' => 'Teclado Logitech K380: Minimalismo e Conforto para Desenvolvedores',
            'body' => 'Com um design compacto e teclas silenciosas, o Logitech K380 se adapta perfeitamente a ambientes de desenvolvimento mais discretos. Ideal para quem alterna entre dispositivos e precisa de um teclado confiável para longas sessões de codificação.',
            'cover' => 'https://example.com/images/logitech-k380.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '11'
        ]);
        $post11->tags()->sync([5, 8, 10]);

        $post12 = Post::create([
            'title' => 'Tablet iPad Air M1: Leveza e Poder para Devs em Movimento',
            'body' => 'Com o chip M1, o iPad Air se destaca não só em performance gráfica como também no suporte a ferramentas de produtividade e código em nuvem. Uma excelente escolha para desenvolvedores que precisam estudar, revisar pull requests ou escrever artigos técnicos fora do escritório.',
            'cover' => 'https://example.com/images/ipad-air.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '12'
        ]);
        $post12->tags()->sync([3, 8, 10]);

        $post13 = Post::create([
            'title' => 'Monitor Dell 24”: Alta Definição para Codificação Prolongada',
            'body' => 'O monitor Dell de 24 polegadas com painel IPS entrega imagens nítidas e cores precisas, o que ajuda no desenvolvimento frontend e na leitura prolongada de documentação. Um bom monitor é um investimento que preserva a saúde visual do desenvolvedor.',
            'cover' => 'https://example.com/images/monitor-dell-24.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '13'
        ]);
        $post13->tags()->sync([4, 9, 8, 10]);

        $post14 = Post::create([
            'title' => 'SSD Crucial 1TB: Armazenamento Rápido para Grandes Projetos',
            'body' => 'Projetos com múltiplos containers, bancos de dados locais e assets pesados exigem um bom SSD. O Crucial 1TB oferece velocidade de leitura e gravação excelentes, otimizando a experiência com Laravel, Docker e ferramentas de build modernas.',
            'cover' => 'https://example.com/images/ssd-crucial.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '14'
        ]);
        $post14->tags()->sync([6, 8, 10]);

        $post15 = Post::create([
            'title' => 'MacBook Air M1: Simplicidade com Potência para Desenvolvimento Web',
            'body' => 'Leve e silencioso, o MacBook Air com chip M1 é mais do que suficiente para projetos web. Durante nossos testes com Laravel, NPM e Docker, o aparelho mostrou grande autonomia e desempenho, ideal para quem valoriza mobilidade e produtividade.',
            'cover' => 'https://example.com/images/macbook-air.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '15'
        ]);
        $post15->tags()->sync([2, 8, 10]);

        $post16 = Post::create([
            'title' => 'Notebook Samsung Book: Equilíbrio entre Custo e Desempenho',
            'body' => 'Com um processador i5 e SSD de fábrica, o Samsung Book mostrou ótimo desempenho em projetos PHP e Node.js. Uma ótima escolha para estudantes e desenvolvedores em início de carreira que buscam performance sem extrapolar o orçamento.',
            'cover' => 'https://example.com/images/samsung-book.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '16'
        ]);
        $post16->tags()->sync([1, 8, 10]);

        $post17 = Post::create([
            'title' => 'Teclado Anne Pro 2: Mecânico, Compacto e Personalizável',
            'body' => 'O Anne Pro 2 é um teclado compacto com switches Gateron que oferece uma digitação rápida e responsiva. Suas funções programáveis o tornam ideal para desenvolvedores que gostam de configurar atalhos e macros para aumentar a produtividade.',
            'cover' => 'https://example.com/images/anne-pro2.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '17'
        ]);
        $post17->tags()->sync([5, 8, 10]);

        $post18 = Post::create([
            'title' => 'Tablet Lenovo M10 Plus: Estudo e Leitura Técnica no Dia a Dia',
            'body' => 'O M10 Plus é um tablet intermediário, mas muito útil para ler artigos, ebooks técnicos e até rodar apps de terminal remoto. Seu desempenho é adequado para tarefas leves e de apoio à rotina de quem estuda programação.',
            'cover' => 'https://example.com/images/lenovo-m10.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '18'
        ]);
        $post18->tags()->sync([3, 10]);

        $post19 = Post::create([
            'title' => 'Raspberry Pi 400: Um Computador na Forma de Teclado',
            'body' => 'Com teclado embutido, o Raspberry Pi 400 é ideal para introdução à programação, servidores locais, automação residencial e ensino. Com suporte a Linux, Git e editores de código, ele surpreende pelo tamanho e funcionalidade.',
            'cover' => 'https://example.com/images/raspberry-400.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '19'
        ]);
        $post19->tags()->sync([7, 8, 10]);

        $post20 = Post::create([
            'title' => 'Monitor AOC 27” IPS: Amplo Espaço para Codar e Criar',
            'body' => 'O monitor de 27 polegadas da AOC com painel IPS oferece excelente espaço de tela e fidelidade de cores. Perfeito para workflows com múltiplas IDEs, navegadores e design UI. A ergonomia da tela grande faz diferença no fim do dia.',
            'cover' => 'https://example.com/images/monitor-aoc-27.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '20'
        ]);
        $post20->tags()->sync([4, 8, 10]);
    }
}
