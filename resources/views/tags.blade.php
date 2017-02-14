@extends('template')
@section('title', 'Tags')
@section('tagMenu')
	<ul>
			<li><a href="/">Home</a></li>
			<li class="active"><a href="tags">Tags</a></li>
			<li><a href="/">Categories</a></li>
			<li><a href="about">About</a></li>
			<div class="clearfix"> </div>
	</ul>
@endsection
@section('tagTemplate')
	<p>This is Tags page</p>
@endsection