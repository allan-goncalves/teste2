<template> 
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cadastro</div>

                    <div class="card-body">
                      <form action="/action_page.php">
                        <div class="form-group">
                            <label for="email">Nome</label>
                            <input type="text" class="form-control" id="nome">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd">
                        </div> 
                        <div class="form-group">
                            <label for="pwd">Confirmar Password:</label>
                            <input type="password" class="form-control" id="pwd">
                        </div> 
                        <button type="submit" class="btn btn-default">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
    export default {
       
    }
</script>
