<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-10 center-screen">
            <div class="card animated fadeIn w-100 p-3">
                <div class="card-body">
                    <h4>Sign Up</h4>
                    <hr/>
                    <div class="container-fluid m-0 p-0">
                        <div class="row m-0 p-0">
                            <div class="col-md-4 p-2">
                                <label>Email Address</label>
                                <input id="email" placeholder="User Email" class="form-control" type="email"/>
                            </div>
                            <div class="col-md-4 p-2">
                                <label>Full Name</label>
                                <input id="fullName" placeholder="Full Name" class="form-control" type="text"/>
                            </div>
                            <div class="col-md-4 p-2">
                                <label>Mobile Number</label>
                                <input id="mobile" placeholder="Mobile" class="form-control" type="mobile"/>
                            </div>
                            <div class="col-md-4 p-2">
                                <label>Password</label>
                                <input id="password" placeholder="User Password" class="form-control" type="password"/>
                            </div>
                        </div>
                        <div class="row m-0 p-0">
                            <div class="col-md-4 p-2">
                                <button onclick="onRegistration()" class="btn mt-3 w-100  bg-gradient-primary">Complete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>


    async  function onRegistration() {

        //catch the form value using dom
        let email = document.getElementById('email').value;
        let fullName = document.getElementById('fullName').value;
        let mobile = document.getElementById('mobile').value;
        let password = document.getElementById('password').value;


        //validate the value
        if(email.length === 0){
            errorToast("Fill-up Email Form");
        }
        else if(fullName.length === 0){
            errorToast("Fill-Up FirstName Form");
        }
        else if(mobile.length === 0){
            errorToast("Fill-Up Mobile Form");
        }
        else if(password.length === 0){
            errorToast("Fill-up Password Form");
        }
        else{

            try{
                showLoader();
                //using axios i post the form value in the backend
                let res = await axios.post('/UserRegistration',{
                    email : email,
                    fullName : fullName,
                    mobile : mobile,
                    password : password
                });
                hideLoader();
                if(res.status === 200 && res.data["status"] === "success"){
                    window.location.href = '/user-Login';
                    successToast(res.data["message"]);
                }else{
                    errorToast(res.data["message"]);
                }
            }catch (error){
                console.log(error);
            }
        }
    }
</script>
