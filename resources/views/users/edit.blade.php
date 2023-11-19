@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main breadcrumb-main--table justify-content-sm-between ">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div class="d-flex align-items-center user-member__title">
                            <h4 class="text-capitalize">edit user</h4>
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

                        <div class="edit-profile__body">
                            <form method="POST" action="{{ route('user.update') }}">
                                @csrf
                                <input id="user-id" name="id" value="{{ $user->id }}" type="text" hidden>
                                <div class="edit-profile__body">
                                    <div class="edit-profile__body">
                                        <div class="form-group mb-20">
                                            <label for="name">name</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                                        </div>
                                        <div class="form-group mb-20">
                                            <label for="email">Email Adress</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
                                        </div>

                                        <div class="form-group mb-25">
                                            <label for="user_type" class="il-gray fs-14 fw-500 align-center mb-10">User Type</label>
                                            <select class="form-control px-15" name="user_type" id="user_type">
                                                <option value="">Select User Type</option>
                                                <option value="admin" {{ $user->user_type === 'admin' ? 'selected': '' }}>Admin</option>
                                                <option value="guest" {{ $user->user_type === 'user' ? 'selected': '' }}>User</option>
                                            </select>
                                         </div>
                                        {{-- <div class="admin-condition">
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="admin-1">
                                                <label for="admin-1">
                                                    <span class="checkbox-text">Creating an account means you’re okay
                                                        with our <a href="#" class="color-primary">Terms of
                                                            Service</a> and <a href="#"
                                                            class="color-primary">Privacy
                                                            Policy</a>
                                                        my preference</span>
                                                </label>
                                            </div>
                                        </div> --}}
                                        <div
                                            class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                            <button type="submit"
                                                class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn ">
                                                Uppdate
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
