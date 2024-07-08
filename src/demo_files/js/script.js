function ajaxRequest(url, data, type = "GET") {
    return new Promise((resolve, reject) => {
        let xhr = new XMLHttpRequest();
        var formData = new FormData();
        for (var key in data) {
            formData.append(key, data[key]);
        }
        // Making our connection to server
        xhr.open(type, url, true);
        // Sending our request


        // function execute after request is successful
        xhr.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                resolve(this.responseText);
            }
        }
        xhr.onerror = function () { 
            reject({status:0,message:"Network Error"}); 
          }; 
        // Sending our request
        xhr.send(formData);
    })
}

function postData(postUrl,data){

    var form = document.createElement("form");
    // set the form attributes
    form.setAttribute("method", "POST");
    form.setAttribute("action", postUrl);
    // create a new input element
    data.forEach(element => {
        var input = document.createElement("input");
        let name = element.name;
        let value = element.value;
        // set the input attributes
        input.setAttribute("type", "hidden");
        input.setAttribute("name", name);
        input.setAttribute("value", value);

    // add the input to the form
    form.appendChild(input);
    });
    

    // add the form to the document body
    document.body.appendChild(form);

    // submit the form
    form.submit();
}

function sessionval()
{
    $.ajax({
        url: "../session_unset.php",
        type:'post',
        data:'', 
        success: function(result){
    	
        }
    });
}
function onApplyNowSubmitEapply(token_time,rsvpCode,url,applicant_request_token)
{
    let button = document.getElementsByClassName("applylink");
    for (let i = 0; i < button.length; i++) {
        button[i].addEventListener("click", function () {
            const currentTimestamp = Math.floor(new Date().getTime() / 1000) - 480; // subtract 9 minutes from current time
            const postUrl = document.getElementsByClassName("applylink")[i].dataset["url"];

            //check if current time has passed the 8 minutes timeout after token requested in invisible/ visible interstitial page
            if(currentTimestamp > token_time)
            {
                console.log("token expired")
                regenerateAccessTokenAndApply(rsvpCode,url,postUrl);
            }
            else{
                console.log("Tokens active")
                sendtoEapply(applicant_request_token,postUrl);
            }
        });
    }
}
async function regenerateAccessTokenAndApply(rsvpCode, url, postUrl) {
    if (rsvpCode) {
        try {
            const data = {
                form_type: "rsvpCode",
                code: rsvpCode,
            };

            let response = await ajaxRequest(url, data, "POST");
            response = JSON.parse(response);
            if (response.success) {
                const access_token = response.prefill_info.applicant_request_token;
                sendtoEapply(access_token,postUrl);
            }
        } catch (error) {
            console.log(error);
        }
    }
    return null;
}
function sendtoEapply(access_token,postUrl)
{
    const postValues = [{
        name: "applicant_request_token",
        value: access_token,
    }];
    postData(postUrl, postValues);
}