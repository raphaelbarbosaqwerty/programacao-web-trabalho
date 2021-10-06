// TODO - Vamos usar aqui para fazer as requisições
function goToContact() {
    location.href = "contact.php";
}

function routeToPost(id) {
    location.href = "post.php/?id=" + id;
}


function getPosts() {
    fetch('localhost/');
}