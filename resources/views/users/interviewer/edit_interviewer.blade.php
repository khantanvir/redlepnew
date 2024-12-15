@extends('adminpanel')
@section('admin')
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="secondary-nav">
                <div class="breadcrumbs-container" data-page-heading="Analytics">
                    <header class="header navbar navbar-expand-sm">
                        <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-menu">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </a>
                        <div class="d-flex breadcrumb-content">
                            <div class="page-header">
                                <div class="page-title">
                                </div>
                                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Users</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Interviewer</li>
                                    </ol>
                                </nav>

                            </div>
                        </div>
                    </header>
                </div>
            </div>
            <form method="post" action="{{ URL::to('edit-interviewer-data-post') }}" enctype="multipart/form-data">
                @csrf
                <div id="card_1" class="col-lg-12 layout-spacing layout-top-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="row mb-4">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <h4>Interviewer Information</h4><a href="{{ URL::to('user-list') }}" class="btn btn-info btn-rounded mb-2 mr-4 inline-flex items-center"> User
                                                List <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                    height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3">
                                                    </circle>
                                                </svg></a>
                                    </div><br>
                                </div>
                                <div class="col">
                                    <input type="hidden" value="{{ $officer_data->id }}" name="user_id" />
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Interviewer
                                            Name</label>
                                            <input name="interviewer_name" value="{{ (!empty($officer_data->interviewer->interviewer_name))?$officer_data->interviewer->interviewer_name:old('interviewer_name') }}" type="text" class="form-control">
                                            @if ($errors->has('interviewer_name'))
                                                <span class="text-danger">{{ $errors->first('interviewer_name') }}</span>
                                            @endif
                                        <!---->
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Interviewer
                                            Phone</label>
                                            <input name="interviewer_phone" value="{{ (!empty($officer_data->interviewer->interviewer_phone))?$officer_data->interviewer->interviewer_phone:old('interviewer_phone') }}" type="text" class="form-control">
                                            @if ($errors->has('interviewer_phone'))
                                                <span class="text-danger">{{ $errors->first('interviewer_phone') }}</span>
                                            @endif
                                        <!---->
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Interviewer
                                            Email</label>
                                            <input name="interviewer_email" value="{{ (!empty($officer_data->interviewer->interviewer_email))?$officer_data->interviewer->interviewer_email:old('interviewer_email') }}" type="email" class="form-control">
                                            @if ($errors->has('interviewer_email'))
                                                <span class="text-danger">{{ $errors->first('interviewer_email') }}</span>
                                            @endif
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Alternative Person
                                            Contact</label>
                                            <input name="interviewer_alternative_contact" value="{{ (!empty($officer_data->interviewer->interviewer_alternative_contact))?$officer_data->interviewer->interviewer_alternative_contact:old('interviewer_alternative_contact') }}" type="text" class="form-control">
                                        <!---->
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">National ID or
                                            Passport</label>
                                            <input name="interviewer_nid_or_passport" value="{{ (!empty($officer_data->interviewer->interviewer_nid_or_passport))?$officer_data->interviewer->interviewer_nid_or_passport:old('interviewer_nid_or_passport') }}" type="text" class="form-control">

                                        <!---->
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label
                                            for="exampleFormControlInput1">Nationality</label>
                                            <input name="nationality" value="{{ (!empty($officer_data->interviewer->nationality))?$officer_data->interviewer->nationality:old('nationality') }}" type="text" class="form-control">

                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-group mb-4"><label
                                            for="exampleFormControlInput1">Country</label>
                                            <select name="country" class="form-control">
                                            <option value="">Select Country</option>
                                            @forelse ($countries as $country)
                                            <option {{ (!empty($officer_data->interviewer->country) && $officer_data->interviewer->country==$country)?'selected':'' }} value="{{ $country }}">{{ $country }}</option>
                                            @empty

                                            @endforelse
                                        </select>

                                        <!---->
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">State</label>
                                        <input name="state" value="{{ (!empty($officer_data->interviewer->state))?$officer_data->interviewer->state:old('state') }}" type="text" class="form-control">

                                        <!---->
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">City</label>
                                        <input name="city" value="{{ (!empty($officer_data->interviewer->city))?$officer_data->interviewer->city:old('city') }}" type="text" class="form-control">

                                        <!---->
                                    </div>
                                </div>

                            </div>
                            <div class="row mb-4">
                                <div class="col col-md-8">
                                    <div class="form-group mb-4"><label for="exampleFormControlTextarea1">Address in
                                            Details</label>
                                        <textarea name="address" id="exampleFormControlTextarea1" class="form-control" rows="1" spellcheck="false">{{ (!empty($officer_data->interviewer->address))?$officer_data->interviewer->address:old('address') }}</textarea>

                                        <!---->
                                    </div>
                                </div>
                                <div class="col col-md-4">
                                    <div class="row d-flex align-items-center">
                                        <div class="col col-md-8">
                                            <div class="form-group mb-4"><label>Upload Officer Photo</label><label
                                                    class="custom-file-container__custom-file">
                                                    <input type="file" name="photo" class="form-control-file" accept="image/*">
                                                    </label>
                                                <div class="custom-file-container__image-preview">
                                                    <img src="{{ asset($officer_data->photo) }}" height="100px" width="100px" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-md-4">
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="card_1" class="col-lg-12 layout-spacing layout-top-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="row mb-4">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Teacher Login Information</h4><br>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="personName">Person Name</label>
                                        <input name="name" value="{{ (!empty($officer_data->name))?$officer_data->name:old('name') }}" id="personName" type="text" class="form-control">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                        <!---->
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="email">Email</label>
                                        <input name="email" value="{{ (!empty($officer_data->email))?$officer_data->email:old('email') }}" type="email" class="form-control">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-right">
                                    <div class="row">
                                        <div class="col"><button type="button"
                                                class="btn btn-warning mr-2 me-2">Cancel</button><button type="submit"
                                                class="btn btn-primary mr-2"><span>Submit</span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop