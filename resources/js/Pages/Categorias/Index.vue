<template>
    <div>
        <h1>Categorías</h1>
        <ul>
            <li v-for="categoria in categorias" :key="categoria.id">{{ categoria.name }}</li>
        </ul>
        <Link href="/categoria/create">Crear nueva categoría</Link>
    </div>
</template>

<script>
export default {
    props: {
        categorias: Array
    }
}
</script>