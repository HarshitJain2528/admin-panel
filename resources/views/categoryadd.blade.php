@extends('layout.main')
@section('addcategory')
    {{-- left div starts  here --}}
    <div class="left">
        @include('layout.sidebar')
    </div>
    {{-- left div ends here --}}
    {{-- right div starts here --}}
    <div class="right">
        <h3>Category Manager</h3>
        <div class="addtable">
            <p class="add">Add Category</p>
            {{-- add category form starts here --}}
            <form method="post" action="{{Route('insert.category')}}">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{isset($findrec_category[0]->id) ? $findrec_category[0]->id:''}}">
                <table class="innertable">
                    <tr>
                        <td align="right">Category Name</td>
                        <td><input type="text" name="catname" value="{{isset($findrec_category[0]->categoryname) ? $findrec_category[0]->categoryname:''}}" /></td>
                    </tr>
                </table>
                <input type="Submit" value="Save" name="save" class="save"/>
                <input type="button" value="Cancel" class="cancel"/>
            </form>
            {{-- add category form ends here --}}
        </div>
    </div>
    {{-- right div ends here --}}
@endsection