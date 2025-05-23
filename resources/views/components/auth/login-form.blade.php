<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 animated fadeIn col-lg-6 center-screen">
            <div class="card w-90 p-4">
                <div class="card-body">
                    <h4>SIGN IN</h4>
                    <br/>
                    <input id="email" placeholder="User Email" class="form-control" type="email"/>
                    <br/>
                    <input id="password" placeholder="User Password" class="form-control" type="password"/>
                    <br/>
                    <button onclick="SubmitLogin()" class="btn w-100 bg-gradient-primary">Next</button>
                    <hr/>
                    <div class="float-end mt-3">
                        <span>
                            <a class="text-center ms-3 h6" href="{{url('/user-Register')}}">Sign Up </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>


    async function SubmitLogin(){
        //using dom i catch the value of the form
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;

        //validation
        if(email.length === 0){
            errorToast("Email is required");
        }

        else if(password.length === 0){
            errorToast("Password is required");
        }
        else{
            showLoader();
            let res = await axios.post('/UserLogin',{
                email : email,
                password : password
            });
            hideLoader();
            if(res.status === 200 && res.data['status']==='success'){
                window.location.href = '/submitForm';
            }else{
                errorToast(res.data['message']);
            }
        }
    }

    SubmitLogin();

</script>
