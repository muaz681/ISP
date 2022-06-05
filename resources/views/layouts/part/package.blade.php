<section class="packages-area ptb-100 pb-0 jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('https://templates.envytheme.com/bahama/default/assets/img/packages-bg.jpg')">
    <div class="container">
        <div class="section-title">
            <span>
                <span class="icon">
                    @include('layouts.svg.pack')
                </span>
                
                <span>Cinebaz Packages</span>
            </span>
            <h2>The tree core price you it just valuable but not at many prices</h2>
        </div>

        <div class="row">
            <div class="col-md-8 m-auto">
                <nav class="mb-4">
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Package</button>
                      <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Reconnection</button>
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-packages-box">
                                    <h3>TV Plus for Best Familytime</h3>
                
                                    <a href="#" class="btn btn-primary">View Plans</a>
                
                                    <div class="image-box">
                                        <img src="{{ url('assets/frontend/images/1.png') }}" alt="image">
                                        <img src="{{ url('assets/frontend/images/1.png') }}" alt="image">
                                    </div>
                                </div>
                            </div>
                
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-packages-box">
                                    <h3>Talk Weekends & Unlimited</h3>
                
                                    <a href="#" class="btn btn-primary">View Plans</a>
                
                                    <div class="image-box">
                                        <img src="{{ url('assets/frontend/images/1.png') }}" alt="image">
                                        <img src="{{ url('assets/frontend/images/1.png') }}" alt="image">
                                    </div>
                                </div>
                            </div>
                
                            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                                <div class="single-packages-box">
                                    <h3>Cinebaz WIFI for More Power</h3>
                
                                    <a href="#" class="btn btn-primary">View Plans</a>
                
                                    <div class="image-box">
                                        <img src="{{ url('assets/frontend/images/1.png') }}" alt="image">
                                        <img src="{{ url('assets/frontend/images/1.png') }}" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="reconnection-form-container">
                                    <!-- Dropown Picker for Relocation and returning customer -->
                                    <form class="cinebaz-common-form  reconnection-form" id="reconnectionForm">
                                        <div class="form-row">
                                            <div class="form-group col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                                <div class="custom-select-box">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Relocation</option>
                                                        <option value="1">Returning Customer</option>
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </form>

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
                                                <label for="exampleFormControlInput1" class="form-label">Current Your ID</label>
                                                <input type="text" name="current_id" class="form-control" id="exampleFormControlInput1" placeholder="Your ID" required="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Contact Number</label>
                                                <input type="text" name="contact_number" class="form-control" placeholder="01XXXXXXXXX" required="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Previous Address</label>
                                            <div class="custom-input-group">
                                                <textarea class="form-control" name="previous_address" rows="3" style="height: 101px;"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Current Address</label>
                                            <div class="custom-input-group">
                                                <textarea class="form-control" name="current_addess" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@mail.com">
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
                        </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-12">
                
            </div>
        </div>
    </div>
</section>