<template>
    <div class="">

           

        <div class="absolute top-0 left-0 max-w-xl">
            
        </div>


    </div>

</template>

<script>
    export default {
        name: "update-user",
        props: [
            'user' 
        ],
        data(){
            return {
                avatar: null,
                name : "",
                email : "",
                password:"",
                confirm: "",
                errors:null,
                passError: null,
            }
        },
        methods:{
            handleFileUpload(e){
                this.avatar = this.$refs.file.files[0];
            },
            updateUser()
            {
                console.log(this.avatar);
                axios.post(`/user/${this.user}/update`, {
                    name   : this.name,
                    email   : this.email,
                    password   : this.password,
                    avatar : this.avatar.name,
                }).then((res) =>{
                    console.log(res.data);
                }).catch((err) => {
                    this.errors = err.response.data;
                });
               
            }
        },
        mounted(){
            console.log(this.user.id);
        }
        
    }
</script>
