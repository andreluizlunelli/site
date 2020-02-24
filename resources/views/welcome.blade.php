<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-157521516-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-157521516-1');
        </script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Desenvolvedor Senior em aplicações para WEB. Utilização de linguagens e tecnologias como: PHP, Javascript, Docker, HTML, CSS e GIT">
        <meta name="keywords" content="php, js, javascript, html, programador, programador web, programador back-end, desenvolvedor, desenvolvedor web, desenvolvedor back-end, solid, git, docker, andré luiz lunelli">
        <meta property="og:type" content="website" />
        <meta property="og:title" name="og:title" content="Programador André Luiz Lunelli">
        <meta property="og:description" name="og:description" content="Desenvolvedor Senior em aplicações para WEB. Utilização de linguagens e tecnologias como: PHP, Javascript, Docker, HTML, CSS e GIT" />
        <meta property="og:url" content="http://andreluizlunelli.com.br/" />
        <meta property="og:image" content="http://andreluizlunelli.com.br/img/perfil.jpg">
        <meta property="og:image:type" content="image/jpg">
        <meta property="og:image:width" content="300">
        <meta property="og:image:height" content="300">
        <meta property="og:image:alt" content="Foto perfil programador">
        <meta name="robots" content="index, follow">
        <link href="http://andreluizlunelli.com.br/" rel="canonical">

        <title>Programador André Luiz Lunelli</title>

        <!-- Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
    <header>
        <ul id="slide-out" class="sidenav sidenav-fixed">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="">
                    </div>
                    <img class="circle" src="/img/perfil.jpg">
                    <span class="name">André Luiz Lunelli</span>
                    <span class="description">Back-End Developer</span>
                </div>
            </li>
            <li><div class="divider"></div></li>
            <li><a class="sidenav-close" href="#">O que faço?</a></li>
            <li><a class="sidenav-close" href="#qualificacoes">Qualificações</a></li>
            <li><a class="sidenav-close" href="#contato">Contato</a></li>
            <li><a class="sidenav-close" target="_blank" href="https://drive.google.com/file/d/1qEnV67M89ofQwRA5lxHJ6xrtqQGsPGoE/view?usp=sharing">Currículo</a></li>
        </ul>
        <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="medium material-icons">menu</i></a>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col s11 offset-s1">
                    <h1>O que faço?</h1>
                    <p class="flow-text">Olá, meu nome é André Luiz Lunelli, sou formado pela Universidade de Blumenau (<a target="_blank" href="http://furb.br">FURB</a>) em Ciências da Computação e sou programador desde 2012.  </p>
                    <p class="flow-text">Como desenvolvedor Back-End, atuo por meio da implementação de  um conjunto de funções e regras na rede, que representam o cerne de uma aplicação web: sites, api’s, automatização e disparo de tarefas agendadas, e-commerce, entre outras tarefas.</p>
                    <p class="flow-text">Para desempenhar essa tarefa com qualidade possuo conhecimento nas linguagens de programação: PHP, Javascript, Shell Script e Java. Gerenciamento de servidores Linux e administração de bancos de dados relacionais como: Mysql e Postgres.</p>
                    <p class="flow-text">Por lidar com tarefas de certa complexidade, com escopo e regras de negócio que podem variar, considero a utilização de um registro de alterações de código como obrigatória e a ferramenta ideal é o Git. Que torna possível ser contextual e conciso sobre o andamento do projeto.</p>
                    <p class="flow-text">Minimização de erros relacionados à “na minha máquina funciona”. Docker disponibiliza que junto com o código fonte, possa ser entregue o ambiente onde o sistema deve operar.</p>
                    <p class="flow-text">Caso seu futuro projeto permeie soluções na web mas por algum motivo ainda não foi implementado, talvez eu possa te ajudar, entre em contato por <a href="#contato">aqui</a>.</p>
                </div>
            </div>
            <div class="row">
                <div class="col s11 offset-s1">
                    <h1 id="qualificacoes">Habilidades técnicas</h1>
                    <div class="chip">PHP</div>
                    <div class="chip">Frameworks PHP</div>
                    <div class="chip">Laravel</div>
                    <div class="chip">SlimFramework</div>
                    <div class="chip">ZendFramework</div>
                    <div class="chip">Composer</div>
                    <div class="chip">GIT</div>
                    <div class="chip">Padronização (PSR’s)</div>
                    <div class="chip">Doctrine</div>
                    <div class="chip">PHPUnit</div>
                    <div class="chip">Padrões de projeto</div>
                    <div class="chip">SOLID</div>
                    <div class="chip">REST</div>
                    <div class="chip">MVC</div>
                    <div class="chip">Análise de requisitos</div>
                    <div class="chip">Desenvolvimento orientado a testes (TDD)</div>
                    <div class="chip">TWIG</div>
                    <div class="chip">HTML5</div>
                    <div class="chip">CSS</div>
                    <div class="chip">JAVASCRIPT</div>
                    <div class="chip">ES6</div>
                    <div class="chip">Bootstrap</div>
                    <div class="chip">Jquery</div>
                    <div class="chip">SQL</div>
                    <div class="chip">PostgreSQL</div>
                    <div class="chip">MySQL</div>
                    <div class="chip">Linux</div>
                    <div class="chip">OAuth2</div>
                    <div class="chip">Single sign on (SSO)</div>
                    <div class="chip">Docker</div>
                    <div class="chip">GraphQL</div>
                    <div class="chip">Codeception</div>
                    <div class="chip">Java</div>
                    <div class="chip">Hibernate</div>
                    <div class="chip">Typescript</div>
                    <div class="chip">Webpack</div>
                    <div class="chip">Babel</div>
                    <div class="chip">C/C++</div>
                    <div class="chip">ZeroMQ</div>
                    <div class="chip">Jenkins</div>
                    <div class="chip">Gradle</div>
                    <div class="chip">Python</div>
                </div>
            </div>
            <div class="row">
                <div class="col s11 offset-s1">
                    <h1>Atividades formais de aperfeiçoamento</h1>
                    <ul>
                        <li>Udemy – Curso Javascript do Futuro - ES6/7 / Webpack 2 / Typescript - outubro/2018</li>
                        <li>The Developers Conference – Trilha de PHP – Florianópolis - SC abril/2018</li>
                        <li>The Developers Conference – Trilha de Arquitetura – Florianópolis - SC abril/2018</li>
                        <li>The Developers Conference – Trilha de Microserviços – Florianópolis - SC abril/2017</li>
                        <li>Livro – Orientação a objetos e SOLID para Ninjas, projetando classes flexíveis. Casa do código</li>
                        <li>Livro – REST, Construa API’s inteligentes de maneira simples. Casa do código</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col s11 offset-s1">
                    <h1 id="contato">Contato</h1>
                    <div class="row">
                        <div class="col s12 m2">
                            <a target="_blank" href="https://github.com/andreluizlunelli">
                                <img src="data:image/png;base64,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" style="width: 96px;height: 96px;">
                            </a>
                        </div>
                        <div class="col s12 m2">
                            <a target="_blank" href="https://linkedin.com/in/andre-lunelli/">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAABmJLR0QA/wD/AP+gvaeTAAADRUlEQVR4nO3dO2sVQRjG8X805iheOkkhiASskoiVYLBUBKM2XioLQYV8A0Hs7OM1WvoBRIyg4L2wsLBR0FIEBVGMjSYiamIsJoEj5uTMzF7e3dnnB1PtzuzsPDmbnT27e0BERERERERERMTfMHAReA3MAPOJl5mFfb0ADOUwftFawFVgDvtBsSpzwATQl3Esg7WAJxk6nlp5TMkhXCtgJ+permQa0QDDNPuw06nMAoOhg7kitAJwMrJe6lYCJ0IrxQzk7og6TbEntEJPxEamgXUR9ZpgGtgQUiEmgPmIOk0SNKY6lhtTAMYUgDEFYKzXYJvPgFvAG9yEbgA4CowY9KWWYmeKP3AD3clx3GzSekabtRQutmM+s8SzGdqvSglS1jzgA7AZ+NNlvbXAFLAmYhtVUcl5wHO6Dz7Ad9yXHY1RVgA+g79orrBeVFBZAWzzXK9FxCXdOisrgK3APo/1TgHrC+5L7cWeHXwGti/T7gHcqar1WUySZ0GLfgLXgdvAO9whZwg3P9gf2Z+qCdoHXY7OXyVPQ6UDBWBMARhTAMbKCuAT7p+TT+nmiGc77TdK/QYmgTFgB9APrMZdcxoAjgH3MuxfqWLOjT/m2P5hz3YuL6x/E3ch0Mco7o+ltHlA6oegc8Ah4L3n+ndx9z19KaxHOajLJyD4Jqk2ox79yOUTEKMuAWQ16dEXHYIKdL6MjSiAzp4Cb4veSBMC6MUd00/jrrj67vM88KCoTi2yuC2lTJuAO/x7Gfw+cBD45VH/RRGdapfyJ6AHuMH/30HsBc54tvEy1x4tIeUARoCdHZaN4TfrnsqvO0tLOYBdyyzrB7Z4tPE1n650lnIA/V2Wb/Ro41seHVlOygGsyrgc3K2ShUo5gFpQAMYUgDEFYEwBGFMAxhSAMQVgTAEYUwDGFIAxBWBMARhTAMb0gEb+9IBGnSgAYwrAmAIwpgCMKQBjCsBYTAAzufciHcH3EcUE4Pu4TxMFj01MAA8j6jRF4bezg3u5Rgov18u7RL2+PtZECTtUt3Ip04gG6sP9bIf1TlelPMLgd2T6cE+jN/lwNIv7yy998NsNAuPAK9z7860HpegyvbCv4zTs/XYiIiIiIiIiIpLNX2FVAcN9sPYGAAAAAElFTkSuQmCC">
                            </a>
                        </div>
                        <div class="col s12 m2">
                            <a target="_blank" href="mailto:to.lunelli@gmail.com">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAABmJLR0QA/wD/AP+gvaeTAAADCElEQVR4nO2cv2sUQRTHP8mJgqC9gWilhRaxsrJILYqNtlZqayn4FwiCoIJgYWNpJaRQFHuttAlYxiOxsTKcjeY4i90tPM+bnV/7Zu++H3hV3s3Ne9+Z/e7esAEhhBBCCCGEEEIIIYQQQoh/OQc8AbaBETBZ8hjVvXgMnI3oq5MjVI0fF1B0qTEGHtW9Ssph4E0BBfYlXtc9S8bDAorqWzwI6vQMzgAHBRTUtzgATruau+pKAG4BgxZ54m8GwE1XUhsBNqOnsrxsuhLarOzvwEXgeOxsloxd4B7wJcVgR4H7yAvaxBh4RqYFex74WECRpcZn4EJwd1uyCtwG9g0LLS1+Anfp+GZlDXiZsIi+xhZwKrKXUVwBvmLfiK7jG3AjQf+SsEwmndVkY1l0k/5EByY7zRZw0iN/EU06xGRPAC888v9L6AQWxaR9TbZZgD/qz0cTuwX7atJ7+JvsBvBhapxopifWmNAxjzH6ZNIhJtvU93vGeNHMWyHXPMcq3aRDdvhlYGfOmNG4Jh1q0s01soSIMVnX2NHkKqAUk869gKLJvYWtTDqVyRYlwITyTTrGZEPm5yTnCivNpHOYbLECNFGCSec02eIFCG3AWqIGWC8AJ10I0ESXJr0HXPf8rg3SXwKddCnAhPwm3bXJ9k6AmBXqMunQHbaTsU4nVgI0keIabWmyvRdgQnV2cAe/Bq4Dr+pY9/jcoP6urs4rzPGZbO4TJ4sfA83xnXCOM1fLn8PNCZ14iEnPwvpAyJzYAnxNuiHVg9zSCzDB7y6ntPMGc1IW4zLpEk/czEld0CyTLvnM2ZxchQ2Bq3UMM35PVgFW2iSJKFbm/bHNK0oiIxLAGAlgjAQwRgIYIwGMkQDGzL1H7YhFfw7Rc0DJSABjJIAxEsAYCWCMBDBGAhhziMW/D7dk35WgHZCXoStBAuTlrStBR5L5GFO9b7A9L0k7IB9PcTQftANy8R64BPxyJWoHpGVM9Q/OWzUfqttQEceI6g2bd8BzWlx2hBBCCCGEEEIIIYQQQgixXPwB59XHGBfBskoAAAAASUVORK5CYII=">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="/js/app.js"></script>
    </body>
</html>
