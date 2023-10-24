@extends('layout.main')
@section('changepassword')
    {{-- left div starts  here --}}
    <div class="left">
        @include('layout.sidebar')
    </div>
    {{-- left div ends here --}}  
    @if (session('success'))
        <div class="danger-alert">
            {{ session('success') }}
        </div>
    @endif
    {{-- right div starts here --}}
    <div class="right">
        <h3>Change Password</h3>
        <div class="addtable">
            <p class="add">Change Password</p>
            {{-- change password table starts here --}}
            <form method="post" action="{{url('changepassword')}}">
                {{ csrf_field() }}
                <table class="innertable">
                    <tr>
                        <td align="right">Enter Old Password</td>
                        <td><input type="text" name="oldpass"/></td>
                    </tr>
                    <tr>
                        <td align="right">Enter New Password</td>
                        <td><input type="text" name="newpass"/></td>
                    </tr>
                    <tr>
                        <td align="right">Confirm New Password</td>
                        <td><input type="text" name="cnewpass"/></td>
                    </tr>
                </table>
                <input type="Submit" value="Save" name="save" class="save"/>
                <input type="button" value="Cancel" class="cancel"/>
            </form>
            {{-- change password table ends here --}}
        </div>
    </div>
    {{-- right div ends here --}}
@endsection		