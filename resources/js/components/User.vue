<template>
    <div class="">
        <tr class="border-2 border-gray-400 rounded">
            <td>
                <img @click.prevent="getSingleUser" class="h-16 w-16 rounded-full" :src="`http://localhost:8000/storage/users/${user.avatar}`">
            </td>
            <td class="text-gray-600 p-2">
              <a @click.prevent="getSingleUser" href="#">
                {{ user.name }}
              </a>
            </td>
            <td class="text-gray-600 p-2">{{ user.email }}</td>
            <td class="text-gray-600 p-2">{{ user.created_at }}</td>
            <td text-gray-600 p-2></td>
            <td class=""> 

              <form @submit.prevent="deleteUser()">
                  <button type="submit" class="bg-red-500 p-2 rounded-lg hover:text-indigo-100 flex flex-row items-center">
                    <svg class="w-6 h-6 text-white hover:text-indigo-100" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z"/></svg>
                    <span class="ml-2 text-white font-bold text-md">Drop</span>
                  </button>
              </form>

            </td>
          </tr>

            <div v-if="!isClose" class="w-screen absolute flex flex-row">
                <span @click.prevent="closeSingleModal" class="cursor-pointer absolute right-0 right-0 font-bold text-xl">X</span>
                <div >
                    <img :src="`http://localhost:8000/storage/users/${single.avatar}`">
                    <form @submit.prevent="deleteUser()">
                        <button type="submit" class="bg-red-500 p-2 rounded-lg hover:text-indigo-100 flex flex-row items-center">
                        <svg class="w-6 h-6 text-white hover:text-indigo-100" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z"/></svg>
                        <span class="ml-2 text-white font-bold text-md">Drop</span>
                      </button>
                    </form>
                </div>

                <div class="flex flex-col">
                    <h1>{{ single.name }}</h1>
                    <span class="">{{ single.created_at }}</span>
                    <span>{{ single.email }}</span>
                </div>

            </div>
    </div>

</template>

<script>
    export default {
        name: "user",
        props: [
            'user' , 'page'
        ],
        data(){
            return {
                single : null,
                isClose : true
            }
        },
        computed:{
            
        },
        methods:{
            
            getSingleUser()
            {
                axios.get(`/user/${this.user.id}`, {}).then((res) =>{
                    console.log(res.data);
                    this.isClose = false;
                    this.single = res.data.user;
                }).catch((err) => {
                    
                });
               
            },
            closeSingleModal()
            {
                this.isClose = true;
            },
            deleteUser(){
                axios.post(`/user/${this.user.id}/delete`, {}).then((res) => {
                    if(res.data.user.id === this.user.id)
                    {
                        window.location = `http://localhost:8000/admin/home?page=${this.page}`;
                    }
                }).catch((err) => {
                    
                });
            }
        },
        mounted(){
            
        }
        
    }
</script>
