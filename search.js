const seachBox = 
document.getElementById("searchBox");
const search =
document.getElementsByClassName("search");
const codes = document.querySelectorAll(".code");
function searchItem(){
    const value =
    searchBox.value.toLowerCase().trim();

        codes.forEach(code => {
            const keys =
            code.getAttribute("id");

            if(keys.includes(value) && value !== "")
            {
                code.classList.remove("hide");
                code.scrollIntoView({
                    behavior : "smooth",
                    block : "start"
                });
                console.log("dfjvhwdibh");
            }
            else{
                code.classList.add("hide");
            }
        });
}
search.addEventListener("click", searchItem);

searchBox.addEventListener("Keypress", function(event){
    if(event.key === "Enter"){
        searchItem();
    }
});