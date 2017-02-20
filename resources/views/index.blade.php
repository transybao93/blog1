@extends('template')
@section('title', 'Home')
@section('indexMenu')
	<ul>
			<li class="active"><a href="javascript:void(0)">Home</a></li>
			<li><a href="tag">Tags</a></li>
			<li><a href="/">Categories</a></li>
			<li><a href="about">About</a></li>
			<div class="clearfix"> </div>
	</ul>
@endsection
@section('indexTemplate')
	{{-- Single post --}}
	@foreach($post as $p)
		
				
		<div class="travelling">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<a href="post/{{$p->id}}"><img src="../images/{{$p->pMainImageLink}}" class="img-responsive" alt="" /></a>
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 travelling1">
					<h1><a href="post/{{$p->id}}">{{$p->pTitle}}</a></h1>
					<h5>by <a href="#">{{$p->pAuthor}} ,</a> {{$p->created_at}} ,<a href="#">Traveling</a></h5>
					
				</div>
				
				{{-- <div class="col-md-1 travelling2">
					<h3>2</h3>
					<a href="#">comments</a>
				</div> --}}
					<div class="clearfix"> </div>
		</div>

		<div class="loadmore">
				<a class="more" href="post/{{$p->id}}">Read More</a>
				{{-- <a class="more" href="pDetail/{{$p->id}}">Read More</a> --}}
		</div>
	@endforeach
	{{-- Single post --}}

	<div class="loadmore1">
			<a class="load" href="#">load More</a>	
	</div>
@endsection





{{-- quotes --}}
	{{-- <div class="lequotes">
		
			<div class="col-md-12">
				<a class="more" href="single.html">Read More</a>
			</div>
			<div class="col-md-12 lequotes3 ">
				<div class="lequotes1">
					<img src="images/01.png" class="img-responsive" alt="" />
				</div>
				<div class="lequotes2">
					<h3>Le Quotes</h3>
				</div>
					<div class="clearfix"> </div>
			</div>
				<div class="billgates">
				<div class="col-md-10 billgates1">
					<h2>Quotes from Bill Gates</h2>
					<h5>by <a href="#">Samidi ,</a> 27 July 2013 ,<a href="#">Quotes</a></h5>
				</div>
				<div class="col-md-1 billgates2">
					<h3>6</h3>
					<p><a href="#">comments</a></p>
				</div>
					<div class="clearfix"> </div>
					<h4>“Lorem Ipsum dolor sit amet”</h4>
					<h6>Bill Gates</h6>
				</div>
	</div>	 --}}
	{{-- Quotes --}}