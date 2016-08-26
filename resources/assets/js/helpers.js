export function moveStory(segmentId, obj) { 
    obj.$http.get('/narration/' + segmentId).then((response) => {
        var result = response.data;
        var cursorLength = result.length;

	    obj.loadingSVG = true;

        var myTimer = function(i, myObj) { 
            setTimeout(function(){
                var storyData = result[i];
                myObj.segmentId = storyData.segmentId;
                myObj.messages.push(storyData);     

                if(i >= (cursorLength - 1)) {	
                    releaseButtons(obj);
                }
            }, getRandomInt(1700, 2000) * i);
        }

        for(var i = 0; i < result.length; i++) {
            myTimer(i, obj);
        } 

        clearTimeout(myTimer);
    });

    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function releaseButtons(myObj) {
        myObj.loadingSVG = false;
        myObj.$http.get('/responses/' + myObj.segmentId).then((response) => {
            var result = response.data;
            for(var i = 0; i < result.length; i++) {
                console.log(result[i]);
                //obj.buttons.push(result[i]);
                myObj.messages.push(result[i]);
            }
        });
    }
}
