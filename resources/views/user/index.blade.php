<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('user.create') }}">thêm mới</a>
    <table border="1">
        <thead>
            <tr>
                <td>STT</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phòng ban</td>
                <td>Hành động</td>

            </tr>
        </thead>
        <tbody>
            @foreach ($listUsers as $key => $user)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->ten_donvi }}</td>
                    <td>
                        <a href="{{ route('user.show',$user->id) }}">Show</a>
                        <a href="{{ route('user.edit',$user->id) }}">edit</a>
                        <form  action="{{ route('user.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" >
                                Delete
                            </button>
                        </form>
                        <

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>