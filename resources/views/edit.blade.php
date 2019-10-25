<form action="POST" v-on:submit.prevent="updateKeep(fillKeep.id)">
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Actualizar tarea</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="keep">Editar tarea</label>
                    <input type="text" name="keep" class="form-control" v-model="fillKeep.keep">
                    <span v-for="error in errors" class="text-danger">@{{ error }}</span>
                </div>
                <div class="modal-footer">            
                    <input type="submit" class="btn btn-success" value="Actualizar"/>
                </div>
            </div>
        </div>
    </div>
</form>