@extends('layouts.app')
@section('title')
    View Testimonial
@endsection
@section('content')
<div class="content">
    <div class="container">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <div class="head-bc">
                    <a href="{{ route('testimony') }}" class="text-white"> Testimonial Listing </a><span> / </span>
                    Superhero Testimonial<span> / </span><a href="{{ route('testimony.edit', $testimonial->id) }}" class="text-white semi-bold"> Edit </a>
                </div>
            </div>

            <h3 class="col-sm-12 col-md-12 form-label-blue m-t-30 m-b-10">Participant Details</h3>

            <div class="panel-body panel-body-inc">
                <div class="col-md-12 panel-body-inc">
                    <div class="col-md-12 m-t-10 row">
                        <label class="col-md-2 semi-bold">Name</label>
                        <div class="col-md-4 text-inc-info"> {{ $testimonial->name }} </div>
                        <label class="col-md-2 semi-bold">Location</label>
                        <div class="col-md-4 text-inc-info"> {{ $testimonial->location }} <br/></div>
                    </div>
                </div>

                <div class="col-md-12 panel-body-inc">
                    <div class="col-md-12 m-t-10 row">
                        <label class="col-md-2 semi-bold">Phone No</label>
                        <div class="col-md-4 text-inc-info"> {{ $testimonial->contact_no }} </div>
                        <label class="col-md-2 semi-bold">Status</label>
                        <div class="col-md-4 text-inc-info"> {{ $testimonial->status }} <br/></div>
                    </div>
                </div>

                <div class="col-md-12 panel-body-inc">
                    <div class="col-md-12 m-t-10 row">
                        <label class="col-md-2 semi-bold">Products Category</label>
                        <div class="col-md-4 text-inc-info"> {{ $testimonial->product_cat }} </div>
                        <label class="col-md-2 semi-bold">Data Received</label>
                        <div class="col-md-4 text-inc-info"> {{ $testimonial->received_date }} <br/></div>
                    </div>
                </div>

                <div class="col-md-12 panel-body-inc">
                    <div class="col-md-12 m-t-10 row">
                        <label class="col-md-2 semi-bold">Reward Product</label>
                        <div class="col-md-4 text-inc-info"> {{ $testimonial->reward_product }} </div>
                        <label class="col-md-2 semi-bold">Date Published</label>
                        <div class="col-md-4 text-inc-info"> {{ $testimonial->published_date }} <br/></div>
                    </div>
                </div>

                <div class="col-md-12 panel-body-inc">
                    <div class="col-md-12 m-t-10 row">
                        <label class="col-md-2 semi-bold">Link</label>
                        <div class="col-md-10 text-inc-info"> {{ $testimonial->link }} </div>
                    </div>
                </div>

                <h3 class="col-sm-12 col-md-12 form-label-blue m-t-30 m-b-10">CBO Attached/ Caregiver Details</h3>

                <div class="col-md-12 panel-body-inc">
                    <div class="col-md-12 m-t-10 row">
                        <label class="col-md-2 semi-bold">Name</label>
                        <div class="col-md-4 text-inc-info"> {{ $testimonial->caregiver_name }} </div>
                        <label class="col-md-2 semi-bold">Code</label>
                        <div class="col-md-4 text-inc-info"> {{ $testimonial->caregiver_code }} <br/></div>
                    </div>
                </div>

                <div class="col-md-12 panel-body-inc">
                    <div class="col-md-12 m-t-10 row">
                        <label class="col-md-2 semi-bold">Phone No</label>
                        <div class="col-md-4 text-inc-info"> {{ $testimonial->caregiver_contact_no }} </div>
                        <label class="col-md-2 semi-bold">Status</label>
                        <div class="col-md-4 text-inc-info"> {{ $testimonial->caregiver_status }} <br/></div>
                    </div>
                </div>

                <div class="col-md-12 panel-body-inc">
                    <div class="col-md-12 m-t-10 row">
                        <label class="col-md-2 semi-bold">Reward Product</label>
                        <div class="col-md-10 text-inc-info"> {{ $testimonial->caregiver_reward_product }} </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection