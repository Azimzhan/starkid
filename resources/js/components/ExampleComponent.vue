<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example components.
                        <button v-on:click="addCount">Click</button>
                        <p>{{counter}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
        return {
            counter: 0
        };
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            addCount: function(){
                
                console.log(this.counter+=1)
            }
        }
    }
</script>
