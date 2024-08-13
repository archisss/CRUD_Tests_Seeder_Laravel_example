<form action="/mascotas/public/pets" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="description" placeholder="Description" required>
    <select name="type" required>
        <option value="Cat">Cat</option>
        <option value="Dog">Dog</option>
        <option value="Turtle">Turtle</option>
    </select>
    <input type="date" name="birthday" required>
    <button type="submit">Create Pet</button>
</form>
