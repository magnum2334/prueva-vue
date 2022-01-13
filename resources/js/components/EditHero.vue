<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class=" col-4 my-4 text-center">
                <div class="card my-3">
                    <div class="card-header">edit post</div>
                    <div class="card-body">
                        <form @submit.prevent="update_heroe" >
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <div class="from-group">
                                        <label> name</label>
                                        <input class="form-control" type="text" v-model="hero.name">
                                    </div>
                                    <div class="from-group">
                                        <div class="form-group">
                                          <label > power</label>
                                          <input class="form-control" type="text" v-model="hero.power">
                                        </div>
                                    </div>
                                    <div class="from-group">
                                        <div class="form-group">
                                          <label >url</label>
                                          <input class="form-control" type="text" v-model="hero.url">
                                        </div>
                                    </div>
                                    <div class="col-12 my-2">
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                       
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
            hero :{
                name:'',
                power:'',
                url:''
            },
            url:'/heroes/' 
        }
    },
    mounted() {
        this.list();
    },
    methods: {
        list(){
            axios.get(this.url+this.$route.params.id)
            .then(Response =>{
                console.log(Response)
                this.hero = Response.data;
            })
        },
        update_heroe(){
            axios.put(this.url+this.$route.params.id, this.hero)
            .then(Response =>{
                swal({
                    title: "post edited !",
                    text: "edited post  ",
                    icon: "success",
                });  
                this.$router.push({ name: 'Hero' })
            } )
        }
    },
}
</script>