<div class="panel panel-default">
    <div class="panel-body">
        <div class="well">
            <h4>Delete the category</h4>
        </div>
        {{ form('categories/delete', 'class': 'form') }}
            <div class="form-group">
                <label class="text-info" for="name">Do you really want to delete this category ?</label>
                <div>
                    {{ category.name }}
                </div>
            </div>
            <div class="form-group">
                {{ submit_button('Yes', 'class': 'btn btn-primary') }}
                {{ link_to('categories', 'No', 'class': 'btn btn-default') }}
            </div>
        {{ end_form() }}
    </div>
</div>