<template>
    <div>
        <v-flex lg12 sm12 xs12>
            <search-form />
            <houses-list />
        </v-flex>
    </div>
</template>
<script>
import { mapGetters } from 'vuex'
import searchForm from './searchForm/searchForm'
import housesList from './housesList/housesList'

export default {
    data: () => ({}),
    methods: {},
    mounted() {},
    beforeDestroy() {},
    computed: mapGetters({}),
    components: {
        searchForm,
        housesList,
    },
}
</script>