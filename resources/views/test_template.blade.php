<h1>This is the test template</h1>
@include('user');
<!-- @if($users[0]=="alii")
<h3>yes, this is ali</h3>
@elseif($users[2]=="naqvi")
<h3>this is naqvi</h3>
@else
<h3>this is else</h3>
@endif -->

@for($i=0;$i<10;$i++)
<h4>{{$i}}</h4>
@endfor

@foreach($users as $user)
<h4>{{$user}}</h4>
@endforeach

@csrf
<script>
    var data = @json($users);
    console.warn(data);
    console.log(data);
</script>

@php
echo "ali abid";
@endphp