<div class="container px-5 my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <!-- Experience Section-->
            <section>
                <div class="d-flex align-items-center justify-content-between mb-4 flex-column flex-sm-row">
                    <h2 class="text-primary fw-bolder mb-3 mb-sm-0">Experience</h2>
                    <a class="btn btn-primary px-3 px-sm-4 py-2 py-sm-3" href="#!">
                        <div class="d-inline-block bi bi-download me-2"></div>
                        Download Resume
                    </a>
                </div>

                <!-- Experience Card 1-->
                <div id="experience" class="card shadow border-0 rounded-4 mb-5">

                </div>

            </section>
        </div>
    </div>
</div>

<script>
    //call the function
    getExperience();
    //getExperience() function fatch data from database and show in the frontend
    async function getExperience(){
        //routing url
        let URL = "/experienceData";

        try{
            //show loader
            document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');


            let response = await axios.get(URL);

            response.data.forEach((item)=>{
                document.getElementById('experience').innerHTML += (
                    `<div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="bg-light p-4 rounded-4">
                                    <div class="text-primary fw-bolder mb-2">${item.duration}</div>
                                    <div class="small fw-bolder">${item.title}</div>
                                    <div class="small text-muted">${item.designation}</div>
                                    <div class="small text-muted">${item.location}</div>
                                </div>
                            </div>
                            <div class="col-lg-8"><div>${item.details}</div></div>
                        </div>
                    </div>`
                )

            });

        }catch (error){
            alert(error);
        }

    }
</script>
