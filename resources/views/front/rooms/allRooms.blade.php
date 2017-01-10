@extends('layouts.app')
@section('title','Rooms')
@section('content')
    <div class="col-md-12">
        @if(Session::has('msg'))
            <div class="alert alert-success">
                {{Session::get('msg')}}
            </div>
        @endif
        <h2>All Rooms @if($rooms->total() > 0){{ '| ' .$rooms->total().' Room'}} @endif</h2>
        @if($rooms->total() > 0)
            <table class="table table-responsive">
                <thead>
                <tr>
                    <td>#ID</td>
                    <td>Name Room</td>
                </tr>
                </thead>
                <tbody>
                <?php $class = ['active','success','info','warning','danger']; $i=0; ?>
                    @foreach($rooms as $room)
                        <tr class="{{ $class[$i]  }}">
                            <td> {{ $room->id  }} </td>
                            <td> {{ $room->name }} </td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-info"><i class="icon-check-empty"></i> No Data To Show . </div>
        @endif
    </div>
@endsection
