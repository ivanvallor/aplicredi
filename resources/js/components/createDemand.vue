<template>
    <div>
        <input type="text" name="title" id="title" placeholder="Título">
        <input type="textbox" name="description" id="description" placeholder="Descrição">

        <button id="createDemand" name="createDemand" @click="createDemand()">Cadastrar</button>
    </div>
</template>

<script lang="js">
import axios from 'axios';

export default {
    methods: {
        createDemand(){
            axios.post('/demand/{demand}', {
                title: 'title',
                description: 'description',
                created_at: '',
                closed_at: '',
                request_by: '',
                answered_by: '',
                status: 'Aberto'
            })
        }
    }
}
</script>