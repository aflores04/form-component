<div class="checkbox">
    <label>
        <input type="checkbox" name="{{ $element->getName() }}"> {{ $element->getLabel() }}
    </label>

    @if($errors->has($element->getName()))
        <span class="help-block">{{ $errors->first($element->getName()) }}</span>
    @endif
</div>