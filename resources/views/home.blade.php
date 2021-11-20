@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table border="2">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Password</th>
                            <th>Ctime</th>
                            <th>Fungsi</th>
                        </tr>
                        @forelse($user as $key=>$value)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->password}}</td>
                            <td>{{$value->created_at}}</td>
                            <td>
                                <span style="display: inline;">
                                    @if($value->id != Auth::id())
                                    <form action="/user/{{$value->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete">
                                    </form>
                                    <a href="/user/{{$value->id}}/edit"><input type="button" value="Edit"></a>
                                    @else
                                    -
                                    @endif
                                </span>
                            </td>
                        </tr>
                        @empty
                            <tr aria-colspan="3">
                                <td>No data</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
