
function senddata(rsvp)
{
	   try {
			
            var url = '../process.php'
            const data = {
               code: sanitizeString(rsvp),
               form_type: 'rsvpCode'

            }
            let response = await ajaxRequest(url, data, 'POST')
            response = JSON.parse(response)
            if (response.success) {
               console.log(postUrl[response.card_info])
               const postValues = [{name:"applicant_request_token","value":response.prefill_info.applicant_request_token},{name:"card_info","value":response.card_info}]
                url = postUrl[response.card_info];
                 postData(url, postValues)
            }else{
                  //show the error page
                  document.getElementById("card-section").style.display = "none";
                  document.getElementById("not-eligible").style.display = "block";
            }
         } catch (error) {
            console.log(error)
         }
}
