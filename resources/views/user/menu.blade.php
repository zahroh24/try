<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Special Menu</h2>
						
					</div>
				</div>
			</div>
			
				
			<div class="row special-list">
				@foreach($menu as $menus)
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="menuimage/{{$menus->Image}}" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>{{$menus->Name}}</h4>
							<p>{{$menus->Description}}</p>
							<h5>{{$menus->Price}}</h5>
						</div>
					</div>
				</div>

				@endforeach
				
				
			</div>
		</div>
	</div>