@extends('layout')

@section('content')
<div class="row">
	<form method="GET" action="{{ route('search') }}" class="col s12">
		<div class="row">
			<div class="input-field col s10">
				<input placeholder="Search..." name="s" id="search" type="text" class="validate">
				<!--label for="search">First Name</label-->
			</div>
			<div class="input-field col s2">
			  <button class="btn waves-effect waves-light col s12" type="submit">Search
				<i class="material-icons left">search</i>
			  </button>
			</div>
		</div>
	</form>
</div>

<div class="row">
	<div class="col s12">
		<table class="striped highlight">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>E-mail</th>
					<th>Phone</th>
				</tr>
			</thead>
			<tbody>
				@forelse($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->phone }}</td>
					</tr>
				@empty
					<p>No users...</p>
				@endforelse
			</tbody>
		</table>
		
		{{ $users->appends(['s' => request()->s])->links('pagination.default') }}

	</div>
</div>
@endsection