@extends('includes.master_en')

@section('content')

	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section start -->
	<header class="header-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
					<div class="site-logo">
						<h2>CV</h2>
						<p>Curriculum Vitae</p>
					</div>
				</div>
				<div class="col-md-1">
					<a href="{{ route('home') }}"><img src="img/srb.png"></a>
				</div>
				<div class="col-md-1">
					<a href="{{ route('home.en') }}"><img src="img/gbr.png"></a>
			    </div>
				<div class="col-md-8 text-md-right header-buttons">
					@foreach($osnovni_podaci as $osnovni)
					<a href="/documents/{{ $osnovni->document_en }}" class="site-btn">Download CV</a>
					@endforeach
					<a href="#kontakt" class="site-btn">Contact</a>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->

	<!-- Hero section start -->
	<section class="hero-section spad">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">
						<div class="col-lg-6">
							@include('flash::message')
							    @if ($errors->any())
							     <div class="alert alert-danger">
							       <ul>
							         @foreach ($errors->all() as $error)
							          <li>{{ $error }}</li>
							         @endforeach
							       </ul>
							     </div>
							   @endif
							<div class="hero-text">
								<h2>Zoran Glumac</h2>
								<p>
								@foreach($uvodni_tekst as $uvodni)
								{!! $uvodni->description_en !!}
								@endforeach
								</p>
							</div>
							<div class="hero-info">
								<h2>Info</h2>
								@foreach($osnovni_podaci as $osnovni)
								<ul>
										<li><span>Date of birth:</span>{!! $osnovni->birth !!}</li>
										<li><span>Address:</span>{!! $osnovni->address !!}</li>
										<li><span>E-mail:</span>{!! $osnovni->email !!}</li>
										<li><span>Phone: </span>{!! $osnovni->phone !!}</li>
								</ul>
								@endforeach
							</div>
						</div>
						<div class="col-lg-6">
							<figure class="hero-image">
								@foreach($uvodni_tekst as $uvodni)
								<img src="{{ asset('images/'.$uvodni->image) }}" alt="Zoran Glumac">
								@endforeach
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Social links section start -->
	<div class="social-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="social-link-warp">
						<div class="social-links">
						<!--	<a href=""><i class="fa fa-pinterest"></i></a> -->
							<a href="https://www.linkedin.com/in/zoran-glumac-399a09160/"><i class="fa fa-linkedin"></i></a>
							<a href="https://www.instagram.com/glumac.zoran/?hl=sr"><i class="fa fa-instagram"></i></a>
							<a href="https://www.facebook.com/glumac.zoran"><i class="fa fa-facebook"></i></a>
							<!--<a href=""><i class="fa fa-twitter"></i></a> -->
						</div>
						<h2 class="hidden-md hidden-sm">Social networks</h2>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<!-- Social links section end -->

	<!-- Resume section start -->
	<section class="resume-section spad">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-7 offset-xl-2">
					<div class="section-title">
						<h2>Work expirience as web developer</h2>
					</div>
					<ul class="resume-list">
						@foreach($radno_iskustvo as $radno)
						  {!! $radno->short_description_en !!}
						@endforeach  
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Resume section end -->
	<!-- Resume section start -->
	<section class="resume-section spad">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-7 offset-xl-2">
					<div class="section-title">
						<h2>Work expirience as an economist</h2>
					</div>
					<ul class="resume-list">
						@foreach($radno_iskustvo_ek as $radno_ek)
						  {!! $radno_ek->short_description_en !!}
						@endforeach  
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Resume section end -->

	<!-- Resume section start -->
	<section class="resume-section with-bg spad">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-7 offset-xl-2">
					<div class="section-title">
						<h2>Education</h2>
					</div>
					<ul class="resume-list">
						@foreach($obrazovanje as $obr)
						  {!! $obr->short_description_en !!}
						@endforeach 
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Resume section end -->

	
	<!-- Review section start -->
	<section class="review-section spad pb-0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-7 offset-xl-2">
					<div class="section-title">
						<h2>Other info</h2>
					</div>
					<div class="review-slider owl-carousel">
						
						@foreach($osobine as $os)
						
							{!! $os->short_description_en !!}
							
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Review section end -->


	<!-- Portfolio section start -->
	<section class="portfolio-section spad pb-0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-4 col-md-8 offset-xl-2 ">
					<div class="section-title">
						<h2>Portfolio</h2><sub>(some latest of 30 total)</sub>
					</div>
				</div>
				<div class="col-md-4 text-md-right">
					<!--<a href="#" class="site-btn mb-5">See All Portfolio</a> -->
				</div>
			</div>
			<div class="portfolio-warp">
				<div class="row">
					@foreach($projects as $project)
					<div class="col-xl-3 col-lg-6 col-md-6">
						<div class="portfolio-item">
							<a href="{!! $project->url !!}" class="set-bg port-pic" data-setbg="{{ asset('images/'.$project->image) }}"></a>
							<h2>{!! $project->title !!}</h2>
							<p>{!! $project->description_en !!}</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- Portfolio section end -->

	<!-- Extra section start 
	<section class="extra-section spad pb-0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-8 offset-xl-2">
					<div class="section-title">
						<h2>Extra Skills</h2>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6 pt-5">
							<div class="fact-box trans">
								<div class="fact-content">
									<div class="circle-progress">
										<div id="progress1" class="prog-circle"></div>
										<div class="progress-info">
											<h2>75%</h2>
										</div>
										<div class="prog-title">
											<h3>Inspiration</h3>
											<p>Etiam nec odio vestibulum est.</p>
										</div>			
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 pt-5">
							<div class="fact-box trans">
								<div class="fact-content">
									<div class="circle-progress">
										<div id="progress2" class="prog-circle"></div>
										<div class="progress-info">
											<h2>83%</h2>
										</div>
										<div class="prog-title">
											<h3>Inspiration</h3>
											<p>Etiam nec odio vestibulum est.</p>
										</div>			
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="fact-box">
								<div class="fact-content">
									<img src="img/icon/1-w.png" alt="">
									<h2>14</h2>
									<p>Years of Experience</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="fact-box">
								<div class="fact-content">
									<img src="img/icon/2-w.png" alt="">
									<h2>9</h2>
									<p>Awards Won</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Extra section end -->

	<!-- Contact section start -->
	<section class="contact-section spad" id="kontakt">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-8 offset-xl-2">
					<div class="section-title">
						<h2>Contact</h2>
					</div>
					{!! Form::open(['route' => 'contact.store','class'=>'contact-form']) !!}
						<div class="row">
							<div class="col-md-6">
								{!! Form::text('name',null,['placeholder' => 'Name']) !!}
							</div>
							<div class="col-md-6">
								{!! Form::text('email',null,['placeholder' => 'Email']) !!}
							</div>
							<div class="col-md-12">
								{!! Form::text('subject',null,['placeholder' => 'Subject']) !!}
								{!! Form::textarea('message',null,['placeholder' => 'Message']) !!}
							</div>
						</div>
						<div class="g-recaptcha" data-sitekey="6Ld90XYUAAAAAGGe3Oa9jsf8DVL8Y41QLkgOY3f2"></div>
						<div class="text-md-right">
							{!! Form::submit('Send', ['class' => 'site-btn']) !!}
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end -->
@endsection
