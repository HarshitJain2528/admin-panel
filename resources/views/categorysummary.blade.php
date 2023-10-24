@extends('layout.main')
@section('categorysummary')
    {{-- left div starts  here --}}
    <div class="left">
        @include('layout.sidebar')
    </div>
    {{-- left div ends here --}}
    {{-- right div starts here --}}
    <div class="right">
        <h3>Category Manager</h3>
        <p class="thisline">This section displays the list of Category</p>
        <p align="center" class="clickline"><a href="">Click here </a> to create <a href=""> New Category</a></p>
        {{-- search form starts here --}}
        <form method="post" action="{{Route('search.category')}}">
            {{ csrf_field() }}
            <table class="searchtable">
                <tr>
                    <td colspan="2">Search</td>
                </tr>
                <tr>
                    <td colspan="2">Search By Category Name:
                        <input type="text" name="search_category"/>
                        <button type="submit" >Search</button>
                    </td>
                </tr>
            </table>
        <form>
        {{-- search form ends here --}}
        <p>category 1 of 3, showing 4 records out of 12 total, starting on record 1, ending on 4</p>
        {{-- category table starts here --}}
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($catdata as $row)
                <tr align="center">
                    <td>{{$row->id}}</td>
                    <td>{{$row->categoryname}}</td>
                    <td><a href="{{'edit-data-category/'.$row->id}}"><i class="fas fa-edit"></i></a></td>
                    <td><a href="{{'delete-data-category/'.$row->id}}" class="delete"><i class="fas fa-trash-alt"></a></td>
                </tr>
            @endforeach
            <tr>
                <td colspan="6">{{$catdata->links('pagi')}}</td>
            </tr>
        </table>
        {{-- category table ends here --}}
    </div>
    {{-- right div ends here --}}
@endsection