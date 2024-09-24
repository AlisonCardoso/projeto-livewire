
#instalar as dependencias do  composer
composer install

#instalar as dependencias do node.js
npm install


#chave para o projeto
php artisan key:generate

#efetuar migratioons com seeders
php artisan migrate --seed

#instalar componente livewire
php artisan make:livewire ServiceProducts

#executar o servidor do node
npm run dev 

#executar o servidor artisan
php artisan serve
