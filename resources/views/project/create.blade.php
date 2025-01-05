@extends('adminpanel')
@section('admin')
<link rel="stylesheet" href="{{ asset('front/css/switch.css') }}">
<script src="{{ asset('/js/ckeditor/ckeditor.js') }}"></script>
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
                                    <li class="breadcrumb-item"><a href="#">Project</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </header>
            </div>
        </div>
        <div class="row col-md-12 mt-4">
            <div id="select-wrapper">
                <div id="element-wrapper">
                    <form method="post" action="{{ URL::to('create-project-data-post') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <div class="mb-3">
                                {{-- <input type="hidden" name="blog_id" value="{{ (!empty($blog_data->id))?$blog_data->id:'' }}" /> --}}
                                <label for="title" class="form-label">Category*</label>
                                <select name="category_id" id="category_id" class="form-select">
                                    <option value="" selected>Select Category</option>
                                    @foreach ($categories as $row)
                                    <option value="{{ $row->id ?? '' }}" >{{ $row->title ?? '' }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('category_id'))
                                    <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" value="" name="title" class="form-control" id="title" aria-describedby="fname">
                                @if($errors->has('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="fname" class="form-label">Description*</label>
                                <textarea tabindex="-1" name="description" id="post_content" class="form-control" rows="10"></textarea>
                                @if($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                                <script>
                                    CKEDITOR.replace('post_content');
                                </script>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Client*</label>
                                    <input type="text" value="" name="client" class="form-control" id="client" aria-describedby="fname">
                                    @if($errors->has('client'))
                                        <span class="text-danger">{{ $errors->first('client') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="fname" class="form-label">Complete Date*</label>
                                    <input type="date" value="" name="complete_date" class="form-control" id="complete_date" aria-describedby="fname">
                                    @if($errors->has('complete_date'))
                                        <span class="text-danger">{{ $errors->first('complete_date') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="fname" class="form-label">Feature Image (JPEG, PNG, JPG)</label>
                                <input type="file" name="image" class="form-control" id="fname" aria-describedby="fname">
                                @if($errors->has('image'))
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Location*</label>
                                    <input type="text" value="" name="location" class="form-control" id="location" aria-describedby="fname">
                                    @if($errors->has('location'))
                                        <span class="text-danger">{{ $errors->first('location') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="fname" class="form-label">Technologies*</label>
                                    <input type="datetime" value="" name="technologies" class="form-control" id="technologies" aria-describedby="fname">
                                    @if($errors->has('technologies'))
                                        <span class="text-danger">{{ $errors->first('technologies') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="fname" class="form-label">Website</label>
                                <input type="text" value="" name="website" class="form-control" id="website" aria-describedby="fname">
                            </div>
                        </div>
                        <div class="text-start py-2">
                            <button type="submit" class="px-5 py-2 common-button rounded-pill">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
 $(function(){
    $('.category-status-chnage').change(function(){
        var status = $(this).prop('checked') == true ? 0 : 1;
        var category_id = $(this).data('id');
        var url = $(this).data('action');
            $.post(url,
            {
                category_id: category_id,
                status: status
            },
            function(data, status){
                console.log(data);
                if(data['result']['key']===101){
                    iziToast.show({
                        title: 'Info',
                        message: data['result']['val'],
                        position: 'topRight',
                        timeout: 8000,
                        color: 'red',
                        balloon: true,
                        close: true,
                        progressBarColor: 'yellow',
                    });
                }
                if(data['result']['key']===200){
                    iziToast.show({
                        title: 'Info',
                        message: data['result']['val'],
                        position: 'topRight',
                        timeout: 8000,
                        color: 'green',
                        balloon: true,
                        close: true,
                        progressBarColor: 'yellow',
                    });
                    setTimeout(function () {
                        location.reload(true);
                    }, 2000);
                }
                //alert("Data: " + data + "\nStatus: " + status);
            });

    });
});
</script>
@endsection
