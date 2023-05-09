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
      console.log(this.todoItem);
      const data = {
        // task: this.todoItem,
        // done: false
        todoItem: this.todoItem
      };
      axios.post(this.apiUrl, data, { headers: { 'Content-Type': 'multipart/form-data' } }).then((res) => {
        this.todoItem = '';
        //console.log(res.data);
        this.todoList = res.data;
      });
    },
    toggleTaskDone(index) {

      const data = {
        // task: this.todoItem,
        // done: false
        updateItem: index
      };
      axios.post(this.apiUrl, data, { headers: { 'Content-Type': 'multipart/form-data' } }).then((res) => {
        //console.log(res.data);
        this.todoList = res.data;
      });
      this.todoList[index] = !this.todoList[index]

    },
    deleteTask(index) {
      const data = {
        deleteItem: index
      }
      axios.post(this.apiUrl, data, { headers: { 'Content-Type': 'multipart/form-data' } }).then((res) => {
        //console.log(res.data);
        this.todoList = res.data;
      });
    }
  },
  mounted() {
    this.readlist();
  },
}).mount('#app');