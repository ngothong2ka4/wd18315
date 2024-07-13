<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name" value="{{ $product[0]->name }}" disabled> <br>
        <label for="">Price</label>
        <input type="number" name="price" value="{{ $product[0]->price }}" disabled> <br>
        <label for="">View</label>
        <input type="number" name="view" value="{{ $product[0]->view }}" disabled> <br>
        <label for="">Category</label>
        <select name="category_id" id="" disabled>
            @foreach ($listCategory as $item)
                <option value="{{ $item->id }}" @if($item->id == $product[0]->category_id) selected @endif>{{ $item->name }}</option>
            @endforeach
        </select> <br>
    </form>
    <a href="{{ route('product.index') }}"><button>list Products</button></a>
</body>
</html>