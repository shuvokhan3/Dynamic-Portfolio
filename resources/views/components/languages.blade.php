<div  class="container px-5 my-5">
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <!-- Languages list-->
            <div class="card shadow border-0 rounded-4 mb-5">
                <div class="card-body p-5">

                <div class="d-flex align-items-center mb-4">
                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                </div>

                <div id="language" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


                </div>


                </div>
            </div>


        </div>
    </div>
</div>

<script>
    getLanguage();
    async function getLanguage(){
        let URL = "/languageData";
        let languageHtml = ' '
        try{

            let response = await axios.get(URL);

            response.data.forEach((item , index)=>{
                languageHtml +=(
                    ` <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">${item.name}</div></div>`
                )

                if((index + 1) % 3 === 0){
                    languageHtml += `<div class="w-100 d-none d-md-block mb-4"></div>`;
                }
            });

            document.getElementById('language').innerHTML = languageHtml;

        }catch (error){
            alert(error);
        }
    }
</script>
