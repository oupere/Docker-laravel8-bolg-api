@extends("layouts.app")
@section("title", "Tous les articles")
@section("content")

	<h1>Tous les articles</h1>

	<table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Utilisateur</th>
            <th>Titre</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
          <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->user_id }}</td>
            <td>{{ $post->body }}</td>
          </tr>
          @endforeach
        </tbody>
    </table>
@endsection
