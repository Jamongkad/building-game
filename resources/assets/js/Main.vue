<template>
    <div>
        <div class="chat-conversation">
            <div class="conversation-header">
                <h3>The Building</h3>
            </div>		
			<div style="height:20px"></div>
            <ul class="conversation-body"> 
                <li v-for="message in messages" track-by="$index">
                    <p v-if="message.gameObject == 'text'">
					    {{{ message.desc }}}	
					</p>
					<p v-if="message.gameObject == 'controls'">
						<button type="button" class="btn btn-response btn-block"	
						@click="decide(message)" style="white-space:normal">
							{{ message.desc }}
						</button>
					</p>
                </li>
				<div class="text-center"><img v-show="loadingSVG" src="/img/ellipsis.svg" /></div>
				<div style="height:20px"></div>
				<div id="end"></div>
            </ul>
        </div>
    </div>
</template>

<script>
import {moveStory} from './helpers.js';
export default {
    data() {
        return {
            showButtons: false,
			loadingSVG: false,
			segmentId: 0,
            messages: [],
			buttons: [],
        } 
    },
    ready() { 
		moveStory(1, this);
    },
    computed: { 
    },
    methods: { 
        decide(button) {
			console.log(button.desc);
			console.log(button.choiceToSegment);
		    moveStory(button.choiceToSegment, this);
        },
    },
    watch: {
        'messages': function(val, oldval) {
			$("body").animate({scrollTop: $("#end").offset().top }, 1000);
        }
    }
}
</script>

<style>
</style>
