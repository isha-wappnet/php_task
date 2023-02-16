If statement example

{{-- @If($number==50) --}}
{{-- {{this is $number attempts}} --}}
    
{{-- @else($number!==50) --}}
{{-- {{this is not $number attempts}} --}}
    
{{-- @endif --}}
@if ($name=="isha")
hello {{$name}}
    
@else
hii user
    
@endif