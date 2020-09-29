@extends('layouts.welcome')

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
                   @if (!$news->id)action="/change/store"@else action="/change/update/{{ $news->id }}"@endif
                >
                    @csrf
                    <p class="form-add__text">
                        Title
                    </p>
                    @if ($errors->has('title'))
                        <div class="error-text">
                            @foreach($errors->get('title') as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif
                    <input
                        type="text"
                        name="title"
                        class="form-add__input"
                        value="{{ $news->title }}"
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
                    @if ($errors->has('content'))
                        <div class="error-text">
                            @foreach($errors->get('content') as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif
                    <textarea
                        id="my-editor"
                        name="content"
                        rows="5"
                        class="form-add__input"
                    >
                        {!! $news->content !!}
                    </textarea>
{{--                    <input--}}
{{--                        rows="7"--}}
{{--                        name="content"--}}
{{--                        value="{{ $news->content }}"--}}
{{--                        class="form-add__input"--}}
{{--                    >--}}
                    @if ($errors->has('img'))
                        <div class="error-text">
                            @foreach($errors->get('img') as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif
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
