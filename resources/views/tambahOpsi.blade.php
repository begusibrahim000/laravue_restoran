@extends('master.master')

@section('title', 'Tambah Opsi')

@section('content')
	<tambah-opsi-component></tambah-opsi-component>
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