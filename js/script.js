const { createApp } = Vue;

createApp({
  data() {
    return {
      title: 'ToDoList',
      todoList: [],
      apiUrl: "server.php",
      todoItem: "",
    };
  },
  methods: {
    readlist() {
      axios.get(this.apiUrl).then((res) => {
        //console.log(res.data);
        this.todoList = res.data;
      });
    },
    updateList() {
      console.log(this.todoItem)
    }
  },
  mounted() {
    this.readlist();
  },
}).mount('#app');