/* Botão do menu */
var button = document.getElementById("#blog");
button.addEventListener('click', function(){
 aside();
    
});
function aside(){
    var blog = document.querySelector('.sidenav');
    if(blog.style.display === 'none'){
        blog.style.display = "block";
        
    }else {
        blog.style.display = "none";
        
    }
}