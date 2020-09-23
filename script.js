function triggerClick(event){
    document.querySelector('#profile-img');
}
function showImage(event){
    if(event.files[0]){
        var reader = new FileReader();
        reader.onload = function(event){
            document.querySelector('#profile-display').setAttribute('src',e.target.result);
        }
        reader.readAsDataURL(event.files[0]);
    }
}