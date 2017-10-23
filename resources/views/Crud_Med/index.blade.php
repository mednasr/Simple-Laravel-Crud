@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Simple Crud</h2>
            </div>


            <a class="btn-floating btn-large waves-effect waves-light blue"href="{{ route('Crud_Med.create') }}"><i class="material-icons">+</i></a>

        </div>
    </div>

    @if ($message = Session::get('success'))


        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="highlight">
        <tr>
            <th>No</th>
            <th>Brand</th>
            <th>Description</th>
            <th>Color</th>
            <th>User_id</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($phones as $key => $phone)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $phone->brand }}</td>
                <td>{{ $phone->description }}</td>
                <td>{{ $phone->color }}</td>
                <td>{{ $phone->user_id }}</td>

                <td>



                    <a class="btn-floating btn-large waves-effect waves-light green" href="{{ route('Crud_Med.show',$phone->id) }}">Show</a>
                    <a class="btn-floating btn-large waves-effect waves-light grey" href="{{ route('Crud_Med.edit',$phone->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['Crud_Med.destroy', $phone->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('X', ['class' => 'btn-floating btn-large waves-effect waves-light red']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

    {!! $phones->render() !!}

@endsection