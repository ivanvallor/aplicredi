<template>
    <div>
        <form id="singin-form" name="singin-form" action="">
            <input type="text" id="name" name="name" placeholder="Nome"><br>
            <input type="password" name="password" id="password" placeholder="Senha"><br>
            <button id="singin" name="singin" @click="clickSingin()">Logar</button>
            <button id="singup" name="singup" @click="">Cadastrar-se</button>
        </form>

    </div>
</template>

<script>
import axios from 'axios';

export default {
    methods: {
        clickSingin() {
            axios.get('/user/{name}', {
                name: 'name',
                password: 'password'
            }).then(function (response) {
                console.log(response);
            }).catch(function (error){
                console.log(error);
            });
        }
    }
}
</script>