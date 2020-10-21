<template> 
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Histórico</div>

                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                            <tr> 	 
                            <th scope="col">Usuário</th>
                            <th scope="col">Data</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Moeda 1/Valor</th> 
                            <th scope="col">Moeda 2/Valor</th>
                            <th scope="col">Resultado </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                             
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            
                             
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      lista: [],  
    };
  },
  mounted() {
    
    this.getLista();
  },
  methods: {
    getLista() {
       
      axios
        .get("historico")
        .then((response) => {
         console.log(response.data.rates); 
        })
        .catch(function (error) {
          console.log(error);
        });
    },
   
  },
};
</script>