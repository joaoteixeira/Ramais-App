@extends('app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="jumbotron">
					<h1>Consulta de ramais</h1>
					<p>Aplicativo desenvolvido para facilitar a consulta de ramais do CEULJI/ULBRA.</p>
					<p>
						<a class="btn btn-success" href="{{ url('/auth/login') }}" role="button">Acessar</a>
						<a class="btn btn-primary" href="#" role="button">Sobre</a>
					</p>
				</div>
			</div>

			{{--<div class="col-md-10 col-md-offset-1">--}}
			{{--<div class="panel panel-default">--}}
			{{--<div class="panel-heading">Home</div>--}}

			{{--<div class="panel-body">--}}
			{{--You are logged in!--}}
			{{--</div>--}}
			{{--</div>--}}
			{{--</div>--}}
		</div>

		{{--@include('auth.login_form')--}}
	</div>
@endsection
