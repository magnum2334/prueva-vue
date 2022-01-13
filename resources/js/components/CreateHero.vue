<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class=" col-4 my-4 text-center">
                <div class="card my-3">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <form @submit.prevent="create_hero" >
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <div class="from-group">
                                        <label> name hero</label>
                                        <input class="form-control" type="text" v-model="hero.name">
                                    </div>
                                    <div class="from-group">
                                        <div class="form-group">
                                          <label > powers</label>
                                            <textarea class="form-control" rows="3" v-model="hero.power"></textarea>
                                        </div>
                                    </div>
                                    <div class="from-group">
                                        <div class="form-group">
                                          <label > url_img</label>
                                            <textarea class="form-control" rows="3" v-model="hero.url"></textarea>
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
                url:'/heroes',                
            }
        },
        methods: {
            create_hero(){
                 axios.post(this.url,this.hero).then(response =>{
                    if(response){
                        this.hero.name = '';
                        this.hero.power = '';
                        this.hero.url = '';
                        swal({
                            title: "heroe Created!",
                            text: "created heroe  ",
                            icon: "success",
                        });     
                    }
                    this.$router.push({ name: 'Hero' })
                })
            }
        },
    }
</script>