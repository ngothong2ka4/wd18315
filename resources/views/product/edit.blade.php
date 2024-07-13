<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('product.update',$product->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="">Name</label>
        <input type="text" name="name" value="{{ $product->name }}" > <br>
        <label for="">Price</label>
        <input type="number" name="price" value="{{ $product->price }}" > <br>
        <label for="">View</label>
        <input type="number" name="view" value="{{ $product->view }}" > <br>
        <label for="">Category</label>
        <select name="category_id" id="" >
            @foreach ($listCategory as $item)
                <option value="{{ $item->id }}" @if($item->id == $product->category_id) selected @endif>{{ $item->name }}</option>
            @endforeach
        </select> <br>
        <button type="submit">Save</button>
    </form>
    <a href="{{ route('product.index') }}"><button>list Products</button></a>
</body>
</html>