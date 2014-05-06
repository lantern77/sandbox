@extends('template')

@section('content')
<head>
	<style>
	div#expand2013{
	display:none;
	}
	div#expand2014{
	display:none;
	}
	</style>
	<script> 
	function show(elem) //current javascript simply expands a section will add animation later
	{
	if(document.getElementById(elem).style.display == 'block')
	document.getElementById(elem).style.display = 'none';
	else
	document.getElementById(elem).style.display = 'block';
	}
	</script>
</head>
<div class="jumbotron">
<h1><a href="javascipt:;" style="color:#000000" onclick=show('expand2014')>Current Executives 2014-2015</a></h1><BR>
	<div id="expand2014">
		<div class="row bottom-space">
			<div class="col-md-4"><img style="/* -webkit-user-select: none */" src="/img/saif.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2> President</h2>
				<h3>Saif Myageri</h3>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="col-md-4"><img style="/* -webkit-user-select: none */" src="/img/rakesh.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2>VP Finance</h2>
				<h3>Rakesh Mistry</h3>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="col-md-4"><img style="/* -webkit-user-select: none */" src="/img/peter.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2> VP External</h2>
				<h3>Peter Hoang</h3>
			</div>
		</div>
		<div class="row bottom-space ">
			<div class="col-md-4"><img style="/* -webkit-user-select: none */" src="/img/kulwinder.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2>Sr. Webmaster</h2>
				<h3>Kulwinder Singh</h3>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="col-md-4"><img style="/* -webkit-user-select: none */" src="/img/mat.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2>Co-Webmaster</h2>
				<h3>Matthew Artemeko</h3>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="col-md-4"><img style="/* -webkit-user-select: none */" src="/img/web_ninjas.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2> Web Ninjas</h2>
				Mathew Artemenko, Sahajmeet Bhutta, Peter Hoang, Arka Ganguli, Justin Chang, Darsikan An, James Priebe, SeungWoo Cho 
			</div>
		</div>
		<center><h2>If you would like to get involved or apply for an executive position please feel free to e-mail: sec@mcmaster.ca </h2></center>
		<!--Possibly add a contact e-mail thing-->
		<div><a href="javascript:;" onclick=show('expand2014')>Close Executives Page<a></div>
	</div>
<!---Exec team of 2013-->
<h1><a href="javascipt:;" style="color:#000000" onclick=show('expand2013')>Past Executives 2013-2014</a></h1><BR>
	<div id="expand2013"> <!--Past section need to bee hidden-->
		<div class="row bottom-space">
			<div class="col-md-4"><img style="/* -webkit-user-select: none */" src="/img/mike.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2> President</h2>
				<h3>Mike Moniz</h3>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="col-md-4"><img style="/* -webkit-user-select: none */" src="/img/rakesh.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2>VP Finance</h2>
				<h3>Rakesh Mistry</h3>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="col-md-4"><img style="/* -webkit-user-select: none */" src="/img/ripu.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2> VP External</h2>
				<h3>Ripudaman Flora</h3>
			</div>
		</div>
		<div class="row bottom-space ">
			<div class="col-md-4"><img style="/* -webkit-user-select: none */" src="/img/kulwinder.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2>Sr. Webmaster</h2>
				<h3>Kulwinder Singh</h3>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="col-md-4"><img style="/* -webkit-user-select: none */" src="/img/kanishka.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2> Webmaster</h2>
				<h3>Kanishka Goel</h3>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="col-md-4"><img style="/* -webkit-user-select: none */" src="/img/web_ninjas.jpg" width = 250 height = 250></div>
			<div class="col-md-8">
				<h2> Web Ninjas</h2>
				Mathew Artemenko, Sahajmeet Bhutta, Peter Hoang, Arka Ganguli, Justin Chang, Darsikan An, James Priebe, SeungWoo Cho 
			</div>
		</div>
		<div class="row bottom-space">
			<div class="col-md-4"><img style="/* -webkit-user-select: none */" src="/img/kevin.jpg" width = 250 height = 250"></div>
			<div class="col-md-8">
				<h2> MES SE Rep</h2>
				<h3>Kevin Barret</h3>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="col-md-4"><img style="/* -webkit-user-select: none */" src="/img/justin_chu.jpg" width = 250 height = 250"></div>
			<div class="col-md-8">
				<h2> Comp Sci Rep</h2>
				<h3>Justin Chu</h3>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="col-md-4"><img style="/* -webkit-user-select: none */" src="/img/image_not_available.jpg" width = 250 height = 250"></div>
			<div class="col-md-8">
				<h2> VP Secretary</h2>
				<h3>Ian MacDonald</h3>
			</div>
		</div>
		<div><a href="javascript:;" onclick=show('expand2013')>Close Executives Page<a></div>
	</div>

</div>
@stop
