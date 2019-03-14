@extends(config('contact_us.extends_layout'))
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-xl-8 offset-xl-2 py-5">
                <div class="card">
                    <div class="card-header">
                        Feel Free To Contact Us Anytime
                    </div>
                    <div class="card-body">

                        @if(session()->has('MessageReceived'))
                        <div class="alert alert-success fade in alert-dismissible show" style="margin-top:18px;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true" style="font-size:20px">×</span>
                            </button>    <strong>Success!</strong> {{ session()->get('MessageReceived') }}
                        </div>
                        @endif

                        <form id="contact-form" method="post" action="{{ route('contact_us.save_message') }}" role="form" >
                            {{ csrf_field() }}
                            <div class="messages"></div>

                            <div class="controls">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">First name *</label>
                                            <input id="form_name" type="text" name="first_name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                            <div class="help-block with-errors text-danger">@if($errors->has('first_name')) {{ $errors->first('first_name') }} @endif</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_lastname">Last name *</label>
                                            <input id="form_lastname" type="text" name="last_name" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                            <div class="help-block with-errors text-danger">@if($errors->has('last_name')) {{ $errors->first('last_name') }} @endif</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_email">Email *</label>
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors text-danger">@if($errors->has('email')) {{ $errors->first('email') }} @endif</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_email">Phone (Optional)</label>
                                            <input id="form_phone" type="text" name="phone" class="form-control" placeholder="Please enter your Phone *" data-error="Valid phone is required.">
                                            <div class="help-block with-errors text-danger">@if($errors->has('phone')) {{ $errors->first('phone') }} @endif</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_message">Message *</label>
                                            <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                            <div class="help-block with-errors text-danger">@if($errors->has('message')) {{ $errors->first('message') }} @endif</div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-success btn-send" value="Send message">
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /.8 -->

        </div>
    </div>
@endsection