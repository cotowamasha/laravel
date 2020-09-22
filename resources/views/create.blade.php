@extends('welcome')

@section('content')
    <div class="create">
        <div class="container">
            <div class="create__box">

                @if ($success)
                    <p class="create__ok">
                        {{ $success }}
                    </p>
                @endif

                <form
                    enctype="multipart/form-data"
                    class="form-add"
                    method="post"
                   @if (!$news)action="/create"@else action="/change/update/{{ $news->id }}"@endif
                >
                    @csrf
                    <p class="form-add__text">
                        Title
                    </p>
                    <input
                        type="text"
                        name="title"
                        class="form-add__input"
                        value="{{ $news->title }}"
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
                            <option
                                @if ($news->category_id === $item->id) selected @endif
                                value="{{ $item->id }}"
                            >
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                    <p class="form-add__text">
                        Content
                    </p>
                    <input
                        rows="7"
                        name="content"
                        value="{{ $news->content }}"
                        class="form-add__input"
                        required
                    >
                    <input
                        type="file"
                        name="img"
                    >
                    <button class="form-add__btn">
                        @if ($news->id) Update @else Create @endif
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
