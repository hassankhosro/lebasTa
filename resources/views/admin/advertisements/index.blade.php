@extends('admin.layouts.master')
@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <table id="table" class="display" style="width:100%">
        <thead>
            <tr>
              <th>ردیف</th>
              <th>عکس</th>
              <th>عنوان آگهی</th>
              <th>دسته بندی</th>
              <th>تعداد بازدید</th>
              <th>قیمت</th>
              <th>مزون</th>
              <th>نوع محصول</th>
              <th>وضعیت نمایش آگهی</th>
              <th>تاریخ ثبت آگهی</th>
              <th>تنظیمات</th>
            </tr>
        </thead>
        <tbody>
          @php
          $id = 1;
        @endphp
          @foreach($advertisements as $advertisement)
          <tr>
              <td>{{ $id }}</td>
              <td><img src="{{ $advertisement->galleries->count() > 0 ? $advertisement->galleries[0]->filename['300,300'] : $advertisement->image }}" alt="ads-image" class="img-ads"></td>
              <td>{{ $advertisement->name }}</td>
              <td>{{ $advertisement->category->name }}</td>
              <td>{{ $advertisement->view_count }}</td>
              <td>{{ Str::limit($advertisement->price, 20, '...') }}</td>
              <td>{{ $advertisement->meson != null ? Str::limit($advertisement->meson->name, 20, '...') : '-' }}</td>
              <td>{{ $advertisement->type == 'secondhand' ? 'دسته دوم' : 'نو' }}</td>
              <td class="{{ $advertisement->status == 'disable' ? 'text-danger' : 'text-success' }}">{{ $advertisement->status == 'disable' ? 'منتشر نشده' : 'منتشر شده' }}</td>
              <td>{{ jdate($advertisement->created_at) }}</td>
              <td>
                <div class="d-flex">
                  <a class="btn btn-warning" href="{{ route('advertisement.show', $advertisement->id) }}"><i class="fa fa-edit"></i></a>
                  <a class="btn btn-success" href="{{ route('advertisement.show', $advertisement->id) }}"><i class="fa fa-eye"></i></a>
                  <a class="btn btn-danger" id="removeAds" title="حذف" data-name="{{ $advertisement->name }}" data-id="{{ $advertisement->id }}" href="{{ route('advertisement.destroy', $advertisement->id) }}"><i class="fa fa-trash"></i></a>
                </div>
              </td>
          </tr>
          @php
          $id ++
        @endphp
          @endforeach
        </tbody>
        <tfoot>
            <tr>
              <th>ردیف</th>
              <th>عکس</th>
              <th>عنوان آگهی</th>
              <th>دسته بندی</th>
              <th>تعداد بازدید</th>
              <th>قیمت</th>
              <th>مزون</th>
              <th>نوع محصول</th>
              <th>وضعیت نمایش آگهی</th>
              <th>تاریخ ثبت آگهی</th>
              <th>تنظیمات</th>
            </tr>
        </tfoot>
    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('pageScripts')
  <script type="text/javascript" src="{{ asset('/admin/build/js/ads/delete.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#table').DataTable( {
            language: {
                url: '{{ asset('/admin/DataTables/Persian.json') }}',
            },
            // responsive: true,
            "scrollX": true
        });
    });

    </script>
    <script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
@endsection
