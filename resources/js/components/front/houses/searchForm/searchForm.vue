<template>
    <v-form
            ref="form"
            v-model="valid"
            lazy-validation
    >
        <v-text-field
                v-model="search"
                label="Search"
                required
        ></v-text-field>
    </v-form>
</template>

<script>
    import { mapGetters } from 'vuex'
    import store from '~/store/index'
    import { api } from '~/config'
    import _ from 'lodash'

    export default {
        data: () => ({
            valid: true,
            search: '',
        }),
        methods: {
            loadHouses() {
                try {
                    store.dispatch('houses/getHouses', this.search)
                } catch (e) {
                    console.log('Error loadHouses', e);
                }
            },
            searchHandle: function () {
                this.loadHouses();
            },
        },

        watch: {
            search: _.debounce(function() {
                this.searchHandle();
            }, 300),
        },
        computed: mapGetters({

        }),
        mounted() {
            this.loadHouses();
        }
    }
</script>
