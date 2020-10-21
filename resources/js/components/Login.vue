<template> 
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                     

                    <div class="card-body">
                      <form action="/action_page.php">
                        <div class="form-group"> 
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox"> Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-default">Entrar</button>
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
