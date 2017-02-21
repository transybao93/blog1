@extends('template')
@section('title', 'About')
@section('aboutMenu')
	<ul>
			<li><a href="post">Home</a></li>
			<li><a href="tag">Tags</a></li>
			<li ><a href="/">Categories</a></li>
			<li class="active"><a href="javascript:void(0)">About</a></li>
			<div class="clearfix"> </div>
	</ul>
@endsection
@section('aboutTemplate')
	<!-- about -->
	<div class="about">
		<div class="col-md-5">
		<img src="images/book.jpg" class="img-responsive" alt="" />
		</div>
		<div class="col-md-7">
				<h2>Author introduction</h2>
				<hr>
				<p>Full name: <b style="color:black">Tran Sy Bao</b></p>
				<p>GitHub address: <b style="color:black">www.github.com/transybao93</b></p>
				<p>Graduated at: <b style="color:black">FPT University</b></p>
				<p>Specialist: <b style="color:black">Computer Science</b></p>
				<p>Skills:</p>
				<ul>
					<ol>Front-end(basic): HTML/CSS/Javascript/Jquery</ol>
					<ol>Back-end(advanced): Java Struts, Java Struts2, PHP Laravel Framework, PHP Phalcon</ol>
					<ol>Database: SQLite, SQL Server, MongDB, MySQL</ol>
					<ol>Others: GitHub, Heroku, Heroku app deloyment, Tortoise</ol>
				</ul>
				<p>Languages:</p>
				<ul>
					<ol>English (advanced)</ol>
					<ol>Japanese (N5)</ol>
				</ul>
				<p>Projects:</p>
				<ul>
					<ol>Personal blog (Laravel 5.2)</ol>
					<ol>Forum project (Java Struts2)</ol>
					<ol>Forum project (Nodejs)</ol>
				</ul>
			</div>
				<div class="clearfix"> </div>
			
			<div class="clearfix"> </div>
				{{-- <a class="more" href="#">Read More</a> --}}
			</div>
	<!-- about -->
@endsection