var xhr = createXMLHttp();

function createXMLHttp() {
    var xmlhttp = null;
    if(window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return xmlhttp;
}

function savePhotobook() {
    if(xhr) {
        var url = "http://localhost/canvera/assets/save_album.php";
        xhr.onreadystatechange = serverRequest;
        xhr.open("POST", url, true);
        //xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send();
    } else {
        alert("cant create XMLHttpRequest Object");
        setTimeout(createXMLHttp, 1000);
    }
}

function serverRequest() {
    if(xhr.readyState == 2) {
        console.log("A request has been sent");
    } else if(xhr.readyState == 3) {
        console.log("Your request is processing");
    } else if(xhr.readyState == 4) {
        if(xhr.status == 200) {
            console.log("Response from server: "+xhr.statusText);
            var name = document.getElementById("name").value;
            var files = document.getElementsByName("images")[0];
            console.log(files);
        }
    }
    
    
}