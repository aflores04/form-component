<div class="form-group {{ (isset($errors) and $errors->has($element->getName())) ? 'has-error' : '' }}">

    <label for="{{ $element->getName() }}">{{ $element->getLabel() }}</label>

    <input
            type="email"
            name="{{ $element->getName() }}"
            class="form-control"
            id="{{ $element->getName() }}"
            placeholder="{{ $element->getPlaceholder() }}"
            {{ ! empty($element->getValue()) ? 'value=' . $element->getValue() . '' : '' }}
    />

    @if($errors->has($element->getName()))
        <span class="help-block">{{ $errors->first($element->getName()) }}</span>
    @endif
</div>
