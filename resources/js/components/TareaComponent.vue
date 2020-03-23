<template>
    <div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card">
                    
                    <div class="card-header">Publicado en {{ tarea.created_at | formatDate }}</div>

                    <div class="card-body">
                        <input v-if="editDescription" type="text" name="description" class="form-control" v-model="tarea.description">
                        <p v-else>{{ tarea.description }}</p>
                    </div>

                    <div class="card-footer">
                        
                        <button v-if="editDescription" class="btn btn-success" v-on:click="onclickUpdate()">
                            Guardar
                        </button>  
                        <button v-else class="btn btn-primary" v-on:click="onclickEdit()">
                            Editar
                        </button> 

                        <button class="btn btn-danger" v-on:click="onClickDelete()">
                            Eliminar
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['tarea'],
        data(){
            return {
                        editMode: false
                    }
        },
        methods: {
            onClickDelete(){
                axios.delete(`/tareas/${this.tarea.id}`).then(() => {
                    this.$emit('delete')
                });
            },
            onclickEdit(){
                this.editMode = true; 
            },
            onclickUpdate(){

                const params = {
                    description: this.tarea.description
                };
                
                axios.put(`/tareas/${this.tarea.id}`, params).then(response => {
                    this.editMode = false;
                    const tarea = response.data;
                    this.$emit('update', tarea);
                });
            }
        }
    }
</script>
