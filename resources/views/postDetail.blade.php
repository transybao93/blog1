@extends('template')
@section('title', 'Details...')
@section('pDetailMenu')
	<ul>
			<li><a href="/post">Home</a></li>
			<li><a href="/tag">Tags</a></li>
			<li><a href="/">Categories</a></li>
			<li><a href="/about">About</a></li>
			<div class="clearfix"> </div>
	</ul>
@endsection
@section('pDetailTemplate')
				<ol class="breadcrumb">
				  <li><a href="/post">Home</a></li>
				  <li class="active">{{$p->pTitle}}</li>
				</ol>
				<center><img src="../images/{{$p->pMainImageLink}}" class="img-responsive" alt="" /></center>
				<div class="travelling">
					<div class="col-md-10 travelling1">
						<h1>
							{{$p->pTitle}}
						</h1>
						<h5>by <a href="#">{{$p->pAuthor}} ,</a> {{$p->created_at}} ,<a href="#">Traveling</a></h5>
					</div>
					<div class="col-md-1 travelling2">
						{{-- <h3>2</h3>
						<a href="#">comments</a> --}}
					</div>
						<div class="clearfix"> </div>
							<p>
								{{$p->pContent}}
							</p>
							
			</div>
			
@endsection



{{-- Comments --}}
{{-- <div class="comments">
		<h2>2 Comments</h2>
		<p>Reply Comment</p>
	<div class="col-md-6 contact">
		<form>
			<input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
			<input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email ';}">
			<textarea cols="10" rows="5"  value="comment" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'comment';}">Comment</textarea>
				<div class="button">
					<input type="submit" value="submit">
				</div>
		</form>
	</div>
<div class="clearfix"> </div>
</div> --}}


{{-- Comment response --}}
{{-- <div class="catagerious">
	<div class="col-md-4 catagerious1">
		<div class="catagerious-left">
			<img src="images/image3.jpg" class="img-responsive" alt="" />
		</div>
		<div class="catagerious-right">
			<h4><a href="#">Andi Mala</a></h4>
			<p>26 July</p>
		</div>
			<div class="clearfix"> </div>
	</div>
	<div class="col-md-7 catagerious2">
		<h4>Lorem Ipsum dolor Sit Amet!!! Wow</h4>
		<h6><a href="#">Reply</a></h6>
	</div>
	<div class="clearfix"> </div>
</div>
<div class="catagerious-part">
	<div class="col-md-4 catagerious-bottom">
		<div class="catagerious-left1">
			<img src="images/row2.jpg" class="img-responsive" alt="" />
		</div>
		<div class="catagerious-right1">
			<h4><a href="#">Parjo</a></h4>
			<p>26 July</p>
		</div>
			<div class="clearfix"> </div>
	</div>
	<div class="col-md-7 catagerious-bottom1">
		<h4>Lorem Ipsum dolor Sit Amet!!! Wow</h4>
		<h6><a href="#">Reply</a></h6>
	</div>
	<div class="clearfix"> </div>
</div> --}}