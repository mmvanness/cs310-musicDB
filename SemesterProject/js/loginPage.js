window.addEventListener("load", function() {
    var form = document.querySelector("#mainForm");
    form.addEventListener("submit", function() {
        alert("hello5");
        var requiredFields = document.querySelectorAll('.required');
        this.alert("hello1");
        for(i = 0; i < requiredFields.length; i++)
        {
            alert("hello");
            if (requiredFields[i].value == null || requiredFields[i].value == "")
            {   
                e.preventDefault();
                requiredFields[i].classList.add("error");
            }
            else {
                requiredFields[i].classList.remove("error");
            }
        }
    });
});