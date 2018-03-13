<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/all.css') }}">

    <script src="{{ asset('js/all.js') }}"></script>
    
    <title>Blog</title>
</head>
<body>
    <style>
    
        .wrapper {
            width: 80%;
            margin: 5rem auto; 
        }
    </style>
    
    
    <div class="wrapper">
        <table class="table table-striped" id="posts-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>

    <script>

        $(function() {
            $('#posts-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/admin/posts/data',
                columns: [
                    { data: 'title', name: 'title' },
                    { data: 'body', name: 'body' },
                    { data: 'created_at', name: 'created_at' },
                    { 
                        data: 'id', 
                        name: 'id',
                        render: function ( data, type, row, meta ) {
                            return '<a href="/admin/posts/' 
                            + row.id 
                            + '/edit">Edit</a>';
                        }
                    },
                ]
            });
        });
    </script>

</body>
</html>



