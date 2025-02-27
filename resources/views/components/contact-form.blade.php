<!-- Page content-->
<section class="py-5">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                <h1 class="fw-bolder">Get in touch</h1>
                <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">

                    <form id="contactForm">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..."/>
                            <label for="name">Full name</label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" />
                            <label for="email">Email address</label>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="+01"/>
                            <label for="phone">Phone number</label>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem"></textarea>
                            <label for="message">Message</label>
                        </div>

                        <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button></div>

                    </form>
                </div>
            </div>
        </div>

</section>


<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    //using ajax i send post request to serve when user click the button

    //using js DOM i take the contact form
    let contactForm = document.getElementById('contactForm');
    //using when user submit the form this time addEvenListener run a anonomus function
    contactForm.addEventListener('submit', async (event) => {
        //Stop the reload the whole page, when i click the form button
        event.preventDefault();

        //pull the all value inside the form
        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let phone = document.getElementById('phone').value;
        let message = document.getElementById('message').value;


        //form validation
        if (name.length === 0) {
            alert('Name is not empty!');
        } else if (email.length === 0) {
            alert('Email is not empty!');
        } else if (phone.length === 0) {
            alert('Phone number is not empty!');
        }else if(message.length === 0){
            alert('Message is not empty!')
        }else {
            //create a json object
            let formData = {
                fullName: name,
                email: email,
                phone: phone,
                message: message,
            }

            //i create a route name "contactRequest"
            let URL = "/contactRequest";

            //show loader
            document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');

            //Now post this json object in server using axios
            let result = await axios.post(URL, formData);

            //close loader
            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');


            contactForm.reset();
        }







    });

</script>
