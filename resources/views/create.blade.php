<form action="POST" v-on:submit.prevent="createKeep">
    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nueva tarea</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="keep">Crear tarea</label>
                    <input type="text" name="keep" class="form-control" v-model="newKeep">
                    <span v-for="error in errors" class="text-danger">@{{ error }}</span>
                </div>
                <div class="modal-footer">            
                    <input type="submit" class="btn btn-primary" value="Guardar"/>
                </div>
            </div>
        </div>
    </div>
</form>