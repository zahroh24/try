<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Special Menu</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*">All</button>
							<button data-filter=".drinks">Drinks</button>
							<button data-filter=".lunch">Lunch</button>
							<button data-filter=".dinner">Dinner</button>
						</div>
					</div>
				</div>
			</div>
				
			<div class="row special-list">
				@foreach($menu as $menus)
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="menuimage/{{$menus->Image}}" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>{{$menus->name}}</h4>
							<p>{{$menus->description}}</p>
							<h5>{{$menus->price}}</h5>
						</div>
					</div>
				</div>

				@endforeach
				
				
			</div>
		</div>
	</div>