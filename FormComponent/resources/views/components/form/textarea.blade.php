<div class="form-group">
    <label>{{ $element->getLabel() }}</label>
    <textarea class="form-control" name="{{ $element->getName() }}" rows="{{ $element->getRows() }}" placeholder="{{ $element->getPlaceholder() }}"></textarea>
</div>