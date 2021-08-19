## Title: Laravel Blog

This is projects is created using this video resource https://www.youtube.com/watch?v=HKJDLXsTr8A&t=1506s.
It consist of basic CRUD application for blog post & TailwindCss auth scaffolding.

## My Local installation

1. laravel new laravelblog --git
2. composer require laravel-frontend-presets/tailwindcss --dev
3. php artisan ui tailwindcss --auth
4. npm remove laravel-mix Note:(To fix the error)
5. npm install laravel-mix --save-dev
6. npm install cross-env --save-dev
7. npm run watch, npm run dev or npm run prod
8. composer require cviebrock/eloquent-sluggable Note:(to create slug from the title).
