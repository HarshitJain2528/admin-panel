@extends('layout.main')
@section('addproduct')
<div class="left">
    @include('sidebar')
</div> 
<div class="right">
    <h3>Product Manager</h3>
    <div class="addtable">
        <p class="add">Add Product</p>
        <form method="post" enctype="multipart/form-data" action={{Route('insert.product')}}>
            {{ csrf_field() }}
            <table class="innertable">
                <tr>
                    <td align="right">Select Category</td>
                    <td>
                        <select name="category_id">
                            <option>&lt;select category&gt;</option>
                            @foreach ($categories as $rows)
                                <option value="{{ $rows->id }}">{{$rows->categoryname}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right">Product Name</td>
                    <td><input type="text" name="pname"/></td>
                </tr>
                <tr>
                    <td align="right">Product Description</td>
                    <td><input type="text" name="pdesc"/></td>
                </tr>
                <tr>
                    <td align="right">Product Price</td>
                    <td><input type="text" name="pprice"/></td>
                </tr>
                <tr>
                    <td align="right">Product Image</td>
                    <td><input type="file" name="product_image"/></td>
                </tr>
            </table>
            <input type="Submit" value="Save" name="save" class="save"/>
            <input type="button" value="Cancel" class="cancel"/>
        </form>
    </div>
</div>
@endsection	