@php $page='career';  @endphp
@extends('layouts.master')

@section('page_title')
    Career
@endsection

@section('head')

@endsection

@section('seo')


@stop

@section('content-wrapper')
    @include('home.navbar')
    <section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Career</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="./">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Career
                        </li>
                    </ol>
                    <div class="divider-15 d-none d-xl-block"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="s-pb-130 s-pb-lg-170">
        <div class="container">
            <form class="contact-form c-mb-20 c-gutter-20" id="careerForm" method="post"  enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group has-placeholder">
                            <label for="name">Full Name
                                <span class="required">*</span>
                            </label>
                            <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group has-placeholder">
                            <label for="email">Email address
                                <span class="required">*</span>
                            </label>
                            <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address" required>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group has-placeholder">
                            <label for="phone">Phone Number
                                <span class="required">*</span>
                            </label>
                            <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group has-placeholder">
                            <label for="subject">Position
                                <span class="required">*</span>
                            </label>
                            <select required id="position" name="position" aria-required="true"  class="form-control" style="height: 60px;">
                                <option value="">Select</option>
                                <option value="Sales Manager">Sales Manager</option>
                                <option value="Sales">Sales</option>
                                <option value="Web Developer">Web Developer</option>
                                <option value="Graphic Designer">Graphic Designer</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label for="resume">Resume
                            <span class="required">*</span>
                        </label>
                        <div class="form-group has-placeholder">
                            <label for="resume">Resume
                                <span class="required">*</span>
                            </label>
                            <input type="file" aria-required="true"  name="resume" id="resume" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group has-placeholder">
                            <label for="message">Your Message</label>
                            <textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control" placeholder="Your Message" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center mt-15">
                        <div class="form-group">
                            <button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor">submit
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert" role="alert">
                            <p id="alert-message"></p>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <div class="d-none d-lg-block divider-75"></div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $(document).on('submit','#careerForm',function(e){
                e.preventDefault();
                $.ajax({
                    url: "/career/create",
                    method: "POST",
                    data : new FormData(this),
                    dataType: "json",
                    contentType: false,
                    cache: false,
                    processData:false,
                    success: function (data) {
                        if(data.status==200){
                            $('#careerForm')[0].reset();
                            $('#alert-message').html(data.message);
                            $('.alert').addClass('alert-success');
                        }else{
                            $('#alert-message').html(data.message);
                            $('.alert').addClass('alert-danger');
                        }
                    }
                });
            });
        });
    </script>
@endpush