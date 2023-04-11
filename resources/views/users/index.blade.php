@extends("layouts.app")
@section("title", "Tous les articles")
@section("content")

	<h1>Les utilisateurs</h1>

	<table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Image</th>
            <th>Password</th>
            <th>Created_at</th>
            <th>Updated_at</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><img src="{{ asset('storage/'.$user->image)}}" alt="phpto_candidat" style="width: 150px height:150px"></td>

            <td>{{ $user->password }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->updated_at }}</td>
          </tr>
          @endforeach
        </tbody>
    </table>
@endsection
