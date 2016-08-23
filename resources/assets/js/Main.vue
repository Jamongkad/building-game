<template>
    <div>
        <div class="chat-conversation">
            <!--
            <div class="conversation-header">
                <p>Dark Patterns</p>
            </div>
            -->
            <ul class="conversation-body"> 
                <li v-for="message in messages" track-by="$index">
                    <p>{{{ message.desc }}}</p>
                    <div v-if="message.ifTrueDecisionId && message.ifFalseDecisionId">
                        <button type="button" class="btn btn-primary btn-block">{{ buttonLabel(message.ifTrueDecisionId).desc }}</button>
                        <button type="button" class="btn btn-success btn-block">{{ buttonLabel(message.ifFalseDecisionId).desc }}</button>
                    </div>
                </li>
                <div style="height:20px"></div>
            </ul>
        </div>
        <!--
        <textarea v-model="newMessage" v-on:keyup.enter="addMessage"></textarea>
        -->
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: "Poddeh the Spritz",
            myButtonLabel: '',
            messages: [],
        } 
    },
    ready() { 
        this.$http.get('/choices').then((response) => {
            var result = response.data;
            for(var i = 0; i < result.length; i++) {
                var storyData = result[i];
                this.messages.push(storyData);     
            } 
        }, (response) => { 
            console.log("Failed");
        });
    },
    computed: { 
    },
    methods: { 
        addMessage() {
            var msg = this.newMessage.trim();
            this.messages.push(msg);
            this.newMessage = '';
        },
        buttonLabel(id) {
            var result = {};
            $.ajax({
                url: '/choice/' + id,  
                type: 'GET',
                async: false,
                success: function(data) {
                    result = data;
                }
            });

            return result;
        }
    },
    watch: {
        'messages': function(val, oldval) {
            var mydiv = $('.conversation-body');
            mydiv.scrollTop(mydiv.prop("scrollHeight"));
        }
    }
}
</script>

<style>
</style>
