<template>
    <div>
        <form-tarea-component @new="addTarea"></form-tarea-component>
        <tarea-component 
            v-for="(tarea, index) in tareas" 
            :key="tarea.index"
            :tarea="tarea"
            @delete="deleteTarea(index)"
            @update="updateTarea(index, ...arguments)">
        </tarea-component>   
    </div>
</template>

<script>
export default {
    data(){
        return{
            tareas: []
        }
    },
    mounted(){
        axios.get('/tareas').then(response => {
            this.tareas = response.data.tareas;
        });
    },
    methods: {
        addTarea(tarea){
            this.tareas.push(tarea);
        },
        deleteTarea(index){
            this.tareas.splice(index, 1);
        },
        updateTarea(index, tarea){
           this.tareas[index] = tarea;
        }
    },
}
</script>