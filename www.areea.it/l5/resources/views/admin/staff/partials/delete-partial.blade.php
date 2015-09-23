<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>Cancella </strong>
            </div>
            <div class="panel-body">
                <div class="col-lg-4 col-lg-offset-5">
                    
                    <form method="POST" action="/admin/staff/{{ $staff->id }}/rimuovi" id="staff_deletion_form">
                        {{ csrf_field() }}
                 

                    <button type="submit" class="btn btn-danger">Cancella Permanenetemente</button>

                </form>
            </div>
        </div>
    </div>
    
</div>