@extends('layouts.main')

@section('content-page')
				<div class="content-page">
								<div class="container-fluid">
												<div class="row">
																<div class="col-lg-12">
																				<div class="card">
																								<div class="card-body p-0">
																												<div class="iq-edit-list usr-edit">
																																<ul class="iq-edit-profile d-flex nav nav-pills">
																																				<li class="col-md-4 p-0">
																																								<a class="nav-link active" data-toggle="pill" href="#personal-information">
																																												Personal Information
																																								</a>
																																				</li>
																																				<li class="col-md-4 p-0">
																																								<a class="nav-link" data-toggle="pill" href="#chang-pwd">
																																												Change Password
																																								</a>
																																				</li>
																																				<li class="col-md-4 p-0">
																																								<a class="nav-link" data-toggle="pill" href="#manage-contact">
																																												Manage Contact
																																								</a>
																																				</li>
																																</ul>
																												</div>
																								</div>
																				</div>
																</div>
																<div class="col-lg-12">
																				<div class="iq-edit-list-data">
																								<div class="tab-content">
																												<div class="tab-pane fade active show" id="personal-information" role="tabpanel">
																																<div class="card">
																																				<div class="card-header d-flex justify-content-between">
																																								<div class="iq-header-title">
																																												<h4 class="card-title">Personal Information</h4>
																																								</div>
																																				</div>
																																				<div class="card-body">
																																								<form>
																																												<div class="form-group row align-items-center">
																																																<div class="col-md-12">
																																																				<div class="profile-img-edit">
																																																								<div class="crm-profile-img-edit">
																																																												<img class="crm-profile-pic rounded-circle avatar-100"
																																																																src="{{ asset($user->image) }}" alt="profile-pic">
																																																												<div class="crm-p-image bg-primary">
																																																																<i class="las la-pen upload-button"></i>
																																																																<input class="file-upload" type="file" accept="image/*">
																																																												</div>
																																																								</div>
																																																				</div>
																																																</div>
																																												</div>
																																												<div class=" row align-items-center">
																																																<div class="form-group col-sm-12">
																																																				<label for="fname">Name:</label>
																																																				<input type="text" class="form-control" id="fname">
																																																</div>

																																																<div class="form-group col-sm-6">
																																																				<label for="uname">User Name:</label>
																																																				<input type="text" class="form-control" id="uname">
																																																</div>

																																																<div class="form-group col-sm-6">
																																																				<label class="d-block">Gender:</label>
																																																				<div class="custom-control custom-radio custom-control-inline">
																																																								<input type="radio" id="customRadio6" name="customRadio1"
																																																												class="custom-control-input" checked="">
																																																								<label class="custom-control-label" for="customRadio6"> Male</label>
																																																				</div>
																																																				<div class="custom-control custom-radio custom-control-inline">
																																																								<input type="radio" id="customRadio7" name="customRadio1"
																																																												class="custom-control-input">
																																																								<label class="custom-control-label" for="customRadio7">
																																																												Female</label>
																																																				</div>
																																																</div>

																																																<div class="form-group col-sm-12">
																																																				<label>Address:</label>
																																																				<textarea class="form-control" name="address" rows="5" style="line-height: 22px;">
                                                    </textarea>
																																																</div>
																																												</div>
																																												<button type="submit" class="btn btn-primary mr-2">Submit</button>
																																												<button type="reset" class="btn iq-bg-danger">Cancel</button>
																																								</form>
																																				</div>
																																</div>
																												</div>
																												<div class="tab-pane fade" id="chang-pwd" role="tabpanel">
																																<div class="card">
																																				<div class="card-header d-flex justify-content-between">
																																								<div class="iq-header-title">
																																												<h4 class="card-title">Change Password</h4>
																																								</div>
																																				</div>
																																				<div class="card-body">
																																								<form>
																																												<div class="form-group">
																																																<label for="cpass">Current Password:</label>
																																																<a href="javascripe:void();" class="float-right">Forgot Password</a>
																																																<input type="Password" class="form-control" id="cpass" value="">
																																												</div>
																																												<div class="form-group">
																																																<label for="npass">New Password:</label>
																																																<input type="Password" class="form-control" id="npass" value="">
																																												</div>
																																												<div class="form-group">
																																																<label for="vpass">Verify Password:</label>
																																																<input type="Password" class="form-control" id="vpass"
																																																				value="">
																																												</div>
																																												<button type="submit" class="btn btn-primary mr-2">Submit</button>
																																												<button type="reset" class="btn iq-bg-danger">Cancel</button>
																																								</form>
																																				</div>
																																</div>
																												</div>
																												<div class="tab-pane fade" id="manage-contact" role="tabpanel">
																																<div class="card">
																																				<div class="card-header d-flex justify-content-between">
																																								<div class="iq-header-title">
																																												<h4 class="card-title">Manage Contact</h4>
																																								</div>
																																				</div>
																																				<div class="card-body">
																																								<form>
																																												<div class="form-group">
																																																<label for="cno">Contact Number:</label>
																																																<input type="text" class="form-control" id="cno"
																																																				value="001 2536 123 458">
																																												</div>
																																												<div class="form-group">
																																																<label for="email">Email:</label>
																																																<input type="text" class="form-control" id="email"
																																																				value="Barryjone@demo.com">
																																												</div>
																																												<div class="form-group">
																																																<label for="url">Url:</label>
																																																<input type="text" class="form-control" id="url"
																																																				value="https://getbootstrap.com">
																																												</div>
																																												<button type="submit" class="btn btn-primary mr-2">Submit</button>
																																												<button type="reset" class="btn iq-bg-danger">Cancel</button>
																																								</form>
																																				</div>
																																</div>
																												</div>
																								</div>
																				</div>
																</div>
												</div>
								</div>
				</div>
@endsection
