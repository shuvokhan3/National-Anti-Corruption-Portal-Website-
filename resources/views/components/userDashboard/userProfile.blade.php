<div class="container">
    <div class="row ">
        <div class="col-md-10 col-lg-15 ">
            <div class="card animated fadeIn w-100 p-3">
                <div class="card-body">
                    <h4>Profile</h4>
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
                                <button onclick="updateUserProfile()" class="btn mt-3 w-100 bg-gradient-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<script>--}}

{{--    getUserData();--}}

{{--    async function getUserData(){--}}
{{--        try{--}}
{{--            showLoader();--}}
{{--            let res = await axios.get("/getUserProfileData");--}}
{{--            hideLoader();--}}
{{--            if(res.status === 200 && res.data['status'] === "success"){--}}
{{--                let data = res.data['value'];--}}
{{--                document.getElementById('firstName').value = data['firstName'];--}}
{{--                document.getElementById('lastName').value = data['lastName'];--}}
{{--                document.getElementById('mobile').value = data['mobile'];--}}
{{--                document.getElementById('password').value = data['password'];--}}
{{--            }--}}

{{--        }catch (e) {--}}
{{--            console.log(e);--}}
{{--        }--}}
{{--    }--}}


{{--    async function updateUserProfile(){--}}
{{--        //catch all necessry date from frontend using DOM--}}
{{--        let firstName = document.getElementById('firstName').value;--}}
{{--        let lastName = document.getElementById('lastName').value;--}}
{{--        let mobile = document.getElementById('mobile').value;--}}
{{--        let password = document.getElementById('password').value;--}}

{{--        try{--}}

{{--            let res = await axios.post('/upDateUserProfileData',{--}}
{{--                'firstName' : firstName,--}}
{{--                'lastName' : lastName,--}}
{{--                'mobile' : mobile,--}}
{{--                'password' : password--}}
{{--            });--}}

{{--            if(res.status === 200 && res.data['status'] === "success"){--}}
{{--                successToast(res.data['message']);--}}
{{--            }else{--}}
{{--                errorToast(res.data['message']);--}}
{{--            }--}}


{{--        }catch (error){--}}
{{--            errorToast("Response Not Success");--}}
{{--        }--}}

{{--    }--}}
{{--</script>--}}
