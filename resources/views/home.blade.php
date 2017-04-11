@extends('app')

@section('content')
<div id="appPhone" class="container">
	<div class="row">

		<div class="col-md-12">
			<div class="page-header" style="margin-top: 20px">
				<h1><small>Lista de ramais</small></h1>
			</div>

			@include('phone.create')
			@include('app-search')

			<p v-if="!phones.length">Carregando lista....</p>

			<table class="table table-striped" v-show="phones.length" style="display: none">
				<tr>
					<th width="1%" class="text-center">#</th>
					<th>Descrição</th>
					<th width="20%">Ramal</th>
				</tr>
				<tr v-repeat="phone:phones | filterBy searchTerm">
					<td class="text-center">@{{ $index+1 }}</td>
					<td>@{{ phone.description }}</td>
					<td class="text-nowrap">@{{ phone.phone }}</td>
				</tr>
			</table>
		</div>

	</div>
</div>
@endsection
