<div class="alert alert-danger alert-dismissible fade in" style="display: none;" v-show="errors.permission">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <span class="glyphicon glyphicon-block"></span> Você não tem permissão para adicionar um ramal.
</div>

<div class="panel panel-default fade in" style="display: none" v-show="create">
    <div class="panel-heading">
        <h3 class="panel-title">Adicionar ramal</h3>
    </div>

    <div class="panel-body">
        <form method="POST" action="/api/phones" class="form-horizontal" v-on="submit: save($event)">
            <div class="form-group">
                <label for="inputDescription" class="col-sm-2 control-label">Descrição</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputDescription" placeholder="Digite aqui a descrição" v-model="phone.description">

                    <p class="text-danger" style="margin: 0" v-repeat="error:errors.description">@{{ error }}</p>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPhone" class="col-sm-2 control-label">Telefone</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPhone" placeholder="3416-3100" v-model="phone.phone" v-on="keyup:resetErrors">

                    <p class="text-danger" style="margin: 0" v-repeat="error:errors.phone">@{{ error }}</p>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <button type="button" class="btn btn-danger" v-on="click: cancel">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="alert alert-success alert-dismissible fade in" style="display: none;" v-show="success">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <span class="glyphicon glyphicon-check"></span> Ramal adicionado com sucesso.
</div>
