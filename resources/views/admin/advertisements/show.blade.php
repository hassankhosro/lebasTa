@extends('admin.layouts.master')
@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>
                          نمایش آگهی
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
                        <div  class="form_wizard wizard_horizontal">
                            <div id="step-3">
                                <div class="form-horizontal form-label-left input_mask">
                                    <div class="align-items-center d-flex form-group p-4">
                                    <div class="col-md-12 col-sm-12">

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <label>نام محصول</label>
                                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="{{ $advertisement->name }}" readonly>
                                        <span class="fa fa-cubes form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <label>وضعیت محصول</label>
                                        <input type="text"  class="form-control" id="inputSuccess3" value="{{ $advertisement->status == 'disbale' ? 'غیرفعال' : 'فعال' }}" readonly>
                                        <span class="fa fa-cogs form-control-feedback right" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <label>قیمت محصول</label>
                                        <input type="text" class="form-control has-feedback-left" id="inputSuccess4" value="{{ $advertisement->price . ' تومان'}}" readonly>
                                        <span class="fa fa-usd form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <label>قیمت محصول در بازار</label>
                                        <input type="text" class="form-control" id="inputSuccess5" value="{{ $advertisement->market_price . ' تومان' }}" readonly>
                                        <span class="fa fa-bar-chart form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                    </div>
                                </div>

                                    <div class="align-items-center border-top d-flex form-group p-4">
                                    <div class="col-md-12 col-sm-12">

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <label>برند محصول</label>
                                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="{{ $advertisement->brand ?? 'وارد نشده' }}" readonly>
                                        <span class="fa fa-tags form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <label>تاریخ خریداری محصول</label>
                                        <input type="text" class="form-control" id="inputSuccess3" value="{{ $advertisement->buyAt ?? 'وارد نشده' }}" readonly>
                                        <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <label>جنس محصول</label>
                                        <input type="text" class="form-control has-feedback-left" id="inputSuccess4" value="{{ $advertisement->material ?? 'وارد نشده' }}" readonly>
                                        <span class="fa fa-flask form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <label>مورد کاربری محصول</label>
                                        <input type="text" class="form-control" id="inputSuccess5"value="{{ $advertisement->usage ?? 'وارد نشده' }}" readonly>
                                        <span class="fa fa-check-square-o form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                    </div>
                                </div>
                                    <div class="align-items-center border-top d-flex form-group p-4">
                                    <div class="col-md-12 col-sm-12">

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <label>نوع محصول</label>
                                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="{{ $advertisement->type == 'secondhand' ? 'دسته دوم' : 'نو' }}" readonly>
                                        <span class="fa fa-tags form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <label>نحوه فروش محصول</label>
                                        <input type="text" class="form-control" id="inputSuccess3" value="{{ $advertisement->sell_way == 'own' ? 'شخصی' : 'مزون'  }}" readonly>
                                        <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <label>مزون محصول</label>
                                        <input type="text" class="form-control" id="inputSuccess5"value="{{ $advertisement->meson->name ?? 'متعلق به مزون نمیباشد' }}" readonly>
                                        <span class="fa fa-check-square-o form-control-feedback right" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <label>گروه محصول</label>
                                        <input type="text" class="form-control" id="inputSuccess5"value="{{ $advertisement->group->name ?? 'وارد نشده' }}" readonly>
                                        <span class="fa fa-check-square-o form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                    </div>
                                </div>
                                    <div class="align-items-center border-top d-flex form-group p-4">
                                    <div class="col-md-12 col-sm-12">

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <label>تعداد بازدید محصول</label>
                                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="{{ $advertisement->view_count}}" readonly>
                                        <span class="fa fa-tags form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <label>کشور سازنده محصول</label>
                                        <input type="text" class="form-control" id="inputSuccess3" value="{{ $advertisement->made_in ?? 'وارد نشده' }}" readonly>
                                        <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <label> تارخ ساخت آگهی</label>
                                        <input type="text" class="form-control has-feedback-left" id="inputSuccess4" value="{{ jdate($advertisement->created_at) }}" readonly>
                                        <span class="fa fa-flask form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <label>دسته بندی محصول</label>
                                        <input type="text" class="form-control has-feedback-left" id="inputSuccess4" value="{{ $advertisement->category->name ?? 'وارد نشده' }}" readonly>
                                        <span class="fa fa-flask form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    </div>
                                </div>
                                @if($advertisement->features->count() !== 0)

                                    <div class="align-items-center border-top d-flex form-group p-4">
                                    <div class="col-md-12 col-sm-12">
                                  @foreach ($advertisement->features as $feature)

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <label>{{ $feature->name }}</label>
                                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="{{ $feature->pivot->value  }}" readonly>
                                        <span class="fa fa-magic form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                  @endforeach
                                    </div>
                                </div>

                              @endif
                                    <div class="align-items-center border-top d-flex form-group p-4">
                                    <div class="col-12">
                                      <label>توضیحات محصول</label>
                                    <textarea class="form-control" readonly>{{ $advertisement->description ?? 'وارد نشده' }}</textarea>
                                    </div>
                                </div>
                                <div class="border-top d-flex form-group p-4 flex-wrap">
                                  <label class="align-items-center col-2 d-flex">گالری محصول</label>
                                  <div class="col-12 d-flex flex-wrap">
                                  @foreach ($advertisement->galleries as $gallery)

                                  <div class="p-2 m-4 border">
                                      <img src="{{ $gallery->filename['300,300'] }}" class="rounded" style="width:200px;height:200px" alt="">
                                  </div>
                                @endforeach

                              </div>
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
@section('pageScripts')
    <script>
        $(window).ready(function(){
            setInterval(function(){
              $('.stepContainer').addClass("h-400")
            }, 200);
          });
    </script>

@endsection
