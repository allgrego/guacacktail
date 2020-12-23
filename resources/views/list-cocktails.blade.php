@extends('layouts/list-layout')

@section('content')

						<!-- One -->
							<!-- <section id="one">
								<div class="inner">
									<header class="major">
										<h2>Sed amet aliquam</h2>
									</header>
									<p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis magna sed nunc rhoncus condimentum sem. In efficitur ligula tate urna. Maecenas massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Nullam et orci eu lorem consequat tincidunt vivamus et sagittis magna sed nunc rhoncus condimentum sem. In efficitur ligula tate urna.</p>
								</div>
							</section>
 -->
						<!-- Two -->
                        <section id="two" class="spotlights">
                                @foreach($cocktails as $cocktail)
                                <section>
									<a href="{{'/cocktail/'.$cocktail['idDrink']}}" class="image cust_fade-in" style="background: linear-gradient(45deg,#87c5a4,#8d82c4 ,#6fc3df);">
										<img src="{{$cocktail['strDrinkThumb']}}" alt="" data-position="center center" class="cust_colorized"/>
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<a href="{{'/cocktail/'.$cocktail['idDrink']}}"><h2>{{$cocktail['strDrink']}}</h2></a>
											</header>
                                            
											<ul class="actions">
												<li><a href="{{'/cocktail/'.$cocktail['idDrink']}}" class="button">More Information</a></li>
											</ul>
										</div>
									</div>
                                </section>
                            	@endforeach
								
								<!-- <section>
									<a href="generic.html" class="image">
										<img src="images/pic09.jpg" alt="" data-position="top center" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Rhoncus magna</h3>
											</header>
											<p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis magna sed nunc rhoncus condimentum sem. In efficitur ligula tate urna. Maecenas massa sed magna lacinia magna pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis tempus.</p>
											<ul class="actions">
												<li><a href="generic.html" class="button">Learn more</a></li>
											</ul>
										</div>
									</div>
								</section>
                                
                                <section>
									<a href="generic.html" class="image">
										<img src="images/pic10.jpg" alt="" data-position="25% 25%" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Sed nunc ligula</h3>
											</header>
											<p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis magna sed nunc rhoncus condimentum sem. In efficitur ligula tate urna. Maecenas massa sed magna lacinia magna pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis tempus.</p>
											<ul class="actions">
												<li><a href="generic.html" class="button">Learn more</a></li>
											</ul>
										</div>
									</div>
								</section>-->
							</section>
							
							

@endsection