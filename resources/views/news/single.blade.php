@extends('layouts.welcome')

@section('content')
<single-page />
@endsection


@push('vue-data')
    <script>
        // Объявляем новое свойство.
        Object.defineProperty(vueData, 'newsSingle', {
            writable: false,
            configurable: false,
            value: @json($newsSingle)
        })
    </script>
@endpush
