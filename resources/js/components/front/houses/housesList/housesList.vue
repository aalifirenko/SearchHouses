<template>
    <v-card
            class="mx-auto"
            max-width="400"
            tile
    >
        <v-list-item two-line v-for="houseItem in housesList.data" :key="houseItem.id">
            <v-list-item-content>
                <v-list-item-title>{{ houseItem.name }}</v-list-item-title>
                <v-list-item-subtitle>price: ${{ houseItem.price_text }}</v-list-item-subtitle>
                <v-list-item-subtitle>bedrooms: {{ houseItem.bedrooms }}</v-list-item-subtitle>
                <v-list-item-subtitle>bathrooms: {{ houseItem.bathrooms }}</v-list-item-subtitle>
                <v-list-item-subtitle>storeys: {{ houseItem.storeys }}</v-list-item-subtitle>
                <v-list-item-subtitle>garages: {{ houseItem.garages }}</v-list-item-subtitle>
            </v-list-item-content>
        </v-list-item>
    </v-card>
</template>

<script>
    import { mapGetters } from 'vuex'
    import { api } from '~/config'

    export default {
        data: () => ({}),
        methods: {},

        watch: {
            housesList: function (val) {
                console.log('watch housesList', val)
            }
        },
        computed: mapGetters({
            housesList: 'houses/list',
        }),
        mounted() {

        }
    }
</script>
