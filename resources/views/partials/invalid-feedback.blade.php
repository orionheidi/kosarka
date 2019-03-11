
<div class="invalid-feedback">
        @if($errors->has($field))
        @foreach($errors->get($field) as $error)
            <li>{{ $error }}</li>
        @endforeach
        @endif
</div>