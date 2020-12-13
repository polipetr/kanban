<template>
    <div>
        <a href="/column/create"><button class="button">Add Column </button></a>
        <a href="/card/create"><button class="button">Add Card</button></a>
        <a href="/dump"><button class="button">Dump database</button></a>
        <div class="columns">
            <div class="columns__item" v-for="(column, columnIndex) in columns" :key="columnIndex">
                <h1>{{ column.title }}</h1>
                <div class="columns__card"  v-for="(card, cardIndex) in column.cards" :key="cardIndex">
                    <h1 class="columns__title">
                         <i class="arrow left" v-on:click="moveCard(columnIndex, cardIndex, -1)"></i>
                             {{ card.title }}
                         <i class="arrow right" v-on:click="moveCard(columnIndex, cardIndex, 1)"></i>
                    </h1>
    
                    <span v-on:click="deleteCard(column.id, card.id)">x</span>
                </div>
                
            </div>
        </div>
    </div>
</template>
<script>

import draggable from "vuedraggable";

export default {
    data() {
        return {
            columns: [],
            current: '',
            task: {
                id: '',
                body: ''
            }
        };
    },
    
    created() {
        this.fetchColumns();
    },
    
    methods: {
        fetchColumns() {
            axios.get('api/columns').then((res) => {
                this.columns = res.data.data;
            });
        },
        updateCard(column, card, data) {
           
            axios.put(`api/columns/${column}/card/${card}`,
            {
                title: data.title,
                description: data.description
            })
                .then((res) => {
                   this.fetchColumns();
            })
            .catch((err) => console.error(err));
        },
        moveCard(column, card, pointer) {
            this.updateCard(this.columns[column + pointer].id, this.columns[column].cards[card].id, this.columns[column].cards[card])
        },
        deleteCard(column, card) {
            axios.delete(`api/columns/${column}/card/${card}`)
                .then((res) => {
                   this.fetchColumns();
                })
                .catch((err) => console.error(err));
        }
    }
}
</script>