@extends('layout')
@section('title','Contact')
@section('content')
	<h1> @lang('Contact')</h1>
	<form method="POST" action="{{ route('contact.store')}}">
		@csrf
		<input type="text" name="name" placeholder=" @lang('Name')..." value="{{ old('name') }}"><br>
		{!! $errors->first('name','<small>:message</small><br>') !!}

		<input type="text" name="email" placeholder=" @lang('Email')..." value="{{ old('email') }}"><br>
		{!! $errors->first('email','<small>:message</small><br>') !!}

		<input type="text" name="subject" placeholder=" @lang('Subject') ..." value="{{ old('subject') }}"><br>
		{!! $errors->first('subject','<small>:message</small><br>') !!}

		<textarea name="content" placeholder=" @lang('Message')...">{{ old('content') }}</textarea><br>
		{!! $errors->first('content','<small>:message</small><br>') !!}

		<button type="submit">@lang('Submit')</button>
	</form>
@endsection