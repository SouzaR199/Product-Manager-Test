# Teste Prático - Laravel 11 + Filament + Livewire + PHP 8.3

## Requisitos
- PHP 8.3
- Composer
- MySQL

# 1. Clone o repositório
via ssh: git clone git@github.com:SouzaR199/Product-Manager-Test.git
via https: git clone https://github.com/SouzaR199/Product-Manager-Test.git

# 2. Acesse o diretório do projeto
cd seu-repo

# 3. Instale as dependências PHP (Laravel, Filament, Livewire, etc.)
composer install

# 4. Crie o arquivo de ambiente e gere a chave da aplicação
cp .env.example .env
php artisan key:generate

# 5. Execute as migrações (cria as tabelas no banco de dados)
php artisan migrate

# 6. Popule o banco de dados (cria o usuário administrador e dados de teste)
php artisan db:seed

# 7. Instale as dependências Node.js (Vite, Alpine.js, etc.)
npm install

# 8. Compile os assets (para produção) ou inicie o watcher (para desenvolvimento)
# Para Desenvolvimento:
npm run dev 
# Para Produção:
# npm run build

# 9. Rode o servidor de desenvolvimento do Laravel
php artisan serve --host=localhost

# 10. acesse o link localhost:8000 no seu navegador
# 11. insira os dados de acesso
email: admin@admin.com
senha: Pr0ductM3n4g3r!