<template>
    <div class="alert alert-success alert-flash" role="alert" v-show="show">
        <strong>Success!</strong> {{body}}
    </div>
</template>

<script>
    export default {
        // accept property from the html file
    	props:['message'],
        data(){
        	return{
        		body:'',
        		show:false
        	}
        },
        created(){
        	if(this.message){
        		this.flash(this.message);
        	}
        	window.events.$on('flash', message => this.flash(message));
        },
        methods:{
        	flash(message){
        		this.body = message;
        		this.show = true;

        		this.hide();
        	},
        	hide(){
        		setTimeout(() => {
        			this.show = false;
        		}, 3000); //it will disappers after 3 seconds
        	}
        }
    }
</script>
<style type="text/css">
	.alert-flash{
		position: fixed;
		bottom: 25px;
		right: 25px;
	}
</style>
