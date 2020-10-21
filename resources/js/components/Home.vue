<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Conversor de Moedas</div>
          <div class="card-body">
            <div class="col-md-12">
              <div class="form-inline">
                <div class="col-md-6 form-group">
                  <label for="quantidade">Quantidade</label>
                  <input
                    type="number"
                    min="1"
                    v-on:click="calcular"
                    v-model="quantidade"
                    class="form-control"
                    id="quantidade"
                  />
                </div>
                <div class="col-md-6 form-group">
                  <select
                    v-model="select1"
                    v-on:change="calcular"
                    class="browser-default custom-select form-control"
                  >
                    <option selected>Moeda</option>
                    <option
                      v-for="(msg, name) in options"
                      :key="msg"
                      :value="[name, msg]"
                    >
                      {{ name }} - {{ msg }}
                    </option>
                  </select>
                </div>
              </div>

              <div class="form-inline">
                <div class="col-md-6 form-group">
                  <label for="">Quantidade</label>
                  <input
                    type="text"
                    readonly
                    v-model="resultado"
                    class="form-control"
                    id=""
                  />
                </div>
                <div class="col-md-6 form-group">
                  <select
                    v-model="select2"
                    v-on:change="calcular"
                    class="browser-default custom-select form-control"
                  >
                    <option selected>Moeda 2</option>
                    <option
                      v-for="(msg2, name2) in options2"
                      :key="msg2"
                      :value="[name2, msg2]"
                    >
                      {{ name2 }} - {{ msg2 }}
                    </option>
                  </select>
                </div>
              </div>
            </div>
          </div>
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
      options: [],
      options2: [],
      select1: null,
      select2: null,
      quantidade: null,
      resultado: null,
    };
  },
  mounted() {
    this.getLista();
  },
  methods: {
    getLista() {
      axios
        .get("https://api.exchangeratesapi.io/latest")
        .then((response) => {
          this.options = response.data.rates;
          this.options2 = response.data.rates;
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    calcular() {
      if (!this.quantidade || !this.select1 || !this.select2) {
        return false;
      }

      var qtd = this.quantidade;
      var nome1 = this.select1[0];
      var moeda1 = this.select1[1];

      var nome2 = this.select2[0];
      var moeda2 = this.select2[1];

      var resultado = (qtd * moeda2) / moeda1;
      this.resultado = resultado.toFixed(2);
      console.log(moeda1, moeda2, resultado);
      axios
        .post("/calcular", {
          moeda1: moeda1,
          moeda2: moeda2,
          nome1: nome1,
          nome2: nome2,
          quantidade: qtd,
          resultado: resultado,
          _token: csrfToken,
        })
        .then(function (response) {
          console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        });
    },
  },
};
</script>
