@extends('admin.layouts.master')
@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <table id="table" class="display">
                        <thead>
                            <tr>
                                <th>Column 1</th>
                                <th>Column 2</th>
                                <th>Column 2</th>
                                <th>Column 2</th>
                                <th>Column 2</th>
                                <th>Column 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 2</td>
                                <td>Row 1 Data 2</td>
                                <td>Row 1 Data 2</td>
                                <td>Row 1 Data 2</td>
                                <td>Row 1 Data 2</td>
                            </tr>
                            <tr>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 2</td>
                                <td>Row 2 Data 2</td>
                                <td>Row 2 Data 2</td>
                                <td>Row 2 Data 2</td>
                                <td>Row 2 Data 2</td>
                            </tr>
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

