@extends('layout.main')
	
@section('login-form')
<br/>
<form method="post">
    <!-- login table starts here -->
    <table class="logintable">
        <tr>
            <td></td>
            <td class="Login">Login</td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="un" /></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pw" /></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="save" value="Login" /></td>
        </tr>
    </table>
    <!-- login table ends here -->
</form>
@endsection