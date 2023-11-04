-- Planejamento

1 - Entidades e Relacionamentos

  • Usuários
    - Usuários pode criar várias tarefas
    - Um usuário pode ter várias categorias

  • Tarefas
    - Uma tarefa vai sempre pertencer à um único usuário
    - Uma tarefa vai sempre pertencer à uma categoria

  • Categorias
    - Uma categoria pode ter várias tarefas
    - Uma categoria sempre vai pertencer à um usuário.

2 - Detalhes das migrations

  Usuário: 
    - seguir o padrão do laravel

  Tarefa:
    - id
    - titulo
    - data
    - descrição
    - categoria_id
    - user_id

  Categoria:
    - id
    - nome
    - cor (hexadecimal)
    - user_id