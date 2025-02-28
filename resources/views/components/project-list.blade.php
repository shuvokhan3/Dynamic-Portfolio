<!-- Projects Section-->
<section class="py-5" style="margin-top: 8rem;">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div id="project-list" class="col-lg-11 col-xl-9 col-xxl-8">



            </div>
        </div>
    </div>
</section>

<script>


    GetProjectList();



    async function GetProjectList(){
        let URL = "/ProjectListData";
        try{

            //show loader
            document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');
            let response = await axios.get(URL);
            //close loader
            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');



            response.data.forEach((item)=>{

                document.getElementById('project-list').innerHTML+=(
                    `
                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <img class="img-fluid w-100" style="max-height: 300px; object-fit: cover;" src="${item.thumbnailLink}" alt="..." />
                            <div class="p-4 p-lg-5">
                                <h2 class="fw-bolder">${item.title}</h2>
                                <p>${item.details}</p>
                                <a href="${item.previewLink}" target="_blank">
                                    <button class="btn btn-primary">Live Link</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                `
                )
            });

        }catch (error){
            alert('Error');
        }

    }
</script>
