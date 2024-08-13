# Pasos de la Aplicación

La aplicación contiene los siguientes pasos:

1. **Crear una tabla de base de datos (`mascotas`) con las siguientes columnas:**
   - `ID`
   - `Name`
   - `Description`
   - `Type` (3 opciones posibles: Cat, Dog, Turtle)
   - `Birthday`

2. **Crear una nueva tabla de base de datos (`pet_walks`) con las siguientes columnas:**
   - `ID`
   - `Pet_ID` (relación de clave foránea con `pets -> ID`)
   - `Location`
   - `Walk_date`

3. **Crear una página HTML muy simple con una tabla para mostrar todas las mascotas:**
   - Ruta: `mascotas/public/pets`

4. **Las columnas de la tabla deben ser:**
   - `ID`
   - `Description`
   - `Type`
   - `Number of Days Old` (Para esta columna, calcular cuántos días tiene la mascota, según su cumpleaños.)

5. **Completar la tabla de mascotas con 10 filas usando `factory`, `seeder`, y `migraciones`:**
   - Comando: `php artisan migrate:fresh --seed`

6. **Crear un formulario HTML muy simple para agregar una nueva mascota:**
   - Ruta: `mascotas/public/pets/create`

7. **Utilizar el formulario HTML para crear una nueva mascota con los siguientes atributos:**
   - `Name`: Frodo
   - `Description`: "Central Asian Shepherd Dog"
   - `Type`: DOG
   - `Birthday`: 2024-02-01

8. **Agregar una prueba unitaria para afirmar que Frodo fue creado exitosamente.**

9. **Agregar una prueba unitaria para comprobar que `Number of Days Old` calcula el valor correcto.**
