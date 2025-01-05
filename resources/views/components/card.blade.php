<div class="card">
    <div class="card-header">{{ $title }}</div>
    @if($slot->isEmpty())
        Please provide a body for the card
    @else
        {{ $slot }}
    @endif
    <div class="card-footer">{{ $footer }}</div>
</div>
