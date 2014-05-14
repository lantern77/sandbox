@extends('template')

@section('content')

<!--Styles.js did not register and in the comments of the file was not recommended to be edited--><!--onclick allows me to send info to a function-->
<div class="jumbotron"> <!--External file: /js/animation.js.Note decided to go with an onclick method as I can reuse a function over and over rather than simply link by name-->
<a><h3 id="expandTitle2013">Current Executives 2014-2015</h3></a><BR>
	<div id="expand2013">
		<div class="row bottom-space">
			<div class="col-md-4"><img src="/img/saif.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2> President</h2>
				<h3>Saif Myageri</h3>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="col-md-4"><img src="/img/rakesh.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2>VP Finance</h2>
				<h3>Rakesh Mistry</h3>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="col-md-4"><img src="/img/peter.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2> VP External</h2>
				<h3>Peter Hoang</h3>
			</div>
		</div>
		<div class="row bottom-space ">
			<div class="col-md-4"><img src="/img/kulwinder.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2>Sr. Webmaster</h2>
				<h3>Kulwinder Singh</h3>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="col-md-4"><img src="/img/mat.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2>Co-Webmaster</h2>
				<h3>Matthew Artemeko</h3>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="col-md-4"><img src="/img/web_ninjas.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2> Web Ninjas</h2>
				Mathew Artemenko, Sahajmeet Bhutta, Peter Hoang, Arka Ganguli, Justin Chang, Darsikan An, James Priebe, SeungWoo Cho 
			</div>
		</div>
		<h2 class="centerText">If you would like to get involved or apply for an executive position please feel free to e-mail: sec@mcmaster.ca </h2>
		<!--Possibly add a contact e-mail thing-->
		<div>
			<a><h4 id="close2013">Close Executive Page</h4></a>
		</div>
	</div>
<!---Exec team of 2013-->
<a><h3 id="expandTitle2014" onclick=toggleAnimation("expand2014")>Past Executives 2013-2014<h3></a><BR>
	<div id="expand2014"> <!--Past section need to bee hidden-->
		<div class="row bottom-space">
			<div class="col-md-4"><img src="/img/mike.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2> President</h2>
				<h3>Mike Moniz</h3>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="col-md-4"><img src="/img/rakesh.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2>VP Finance</h2>
				<h3>Rakesh Mistry</h3>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="col-md-4"><img src="/img/ripu.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2> VP External</h2>
				<h3>Ripudaman Flora</h3>
			</div>
		</div>
		<div class="row bottom-space ">
			<div class="col-md-4"><img src="/img/kulwinder.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2>Sr. Webmaster</h2>
				<h3>Kulwinder Singh</h3>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="col-md-4"><img src="/img/kanishka.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2> Webmaster</h2>
				<h3>Kanishka Goel</h3>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="col-md-4"><img src="/img/web_ninjas.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2> Web Ninjas</h2>
				Mathew Artemenko, Sahajmeet Bhutta, Peter Hoang, Arka Ganguli, Justin Chang, Darsikan An, James Priebe, SeungWoo Cho 
			</div>
		</div>
		<div class="row bottom-space">
			<div class="col-md-4"><img src="/img/kevin.jpg" width = 250 height = 250"></div>
			<div class="col-md-8">
				<h2> MES SE Rep</h2>
				<h3>Kevin Barret</h3>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="col-md-4"><img src="/img/justin_chu.jpg" width = 250 height = 250"></div>
			<div class="col-md-8">
				<h2> Comp Sci Rep</h2>
				<h3>Justin Chu</h3>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="col-md-4"><img src="/img/image_not_available.jpg" width = 250 height = 250"></div>
			<div class="col-md-8">
				<h2> VP Secretary</h2>
				<h3>Ian MacDonald</h3>
			</div>
		</div>
		<div>
			<a><h4 id="close2014">Close Executive Page</h4></a>
		</div>
	</div>

</div>
@stop
