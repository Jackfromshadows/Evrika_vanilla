<!-- Видео
<section>
    <div class="container mb-5 ml-sm-auto">
        <iframe width="1140px" height="700px" src="./assets/img/https://www.youtube.com/embed/Ll4L-PI4HUc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>
-->
<section>
    <div class="container">
        <h1 class="text-center text-capitalize pt-5 text-success font-weight-bold "> Jaypee Universities </h1>
        <hr class=" w-25 mx-auto pt-5">
    </div>
    <div class="container">


        <div class="row mb-5 mx-auto" id="rows">

            <div class="col-lg-3 col-md-6 col-12" id="overlayss">

                <img src="./assets/img/hostel.jpg" class="img-fluid" width="100%" id="pic1">
                <div class="overlay ">

                    <div class="text"> JIIT</div>




                </div>

            </div>

            <div class="col-lg-3 col-md-6 col-12" id="overlayss2" >
                <img src="./assets/img/juit3.jpg"class="img-fluid" width="100%" id="pic2">
                <div class="overlay" >

                    <div class="text"> JUIT</div>


                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12" id="overlayss3">
                <img src="./assets/img/juet2.jpg" class="img-fluid"  width="100%" id="pic3">
                <div class="overlay" >

                    <div class="text"> JUET</div>


                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12" id="overlayss4">
                <img src="./assets/img/jua.jpg" class="img-fluid" width="100%" id="pic4" >
                <div class="overlay">

                    <div class="text"> JUA</div>


                </div>
            </div>
        </div>
    </div>

</section>
<section>

    <div class="container-fluid">
        <h1 class="text-center text-capitalize pt-5 text-success font-weight-bold " id="courses"> Courses for your bright future</h1>
        <hr class=" w-25 mx-auto pt-5 primary">

    </div>
    <div class="container-fluid" id="cards">
        <div class="row mb-5 mx-sm-auto mx-md-auto">
            <div class="col-lg-2 col-md-2 col-12">
                <div class="card "style="width:250px">
                    <img class="card-img-tops img-fluid" src="./assets/img/ing4.jpg" alt="Card image" >
                    <div class="card-body">
                        <h6 class="card-title  font-weight-light">UNDERGRADUATE B.TECH
                        </h6>
                        <hr>
                        <p class="card-text">Curriculum has been carefully designed to meet the objectives as mentioned earlier. We understand that in order to cater the jiit..</p>
                        <a href="#" class="btn btn-primary">READ MORE</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-12">
                <div class="card mx-auto my-auto"style="width:250px">

                    <img class="card-img-top img-fluid" src="./assets/img/img1.jpg" alt="Card image" >
                    <div class="card-body">

                        <h6 class="card-title font-weight-light">POST GRADUATE M. TECH
                        </h6>
                        <hr>
                        <p class="card-text">To equip the students with the ability & skills to analyze, design and develop computer system their applications. Curriculum...</p>
                        <a href="#" class="btn btn-primary">READ MORE</a>
                    </div>

                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-12">
                <div class="card mx-auto my-auto"style="width:250px">
                    <img class="card-img-top img-fluid" src="./assets/img/img3.jpg" alt="Card image">
                    <div class="card-body">
                        <h6 class="card-title  font-weight-light">INTEGRATED B.TECH-M.TECH
                        </h6>
                        <hr>
                        <p class="card-text">The 5 Year Integrated M.Tech Program leads to the simultaneous award of B.Tech and M.Tech degrees in Biotechnology. In addition...</p>
                        <a href="#" class="btn btn-primary">READ MORE</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-12">
                <div class="card mx-auto my-auto"style="width:250px">
                    <img class="card-img-top img-fluid" src="./assets/img/mba.jpg" alt="Card image" >
                    <div class="card-body">
                        <h6 class="card-title font-weight-light">MBA COLLEGE IN NOIDA
                        </h6>
                        <hr>
                        <p class="card-text">MBA program, offered by Jaypee Business School a constituent of JIIT, is a specially designed program to help transform students...</p>
                        <a href="#" class="btn btn-primary">READ MORE</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-12">
                <div class="card mx-auto my-auto"style="width:250px">
                    <img class="card-img-top img-fluid" src="./assets/img/img9.jpg" alt="Card image" >
                    <div class="card-body">
                        <h6 class="card-title font-weight-light">PHD
                        </h6>
                        <hr>
                        <p class="card-text">The award of the PhD degree by the University is in recognition of high academic achievements demonstrated by independent to help...</p>
                        <a href="#" class="btn btn-primary">READ MORE</a>

                    </div>
                </div>
            </div>
        </div>

    </div>








</section>
<script>
    // when we click on the thumbnail
    // we set the src attribute of the
    // bit image to be the same as the
    // src of the image we have clicked on
    // ("this"). This loads the same
    // image file into the big image
    $(".card-img-top").click(function(){
        $("#crop-img").attr('src',
            $(this).attr('src'));
    });
</script>







</body>
</html>