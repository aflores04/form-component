<!-- form start -->
<form role="form" action="{{ $form->getAction() }}" method="POST">

    {{ csrf_field() }}

    <div class="box-body">

        @foreach($form->getElements()->all() as $element)

            @component($element->getComponent(), ['element' => $element])

            @endcomponent

        @endforeach

        {{ $slot }}
    </div>

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>