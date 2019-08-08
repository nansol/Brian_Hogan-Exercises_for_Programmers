function showSuggestion(str){
    if(str.length == 0){
        document.getElementById('output').innerHTML = '';
    } else {
        // AJAX REQ
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById('output').innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "$list"+str, true);
        xmlhttp.send();
    }
}

