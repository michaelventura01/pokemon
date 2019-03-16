<template>
    <div class = "row">
        <div class="col-sm" v-for="pokemon in pokemons">
            <div class="card text-center" style="width:15rem; padding:20px; margin:20px; ">
                <img style = "height:100px; width:100px; background-color: lightgray; margin:20px;" class="card-img-top rounded-circle mx-auto d-block" src="#">
                <div class="card-body">
                    <h5 class="card-title">{{pokemon.name}}</h5>
                    <p>{{pokemon.descripcion}}</p>   
                    <a class="btn btn-primary" href="/trainers/">Mas Informacion</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                pokemons:[
                    {id: 1, name: "pikoso", descripcion:"cuchara"},
                    {id: 2, name: "pepaso", descripcion:"iguana"}
                ]
            }
        },
        mounted(){
            console.log('component mounted.')
        }
    }
</script>