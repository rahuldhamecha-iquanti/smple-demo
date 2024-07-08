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