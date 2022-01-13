<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class=" col-4 my-4 text-center">
                <div class="card-tilte">
                    <router-link class="btn btn-success mx-2" to = "Create">Go to create a heroe</router-link>    
                </div>
                <div class="card my-3" v-bind="hero" v-for="hero in heroes" :key="hero.id">
                    <div class="card-header">{{hero.name}}</div>
                    <div class="card-body">
                        <div >{{hero.power}}</div>
                    </div>
                    <div class="card-footer">
                        <div >{{hero.url}}</div>
                        <button @click="destroy(hero.id)" class="btn btn-danger text-center">Delete</button>
                        <!-- <router-link :to = "{name :'Edit', params:{id:hero.id}}" class="btn btn-dark mx-2">Edit</router-link> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                heroes :[],
                url:'/heroes',
                urlDelete:"/heroes/"
            }
        },
        created() {
            this.List();
        },
        methods: {
            List(){
                axios.get(this.url).then(Response => {
                    this.heroes = Response.data;
                })
            },
            destroy(id){
            
                axios.delete(this.urlDelete+id).then(function(Response){       
                    console.log(Response);
                }).catch(function(Error){
                    console.log(Error);
                });
                this.List()
            }
        },
    }
</script>