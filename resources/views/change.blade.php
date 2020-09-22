@extends('welcome')

@section('content')
    <change-page />
@endsection


@push('vue-data')
    <script>
        // Объявляем новое свойство.
        Object.defineProperty(vueData, 'news', {
            writable: false,
            configurable: false,
            value: @json($news)
        })
        Object.defineProperty(vueData, 'categories', {
            writable: false,
            configurable: false,
            value: @json($categories)
        })
    </script>
@endpush
