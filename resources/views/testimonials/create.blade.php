
@extends('layouts.app')
@section('title')
    Create Testimonial
@endsection
@section('content')
<div class="content">
    <div class="panel panel-inverse">
        <div class="panel-heading">
        <h4 class="panel-title m-l-10">Superhero Testimonial Form</h4>
        </div>
        <div class="panel-body">
            <div class="col-sm-12">
            <form action="{{ route('testimony.store') }}"  class="form-horizontal" method="POST" enctype="multipart/form-data" id="testimonial-form">
                {{csrf_field()}}

                <div class="form-group">
                    <label class="col-md-2 semi-bold">Name*</label>
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 semi-bold">Code</label>
                    <div class="col-md-6">
                        <input type="text" name="code" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 semi-bold">Phone No</label>
                    <div class="col-md-6">
                        <input type="text" name="contact_no" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 semi-bold">Location</label>
                    <div class="col-md-6">
                        <input type="text" name="location" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 semi-bold">IC No</label>
                    <div class="col-md-6">
                        <input type="text" name="id_no" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 semi-bold">Products Category</label>
                    <div class="col-md-6">
                        <input type="text" name="product_cat" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 semi-bold">Date Received</label>
                    <div class="col-md-6">
                        <input type="date" name="received_date" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 semi-bold">Link</label>
                    <div class="col-md-6">
                        <input type="text" name="link" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 semi-bold">Date Published</label>
                    <div class="col-md-6">
                        <input type="date" name="published_date" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 semi-bold">Platform</label>
                    <div class="col-md-6">
                        <input type="text" name="platform" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 semi-bold">Status</label>
                    <div class="col-md-6">
                        <select class="form-control" name="status" id="status">
                            @foreach ($status as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 semi-bold">Reward Product</label>
                    <div class="col-md-6">
                        <input type="text" name="reward_product" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 semi-bold">SRN No</label>
                    <div class="col-md-6">
                        <input type="text" name="srn_no" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 semi-bold">eVoucher</label>
                    <div class="col-md-6">
                        <input type="text" name="evoucher" class="form-control" placeholder="">
                    </div>
                </div>
                <h4 class="form-label-blue m-t-30">CBO Attached/ Caregiver Details</h4>
                <div class="form-group">
                    <label class="col-md-2 semi-bold">Name</label>
                    <div class="col-md-6">
                        <input type="text" name="caregiver_name" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 semi-bold">Code</label>
                    <div class="col-md-6">
                        <input type="text" name="caregiver_code" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 semi-bold">Phone Number</label>
                    <div class="col-md-6">
                        <input type="text" name="caregiver_contact_no" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 semi-bold">Status</label>
                    <div class="col-md-6">
                        <select class="form-control" name="caregiver_status" id="caregiver_status">
                            @foreach ($status as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 semi-bold">Reward Product</label>
                    <div class="col-md-6">
                        <input type="text" name="caregiver_reward_product" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 semi-bold">SRN No</label>
                    <div class="col-md-6">
                        <input type="text" name="caregiver_srn_no" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 semi-bold">eVoucher</label>
                    <div class="col-md-6">
                        <input type="text" name="caregiver_evoucher" class="form-control" placeholder="">
                    </div>
                </div>

                <div><button type="submit" class="btn-min-width btn btn-sm btn-success pull-left">Save</button></div>   
                <div><a href="{{route('testimony')}}" class="btn-min-width btn btn-sm btn-white pull-left">Cancel</a></div>
            </form>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
@section('script')
<script type="text/javascript">
var status = $('#organization');
$(document).ready(function () {
    status.select2();
});
</script>
@endsection

