var add_note = document.querySelector(".toAdd button");
var overlay = document.querySelector(".overlay");
var writenote = document.querySelector(".write-note");
add_note.addEventListener('click',function(){
    if(overlay.classList.contains("add-note-interface") == true && writenote.classList.contains("add-note-interface") == true){
        overlay.classList.remove("add-note-interface");
        writenote.classList.remove("add-note-interface");
    }else{
        overlay.classList.add("add-note-interface");
        writenote.classList.add("add-note-interface");
    }
})
overlay.addEventListener('click',function(){
    overlay.classList.remove("add-note-interface");
    writenote.classList.remove("add-note-interface");
})