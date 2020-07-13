@extends('layouts.app')
@section('title')
    Edit Testimonial
@endsection
@section('content')
<div class="content">
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <div class="head-bc m-l-10">
                <a href="{{ route('testimony') }}" class="text-white"> Testimonial Listing </a> <span>/</span> 
                <a href="{{ route('testimony.show', $testimonial->id) }}" class="text-white"> {{$testimonial->name}} </a>
            </div>
        </div>

        <div class="panel-body">
            <div class="col-sm-12">

                <form action="{{ route('testimony.update', $testimonial->id) }}" class="form-horizontal" method="POST" enctype="multipart/form-data" id="testimony_edit">
                    <div>
                        <div>
                            <div class="form-group">
                                <label class="col-md-2 semi-bold">Name*</label>
                                <div class="col-md-6">
                                    <input type="text" name="name" id="name" class="form-control" value="{{ $testimonial->name }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 semi-bold">Code</label>
                                <div class="col-md-6">
                                    <input type="text" name="code" id="code" class="form-control" value="{{ $testimonial->code }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 semi-bold">Phone No</label>
                                <div class="col-md-6">
                                    <input type="text" name="contact_no" id="contact_no" class="form-control" value="{{ $testimonial->contact_no }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 semi-bold">Location</label>
                                <div class="col-md-6">
                                    <input type="text" name="location" id="location" class="form-control" value="{{ $testimonial->location }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 semi-bold">IC No</label>
                                <div class="col-md-6">
                                    <input type="text" name="id_no" id="id_no" class="form-control" value="{{ $testimonial->id_no }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 semi-bold">Products Category</label>
                                <div class="col-md-6">
                                    <input type="text" name="product_cat" id="product_cat" class="form-control" value="{{ $testimonial->product_cat }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 semi-bold">Date Received</label>
                                <div class="col-md-6">
                                    <input type="text" name="received_date" id="received_date" class="form-control" value="{{ $testimonial->received_date }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 semi-bold">Link</label>
                                <div class="col-md-6">
                                    <input type="text" name="link" id="link" class="form-control" value="{{ $testimonial->link }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 semi-bold">Date Published</label>
                                <div class="col-md-6">
                                    <input type="text" name="published_date" id="published_date" class="form-control" value="{{ $testimonial->published_date }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 semi-bold">Platform</label>
                                <div class="col-md-6">
                                    <input type="text" name="platform" id="platform" class="form-control" value="{{ $testimonial->platform }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 semi-bold">Status</label>
                                <div class="col-md-6">
                                    <select name="status" class="form-control">
                                        @foreach ($status as $key => $value)
                                            <option value="{{ $key }}"
                                                    @if($key==$testimonial->status) selected @endif>{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 semi-bold">Reward Product</label>
                                <div class="col-md-6">
                                    <input type="text" name="reward_product" id="reward_product" class="form-control" value="{{ $testimonial->reward_product }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 semi-bold">SRN No</label>
                                <div class="col-md-6">
                                    <input type="text" name="srn_no" id="srn_no" class="form-control" value="{{ $testimonial->srn_no }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 semi-bold">eVoucher</label>
                                <div class="col-md-6">
                                    <input type="text" name="evoucher" id="evoucher" class="form-control" value="{{ $testimonial->evoucher }}">
                                </div>
                            </div>
                            <h4 class="form-label-blue m-t-30">CBO Attached/ Caregiver Details</h4>
                            <div class="form-group">
                                <label class="col-md-2 semi-bold">Name</label>
                                <div class="col-md-6">
                                    <input type="text" name="caregiver_name" id="caregiver_name" class="form-control" value="{{ $testimonial->caregiver_name }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 semi-bold">Code</label>
                                <div class="col-md-6">
                                    <input type="text" name="caregiver_code" id="caregiver_code" class="form-control" value="{{ $testimonial->caregiver_code }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 semi-bold">Phone No</label>
                                <div class="col-md-6">
                                    <input type="text" name="caregiver_contact_no" id="caregiver_contact_no" class="form-control" value="{{ $testimonial->caregiver_contact_no }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 semi-bold">Status</label>
                                <div class="col-md-6">
                                    <select name="caregiver_status" class="form-control">
                                        @foreach ($status as $key => $value)
                                            <option value="{{ $key }}"
                                                    @if($key==$testimonial->caregiver_status) selected @endif>{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 semi-bold">Reward Product</label>
                                <div class="col-md-6">
                                    <input type="text" name="caregiver_reward_product" id="caregiver_reward_product" class="form-control" value="{{ $testimonial->caregiver_reward_product }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 semi-bold">SRN No</label>
                                <div class="col-md-6">
                                    <input type="text" name="caregiver_srn_no" id="caregiver_srn_no" class="form-control" value="{{ $testimonial->caregiver_srn_no }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 semi-bold">eVoucher</label>
                                <div class="col-md-6">
                                    <input type="text" name="caregiver_evoucher" id="caregiver_evoucher" class="form-control" value="{{ $testimonial->caregiver_evoucher }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 p-l-0">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <button type="submit" class="btn btn-success btn-min-width">Update</button>
                        <a href="{{ route('testimony.show', $testimonial->id) }}" class="btn btn-white btn-min-width">Cancel</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection