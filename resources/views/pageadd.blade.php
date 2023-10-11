@extends('layout.main')
@section('pageadd')
<div class="left">
    @include('sidebar')
</div> 
<div class="right">
    <h3>Page Manager</h3>
    <div class="addtable">
        <p class="add">Add Table</p>
        <form method="get">
        <input type="hidden" name="editid" />
            <table class="innertable">
                <tr>
                    <td align="right">Name</td>
                    <td><input type="text" name="name" /></td>
                </tr>
                <tr>
                    <td align="right">Content</td>
                    <td>
                        <textarea name="content" class="contentbox"></textarea>
                    </td>
                </tr>
                <tr>
                    <td align="right">Status</td>
                    <td>
                        <input  type="checkbox" name="status"/>
                    </td>
                </tr>
            </table>
            <input type="Submit" value="Save" name="save" class="save"/>
            <input type="button" value="Cancel" class="cancel"/>
        </form>
    </div>
</div>
@endsection
    