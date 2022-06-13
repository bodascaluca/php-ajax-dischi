const app = new Vue({
    el:"#root",
    data:{
        database:[]
    },
    created(){
        axios.get("http://localhost:8888/php-ajax-dischi/server.php").then((resp)=>{
            this.database = resp.data;
        })
    }
})