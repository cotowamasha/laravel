@extends('layouts.welcome')

@section('content')
<category-page />
@endsection


@push('vue-data')
    <script>
        // Объявляем новое свойство.
        Object.defineProperty(vueData, 'newsByCategory', {
            writable: false,
            configurable: false,
            value: @json($newsByCategory)
        })
        Object.defineProperty(vueData, 'category', {
            writable: false,
            configurable: false,
            value: @json($category)
        })
    </script>
@endpush
