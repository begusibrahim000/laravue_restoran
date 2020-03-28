@extends('master.master')

@section('title', 'Login')

@section('content')
	<login-component></login-component>
	@if(session()->get('gagalLogin'))
		<input type="hidden" class="gagalLoginSweetAlert" value="{{session()->get('gagalLogin')}}">
	@elseif(session()->get('belumLogin'))
		<input type="hidden" class="belumLoginSweetAlert" value="{{session()->get('belumLogin')}}">
	@endif
@stop

@section('myScript')
	<script>
		let gagalLogin = document.querySelector('.gagalLoginSweetAlert');
		let belumLogin = document.querySelector('.belumLoginSweetAlert');
		if(gagalLogin) {
			Swal.fire({
				title: gagalLogin.value,
				icon: 'error'
			});
		}else if(belumLogin) {
			Swal.fire({
				title: belumLogin.value,
				icon: 'warning'
			});
		}
	</script>
@stop