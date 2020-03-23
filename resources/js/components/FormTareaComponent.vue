<template>
    <div>
         <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">¿Que tarea realizaras ahora?</div>

                    <div class="card-body">
                        <form action="" v-on:submit.prevent="newTarea()">
                            <div class="from-group mb-2">
                                <label for="tarea">Describe la tarea:</label>
                                <input  type="text" 
                                        class="form-control" 
                                        name="tarea" 
                                        id="tarea"
                                        v-model="description">
                            </div>
                            <button type="submit" class="btn btn-primary">Añadir tarea</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            description: ''
        }
    },
    methods: {
        newTarea(){
            const params = {
                description: this.description
            };

            this.description = ''
            axios.post('/tareas', params).then(response => {

                const tarea = response.data;
                this.$emit('new',tarea);

            } );
        }
    },
}
</script>