<template>
    <b-container class="container">
        <!-- <router-view></router-view> -->
        <div>
            <singin v-if="singin"></singin>
            <singup v-if="singup"></singup>
            <demand v-if="demand"></demand>
            <createDemand v-if="createDemand"></createDemand>
            
        </div>
    </b-container>
</template>

<script>

import singin from './components/singin';
import singup from './components/singup.vue';
import demand from './components/demand.vue';
import createDemand from './components/createDemand.vue';
// import axios from './api';
// import { response } from 'express';


export default {
    name: "templatePadrao",
    data(){
        return{
            singin: true,
            singup: true,
            demand: true,
            createDemand: false
        }
    },
    components: {
        singin,
        singup,
        demand,
        createDemand
    },
    // mounted(){
    //     axios.post('/user',{
    //         name: 'admin',
    //         email: 'admin@admin.com',
    //         password: 'admin'
    //     }).then(function(response){
    //         console.log(response);
    //     })
    // },
    
    methods: {
        
    }
};
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>

<style>
.container {
    margin-top: 40px;
}

.form-control {
    margin-bottom: 10px;
}

label {
    margin-bottom: 5px;
    font-weight: bold;
}

.multiselect__tags {
    height: 40px;
    display: block;
    padding: 0;
    border-radius: 5px;
    background: #fff;
    font-size: 14px;
    width: 100%;
    padding: 8px;
    border: 1px solid #ced4da;
}

.multiselect {
    margin-bottom: 15px;
}

.multiselect__tag {
    background: #198754;
}
</style>
