<label for="category">Categoría</label>
<select name="category_id" id="category" class="form-control">
    <option value="" selected>Categoría</option>
    @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
</select>