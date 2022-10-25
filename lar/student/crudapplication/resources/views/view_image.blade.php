@extends('layout')
@section('content')

<div class="container">
    <h3>View all image</h3><hr>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Image id</th>
          <th scope="col">Image</th>
        </tr>
      </thead>
      <tbody>
        @foreach($Postimage as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>

          <td>{{$data->id}}</td>
          <td>

	     <img src="{{ url('public/image/'.$data->image) }}"style="height: 100px; width: 150px;">
	  </td>
        </tr>
        @endforeach
      </tbody>
      <form method="POST" action="{{ url('/view-image' . '/' . $data->id) }}" accept-charset="UTF-8" style="display:inline">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
    </form>
    </table>

  </div>
  @stop
