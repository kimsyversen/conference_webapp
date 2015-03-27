<button class='button-conference {{ $buttonClass }}' @if(isset($value)) {{ "value=" . $value }} @endif>
    <span class="{{ $spanClass }}" aria-hidden="true"></span>
    <span class="button-text">{{ $text }}</span>
</button>
