@if ($errors->any())
    <div class="text-danger">{{ __('Whoops! Something went wrong.') }}</div>

    <ul class="mt-3 text-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif


@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @push('script')
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                const alerts = document.querySelectorAll('.alert');
                alerts.forEach(alert => {
                    setTimeout(() => {
                        alert.classList.remove('show');
                    }, 5000); // 5 seconds
                });
            });
        </script>
    @endpush
@endif
