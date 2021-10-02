@extends('welcome')
@section('content')
 @if(isset($user))
        <form action="{{route('users.update', [$user])}}" method="post">
            @csrf
            @method('put')
            <label for="username">@lang('user.form.edit_user.description')</label>
            <input type="text" name="username">
            <button>@lang('user.form.edit_user.send')</button>
        </form>
    @else
        <form action="{{route('users.store')}}" method="post">
            @csrf
            <label for="username">@lang('user.form.new_user.description')</label>
            <input type="text" name="username">
            <button>@lang('user.form.new_user.send')</button>
        </form>
    @endif
@endsection
