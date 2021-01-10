@extends('admin.layouts.master')
@section('headerStyles')
<link rel="stylesheet" type="text/css" href="/admin/vendors/dropzone/dist/min/dropzone.min.css"/>
<style>
    .select2-container--default .select2-results__group {
        background-color: #556578;
        color: white;
        padding: 10px 10px;
    }
    .choose {
        color: white;
        display: inline-block;
        background: #1CB6E0;
        border: none;
        padding: 7px 15px;
        font-weight: 700;
        border-radius: 3px;
        white-space: nowrap;
        cursor: pointer;
        font-size: 10pt;
      }
      .img-upload{
        width: 100px;
        height: 100px;
        margin: 0 45px;
      }
    </style>
@endsection
@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>
                            ساخت آگهی
                            <small>جدید</small>
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">تنظیمات 1</a>
                                    </li>
                                    <li><a href="#">تنظیمات 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                        <!-- Smart Wizard -->
                        <p>لطفا برای ساخت آگهی جدید مراحل زیر را با دقت طی کنید.</p>
                        <div id="wizard" class="form_wizard wizard_horizontal">
                            <ul class="wizard_steps">
                                <li>
                                    <a href="#step-1">
                                        <span class="step_no">1</span>
                                        <span class="step_descr">
                                              قدم اول<br/>
                                              <small>گروه و دسته بندی آگهی</small>
                                          </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-2">
                                        <span class="step_no">2</span>
                                        <span class="step_descr">
                                              قدم دوم<br/>
                                              <small>مزون ها و یا فروش شخصی</small>
                                          </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-3">
                                        <span class="step_no">3</span>
                                        <span class="step_descr">
                                              قدم سوم<br/>
                                              <small>اطلاعات اصلی</small>
                                          </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-4">
                                        <span class="step_no">4</span>
                                        <span class="step_descr">
                                              قدم چهارم<br/>
                                              <small>تصاویر</small>
                                          </span>
                                    </a>
                                </li>
                            </ul>
                            <form class="form-horizontal" action="{{ route('advertisement.store') }}" method="post" id="wiz" enctype="multipart/form-data">
                                @csrf
                            <div id="step-1">
                                <div class="form-horizontal form-label-left">
                                    <div id="category"></div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">نوع محصول<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div id="new" class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-default" data-toggle-class="btn-primary"
                                                       data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="type" value="unused" checked> &nbsp; نو &nbsp;
                                                </label>
                                                <label class="btn btn-primary" data-toggle-class="btn-primary"
                                                       data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="type" value="secondhand"> دسته دوم
                                                </label>
                                            </div>
                                            <div id="feature"></div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id="step-2">
                                <div class="form-horizontal form-label-left">
                                    <div class="form-group">
                                       <div id="meson"></div>
                                    </div>
                                </div>
                            </div>
                            <div id="step-3">
                                <div class="form-horizontal form-label-left input_mask">
                                    <div class="align-items-center d-flex form-group p-4">
                                    <label class="control-label col-md-3 col-sm-3 text-center">اطلاعات کلی آگهی<span class="required">*</span> </label>
                                    <div class="col-md-9 col-sm-9">

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" name="name" value="{{ old('name') }}" class="form-control has-feedback-left" id="inputSuccess2" placeholder="نام محصول">
                                        <span class="fa fa-cubes form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{ old('made_in') }}" class="form-control" name="made_in" id="inputSuccess3" placeholder="کشور سازنده محصول">
                                        <span class="fa fa-cogs form-control-feedback right" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{ old('price') }}" name="price" class="form-control has-feedback-left" id="inputSuccess4" placeholder="قیمت محصول">
                                        <span class="fa fa-usd form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{ old('market_price') }}" name="market_price" class="form-control" id="inputSuccess5" placeholder="قیمت محصول مشابه در بازار">
                                        <span class="fa fa-bar-chart form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                    </div>
                                </div>

                                <div id="feature"></div>


                                    <div class="align-items-center border-top d-flex form-group p-4">
                                    <label class="control-label col-md-3 col-sm-3 text-center">اطلاعات تکمیلی</label>
                                    <div class="col-md-9 col-sm-9">

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{ old('brand') }}" name="brand" class="form-control has-feedback-left" id="inputSuccess2" placeholder="برند محصول">
                                        <span class="fa fa-tags form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" name="buy_at" class="form-control" id="inputSuccess3" placeholder="تاریخ خریداری (درصورتی که محصول دسته دوم میباشد )">
                                        <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{ old('material') }}" name="material" class="form-control has-feedback-left" id="inputSuccess4" placeholder="جنس محصول">
                                        <span class="fa fa-flask form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" value="{{ old('usage') }}" name="usage" class="form-control" id="inputSuccess5" placeholder="مورد استفاده">
                                        <span class="fa fa-check-square-o form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                    </div>
                                </div>

                                    <div class="align-items-center border-top d-flex form-group p-4">
                                    <label class="control-label col-md-3 col-sm-3 text-center">توضیحات محصول</label>
                                    <div class="col-md-9 col-sm-9">

                                    <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>

                                    </div>
                                </div>

                                </div>

                            </div>
                            <div id="step-4">
                                <div class="align-items-center d-flex form-group p-4">
                                    <label class="control-label col-md-2 col-sm-2 text-left">تصاویر محصول</label>
                                    <div class="col-md-10 col-sm-10 mt-5 images">
                                        <label for="file" class="btn btn-success img" title="عکس محصول را انتخاب کنید">انتخاب عکس</label>
                                        <input type="file" class="input-init" id="file" name="images[]" style="display:none;">
                                        <br>
                                        <button type="button" class="circle"></button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                        <!-- End SmartWizard Content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('pageScripts')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        $(document).ready(function() {
            $selectElement = $('.select-category').select2({
                placeholder: "لطفا یک مورد را انتخاب کنید",
                allowClear: true
              });
            $('.select-group').select2({
                placeholder: "لطفا یک مورد را انتخاب کنید",
                allowClear: true
            });

        });
    </script>
    <script>
        $(window).ready(function(){
            setInterval(function(){
              $('.stepContainer').addClass("h-400")
            }, 200);
          });
    </script>
    <script>
        CKEDITOR.replace('description', {
            language: 'fa',
            uiColor: '#F3F6F7',
            width: "98%",
        });
    </script>
    <script>
    $(document).ready(function() {
      $('.input-init').change(function(e) {
          for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
              var file = e.originalEvent.srcElement.files[i];
              var img = document.createElement("img");
              img.setAttribute("class", "img-upload img-thumbnail");
              var reader = new FileReader();
              reader.onloadend = function() {
                   img.src = reader.result;
              }
              reader.readAsDataURL(file);
              let tag = $('.input-init').next()[0];
              if(tag.tagName == 'IMG'){
                $('.input-init').next().remove();
              }
              $('.input-init').after(img);
          }
      });
      let counter = 0;
    $(".circle").click(function () {
      $(".circle").before('<label for="file'+counter+'" class="btn btn-success" title="عکس محصول را انتخاب کنید">انتخاب عکس</label><input type="file" class="input'+counter+'" id="file'+counter+'" name="images[]" style="display:none;"><br />');
      $('.input'+counter).change(function(e) {
          for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
              var file = e.originalEvent.srcElement.files[i];
              var img = document.createElement("img");
              img.setAttribute("class", "img-upload img-thumbnail");
              var reader = new FileReader();
              reader.onloadend = function() {
                   img.src = reader.result;
              }
              reader.readAsDataURL(file);
              let tag = $(this).next()[0];
              if(tag.tagName == 'IMG'){
                $(this).next().remove();
              }
              $(this).after(img);
          }
      });
      counter ++;
      if(counter >= 5){
        $(this).remove();
      }
  });
  });
    </script>
@endsection
