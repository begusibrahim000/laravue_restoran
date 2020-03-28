@extends('master.master')

@section('title', 'Home')

@section('content')
	<restoran-component></restoran-component>
	@if(session()->get('sudahLogin'))
		<input type="hidden" class="sudahLoginSweetAlert" value="{{session()->get('sudahLogin')}}">
	@endif
@stop

@section('myScript')
	<script>
		let sudahLogin = document.querySelector('.sudahLoginSweetAlert');
		if(sudahLogin) {
			Swal.fire({
				title: sudahLogin.value,
				text: 'logout terlebih dahulu untuk melakukan proses login kembali :)',
				icon: 'warning'
			});
		}
	</script>
@stop