@extends('web.layouts.welcome')
@section('section')
    @if (isset($success) && $success == 1)
        <div style="color: green">
            <p>Thank you for submission!<br>
                Your abstract is sent!</p>

            You will receive a confirmation e-mail within 24 hours.
        </div>
    @endif
<form method="post" enctype="multipart/form-data" action="{{route('home.special',['locale'=>$locale])}}">
    @csrf
    <label for="fullname">Full Name</label>    <br>
    <input type="text" id="fullname" name="fullname" placeholder="Full Name" value="{{old('fullname')}}">
    @error('fullname')
    <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <label for="address">Address</label>    <br>
    <input type="text" id="address" name="address" placeholder="Address" value="{{old('address')}}">
    @error('address')
    <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <label for="affilation">Affilation</label>    <br>
    <input type="text" id="affilation" name="affilation" placeholder="Affilation" value="{{old('affilation')}}">
    @error('affilation')
    <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <label for="currentposition">Current Position</label>    <br>
    <input type="text" id="currentposition" name="currentposition" placeholder="Current Position" value="{{old('currentposition')}}">
    @error('currentposition')
    <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <label for="email">E-Mail</label>    <br>
    <input type="text" id="email" name="email" placeholder="E-Mail" value="{{old('email')}}">
    @error('email')
    <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <b>Special Sessions </b>
    @error('words')
    <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <label for="words">Literature facing  the challenges  of the Anthropocene</label>    <br>
    <input type="checkbox" id="words" name="words[]" value="Literature facing  the challenges  of the Anthropocene" >
    <br>
    <label for="east">Literature facing  the challenges  of racial divides, re-imagining justice</label>    <br>
    <input type="checkbox" id="east" name="words[]" value="Literature facing  the challenges  of racial divides, re-imagining justice">
    <br>
    <label for="global">Literature facing  linguistic challenges  today</label>    <br>
    <input type="checkbox" id="global" name="words[]" value="Literature facing  linguistic challenges  today">
    <br>
    <label for="presentation">Presentation Title</label>    <br>
    <input type="text" id="presentation" name="presentation" placeholder="Presentation Title" value="{{old('presentation')}}">
    @error('presentation')
    <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <label for="planguage">Presentation Language</label>    <br>
    <input type="text" id="planguage" name="planguage" placeholder="Presentation Language" value="{{old('planguage')}}">
    @error('planguage')
    <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <b>Are You AILC-ICLA member?</b>
    <br>
    <label for="memberyes">Yes</label>    <br>
    <input type="radio" id="memberyes" name="member" value="Yes">
    @error('member')
    <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <label for="memberno">NO</label>    <br>
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
    <label for="individual">For more information about membership of the AILC-ICLA please see <a href='https://www.ailc-icla.org/membership-information'> https://www.ailc-icla.org/membership-information</a> </label> <br><br>
    <label for="individual">Individual Session Abstract Proposal</label>    <br>
    <input type="file" id="individual" name="individual" placeholder="Individual Session Abstract Proposal">
    @error('individual')
    <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <button type="submit">Send</button>
</form>
@endsection
