@extends('layout')

@section('content')
	
	<section id="home" class="cd-hero js-cd-hero">
		<ul class="cd-hero__slider">
			<li class="cd-hero__slide cd-hero__slide--selected js-cd-slide">
				<div class="cd-hero__content cd-hero__content--half-width">
					<h2>WELCOME TO LORETO CONVENT MSONGARI</h2>
					<p>All for the greater glory of God</p>
					<a href="#0" class="hvr-bounce-to-right cd-hero__btn">Apply Now!</a>
					<a href="#0" class="hvr-bounce-to-right cd-hero__btn cd-hero__btn--secondary">Fee Structure</a>
				</div>
			</li>

			<li class="cd-hero__slide js-cd-slide">
				<div class="cd-hero__content cd-hero__content--half-width">
					<p>All for the greater glory of God</p>
				</div> <!-- .cd-hero__content --> 
			</li>

			<li class="cd-hero__slide js-cd-slide">

				<div class="cd-hero__content cd-hero__content--half-width">
					<p>All for the greater glory of God</p>
					
				</div> <!-- .cd-hero__content -->
				
			</li>

			<li class="cd-hero__slide js-cd-slide">


				<div class="cd-hero__content cd-hero__content--half-width">
					<p>All for the greater glory of God</p>
				</div> <!-- .cd-hero__content -->
				
			</li>

			<li class="cd-hero__slide js-cd-slide">
				<div class="cd-hero__content cd-hero__content--half-width">
					<p>All for the greater glory of God</p>
				</div> <!-- .cd-hero__content -->
			</li>
		</ul> <!-- .cd-hero__fsxslider -->

		<div class="cd-hero__nav js-cd-nav">
			<nav>
				<span class="cd-hero__marker cd-hero__marker--item-1 js-cd-marker"></span>
				
				<ul>
					<li class="cd-selected"><a href="#0">01</a></li>
					<li><a href="#0">02</a></li>
					<li><a href="#0">03</a></li>
					<li><a href="#0">04</a></li>
					<li><a href="#0">05</a></li>
				</ul>
			</nav> 
		</div> <!-- .cd-hero__nav -->
	</section> <!-- .cd-hero -->

	
	

	<div class="how-its-work clearfix">
        <div class="hc colon1">
            <h2>1</h2>
            <h3>Kindergaten School</h3>
            <p>A three year course which equips young childern with th very basic skills</p>
        </div><!-- end col -->

        <div class="hc colon2">
            <h2>2</h2>
            <h3>Primary School</h3>
            <p>Based on the new cirriculum for 8years with KCPE as the final examination</p>
        </div><!-- end col -->

        <div class="hc colon3">
            <h2>3</h2>
            <h3>Secondary School</h3>
            <p>Goes for 4 years preparing the student for higher education with KCSE as the final examination </p>
        </div><!-- end col -->  

        <div class="hc colon4">
            <h2>4</h2>
            <h3>IGCSE</h3>
            <p>Based on the Bitish education system preparing students for A-Level and AS-Level study</p>
        </div><!-- end col -->  
    </div><!-- end how-its-work -->

    <div class="core" id="values">
	
	@include('values')
	</div>   

    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    
@endsection