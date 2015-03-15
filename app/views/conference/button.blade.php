
<button
        class='{{ $buttonClass }}'
@if(isset($id)) {{ "id=" . $id }} @endif
@if(isset($value)) {{ "value=" . $value }} @endif>
    <span class="{{ $spanClass }}" aria-hidden="true"></span>
    <span class="button-text">{{ $text }}</span>
</button>
