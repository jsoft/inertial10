<template>
  <div>
    <h1>Crear Nueva Categoría</h1>

    <form @submit.prevent="submit">
      <div>
        <label for="name">Nombre de la categoría:</label>
        <input
          v-model="form.name"
          id="name"
          type="text"
          class="form-input"
        />
        <span v-if="form.errors.name" class="text-red-500">{{ form.errors.name }}</span>
      </div>

      <button type="submit" class="btn-submit">Crear</button>
    </form>

    <Link href="/categories" class="btn-back">Volver al listado</Link>
  </div>
</template>

<script>
import { useForm, Link } from '@inertiajs/vue3'

export default {
  setup() {
    const form = useForm({
      name: '',
    })

    function submit() {
      form.post('/categories', {
        onSuccess: () => form.reset(),
      })
    }

    return { form, submit }
  },
}
</script>

<style scoped>
/* Estilos básicos */
.form-input {
  margin-bottom: 10px;
  padding: 8px;
  border: 1px solid #ddd;
}
.btn-submit, .btn-back {
  margin-top: 10px;
  padding: 10px 15px;
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
}
.btn-back {
  background-color: #d33;
}
.text-red-500 {
  color: #f00;
}
</style>