function getLife()
{
    //pour appeler une API on utilise la méthode fetch()    
    fetch('api.php').then((resp) => resp.json()).then(function(res)
    {
        // data est la réponse http de notre API.                
        modiflife("life",res[0]);    
    })
}

function modiflife(id,text)
{
    var e = document.getElementById(id).innerHTML = text;

}