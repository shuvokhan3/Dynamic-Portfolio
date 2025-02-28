<!-- About Section-->
<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                    <div id="about"></div>
                    <div id="link" class="d-flex justify-content-center fs-2 gap-4">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    getAbout();
    getSocialLink();
    async function getAbout(){
        let URL = '/aboutData';
        try{

            let response = await axios.get(URL);
            let aboutData = ' ';

            response.data.forEach((item)=>{
                document.getElementById('about').innerHTML+=(
                    `<p class="lead fw-light mb-4">${item.title}</p>
                    <p class="text-muted">${item.details}</p>`
                )
            });
        }catch (error){
            alert(error);
        }

    }

    async function getSocialLink(){
        let URL = '/socialLinksData';
        try{
            let response = await axios.get(URL);

            response.data.forEach((item)=>{
                document.getElementById('link').innerHTML +=(
                    `   <a class="text-gradient" href="${item.twitterLink}" target="_blank"><i class="bi bi-twitter"></i></a>
                        <a class="text-gradient" href="${item.linkedinLink}" target="_blank"><i class="bi bi-linkedin"></i></a>
                        <a class="text-gradient" href="${item.githubLink}" target="_blank"><i class="bi bi-github"></i></a>`
                )
            })
        }catch (error){

        }
    }
</script>
