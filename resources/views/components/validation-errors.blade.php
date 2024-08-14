@if ($errors->any())
        <div class="text-danger">{{ __('Whoops! Something went wrong.') }}</div>

        <ul class="mt-3 text-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif
