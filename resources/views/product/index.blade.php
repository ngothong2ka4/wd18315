<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('product.create') }}">thêm mới</a>
    <form action="{{ route('product.search') }}" method="get">
        @csrf
        <label for="">Search</label>
        <input type="text" name="product_name">
        <input type="submit" value="Search">
    </form>
    <table border="1">
        <thead>
            <tr>
                <td>No</td>
                <td>Name</td>
                <td>Category Name</td>
                <td>Price</td>
                <td>View</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($listProducts as $key => $product)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->view }}</td>
                    <td>
                        <a href="{{ route('product.show',$product->id) }}"><button>Show</button></a>
                        <a href="{{ route('product.edit',$product->id) }}"><button>edit</button></a>
                        <form  action="{{ route('product.destroy', $product->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" >
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>