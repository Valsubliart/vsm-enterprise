# VSM Enterprise - VSM CORE

## 1. Objetivo

O VSM CORE é o núcleo central da plataforma VSM Enterprise.

Responsável pelos serviços compartilhados por todos os módulos:

- ERP
- CRM
- Marketplace
- Marketing
- Inteligência Artificial
- BI
- SaaS


---

# 2. Princípios

O VSM CORE deve seguir:

- Clean Architecture
- Código limpo
- Segurança por padrão
- Escalabilidade
- Multiempresa (SaaS)
- Auditoria completa
- LGPD


---

# 3. Domínios Principais


## 3.1 Usuários

Entidade:

User

Responsabilidades:

- Autenticação
- Controle de acesso
- Perfil do usuário
- Histórico de acesso


Campos principais:

- id
- name
- email
- password
- status
- last_login
- created_at
- updated_at


---

## 3.2 Empresas

Entidade:

Company

Objetivo:

Permitir operação multiempresa.

Campos:

- id
- name
- document
- email
- phone
- status
- created_at
- updated_at


---

## 3.3 Perfis

Entidade:

Role

Exemplos:

- Administrador
- Gerente
- Vendedor
- Produção
- Cliente


---

## 3.4 Permissões

Entidade:

Permission


Exemplos:

- users.create
- users.edit
- products.view
- orders.approve
- financial.report


---

# 4. Relacionamentos


User

possui:

- Roles


Role

possui:

- Permissions


Modelo:


User

|

User_Roles

|

Role

|

Role_Permissions

|

Permission


---

# 5. Auditoria


Entidade:

AuditLog


Objetivo:

Registrar todas as ações importantes.


Informações:

- Usuário responsável
- Data e hora
- IP
- Ação executada
- Dados alterados


---

# 6. Configurações


Entidade:

Setting


Responsável por:

- Configurações do sistema
- Preferências da empresa
- Parâmetros gerais


---

# 7. Notificações


Entidade:

Notification


Tipos:

- Sistema
- Email
- WhatsApp
- Push


---

# 8. Eventos do Sistema


Entidade:

SystemEvent


Objetivo:

Comunicação entre módulos.


Exemplos:

- Cliente criado
- Pedido aprovado
- Produto atualizado


---

# 9. Segurança


Requisitos:

- Hash de senha
- Controle de sessão
- Permissões por recurso
- Logs de acesso
- Proteção LGPD


---

# 10. Próxima Implementação


Após aprovação do domínio:

Criar:

- Modelagem do banco
- Migration Laravel
- API REST
- Testes automatizados
- Documentação Swagger
