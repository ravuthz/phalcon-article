<div class="panel panel-default">
    <div class="panel-body">
        <div class="well">
            <h4>Create new category</h4>
        </div>
        {{ form('categories/create', 'class': 'form') }}
            {{ partial('categories/form') }}
            {{ submit_button('Save', 'class': 'btn btn-primary') }}
            {{ link_to('categories', 'Back', 'class': 'btn btn-default') }}
        {{ end_form() }}
    </div>
</div>