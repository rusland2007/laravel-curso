<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form @submit.prevent="agregar">
                    <h3>Registrar alumno</h3> 

                    <input type="text" class="form-control mb-2" 
                        placeholder="Nombre" v-model="alumno.nombre">

                    <input type="text" class="form-control mb-2" 
                        placeholder="Apellido Paterno" v-model="alumno.apepat">

                    <input type="text" class="form-control mb-2" 
                        placeholder="Apellido Materno" v-model="alumno.apemat">

                    <input type="date" class="form-control mb-2" 
                        placeholder="Fecha naciemiento" v-model="alumno.fechanac">


                    <input type="text" class="form-control mb-2" 
                        placeholder="Documento de identidad" v-model="alumno.docidentidad">

                    <button class="btn btn-primary" type="submit">Agregar</button>
                </form>


                
            </div>
        </div>
    </div>
</template>

<script>

    export default {
       data() {
           return {
               //ARCHIVOS TEMPORALES PARA PODER VISUALIZAR
               alumnos: [],
               alumno: {nombre: '', apepat: '', apemat: '', fechanac: '', docidentidad: ''}
           }
       },
       created() {
           axios.get('/alumnos')
           .then(res => {
               //reemplazamos en el array notas[]
                this.alumnos = res.data;
           })
       },
       methods:{
            agregar() {
                //console.log(this.nota.nombre, this.nota.descripcion);
                
                const alumnoNuevo = this.alumno;

                //PARA LIMPIAR LOS CAMPOS
                //this.nota = {nombre: '', descripcion: ''};    
                axios.post('/alumnos', alumnoNuevo)
                    .then((res) => {
                        console.log("Agregado", res);
                        //const notaServidor = res.data;
                        //this.notas.push(notaServidor);
                    })

            },
            
       }
    }
</script>
