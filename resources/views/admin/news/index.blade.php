@extends('admin.layouts.master')
@section('content')

<div class="card card-custom gutter-b">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">Haberler</h3>
        </div>
        <div class="card-toolbar">
            <a href="{{ route('admin.createNews') }}" class="btn btn-primary font-weight-bolder">
                Yeni Kayıt Ekle</a>
        </div>
    </div>
    <div class="card-body">
        <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded">
            <table id="place" class="table-stack datatable-table">
                <thead class="datatable-head">
                    <tr class="datatable-row">
                        <th width="10%" class="datatable-cell datatable-toggle-detail">Resim</th>
                        <th width="20%" class="datatable-cell datatable-toggle-detail">Haber Başlığı</th>
                        <th width="20%" class="datatable-cell datatable-toggle-detail">Tarihi</th>
                        <th width="20%" class="datatable-cell datatable-toggle-detail">Sıra</th>
                        <th width="20%" class="datatable-cell datatable-toggle-detail">Durumu</th>
                        <th width="20%" class="datatable-cell datatable-toggle-detail">İşlemler</th>
                    </tr>

                </thead>
                <tbody class="datatable-body">
                    @forelse ($news as $anews)
                    <tr class="datatable-row">
                        <td width="10%" class="datatable-cell" data-label="Resim">
                            <img class="img-size" src="{{asset('uploads/news')}}/{{ $anews->image_tr }}" alt="{{$anews->title_tr}}">
                        </td>
                        <td width="20%" class="datatable-cell" data-label="Haber Başlığı">{{$anews->title_tr}}</td>
                        <td width="20%" class="datatable-cell" data-label="Tarihi">{{$anews->date->format('d.m.Y')}}</td>
                        <td width="20%" class="datatable-cell" data-label="Sıra">
                            <input data-id="{{ $anews->id }}" name="place" class="text-center col-3" value="{{ $anews->place }}" />
                            <input type="hidden" id="ajax_place_url" value="{{ route('admin.changeNewsPlace') }}">
                        </td>

                        <td width="20%" class="datatable-cell" data-label="Durumu">
                            <input data-id="{{ $anews->id }}" class="toggle-class js-toggle-class-status" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Aktif" data-off="Pasif" {{ $anews->status ? 'checked' : '' }}>
                            <input type="hidden" id="ajax_status_url" value="{{ route('admin.changeNewsStatus') }}">
                        </td>

                        <form action="{{ route('admin.destroyNews', $anews->id) }}" id="deleteForm-{{ $anews->id }}" method="post" class="hidden">
                            @csrf @method('delete')
                        </form>
                        <td width="20%" class="datatable-cell" data-label="İşlemler"><span>
                                <a href="{{ route('admin.editNews', $anews->id) }}" class="btn btn-sm btn-light btn-text-primary btn-icon mr-2" title="Düzenle">
                                    <span class="svg-icon svg-icon-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                                                <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                                <a onclick="sure(this.id);" id="{{$anews->id}}" class="btn btn-sm btn-light btn-text-primary btn-icon" title="Sil">
                                    <span class="svg-icon svg-icon-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                                <script>
                                    function sure(id) {
                                        Swal.fire({
                                            title: "Emin misiniz?"
                                            , text: "Bu işlemi geri alamayacaksınız!"
                                            , icon: 'warning'
                                            , showCancelButton: true
                                            , confirmButtonColor: '#3085d6'
                                            , cancelButtonColor: '#d33'
                                            , cancelButtonText: "İptal"
                                            , confirmButtonText: "Sil"
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                document.forms['deleteForm-' + id].submit();
                                            }
                                        })
                                    }

                                </script>

                            </span>
                        </td>
                    </tr>

                    @empty
                    <tr class="datatable-row">
                        <td width="100%" class="text-left datatable-cell">
                            <h6><i>Herhangi bir kayıt bulunamadı.</i></h6>
                        </td>
                    </tr>
                    @endforelse

                </tbody>
            </table>

        </div>
    </div>
</div>
@if($news instanceof \Illuminate\Pagination\LengthAwarePaginator )
<div class='container'>
    <span class='d-flex justify-content-center'>{{$news->links('pagination::bootstrap-4')}}</span>
</div>
@endif
@endsection