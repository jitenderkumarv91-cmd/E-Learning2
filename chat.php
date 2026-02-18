<script>// ❗ FIX: variable name typo (seachBox → searchBox)
const searchBox = document.getElementById("searchBox");

// ❗ FIX: class se ek element lena tha (SVG click ke liye)
const searchBtn = document.querySelector(".search");

// ❗ FIX: aapke cards me class "Maincode" hai, "code" nahi
const codes = document.querySelectorAll(".Maincode");

// ❗ NEW: No result message element
const noResult = document.getElementById("noResult");

function searchItem(){
    const value = searchBox.value.toLowerCase().trim();
    let found = false; // ❗ NEW: track karega koi match mila ya nahi

    codes.forEach(code => {
        const key = code.id.toLowerCase(); // ❗ FIX: id ko lowercase

        if(value !== "" && key.includes(value)){
            code.classList.remove("hide"); // ❗ match mila → show
            found = true;

            // ❗ NEW: result ko search bar ke niche lana
            code.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        } else {
            code.classList.add("hide"); // ❗ baki sab hide
        }
    });

    // ❗ NEW: No result message logic
    if(!found && value !== ""){
        noResult.classList.remove("hide");
    } else {
        noResult.classList.add("hide");
    }
}

// ❗ FIX: search icon click
searchBtn.addEventListener("click", searchItem);

// ❗ FIX: keypress → lowercase 'k' hona chahiye
searchBox.addEventListener("keypress", function(event){
    if(event.key === "Enter"){
        searchItem();
    }
});
</script>
class
/* ❗ NEW: No Result Message Styling */
.no-result{
    margin-top: 110px;          /* search bar ke niche lane ke liye */
    text-align: center;
    color: white;
    font-size: 22px;
    font-weight: bold;
}

/* already hai, sirf confirm kar raha hoon */
.hide{
    display: none;
}
<!-- ❗ NEW: No Result Message (initially hidden) -->
<div id="noResult" class="no-result hide">
    No results found 😔
</div>
