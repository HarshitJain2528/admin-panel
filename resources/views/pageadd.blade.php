@extends('layout.main')
@section('pageadd')
    {{-- left div starts  here --}}
    <div class="left">
        @include('layout.sidebar')
    </div>
    {{-- left div ends here --}} 
    {{-- right div starts here --}}
    <div class="right">
        <h3>Page Manager</h3>
        <div class="addtable">
            <p class="add">Add Table</p>
            {{-- Add page table starts here --}}
            <form method="post" action="{{Route('insert.page')}}">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{isset($findrec[0]->id) ? $findrec[0]->id:''}}">
                <table class="innertable">
                    <tr>
                        <td align="right">Name</td>
                        <td><input type="text" name="name" value="{{isset($findrec[0]->name) ? $findrec[0]->name:''}}" /></td>
                    </tr>
                    <tr>
                        <td align="right">Content</td>
                        <td>
                            <textarea name="content" class="contentbox"  >
                                {{isset($findrec[0]->content) ? $findrec[0]->content:''}}
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">Status</td>
                        <td>
                                
                            <input  type="checkbox" name="status" {{isset($findrec[0]->status) ? 'checked':''}}/> 
                        
                        </td>
                    </tr>
                </table>
                <input type="Submit" value="{{isset($findrec) ? 'Update':'Save'}}" name="save" class="save"/>
                <input type="button" value="Cancel" class="cancel"/>
            </form>
            {{-- Add page table ends here ends here --}}
        </div>
    </div>
    {{-- right div ends here --}}
@endsection
    