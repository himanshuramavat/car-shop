<H1>Hello World</H1>

{{-- This is textThis is text --}}

{{-- @if (true)
    <p>True</p>
    
@endif

@foreach ($hobbies as $hobby)
<p>
    {{ $loop->iteration }}.
    {{ $hobby }}
</p>
    
@endforeach --}}

{{-- <div 
@class([
    'container', 
    'text-center' => $contry === 'India',
    ])

@style([
    'background-color:red' => $contry === 'India',  
    'color:white',
    'padding:10px',
    'margin-top:10px',
    ])
>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit ab error libero enim, neque at eveniet alias ducimus fugit porro doloremque non, ratione cupiditate expedita minima! Delectus, sit beatae!
</div> --}}

{{-- @include('shared.button', [
    'text' => 'Click Me',
    'class' => 'btn-danger',
    'type' => 'submit',
    'attributes' => 'style="margin-top:10px"'
])

@includeIf('shared.button_top') --}}

{{-- @php
    $car = 'BMW';
    dd($car);
@endphp --}}

@includeIf('shared.alert', [
    'message' => 'This is a Succes message',
    'color' => 'green'
])

@includeIf('shared.alert', [
    'message' => 'This is a Error message',
    'color' => 'red'
])