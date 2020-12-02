@extends('admin.layouts.master')
@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <table id="table" class="display">
                        <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>عنوان آگهی</th>
                                <th>توضیحات</th>
                                <th>گروه</th>
                                <th>دسته بندی</th>
                                <th>تعداد بازدید</th>
                                <th>قیمت</th>
                                <th>قیمت محصول مشابه در بازار</th>
                                <th>نحوه فروش</th>
                                <th>مزون</th>
                                <th>برند</th>
                                <th>کشور سازنده</th>
                                <th>جنس</th>
                                <th>مورد استفاده</th>
                                <th>نوع محصول</th>
                                <th>عکس</th>
                                <th>وضعیت نمایش آگهی</th>
                                <th>تاریخ خرید</th>
                                <th>تاریخ ثبت آگهی</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $id = 1;
                          @endphp
                            @foreach($advertisements as $advertisements)
                            <tr>
                                <td>{{ $id }}</td>
                                <td>{{ $advertisements->name }}</td>
                                <td>{!! Str::limit($advertisements->description, 20, '...') !!}</td>
                                <td>{{ $advertisements->group->name }}</td>
                                <td>{{ $advertisements->category->name }}</td>
                                <td>{{ $advertisements->view_count }}</td>
                                <td>{{ Str::limit($advertisements->price, 20, '...') }}</td>
                                <td>{{ Str::limit($advertisements->market_price, 20, '...') }}</td>
                                <td>{{ $advertisements->sell_way }}</td>
                                <td>{{ $advertisements->meson != null ? Str::limit($advertisements->meson->name, 20, '...') : '-' }}</td>
                                <td>{{ Str::limit($advertisements->brand, 20, '...') }}</td>
                                <td>{{ Str::limit($advertisements->made_in, 20, '...') }}</td>
                                <td>{{ Str::limit($advertisements->material, 20, '...') }}</td>
                                <td>{{ $advertisements->usage }}</td>
                                <td>{{ $advertisements->type == 'secondhand' ? 'دسته دوم' : 'نو' }}</td>
                                <td>{{ $advertisements->status }}</td>
                                <td>{{ $advertisements->status == 'disable' ? 'منتشر نشده' : 'منتشر شده' }}</td>
                                <td>{{ $advertisements->buy_at }}</td>
                                <td>{{ $advertisements->created_at }}</td>
                                
                            </tr>
                            @php
                            $id ++
                          @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('pageScripts')
<script>
    $(document).ready(function() {
        $('#table').DataTable( {
            language: {
                url: '{{ asset('/admin/DataTables/Persian.json') }}',
            },
            responsive: true,
        });
    });
    
    </script>
@endsection

