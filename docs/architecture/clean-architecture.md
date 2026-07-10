# VSM Enterprise - Clean Architecture

## Objetivo

Definir uma arquitetura profissional, escalável e preparada para SaaS.

## Camadas

### Domain Layer

Responsável pelas regras de negócio.

Contém:

- Entidades
- Regras
- Serviços de domínio
- Interfaces


### Application Layer

Responsável pelos casos de uso.

Exemplos:

- Criar usuário
- Cadastrar cliente
- Processar pedido


### Infrastructure Layer

Responsável por integrações:

- Banco de dados
- APIs externas
- Arquivos
- Mensageria


### Presentation Layer

Responsável pela comunicação:

- Web
- Mobile
- REST API


## Princípios

- Código limpo
- Baixo acoplamento
- Alta coesão
- Testabilidade
- Segurança
- Escalabilidade
