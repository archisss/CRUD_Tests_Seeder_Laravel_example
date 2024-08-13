La aplicacion contiene los siguientes pasos:

1) Cree una tabla de base de datos (mascotas) con columnas:
    ID
    Name
    Description
    Type (3 opciones posibles: Car, Dog, Turtle)
    Brithday

2) Cree una nueva tabla de base de datos (pet_walks) con columnas:
    ID
    Pet_ID (foreign key relationship to the pets-> ID)
    Location
    Walk_date

3) Cree una página HTML muy simple con una tabla para mostrar todas las mascotas.
    mascotas/public/pets
   
4) Las columnas de la tabla deben ser: ID, descriptión, type y number of days old.
    Para la columna Number of Days Old, calcule cuántos días tiene la mascota, según su cumpleaños.

5) Complete la tabla de mascotas con 10 filas usando facroty, seeder y migraciones.
   php artisan migrate:fresh --seed
   
6) Crea un formulario HTML muy simple para agregar una nueva mascota.
    mascotas/public/pets/create
    
7) Utilice el formulario HTML para crear una nueva mascota con los siguientes atributos:
    Name: Frodo
    Description: "Central Asian Shepherd Dog"
    Type: DOG
    Birthdate: 2024-02-01

8) Agregue una prueba unitaria para afirmar que Frodo fué creado exitosamente.
9) Agregue una prueba unitaria para comprobar que Number of Days Old, calcula el valor correcto
