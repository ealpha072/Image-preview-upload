function triggerClick(e){
    document.querySelector('#profile-img').click();
}
function showImage(e){
    if(e.files[0]){
        var reader = new FileReader();
        reader.onload = function(e){
            document.querySelector('#profile-display').setAttribute('src',e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
    }
}
