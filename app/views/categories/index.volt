<div class="panel panel-default">
    <div class="panel-body">
        <div class="well">
            <h4>List all categories</h4>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <a class="btn btn-success" href="{{ url('categories/new') }}">New Category</a>
            </div>
        </div>
        <br/>
        <div class="responsive-table">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Author</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {% for category in categories %}
                    <tr>
                        {% set id = category.id %}
                        <td>{{ id }}</td>
                        <td>{{ category.name }}</td>
                        <td>{{ category.created_at}}</td>
                        <td>{{ category.author_id }}</td>
                        <th class="text-center">
                            {{ link_to('categories/edit/' ~ id, 'update', 'class': 'btn btn-sm btn-primary') }}
                            {{ link_to('categories/remove/' ~ id, 'delete', 'class': 'btn btn-sm btn-danger') }}
                        </th>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>