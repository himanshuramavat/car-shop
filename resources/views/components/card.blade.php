@props(['color', 'bgColor' => 'white'])

<div {{ $attributes
            ->merge(['lang' => 'ka'])
            ->class("card card-text-$color card-bg-$bgColor") }}>
    <div {{$title->attributes->class('card-header')}}>{{ $title }}</div>
    @if($slot->isEmpty())
        Please provide a body for the card
    @else
        {{ $slot }}
    @endif
    <div class="card-footer">{{ $footer }}</div>
</div>
