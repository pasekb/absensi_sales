@extends('layouts.app')
@section('title','Cari Absen')

@section('content')

<div class="container">
    @include('component.tab')
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
            tabindex="0">

            @include('component.form_absen')
            @include('component.form_search')

            <div class="row justify-content-center">
                <div class="col-md-12 container-table-custom">
                <a href="{{ url('export/'.$tanggal_awal.'/'.$tanggal_akhir.'/'.$sales_id2.'/'.$dealer_code) }}"
                class="btn custom-btn padding-btn my-3">EXPORT EXCEL</a>
                <a href="{{ url('pdf/'.$tanggal_awal.'/'.$tanggal_akhir.'/'.$sales_id2.'/'.$dealer_code) }}"
                class="btn custom-btn padding-btn my-3">GENERATE PDF</a>
                    <div class="table-responsive">
                        <table class="table table-custom" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Waktu</th>
                                    <th scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($no = 1)
                                @forelse ($data as $a)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$a->nama_sales}}</td>
                                    <td>{{$a->tanggal}}</td>
                                    <td>{{$a->waktu}}</td>
                                    <td>{{$a->keterangan}}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" style="text-align: center;">No data available</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- Absen Masuk --}}
        </div>
        @include('component.absen_off')
    </div>
</div>

@include('component.modal1')
@include('component.modal2')
@include('component.modal3')

@push('script')
<script>
    $(document).on('click', '.klik', function (e) {
        $('#sales_id').val($(this).attr('data-id'));
        $('#nama_sales').val($(this).attr('data-nama'));
        $('#exampleModal').modal('hide');
    });

</script>

<script>
    $(document).on('click', '.klik2', function (e) {
        $('#sales_id2').val($(this).attr('data-id2'));
        $('#nama_sales2').val($(this).attr('data-nama2'));
        $('#exampleModal2').modal('hide');
    });

</script>

<script>
    $(document).on('click', '.klik3', function (e) {
        $('#sales_id3').val($(this).attr('data-id3'));
        $('#nama_sales3').val($(this).attr('data-nama3'));
        $('#exampleModal3').modal('hide');
    });

</script>

<script>
    $(document).ready(function () {
        $('.tableSales').DataTable();
    });

</script>
@endpush


@endsection
