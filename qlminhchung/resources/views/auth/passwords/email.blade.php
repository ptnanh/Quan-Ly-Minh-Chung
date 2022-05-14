@extends('layouts.test')

@section('content')
<div class="container" style="margin-top: 30px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: #F2EEEE;">
                <div class="card-header" style="background: linear-gradient(-135deg, #c850c0, #4158d0); text-align: center; font-size: 30px;">Gửi Mật Khẩu</div>

                <div class="card-body" style="height: 190px;   border-radius: 0px 0px 15px 15px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="font-size: 20px;">Địa Chỉ E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Gửi Mật Khẩu Qua Email
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
