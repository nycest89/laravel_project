@extends('layouts.app')
@section('title')
    Testimonial Listing
@endsection
@section('content')
<div class="content">
    <div class="panel panel-inverse">

        <div class="panel-heading top-head">
            <h4 class="panel-title">Superhero Testimonial Listing</h4>
        </div>
        <div class="col-md-12 m-t-10 m-b-10"><img style="width:100%" src="{{asset('images/superhero_banner.jpg')}}"></div>
        <div class="col-md-6 m-t-10 m-b-10"><a href="{{ route('testimony.create') }}" class="btn btn-group btn-inverse pull-left"><i class="fa fa fa-plus-circle fa-lg"></i> Create New Testimonial </a></div>
        <div class="panel-body bg-panel">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Product/ Category</th>
                            <th>Date Received</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($testimonials as $testimonial)
                        <tr class="data-row">
                            <td class="v2-blue-font-text">
                                <a class="blue-font" href="{{ route('testimony.show', $testimonial->id) }}">{{ $testimonial->name }}</a>
                            </td>
                            <td>{{ $testimonial->location }}</td>
                            <td>{{ $testimonial->product_cat }}</td>
                            <td>{{ $testimonial->received_date }}</td>
                            <td><a href="{{ route('testimony.edit', $testimonial->id) }}"><i class="fa fa fa-pencil-square-o fa-lg text-inverse"></a></td>
                            <td><a href="#remove_record_{{$testimonial->id}}" data-toggle="modal"><i class="fa fa fa-times fa-lg text-danger"></a></td>
                                
                        </tr>
                        
                        <div class="modal fade" id="remove_record_{{$testimonial->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route('testimony.remove', $testimonial->id) }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            Are you sure to remove this record?
                                        </div>
                                        <div class="modal-footer">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            <button type="submit" class="btn-min-width btn btn-sm btn-success pull-left">Confirm</button>
                                            <a href="javascript;" class="btn-min-width btn btn-sm btn-white pull-left" data-dismiss="modal">Cancel</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        @empty
                            <tr>
                                <td>No records found</td>
                            </tr>
                            
                        @endforelse
                    </tbody>
                </table>
                {{$testimonials->links()}}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="remove_record">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('testimony.remove', $testimonial->id) }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    Are you sure to remove this record? {{$testimonial->id}}
                </div>
                <div class="modal-footer">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <button type="submit" class="btn-min-width btn btn-sm btn-success pull-left">Confirm</button>
                    <a href="javascript;" class="btn-min-width btn btn-sm btn-white pull-left" data-dismiss="modal">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection