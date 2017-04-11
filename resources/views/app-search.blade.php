<form class="row">
    @is('admin')
        <div class="col-md-2">
            <button type="button" class="btn btn-primary btn-sm btn-block" v-on="click: create = true">Adicionar</button>
        </div>

        <div class="form-group col-md-10">
            <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
                <input type="text" class="form-control" placeholder="Digite a descrição ou ramal" v-model="searchTerm">
            </div>
        </div>
    @else
        <div class="form-group col-md-12">
            <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
                <input type="text" class="form-control" placeholder="Digite a descrição ou ramal" v-model="searchTerm">
            </div>
        </div>
    @endis
</form>