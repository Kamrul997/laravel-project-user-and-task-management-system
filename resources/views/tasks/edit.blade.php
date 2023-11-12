@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main breadcrumb-main--table justify-content-sm-between ">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div class="d-flex align-items-center user-member__title">
                            <h4 class="text-capitalize">edit task</h4>
                        </div>
                    </div>
                    <div class="action-btn">
                        <a href="{{ route('task.index') }}" class="btn btn-primary">
                            Go Back
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-50">
            <div class="row justify-content-center">
                <div class="col-md-5 col-10">
                    <div class="mt-40 mb-50">
                        <div class="account-profile d-flex align-items-center mb-4 ">
                            <div class="ap-img pro_img_wrapper">
                                <input id="file-upload" type="file" name="fileUpload" class="d-none">
                                <!-- Profile picture image-->
                                <label for="file-upload">
                                    <img class="ap-img__main rounded-circle wh-120 bg-lighter d-flex"
                                        src="{{ asset('img/author/profile.png') }}" alt="profile">
                                    <span class="cross" id="remove_pro_pic">
                                        <img src="{{ asset('img/svg/camera.svg') }}" alt="camera" class="svg">
                                    </span>
                                </label>
                            </div>
                            <div class="account-profile__title">
                                <h6 class="fs-15 ms-20 fw-500 text-capitalize">profile photo</h6>
                            </div>
                        </div>
                        <div class="edit-profile__body">
                            <form>
                                <div class="form-group mb-25">
                                    <label for="name1">name</label>
                                    <input type="text" class="form-control" id="name1" placeholder="Duran Clayton">
                                </div>
                                <div class="form-group mb-25">
                                    <label for="name2">Email</label>
                                    <input type="email" class="form-control" id="name2"
                                        placeholder="sample@email.com">
                                </div>
                                <div class="form-group mb-25">
                                    <label for="phoneNumber5">phone number</label>
                                    <input type="tel" class="form-control" id="phoneNumber5"
                                        placeholder="+440 2546 5236">
                                </div>
                                <div class="form-group mb-25">
                                    <div class="countryOption">
                                        <label for="countryOption">
                                            country
                                        </label>
                                        <select class="js-example-basic-single js-states form-control" id="countryOption">
                                            <option value="JAN">event</option>
                                            <option value="FBR">Venues</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-25">
                                    <div class="cityOption">
                                        <label for="cityOption">
                                            city
                                        </label>
                                        <select class="js-example-basic-single js-states form-control" id="cityOption">
                                            <option value="JAN">event</option>
                                            <option value="FBR">Venues</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-25">
                                    <label for="name3">company name</label>
                                    <input type="text" class="form-control" id="name3" placeholder="Example">
                                </div>
                                <div class="form-group mb-25">
                                    <label for="phoneNumber2">Position</label>
                                    <input type="text" class="form-control" id="phoneNumber2" placeholder="Position">
                                </div>
                                <div class="form-group mb-25 form-group-calender">
                                    <label for="datepicker">Joining Date</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="datepicker"
                                            placeholder="Select date">
                                        <a href="#"><img class="svg" src="{{ asset('img/svg/calendar.svg') }}"
                                                alt="calendar"></a>
                                    </div>
                                </div>
                                <div class="form-group mb-25 status-radio">
                                    <label class="mb-15" for="phoneNumber2">status</label>
                                    <div class="d-flex">
                                        <div class="radio-horizontal-list d-flex flex-wrap">


                                            <div class="radio-theme-default custom-radio ">
                                                <input class="radio" type="radio" name="radio-optional" value=0
                                                    id="radio-hl1">
                                                <label for="radio-hl1">
                                                    <span class="radio-text">status</span>
                                                </label>
                                            </div>




                                            <div class="radio-theme-default custom-radio ">
                                                <input class="radio" type="radio" name="radio-optional" value=0
                                                    id="radio-hl2">
                                                <label for="radio-hl2">
                                                    <span class="radio-text">Deactivated</span>
                                                </label>
                                            </div>




                                            <div class="radio-theme-default custom-radio ">
                                                <input class="radio" type="radio" name="radio-optional" value=0
                                                    id="radio-hl3">
                                                <label for="radio-hl3">
                                                    <span class="radio-text">bloked</span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="button-group d-flex pt-25 justify-content-md-end justify-content-start">


                                    <button
                                        class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2 btn-sm">Submit
                                    </button>





                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection