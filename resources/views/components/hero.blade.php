<!-- Header-->
<header class="py-2 ">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-12 col-xxl-6 mb-4 mb-xxl-0">
                <!-- Header text content-->
                <div class="text-center text-xxl-start">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-3">
                        <div id="KeyLine" class="text-uppercase"> </div>
                    </div>
                    <div id="title" class="fs-3 fw-light text-muted mb-2"> </div>
                    <h1 id="short_title" class="display-3 fw-bolder mb-4"><span class="text-gradient d-inline"></span></h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-center justify-content-xxl-start">
                        <a class="btn btn-primary btn-lg px-4 px-sm-5 py-2 me-sm-3 fs-6 fw-bolder" href="{{asset('/resume')}}">Resume</a>
                        <a class="btn btn-outline-dark btn-lg px-4 px-sm-5 py-2 fs-6 fw-bolder" href="{{asset('/project')}}">Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xxl-6">
                <div class="d-flex justify-content-center mt-4 mt-xxl-0">
                    <div class="profile" style="max-width: 80%;">
                        <img  class="profile-img img-fluid rounded"
                             style="width: 100%;
                                    height: auto;
                                    object-fit: cover;
                                    max-height: 600px;"
                             src="{{asset('assets/profile.png')}}"
                             alt="Profile" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    getHeroContent();
    async function getHeroContent(){
        try{
            let URL = "/heroData";
            let response = await axios.get(URL);

            let size = response.data.length;
            document.getElementById('KeyLine').innerHTML = response.data[0]['KeyLine'];
            document.getElementById('title').innerHTML = response.data[0]['title'];
            document.getElementById('short_title').innerHTML = response.data[0]['short_title'];
        }catch(error){
            alert(error);
        }
    }
</script>
