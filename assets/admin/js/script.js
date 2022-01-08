let btnDelete  =document.getElementsByClassName('btn-delete');

for(let i = 0; i < btnDelete.length; i++){
    btnDelete[i].addEventListener('click', function(){
        let self = this;
        if(confirm("delete?")){
            let id = this.getAttribute('data-id');
            // Creates variable id and sets it's value to attribute data-id
            
            let xhr = new XMLHttpRequest(); // Creates XHR object

            let data = new FormData(); 
            // Creates FormData object

            data.append("id", id);
            // Appends whatever id is to the key id in FormData object

            data.append('action', 'delete');
            // Appends delete to key action in FormData object

            xhr.open("POST", siteUrl + "admin/?page=services");
            // Opens POST request to particular URL

            xhr.send(data);

            xhr.onload = function(event){
                console.log(xhr.status);
                if(xhr.status == 200){
                    if(xhr.responseText = 1){
                        self.parentNode.parentNode.remove();
                    }
                }
            }
        }
    })
}