const valid_signup = new JustValidate("#signup");
valid_signup
    

    .addField("#email", [
        {
            rule: "required"
        },
        {
            rule: "email"
        },
        // { 
        //     validator: (value) => () => {
        //         return fetch("email_exist.php?email=" + encodeURIComponent(value))
        //                .then(function(response) {
        //                    return response.json();
        //                })
        //                .then(function(json) {
        //                    return json.valid;
        //                });

        //     },
        //     errorMessage: "This email is no longer available"
   
        // }
        {
            
            validator: (value) => {
                return async () => {
                    const response = await fetch(`email_exist.php?email=${encodeURIComponent(value)}`);
                    const json = await response.json();
                    return json.valid;
                };
            }, errorMessage: "This email was used."
        
        }
       
            
        
    ])
    
    .addField("#name", [
        {
            rule: "required"
        }
    ])

    .addField("#password", [
        {
            rule: "required"
        },
        {
            rule: "password"
        }
        
    ])
     .addField("#password_confirm", [
        {
            rule: "required"
        },
        {
            rule: "password"
        },
        {
            validator: (value, fields) => {return value === fields["#password"].elem.value;},
            errorMessage: "Passwords should be the same"
        }
    ])
     .onSuccess((event) => {
        document.getElementById("signup").submit();
    });