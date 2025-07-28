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
            'title' => 'Trabalhando com PHP moderno e bancos de dados',
            'body' => 'O PHP atual é uma linguagem robusta e moderna, capaz de lidar com aplicações complexas. Quando combinado com bancos de dados como MySQL, permite criar sistemas dinâmicos e seguros. Neste post, mostramos como usar PDO, proteger contra injeção SQL e estruturar consultas de forma eficiente.',
            'cover' => 'https://example.com/php-mysql.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '1'
        ]);
        $post1->tags()->attach([1, 7]);

        $post2 = Post::create([
            'title' => 'Começando com Laravel: instalação e primeiros passos',
            'body' => 'Laravel é um dos frameworks PHP mais usados no mundo. Neste guia, mostramos como instalar o Laravel com Composer, configurar o ambiente no XAMPP e iniciar seu primeiro projeto. Você verá como funciona a estrutura MVC e como criar suas primeiras rotas e controladores.',
            'cover' => 'https://example.com/laravel-start.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '2'
        ]);
        $post2->tags()->attach([2, 1]);

        $post3 = Post::create([
            'title' => 'Manipulando o DOM com JavaScript puro',
            'body' => 'JavaScript permite interatividade direta no navegador. Um dos principais usos é a manipulação do DOM — a estrutura da página. Neste post, mostramos como selecionar elementos, responder a eventos e atualizar o conteúdo HTML dinamicamente, sem frameworks externos.',
            'cover' => 'https://example.com/js-dom.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '3'
        ]);
        $post3->tags()->attach([3, 5]);

        $post4 = Post::create([
            'title' => 'TypeScript na prática: escrevendo código seguro em JavaScript',
            'body' => 'TypeScript adiciona tipagem estática ao JavaScript, o que ajuda a evitar bugs e melhorar a produtividade. Neste artigo, você vai aprender como usar interfaces, tipos personalizados e integração com bibliotecas JS, além de configurar seu projeto com `tsconfig.json`.',
            'cover' => 'https://example.com/ts-intro.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '4'
        ]);
        $post4->tags()->attach([4, 3]);

        $post5 = Post::create([
            'title' => 'HTML semântico: estrutura seu site corretamente',
            'body' => 'Utilizar HTML semântico melhora a acessibilidade, SEO e manutenção do código. Neste post, mostramos como usar corretamente elementos como `<header>`, `<article>`, `<nav>`, além de dicas sobre estrutura lógica e validação do código.',
            'cover' => 'https://example.com/html-semantico.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '5'
        ]);
        $post5->tags()->attach([5, 6]);

        $post6 = Post::create([
            'title' => 'CSS moderno: flexbox, grid e responsividade',
            'body' => 'Criar layouts responsivos nunca foi tão fácil com as ferramentas modernas do CSS. Neste artigo, explicamos como usar Flexbox para alinhamento, CSS Grid para estrutura e media queries para adaptar seu site a diferentes tamanhos de tela.',
            'cover' => 'https://example.com/css-modern.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '6'
        ]);
        $post6->tags()->attach([6, 5]);

        $post7 = Post::create([
            'title' => 'Consultas eficientes em MySQL com PHP',
            'body' => 'A combinação de PHP com MySQL é amplamente utilizada no desenvolvimento web. Neste post, abordamos como otimizar consultas, usar joins com eficiência, e integrar as respostas do banco com scripts PHP usando mysqli ou PDO.',
            'cover' => 'https://example.com/php-consultas.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '7'
        ]);
        $post7->tags()->attach([7, 1]);

        $post8 = Post::create([
            'title' => 'Criando componentes reativos com React',
            'body' => 'React é uma biblioteca poderosa para interfaces interativas. Aqui, mostramos como criar componentes reutilizáveis, usar hooks como useState e useEffect, e estruturar sua aplicação para facilitar manutenção e performance.',
            'cover' => 'https://example.com/react-componentes.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '8'
        ]);
        $post8->tags()->attach([8, 3]);

        $post9 = Post::create([
            'title' => 'Vue.js para iniciantes: diretivas e reatividade',
            'body' => 'Vue.js oferece uma curva de aprendizado suave para quem está começando com frameworks JavaScript. Neste post, mostramos como usar diretivas como `v-if` e `v-for`, trabalhar com dados reativos e montar sua primeira aplicação Vue.',
            'cover' => 'https://example.com/vue-basico.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '9'
        ]);
        $post9->tags()->attach([9, 5]);

        $post10 = Post::create([
            'title' => 'Node.js: criando sua primeira API REST',
            'body' => 'Node.js é ideal para construir APIs rápidas e escaláveis. Neste guia, criamos uma API REST do zero usando Express.js, com rotas, middlewares e conexão com banco de dados. Também mostramos como usar ferramentas como Postman para testar.',
            'cover' => 'https://example.com/node-api.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '10'
        ]);
        $post10->tags()->attach([10, 3]);

        $post11 = Post::create([
            'title' => 'Configurando ambiente PHP com CSS e Node.js',
            'body' => 'Integrar PHP com tecnologias modernas como CSS e Node.js é essencial para aplicações web dinâmicas. Neste artigo, mostramos como configurar um ambiente de desenvolvimento completo, onde o PHP cuida do backend, o CSS estiliza o frontend e o Node.js pode ser usado para automações ou WebSocket.',
            'cover' => 'https://example.com/dev-stack.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '11'
        ]);
        $post11->tags()->attach([1, 6, 10]);

        $post12 = Post::create([
            'title' => 'Protegendo APIs com Laravel Sanctum e autenticação JWT',
            'body' => 'Neste post você aprende a criar e proteger APIs usando Laravel Sanctum. Exploramos autenticação com tokens, configuração de rotas protegidas e como integrar com um frontend moderno, inclusive utilizando Node.js como consumidor das APIs.',
            'cover' => 'https://example.com/laravel-api.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '12'
        ]);
        $post12->tags()->attach([2, 1, 10]);

        $post13 = Post::create([
            'title' => 'Criando interfaces interativas com JavaScript, HTML e CSS',
            'body' => 'Interfaces modernas precisam ser ágeis e intuitivas. Usando HTML, CSS e JavaScript, você pode construir interações ricas no navegador: animações com CSS, eventos com JS e uma estrutura clara com HTML semântico. Veja exemplos práticos neste post.',
            'cover' => 'https://example.com/front-end-ui.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '13'
        ]);
        $post13->tags()->attach([3, 6, 5]);

        $post14 = Post::create([
            'title' => 'Criando uma aplicação escalável com TypeScript e Node.js',
            'body' => 'Neste artigo, desenvolvemos uma aplicação backend completa utilizando TypeScript e Node.js. Você aprenderá a organizar o projeto com módulos, utilizar classes e interfaces, além de configurar o build com `tsc` e o deploy para produção.',
            'cover' => 'https://example.com/ts-node.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '14'
        ]);
        $post14->tags()->attach([4, 10, 3]);

        $post15 = Post::create([
            'title' => 'Melhorando a acessibilidade com HTML e CSS',
            'body' => 'A acessibilidade é essencial para garantir que seu site possa ser utilizado por todos. Neste post, mostramos como aplicar práticas como uso correto de headings, contraste de cores com CSS, e navegação via teclado usando HTML semântico.',
            'cover' => 'https://example.com/acessibilidade.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '15'
        ]);
        $post15->tags()->attach([5, 6]);

        $post16 = Post::create([
            'title' => 'Interatividade com CSS Grid e JavaScript',
            'body' => 'Neste post, mostramos como usar CSS Grid para criar layouts complexos e adaptáveis, e como combinar isso com JavaScript para manipular elementos dinamicamente, ativando efeitos e interações em tempo real.',
            'cover' => 'https://example.com/css-grid-js.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '16'
        ]);
        $post16->tags()->attach([6, 3]);

        $post17 = Post::create([
            'title' => 'Modelagem de dados com Laravel e MySQL',
            'body' => 'Aprenda como modelar seu banco de dados com Laravel usando Eloquent. Neste post mostramos como criar migrations, relacionamentos entre tabelas e executar consultas otimizadas no MySQL com o mínimo de código PHP.',
            'cover' => 'https://example.com/modelagem.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '17'
        ]);
        $post17->tags()->attach([7, 1, 2]);

        $post18 = Post::create([
            'title' => 'Formulários inteligentes com React, HTML e JavaScript',
            'body' => 'Neste post, construímos um formulário completo em React que valida dados em tempo real com JavaScript. Mostramos como usar `useState` para controle dos campos, aplicar validação HTML e criar feedback visual com CSS.',
            'cover' => 'https://example.com/react-form.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '18'
        ]);
        $post18->tags()->attach([8, 3, 5]);

        $post19 = Post::create([
            'title' => 'Vue.js com Laravel: criando uma SPA completa',
            'body' => 'Neste tutorial, integramos Vue.js ao backend Laravel para criar uma aplicação SPA. Usamos Vuex para gerenciamento de estado, axios para comunicação com APIs e mostramos como organizar os componentes e rotas do projeto.',
            'cover' => 'https://example.com/vue-laravel.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '19'
        ]);
        $post19->tags()->attach([9, 3, 2]);

        $post20 = Post::create([
            'title' => 'Deploy de aplicações Laravel com Node.js e MySQL',
            'body' => 'Neste post, você verá como preparar sua aplicação Laravel para produção, configurar o banco MySQL e usar Node.js para executar scripts de build e deploy automatizado. Incluímos dicas de versionamento, envs e hospedagem.',
            'cover' => 'https://example.com/deploy.jpg',
            'status' => 'PUBLISHED',
            'authorId' => 1,
            'slug' => '20'
        ]);
        $post20->tags()->attach([10, 2, 7]);

    }
}
