<template>
    <div class="container mx-auto p-2">

        <div class="">Login</div>

        <div class="" v-for="e in error">
            <form @submit.prevent="adminLogin">

                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="email">
                        Email
                      </label>
                    </div>
                    <div class="md:w-2/3">
                      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" v-model="email" id="email" type="email" placeholder="Jane.@gmail.com" autofocus>
                    </div>

                    <div  class="border-red-600">
                        <p>{{ e }}</p>
                    </div>
                </div>

                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="password">
                        Password
                      </label>
                    </div>
                    <div class="md:w-2/3">
                      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" v-model="password" id="password" type="password" placeholder="*********" autofocus>
                    </div>
                </div>

                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                        Sign Up
                      </button>
                    </div>
                  </div>
            </form>
        </div>

    </div>

</template>

<script>
    export default {
        name: "adminlogin",
        props: [],
        data(){
            return {
                email: "",
                password: "",
                error: []
            }
        },
        methods:{
            adminLogin(){
                axios.post('/adminlogin', {
                    email: this.email,
                    password: this.password,
                }).then((res) => {
                    console.log(res.data);
                    if(res.data){
                        this.$router.push('/verify');
                    }
                }).catch((err) => {
                    this.error.push(err);
                })
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
