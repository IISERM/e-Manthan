@layout('template.default')
@section('body')
	<div id="portfolio">
		<ul id="filterable">
			<li class="first">
				<h5>Sort by:</h5>
			</li>
			<li class="current"><a class="all" href="#all">All</a></li>
			<li><a class="formals" href="#formals">Formal</a></li>
			<li><a class="literature" href="#literature">Literature</a></li>
			<li><a class="hindi" href="#hindi">Hindi</a></li>
			<li><a class="clubs" href="#clubs">Clubs</a></li>
			<li><a class="apple" href="#apple">Apples</a></li>
			<li><a class="poetry" href="#poetry">Poetry</a></li>
		</ul>
		<!--END filtering-nav-->
		<div class="portfolio-container" id="columns">
			<ul>
				<li class="one-fourth category1 category2">
					<p>
						<a href="toc/2012/1.jpg" class="portfolio-item-preview" data-rel="prettyPhoto" title="Article Name">
							<img src="toc/2012/1.jpg" alt="Article Name" width="210" height="145" class="portfolio-img pretty-box"/>
						</a>
					</p>
					<h4>
						<a href="article.php?yr=2012&sno=1">Article Name</a>
					</h4>
					<p>summary</p>
				</li>
				<li class="one-fourth formals Formals">
					<p>
						<a href="toc/2012/2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto" title="Article 2 Name">
							<img src="toc/2012/2.jpg" alt="Article 2 Name" width="210" height="145" class="portfolio-img pretty-box"/>
						</a>
					</p>
					<h4>
						<a href="article.php?yr=2012&sno=2">Article 2 Name</a>
					</h4>
					<p>summary</p>
				</li>
				<li class="one-fourth category1 category2">
					<p>
						<a href="toc/2012/3.jpg" class="portfolio-item-preview" data-rel="prettyPhoto" title="Article Name">
							<img src="toc/2012/3.jpg" alt="Article Name" width="210" height="145" class="portfolio-img pretty-box"/>
						</a>
					</p>
					<h4>
						<a href="article.php?yr=2012&sno=3">Article Name</a>
					</h4>
					<p>summary</p>
				</li>
			</ul>
			<!--END ul-->
		</div>
		<!--END portfolio-wrap-->

	</div>
@endsection