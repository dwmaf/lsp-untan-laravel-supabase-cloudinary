<!-- Modal -->
<div class="modal fade" id="modal-edit-guest" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn btn-secondary" id="close-modal2">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-responsive-sm">
                    <thead>
                        <tr >
                            <th>Kode Unit</th>
                            <th>Judul Unit</th>
                        </tr>
                    </thead>
                    <tbody id="getSkemaUnitKompetensi">

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="close-modal" data-dismiss="modal">TUTUP</button>
            </div>
        </div>
    </div>
</div>

<script>
    //button create show event
    $('body').on('click', '#btn-show-unitk-guest', function () {

        let skema_id = $(this).data('id');

        //fetch detail post with ajax
        $.ajax({
            url: `/skema/${skema_id}`,
            type: "GET",
            cache: false,
            success:function(response){
                // console.log(response);
                // console.log(response.skema[0].nama_skema);
                let table = "";
                const dataItem = response.unik;
                table = `${dataItem.map((m,i) => 
                        `<tr>
                            <td>${m.kode_unit}</td>    
                            <td>${m.judul_unit}</td>       
                        </tr>`)}`;
                $('tbody#getSkemaUnitKompetensi').html(table);
                $('#exampleModalLabel').html('Unit Kompetensi '+response.skema[0].nama_skema);
                //buka modal
                $('#modal-edit-guest').modal('show');
            }
        });
    });
    // nutup modal
    $('#close-modal').click(function(e) {
        e.preventDefault();
        $('#modal-edit-guest').modal('hide');
    });
    $('#close-modal2').click(function(e) {
        e.preventDefault();
        $('#modal-edit-guest').modal('hide');
    });
</script>