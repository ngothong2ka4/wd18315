<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('user.update',$user->id) }}" method="POST">
        @method('patch')
        @csrf
        <label for="">Name</label>
        <input type="text" name="name" value="{{ $user->name }}">
        <label for="">Email</label>
        <input type="text" name="email" value="{{ $user->email }}">
        <label for="">Phòng ban</label>
        <select name="phongban_id" id="">
            @foreach ($phongbans as $item)
                <option value="{{ $item->id }}" @if($item->id == $user->phongban_id) selected @endif>{{ $item->ten_donvi }}</option>
            @endforeach
        </select>
        <button type="submit">Save</button>
    </form>
</body>
</html>