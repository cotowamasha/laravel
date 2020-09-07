@extends('welcome')

@section('content')
    <div class="create">
        <div class="container">
            <div class="create__box">
                <form
                    class="form-add"
                    method="post"
                    action="/create"
                >
                    @csrf
                    <p class="form-add__text">
                        Title
                    </p>
                    <input
                        type="text"
                        name="title"
                        class="form-add__input"
                        required
                    >
                    <p class="form-add__text">
                        Category
                    </p>
                    <select
                        name="category_id"
                        class="form-add__select"
                    >
                        @foreach($categories as $item)
                            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                        @endforeach
                    </select>
                    <p class="form-add__text">
                        Content
                    </p>
                    <textarea
                        rows="7"
                        name="content"
                        class="form-add__input"
                        required
                    ></textarea>
                    <button class="form-add__btn">
                        Create
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
