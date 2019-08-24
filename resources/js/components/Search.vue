<template>
    <div class="">
        <form @submit.prevent="searchUser">

          <div class="flex flex-row items-baseline">
            <input type="text" class="px-4 py-2 bg-indigo-500 text-white rounded-l-full" name="search" v-model="key">
            <button type="submit" class="px-2 py-2 bg-indigo-500 text-white rounded-r-full">Search</button>
          </div>
            
        </form>



        <div v-if="isOpen" class="flex flex-col">
            <div>
                <h3>Search for {{ key }} : {{ results.length }}</h3>
                <span @click="closeSearchModal" class="font-bold">X</span>
            </div>
            <div v-for="r in results">
                <img :src="`http://localhost:8000/storage/users/${r.avatar}`">
                <span class="">{{ r.name }}</span>
            </div>
            
        </div>
    </div>
</template>

<script>
    export default {
        name: "search",
        props: [

        ],
        data(){
            return {
                key: "",
                results : null,
                isClose : true,
                isOpen  : false
            }
        },
        computed:{
            
        },
        methods:{
            closeSearchModal()
            {
                this.isOpen = false;
            },
            searchUser()
            {
                axios.get(`/search/${this.key}`, {}).then((res) =>{
                    this.results = res.data.users;
                    this.key = res.data.key;
                    this.isOpen  = true;
                }).catch((err) => {
                    
                });
               
            },
            closeSingleModal()
            {
                this.isClose = true;
            }
        },
        mounted(){
            
        }
        
    }
</script>
