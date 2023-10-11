@extends('layout.main')
@section('addproduct')
<div class="left">
    @include('sidebar')
</div> 
<div class="right">
    <h3>Product Manager</h3>
    <div class="addtable">
        <p class="add">Add Product</p>
        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="editid"/>
            <table class="innertable">
                <tr>
                    <td align="right">Select Category</td>
                    <td>
                        <select name="catname">
                            <option>&lt;select category&gt;</option>
                                <option></option>
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
                    <td><input type="file" name="pimage"/></td>
                </tr>
            </table>
            <input type="Submit" value="Save" name="save" class="save"/>
            <input type="button" value="Cancel" class="cancel"/>
        </form>
    </div>
</div>
@endsection	