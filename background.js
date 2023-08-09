chrome.extension.onRequest.addListener(function(prediction){
    if (prediction == 1){
        // customize the alert message
        var alertMsg = "                                      ⚠ WARNING ⚠ \n This site may be a phishing site. Proceed with EXTREME caution!";

        // show the customized alert message
        var confirmation = confirm(alertMsg);

        // if user clicks OK, open the index.html page in the same tab/window
        if (confirmation) {
            window.open("http://localhost/Phishing%20Extension/","_blank");
        }
    }  
});