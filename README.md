<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel Application

La aplicacion contiene los siguientes pasos:

Cree una tabla de base de datos (mascotas) con columnas:
ID
Name
Description
Type (3 opciones posibles: Car, Dog, Turtle)
Brithday
Cree una nueva tabla de base de datos (pet_walks) con columnas:
ID
Pet_ID (foreign key relationship to the pets-> ID)
Location
Walk_date
Complete la tabla pet_walks con 1 fila: Para este paso es necesario en la terminal ejecutar mediante Tinker: PetWalk::create([ 'pet_id' => 11, 'location' => 'el parque', 'walk_date' => '2024-02-01', ]);

Cree una página HTML muy simple con una tabla para mostrar todas las mascotas.

Las columnas de la tabla deben ser: ID, descriptión, type y number of days old.
Para la columna Number of Days Old, calcule cuántos días tiene la mascota, según su cumpleaños.
Complete la tabla de mascotas con 10 filas usando facroty, seeder y migraciones.
Crea un formulario HTML muy simple para agregar una nueva mascota.
Utilice el formulario HTML para crear una nueva mascota con los siguientes atributos:
Name: Frodo
Description: "Central Asian Shepherd Dog"
Type: DOG
Birthdate: 2024-02-01
Agregue una prueba unitaria para afirmar que Frodo fué creado exitosamente.
Agregue una prueba unitaria para comprobar que Number of Days Old, calcula el valor correcto

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
