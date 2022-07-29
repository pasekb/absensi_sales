<!--modal 2-->
<div class="modal fade modalData" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-custom">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table id="modal-filter-select" class="display table tableSales table-custom" width="100%">
                    <thead>
                        <tr>
                            <th>Nama Sales</th>
                            <th>Dealer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($sale as $o)
                        <tr data-id2="{{ $o->id}}" data-nama2="{{ $o->nama_sales }}" class="klik2">
                            <td>{{ $o->nama_sales }}</td>
                            <td>{{ $o->dealer_name }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" style="text-align: center;">No data available</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary custom-btn padding-btn">
                    <img src="{{ asset('img/save.png') }}">&nbsp;Save changes
                </button>
            </div>
        </div>
    </div>
</div>
<!--modal2-->