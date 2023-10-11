@extends('layout.main')
@section('categorysummary')
<div class="left">
    @include('sidebar')
</div>
<div class="right">
    <h3>Category Manager</h3>
    <p class="thisline">This section displays the list of Category</p>
    <p align="center" class="clickline"><a href="">Click here </a> to create <a href=""> New Category</a></p>
    <form method="get" action="categorysummary.php">
    <table class="searchtable">
        <tr>
            <td colspan="2">Search</td>
        </tr>
        <tr>
            <td colspan="2">Search By Category Name:
                <input type="text" name="s"/>
                <button type="submit" />Search</button>
            </td>
        </tr>
    </table>
    <form>
    <p>category 1 of 3, showing 4 records out of 12 total, starting on record 1, ending on 4</p>
    <form method="get">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <tr align="center">
                <td></td>
                <td></td>
                <td><a href="categoryadd.php">Edit</a></td>
                <td><a href="categorysummary.php" class="delete">Delete</a></td>
            </tr>
            </tr>
        </table>
    </form>
</div>
@endsection