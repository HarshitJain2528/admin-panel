@extends('layout.main')
@section('addcategory')
<div class="left">
    @include('sidebar')
</div> 
<div class="right">
    <h3>Category Manager</h3>
    <div class="addtable">
        <p class="add">Add Category</p>
        <form method="get">
        <input type="hidden" name="editid"/>
            <table class="innertable">
                <tr>
                    <td align="right">Category Name</td>
                    <td><input type="text" name="catname" /></td>
                </tr>
            </table>
            <input type="Submit" value="Save" name="save" class="save"/>
            <input type="button" value="Cancel" class="cancel"/>
        </form>
    </div>
</div>
@endsection