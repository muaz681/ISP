<section class="new-connection pb-5">
    <div class="container">
        <div class="section-title">
            <span>
                <span class="icon">
                    @include('layouts.svg.pack')
                </span>
                
                <span>Cinebaz Connection</span>
            </span>
            <h2>Need New Connection?</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="reconnection-form-container">

                    <!-- Start Form for Relocation -->
                    <form class="cinebaz-common-form relocation-form" id="relocationForm" style="display: block">
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Your Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                                <input type="text" name="Phone_number" class="form-control" placeholder="01XXXXXXXXX" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@mail.com">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <div class="custom-input-group">
                                <textarea class="form-control" name="address" rows="3" style="height: 101px;"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group col-sm-12">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Selected Package</label>
                                <div class="custom-select-box">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>10 mbps</option>
                                        <option value="1">20 mbps</option>
                                        <option value="2">30 mbps</option>
                                        <option value="3">40 mbps</option>
                                        <option value="4">Corporate Basic</option>
                                        <option value="5">Corporate Premium</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <div class="submit-btn-box text-center">
                                <button class="btn btn-outline btn-round">Submit</button>
                            </div>
                        </div>
                        
                    </form>
                    <!-- End /Form for Relocation -->
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="section-title">
                    <h2>24/7 Support Service</h2>
                    <span>
                        <span class="icon">
                            @include('layouts.svg.telephone')
                        </span>
                        <span>16335 / 09678-123123</span>
                    </span>
                </div>
                <div class="about-main-image">
                    <img src="https://www.link3.net/assets/img/backgrounds/support-image.jpg" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>