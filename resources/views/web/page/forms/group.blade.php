@extends('web.layouts.welcome')
@section('section')
    @if (isset($success) && $success == 1)
        <div style="color: green">
            <p>Thank you for submission!<br>
                Your abstract is sent!</p>

            You will receive a confirmation e-mail within 24 hours.
        </div>
    @endif
    <form method="post" enctype="multipart/form-data" action="{{route('home.group',['locale'=>$locale])}}">
        @csrf
        <label for="fullname">Full Name</label> <br>
        <input type="text" id="fullname" name="fullname" placeholder="Full Name" value="{{old('fullname')}}">
        @error('fullname')
        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="address">Address</label> <br>
        <input type="text" id="address" name="address" placeholder="Address" value="{{old('fullname')}}">
        @error('address')
        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="affilation">Affilation</label> <br>
        <input type="text" id="affilation" name="affilation" placeholder="Affilation" value="{{old('fullname')}}">
        @error('affilation')
        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="currentposition">Current Position</label> <br>
        <input type="text" id="currentposition" name="currentposition" placeholder="Current Position" value="{{old('currentposition')}}">
        @error('currentposition')
        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="email">E-Mail</label> <br>
        <input type="text" id="email" name="email" placeholder="E-Mail" value="{{old('email')}}">
        @error('email')
        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="group">Group Session Title</label> <br>
        <input type="text" id="group" name="group" placeholder="Group Session Title" value="{{old('group')}}">
        @error('group')
        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="organization">Group Session Organization</label> <br>
        <input type="text" id="organization" name="organization" placeholder="Group Session Organization" value="{{old('organization')}}">
        @error('organization')
        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <b>Group Session Type</b> <br>
        <label for="open">Open</label>
        <input type="radio" id="open" name="open" value="Open"><br>
        @error('open')
        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="french">Closed</label>
        <input type="radio" id="closed" name="open" value="closed"><br>
        @error('open')
        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="inviting">Inviting Group Session Members</label> <br>
        <input type="text" id="inviting" name="inviting" placeholder="Inviting Group Session Members" value="{{old('inviting')}}">
        @error('inviting')
        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="approximately">Approximately Participants</label> <br>
        <input type="text" id="approximately" name="approximately" placeholder="Approximately Participants" value="{{old('approximately')}}">
        @error('approximately')
        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="working">Working Language</label> <br>
        <input type="text" id="working" name="working" placeholder="Working Language" value="{{old('working')}}">
        @error('working')
        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <b>Are You AILC-ICLA member?</b>
        <br>
        <label for="memberyes">Yes</label> <br>
        <input type="radio" id="memberyes" name="member" value="Yes">
        @error('member')
        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="memberno">NO</label> <br>
        <input type="radio" id="memberno" name="member" value="NO">
        @error('member')
        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="specify">If you answered Yes, please, specify via which National Association member of the AILC-ICLA or if you are an individual member</label> <br>
        <input type="text" id="specify" name="specify" placeholder="Specify AILC-ICLA National Association" value="{{old('specify')}}">
        @error('specify')
        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="individual">For more information about membership of the AILC-ICLA please see <a href='https://www.ailc-icla.org/membership-information'> https://www.ailc-icla.org/membership-information</a> </label> <br> <br>
        <label for="individual">Group Session Abstract Proposal</label> <br>
        <input type="file" id="individual" name="individual" placeholder="Group Session Abstract Proposal">
        @error('individual')
        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <button type="submit">Send</button>
    </form>
@endsection
