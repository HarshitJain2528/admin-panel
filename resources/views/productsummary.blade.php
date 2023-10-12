@extends('layout.main')
@section('productsummary')
<div class="left">
    @include('sidebar')
</div>
<div class="right">
    <h3>Product Manager</h3>
    <p class="thisline">This section displays the list of Products</p>
    <p align="center" class="clickline"><a href="">Click here </a> to create <a href=""> New Product</a></p>
    <form method="get" action="productsummary.php">
    <table class="searchtable">
        <tr>
            <td colspan="2">Search</td>
        </tr>
        <tr>
            <td colspan="2">Search By Category Product:
                <input type="text" name="s"/>
                <button type="submit" />Search</button>
            </td>
        </tr>
    </table>
    <form>
    <p>Page 1 of 2, showing 4 records out of 8 total, starting on record 1, ending on 4</p>
    <form method="get">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Product Price</th>
                <th>Product Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($products as $product)
            <tr align="center">
                <td>{{ $product->id }}</td>
                <td>{{ $product->categoryname }}</td>
                <td>{{ $product->pname }}</td>
                <td>{{ $product->pdesc }}</td>
                <td>{{ $product->pprice }}</td>
                <td>
                    @if($product->product_image)
                        <img src="{{ asset('public/product_images/' . $product->product_image) }}" alt="Product Image" width="50">
                    @else
                        No Image
                    @endif
                </td>
                <td><a href="productadd.php">Edit</a></td>
                <td><a href="productsummary.php" class="delete">Delete</a></td>
            </tr>
            @endforeach
        </table>
    </form>
</div>
@endsection