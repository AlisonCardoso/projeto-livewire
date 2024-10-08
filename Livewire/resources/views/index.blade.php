@component('components.layouts.app')
    <div class="container">
        <div>
            <h4>Sobre o CRUD</h4>
            <p style="color: black; font-size: 17px">
                CRUD cirado usando o <a href="https://livewire.laravel.com/" target="_blank">livewire</a> , uma biblioteca adicionada pelo Laravel em 2019. A proposta do Livewire é criar interfaces dinâmicas (similares ao Vue) com os códigos do blade e do próprio Laravel.  
                Saiba mais sobre a biblioteca <a href="https://fireworkweb.com.br/livewire/#:~:text=Afinal%2C%20o%20que%20%C3%A9%20Livewire,blade%20e%20do%20pr%C3%B3prio%20Laravel." target="_blank">aqui</a>
                <br>
                <br>
                Por enquanto o projeto possibilita solictar apenas o CEP e o CNPJ, mas é possível consumir qualquer dado disponível na API (<a href="https://brasilapi.com.br/docs" target="_blank">Ler a documentação</a>).
            </p>
            <hr>
            <p style="color: black; font-size: 30px ">Repositório Brasil API</p>
            <a href="https://github.com/andreoneres/brasilapi-php" target="_blank">BrasilAPI PHP - @andreoneres</a>
            <br>
            <br>
            <a href="https://github.com/Corviz/brasilapi-php" target="_blank">BrasilAPI PHP - @carloscarucce</a>
            <hr>
            <p style="font-style: italic">Readme.md do repositório BrasilAPI</p>
            <h4>Motivo</h4>
            <p style="color: black; font-size: 17px">
                Acesso programático de informações é algo fundamental na comunicação entre sistemas, mas, para nossa surpresa, uma informação tão útil e pública quanto um CEP não consegue ser acessada diretamente por um navegador por conta da API dos Correios não possuir CORS habilitado.
                <br>
                <br>
                Dado a isso, este projeto experimental tem como objetivo centralizar e disponibilizar endpoints modernos com baixíssima latência utilizando tecnologias como Vercel Smart CDN responsável por fazer o cache das informações em atualmente 23 regiões distribuídas ao longo do mundo (incluindo Brasil). Então não importa o quão devagar for a fonte dos dados, nós queremos disponibilizá-la da forma mais rápida e moderna possível.
            </p>
            <br>
            <br>
            <h4>Documentação</h4>
            <p style="color: black; font-size: 17px">
                Caso deseje saber mais sobre os detalhes das integrações consulte nossa <a href="https://brasilapi.com.br/docs" target="_blank">documentação</a> OpenAPI.
            </p>
            <br>
            <br>
            <h4>Como contribuir</h4>
            <p style="color: black; font-size: 17px">
                Através do Next.js, um framework utilizado por empresas como Marvel, Twitch, Nike, Hulu, TypeForm, Nubank, Ferrari, TikTok, Square Enix, entre outras, estamos construindo a página de apresentação do projeto e, por ser um framework híbrido, ele possibilita a construção e deploy de APIs com o mínimo de configuração possível em uma infraestrutura autoescalável da Vercel, a mesma que conta com recursos sensacionais como a Vercel Smart CDN.

                Caso você esteja lendo esta versão de README, você está pegando o projeto num estágio extremamente inicial, porém empolgante, pois há várias coisas a serem definidas. Então caso queira contribuir, utilize as issues para entender quais pontos ainda não foram resolvidos, conversar conosco e contribuir tanto com idéias técnicas, quanto de quais APIs podem ser criadas.

                Veja mais detalhes sobre como contribuir no arquivo <a href="https://github.com/BrasilAPI/BrasilAPI/blob/main/CONTRIBUTING.md" target="_blank">CONTRIBUTING.md</a>
            </p>
        </div>
    </div>
@endcomponent