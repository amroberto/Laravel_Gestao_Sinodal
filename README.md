# Gestão Sinodal

## Descrição do Projeto

Este é um projeto de gestão Sinodal desenvolvido em PHP utilizando o framework Laravel. O sistema é destinado a facilitar a administração e organização de diversas atividades e processos relacionados ao funcionamento de um Sínodo, uma entidade administrativa ligada a uma Igreja. **Nota:** Este projeto está no início do desenvolvimento e novas funcionalidades e melhorias estão sendo adicionadas regularmente.

### O que é um Sínodo?

Um Sínodo é uma assembleia ou conselho eclesiástico que se reúne para discutir e tomar decisões sobre assuntos doutrinários, administrativos e pastorais. Na tradição cristã, especialmente nas igrejas protestantes e ortodoxas, os Sínodos desempenham um papel crucial na governança e supervisão das atividades da igreja em diversas regiões. Eles são formados por clérigos e, em alguns casos, por membros leigos da igreja, que juntos deliberam sobre questões que afetam a comunidade religiosa.

## Funcionalidades do Projeto

- **Gestão de Estados**: Cadastro e manutenção de informações sobre os estados.
- **Gestão de Cidades**: Cadastro e manutenção de informações sobre as cidades.
- **Gestão de Cargos**: Cadastro e manutenção de informações sobre os cargos dentro da estrutura Sinodal.
- **Relatórios**: Geração de relatórios para facilitar a análise e tomada de decisões.
- **Autenticação e Autorização**: Sistema de login e controle de acesso para garantir a segurança das informações.

## Tecnologias Utilizadas

- **Linguagem de Programação**: PHP
- **Framework**: Laravel
- **Banco de Dados**: MySQL (ou o banco de dados de sua escolha)
- **Front-end**: Blade Templates, Bootstrap

## Instalação

Para instalar e executar este projeto localmente, siga as instruções abaixo:

1. Clone o repositório:
    ```bash
    git clone git@github.com:amroberto/Laravel_Gestao_Sinodal.git
    ```

2. Navegue até o diretório do projeto:
    ```bash
    cd Laravel_Gestao_Sinodal
    ```

3. Instale as dependências do Composer:
    ```bash
    composer install
    ```

4. Copie o arquivo `.env.example` para `.env` e configure suas variáveis de ambiente:
    ```bash
    cp .env.example .env
    ```

5. Gere a chave da aplicação:
    ```bash
    php artisan key:generate
    ```

6. Execute as migrações para criar as tabelas no banco de dados:
    ```bash
    php artisan migrate
    ```

7. Inicie o servidor de desenvolvimento:
    ```bash
    php artisan serve
    ```

## Contribuição

Se você deseja contribuir com este projeto, por favor, siga as diretrizes abaixo:

1. Fork este repositório.
2. Crie uma branch para sua feature (`git checkout -b feature/nome-da-feature`).
3. Commit suas mudanças (`git commit -am 'Adiciona nova feature'`).
4. Envie para a branch (`git push origin feature/nome-da-feature`).
5. Abra um Pull Request.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).
