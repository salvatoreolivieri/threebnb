<template>

    <div class="text-center pagination-container">

        <!-- Inserire  v-if="pagination.current != 1" OPPURE :disabled-->
        <button
            class="custom-button"
            :disabled = "savedPagination.current === 1"
            @click="$emit('previousPage', savedPagination.current - 1)">
            <i class="fa-solid fa-arrow-left"></i>
        </button>

        <!-- Inserire v-if="pagination.current != pagination.last" OPPURE :disabled-->
        <button
            class="custom-button"
            :disabled = "savedPagination.current === savedPagination.last"
            @click="$emit('nextPage', savedPagination.current + 1)">
            <i class="fa-solid fa-arrow-right"></i>
        </button>

    </div>

</template>

<script>
export default {

    name: 'PaginationComp',

    data(){
        return{
            savedPagination: {
                current: null,
                last: null
            },
            showPagination: false
        }
    },

    props:{
        pagination:{
            type: Object,
            Required: true
        },
    },

    watch:{
        pagination(){
            console.log(this.pagination, 'PAGINAZIONE');

            this.savedPagination.current = this.pagination.current;
            this.savedPagination.last = this.pagination.last;

            console.log(this.savedPagination, 'PAGINAZIONE SALVATA');

        }
    }

}
</script>

<style lang="scss" scoped>

.pagination-container{

    .custom-button{

        border: none;
        border-radius: 10px;
        padding: 20px;
        width: 64px;
        margin-right: 5px;

    }

}

</style>
