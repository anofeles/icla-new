<!DOCTYPE html>
<html>
<head>
    <title>icla2022.tbilisi.tsu.ge</title>
</head>
<body>
<h1>icla2022</h1>
<p>
@foreach($data as $i => $dataitem)
    @if($i != '_token' && $i != 'words' && $i != 'leng')
        {{$i}}: / {{$data[$i]}}<br>
    @endif
@endforeach
@if(isset($data['words']))
    <h1>Panel of Choice</h1>
    @foreach($data['words'] as $k => $words)
        {{$words}}<br>
    @endforeach
@endif
@if(isset($data['leng']))
    <h1>Presentation Language</h1>
    @foreach($data['leng'] as $k => $leng)
     {{$leng}}<br>
    @endforeach
@endif
</p>

<p>Thank you</p>
</body>
</html>
