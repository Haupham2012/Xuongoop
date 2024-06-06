<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <h1 class="m-0">Danh sách User</h1>

    <a href="{{ url('admin/users/create ') }}">Them</a>
    @if (isset($_SESSION['status']) && $_SESSION['status'])
        <div>{{ $_SESSION['msg'] }}</div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Avatar</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>CREATED AT</th>
                <th>UPDATED AT</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><img src="{{ asset($user['avatar']) }}" alt="" width="100px"></td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['created_at'] ?></td>
                    <td><?= $user['updated_at'] ?></td>
                    <td>
                        <a href="{{ url('admin/users/ ' . $user['id'] . '/show') }}">Xem</a>
                        <a class="btn btn-warning" href="{{ url('admin/users/' . $user['id'] . '/edit') }}">Sửa</a>
                        <a href="{{ url('admin/users/ ' . $user['id'] . '/delete') }}"
                            onclick="return confirm('chac ko')">Xóa
                        </a>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>


</body>

</html>
