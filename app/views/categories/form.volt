<div class="form-group">
    <label for="name">Name: </label>
    {{ text_field('name', 'class': 'form-control', 'value': category.name) }}
</div>
<div class="form-group">
    <label for="thumbnail">Thumbnail: </label>
    {{ text_field('thumbnail', 'class': 'form-control', 'value': category.thumbnail) }}
</div>
<div class="form-group">
    <label for="description">Description: </label>
    {{ text_area('description', 'class': 'form-control', 'value': category.description) }}
</div>