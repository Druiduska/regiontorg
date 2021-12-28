
    <script>
    token={}
    
    async function f_enter(){
        const csrf_token = "{!!csrf_token()!!}";
//        debugger
        let s_login = document.getElementById('login').value
//        let s_email = document.getElementById('email').value
        let s_password = document.getElementById('password').value
        
        let formData = new FormData();
//        formData.append('_token', csrf_token);
        formData.append('name', s_login);
//        formData.append('email', s_email);
        formData.append('password', s_password);
        let rspns = await  fetch('api/auth/login', {
                method: 'POST',
                headers: {'X-Requested-With': 'XMLHttpRequest'}, // ajax request tag
                body: formData
        })
        let rslt = await rspns.json();
        if (rspns.status === 401 ){
            window.location.replace("/register");
        }

        token=rslt
    }
    
    async function f_register(){
//        const csrf_token = "{!!csrf_token()!!}";
        let s_login = document.getElementById('login').value
        let s_email = document.getElementById('email').value
        let s_password = document.getElementById('password').value

        let formData = new FormData();
//        formData.append('_token', csrf_token);
        formData.append('name', s_login);
        formData.append('email', s_email);
        formData.append('password', s_password);
        let rspns = await  fetch('api/auth/registration', {
                method: 'POST',
                headers: {'X-Requested-With': 'XMLHttpRequest'}, // ajax request tag
                body: formData
        });

    }
    
    
    async function f_get_me(){
        const csrf_token = "{!!csrf_token()!!}";

        let formData = new FormData();
        let rspns = await  fetch('api/auth/me', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Accept': 'application/json',
                    'Authorization': token.token_type + ' ' + token.access_token
                }, 
                body: formData
        });
        let rslt = await rspns.json();
        console.log(rslt)
    }
    
    async function f_logout(){
        let formData = new FormData();
        let rspns = await  fetch('api/auth/logout', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Accept': 'application/json',
                    'Authorization': token.token_type + ' ' + token.access_token
                }, 
                body: formData
        });
    }

    async function f_refresh(){
        let formData = new FormData();
        let rspns = await  fetch('api/auth/refresh', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Accept': 'application/json',
                    'Authorization': token.token_type + ' ' + token.access_token
                }, 
                body: formData
        });
        let rslt = await rspns.json();
        token=rslt;
    }


    async function f_proba(){
//        const csrf_token = "{!!csrf_token()!!}";

        let formData = new FormData();
//        formData.append('_token', csrf_token);
        formData.append('test_text', 'Слоники');
        let rspns = await  fetch('api/test/proba', {
                method: 'POST',
                headers: {
//                    'X-Requested-With': 'XMLHttpRequest', // ajax request tag
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Accept': 'application/json',
                    'Authorization': token.token_type + ' ' + token.access_token
                },
                body: formData
        });
    }
    
    async function f_proba_ssh(){
//        const csrf_token = "{!!csrf_token()!!}";

        let formData = new FormData();
//        formData.append('_token', csrf_token);
        formData.append('test_text', 'Слоники');
        let rspns = await  fetch('http://127.0.0.1:8015/api/proba', {
                method: 'POST',
                mode: 'cors',
//                cache: 'no-cache',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest', // ajax request tag
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Accept': 'application/json',
                    'Authorization': token.token_type + ' ' + token.access_token
                },
                body: formData
        });
    }

</script>
</html>
