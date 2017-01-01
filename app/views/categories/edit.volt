<div class="panel panel-default">
    <div class="panel-body">
        <div class="well">
            <h4>Modify the category</h4>
        </div>
        {{ form('categories/update/' ~ category.id, 'class': 'form') }}
            {{ partial('categories/form') }}
            {{ submit_button('Save', 'class': 'btn btn-primary') }}
            {{ link_to('categories', 'Back', 'class': 'btn btn-default') }}
        {{ end_form() }}
    </div>
</div>