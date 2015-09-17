<div class="row vertical-center" id="navi-bar">
	<div class="col-lg-9" id="navi">
		<a href="{{ action('PagesController@index') }}"><button type="button" class="btn btn-default">Home </button></a>
		<a href=""> <button type="button" class="btn btn-default">Forum</button></a>
		<div class="btn-group">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Sakramen</button>
			<ul class="dropdown-menu" role="menu">
				@foreach ( sigkat\Model\sakramen::all() as $sakramen)
					<li role="presentation"><a role="menuitem" tabindex="-1" href="{!! $sakramen->id_sakramen !!}">{!! $sakramen->nm_sakramen !!}</a></li>
				@endforeach

			</ul>
		</div>
		<div class="btn-group">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Kategorial</button>
			<ul class="dropdown-menu" role="menu">
				@foreach( sigkat\Model\kategorial::all() as $kategorial)
					<li role="presentation"><a role="menuitem" tabindex="-1" href="{!! $kategorial->id_kategorial !!}">{!! $kategorial->nm_kategorial !!}</a></li>
				@endforeach
			</ul>
		</div>
		<div class="btn-group">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">St. Joseph</button>
			<ul class="dropdown-menu" role="menu">

				<li role="presentation" class="dropdown-header">Dropdown header 1</li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">First Link</a></li>
				<li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled Link</a></li>
				<li role="presentation" class="divider"></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated Link</a></li>
			</ul>
		</div>
	</div>
	<div class="col-xs-3">
		<div>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="cari">
			</div>

		</div>
	</div>
</div>