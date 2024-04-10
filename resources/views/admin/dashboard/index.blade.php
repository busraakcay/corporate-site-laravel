@extends('admin.layouts.master')
@section('content')

<div class="card card-custom gutter-b">
    <div class="card-header border-0 py-5 ribbon ribbon-clip ribbon-left">
        <div class="ribbon-target" style="top: 15px; height: 45px;">
            <span class="ribbon-inner bg-primary"></span><i class="fas fa-tags text-white"></i>
        </div>
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark ml-5">Son Eklenen Ürünler</span>
        </h3>
        <div class="card-toolbar">
            <a href="" class="btn btn-primary font-weight-bolder font-size-sm">Bütün Ürünleri Görüntüle</a>
        </div>
    </div>
    <div class="card-body py-0">
        <div class="table-responsive">
            <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_4">
                <thead class="datatable-head">
                    <tr class="datatable-row" style="left: 0px;">
                        <th class="datatable-cell datatable-toggle-detail"><span></span></th>
                        <th data-field="Ürün Kodu" class="datatable-cell datatable-cell-sort"><span style="">Ürün Kodu</span></th>
                        <th data-field="Ürün Adı" class="datatable-cell datatable-cell-sort"><span style="">Ürün Adı</span></th>
                        <th data-field="Materyal" class="datatable-cell datatable-cell-sort"><span style="">Materyal</span></th>
                        <th data-field="Taban" class="datatable-cell datatable-cell-sort"><span style="">Taban</span></th>
                        <th data-field="Boyut" class="datatable-cell datatable-cell-sort"><span style="">Boyut</span></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection
