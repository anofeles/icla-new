@extends('web.layouts.welcome')
@section('section')
    @if (isset($success) && $success == 1)
        <div style="color: green">
            <p>Thank you for submission!<br>
                Your abstract is sent!</p>

            You will receive a confirmation e-mail within 24 hours.
        </div>
    @endif
    <form method="post" enctype="multipart/form-data" action="{{route('home.individual',['locale'=>$locale])}}">
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
        <b>Panel of Choice</b>
        <br>
        <label for="words">Words and Images crossing literary and critical borders</label>    <br>
        <input type="checkbox" id="words" name="words[]" value="Words and Images crossing literary and critical borders" >
        <br>
        <label for="east">East and West: Literary and Cultural Paradigms</label>    <br>
        <input type="checkbox" id="east" name="words[]" value="East and West: Literary and Cultural Paradigms">
        <br>
        <label for="global">Global South and Global North</label>    <br>
        <input type="checkbox" id="global" name="words[]" value="Global South and Global North">
        <br>
        <label for="minorities">Minorities and/ in Literature</label>    <br>
        <input type="checkbox" id="minorities" name="words[]" value="Minorities and/ in Literature">
        <br>
        <label for="translating">Translating difference: The Other in Other Words</label>    <br>
        <input type="checkbox" id="translating" name="words[]" value="Translating difference: The Other in Other Words">
        <br>
        <label for="minor">Minor Literature, Small Literatures, Literatures of Small Nations</label>    <br>
        <input type="checkbox" id="minor" name="words[]" value="Minor Literature, Small Literatures, Literatures of Small Nations">
        <br>
        <label for="colonial">Colonial, Postcolonial, Decolonial and Neocolonial Experiences: Rewriting Cultural History</label>    <br>
        <input type="checkbox" id="colonial" name="words[]" value="Colonial, Postcolonial, Decolonial and Neocolonial Experiences: Rewriting CulturalHistory">
        <br>
        <label for="gender">Gender and Sexuality in Contemporary Literature and Culture</label>    <br>
        <input type="checkbox" id="gender" name="words[]" value="Gender and Sexuality in Contemporary Literature and Culture">
        <br>
        <label for="postsoviet">The post-Soviet Literary Space and the World after the Cold War</label>    <br>
        <input type="checkbox" id="postsoviet" name="words[]" value="The post-Soviet Literary Space and the World after the Cold War">
        <br>
        <label for="digital">Digital Culture: Media, Transmedia, Intermedia</label>    <br>
        <input type="checkbox" id="digital" name="words[]" value="Digital Culture: Media, Transmedia, Intermedia">
        <br>
        <label for="presentation">Presentation Title</label>    <br>
        <input type="text" id="presentation" name="presentation" placeholder="Presentation Title" value="{{old('presentation')}}">
        @error('presentation')
        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <b>Presentation Language</b><br>
        @error('leng')
        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="english">English</label>
        <input type="checkbox" id="english" name="leng[]" value="english"><br>
        <label for="french">French</label>
        <input type="checkbox" id="french" name="leng[]" value="french"><br>
        <label for="georgian">Georgian</label>
        <input type="checkbox" id="georgian" name="leng[]" value="georgian">
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
        <label for="individual">For more information about membership of the AILC-ICLA please see <a href='https://www.ailc-icla.org/membership-information'> https://www.ailc-icla.org/membership-information</a> </label> <br> <br>
        <label for="individual">Individual Session Abstract Proposal</label>    <br>
        <input type="file" id="individual" name="individual" placeholder="Individual Session Abstract Proposal">
        @error('individual')
        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <button type="submit">Send</button>
    </form>
@endsection
